<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validate input
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required";
        header("Location: signin.html");
        exit();
    }

    // Check user credentials
    try {
        $stmt = $pdo->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        
        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['fullname'];
                header("Location: index.html");
                exit();
            } else {
                $_SESSION['error'] = "Invalid password";
                header("Location: signin.html");
                exit();
            }
        } else {
            $_SESSION['error'] = "Email not found";
            header("Location: signin.html");
            exit();
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "Login failed. Please try again.";
        header("Location: signin.html");
        exit();
    }
}
?> 