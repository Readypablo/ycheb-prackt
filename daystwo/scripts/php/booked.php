<?php 
session_start();
require('connect.php'); 
$Name = $_POST["Name"];
$BirthDate = $_POST["BirthDate"];
$PhoneNumber = $_POST["PhoneNumber"];
$UserEmail = $_POST["UserEmail"];
$inDate = $_POST["inDate"];
$outDate = $_POST["outDate"];
$mopedName = $_POST['motorcycleName'];

$sql = "INSERT INTO booking (Name, BirthDate, PhoneNumber, UserEmail, inDate, outDate)
VALUES ('$Name', '$BirthDate', '$PhoneNumber', '$UserEmail', '$inDate', '$outDate')";
if ($conn->query($sql)) {
    header('Location: ../../profile.php');
    $_SESSION['useremail'] = $useremail;
    $_SESSION['password'] = $passworduser;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>