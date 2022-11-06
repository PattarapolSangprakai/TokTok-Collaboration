-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 06:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toktok`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Address_ID` int(11) NOT NULL,
  `Address_name` varchar(40) DEFAULT NULL,
  `Address_PhoneNum` varchar(20) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Subdistrict` varchar(10) DEFAULT NULL,
  `District` varchar(10) DEFAULT NULL,
  `Province` varchar(10) DEFAULT NULL,
  `PostCode` int(5) DEFAULT NULL,
  `AUser_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Address_ID`, `Address_name`, `Address_PhoneNum`, `Address`, `Subdistrict`, `District`, `Province`, `PostCode`, `AUser_ID`) VALUES
(1, 'cholravee trivirot', '0955961523', '2/69 moo 69 ', 'phaholyoth', '86', 'ayutthaya', 15160, 1),
(5, 'panalee', '0818330159', '52', 'soi 8', '78', 'chiang', 14580, 2),
(6, 'darin', '0891254895', '57 moo 2', 'g road', ' 98', 'enland', 56182, 1),
(7, 'chock', '095598612', '52 moo 7', 'c road', '702', 'chiang mai', 14580, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Product_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Quntity` int(2) DEFAULT NULL,
  `Token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Product_ID`, `User_ID`, `Quntity`, `Token`) VALUES
(1, 1, 2, 'c0f8d209281d7b47886b674e4b1e36cc'),
(2, 1, 1, 'c0f8d209281d7b47886b674e4b1e36cc'),
(4, 1, 1, 'c0f8d209281d7b47886b674e4b1e36cc');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Category` int(11) DEFAULT NULL,
  `Price` int(7) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Brand` int(11) DEFAULT NULL,
  `Color` varchar(30) DEFAULT NULL,
  `Movement` int(11) DEFAULT NULL,
  `Product_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Category`, `Price`, `Name`, `Brand`, `Color`, `Movement`, `Product_img`) VALUES
(1, 2, 376700, 'Astron-SSH067', 1, 'silver', 3, './img/watch_img/seiko/seiko_astron_ssh067.png'),
(2, 1, 88200, 'Astron-SSH001', 1, 'silver,blue ', 3, './img/watch_img/seiko/seiko_astron_ssh001.png'),
(3, 1, 140700, 'Astron-SSH023', 1, 'black', 3, './img/watch_img/seiko/seiko_astron_ssh023.png'),
(4, 1, 48000, 'Presage-SPB239', 1, 'silver,brown', 2, './img/watch_img/seiko/seiko_presage_spb239.png'),
(5, 2, 27400, 'Presage-SSC757', 1, 'black,silver', 2, './img/watch_img/seiko/seiko_presage_ssc757.png'),
(6, 2, 21700, 'Prospex-SRPH75', 1, 'blue,silver', 2, './img/watch_img/seiko/seiko_prospex_srph75.png'),
(7, 2, 29500, 'Premier-SNP141', 1, 'silver, black', 2, './img/watch_img/seiko/seiko_premier_snp141.png'),
(8, 2, 15300, 'Premier-SUT346', 1, 'gold, silver', 2, './img/watch_img/seiko/seiko_premier_sut346.png'),
(9, 2, 14600, 'Premier-SXB429', 1, 'silver', 2, './img/watch_img/seiko/seiko_premier_sxb429.png'),
(10, 2, 10000, '5 Sports-SPRH27', 1, 'black,silver', 2, './img/watch_img/seiko/seiko_5sport_srph27.png'),
(11, 2, 10500, '5 Sports-SPRG37', 1, 'black', 2, './img/watch_img/seiko/seiko_5sport_srpg37.png'),
(12, 2, 11700, '5 Sports-SPRD53', 1, 'red/blue,silver', 2, './img/watch_img/seiko/seiko_5sport_srpd53.png'),
(13, 2, 11700, '5 Sports-SRPD51', 1, 'blue,silver', 2, './img/watch_img/seiko/seiko_5sport_srpd51.png'),
(14, 2, 100000, 'AIR-KING', 5, 'oystersteel', 2, 'img_124');

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `Brand_ID` int(11) NOT NULL,
  `Brand` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`Brand_ID`, `Brand`) VALUES
(1, 'Seiko'),
(2, 'Omega'),
(3, 'Swatch '),
(4, 'Grand Seiko'),
(5, 'Rolex');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `Category_ID` int(11) NOT NULL,
  `Category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`Category_ID`, `Category`) VALUES
(1, 'Dive Watches'),
(2, 'Dress Watches'),
(3, 'GMT Watches');

-- --------------------------------------------------------

--
-- Table structure for table `product_movement`
--

CREATE TABLE `product_movement` (
  `Movement_ID` int(11) NOT NULL,
  `Movement` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_movement`
--

INSERT INTO `product_movement` (`Movement_ID`, `Movement`) VALUES
(1, 'mechanical'),
(2, 'automatic'),
(3, 'quartz');

-- --------------------------------------------------------

--
-- Table structure for table `site_user`
--

CREATE TABLE `site_user` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_user`
--

INSERT INTO `site_user` (`User_ID`, `First_Name`, `Last_Name`, `User_Name`, `Email`, `Password`) VALUES
(1, 'cholra', 'trivirot', 'cholravee', 'cholravee.tri@gmail.', '1234'),
(2, 'ora', 'goodcat', 'goodcat', 'goodcat@gmail.com', '5678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Address_ID`),
  ADD KEY `FK_UserID` (`AUser_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Product_ID`,`User_ID`),
  ADD KEY `FK_CartUID` (`User_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `FK_ProductBrand` (`Brand`),
  ADD KEY `FK_ProductMovement` (`Movement`),
  ADD KEY `FK_ProductCategory` (`Category`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`Brand_ID`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `product_movement`
--
ALTER TABLE `product_movement`
  ADD PRIMARY KEY (`Movement_ID`);

--
-- Indexes for table `site_user`
--
ALTER TABLE `site_user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `Address_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `Brand_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_movement`
--
ALTER TABLE `product_movement`
  MODIFY `Movement_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_user`
--
ALTER TABLE `site_user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_UserID` FOREIGN KEY (`AUser_ID`) REFERENCES `site_user` (`User_ID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_CartPID` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`),
  ADD CONSTRAINT `FK_CartUID` FOREIGN KEY (`User_ID`) REFERENCES `site_user` (`User_ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_ProductBrand` FOREIGN KEY (`Brand`) REFERENCES `product_brand` (`Brand_ID`),
  ADD CONSTRAINT `FK_ProductCategory` FOREIGN KEY (`Category`) REFERENCES `product_category` (`Category_ID`),
  ADD CONSTRAINT `FK_ProductMovement` FOREIGN KEY (`Movement`) REFERENCES `product_movement` (`Movement_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
