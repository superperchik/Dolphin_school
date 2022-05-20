<?php

session_start();
require_once 'connection.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "role" => $user['role']
    ];

    header('Location: ../homeworkpage.php');

} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../loginpage.php');
}
?>