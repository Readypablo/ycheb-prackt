<?php
session_start();
require('connect.php');
$userId = $_SESSION['userData'][0]['id'];
$_SESSION['mopedId'] = $_POST['moped_id'];
$mopedId = $_SESSION['mopedId'];

$sql = "INSERT INTO Bookings (id_user, id_moped) VALUES ($userId, $mopedId)";
if ($conn->query($sql)) {
    header("Location: ../../catalog.php");
    echo $userId;
    echo $mopedId;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>