<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php1_day10';

// create connection
$connect = new mysqli($servername, $username, $password, $database);

// check connection
if($connect->connect_error){
    // echo "ERROR!";
    die("Connection failed: " . $connect->connect_error);

} else {
    echo "TRA ERROR!";
}