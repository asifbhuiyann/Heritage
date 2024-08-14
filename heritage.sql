-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 06:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heritage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`full_name`, `email`, `pw`) VALUES
('Asif Bhuiyan', 'asif.bhuiyan3330@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `naam` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `feedback` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`naam`, `email`, `feedback`) VALUES
('Asif', 'asif.bhuiyan3330@gmail.com', 'Nice One');

-- --------------------------------------------------------

--
-- Table structure for table `property_bid`
--

CREATE TABLE `property_bid` (
  `username` varchar(255) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `bid_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_bid`
--

INSERT INTO `property_bid` (`username`, `property_name`, `bid_amount`) VALUES
('asifbhuiyan', 'flat', '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `img` varchar(1000) DEFAULT NULL,
  `property_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `source_link` varchar(1000) DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `locationn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `pw` varchar(255) NOT NULL,
  `reset_key` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `mobile_number`, `sex`, `email`, `birth_date`, `pw`, `reset_key`) VALUES
('Rana', 'Mia', '01857630342', 'male', 'ranan@gmail.com', '2024-08-04', 'asdfghjkl', NULL),
('Asif', 'Bhuiyan', '01632734014', 'male', 'asif.bhuiyan3330@gmail.com', '2024-08-01', '12345678', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
