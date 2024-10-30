<?php
$servername = "srv1657.hstgr.io";
$username = "u814227416_mrcode";
$password = "Mahmoud@777029860_-_";
$dbname = "u814227416_mygate";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set to utf8mb4 for Unicode compatibility
if (!$conn->set_charset("utf8mb4")) {
    printf("Error loading character set utf8mb4: %s\n", $conn->error);
    exit();
}
?>
