<?php

include 'database/connect.php';

$conn = new mysqli('localhost', 'root', '', 'FoodWebsiteDb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // SQL to update a record
    $sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Successfully Updated";
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    header("location: error.php");
    exit();
}
