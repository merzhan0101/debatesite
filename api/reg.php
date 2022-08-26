<?php 
    require_once "../functions/connect.php";
    require_once "../functions/functions.php";


    $name = htmlspecialchars($_POST['name']);
    $sname = htmlspecialchars($_POST['sname']);
    $fio = $name." ".$sname;
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $region = htmlspecialchars($_POST['region']);
    $city = htmlspecialchars($_POST['city']);
    $date = htmlspecialchars($_POST['date']);
    if($name == "" || $email == "" ||  $sname == "" || $password == "" || $region == "" || $city == "" || $date == ""){
        echo "Не заполнены все поля, проверьте";
        exit;
    }
    $password = md5($password);

    //Отправка
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' ");
    if($mysqli->error){
        exit('Ошибка регистрации ' . $mysqli->error);
    }
    $users = resultToArray($result);
    if(count($users) > 0){
        exit("Пользователь с таким email уже существует, введите другой email");
    }
    $result = $mysqli->query("INSERT INTO `users`(`email`, `password`, `reg_date`, `fio`, `region`, `city`)  VALUES ('$email', '$password', '$date', '$fio', '$region', '$city')");
    closeDB();
    if($result) 
        echo "Вы зарегистрированы";
    else 
        echo "Запрос не отправлен". $mysqli->error;
?>