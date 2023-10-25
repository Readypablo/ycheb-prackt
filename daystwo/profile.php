<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/profile.css">
</head>
<body>
    <?php 
    session_start();
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
    }
    if (!isset($_SESSION["phoneNumber"])) {
        
        echo"<div class='all-contain'>";
        require("login.php");
        echo "</div>";
        
    } else {  
        require ('elements/header.php');
        echo '<div class="main-content">
        <div class="dataContain">
            <h2>Имя пользователя:</h2>';
            echo "<h3>";
            echo $_SESSION["userData"][0]["Name"];
            echo "</h3>";
        echo '<h2>Фамилия:</h2>';
            echo "<h3>";
            echo $_SESSION["userData"][0]["SecondName"];
            echo "</h3>";
        echo '<h2>Отчество:</h2>';
            echo "<h3>";
            echo $_SESSION["userData"][0]["LastName"];
            echo "</h3>";
        echo '<h2>Номер телефона:</h2>';
            echo "<h3>";
            echo $_SESSION["userData"][0]["PhoneNumber"];
            echo "</h3>";
        echo '<h2>Дата рождения:</h2>';
            echo "<h3>";
            echo $_SESSION["userData"][0]["BirthDate"];
            echo "</h3>";
        echo '<h2>Роль администратора:</h2>';
            echo "<h3>";
            if($_SESSION["userData"][0]["isAdmin"] == true) {
                echo "У вас есть права администратора";   
            } else {
                echo "У вас отсутствуют права администратора";  
            }
            echo "</h3>";
        echo '<form action="" method="post">
            <input type="submit" name="logout" value="Выйти с аккаунта">
        </form>';
        echo '
        </div>
    </div>';
   
        }
      ?>
</body>
</html>