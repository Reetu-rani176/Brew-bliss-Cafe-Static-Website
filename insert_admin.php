<?php
require_once 'config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Setting up Admin Table and User</h2>";

try {
    // First check if table exists
    $tableExists = $pdo->query("SHOW TABLES LIKE 'admins'")->rowCount() > 0;
    
    if (!$tableExists) {
        echo "<p>Creating admins table...</p>";
        // Create the table
        $pdo->exec("CREATE TABLE IF NOT EXISTS admins (
            admin_id INT PRIMARY KEY AUTO_INCREMENT,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            full_name VARCHAR(100) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");
        echo "<p style='color: green;'>✓ Admins table created</p>";
    } else {
        echo "<p style='color: green;'>✓ Admins table exists</p>";
    }

    // Show current table structure
    echo "<h3>Current Table Structure:</h3>";
    $tableInfo = $pdo->query("DESCRIBE admins");
    echo "<pre>";
    while ($row = $tableInfo->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
    echo "</pre>";

    // Check if admin exists
    $checkStmt = $pdo->query("SELECT * FROM admins WHERE username = 'admin'");
    if ($checkStmt->rowCount() > 0) {
        echo "<p style='color: yellow;'>⚠ Admin user already exists</p>";
    } else {
        // Create admin user with a fresh hash
        $password = 'admin123';
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO admins (username, password, email, full_name) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['admin', $hash, 'admin@brewblisscafe.com', 'Administrator']);
        
        echo "<p style='color: green;'>✓ Admin user created successfully</p>";
        echo "<p>Username: admin</p>";
        echo "<p>Password: admin123</p>";
        echo "<p>Hash: " . $hash . "</p>";
    }

    // Verify the admin user
    $verifyStmt = $pdo->query("SELECT * FROM admins WHERE username = 'admin'");
    if ($verifyStmt->rowCount() > 0) {
        $admin = $verifyStmt->fetch();
        echo "<p style='color: green;'>✓ Admin user verified in database</p>";
        echo "<p>Username: " . htmlspecialchars($admin['username']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($admin['email']) . "</p>";
        
        // Test password verification
        if (password_verify('admin123', $admin['password'])) {
            echo "<p style='color: green;'>✓ Password verification successful</p>";
        } else {
            echo "<p style='color: red;'>✗ Password verification failed</p>";
        }
    } else {
        echo "<p style='color: red;'>✗ Failed to verify admin user</p>";
    }

} catch(PDOException $e) {
    echo "<p style='color: red;'>Database Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p>SQL State: " . $e->getCode() . "</p>";
    
    // Show database connection info
    echo "<h3>Database Connection Info:</h3>";
    echo "<pre>";
    echo "Host: " . $host . "\n";
    echo "Database: " . $dbname . "\n";
    echo "Username: " . $username . "\n";
    echo "</pre>";
}
?> 