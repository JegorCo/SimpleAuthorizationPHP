<?php

require_once("db.php");
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];


if(empty($login) || empty($pass) || empty($repeatpass) || empty($email)){
    echo "Поля пустые";
}
else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпдают";
    }
    else{
        $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login','$pass','$email')";
        if($conn->query($sql) === TRUE) {
            echo "Вы успешно зарегестрировались!";
        }
        else{
            echo "Ошибка".$conn -> error;
        }
    }
}
?>