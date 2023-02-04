<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | usersignin</title>
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
          <li><a href="usermanagement.php">Home</a></li>
          <li><a href="userregister.php">Sign up</a></li>
          <li><a href="usersignin.php">Log in</a></li>
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
      <h1>Sign In (USER)</h1>
      <hr>
      <br>
      <form action="userchecklogin.php" method="post">
        <label for="userId">username</label>
        <input type="text" id="userId" name="userId" placeholder="userId">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password">

        <input type="submit" name="userSignInSubmit" value="SignIn">
      </form>
    </div>
  </div>
</body>

</html>