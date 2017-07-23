<?php
$servername = "gator4004";
$username = "ptutor_root";
$password = "!123456";
$dbname = "ptutor_ohmygenie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>