<?php
session_start();
require('connect.php');
$bookingId = $_POST['approved_id'];

if(isset($_POST['delete'])) {
    $sql = "DELETE FROM bookings WHERE id = '$bookingId'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../panel.php");
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

} else {
    // Сюда можно вставить код, который выполнится, если кнопка удаления не была нажата
    // Например, выход из скрипта или редирект на другую страницу
}

?>