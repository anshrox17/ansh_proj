-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2014 at 05:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anshum`
--

-- --------------------------------------------------------

--
-- Table structure for table `salesorders`
--

CREATE TABLE IF NOT EXISTS `salesorders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p_id` int(11) NOT NULL,
  `number of products` int(11) NOT NULL,
  `tax_percent` int(11) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salesorders`
--

INSERT INTO `salesorders` (`order_id`, `customer_id`, `date`, `p_id`, `number of products`, `tax_percent`) VALUES
(2, 1, '2014-08-14 11:43:41', 2, 2, 5),
(3, 1, '2014-08-14 11:50:52', 5, 5, 5),
(4, 2, '2014-08-14 11:51:42', 4, 4, 5),
(5, 3, '2014-08-14 11:53:37', 2, 5, 5),
(5, 3, '2014-08-14 11:54:32', 5, 5, 5),
(7, 4, '2014-08-14 11:56:24', 3, 5, 5),
(8, 5, '2014-08-14 11:56:52', 2, 5, 5),
(9, 6, '2014-08-14 11:57:22', 3, 5, 5),
(6, 3, '2014-08-14 20:11:25', 2, 2, 5),
(1, 1, '2014-08-15 13:44:59', 1, 3, 10),
(3, 1, '2014-08-15 13:51:35', 6, 10, 10),
(10, 6, '2014-08-15 15:17:40', 6, 5, 5),
(9, 6, '2014-08-15 15:17:44', 2, 4, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
