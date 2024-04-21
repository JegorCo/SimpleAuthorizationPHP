<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">

    </head>
    <body>

        <form action="register.php" method="post">
             <h1>Зарегестрироваться</h1>
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="password" name="pass">
            <input type="password" placeholder="repeat password" name="repeatpass">
            <input type="text" placeholder="email" name="email">
            <button type="submit">Зарегестрироваться</button>
        </form>

        <form action="login.php" method="post">
            <h1>Войти</h1>
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="password" name="password">
            <button type="submit">Войти</button>
        </form>

    </body>
</html>
