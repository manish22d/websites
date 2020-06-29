<?php
$host = "localhost";
$user = "root";
$password = "";
// $user = "didofhxb_ankita";
// $password = "kimti@204";

// Create connection
//$con = mysqli_connect($host, $user, $password, "didofhxb_ecomm");
$con = mysqli_connect($host, $user, $password, "ecomm");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>