CREATE DATABASE IF NOT EXISTS eccomerce CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE eccomerce;
CREATE TABLE IF NOT EXISTS usuarios(
    id BIGINT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(50) NOT NULL, 
    email VARCHAR(40) UNIQUE NOT NULL, 
    password VARCHAR(50) NOT NULL,
    role ENUM('admin','cliente','usuario') NOT NULL DEFAULT 'cliente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);