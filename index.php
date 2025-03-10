<?php

?>
<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="tabs">
            <div class="tab active" onclick="showForm('login')">Login</div>
            <div class="tab" onclick="showForm('register')">Register</div>
        </div>
        <div id="login" class="form-container active">
            <input type="email" class="input-field" placeholder="Email">
            <input type="password" class="input-field" placeholder="Password">
            <button class="btn">Login</button>
        </div>
        <div id="register" class="form-container">
            <input type="text" class="input-field" placeholder="Name">
            <input type="email" class="input-field" placeholder="Email">
            <input type="password" class="input-field" placeholder="Password">
            <button class="btn">Register</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
