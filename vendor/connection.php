<?php
$connect = mysqli_connect('localhost', 'root', 'root','dolphinschool');
mysqli_set_charset($connect, "utf8mb4");
if (!$connect) {
    echo('Error to connect to database');
}

?>