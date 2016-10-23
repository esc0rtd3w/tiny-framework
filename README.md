# StartNewPhpAppCoreBasic
app architecture 
* includes  <br />-->classes (define all the classess of the app) <br />
          -->config.php (define all settings of the app) <br />
          -->bootstrap.php (inludes all classes and config file) <br />
* themes <br />-->CSS<br />
       -->JS <br/>
* images
* API (define libraries or SDK)

# How it works

for any new file always include bootstrap.php<br />
`require (dirname(__FILE__) . '/includes/bootstrap.php');`

for any class ,no need to connect to db ,always start the new methode with global $db
exemple: <br />
``` php
function printUsers() //print all users on db
	{
		global $db;
		$requestUsres=$db->query("select * from users ");
		while ($rowUsersTable=$requestUsres->fetch_array()) {
			echo $rowUsersTable["id"]." ".$rowUsersTable["username"]." ".$rowUsersTable["name"];
		}
	}
```
# themes 
the theme path is defined as global vraible path in the config.php (default css,js are bootstrap files)<br />
``` define("css_path", path."/themes/css/bootstrap.min.css");```

Link to CSS file <br />
``` define("css_path", path."/themes/css/bootstrap.min.css");```
<link rel="stylesheet" type="text/css" href=<?php echo css_path; ?>>







       
