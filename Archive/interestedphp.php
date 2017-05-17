<?php


if($_POST['interested'] == 1 )
	session_start();
	
	$servername = "us-cdbr-azure-west-b.cleardb.com";
    $username = "b9196a4d86ae8a";
    $password = "864b7a39";
    $databasename = "se_group1_capstone";

    $conn = new mysqli($servername, $username, $password, $databasename);

	$resultStudent = $conn->prepare('CALL AddARN(?, ?)');
	$resultStudent->bind_param('ii', $_SESSION['uniqueID'], $_SESSION['hashedEmail']);

	$resultStudent->execute();

	$resultStudent->close();
	$_SESSION['button'] = "You're now interested!";

	header('Location: castingCallPage.php')


?>