<?php

$servername = "localhost";
$username = "id2625993_abc";
$password = "9750417833";
$db = "id2625993_mydb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
