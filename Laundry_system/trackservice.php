<?php
require_once('connect.php');
session_start();

?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | trackservice</title>
  <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
</head>

<body>
  <div class="row">
    <div class="content">

      <?php
      if (isset($_SESSION['memberUserId'])) {
        $memberId = $_SESSION['memberId'];
      ?>
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
          <li><a href="welcome.php">Go back</a></li>
          <li><a href="usermanagement.php">Home</a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
        
        <div class="motto"></div>
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
              $q = "SELECT * FROM `laundryservice` where  `memberId` = '$memberId' ORDER BY `serviceId`";
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
      <?php } else {
      ?>
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
          <li><a href="welcome.php">Go back</a></li>
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
        
        <div class="motto"></div>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" border="0" />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello" . "&nbsp" . "Guest" . "<br>" . "<br>" . "Please Signup or login<br>" . "to receive the bonus";
              ?>
              <br>
              <br>
            </div>
          </div>
          <div class="box2">
            <form class="trackform" action="searchguest.php" method="post">
              <label for="trackname">Please enter service ID</label><br>
              <input type="text" name="searchServiceId" value="">

              <br><br>
              <input type="submit" name="searchServiceIdSubmit" value="submit">
            </form>
          </div>
        </div>
      <?php  } ?>
    </div>
  </div>
</body>

</html>