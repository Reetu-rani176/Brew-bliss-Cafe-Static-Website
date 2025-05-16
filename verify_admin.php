<?php
require_once 'config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Admin User Verification</h2>";

try {
    // Check database connection
    $pdo->query("SELECT 1");
    echo "<p style='color: green;'>✓ Database connection successful</p>";

    // Check if admins table exists
    $checkTable = $pdo->query("SHOW TABLES LIKE 'admins'");
    if ($checkTable->rowCount() > 0) {
        echo "<p style='color: green;'>✓ Admins table exists</p>";
    } else {
        echo "<p style='color: red;'>✗ Admins table does not exist</p>";
        exit;
    }

    // Check admin user
    $stmt = $pdo->query("SELECT * FROM admins WHERE username = 'admin'");
    if ($stmt->rowCount() > 0) {
        $admin = $stmt->fetch();
        echo "<p style='color: green;'>✓ Admin user exists</p>";
        echo "<p>Username: " . htmlspecialchars($admin['username']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($admin['email']) . "</p>";
        echo "<p>Stored password hash: " . htmlspecialchars($admin['password']) . "</p>";

        // Test password verification
        $testPassword = 'admin123';
        if (password_verify($testPassword, $admin['password'])) {
            echo "<p style='color: green;'>✓ Password verification successful</p>";
        } else {
            echo "<p style='color: red;'>✗ Password verification failed</p>";
            
            // Generate new hash
            $newHash = password_hash($testPassword, PASSWORD_DEFAULT);
            echo "<p>New hash for 'admin123': " . $newHash . "</p>";
            
            // Update admin password
            $updateStmt = $pdo->prepare("UPDATE admins SET password = ? WHERE username = 'admin'");
            $updateStmt->execute([$newHash]);
            echo "<p style='color: green;'>✓ Admin password updated with new hash</p>";
        }
    } else {
        echo "<p style='color: red;'>✗ Admin user does not exist</p>";
        
        // Create admin user
        $password = 'admin123';
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO admins (username, password, email, full_name) VALUES (?, ?, ?, ?)");
        $stmt->execute(['admin', $hash, 'admin@brewblisscafe.com', 'Administrator']);
        echo "<p style='color: green;'>✓ Admin user created</p>";
        echo "<p>Username: admin</p>";
        echo "<p>Password: admin123</p>";
        echo "<p>Hash: " . $hash . "</p>";
    }
} catch(Exception $e) {
    echo "<p style='color: red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?> 