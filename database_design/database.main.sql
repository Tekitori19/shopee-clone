CREATE DATABASE shopapp;
USE shopapp;

CREATE TABLE roles(
    id INT PRIMARY KEY,
    name VARCHAR(20) NOT NULL 
);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(100) DEFAULT '',
    phone_number VARCHAR(10) NOT NULL,
    address VARCHAR(200) DEFAULT '',
    password VARCHAR(100) NOT NULL DEFAULT '',
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles (id)
);

-- Bảng danh mục sản phẩm(Category)
CREATE TABLE categories(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) NOT NULL DEFAULT '' COMMENT 'Tên danh mục, vd: đồ điện tử'
);

-- Bảng chứa sản phẩm(Product): "laptop macbook air 15 inch 2023", iphone 15 pro,...
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(350) COMMENT 'Tên sản phẩm',
    status INT DEFAULT 1,
    price DECIMAL(10, 2) NOT NULL CHECK (price >= 0),
    picture VARCHAR(300) DEFAULT '',
    description LONGTEXT,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories (id)
);

-- Đặt hàng - orders
CREATE TABLE orders(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id int,
    FOREIGN KEY (user_id) REFERENCES users(id),
    message VARCHAR(100) DEFAULT '',
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20),
    total_money DECIMAL(10, 2) CHECK(total_money >= 0)
);

CREATE TABLE order_details(
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT,
    FOREIGN KEY (order_id) REFERENCES orders (id),
    product_id INT,
    FOREIGN KEY (product_id) REFERENCES products (id),
    price DECIMAL(10, 2) NOT NULL CHECK(price >= 0),
    number_of_products INT NOT NULL CHECK(number_of_products > 0),
    total_money DECIMAL(10, 2) NOT NULL CHECK(total_money >= 0)
);