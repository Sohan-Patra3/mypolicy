-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 02:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypolicy`
--

-- --------------------------------------------------------

--
-- Table structure for table `memb_mst`
--

CREATE TABLE `memb_mst` (
  `sno` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phoneno` bigint(50) NOT NULL,
  `altphoneno` bigint(50) NOT NULL,
  `maritalstatus` varchar(30) NOT NULL,
  `doa` date NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memb_mst`
--

INSERT INTO `memb_mst` (`sno`, `firstname`, `lastname`, `email`, `address`, `dob`, `gender`, `phoneno`, `altphoneno`, `maritalstatus`, `doa`, `date`) VALUES
(24, 'rohan', 'patra', 'sp3@gmail.com', 'bbsr', '2024-02-09', 'male', 8328944766, 0, 'married', '2024-02-22', '2024-02-20 15:46:19'),
(25, 'milan', 'patra', 'sp3@gmail.com', 'bbsr', '2024-02-10', 'male', 8328944766, 0, 'married', '2024-02-22', '2024-02-20 15:46:40'),
(30, 'sohan', 'patra', 'sp3@gmail.com2', 'bbsr', '2024-02-02', 'male', 8328944766, 0, 'unmarried', '0000-00-00', '2024-02-20 18:44:54'),
(31, 'rohan', 'patra', 'sp3@gmail.com', 'bbsr', '2024-01-30', 'male', 3346547578, 0, 'unmarried', '0000-00-00', '2024-02-20 18:45:14'),
(33, 'sohan patra', '', 'sohanpatra3@gmail.com', 'bbsr', '2024-01-31', 'male', 8732676789, 0, 'unmarried', '0000-00-00', '2024-02-21 11:41:33'),
(34, 'sohan patra1', '', 'sohanpatra3@gmail.com', 'bbsr', '2024-02-10', 'male', 8563455679, 0, 'married', '2024-02-20', '2024-02-21 11:59:51'),
(35, 'sohan patra2', '', 'sp3@gmail.com', 'bbsr', '2024-02-11', 'male', 3455689864, 0, 'unmarried', '0000-00-00', '2024-02-21 12:00:11'),
(36, 'Soumya', '', 'sp3@gmail.com', 'bbsr', '2024-02-22', 'male', 0, 0, 'married', '2024-02-22', '2024-02-22 15:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `plc_mst`
--

CREATE TABLE `plc_mst` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `policyNumber` int(30) NOT NULL,
  `policyDate` date NOT NULL,
  `policyAmount` int(30) NOT NULL,
  `policyMaturityDate` date NOT NULL,
  `policyTerm` varchar(30) NOT NULL,
  `policyPremium` int(30) NOT NULL,
  `premiumTime` varchar(10) NOT NULL,
  `nomineeName` varchar(30) NOT NULL,
  `nomineeRelation` varchar(30) NOT NULL,
  `nomineeDob` date NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plc_mst`
--

INSERT INTO `plc_mst` (`sno`, `name`, `policyNumber`, `policyDate`, `policyAmount`, `policyMaturityDate`, `policyTerm`, `policyPremium`, `premiumTime`, `nomineeName`, `nomineeRelation`, `nomineeDob`, `date`) VALUES
(1, '33-sohan patra', 123456789, '2024-02-01', 10000, '2027-07-07', '3 year', 1000, 'monthly', 'milan', 'son', '2024-02-02', '2024-02-21 16:41:51'),
(3, '30-sohan', 2147483647, '2024-02-02', 500000, '2028-11-22', '4 year', 2000, 'monthly', 'milan', 'son', '2024-02-23', '2024-02-21 18:19:05'),
(4, '24-rohan', 2147483647, '2024-02-08', 1000000, '2030-06-20', '6 year', 10000, 'monthly', 'milan', 'son', '2024-02-29', '2024-02-21 18:22:06'),
(5, '31-rohan', 3456, '0000-00-00', 0, '0000-00-00', '', 0, '', '', '', '0000-00-00', '2024-02-22 12:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_mst`
--

CREATE TABLE `user_mst` (
  `sno` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `time_stamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_mst`
--

INSERT INTO `user_mst` (`sno`, `username`, `password`, `time_stamp`) VALUES
(1, 'sohan', '12345', '2024-02-13 11:35:34'),
(2, 'milan', '12345', '2024-02-22 13:54:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memb_mst`
--
ALTER TABLE `memb_mst`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `plc_mst`
--
ALTER TABLE `plc_mst`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_mst`
--
ALTER TABLE `user_mst`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memb_mst`
--
ALTER TABLE `memb_mst`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `plc_mst`
--
ALTER TABLE `plc_mst`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_mst`
--
ALTER TABLE `user_mst`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
