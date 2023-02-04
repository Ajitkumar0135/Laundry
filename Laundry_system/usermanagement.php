<?php
require_once('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | usermanagement</title>
  <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
</head>

<body>
  <div class="row">
    <div class="content">
      <?php
      if (isset($_SESSION['memberUserId'])) {
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
          <li><a href="usermanagement.php">Home</a></li>          
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
        
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello" . "&nbsp" . $_SESSION['userFirstName'] . "&nbsp" . $_SESSION['userLastName'] . "<br>" . "<br>" . "Status:" . $_SESSION['memberType'] . "<br><br>" . "Bonus points:" . $_SESSION['bonusPoint'];
              ?>
              <br>
              <br>
              <a href="logout.php">Logout</a>
            </div>

          </div>
          <div class="box2">

            <div class="rightSecondRow">
              <a href="trackservice.php">
                <div class="regisItemWrapper">
                  <h1>Track Service Process</h1>
                </div>
              </a>

            </div>
            <div class="rightSecondRow">
              <a href="benefit.php">
                <div class="viewHistorymWrapper">
                  <h1>View benefit of bonus point</h1>
                </div>
              </a>
            </div>
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
            <div class="rightSecondRow">
              <a href="trackservice.php">
                <div class="regisItemWrapper">
                  <h1>Track Service Process</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
      <?php  } ?>
    </div>
  </div>
</body>

</html>