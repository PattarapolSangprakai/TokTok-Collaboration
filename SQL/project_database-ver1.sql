-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 06:38 AM
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
-- Database: `project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `province` text DEFAULT NULL,
  `district` text DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`user_id`, `fullname`, `address`, `province`, `district`, `postcode`) VALUES
(3, 'cholravee trivirot', 'awdawdawdwadwadwawwawwadawwadaad', 'awdawdawdawdwadawdwa', 'adwdwadawdawdawdwadawda', 13180);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `payment_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `payment_name`) VALUES
(1, 'Credit/Debit Card'),
(2, 'mobile Banking');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `manufacturer` int(11) DEFAULT NULL,
  `color` int(11) DEFAULT NULL,
  `movement` varchar(20) DEFAULT NULL,
  `product_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_method`
--

CREATE TABLE `shipping_method` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_method`
--

INSERT INTO `shipping_method` (`id`, `name`, `price`) VALUES
(1, 'EMS', 150),
(2, 'DHL', 250),
(3, 'Kerry', 100);

-- --------------------------------------------------------

--
-- Table structure for table `shop_order`
--

CREATE TABLE `shop_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `orderdate` date DEFAULT NULL,
  `shipping_address` int(11) DEFAULT NULL,
  `payment_method` int(11) DEFAULT NULL,
  `shipping_method` int(11) DEFAULT NULL,
  `order_total` int(11) DEFAULT NULL,
  `warranty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site_user`
--

CREATE TABLE `site_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `email_address` varchar(20) DEFAULT NULL,
  `siteuserPW` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_user`
--

INSERT INTO `site_user` (`id`, `first_name`, `last_name`, `user_name`, `email_address`, `siteuserPW`) VALUES
(3, 'cholravee', 'trivirot', 'cholravee', 'cholravee.tri@gmail.', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `warranty`
--

CREATE TABLE `warranty` (
  `id` int(11) NOT NULL,
  `expiration` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `manufacturer` (`manufacturer`),
  ADD KEY `color` (`color`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_method`
--
ALTER TABLE `shipping_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_order`
--
ALTER TABLE `shop_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `shipping_address` (`shipping_address`),
  ADD KEY `payment_method` (`payment_method`),
  ADD KEY `shipping_method` (`shipping_method`),
  ADD KEY `warranty` (`warranty`);

--
-- Indexes for table `site_user`
--
ALTER TABLE `site_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warranty`
--
ALTER TABLE `warranty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_method`
--
ALTER TABLE `shipping_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop_order`
--
ALTER TABLE `shop_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_user`
--
ALTER TABLE `site_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warranty`
--
ALTER TABLE `warranty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `site_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`manufacturer`) REFERENCES `product_brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_order`
--
ALTER TABLE `shop_order`
  ADD CONSTRAINT `shop_order_ibfk_2` FOREIGN KEY (`warranty`) REFERENCES `warranty` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_order_ibfk_3` FOREIGN KEY (`shipping_method`) REFERENCES `shipping_method` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_order_ibfk_4` FOREIGN KEY (`payment_method`) REFERENCES `payment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_order_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `site_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
