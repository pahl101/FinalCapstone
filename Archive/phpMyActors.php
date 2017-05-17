<?php
session_start();
$servername = "us-cdbr-azure-west-b.cleardb.com";
$username = "b9196a4d86ae8a";
$password = "864b7a39";
$databasename = "se_group1_capstone";

$conn = new mysqli($servername, $username, $password, $databasename);

	$uniqueID=$_SESSION['uniqueID'];
    $_SESSION['allActorHash']= array();
    $_SESSION['allActorName']= array();
    $_SESSION['allActorEmail']= array();
    $_SESSION['allActorPhoneNumber']= array();
    $_SESSION['allActorProjectLink']= array();
$results = $conn->query("CALL ReturnCRN($uniqueID)");


    if ($results->num_rows > 0) {

      	while($row = $results->fetch_assoc()) {

      		
      		array_push($_SESSION['allActorHash'], $row['IDRef']);
      		array_push($_SESSION['allActorName'], $row['RefName']);
      		array_push($_SESSION['allActorEmail'], $row['RefEmail']);
      		array_push($_SESSION['allActorPhoneNumber'], $row['RefPhone']);
      		array_push($_SESSION['allActorProjectLink'], $row['RefReel']);

		}

	}

	else {
		 $_SESSION['allActorHash']= null;
    $_SESSION['allActorName']= null;
    $_SESSION['allActorEmail']= null;
    $_SESSION['allActorPhoneNumber']= null;
    $_SESSION['allActorProjectLink']= null;

	}

	 


	$conn->close();

header ('Location: myActors.php')



?>