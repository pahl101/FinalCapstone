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
  	
  	// $profilePicture = $_POST['pic'];
  	// $_SESSION['profilePic']=$profilePicture;
  	// $link = $_POST['video'];
  	// $_SESSION['projectLink']=$link;

  	 $newPhone = $_POST['phone'];
  	 $phone =preg_replace("/[^0-9]/", "", $newPhone);
  	 $_SESSION['phoneNumber']=(int) $phone;

  	$newRole=(int)$_POST['student_role'];
  	$_SESSION['role']=$newRole;

  	$newDescription = $_POST['description'];
  	$_SESSION['bio']=$newDescription;

	$newGender =$_POST['gender_role'];


	$newMajor =$_POST['student_major'];
	$_SESSION['major']=$newMajor;

	$newAvailability =$_POST ['availability']; //actor
	

	$_SESSION['genres'] = $_POST['user_interest'];
	$_SESSION['levelInterest'] = $_POST['user_prod_interest'];
	//$_SESSION['directorGenre'] = $_POST['director_interest'];
	//$_SESSION['directorLvl'] = $_POST['director_prod_interest'];
	
//BELOW FINDS THE HIGHEST UPPER AND LOWEST LOWER SELECTED
	$lower = (int)$_POST['lower'];
	$upper = (int)$_POST['upper'];
	$_SESSION['lowerAge'] = $lower; //actor
	$_SESSION['upperAge'] = $upper; //actor



	if ($newGender == "Male") {
		$gender = 1;
	}
	else {
		$gender = 0;
	}

	$_SESSION['gender'] = $gender;

	if ($newAvailability == "Yes") {
		$avail = 1;
	}
	else {
		$avail = 0;
	}
	$_SESSION['availability'] = $avail;


	//echo $_SESSION['hashedEmail'];

	echo $_SESSION['role'];
	echo $_SESSION['major'];
	//echo $_SESSION['directorGenre'];
	//echo $_SESSION['directorLvl'];

		$prefix = $allProdLVL = '';
	foreach ($_POST['user_prod_interest'] as $newLevel)
	{
	    $allProdLVL .= $prefix .  $newLevel;
	    $prefix = ', ';

	}

	$_SESSION['prodLvls']=$allProdLVL;

	$prefix = $allGenre = '';
	foreach ($_POST['user_interest'] as $newInterests)
	{
	    $allGenre .= $prefix  . $newInterests;
	    $prefix = ', ';

	}
	$_SESSION['genres']=$allGenre;



//--------------------------------------------------------------------
// STORE PROFILE INFORMATION


	$res = $conn->prepare("CALL AddTest1(?)");
	$res->bind_param('i',$_SESSION['hashedEmail']);
	$res->execute();

	$res->close();

	$res2 = $conn->prepare("CALL AddTest2(?,?,?,?,?,?,?)");
	$res2->bind_param('iiiiisi', $_SESSION['hashedEmail'], $_SESSION['lowerAge'], $_SESSION['upperAge'], $gender, $avail, $_SESSION['bio'], $roleInt);
	$res2->execute();

	$res2->close();
	$aphone = 1231231234;
	$res3 = $conn->prepare("CALL AddTest3(?,?,?,?)");
	$res3->bind_param('issi',$_SESSION['hashedEmail'], $_SESSION['userName'], $_SESSION['userEmail'], $_SESSION['phoneNumber']);
	$res3->execute();

	$res3->close();


//-------------------------------------------------------------
// STORES USER MAJOR
	$resultGenre = $conn->prepare('CALL AddMajor(?,?)');
	$resultGenre->bind_param('is', $_SESSION['hashedEmail'], $newMajor);

	$resultGenre->execute();
		
// //----------------------------------------------------------------------
//STORES USER GENRE INTERESTS 

		$resultGenre = $conn->prepare('CALL addGenre(?,?)');
		$resultGenre->bind_param('is', $_SESSION['hashedEmail'], $_SESSION['genres']);

		$resultGenre->execute();

	

		$resultGenre->close();


// if ($newRole == 0 || $newRole == 2) {

		// $resultLevel = $conn->prepare('CALL addProdLVL(?,?)');
		// $resultLevel->bind_param('is', $_SESSION['hashedEmail'], $_SESSION['prodLvls']);

		// $resultLevel->execute();
	

		// $resultLevel->close();
// }




// //-------------------------------------------------------------
// //STORE REFERENCE INFORMATION

	

	header('Location: profilePage.php');


	$conn->close();


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

  $resultStudent = $conn->prepare('CALL addStudent(?,?)');
  $resultStudent->bind_param('is', $_SESSION['hashedEmail'], $_SESSION['userPassword']);

		$resultStudent->execute();

		$resultStudent->close();

	$conn->close();

