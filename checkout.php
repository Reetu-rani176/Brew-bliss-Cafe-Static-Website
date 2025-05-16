<?php
session_start();
require_once 'db_connect.php';

// Clear the user's cart in the database if logged in
if (isset($_SESSION['user_id'])) {
    $stmt = $pdo->prepare("DELETE FROM cart WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
}
// Optionally, clear any session cart variables if used
// unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Complete - Brew Bliss Cafe</title>
    <meta http-equiv="refresh" content="3;url=index.php">
    <link rel="stylesheet" href="style.css">
    <style>
        .thankyou-container {
            max-width: 500px;
            margin: 100px auto;
            text-align: center;
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .thankyou-container h1 {
            color: #6e330b;
            margin-bottom: 1rem;
        }
        .thankyou-container p {
            color: #333;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="thankyou-container">
        <h1>Thank You for Ordering!</h1>
        <p>Your order has been received. We appreciate your business.</p>
        <p>You will be redirected to the home page shortly.</p>
    </div>
</body>
</html> 