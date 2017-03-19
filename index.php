<?php
//pre start-loading
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Title</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="description" content="">
    <meta name="author" content="Sandeep Mogla">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->

    <!--link href='https://fonts.googleapis.com/css?family=Merienda+One|Aldrich|Nothing+You+Could+Do|Crete+Round|Karla:400,700|Original+Surfer|Salsa|Marmelad|Averia+Sans+Libre:700|Righteous|Sancreek|Alegreya+SC:900|EB+Garamond' rel='stylesheet' type='text/css' -->
    <link href='https://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css'>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script type="text/javascript" src="js/fabric.js"></script>
    <script type="text/javascript" src="js/appeditor.js"></script>

    <!--        <script type="text/javascript" src="js/app.editor.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.miniColors.min.js"></script>

    <link href="css/jquery.miniColors.css" type="text/css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-social.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />

    <style type="text/css">

        html, body {
            height: 100%;
        }

        body {
            background: url(img/confectionary.png) repeat;
        }

        @font-face {
          font-family: 'Aclonica';
          src: url('fonts/Aclonica.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Mangal';
            src: url('fonts/Mangal.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Champagne';
            src: url('fonts/Champagne.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Tusj';
            src: url('fonts/Tusj.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Oswald';
            src: url('fonts/Oswald.ttf') format('truetype');
        }

        @font-face {
            font-family: 'RougeScript';
            src: url('fonts/RougeScript.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Seasrn';
            src: url('fonts/Seasrn.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Capture';
            src: url('fonts/Capture.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Walterturncoat';
            src: url('fonts/Walterturncoat.ttf') format('truetype');
        }

        .navbar-custom {
            background-color: #000000;
        }

        .color-preview {
            border: 1px solid #CCC;
            margin: 2px;
            zoom: 1;
            vertical-align: top;
            display: inline-block;
            cursor: pointer;
            overflow: hidden;
            width: 20px;
            height: 20px;
        }

        .rotate {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
            -ms-transform: rotate(90deg);
        }

        .Aclonica{
            font-family: "Aclonica";
        }

        .Champagne{
            font-family: "Champagne";
            font-size: 18px;
        }

        .Tusj{
            font-family: "Tusj";
        }

        .Oswald{
            font-family: "Oswald";
        }

        .RougeScript{
            font-family: "RougeScript";
        }

        .Seasrn{
            font-family: "Seasrn";
        }

        .Capture{
            font-family: "Capture";
        }

        .Walterturncoat{
            font-family: "Walterturncoat";
        }

        .Mangal {
            font-family: "Mangal";
        }

        .Arial {
            font-family: "Arial";
        }

        .Helvetica {
            font-family: "Helvetica";
        }

        .MyriadPro {
            font-family: "Myriad Pro";
        }

        .Verdana {
            font-family: "Verdana";
        }

        .Georgia {
            font-family: "Georgia";
        }

        .Courier {
            font-family: "Courier";
        }

        .ComicSansMS {
            font-family: "Comic Sans MS";
        }

        .Monaco {
            font-family: "Monaco";
        }

        .Optima {
            font-family: "Optima";
        }

        .Plaster {
            font-family: "Plaster";
        }

        .Engagement {
            font-family: "Engagement";
        }

        .well {
            background-color: #ffffff;
        }

        .well.padding {
            padding: 12px;
        }

        .well.thumbs {
            padding: 10px 12px 32px 12px;
            /*height: auto;
            max-height:400px;*/
            overflow: auto;
            border: 1px solid #337ab7;
            text-align: center;
        }

        .well.thumbs.filters{

        }

        .btn-group.open .dropdown-toggle{
            box-shadow: none;
            -webkit-box-shadow:none;
        }

        .btn-default:active, .btn-default:hover, .btn-default:focus, .open>.dropdown-toggle.btn-default
        {
            background-color: #ffffff;
        }

        .list-group-item{
            cursor: pointer;
        }

        .list-group-item:focus, .list-group-item:hover {
            background: #e5e5e5;
        }

        .layoutThumbs .list-group-item:focus, .layoutThumbs .list-group-item:hover {
            background: #ffffff;
        }

        .layoutThumbs .list-group-item{
          padding: 0px;
          border: none;
          border-top-left-radius: 0px;
          border-top-right-radius: 0px;
        }

        .well.thumbs.backgrounds{
            margin-bottom: 8px;
            height: 100%;
        }

        .well.layoutThumbs {
            padding: 5px;
            height: auto;
            /*                        max-height: 360px;*/
            overflow: auto;
        }

        .well.classicThumbs {
          padding: 8px;
          height: auto;
          max-height: 150px;
          overflow: auto;
        }

        hr {
            margin: 8px 0;
        }

        textarea.custome {
            width: 100%;
            height: 40px;
            max-height: 500px;
            background: #ffffff;
        }

        .btn-radio {
            width: 100%;
        }

        .img-radio {
            opacity: 1;
            margin-bottom: 5px;
        }

        .space-20 {
            margin-top: 20px;
        }

        .parent {
            width: 100%;
            border: 1px solid #868686;
            float: left;
            padding: 5px;
        }

        .selection-container {
            margin: 0px 0 0 0
        }

        label div.sel-content h5 {
            font-family: 'Telex', sans-serif;
            color: #77aaff;
            font-size: 12px;
            padding-left: 42px;
            padding-top: 5px;
        }

        .searchable-container label.btn-checkbox.active {
            color: #FFFFFF;
        }

        .selection-container label h5.active {
            color: #FFFFFF;
        }

        .selection-container label.btn-checkbox {
            width: 90%;
            /*border: 2px solid #efefef;
            margin: 5px;
            box-shadow: 3px 3px 4px 0 #bdbdbd;*/
        }

        .selection-container label .sel-content {
            width: 100%;
            border-style: solid;
            border-color: #b1b1b1;
            background-color: #f7f7f7;
            height: 48px;
            text-align: left;
        }

        .selection-container label.btn-checkbox.active {
            background: #9cf;
        }

        .selection-container .btn-group {
            width: 90%
        }

        .img-art {

        }

        .bg-thumbnail {
            padding: 2px;
            margin-top: 2px;
            margin-bottom: 2px;
            cursor:pointer;
            height: 110px;
            width: 100%;
        }

        .bg-thumbnail.active {
            /*background-color: #0088cc;*/
            border: 4px solid #337ab7;
        }

        .img-thumbnail{
            padding: 0px;
        }

        .img-thumbnail.active {
            background-color: #7af;
            border: 1px solid #7af;
        }

        .span6 {
            width: auto;
        }

        li.list-group-item {
            all: initial;
            position: relative;
            display: block;
            margin-bottom: -1px;
        }

        .navbar-right {
          margin-top: 5px;
          float: right!important;
          margin-right: -15px;
          margin-bottom: 0px;
        }

        .fa {
            font-size: 14px;
        }

        .btn-group>.btn {
            line-height: 22px;
        }

        .btn-group>.btn:not(:first-child) {
            background: #dddddd;
        }

        .btn-group>.btn:first-child {
            margin-left: 0;
            margin-right: -2px;
            background: #dddddd;
        }

        .bg-filter .btn-group>.btn {
            background: #ffffff;
        }

        .bg-filter .list-group h5 {
          clear: right;
          margin-right: 0px;
          float: left;
          margin-top: 6px;
          margin-left: 2px;
          font-size: 0.85em;
          font-weight: 500;
        }

        #login-dp {
            min-width: 250px;
            padding: 14px 14px 0;
            overflow: hidden;
            background-color: rgba(255, 255, 255, .8);
        }

        #login-dp .help-block {
            font-size: 12px
        }

        #login-dp .bottom {
            background-color: rgba(255, 255, 255, .8);
            border-top: 1px solid #ddd;
            clear: both;
            padding: 14px;
        }

        #login-dp .social-buttons {
            margin: 12px 0
        }

        #login-dp .social-buttons a {
            width: 49%;
        }

        #login-dp .form-group {
            margin-bottom: 10px;
        }

        #font-family {
          padding-right: 2px;
        }

        .btn-fb {
            color: #fff;
            background-color: #3b5998;
        }

        .btn-fb:hover {
            color: #fff;
            background-color: #496ebc
        }

        .btn-tw {
            color: #fff;
            background-color: #55acee;
        }

        .btn-tw:hover {
            color: #fff;
            background-color: #59b5fa;
        }

        .custom-row-padding {
            margin-left: 0px;
            margin-right: 30px
        }

        .left-pane{
            padding-left:10px;
            /*padding-right:10px;*/
            width: 240px;
            margin: 0px 0px 0px 0px;
        }

        .center-pane {
            padding-left:0px;
            padding-right:0px;
            min-width: 500px;
            width:480px;
        }

        .right-pane {
          padding-left: 0px;
          padding-right: 0px;
          min-width: 166px;
          width: 166px;
        }

        .dropdown-menu {
          overflow: scroll;
          max-height: 300px;
        }

        #loadingDiv{
            position:absolute;
            top:0px;
            right:0px;
            width:100%;
            height:100%;
            background-color:#f4f4f4;
            background-image:url('./img/hourglass.gif');
            background-repeat:no-repeat;
            background-position:center;
            z-index:10000000;
            opacity: 0.4;
            filter: alpha(opacity=40); /* For IE8 and earlier */
            text-align: center;
        }

        #loadingDiv .loadingDiv-text{
          position:relative;
          z-index:10000000;
          width: 100%;
          height: 100%;
          top:50%;
        }
       ul {
          list-style-type: none;
        }

        li {
          display: inline-block;
        }

        input[type="checkbox"][id^="cb"] {
          display: none;
        }

        label {
          border: 2px solid #fff;
          padding: 0px;
          display: block;
          position: relative;
          margin: 7px;
          cursor: pointer;
        }

        label:before {
          background-color: white;
          color: white;
          content: " ";
          display: block;
          border-radius: 50%;
          border: 1px solid grey;
          position: absolute;
          top: -5px;
          left: -5px;
          width: 25px;
          height: 25px;
          text-align: center;
          line-height: 28px;
          transition-duration: 0.4s;
          transform: scale(0);
        }

        label img {
          height: 100px;
          width: 100px;
          transition-duration: 0.2s;
          transform-origin: 50% 50%;
        }

        :checked + label {
          border-color: #fff;
        }

        :checked + label:before {
          content: "✓";
          background-color: #337ab7;
          transform: scale(1);
          z-index: 1;
        }

        :checked + label img {
          transform: scale(0.9);
          z-index: -1;
        }

        .btn-group .dropdown-toggle.override-dropdown-toggle
        {
            -webkit-box-shadow: none;
            box-shadow: none;
            /*max-width: 80px;*/
            margin-right: -2px;
            background: #DDDDDD;
        }

        .btn.override-dropdown-toggle .caret
        {
          margin-left: 4px;
        }

        .dropdown-menu li{
              display: inline;
        }

        .nav>li>a{
          padding: 6px 12px;
        }

        #background .panel-body {
            padding: 0px 2px 2px 2px;
            text-align: center;
            overflow: auto;
            max-height: 340px;
            height: 100%;
        }

        #template .panel-body {
            padding: 0px 2px 2px 2px;
            text-align: center;
            overflow: auto;
            max-height: 340px;
            height: 100%;
        }

        .panel-primary>.panel-body {
            padding: 8px 8px 0px 8px;
            max-height:250px;
            text-align: center;
            overflow: auto;
            height: 100%;
        }

        .panel-primary>.panel-body.bg-filter{
            overflow:visible;
        }

        .panel-body>h5 {
            font-size:12px;
            margin-top:0px;
            margin-bottom:0px;
            color:#7af;
        }

        .panel-body>ul{
            margin-top: 8px;
        }

        .panel-body .well{
          background-color: #ffffff;
          min-height: 20px;
          padding: 4px;
          margin-bottom: 24px;
          border: none;
          box-shadow:none;
        }

        .img-art label img{
            height: 34px;
            width: 34px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        .img-art label{
            margin: 0px;
        }

        .list-group{
              margin-bottom: 8px
        }
        .panel {
          margin-bottom: 8px;
        }

        .well.text-edit{
          position: absolute;
          height:94px;
          width:480px;
          margin-top: 20px;
          padding-top:8px;
          display: none;
        }

        .well.image-filter{
          position: absolute;
          height:94px;
          width:480px;
          margin-top: 20px;
          padding-top:8px;
        }
        .sel-content img {
          cursor: pointer;
          width: 34px;
          float:left;margin-left: 5px;
        }
        .btn.active, .btn:active{
          box-shadow: none;
          -webkit-box-shadow:none;
        }
        .layoutThumbs .btn{
          border-radius:0px;
          padding: 3px 3px;
        }

        .nav>li>a {
            padding: 6px 12px;
            margin-right: 0px;
        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
          color: #fff;
          background-color: #337ab7;
        }
        .custom-nav-margin-bottom {
            margin-bottom: -4px;
        }
        .nav-tabs{
          border-bottom: 6px solid #337ab7;
        }

        .footer {
          padding-top: 10px;
          color: #777;
          border-top: 1px solid #e5e5e5;
          margin-top: 30px;
        }

        .container{
          //width: 100%;
          min-height: 500px;
          height: 100%;
          width: 992px !important;
        }

        /*  */
        .dropdown {
          background: #fff;
          border: 1px solid #ccc;
          border-radius: 4px;
          width: 145px;
          margin-top: 10px;
          margin-bottom: 10px;
        }

        .dropdown-menu>li>a {
            color:#428bca;
        }

        .dropdown-menu>li>*:active {
          border: #074e90 solid 2px;
          margin-left: 2px;
          margin-right: 2px;
        }
        .dropdown ul.dropdown-menu {
            border-radius:4px;
            box-shadow:none;
            margin-top:20px;
            width:300px;
        }
        .dropdown ul.dropdown-menu:before {
            content: "";
            border-bottom: 10px solid #fff;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
            position: absolute;
            top: -10px;
            right: 16px;
            z-index: 10;
        }
        .dropdown ul.dropdown-menu:after {
            content: "";
            border-bottom: 12px solid #ccc;
            border-right: 12px solid transparent;
            border-left: 12px solid transparent;
            position: absolute;
            top: -12px;
            right: 14px;
            z-index: 9;
        }

        #texteditor>.btn {
            padding: 6px 10px;
        }

        .preview{
          width: 990px;
          margin: 0px auto;
        }

        .i {
            width: 22px;
            height: 23px;
            display: block;
            background: url(img/icons.png) no-repeat;
        }

        .i-send-backward {
            background-position: -80px 0;
        }

        .i-bring-foreward {
            background-position: -54px 0;
        }

        .navbar-header{
            float: left;
        }
    </style>
</head>

<body>

  <div id="loadingDiv">
    <span class="loadingDiv-text"><br>please wait .... </span>
  </div>
    <div class="container-fixed preview">
          <nav class="navbar navbar-default">
              <div class="row custom-row-padding">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <a class="navbar-brand" href="#">PostOnFace (alpha 1.0)</a>
                  </div>

                  <ul class="nav navbar-nav navbar-right">
                      <li style="line-height: 36px;padding-right: 8px;   color: #1d2129;font-weight: 700;">
                          <p>
                              <button type="button" id="download" name="download" class="btn btn-success btn-sm" onclick="shareDownload(event)">
                                      <span class="glyphicon glyphicon-download"></span> Download
                              </button>

                              <button type="button" id="share" name="share" class="btn btn-success btn-sm" onclick="shareDownload(event)">
                                      <span class="glyphicon glyphicon-share"></span> Share
                              </button>
                          </p>
                      </li>
                      <!-- <li>
                          <p class="navbar-default navbar-right">
                              <a class="btn btn-block btn-social btn-sm btn-facebook" style="display:none;" onclick="loginApp()">
                                  <i class="fa fa-facebook"></i>Sign in with Facebook</a>
                          </p>
                      </li> -->
                  </ul>
              </div>
          </nav>
        <div class="container">
            <div class="row" style="margin: 0 auto;">
                <div class="col-xs-3 col-xs-offset-1 left-pane">
                    <div class="tabbable">
                        <!-- Only required for left/right tabs -->
                        <ul class="nav nav-tabs custom-nav-margin-bottom">
                            <li class="active"><a href="#background" data-toggle="tab">Background</a></li>
                            <li><a href="#template" data-toggle="tab">Template</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- Icons -->
                            <div class="tab-pane active" id="background">
                                <div class="well thumbs backgrounds">
                                  <h5 style="font-size:12px;margin-top:0px;color:#7af;">Select a background image</h5>
                                  <div class="panel-body">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/31592-FX-6-0-12-6-8-0.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/38396-FX-6-0-0-0-6-0.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/31033851_d0b396825e_b.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/202796162_f433aefa7a_b.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/1801-colored-pencils-forming-a-circle-pv.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/2181-closeup-of-frozen-water-pv.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/9093-a-town-street-during-a-snowstorm-pv.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/9273-wind-turbines-in-winter-pv.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/10691-a-snowflake-background-pv.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/18293-FX-6-0-12-6-8-0.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/27219-FX-6-0-12-6-8-0.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/32288-FX-6-0-4-0-0-0.jpg">
                                    <img class="img-polaroid bg-thumbnail" src="bg_thumb/1755-magnifying-glass-on-a-white-background-pv.jpg">
                                  </div>
                                </div>
                                <!-- <hr>
                                <button class="btn btn-primary">Upload Background</button> -->
                            </div>
                            <div class="tab-pane" id="template">
                              <div class="well thumbs">
                              <h5 style="font-size:12px;margin-top:0px;color:#7af;">Select any template below</h5>
                              <div class="panel-body">
                                <span>no template defined </span>
                                <!-- <img click="getTemplate(1)" class="img-polaroid bg-thumbnail" src="img/image1.jpg">
                                <img click="getTemplate(2)" class="img-polaroid bg-thumbnail" src="img/image7.jpg">
                                <img click="getTemplate(3)" class="img-polaroid bg-thumbnail" src="img/image8.jpg">
                                <img click="getTemplate(4)" class="img-polaroid bg-thumbnail" src="img/image2.jpg">
                                <img click="getTemplate(5)" class="img-polaroid bg-thumbnail" src="img/image3.jpg">
                                <img click="getTemplate(6)" class="img-polaroid bg-thumbnail" src="img/image4.jpg">
                                <img click="getTemplate(7)" class="img-polaroid bg-thumbnail" src="img/image5.jpg">
                                <img click="getTemplate(8)" class="img-polaroid bg-thumbnail" src="img/image6.jpg">
                                <img click="getTemplate(9)" class="img-polaroid bg-thumbnail" src="img/image5.jpg">
                                <img click="getTemplate(10)" class="img-polaroid bg-thumbnail" src="img/image6.jpg">
                                <img click="getTemplate(11)" class="img-polaroid bg-thumbnail" src="img/image5.jpg">
                                <img click="getTemplate(12)" class="img-polaroid bg-thumbnail" src="img/image6.jpg"> -->
                              </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-5 center-pane">
                    <div align="center" style="min-height: 36px;">
                        <div class="row">
                            <div class="btn-group inline pull-left" id="texteditor" style="display:none;left:70px;top: -5px;">
                                <div class="btn-group">
                                      <button id="font-family" class="btn dropdown-toggle override-dropdown-toggle" data-toggle="dropdown" type="button" title="Font Style">
                                          Arial<span class="caret" style="margin-left: 7px;"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
                                          <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFont('Aclonica');" class="Aclonica">Aclonica</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFont('Champagne');" class="Champagne">Champagne</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFont('Tusj');" class="Tusj">Tusj</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFont('Oswald');" class="Oswald">Oswald</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFont('RougeScript');" class="RougeScript">RougeScript</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFont('Seasrn');" class="Seasrn">Seasrn</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFont('Capture');" class="Capture">Capture</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFont('Walterturncoat');" class="Walterturncoat">Walterturncoat</a></li>
                                      </ul>
                                </div>
                                <div class="btn-group">
                                      <button id="font-size" class="btn dropdown-toggle override-dropdown-toggle" data-toggle="dropdown" type="button" title="Font Size">
                                          24<span class="caret" style="margin-left: 6px;"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="font-size-X">
                                          <li><a tabindex="-1" href="#" onclick="setFontSize(14);" class="fontSize">14</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFontSize(18);" class="fontSize">18</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFontSize(24);" class="fontSize">24</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFontSize(36);" class="fontSize">36</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFontSize(48);" class="fontSize">48</a></li>
                                          <li><a tabindex="-1" href="#" onclick="setFontSize(72);" class="fontSize">72</a></li>
                                      </ul>
                                </div>

                                <button id="text-bold" class="btn" data-original-title="Bold">
                                        <i class="fa fa-bold" aria-hidden="true"></i>
                                </button>

                                <button id="text-italic" class="btn" data-original-title="Italic">
                                        <i class="fa fa-italic" aria-hidden="true"></i>
                                </button>

                                <!-- <button id="text-strike" class="btn" title="Strike" style="">
                                        <i class="fa fa-strikethrough" aria-hidden="true"></i>
                                </button> -->

                                <button id="text-underline" class="btn" title="Underline" style="">
                                        <i class="fa fa-underline" aria-hidden="true"></i>
                                </button>

                                <button id="text-left" class="btn" title="Left align" style="">
                                        <i class="fa fa-align-left" aria-hidden="true"></i>
                                </button>

                                <button id="text-center" class="btn" title="Center Align" style="">
                                        <i class="fa fa-align-center" aria-hidden="true"></i>
                                </button>

                                <button id="text-right" class="btn" title="Right Align" style="">
                                        <i class="fa fa-align-right" aria-hidden="true"></i>
                                </button>

                                <a class="btn custom-bg" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color">
                                    <input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000">
                                </a>

                                <!-- <a class="btn custom-bg" href="#" rel="tooltip" data-placement="top" data-original-title="Text Background">
                                    <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff">
                                </a> -->


                                <!-- a class="btn custom-bg" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color">
                                    <input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000">
                                </a -->

                                <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
                            </div>
                            <div class="pull-right" align="" id="imageeditor" style="display:none;position: absolute; ">
                                <div class="btn-group" style="left: 185px;top: -5px;">
                                    <button class="btn" id="bring-to-front" title="Bring Frontward">
                                            <i class="i i-bring-foreward" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn" id="send-to-back" title="Send Backward">
                                            <i class="i i-send-backward" aria-hidden="true"></i>
                                    </button>
                                    <button id="remove-selected" class="btn" title="Delete selected item">
                                            <i class="fa fa-trash" aria-hidden="true" style="height: 20px;font-size: 15px;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--	EDITOR      -->
                    <!-- 480 x 320 facebook posting-->
                    <!-- <div style="background-color: #ffffff; position: relative; top: 10px; height:320px;width:480px;"> -->
                        <div id="drawingArea" style="z-index: 10;border: #cecece dotted 3px;background-color: #ffffff;height:326px;width:486px;">
                            <canvas id="tc" width="480" height="320" class="hover"></canvas>
                        </div>
                    <!-- </div> -->

                      <div class="well text-edit">
                        <!--span class="text-left" style="margin:0 0 5px;"><strong>Change Language</strong></span>
                        <div class="selectContainer">
                            <select name="language" class="language-control" style="margin-bottom:0px;height: 26px;width:100%;" onchange="lc_onChange(event)">
                                                                        <option value="english">English</option>
                                                                        <option value="hindi">English to Hindi</option>
                                                                        <option value="punjabi">English to Punjabi</option>
                                                                        <option value="marathi">English to Marathi</option>
                                                                </select>
                        </div>
                        <p style="font-size: 10px; margin: 0 0 0px;">* For another language, Type in English and Press Space it will convert automatically.</p -->

                        <span class="text-left" style="margin:0 0 5px;"><strong>Change your text</strong></span>
                        <textarea id="text-string" cols="180" rows="2" name="data" class="custome" placeholder="add text here..." style="line-height: 1.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px;height: 50px;"></textarea>

                        <div class="jsapi-code">

                            <meta charset="utf-8">
                            <style>
                                textarea {
                                    width: 95%;
                                    height: 40px;
                                    max-height: 300px;
                                    background: #f8f8f8;
                                }
                            </style>
                            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                            <script type="text/javascript">
                                // Load the Google Transliterate API
                                google.load("elements", "1", {
                                    packages: "transliteration"
                                });

                                var control;
                                var options;

                                function lc_onChange(event) {
                                    var lan = [];
                                    if (event.currentTarget.selectedIndex == 0) {
                                        if (control != null) {
                                            control.disableTransliteration();
                                        }
                                        return;
                                    } else if (event.currentTarget.selectedIndex == 1) {
                                        if (control) {
                                            control.enableTransliteration();
                                            control.setLanguagePair(
                                                google.elements.transliteration.LanguageCode.ENGLISH,
                                                google.elements.transliteration.LanguageCode.HINDI);

                                            return;
                                        }
                                        lan = [google.elements.transliteration.LanguageCode.HINDI];
                                    } else if (event.currentTarget.selectedIndex == 2) {
                                        if (control) {
                                            control.enableTransliteration();
                                            control.setLanguagePair(
                                                google.elements.transliteration.LanguageCode.ENGLISH,
                                                google.elements.transliteration.LanguageCode.PUNJABI);

                                            return;
                                        }
                                        lan = [google.elements.transliteration.LanguageCode.PUNJABI];
                                    } else if (event.currentTarget.selectedIndex == 3) {
                                        if (control) {
                                            control.enableTransliteration();
                                            control.setLanguagePair(
                                                google.elements.transliteration.LanguageCode.ENGLISH,
                                                google.elements.transliteration.LanguageCode.MARATHI);

                                            return;
                                        }
                                        lan = [google.elements.transliteration.LanguageCode.MARATHI];
                                    }

                                    options = {
                                        sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                                        destinationLanguage: lan,
                                        shortcutKey: 'ctrl+g',
                                        transliterationEnabled: true
                                    };

                                    control =
                                        new google.elements.transliteration.TransliterationControl(options);

                                    control.makeTransliteratable(['text-string']);

                                }

                                function onLoad() {
                                    var options = {
                                        sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                                        destinationLanguage: [google.elements.transliteration.LanguageCode.PUNJABI],
                                        shortcutKey: 'ctrl+g',
                                        transliterationEnabled: true
                                    };

                                    var control =
                                        new google.elements.transliteration.TransliterationControl(options);

                                    control.makeTransliteratable(['data']);
                                }
                            </script>
                            <script src="https://www.google.com/uds/?file=elements&amp;v=1&amp;packages=transliteration" type="text/javascript"></script>
                            <link href="https://www.google.com/uds/api/elements/1.0/7ded0ef8ee68924d96a6f6b19df266a8/transliteration.css" type="text/css" rel="stylesheet">
                            <script src="https://www.google.com/uds/api/elements/1.0/7ded0ef8ee68924d96a6f6b19df266a8/transliteration.I.js" type="text/javascript"></script>
                            <script src="https://www.google.com/uds/?file=elements&amp;v=1&amp;packages=transliteration" type="text/javascript"></script>
                            <link href="https://www.google.com/uds/api/elements/1.0/7ded0ef8ee68924d96a6f6b19df266a8/transliteration.css" type="text/css" rel="stylesheet">
                            <script src="https://www.google.com/uds/api/elements/1.0/7ded0ef8ee68924d96a6f6b19df266a8/transliteration.I.js" type="text/javascript"></script>
                            <link href="https://www.google.com/uds/api/elements/1.0/7ded0ef8ee68924d96a6f6b19df266a8/transliteration.css" type="text/css" rel="stylesheet">
                            <script src="https://www.google.com/uds/api/elements/1.0/7ded0ef8ee68924d96a6f6b19df266a8/transliteration.I.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                function printTextArea() {
                                    childWindow = window.open('', 'childWindow', 'location=yes, menubar=yes, toolbar=yes');
                                    childWindow.document.open();
                                    childWindow.document.write('<html><head></head><body>');
                                    childWindow.document.write(document.getElementById('data').value.replace(/\n/gi, '<br>'));
                                    childWindow.document.write('</body></html>');
                                    childWindow.print();
                                    childWindow.document.close();
                                    childWindow.close();
                                }
                            </script>

                            <form id="etoh">
                                <table style="bgcolor:red;border:0; border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td colspan="4">
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                    </div>
                  </div>
                </div>
                <div class="col-xs-2 right-pane">
                  <div class="panel panel-primary">
                        <div class="panel-body">
                          <h5 style="font-size:12px;margin-top:0px;margin-bottom:0px;color:#7af;">Select to Insert Texts</h5>
                          <div class="layoutThumbs selection-container">
                             <ul class="list-group">
                                <li class="list-group-item">
                                   <label class="btn btn-checkbox" data-value="1">
                                      <div class="sel-content">
                                         <img class="img-responsive" src="img/header.png">
                                         <!--                                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>-->
                                         <h5>Header</h5>
                                      </div>
                                   </label>
                                </li>
                                <li class="list-group-item">
                                   <label class="btn btn-checkbox" data-value="2">
                                      <div class="sel-content">
                                         <img class="img-responsive" src="img/body.png">
                                         <!--                                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>-->
                                         <h5>Body</h5>
                                      </div>
                                   </label>
                                </li>
                                <li class="list-group-item">
                                   <label class="btn btn-checkbox" data-value="3">
                                      <div class="sel-content">
                                         <img class="img-responsive" src="img/footer.png">
                                         <!--                                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>-->
                                         <h5>Signature</h5>
                                      </div>
                                   </label>
                                </li>
                             </ul>
                          </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                      <div class="panel-body bg-filter">
                        <h5 style="font-size:12px;margin-top:0px;margin-bottom:0px;color:#7af;">Apply background filters</h5>
                        <div class="btn-group" style="width: 100%;">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            style="width: 100%;text-align: left;margin-top: 8px;margin-bottom: 8px;height: 40px;">
                              <img src="img/icons/none.png" class="img-circle" style="float: left;margin: -2px 5px 0px -5px;height:30px;width:30px;"/>
                              <h5 class="label-primary" style="
                                  color: #77aaff;
                                  width: 70px;
                                  clear: right;
                                  margin-right: 0px;
                                  float: left;
                                  margin-top: 6px;
                                  margin-left: 2px;
                                  background-color: #ffffff;
                                  font-size: 0.85em;
                                  font-weight: 500;">None
                              </h5>
                              <span class="caret" style="float: right;
                                margin-top: 10px;
                                margin-right: -4px;">
                              </span>
                            </button>
                            <div class="list-group dropdown-menu" role="menu" style="
                                padding: 0px;
                                margin: -7px -4px;
                                max-height:200px;">
                              	<div class="list-group-item active" data-value="none" style="height: 46px;">
                                  <img src="img/icons/none.png" class="img-circle" style="float: left;margin: -2px 5px 0px -5px;height:30px;width:30px;">
                                  <h5>None
                                  </h5>
                              	</div>
                                <div class="list-group-item" data-value="lblurred" style="height: 46px;">
                                  <img src="img/icons/lblur.png" class="img-circle" style="float: left;margin: -2px 5px 0px -5px;height:30px;width:30px;">
                                  <h5>Normal Blur</h5>
                              	</div>
                                <div class="list-group-item" data-value="sblurred" style="height: 46px;">
                                  <img src="img/icons/sblur.png" class="img-circle" style="float: left;margin: -2px 5px 0px -5px;height:30px;width:30px;">
                                  <h5>Strong Blur</h5>
                              	</div>
                                <div class="list-group-item" data-value="bright" style="height: 46px;">
                                  <img src="img/icons/bright.png" class="img-circle" style="float: left;margin: -2px 5px 0px -5px;height:30px;width:30px;">
                                  <h5>Bright</h5>
                              	</div>
                                <div class="list-group-item" data-value="lcontrast" style="height: 46px;">
                                  <img src="img/icons/lcontrast.png" class="img-circle" style="float: left;margin: -2px 5px 0px -5px;height:30px;width:30px;">
                                  <h5>Light Contrast</h5>
                              	</div>
                                <div class="list-group-item" data-value="scontrast" style="height: 46px;">
                                  <img src="img/icons/scontrast.png" class="img-circle" style="float: left;margin: -2px 5px 0px -5px;height:30px;width:30px;">
                                  <h5>Contrast</h5>
                              	</div>
                                <div class="list-group-item" data-value="greyscale" style="height: 46px;">
                                  <img src="img/icons/grayscale.png" class="img-circle" style="float: left;margin: -2px 5px 0px -5px;height:30px;width:30px;">
                                  <h5>Grayscale</h5>
                              	</div>
                              </div>
                            <!-- <ul class="dropdown-menu" role="menu">
                              <li class="list-group-item active">Cras justo odio</li>
                                <li>
                                  <div class="span2">
                                        <img src="img/thumbs-up-clipart-100x100.png" width="35" height="35"/>
                                        <label>test</label>
                                  </div>
                                </li>
                            </ul> -->
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-body">
                                <h5 style="font-size:12px;margin-top:0px;margin-bottom:0px;color:#7af;">Select to insert A Icon</h5>
                                <ul class="well classicThumbs">
                                  <li class="img-art">
                                    <input type="checkbox" id="cb1">
                                    <label for="cb1">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/smile.png">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb21">
                                    <label for="cb21">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/star2.png">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb22">
                                    <label for="cb22">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/oriental.png">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb2">
                                    <label for="cb2">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/dead-min.jpg">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb3">
                                    <label for="cb3">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/eh-min.jpg">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb6">
                                    <label for="cb6">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/follow_the_sign-min.jpg">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb7">
                                    <label for="cb7">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/heart_PNG702-min.jpg">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb8">
                                    <label for="cb8">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/in_love-min.jpg">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb9">
                                    <label for="cb9">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/make_fun-min.jpg">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb10">
                                    <label for="cb10">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/to_sulk-min.jpg">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb11">
                                    <label for="cb11">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/you_like_my_teeths-min.jpg">
                                    </label>
                                  </li>
                                  <li class="img-art">
                                    <input type="checkbox" id="cb12">
                                    <label for="cb12">
                                      <img style="cursor:pointer;" class="img-art img-thumbnail" src="clipart_thumb/you_make_me_hurt-min.jpg">
                                    </label>
                                  </li>
                                </ul>
                                <!-- <hr>
                                <button class="btn btn-primary">Upload Icon</button> -->
                        </div>
                    </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /container -->

        <!-- Footer ================================================== -->
        <footer class="footer custom-row-padding">
            <div class="text-center">
              <p>© 2016 postonface.com</p>
            </div>
        </footer>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        // This is called with the results from from FB.getLoginStatus().
        function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);

            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
                // Logged into your app and Facebook.
                _dload = true;
                _at = response.authResponse.accessToken;
                _uid = response.authResponse.userID;
                return _dload;
            } else if (response.status === 'not_authorized') {
                // The person is logged into Facebook, but not your app.
                _dload = false;
                return _dload;
            } else {
                // The person is not logged into Facebook, so we're not sure if
                // they are logged into this app or not.
                _dload = false;
                return _dload;
            }
        }

        // This function is called when someone finishes with the Login
        // Button.  See the onlogin handler attached to it in the sample
        // code below.
        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }

        window.fbAsyncInit = function() {
            FB.init({
                appId: '224508574574142',
                cookie: true, // enable cookies to allow the server to access
                // the session
                xfbml: true, // parse social plugins on this page
                version: 'v2.8' // use graph api version 2.8
            });

            // Now that we've initialized the JavaScript SDK, we call
            // FB.getLoginStatus().  This function gets the state of the
            // person visiting this page and can return one of three states to
            // the callback you provide.  They can be:
            //
            // 1. Logged into your app ('connected')
            // 2. Logged into Facebook, but not your app ('not_authorized')
            // 3. Not logged into Facebook and can't tell if they are logged into
            //    your app or not.
            //
            // These three cases are handled in the callback function.

            FB.getLoginStatus(function(response) {
                if (statusChangeCallback(response)) {
                    $(".btn-facebook").hide();
                    checkAuth(response);
                    //                                        $.ajax({
                    //                                                type: "POST",
                    //                                                url: "http://localhost/~user/authenticate.php",
                    //                                                data: response,
                    //                                                dataType: "application/json",
                    //                                                cache: false,
                    //                                                success: function(data) {
                    //                                                        console.log(data);
                    //                                                }
                    //                                        });
                } else {
                    $(".btn-facebook").show();
                }
            });

        };

        function checkAuth(userdata) {
            $.ajax({
                type: "POST",
                //url: "http://localhost/~user/posta/public/initApp",
                url: "http://diy-clientfeeds.rhcloud.com/initApp",
                //url: "/~user/slim/initApp",
                data: userdata,
                dataType: "application/x-www-form-urlencoded",
                //Do not cache the page
                cache: false,
                //success
                success: function(data) {
                    console.log(data);
                }
            });

        }

        function logoutApp() {
            FB.logout(function(response) {
                console.log('logout Successfully! ' + response.name);
            });
        }

        function loginApp() {
            FB.login(function(response) {
                console.log('Welcome! ' + response);
                checkAuth(response);
                _dload = true;
                $(".btn-facebook").hide();
                _at = response.authResponse.accessToken;
            }, {
                scope: 'publish_actions',
                return_scopes: true
            });
        }

        var _dload = false;
        var _at;
        var _reqData = {};
        var _uid;

        function shareDownload(event) {
            if (_dload) {
                if (("download" == event.target.id) ||
                    ("download" == event.target.name)) {
                    console.log("download");
                } else if (("share" == event.target.id) ||
                    ("share" == event.target.name)) {
                    onSelectedCleared();
                    canvas.deactivateAll().renderAll();
                    __qData = canvas.toObject();
                    _reqData.data = __qData;
                    _reqData.at = _at;
                    _reqData.id = _uid;
                    $.ajax({
                        type: "POST",
                        //url: "http://localhost:9124/api/jsonToImage",
                        //contentType: "plain/text; charset=utf-8",
                        //dataType: "text",
                        data: _reqData,
                        cache: false,
                        //url: "/~user/slim/publish",
                        url: "http://diy-clientfeeds.rhcloud.com/publish",
                        success: function(data) {
                            if(data.status == "success")
                            {
                              var p = data.path;
                              pitf(p);
                            }
                            console.log("publish::success " + data);
                        }
                    });
                    console.log("publish::_reqData " + _reqData);
                    //pitf(_at);
                    //var imageData = canvas.toDataURL('png');
                    //imageData = imageData.replace("data:image/png;base64,", "");
                    //postImageToFacebook(_at);
                }
            } else {

            }
        }

        // Load the SDK asynchronously
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "http://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Here we run a very simple test of the Graph API after login is
        // successful.  See statusChangeCallback() for when this call is made.
        function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function(response) {
                console.log('Successful login for: ' + response.name);
                //                                document.getElementById('status').innerHTML = // 'Thanks for logging in, ' + response.name + '!';
            });
        }

        function postImageToFacebook(token) {
            var imageData = canvas.toDataURL("image/png");
            try {
                blob = dataURItoBlob(imageData);
            } catch (e) {
                console.log(e);
            }
            var fd = new FormData();
            fd.append("access_token", token);
            fd.append("source", blob);
            fd.append("no_story", true);

            // Upload image to facebook without story(post to feed)
            $.ajax({
                url: "https://graph.facebook.com/me/photos?access_token=" + token,
                type: "POST",
                data: fd,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    console.log("success: ", data);

                    // Get image source url
                    FB.api(
                        "/" + data.id + "?fields=images",
                        function(response) {
                            if (response && !response.error) {
                                //console.log(response.images[0].source);

                                // Create facebook post using image
                                FB.api(
                                    "/me/feed",
                                    "POST", {
                                        "picture": response.images[0].source,
                                        "link": window.location.href,
                                        "privacy": {
                                            value: 'SELF'
                                        }
                                    },
                                    function(response) {
                                        if (response && !response.error) {
                                            /* handle the result */
                                            console.log("Posted story to facebook");
                                            console.log(response);
                                        }
                                    }
                                );
                            }
                        }
                    );
                },
                error: function(shr, status, data) {
                    console.log("error " + data + " Status " + shr.status);
                },
                complete: function(data) {
                    console.log('Post to facebook Complete');
                }
            });
        }

        // Convert a data URI to blob
        function dataURItoBlob(dataURI) {
            var byteString = atob(dataURI.split(',')[1]);
            var ab = new ArrayBuffer(byteString.length);
            var ia = new Uint8Array(ab);
            for (var i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }
            return new Blob([ab], {
                type: 'image/png'
            });
        }

        function pitf(p) {
            FB.ui({
                    method: 'feed',
                    //picture: 'https://d3ijcis4e2ziok.cloudfront.net/engaging-images-backgrounds/batch-2-full-size/36.jpg',
                    picture: p,
                    caption: "PostOnFace.com"
                },
                function(response) {
                    console.log("response " + response);
                });
        }

        $(document).on({
          ajaxStart: function(event)
          {
            console.log("ajaxStart");
            $("#loadingDiv").show();
          },
          ajaxStop: function(event) {
            console.log("ajaxStop");
            $("#loadingDiv").hide();
          }
        });

    </script>
</body>

</html>

<?php
//post
?>
