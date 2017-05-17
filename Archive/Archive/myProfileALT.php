<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Chapman Casting Portal</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
        <link rel="stylesheet" href="css/styleActor.css">

    
  </head>

  <body>
  
    <nav>
      <ul>
        <!-- <form action="phpscript.php" method="post"> -->
        <div class = "user" style="background-image: url('images/newUser.jpg')"></div>
        <li>
          <?php
          session_start();
          echo $_SESSION['userName'];
          ?>

        </li>
        <!-- </form> -->
        <br>

      </ul> 
    </nav>
        
  <div class = "content">

      <center><h1><img src="images/CHAPCAST.png" alt="Chapcast" style="width: 350px; height: 50px"></h1></center>

      <div class="topnav" id="myTopnav">
        <!--Opens Profile Settings Page-->
    </div>

        

      <form action="profilephp.php" method="post" target="_self">
      
        
        <center><h1>Welcome
        <?php
          echo $_SESSION['userName'];
          ?>
          !</h1></center>

        
        
        <fieldset>

          <b><label>Please enter the following basic information about yourself:</label></b><br><br>
          <!-- <label>Choose your profile picture:  </label>
          <form action="profilephp.php" method="post" target="_self">
            <input type="file" name="pic" accept="image/*" required>
          </form><br><br> -->

          <!-- <form action="profilephp.php" method="post" target="_self">
          <label>Link to previous project:  </label>
            <input type="link" name="video" accept="url">
          </form>
          <br><br> -->
          <form action="profilephp.php" method="post" target="_self">


           <form action="profilephp.php" method="post" target="_self">
          <br><br><label for="student">Major:</label><br>
          <select id="student" name="major" required>
            <option selected disabled>Select a major.</option>
            <option value="filmStudies">Film Studies</option>
            <option value="filmProduction">Film Production</option>
            <option value="digitalArts">Digital Arts</option>
            <option value="creativeProducing">Creative Producing</option>
            <option value="screenwriting">Screenwriting</option>
            <option value="publicRelationsAdvertising">Public Relations and Advertising</option>
            <option value="screenActing">Screen Acting</option>
            <option value="broadcastJournalism">News/Broadcast Journalism and Documentary</option>
            <option value="tvWritingProduction">Television Writing and Production</option>
            <option value="theatre">Theatre</option>
            <option value="theatrePerformance">Theatre Performance</option>
            <option value="dance">Dance</option>
            <option value="dancePerformance">Dance Performance</option>
            <option value="other">Other</option>
          </select><br><br>

          <br><br><label for="student">Are you an Actor, Director, or Both?:</label><br>
          <select id="student" name="student_role" onchange='showDiv(this)' required>
            <option selected disabled>Select Actor Director or Both. </option>
            <option value="0">Actor</option>
            <option value="1">Director</option>
            <option value="2">Both</option>
          </select><br><br>

          <script type="text/javascript">
          function showDiv(elem){
            if(elem.value == 0){
              document.getElementById('hidden_div').style.display = "block";
              if(document.getElementById('hidden_div2').style.display = "block")
                document.getElementById('hidden_div2').style.display = "none";
              if (document.getElementById('hidden_div3').style.display = "block")
                document.getElementById('hidden_div3').style.display = "none";
            }

            if(elem.value == 1){
              document.getElementById('hidden_div2').style.display = "block";
              if(document.getElementById('hidden_div').style.display = "block")
                document.getElementById('hidden_div').style.display = "none";
              if (document.getElementById('hidden_div3').style.display = "block")
                document.getElementById('hidden_div3').style.display = "none";
            }

            if(elem.value == 2){
              document.getElementById('hidden_div3').style.display = "block";
              if(document.getElementById('hidden_div2').style.display = "block")
                document.getElementById('hidden_div2').style.display = "none";
              if (document.getElementById('hidden_div').style.display = "block")
                document.getElementById('hidden_div').style.display = "none";
            }

            }
          </script>

          <label>Phone number:  </label><br>
            <input type="int" name="phone" required>
          <br><br>

          <br><br><label for="gender">Gender:</label><br>
          <select id="gender" name="gender_role" required>
            <option selected disabled>Select your gender.</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select><br><br>

          <label for="description">About Me:</label><br>
          <textarea name="description" id="description" cols="80" rows="10" required></textarea><br>
        </form>
          <div id="hidden_div" style="display: none;" action="profilephp.php" method="post" target="_self">

            <br><b><label>Enter the following information about your acting preferences:</label></b><br><br>
          
          <label>Input your preferred age range:</label><br>
          Lowest age:<input type="int" name="lower" min="1" max="100" required></input><br>
          Highest age:<input type="int" name="upper" min="1" max="100" required></input><br>

        
          <br><br><label>Genres you are interested to act in:</label><br>
          <input type="checkbox" id="singer" value="Singer" name="user_interest[]"><label class="light" for="singer">Singer</label><br>
          <input type="checkbox" id="dancer" value="Dancer" name="user_interest[]"><label class="light" for="dancer">Dancer</label><br>
          <input type="checkbox" id="horror" value="Horror" name="user_interest[]"><label class="light" for="horror">Horror</label><br>
          <input type="checkbox" id="comedy" value="Comedy" name="user_interest[]"><label class="light" for="comedy">Comedy</label><br>
          <input type="checkbox" id="romance" value="Romance" name="user_interest[]"><label class="light" for="romance">Romance</label><br>
          <input type="checkbox" id="western" value="Western" name="user_interest[]"><label class="light" for="western">Western</label><br>
          <input type="checkbox" id="thriller" value="Thriller" name="user_interest[]"><label class="light" for="thriller">Thriller</label><br>
          <input type="checkbox" id="animation" value="Animation" name="user_interest[]"><label class="light" for="animation">Animation</label><br>
          <input type="checkbox" id="noir" value="Film Noir" name="user_interest[]"><label class="light" for="noir">Film Noir</label><br>
          <input type="checkbox" id="documentary" value="Documentary" name="user_interest[]"><label class="light" for="documentary">Documentary</label><br>
          <input type="checkbox" id="action" value="Action" name="user_interest[]"><label class="light" for="action">Action</label><br>
          <input type="checkbox" id="adventure" value="Adventure" name="user_interest[]"><label class="light" for="adventure">Adventure</label><br>
          <input type="checkbox" id="romcom" value="Romantic Comedy" name="user_interest[]"><label class="light" for="romcom">Romantic Comedy</label><br>
          <input type="checkbox" id="drama" value="Drama" name="user_interest[]"><label class="light" for="drama">Drama</label><br>
          <input type="checkbox" id="music" value="Music" name="user_interest[]"><label class="light" for="music">Music</label><br>
          <input type="checkbox" id="historic" value="Historic" name="user_interest[]"><label class="light" for="historic">Historic</label><br>
          <input type="checkbox" id="fantacy" value="Fantacy" name="user_interest[]"><label class="light" for="fantacy">Fantacy</label><br>
          <input type="checkbox" id="scifi" value="Science Fiction" name="user_interest[]"><label class="light" for="scifi">Science Fiction</label><br>
          <input type="checkbox" id="mystery" value="Mystery" name="user_interest[]"><label class="light" for="mystery">Mystery</label><br><br><br>


          <label>Production levels you are interested in acting for:</label><br>
          <input type="checkbox" id="fp338" value="FP338" name="user_prod_interest[]"><label class="light" for="fp338">Undergraduate Directing 2 (FP 338)</label><br>
          <input type="checkbox" id="fp438" value="FP438" name="user_prod_interest[]"><label class="light" for="fp438">Undergraduate Directing 3 (FP 438)</label><br>
          <input type="checkbox" id="ftv130" value="FTV130" name="user_prod_interest[]"><label class="light" for="ftv130">Visual Storytelling (FTV 130)</label><br>
          <input type="checkbox" id="fp280" value="FP280" name="user_prod_interest[]"><label class="light" for="fp280">Undergraduate Intermediate Production (FP 280)</label><br>
          <input type="checkbox" id="fp331" value="FP331" name="user_prod_interest[]"><label class="light" for="fp331">Undergraduate Advanced Production (FP 331)</label><br>
          <input type="checkbox" id="fp497-498" value="FP497-498" name="user_prod_interest[]"><label class="light" for="fp497-498">Undergraduate Senior Thesis (FP 497-498)</label><br>
          <input type="checkbox" id="twp313" value="TWP313" name="user_prod_interest[]"><label class="light" for="twp313">Undergraduate Byte-sized Television (TWP 313)</label><br>
          <input type="checkbox" id="twp398" value="TWP398" name="user_prod_interest[]"><label class="light" for="twp398">Undergraduate Television Pilots (TWP 398)</label><br>
          <input type="checkbox" id="ugdigart" value="Undergraduate Digital Arts Project" name="user_prod_interest[]"><label class="light" for="ugdigart">Undergraduate Digital Arts Project</label><br>
          <input type="checkbox" id="ugindep" value="Undergraduate Independent Study" name="user_prod_interest[]"><label class="light" for="ugindep">Undergraduate Independent Study</label><br>
          <input type="checkbox" id="fp538" value="FP538" name="user_prod_interest[]"><label class="light" for="fp538">Graduate Fundamentals of Directing 1 (FP 538)</label><br>
          <input type="checkbox" id="fp539" value="FP539" name="user_prod_interest[]"><label class="light" for="fp539">Graduate Fundamentals of Directing 2 (FP 539)</label><br>
          <input type="checkbox" id="fp664" value="FP664" name="user_prod_interest[]"><label class="light" for="fp664">Graduate Intermediate Directing (FP 664)</label><br>
          <input type="checkbox" id="fp665" value="FP665" name="user_prod_interest[]"><label class="light" for="fp665">Graduate Advanced Directing (FP 665)</label><br>
          <input type="checkbox" id="fp638" value="FP638" name="user_prod_interest[]"><label class="light" for="fp638">Master class in Directing (FP 638)</label><br>
          <input type="checkbox" id="fp531" value="FP531" name="user_prod_interest[]"><label class="light" for="fp531">Graduate Production Workshop 1 (FP 531)</label><br>
          <input type="checkbox" id="fp532" value="FP532" name="user_prod_interest[]"><label class="light" for="fp532">Graduate Production Workshop 2 (FP 532)</label><br>
          <input type="checkbox" id="fp577" value="FP577" name="user_prod_interest[]"><label class="light" for="fp577">Graduate Production Workshop 3 (FP 577)</label><br>
          <input type="checkbox" id="fp631" value="FP631" name="user_prod_interest[]"><label class="light" for="fp631">Graduate Production Workshop 4 (FP 631)</label><br>
          <input type="checkbox" id="fp698" value="FP698" name="user_prod_interest[]"><label class="light" for="fp698">Graduate Thesis (FP 698)</label><br>
          <input type="checkbox" id="fp507" value="FP507" name="user_prod_interest[]"><label class="light" for="fp507">Graduate Filmmakers and Actors Workshop (FP 507)</label><br>
          <input type="checkbox" id="gindep" value="Graduate Independent Study" name="user_prod_interest[]"><label class="light" for="gindep">Graduate Independent Study</label><br>
          <input type="checkbox" id="other" value="Other" name="user_prod_interest[]"><label class="light" for="other">Other</label><br><br><br>


        <label for="avail">Are you currently available for a production?</label><br>
        <label for="availability">Availability:</label>
        <select id="availability" name="availability" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br><br>

          </div><br><br>


          <div id="hidden_div2" style="display: none;" action="profilephp.php" method="post" target="_self">

            <b><label>Enter the following information about directing:</label></b><br>

          <br><br><label>Favorite genres to direct:</label><br>
          <input type="checkbox" id="singer" value="Singer" name="director_interest[]"><label class="light" for="singer">Singer</label><br>
          <input type="checkbox" id="dancer" value="Dancer" name="director_interest[]"><label class="light" for="dancer">Dancer</label><br>
          <input type="checkbox" id="horror" value="Horror" name="director_interest[]"><label class="light" for="horror">Horror</label><br>
          <input type="checkbox" id="comedy" value="Comedy" name="director_interest[]"><label class="light" for="comedy">Comedy</label><br>
          <input type="checkbox" id="romance" value="Romance" name="director_interest[]"><label class="light" for="romance">Romance</label><br>
          <input type="checkbox" id="western" value="Western" name="director_interest[]"><label class="light" for="western">Western</label><br>
          <input type="checkbox" id="thriller" value="Thriller" name="director_interest[]"><label class="light" for="thriller">Thriller</label><br>
          <input type="checkbox" id="animation" value="Animation" name="director_interest[]"><label class="light" for="animation">Animation</label><br>
          <input type="checkbox" id="noir" value="Film Noir" name="director_interest[]"><label class="light" for="noir">Film Noir</label><br>
          <input type="checkbox" id="documentary" value="Documentary" name="director_interest[]"><label class="light" for="documentary">Documentary</label><br>
          <input type="checkbox" id="action" value="Action" name="director_interest[]"><label class="light" for="action">Action</label><br>
          <input type="checkbox" id="adventure" value="Adventure" name="director_interest[]"><label class="light" for="adventure">Adventure</label><br>
          <input type="checkbox" id="romcom" value="Romantic Comedy" name="director_interest[]"><label class="light" for="romcom">Romantic Comedy</label><br>
          <input type="checkbox" id="drama" value="Drama" name="director_interest[]"><label class="light" for="drama">Drama</label><br>
          <input type="checkbox" id="music" value="Music" name="director_interest[]"><label class="light" for="music">Music</label><br>
          <input type="checkbox" id="historic" value="Historic" name="director_interest[]"><label class="light" for="historic">Historic</label><br>
          <input type="checkbox" id="fantacy" value="Fantacy" name="director_interest[]"><label class="light" for="fantacy">Fantacy</label><br>
          <input type="checkbox" id="scifi" value="Science Fiction" name="director_interest[]"><label class="light" for="scifi">Science Fiction</label><br>
          <input type="checkbox" id="mystery" value="Mystery" name="director_interest[]"><label class="light" for="mystery">Mystery</label><br><br><br>


          <label>What are your current production levels/classes:</label><br>
          <input type="checkbox" id="fp338" value="FP338" name="director_prod_interest[]"><label class="light" for="fp338">Undergraduate Directing 2 (FP 338)</label><br>
          <input type="checkbox" id="fp438" value="FP438" name="director_prod_interest[]"><label class="light" for="fp438">Undergraduate Directing 3 (FP 438)</label><br>
          <input type="checkbox" id="ftv130" value="FTV130" name="director_prod_interest[]"><label class="light" for="ftv130">Visual Storytelling (FTV 130)</label><br>
          <input type="checkbox" id="fp280" value="FP280" name="director_prod_interest[]"><label class="light" for="fp280">Undergraduate Intermediate Production (FP 280)</label><br>
          <input type="checkbox" id="fp331" value="FP331" name="director_prod_interest[]"><label class="light" for="fp331">Undergraduate Advanced Production (FP 331)</label><br>
          <input type="checkbox" id="fp497-498" value="FP497-498" name="director_prod_interest[]"><label class="light" for="fp497-498">Undergraduate Senior Thesis (FP 497-498)</label><br>
          <input type="checkbox" id="twp313" value="TWP313" name="director_prod_interest[]"><label class="light" for="twp313">Undergraduate Byte-sized Television (TWP 313)</label><br>
          <input type="checkbox" id="twp398" value="TWP398" name="director_prod_interest[]"><label class="light" for="twp398">Undergraduate Television Pilots (TWP 398)</label><br>
          <input type="checkbox" id="ugdigart" value="Undergraduate Digital Arts Project" name="director_prod_interest[]"><label class="light" for="ugdigart">Undergraduate Digital Arts Project</label><br>
          <input type="checkbox" id="ugindep" value="Undergraduate Independent Study" name="director_prod_interest[]"><label class="light" for="ugindep">Undergraduate Independent Study</label><br>
          <input type="checkbox" id="fp538" value="FP538" name="director_prod_interest[]"><label class="light" for="fp538">Graduate Fundamentals of Directing 1 (FP 538)</label><br>
          <input type="checkbox" id="fp539" value="FP539" name="director_prod_interest[]"><label class="light" for="fp539">Graduate Fundamentals of Directing 2 (FP 539)</label><br>
          <input type="checkbox" id="fp664" value="FP664" name="director_prod_interest[]"><label class="light" for="fp664">Graduate Intermediate Directing (FP 664)</label><br>
          <input type="checkbox" id="fp665" value="FP665" name="director_prod_interest[]"><label class="light" for="fp665">Graduate Advanced Directing (FP 665)</label><br>
          <input type="checkbox" id="fp638" value="FP638" name="director_prod_interest[]"><label class="light" for="fp638">Master class in Directing (FP 638)</label><br>
          <input type="checkbox" id="fp531" value="FP531" name="director_prod_interest[]"><label class="light" for="fp531">Graduate Production Workshop 1 (FP 531)</label><br>
          <input type="checkbox" id="fp532" value="FP532" name="director_prod_interest[]"><label class="light" for="fp532">Graduate Production Workshop 2 (FP 532)</label><br>
          <input type="checkbox" id="fp577" value="FP577" name="director_prod_interest[]"><label class="light" for="fp577">Graduate Production Workshop 3 (FP 577)</label><br>
          <input type="checkbox" id="fp631" value="FP631" name="director_prod_interest[]"><label class="light" for="fp631">Graduate Production Workshop 4 (FP 631)</label><br>
          <input type="checkbox" id="fp698" value="FP698" name="director_prod_interest[]"><label class="light" for="fp698">Graduate Thesis (FP 698)</label><br>
          <input type="checkbox" id="fp507" value="FP507" name="director_prod_interest[]"><label class="light" for="fp507">Graduate Filmmakers and Actors Workshop (FP 507)</label><br>
          <input type="checkbox" id="gindep" value="Graduate Independent Study" name="director_prod_interest[]"><label class="light" for="gindep">Graduate Independent Study</label><br>
          <input type="checkbox" id="other" value="Other" name="director_prod_interest[]"><label class="light" for="other">Other</label><br><br><br>
          
          </div>

          <div id="hidden_div3" style="display: none;" action="profilephp.php" method="post" target="_self">


            <b><label>Enter the following information about directing:</label><br></b>
          

          <br><br><label>Favorite genres to direct:</label><br>
          <input type="checkbox" id="singer" value="Singer" name="director_interest[]"><label class="light" for="singer">Singer</label><br>
          <input type="checkbox" id="dancer" value="Dancer" name="director_interest[]"><label class="light" for="dancer">Dancer</label><br>
          <input type="checkbox" id="horror" value="Horror" name="director_interest[]"><label class="light" for="horror">Horror</label><br>
          <input type="checkbox" id="comedy" value="Comedy" name="director_interest[]"><label class="light" for="comedy">Comedy</label><br>
          <input type="checkbox" id="romance" value="Romance" name="director_interest[]"><label class="light" for="romance">Romance</label><br>
          <input type="checkbox" id="western" value="Western" name="director_interest[]"><label class="light" for="western">Western</label><br>
          <input type="checkbox" id="thriller" value="Thriller" name="director_interest[]"><label class="light" for="thriller">Thriller</label><br>
          <input type="checkbox" id="animation" value="Animation" name="director_interest[]"><label class="light" for="animation">Animation</label><br>
          <input type="checkbox" id="noir" value="Film Noir" name="director_interest[]"><label class="light" for="noir">Film Noir</label><br>
          <input type="checkbox" id="documentary" value="Documentary" name="director_interest[]"><label class="light" for="documentary">Documentary</label><br>
          <input type="checkbox" id="action" value="Action" name="director_interest[]"><label class="light" for="action">Action</label><br>
          <input type="checkbox" id="adventure" value="Adventure" name="director_interest[]"><label class="light" for="adventure">Adventure</label><br>
          <input type="checkbox" id="romcom" value="Romantic Comedy" name="director_interest[]"><label class="light" for="romcom">Romantic Comedy</label><br>
          <input type="checkbox" id="drama" value="Drama" name="director_interest[]"><label class="light" for="drama">Drama</label><br>
          <input type="checkbox" id="music" value="Music" name="director_interest[]"><label class="light" for="music">Music</label><br>
          <input type="checkbox" id="historic" value="Historic" name="director_interest[]"><label class="light" for="historic">Historic</label><br>
          <input type="checkbox" id="fantacy" value="Fantacy" name="director_interest[]"><label class="light" for="fantacy">Fantacy</label><br>
          <input type="checkbox" id="scifi" value="Science Fiction" name="director_interest[]"><label class="light" for="scifi">Science Fiction</label><br>
          <input type="checkbox" id="mystery" value="Mystery" name="director_interest[]"><label class="light" for="mystery">Mystery</label><br><br><br>


          <label>What are your current production levels/classes:</label><br>
          <input type="checkbox" id="fp338" value="FP338" name="director_prod_interest[]"><label class="light" for="fp338">Undergraduate Directing 2 (FP 338)</label><br>
          <input type="checkbox" id="fp438" value="FP438" name="director_prod_interest[]"><label class="light" for="fp438">Undergraduate Directing 3 (FP 438)</label><br>
          <input type="checkbox" id="ftv130" value="FTV130" name="director_prod_interest[]"><label class="light" for="ftv130">Visual Storytelling (FTV 130)</label><br>
          <input type="checkbox" id="fp280" value="FP280" name="director_prod_interest[]"><label class="light" for="fp280">Undergraduate Intermediate Production (FP 280)</label><br>
          <input type="checkbox" id="fp331" value="FP331" name="director_prod_interest[]"><label class="light" for="fp331">Undergraduate Advanced Production (FP 331)</label><br>
          <input type="checkbox" id="fp497-498" value="FP497-498" name="director_prod_interest[]"><label class="light" for="fp497-498">Undergraduate Senior Thesis (FP 497-498)</label><br>
          <input type="checkbox" id="twp313" value="TWP313" name="director_prod_interest[]"><label class="light" for="twp313">Undergraduate Byte-sized Television (TWP 313)</label><br>
          <input type="checkbox" id="twp398" value="TWP398" name="director_prod_interest[]"><label class="light" for="twp398">Undergraduate Television Pilots (TWP 398)</label><br>
          <input type="checkbox" id="ugdigart" value="Undergraduate Digital Arts Project" name="director_prod_interest[]"><label class="light" for="ugdigart">Undergraduate Digital Arts Project</label><br>
          <input type="checkbox" id="ugindep" value="Undergraduate Independent Study" name="director_prod_interest[]"><label class="light" for="ugindep">Undergraduate Independent Study</label><br>
          <input type="checkbox" id="fp538" value="FP538" name="director_prod_interest[]"><label class="light" for="fp538">Graduate Fundamentals of Directing 1 (FP 538)</label><br>
          <input type="checkbox" id="fp539" value="FP539" name="director_prod_interest[]"><label class="light" for="fp539">Graduate Fundamentals of Directing 2 (FP 539)</label><br>
          <input type="checkbox" id="fp664" value="FP664" name="director_prod_interest[]"><label class="light" for="fp664">Graduate Intermediate Directing (FP 664)</label><br>
          <input type="checkbox" id="fp665" value="FP665" name="director_prod_interest[]"><label class="light" for="fp665">Graduate Advanced Directing (FP 665)</label><br>
          <input type="checkbox" id="fp638" value="FP638" name="director_prod_interest[]"><label class="light" for="fp638">Master class in Directing (FP 638)</label><br>
          <input type="checkbox" id="fp531" value="FP531" name="director_prod_interest[]"><label class="light" for="fp531">Graduate Production Workshop 1 (FP 531)</label><br>
          <input type="checkbox" id="fp532" value="FP532" name="director_prod_interest[]"><label class="light" for="fp532">Graduate Production Workshop 2 (FP 532)</label><br>
          <input type="checkbox" id="fp577" value="FP577" name="director_prod_interest[]"><label class="light" for="fp577">Graduate Production Workshop 3 (FP 577)</label><br>
          <input type="checkbox" id="fp631" value="FP631" name="director_prod_interest[]"><label class="light" for="fp631">Graduate Production Workshop 4 (FP 631)</label><br>
          <input type="checkbox" id="fp698" value="FP698" name="director_prod_interest[]"><label class="light" for="fp698">Graduate Thesis (FP 698)</label><br>
          <input type="checkbox" id="fp507" value="FP507" name="director_prod_interest[]"><label class="light" for="fp507">Graduate Filmmakers and Actors Workshop (FP 507)</label><br>
          <input type="checkbox" id="gindep" value="Graduate Independent Study" name="director_prod_interest[]"><label class="light" for="gindep">Graduate Independent Study</label><br>
          <input type="checkbox" id="other" value="Other" name="director_prod_interest[]"><label class="light" for="other">Other</label><br><br><br>


            <b><label>Enter the following information about acting:</label></b><br><br>
        
          <label>Input your preferred age range:</label><br>
          Lowest age:<input type="int" name="lower" min="1" max="100" required></input><br>
          Highest age:<input type="int" name="upper" min="1" max="100" required></input><br>


          <br><br><label>Genres you are interested to act in:</label><br>
          <input type="checkbox" id="singer" value="Singer" name="user_interest[]"><label class="light" for="singer">Singer</label><br>
          <input type="checkbox" id="dancer" value="Dancer" name="user_interest[]"><label class="light" for="dancer">Dancer</label><br>
          <input type="checkbox" id="horror" value="Horror" name="user_interest[]"><label class="light" for="horror">Horror</label><br>
          <input type="checkbox" id="comedy" value="Comedy" name="user_interest[]"><label class="light" for="comedy">Comedy</label><br>
          <input type="checkbox" id="romance" value="Romance" name="user_interest[]"><label class="light" for="romance">Romance</label><br>
          <input type="checkbox" id="western" value="Western" name="user_interest[]"><label class="light" for="western">Western</label><br>
          <input type="checkbox" id="thriller" value="Thriller" name="user_interest[]"><label class="light" for="thriller">Thriller</label><br>
          <input type="checkbox" id="animation" value="Animation" name="user_interest[]"><label class="light" for="animation">Animation</label><br>
          <input type="checkbox" id="noir" value="Film Noir" name="user_interest[]"><label class="light" for="noir">Film Noir</label><br>
          <input type="checkbox" id="documentary" value="Documentary" name="user_interest[]"><label class="light" for="documentary">Documentary</label><br>
          <input type="checkbox" id="action" value="Action" name="user_interest[]"><label class="light" for="action">Action</label><br>
          <input type="checkbox" id="adventure" value="Adventure" name="user_interest[]"><label class="light" for="adventure">Adventure</label><br>
          <input type="checkbox" id="romcom" value="Romantic Comedy" name="user_interest[]"><label class="light" for="romcom">Romantic Comedy</label><br>
          <input type="checkbox" id="drama" value="Drama" name="user_interest[]"><label class="light" for="drama">Drama</label><br>
          <input type="checkbox" id="music" value="Music" name="user_interest[]"><label class="light" for="music">Music</label><br>
          <input type="checkbox" id="historic" value="Historic" name="user_interest[]"><label class="light" for="historic">Historic</label><br>
          <input type="checkbox" id="fantacy" value="Fantacy" name="user_interest[]"><label class="light" for="fantacy">Fantacy</label><br>
          <input type="checkbox" id="scifi" value="Science Fiction" name="user_interest[]"><label class="light" for="scifi">Science Fiction</label><br>
          <input type="checkbox" id="mystery" value="Mystery" name="user_interest[]"><label class="light" for="mystery">Mystery</label><br><br><br>


          <label>Production levels you are interested in acting for:</label><br>
          <input type="checkbox" id="fp338" value="FP338" name="user_prod_interest[]"><label class="light" for="fp338">Undergraduate Directing 2 (FP 338)</label><br>
          <input type="checkbox" id="fp438" value="FP438" name="user_prod_interest[]"><label class="light" for="fp438">Undergraduate Directing 3 (FP 438)</label><br>
          <input type="checkbox" id="ftv130" value="FTV130" name="user_prod_interest[]"><label class="light" for="ftv130">Visual Storytelling (FTV 130)</label><br>
          <input type="checkbox" id="fp280" value="FP280" name="user_prod_interest[]"><label class="light" for="fp280">Undergraduate Intermediate Production (FP 280)</label><br>
          <input type="checkbox" id="fp331" value="FP331" name="user_prod_interest[]"><label class="light" for="fp331">Undergraduate Advanced Production (FP 331)</label><br>
          <input type="checkbox" id="fp497-498" value="FP497-498" name="user_prod_interest[]"><label class="light" for="fp497-498">Undergraduate Senior Thesis (FP 497-498)</label><br>
          <input type="checkbox" id="twp313" value="TWP313" name="user_prod_interest[]"><label class="light" for="twp313">Undergraduate Byte-sized Television (TWP 313)</label><br>
          <input type="checkbox" id="twp398" value="TWP398" name="user_prod_interest[]"><label class="light" for="twp398">Undergraduate Television Pilots (TWP 398)</label><br>
          <input type="checkbox" id="ugdigart" value="Undergraduate Digital Arts Project" name="user_prod_interest[]"><label class="light" for="ugdigart">Undergraduate Digital Arts Project</label><br>
          <input type="checkbox" id="ugindep" value="Undergraduate Independent Study" name="user_prod_interest[]"><label class="light" for="ugindep">Undergraduate Independent Study</label><br>
          <input type="checkbox" id="fp538" value="FP538" name="user_prod_interest[]"><label class="light" for="fp538">Graduate Fundamentals of Directing 1 (FP 538)</label><br>
          <input type="checkbox" id="fp539" value="FP539" name="user_prod_interest[]"><label class="light" for="fp539">Graduate Fundamentals of Directing 2 (FP 539)</label><br>
          <input type="checkbox" id="fp664" value="FP664" name="user_prod_interest[]"><label class="light" for="fp664">Graduate Intermediate Directing (FP 664)</label><br>
          <input type="checkbox" id="fp665" value="FP665" name="user_prod_interest[]"><label class="light" for="fp665">Graduate Advanced Directing (FP 665)</label><br>
          <input type="checkbox" id="fp638" value="FP638" name="user_prod_interest[]"><label class="light" for="fp638">Master class in Directing (FP 638)</label><br>
          <input type="checkbox" id="fp531" value="FP531" name="user_prod_interest[]"><label class="light" for="fp531">Graduate Production Workshop 1 (FP 531)</label><br>
          <input type="checkbox" id="fp532" value="FP532" name="user_prod_interest[]"><label class="light" for="fp532">Graduate Production Workshop 2 (FP 532)</label><br>
          <input type="checkbox" id="fp577" value="FP577" name="user_prod_interest[]"><label class="light" for="fp577">Graduate Production Workshop 3 (FP 577)</label><br>
          <input type="checkbox" id="fp631" value="FP631" name="user_prod_interest[]"><label class="light" for="fp631">Graduate Production Workshop 4 (FP 631)</label><br>
          <input type="checkbox" id="fp698" value="FP698" name="user_prod_interest[]"><label class="light" for="fp698">Graduate Thesis (FP 698)</label><br>
          <input type="checkbox" id="fp507" value="FP507" name="user_prod_interest[]"><label class="light" for="fp507">Graduate Filmmakers and Actors Workshop (FP 507)</label><br>
          <input type="checkbox" id="gindep" value="Graduate Independent Study" name="user_prod_interest[]"><label class="light" for="gindep">Graduate Independent Study</label><br>
          <input type="checkbox" id="other" value="Other" name="user_prod_interest[]"><label class="light" for="other">Other</label><br><br><br>


        <label for="avail">Are you currently available for a production?</label><br>
        <label for="availability">Availability:</label>
        <select id="availability" name="availability" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br><br>


          </div>

          
          

           <form action="profilephp.php" method="post" target="_self">
          <center><button  VALUE="1" name ='submit'>Submit</button></center>
        </form>
        
        </fieldset>
        
      </form>



    </div>


    
  </body>
</html>

