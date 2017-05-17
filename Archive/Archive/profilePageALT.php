<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Chapman Casting Portal</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
        <link rel="stylesheet" href="css/styleDirector.css">

    
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
        <li><a href="#Call1">...</a></li>
        <li><a href="#Call2">...</a></li> 

      </ul> 
    </nav>
      
    
    <div class = "content">
      <br/>
    <center><h1><img src="images/CHAPCAST.png" alt="Chapcast" style="width: 350px; height: 50px"></h1></center>

      <div class="topnav" id="myTopnav">

        <a href="logoutphp.php" >Log Out</a>
        <!-- <a href="editProfile.php">Settings</a> --> <!--Opens Profile Settings Page-->
        <a href=" ">My Profile</a>
        <a href="mainPage.php">Casting Calls</a>
        <a href="directorView.php">Actors</a>
    </div>

        <center><img src="images/logo.png" alt="Chapman Logo" align="center" style="width:300px;height:50px;"></center>

        <br/>

 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Papyrus'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Papyrus", sans-serif}
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
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-darkred"></i>
          <?php 
            if ($_SESSION['studentRole'] == 0)
              echo "Actor";
            else if($_SESSION['studentRole'] == 1)
              echo "Director";
            else if($_SESSION['studentRole'] == 2)
              echo "Actor & Director";
            ?> 
          </p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-darkred"></i>Chapman University</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-darkred"></i>
           <?php 
            echo $_SESSION['userEmail'];
            ?> 
          </p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-darkred"></i>
            <?php 
            echo $_SESSION['phoneNumber'];
            ?> 
          </p>
          <hr>

         <!--  <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-darkred"></i>Genres</b></p>
          <p> -->
            <?php 
            // if ($_SESSION['studentRole'] == 0) {
            //   foreach ($_SESSION['genres'] as $genres) {
            //   echo $genres . "<br/>";
            //   }
            // }
            // else if ($_SESSION['studentRole'] == 1) {
            //   foreach ($_SESSION['directorGenre'] as $genres) {
            //   echo $genres . "<br/>";
            //   }
            // }
            // else if ($_SESSION['studentRole'] == 2) {
            //   echo "Actor Genres:<br>";
            //   foreach ($_SESSION['genres'] as $genres) {
            //   echo $genres . "<br/>";
            //   }
            //   echo "Director Genres:<br>";
            //   foreach ($_SESSION['directorGenre'] as $genres) {
            //   echo $genres . "<br/>";
            //   }
            // }
            
            ?> 
          <!-- </p> -->
          

          <!-- <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-darkred"></i>Level of Production</b></p>
          <p> -->
            <?php 
            // if ($_SESSION['studentRole'] == 0) {

            //   foreach ($_SESSION['levelInterest'] as $level) {
            //     if ($level = "FP338")
            //     echo "Undergraduate Directing 2 (FP 338)<br/>";
            //   else if ($level = "FP438")
            //     echo "Undergraduate Directing 3 (FP 438)<br/>";
            //   else if ($level = "FTV130")
            //     echo "Visual Storytelling (FTV 130)<br/>";
            //   else if ($level = "FP280")
            //     echo "Undergraduate Intermediate Production (FP 280)<br/>";
            //   else if ($level = "FP331")
            //     echo "Undergraduate Advanced Production (FP 331)<br/>";
            //   else if ($level = "FP497-498")
            //     echo "Undergraduate Senior Thesis (FP 497-498)<br/>";
            //   else if ($level = "Undergraduate Digital Arts Project")
            //     echo "Undergraduate Digital Arts Project<br/>";
            //   else if ($level = "FP538")
            //     echo "Graduate Fundamentals of Directing 1 (FP 538)<br/>";
            //   else if ($level = "FP331")
            //     echo "Undergraduate Advanced Production (FP 331)<br/>";
            //   else if ($level = "FP664")
            //     echo "Graduate Intermediate Directing (FP 664)<br/>";
            //   else if ($level = "FP665")
            //     echo "Graduate Advanced Directing (FP 665)<br/>";
            //   else if ($level = "FP638")
            //     echo "Master class in Directing (FP 638)<br/>";
            //   else if ($level = "FP531")
            //     echo "Graduate Production Workshop 1 (FP 531)<br/>";
            //   else if ($level = "FP532")
            //     echo "Graduate Production Workshop 2 (FP 532)<br/>";
            //   else if ($level = "FP577")
            //     echo "Graduate Production Workshop 3 (FP 577)<br/>";
            //   else if ($level = "FP631")
            //     echo "Graduate Production Workshop 4 (FP 631)<br/>";
            //   else if ($level = "FP698")
            //     echo "Graduate Thesis (FP 698)<br/>";
            //   else if ($level = "FP507")
            //     echo "Graduate Filmmakers and Actors Workshop (FP 507)<br/>";
            //   else if ($level = "Graduate Independent Study")
            //     echo "Graduate Independent Study<br/>";
            //   else if ($level = "Other")
            //     echo "Other<br/>";
            //   else if ($level = "WP313")
            //     echo "Undergraduate Byte-sized Television (TWP 313)<br/>";
            //   else if ($level = "TWP398")
            //     echo "Undergraduate Television Pilots (TWP 398)";
            //   else if ($level = "Undergraduate Independent Study")
            //     echo "Undergraduate Independent Study<br/>";
            //   }
            // }

            // else if ($_SESSION['studentRole'] == 1) {
              
            //   foreach ($_SESSION['directorLvl'] as $levelDir) {
            //     if ($level = "FP338")
            //     echo "Undergraduate Directing 2 (FP 338)<br/>";
            //   else if ($level = "FP438")
            //     echo "Undergraduate Directing 3 (FP 438)<br/>";
            //   else if ($level = "FTV130")
            //     echo "Visual Storytelling (FTV 130)<br/>";
            //   else if ($level = "FP280")
            //     echo "Undergraduate Intermediate Production (FP 280)<br/>";
            //   else if ($level = "FP331")
            //     echo "Undergraduate Advanced Production (FP 331)<br/>";
            //   else if ($level = "FP497-498")
            //     echo "Undergraduate Senior Thesis (FP 497-498)<br/>";
            //   else if ($level = "Undergraduate Digital Arts Project")
            //     echo "Undergraduate Digital Arts Project<br/>";
            //   else if ($level = "FP538")
            //     echo "Graduate Fundamentals of Directing 1 (FP 538)<br/>";
            //   else if ($level = "FP331")
            //     echo "Undergraduate Advanced Production (FP 331)<br/>";
            //   else if ($level = "FP664")
            //     echo "Graduate Intermediate Directing (FP 664)<br/>";
            //   else if ($level = "FP665")
            //     echo "Graduate Advanced Directing (FP 665)<br/>";
            //   else if ($level = "FP638")
            //     echo "Master class in Directing (FP 638)<br/>";
            //   else if ($level = "FP531")
            //     echo "Graduate Production Workshop 1 (FP 531)<br/>";
            //   else if ($level = "FP532")
            //     echo "Graduate Production Workshop 2 (FP 532)<br/>";
            //   else if ($level = "FP577")
            //     echo "Graduate Production Workshop 3 (FP 577)<br/>";
            //   else if ($level = "FP631")
            //     echo "Graduate Production Workshop 4 (FP 631)<br/>";
            //   else if ($level = "FP698")
            //     echo "Graduate Thesis (FP 698)<br/>";
            //   else if ($level = "FP507")
            //     echo "Graduate Filmmakers and Actors Workshop (FP 507)<br/>";
            //   else if ($level = "Graduate Independent Study")
            //     echo "Graduate Independent Study<br/>";
            //   else if ($level = "Other")
            //     echo "Other<br/>";
            //   else if ($level = "WP313")
            //     echo "Undergraduate Byte-sized Television (TWP 313)<br/>";
            //   else if ($level = "TWP398")
            //     echo "Undergraduate Television Pilots (TWP 398)";
            //   else if ($level = "Undergraduate Independent Study")
            //     echo "Undergraduate Independent Study<br/>";
            //   }
            // }

            // else if ($_SESSION['studentRole'] == 3) {

            //   echo "Directing Production Level:<br>";
            //   foreach ($_SESSION['levelInterest'] as $level) {
            //     if ($level = "FP338")
            //     echo "Undergraduate Directing 2 (FP 338)<br/>";
            //   else if ($level = "FP438")
            //     echo "Undergraduate Directing 3 (FP 438)<br/>";
            //   else if ($level = "FTV130")
            //     echo "Visual Storytelling (FTV 130)<br/>";
            //   else if ($level = "FP280")
            //     echo "Undergraduate Intermediate Production (FP 280)<br/>";
            //   else if ($level = "FP331")
            //     echo "Undergraduate Advanced Production (FP 331)<br/>";
            //   else if ($level = "FP497-498")
            //     echo "Undergraduate Senior Thesis (FP 497-498)<br/>";
            //   else if ($level = "Undergraduate Digital Arts Project")
            //     echo "Undergraduate Digital Arts Project<br/>";
            //   else if ($level = "FP538")
            //     echo "Graduate Fundamentals of Directing 1 (FP 538)<br/>";
            //   else if ($level = "FP331")
            //     echo "Undergraduate Advanced Production (FP 331)<br/>";
            //   else if ($level = "FP664")
            //     echo "Graduate Intermediate Directing (FP 664)<br/>";
            //   else if ($level = "FP665")
            //     echo "Graduate Advanced Directing (FP 665)<br/>";
            //   else if ($level = "FP638")
            //     echo "Master class in Directing (FP 638)<br/>";
            //   else if ($level = "FP531")
            //     echo "Graduate Production Workshop 1 (FP 531)<br/>";
            //   else if ($level = "FP532")
            //     echo "Graduate Production Workshop 2 (FP 532)<br/>";
            //   else if ($level = "FP577")
            //     echo "Graduate Production Workshop 3 (FP 577)<br/>";
            //   else if ($level = "FP631")
            //     echo "Graduate Production Workshop 4 (FP 631)<br/>";
            //   else if ($level = "FP698")
            //     echo "Graduate Thesis (FP 698)<br/>";
            //   else if ($level = "FP507")
            //     echo "Graduate Filmmakers and Actors Workshop (FP 507)<br/>";
            //   else if ($level = "Graduate Independent Study")
            //     echo "Graduate Independent Study<br/>";
            //   else if ($level = "Other")
            //     echo "Other<br/>";
            //   else if ($level = "WP313")
            //     echo "Undergraduate Byte-sized Television (TWP 313)<br/>";
            //   else if ($level = "TWP398")
            //     echo "Undergraduate Television Pilots (TWP 398)";
            //   else if ($level = "Undergraduate Independent Study")
            //     echo "Undergraduate Independent Study<br/>";
            //   }
            //   echo "Acting Production Level Interest: <br>";
            //   foreach ($_SESSION['directorLvl'] as $levelDir) {
            //     if ($level = "FP338")
            //     echo "Undergraduate Directing 2 (FP 338)<br/>";
            //   else if ($level = "FP438")
            //     echo "Undergraduate Directing 3 (FP 438)<br/>";
            //   else if ($level = "FTV130")
            //     echo "Visual Storytelling (FTV 130)<br/>";
            //   else if ($level = "FP280")
            //     echo "Undergraduate Intermediate Production (FP 280)<br/>";
            //   else if ($level = "FP331")
            //     echo "Undergraduate Advanced Production (FP 331)<br/>";
            //   else if ($level = "FP497-498")
            //     echo "Undergraduate Senior Thesis (FP 497-498)<br/>";
            //   else if ($level = "Undergraduate Digital Arts Project")
            //     echo "Undergraduate Digital Arts Project<br/>";
            //   else if ($level = "FP538")
            //     echo "Graduate Fundamentals of Directing 1 (FP 538)<br/>";
            //   else if ($level = "FP331")
            //     echo "Undergraduate Advanced Production (FP 331)<br/>";
            //   else if ($level = "FP664")
            //     echo "Graduate Intermediate Directing (FP 664)<br/>";
            //   else if ($level = "FP665")
            //     echo "Graduate Advanced Directing (FP 665)<br/>";
            //   else if ($level = "FP638")
            //     echo "Master class in Directing (FP 638)<br/>";
            //   else if ($level = "FP531")
            //     echo "Graduate Production Workshop 1 (FP 531)<br/>";
            //   else if ($level = "FP532")
            //     echo "Graduate Production Workshop 2 (FP 532)<br/>";
            //   else if ($level = "FP577")
            //     echo "Graduate Production Workshop 3 (FP 577)<br/>";
            //   else if ($level = "FP631")
            //     echo "Graduate Production Workshop 4 (FP 631)<br/>";
            //   else if ($level = "FP698")
            //     echo "Graduate Thesis (FP 698)<br/>";
            //   else if ($level = "FP507")
            //     echo "Graduate Filmmakers and Actors Workshop (FP 507)<br/>";
            //   else if ($level = "Graduate Independent Study")
            //     echo "Graduate Independent Study<br/>";
            //   else if ($level = "Other")
            //     echo "Other<br/>";
            //   else if ($level = "WP313")
            //     echo "Undergraduate Byte-sized Television (TWP 313)<br/>";
            //   else if ($level = "TWP398")
            //     echo "Undergraduate Television Pilots (TWP 398)";
            //   else if ($level = "Undergraduate Independent Study")
            //     echo "Undergraduate Independent Study<br/>";
            //   }
            // }

            ?>
          <!-- </p> -->
          
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
            echo "About Me";
            ?>
        </h2>
        <div class="w3-container">
          <h5 class="w3-text-black"><i class="fa fa-briefcase fa-fw w3-margin-right"></i>Major: 
            <?php 
            $_SESSION['major']
            ?>
          <p><br/>
            <?php
            echo "About Me:<br>";
            echo $_SESSION['bio'];
            ?>
          </p>
          </h5>
          <!-- <p class="w3-text-black"><i class="fa fa-search fa-fw w3-margin-right"></i><a href=<?php echo $_SESSION['projectLink']?>>
            <?php 
            echo $_SESSION['projectLink'];
            ?>
          </a></p> -->
          
          <hr>
          

        </div>
        <?php
          if($_SESSION['studentRole'] == 0 OR $_SESSION['studentRole'] ==2){
            echo "Actor Preferences";
        ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b></b></h5>
          <h6 class="w3-text-darkred">
            <?php
            echo "Age Range: " . $_SESSION['lowerAge'] . " - " . $_SESSION['upperAge'] . "<br/>";
            echo "Genres: <br>";
            if (!empty($_SESSION['genres'])) {
              foreach ($_SESSION['genres']as $genres) {
              echo $genres . "<br";
              }
              echo "<br><br>";
            }
            else 
              echo "All Genres";
            
            echo "<br/>";
            echo "Levels: <br/>";
            if (!empty($_SESSION['levelInterest'])) {
              foreach ($_SESSION['levelInterest'] as $level) {
              if ($level = "FP338")
              echo "Undergraduate Directing 2 (FP 338)<br/>";
            else if ($level = "FP438")
              echo "Undergraduate Directing 3 (FP 438)<br/>";
            else if ($level = "FTV130")
              echo "Visual Storytelling (FTV 130)<br/>";
            else if ($level = "FP280")
              echo "Undergraduate Intermediate Production (FP 280)<br/>";
            else if ($level = "FP331")
              echo "Undergraduate Advanced Production (FP 331)<br/>";
            else if ($level = "FP497-498")
              echo "Undergraduate Senior Thesis (FP 497-498)<br/>";
            else if ($level = "Undergraduate Digital Arts Project")
              echo "Undergraduate Digital Arts Project<br/>";
            else if ($level = "FP538")
              echo "Graduate Fundamentals of Directing 1 (FP 538)<br/>";
            else if ($level = "FP331")
              echo "Undergraduate Advanced Production (FP 331)<br/>";
            else if ($level = "FP664")
              echo "Graduate Intermediate Directing (FP 664)<br/>";
            else if ($level = "FP665")
              echo "Graduate Advanced Directing (FP 665)<br/>";
            else if ($level = "FP638")
              echo "Master class in Directing (FP 638)<br/>";
            else if ($level = "FP531")
              echo "Graduate Production Workshop 1 (FP 531)<br/>";
            else if ($level = "FP532")
              echo "Graduate Production Workshop 2 (FP 532)<br/>";
            else if ($level = "FP577")
              echo "Graduate Production Workshop 3 (FP 577)<br/>";
            else if ($level = "FP631")
              echo "Graduate Production Workshop 4 (FP 631)<br/>";
            else if ($level = "FP698")
              echo "Graduate Thesis (FP 698)<br/>";
            else if ($level = "FP507")
              echo "Graduate Filmmakers and Actors Workshop (FP 507)<br/>";
            else if ($level = "Graduate Independent Study")
              echo "Graduate Independent Study<br/>";
            else if ($level = "Other")
              echo "Other<br/>";
            else if ($level = "WP313")
              echo "Undergraduate Byte-sized Television (TWP 313)<br/>";
            else if ($level = "TWP398")
              echo "Undergraduate Television Pilots (TWP 398)";
            else if ($level = "Undergraduate Independent Study")
              echo "Undergraduate Independent Study<br/>";
            }
            }
            else
              echo "All Production Levels";
            ?>
          </h6>
          <hr>
        </div>

        <?php
          }
        ?>
        <?php

         if($_SESSION['studentRole'] == 1 OR $_SESSION['studentRole'] ==2){
            echo "Director Preferences";
        ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b></b></h5>
          <h6 class="w3-text-darkred">
            <?php
            echo "Genres: <br>";
            if (!empty($_SESSION['directorGenre'])) {
              foreach ($_SESSION['directorGenre']as $genres2) {
              echo $genres2 . "<br";
              }
            }
            else 
              echo "All Genres";
            
            echo "<br/>";
            echo "Current Production Levels: <br/>";
            if (!empty($_SESSION['directorLvl'])) {
              foreach ($_SESSION['directorLvl'] as $level2) {
              if ($level = "FP338")
                echo "Undergraduate Directing 2 (FP 338)<br/>";
              else if ($level2 = "FP438")
                echo "Undergraduate Directing 3 (FP 438)<br/>";
              else if ($level2 = "FTV130")
                echo "Visual Storytelling (FTV 130)<br/>";
              else if ($level2 = "FP280")
                echo "Undergraduate Intermediate Production (FP 280)<br/>";
              else if ($level2 = "FP331")
                echo "Undergraduate Advanced Production (FP 331)<br/>";
              else if ($level2 = "FP497-498")
                echo "Undergraduate Senior Thesis (FP 497-498)<br/>";
              else if ($level2 = "Undergraduate Digital Arts Project")
                echo "Undergraduate Digital Arts Project<br/>";
              else if ($level2 = "FP538")
                echo "Graduate Fundamentals of Directing 1 (FP 538)<br/>";
              else if ($level2 = "FP331")
                echo "Undergraduate Advanced Production (FP 331)<br/>";
              else if ($level2 = "FP664")
                echo "Graduate Intermediate Directing (FP 664)<br/>";
              else if ($level2 = "FP665")
                echo "Graduate Advanced Directing (FP 665)<br/>";
              else if ($level2 = "FP638")
                echo "Master class in Directing (FP 638)<br/>";
              else if ($level2 = "FP531")
                echo "Graduate Production Workshop 1 (FP 531)<br/>";
              else if ($level2 = "FP532")
                echo "Graduate Production Workshop 2 (FP 532)<br/>";
              else if ($level2 = "FP577")
                echo "Graduate Production Workshop 3 (FP 577)<br/>";
              else if ($level2 = "FP631")
                echo "Graduate Production Workshop 4 (FP 631)<br/>";
              else if ($level2 = "FP698")
                echo "Graduate Thesis (FP 698)<br/>";
              else if ($level2 = "FP507")
                echo "Graduate Filmmakers and Actors Workshop (FP 507)<br/>";
              else if ($level2 = "Graduate Independent Study")
                echo "Graduate Independent Study<br/>";
              else if ($level2 = "Other")
                echo "Other<br/>";
              else if ($level2 = "WP313")
                echo "Undergraduate Byte-sized Television (TWP 313)<br/>";
              else if ($level2 = "TWP398")
                echo "Undergraduate Television Pilots (TWP 398)";
              else if ($level2 = "Undergraduate Independent Study")
                echo "Undergraduate Independent Study<br/>";
              }
            }
            else
              echo "All Production Levels";
            ?>
          </h6>
          <hr>
        </div>

        <?php
          }

        ?>
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Reference:</b></h5>
          <h6 class="w3-text-darkred">
            <?php

            if (!empty($_SESSION['Ref1Name']))
            echo "Name: " . $_SESSION['Ref1Name'];

            if (!empty($_SESSION['Ref1Email']))
            echo "<br/>Email: " . $_SESSION['Ref1Email'];

            if (!empty($_SESSION['Ref1Phone']))
            echo "<br/>Phone: " . $_SESSION['Ref1Phone'] . "<br/>";

            echo "<br/><br/>";

            if (!empty($_SESSION['Ref2Name']))
            echo "Name: " . $_SESSION['Ref2Name'];

            if (!empty($_SESSION['Ref2Email']))
            echo "<br/>Email: " . $_SESSION['Ref2Email'];

            if (!empty($_SESSION['Ref2Phone']))
            echo "<br/>Phone: " . $_SESSION['Ref2Phone'] . "<br/>";

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