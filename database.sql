-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 11:01 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(40) NOT NULL,
  `organised_by` varchar(20) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `organised_by`, `type`) VALUES
(1, 'Business quiz', 'iste', 2),
(2, 'Technozova', 'csi', 1),
(3, 'Arduino workshop', 'ieee', 1),
(4, 'Cricket league', 'iste', 2);

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`id`, `name`) VALUES
(1, 'csi'),
(2, 'ieee'),
(3, 'iste');

-- --------------------------------------------------------

--
-- Table structure for table `student_participate`
--

CREATE TABLE `student_participate` (
  `s_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_participate`
--

INSERT INTO `student_participate` (`s_id`, `e_id`) VALUES
(1547, 1),
(1547, 2),
(1547, 3),
(1550, 3),
(1552, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `id` int(11) NOT NULL,
  `lib_card_no` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `ssc%` float NOT NULL,
  `hsc%` float NOT NULL,
  `guardian's_name` varchar(40) NOT NULL,
  `guardian's_contact` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(20) NOT NULL,
  `classno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`id`, `lib_card_no`, `email`, `first_name`, `last_name`, `ph_no`, `address`, `ssc%`, `hsc%`, `guardian's_name`, `guardian's_contact`, `timestamp`, `password`, `classno`) VALUES
(1547, '173847', 'saishm47@gmail.com', 'saish', 'mohare', '9167452130', 'kalyan', 90, 79, 'yogendra', '7894564120', '2017-04-21 17:25:23', 'saish', 'D10'),
(1548, '173848', 'khaldrogo13@gmail.com', 'asutosh', 'padhi', '8976110112', 'nerul', 93, 93, 'prasant', '9842146544', '2017-04-21 18:17:27', 'asu', 'D15'),
(1550, '173850', 'varunji85@gmail.com', 'varun', 'rathi', '9817912150', 'chembur', 90, 82, 'vinay', '8754121510', '2017-04-21 17:25:24', 'varun', 'D10'),
(1552, '173852', 'sahaniv66@gmail.com', 'vijay', 'sahani', '9167844532', 'airoli', 93, 85, 'mohit', '9821454576', '2017-04-21 17:25:24', 'vijay', 'D10');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_profile`
--

CREATE TABLE `teachers_profile` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_profile`
--

INSERT INTO `teachers_profile` (`id`, `faculty_id`, `email`, `first_name`, `last_name`, `password`) VALUES
(255, '1538', 'parthc54@gmail.com', 'parth', 'chandarana', 'parth'),
(256, '1539', 'amit256@gmail.com', 'amit', 'singh', 'amit'),
(257, '1540', 'sandeep45@gmail.com', 'sandeep', 'utala', 'sandeep'),
(258, '1541', 'vinitam52@gmail.com', 'vinita', 'mishra', 'vinita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_name` (`event_name`,`organised_by`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `student_participate`
--
ALTER TABLE `student_participate`
  ADD PRIMARY KEY (`s_id`,`e_id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lib_card_no` (`lib_card_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teachers_profile`
--
ALTER TABLE `teachers_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculty_id` (`faculty_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1553;
--
-- AUTO_INCREMENT for table `teachers_profile`
--
ALTER TABLE `teachers_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
