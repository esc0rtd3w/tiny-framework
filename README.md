# StartNewPhpAppCoreBasic
app architecture 
* includes  <br />-->classes (define all the classess of the app) <br />
          -->config.php (define all settings of the app) <br />
          -->bootstrap.php (inludes all classes and config file) <br />
	  -->functions (Dir Including Common functions that will be used whole site) <br />

* themes <br />-->CSS<br />
       -->JS <br/>
* images
* API (define libraries or SDK)
* templates (global layout of the app)


# How it works

for any new file always include bootstrap.php<br />
`require (dirname(__FILE__) . '/includes/bootstrap.php');`

for any class ,no need to connect to db ,always start the new methode with global $db
exemple: <br />
``` php
function printUsers() //print all users on db
	{
		global $db;
		return $db->get('users'); // we use a prebuilt function from the MysqlDB class check out the documentation
	}
```
We use a prebuilt database class for fast implementation of function check out the documentation 
[https://github.com/joshcam/PHP-MySQLi-Database-Class](https://github.com/joshcam/PHP-MySQLi-Database-Class)
# themes 
the theme path is defined as global vraible path in the config.php (default css,js are bootstrap files)<br />
``` define("css_path", path."/themes/css/bootstrap.min.css");```
Link to CSS file <br />
``` <link rel="stylesheet" type="text/css" href=<?php echo css_path; ?>> ```

# Templates
In this Dir you can define the default structure of the page 
header,footer,content .The default page is layout.php with css/js links.





       
