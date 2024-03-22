CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE Product (
    product_id INTEGER NOT NULL AUTO_INCREMENT,
    name_product VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    rate FLOAT NOT NULL,
    description_product VARCHAR(255) NULL,
    image_path VARCHAR(255) NULL,
    PRIMARY KEY (product_id));

CREATE TABLE User (
    user_id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    name_user VARCHAR(255) NOT NULL,
    password_user VARCHAR(255) NOT NULL,
    role_user ENUM("Admin", "Customer", "Nonexistent") NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY (user_id));

CREATE TABLE Comment (
    comment_id INTEGER NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    description_comment VARCHAR(255) NULL,
    rate FLOAT NOT NULL,
    PRIMARY KEY(comment_id),
    FOREIGN KEY (user_id) REFERENCES User(user_id),
    FOREIGN KEY (product_id) REFERENCES Product(product_id));
