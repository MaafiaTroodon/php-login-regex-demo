<?php
session_start();

/**
 * CSCI 2170: Fall Semester 2024
 * Example code from the Regex discussion on Oct 31, 2024
 */

// Fixed valid username and password for login
$valid_username = "user123";
$valid_password = "Pass1234";

// Retrieve the input username and password from session
$username = $_SESSION['username_input'];
$password = $_SESSION['password_input'];

if ($_SERVER['REQUEST_METHOD'] == "POST" || isset($username, $password)) {
    // Check if the entered username and password match the valid credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Store the username in session to display on the welcome page
        $_SESSION['username'] = $username;

        // Clear temporary session variables
        unset($_SESSION['username_input']);
        unset($_SESSION['password_input']);

        // Redirect to sandbox.php to display the welcome message
        header("Location: sandbox.php", true, 302);
 
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    <p>Redirecting to login...</p>
</body>
</html>