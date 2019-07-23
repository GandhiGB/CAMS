-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 09:23 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cams`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assets`
--

CREATE TABLE `tbl_assets` (
  `id` int(10) NOT NULL,
  `po_number` varchar(10) NOT NULL,
  `serial_number` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date_acquired` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assets`
--

INSERT INTO `tbl_assets` (`id`, `po_number`, `serial_number`, `model`, `category`, `brand`, `description`, `date_acquired`, `cost`) VALUES
(1, '*', 'R4A092620893', 'VIEWSONIC', 'MONITOR', 'VIEWSONIC', 'VIEWSONIC 21', '2019-07-23', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binder`
--

CREATE TABLE `tbl_binder` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_computers`
--

CREATE TABLE `tbl_computers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_computer_details`
--

CREATE TABLE `tbl_computer_details` (
  `id` int(10) NOT NULL,
  `computer_id` varchar(20) NOT NULL,
  `asset_id` varchar(20) NOT NULL,
  `date_installed` datetime NOT NULL,
  `date_remove` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office`
--

CREATE TABLE `tbl_office` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `description` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_office`
--

INSERT INTO `tbl_office` (`id`, `name`, `description`, `department`) VALUES
(1, 'bsit', 'it office', 'academic'),
(2, 'bscrim', 'criminology office', 'academic');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `permission` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `permission`) VALUES
('772-160418-442', 'admin', 'admin', 'gandhi', 'galendez', 'balingkit', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assets`
--
ALTER TABLE `tbl_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_binder`
--
ALTER TABLE `tbl_binder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_computers`
--
ALTER TABLE `tbl_computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_computer_details`
--
ALTER TABLE `tbl_computer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_office`
--
ALTER TABLE `tbl_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assets`
--
ALTER TABLE `tbl_assets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_binder`
--
ALTER TABLE `tbl_binder`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_office`
--
ALTER TABLE `tbl_office`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
