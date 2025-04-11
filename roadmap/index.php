<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontpage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('background image.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">Your Roadmap</div>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="about us.html">About Us</a></li>
            <li><a href="contact us.html">Contact Us</a></li>
            <li><a href="logout.php">logout</a></li>
            
        </ul>
    </nav>

    <div class="container">
        <main>
            <h1>Your Roadmap</h1>
            <p>
                This website helps guide developers in picking up a path and supports their learning journey.
                It also provides links to various lectures to help you learn more effectively.
            </p>

            <div class="search-container">
                <input type="text" placeholder="Search...">
            </div>

            <div class="button-container">
                <button><a href="java.html" style="text-decoration: none; color: inherit;">Java</a></button>
                <button><a href="python.html" style="text-decoration: none; color: inherit;">Python</a></button>
                <button><a href="c.html" style="text-decoration: none; color: inherit;">C</a></button>
                <button><a href="c++.html" style="text-decoration: none; color: inherit;">C++</a></button>
            </div>
        </main>
    </div>

    <footer>
        <hr>
        <p>&copy; 2025 Your Roadmap. All rights reserved.</p>
    </footer>
</body>
</html>
