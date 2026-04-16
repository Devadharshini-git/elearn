<?php
$host = "db";
$user = "root";
$password = "root";
$dbname = "learning_db";

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>