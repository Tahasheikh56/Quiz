-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 04:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qiuz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'home tool markup language', 1),
(2, 'hyperlink and text markup language', 1),
(3, 'hypertext markup language', 1),
(4, 'none of the above', 1),
(5, 'PHP is an open-source programming language', 2),
(6, 'PHP is used to develop dynamic and interactive websites', 2),
(7, 'PHP is a server-side scripting language', 2),
(8, 'All of the mentioned', 2),
(9, 'PHP stands for Preprocessor Home Page', 3),
(10, 'PHP stands for Pretext Hypertext Processor', 3),
(11, 'PHP stands for Hypertext Preprocessor\r\n', 3),
(12, 'PHP stands for Personal Hyper Processor', 3),
(13, 'Drek Kolkevi', 4),
(14, 'Rasmus Lerdorf', 4),
(15, 'Willam Makepiece', 4),
(16, 'List Barely', 4),
(17, '.php', 5),
(18, '.ph', 5),
(19, '.xml', 5),
(20, 'html', 5),
(21, 'functionName(parameters) {function body}', 6),
(22, ' function {function body}', 6),
(23, 'function functionName(parameters) {function body}', 6),
(24, 'ata type functionName(parameters) {function body}', 6);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'what does html stands for?', 1),
(2, 'What is PHP?', 5),
(3, 'What does PHP stand for?', 9),
(4, 'Who is the father of PHP?', 4),
(5, 'Which of the following is the default file extension of PHP files?', 5),
(6, 'How to define a function in PHP?', 6);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`) VALUES
(11, 'asharif', 'asharifkhan245@gmail.com', '12345'),
(12, 'taha', 'taha123@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `totalques` int(250) NOT NULL,
  `answercorrect` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answercorrect`) VALUES
(8, 'asharif', 3, 0),
(9, 'asharif', 3, 3),
(10, 'asharif', 3, 2),
(11, 'asharif', 3, 2),
(12, 'asharif', 3, 2),
(13, 'asharif', 3, 2),
(14, 'asharif', 3, 2),
(15, 'asharif', 3, 2),
(16, 'asharif', 3, 2),
(17, 'asharif', 3, 2),
(18, 'asharif', 3, 2),
(19, 'asharif', 3, 3),
(20, 'asharif', 3, 3),
(21, 'asharif', 3, 3),
(22, 'asharif', 3, 3),
(23, 'asharif', 3, 3),
(24, 'asharif', 3, 3),
(25, 'asharif', 3, 3),
(26, 'asharif', 3, 3),
(27, 'asharif', 3, 3),
(28, 'asharif', 3, 3),
(29, 'asharif', 3, 3),
(30, 'asharif', 3, 3),
(31, 'asharif', 3, 3),
(32, 'asharif', 3, 3),
(33, 'asharif', 3, 3),
(34, 'asharif', 3, 3),
(35, 'asharif', 3, 3),
(36, 'asharif', 3, 3),
(37, 'asharif', 3, 3),
(38, 'asharif', 3, 3),
(39, 'asharif', 3, 3),
(40, 'asharif', 3, 3),
(41, 'asharif', 3, 3),
(42, 'asharif', 3, 3),
(43, 'asharif', 3, 3),
(44, 'asharif', 3, 3),
(45, 'asharif', 3, 3),
(46, 'asharif', 3, 3),
(47, 'asharif', 3, 3),
(48, 'asharif', 3, 3),
(49, 'asharif', 3, 3),
(50, 'asharif', 3, 3),
(51, 'asharif', 3, 3),
(52, 'asharif', 3, 3),
(53, 'asharif', 3, 3),
(54, 'asharif', 3, 3),
(55, 'asharif', 3, 3),
(56, 'asharif', 3, 3),
(57, 'asharif', 3, 3),
(58, 'asharif', 3, 3),
(59, 'asharif', 3, 3),
(60, 'asharif', 3, 3),
(61, 'asharif', 3, 3),
(62, 'asharif', 3, 3),
(63, 'asharif', 3, 2),
(64, 'asharif', 3, 2),
(65, 'asharif', 3, 2),
(66, 'asharif', 3, 2),
(67, 'asharif', 3, 2),
(68, 'asharif', 3, 2),
(69, 'asharif', 3, 2),
(70, 'asharif', 3, 2),
(71, 'asharif', 3, 2),
(72, 'asharif', 3, 2),
(73, 'asharif', 3, 2),
(74, 'asharif', 3, 2),
(75, 'asharif', 3, 2),
(76, 'asharif', 3, 2),
(77, 'asharif', 3, 2),
(78, 'asharif', 3, 2),
(79, 'asharif', 3, 3),
(80, 'asharif', 3, 3),
(81, 'asharif', 3, 3),
(82, 'asharif', 3, 3),
(83, 'asharif', 3, 3),
(84, 'asharif', 3, 3),
(85, 'asharif', 3, 3),
(86, 'asharif', 3, 3),
(87, 'asharif', 3, 3),
(88, 'asharif', 3, 3),
(89, 'asharif', 3, 3),
(90, 'asharif', 3, 3),
(91, 'asharif', 3, 3),
(92, 'taha', 3, 3),
(93, 'taha', 3, 3),
(94, 'taha', 3, 3),
(95, 'taha', 3, 3),
(96, 'taha', 3, 3),
(97, 'taha', 3, 3),
(98, 'taha', 3, 3),
(99, 'taha', 3, 3),
(100, 'taha', 3, 3),
(101, 'taha', 3, 3),
(102, 'taha', 3, 3),
(103, 'taha', 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
