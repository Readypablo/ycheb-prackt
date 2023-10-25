<?php 

require('connect.php');

$phoneNumber = $_POST['numberPhone'];
$passwordLogin = $_POST['password'];
$userData = array();

$sql = "SELECT * FROM User WHERE phoneNumber = '$phoneNumber'";
$result = $conn->query($sql);

session_start();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $encryptedPassword = $row['passwordUser'];
    $userData[] = $row;
    $_SESSION['isAdmin'] = $row['isAdmin'];
  }
} else {
  echo "0 results";
}


$_SESSION['userData'] = $userData;

if ($passwordLogin === $encryptedPassword) {
    header('Location: ../../profile.php');
    $_SESSION['phoneNumber'] = $phoneNumber;
    
} else { 
    header('Location: ../../login.php'); 
    $_SESSION['error'] = "Неверный логин или пароль, пожалуйста, попробуйте снова.";
}

?>