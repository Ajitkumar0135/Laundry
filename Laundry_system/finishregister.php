<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | registerdone</title>
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
      <?php
      if (isset($_POST['staffRegisterSubmit'])) {
        $status = $_POST["status"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $citizenNumber = $_POST["citizenNumber"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $mobileNumber = $_POST["mobileNumber"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $userid = $_POST["userId"];
        $password = $_POST["password"];
        $rePassword = $_POST["rePassword"];
        $gender = $_POST["gender"];


        if ($password == $rePassword) {
          $password = md5($_POST["password"]);
          $q = "INSERT INTO `STAFF` (`firstName`,`lastName`,`citizenNo`,`dateOfBirth`,`mobileNo`,`address`,`email`,`userStaff`,`passStaff`,`status`,`gender`) VALUES ('$firstName','$lastName','$citizenNumber','$dateOfBirth','$mobileNumber','$address','$email','$userid','$password','$status','$gender')";

          $result = $mysqli->query($q);
          if (!$result) {
            echo "INSERT failed. Error: " . $mysqli->error;
          } else {
            header("Refresh: 2; url=management.php");

            echo '<h1 style="text-align: center; font-family: monospace;">REGISTER DONE!.<h1>';
          }
        } else {
          header("Refresh: 2; url=management.php");
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