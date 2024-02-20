<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "FoodWebsiteDb";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Error");
} else {
    // echo "Connection established";
}
