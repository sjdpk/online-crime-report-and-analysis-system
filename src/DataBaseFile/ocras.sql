-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 04:57 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocras`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(10) NOT NULL,
  `batch_no` varchar(17) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(10) NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `city` varchar(13) NOT NULL,
  `state` varchar(13) NOT NULL,
  `zcode` int(9) NOT NULL,
  `username` varchar(13) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `identity_no` varchar(17) NOT NULL,
  `type` varchar(9) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `batch_no`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `contact_no`, `city`, `state`, `zcode`, `username`, `email`, `password`, `identity_no`, `type`, `datetime`) VALUES
(1, '2017-deepak', 'Deepak', '', 'Sapkota', 'Male', 21, '9876543210', 'lalitpur', '3', 12345, 'iamdpk', 'iamdpk@gmail.com', 'iamdpk', '1234567890', 'admin', '2019-11-18'),
(2, '2017-ram', 'ram', '', 'sharma', 'male', 22, '12345678906', 'ktm', '3', 3214, 'ram', 'ram@gmail.com', 'ram', '9876543212', 'admin', '2019-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(10) NOT NULL,
  `submitted_by` varchar(20) NOT NULL,
  `identity_no` varchar(17) NOT NULL,
  `police_station` varchar(17) NOT NULL,
  `police_ward` varchar(17) NOT NULL,
  `other_policestation` varchar(27) NOT NULL,
  `fir_id` int(7) NOT NULL,
  `victum_email` varchar(27) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `crime_type` varchar(27) NOT NULL,
  `crime_details` varchar(200) NOT NULL,
  `incident_date` varchar(60) NOT NULL,
  `incident_time` varchar(17) NOT NULL,
  `incident_place` varchar(17) NOT NULL,
  `accused_name` varchar(27) NOT NULL,
  `witness_name` varchar(47) NOT NULL,
  `witness_address` varchar(47) NOT NULL,
  `fir_status` varchar(10) NOT NULL,
  `firsubmit_date` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `submitted_by`, `identity_no`, `police_station`, `police_ward`, `other_policestation`, `fir_id`, `victum_email`, `phone`, `crime_type`, `crime_details`, `incident_date`, `incident_time`, `incident_place`, `accused_name`, `witness_name`, `witness_address`, `fir_status`, `firsubmit_date`) VALUES
(1, 'Deepak Sapkota', '12345678912', 'Balkumari', '3', '', 6797, 'iamdpk@gmail.com', '', 'theaf', 'theaf', '2019-12-05', '12:56', 'bhk', 'ram', 'Deepak', 'theaf', 'solved', '2019-12-05'),
(2, 'Deepak Sapkota', '12345678934', 'Baneshwor', '5', '', 5478, 'iamdpk@gmail.com', '9876543210', 'asd', 'theaf', '2019-12-04', '12:56', 'ltr', 'theaf', 'Deepak', 'theaf', 'solved', '2019-12-04'),
(3, 'Deepak Sapkota', '12345678956', 'Kalanki', '34', '', 1394, 'iamdpk@gmail.com', '9876543210', 'iamdpk', 'iamdpk', '2019-12-09', '12:56', 'iamdpk', 'iamdpk', 'Deepak', 'iamdpk', 'closed', '2019-12-08'),
(4, 'Hari Kshetri', '234567899875645', 'Koteshwor', '3', '', 9658, 'hari@gmail.com', '98765432123', 'rubbery', 'Rubbery', '2019-12-08', '1:30', 'koteshwor', 'unknown', 'Hari', 'balkumari', 'running', '2019-12-08'),
(5, 'Sita Sharma', '123456789345', 'Others', '12', 'baglung', 1339, 'sita@gmail.com', '6789123450', 'murder', 'murder', '2019-12-08', '4:00', 'bgl', 'unknown', 'Sita', 'bgl', 'solved', '2019-12-08'),
(6, 'Suraj Shahi', '874589793498349', 'Kalanki', '9', '', 7522, 'suraj@gmail.com', '9876543245', 'crime', 'hsdj adshbdsj sdhbdsj jbsdj ', '2019-12-08', '6:00', 'kalanki', 'manoj', 'Suraj', 'nawalparashi', 'pending', '2019-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `fir_head`
--

CREATE TABLE `fir_head` (
  `h_id` int(10) NOT NULL,
  `head_batchno` varchar(20) NOT NULL,
  `head_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fir_head`
--

INSERT INTO `fir_head` (`h_id`, `head_batchno`, `head_name`) VALUES
(1, '2017-deepak', 'Deepak Sapkota'),
(2, '2018-ram', 'Ram Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_details`
--

CREATE TABLE `subadmin_details` (
  `sadmin_id` int(10) NOT NULL,
  `batch_no` varchar(17) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(10) NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `city` varchar(13) NOT NULL,
  `state` varchar(13) NOT NULL,
  `zcode` int(9) NOT NULL,
  `username` varchar(13) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `identity_no` varchar(17) NOT NULL,
  `type` varchar(9) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subadmin_details`
--

INSERT INTO `subadmin_details` (`sadmin_id`, `batch_no`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `contact_no`, `city`, `state`, `zcode`, `username`, `email`, `password`, `identity_no`, `type`, `datetime`) VALUES
(1, '2017-deepak', 'Deepak', '', 'Sapkota', 'Male', 21, '9876543210', 'lalitpur', '3', 12345, 'iamdpk', 'iamdpk@gmail.com', 'iamdpk', '1234567890', 'subadmin', '2019-11-18'),
(2, '2017-ram', 'ram', '', 'sharma', 'male', 22, '12345678906', 'ktm', '3', 3214, 'ram', 'ram@gmail.com', 'ram', '9876543212', 'subadmin', '2019-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `u_id` int(10) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(10) NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `city` varchar(13) NOT NULL,
  `state` varchar(13) NOT NULL,
  `zcode` int(9) NOT NULL,
  `username` varchar(13) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `identity_no` varchar(17) NOT NULL,
  `type` varchar(9) NOT NULL,
  `status` varchar(8) NOT NULL,
  `datetime` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`u_id`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `contact_no`, `city`, `state`, `zcode`, `username`, `email`, `password`, `identity_no`, `type`, `status`, `datetime`) VALUES
(4, 'hari', '', 'kshetri', 'male', 23, '98765432123', 'lalitpur', '2', 2345, 'hari', 'hari@gmail.com', 'hari', '234567899875645', 'user', 'on', ''),
(5, 'deepak', '', 'sapkota', 'male', 21, '9860718700', 'lalitpur', '3', 1234, 'iamdpk', 'iamdpk@gmail.com', 'iamdpk', '987654321012345', 'user', 'on', ''),
(6, 'ram', '', 'sharma', 'male', 22, '98765432123', 'pokhara', '4', 4567, 'ram', 'ram@gmail.com', 'ram', '0987654321', 'user', 'off', 'December-08-2019  11-20-14 '),
(7, 'sita', '', 'sharma', 'female', 21, '6789123450', 'ktm', '3', 3456, 'sita', 'sita@gmail.com', 'sita', '123456789345', 'user', 'on', 'December-08-2019  12-14-12 '),
(8, 'gita', '', 'sapkota', 'female', 21, '9847623465', 'bgl', '4', 3339, 'gita', 'gita@gmail.com', 'gita', '2345543225', 'user', 'on', 'December-08-2019  16-37-10 '),
(9, 'suraj', '', 'shahi', 'male ', 22, '9876543245', 'dhangadi', '6', 45678, 'suraj', 'suraj@gmail.com', 'suraj', '874589793498349', 'user', 'on', 'December-08-2019  18-53-19 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fir_head`
--
ALTER TABLE `fir_head`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `subadmin_details`
--
ALTER TABLE `subadmin_details`
  ADD PRIMARY KEY (`sadmin_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fir_head`
--
ALTER TABLE `fir_head`
  MODIFY `h_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subadmin_details`
--
ALTER TABLE `subadmin_details`
  MODIFY `sadmin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
