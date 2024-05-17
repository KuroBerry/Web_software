-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 11:04 AM
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
  `address` varchar(255) NOT NULL,
  `num_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `name`, `address`, `num_phone`) VALUES
(1, 'Nguyen Van A', '123 Đường ABC, Hà Nội', '0987654321'),
(2, 'Tran Thi B', '456 Đường DEF, TP. Hồ Chí Minh', '0976543210'),
(3, 'Le Van C', '789 Đường GHI, Đà Nẵng', '0965432109'),
(4, 'Pham Thi D', '321 Đường JKL, Hải Phòng', '0954321098'),
(5, 'Hoang Van E', '654 Đường MNO, Cần Thơ', '0943210987'),
(6, 'Bui Thi F', '987 Đường PQR, Nha Trang', '0932109876'),
(7, 'Vu Van G', '159 Đường STU, Huế', '0921098765'),
(8, 'Dao Thi H', '753 Đường VWX, Vinh', '0910987654'),
(9, 'Dinh Van I', '852 Đường YZ, Quy Nhơn', '0909876543'),
(10, 'Trinh Thi J', '741 Đường ABCD, Buôn Ma Thuột', '0898765432');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `work_branch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `name`, `phone`, `email`, `work_branch`) VALUES
(3, 'Quốc Thịnh', '8012398234', 'quocthinh@gmail.com', 'Hồ Chí Minh'),
(9, 'Trần Văn Hùng', '0909090909', 'tranvanhung@example.com', 'dalat'),
(11, 'Nguyễn Thanh Huy', '0123456789', 'nguyenthanhhuy@example.com', 'hcm');

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
(5, 'Hoa Tulip', 65000, 'Hoa tulip mang lại sự sang trọng và tinh tế', 25, 'https://i.pinimg.com/564x/2a/69/96/2a699669cfc10bf494ed1be16b07e40a.jpg'),
(6, 'Hoa Lan', 60000, 'Hoa lan được biết đến với vẻ đẹp kiêng kỳ và quý phái', 20, 'https://i.pinimg.com/564x/a3/5c/68/a35c68b01daf53a26911381bbd9aab1e.jpg'),
(7, 'Hoa Huệ', 75000, 'Hoa huệ với hương thơm nồng nàn và màu sắc rực rỡ', 16, 'https://i.pinimg.com/736x/93/ab/40/93ab409300874e1c29cb6fee9c15c471.jpg'),
(8, 'Hoa Cúc', 45000, 'Hoa cúc tươi sáng, mang lại cảm giác yên bình', 19, 'https://i.pinimg.com/564x/dc/a4/ed/dca4ed799cc173c266d1ffc0f0306d2c.jpg'),
(9, 'Hoa Thược Dược', 55000, 'Hoa thược dược mang lại sức khỏe và tinh thần sảng khoái', 13, 'https://i.pinimg.com/564x/21/a4/38/21a4380cb2f74fa4323705bb779be79f.jpg'),
(13, 'Hoa Hướng Dương', 15000, 'Hoa mọc theo hướng mặt trời', 25, 'https://i.pinimg.com/564x/02/a5/78/02a578e15716e2a5f34afb6fb7979c50.jpg'),
(14, 'Hoa hồng', 30000, 'Hoa tặng ghệ ', 30, 'https://i.pinimg.com/564x/4c/13/b0/4c13b018a16f1bec43bb1e64dbe73a26.jpg'),
(15, 'Hoa vạn thọ', 5000, 'Cập nhật mô tả cho hoa vạn thọ', 12, 'https://i.pinimg.com/564x/c2/10/03/c2100339492761c4c788244d783b1740.jpg');

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
(1, 1, 1, '5,6,7'),
(4, 1, 4, '6,7,8'),
(5, 0, 5, '9,13,14'),
(6, 0, 6, '15,5,6'),
(7, 0, 7, '7,8,9'),
(8, 0, 8, '13,14,15'),
(9, 0, 9, '5,6,13'),
(10, 0, 10, '7,8,14'),
(11, 0, 1, '9,15,5'),
(12, 0, 2, '6,7,13'),
(13, 0, 3, '8,9,14'),
(14, 0, 4, '15,5,6'),
(15, 0, 5, '7,8,9'),
(16, 0, 6, '13,14,15'),
(17, 0, 7, '5,6,7'),
(18, 0, 8, '8,9,13'),
(19, 0, 9, '14,15,5'),
(20, 0, 10, '6,7,8');

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
(21, 'Quoc Thinh', 'dhdncndhxn650@gmail.com', '0707072966', '123123', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `flower`
--
ALTER TABLE `flower`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `reset_token`
--
ALTER TABLE `reset_token`
  MODIFY `id_reset_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
