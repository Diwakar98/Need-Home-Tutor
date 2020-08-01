<!-- 
Name: Need Home Tuor
Author: Diwakar Prajapati
Date: July 2020
Motive: To encourage student for giving local home tutions in their near locality.
        Apart from some earning, this would provided them social experience.
        This would also work as platform for finding good local near by cheap tutors to student who are not able to find a proper one.
-->

<!DOCTYPE html>
<html>
<head>
  <title>Find Your Mentor</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <div class="topnav">
    <div class="topnav_right">
      <a class="active" href="index.php">Home</a>
      <a class="inactive" href="mentors.php">Find Tutor</a>
      <a class="inactive" href="about.php">About</a>
      <a class="inactive" href="contact.php">Contact</a>
      <a class="inactive" href="profile.php">Profile</a>
      <a class="inactive" href="decideregister.php">Sign Up</a>
      <a class="inactive" href="login.php">Sign In</a>
    </div>
    <div class="topnav_left">
      <a class="logo" href="index.php"><img src="img/logo1.png"></a>
    </div>
  </div>

    <?php
  if(isset($_GET['Registration'])){
    if(strcmp($_GET['Registration'],"Valid")==0){
      echo "<script>"; echo "alert('Registration Successfull!');"; echo "</script>";
    }
  }
  ?>
  <div class="cover_image">
    <img src="img/others/11.jpg">
  </div>
  
  <div class = "section_title">
    <h1>HOW IT WORKS</h1>
  </div>

  <div class="how_it_works">
    <div class="how_it_works_card">
      <div class="how_it_works_card_title"><h2>Title1</h2></div>
      <div class="how_it_works_card_content">
        <div class="how_it_works_card_content_left">
          <img src="img/others/search.png">
        </div>
        <div class="how_it_works_card_content_right">Description2</div>
      </div>
    </div>
    <div class="how_it_works_card">
      <div class="how_it_works_card_title"><h2>Title2</h2></div>
      <div class="how_it_works_card_content">
        <div class="how_it_works_card_content_left">
          <img src="img/others/choose.png">
        </div>
        <div class="how_it_works_card_content_right">Description2</div>
      </div>
    </div>
    <div class="how_it_works_card">
      <div class="how_it_works_card_title"><h2>Title3</h2></div>
      <div class="how_it_works_card_content">
        <div class="how_it_works_card_content_left">
          <img src="img/others/tutor-icon.png">
        </div>
        <div class="how_it_works_card_content_right">Description3</div>
      </div>
    </div>
  </div>

  <div class = "section_title">
    <h1>ALL SUBJECTS OF ALL CLASSES</h1>
  </div>


  <div id="feedback_form_btn">
    <a href="feedback.php">FEEDBACK</a>
  </div>



  <div class="bottom_nav">
   <div class="bottom_nav_one">
     <h2>Need Home Tutor</h2>
     <p>
       Join our community to get best local home tutors.
     </p>
   </div>
   <div class="bottom_nav_two">
     <h2>Contact us</h2>
     <p>
       <strong>Email: </strong> needhometutor@gmail.com
     </p>
     <p>
       <strong>Address: </strong> Liluah, Howrah - 711202
     </p>
   </div>
   <div class="bottom_nav_three">
      <h2>Connect with us</h2>
      <div id = "insta">
          <img src="img/others/insta.png">
      </div>
      <div id="fb">
          <img src="img/others/fb.png"> 
      </div>
   </div>
   <div class="copyright">
     <p>Copyright 2020 by Need Home Tutor.</p>
   </div>
  </div>

</body>
</html>