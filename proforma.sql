-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 07:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `pofoma2`
--

CREATE TABLE `pofoma2` (
  `schooljr` text NOT NULL,
  `school` enum('primary','high','jr') NOT NULL,
  `Instructionname` text NOT NULL,
  `primaryname` text NOT NULL,
  `adid` enum('aided','unaided') NOT NULL,
  `strength` text NOT NULL,
  `teachingstaff` int(11) NOT NULL,
  `secondaryschool` int(11) NOT NULL,
  `adid2` enum('aided','unaided') NOT NULL,
  `secstrength` int(11) NOT NULL,
  `secteachingstaffsec` int(11) NOT NULL,
  `jrschool` int(11) NOT NULL,
  `adid3` enum('aided','unaided') NOT NULL,
  `jrstrength` int(11) NOT NULL,
  `jrteachingstaff` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pofoma2`
--

INSERT INTO `pofoma2` (`schooljr`, `school`, `Instructionname`, `primaryname`, `adid`, `strength`, `teachingstaff`, `secondaryschool`, `adid2`, `secstrength`, `secteachingstaffsec`, `jrschool`, `adid3`, `jrstrength`, `jrteachingstaff`, `date`) VALUES
('dfgh', '', 'dsgfhm', 'dfgh', '', ' web devloper resume saikishor 1.pdf', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-26 18:30:00'),
('sfdfdvc', '', 'wefrgthdymu,io/[', 'zsdsvfgxnvbk.j', '', ' web devloper resume saikishor 1.pdf', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-26 18:30:00'),
('sfdfdvc', '', 'wefrgthdymu,io/[', 'zsdsvfgxnvbk.j', '', ' web devloper resume saikishor 1.pdf', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-26 18:30:00'),
('sfdfdvc', '', 'wefrgthdymu,io/[', 'zsdsvfgxnvbk.j', '', ' web devloper resume saikishor 1.pdf', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-26 18:30:00'),
('asdfghj', '', 'sdfghj', 'sdzfghjf', '', ' web devloper resume saikishor 1 (2).pdf', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-26 18:30:00'),
('cvbhjnkm', '', '', '', '', ' ', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-26 18:30:00'),
('awesgdfbc', '', '', '', '', ' ', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-26 18:30:00'),
('aesgdfhfg', '', '', '', '', ' ', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-26 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `pofoma3`
--

CREATE TABLE `pofoma3` (
  `computerlab` text NOT NULL,
  `computerdetailsname` text NOT NULL,
  `intenet` text NOT NULL,
  `connectivity` text NOT NULL,
  `electricity` text NOT NULL,
  `upsbattery` text NOT NULL,
  `upscapacity` text NOT NULL,
  `compteachtable` text NOT NULL,
  `copyoftimetable` blob NOT NULL,
  `yesno` enum('yes','no') NOT NULL,
  `compcourse` enum('mscit','ccc') NOT NULL,
  `exampass` enum('dca','bca','bsc') NOT NULL,
  `equivalentto` text NOT NULL,
  `teacherisnotavailable` text NOT NULL,
  `hallforcomputerlab` text NOT NULL,
  `sizeofhall` text NOT NULL,
  `hallsecured` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
