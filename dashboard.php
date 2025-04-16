
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to CSS -->
    
    <style>
    body {
    background-image: url("files/foodyi.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    text-align: center;
    font-family: "Arial", sans-serif;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    margin: 0;
}

.message-box {
    background: rgba(228, 221, 221, 0.78); 
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
    width: 50%;
    max-width: 600px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    transition: all 0.3s ease-in-out;
    border: 2px solid transparent;
}

/* Hover Effect: Glowing Border */
.message-box:hover {
    transform: scale(1.05);
    box-shadow: 0px 15px 35px rgba(16, 237, 49, 0.4); /* Gold glow effect */
    border: 2px solidrgb(50, 89, 55);
}

/* Animated Heading */
h1 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
    color:rgb(31, 130, 37);
    animation: glowText 1.5s infinite alternate;
}

/* Glow Text Animation */
@keyframes glowText {
    0% {
        text-shadow: 0 0 5pxrgb(255, 255, 255), 0 0 10pxrgb(255, 255, 255);
    }
    100% {
        text-shadow: 0 0 10pxrgb(251, 251, 251), 0 0 20pxrgb(252, 252, 252);
    }
}

/* Paragraph Styling */
p {
    font-size: 18px;
    font-weight: 500;
    color: #444;
    transition: color 0.3s ease-in-out;
}

/* Paragraph Hover Effect */
.message-box:hover p {
    color: #222; /* Darker text for more contrast */
}

/* Logout Button */
.logout-btn {
    text-decoration: none;
    background: linear-gradient(45deg, #ff4d4d, #ff1a1a);
    color: white;
    padding: 12px 25px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    transition: 0.3s ease-in-out;
    display: inline-block;
    margin-top: 20px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}

/* Logout Button Hover */
.logout-btn:hover {
    background: linear-gradient(45deg, #cc0000, #990000);
    transform: scale(1.1);
    box-shadow: 0px 8px 15px rgba(255, 0, 0, 0.5);
}


    </style>
</head>
<body>
    <div class="message-box">
        <h1>🌟 Thank You for Your Generous Donation! 🌟</h1>
        <p>Your contribution will help bring food to those in need. Together, we are making a difference! ❤️</p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
