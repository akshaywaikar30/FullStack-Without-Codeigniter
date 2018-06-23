-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 11:07 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacific`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobsid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `experience` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--

CREATE TABLE `musician` (
  `musicianid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `musician_image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`musicianid`, `name`, `musician_image_url`) VALUES
(1, 'Melanie Morris', 'http://localhost/waikar_javacoffee/images/melaniethumb.jpg'),
(2, 'Greg', 'http://localhost/waikar_javacoffee/images/gregthumb.jpg\r\n'),
(3, 'A R Rehman', 'http://localhost/waikar_javacoffee/images/rehman.jpg'),
(4, 'Arjit Singh', 'http://localhost/waikar_javacoffee/images/arjit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(5) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `EmailId` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Zip` varchar(255) NOT NULL,
  `Credit_Card` int(255) NOT NULL,
  `Month` varchar(255) NOT NULL,
  `Year` int(255) NOT NULL,
  `Item1_Name` varchar(255) DEFAULT NULL,
  `Item1_Qty` int(255) DEFAULT NULL,
  `Item2_Name` varchar(255) DEFAULT NULL,
  `Item2_Qty` int(255) DEFAULT NULL,
  `Item3_Name` varchar(255) NOT NULL,
  `Item4_Name` varchar(255) NOT NULL,
  `Item3_Qty` int(255) NOT NULL,
  `Item4_Qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfomance`
--

CREATE TABLE `perfomance` (
  `PerformanceId` int(5) NOT NULL,
  `MusicianId` int(5) DEFAULT NULL,
  `Month_Year` varchar(10) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfomance`
--

INSERT INTO `perfomance` (`PerformanceId`, `MusicianId`, `Month_Year`, `Description`) VALUES
(101, 1, 'JANUARY', 'Melanie Morris entertains with her melodic folk style.'),
(102, 2, 'FEBRUARY', 'Tahoe Greg is back from his tour. New Songs. New Stories.'),
(103, 3, 'March', 'A R Rehman is most versatile singer.'),
(104, 4, 'April', 'Arjit Singh has a natural voice which mesmerizes all.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productsid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `product_image_url` varchar(255) DEFAULT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productsid`, `name`, `description`, `product_image_url`, `price`) VALUES
(1001, 'JavaJam Shirt', 'JavaJam Shirts are comfortable to wear to school and around town. 100% cotton. XL only.$14.95', 'http://localhost/waikar_javacoffee/images/javashirt.jpg', 14.95),
(1002, 'JavaJam Mug', 'JavaJam mugs carry a full loads of caffeine (12oz) to jump-start your morning. $9.95', 'http://localhost/waikar_javacoffee/images/javamug.jpg', 9.95),
(1003, 'Watch', 'Watch has analog dial and has 3 years of warranty. $16.50', 'http://localhost/waikar_javacoffee/images/watch.jpg', 16.5),
(1004, 'Bag', 'Bag is very spacious and has four large compartments in it. $18.49', 'http://localhost/waikar_javacoffee/images/bag.jpg', 18.49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobsid`);

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`musicianid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `perfomance`
--
ALTER TABLE `perfomance`
  ADD PRIMARY KEY (`PerformanceId`),
  ADD KEY `MusicianId` (`MusicianId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `perfomance`
--
ALTER TABLE `perfomance`
  MODIFY `PerformanceId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perfomance`
--
ALTER TABLE `perfomance`
  ADD CONSTRAINT `perfomance_ibfk_1` FOREIGN KEY (`MusicianId`) REFERENCES `musician` (`musicianid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
