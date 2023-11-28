-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 02:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmanager`
--

CREATE TABLE `addmanager` (
  `sl` int(11) NOT NULL,
  `uid` varchar(40) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmanager`
--

INSERT INTO `addmanager` (`sl`, `uid`, `fname`, `lname`, `address`, `gender`, `email`, `mobile`) VALUES
(243, 'SA04042023194536', 'Kamal', 'Sen', 'Salt lake Sector V', 'Male', 'kamal12@gmail.com', 9932727578);

-- --------------------------------------------------------

--
-- Table structure for table `addtrainer`
--

CREATE TABLE `addtrainer` (
  `sl` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `designation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtrainer`
--

INSERT INTO `addtrainer` (`sl`, `uid`, `fname`, `lname`, `address`, `gender`, `email`, `password`, `mobile`, `designation`) VALUES
(110, 'SA04042023192805', 'Abhijit ', 'Das ', 'Vill-Naraharipur Chandrakona Town Paschim Medinipur 721201 ', '', 'abhijitd721201@gmail.com ', '12234', 9002527215, 'Cardio '),
(111, 'SA04042023193029', 'Subhajit', 'Das', 'Kestopur', 'Male', 'subhajit23@gmail.com', 'NBSUHS', 8670315331, 'Weightlifting');

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `sl` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `membership` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`sl`, `uid`, `fname`, `lname`, `address`, `gender`, `email`, `password`, `mobile`, `membership`) VALUES
(19, 'SA04042023200033', 'Ayan', 'Munshi', 'Science City', 'Male', 'ayan56@gmail.com', '215455', 9932452153, 'Enterprise');

-- --------------------------------------------------------

--
-- Table structure for table `gymworker`
--

CREATE TABLE `gymworker` (
  `sl` int(11) NOT NULL,
  `uid` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(8) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gymworker`
--

INSERT INTO `gymworker` (`sl`, `uid`, `fname`, `lname`, `address`, `gender`, `email`, `password`, `mobile`, `designation`) VALUES
(6, 'SA04042023195154', 'Rajat ', 'Ghose', 'Habra', 'Male', 'rajat25@gmail.com', '12563', 8670315221, 'Sweeper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmanager`
--
ALTER TABLE `addmanager`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `sl` (`sl`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `addtrainer`
--
ALTER TABLE `addtrainer`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `sl` (`sl`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `sl` (`sl`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `gymworker`
--
ALTER TABLE `gymworker`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `sl` (`sl`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmanager`
--
ALTER TABLE `addmanager`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `addtrainer`
--
ALTER TABLE `addtrainer`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `adduser`
--
ALTER TABLE `adduser`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gymworker`
--
ALTER TABLE `gymworker`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
