-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 06:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `num_phone` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `name`, `num_phone`, `address`) VALUES
(2, 'Trần Thị Lan', '+84 987 654 321', '456 Đường Lê Lợi, Quận 2, Thành phố Hà Nội'),
(3, 'Nguyễn Văn Bảo', '+84 123 456 789', '123 Đường Nguyễn Văn Linh, Quận 1, Thành phố Hồ Chí Minh'),
(4, 'Lê Thị Mai', '+84 456 789 123', '789 Đường Trần Hưng Đạo, Quận 3, Thành phố Đà Nẵng'),
(5, 'Nguyễn Thị Hằng', '+84 912 345 678', '321 Đường Phan Đăng Lưu, Quận 4, Thành phố Hồ Chí Minh'),
(6, 'Trần Văn An', '+84 999 888 777', '456 Đường Lê Duẩn, Quận 5, Thành phố Hà Nội'),
(7, 'Phạm Thị Ngọc', '+84 888 777 666', '789 Đường Trần Quang Khải, Quận 6, Thành phố Đà Nẵng');

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

CREATE TABLE `flower` (
  `ID` int(11) NOT NULL,
  `flower_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flower`
--

INSERT INTO `flower` (`ID`, `flower_name`, `price`, `description`, `quantity`, `image`) VALUES
(1, 'Hoa Hồng', 50000, 'Hoa hồng tươi sáng, thích hợp làm quà tặng', 15, 'link'),
(2, 'Hoa Cẩm Chướng', 60000, 'Hoa cẩm chướng rực rỡ, mang lại cảm giác tươi mới', 18, 'link'),
(3, 'Hoa Phong Lan', 70000, 'Hoa phong lan đa dạng màu sắc, thích hợp trang trí không gian', 12, 'link'),
(4, 'Hoa Hướng Dương', 55000, 'Hoa hướng dương mang lại năng lượng tích cực', 20, 'link'),
(5, 'Hoa Tulip', 65000, 'Hoa tulip mang lại sự sang trọng và tinh tế', 17, 'link'),
(6, 'Hoa Lan', 60000, 'Hoa lan được biết đến với vẻ đẹp kiêng kỳ và quý phái', 14, 'link'),
(7, 'Hoa Huệ', 75000, 'Hoa huệ với hương thơm nồng nàn và màu sắc rực rỡ', 16, 'link'),
(8, 'Hoa Cúc', 45000, 'Hoa cúc tươi sáng, mang lại cảm giác yên bình', 19, 'link'),
(9, 'Hoa Thược Dược', 55000, 'Hoa thược dược mang lại sức khỏe và tinh thần sảng khoái', 13, 'link'),
(10, 'Hoa Mẫu Đơn', 70000, 'Hoa mẫu đơn biểu tượng của sự thanh cao và quyền lực', 11, 'link');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `customer_id`, `order_list`) VALUES
(37, 1, 2, '1,3,5,7'),
(38, 1, 3, '2,4,6'),
(39, 1, 4, '1,2,3,4,5');

-- --------------------------------------------------------

--
-- Table structure for table `reset_token`
--

CREATE TABLE `reset_token` (
  `id_reset_token` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `token` varchar(256) NOT NULL,
  `expire_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reset_token`
--

INSERT INTO `reset_token` (`id_reset_token`, `email`, `token`, `expire_on`) VALUES
(1, 'dhdncndhxn650@gmail.com', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `activated` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `phone`, `password`, `activated`, `token`) VALUES
(16, 'Admin', 'admin@gmail.com', '12837348', '123456', 1, ''),
(20, 'Thinh', 'dhdncndhxn650@gmail.com', '0707072966', 'lathinh0944445964', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_token`
--
ALTER TABLE `reset_token`
  ADD PRIMARY KEY (`id_reset_token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flower`
--
ALTER TABLE `flower`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `reset_token`
--
ALTER TABLE `reset_token`
  MODIFY `id_reset_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
