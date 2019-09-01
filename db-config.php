<?php 

	// ----------------- Database connection ----------------
	$hostname 			=			"localhost";
	$username			=			"root";
	$password 			=			"root";
	$dbname 			=			"jquery_file_upload";

	$conn				=			mysqli_connect($hostname, $username, $password, $dbname) or die("Db connect error" .mysqli_connect_error());

?>

