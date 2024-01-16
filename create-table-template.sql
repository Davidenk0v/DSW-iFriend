-- Active: 1700591600066@@localhost@3306@ifriend
CREATE TABLE users(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    name VARCHAR(255) NOT NULL,
    password VARCHAR(20),
    mail VARCHAR(50),
    create_at TIMESTAMP,
    update_at TIMESTAMP
)