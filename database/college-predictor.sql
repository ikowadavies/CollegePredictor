-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2019 at 08:23 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college-predictor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions_form`
--

DROP TABLE IF EXISTS `admissions_form`;
CREATE TABLE IF NOT EXISTS `admissions_form` (
  `email` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `marital_status` text NOT NULL,
  `gender` text NOT NULL,
  `dob` varchar(10) NOT NULL,
  `medical_record` varchar(100) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `id_no` varchar(20) NOT NULL,
  `pswd` varchar(200) NOT NULL,
  `intake` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clg_marks`
--

DROP TABLE IF EXISTS `clg_marks`;
CREATE TABLE IF NOT EXISTS `clg_marks` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(100) NOT NULL,
  `location` varchar(150) NOT NULL,
  `marks` int(3) NOT NULL,
  `description` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` int(14) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_marks`
--

INSERT INTO `clg_marks` (`cid`, `college_name`, `location`, `marks`, `description`, `website`, `phone`) VALUES
(1, 'The University of Zambia', 'Lusaka, Zambia', 6, 'The biggest University in Zambia offering undergraduate, postgraduate and doctoral degrees in diverse disciplines.', 'unza.zm', 978018154),
(2, 'Copperbelt University', 'Kitwe, Copperbelt', 10, '', '', 0),
(3, 'Mulungushi University', 'Kabwe, Central Province', 15, '', '', 0),
(4, 'University of Lusaka', 'Lusaka, Zambia', 20, '', '', 0),
(5, 'Information and Communication University', 'Lusaka, Zambia', 30, '', '', 0),
(6, 'Cavendish Unisersity', 'Lusaka, Zambia', 25, '', '', 0),
(7, 'ZCAS University', 'Lusaka, Zambia', 25, '', '', 0),
(8, 'Rusangu University', 'Monze, Southern Province', 30, '', '', 0),
(9, 'DMI-S. Eugene University', 'Lusaka, Zambia', 20, '', '', 0),
(10, 'Northrise Unviversity', 'Ndola, Copperbelt', 30, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

DROP TABLE IF EXISTS `login_form`;
CREATE TABLE IF NOT EXISTS `login_form` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`username`, `email`, `password`) VALUES
('dee', 'dee@hotmail.com', '912ec803b2ce49e4a541068d495ab570'),
('mary', 'k@hotmail.com', '8e80d2035142b70ec6083887e1815994'),
('csikasote', 'csikasote@gmail.com', '6b9b4dd5bb8eca166335240ca045569e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
