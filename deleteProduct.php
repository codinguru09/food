<?php

include 'database/connect.php';

$conn = new mysqli('localhost', 'root', '', 'FoodWebsiteDb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];

    // SQL to delete a record
    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Successfully deleted";
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    header("location: error.php");
    exit();
}
