<?php

$servername = "us-cdbr-azure-west-b.cleardb.com";
	$username = "b9196a4d86ae8a";
	$password = "864b7a39";
	$databasename = "se_group1_capstone";

	// Create connection
	$conn = mysqli_connect()($servername, $username, $password, $databasename);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully". "<br>";

	



?>