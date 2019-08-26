-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 09:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `userSec` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_name`, `order_email`, `itemName`) VALUES
(12, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(13, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(15, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(16, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(17, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(18, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(19, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(20, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(21, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(22, '2019-07-19', 'aminah', 'aminahismail@gmail.com', ''),
(23, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Full suit'),
(24, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Cotton Printed-shirt'),
(25, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Blue jeans'),
(26, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Suit jacket'),
(27, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Slim shirt'),
(28, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Sleeve shirt'),
(29, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Red black gown'),
(30, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Red chiffon gown'),
(31, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Simple dress'),
(32, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Summer cotton men shirt'),
(33, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Casual gown'),
(34, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Black top'),
(35, '2019-07-19', 'aminah', 'aminahismail@gmail.com', 'Black Floral Gawn');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product id` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductDesc` varchar(255) NOT NULL,
  `category` tinyint(1) DEFAULT '0',
  `Product quantity` text NOT NULL,
  `ProductPrice` int(11) NOT NULL,
  `productImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product id`, `ProductName`, `ProductDesc`, `category`, `Product quantity`, `ProductPrice`, `productImage`) VALUES
(5, 'Black Floral Gawn', 'Black Floral Gawn description', 0, '1', 10000, 'women1.jpg'),
(6, 'Black top', 'Black top description ', 0, '1', 40000, 'women2.jpg'),
(9, 'Blue jeans', 'Blue jeans description  ', 1, '2', 45000, 'blue-washed-jeans.jpg'),
(11, 'Casual gown', 'Casual gown ', 0, '2', 35000, 'red-casual-gawn.jpg'),
(12, 'Cotton Printed-shirt', 'Cotton Printed-shirt description ', 1, '2', 24000, 'cotton-printed.jpg'),
(13, 'Denim gown  ', 'Denim gown description', 0, '1', 30000, 'women3.jpg'),
(14, 'Full suit', 'Full suit description', 1, '2', 55000, 'full-suit.jpg'),
(15, 'Punjabi wear', 'Punjabi wear description ', 0, '3', 56000, 'women4.jpg'),
(16, 'Red black gown ', 'Red black gown description', 0, '2', 48000, 'red-black-dotted-gawn.jpg'),
(17, 'Red chiffon gown ', 'Red chiffon gown description', 0, '1', 45000, 'red-shiffon-tops.jpg'),
(18, 'Simple dress  ', 'Simple  dress  description', 0, '2', 35000, 'women5.jpeg'),
(19, 'Sleeve shirt ', 'Sleeve shirt description', 1, '3', 25000, 'full-sleeve.jpg'),
(20, 'Slim shirt ', 'Slim shirt description', 1, '1', 25000, 'slim-men-shirt.jpg'),
(21, 'Suit jacket ', 'Suit jacket description', 1, '2', 35000, 'froral-jacket.jpg'),
(22, 'Summer cotton men shirt', 'Summer cotton men shirt description', 1, '2', 28000, 'summer-cotton-mens-t-shirts-fashion-short.jpg'),
(23, 'Summer shorts', 'Summer shorts description ', 1, '2', 26000, 'summer-shorts-cotton-casual.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subs_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subs_id`, `email`) VALUES
(1, 'amina@gmail.com'),
(7, 'aminaismail@gmail.com'),
(8, 'genes0022@gmail.com'),
(9, 'minah658@gmail.com'),
(10, 'amm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `Username`, `Email`, `Password`) VALUES
(1, 'aminah', 'aminahismail@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `name` (`order_name`),
  ADD KEY `email` (`order_email`),
  ADD KEY `order_date` (`order_date`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartitems`
--
ALTER TABLE `cartitems`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
