<?php
$servername = "localhost";  // Change if your database is hosted elsewhere
$username = "root";  // Default XAMPP username
$password = "";  // Default XAMPP password (leave empty)
$dbname = "food_waste_system";  // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
