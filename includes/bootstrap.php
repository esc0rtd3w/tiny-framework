<?php
/**
 * Initiation File
 * Including All base classes as well as config file
 */

//Include Config file
	
	require_once(dirname(__FILE__) . "/config.php");
/*
if(DEVELOPER_MODE){
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
}*/

function myclass($ch){return class_path."/".$ch.".php";} //add class by only name class,no need to define extension
//Auto load classes,Add all ur classess here 
	require_once(myclass("users"));

		

