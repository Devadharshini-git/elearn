<?php
$host = "db";
$user = "root";   // Default XAMPP username
$pass = "";       // No password in XAMPP
$db = "learning_db"; // Database name

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>