<?php
$host = "localhost";
// $user = "root";
// $password = "";
$user = "ecomm";
$password = "ecomm@2020";

// Create connection
$con = new mysqli($host, $user, $password, "ecomm");

// Check connection
if (! $con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Below method will fetch SQL result in array on passing table name & collection as argument
function fetch_SQL_result($tableName, $collectionType)
{
    global $con;
    $sql = "SELECT * FROM " . $tableName;

    if ($collectionType != "") {
        $sql = $sql . " Where collection = '" . $collectionType . "'";
    }
    $result = mysqli_query($con, $sql);

    // Check Query
    if (! $result) {
        echo "error: " . $sql . "<br/>" . mysqli_error($con);
    }
    $row = array();
    $result_row = array();
    while ($row = mysqli_fetch_array($result)) {
        $result_row[] = $row;
    }
    return $result_row;
}

// Below method will fetch SQL result in array on passing table name and tags(popular) as argument
// Popular Product
function popular($tableName, $tagType)
{
    global $con;
    $sql = "SELECT * FROM " . $tableName . " Where tags = '" . $tagType . "' LIMIT 4";
    $result = mysqli_query($con, $sql);

    // Check Query
    if (! $result) {
        echo "error: " . $sql . "<br/>" . mysqli_error($con);
    }
    $row = array();
    $result_row = array();
    while ($row = mysqli_fetch_array($result)) {
        $result_row[] = $row;
    }
    return $result_row;
}

// Below method will fetch SQL result in array on passing table name and rating(most rated) as argument
// Most Rated Product
function rating($tableName, $ratingType)
{
    global $con;
    $sql = "SELECT * FROM " . $tableName . " Where rating = '" . $ratingType . "' LIMIT 3";
    $result = mysqli_query($con, $sql);

    // Check Query
    if (! $result) {
        echo "error: " . $sql . "<br/>" . mysqli_error($con);
    }
    $row = array();
    $result_row = array();
    while ($row = mysqli_fetch_array($result)) {
        $result_row[] = $row;
    }
    return $result_row;
}

// Count Total no. of products based on Collection type
function count_num($tableName, $collectionType)
{
    global $con;
    $sql = "SELECT * FROM " . $tableName . " Where collection = '" . $collectionType . "'";
    $result = mysqli_query($con, $sql);
    $c = mysqli_num_rows($result);
    echo $c;
}

// fetch products in cart
function cart($tableName, $get_id)
{
    global $con;
    $sql = "SELECT * FROM " . $tableName . " Where product_id = '" . $get_id . "'";
    $result = mysqli_query($con, $sql);

    // Check Query
    if (! $result) {
        echo "error: " . $sql . "<br/>" . mysqli_error($con);
    }
    $row = array();
    $result_row = array();
    while ($row = mysqli_fetch_array($result)) {
        $result_row[] = $row;
    }
    return $result_row;
}
?>