-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 02:28 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stockchecking`
--
CREATE DATABASE IF NOT EXISTS `stockchecking` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `stockchecking`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `item_amount` int(30) NOT NULL,
  `Price` varchar(255) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sale_id` int(30) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  PRIMARY KEY (`sale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `country`, `gender`, `company_name`, `business_name`, `subject`) VALUES
(1, 'shah', 'joab', 'joabuevaristy029@gmail.com', 0, 987655433, 'usa', 'male', 'STC Co.ltd', 'software development', 'we offer software services'),
(2, 'Joabu', 'Evaristy', 'joabuevaristy029@gmail.com', 0, 763707003, 'canada', 'male', 'WEBSTORE Co.ltd', 'web services ', 'we offer that service worldwide'),
(3, 'Heriamini', 'Makyao', 'heriaminimakyao@gmail.com', 12345, 755262685, 'South Africa', 'male', 'MAKTECH', 'TELE SERVICE', 'Telecommunication');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
