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
        <!-- <a href="editProfile.php" >Settings</a> --> <!--Opens Profile Settings Page-->
        <a href="profilePage.php" >My Profile</a>
        <a href="mainPage.php" >Casting Calls</a>
        <a href="directorView.php" >Actors</a>
 
    </div>

        <br/><center><h1>Create New Casting Call</h1></center>

        <form action="newcastingphp.php" method="post">

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
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-film fa-fw w3-margin-right w3-xxlarge w3-text-grey"></i>
        </h2>
            <form action="newcastingphp.php" method="post">
        
        <fieldset>

          
          <!-- <label>Film Poster:</label>
            <input type="file" name="filmposter" accept="image/*"><br><br><br> -->


          <label for="title">Title:</label>
          <input type="text" id="title" name="title" required><br><br>

          <label for="description">Description:</label><br>
          <textarea name="description" id="description" cols="80" rows="10" required></textarea><br><br>

          <!-- <label for="script">Script:</label>
          <input type="file" id="script" name="script" accept="application/pdf" required><br><br><br> -->

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

            echo "<label for='prodlevel'>Level of Production:</label><br>";
            echo "<select id='prodlevel' name='prodlevel' required>";
            echo "<option selected disabled>Choose the Level of Production:</option>";
            $conn = new mysqli($servername, $username, $password, $databasename);
            $result = $conn->query("CALL ReturnAllProdLvL()");
            if ($result->num_rows > 0) {

              while($row = $result->fetch_assoc()) {

                 echo"<option name='prodlevel' value='". $row['LVLName'] ."'>". $row['LVLName'] ."</option>";
            } 
          }

          echo "</select><br><br>";
          $conn->close();
          ?>

          <label for="startdate">Filming Date: </label>
          <input type="date" id="filmdate" name="filmdate" min="<?php echo date("Y-m-d"); ?>" required><br>

          <br><label for="auditionlocation">Audition Location:</label>
          <input type="text" id="auditionlocation" name="auditionlocation"  required><br><br>


          <label for="auditiondate">Audition Date:</label>
          <input type="date" id="auditiondate" name="auditiondate" min="<?php echo date("Y-m-d"); ?>" required><br><br>

          <br><br><label><b> Please specify all roles you are currently casting for. </b></label><br><br>

          <script type="text/javascript">
            var counter = 1;
            var limit = 20;
            function addInput(divName){
                 if (counter == limit)  {
                      alert("You have reached the limit of adding " + counter + " inputs");
                 }
                 else {
                      var newdiv = document.createElement('div');
                      newdiv.innerHTML = "<br>"+"<b>Role </b>" + (counter + 1) +"<br>Name:" +" <br><input type='text' name='myInputs[]'><br><br>"
          +"Description: <br>"+"<textarea name='roledescriptionInputs[]' id='roledescription' cols='50' rows='5'></textarea><br><br>"
          +"Gender: <br>"+"<select id='rolegender' name='rolegenderInputs[]'>"
          +"<option selected disabled>Choose Role Gender:</option>"
          +"<option value='male'>Male</option>"
          +"<option value='female'>Female</option>"
          +"<option value='open'>Open</option></select><br><br>"
          +"Role Ethnicity:"+"<br><select id='roleEthnicity' name='ethnicityInputs[]''><br><br>"
          +"<option selected disabled>Choose Role Ethnicity:</option>"
          +"<option value='open'>Open</option>"
          +"<option value='hispanic'>Hispanic or Latino</option>"
          +"<option value='americanIndian'>American Indian or Alaska Naitive</option>"
          +"<option value='africanAmerican'>Black or African American</option>"
          +"<option value='asianIndian'>Asian Indian</option>"
          +"<option value='filipino'>Filipino</option>"
          +"<option value='korean'>Korean</option>"
          +"<option value='vietnamese'>Vietnamese</option>"
          +"<option value='white'>White</option>"
          +"<option value='nativeHawaiian'>Native Hawaiian</option>"
          +"<option value='guamanianChamorro'>Guamanian or Chamorro</option>"
          +"<option value='samoan'>Samoan</option>"
          +"<option value='other'>Other</option>"
          +"</select><br><br>"
          +"<label>Role age:</label><br>"
          +"<br><input type='int' name='roleAge' min='1' max='100' required></input><br>"

          ;
                      document.getElementById(divName).appendChild(newdiv);
                      counter++;
                 }
            }
          </script>
           <form method="POST">
               <div id="dynamicInput">
                    <b>Role 1</b><br>
                    Name:<br><input type="text" name="myInputs[]"><br><br>
                    Role Description:<br><textarea name="roledescriptionInputs[]" id="roledescription" cols="50" rows="5"></textarea><br>
                    Role Gender:<br><select id="rolegender" name="rolegenderInputs[]"><br><br>
                      <option selected disabled>Choose Role Gender:</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="open">Open</option>
                    </select><br><br>

                    Role Ethnicity:<br><select id="roleEthnicity" name="ethnicityInputs[]"><br><br>
                      <option selected disabled>Choose Role Ethnicity:</option>
                      <option value="open">Open</option>
                      <option value="hispanic">Hispanic or Latino</option>
                      <option value="americanIndian">American Indian or Alaska Naitive</option>
                      <option value="africanAmerican">Black or African American</option>
                      <option value="asianIndian">Asian Indian</option>
                      <option value="filipino">Filipino</option>
                      <option value="korean">Korean</option>
                      <option value="vietnamese">Vietnamese</option>
                      <option value="white">White</option>
                      <option value="nativeHawaiian">Native Hawaiian</option>
                      <option value="guamanianChamorro">Guamanian or Chamorro</option>
                      <option value="samoan">Samoan</option>
                      <option value="other">Other</option>
                    </select><br><br>

                    <label>Role age:</label><br>
                    <input type="int" name="roleAge" min="1" max="100" required></input><br><br>
                </div>
               <input buttonblock type="button" value="Add another role" onClick="addInput('dynamicInput');">
          </form> 

<center><button name='submit' VALUE='1' style="height:50px; width:250px; background-color: #990026; color: #FFFFFF" >Submit</button></center>
               
        
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
