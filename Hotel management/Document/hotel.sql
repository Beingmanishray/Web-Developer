-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 09:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(25) NOT NULL,
  `admin_cont` int(20) NOT NULL,
  `password` varchar(11) NOT NULL,
  `admin_photo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_cont`, `password`, `admin_photo`) VALUES
(1, 'shobhit', 'sk@k', 799628390, 'sk', 'vlcsnap-error234.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(21) NOT NULL,
  `e_name` varchar(51) NOT NULL,
  `e_email` varchar(51) NOT NULL,
  `e_phone` int(20) NOT NULL,
  `e_post` text NOT NULL,
  `e_address` varchar(100) NOT NULL,
  `e_jdate` date NOT NULL,
  `e_salary` varchar(100) NOT NULL,
  `e_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `e_name`, `e_email`, `e_phone`, `e_post`, `e_address`, `e_jdate`, `e_salary`, `e_photo`) VALUES
(1, 's', 'jh@f', 68498, 'manager', 'e', '2019-03-27', '984', 'vlcsnap-error234.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `booking_id` int(21) NOT NULL,
  `title` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `adhar_no` int(100) NOT NULL,
  `phone_no` int(21) NOT NULL,
  `room_type` text NOT NULL,
  `bed` text NOT NULL,
  `no_of_room` int(3) NOT NULL,
  `meal_plan` text NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `status` text NOT NULL,
  `payment` text NOT NULL,
  `amount` int(21) NOT NULL,
  `nday` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`booking_id`, `title`, `first_name`, `last_name`, `email`, `adhar_no`, `phone_no`, `room_type`, `bed`, `no_of_room`, `meal_plan`, `check_in`, `check_out`, `status`, `payment`, `amount`, `nday`) VALUES
(1, 'Miss.', 'a', 'h', 'sk@s', 651, 9849, 'Superior Room', 'Single', 1, 'Half Board', '2019-03-11', '2019-03-13', 'Conform', 'Paid', 3200, 2),
(2, 'Mr.', 'shobhit', 'kumar', 'sk@s', 2147483647, 1234567893, 'Deluxe Room', 'Double', 1, 'Full Board', '2019-03-12', '2019-03-15', 'Conform', 'Paid', 2200, 3),
(3, 'Mr.', 'shobhit', 'kumar', 'sk@s', 65989, 68498, 'Deluxe Room', 'Single', 2, 'Half Board', '2019-03-12', '2019-03-20', 'Conform', 'Not Paid', 0, 8),
(4, 'Dr.', 'e', 'iuh', 'iui@oui', 54, 84, 'Deluxe Room', 'Double', 1, 'Full Board', '2019-03-22', '2019-03-23', 'Conform', 'Not Paid', 0, 1),
(5, 'Dr.', 'kjc', 'ui', 'sk@s', 654984, 84986, 'Deluxe Room', 'Double', 1, 'Room only', '2019-03-12', '2019-03-14', 'Conform', 'Not Paid', 0, 2),
(6, 'Miss.', 'kjdj', 'lioh', 'sk@s', 65489, 8498, 'Superior Room', 'Single', 1, 'Full Board', '2019-03-12', '2019-03-13', 'Conform', 'Not Paid', 0, 1),
(7, 'Prof.', 'lkn', 'lhouo', 'sk@s', 598, 8498, 'Superior Room', 'Single', 1, 'Room only', '2019-03-13', '2019-03-14', 'Not Conform', 'Not Paid', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(21) NOT NULL,
  `room_type` varchar(51) NOT NULL,
  `bedding_type` varchar(51) NOT NULL,
  `place` varchar(100) NOT NULL,
  `cusid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_type`, `bedding_type`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', '', ''),
(2, 'Superior Room', 'Double ', '', ''),
(3, 'Superior Room', 'Triple ', '', ''),
(4, 'Delux Room', 'Single', '', ''),
(5, 'Delux Room', 'Double ', '', ''),
(6, 'Delux Room', 'Triple ', '', ''),
(7, 'Single Room', 'Single', '', ''),
(8, 'Guest Room', 'Single', '', ''),
(9, 'Guest Room', 'Double ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(21) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(51) NOT NULL,
  `user_cont` int(20) NOT NULL,
  `password` varchar(21) NOT NULL,
  `user_photo` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_email`, `user_cont`, `password`, `user_photo`) VALUES
(1, 'shobhit', 'sk@s', 6849585, 'sk', 'vlcsnap-error234.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `booking_id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
