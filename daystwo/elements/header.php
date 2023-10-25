<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/header.css">
</head>
<body>
    <header>
        <div class="logo-contain">
            <img src="images/logo.png" alt="logo">
            <h2>Мопед 74</h2>
        </div> 
        <a href="index.php">Главная страница</a>
        <?php 
            session_start();
        // $_SESSION['isAdmin'] = 'true';
            if(isset($_SESSION['isAdmin']) === true) {
                echo '<a href="panel.php">Панель управления</a>';
            }
        ?> 
        <a href="booking.php">Бронирование</a>
        <a href="catalog.php">Каталог</a>
        <?php 
        if(isset($_SESSION['phoneNumber'])) {
            echo '<a href="profile.php">Профиль</a>';
        } else {
            echo '<a href="login.php">Вход</a>';
        };
        ?>
    </header>
</body>
</html>