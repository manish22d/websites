<?php
$host = "localhost";
// $user = "root";
// $password = "";
$user = "ecomm";
$password = "ecomm@2020";

// Create connection
$con = new mysqli($host, $user, $password, "ecomm");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>