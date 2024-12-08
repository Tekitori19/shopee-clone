-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2024 at 01:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT 'Tên danh mục, vd: đồ điện tử'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Đồ điện tử'),
(2, 'Thời trang'),
(3, 'Gia dụng');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `message` varchar(100) DEFAULT '',
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) DEFAULT NULL,
  `total_money` decimal(10,2) DEFAULT NULL,
  `online_payment` int NOT NULL DEFAULT '0'
) ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `message`, `order_date`, `status`, `total_money`, `online_payment`) VALUES
(1, 1, 'Đơn hàng 1 của user 1', '2024-04-03 19:42:49', 'Pending', '200.00', 0),
(2, 2, 'Đơn hàng 1 của user 2', '2024-04-03 19:42:49', 'Pending', '300.00', 0),
(3, 3, 'Đơn hàng 1 của user 3', '2024-04-03 19:42:49', 'Completed', '150.00', 0),
(4, 4, 'Đơn hàng 1 của user 4', '2024-04-03 19:42:49', 'Pending', '250.00', 0),
(5, 5, 'Đơn hàng 1 của user 5', '2024-04-03 19:42:49', 'Chưa xử lý', '350.00', 0),
(6, 6, 'Đơn hàng 1 của user 6', '2024-04-03 19:42:49', 'Đang giao hàng', '400.00', 0),
(7, 7, 'Đơn hàng 1 của user 7', '2024-04-03 19:42:49', 'Pending', '100.00', 0),
(8, 8, 'Đơn hàng 1 của user 8', '2024-04-03 19:42:49', 'Completed', '180.00', 0),
(9, 9, 'Đơn hàng 1 của user 9', '2024-04-03 19:42:49', 'Đã giao hàng', '220.00', 0),
(10, 10, 'Đơn hàng 1 của user 10', '2024-04-03 19:42:49', 'Completed', '270.00', 0),
(11, 11, 'Đơn hàng 1 của user 11', '2024-04-03 19:42:49', 'Pending', '320.00', 0),
(12, 12, 'Đơn hàng 1 của user 12', '2024-04-03 19:42:49', 'Completed', '420.00', 0),
(13, 18, '', '2024-04-09 00:05:50', 'Chưa xử lí', '0.00', 0),
(14, 18, '', '2024-04-09 00:09:33', 'Chưa xử lí', '0.00', 0),
(15, 18, '', '2024-04-09 00:10:10', 'Chưa xử lí', '0.00', 0),
(16, 18, '', '2024-04-09 00:12:30', 'Chưa xử lí', '0.00', 0),
(17, 18, '', '2024-04-09 00:14:56', 'Chưa xử lí', '0.00', 0),
(18, 18, '', '2024-04-09 00:15:01', 'Chưa xử lí', '0.00', 0),
(19, 18, '', '2024-04-09 00:15:28', 'Chưa xử lí', '0.00', 0),
(20, 18, '', '2024-04-09 00:16:09', 'Chưa xử lí', '0.00', 0),
(21, 18, '', '2024-04-09 00:16:50', 'Chưa xử lý', '390.00', 0),
(22, 18, '', '2024-04-09 00:49:30', 'Chưa xử lí', '0.00', 0),
(23, 18, '', '2024-04-09 00:59:02', 'Chưa xử lí', '1076.00', 0),
(24, 17, '', '2024-04-09 01:00:56', 'Đang giao hàng', '1076.00', 0),
(25, 17, '', '2024-04-09 10:03:44', 'Chưa xử lí', '76.00', 0),
(26, 18, '', '2024-04-09 10:13:52', 'Đã giao hàng', '586.00', 0),
(27, 18, '', '2024-04-09 11:09:41', 'Chưa xử lí', '46.00', 0),
(28, 18, '', '2024-04-09 11:17:31', 'Đã giao hàng', '266.00', 0),
(29, 18, '', '2024-05-15 00:38:30', 'Chưa xử lí', '28.00', 0),
(30, 18, '', '2024-05-15 03:11:18', 'Chưa xử lí', '10064.00', 0),
(31, 18, '', '2024-05-15 03:18:27', 'Chưa xử lí', '1216.00', 0),
(32, 18, '', '2024-05-15 03:18:52', 'Chưa xử lí', '16.00', 0),
(33, 18, '', '2024-05-15 03:21:31', 'Chưa xử lí', '16.00', 0),
(34, 18, '', '2024-05-15 03:30:31', 'Chưa xử lí', '1216.00', 0),
(35, 18, '', '2024-06-07 15:36:34', 'Chưa xử lí', '10016.00', 0),
(36, 18, '', '2024-11-22 19:18:03', 'Chưa xử lí', '10016.00', 0),
(37, 19, '', '2024-11-24 14:45:50', 'Chưa xử lí', '1216.00', 0),
(38, 19, '', '2024-11-24 16:34:29', 'Chưa xử lí', '10016.00', 0),
(39, 19, '', '2024-11-25 15:02:39', 'Chưa xử lí', '10016.00', 0),
(40, 18, '', '2024-11-26 21:23:53', 'Chưa xử lí', '20016.00', 0),
(41, 18, '', '2024-12-08 17:20:17', 'Chưa xử lí', '76.00', 0),
(42, 18, '', '2024-12-08 17:20:48', 'Chưa xử lí', '76.00', 0),
(43, 18, '', '2024-12-08 19:46:25', 'Chưa xử lí', '0.00', 1),
(44, 18, '', '2024-12-08 19:48:09', 'Chưa xử lí', '0.00', 1),
(45, 18, '', '2024-12-08 19:48:16', 'Chưa xử lí', '0.00', 1),
(46, 18, '', '2024-12-08 19:53:17', 'Chưa xử lí', '26.00', 1),
(47, 18, '', '2024-12-08 19:58:46', 'Chưa xử lí', '16.00', 1),
(48, 18, '', '2024-12-08 20:11:05', 'Chưa xử lí', '41.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `number_of_products` int NOT NULL,
  `total_money` decimal(10,2) NOT NULL
) ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `number_of_products`, `total_money`) VALUES
(20, 24, 12, '60.00', 1, '60.00'),
(21, 25, 12, '60.00', 1, '60.00'),
(22, 26, 1, '500.00', 1, '500.00'),
(23, 26, 11, '70.00', 1, '70.00'),
(24, 27, 6, '10.00', 3, '30.00'),
(25, 28, 12, '60.00', 3, '180.00'),
(28, 30, 15, '10000.00', 1, '10000.00'),
(29, 30, 14, '12.00', 4, '48.00'),
(31, 34, 14, '1200.00', 1, '1200.00'),
(34, 37, 14, '1200.00', 1, '1200.00'),
(35, 38, 15, '10000.00', 1, '10000.00'),
(36, 39, 15, '10000.00', 1, '10000.00'),
(37, 40, 15, '10000.00', 2, '20000.00'),
(38, 41, 12, '60.00', 1, '60.00'),
(39, 42, 12, '60.00', 1, '60.00'),
(40, 43, 12, '60.00', 1, '1928236.00'),
(41, 46, 6, '10.00', 1, '10.00'),
(42, 48, 3, '25.00', 1, '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(350) DEFAULT NULL COMMENT 'Tên sản phẩm',
  `status` int DEFAULT '1',
  `price` decimal(10,2) NOT NULL,
  `picture` varchar(300) DEFAULT '',
  `description` longtext,
  `category_id` int DEFAULT NULL
) ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `status`, `price`, `picture`, `description`, `category_id`) VALUES
(1, 'Smartphone ABC', 1, '500.00', '', 'Mô tả sản phẩm smartphone ABC', 1),
(3, 'Áo thun nam A', 1, '25.00', '', 'Mô tả sản phẩm áo thun nam A', 2),
(5, 'Máy giặt', 1, '600.00', '', 'Mô tả sản phẩm máy giặt', 1),
(6, 'Kem chống nắng', 1, '10.00', '', 'Mô tả sản phẩm kem chống nắng', 2),
(7, 'Bóng đá Adidas', 1, '30.00', '', 'Mô tả sản phẩm bóng đá Adidas', 2),
(8, 'Máy hút bụi', 1, '80.00', '', 'Mô tả sản phẩm máy hút bụi', 1),
(11, 'Áo khoác nam', 1, '70.00', '', 'Mô tả sản phẩm áo khoác nam', 2),
(12, 'Giày cao gót nữ', 1, '60.00', '', 'Mô tả sản phẩm giày cao gót nữ', 2),
(14, 'ad', 1, '1200.00', 'https://w.wallhaven.cc/full/o5/wallhaven-o5m9xm.png', 'haha', 2),
(15, 'Cánh đồng hoang', 1, '10000.00', 'https://w.wallhaven.cc/full/yx/wallhaven-yxrzvd.png', 'Cánh đồng hoa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone_number` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `reset_token_hash` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `address` varchar(200) DEFAULT '',
  `role_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone_number`, `reset_token_hash`, `reset_token_expires_at`, `password`, `address`, `role_id`) VALUES
(1, 'John Doe', NULL, '0123456789', NULL, NULL, 'johnpassword', '123 Main Street', 2),
(2, 'Alice Smith', NULL, '0987654321', NULL, NULL, 'alicepassword', '456 Elm Street', 2),
(3, 'Michael Johnson', NULL, '0123456789', NULL, NULL, 'michaelpassword', '789 Oak Street', 2),
(4, 'Emily Williams', NULL, '0987654321', NULL, NULL, 'emilypassword', '101 Pine Street', 2),
(5, 'Chris Brown', NULL, '0123456789', NULL, NULL, 'chrispassword', '321 Maple Street', 2),
(6, 'Jessica Davis', NULL, '0987654321', NULL, NULL, 'jessicapassword', '654 Cedar Street', 2),
(7, 'Daniel Wilson', NULL, '0123456789', NULL, NULL, 'danielpassword', '987 Walnut Street', 2),
(8, 'Sarah Martinez', NULL, '0987654321', NULL, NULL, 'sarahpassword', '741 Birch Street', 2),
(9, 'Kevin Taylor', NULL, '0123456789', NULL, NULL, 'kevinpassword', '852 Ash Street', 2),
(10, 'Amanda Anderson', NULL, '0987654321', NULL, NULL, 'amandapassword', '369 Pine Street', 2),
(11, 'Laura Brown', NULL, '0123456789', NULL, NULL, 'laurapassword', '123 Elm Street', 2),
(12, 'Mark Johnson', NULL, '0987654321', NULL, NULL, 'markpassword', '456 Oak Street', 2),
(14, 'ad', NULL, '0123456788', NULL, NULL, '$2y$10$72CECJj73PfV8dqQ0RcJS.Mzu9blFs6jKeuLhxuOOY7kCWgUl7rb2', 'nhà tôi ở dưới chân đồi có giàn thiên lí có người tôi thương', 2),
(15, 'ad', NULL, '0123456787', NULL, NULL, '$2y$10$lEG3OnuEimXI0dLj1CyBXuSO.s/6TKbYlF2UpdAptWfzmX8/Sb09W', 'nhà tôi ở dưới chân đồi có giàn thiên lí có người tôi thương', 2),
(16, 'user', NULL, '0123456799', NULL, NULL, '$2y$10$Q1JWWKY1rPuzuxOjF0sGSe71G8tTn4oGxK12IQ6ziMbFgTJmc8Ntu', 'nhà tôi ở dưới chân đồi có giàn thiên lí có người tôi thương', 2),
(17, 'user', NULL, '0123456798', NULL, NULL, '$2y$10$iPdcCdVjcqlGz6paN.9Xm.kctOldiYqf8AhlJ/EIuMXqoPzd90Gn.', 'gần CĐ FPT Polytechnic', 2),
(18, 'admin  nè', 'corclan19@gmail.com', '0111111112', NULL, NULL, '$2y$10$.rMTCT.5dkDbel6ToqnhXOxMPHW4idw6MCfWdeh5ok5Ju8swtv946', 'đà lạt nè', 1),
(19, 'anning', NULL, '0223456789', NULL, NULL, '$2y$10$Uxm2JuTpQ31YHAcJqPh1nOB2lOudwwDsNd15rx0xORwwSCwSW.riC', 'anning', 2),
(20, 'user', 'dinhpdpd09993@fpt.edu.vn', '0222222222', NULL, NULL, '$2y$10$4.PkjO4GFqpQ/uqKj5jPpONbEfD8aj9wetjtVnhVKbQ.BMvALrEe.', 'Da nang', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
