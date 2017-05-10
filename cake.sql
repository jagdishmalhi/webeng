-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 11:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `cId` int(11) NOT NULL,
  `Flavor` varchar(100) DEFAULT NULL,
  `Pound` varchar(50) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `Des` varchar(250) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`cId`, `Flavor`, `Pound`, `Price`, `Des`, `Image`) VALUES
(1, 'cream', '1', '400', 'nice cake', 'cream.JPEG'),
(2, 'cream cake', '2', '1,000', 'super cake', 'cake2.jpg'),
(3, 'ice cream cake', '1', '500', 'new design', 'cake3.jpg'),
(4, 'icecake', '1', '600', 'nice cake', 'cake2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uorder`
--

CREATE TABLE `uorder` (
  `oId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `uName` varchar(50) DEFAULT NULL,
  `uEmail` varchar(100) DEFAULT NULL,
  `uPassword` varchar(100) DEFAULT NULL,
  `uGender` varchar(50) DEFAULT NULL,
  `uStreet` varchar(255) DEFAULT NULL,
  `uCity` varchar(100) DEFAULT NULL,
  `uContact` varchar(50) DEFAULT NULL,
  `uBirth` date DEFAULT NULL,
  `uImage` binary(255) DEFAULT NULL,
  `utype` enum('Member','Adminstrator') NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `uName`, `uEmail`, `uPassword`, `uGender`, `uStreet`, `uCity`, `uContact`, `uBirth`, `uImage`, `utype`) VALUES
(1, 'a', '', 'a', NULL, NULL, NULL, NULL, NULL, NULL, 'Member'),
(2, 'jagdish', 'jagdish@gmail.com', 'jagdish', NULL, NULL, NULL, NULL, NULL, NULL, 'Member'),
(10, 'abc', 'abc@gmail.com', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, 'Member'),
(11, 'b', 'b@gmail.com', 'b', NULL, NULL, NULL, NULL, NULL, NULL, 'Member'),
(12, 'c', 'c@gmail.com', 'c', NULL, NULL, NULL, NULL, NULL, NULL, 'Member'),
(13, 'admin', NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 'Adminstrator'),
(14, 'd', 'd@gmail.com', 'd', NULL, NULL, NULL, NULL, NULL, NULL, 'Member'),
(15, '', 'e@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Member'),
(16, 'f', 'f@gmail.com', 'f', NULL, NULL, NULL, NULL, NULL, NULL, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `uorder`
--
ALTER TABLE `uorder`
  ADD PRIMARY KEY (`oId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`),
  ADD UNIQUE KEY `uEmail` (`uEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `uorder`
--
ALTER TABLE `uorder`
  MODIFY `oId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
