DROP DATABASE IF EXISTS simtech_dev_app;
DROP TABLE IF EXISTS form_message;

CREATE TABLE form_message
(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(255) NOT NULL,
    gender BOOLEAN NOT NULL,
    city VARCHAR(255) NOT NULL,
    problem_desc TEXT NOT NULL,
    filename VARCHAR(255)
);