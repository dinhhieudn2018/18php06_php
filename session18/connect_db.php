<?php 
	$server   = 'localhost'; 
	$username = 'root';
	$password = ''; 
	$database = '18php06_shop';

	$conn = mysqli_connect($server, $username, $password, $database);

	if (mysqli_connect_errno()) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	// else
	// 	echo "Connect OK";
	mysqli_set_charset($conn, "utf8");
?>