-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 08:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer1` varchar(250) DEFAULT NULL COMMENT 'Correct answer',
  `answer2` varchar(250) DEFAULT NULL,
  `answer3` varchar(250) DEFAULT NULL,
  `answer4` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `question_id`, `answer1`, `answer2`, `answer3`, `answer4`, `created_at`) VALUES
(1, 1, '4/3', '-2/3', '-4/3', '-7/3', '2022-12-17 17:42:57'),
(3, 2, '22', '24', '26', '28', '2022-12-17 18:46:38'),
(4, 3, '22', '24', '26', '28', '2022-12-17 18:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `created_at`) VALUES
(1, 'NTSE_EXAM_wb_2015-16', '2022-12-16 22:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `nt_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_text` text DEFAULT NULL,
  `image_path` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`nt_id`, `exam_id`, `question_text`, `image_path`, `created_at`) VALUES
(1, 1, 'If (x + a) is a factor of f(x) = x3 + ax2 - 2x + a + 4 then a is :', NULL, '2022-12-18 00:31:49'),
(2, 1, NULL, 'assets/images/ntse_wb_question_image_2015_2016/41.png', '2022-12-17 00:43:16'),
(3, 1, NULL, 'assets/images/ntse_wb_question_image_2015_2016/41.png', '2022-12-17 00:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `test_registration`
--

CREATE TABLE `test_registration` (
  `t_id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_no` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirm_password` varchar(250) NOT NULL,
  `user_login` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_registration`
--

INSERT INTO `test_registration` (`t_id`, `Name`, `email`, `phone_no`, `password`, `confirm_password`, `user_login`, `created_at`) VALUES
(1, 'Swagata Das', 'swagata@gmail.com', '8474125478', 'c3dhZ2F0YWRhcw==', 'c3dhZ2F0YWRhcw==', '', '2022-12-14 01:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `test_sheet`
--

CREATE TABLE `test_sheet` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_serial` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`nt_id`);

--
-- Indexes for table `test_registration`
--
ALTER TABLE `test_registration`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `test_sheet`
--
ALTER TABLE `test_sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `nt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_registration`
--
ALTER TABLE `test_registration`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_sheet`
--
ALTER TABLE `test_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
