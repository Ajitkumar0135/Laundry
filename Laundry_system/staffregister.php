<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | staffregister</title>
  <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
  <style>
    .navactive {
      color: white;
      background-color: #bcb562;
    }
  </style>
</head>
<nav>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="logo.jpg" />
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <div class="topnav">
        <ul>
          <li><a href="staffmanagement.php">Home</a></li>
          <li><a href="staffregister.php">Sign up</a></li>
          <li><a href="staffsignin.php">Log in</a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="aboutus.php">About us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<body>

  <div class="registerContent">
    <div class="registerDiv">
      <h1>Sign Up (STAFF,ADMIN)</h1>
      <hr>
      <br>
      <form action="finishregister.php" method="post">
        <label for="status">Status</label>
        <select class="statusSelect" name="status">
          <option value="ADMIN">Admin</option>
          <option value="STAFF">Staff</option>
        </select>

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstName" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastName" placeholder="Your last name..">

        <label for="status">Gender</label>
        <select class="statusSelect" name="gender">
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select>

        <label for="citizenNo">Citizen Number</label>
        <input type="text" id="citizenNo" name="citizenNumber" placeholder="Ex. 114220014xx">

        <label for="dob">Date of birth</label>
        <input type="date" id="dob" name="dateOfBirth" placeholder=""><br>

        <label for="mobileNo">Mobile Number</label>
        <input type="text" id="mobileNo" name="mobileNumber" placeholder="Ex. 0111111111">

        <label for="address">Address</label>
        <input type="address" id="address" name="address" placeholder="Phahonyothin Rd, Tambon Khlong Nung, Amphoe Khlong Luang, Chang Wat Pathum Thani 12120">

        <label for="mail">Email</label>
        <input type="text" id="mail" name="email" placeholder="Your Email">

        <label for="userid">ID for this website</label>
        <input type="text" id="userid" name="userId" placeholder="Your ID">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password">

        <label for="rePassword">Retype Password</label>
        <input type="password" id="rePassword" name="rePassword" placeholder="Your password">


        <input type="submit" name="staffRegisterSubmit" value="Submit">
      </form>
    </div>
  </div>
  <div class="regisImageWrapper">
    <img src="regis.jpg" alt="">
  </div>

</body>

</html>