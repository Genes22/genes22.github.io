-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 02:23 PM
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
-- Database: `onlinebus_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `email`, `password`) VALUES
(1, 'makyaokapinga@gmail.com', 'bb8eab924ee1ec8147b48f29589bf8d9');

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `bus_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `number_seats` int(11) NOT NULL,
  `plate_number` int(11) NOT NULL,
  `bus_phone` int(11) NOT NULL,
  `bus_fare` int(11) NOT NULL,
  `bus_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`bus_id`, `name`, `location`, `destination`, `number_seats`, `plate_number`, `bus_phone`, `bus_fare`, `bus_photo`) VALUES
(1, 'JMC EXPRESS', 'Dar', 'Mwanza', 60, 456, 716959410, 45000, 'jmc.jpeg'),
(2, 'DAR LUX', 'Mwanza', 'Dar', 60, 234, 742095730, 25000, 'darlux.jpeg'),
(3, 'SHABIBY ', 'Dodoma', 'Dar', 60, 220, 755054590, 20000, 'shabiby.jpeg'),
(4, 'ABC', 'Dar', 'Dodoma', 60, 780, 655054590, 45000, 'abc.jpg'),
(5, 'EXTRA LUXURY', 'Dar', 'Arusha', 60, 600, 655552222, 25000, 'extra.jpg'),
(6, 'HAPPY NATION', 'Arusha', 'Dar', 60, 400, 657829097, 20000, 'happy.jpg'),
(7, 'ESTHER LUXURY', 'Kilimanjaro', 'Dar', 60, 900, 759304010, 45000, 'esther.jpeg'),
(8, 'TILISHO SAFARI', 'Dar', 'Kilimanjaro', 60, 800, 623897860, 20000, 'tilisho.jpg'),
(9, 'NEW FORCE', 'Dar', 'Morogoro', 60, 100, 769569023, 30000, 'newforce.jpeg'),
(10, 'UPENDO COARCH', 'Iringa', 'Dar', 60, 350, 716959410, 25000, 'iringa.jpeg'),
(11, 'SUTCO', 'Dar', 'Iringa', 60, 365, 716456810, 30000, 'sutco.jpeg'),
(12, 'MTEI EXPRESS', 'Singida', 'Dar', 60, 434, 743906543, 20000, 'mtei.jpg'),
(13, 'MBEYA EXPRESS', 'Dar', 'Mbeya', 60, 569, 732651234, 45000, 'mbeya.jpeg'),
(14, 'NJOMBE EXPRESS', 'Dar', 'Njombe', 60, 345, 765908765, 20000, 'njombe.jpg'),
(15, 'SIMBA MTOTO', 'Dar', 'Tanga', 60, 456, 655435677, 25000, 'simba.jpeg'),
(16, 'TASHRIF', 'Tanga', 'Dar', 60, 123, 716959823, 45000, 'tashrif.jpeg'),
(17, 'AL SADY', 'Morogoro', 'Dar', 60, 345, 625659410, 25000, 'al sady.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_id` int(11) NOT NULL,
  `pass_name` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `travel_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_id`, `pass_name`, `from`, `destination`, `phone`, `travel_date`) VALUES
(7, 'mshindi    DIT', 'mwanza', 'dodoma', '06542354', '2019-06-28'),
(9, 'mshindi    mshindi', 'mwanza', 'dodoma', '06548949865', '2019-07-11'),
(11, 'mshindi    mshindi', 'dar', 'dodoma', '124567564323', '2019-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `seat_no` int(11) NOT NULL,
  `travel_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `passenger_id` (`passenger_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_details`
--
ALTER TABLE `bus_details`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`passenger_id`) REFERENCES `passenger` (`passenger_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`bus_id`) REFERENCES `bus_details` (`bus_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
