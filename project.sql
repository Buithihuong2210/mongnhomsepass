-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 06:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `fullname`, `email`, `phone`) VALUES
(1, 'duyanh', '$2a$04$cbsxsxd4hv1O/eYoO4yXCO8gQ7kqDafhrsnT74lzy/wxWORU4W7gq', 'Duy Anh', 'duyanh20@gmail.com', '0941944083'),
(2, 'huongthanhthien2210', '$2a$04$yX6bzziD7HweYXe1C9SpQu0C4wZTomeTCie8jMWLLM6R7Xrz0yTEC', 'Bui Thi Huong', 'thaothanhhuong2210@gmail.com', '0914418045'),
(3, 'nhungvth0311', '$2a$04$Ifx1SxcBQaIz3OCH2ogDNOBsYiSKeKlSlRaU45KW3rj75u/J3xEMa', 'Hong Nhung', 'nhung0311@gmail.com', '0362519200');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `visible`) VALUES
(9, 'Frederique Constant', 'frederique-constant-logo.jpg', 0),
(14, 'Casio', 'casio-logo.jpg', 0),
(16, 'Tissot', 'tissot-logo.jpg', 0),
(17, 'Bulova', 'bulova-logo.jpg', 0),
(18, 'Seiko', 'seiko-logo.jpg', 0),
(19, 'Calvin Klein', 'ck-logo.jpg', 0),
(20, 'Citizen', 'citizen-logo.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` char(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `dob`, `address`, `phone`, `email`, `gender`) VALUES
(1, 'Hoang Hai Anh', '2000-04-19', 'HN', '0123456789', 'anhhh123@gmail.com', 'Male'),
(2, 'Nguyen Thu Hoai', '1999-07-20', 'HCM', '1234076193', 'hoaint2007@gmail.com', 'Female'),
(3, 'huongbuithi', '2011-01-17', 'HCM', '0941944083', 'huongbtgch200638@fpt.edu.vn', 'Female'),
(4, 'ngoc', '2022-06-16', 'HCM', '0941944088', 'ngoc2@gamil.com', 'Other'),
(5, 'Nhung Vu', '2022-06-14', 'HN', '0941944088', 'duyanh20@gmail.com', NULL),
(6, 'hương', '2002-12-06', 'hd', '0123456789', 'huong@gmail.com', NULL),
(7, 'Thao Huong', '2022-06-22', 'hd', '0123456789', 'huongbtgch200638@fpt.edu.vn', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `watchs`
--

CREATE TABLE `watchs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `size` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `description` varchar(2550) NOT NULL,
  `image` varchar(255) NOT NULL,
  `visible` int(11) DEFAULT NULL,
  `brandsId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watchs`
--

INSERT INTO `watchs` (`id`, `name`, `price`, `size`, `material`, `color`, `description`, `image`, `visible`, `brandsId`) VALUES
(16, 'CASIO-AE', 18, 28, 'GLOVEL', 'BWORN', 'BEAUTIFUL', 'CASIO-AE.jpg', 0, 14),
(17, 'Citizen Sun', 20, 30, 'Silver', 'Blue', 'Made in japan', 'CITIZEN_SUN.jpg', 0, 20),
(18, 'Casio Vip', 20, 27, 'GOLD', 'Yellow', 'Beautiful', 'CASIO-VIP1.jpg', 0, 14),
(19, 'Seiko SFQ', 1000, 28, 'Silver', 'White', 'No desctiption', 'Seiko-SFQ.jpg', NULL, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watchs`
--
ALTER TABLE `watchs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watchs_ibfk_1` (`brandsId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `watchs`
--
ALTER TABLE `watchs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `watchs`
--
ALTER TABLE `watchs`
  ADD CONSTRAINT `watchs_ibfk_1` FOREIGN KEY (`brandsId`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
