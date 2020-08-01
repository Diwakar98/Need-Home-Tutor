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
      <a class="inactive" href="index.php">Home</a>
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

  <div class="feedback_form">
    <form action = "feedback.php">
      <div id="feedback_form_left">
        <div id = "feedback_form_title">
          <h2>FEEDBACK FORM</h2>
        </div>
        <div id = "feedback_form_name">
          <label>Name:</label>
          <input type="text" name="name" placeholder="Optional">
        </div>
        <div id="feedback_form_email">
          <label>Email:</label>
          <input type="text" name="email" placeholder="e.g: abc@xyz.com" required>
        </div>
        <div id="feedback_form_feed">
          <label>Feedback:</label>
          <textarea name="feedback" rows="4" cols="50" required></textarea>
        </div>
        <div id = "feedback_form_submit_btn">
          <input type="submit" name="Submit" value="Submit" style="margin-left: 240px">
        </div>
      </div>
      <div id="feedback_form_right">
        <img src="img/love_your_feedback.png">
      </div>
    </form>
  </div>

  <?php
    print "<h2>HELLO1<h2>";
    if(isset($_GET['email']) && isset($_GET['feedback'])){
      $name="";
      if(isset($_GET['name'])) $name = $_GET['name'];
      $subject = "Feedback form " + $name;
      $msg = $_GET['feedback'];
      $email = $_GET['email'];
      print "initial = $email";
      print "filitered = $email";
      print "mss = $msg";
      $sent = mail($email,$subject,$msg);
      if($sent){
        print "<h2>DONE</h2>";
      }
      else{
        print "<h2>ERROR</h2>";
      }
    }
  ?>


</body>
</html>