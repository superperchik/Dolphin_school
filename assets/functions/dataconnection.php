<?php
require_once "connection.php";

function getWork($limit){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `homework` ORDER BY `ID` DESC LIMIT $limit");
    closeDB();
return resultToArray($result);
}

function resultToArray ($result){
    $array = array();
    while (($row = $result->fetch_assoc()) != false)
    $array[] = $row;
    return $array;
}

?>