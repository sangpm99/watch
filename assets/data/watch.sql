-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 11:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` date NOT NULL,
  `customer_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`id`, `product_name`, `price`, `purchase_date`, `customer_name`, `number`, `email`, `address`) VALUES
(1, 'Bentley BL2096-152WWI-S', '16,500,000', '2021-10-06', 'Phạm Minh Sáng', '0192837447', 'sangpm72@gmail.com', 'Đà Nẵng'),
(2, 'Vertu V01G-01-Z18ER', '133,000,000', '2021-10-05', 'Đào Tuấn Minh', '0192837447', 'minhdt72@gmail.com', 'Hà Nam'),
(3, 'Bentley BL1822-152KBI-S', '13,500,000', '2021-10-08', 'Phạm Văn Huy', '07865674567', 'huypm72@gmail.com', 'Số 10 Đống Đa, Hà Nội'),
(4, 'Orient SK RA-AA0B03L19B', '6,800,000', '2021-10-08', 'Nguyễn Thị Hương', '06726734623', 'huongnt72@gmail.com', 'Số 99 Tây Sơn, Hà Nội'),
(6, 'Orient Star RE-AV0116L00BL', '21,410,000', '2021-10-08', 'Bùi Trung Đức', '07865674567', 'ducbt72@gmail.com', 'Nha Trang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `age`, `number`, `email`, `address`, `position`) VALUES
(1, 'Trần Văn Thuật', 22, '0987654321', 'thuattv72@gmail.com', 'Hà Nội', 'Quản lý'),
(2, 'Đào Tuấn Minh', 22, '0192837447', 'minhdt72@gmail.com', 'Hà Nam', 'Nhân viên'),
(3, 'Phạm Minh Sáng', 23, '0978624332', 'sangpm72@gmail.com', 'Đà Nẵng', 'Nhân viên'),
(18, 'Nguyễn Tiến Đạt', 19, '0897675645', 'datnt@gmail.com', 'Bắc Ninh', 'Nhân viên'),
(19, 'Phạm Quốc Tuấn', 19, '0897675645', 'tuanpq@gmail.com', 'Hải Phòng', 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `price`, `description`, `image`) VALUES
(3, 'Bentley BL1822-152KBI-S', '13,500,000', 'Bentley BL1822-152KBI-S là mẫu đồng hồ cơ mới nhất hiện nay, xuất xứ thương hiệu đồng hồ của Đức nổi tiếng hàng đầu về sự chính xác và bền bỉ trong nghệ thuật chế tác đồng hồ. Nổi bật với 13 viên kim cương ( 12 viên tại cọc số, 1 viên trên đỉnh của bezel) và ~200 viên đá sapphire đầy sang trọng với độ tinh xảo cao mang tới phong cách sang trọng quý tộc và thanh lịch.', './assets/images/b3.jpg'),
(4, 'Bentley BL1796-302TCI-S', '12,300,000', 'Đồng hồ Bentley BL1796-302TCI-S là mẫu đồng hồ pin mới nhất hiện nay, xuất xứ thương hiệu đồng hồ của Đức nổi tiếng hàng đầu về sự chính xác và bền bỉ trong nghệ thuật chế tác đồng hồ. Diện mạo nổi bật, thể thao và cá tính mạnh mẽ đã nên nên phần hồn của đồng hồ. Phần chất của đồng hồ chính là sự hoàn thiện các chi tiết phức tạp có độ tinh xảo cực cao quá như đính 20 viên kim cương và hàng trăm viên đá sapphire trên đồng hồ.', './assets/images/b4.jpg'),
(5, 'Bentley BL1784-302KCD', '8,050,000', 'Đồng hồ Bentley BL1784-302KCD là mẫu đồng hồ cơ mới nhất hiện nay, xuất xứ thương hiệu đồng hồ của Đức nổi tiếng hàng đầu về sự chính xác và bền bỉ trong nghệ thuật chế tác đồng hồ, là một chiếc đồng hồ hiện đại đầy sang trọng nổi bật với 15 viên kim hội tụ ngay trên bezel và mặt số của đồng hồ bên cạnh đó là hàng trăm viên đá sapphire được nạm có độ tinh xảo rất cao, đặc biệt là nó mang DNA của phong cách sang trọng quý tộc và thanh lịch.', './assets/images/b5.jpg'),
(6, 'Orient Star RE-AV0116L00BL', '21,410,000', 'Orient Star Orient Star RE-AV0116L00B là một thương hiệu đồng hồ Nhật Bản nổi tiếng bền bỉ với chất lượng vượt trội với giá thành vừa phải. Orient Star RE-AV0116L00B là phiên bản giới hạn 1300 chiếc thuộc BST: Contemporary – Semi Skeleton – Kim giây nhỏ – Kim đo năng lượng cót – Sử dụng máy Inhouse – Lên cót bằng tay – Lộ đáy. Sản phẩm có sự cải tiến tinh tế so với người đàn anh trước, là hiện thân của sự đẳng cấp, lịch lãm và sang trọng mang lại sự thích thú và cuốn hút cho các quý ông.', './assets/images/o1.jpg'),
(7, 'Orient Star RE-AU0406L00B', '17,630,000', 'Orient Star RE-AU0406L00B thuộc dòng sản phẩm đồng hồ phân khúc cao cấp của thương hiệu Orient, cỗ máy cơ khí này mang đẳng cấp thượng thừa thiết kế trau chuốt, tỉ mỉ, độc đáo, tinh xảo, tỏa sáng trên mọi phương diện và có thể nói Orient Star xứng đáng là một sản phẩm xuất sắc của các nghệ nhân Nhật Bản.', './assets/images/o2.jpg'),
(8, 'Orient SK RA-AA0B03L19B', '6,800,000', 'Đồng hồ Orient SK RA-AA0B03L19B là một thương hiệu đồng hồ Nhật Bản nổi tiếng bền bỉ với chất lượng vượt trội, sản phẩm là đánh dấu sự trở lại của một huyền thoại mang tên SK mặt lửa khi trước đó được biết tới năm 1970 – mệnh danh gọi là Sea King, là hiện thân của sự đẳng cấp, mạnh mẽ và sang trọng mang lại sự thích thú và cuốn hút cho các quý ông.', './assets/images/o3.jpg'),
(9, 'Orient SK RA-AA0B01G19B', '6,800,000', 'Đồng hồ Orient SK RA-AA0B03L19B là một thương hiệu đồng hồ Nhật Bản nổi tiếng bền bỉ với chất lượng vượt trội, sản phẩm là đánh dấu sự trở lại của một huyền thoại mang tên SK mặt lửa khi trước đó được biết tới năm 1970 – mệnh danh gọi là Sea King, là hiện thân của sự đẳng cấp, mạnh mẽ và sang trọng mang lại sự thích thú và cuốn hút cho các quý ông.', './assets/images/o4.jpg'),
(10, 'Orient SK RA-AA0B01G19B', '7,810,000', 'Đồng hồ Orient SK RA-AA0B01G19B là một thương hiệu đồng hồ Nhật Bản nổi tiếng bền bỉ với chất lượng vượt trội, sản phẩm là đánh dấu sự trở lại của một huyền thoại mang tên SK mặt lửa khi trước đó được biết tới năm 1970 – mệnh danh gọi là Sea King, là hiện thân của sự đẳng cấp, mạnh mẽ và sang trọng mang lại sự thích thú và cuốn hút cho các quý ông.', './assets/images/o5.jpg'),
(11, 'Vertu V01G-02-C13ER', '90,000,000', 'Đồng hồ Ogival 18K Bezel 42G Rồng 3D là đồng hồ thương hiệu Thụy Sĩ, nổi bật và ấn tượng với biểu tượng linh vật rồng thiêng liêng mà theo truyền thuyết thời xa xưa không chỉ biểu tượng cho sức mạnh thần thánh mà còn ẩn trong đó những giá trị nhân văn, phản chiếu trí tuệ, ước vọng của con người và nền văn minh.', './assets/images/v1.jpg'),
(14, 'Vertu V01G-01-Z18ER', '133,000,000', 'Đồng hồ Vertu dành cho dân chơi thứ thiệt siêu sang lần đầu tiên đã xuất hiện tại Việt Nam. Một siêu phẩm ra mắt mãn nhãn giới mộ điệu đồng hồ với một phong cách chuẩn Vertu không lẫn đi đâu được. Ra đời từ niềm cảm hứng Vertu Signature S đình đám, thiết kế diện mạo khuôn hình chữ nhật khá đặc biệt với ý tưởng tấm khiên hình lục giác, sử dụng bộ máy Thụy sĩ Inhouse máy cơ lộ đầy mạnh mẽ và cuốn hút theo thiên hướng Skeleton.', './assets/images/v2.jpg'),
(15, 'Bentley BL2096-152WWI-S', '1,650,000', 'Bentley Bentley BL2096-152WWI-S là mẫu đồng hồ cơ mới nhất hiện nay, xuất xứ thương hiệu đồng hồ của Đức nổi tiếng hàng đầu về sự chính xác và bền bỉ trong nghệ thuật chế tác đồng hồ. Nổi bật với 30 viên kim cương ( 12 viên tại cọc số, 18 viên còn lại được trải khắp đường viền của mặt phụ small second) và > 400 viên đá sapphire đầy sang trọng với độ tinh xảo cao mang tới phong cách sang trọng quý tộc và thanh lịch.', './assets/images/b1.jpg'),
(16, 'Bentley BL2096-152KBI-S', '18,000,000', 'Bentley BL2096-152KBI-S là mẫu đồng hồ cơ mới nhất hiện nay, xuất xứ thương hiệu đồng hồ của Đức nổi tiếng hàng đầu về sự chính xác và bền bỉ trong nghệ thuật chế tác đồng hồ. Nổi bật với 30 viên kim cương ( 12 viên tại cọc số, 18 viên còn lại được trải khắp đường viền của mặt phụ small second) và > 400 viên đá sapphire đầy sang trọng với độ tinh xảo cao mang tới phong cách sang trọng quý tộc và thanh lịch.', './assets/images/b2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2'),
(3, 'admin3', 'admin3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
