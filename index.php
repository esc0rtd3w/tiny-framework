<?php
require (dirname(__FILE__) . '/includes/bootstrap.php');
?>


<div class="jumbotron">
	<div class="container">
		<h1>Hello, world!</h1>
		<p>Contents ...</p>
		<p>
			<a class="btn btn-primary btn-lg">Learn more</a>
		</p>
	</div>
</div>


Test Users class

<?php
//this is only for Test
users::testme(); //call the class method 
echo "<br><strong>Users List in DB</strong><br>";
$user=users::printUsers(); //print the users from the users class 

foreach ($user as $key => $row) {
echo $row["username"].'<br>';


}

?>



