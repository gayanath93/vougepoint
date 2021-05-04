<?php 

	$connection = mysqli_connect('us-cdbr-east-03.cleardb.com','bae7e4eb703d63','03a00eff','heroku_c59b078216b8358');
	if(!$connection){
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysql_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysql_connect_error() . PHP_EOL;
		exit();
	}
 ?>