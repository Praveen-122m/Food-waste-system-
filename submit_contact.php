<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db_connection.php'; // Include the database connection

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST['myname']) ? $_POST['myname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Prepare and bind insert query
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the statement
    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }

    echo "<script>alert('Your message has been sent successfully!'); window.location.href = 'contact.html';</script>";

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
