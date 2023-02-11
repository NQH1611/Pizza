-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 03:52 AM
-- Server version: 8.0.28
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` int NOT NULL,
  `madouong` varchar(20) NOT NULL,
  `tendouong` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `madouong`, `tendouong`) VALUES
(1, 'coca', 'CoCaCoLa'),
(2, 'pepsi', 'PepSi'),
(3, 'tradao', 'Trà Đào'),
(4, 'tratac', 'Trà Tắc');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kichCo` char(10) NOT NULL,
  `duongKinh` int NOT NULL,
  `suonNuong` int NOT NULL,
  `salad` int NOT NULL,
  `soLuongNuocNgot` int NOT NULL,
  `giaTien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kichCo`, `duongKinh`, `suonNuong`, `salad`, `soLuongNuocNgot`, `giaTien`) VALUES
('S', 20, 2, 200, 2, 150000),
('M', 25, 4, 300, 3, 200000),
('L', 30, 8, 400, 4, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `menuname` varchar(10) NOT NULL,
  `loaipizza` varchar(10) NOT NULL,
  `loainuocuong` varchar(20) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dienthoai` varchar(15) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id` int NOT NULL,
  `loinhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`menuname`, `loaipizza`, `loainuocuong`, `hovaten`, `email`, `dienthoai`, `diachi`, `username`, `id`, `loinhan`) VALUES
('M', 'OCEAN', 'coca', 'Quốc Huy', 'quochuy@gmail.com', '0369173417', 'Tân Phú', 'quochuy', 16, 'nhiều phô mai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`) VALUES
(1, 'quochuy', 'quochuy', 1),
(2, 'quochoang', 'quochoang', 0),
(7, 'admin', 'admin', 1),
(8, 'admin', 'admin', 1),
(9, 'minhkhang', 'minhkhang', 1),
(10, 'nqhuy', 'nqh', 1),
(11, '', '', 0),
(12, '', '', 0),
(13, '', '', 0),
(14, 'tanhao', 'tanhao', 0),
(15, 'xinchao', 'xinchao', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
