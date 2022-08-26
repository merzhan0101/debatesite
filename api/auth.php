<?php 
    require_once "../functions/connect.php";

    $email = htmlspecialchars($_POST['email']); //принимаем данные и обработка с htmlspecialchars
    $password = htmlspecialchars($_POST['password']);
    if($email == "" || $password == ""){
        echo "Проверьте логин или пароль";
        exit;
    }

    //ОТправка
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1");//взятие данных с бд
    $row = $result->fetch_assoc();//{id: 1, name: ..., ...} объект1ге ауыстыру array-ге
    if($row){
        $password = md5($password);
        if($password == $row['password']){
            $_SESSION['user'] = $row;
            echo 'Успешно вошли в аккаунт';
        }else{
            echo 'Логин или пароль не верный';
        }
    }else{
        echo 'Логин или пароль не верный';
    }
    closeDB();
?>