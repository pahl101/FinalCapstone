<!DOCTYPE html>
<html >

  <head>
    <meta charset="UTF-8">
    <title>ChapCast</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
        <link rel="stylesheet" href="css/default.css">

    
  </head>

  <body>
    <nav>
      <ul>
        <div class = "user" style="background-image: url('images/newUser.jpg')"></div>
        <li>
          <?php 
            session_start();
            echo $_SESSION['userName'];
            ?> 
        </li>
        <br>
        <li><a href="NewCastingCall.php">+ New Casting Call</a></li> <!--Opens Create Casting Call-->
        <?php
        $servername = "us-cdbr-azure-west-b.cleardb.com";
        $username = "b9196a4d86ae8a";
        $password = "864b7a39";
        $databasename = "se_group1_capstone";

        $conn = new mysqli($servername, $username, $password, $databasename);
        $hashed = $_SESSION['hashedEmail'];
        $results = $conn->query("CALL ReturnMyCastingInfo($hashed)");
        if ($results->num_rows > 0) {

          while($row = $results->fetch_assoc()) {

            $_SESSION['filmTitle'] = $row['Tittle'];

            echo "<li><a href='castingCallpage.php'>".$_SESSION['filmTitle']."</a></li>";
                
          } 
        }
          
        else {
          echo "<label>No current casting calls.</label>";
        }

        $conn->close();
        ?> 

      </ul> 
    </nav>
    

    <div class = "content">

      <br/>
      
      <div class="topnav" id="myTopnav">

        <a href="logoutphp.php" >Log Out</a>
        <!-- <a href="editProfile.php">Settings</a> --> <!--Opens Profile Settings Page-->
        <a href=" ">My Profile</a>
        <a href="mainPage.php">Casting Calls</a>
        <a href="directorView.php">Actors</a>
    </div>

    <br/><br/><br/>
 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Verdana'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Arial", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <div class="w3-display-bottomleft w3-container w3-text-black">
          </div>
        </div>
        <div class="w3-container">
          <br/>
          <img src="images/newUser.jpg"style="width:100%" alt="Avatar">
          <h2>
            <?php 
            echo $_SESSION['userName'];
            ?> 
          </h2>
          <p><i class="fa fa-book fa-fw w3-margin-right w3-large w3-text-darkred"></i>
          <?php
            echo $_SESSION['major'];
            ?> 
          </p>
          <p><i class="fa fa-film fa-fw w3-margin-right w3-large w3-text-darkred"></i>
          <?php 
            if ($_SESSION['role'] == 0)
              echo "Actor";
            else if ($_SESSION['role'] == 1)
              echo "Director";
            else if ($_SESSION['role'] == 2)
              echo "Actor & Director";
            ?> 
          </p>
          <p><i class="fa fa-institution fa-fw w3-margin-right w3-large w3-text-darkred"></i>Chapman University</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-darkred"></i>
           <?php 
            echo $_SESSION['userEmail'];
            ?> 
          </p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-darkred"></i>
            <?php 
            $number = (string)$_SESSION['phoneNumber'];
            $formatted_number = "($number[0]$number[1]$number[2])$number[3]$number[4]$number[5]-$number[6]$number[7]$number[8]$number[9]";
            echo $formatted_number;
            ?> 
          </p>
          <hr>

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-grey"></i>
          <?php 
            echo "About ";
            ?>
        </h2>
        <div class="w3-container">
            <?php
            echo "<b>About Me:</b><br>";
            echo $_SESSION['bio'];
            echo "<br>";
            ?>


          </p>
          </h5>
          <!-- <p class="w3-text-black"><i class="fa fa-search fa-fw w3-margin-right"></i><a href=<?php echo $_SESSION['projectLink']?>>
            <?php 
            //echo $_SESSION['projectLink'];
            ?>
          </a></p> -->
          <!-- <h5 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Currently Available: 
            <?php 
            //echo $_SESSION['availability'];
            ?>
          <p><br/> -->
          <hr>
          

        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Preferences:</b></h5>
          <h6 class="w3-text-darkred">

            <?php
            echo "<b>Age Range: </b>" . $_SESSION['lowerAge'] . " - " . $_SESSION['upperAge'] . "<br/>";




            echo "<b>Genres: </b><br>";
            echo $_SESSION['genres'];


            echo "<br/>";
            echo "<b>Levels: </b><br/>";
            echo $_SESSION['prodLvls'];
            ?>
          </someDiv>
          </h6>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b></b></h5>
          <h6 class="w3-text-darkred">
            <a href='<?php echo $_SESSION['projectLink'] ?>' target='_blank'>Watch my reel</a>

            
          </h6>
        </div>
      </div>


    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>


      


    </div>
    
  </body>
  </html>

