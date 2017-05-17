<?php

session_start();
if($_POST['submit'] == 1 )

	$servername = "us-cdbr-azure-west-b.cleardb.com";
  	$username = "b9196a4d86ae8a";
  	$password = "864b7a39";
  	$databasename = "se_group1_capstone";

  	// Create connection
  	$conn = new mysqli($servername, $username, $password, $databasename);

  	
  	// $profilePicture = $_POST['pic'];
  	// $_SESSION['profilePic']=$profilePicture;
  	$link = $_POST['reelLink'];
  	$_SESSION['projectLink']=$link;
// if(isset($_POST['submit'])){
// $name = $_FILES['file']["name"];
// //$size = $_FILES['file']['size']
// //$type = $_FILES['file']['type']

// $tmp_name = $_FILES['file']['tmp_name'];
// $error = $_FILES['file']['error'];

// if (isset ($name)) {
//     if (!empty($name)) {

//     $location = 'userUploads/';

//     if  (move_uploaded_file($tmp_name, $location.$name)){
//         echo 'Uploaded';    
//         }

//         } else {
//           echo 'please choose a file';
//           }
//     }
// }

  	 // $userfile = $_FILE['userfile'];
  	 // $_SESSION['profilePic'] = $newProfilePic;
  	 $newPhone = $_POST['phone'];


  	 $phone =preg_replace("/[^0-9]/", "", $newPhone);
  	 $_SESSION['phoneNumber']=(int) $phone;

  	$newRole=$_POST['student_role'];
  	if ($newRole=='actor'){
  		$_SESSION['role']=0;
  	}
  	else if ($newRole=='director') {
  		$_SESSION['role']=1;
  	}
  	else {
  		$_SESSION['role']=2;
  	}
  	

  	$newDescription = $_POST['description'];
  	$_SESSION['bio']=$newDescription;

	$newGender =$_POST['gender_role'];


	$newMajor =$_POST['student_major'];
	$_SESSION['major']=$newMajor;

	

	$_SESSION['genres'] = $_POST['user_interest'];
	$_SESSION['levelInterest'] = $_POST['user_prod_interest'];
	//$_SESSION['directorGenre'] = $_POST['director_interest'];
	//$_SESSION['directorLvl'] = $_POST['director_prod_interest'];
	
//BELOW FINDS THE HIGHEST UPPER AND LOWEST LOWER SELECTED
	$lower = (int)$_POST['lower'];
	$upper = (int)$_POST['upper'];
	$_SESSION['lowerAge'] = $lower; //actor
	$_SESSION['upperAge'] = $upper; //actor

echo $_SESSION['profilePic'];

	if ($newGender == "Male") {
		$gender = 1;
	}
	else {
		$gender = 0;
	}

	$_SESSION['gender'] = $gender;
	$newAvailability = $_POST['available'];
	if ($newAvailability == "Yes") {
		$avail = 1;
	}
	else {
		$avail = 0;
	}
	$_SESSION['availability'] = $avail;


	//echo $_SESSION['hashedEmail'];

	// echo $_SESSION['role'];
	// echo $_SESSION['major'];
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

  	$conn = new mysqli($servername, $username, $password, $databasename);



  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

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
	$res3 = $conn->prepare("CALL AddTest3(?,?,?,?,?)");
	$res3->bind_param('issis',$_SESSION['hashedEmail'], $_SESSION['userName'], $_SESSION['userEmail'], $_SESSION['phoneNumber'],$_SESSION['projectLink']);
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

