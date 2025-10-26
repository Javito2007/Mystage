<?php
// home.php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLAG</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img src="welcome.png" alt="Bienvenido" class="welcome-img">
        <a href="logout.html" class="logout">Logout</a>
    </header>
    <main>
        <button onclick="window.location.href='game1.html'" class="game-button">
            Juego 1
        </button>
        <button onclick="window.location.href='game2.html'" class="game-button">
            Juego 2
        </button>
    </main>
</body>
</html>