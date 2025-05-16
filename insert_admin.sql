-- First ensure the table exists
CREATE TABLE IF NOT EXISTS admins (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Delete any existing admin user to avoid duplicates
DELETE FROM admins WHERE username = 'admin';

-- Insert the admin user
-- Password is 'admin123' hashed with bcrypt
INSERT INTO admins (username, password, email, full_name) 
VALUES (
    'admin',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    'admin@brewblisscafe.com',
    'Administrator'
); 