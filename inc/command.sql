CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(256) NOT NULL,
    last_name varchar(256) NOT NULL,
    email varchar(256) NOT NULL,
    password varchar(256) NOT NULL
);