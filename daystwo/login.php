<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <?php 
        require ('elements/header.php');
    ?>
    <div class="main-content">
            <form action="scripts/php/logined.php" method="post" class="login-form" required="true">
                <input type="text" name="numberPhone" placeholder="Введите номер телефона" required="true" id="phoneLogin">
                <input type="password" name="password" placeholder="Введите пароль" required="true">
                <input type="submit" name="logIn" value="войти" class="log_bnt">
                <a href="registrate.php">Нет аккаунта? Зарегистрироваться</a>
            </form>
    </div>
  
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='scripts/js/jquery.mask.min.js'></script>
    <script src='scripts/js/main.js'></script>
</body>
</html>