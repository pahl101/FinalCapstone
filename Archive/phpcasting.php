<?php
session_start();
$uniqueID = $_GET["val"];
$_SESSION['uniqueID']=$uniqueID;
echo $uniqueID;

$servername = "us-cdbr-azure-west-b.cleardb.com";
$username = "b9196a4d86ae8a";
$password = "864b7a39";
$databasename = "se_group1_capstone";

$conn = new mysqli($servername, $username, $password, $databasename);
$results = $conn->query("CALL ReturnSpecCasting($uniqueID)");
    if ($results->num_rows > 0) {

      	while($row = $results->fetch_assoc()) {

      		$_SESSION['filmTitle'] = $row['Tittle'];
			$_SESSION['synops'] = $row['Synops'];
			$_SESSION['auditionDate'] = $row['AuditionDT'];
			$_SESSION['auditionLocation'] = $row['AuditionLoc'];
			$_SESSION['filmDate'] = $row['ShootDates'];
			$directorID = $row['CastingCallID'];
			$_SESSION['ProdLvl'] = $row['lvlOfProd'];

		}
	}

//$conn->close();

//$conn = new mysqli($servername, $username, $password, $databasename);
$results = $conn->query("CALL ReturnName($directorID)");
    if ($results->num_rows > 0) {

      	while($row = $results->fetch_assoc()) {

      		$_SESSION['director']=$row['RefName'];
      	}
    }
   $conn->close();
$conn = new mysqli($servername, $username, $password, $databasename);
$results = $conn->query("CALL ReturnMyCastingRoles($uniqueID)");
    if ($results->num_rows > 0) {

      	while($row = $results->fetch_assoc()) {

      		$_SESSION['roleTitles'] = $row['CharName'];
            $_SESSION['roleDesc']=$row['CharSynops'];;
            $_SESSION['roleGender']= $row['CharGender'];
            $_SESSION['roleEthnicities']=$row['CharEthnicity'];
            $_SESSION['roleAge'] =$row['CharAge'];;

      	}
    }
    else {
    	$_SESSION['roleTitles'] = null;
    	$_SESSION['roleDesc'] = null;
    	$_SESSION['roleGender'] =null;
    	$_SESSION['roleEthnicities'] = null;
    	$_SESSION['roleAge'] = null;

    }

$conn->close();

echo $_SESSION['filmTitle'];
echo $_SESSION['synops'];
echo $_SESSION['auditionDate'];
echo $_SESSION['filmDate'];
echo $_SESSION['ProdLvl'];
echo $_SESSION['auditionLocation'];
echo $_SESSION['director'];


header('Location: castingCallPage.php');







?>