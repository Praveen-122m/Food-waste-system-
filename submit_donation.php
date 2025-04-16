<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// session_start();

// Check if user is logged in
// if (!isset($_SESSION['user_id'])) {
//     header("Location: dashboard.php");
//     exit();
// }

// Include database connection
include 'db_connection.php';

// Check database connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Debugging: Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $food_type = mysqli_real_escape_string($conn, $_POST['myfood']);
    $quantity = intval($_POST['quantity']); // Ensure it's a number
    $fooddate = mysqli_real_escape_string($conn, $_POST['fooddate']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);

    // SQL Insert Query
    $sql = "INSERT INTO donations (username, email, phone, address, food_type, quantity, fooddate, note) 
            VALUES ('$username', '$email', '$phone', '$address', '$food_type', $quantity, '$fooddate', '$note')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to dashboard after successful insertion
        header("Location: dashboard.php");
        
        exit(); // Stop script execution
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}
?>

