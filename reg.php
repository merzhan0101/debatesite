<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $title = "Регистрация";
        require_once "bloki/head.php";
    ?>
</head>
<body>
    <?php require_once "bloki/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <input type="text" placeholder="Имя" id="name" name="name"><br />
            <input type="text" placeholder="Фамилия" id="sname" name="sname"><br />
            <input type="text" placeholder="Email" id="email" name="email"><br />
            <input type="password" placeholder="Введите пароль" id="password" name="password"><br />
            <select name="region" id="region">
                <option value="" disabled selected>выберите вашу область</option>
                <option value="Абайская область">Абайская область</option>
                <option value="Акмолинская область">Акмолинская область</option>
                <option value="Актюбинская область">Актюбинская область</option>
                <option value="Алматинская область">Алматинская область</option>
                <option value="Атырауская область">Атырауская область</option>
                <option value="Восточно-Казахстанская область">Восточно-Казахстанская область</option>
                <option value="Жамбылская область">Жамбылская область</option>
                <option value="Жетысуская область">Жетысуская область</option>
                <option value="Карагандинская область">Карагандинская область</option>
                <option value="Кызылординская область">Кызылординская область</option>
                <option value="Мангистауская область">Мангистауская область</option>
                <option value="Западно-Казахстанская область">Западно-Казахстанская область</option>
                <option value="Павлодарская область">Павлодарская область</option>
                <option value="Северо-Казахстанская область">Северо-Казахстанская область</option>
                <option value="Улытауская область">Улытауская область</option>
                <option value="Туркестанская область">Туркестанская область</option>
            </select><br /><br />
            <input type="text" placeholder="Ваш город" id="city" name="city"><br />
            <input type="date" placeholder="Дата рождения" id="date" name="date"><br />
            <div id="messageShow"></div>
            <input type="button" name="done" id="done" value="Зарегистрироваться">
        </div>
        <?php require_once "./bloki/rightCol.php" ?>
    </div>

    <?php require_once "bloki/footer.php" ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/js/reg.js"></script>
</body>
</html>