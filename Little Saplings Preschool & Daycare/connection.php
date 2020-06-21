<?php
$host = "localhost";
$user = "root";
$password = "";

// Create connection
$con = mysqli_connect($host, $user, $password, "preschool");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>