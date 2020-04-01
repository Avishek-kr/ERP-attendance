-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 04:06 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--
CREATE DATABASE IF NOT EXISTS `erp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `erp`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `fgender` varchar(255) DEFAULT NULL,
  `femail` varchar(255) DEFAULT NULL,
  `fusername` varchar(255) DEFAULT NULL,
  `fpassword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fid`, `fname`, `fgender`, `femail`, `fusername`, `fpassword`) VALUES
(1, NULL, '0', '0', '0', 'teacher', 'teacher'),
(2, NULL, 'Test', 'M', 'test@gmail.com', NULL, 'test'),
(3, '321', 'Test', 'M', 'test@gmail.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `fattendance`
--

CREATE TABLE IF NOT EXISTS `fattendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` varchar(255) DEFAULT NULL,
  `fbranch` varchar(255) DEFAULT NULL,
  `fdate` varchar(255) DEFAULT NULL,
  `fdaytype` varchar(255) DEFAULT NULL,
  `fattendancetype` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fattendance`
--

INSERT INTO `fattendance` (`id`, `fid`, `fbranch`, `fdate`, `fdaytype`, `fattendancetype`) VALUES
(1, '3', 'cse', '2017-10-28', 'Half Day', 'Present'),
(2, '3', 'cse', '2015-10-10', 'Full Day', 'Present'),
(3, '3', 'ECE', '2017-10-29', 'Full Day', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `sattendance`
--

CREATE TABLE IF NOT EXISTS `sattendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(255) DEFAULT NULL,
  `sbranch` varchar(255) DEFAULT NULL,
  `ssem` varchar(255) DEFAULT NULL,
  `ssubject` varchar(255) DEFAULT NULL,
  `sdate` varchar(25) DEFAULT NULL,
  `sattendancetype` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sattendance`
--

INSERT INTO `sattendance` (`id`, `sid`, `sbranch`, `ssem`, `ssubject`, `sdate`, `sattendancetype`) VALUES
(1, '3', 'cse', '3rd', 'physics', '2017-10-29', 'Absent'),
(2, '3', 'cse', '3rd', 'chemistry', '2017-10-29', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sroll` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `sgender` varchar(255) DEFAULT NULL,
  `sbranch` varchar(255) DEFAULT NULL,
  `ssem` varchar(255) DEFAULT NULL,
  `semail` varchar(255) DEFAULT NULL,
  `susername` varchar(255) DEFAULT NULL,
  `spassword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sroll`, `sname`, `sgender`, `sbranch`, `ssem`, `semail`, `susername`, `spassword`) VALUES
(3, '1234', 'Student1', 'M', 'CSE', '3rd', 'student@student.com', 'student', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
