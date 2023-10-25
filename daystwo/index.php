<?php 

// $servername = "practic2";
// $username = "root";
// $pass = "";
// $dbname = "MopedRental";

// $conn = new mysqli($servername, $username, $pass, $dbname);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/catalog.css">
</head>
<body>
    <?php 
        require ('elements/header.php');
    ?>
    <div class="main-content">
    <h1>Наши товары</h1>
        <div class="moped-contain">            
            <?php 
                require('scripts/php/connect.php');    
                $sql2 = 'SELECT * from Mopeds limit 5';
                $result = $conn->query($sql2);
        
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="catalog-item">
                    <img src="'.$row['Image'].'" alt="">
                    <div class="data-item">
                        <div class="price">
                         <h3>'.$row['Name'].'</h3>
                         <h3>'.$row['Price'].'</h3>
                    </div>
                   <div class="speed">
                       <h3>Максимальный<br>разгон</h3>
                       <h3>'.$row['Speed'].' км/ч</h3>
                   </div>
                    </div>
                    <input type="submit" value="Арендовать">
                </div>
                ';
                }
            ?>
        </div>
        <h1>Наши отзывы</h1>
        <div class="reviews-contain">
            <?php 
            $sql3 = 'SELECT * from Reviews order by rand() limit 5';
            $result2 = $conn->query($sql3);
            while ($row2 = $result2->fetch_assoc()) {
                echo '<div class="review-item">';
                echo $row2['Content'];
                echo '</div>';
            }
            ?>
        </div>
        
        <div class="dataCompany-contain">
            <h2>Контактные данные:</h2>
            <?php 
            $sql4 = 'SELECT * from dataCompany';
            $result3 = $conn->query($sql4);
            while ($row3 = $result3->fetch_assoc()) {
                echo '<div class="adressCompany">';
                echo $row3['adress'];
                echo '</div>';
                echo '<div class="vkCompany">';
                echo '<h2>Вконтакте:</h2>';
                echo $row3['linkVK'];
                echo '</div>';
                echo '<div class="tgCompany">';
                echo '<h2>Телеграм:</h2>';
                echo $row3['linkTG'];
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>