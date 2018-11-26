-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 05:56 PM
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
-- Database: `foodadda`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit_store`
--

CREATE TABLE `fruit_store` (
  `seller_email` varchar(40) NOT NULL,
  `fruit_name` varchar(40) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_store`
--

INSERT INTO `fruit_store` (`seller_email`, `fruit_name`, `quantity`, `price`) VALUES
('abhi@gmail.com', 'apple', 20, 100),
('abhi@gmail.com', 'grapes', 20, 100),
('gk@gmail.com', 'gova', 20, 200),
('gk@gmail.com', 'mango', 20, 200),
('gk@gmail.com', 'picha fruit', 20, 200),
('malli@gmail.com', 'papaya', 50, 250),
('mlk@gmai.lcom', 'apple', 50, 300),
('nag@gmail.comm', 'apple', 50, 500),
('pawan@gmail.com', 'cherry', 50, 50),
('pawan@gmail.com', 'hello1', 55, 20),
('pawan@gmail.com', 'karrifruit', 50, 290),
('pawan@gmail.com', 'pichafruit', 10, 20),
('rahul@gmail.com', 'apple', 20, 100),
('ram@gmail.com', 'fruit2', 400, 300),
('ram@gmail.com', 'fruit3', 500, 156),
('ram@gmail.com', 'fruit4', 100, 12),
('ram@gmail.com', 'fruit5', 500, 200),
('ram@gmail.com', 'fruit6', 10, 1200),
('ram@gmail.com', 'fruit8', 100, 20),
('ram@gmail.com', 'fruit9', 1000, 11),
('ram@gmail.coma', 'sapota', 1000, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit_store`
--
ALTER TABLE `fruit_store`
  ADD PRIMARY KEY (`seller_email`,`fruit_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
