<?php
require_once('connect.php');
$serachId = $_POST['searchServiceId'];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | searchguest</title>
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
          <li><a href="userregister.php">Sign up</a></li>
          <li><a href="usersignin.php">Log in</a></a></li>
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
              <th>Date In</th>
              <th>Date Out</th>
              <th>Service status</th>
              <th>Total price</th>
              <th>View Details</th>

            </tr>
            <?php
            $q = "SELECT * FROM `laundryservice` where  `serviceId` = '$serachId' ORDER BY `serviceId`";
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
              $finishStatus = "";
              if ($row['serviceStatus'] == "NF") {
                $finishStatus = "Not finish";
              } else {
                $finishStatus = "Finished";
              }
              ?>
              <tr>
                <td><?= $row['serviceId'] ?></td>
                <td><?= $row['staffId'] ?></td>
                <td><?= $row['memberId'] ?></td>
                <td><?= $row['dateIn'] ?></td>
                <td><?= $dashDateOut ?></td>
                <td><?= $finishStatus ?></td>
                <td><?= $row['totalPrice'] ?></td>
                <td><a href='viewdetailforuser.php?serviceId=<?= $row['serviceId'] ?>'> <img src="viewdetail.png" width="24" height="24"></a></td>
              </tr>
            <?php } ?>

          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>