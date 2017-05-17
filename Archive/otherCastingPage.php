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
        <a href="profilePage.php">My Profile</a>
        <a href="mainPage.php">Casting Calls</a>
        <a href="directorView.php">Actors</a>
    </div>

        <br/><br/><br/>

        <center><button name='submit' VALUE='1' style="height:50px; width:250px; background-color: #990026; color: #FFFFFF" >+ Interested</button></center>

 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Verdana'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Verdana", sans-serif}
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
          <img src="movies/filmImage.jpg"style="width:100%" alt="Avatar">
          <h2>
            <?php 
            echo $_SESSION['filmTitle'];
            ?> 
          </h2>
          <p><i class="fa fa-bullhorn fa-fw w3-margin-right w3-large w3-text-darkred"></i>
          <?php 
            echo $_SESSION['director'];
            ?> 
          </p>
          <p><i class="fa fa-institution fa-fw w3-margin-right w3-large w3-text-darkred"></i>Chapman University</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-darkred"></i>Production Level</b></p>
          <p>
            <?php 
            echo $_SESSION['ProdLvl'];
            ?> 
          </p>
          
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">

        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-film fa-fw w3-margin-right w3-xxlarge w3-text-grey"></i> 

        </h2>
        <div class="w3-container">
          <h5 class="w3-text-black"><i class="fa fa-info-circle fa-fw w3-margin-right"></i>Description: 
            <?php 
            echo "<br/>";
            echo $_SESSION['synops'];
            ?>
          </h5>

          
          <hr>
          

        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Filming:</b></h5>
          <h5 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Film Date: 
            <?php 
            echo $_SESSION['filmDate'];
            ?>
          </h5>
          <h5 class="w3-opacity"><b>Auditions:</b></h5>
          <h5 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Date: 
            <?php 
            echo $_SESSION['auditions'];
            ?>
          </h5>
          <h5 class="w3-text-black"><i class="fa fa-map-marker fa-fw w3-margin-right"></i>Location: 
            <?php 
            echo $_SESSION['auditionLocation'];
            ?>
          </h5>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Roles:</b></h5><br>
          <h6 class="w3-text-darkred">
            <?php

            $index=0;
            $titles=$_SESSION['roleTitles'];

            $desc = $_SESSION['roleDesc'];
            $gender = $_SESSION['roleGender'];
            $ethn=$_SESSION['roleEthnicities'];
            $ages=$_SESSION['roleAge'];
            while($index<count($titles)){

              echo "Name: ".$titles[$index];
              echo "<br>";
              echo "Age: ".$ages[$index];
              echo "<br>";
              if ($gender == 0)
                echo "Gender: Female";
              if ($gender == 1)
                echo "Gender: Male";
              if ($gender == 0)
                echo "Gender: Other";
              echo "<br>";
              echo "Ethnicity: ".$ethn[$index];
              echo "<br>";
              echo "Character Description: <br>".$desc[$index];
              echo "<br>";
              echo "<br>";
              ++$index;

            }
              
            ?>
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

