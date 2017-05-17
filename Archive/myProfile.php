

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

      </ul> 
    </nav>
        
  <div class = "content">

      <br/>

      <!-- <div class="topnav" id="myTopnav">
        <a href="logoutphp.php" >Log Out</a> -->
        <!-- <a href="editProfile.php" >Settings</a> -->
        <!-- <a href="profilePage.php" >My Profile</a>
        <a href="mainPage.php" >Casting Calls</a>
        <a href="directorView.php" >Actors</a>
 
    </div> -->

        <br/><center><h1>Welcome <?php echo $_SESSION['userName']; ?>!</h1></center>

        <form action="profilephp.php" method="post">

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


    <!-- Right Column -->
    <center><div class="w3-twothird"></center>
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-grey"></i>
        </h2>
            <form action="newcastingphp.php" method="post">
        
        <fieldset>

          <?php
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

            echo "<label>Please enter the following basic information about yourself:</label><br><br>";

            echo "<label>Choose your profile picture:</label><br>";
            echo "<form action='profilephp.php' method='POST' enctype='multipart/form-data'>
                  <input type='file' name='file'><br><br>
                  </form>";


            echo "<br><br><label for='student'>Major:</label><br>";
            echo "<select id='student' name='student_major' required>";
            echo "<b><option selected disabled>Select your major:</option></b>";

            $result = $conn->query("CALL ReturnMajors()");
            if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                 echo "<option value='" . $row['Major'] . "''>". $row['Major'] . "</option>";
            } 
          }
          $conn->close();
          //$result->close();
          echo "<br>";
          echo "</select><br>";

          echo "<br><br><label for='gender'>Gender:</label><br>";
          echo "<select id='gender' name='gender_role' required>";
            echo "<option selected disabled>Select you gender:</option>";
            echo "<option value='Male'>Male</option>";
            echo "<option value='Female'>Female</option>";
          echo "</select><br><br>";

          echo "<label>Phone number: (xxx)xxx-xxxx </label><br>";
            echo "<input pattern='[[\(]\d{3}[\)]\d{3}[\-]\d{4}' type='int' name='phone' placeholder='(xxx)xxx-xxxx'required><br><br>";

          echo "<label>Link to your reel.</label><br>";
          echo "<input type='url' name='reelLink'><br><br>";

          echo "<label for='description'>About Me:</label><br>";
          echo "<textarea name='description' id='description' cols='80' rows='10' required></textarea><br><br>";

          echo "<br><label for='student'>Are you an Actor, Director, or Both?:</label><br>";
          echo "<select id='student' name='student_role' required>";
            echo "<option selected disabled>Select actor, director, or both:</option>";
            echo "<option value='actor'>Actor</option>";
            echo "<option value='director'>Director</option>";
            echo "<option value='both'>Both</option>";
          echo "</select><br><br><br>";

          echo "<b><label>Enter the following information about acting:</label></b><br><br>";


          echo "<br><label for='student'>Are you currently available for a role?:</label><br>";
          echo "<select id='student' name='available' required>";
            echo "<option selected disabled>Available:</option>";
            echo "<option value='Yes'>Yes</option>";
            echo "<option value='No'>No</option>";
          echo "</select><br><br><br>";

        
          echo "<label>Input your preferred age range:</label><br>";
          echo "Lowest age:<input type='int' name='lower' min='1' max='100' required></input><br>";
          echo "Highest age:<input type='int' name='upper' min='1' max='100' required></input><br>";


          echo "<br><br><b><label>Genres you are interested to act in:</label></b><br>";
          ?>
          <script language="JavaScript">
          function toggle(source) {
            checkboxes = document.getElementsByName('user_interest[]');
            for(var i=0, n=checkboxes.length;i<n;i++) {
              checkboxes[i].checked = source.checked;
            }
          }
          function toggle2(source) {
            checkboxes = document.getElementsByName('user_prod_interest[]');
            for(var i=0, n=checkboxes.length;i<n;i++) {
              checkboxes[i].checked = source.checked;
            }
          }
          </script>
          <input type="checkbox" onClick="toggle(this)" /> Select All<br/>
          <?php
          $conn = new mysqli($servername, $username, $password, $databasename);
          $result = $conn->query("CALL ReturnGenre()");
          if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {

                 echo "<input type='checkbox' id=' " . $row['GenreName'] . "' value= '" . $row['GenreName']  . "' name='user_interest[]'><label class='light' for='singer'>" . $row['GenreName'] ."</label><br>";
            } 
          }
          $conn->close();
          //$genreRes->close();
          echo "<br>";

          echo "<b><label>Production levels you are interested in acting for:</label></b><br>";
          echo "<input type='checkbox' onClick='toggle2(this)' /> Select All<br/>";
          $conn = new mysqli($servername, $username, $password, $databasename);
          $result = $conn->query("CALL ReturnAllProdLvL()");
          if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {

                 echo "<input type='checkbox' id=' " . $row['LVLName'] . "' value= '" . $row['LVLName']  . "' name='user_prod_interest[]'><label class='light' for='singer'>" . $row['LVLName'] ."</label><br>";
            } 
          }
          echo "<br>";

          //$result->close;
          $conn->close();


          ?>
          <center><button name='submit' VALUE='1' style="height:50px; width:250px; background-color: #990026; color: #FFFFFF" >Submit</button></center>
          </div>

        <form action="profilephp.php" method="post" target="_self">

          

        </form>

        
          </fieldset>
        </form>


          </h5>
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