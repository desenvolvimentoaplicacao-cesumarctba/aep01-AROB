<?php
// PHP Hotel San Germain 
// Copyright (c) All Rights Reserved, NetArt Media 2003-2017
// Check http://www.sangermain.com/php-hotel-san-germain for demos and information
// Released under the MIT license
?><?php
define("IN_LOGIN_SCRIPT","1");
error_reporting(0);
session_start();

require("../include/SiteManager.class.php");

//create a new site manager object
$website = new SiteManager();

//load the website settings
$website->LoadSettings();

//load the template
$website->LoadTemplate();

//set the page to be the log in page
$website->SetPage("login");

//render the website and display the content
$website->Render();
?>