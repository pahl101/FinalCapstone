<?php

session_start();

if($_POST['pressed'] == 1 )

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

	$newEmail =$_POST ['email'];
	$newPassword =$_POST ['password'];
	$newName =$_POST ['first'] . " " . $_POST ['last'];

	$_SESSION['userEmail'] = $newEmail;
	$_SESSION['userPassword'] = $newPassword;
	$_SESSION['userName'] = $newName;

	$hashed = crc32($newEmail);

	$_SESSION['hashedEmail'] = $hashed;
	//echo $_SESSION['newHashedEmail'];

	$sql = "SELECT HashedID FROM LoginReference";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

	    while($row = $result->fetch_assoc()) {
	        
	        $hashTaken= $row["HashedID"];

	        if ($hashTaken == $hashed){

	        	$userAvailable = false;
	        	header('Location: userTaken.php');
	        	break;
	        }
	        else $userAvailable = true;
	    }

	    if ($userAvailable == true){
	    	$resultStudent = $conn->prepare('CALL addStudent(?,?)');
			$resultStudent->bind_param('is', $_SESSION['hashedEmail'], $_SESSION['userPassword']);

			$resultStudent->execute();

			$resultStudent->close();
	  header('Location: myProfile.php');
	    }
	}
	else {
		$resultStudent = $conn->prepare('CALL addStudent(?,?)');
		$resultStudent->bind_param('is', $_SESSION['hashedEmail'], $_SESSION['userPassword']);

		$resultStudent->execute();

		$resultStudent->close();
		$_SESSION['button']="+ Interested";
		header('Location: myProfile.php');
	}
	$result->close();
	$conn->close();

?>