-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 12:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proforma`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `form1ID` int(11) NOT NULL,
  `educationalname` text NOT NULL,
  `educationaladdress` varchar(70) NOT NULL,
  `location` varchar(70) NOT NULL,
  `educationalcontact` int(10) NOT NULL,
  `educationalmobile` int(10) NOT NULL,
  `educationalemail` varchar(30) NOT NULL,
  `presidentname` text NOT NULL,
  `presidentcontact` int(10) NOT NULL,
  `Presidentmobile` int(10) NOT NULL,
  `presidentemail` varchar(30) NOT NULL,
  `secretaryname` text NOT NULL,
  `secretarycontact` int(10) NOT NULL,
  `secretarymobile` int(10) NOT NULL,
  `secretaryemail` varchar(30) NOT NULL,
  `coordinatorname` text NOT NULL,
  `coordinatorcontact` int(10) NOT NULL,
  `coordinatormobile` int(10) NOT NULL,
  `coordinatoremail` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`form1ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

