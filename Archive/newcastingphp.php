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
  //$_SESSION['filmDate'] = date('y-m-d',strtotime($_SESSION['filmDate']));
  $newAudTime = $_POST['auditiontime'];
  $_SESSION['auditionTime']=$newAudTime;
  $newProdLvl = $_POST['prodlevel'];
  $_SESSION['ProdLvl']=$newProdLvl;

  $roleTitles = $_POST['titleInputs'];
  $roleDesc = $_POST['roledescriptionInputs'];
  $roleGender = $_POST['rolegenderInputs'];
  $roleEthnicities = $_POST['ethnicityInputs'];
  $roleAge =$_POST['roleAgeInputs'];

  $script = "none";
  $_SESSION['script'] = $script;
  $image = "none";
  $_SESSION['image'] = $image;


// echo $_SESSION['auditionDate'];
// echo $_SESSION['auditionTime'];
$_SESSION['directorID'] = (int)$_SESSION['hashedEmail'];
$_SESSION['director'] = $_SESSION['userName'];
$_SESSION['auditions']= $_SESSION['auditionDate'] . " " . $_SESSION['auditionTime'] . ":00";
$aud = $_SESSION['auditions'];
//$_SESSION['auditions'] = DateTime::createFromFormat('Y-m-d H:i:s', $_SESSION['auditions']);

$unique = $_SESSION['hashedEmail'] . $_SESSION['filmTitle'];
$_SESSION['uniqueID'] = (int) crc32($unique);
$uniqueID = $_SESSION['uniqueID'];
// $hashed = 54321;
// $audDate="1993-12-09 12:12:12";
// $shootDate="2017-12-12";
// $audLoc="testloc";
// $lvl="Undergraduate Directing 2 (FP 338)";
// $syn = "synops test";
// $title = "stupid test title";
// $imp = "img path";
// $sp = "script path";
// $id = 12345;
// echo $id;
// $char="person1";
// $gend=0;
// $ag=10;
// $eth="White";
// echo gettype($_SESSION['hashedEmail']);
// echo "<br>";
// echo $_SESSION['hashedEmail'];
// echo "<br>";
// echo gettype($_SESSION['auditions']);
// echo "<br>";
// echo $_SESSION['auditions'];
// echo "<br>";
// echo gettype($_SESSION['filmDate']);
// echo "<br>";
// echo $_SESSION['filmDate'];
// echo "<br>";
// echo gettype($_SESSION['auditionLocation']);
// echo "<br>";
// echo $_SESSION['auditionLocation'];
// echo "<br>";
// echo gettype($_SESSION['ProdLvl']);
// echo "<br>";
// echo $_SESSION['ProdLvl'];
// echo "<br>";
// echo gettype($_SESSION['synops']);
// echo "<br>";
// echo $_SESSION['synops'];
// echo "<br>";
// echo gettype($_SESSION['filmTitle']);
// echo "<br>";
// echo $_SESSION['filmTitle'];
// echo "<br>";
// echo gettype($_SESSION['image']);
// echo "<br>";
// echo $_SESSION['image'];
// echo "<br>";
// echo gettype($_SESSION['script']);
// echo "<br>";
// echo $_SESSION['script'];
// echo "<br>";
// echo gettype($_SESSION['uniqueID']);
// echo "<br>";
// echo $_SESSION['uniqueID'];

//echo $_SESSION['uniqueID'];
//$conn->query("INSERT INTO castingcallinfo(CastingCallID, AuditionDT, ShootDates, AuditionLoc, lvlOfProd, Synops, Tittle, ImgPath, ScriptPath, RolesLink) VALUES ($hashed,$audDate,$shootDate,$audLoc,$lvl,$syn,$title,$imp,$sp,$id) ");
//$conn->query("INSERT INTO castingroles(CCID,CharName,CharSynops,CharGender,CharAge,CharEthnicity,SpecificCastID) VALUES ('$hashed', '$char', '$syn' '$gend', '$ag', '$eth', '$id')");

//
//, $aud, $newFilmDate,$newAudLoc,$newProdLvl,$newDescription, $newTitle, $image, $script, $uniqueID
$resultStudent = $conn->prepare('CALL CreateCastingCall(?,?,?,?,?,?,?,?,?,?)');
$resultStudent->bind_param('issssssssi', $_SESSION['hashedEmail'], $_SESSION['auditions'],$_SESSION['filmDate'],$_SESSION['auditionLocation'] , $_SESSION['ProdLvl'], $_SESSION['synops'], $_SESSION['filmTitle'], $_SESSION['image'],$_SESSION['script'],$_SESSION['uniqueID']);

$resultStudent->execute();
$resultStudent->close();
$conn->close();

// $servername = "us-cdbr-azure-west-b.cleardb.com";
// $username = "b9196a4d86ae8a";
// $password = "864b7a39";
// $databasename = "se_group1_capstone";

//Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

  $indexx = 0;
  $count = count($roleTitles);

while ($indexx<$count){
  
  if ($roleTitles[$indexx] == '' && $rolesDesc[$indexx] == '' && $roleGender[$indexx] == '' && $roleEthnicities[$indexx] == '' && $roleAge[$indexx] == ''){
    unset($roleTitles[$indexx]);
    unset($rolesDesc[$indexx]);
    unset($roleGender[$indexx]);
    unset($roleEthnicities[$indexx]);
    unset($roleAge[$indexx]);

  }
  
  else{
    if ($roleTitles[$indexx] == '')
      $roleTitles[$indexx] = "Character " . $indexx;
    if ($rolesDesc[$indexx] == '')
      $rolesDesc[$indexx] = "No Description";
    if ($roleGender[$indexx] == '')
      $roleGender[$indexx] = 2;
    if ($roleEthnicities[$indexx] == '')
      $roleEthnicities[$indexx] = "Open";
    if ($roleAge[$indexx] == '')
      $roleAge[$indexx] = 20;
    ++$indexx;

  }
  
}

$_SESSION['roleTitles'] = $roleTitles;
$_SESSION['roleDesc'] = $roleDesc;
$_SESSION['roleGender'] = $roleGender;
$_SESSION['roleEthnicities'] = $roleEthnicities;
$_SESSION['roleAge'] = $roleAge;

$index = 0;
while ($index<count($roleTitles)) {

  $title = $roleTitles[$index];
  $desc = $roleDesc[$index];
  $gender = $roleGender[$index];
  $age = $roleAge[$index];
  $ethn = $roleEthnicities[$index];
  echo $title;
  echo "<br>";
  echo $desc;
  echo "<br>";
  echo $gender;
  echo "<br>";
  echo $age;
  echo "<br>";
  echo $ethn;
  echo "<br>";
  $resultRole = $conn->prepare('CALL AddCastingRoles(?,?,?,?,?,?,?)');
  $resultRole->bind_param('issiisi', $_SESSION['hashedEmail'], $title, $desc, $gender, $age, $ethn,$_SESSION['uniqueID']);

  $resultRole->execute();

  ++$index;
} 

$resultRole->close();
$conn->close();
header('Location: castingCallPage.php');




?>