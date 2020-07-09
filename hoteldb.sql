-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 10:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hallbooking`
--

CREATE TABLE `hallbooking` (
  `id` int(100) NOT NULL,
  `hutitle` varchar(50) NOT NULL,
  `huname` varchar(50) NOT NULL,
  `huemail` varchar(50) NOT NULL,
  `huphone` varchar(50) NOT NULL,
  `hucountry` varchar(50) NOT NULL,
  `hucity` varchar(50) NOT NULL,
  `huguest` varchar(50) NOT NULL,
  `huaddress` varchar(200) NOT NULL,
  `idate` varchar(50) NOT NULL,
  `odate` varchar(50) NOT NULL,
  `approved` varchar(100) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hallbooking`
--

INSERT INTO `hallbooking` (`id`, `hutitle`, `huname`, `huemail`, `huphone`, `hucountry`, `hucity`, `huguest`, `huaddress`, `idate`, `odate`, `approved`, `total`) VALUES
(1, 'Ms.', 'b', 'b@gmail.com', '3442333333', 'India', 'Washington', '434', 'abcd', '05/25/2020', '05/28/2020', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'rizwan', 'rizwan123   ', 'rizwanullahtiger313@gmail.com'),
(2, 'admin', 'admin', 'rizwanullahtiger313@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `phone`, `email`, `message`) VALUES
(1, 'rizwan', '454545', 'rizwan@gmail.com', 'hi'),
(2, 'name', 'phone', 'email', 'message'),
(3, 'rizwan', '+923148151505', 'rizwanullahbahria1@gmail.com', 'hi how are you rizwan');

-- --------------------------------------------------------

--
-- Table structure for table `roombooking`
--

CREATE TABLE `roombooking` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `numberofrooms` int(50) NOT NULL,
  `adults` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `checkindate` varchar(100) NOT NULL,
  `checkoutdate` varchar(100) NOT NULL,
  `approved` varchar(50) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombooking`
--

INSERT INTO `roombooking` (`id`, `title`, `username`, `email`, `phoneno`, `country`, `city`, `roomtype`, `numberofrooms`, `adults`, `address`, `checkindate`, `checkoutdate`, `approved`, `total`) VALUES
(5, 'Ms.', 'adminer', 'bushra@gmail.com', '2334343434', 'India', 'Islamabad', 'Double Room', 2, 2, 'indeia', '05/25/2020', '05/28/2020', 'approved', 0),
(4, 'Dr.', 'amir liaquat', 'rizwan21@gmail.com', '2334343434', 'India', 'Delhi', 'Single Room', 2, 3, 'abcd', '05/21/2020', '05/29/2020', 'approved', 0),
(2, 'Ms.', 'bushra', 'bushra@gmail.com', '3434544545', 'PAkistan', 'Islamabad', 'Double Room', 2, 1, 'pakistan karachi', '05/09/2020', '05/16/2020', 'approved', 0),
(6, 'Ms.', 'malik', 'rizwan21@gmail.com', '3434544545', 'India', 'Bermengm', 'Double Room', 3, 3, 'pakistan', '05/11/2020', '05/21/2020', 'approved', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hallbooking`
--
ALTER TABLE `hallbooking`
  ADD PRIMARY KEY (`id`,`huemail`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombooking`
--
ALTER TABLE `roombooking`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hallbooking`
--
ALTER TABLE `hallbooking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roombooking`
--
ALTER TABLE `roombooking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
