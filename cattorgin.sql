-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2016 at 08:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cattorgin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cause_info`
--

CREATE TABLE IF NOT EXISTS `cause_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cause_name` varchar(200) NOT NULL,
  `cause_val` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE IF NOT EXISTS `contributions` (
  `name` varchar(200) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `amount` double NOT NULL,
  `cause` varchar(100) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`name`, `email_address`, `address`, `amount`, `cause`, `id`, `timestamp`, `date`, `status`) VALUES
('Rupesh Jain', 'rupeshkumar.rj@gmail.com', 'RR Nagar Bangalore', 1000, 'TorchDonationActivity', 1, '2016-09-28 17:43:39', '0000-00-00', 'approved'),
('Rupesh Jain', 'rupeshkumar.rj@gmail.com', 'RR Nagar Bangalore', 1000, 'MedicalCamp', 2, '2016-10-01 09:46:49', '2016-09-02', 'rejected'),
('Rupesh Jain', 'rupeshkumar.rj@gmail.com', 'RR Nagar Bangalore', 1000, 'MedicalCamp', 3, '2016-10-01 09:48:10', '2016-09-02', 'approved'),
('Rupesh Jain', 'rupeshkumar.rj@gmail.com', 'RR Nagar Bangalore', 1000, 'MedicalCamp', 4, '2016-10-01 09:49:04', '2015-02-02', NULL),
('Rupesh Jain', 'rupeshkumar.rj@gmail.com', 'RR Nagar Bangalore', 1000, 'TorchDonationActivity', 5, '2016-10-01 09:56:02', '2016-01-01', NULL),
('Rupesh Jain', 'rupeshkumar.rj@gmail.com', 'RR Nagar Bangalore', 1000, 'TorchDonationActivity', 6, '2016-10-01 09:56:14', '2016-01-01', NULL),
('Rupesh Jain', 'rupeshkumar.rj@gmail.com', 'RR Nagar Bangalore', 1000, 'GASStoveDonationtoNagarholeTigerReserve', 7, '2016-10-01 09:57:25', '2016-08-12', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
