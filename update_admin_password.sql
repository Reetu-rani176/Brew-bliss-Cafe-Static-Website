-- First, let's update the admin password with a fresh hash
-- This hash is for the password 'admin123'
UPDATE admins 
SET password = '$2y$10$YourNewHashHere' 
WHERE username = 'admin';

-- If the above doesn't work, let's try recreating the admin user
DELETE FROM admins WHERE username = 'admin';

INSERT INTO admins (username, password, email, full_name) 
VALUES (
    'admin',
    '$2y$10$YourNewHashHere',
    'admin@brewblisscafe.com',
    'Administrator'
); 