<?php
session_start();
include 'connect.php'; 

if (isset($_SESSION['user_id'])) {
    echo "<p>Welcome, " . htmlspecialchars($_SESSION['username']) . "! <a href='logout.php'>Logout</a></p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>

    <!-- Login Form -->
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h2>Welcome to Quadro FFA</h2>
            <div class="input-field">
                <input type="email" name="email" required />
                <label>Enter your Email</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" required />
                <label>Enter your Password</label>
            </div>
            <button type="submit">Log In</button>
            <div class="register">
                <p>Don't have an account? <a href="#" id="registerLink">Register</a></p>
            </div>
        </form>
    </div>

    <!-- Sign Up Form -->
<div id="signupSection" class="hidden">
  <div class="wrapper">
    <h2>Sign Up</h2>
    <form action="register.php" method="POST">
      <div class="input-field">
        <input type="text" name="name" required />
        <label>Enter your Name</label>
      </div>
      <div class="input-field">
        <input type="email" name="email" required />
        <label>Enter your Email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required />
        <label>Create a Password</label>
      </div>
      <button type="submit">Sign Up</button>
      <div class="register">
        <p>Already have an account? <a href="#" id="loginLink">Log In</a></p>
      </div>
    </form>
  </div>
</div>

<!-- Forgot Password Form -->
<div id="forgotPasswordSection" class="hidden">
  <div class="wrapper">
    <h2>Forgot Password</h2>
    <form action="forgot_password.php" method="POST">
      <div class="input-field">
        <input type="email" name="email" required />
        <label>Enter your Email</label>
      </div>
      <button type="submit">Reset Password</button>
      <div class="register">
        <p>Remember your password? <a href="#" id="backToLogin">Log In</a></p>
      </div>
    </form>
  </div>
</div>


    <script src="login.js"></script>
</body>
</html>
