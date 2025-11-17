CREATE DATABASE IF NOT EXISTS cookie_session_authentication DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 2. Sử dụng Database
USE cookie_session_authentication;

CREATE TABLE IF NOT EXISTS `users` (
forename varchar(32) not null,
surname varchar(32)  ,
username varchar(32) not null unique,
password varchar(32) not null
);
SELECT * FROM users;
