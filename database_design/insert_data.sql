-- Thêm dữ liệu vào bảng roles
INSERT INTO roles (id, name) VALUES
(1, 'Admin'),
(2, 'User');

-- Thêm dữ liệu vào bảng categories
INSERT INTO categories (name) VALUES
('Đồ điện tử'),
('Thời trang'),
('Gia dụng');

-- Thêm dữ liệu vào bảng users
INSERT INTO users (fullname, phone_number, address, password, role_id) VALUES
('John Doe', '0123456789', '123 Main Street', 'johnpassword', 2),
('Alice Smith', '0987654321', '456 Elm Street', 'alicepassword', 2),
('Michael Johnson', '0123456789', '789 Oak Street', 'michaelpassword', 2),
('Emily Williams', '0987654321', '101 Pine Street', 'emilypassword', 2),
('Chris Brown', '0123456789', '321 Maple Street', 'chrispassword', 2),
('Jessica Davis', '0987654321', '654 Cedar Street', 'jessicapassword', 2),
('Daniel Wilson', '0123456789', '987 Walnut Street', 'danielpassword', 2),
('Sarah Martinez', '0987654321', '741 Birch Street', 'sarahpassword', 2),
('Kevin Taylor', '0123456789', '852 Ash Street', 'kevinpassword', 2),
('Amanda Anderson', '0987654321', '369 Pine Street', 'amandapassword', 2),
('Laura Brown', '0123456789', '123 Elm Street', 'laurapassword', 2),
('Mark Johnson', '0987654321', '456 Oak Street', 'markpassword', 2);

-- Thêm dữ liệu vào bảng products
INSERT INTO products (name, status, price, description, category_id) VALUES
('Smartphone ABC', 1, 500.00,  'Mô tả sản phẩm smartphone ABC', 1),
('Laptop XYZ', 1, 1200.00, 'Mô tả sản phẩm laptop XYZ', 1),
('Áo thun nam A', 1, 25.00,  'Mô tả sản phẩm áo thun nam A', 2),
('Váy đầm nữ B', 1, 50.00,  'Mô tả sản phẩm váy đầm nữ B', 2),
('Máy giặt', 1, 600.00,  'Mô tả sản phẩm máy giặt', 1),
('Kem chống nắng', 1, 10.00,  'Mô tả sản phẩm kem chống nắng', 2),
('Bóng đá Adidas', 1, 30.00,  'Mô tả sản phẩm bóng đá Adidas', 2),
('Máy hút bụi', 1, 80.00,  'Mô tả sản phẩm máy hút bụi', 1),
('Tai nghe Bluetooth', 1, 50.00,  'Mô tả sản phẩm tai nghe Bluetooth', 1),
('Vali du lịch', 1, 100.00,  'Mô tả sản phẩm vali du lịch', 2),
('Áo khoác nam', 1, 70.00,  'Mô tả sản phẩm áo khoác nam', 2),
('Giày cao gót nữ', 1, 60.00,  'Mô tả sản phẩm giày cao gót nữ', 2);

-- Thêm dữ liệu vào bảng orders
INSERT INTO orders (user_id, message, status, total_money) VALUES
(1, 'Đơn hàng 1 của user 1', 'Pending', 200.00),
(2, 'Đơn hàng 1 của user 2', 'Pending', 300.00),
(3, 'Đơn hàng 1 của user 3', 'Completed', 150.00),
(4, 'Đơn hàng 1 của user 4', 'Pending', 250.00),
(5, 'Đơn hàng 1 của user 5', 'Completed', 350.00),
(6, 'Đơn hàng 1 của user 6', 'Pending', 400.00),
(7, 'Đơn hàng 1 của user 7', 'Pending', 100.00),
(8, 'Đơn hàng 1 của user 8', 'Completed', 180.00),
(9, 'Đơn hàng 1 của user 9', 'Pending', 220.00),
(10, 'Đơn hàng 1 của user 10', 'Completed', 270.00),
(11, 'Đơn hàng 1 của user 11', 'Pending', 320.00),
(12, 'Đơn hàng 1 của user 12', 'Completed', 420.00);

-- Thêm dữ liệu vào bảng order_details
INSERT INTO order_details (order_id, product_id, price, number_of_products, total_money) VALUES
(1, 1, 500.00, 1, 500.00),
(2, 2, 1200.00, 1, 1200.00),
(3, 3, 25.00, 2, 50.00),
(3, 4, 50.00, 1, 50.00),
(4, 5, 600.00, 1, 600.00),
(5, 6, 10.00, 3, 30.00),
(5, 7, 30.00, 1, 30.00),
(6, 8, 80.00, 1, 80.00),
(7, 9, 50.00, 2, 100.00),
(8, 10, 100.00, 1, 100.00),
(9, 11, 70.00, 1, 70.00),
(10, 12, 60.00, 1, 60.00);
