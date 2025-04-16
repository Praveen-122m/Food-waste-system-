<?php
$host = "localhost";
$user = "root"; 
$pass = ""; // Default is empty in XAMPP
$db = "food_waste_system"; // Ensure database name is correct

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
