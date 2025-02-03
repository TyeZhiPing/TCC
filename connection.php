<?php
$servername = "Endpoint";
$username = "admin";
$password = "admin123";
$dbname = "TCCDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>