<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style-loginpage.css">
    <link rel="icon" href="assets/images/main/logo.png">
</head>

<body>
    <div class="container">
        <header>
            <h1>
                <a href="index.php">
                    <img src="assets/images/loginpage/22292dolphin_98802.svg" alt="Dolphin, языковая школа">
                </a>
            </h1>
        </header>
        <h1 class="text-center">Registration</h1>
        <form class="registration-form" action="vendor/signup.php" method="POST">
            <label>
                <span class="label-text">Email</span>
                <input type="text" name="email" required>
            </label>
            <label class="password">
                <span class="label-text">Password</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="password" required>
            </label>
            <label class="password">
                <span class="label-text">Confirm Password</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="password_confirm" required>
            </label>
            <div class="text-center">
                <button class="submit" type="submit" name="loginbtn">Регистрация</button>
                <a class="submit" href="loginpage.php" name="loginbtn">Войти</a>

                <?php
            //здесь будем выводить сообщение из сессии message
            require "vendor/message.php";
            ?>
            </div>
        </form>
    </div>

</body>
<script src="assets/js/loginscript.js"></script>

</html>