<?php
// Include your database connection file or configure the connection here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hyscalar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>