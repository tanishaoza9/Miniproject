<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Secure hashing

    // Database connection
    $conn = new mysqli("localhost", "root", "", "roadmap");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert query
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: login.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: lightyellow;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .register-container {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 350px;
    }
    h2 {
        text-align: center;
    }
    .input-box {
        margin-bottom: 15px;
        position: relative;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input {
        width: calc(100% - 30px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .icon {
        position: absolute;
        right: 10px;
        top: 35px;
        color: #555;
    }
    .remember-forgot {
        display: flex;
        align-items: center;
        font-size: 14px;
        margin-bottom: 15px;
    }
    .remember-forgot input {
        margin-right: 5px;
    }
    .button {
        width: 100%;
        padding: 10px;
        background: #007bff;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }
    .button:hover {
        background: #0056b3;
    }
</style>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body style="background-image: url('background image.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
<header>
<div class="register-container">
<h2> Registration </h2>
<form action="register.php" method="POST">
<div class="input-box">
<label>Username</label>
<div>
<input type="text" name="username" required>
<span class="icon"><ion-icon name="person"></ion-icon></span>
</div>
</div>
<div class="input-box">
<label>Email</label>
<div>
<input type="email" name="email" required>
<span class="icon"><ion-icon name="mail"></ion-icon></span>
</div>
</div>
<div class="input-box">
<label>Password</label>
<div>
<input type="password" name="password" required>
<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
</div>
</div>
<div class="remember-forgot">
<input type="checkbox" id="terms" required>
<label for="terms">Agree to the terms & conditions</label>
</div>
<button type="submit" class="button">Register</button>
</form>
</div>
</header>
</body>
</html>
