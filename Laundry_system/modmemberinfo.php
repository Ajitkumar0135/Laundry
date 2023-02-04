<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | modmemberinfo</title>
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
  <?php
  $userid = $_GET['userid'];
  $q = "select * from member where memberId=$userid";
  $result = $mysqli->query($q);
  if (!$result) {
    echo "Select failed: " . $mysqli->error;
  }
  $urow = $result->fetch_array();
  ?>
  <div class="registerContent">
    <div class="registerDiv">
      <h1>Modify (USER)</h1>
      <hr>
      <br>
      <form action="modifymember.php" method="post">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstName" value="<?= $urow['firstName'] ?>">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastName" value="<?= $urow['lastName'] ?>">

        <label for="status">Gender</label>
        <select class="statusSelect" name="gender">
          <option value="M" <?php if ($urow['gender'] == "M") {
                              echo "selected";
                            } ?>>Male</option>
          <option value="F" <?php if ($urow['gender'] == "F") {
                              echo "selected";
                            } ?>>Female</option>
        </select>


        <label for="mobileNo">Mobile Number</label>
        <input type="text" id="mobileNo" name="mobileNumber" value="<?= $urow['mobileNo'] ?>">

        <label for="address">Address</label>
        <input type="address" id="address" name="address" value="<?= $urow['address'] ?>">

        <label for="memberTypeId">Member type id (1=Bronze,2=Silver,3=Gold)</label>
        <input type="text" id="memberTypeId" name="memberTypeId" value="<?= $urow['memberTypeId'] ?>">

        <label for="bonusPoint">Member Bonuspoint</label>
        <input type="text" id="bonusPoint" name="bonusPoint" value="<?= $urow['bonusPoint'] ?>">

        <label for="mail">Email</label>
        <input type="text" id="mail" name="email" value="<?= $urow['email'] ?>">

        <label for="memberId">member Id</label>
        <input type="text" id="memberId" name="memberId" value="<?= $urow['memberId'] ?>" readonly>

        <input type="submit" name="memberModiftSubmit" value="Submit">
      </form>
    </div>
  </div>
  <div class="regisImageWrapper">
    <img src="regis.jpg" alt="">
  </div>

</body>

</html>