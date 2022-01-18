<?php
$mysqli = false;
function connectDB(){
    global $mysqli;
    $mysqli = new mysqli("127.0.0.1", "root","root", "dolphinschool");
    $mysqli->query("SET NAMES 'utf-8'");
}
function closeDB(){
    global $mysqli;
    $mysqli->close();
}
?>