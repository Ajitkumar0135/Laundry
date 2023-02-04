<?php
require_once('connect.php');
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $gender = $_POST['gender'];
  $citizenNo = $_POST['citizenNumber'];
  $dateOfBirth  = $_POST['dateOfBirth'];
  $mobileNumber = $_POST['mobileNumber'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $staffId = $_POST['staffId'];

  
echo $staffId;
  $q = "update staff set firstName='$firstName', lastName='$lastName', citizenNo='$citizenNo', dateOfBirth='$dateOfBirth', mobileNo='$mobileNumber', address='$address', email='$email', gender='$gender' where staffId =$staffId";
  if(!$mysqli->query($q)){
  echo "Update failed: ". $mysqli->error;
  }else{
  header("Location: staffmanagement.php");
  }
 ?>
