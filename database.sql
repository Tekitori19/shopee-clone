CREATE DATABASE shopapp;
USE shopapp;
-- Khách hàng khi muốn mua hàng => phải đăng ký tài khoản => bảng users
CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(100) DEFAULT '',
    phone_number VARCHAR(10) NOT NULL,
    address VARCHAR(200) DEFAULT '',
    password VARCHAR(100) NOT NULL DEFAULT '',
    created_at DATETIME
);


CREATE TABLE tokens(
    id int PRIMARY KEY AUTO_INCREMENT,
    token varchar(255) UNIQUE NOT NULL,
    token_type varchar(50) NOT NULL,
    expiration_date DATETIME,
    revoked tinyint(1) NOT NULL,
    expired tinyint(1) NOT NULL,
    user_id int,
    FOREIGN KEY (user_id) REFERENCES users(id)
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
    status BIT NOT NULL DEFAULT 1,
    price FLOAT NOT NULL CHECK (price >= 0),
    thumbnail VARCHAR(300) DEFAULT '',
    description LONGTEXT DEFAULT '',
    created_at DATETIME,
    updated_at DATETIME,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories (id)
);
-- Đặt hàng - orders
CREATE TABLE orders(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id int,
    FOREIGN KEY (user_id) REFERENCES users(id),
    note VARCHAR(100) DEFAULT '',
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20),
    total_money FLOAT CHECK(total_money >= 0)
);

-- xóa 1 đơn hàng => xóa mềm => thêm trường active
ALTER TABLE orders ADD COLUMN active BIT;
-- Trạng thái đơn hàng chỉ đc phép nhận "một số giá trị cụ thể"
ALTER TABLE orders 
MODIFY COLUMN status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled') 
COMMENT 'Trạng thái đơn hàng';

-- CREATE TABLE order_details(
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     order_id INT,
--     FOREIGN KEY (order_id) REFERENCES orders (id),
--     product_id INT,
--     FOREIGN KEY (product_id) REFERENCES products (id),
--     price FLOAT CHECK(price >= 0),
--     number_of_products INT CHECK(number_of_products > 0),
--     total_money FLOAT CHECK(total_money >= 0),
--     color VARCHAR(20) DEFAULT ''
-- );

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