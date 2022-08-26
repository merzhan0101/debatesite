<!DOCTYPE html>
<head>
    <?php
        $title = "Обратная связь";
        require_once "bloki/head.php";
    ?>
</head>
<body>
    <?php require_once "bloki/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <input type="text" placeholder="Имя" id="name" name="name"><br />
            <input type="text" placeholder="Email" id="email" name="email"><br />
            <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br />
            <textarea name="message" id="message" placeholder="Введите сообщение"></textarea><br />
            <div id="messageShow"></div>
            <input type="button" name="done" id="done" value="Отправить">  
        </div>
        <?php require_once "bloki/rightCol.php" ?>
    </div>
    <?php require_once "bloki/footer.php" ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/js/feedback.js"></script>
</body>

