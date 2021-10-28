-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 01:08 PM
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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(21) NOT NULL,
  `username` varchar(21) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(2, 'manish', 'manishray10799@gmail.com', 'mk12345');

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

CREATE TABLE `companydetails` (
  `id` int(21) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companydetails`
--

INSERT INTO `companydetails` (`id`, `cname`, `username`, `email`, `password`) VALUES
(1, 'info', 'manish', 'manishray10799@gmail.com', 'manish123'),
(2, 'tech', 'ankit', 'nk.nishakumari71@gmail.com', '12345'),
(3, 'micro', 'karan', 'karan@gmail.com', '123'),
(4, 'mahindra', 'raushan', 'raushan@g.in', '123'),
(5, 'nanda', 'nanda', 'nandakumarp0902@gmail.com', 'nanda'),
(6, 'jyg', 'lalu', 'lalukumar196@gmail.com', '12457812');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(21) NOT NULL,
  `username` varchar(21) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `username`, `email`, `password`) VALUES
(1, 'manish', 'manishray10799@gmail.com', 'mk123'),
(2, 'sachin', 'varshapol33@gmail.com', 'sk123'),
(3, 'YAMUNA', 'yamunap@acharya.ac.in', '123'),
(4, 'manish', 'manishray10799@gmail.com', 'mk12345'),
(5, 'raushan', 'raushan@gmail.com', '123'),
(6, 'var', 'varshithans6@gmail.com', '123'),
(7, 'nanda', 'nandakumarphynm@gmail.com', '123'),
(8, 'kiygid', 'varshitha0902@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

CREATE TABLE `jobdetails` (
  `id` int(11) NOT NULL,
  `category` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `salary` int(250) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `c_id` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobdetails`
--

INSERT INTO `jobdetails` (`id`, `category`, `title`, `experience`, `qualification`, `skills`, `salary`, `location`, `c_id`) VALUES
(1, '              Full stack developer                      ', '       Web Developer            ', '         2 year               ', ' BCA        ', '               php,css,javascript                        ', 60000, 'Delhi', 1),
(2, 'Group- D    ', 'Railway    ', 'Fresher  ', 'Graduate    ', 'Energetic    ', 25000, 'Bihar', 2),
(3, 'It software-application programming,maintenance  ', 'software developer ', '3 year ', 'B-tech(cs)   ', 'Excelent verbal skills   ', 80000, 'bangalore', 1),
(4, 'It software- client/server programming', 'PHP Developer', '0 to 2 year', 'B-tech(CS) ', 'php,css,javascript', 40000, 'Delhi', 1),
(5, 'Clerk', 'Bank', 'Fresher', 'Graduate', 'Basic Computer', 30000, 'Bihar', 2),
(6, 'Accountent ', 'Bank ', 'Fresher ', 'Graduate in Bcom', 'Tally ', 50000, 'Bihar', 2),
(7, 'Programmer', 'Java Developer', '2 year', 'B-tech,MCA,Bsc It', 'java', 50000, 'Bangalore', 2),
(8, 'Web Designing Management', 'Web Designer ', '3 year  ', 'Computer Science ', 'HTML,CSS,Javascript ', 40000, 'Bihar', 2),
(9, 'SOFTWARE ENGG ', 'SOFTWARE DEVELOPER ', '0 - 1 ', 'MCA ', 'TECHNICAL ', 300000, 'BANGALORE', 3),
(10, 'Software Engg ', 'Software Developer ', '0 - 2 year', 'MCA ', 'Technical ', 120000, 'Delhi', 1),
(11, 'Call center     ', 'Data Intery     ', '1 - 3  year   ', 'BCA     ', 'Technical     ', 23433, 'bangalore', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resumedetails`
--

CREATE TABLE `resumedetails` (
  `id` int(21) NOT NULL,
  `Job_id` int(21) NOT NULL,
  `candidate_name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `number` int(16) NOT NULL,
  `location` varchar(100) NOT NULL,
  `resume` varchar(15) NOT NULL,
  `u_id` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resumedetails`
--

INSERT INTO `resumedetails` (`id`, `Job_id`, `candidate_name`, `email`, `number`, `location`, `resume`, `u_id`) VALUES
(16, 1, 'Manish kumar ', 'manishray10799@gmail.com', 2147483647, 'bangalore ', 'manish.docx', 1),
(17, 2, 'Manish kumar', 'manishray10799@gmail.com', 2147483647, 'Bangalore', 'manish.docx', 1),
(18, 3, 'Ankit kumar', 'ankit@gmail.com', 654468, 'Bihar', 'Ankit.doc', 1),
(19, 3, 'Sachin pal  ', 'varshapol33@gmail.com', 2147483647, 'Delhi  ', 'sachin.doc', 1),
(20, 3, 'Manish kumar ', 'mk123@gmail.com', 654654686, 'panjab ', 'manish.docx', 1),
(21, 10, 'Ankit kumar      ', 'ak251096@gmail.com', 914748378, 'Bangalore    ', 'Ankit.doc', 1),
(22, 1, 'Anuranjan kumar             ', 'hackeranu10799@gmail.com', 6849, 'Bihar             ', 'Ankit.doc', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companydetails`
--
ALTER TABLE `companydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumedetails`
--
ALTER TABLE `resumedetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companydetails`
--
ALTER TABLE `companydetails`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobdetails`
--
ALTER TABLE `jobdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `resumedetails`
--
ALTER TABLE `resumedetails`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
