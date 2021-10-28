-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 01:54 PM
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
-- Database: `study`
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
(1, 'Manish Kumar', 'manishray10799@gmail.com', 79962839, 'manish123', 'manish.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_upload`
--

CREATE TABLE `admin_upload` (
  `id` int(21) NOT NULL,
  `user_id` varchar(51) NOT NULL,
  `course` varchar(100) NOT NULL,
  `semester` int(21) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `chapter` varchar(200) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `book` varchar(25) NOT NULL,
  `year` varchar(21) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_upload`
--

INSERT INTO `admin_upload` (`id`, `user_id`, `course`, `semester`, `subject`, `chapter`, `videos`, `book`, `year`, `question`) VALUES
(8, 'manishray10799@gmail.com', '1', 0, 'english', '', '', 'English.docx', '', ''),
(9, 'manishray10799@gmail.com', '1', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(10, 'manishray10799@gmail.com', '1', 0, 'math', '', '', 'Math.docx', '', ''),
(11, 'manishray10799@gmail.com', '1', 0, 'science', '', '', 'Science.docx', '', ''),
(12, 'manishray10799@gmail.com', '2', 0, 'english', '', '', 'English.docx', '', ''),
(13, 'manishray10799@gmail.com', '2', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(14, 'manishray10799@gmail.com', '2', 0, 'math', '', '', 'Math.docx', '', ''),
(15, 'manishray10799@gmail.com', '2', 0, 'science', '', '', 'Science.docx', '', ''),
(16, 'manishray10799@gmail.com', '3', 0, 'english', '', '', 'English.docx', '', ''),
(17, 'manishray10799@gmail.com', '4', 0, 'english', '', '', 'English.docx', '', ''),
(18, 'manishray10799@gmail.com', '3', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(19, 'manishray10799@gmail.com', '4', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(20, 'manishray10799@gmail.com', '3', 0, 'math', '', '', 'Math.docx', '', ''),
(21, 'manishray10799@gmail.com', '4', 0, 'math', '', '', 'Math.docx', '', ''),
(22, 'manishray10799@gmail.com', '3', 0, 'science', '', '', 'Science.docx', '', ''),
(23, 'manishray10799@gmail.com', '4', 0, 'science', '', '', 'Science.docx', '', ''),
(24, 'manishray10799@gmail.com', '5', 0, 'english', '', '', 'English.docx', '', ''),
(25, 'manishray10799@gmail.com', '6', 0, 'english', '', '', 'English.docx', '', ''),
(26, 'manishray10799@gmail.com', '7', 0, 'english', '', '', 'English.docx', '', ''),
(27, 'manishray10799@gmail.com', '8', 0, 'english', '', '', 'English.docx', '', ''),
(28, 'manishray10799@gmail.com', '9', 0, 'english', '', '', 'English.docx', '', ''),
(29, 'manishray10799@gmail.com', '10', 0, 'english', '', '', 'English.docx', '', ''),
(30, 'manishray10799@gmail.com', '5', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(31, 'manishray10799@gmail.com', '7', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(32, 'manishray10799@gmail.com', '8', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(33, 'manishray10799@gmail.com', '9', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(34, 'manishray10799@gmail.com', '10', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(35, 'manishray10799@gmail.com', '6', 0, 'hindi', '', '', 'Hindi.docx', '', ''),
(36, 'manishray10799@gmail.com', '5', 0, 'math', '', '', 'Math.docx', '', ''),
(37, 'manishray10799@gmail.com', '6', 0, 'math', '', '', 'Math.docx', '', ''),
(38, 'manishray10799@gmail.com', '7', 0, 'math', '', '', 'Math.docx', '', ''),
(39, 'manishray10799@gmail.com', '8', 0, 'math', '', '', 'Math.docx', '', ''),
(40, 'manishray10799@gmail.com', '9', 0, 'math', '', '', 'Math.docx', '', ''),
(41, 'manishray10799@gmail.com', '10', 0, 'math', '', '', 'Math.docx', '', ''),
(42, 'manishray10799@gmail.com', '5', 0, 'science', '', '', 'Science.docx', '', ''),
(43, 'manishray10799@gmail.com', '6', 0, 'science', '', '', 'Science.docx', '', ''),
(44, 'manishray10799@gmail.com', '7', 0, 'science', '', '', 'Science.docx', '', ''),
(45, 'manishray10799@gmail.com', '8', 0, 'science', '', '', 'Science.docx', '', ''),
(47, 'manishray10799@gmail.com', '9', 0, 'physics', '', '', 'Physics.docx', '', ''),
(48, 'manishray10799@gmail.com', '9', 0, 'Chemistry', '', '', 'Chemistry.docx', '', ''),
(49, 'manishray10799@gmail.com', '9', 0, 'biology', '', '', 'Biology.docx', '', ''),
(50, 'manishray10799@gmail.com', '10', 0, 'physics', '', '', 'Physics.docx', '', ''),
(51, 'manishray10799@gmail.com', '10', 0, 'chemistry', '', '', 'Chemistry.docx', '', ''),
(53, 'manishray10799@gmail.com', '10', 0, 'biology', '', '', 'Biology.docx', '', ''),
(54, 'manishray10799@gmail.com', '11', 0, 'english', '', '', 'English.docx', '', ''),
(56, 'manishray10799@gmail.com', '12', 0, 'english', '', '', 'English.docx', '', ''),
(57, 'manishray10799@gmail.com', 'BCom', 1, 'english', '', '', 'English.docx', '', ''),
(58, 'manishray10799@gmail.com', 'BCA', 1, 'english', '', '', '', '2019', 'English.docx'),
(59, 'manishray10799@gmail.com', 'BCA', 1, 'english', '', '', 'English.docx', '', ''),
(60, 'manishray10799@gmail.com', 'BCA', 2, 'english', '', '', 'English.docx', '', ''),
(61, 'manishray10799@gmail.com', 'BCA', 4, 'english', '', '', 'English.docx', '', ''),
(62, 'manishray10799@gmail.com', 'BCA', 5, 'english', '', '', 'English.docx', '', ''),
(63, 'manishray10799@gmail.com', 'BCA', 6, 'english', '', '', 'English.docx', '', ''),
(64, 'manishray10799@gmail.com', 'BCA', 3, 'jhbdbu', '', '', 'shivam sino.docx', '', ''),
(65, 'manishray10799@gmail.com', '10', 0, 'english', '', '', '', '2018', 'English.docx'),
(66, 'manishray10799@gmail.com', '10', 0, 'cbucdy', '', '', '', '2017', 'English.docx'),
(67, 'manishray10799@gmail.com', '10', 0, 'jgv', '', '', '', '2016', 'English.docx'),
(69, 'manishray10799@gmail.com', 'ISc', 0, 'ejkj', '', '', '', '2018', 'shivam sino (1).docx'),
(70, 'manishray10799@gmail.com', 'ISc', 0, 'kudd', '', '', '', '207', 'NET1855816.pdf'),
(71, 'manishray10799@gmail.com', 'IA', 0, 'kud', '', '', '', '648', 'manish.docx'),
(72, 'manishray10799@gmail.com', 'IA', 0, 'ui', '', '', '', '648', 'RESUME.docx'),
(73, 'manishray10799@gmail.com', 'ICom', 0, 'jh', '', '', '', '684', 'shivam sino (1).docx'),
(74, 'manishray10799@gmail.com', 'ICom', 0, 'juy', '', '', '', '54', 'manish.docx'),
(75, 'manishray10799@gmail.com', 'BCA', 2, 'kni', '', '', '', '56', 'shivam sino (1).docx'),
(76, 'manishray10799@gmail.com', 'BCA', 3, 'kjui', '', '', '', '54', 'manish.docx'),
(77, 'manishray10799@gmail.com', 'BCA', 4, 'lkjubi', '', '', '', '56', 'NET1855816.pdf'),
(78, 'manishray10799@gmail.com', 'BCA', 5, 'kjb', '', '', '', '54', 'RESUME.docx'),
(79, 'manishray10799@gmail.com', 'BCA', 6, ';no', '', '', '', '68', 'RESUME.docx'),
(80, 'manishray10799@gmail.com', 'Language', 0, 'html', 'kiubik', 'VID_20180728_222227.mp4', '', '', ''),
(82, 'manishray10799@gmail.com', 'Language', 0, 'css', 'yueb', 'VID_20180728_222227.mp4', '', '', ''),
(83, 'manishray10799@gmail.com', 'Language', 0, 'mysql', 'kbdu', 'Aashiq Banaya Aapne.mp4', '', '', ''),
(84, 'manishray10799@gmail.com', 'Language', 0, 'php', 'jydvjbuy mnwnc kjnke kbc ckm cdcmk dk  dkbc m ckd c dcdmj ckd cbdn cm dx cdxn ckdx cm dsxkc dkx cmsd xcmd xlc dmx cmdsx cj dsxmc skx cksd c,sd xcj s,k cks ckibudwwskck wdksbfnck,w sfoc we.ksfuncnwa;ls', 'HUA HAIN AAJ PEHLI BAAR _ SANAM RE _ Pulkit Samrat, Urvashi Rautela, Divya Khosla Kumar_ T-Series.mp', '', '', ''),
(85, 'manishray10799@gmail.com', 'Language', 0, 'javascript', 'kubdcuiyd', 'Raaz - The Mystery Continues - Maahi Video - Emraan, Kangana.mp4', '', '', ''),
(86, 'manishray10799@gmail.com', 'Language', 0, 'c', 'kjbcdi', 'Nachange Saari Raat _ JUNOONIYAT _ Pulkit Samrat,Yami Gautam_ Neeraj Shridhar,Tulsi Kumar, Meet Bros', '', '', ''),
(87, 'manishray10799@gmail.com', 'Language', 0, 'c++', 'wcwdw', 'Aisa Deewana Hua Hai Ye Dil - Dil Maange More  Ù­BluRayÙ­.mp4', '', '', ''),
(88, 'manishray10799@gmail.com', 'Language', 0, 'java', 'udciwu', 'LO MAAN LIYA Video Song _ Raaz Reboot _ Arijit Singh _ Emraan Hashmi, Kriti Kharbanda, Gaurav Arora.', '', '', ''),
(89, 'manishray10799@gmail.com', 'Language', 0, 'php', 'ytcycy', 'HUA HAIN AAJ PEHLI BAAR _ SANAM RE _ Pulkit Samrat, Urvashi Rautela, Divya Khosla Kumar_ T-Series.mp', '', '', ''),
(90, 'manishray10799@gmail.com', 'Language', 0, 'php', 'jvu', 'Raaz - The Mystery Continues - Maahi Video - Emraan, Kangana.mp4', '', '', ''),
(91, 'manishray10799@gmail.com', 'Language', 0, 'php', 'webduye', 'SANAM RE Title Song FULL VIDEO _ Pulkit Samrat, Yami Gautam, Urvashi Rautela _ Divya Khosla Kumar.mp', '', '', ''),
(92, 'manishray10799@gmail.com', 'BCom', 2, 'kdubuc', '', '', 'English (1).docx', '', ''),
(93, 'manishray10799@gmail.com', 'Language', 0, 'html', 'kjjcd', 'VID_20180728_222227.mp4', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(21) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_name`, `subject`, `message`, `status`) VALUES
(1, 'manishray10799@gmail.com', 'I Found Mistake in Book', 'fvkf', 'Seen'),
(2, 'manishray10799@gmail.com', 'I Found Mistake in Question bank', 'efvnir', 'Seen'),
(3, 'manishray10799@gmail.com', 'I Found Mistake in Question bank', 'efvnir', 'Seen'),
(4, 'manishray10799@gmail.com', 'I Found Mistake in Question bank', 'efvnir', 'Seen'),
(5, 'manishray10799@gmail.com', 'I Found Mistake in Question bank', 'efvnir', 'Seen'),
(6, 'manishray10799@gmail.com', 'I Found Mistake in Question bank', 'efvnir', 'Not seen'),
(7, 'manishray10799@gmail.com', 'I Found Mistake in Question bank', 'efvnir', 'Not seen'),
(8, 'manishray10799@gmail.com', 'I Found Mistake in Book', 'kdwdchuhd', 'Seen');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `user_id` varchar(51) NOT NULL,
  `course` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `videos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `user_id`, `course`, `subject`, `topic`, `videos`) VALUES
(21, 'manishray10799@gmail.com', '1', 'dc', 'dc', 'Aashiq Banaya Aapne.mp4'),
(22, 'manishray10799@gmail.com', '2', 'Java', 'Programming Language', 'Love_Me_Like_You_Do_hd.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(21) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(51) NOT NULL,
  `user_cont` int(20) NOT NULL,
  `password` varchar(21) NOT NULL,
  `photo` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_cont`, `password`, `photo`) VALUES
(1, 'manish kumar', 'manishray10799@gmail.com', 799628390, 'manish123', 'cats.jpg'),
(3, 'jsyduhchbi', 'a923492.ak@gmail.com', 0, '11', 'vlcsnap-error234.png'),
(4, 'joker', 'joker@joker', 0, '1', 'manish.jpeg'),
(5, 'sachin', 's@k', 0, '5', 'vlcsnap-error234.png');

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
-- Indexes for table `admin_upload`
--
ALTER TABLE `admin_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
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
-- AUTO_INCREMENT for table `admin_upload`
--
ALTER TABLE `admin_upload`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
