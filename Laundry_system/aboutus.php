<?php
require_once('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Laundry | aboutus</title>
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
                  <li><a href="logout.php">Logout</a></a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
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
      <?php  } ?>

    </div>
  </div>

  <div class="aboutimg">
    <img id="aboutimg" src="aboutus.jpg" alt="aboutus">
  </div>
  <div class="aboutcontent">
    <h1>Laundry And Dry-Cleaning Business </h1><br>
    <p>The laundry and dry-cleaning industry requires a digital and an integrated solution for automating laundry and dry cleaning daily end-to-end operations. <br><br>
      Laundry Management system is a smart application programme which helps to make smoother and to improvise the laundry and dry-cleaners business management system on workflow like laundry record keeping, manages day-to-day tasks, laundry billing, pos, material collection, delivery, sales analytics, etc. Whereas, E-Laundry software is fully based on laundry management system. <br><br>
      This system will help you in two leading laundry and dry-cleaning service companies to carry out laundry management functions effortlessly and effectively. This system is designed to help admin & to streamline this system in an automated environment and deliver the best experience of customers by using centralized & customized solutions. This laundry and dry-cleaning software can be used through various types of users such as pick-up agents, dry-cleaners and admin of laundry businesses. <br><br>
      An efficient laundry management system includes with smart features & full-scale operating of operations which includes order placements, garment collections, garment processing in factories, discount & price calculation, clothes tagging, washing, Challan creation at the time of delivery, creating invoice and payment. <br><br>
      The main objective of laundry management system is to overcome various challenges of laundry organizations by establishing an environment which will be completely automated for laundry operations which includes orders, maintaining various records, scheduling deliveries & pickup and managing payment options. <br><br>
      There is a huge change in everyday lifestyle within every society since modernity evolves. In fact, most of the people nowadays want an easy and effortless life. As much as possible they depend on the accomplishment of their everyday work in technology. Even in laundry and dry-cleaning businesses, technological innovation can be used; this is through building a system which provides easy and convenient services to the customers. E-Laundry Management System is going to become developed. It is a system which is providing management functions which allows removing or minimizing the risk associated with it. This will provides a platform that would let the admin & the customers to have a transaction online. As well as manages the services to customers, especially to those clients who signed as a member. With this Laundry management system, the needed services of the consumers will ensure its availability. (E-Laundry serves the best Laundry management system) E-Laundry has the feature of computerized system in handling laundry is embracing especially in modern countries. These kind of services are flexible in terms of time on laundry management to use it which also to keeps them to manage their time.</p>
  </div>

  <footer>
    <div class="footerContent">
      <div class="leftFooter">
        <h1 id="followUs">Follow us . . </h1>
        <div class="iconWrapper">
          <a href="https://www.facebook.com/">
            <img class="socialIcon" src="facebook.png" border="0" />
          </a>
          <a href="https://www.instagram.com/">
            <img class="socialIcon" src="ig.png" border="0" />
          </a>
          <a href="https://twitter.com/">
            <img class="socialIcon" src="twitter.png" border="0" />
          </a>
        </div>
      </div>
      <div class="rightFooter">
        <div class="memberCredit">
          <h3>Created by</h3>
        </div>
        <div class="nameList">
          <ul id="name">
            <li>Ajit kumar sahu</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>