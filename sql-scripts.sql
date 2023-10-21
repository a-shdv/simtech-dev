CREATE TABLE IF NOT EXISTS form_admin
(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS form_message
(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    phone_number VARCHAR(50) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    problem_desc TEXT NOT NULL,
    filename VARCHAR(255)
);