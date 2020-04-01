-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 09:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fid` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `fgender` varchar(255) DEFAULT NULL,
  `femail` varchar(255) DEFAULT NULL,
  `fusername` varchar(255) DEFAULT NULL,
  `fpassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fid`, `fname`, `fgender`, `femail`, `fusername`, `fpassword`) VALUES
(11, 'F01', 'nalin', 'M', 'nalin123@gmail.com', 'nalin123', '123'),
(14, 'F02', 'seema rawat', 'F', 'seema@gmail.com', 'seema123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fattendance`
--

CREATE TABLE `fattendance` (
  `id` int(11) NOT NULL,
  `fid` varchar(255) DEFAULT NULL,
  `fbranch` varchar(255) DEFAULT NULL,
  `fdate` varchar(255) DEFAULT NULL,
  `fdaytype` varchar(255) DEFAULT NULL,
  `fattendancetype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sattendance`
--

CREATE TABLE `sattendance` (
  `id` int(11) NOT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `sbranch` varchar(255) DEFAULT NULL,
  `ssem` varchar(255) DEFAULT NULL,
  `ssubject` varchar(255) DEFAULT NULL,
  `sdate` varchar(25) DEFAULT NULL,
  `sattendancetype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `sroll` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `sgender` varchar(255) DEFAULT NULL,
  `sbranch` varchar(255) DEFAULT NULL,
  `ssem` varchar(255) DEFAULT NULL,
  `semail` varchar(255) DEFAULT NULL,
  `susername` varchar(255) DEFAULT NULL,
  `spassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sroll`, `sname`, `sgender`, `sbranch`, `ssem`, `semail`, `susername`, `spassword`) VALUES
(4, '15cse1', 'ankit', 'M', 'cse', '5th', 'ankitaggarwal', 'ankit', '123'),
(5, '15cse2', 'ashish', 'M', 'cse', '5th', 'ashish@gmail.com', 'ashish123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fattendance`
--
ALTER TABLE `fattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sattendance`
--
ALTER TABLE `sattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `fattendance`
--
ALTER TABLE `fattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sattendance`
--
ALTER TABLE `sattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
