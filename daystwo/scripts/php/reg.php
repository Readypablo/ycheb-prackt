<?php 
    require('connect.php');
    $name = $_POST["Name"];
    $secondname = $_POST["SecondName"];
    $lastname = $_POST["LastName"];
    $phonenumber = $_POST["PhoneNumber"];
    $birthdate = $_POST["BirthDate"];
    $useremail = $_POST["UserEmail"];
    $passworduser = $_POST["passwordUser"];

    $sql = "INSERT INTO User (Name, SecondName, LastName, PhoneNumber, BirthDate, UserEmail, passwordUser)
    VALUES ('$name', '$secondname', '$lastname', '$phonenumber', '$birthdate', '$useremail', '$passworduser')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../login.php");
        $_SESSION['useremail'] = $useremail;
        $_SESSION['password'] = $passworduser;
        exit;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    } 
?>