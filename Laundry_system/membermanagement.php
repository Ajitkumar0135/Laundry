<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | member-management</title>
  <link rel="stylesheet" type="text/css" href="stylesbackup1.css">

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
          <li><a href="staffregister.php">Sign up</a></li>
          <li><a href="staffsignin.php">Log in</a></a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="aboutus.php">About us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="motto">

</div>
</div>

<body>
  <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">

          <table>
            <col width="5%">
            <col width="15%">
            <col width="5%">
            <col width="10%">
            <col width="10%">
            <col width="5%">
            <col width="10%">
            <col width="10%">
            <col width="10%">

            <tr>
              <th>Member ID</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Mobile No.</th>
              <th>Member Type.</th>
              <th>Bonuspoint</th>
              <th>email</th>
              <th>ID</th>
              <th>Password</th>
            </tr>
            <?php
            $q = "SELECT *,m_TypeName FROM `member`,m_type WHERE `memberTypeId` = m_TypeId";
            $result = $mysqli->query($q);
            if (!$result) {
              echo "Select failed. Error: " . $mysqli->error;
            }
            while ($row = $result->fetch_array()) { ?>
              <tr>
                <td><?= $row['memberId'] ?></td>
                <td><?= $row['firstName'] ?> <?= $row['lastName'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td><?= $row['mobileNo'] ?></td>
                <td><?= $row['m_TypeName'] ?></td>
                <td><?= $row['bonusPoint'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['memberUserId'] ?></td>
                <td><?= $row['password'] ?></td>
                <td><a href='modmemberinfo.php?userid=<?= $row['memberId'] ?>'> <img src="modify.png" width="24" height="24"></a></td>
                <td><a href='delmemberinfo.php?userid=<?= $row['memberId'] ?>'> <img src="delete.png" width="24" height="24"></a></td>
              </tr>
            <?php } ?>


          </table>
        </div>

      </div>

    </div>
  </div>

</body>

</html>