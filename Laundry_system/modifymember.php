<?php
require_once('connect.php');
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $gender = $_POST['gender'];
  $mobileNumber = $_POST['mobileNumber'];
  $address = $_POST['address'];
  $memberTypeId = $_POST['memberTypeId'];
  $bonusPoint = $_POST['bonusPoint'];
  $email = $_POST['email'];
  $memberId = $_POST['memberId'];

echo $staffId;

  $q = "update member set firstName='$firstName', lastName='$lastName', mobileNo='$mobileNumber', address='$address',memberTypeId='$memberTypeId',bonusPoint='$bonusPoint', email='$email', gender='$gender' where memberId =$memberId";
  if(!$mysqli->query($q)){
  echo "Update failed: ". $mysqli->error;
  }else{
  header("Location: membermanagement.php");
  }
 ?>
