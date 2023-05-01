-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 04:50 PM
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
-- Table structure for table `pofoma1`
--

CREATE TABLE `pofoma1` (
  `pofoma1ID` int(6) UNSIGNED NOT NULL,
  `Dedutrustname` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90','91','92','93','94','95','96','97','98','99','100','101','102','103','104','105','106','107','108','109','110','111','112','113','114','115','116','117','118','119','120','121','122','123','124','125','126','127','128','129','130','131','132','133','134','135','136','137','138','139','140','141','142','143','144','145','146','147','148','149','150','151','152','153','154','155','156','157','158') NOT NULL,
  `educationalname` text NOT NULL,
  `educationaladdress` text NOT NULL,
  `location` int(11) NOT NULL,
  `educationalcontact` int(11) NOT NULL,
  `educationalmobile` int(11) NOT NULL,
  `educationalemail` int(11) NOT NULL,
  `presidentname` int(11) NOT NULL,
  `presidentcontact` int(11) NOT NULL,
  `Presidentmobile` int(11) NOT NULL,
  `presidentemail` int(11) NOT NULL,
  `secretaryname` int(11) NOT NULL,
  `secretarycontact` int(11) NOT NULL,
  `secretarymobile` int(11) NOT NULL,
  `secretaryemail` int(11) NOT NULL,
  `coordinatorname` int(11) NOT NULL,
  `coordinatorcontact` int(11) NOT NULL,
  `coordinatormobile` int(11) NOT NULL,
  `coordinatoremail` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pofoma1`
--

INSERT INTO `pofoma1` (`pofoma1ID`, `Dedutrustname`, `educationalname`, `educationaladdress`, `location`, `educationalcontact`, `educationalmobile`, `educationalemail`, `presidentname`, `presidentcontact`, `Presidentmobile`, `presidentemail`, `secretaryname`, `secretarycontact`, `secretarymobile`, `secretaryemail`, `coordinatorname`, `coordinatorcontact`, `coordinatormobile`, `coordinatoremail`, `date`) VALUES
(654978, '17', '', 'Sr. No54, Om Society, BT Kawade Rd, Near Adarsh High School, Pune -36', 0, 2147483647, 2147483647, 3783978, 0, 2147483647, 2147483647, 0, 0, 2147483647, 2147483647, 0, 0, 2147483647, 2147483647, 524, '2023-05-01 08:57:19'),
(654979, '26', '', 'Om society ,BT kawade road ,near dalvi Nagar. Pune-36', 0, 2147483647, 2147483647, 3783978, 0, 2147483647, 2147483647, 0, 0, 2147483647, 2147483647, 0, 0, 2147483647, 2147483647, 524, '2023-04-30 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `pofoma2`
--

CREATE TABLE `pofoma2` (
  `pofoma2ID` int(6) UNSIGNED NOT NULL,
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

INSERT INTO `pofoma2` (`pofoma2ID`, `schooljr`, `school`, `Instructionname`, `primaryname`, `adid`, `strength`, `teachingstaff`, `secondaryschool`, `adid2`, `secstrength`, `secteachingstaffsec`, `jrschool`, `adid3`, `jrstrength`, `jrteachingstaff`, `date`) VALUES
(1, 'aasfdgjhk', '', 'saxdcfrgbthnyjmuk,i', 'swsdefrgthyju', '', ' Array', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-30 18:30:00'),
(2, 'aasfdgjhk', '', 'qewarsdtgyu', 'ewrvwefvewf', '', ' Array', 0, 0, '', 0, 0, 0, '', 0, 0, '2023-04-30 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `pofoma3`
--

CREATE TABLE `pofoma3` (
  `pofoma3ID` int(6) UNSIGNED NOT NULL,
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

--
-- Dumping data for table `pofoma3`
--

INSERT INTO `pofoma3` (`pofoma3ID`, `computerlab`, `computerdetailsname`, `intenet`, `connectivity`, `electricity`, `upsbattery`, `upscapacity`, `compteachtable`, `copyoftimetable`, `yesno`, `compcourse`, `exampass`, `equivalentto`, `teacherisnotavailable`, `hallforcomputerlab`, `sizeofhall`, `hallsecured`, `date`) VALUES
(1, 'ytbhgvrf', ' iumyntbrvecd', 'iumyntbve', 'iuybtgvrf', 'imuyntbrvec', 'imuyntbrvfecd', ' 7iumynbtgrvfecd', 'muyntbrvcedwxs', 0x203130373930303335315f4578616d466f726d2e504446, '', '', '', 'ikmujnyhbtgvrfcdxs', ' 8ki7juyhtgrfceds', ' iumynbtgrvfecdxs', ' iumjynhtbgrvfcedxs', 'i,mujnyhbtgvfcdxs', '2023-05-01'),
(3, 'ujmynhtgrvfecdxws', ' i,kmujnyhbtgvfrdcs', 'ikumjynhbtgvrfcedxsa', 'ujmynhbgfvdc', 'umjynhtbgvrfcdxs', 'umjynhbgfvdc', ' oiumynbgrvfecdxws', 'iumynbtgrvfcedxsz', 0x20736161642e706466, '', '', '', 'oiumnybtvrcexw', ' 8ki7ujytbrvcedwxsqza', ' oiumynhbtgrvfcedxsza', ' i,umjynhbgfvdcsxaz', 'i,kumjynhbtgrvfcedxsz', '2023-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pofoma1`
--
ALTER TABLE `pofoma1`
  ADD PRIMARY KEY (`pofoma1ID`);

--
-- Indexes for table `pofoma2`
--
ALTER TABLE `pofoma2`
  ADD PRIMARY KEY (`pofoma2ID`);

--
-- Indexes for table `pofoma3`
--
ALTER TABLE `pofoma3`
  ADD PRIMARY KEY (`pofoma3ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pofoma1`
--
ALTER TABLE `pofoma1`
  MODIFY `pofoma1ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=654980;

--
-- AUTO_INCREMENT for table `pofoma2`
--
ALTER TABLE `pofoma2`
  MODIFY `pofoma2ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pofoma3`
--
ALTER TABLE `pofoma3`
  MODIFY `pofoma3ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
