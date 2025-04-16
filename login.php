<?php
session_start();
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1); // Display errors

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Get user data from database
    $stmt = $conn->prepare("SELECT * FROM userslogin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            $_SESSION['redirect_from_donate'] = true; // Set redirect flag for donation

            $_SESSION['redirect_from_donate'] = true; // Set redirect flag for donation

            if (isset($_SESSION['redirect_from_donate']) && $_SESSION['redirect_from_donate'] == true) {
                unset($_SESSION['redirect_from_donate']); // Clear the redirect flag
            header("Location: register.html"); // Redirect to donation registration

            } else {
                header("Location: sigin up.html"); // Redirect to dashboard
            }

            exit();
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>
