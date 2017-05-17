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
        <li><a href="#Call1">...</a></li>
        <li><a href="#Call2">...</a></li> 

      </ul> 
    </nav>
        
  <div class = "content">

      <div class="topnav" id="myTopnav">
        <a href="logoutphp.php" >Log Out</a>
        <a href="profilePage.php">My Profile</a>
        <a href="directorView.php" >Director</a>
        <a href="mainPage.php" >Actor</a>
    </div>

      <form action="index.php" method="post">
      
        <center><h1>Edit Profile</h1></center>
        
        <fieldset>
          <center><label>Choose your profile picture:  </label>
          <form action="/action_page.php">
            <input type="file" name="pic" accept="image/*" required>
          </form></center><br><br>

          <center><form action="/action_page.php">
          <label>Link to previous project:  </label>
            <input type="link" name="video" accept="url">
          </form>
          </center><br><br>
          
          <label>Please enter the following information about your acting preferences:</label><br><br>
          <label> </label><br>
          <label>Age Range:</label><br>
          <input type="checkbox" id="13to15" value="age_13to15" name="user_agegroup"><label class="light" for="13to15">13 to 15</label><br>
            <input type="checkbox" id="16to20" value="age_16to20" name="user_agegroup"><label class="light" for="16to20">16 to 20</label><br>
          <input type="checkbox" id="21to25" value="age_21to25" name="user_agegroup"><label class="light" for="21to25">21 to 25</label><br>
          <input type="checkbox" id="26to30" value="age_26to30" name="user_agegroup"><label class="light" for="26to30">26 to 30</label>

        <br><br><label for="gender">Gender Role:</label><br>
        <select id="gender" name="gender_role" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        
          <br><br><label>Casting Interests (Choose all categories you are interested in):</label><br>
          <input type="checkbox" id="singer" value="interest_singer" name="user_interest"><label class="light" for="singer">Singer</label><br>
          <input type="checkbox" id="dancer" value="interest_dancer" name="user_interest"><label class="light" for="dancer">Dancer</label><br>
          <input type="checkbox" id="horror" value="interest_horror" name="user_interest"><label class="light" for="horror">Horror</label><br>
          <input type="checkbox" id="comedy" value="interest_comedy" name="user_interest"><label class="light" for="comedy">Comedy</label><br>
          <input type="checkbox" id="romance" value="interest_romance" name="user_interest"><label class="light" for="romance">Romance</label><br>
          <input type="checkbox" id="western" value="interest_western" name="user_interest"><label class="light" for="western">Western</label><br>
          <input type="checkbox" id="thriller" value="interest_thriller" name="user_interest"><label class="light" for="thriller">Thriller</label><br>
          <input type="checkbox" id="animation" value="interest_animation" name="user_interest"><label class="light" for="animation">Animation</label><br>
          <input type="checkbox" id="noir" value="interest_noir" name="user_interest"><label class="light" for="noir">Film Noir</label><br>
          <input type="checkbox" id="documentary" value="interest_documentary" name="user_interest"><label class="light" for="documentary">Documentary</label><br>
          <input type="checkbox" id="action" value="interest_action" name="user_interest"><label class="light" for="action">Action</label><br>
          <input type="checkbox" id="adventure" value="interest_adventure" name="user_interest"><label class="light" for="adventure">Adventure</label><br>
          <input type="checkbox" id="romcom" value="interest_romcom" name="user_interest"><label class="light" for="romcom">Romantic Comedy</label><br>
          <input type="checkbox" id="drama" value="interest_drama" name="user_interest"><label class="light" for="drama">Drama</label><br>
          <input type="checkbox" id="music" value="interest_music" name="user_interest"><label class="light" for="music">Music</label><br>
          <input type="checkbox" id="historic" value="interest_historic" name="user_interest"><label class="light" for="historic">Historic</label><br>
          <input type="checkbox" id="fantacy" value="interest_fantacy" name="user_interest"><label class="light" for="fantacy">Fantacy</label><br>
          <input type="checkbox" id="scifi" value="interest_scifi" name="user_interest"><label class="light" for="scifi">Science Fiction</label><br>
          <input type="checkbox" id="mystery" value="interest_mystery" name="user_interest"><label class="light" for="mystery">Mystery</label><br><br><br>


          <label>Production Levels of Interest (Choose all that are of interest):</label><br>
          <input type="checkbox" id="fp338" value="interest_fp338" name="user_prod_interest"><label class="light" for="fp338">Undergraduate Directing 2 (FP 338)</label><br>
          <input type="checkbox" id="fp438" value="interest_fp438" name="user_prod_interest"><label class="light" for="fp438">Undergraduate Directing 3 (FP 438)</label><br>
          <input type="checkbox" id="ftv130" value="interest_ftv130" name="user_prod_interest"><label class="light" for="ftv130">Visual Storytelling (FTV 130)</label><br>
          <input type="checkbox" id="fp280" value="interest_fp280" name="user_prod_interest"><label class="light" for="fp280">Undergraduate Intermediate Production (FP 280)</label><br>
          <input type="checkbox" id="fp331" value="interest_fp331" name="user_prod_interest"><label class="light" for="fp331">Undergraduate Advanced Production (FP 331)</label><br>
          <input type="checkbox" id="fp497-498" value="interest_fp497-498" name="user_prod_interest"><label class="light" for="fp497-498">Undergraduate Senior Thesis (FP 497-498)</label><br>
          <input type="checkbox" id="twp313" value="interest_twp313" name="user_prod_interest"><label class="light" for="twp313">Undergraduate Byte-sized Television (TWP 313)</label><br>
          <input type="checkbox" id="twp398" value="interest_twp398" name="user_prod_interest"><label class="light" for="twp398">Undergraduate Television Pilots (TWP 398)</label><br>
          <input type="checkbox" id="ugdigart" value="interest_ugdigart" name="user_prod_interest"><label class="light" for="ugdigart">Undergraduate Digital Arts Project</label><br>
          <input type="checkbox" id="ugindep" value="interest_ugindep" name="user_prod_interest"><label class="light" for="ugindep">Undergraduate Independent Study</label><br>
          <input type="checkbox" id="fp538" value="interest_fp538" name="user_prod_interest"><label class="light" for="fp538">Graduate Fundamentals of Directing 1 (FP 538)</label><br>
          <input type="checkbox" id="fp539" value="interest_fp539" name="user_prod_interest"><label class="light" for="fp539">Graduate Fundamentals of Directing 2 (FP 539)</label><br>
          <input type="checkbox" id="fp664" value="interest_fp664" name="user_prod_interest"><label class="light" for="fp664">Graduate Intermediate Directing (FP 664)</label><br>
          <input type="checkbox" id="fp665" value="interest_fp665" name="user_prod_interest"><label class="light" for="fp665">Graduate Advanced Directing (FP 665)</label><br>
          <input type="checkbox" id="fp638" value="interest_fp638" name="user_prod_interest"><label class="light" for="fp638">Master class in Directing (FP 638)</label><br>
          <input type="checkbox" id="fp531" value="interest_fp531" name="user_prod_interest"><label class="light" for="fp531">Graduate Production Workshop 1 (FP 531)</label><br>
          <input type="checkbox" id="fp532" value="interest_fp532" name="user_prod_interest"><label class="light" for="fp532">Graduate Production Workshop 2 (FP 532)</label><br>
          <input type="checkbox" id="fp577" value="interest_fp577" name="user_prod_interest"><label class="light" for="fp577">Graduate Production Workshop 3 (FP 577)</label><br>
          <input type="checkbox" id="fp631" value="interest_fp631" name="user_prod_interest"><label class="light" for="fp631">Graduate Production Workshop 4 (FP 631)</label><br>
          <input type="checkbox" id="fp698" value="interest_fp698" name="user_prod_interest"><label class="light" for="fp698">Graduate Thesis (FP 698)</label><br>
          <input type="checkbox" id="fp507" value="interest_fp507" name="user_prod_interest"><label class="light" for="fp507">Graduate Filmmakers and Actors Workshop (FP 507)</label><br>
          <input type="checkbox" id="gindep" value="interest_gindep" name="user_prod_interest"><label class="light" for="gindep">Graduate Independent Study</label><br>
          <input type="checkbox" id="other" value="interest_other" name="user_prod_interest"><label class="light" for="other">Other</label><br><br><br>


        <label for="avail">Please specify below if you are currently avaliable for filming:</label><br>
        <label for="availability">Availability:</label>
        <select id="availability" name="availability" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br><br>

        <label for="references">Below provide at two references directors can contact:</label><br><br>
        <label for="reference1">Reference 1:</label><br>
          Full Name:<br>
          <input type="text" name="fullname1" ><br><br>
          Email Address:<br>
          <input type="email" email="email1" ><br><br>
          Phone Number:<br>
          <input type="tel" phone="phone1" ><br><br><br>

        <label for="reference1">Reference 2:</label><br>
          Full Name:<br>
          <input type="text" name2="fullname2"><br><br>
          Email Address:<br>
          <input type="email" email2="email2"><br><br>
          Phone Number:<br>
          <input type="tel" phone2="phone2"><br><br>

          <center><button >Submit</button></center>

        
        </fieldset>
        
      </form>



    </div>


    
  </body>
</html>
