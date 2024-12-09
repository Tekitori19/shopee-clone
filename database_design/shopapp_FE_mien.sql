-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2024 at 07:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.13

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(41, 21, '', '2024-12-06 01:32:03', 'Chưa xử lí', '70016.00', 0),
(42, 21, '', '2024-12-07 13:47:38', 'Chưa xử lí', '1216.00', 0),
(43, 21, '', '2024-12-07 13:47:53', 'Chưa xử lí', '1216.00', 0),
(44, 21, '', '2024-12-07 15:59:59', 'Chưa xử lí', '9616.00', 0),
(45, 21, '', '2024-12-08 01:41:41', 'Chưa xử lí', '2026.00', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(38, 41, 17, '10000.00', 7, '70000.00'),
(39, 42, 14, '1200.00', 1, '1200.00'),
(40, 43, 14, '1200.00', 1, '1200.00'),
(41, 44, 14, '1200.00', 8, '9600.00'),
(42, 45, 19, '335.00', 6, '2010.00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `status`, `price`, `picture`, `description`, `category_id`) VALUES
(1, 'Set Quần Kiểu Kèm Áo Kiểu Cổ Bẻ Croptop SDNFM20', 1, '335.00', 'https://hellomida.vn/wp-content/uploads/2023/10/b71a5bb3-89d0-41d0-9ce0-d2589e89f5bd-600x900.jpg', 'Set quần kiểu kết hợp với áo kiểu cổ bẻ croptop SDNFM20 là lựa chọn hoàn hảo cho phong cách thời trang hiện đại và năng động. Với thiết kế trẻ trung và tinh tế, bộ trang phục này không chỉ giúp bạn tỏa sáng mà còn mang đến cảm giác thoải mái trong mọi hoạt động', 2),
(3, 'Váy Chữ A Thiết Kế Chỉ Nổi Thắt Nơ Cổ VCAFM33', 1, '25.00', 'https://hellomida.vn/wp-content/uploads/2023/09/6c9b2769-4a92-4fae-b6bb-cbacffe1816d-756x1024.jpg', 'Chiếc váy chữ A thiết kế chỉ nổi thắt nơ cổ VCAFM33 là một sản phẩm nổi bật trong bộ sưu tập thời trang nữ HLMD. Với thiết kế mang nét quyến rũ nhẹ nhàng, chiếc váy không chỉ tôn lên vẻ đẹp tinh tế mà còn khiến bạn say mê ngay từ cái nhìn đầu tiên. Đây là lựa chọn hoàn hảo dành cho những ai yêu thích phong cách thanh lịch, nhẹ nhàng nhưng vẫn đầy cuốn hút', 2),
(5, 'Android Tivi TCL 43 inch 43S5400A', 1, '600.00', 'https://cdnv2.tgdd.vn/mwg-static/dmx/Products/Images/1942/327551/google-tivi-aqua-qled-4k-70-inch-aqt70k800ux-1-638652947397800867-700x467.jpg', 'Android Tivi với màn hình kích thước 43 inch và độ phân giải Full HD mang đến trải nghiệm xem sắc nét, sống động. Sản phẩm được trang bị công nghệ xử lý hình ảnh HDR10, giúp tái hiện màu sắc và chi tiết hình ảnh chân thực hơn. Tivi hỗ trợ các định dạng hình ảnh phổ biến như JPEG, PNG, BMP, và GIF, đáp ứng nhu cầu giải trí đa dạng. Về âm thanh, công nghệ Dolby Audio cùng tổng công suất loa 19W mang lại âm thanh sống động, chân thực, nâng cao trải nghiệm giải trí tại gia. Đây là lựa chọn lý tưởng cho những ai muốn sở hữu một chiếc tivi hiện đại, đa năng và hiệu suất cao.', 1),
(6, 'Chân váy bút chì Dreamy', 1, '10.00', 'https://pubcdn.ivymoda.com/files/product/thumab/400/2024/11/05/26f8f3b241ffa0fce2dd2ed931738652.webp', 'Chân váy nằm trong BST Dreamy Bloom, ấn tượng với màu sắc trang nhã, họa tiết hoa đính thanh lịch phù hợp với nhiều phong cách, dễ phối đồ, từ áo sơ mi, áo thun đến áo kiểu cách điệu.', 2),
(7, 'Tủ lạnh Samsung Inverter 488 lít', 1, '30.00', 'https://cdn.tgdd.vn/Products/Images/1943/236996/samsung-rf48a4010m9-sv-1-1-700x467.jpg', ' Multi Door - 4 cánh\nDung tích sử dụng:\n488 lít - 4 - 5 người\nDung tích tổng:\n511 lít\nDung tích ngăn đá:\n159 lít\nDung tích ngăn lạnh:\n329 lít\nChất liệu cửa tủ lạnh:\nThép không gỉ\nChất liệu khay ngăn lạnh:\nKính chịu lực\nChất liệu ống dẫn gas, dàn lạnh:\nỐng dẫn gas bằng Đồng - Lá tản nhiệt bằng Nhôm\nNăm ra mắt:\n2021\nSản xuất tại:\nTrung Quốc\n', 1),
(8, 'Máy sấy thông hơi Galanz 7 Kg DV-70T5C(S)', 1, '80.00', 'https://cdn.tgdd.vn/Products/Images/2202/241930/may-say-thong-hoi-galanz-7-kg-dv-70t5c-s-1-700x467.jpg', '\nSấy thông hơi\nKhối lượng sấy:\n7 Kg\nSố người sử dụng:\nTừ 2 - 3 người\nĐộng cơ:\nTruyền động gián tiếp (Dây curoa)\nNhiệt độ sấy tối đa:\n72°C\nCông suất tiêu thụ:\n2350W\nSố chương trình hoạt động:\n15 chương trình\nTiện ích:\nSấy đảo chiều giảm nhăn\nKhóa trẻ em\nHẹn giờ sấy\nCảm biến độ ẩm Sensor Dryer\nBảng điều khiển:\nSong ngữ Anh - Việt, nút nhấn, núm xoay, có màn hình hiển thị\nChất liệu lồng sấy:\nThép mạ kẽm\nKích thước - Khối lượng:\nCao 83.5 cm - Ngang 59.5 cm - Sâu 54.5 cm - Nặng 30 kg\n', 1),
(11, 'Áo sweater Classy Girl', 1, '70.00', 'https://pubcdn.ivymoda.com/files/product/thumab/400/2023/11/23/2b81c62df89bb6c4edeebfbbf22bcfaa.jpg', 'Bản phối áo thun kiểu kết hợp quần short cá tính là đã mang đến thiết kế set bộ năng động cho mùa Thu - Đông tới đây. \n\nÁo cổ kéo khóa, độ dài thường, bo gấu và bo tay. Trước ngực có tạo điểm nhấn ', 2),
(12, 'Áo len nhẹ nhàng uyển chuyển DD12h', 1, '60.00', 'https://pubcdn.ivymoda.com/files/product/thumab/400/2021/02/03/0f6e2ee95d4b5fc2c160ae96d9492988.JPG', 'Sản phẩm với thiết kế tay dài, đặc biệt ở phía cổ áo lọ, khoét chữ V phía dưới tinh tế làm nổi bật lên sự đẳng cấp cho người mặc. Viền bằng len gân co giãn.\n\nÁo len lông cừu cao cấp được tạo nên bởi những sợi xơ len Merino tự nhiên nhất - trứ danh số 1 trên thị trường thời trang bới sự cao cấp và bền bỉ.', 2),
(14, 'Áo Thun Nữ Croptop Cổ Tròn In Chữ GOTUE ATFM14', 1, '1200.00', 'https://hellomida.vn/wp-content/uploads/2024/07/Ao-Thun-Nu-Croptop-Co-Tron-In-Chu-GOTUE-ATFM14-H2-757x1024.jpg', 'Áo thun nữ croptop cổ tròn in chữ GOTUE ATFM14 được thiết kế theo kiểu dáng basic với chất liệu mềm mại, mang lại cảm giác thoải mái khi mặc. Sản phẩm có màu sắc nâu trơn, kích thước freesize phù hợp cho người dưới 60kg, được làm từ vải kate bền đẹp. Thiết kế tuy đơn giản nhưng không kém phần ấn tượng với form cổ tròn quen thuộc và chi tiết nút bọc tinh tế ở cổ, giúp tôn lên nét thanh lịch và thời trang của người mặc. Đây là lựa chọn hoàn hảo cho các bạn nữ yêu thích phong cách đơn giản nhưng vẫn nổi bật.', 2),
(15, 'Máy lọc nước điện giải ion kiềm ROBOT IonPrince ', 1, '10000.00', 'https://cdn.tgdd.vn/Products/Images/3385/291477/dien-giai-ion-kiem-robot-ionprince-59x-4-loi-5-tam-dien-cuc-1-700x467.jpg', ' Để bàn\nLoại máy:\nMáy lọc nước điện giải ion kiềm\nCông nghệ lọc:\nĐiện phân tạo nước ion kiềm giàu Hydrogen\nUF\nKháng khuẩn:\nNano Silver\nCông suất lọc:\n60 - 180 lít/giờ\nCông suất tiêu thụ điện trung bình khoảng:\n0.35 kW/h\nSố điện cực:\n5 tấm điện cực chất liệu Titanium phủ Platinum (Sx Hàn Quốc)\nPhương pháp điện phân:\nĐiện phân liên tục\nTuổi thọ điện cực:\n30 năm\nChỉ số nước:\npH 4.5 - 10.5, Hydrogen 750 - 850 ppb, ORP (-350) - (-500) mV\nĐộ pH thực tế:\n5.18 - 10.42 pH, Nước phải có khoáng TDS từ 50 - 100, pH nước nguồn 6.0 - 7.2. Tùy thuộc nguồn nước đầu vào\n', 1),
(16, 'Loa kéo karaoke Nanomax Pro-9500 3600W', 1, '10000.00', 'https://cdnv2.tgdd.vn/mwg-static/dmx/Products/Images/2162/330484/loa-keo-karaoke-nanomax-pro-9500-3600w-1-638633802850289178-700x467.jpg', '\n    Âm thanh mạnh mẽ, chân thực với tổng công suất 3600W.\n    Hệ thống loa 2 đường tiếng với 2 loa Bass 50 cm tái tạo âm thanh lôi cuốn.\n    Công nghệ âm thanh 24 Transistor công suất lớn tạo âm thanh chân thực hơn.\n    Mạch khuếch đại Class AB cung cấp chất lượng âm thanh mạnh mẽ.\n    Công nghệ Bluetooth hiện đại cho khoảng cách kết nối lên đến 28m.\n    Tích hợp 2 micro không dây có khả năng điều chỉnh tần số, tầm phủ sóng kết nối xa.\n    Thùng gỗ MDF, sơn nước chống trầy kết hợp cùng mặt lưới kim loại sơn tĩnh điện.\n', 1),
(17, 'Robot hút bụi lau nhà Samsung VR05R5050WK/SV', 1, '10000.00', 'https://cdn.tgdd.vn/Products/Images/10139/264374/samsung-vr05r5050wk-sv-3-1-700x467.jpg', 'Robot hút bụi được trang bị nhiều chế độ vận hành linh hoạt như zigzag, tự động, Spot, và Edge, giúp tối ưu hóa hiệu quả làm sạch trên các bề mặt khác nhau. Sản phẩm có dung tích khoang chứa tiện lợi với hộp bụi 200 ml và hộp nước 300 ml, phù hợp cho các nhu cầu dọn dẹp đa dạng. Với công suất hoạt động 55W và lực hút mạnh mẽ lên đến 4200 Pa, robot đảm bảo làm sạch sâu và hiệu quả. Độ ồn tối đa chỉ 77 dBA, mang lại trải nghiệm êm ái khi sử dụng. Thiết bị sử dụng bộ lọc trước động cơ, giúp nâng cao hiệu suất và tuổi thọ. Phiên bản quốc tế này được trang bị pin dung lượng lớn 3400 mAh, cung cấp thời gian hoạt động lâu dài, đáp ứng nhu cầu dọn dẹp hàng ngày của bạn.', 1),
(18, 'Bình đựng nước giữ nhiệt Nic:e', 1, '335.00', 'https://pos.nvncdn.com/14f951-12134/ps/20230318_MYDwRsdZgD.png', 'Uống nước đủ lượng mỗi ngày là một trong những cách đơn giản nhất để duy trì sức khỏe và sắc đẹp? Với bình đựng nước giữ nhiệt cao cấp, có thể giúp bạn uống nước với nhiệt độ mong muốn, bình đựng nước giữ nhiệt Nic:e chính là sản phẩm hoàn hảo cho bạn.', 3),
(19, 'Chảo gang sâu lòng có nắp gỗ (Kiện 25 cái) ', 1, '335.00', 'https://pos.nvncdn.com/14f951-12134/ps/20230524_txObgA3XQ8.png', 'Thiết kế lòng chảo sâu và rộng của chảo gang sâu lòng cho phép bạn dễ dàng chế biến nhiều món ăn khác nhau. Bên cạnh đó, lớp phủ chống dính cao cấp trên lòng chảo giúp việc vệ sinh sau khi sử dụng trở nên dễ dàng hơn. Điểm nhấn nổi bật của sản phẩm là chiếc nắp gỗ tự nhiên, không chỉ đẹp mắt và sang trọng mà còn có khả năng giữ nhiệt và bảo toàn hương vị', 3),
(20, 'Robot hút bụi lau nhà Samsung VR05R5050WK/SV', 1, '10000.00', 'https://cdn.tgdd.vn/Products/Images/10139/264374/samsung-vr05r5050wk-sv-3-1-700x467.jpg', 'Robot hút bụi lau nhà Samsung VR05R5050WK/SV là một thiết bị thông minh với nhiều chế độ vận hành linh hoạt như zigzag, tự động, Spot, và Edge, phù hợp với mọi nhu cầu làm sạch trong không gian sống. Sản phẩm được trang bị dung tích khoang chứa bao gồm hộp bụi 200 ml và hộp nước 300 ml, đảm bảo khả năng làm sạch hiệu quả. Với công suất hoạt động 55W và lực hút mạnh mẽ lên đến 4200 Pa, robot dễ dàng xử lý bụi bẩn trên mọi bề mặt. Độ ồn tối đa chỉ 77 dBA, mang đến trải nghiệm sử dụng êm ái. Bộ lọc trước động cơ giúp cải thiện hiệu suất và độ bền của thiết bị. Phiên bản quốc tế này sử dụng pin dung lượng lớn 3400 mAh, cho thời gian hoạt động bền bỉ, là lựa chọn lý tưởng cho mọi gia đình.', 1);

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
(1, 'John Doe', 'phamvanmien2002@gmail.com', '0123456789', '9c5b48c34ec61e41809a93061256e4033f098fb427e489505cf4f1fa9804fd58', '2024-12-05 18:08:06', 'johnpassword', '123 Main Street', 2),
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
(18, 'admin  nè', 'corclan19@gmail.com', '0111111112', NULL, NULL, '$2y$10$HUhpCCPMsFTLxQFEGUDACuXIeNP251yrJsPWbwQ/AxtXx33oPbK52', 'đà lạt nè', 1),
(19, 'anning', NULL, '0223456789', NULL, NULL, '$2y$10$Uxm2JuTpQ31YHAcJqPh1nOB2lOudwwDsNd15rx0xORwwSCwSW.riC', 'anning', 2),
(20, 'user', 'dinhpdpd09993@fpt.edu.vn', '0222222222', NULL, NULL, '$2y$10$4.PkjO4GFqpQ/uqKj5jPpONbEfD8aj9wetjtVnhVKbQ.BMvALrEe.', 'Da nang', 2),
(21, 'Phạm Văn Miền', 'phamvanmien2001@gmail.com', '0906983875', NULL, NULL, '$2y$10$onaEcO8ARoNbOM/bWjdUAeMP/PoLWltepem1LFSDerYSpenCD5vAK', 'ThanhHai-ThanhHa-HaiDuong', 1),
(22, 'Phạm Văn Miền', 'cailonma@gmail.com', '1234567890', NULL, NULL, '$2y$10$r4DkoTS0SR2aY/vC2k2OMOfq2.ZukAJ4QBHB6OgQAuJPFOIRoh01u', 'ThanhHai-ThanhHa-HaiDuong', 1);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
