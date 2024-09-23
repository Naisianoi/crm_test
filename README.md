SQL

-- Contacts Table
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15),
    company VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);


-- Contacts Table
INSERT INTO contacts (name, email, phone, company) VALUES
    ('John Doe', 'john.doe@example.com', '123-456-7890', 'ABC Inc.'),
    ('Jane Smith', 'jane.smith@example.com', '987-654-3210', 'XYZ Corp.'),
    ('Alice Johnson', 'alice.johnson@example.com', '555-123-4567', '123 Company'),
    ('Bob Williams', 'bob.williams@example.com', '444-888-9999', 'Tech Solutions');

-- User Table
INSERT INTO users (username, password) VALUES
    ('user1', '$2y$10$YqJDXBGf57s5Uz7INveu6uTbfXvdf4NzjXEEDp5j86f/h9kGj.4uK'), 
    ('user2', '$2y$10$R4eBLPpZ4E8a0ZG8lxMQVOP7NCCf8ww0PQ7jDy/FwOZ2jhksKbU1u'), 
    ('user3', '$2y$10$5/xgKedP/uJbPzdCN/TI2.GgMz5d2PhGUV1TLE8L3G5IR6veK5n3i'),
    ('user4', '$2y$10$ap6T9AZm5pumRx/8D9/x7uRUJ01sM/G9Wj2Opgk7jbjFWkWXpVXx2');
