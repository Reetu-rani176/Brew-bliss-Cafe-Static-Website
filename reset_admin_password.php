<?php
require_once 'config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Resetting Admin Password</h2>";

try {
    // Generate a fresh password hash
    $password = 'admin123';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    echo "<p>Generated new password hash: " . $hash . "</p>";
    
    // First try to update existing admin
    $updateStmt = $pdo->prepare("UPDATE admins SET password = ? WHERE username = 'admin'");
    $updateStmt->execute([$hash]);
    
    if ($updateStmt->rowCount() > 0) {
        echo "<p style='color: green;'>✓ Admin password updated successfully</p>";
    } else {
        // If no admin exists, create one
        echo "<p>No admin user found. Creating new admin user...</p>";
        
        $insertStmt = $pdo->prepare("INSERT INTO admins (username, password, email, full_name) VALUES (?, ?, ?, ?)");
        $insertStmt->execute(['admin', $hash, 'admin@brewblisscafe.com', 'Administrator']);
        
        echo "<p style='color: green;'>✓ New admin user created</p>";
    }
    
    // Verify the password works
    $verifyStmt = $pdo->query("SELECT * FROM admins WHERE username = 'admin'");
    if ($verifyStmt->rowCount() > 0) {
        $admin = $verifyStmt->fetch();
        if (password_verify('admin123', $admin['password'])) {
            echo "<p style='color: green;'>✓ Password verification successful</p>";
            echo "<p>You can now log in with:</p>";
            echo "<p>Username: admin</p>";
            echo "<p>Password: admin123</p>";
        } else {
            echo "<p style='color: red;'>✗ Password verification failed</p>";
        }
    }

} catch(PDOException $e) {
    echo "<p style='color: red;'>Database Error: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?> 