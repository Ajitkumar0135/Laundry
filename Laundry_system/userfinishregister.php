<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | userfiniushregister</title>
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
      <?php
      if (isset($_POST['userRegisterSubmit'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $gender = $_POST['gender'];
        $mobileNo = $_POST['mobileNo'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rePassword = $_POST['rePassword'];
        $memberUserId = $_POST['userId'];



        if ($password == $rePassword) {
          $password = md5($_POST["password"]);
          $q = "INSERT INTO MEMBER (firstName,lastName,mobileNo,address,memberTypeId,bonusPoint,email,memberUserId,password,gender)
              VALUES ('$firstName','$lastName','$mobileNo','$address','1','0','$email','$memberUserId','$password','$gender')";
          $result = $mysqli->query($q);
          if (!$result) {
            echo "INSERT failed. Error: " . $mysqli->error;
          }
          header("Refresh: 2; url=usermanagement.php");
          echo '<h1 style="text-align: center; font-family: monospace;">REGISTER DONE!.<h1>';
        } else {
          header("Refresh: 2; url=usermanagement.php");
          echo "<h1>Password does not match!</h1>";
        }
      }
      ?>

    </div>
  </div>
  <div class="regisImageWrapper">
    <img src="regis.jpg" alt="">
  </div>
</body>

</html>