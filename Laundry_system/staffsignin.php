<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | staffsignin</title>
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
      <h1>Sign In (STAFF,ADMIN)</h1>
      <hr>
      <br>
      <form action="checklogin.php" method="post">

        <label for="userName">Username</label>
        <input type="text" id="mail" name="userName" placeholder="Your Username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password">

        <a href="forgot.php">Forget password ? </a>
        <input type="submit" name="signInSubmit" value="SignIn">
      </form>
    </div>
  </div>
</body>

</html>