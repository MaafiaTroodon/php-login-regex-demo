<?php
session_start();
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = rand(1, 999999); // Generate a session token
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Login</h1>
    
    <form action="form-processing.php" method="post">
        <div class="form-widget">
            <label for="test-input">Username</label>
            <input type="text" name="test-input" id="test-input" required>
        </div>
        <div class="form-widget">
            <label for="pswd-input">Password</label>
            <input type="password" name="pswd-input" id="pswd-input" required>
        </div>
        <?php if (isset($_SESSION['token'])): ?>
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        <?php endif; ?>
        <input type="submit" value="Submit" name="login-submit">
    </form>
</body>
</html>