<?php

$servername = "192.168.43.44";
$username = "root";
$password = "2121";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db,15508);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
