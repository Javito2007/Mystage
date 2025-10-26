<?php
session_start();

// Revisar si existe usuario
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to the Home Page!</h2>
        <p>You are successfully logged in.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>