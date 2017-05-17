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
      
    <br/>  
    
    <div class = "content">

      <div class="topnav" id="myTopnav">
        <a href="logoutphp.php" >Log Out</a>
        <!-- <a href="editProfile.php">Settings</a> --> <!--Opens Profile Settings Page-->
        <a href="profilePage.php">My Profile</a>
        <a href="mainPage.php">Casting Calls</a>
        <a href="">Actors</a>
      </div>

      <div class="rejilla">
        <?php
          $servername = "us-cdbr-azure-west-b.cleardb.com";
          $username = "b9196a4d86ae8a";
          $password = "864b7a39";
          $databasename = "se_group1_capstone";

          $conn = new mysqli($servername, $username, $password, $databasename);
          $result = $conn->query("SELECT RefName FROM actorref");

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

                echo "<div class='caja'><img src='images/newUser.jpg'/>";
                echo "<p>".$row['RefName']."</p>";
                echo "<div class='shadow-3'></div>";
                echo "</div>";
                  
              }
          } else {
              echo "Error Occurred while loading this page.";
          }
        ?>
       

       <!--  <div class="caja"><img src="actors/cap.jpg"/>
          <p>Chris Evans</p>
          <p>"Captain America"</p>
          <div class="shadow-3"></div>
        </div>

        <div class="caja"><img src="actors/annaK.jpg"/>
          <p>Anna Kendrick</p>
          <p>"Pitch Perfect"</p>
        </div>

        <div class="caja"><img src="actors/bey.jpeg"/>
          <p>Beyonce</p>
          <p>Lemonade</p>
        </div>

        <div class="caja"><img src="actors/blackWidow.jpg"/>
          <p>Scarlett Johanssen</p>
          <p>"The Avengers"</p>
        </div>

        <div class="caja"><img src="actors/chrisHems.jpeg"/>
          <p>Chris Hemsworth</p>
          <p>"Thor"</p>
        </div>

        <div class="caja"><img src="actors/jgl.jpg"/>
          <p>Joseph Gordon-Levitt</p>
          <p>"The Night Before"</p>
        </div>

        <div class="caja"><img src="actors/rGos.jpeg"/>
          <p>Ryan Gosling</p>
          <p>"La La Land"</p>
        </div>

        <div class="caja"><img src="actors/zoeS.jpg"/>
          <p>Zoe Saldana</p>
          <p>"The Gaurdians of the Galaxy"</p>
        </div>

        <div class="caja"><img src="actors/angJ.jpg"/>
          <p>Angelina Jolie</p>
          <p>"Mr. and Mrs. Smith"</p>
        </div>

        <div class="caja"><img src="actors/chrisP.jpg"/>
          <p>Chris Pratt</p>
          <p>"The Guardians of the Galaxy"</p>
        </div>

        <div class="caja"><img src="actors/cobieS.jpeg"/>
          <p>Cobie Smulders</p>
          <p>"The Avengers"</p>
        </div>

        <div class="caja"><img src="actors/danielR.jpg"/>
          <p>Daniel Radcliffe</p>
          <p>"Harry Potter"</p>
        </div>

        <div class="caja"><img src="actors/donaldG.jpg"/>
          <p>Donald Glover</p>
          <p>"Atlanta"</p>
        </div>

        <div class="caja"><img src="actors/emmaW.jpg"/>
          <p>Emma Watson</p>
          <p>"Beauty and the Beast"</p>
        </div>

        <div class="caja"><img src="actors/galG.jpg"/>
          <p>Gal Gadot</p>
          <p>Wonder Woman</p>
        </div>

        <div class="caja"><img src="actors/emmaS.jpeg"/>
          <p>Emma Stone</p>
          <p>"La La Land"</p>
        </div>

        <div class="caja"><img src="actors/ashK.jpg"/>
          <p>Ashton Kutcher</p>
          <p>"That 70's Show"</p>
        </div>

        <div class="caja"><img src="actors/jamieC.jpg"/>
          <p>Jamie Chung</p>
          <p>"Once Upon a Time"</p>
        </div>

        <div class="caja"><img src="actors/mattB.jpg"/>
          <p>Matt Bomer</p>
          <p>"White Collar"</p>
        </div>

        <div class="caja"><img src="actors/michelleR.jpg"/>
          <p>Michelle Rodriguez</p>
          <p>"Fast and Furious"</p>
        </div>

        <div class="caja"><img src="actors/milaK.jpg"/>
          <p>Mila Kunis</p>
          <p>"Bad Moms"</p>
        </div>

        <div class="caja"><img src="actors/nph.jpg"/>
          <p>Neil Patrick Harris</p>
          <p>"How I Met Your Mother"</p>
        </div>

        <div class="caja"><img src="actors/paulW.jpg"/>
          <p>Paul Walker</p>
          <p>"Fast and Furious"</p>
        </div>

        <div class="caja"><img src="actors/selG.jpg"/>
          <p>Selena Gomez</p>
          <p>"Wizards of Waverly Place"</p>
        </div>

        <div class="caja"><img src="actors/vinD.jpg"/>
          <p>Vin Diesel</p>
          <p>"Fast and Furious"</p>
        </div>

        <div class="caja"><img src="actors/jLaw.jpg"/>
          <p>Jennifer Lawrence</p>
          <p>"The Hunger Games"</p>
        </div>

        <div class="caja"><img src="actors/rdj.jpg"/>
          <p>Robert Downey Jr.</p>
          <p>"Iron Man"</p>
        </div>

        <div class="caja"><img src="actors/markR.jpg"/>
          <p>Mark Ruffalo</p>
          <p>"The Hulk"</p>
        </div> -->

      </div>

    </div>
    
  </body>
</html>
