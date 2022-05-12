<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/style-loginpage.css">
    <link rel="icon" href="assets/images/main/logo.png">
    <?php
    require "assets/functions/db.php";  
$data = $_POST;
	if(isset($data['loginbtn'])) // если была нажата кнопка
	{
		$errors = array();
		$user = R::findOne('users', 'email = ?', array($data['email']));
		if( $user)
		{
			// Когда  логин сушествует, проверяем пароль
			if(password_verify($data['password'], $user->password))
			{
		  //	echo 'Логинится';
			// Все хорошо, логиним пользователя
            $_SESSION['logged_user'] = $user;
            var_dump($_SESSION['logged_user']);	
				echo '<div style = "color: green;">Вы Авторизованы! <br/> Можете перейти на <a href="homeworkpage.php">Искомую</a> страницу!</div><hr>';

			} else {
				$errors[] = 'Пароль неправильно введен';
			}
		} else
		{
			$errors[] = 'Пользователь не найден!';
		}

		if (!empty($errors)) {
			echo'<div style="color:red;">'.array_shift($errors).'</div><hr>';
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
        <h1 class="text-center">Authorization</h1>
        <form class="registration-form" action="loginpage.php" method="POST">
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
            <div class="text-center">
                <button class="submit" name="loginbtn">Login</button>
            </div>
        </form>
    </div>

</body>
<script src="assets/js/loginscript.js"></script>

</html>