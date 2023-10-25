<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/catalog.css">
</head>
<body>
    <?php 
        require ('elements/header.php');
    ?>
    <div class="main-content">
    <?php 
    session_start();
    require('scripts/php/connect.php');
    $mopedName = $_SESSION['mopedId'];

    $sql = "SELECT bookings.*,User.Name AS UserName, bookings.id AS booking_id, Mopeds.* FROM bookings
    INNER JOIN Mopeds ON bookings.id_moped = Mopeds.id
    INNER JOIN User ON bookings.id_user = User.id";
    $result = $conn->query($sql);

    if ($conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
        echo '
        <div class="catalog-item">
        <img src="../../'.$row['Image'].'" alt="">
        <div class="data-item">
            <div class="price">
             <h3>'.$row['Name'].'</h3>
             <h3>'.$row['Price'].'</h3>
        </div>
    <div class="speed">
        <h3>Максимальный<br>разгон</h3>
        <h3>'.$row['Speed'].' км/ч</h3>
    </div>';
    if (!isset($_SESSION["userData"])) {
        echo '';
        } else {
            echo '
            <div class="speed">    
                <h3>Клиент</h3>
                <h3>'.$row['UserName'].'</h3>
            </div>';
        }
    echo '
        </div>
        <form action="scripts/php/approved.php" method="post">
            <input type="hidden" name="approved_id" value="'.$row['booking_id'].'">
            <input type="submit" value="Одобрить заявку">
            <input type="submit" value="Отклонить заявку" name="delete">
        </form>
</div>
';
}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 


?>
    </div>
 
</body>
</html>