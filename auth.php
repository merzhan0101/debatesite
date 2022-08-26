<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $title = "Авторизация";
        require_once "bloki/head.php";
    ?>

</head>
<body>
    <?php require_once "bloki/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <input type="text" placeholder="Введите вашу почту" id="email" name="email"><br />
            <input type="password" placeholder="Пароль" id="password" name="password"><br />
            <div id="messageShow"></div>
            <input type="button" name="done" id="done" value="Войти">
        </div>
        <?php require_once "bloki/rightCol.php" ?>
    </div>
    <?php require_once "bloki/footer.php" ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/js/auth.js"></script>
</body>
</html>