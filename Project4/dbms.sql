-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 07:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `select` (IN `a` TEXT)  NO SQL
SELECT * FROM dbms.car_status WHERE car_status.status=a$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(3) NOT NULL,
  `type` varchar(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `model` varchar(10) NOT NULL,
  `fuel_type` varchar(6) NOT NULL,
  `transmission_type` varchar(6) NOT NULL,
  `owner_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `type`, `brand`, `model`, `fuel_type`, `transmission_type`, `owner_id`) VALUES
(17, 'suv', 'maruti', 'sy', 'eco', 'manual', 8),
(18, 'suv', 'maruti', 'sx', 'diesel', 'manual', 8),
(19, 'suv', 'maruti', 'sx', 'petrol', 'auto', 8),
(20, 'sedan', 'hero', 'ze', 'diesel', 'auto', 8),
(21, 'q', 'q', 'q', 'petrol', 'auto', 8);

--
-- Triggers `car`
--
DELIMITER $$
CREATE TRIGGER `updatestatus` AFTER UPDATE ON `car` FOR EACH ROW UPDATE car_status SET owner_id = NEW.owner_id, STATUS = 'sold' WHERE car_id = NEW.car_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `car_id` int(3) NOT NULL,
  `car_condition` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `regno` varchar(6) NOT NULL,
  `year_of_purchase` int(4) NOT NULL,
  `price` int(10) NOT NULL,
  `distance_travelled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_id`, `car_condition`, `color`, `regno`, `year_of_purchase`, `price`, `distance_travelled`) VALUES
(17, 'new', 'red', '11', 11, 11, 11),
(20, 'old', 'blue', 'ka90', 1989, 12000, 1200),
(21, 'old', 'q', 'q', 0, 0, 0),
(18, 'new', 'red', 'vb', 1994, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `car_status`
--

CREATE TABLE `car_status` (
  `owner_id` int(3) NOT NULL,
  `car_id` int(3) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_status`
--

INSERT INTO `car_status` (`owner_id`, `car_id`, `status`) VALUES
(8, 17, 'sold'),
(8, 18, 'sold'),
(8, 21, 'sold');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `owner_id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`owner_id`, `username`, `password`) VALUES
(8, '2', '2'),
(10, 'mashlog', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(3) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `rating` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `fname`, `lname`, `phone`, `email`, `address`, `rating`) VALUES
(8, '2', '2', '2', '2', '', NULL),
(10, 'Suraj', 'yadav', '8892345431', 'surajyadav0149@gmail.com', 'No 13/79 12th a main 2nd cross Hongsandr', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `security_details`
--

CREATE TABLE `security_details` (
  `car_id` int(3) NOT NULL,
  `insurance_no` varchar(5) NOT NULL,
  `rto_no` varchar(5) NOT NULL,
  `emission_ratings` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_details`
--

INSERT INTO `security_details` (`car_id`, `insurance_no`, `rto_no`, `emission_ratings`) VALUES
(17, '11', '11', 11),
(18, '1232', '1232', 0),
(20, 'gh89', '', 0),
(21, 'q', 'q', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD UNIQUE KEY `regno` (`regno`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `car_status`
--
ALTER TABLE `car_status`
  ADD UNIQUE KEY `oc` (`owner_id`,`car_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `security_details`
--
ALTER TABLE `security_details`
  ADD UNIQUE KEY `insurance_no` (`insurance_no`),
  ADD UNIQUE KEY `rto_no` (`rto_no`),
  ADD KEY `car_id` (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_details`
--
ALTER TABLE `car_details`
  ADD CONSTRAINT `car_details_ibfk_3` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_status`
--
ALTER TABLE `car_status`
  ADD CONSTRAINT `car_status_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_status_ibfk_3` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_info`
--
ALTER TABLE `login_info`
  ADD CONSTRAINT `login_info_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `security_details`
--
ALTER TABLE `security_details`
  ADD CONSTRAINT `security_details_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
