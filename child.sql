-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 03:10 AM
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
-- Database: `income`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` int(3) NOT NULL,
  `class` int(2) NOT NULL,
  `category` text NOT NULL,
  `gender` text NOT NULL,
  `other` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`ID`, `name`, `age`, `class`, `category`, `gender`, `other`) VALUES
(1, 'rohan', 3, 3, 'gen', 'male', 'jl'),
(2, 'rohan', 2, 4, 'gen', 'male', ''),
(3, 'meera', 5, 1, 'gen', 'female', ''),
(4, 'meera', 4, 1, 'obc', 'female', ''),
(5, 'meera', 4, 1, 'gen', 'female', ''),
(6, 'rohan', 5, 4, 'obc', 'male', ''),
(7, 'rohan', 3, 4, 'grn', 'male', ''),
(8, '', 4, 0, '', '', ''),
(9, 'meera', 4, 1, 'sc', 'female', ''),
(10, 'meera', 8, 4, 'gen', 'female', ''),
(11, 'meera', 8, 4, 'gen', 'female', ''),
(12, 'meera', 8, 4, 'gen', 'female', ''),
(13, 'meera', 8, 4, 'gen', 'female', ''),
(14, 'meera', 8, 4, 'gen', 'female', ''),
(15, 'meera', 15, 4, 'gen', 'female', ''),
(16, '', 4, 0, '', '', ''),
(17, '', 4, 0, '', '', ''),
(18, '', 4, 0, '', '', ''),
(19, '', 15, 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
