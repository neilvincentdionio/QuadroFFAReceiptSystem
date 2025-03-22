<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // No password by default
$dbname = "user_auth"; // Ensure this matches your database

// Create a database connection using MySQLi
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and report errors
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Set character encoding to UTF-8 (prevents special character issues)
$conn->set_charset("utf8");

?>
