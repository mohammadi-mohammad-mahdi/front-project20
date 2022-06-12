-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2022 at 08:16 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namee` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(40) COLLATE utf8mb4_persian_ci NOT NULL,
  `textt` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `namee`, `phone`, `email`, `title`, `textt`) VALUES
(1, 'محمد مهدی محمدی', '09398299283', 'm.mohamadi9720@gmail.com', 'فروشگاه قطعات سخت افزاری کامپیوتر', 'سلام دوستان به فروشگاه خوش آمدید'),
(2, 'حسین احمدی', '09017622983', 'h.ahmadi9720@gmail.com', 'قطعات', 'سفارش قطعات سخت افزاری');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `code_product` int(11) NOT NULL AUTO_INCREMENT,
  `name_product` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `Number` int(255) NOT NULL,
  `money_product` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `image_product` varchar(80) COLLATE utf8mb4_persian_ci NOT NULL,
  `about_product` text COLLATE utf8mb4_persian_ci NOT NULL,
  `type_product` varchar(9) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`code_product`)
) ENGINE=MyISAM AUTO_INCREMENT=453 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code_product`, `name_product`, `Number`, `money_product`, `image_product`, `about_product`, `type_product`) VALUES
(300, 'رم دسکتاپ DDR4', 50, '2680000', 'assets\\image\\one.png', '', 'shoe'),
(301, 'کارت گرافیک ام اس آی', 50, '71900000', 'assets\\image\\two.png', '', 'bags'),
(302, 'رم دسکتاپ DDR4 دو کاناله 3200', 25, '4230000', 'assets\\image\\three.png', '', 'shoe');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `subject` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `Priority` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL,
  `text` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`number`, `username`, `email`, `subject`, `Priority`, `text`) VALUES
(4, '00211022302006', 'm.mohamadi9720@gmail.com', '2', 'hello', 'سلام بر شما'),
(5, 'mahdi9720', 'm.mohamadi9720@gmail.com', 'خرابی قطعات', 'cpu', 'cpu من خراب شده لطفا آن را درست کنید');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `role` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `email`, `gender`, `role`) VALUES
(29, 'علی احمدی', 'ali2020', 'Ab123456', 'a.ahmadi9720@gmail.com', 'male', 'normal'),
(33, 'محمد مهدی محمدی', 'mahdi9720', 'Aa123456', 'm.mohamadi9720@gmail.com', 'male', 'admin'),
(34, 'حسین محمدی', 'hosein9720', 'Mm123456', 'h.mohamadi9720@gmail.com', 'male', 'normal'),
(35, 'حمید احمدی', 'hamid9720', 'Hh123456', 'h.ahmadi9720@gmail.com', 'male', 'normal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
