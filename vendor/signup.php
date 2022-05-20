<?php
session_start();
require_once 'connection.php';

$email = $_POST['email'];
$password  = $_POST['password'];
$password__confirm = $_POST['password_confirm'];

if($password === $password__confirm) {
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES (NULL, '$email', '$password', '0')");
      $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../loginpage.php');
}else{
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registrarion.php');
}


?>