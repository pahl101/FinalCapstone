<?php

session_start();

if($_POST['pressed2'] == 1 )
	
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
//USE THE CODE BELOW FOR THE HASHING!!!!!!

	$result = $conn->prepare("CALL LogIN(?,?)");

	$result->bind_param('is', $hashedPass, $password);
	$email =$_POST ['userEmail'];
	$password =$_POST ['userPassword'];
	$hashedPass = crc32($email);
	$_SESSION['hashedEmail'] = (int)$hashedPass;
	//echo $_SESSION['hashedEmail'];

	$result->execute();

	$result ->bind_result($exists);

	$result->fetch();
	

	if ($exists == True) {

		$servername = "us-cdbr-azure-west-b.cleardb.com";
  		$username = "b9196a4d86ae8a";
 		$password = "864b7a39";
  		$databasename = "se_group1_capstone";

		$conn = new mysqli($servername, $username, $password, $databasename);
		$results = $conn->query("CALL ReturnActorInfo($hashedPass)");
          if ($results->num_rows > 0) {

          	while($row = $results->fetch_assoc()) {

          		$_SESSION['userName'] = $row['RefName'];
				$_SESSION['userEmail'] = $row['RefEmail'];
				$_SESSION['phoneNumber'] = $row['RefNum'];

			}
		}

		else {
          	echo "not working (info)";
          }
          $conn->close();


		$servername = "us-cdbr-azure-west-b.cleardb.com";
  		$username = "b9196a4d86ae8a";
 		$password = "864b7a39";
  		$databasename = "se_group1_capstone";

		$conn = new mysqli($servername, $username, $password, $databasename);
		$results = $conn->query("CALL ReturnStudMajor($hashedPass)");
          if ($results->num_rows > 0) {

          	while($row = $results->fetch_assoc()) {

          		$_SESSION['major'] = $row['Major'];
                
           	} 
          }

          else {
          	echo "not working (major)";
          }

        $servername = "us-cdbr-azure-west-b.cleardb.com";
  		$username = "b9196a4d86ae8a";
 		$password = "864b7a39";
  		$databasename = "se_group1_capstone";

		$conn = new mysqli($servername, $username, $password, $databasename);
		$results = $conn->query("CALL ReturnProfileInfo($hashedPass)");
          if ($results->num_rows > 0) {

          	while($row = $results->fetch_assoc()) {

          		
          		$_SESSION['lowerAge'] = $row['AgeLow'];
          		$_SESSION['upperAge'] = $row['AgeHigh'];
          		$_SESSION['gender'] = $row['ActorGender'];
          		$_SESSION['availability'] = $row['ActorAvail'];
          		$_SESSION['bio'] = $row['ActorDesc'];
          		$_SESSION['role'] = $row['UserType'];
                
           	} 
          }
          
          else {
          	echo "not working (actor stuff)";
          }

          
          $conn->close();

        $servername = "us-cdbr-azure-west-b.cleardb.com";
  		$username = "b9196a4d86ae8a";
 		$password = "864b7a39";
  		$databasename = "se_group1_capstone";

		$conn = new mysqli($servername, $username, $password, $databasename);
		$results = $conn->query("CALL ReturnActorKeys($hashedPass)");
          if ($results->num_rows > 0) {

          	while($row = $results->fetch_assoc()) {

          		$_SESSION['genres'] = $row['GenreName'];

				echo $_SESSION['genres'];
                
           	} 
          }
          
          else {
          	echo "not working (genre)";
          }
          $conn->close();

        $servername = "us-cdbr-azure-west-b.cleardb.com";
  		$username = "b9196a4d86ae8a";
 		$password = "864b7a39";
  		$databasename = "se_group1_capstone";

		$conn = new mysqli($servername, $username, $password, $databasename);
		$results = $conn->query("CALL ReturnProdLvl($hashedPass)");
          if ($results->num_rows > 0) {

          	while($row = $results->fetch_assoc()) {

          		$_SESSION['levelInterest'] = $row['ProdLVL'];

				echo $_SESSION['levelInterest'];
                
           	} 
          }
          
          else {
          	echo "not working (prod lvl)";
          }
          $conn->close();

          

		$isCorrect = "True";
		//echo $isCorrect;
		header('Location: mainPage.php');
	}
	else{
		$isCorrect = "False";
		//echo $isCorrect;
		header('Location: invalidLogin.php');
	}
	//echo ($_SESSION['hashedEmail']);
	//$result->close();
	//$conn->close();

?>