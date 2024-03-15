<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_password = '';

//Create MySQLi Object
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

//Error Handler
if($mysqli-> connect_error) {
    printf("connect failed: %s/n", $mysqli->connect_error);
}