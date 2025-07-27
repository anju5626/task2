<?php
$host = "localhost";
$user = "root";
$pass = "";  // Leave blank if your MySQL has no password
$db = "user_auth";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
