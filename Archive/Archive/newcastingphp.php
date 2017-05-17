<?php

session_start();

if($_POST['submit'] == 1 )

	$servername = "us-cdbr-azure-west-b.cleardb.com";
  	$username = "b9196a4d86ae8a";
  	$password = "864b7a39";
  	$databasename = "se_group1_capstone";

  	// Create connection
  	$conn = new mysqli($servername, $username, $password, $databasename);



  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  //echo "Connected successfully". "<br>";

  $newTitle = $_POST['title'];
  $_SESSION['filmTitle']=$newTitle;
  $newDescription = $_POST['description'];
  $_SESSION['synops']=$newDescription;
  $newAudDate = $_POST['auditiondate'];
  $_SESSION['auditionDate']=$newAudDate;
  $newAudLoc = $_POST['auditionlocation'];
  $_SESSION['auditionLocation']=$newAudLoc;
  $newFilmDate = $_POST['filmdate'];
  $_SESSION['filmDate']=$newFilmDate;
  $newProdLvl = $_POST['prodlevel'];
  $_SESSION['ProdLvl']=$newProdLvl;

  $roleTitles = $_POST['myInputs'];
  $roleDesc = $_POST['roledescriptionInputs'];
  $roleGender = $_POST['rolegenderInputs'];
  $roleEthnicities = $_POST['ethnicityInputs'];
  $roleAge = (int)$_POST['roleAge'];

  if ($roleGender == "male") {
    $roleGender = 1;
  }
  else if ($roleGender == "female"){
    $roleGender = 0;
  }
  else {
    $roleGender = 2;
  }

  	

$resultStudent = $conn->prepare("CALL CreateCastingCall(?,?,?,?,?,?,?)");
$resultStudent->bind_param('isssiss', $_SESSION['hashedEmail'], $_SESSION['auditionDate'], $_SESSION['filmDate'], $_SESSION['auditionLocation'], $_SESSION['ProdLvl'], $_SESSION['synops'],$_SESSION['filmTitle']);

$resultStudent->execute();

$resultStudent->close();


$servername = "us-cdbr-azure-west-b.cleardb.com";
$username = "b9196a4d86ae8a";
$password = "864b7a39";
$databasename = "se_group1_capstone";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

$index = 0;
foreach ($roleTitles as $title) {


  $resultRole = $conn->prepare('CALL AddCastingRoles(?,?,?,?,?,?)');
  $resultRole->bind_param('issiis', $_SESSION['hashedEmail'], $title, $roleDesc[$index], $roleGender[$index], $roleAge[$index], $roleEthnicities[$index]);

  $resultRole->execute();

  ++$index;
} 

$resultRole->close();
header('Location: castingCallPage.php');

$conn->close();


?>