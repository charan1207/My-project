-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 05:55 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyertable`
--

CREATE TABLE `buyertable` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `Pan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `wallet` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyertable`
--

INSERT INTO `buyertable` (`firstname`, `lastname`, `Pan`, `email`, `password`, `phone`, `address`, `wallet`) VALUES
('Koteswara charan teja', 'Ayodhya', 'abcdf1234d', 'akcharanteja@gmail.com', '15501a1207*', 1, '9177262334', 3500),
('Ayodhya koteswara', 'teja', 'abcdf1234d', 'pawan@gmail.com', '15501a1207*', 1, '9177262334', 0),
('koteswara', 'charan', 'abcdf1234g', 'aravind@gmail.com', '15501a1207*', 0, '1234567891', 0),
('', '', '', 'aravind@gmail.com', '', 0, '', 0),
('', 'Ayodhya', '', 'ak@gmail.com', '1-23,Near Sai Public School', 0, '15501a1207*', 3500),
('', 'rao', '', 'srinivasa@gmail.com', 'kollipra', 0, '15501a1207*', 3500),
('', 'nagarjuna', '', 'nag@gmail.comm', 'pranki', 0, '15501a1207*', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `sellertable`
--

CREATE TABLE `sellertable` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `Pan` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Adress` text NOT NULL,
  `Phone number` int(10) NOT NULL,
  `storename` varchar(255) NOT NULL,
  `wallet` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellertable`
--

INSERT INTO `sellertable` (`firstname`, `lastname`, `Pan`, `email`, `password`, `Adress`, `Phone number`, `storename`, `wallet`) VALUES
('Ayodhya koteswara', 'teja', 'abcdf1234d', 'akcharanteja@gmail.c', '15501a1207*', 'charan', 12345678, 'andhra', 0),
('lalu', 'krishore', 'abcdf1234f', 'mlk@gmai.lcom', '15501a1207*', 'prakasam', 2147483647, 'kanuru', 0),
('abhi', 'bunnty', 'abcdf1234d', 'abhi@gmail.com', '15501a1207*', 'vijawada', 2147483647, 'tadigadapa', 0),
('gk', 'booby', 'abcdf1234f', 'gk@gmail.com', '15501a1207*', 'avinigada', 2147483647, 'poranki', 0),
('', 'ch', '', 'rahul@gmail.com', '15501a1207*', 'tadepalli', 0, '', 0),
('', 'arjun', '', 'malli@gmail.com', '15501a1207*', 'kanuru', 0, '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
