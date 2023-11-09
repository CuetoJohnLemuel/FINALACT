-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2023 at 01:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
-- Table structure for table `empregister`
--

CREATE TABLE `empregister` (
  `emp_id` int NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `empprofile` text NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactnum` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Pending',
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `empregister`
--

INSERT INTO `empregister` (`emp_id`, `employer_id`, `empprofile`, `company_name`, `company_address`, `full_name`, `address`, `contactnum`, `email`, `password`, `status`, `position`) VALUES
(1, 'hj', '62-624857_ipad-pro-transparent-background-hd-png-download.png', 'hj@gmail.com', 'hj', 'hj', 'hj', 0, 'hj', 'hj', '', ''),
(2, '24rew', '387561768_345590794628071_3738077200085909809_n.jpg', 'Mariwana Company', 'Parang Proper Calapan City', 'John Lemuel Cueto', 'ASDFG', 64645544, 'jjjj@gmail.com', '1', '', ''),
(3, '123', '387561768_345590794628071_3738077200085909809_n.jpg', 'Rainbow Company', 'Naujan', 'Derrick Ramsey', 'Naujan', 235235, 'lemuelcueto21@gmail.com', '12', 'Pending', 'Guard');

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

CREATE TABLE `postjob` (
  `vacancy_id` int NOT NULL,
  `employer_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `occupation_title` varchar(100) NOT NULL,
  `required_no` int NOT NULL,
  `location` varchar(150) NOT NULL,
  `qualification` varchar(1000) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `prefered` varchar(20) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Pending',
  `dateposted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(255) NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `per` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`vacancy_id`, `employer_name`, `company_name`, `occupation_title`, `required_no`, `location`, `qualification`, `job_description`, `prefered`, `status`, `dateposted`, `category`, `salary`, `per`) VALUES
(15, '', 'cvdd', 'fdgdf', 34, 'rtwrt', 'ertetr', 'ere', 'Male', 'Cancelled', '2023-11-06 22:53:11', 'DesignArtAndMultimedia', '3453', 'Month'),
(16, '', 'gbkj', 'jhgh', 78, 'kjhhhk', 'hkg', 'kjh', 'Female', 'Pending', '2023-11-07 11:24:36', 'AcountingFinance', '876', 'Week');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empregister`
--
ALTER TABLE `empregister`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empregister`
--
ALTER TABLE `empregister`
  MODIFY `emp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `vacancy_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
