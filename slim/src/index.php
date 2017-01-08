<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        use \Psr\Http\Message\ServerRequestInterface as Request;
        use \Psr\Http\Message\ResponseInterface as Response;

        use Monolog\Logger;

        require 'vendor/autoload.php';

        date_default_timezone_set("UTC");

        $config['displayErrorDetails'] = true;
        $config['addContentLengthHeader'] = false;

        $config['db']['host']   = "127.0.0.1";
        $config['db']['user']   = "test1";
        $config['db']['pass']   = "test1";
        $config['db']['dbname'] = "POSTONFACE";

        $config['system']['folderPath'] = "/Users/user/Sites/slim/src/usersfolders/";

        $app = new \Slim\App(["settings" => $config]);
        $container = $app->getContainer();

        $container['errorHandler'] = function ($c) {
            return function ($request, $response, $exception) use ($c) {
                return $c['response']->withStatus(500)
                                     ->withHeader('Content-Type', 'text/html')
                                     ->write('Something went wrong!');
            };
        };

        $container['logger'] = function($c) {
            $logger = new \Monolog\Logger('my_logger');
            $file_handler = new \Monolog\Handler\StreamHandler("../logs/app.log");
            $logger->pushHandler($file_handler);
            return $logger;
        };

        $container['db'] = function ($c) {
            $db = $c['settings']['db'];
            $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'], $db['user'], $db['pass']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        };

        $container['system'] = function ($c) {
            return $c['settings']['system'];
        };

        //Test APIs
        $app->get('/', function (Request $request, Response $response) {
                $db = $this->db;
                $result = $db->query('SELECT * FROM USERS;' );
                $arr = $result->fetch(PDO::FETCH_ASSOC);
                echo json_encode($arr);
                return $response;
        });

        //APIs
        $app->get('/hello/{name}', function(Request $request, Response $response) {
                $name = $request->getAttribute('name');
                $response->getBody()->write("Hello, $name");
                return $response;
        });
        
        $app->post('/initApp', function (Request $request, Response $response){
                //POST or PUT
                $this->logger->addInfo("/initApp start");
                $allPostPutVars = $request->getParsedBody();
                $accessToken = $allPostPutVars['authResponse']['accessToken'];
                $userID = $allPostPutVars['authResponse']['userID'];
                $obj = json_decode(isTokenValid($accessToken));
                $resUserId = $obj->{'id'};
                $name = $obj->{'name'};

                $arrResult = null;
                //check if UserId and ResponseUserId are matched.
                if($resUserId == $userID){
                        //$data = fetchUserData($userID);
                        $sth = $this->db->prepare("SELECT * FROM USERS where _id='$userID'");
                        $sth->execute();
                        $data = $sth->fetchAll();
                        
                        $creationDate = date('Y\-m\-d\ h:i:s');
                        $datetime = new DateTime();
                        $userDirectory = $this->system["folderPath"].$userID;
                        
                        //$lastProcessed = $datetime->format('Y\-m\-d\ h:i:s');
                        
                        if (!file_exists($userDirectory)) {
                                mkdir($userDirectory, 0777, true);
                        }

                        if(!$data) {
                                try {
                                        $db = $this->db;
                                        $sqlUsers = "INSERT INTO USERS (_id, name, type, paid, active, creationDate) VALUES (:userID, :name, 'free', false, true, :creationDate)";
                                        $stmt = $db->prepare($sqlUsers);
                                        $stmt->bindParam("userID", $userID);
                                        $stmt->bindParam("name", $name);
                                        $stmt->bindParam("creationDate", $creationDate);
                                        $stmt->execute();
                                        
                                        $sqlFolders = "INSERT INTO FOLDERS (_id, folder, folder_id, creationDate) VALUES (:userID, :folder, null, :creationDate)";
                                        $stmt = $db->prepare($sqlFolders);
                                        $stmt->bindParam("userID", $userID);
                                        $stmt->bindParam("folder", $userID);
                                        $stmt->bindParam("creationDate", $creationDate);
                                        $stmt->execute();

                                        $arrResult = array('status' => "success", 'id' => $userID);
                                } catch(PDOException $e) {
                                        $arrResult = array('status' => "failed", 'error' => json_encode($e->getMessage()));
                                        //echo json_encode($e->getMessage());
                                }
                        }
                        else {
                                $arrResult = array('status' => "success", 'id' => $userID);
                        }
                }
                else {
                        $arrResult = array('status' => "failed", 'error' => 'wrong user');
                }
                $body = $response->getBody();
                $body->write(json_encode($arrResult));
                
                return $response->withHeader(
                        'Content-Type',
                        'application/json'
                )->withBody($body);


        });


        $app->post('/publish', function (Request $request, Response $response){
                //POST
                $this->logger->addInfo("/publish start");
                $allPostVars = $request->getParsedBody();
                
                $this->logger->addInfo("getParsedBody:: ".$request->getParsedBody());
                
                $accessToken = $allPostVars['data'];
                $accessToken = $allPostVars['at'];
                $userID = $allPostPutVars['id'];
                $obj = json_decode(isTokenValid($accessToken));
                $resUserId = $obj->{'id'};
                $name = $obj->{'name'};
                //check if UserId and ResponseUserId are matched.
                if($resUserId == $userID){
                        $this->logger->addInfo("getParsedBody:: ".$request->getParsedBody());
                }
                
        });

        //run application
        $app->run();

        function isTokenValid($userToken) {
                $facebookAccessTokenEP = "https://graph.facebook.com/me?access_token=$userToken";
                
                //suppress the warning by putting an @ in front of the file_get_contents
                $data = @file_get_contents($facebookAccessTokenEP);
                return $data;
        }

        function fetchUserData($userID){
                $db = $container->get('db');
                $sth = $db->prepare("SELECT * FROM USERS where _id='$userID'");
                $sth->execute();
                $data = $sth->fetchAll();
                return $data;
        }
