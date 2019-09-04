-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 08:04 AM
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
-- Database: `homesitesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idUsers` int(11) NOT NULL,
  `fName` tinytext NOT NULL,
  `lName` tinytext NOT NULL,
  `uName` tinytext NOT NULL,
  `uPwd` longtext NOT NULL,
  `uMail` tinytext NOT NULL,
  `uContact` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idUsers`, `fName`, `lName`, `uName`, `uPwd`, `uMail`, `uContact`) VALUES
(3, 'Admin', 'Admin', 'Admin', '$2y$10$3qgk6zuFB9N9vsHH2nIwJe7Sn.RcAcW74fBOPFDk8oJxs12.2xbL2', 'admin@example.com', '+255743233684');

-- --------------------------------------------------------

--
-- Table structure for table `godown`
--

CREATE TABLE `godown` (
  `Id` int(11) NOT NULL,
  `uName` tinytext NOT NULL,
  `Status` tinytext NOT NULL,
  `Location` tinytext NOT NULL,
  `Price` int(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `City` tinytext NOT NULL,
  `District` tinytext NOT NULL,
  `Area` int(10) NOT NULL,
  `Discription` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `godown`
--

INSERT INTO `godown` (`Id`, `uName`, `Status`, `Location`, `Price`, `Contact`, `City`, `District`, `Area`, `Discription`, `image`) VALUES
(7, 'james', 'For Rent', 'dar', 50000, '0623458919', 'Dar-es-Salaam', 'Kinondoni', 200, 'Some little description for this godown', 'cooper green.jpg'),
(8, 'james', 'For Sell', 'Kigamboni', 6500000, '0623458919', 'Dar-es-Salaam', 'Kinondoni', 600, 'A classic mini cooper was here for some time', 'classic mini.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `Id` int(11) NOT NULL,
  `uName` tinytext NOT NULL,
  `Status` tinytext NOT NULL,
  `Electricity` tinytext NOT NULL,
  `Water` tinytext NOT NULL,
  `Fence` tinytext NOT NULL,
  `Self_Contained` tinytext NOT NULL,
  `Locality` tinytext NOT NULL,
  `Price` int(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Food` tinytext NOT NULL,
  `City` tinytext NOT NULL,
  `District` tinytext NOT NULL,
  `Discription` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`Id`, `uName`, `Status`, `Electricity`, `Water`, `Fence`, `Self_Contained`, `Locality`, `Price`, `Contact`, `Food`, `City`, `District`, `Discription`, `image`) VALUES
(5, 'james', 'For Rent', 'Yes', 'Yes', 'Yes', 'Yes', 'dar', 58000, '0623458919', 'Inside Hostel', 'Dar-es-Salaam', 'Kinondoni', 'Some funny', 'cooper green.jpg'),
(6, 'james', 'For Rent', 'Yes', 'Yes', 'Yes', 'Yes', 'kinondoni', 45000, '0623458919', 'Inside Hostel', 'Dar-es-Salaam', 'Kinondoni', 'The is very cool and Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Screenshot (7).png');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `Id` int(11) NOT NULL,
  `uName` tinytext NOT NULL,
  `Status` tinytext NOT NULL,
  `Bedrooms` smallint(6) NOT NULL,
  `Bathrooms` smallint(6) NOT NULL,
  `Garages` smallint(6) NOT NULL,
  `Kitchens` smallint(6) NOT NULL,
  `Sittingrooms` smallint(6) NOT NULL,
  `City` tinytext NOT NULL,
  `District` tinytext NOT NULL,
  `Location` tinytext NOT NULL,
  `Price` int(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Discription` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`Id`, `uName`, `Status`, `Bedrooms`, `Bathrooms`, `Garages`, `Kitchens`, `Sittingrooms`, `City`, `District`, `Location`, `Price`, `Contact`, `Discription`, `image`) VALUES
(8, 'makonda', 'For Sell', 5, 3, 3, 1, 2, 'Dar-es-Salaam', 'Kinondoni', 'Masaki', 8500000, '0763900709', 'Ina ulinzi wakutosha pia ipo karibu na fukwe na huduma zote za kijamii ikiwemo hospital', 'Nyumba2.jpg'),
(9, 'makonda', 'For Rent', 5, 5, 1, 2, 2, 'Dar-es-Salaam', 'Ilala', 'Upanga', 8500000, '0763900709', 'ulinzi wa kutosha, karibu na huduma zote za kijamii.', 'Nyumba1.jpg'),
(10, 'makonda', 'For Rent', 3, 1, 1, 1, 1, 'Dar-es-Salaam', 'Ilala', 'Tabata', 50000, '0763900709', 'Ipo tabata segerea karibu na kituo cha daladala', 'Nyumba3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `Id` int(11) NOT NULL,
  `uName` tinytext NOT NULL,
  `Status` tinytext NOT NULL,
  `Location` tinytext NOT NULL,
  `Price` int(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `City` tinytext NOT NULL,
  `District` tinytext NOT NULL,
  `Area` int(10) NOT NULL,
  `Discription` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`Id`, `uName`, `Status`, `Location`, `Price`, `Contact`, `City`, `District`, `Area`, `Discription`, `image`) VALUES
(11, 'james', 'For Sell', 'Bunju', 8500000, '0623458919', 'Dar-es-Salaam', 'Kinondoni', 300, 'This piece of land is good and fertile for cultivations and whatevers', 'minigirlsclub-20190621-0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `fName` tinytext NOT NULL,
  `lName` tinytext NOT NULL,
  `uName` tinytext NOT NULL,
  `uPwd` longtext NOT NULL,
  `uMail` tinytext NOT NULL,
  `uContact` varchar(20) NOT NULL,
  `prev` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `fName`, `lName`, `uName`, `uPwd`, `uMail`, `uContact`, `prev`) VALUES
(29, 'james', 'mshindi', 'james', '2478969df640054d790322f147e9a8c8', 'james@james.com', '0654879525', 1),
(32, 'genes', 'genes', 'genes', 'a79b2407ab46f2fba9440fed8d7dce16', 'genes@genes.com', '0654123556', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idUsers`);

--
-- Indexes for table `godown`
--
ALTER TABLE `godown`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `godown`
--
ALTER TABLE `godown`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
