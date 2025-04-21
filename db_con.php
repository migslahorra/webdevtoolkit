<?php

// Database connection settings
$host = 'localhost'; // Database host
$dbname = 'webdevtoolkit'; // Database
$username = 'root'; // Database username
$password = ''; // Database password

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Set the character set to UTF-8
$conn->set_charset("utf8mb4");
// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>