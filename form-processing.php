<?php
session_start();

/**
 * CSCI 2170: Fall Semester 2024
 * Example code from the security discussion on Oct 31, 2024
 */

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login-submit'])) {
    // Check if session token matches the token in the form
    if (isset($_POST['token']) && $_POST['token'] == $_SESSION['token']) {
        session_regenerate_id(); // Regenerate session ID for security

        // Store form data temporarily in session and redirect to regex.php for validation
        $_SESSION['username_input'] = $_POST['test-input'];
        $_SESSION['password_input'] = $_POST['pswd-input'];

        header("Location: regex.php", true, 302);
        exit();
    } else {
        echo "Invalid session token. Please try again.";
    }
}
?>