<!DOCTYPE html>
<html>

<head>
  <title>Laundry | USERSIGNUP</title>
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
          <li><a href="usersignin.php">Log in</a></a></li>
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
      <h1>Sign Up (USER)</h1>
      <hr>
      <br>
      <form action="userfinishregister.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstName" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastName" placeholder="Your last name..">
        <label for="status">Gender</label>
        <select class="statusSelect" name="gender">
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select>
        <label for="mobileNo">Mobile number</label>
        <input type="text" id="mobileNo" name="mobileNo" placeholder="Your mobileNo..">

        <label for="address">Address</label>
        <input type="address" id="address" name="address" placeholder="Phahonyothin Rd, Tambon Khlong Nung, Amphoe Khlong Luang, Chang Wat Pathum Thani 12120">

        <label for="mail">Email</label>
        <input type="text" id="mail" name="email" placeholder="Your Email">

        <label for="userId">User id</label>
        <input type="text" id="userId" name="userId" placeholder="Your userId">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password">

        <label for="rePassword">Retype Password</label>
        <input type="password" id="rePassword" name="rePassword" placeholder="Your password">

        <input type="submit" name="userRegisterSubmit" value="Submit">
      </form>
    </div>
  </div>
  <div class="regisImageWrapper">
    <img src="regis.jpg" alt="">
  </div>
</body>

</html>