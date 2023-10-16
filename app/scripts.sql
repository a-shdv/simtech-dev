DROP DATABASE IF EXISTS simtech_dev_app;
DROP TABLE IF EXISTS form_message;

CREATE TABLE form_message
(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone_number VARCHAR(50) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    problem_desc TEXT NOT NULL,
    filename VARCHAR(255)
);