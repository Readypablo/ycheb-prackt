<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/reg.css">
</head>
<body>
    <?php 
        require ('elements/header.php');
    ?>
    <div class="main-content">
        <form action="scripts/php/reg.php" method="post" class="registration-form">
            <input type="text" name="Name" placeholder="Введите имя" required="true">    
            <input type="text" name="SecondName" placeholder="Введите фамилию" required="true">   
            <input type="text" name="LastName" placeholder="Введите ваше отчество" required="true">   
            <input type="text" name="PhoneNumber" placeholder="Введите номер телефона" required="true" id="PhoneReg">   
            <input type="date" name="BirthDate" required="true">   
            <input type="email" name="UserEmail" placeholder="Введите адрес эл. почты" required="true" id="emailReg">
            <input type="password" name="passwordUser" placeholder="Введите пароль" required="true">
            <input type="submit" name="sendUserData" value="Зарегистрироваться" class="log_bnt">   
        </form>
    </div>

    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='scripts/js/jquery.mask.min.js'></script>
    <script src='scripts/js/main.js'></script>
</body>
</html>