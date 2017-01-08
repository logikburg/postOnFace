--------
MySQL
--------
SET PASSWORD = PASSWORD('r@@7’);

SELECT User FROM mysql.user;

CREATE USER 'test1'@'localhost' IDENTIFIED BY 'test1’;
GRANT ALL PRIVILEGES ON * . * TO ’test1'@'localhost’;
FLUSH PRIVILEGES;
CREATE DATABASE postonface;
show tables;
CREATE TABLE USERS (_id VARCHAR(18), name VARCHAR(40), type VARCHAR(20),  paid BOOLEAN, active BOOLEAN, action_count int, creationDate DateTime);

_id = Facebook userID;
name = Facebook name;
paid = “true/false" 
type = “free, 100, 1000, unlimited” -> One month subscription based
active = “true/ false"
paid = “Y”
action_count = 0;
lastProcessed = last action processed

ALTER TABLE USERS ADD action_count int;
ALTER TABLE USERS ADD lastProcessed Timestamp;
_id             name            type    paid    active      creationDate
279145699154513 User On Test    FREE    false   false       2016-12-05


INSERT INTO USERS VALUES
    ("279145699154513", "User On Test", "FREE", false,  false,  2016-12-05)

CREATE TABLE USERS (_id VARCHAR(18), folder VARCHAR(18),  background_id VARCHAR(20), active BOOLEAN, action_count int, creationDate DateTime);
CREATE TABLE CONTENTS (_id VARCHAR(18), folder VARCHAR(18),  background_id int, generated_image_path TEXT, creationDate DateTime);
CREATE TABLE ACTIONS (_id VARCHAR(18), time DateTime);

-------
Apache
-------
sudo /usr/sbin/apachectl start
