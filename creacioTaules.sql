CREATE TABLE users (
    username VARCHAR(50) PRIMARY KEY,
    password VARCHAR(60),
    birthDate DATETIME DEFAULT NULL,
    mail VARCHAR(50),
    name VARCHAR(50),
    sexe VARCHAR(50),
    website VARCHAR(50)
);