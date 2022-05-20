<?php
session_start();
require_once 'connection.php';

$title = $_POST['tittle'];
$name = $_POST['topic'];
$deadline = $_POST['deadline'];
$textmessadge = $_POST['user_text'];

    mysqli_query($connect, "INSERT INTO `homework` (`Tittle`, `Topic`, `Deadline`, `Description`, `ID`) VALUES ('Занятие $title', '$name', '$deadline', '$textmessadge', NULL)");
      $_SESSION['message'] = 'Регистрация прошла успешно';
    



?>