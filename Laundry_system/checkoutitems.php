<?php
require_once('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | checkoutitems</title>
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
          <li><a href="management.php">Home</a></li>
          <li><a href="staffregister.php">Sign up</a></li>
          <li><a href="staffsignin.php">Log in</a></a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="aboutus.php">About us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<body>
  <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">
          <table>
            <col width="5%">
            <col width="5%">
            <col width="5%">
            <col width="20%">
            <col width="15%">
            <col width="5%">
            <col width="10%">
            <col width="10%">
            <col width="5%">


            <tr>
              <th>Service ID</th>
              <th>Staff ID</th>
              <th>Member ID</th>
              <th>Member Name</th>
              <th>Date In</th>
              <th>Date Out</th>
              <th>Service status</th>
              <th>Total price</th>
              <th>Checkout Items</th>

            </tr>
            <?php
            $q = "SELECT *,`firstName`,`lastName` FROM `laundryservice`,`member` where `serviceStatus` = 'F' AND laundryservice.dateOut='0000-00-00' AND laundryservice.memberId = member.memberId ORDER BY `serviceId`";
            $result = $mysqli->query($q);
            if (!$result) {
              echo "Select failed. Error: " . $mysqli->error;
            }
            while ($row = $result->fetch_array()) { ?>
              <?php
              $dashDateOut = "";
              if ($row['dateOut'] == "0000-00-00") {
                $dashDateOut = "-";
              } else {
                $dashDateOut = $row['dateOut'];
              }
              ?>
              <tr>
                <td><?= $row['serviceId'] ?></td>
                <td><?= $row['staffId'] ?></td>
                <td><?= $row['memberId'] ?></td>
                <td><?= $row['firstName'] ?> <?= $row['lastName'] ?></td>
                <td><?= $row['dateIn'] ?></td>
                <td><?= $dashDateOut ?></td>
                <td>Finished</td>
                <td><?= $row['totalPrice'] ?></td>
                <td><a href='checkcheckout.php?serviceId=<?= $row['serviceId'] ?>&memberId=<?= $row['memberId'] ?>&totalPrice=<?= $row['totalPrice'] ?>";'> <img src="checkout.png" width="24" height="24"></a></td>
              </tr>
            <?php } ?>


          </table>
        </div>

      </div>

    </div>
  </div>

</body>

</html>