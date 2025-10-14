CREATE DATABASE login_demo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
 
USE login_demo;
 
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
 
INSERT INTO users (username, )
VALUES ('admin', MD5('123456'));login_demo

ALTER TABLE users
ADD COLUMN namsinh INT NULL,
ADD COLUMN quoctich VARCHAR(50) NULL;