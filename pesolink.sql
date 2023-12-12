-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2023 at 12:06 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesolink`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

DROP TABLE IF EXISTS `applicant`;
CREATE TABLE IF NOT EXISTS `applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `applicant_id`, `full_name`, `address`, `contact`, `email`, `location`) VALUES
(1, '4534dfged', 'John Jefferson Manalo', 'Calsedeco', '09126789164', 'johnjeff@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `empregister`
--

DROP TABLE IF EXISTS `empregister`;
CREATE TABLE IF NOT EXISTS `empregister` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` varchar(100) NOT NULL,
  `empprofile` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `position` varchar(255) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empregister`
--

INSERT INTO `empregister` (`emp_id`, `employer_id`, `empprofile`, `company_name`, `company_address`, `full_name`, `address`, `contact_number`, `email`, `password`, `status`, `position`) VALUES
(1, '43545654', '', 'Shein', 'San Vicente East, Calapan City', 'John Lemuel Cueto', 'Parang Calapan City', '09115729162', 'lem@gmail.com', 'lem', 'Decline', 'Manager'),
(2, 'uyfjg', '', 'jhg', 'jgh', 'uygh', 'nhmb', '8687', 'mbk@gmail.com', '76', 'Decline', 'tryrt');

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

DROP TABLE IF EXISTS `postjob`;
CREATE TABLE IF NOT EXISTS `postjob` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `occupation_title` varchar(255) NOT NULL,
  `required_no` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `qualification` varchar(1000) NOT NULL,
  `job_description` varchar(500) NOT NULL,
  `prefered` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `dateposted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(255) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `per` varchar(50) NOT NULL,
  PRIMARY KEY (`vacancy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`vacancy_id`, `company_name`, `occupation_title`, `required_no`, `location`, `qualification`, `job_description`, `prefered`, `status`, `dateposted`, `category`, `salary`, `per`) VALUES
(4, 'Cueto Company', 'Manager', 3, 'Masipit, Calapan City', 'Must be high school graduate', 'Responsible for costumer', 'Both', 'Approved', '2023-11-25 23:11:08', 'Restaurant/FoodService', '34342.00', 'Day');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
