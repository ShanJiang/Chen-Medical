-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2015 at 03:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chenmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientcomments`
--

CREATE TABLE IF NOT EXISTS `patientcomments` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `PatientID` int(11) DEFAULT NULL,
  `comments` text,
  PRIMARY KEY (`CommentID`),
  KEY `PatientID` (`PatientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `patientcomments`
--

INSERT INTO `patientcomments` (`CommentID`, `PatientID`, `comments`) VALUES
(1, 88, 'THIS IS A NEW COMMENT'),
(2, 1, 'comments on june'),
(3, 1, 'comments on june'),
(4, 23, 'good comments testing'),
(5, 1, 'good '),
(6, 1, 'good '),
(7, 1, 'great job'),
(8, 1, 'great job'),
(9, 1, 'great'),
(10, 1, 'this is a testing comments'),
(11, 33, 'add a comment'),
(12, 2, 'this is a testing comments'),
(13, 2, 'have a nice day');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patientcomments`
--
ALTER TABLE `patientcomments`
  ADD CONSTRAINT `patientcomments_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `patient` (`PatientID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
