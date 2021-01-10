-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 08:56 PM
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
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `form for adults`
--

CREATE TABLE `form for adults` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `state` tinyint(30) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `category` tinyint(20) NOT NULL,
  `age` int(3) NOT NULL,
  `Income` tinyint(30) NOT NULL,
  `gender` bit(20) NOT NULL,
  `other` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form for adults`
--

INSERT INTO `form for adults` (`ID`, `name`, `state`, `occupation`, `category`, `age`, `Income`, `gender`, `other`) VALUES
(1, 'aa', 0, 'cc', 0, 2, 3, b'00000000000000000000', 'hh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form for adults`
--
ALTER TABLE `form for adults`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form for adults`
--
ALTER TABLE `form for adults`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
