-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2016 at 11:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soil`
--

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `code` text NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`code`, `Name`) VALUES
('dhk', 'Dhaka'),
('ctg', 'Chittagong'),
('raj', 'Rajshahi'),
('bsl', 'Barisal'),
('syl', 'Sylhet'),
('msn', 'Mymensingh'),
('khl', 'Khulna'),
('rang', 'Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `moisture`
--

CREATE TABLE `moisture` (
  `moist` float NOT NULL,
  `day` date NOT NULL,
  `zone` text NOT NULL,
  `time` time NOT NULL,
  `division` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moisture`
--

INSERT INTO `moisture` (`moist`, `day`, `zone`, `time`, `division`) VALUES
(25, '2016-01-02', 'zone3', '03:00:00', 'dhk'),
(25, '2016-01-04', 'zone1', '06:00:00', 'bsl'),
(29, '2016-01-11', 'zone1', '12:00:00', 'raj'),
(17.7, '2016-01-19', 'zone1', '19:00:00', 'khl'),
(19, '2016-01-31', 'zone1', '14:00:00', 'ctg'),
(16.7, '2016-02-10', 'zone1', '04:00:00', 'syl'),
(23.6, '2016-02-23', 'zone1', '10:00:00', 'ctg'),
(20.3, '2016-03-01', 'zone1', '15:00:00', 'dhk'),
(21.3, '2016-03-15', 'zone1', '12:00:00', 'dhk'),
(25, '2016-04-01', 'zone1', '23:00:00', 'dhk'),
(18.6, '2016-04-15', 'zone1', '21:00:00', 'dhk'),
(13, '2016-03-07', 'zone2', '13:00:00', 'ctg'),
(21, '2016-02-28', 'zone2', '21:00:00', 'ctg'),
(15, '2016-01-15', 'zone2', '17:00:00', 'raj'),
(15, '2016-01-01', 'zone2', '13:00:00', 'bsl'),
(26, '2016-07-15', 'zone2', '17:00:00', 'dhk'),
(25, '2016-01-31', 'zone2', '22:00:00', 'khl'),
(17, '2016-02-05', 'zone2', '03:00:00', 'syl'),
(15, '2016-02-15', 'zone2', '04:00:00', 'dhk'),
(21, '2016-02-28', 'zone2', '14:00:00', 'ctg'),
(16, '2016-01-01', 'zone3', '02:00:00', 'bsl'),
(28, '2016-01-15', 'zone3', '08:00:00', 'raj'),
(25.3, '2016-01-30', 'zone3', '12:00:00', 'khl'),
(15.9, '2016-02-10', 'zone3', '16:00:00', 'syl'),
(17.8, '2016-02-25', 'zone3', '22:00:00', 'dhk'),
(25, '2016-03-08', 'zone3', '04:00:00', 'dhk'),
(17.8, '2016-03-22', 'zone3', '08:00:00', 'dhk'),
(13.9, '2016-04-05', 'zone3', '11:00:00', 'ctg'),
(29, '2016-04-30', 'zone3', '15:00:00', 'ctg'),
(26.3, '2016-01-15', 'zone4', '04:00:00', 'bsl'),
(29.3, '2016-01-30', 'zone4', '08:00:00', 'raj'),
(23, '2016-02-13', 'zone4', '12:00:00', 'khl'),
(24, '2016-02-29', 'zone4', '16:00:00', 'syl'),
(23, '2016-03-12', 'zone4', '20:00:00', 'dhk'),
(31, '2016-03-29', 'zone4', '05:00:00', 'dhk'),
(25.6, '2016-04-09', 'zone4', '10:00:00', 'dhk'),
(31.9, '2016-04-23', 'zone4', '05:00:00', 'dhk'),
(23.3, '2016-05-05', 'zone4', '18:00:00', 'ctg');

-- --------------------------------------------------------

--
-- Table structure for table `percentage`
--

CREATE TABLE `percentage` (
  `ph` float NOT NULL,
  `moisture` float NOT NULL,
  `nutrients` float NOT NULL,
  `zone` text NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `division` text NOT NULL,
  `zone` text NOT NULL,
  `phvalue` float NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph`
--

INSERT INTO `ph` (`division`, `zone`, `phvalue`, `time`) VALUES
('', 'zone1', 2.5, '2016-06-06'),
('', 'zone2', 3.4, '2016-06-07'),
('', 'zone3', 1.22, '2016-06-09'),
('', 'zone1', 1.2, '2015-06-01'),
('', 'zone2', 5.4, '2015-06-12'),
('', 'zone1', 4.5, '2014-06-01'),
('', 'zone1', 3.4, '2013-06-01'),
('', 'zone1', 3.4, '2012-06-01'),
('dhk', 'zone1', 2.3, '2016-06-28'),
('dhk', 'zone2', 3.3, '2016-06-28'),
('dhk', 'zone3', 4.3, '2016-06-28'),
('dhk', 'zone4', 5.3, '2016-06-28'),
('dhk', 'zone1', 2.5, '2016-05-28'),
('dhk', 'zone2', 3.5, '2016-05-28'),
('dhk', 'zone3', 4.5, '2016-05-28'),
('dhk', 'zone4', 5.5, '2016-05-28'),
('dhk', 'zone1', 2.7, '2016-04-28'),
('dhk', 'zone2', 3.7, '2016-04-28'),
('dhk', 'zone3', 4.7, '2016-04-28'),
('dhk', 'zone4', 5.7, '2016-04-28'),
('ctg', 'zone1', 2.2, '2016-06-28'),
('ctg', 'zone2', 3.2, '2016-06-28'),
('ctg', 'zone3', 4.2, '2016-06-28'),
('ctg', 'zone4', 5.2, '2016-06-28'),
('ctg', 'zone1', 2.5, '2016-05-28'),
('ctg', 'zone2', 3.5, '2016-05-28'),
('ctg', 'zone3', 4.5, '2016-05-28'),
('ctg', 'zone4', 5.5, '2016-05-28'),
('bsl', 'zone1', 4.5, '2016-01-04'),
('bsl', 'zone2', 3.9, '2016-01-01'),
('bsl', 'zone3', 6.4, '2016-01-01'),
('bsl', 'zone4', 6.7, '2016-01-15'),
('raj', 'zone1', 3.9, '2016-01-11'),
('raj', 'zone2', 7.2, '2016-01-15'),
('raj', 'zone3', 6.4, '2016-01-15'),
('raj', 'zone4', 3.9, '2016-01-30'),
('khl', 'zone1', 5, '2016-01-19'),
('khl', 'zone2', 4.9, '2016-01-31'),
('khl', 'zone3', 9.3, '2016-01-30'),
('khl', 'zone4', 8.6, '2016-02-13'),
('syl', 'zone1', 4.9, '2016-02-10'),
('syl', 'zone2', 6.2, '2016-02-05'),
('syl', 'zone3', 5.5, '2016-02-10'),
('syl', 'zone4', 7.5, '2016-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `table_excel`
--

CREATE TABLE `table_excel` (
  `division` text NOT NULL,
  `zone` text NOT NULL,
  `date` date NOT NULL,
  `M` float NOT NULL,
  `N` float NOT NULL,
  `K` float NOT NULL,
  `P` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_excel`
--

INSERT INTO `table_excel` (`division`, `zone`, `date`, `M`, `N`, `K`, `P`) VALUES
('Dhaka', 'zone1', '2016-03-03', 4, 3, 4, 1),
('Barishal', 'zone2', '2016-05-05', 5, 3, 4, 1),
('Barishal', 'zone1', '2016-09-09', 3, 4, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ph` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ph`, `date`) VALUES
(4, 3),
(9, 2),
(6, 3),
(7, 5),
(9, 7),
(9, 7),
(9, 7),
(9, 7),
(9, 7),
(9, 7),
(111, 778),
(111, 778),
(112, 77676);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `division` text NOT NULL,
  `zone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`division`, `zone`) VALUES
('dhk', 'zone1'),
('dhk', 'zone2'),
('dhk', 'zone3'),
('dhk', 'zone4'),
('ctg', 'zone1'),
('ctg', 'zone2'),
('ctg', 'zone3'),
('ctg', 'zone4'),
('raj', 'zone1'),
('raj', 'zone2'),
('raj', 'zone3'),
('raj', 'zone4'),
('bsl', 'zone1'),
('bsl', 'zone2'),
('bsl', 'zone3'),
('bsl', 'zone4'),
('khl', 'zone1'),
('khl', 'zone2'),
('khl', 'zone3'),
('khl', 'zone4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
