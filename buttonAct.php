<?php
$servername = "localhost";
$username = "root";
$password = "welcome";
// Create connection
global $conn 
    conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
?>