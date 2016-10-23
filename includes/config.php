<?php

//1 #### Mysql database settings
    $dbConfig["server"]="localhost";
    $dbConfig["username"]="";
    $dbConfig["password"]="";
    $dbConfig["db"]="testdb";
    $dbConfig["port"]="3306";
    //this is the global variable to connect to db in all classes defined as global $db
    $db=new mysqli($dbConfig["server"],$dbConfig["username"],$dbConfig["password"],$dbConfig["db"]);
   
   if ($db->connect_error) {
    die('Erreur de connexion (' . $db->connect_errno . ') '
            . $db->connect_error);
}

//2 global application settings 
    
    //Define Site ROOT PATH
	define('root_path', dirname(dirname(__FILE__)) . "/");
    //Appliaction path directory_path exep: http://127.0.0.1/directory_path
    define("path", get_application_path()); 
    //website title
    define("title", "FacebookApp");
    //application css & js file path settings,if CDN change the /themes with http:// ...
    define("css_path", path."/themes/css/bootstrap.min.css");
    define("js_bootstrap_path", path."/themes/js/bootstrap.min.js");
    define("js_path", path."/themes/js/jquery.js");
    //class directory
    define("class_path", root_path."includes/classes");
    //Debug mode
    define("debug", "False");

    




function server($index)
    {
    $val = null;
    if (isset($_SERVER[$index])) $val = $_SERVER[$index];
    return $val;
    }

function get_application_path()
    {
    // Default to http protocol
    $proto = "http";

    // Detect if we are running HTTPS or proxied HTTPS
    if (server('HTTPS') == 'on') {
        // Web server is running native HTTPS
        $proto = "https";
    } elseif (server('HTTP_X_FORWARDED_PROTO') == "https") {
        // Web server is running behind a proxy which is running HTTPS
        $proto = "https";
    }

    if( isset( $_SERVER['HTTP_X_FORWARDED_SERVER'] ))
        $path = dirname("$proto://" . server('HTTP_X_FORWARDED_SERVER') . server('SCRIPT_NAME')) . "/";
    else
        $path = dirname("$proto://" . server('HTTP_HOST') . server('SCRIPT_NAME')) . "/";

    return $path;
    }
	