<?php

$servername = "192.168.43.44:31316";
$username = "user1";
$password = "T-2121-t";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
