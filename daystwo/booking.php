<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/booking.css">
</head>
<body>
    <?php 
        require ('elements/header.php');
    ?>
    <div class="main-content">
        <?php 
        require('scripts/php/connect.php');    
        session_start();
        echo '<form action="scripts/php/booked.php" method="post" class="booking-form">
        <input type="text" name="Name">
        <input type="date" name="BirthDate">
        <input type="text" name="PhoneNumber">
        <input type="text" name="UserEmail">
        <input type="date" name="inDate">
        <input type="date" name="outDate">
        <input type="submit" value="Забронировать">
        </form>';
        ?>
    </div>
  
</body>
</html>