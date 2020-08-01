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
      <a class="active" href="decideregister.php">Sign Up</a>
      <a class="inactive" href="login.php">Sign In</a>
    </div>
    <div class="topnav_left">
      <a class="logo" href="index.php"><img src="img/logo1.png"></a>
    </div>
  </div>


  <div class="wrapper fadeIn">
  <div id="formContent">
    <!-- Tabs Titles -->
    <label style="position: relative; top:15px; padding-bottom: 20px; font-size: 25px; font-family: sans-serif; font-weight: 600; color: #525253" >REGISTER</label>
    <HR style ="border: 1px solid #dce8f1;position: relative; top:15px; width: 380px">
    <div style="text-align: center; font-size: 15px; font-weight: 600; display:inline-block; color: #cccccc;">
      <a href="register_as_tutor.php"><h2 class="active" style="margin-right: 20px">AS A TUTOR </h2></a>
    <a href="register_as_student.php"><h2 class="inactive underlineHover">AS A STUDENT </h2></a>
    </div>
    <!-- Icon -->
    <!-- <div class="fadeIn first">
      <img src="IITD_Black.jpg" id="icon" alt="User Icon" />
    </div> -->

    <?php
      if(isset($_GET["Registration"])){
        $valid = $_GET["Registration"];
        if(strcmp($valid, "Invalid")==0){
          $getname = $_GET["Username"];
          print "<p>Username: $getname, has already been taken.</p>";
          print "<p>Enter different username</p>";
        }
      }
      ?>

    <!-- Login Form -->
    <form action="register_as_tutor.php">
      <input type="hidden" name="Type" value="Tutor">

      <input type="text" id="FirstName" name="FirstName" placeholder="First Name" required>
      <input type="text" id="LastName" name="LastName" placeholder="LastName" required>
      <input type="text" id="Age" name="Age" placeholder="Age" required>
      <input type="text" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number" required>
      <input type="text" id="Address" name="Address" placeholder="Address">
      <input type="text" id="Username" name="Username" placeholder="Username" required>
      <input type="text" id="Password" name="Password" placeholder="Password" required>
      <div class="fadeIn first">

      <div id="gender" style="color: #3E3E40">
        <label style="margin-right: 30px">Gender :</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male" style="margin-right: 20px">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female" style="margin-right: 20px">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
      </div>


      <div class="subject" style="margin-top: 5px; padding-top: 10px">
        <label style="color: #000000"><strong>Subjects:</strong></label>
        <HR style =" border: 1px solid #dce8f1; border-radius: 2px;">
        <div id="subject_row">
          <input type="checkbox" name="Subject[]" value="Physics">
          <label for="Physics" style="margin-right: 25px">Physics</label>
          <input type="checkbox" name="Subject[]" value="Chemistry">
          <label for="Chemistry" style="margin-right: 19px">Chemistry</label>
          <input type="checkbox" name="Subject[]" value="Biology">
          <label for="Biology">Biology</label>
        </div>
        <div id="subject_row">
          <input type="checkbox" name="Subject[]" value="Maths">
          <label for="Maths" style="margin-right: 34px">Maths</label>
          <input type="checkbox" name="Subject[]" value="History">
          <label for="History" style="margin-right: 48px">History</label>
          <input type="checkbox" name="Subject[]" value="Geography">
          <label for="Geography">Geography</label>
        </div>
        <div id="subject_row">
          <input type="checkbox" name="Subject[]" value="English">
          <label for="English" style="margin-right: 28px">English</label>
          <input type="checkbox" name="Subject[]" value="Computer">
          <label for="Computer" style="margin-right: 19px">Computer</label>
          <input type="checkbox" name="Subject[]" value="Commerce">
          <label for="Commerce">Commerce</label>
        </div>
        <div id="subject_row">
          <input type="checkbox" name="Subject[]" value="Hindi">
          <label for="Hindi" style="margin-right: 43px">Hindi</label>
          <input type="checkbox" name="Subject[]" value="Bengali">
          <label for="Bengali" style="margin-right: 42px">Bengali</label>
          <input type="checkbox" name="Subject[]" value="SocialStudies">
          <label for="SocialStudies">Social Stud.</label>
        </div>
        <div id="subject_row">
          <input type="checkbox" name="Subject[]" value="Sanskrit">
          <label for="Sanskrit" style="margin-right: 21px">Sanskrit</label>
          <input type="checkbox" name="Subject[]" value="Science">
          <label for="Science" style="margin-right: 38px">Science</label>
          <input type="checkbox" name="Subject[]" value="Economics">
          <label for="Economics">Economics</label>
        </div>
        <div id="subject_row">
          <input type="checkbox" name="Subject[]" value="EVS">
          <label for="EVS" style="margin-right: 55px">EVS</label>
          <input type="checkbox" name="Subject[]" value="PhysicalEducation">
          <label for="PhysicalEducation">Physical Education</label>
        </div>
      </div>



      <div class="class_pref" style="margin-top: 5px; padding-top: 10px">
        <label style="color: #000000"><strong>Classes you would like to teach</strong></label>
        <HR style =" border: 1px solid #dce8f1; border-radius: 2px;">
        <div id="class_pref_row">
          <input type="checkbox" name="Class[]" value="nursery">
          <label for="nursery" style="margin-right: 38px">Nursery</label>
          <input type="checkbox" name="Class[]" value="kg">
          <label for="kg">KG</label>
        </div>
        <HR style =" border: 1px solid #e7db74; width: 300px; border-radius: 2px;">
        <div id="class_pref_row">
          <input type="checkbox" name="Class[]" value="1">
          <label for="1" style="margin-right: 30px">1</label>
          <input type="checkbox" name="Class[]" value="2">
          <label for="2" style="margin-right: 30px">2</label>
          <input type="checkbox" name="Class[]" value="3">
          <label for="3" style="margin-right: 30px">3</label>
          <input type="checkbox" name="Class[]" value="4">
          <label for="4" style="margin-right: 30px">4</label>
          <input type="checkbox" name="Class[]" value="5">
          <label for="5" style="margin-right: 30px">5</label>
        </div>
        <HR style =" border: 1px solid #e7db74; width: 300px; border-radius: 2px;">
        <div id="class_pref_row">
          <input type="checkbox" name="Class[]" value="6">
          <label for="6" style="margin-right: 25px">6</label>
          <input type="checkbox" name="Class[]" value="7">
          <label for="7" style="margin-right: 30px">7</label>
          <input type="checkbox" name="Class[]" value="8">
          <label for="8" style="margin-right: 30px">8</label>
        </div>
        <HR style =" border: 1px solid #e7db74; width: 300px; border-radius: 2px;">
        <div id="class_pref_row">
          <input type="checkbox" name="Class[]" value="9">
          <label for="9" style="margin-right: 25px">9</label>
          <input type="checkbox" name="Class[]" value="10">
          <label for="10" style="margin-right: 19px">10</label>
        </div>
        <HR style =" border: 1px solid #e7db74; width: 300px; border-radius: 2px;">
        <div id="class_pref_row">
          <input type="checkbox" name="Class[]" value="11">
          <label for="11" style="margin-right: 25px">11</label>
          <input type="checkbox" name="Class[]" value="12">
          <label for="12" style="margin-right: 19px">12</label>
        </div>
      </div>
      <div class="experience" style="margin-top: 5px; padding-top: 10px">
        <label> Teaching Experience(in brief): </label>
        <HR style =" border: 1px solid #dce8f1; border-radius: 2px;">
        <textarea id="Experience" name="Experience" rows="4" cols="50" required></textarea>
      </div>

      <input type="submit" style="margin-top: 20px" marvalue="REGISTER" value="REGISTER">
    </div>

    </form>
  </div>
</div>


</body>
</html>