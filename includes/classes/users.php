<?php
/**
* class users 
*/
class users
{
	
	function __construct()
	{
		# code...
	}

	function testme()
	{
		echo "I'm user class";
	}

	function printUsers() //print all users on db
	{
		global $db;
		$requestUsres=$db->query("select * from users ");
		while ($rowUsersTable=$requestUsres->fetch_array()) {
			echo $rowUsersTable["id"]." ".$rowUsersTable["username"]." ".$rowUsersTable["name"];
		}
	}







}




