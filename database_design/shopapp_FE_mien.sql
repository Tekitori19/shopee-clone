-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2024 at 07:41 AM
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
(19, 'Chảo gang sâu lòng có nắp gỗ (Kiện 25 cái) ', 1, '335.00', 'https://pos.nvncdn.com/14f951-12134/ps/20230524_txObgA3XQ8.png', '<div class=\"product-description truncate-text\">\n<span>\n<p class=\"text-gray-700\">\n    Bạn đang tìm kiếm một sản phẩm nấu ăn tiện lợi, đa năng và an toàn cho sức khỏe? Bạn muốn nấu những món ăn ngon, hấp dẫn và giữ được hương vị thực phẩm? Bạn muốn tiết kiệm thời gian và năng lượng khi nấu ăn? Nếu bạn trả lời có cho những câu hỏi trên, thì <strong>chảo gang sâu lòng có nắp gỗ</strong> là sản phẩm dành cho bạn.\n</p>\n\n<h3 class=\"font-semibold text-lg mt-4 text-gray-800\">Chất liệu gang chắc chắn, bền bỉ, chịu nhiệt tốt</h3>\n<p class=\"text-gray-700\">\n    Chảo gang sâu lòng có nắp gỗ được làm từ chất liệu gang cao cấp, có độ bền cao, không bị biến dạng hay gỉ sét khi sử dụng lâu dài. Chất liệu gang cũng có khả năng chịu nhiệt tốt, giúp chảo nóng đều và giữ được nhiệt lượng lâu hơn so với các loại chảo khác. Điều này giúp bạn nấu ăn nhanh chóng và tiết kiệm năng lượng.\n</p>\n\n<h3 class=\"font-semibold text-lg mt-4 text-gray-800\">Lòng chảo sâu, rộng, phù hợp nấu nhiều món ăn ngon</h3>\n<p class=\"text-gray-700\">\n    Lòng chảo gang sâu lòng có nắp gỗ có thiết kế sâu và rộng, cho phép bạn nấu được nhiều món ăn khác nhau. Lòng chảo cũng được phủ một lớp chống dính cao cấp, giúp bạn dễ dàng vệ sinh sau khi sử dụng.\n</p>\n\n<h3 class=\"font-semibold text-lg mt-4 text-gray-800\">Nắp gỗ thiết kế đẹp mắt, giữ nhiệt và hương vị thức ăn</h3>\n<p class=\"text-gray-700\">\n    Điểm nổi bật của chảo gang sâu lòng có nắp gỗ là chiếc nắp được làm từ gỗ tự nhiên, có thiết kế đẹp mắt và sang trọng. Nắp gỗ không chỉ tăng thêm vẻ đẹp cho sản phẩm mà còn có tác dụng giữ nhiệt và hương vị thức ăn. Nắp còn có tay cầm tiện lợi, giúp bạn dễ dàng mở và đóng nắp mà không bị bỏng tay.\n</p></span>\n</div>\n', 3),
(20, 'Robot hút bụi lau nhà Samsung VR05R5050WK/SV', 1, '10000.00', 'https://cdn.tgdd.vn/Products/Images/10139/264374/samsung-vr05r5050wk-sv-3-1-700x467.jpg', 'Robot hút bụi lau nhà Samsung VR05R5050WK/SV là một thiết bị thông minh với nhiều chế độ vận hành linh hoạt như zigzag, tự động, Spot, và Edge, phù hợp với mọi nhu cầu làm sạch trong không gian sống. Sản phẩm được trang bị dung tích khoang chứa bao gồm hộp bụi 200 ml và hộp nước 300 ml, đảm bảo khả năng làm sạch hiệu quả. Với công suất hoạt động 55W và lực hút mạnh mẽ lên đến 4200 Pa, robot dễ dàng xử lý bụi bẩn trên mọi bề mặt. Độ ồn tối đa chỉ 77 dBA, mang đến trải nghiệm sử dụng êm ái. Bộ lọc trước động cơ giúp cải thiện hiệu suất và độ bền của thiết bị. Phiên bản quốc tế này sử dụng pin dung lượng lớn 3400 mAh, cho thời gian hoạt động bền bỉ, là lựa chọn lý tưởng cho mọi gia đình.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
