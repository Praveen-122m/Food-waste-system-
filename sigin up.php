<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT); // Secure password hashing

    // Check if email exists
    $stmt = $conn->prepare("SELECT * FROM userslogin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already registered. Please login.');</script>";
        echo "<script>window.location.href = 'login.html';</script>";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO userslogin (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful! Please login.');</script>";
            echo "<script>window.location.href = 'login.html';</script>";
        } else {
            echo "<script>alert('Error registering user. Try again.');</script>";
        }
    }
}
?>
