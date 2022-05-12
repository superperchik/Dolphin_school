<!DOCTYPE html>
<html lang="ru">
<head>
<?php require "assets/functions/db.php"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/style-loginpage.css">
    <link rel="icon" href="assets/images/main/logo.png">
    <?php
    $data = $_POST;
    if( isset($data['register']) )
    {
        //здесь делаем проверки на пустоту логина
        $errors = array();
        if ($data['email'] =='') {
            $errors[] = 'Введите email !';
        }
    
        if ($data['password'] =='') {
            $errors[] = 'Введите пароль !';
        }
    
        if ($data['password2'] !=$data['password']) {
            $errors[] = 'Пароли не одинаковы !';
        }
    
      // исключаем два одинаковых мейла
        if (R::count('users', "email = ?", array($data['email']))>0)
        {
            $errors[] = 'Пользователь с таким Email существует !';
        }
    
        //здесь регистрируем
        if (empty($errors)) 
        {
        // все хорошо, регисирируем в Базе Данных
        // Ред Бин исключает SQL иньекции
            $user = R::dispense('users');
            $user->email=$data['email'];
            $user->password= password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style = "color: green;">Вы успешно зарегистрированы! </div><hr>';
        } else 
        {
            echo'<div id="errors">'.array_shift($errors). '</div><hr>';
        }
    }
    ?>
</head>

<body>
    <div class="container">
        <header>
            <h1>
                <a href="index.html">
                    <img src="assets/images/loginpage/22292dolphin_98802.svg" alt="Dolphin, языковая школа">
                </a>
            </h1>
        </header>
        <h1 class="text-center">Registration</h1>
        <form class="registration-form" action="Registrpage.php" method="POST">
            <label>
                <span class="label-text">Email</span>
                <input type="text" name="email" value="<?php echo @$data['email']; ?>">
            </label>
            <label class="password">
                <span class="label-text">Password</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="password" value="<?php echo @$data['password']; ?>">
            </label>
            <label class="password">
                <span class="label-text">Repeat Password</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="password2" value="<?php echo @$data['password2']; ?>">
            </label>
            <div class="text-center">
                <button class="submit" name="register">Sign Me Up</button>
            </div>
        </form>
    </div>

</body>
<script src="assets/js/loginscript.js"></script>

</html>