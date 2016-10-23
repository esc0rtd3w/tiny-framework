<?php
require (dirname(__FILE__) . '/includes/bootstrap.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo title; ?></title>
<link rel="stylesheet" type="text/css" href=<?php echo css_path; ?>>

</head>
<body>


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

users::testme();

?>





</body>
</html>

