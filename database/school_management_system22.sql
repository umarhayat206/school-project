-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 03:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(50) NOT NULL,
  `user_password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `user_password`) VALUES
('aqib', 123),
('admin', 123),
('aqib', 123),
('admin', 123);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `u_id` int(10) NOT NULL,
  `u_name` text NOT NULL,
  `u_father` text NOT NULL,
  `u_school` varchar(50) NOT NULL,
  `u_roll` varchar(10) NOT NULL,
  `u_class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`u_id`, `u_name`, `u_father`, `u_school`, `u_roll`, `u_class`) VALUES
(2, 'nosher khan', 'aba g', 'school', '6th', '10th'),
(3, 'muhammad aqib', 'ishaq ahmed', 'govt high school', '15896', '10th'),
(8, 'ahmer', 'shabir', 'govt high school', 'bb-97', '1st'),
(9, 'habib', 'altamash', 'model public school', 'cc-89', '9th'),
(10, 'ali', 'raza', 'fsd school', '89', '3rd'),
(11, '1', '2', '3', '4', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `u_id` int(10) NOT NULL,
  `u_name` text NOT NULL,
  `u_father` text NOT NULL,
  `u_school` varchar(50) NOT NULL,
  `u_roll` varchar(10) NOT NULL,
  `u_class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`u_id`, `u_name`, `u_father`, `u_school`, `u_roll`, `u_class`) VALUES
(2, 'Abuzar', 'Zafar', 'Beaconhouse School', 'F-18-001', '5th'),
(3, 'riasat', 'ch', 'heights public school', 'uv-87', '7th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD KEY `id` (`u_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
