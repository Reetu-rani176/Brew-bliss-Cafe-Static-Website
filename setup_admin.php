<?php
require_once 'config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Setting up Admin Table and User</h2>";

try {
    // Drop existing table
    $pdo->exec("DROP TABLE IF EXISTS admins");
    echo "<p style='color: green;'>✓ Dropped existing admins table</p>";

    // Create new table
    $pdo->exec("CREATE TABLE admins (
        admin_id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        full_name VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "<p style='color: green;'>✓ Created new admins table</p>";

    // Create admin user
    $password = 'admin123';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO admins (username, password, email, full_name) VALUES (?, ?, ?, ?)");
    $stmt->execute(['admin', $hash, 'admin@brewblisscafe.com', 'Administrator']);
    echo "<p style='color: green;'>✓ Created admin user</p>";
    echo "<p>Username: admin</p>";
    echo "<p>Password: admin123</p>";

    // Verify the setup
    $stmt = $pdo->query("SELECT * FROM admins WHERE username = 'admin'");
    if ($stmt->rowCount() > 0) {
        $admin = $stmt->fetch();
        echo "<p style='color: green;'>✓ Admin user verified</p>";
        echo "<p>Username: " . htmlspecialchars($admin['username']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($admin['email']) . "</p>";
        
        // Test password
        if (password_verify('admin123', $admin['password'])) {
            echo "<p style='color: green;'>✓ Password verification successful</p>";
        } else {
            echo "<p style='color: red;'>✗ Password verification failed</p>";
        }
    }

} catch(Exception $e) {
    echo "<p style='color: red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?> 