<?php
/**
 * Initiation File
 * Including All base classes as well as config file
 */

//Include Config file
	
	require_once(dirname(__FILE__) . "/config.php");
//Include general function of the app
	include_once(dirname(__FILE__) . "/functions/security.php");
	include_once(dirname(__FILE__) . "/functions/security.php");

//Include layout of the page with css and Js no need to includes this anymore on pages	
	include_once(dirname(dirname(__FILE__))."/templates/layout.php");


/*
if(DEVELOPER_MODE){
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
}*/

<<<<<<< HEAD
function LoadClass($className){
if (file_exists(class_path."/".$className.".php")) {
	include class_path."/".$className.".php";}else{echo "CLASS NOT EXIST";}} //Load classes by name only 
=======
function myclass($ch){return class_path."/".$ch.".php";} //add class by only name class,no need to define extension
//Auto load classes,Add all ur classess here 
	require_once(myclass("users"));
>>>>>>> 95b0ac13d954e3aebb524f1b9cc0834489b6cad3

/* --------------------------------------------------------*/
//Auto load classes
LoadClass("class.users");
		

