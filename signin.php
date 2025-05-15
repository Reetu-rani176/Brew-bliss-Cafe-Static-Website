<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Brew Bliss Cafe - Sign In</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="index.php"> 
                <img src="Images/Logo.png" alt="Logo" class="navbar-logo">
            </a>
            <a href="index.php">Home</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Contact.php">Contact</a>
            <a href="OurStory.php">Our Story</a>
            <a href="Menu.php">Menu</a>
            <a href="signup.php">Sign Up</a>
        </nav>
    </header>

    <section class="auth-container">
        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-message">
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['success'])): ?>
            <div class="success-message">
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </div>
        <?php endif; ?>

        <form action="signin_process.php" method="POST" class="auth-form">
            <h2>Sign In</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="auth-button">Sign In</button>
            <p class="auth-link">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </section>

    <footer class="footer">
        <article class="content">
            <section class="social-icons">
                <a href="#"><img src="Images/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="Images/twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="Images/instagram-icon.png" alt="Instagram"></a>
                <a href="#"><img src="Images/youtube-icon.png" alt="YouTube"></a>
            </section>
            <p style="padding-top: 20px;">© 2025 Brew Bliss Cafe - Goodbye Cravings -</p>
        </article>
    </footer>
</body>
</html> 