-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2022 at 02:13 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fineline`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(30) NOT NULL,
  `unite_price` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `unite_price`) VALUES
(1, 'cement', 1500),
(2, 'metel', 1900);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `refnumber` varchar(8) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `buyer` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `contact` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending',
  `p_pay` int(11) DEFAULT NULL,
  PRIMARY KEY (`refnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`refnumber`, `site_name`, `supplier`, `buyer`, `email`, `address`, `date`, `contact`, `total`, `comment`, `status`, `p_pay`) VALUES
('REF001', '111111111111', '', 'hi', 'codicesdev@gmail.com', '405/12 udupila north delgoda', '2022-11-14', 1111111111, 33500, '', 'Confirm', 3300),
('REF002', '111111111111', '', 'chalaza', 'codicesdev@gmail.com', '405/12 udupila north delgoda', '2022-11-20', 1111111111, 33500, '', 'pending', 5500),
('REF003', 'nipolak', 'chalana', 'chalana', 'buddhilabhanu@gmail.com', '405/12 udupila north delgoda', '2022-11-09', 1111111111, 33500, '12w33', 'pending', 7700),
('REF007', 'hihi', 'chalana', 'chalana', 'natureloversinastagram2020@gmail.com', '405/12 udupila north delgoda', '2022-11-15', 1111111111, 6800, '', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `refnumber` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `Qty` int(11) NOT NULL,
  `unite_price` int(11) NOT NULL,
  PRIMARY KEY (`refnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempery_item`
--

DROP TABLE IF EXISTS `tempery_item`;
CREATE TABLE IF NOT EXISTS `tempery_item` (
  `item_name` varchar(200) NOT NULL,
  `unit` int(11) NOT NULL,
  `quntity` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `password`) VALUES
('buddhila', 'bhanu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
