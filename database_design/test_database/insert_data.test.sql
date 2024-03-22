-- Thêm dữ liệu vào bảng roles
INSERT INTO roles (id, name) VALUES
(1, 'Admin'),
(2, 'User');

-- Thêm dữ liệu vào bảng categories
INSERT INTO categories (name) VALUES
('Đồ điện tử'),
('Thời trang và gia dụng');

-- Thêm dữ liệu vào bảng `users`
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
('Amanda Anderson', '0987654321', '369 Pine Street', 'amandapassword', 2);

-- Thêm dữ liệu vào bảng `products`
INSERT INTO products (name, status, price, picture, description, category_id) VALUES
('Smartphone ABC', 1, 500.00, 'smartphone.jpg', 'Mô tả sản phẩm smartphone ABC', 1),
('Laptop XYZ', 1, 1200.00, 'laptop.jpg', 'Mô tả sản phẩm laptop XYZ', 1),
('Áo thun nam A', 1, 25.00, 'aothunnam.jpg', 'Mô tả sản phẩm áo thun nam A', 2),
('Váy đầm nữ B', 1, 50.00, 'vaydamnu.jpg', 'Mô tả sản phẩm váy đầm nữ B', 2),
('Máy giặt', 1, 600.00, 'maygiat.jpg', 'Mô tả sản phẩm máy giặt', 1),
('Kem chống nắng', 1, 10.00, 'kemchongnang.jpg', 'Mô tả sản phẩm kem chống nắng', 2),
('Bóng đá Adidas', 1, 30.00, 'bongda.jpg', 'Mô tả sản phẩm bóng đá Adidas', 2),
('Máy hút bụi', 1, 80.00, 'mayhutbui.jpg', 'Mô tả sản phẩm máy hút bụi', 1),
('Tai nghe Bluetooth', 1, 50.00, 'tainghe.jpg', 'Mô tả sản phẩm tai nghe Bluetooth', 1),
('Vali du lịch', 1, 100.00, 'vali.jpg', 'Mô tả sản phẩm vali du lịch', 2);
INSERT INTO products (name, status, price, picture, description, category_id) VALUES
('Laptop Macbook Pro', 1, 1500.00, 'macbook.jpg', 'Mô tả về Laptop Macbook Pro', 1),
('Áo thun nam', 1, 20.00, 'aothunnam.jpg', 'Mô tả về Áo thun nam', 2),
('Điện thoại iPhone', 1, 1000.00, 'iphone.jpg', 'Mô tả về Điện thoại iPhone', 1),
('Đồng hồ Casio', 1, 50.00, 'donghocasio.jpg', 'Mô tả về Đồng hồ Casio', 2),
('Máy tính bảng Samsung', 1, 300.00, 'maytinhsamsung.jpg', 'Mô tả về Máy tính bảng Samsung', 1),
('Quần jean nam', 1, 30.00, 'quanjeannam.jpg', 'Mô tả về Quần jean nam', 2),
('Tai nghe Sony', 1, 50.00, 'tainghesony.jpg', 'Mô tả về Tai nghe Sony', 1),
('Áo sơ mi nữ', 1, 25.00, 'aosomilunu.jpg', 'Mô tả về Áo sơ mi nữ', 2),
('Máy ảnh Canon', 1, 200.00, 'mayanhcanon.jpg', 'Mô tả về Máy ảnh Canon', 1),
('Giày thể thao Nike', 1, 80.00, 'giaynike.jpg', 'Mô tả về Giày thể thao Nike', 2);


-- Thêm dữ liệu vào bảng `orders`
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
(10, 'Đơn hàng 1 của user 10', 'Completed', 270.00);
INSERT INTO orders (user_id, message, status, total_money) VALUES
(1, 'Đơn hàng của Admin 1', 'Pending', 500.00),
(1, 'Đơn hàng của Admin 2', 'Pending', 800.00),
(2, 'Đơn hàng của User 1', 'Completed', 100.00),
(2, 'Đơn hàng của User 2', 'Completed', 200.00),
(2, 'Đơn hàng của User 3', 'Pending', 300.00),
(1, 'Đơn hàng của Admin 3', 'Completed', 700.00),
(1, 'Đơn hàng của Admin 4', 'Pending', 600.00),
(2, 'Đơn hàng của User 4', 'Completed', 400.00),
(1, 'Đơn hàng của Admin 5', 'Completed', 900.00),
(2, 'Đơn hàng của User 5', 'Pending', 750.00);


-- Thêm dữ liệu vào bảng `order_details`
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
(8, 10, 100.00, 1, 100.00);
INSERT INTO order_details (order_id, product_id, price, number_of_products, total_money) VALUES
(1, 1, 1500.00, 1, 1500.00),
(1, 2, 20.00, 2, 40.00),
(2, 3, 1000.00, 1, 1000.00),
(2, 4, 50.00, 3, 150.00),
(3, 5, 300.00, 2, 600.00),
(3, 6, 30.00, 1, 30.00),
(4, 7, 50.00, 2, 100.00),
(4, 8, 25.00, 3, 75.00),
(5, 9, 200.00, 1, 200.00),
(5, 10, 80.00, 2, 160.00);

------------------------------------------------------------------------
-- Thêm dữ liệu vào bảng `users`
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

-- Thêm dữ liệu vào bảng `products`
INSERT INTO products (name, status, price, picture, description, category_id) VALUES
('Smartphone ABC', 1, 500.00, 'smartphone.jpg', 'Mô tả sản phẩm smartphone ABC', 1),
('Laptop XYZ', 1, 1200.00, 'laptop.jpg', 'Mô tả sản phẩm laptop XYZ', 1),
('Áo thun nam A', 1, 25.00, 'aothunnam.jpg', 'Mô tả sản phẩm áo thun nam A', 2),
('Váy đầm nữ B', 1, 50.00, 'vaydamnu.jpg', 'Mô tả sản phẩm váy đầm nữ B', 2),
('Máy giặt', 1, 600.00, 'maygiat.jpg', 'Mô tả sản phẩm máy giặt', 1),
('Kem chống nắng', 1, 10.00, 'kemchongnang.jpg', 'Mô tả sản phẩm kem chống nắng', 2),
('Bóng đá Adidas', 1, 30.00, 'bongda.jpg', 'Mô tả sản phẩm bóng đá Adidas', 2),
('Máy hút bụi', 1, 80.00, 'mayhutbui.jpg', 'Mô tả sản phẩm máy hút bụi', 1),
('Tai nghe Bluetooth', 1, 50.00, 'tainghe.jpg', 'Mô tả sản phẩm tai nghe Bluetooth', 1),
('Vali du lịch', 1, 100.00, 'vali.jpg', 'Mô tả sản phẩm vali du lịch', 2),
('Áo khoác nam', 1, 70.00, 'aokhoacnam.jpg', 'Mô tả sản phẩm áo khoác nam', 2),
('Giày cao gót nữ', 1, 60.00, 'giaycaogotnu.jpg', 'Mô tả sản phẩm giày cao gót nữ', 2);

-- Thêm dữ liệu vào bảng `orders`
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

-- Thêm dữ liệu vào bảng `order_details`
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
