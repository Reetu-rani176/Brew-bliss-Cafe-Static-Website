-- Drop the existing admins table if it exists
DROP TABLE IF EXISTS admins;

-- Create admin table with correct structure
CREATE TABLE admins (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert default admin user
-- Username: admin
-- Password: admin123
INSERT INTO admins (username, password, email, full_name) 
VALUES (
    'admin',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', -- This is the hashed version of 'admin123'
    'admin@brewblisscafe.com',
    'Administrator'
); 