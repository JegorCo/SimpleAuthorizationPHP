<?php
require_once("db.php");

$login = $_POST['login'];
$pass = $_POST['password'];

if(empty($login) || empty($pass)){
    echo "Поля пустые";
}
else
{
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn -> query($sql);

    if($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc()) {
            echo "Добро Пожаловать," . " " . $row['login'] . "!";
            break;
        }
    } else {
        echo "Логин или пароль были введены не верно";
    }
}
