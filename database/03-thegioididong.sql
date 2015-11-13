-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2015 at 02:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `03-thegioididong`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `Item_Id` int(7) NOT NULL,
  `Name` varchar(600) COLLATE utf8_vietnamese_ci NOT NULL,
  `Price` int(10) NOT NULL,
  `BaoHanh` varchar(600) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `order_ID` int(9) NOT NULL,
  `user_ID` int(9) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Order_line`
--

CREATE TABLE IF NOT EXISTS `Order_line` (
  `orderline_ID` int(9) NOT NULL,
  `order_ID` int(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_ID` int(9) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `User_ID` int(7) NOT NULL,
  `user_name` varchar(38) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `role` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`Item_Id`), ADD KEY `Name` (`Name`(255));

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
 ADD PRIMARY KEY (`order_ID`), ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `Order_line`
--
ALTER TABLE `Order_line`
 ADD PRIMARY KEY (`orderline_ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`User_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
