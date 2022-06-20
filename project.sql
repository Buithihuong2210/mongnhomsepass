-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `project`;

-- Dumping structure for table project.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` char(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.admins: ~3 rows (approximately)
INSERT INTO `admins` (`id`, `username`, `password`, `fullname`, `email`, `phone`) VALUES
	(1, 'duyanh', '$2a$04$cbsxsxd4hv1O/eYoO4yXCO8gQ7kqDafhrsnT74lzy/wxWORU4W7gq', 'Duy Anhabc', 'duyanh20@gmail.com', '0941944083'),
	(2, 'huongthanhthien2210', '$2a$04$yX6bzziD7HweYXe1C9SpQu0C4wZTomeTCie8jMWLLM6R7Xrz0yTEC', 'Bui Thi Huong', 'thaothanhhuong2210@gmail.com', '0914418045'),
	(3, 'nhungvth0311', '$2a$04$Ifx1SxcBQaIz3OCH2ogDNOBsYiSKeKlSlRaU45KW3rj75u/J3xEMa', 'Hong Nhung', 'nhung0311@gmail.com', '0362519200');

-- Dumping structure for table project.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.brands: ~5 rows (approximately)
INSERT INTO `brands` (`id`, `name`, `image`) VALUES
	(2, 'Seiko', 'seiko-logo.jpg'),
	(5, 'Orient', 'orient-logo.jpg'),
	(6, 'CK', 'ck-logo.jpg'),
	(9, 'Frederique Constant', 'frederique-constant-logo.jpg'),
	(10, 'Hublot', 'hublot-logo.jpg');

-- Dumping structure for table project.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` char(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.customers: ~6 rows (approximately)
INSERT INTO `customers` (`id`, `fullname`, `dob`, `address`, `phone`, `email`, `gender`) VALUES
	(1, 'Hoang Hai Anh', '2000-04-19', 'HN', '0123456789', 'anhhh123@gmail.com', 'Male'),
	(2, 'Nguyen Thu Hoai', '1999-07-20', 'HCM', '1234076193', 'hoaint2007@gmail.com', 'Female'),
	(3, 'huongbuithi', '2011-01-17', 'HCM', '0941944083', 'huongbtgch200638@fpt.edu.vn', 'Female'),
	(4, 'ngoc', '2022-06-16', 'HCM', '0941944088', 'ngoc2@gamil.com', 'Other'),
	(5, 'Nhung Vu', '2022-06-14', 'HN', '0941944088', 'duyanh20@gmail.com', NULL),
	(6, 'hương', '2002-12-06', 'hd', '0123456789', 'huong@gmail.com', NULL);

-- Dumping structure for table project.watchs
CREATE TABLE IF NOT EXISTS `watchs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `size` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `description` varchar(2550) NOT NULL,
  `image` varchar(255) NOT NULL,
  `brandsId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `watchs_ibfk_1` (`brandsId`),
  CONSTRAINT `watchs_ibfk_1` FOREIGN KEY (`brandsId`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.watchs: ~3 rows (approximately)
INSERT INTO `watchs` (`id`, `name`, `price`, `size`, `material`, `color`, `description`, `image`, `brandsId`) VALUES
	(7, 'Orient RA-AR0001S10B', 18, 35, 'Silve', 'Grey', '...', 'ORIENT_RA.jpg', 5),
	(9, 'Calvin Klein K9H216C6', 40, 28, 'Leather Cord', 'Black', '...', 'CK_1.jpg', 6),
	(11, 'Seiko SFQ800P1', 180, 32, 'white silver', 'white ', '...', 'Seiko-SFQ.jpg', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
