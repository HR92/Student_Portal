-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2014 at 08:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Name` varchar(25) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `Nationality` varchar(25) DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  `Course` varchar(25) DEFAULT NULL,
  `GraduationYear` int(4) DEFAULT NULL,
  `Major` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Gender`, `Email`, `BirthDate`, `Nationality`, `Mobile`, `Course`, `GraduationYear`, `Major`) VALUES
('Ahmed', 'm', 'raedpsu@gmail.com', '1988-11-07', 'Emarati', 562404829, 'CS290', 2012, 'Robotics'),
('Hamza', 'M', 'hamza@gmail.com', '1989-11-09', 'Saudi', 568416548, 'CS255', 2013, 'ComputerScinece'),
('Ibrahim', 'M', 'Ibrahim@gmail.com', '1985-10-05', 'Saudi', 568416578, 'CS210', 2010, 'ComputerScinece');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
