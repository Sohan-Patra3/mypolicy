-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 01:15 PM
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
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phoneno` bigint(50) NOT NULL,
  `maritalstatus` varchar(30) NOT NULL,
  `doa` date NOT NULL,
  `id` int(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memb_mst`
--

INSERT INTO `memb_mst` (`sno`, `firstname`, `email`, `address`, `dob`, `gender`, `phoneno`, `maritalstatus`, `doa`, `id`, `date`) VALUES
(82, 'Sohan Patraa', 'sohanpatra3@gmail.com', 'bbsr', '2024-02-07', 'male', 8328944766, 'unmarried', '0000-00-00', 1, '2024-02-24 17:21:03'),
(89, 'milan', 'sp3@gmail.com', 'bbsr', '1998-07-09', 'male', 8432235645, 'married', '2024-01-30', 2, '2024-02-26 14:23:22');

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
  `id` int(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plc_mst`
--

INSERT INTO `plc_mst` (`sno`, `name`, `policyNumber`, `policyDate`, `policyAmount`, `policyMaturityDate`, `policyTerm`, `policyPremium`, `premiumTime`, `nomineeName`, `nomineeRelation`, `nomineeDob`, `id`, `date`) VALUES
(9, '82-sohan', 123456789, '2024-02-24', 100000, '2028-02-24', '4 year', 1000, 'monthly', 'milan', 'son', '2016-07-07', 1, '2024-02-24 17:36:26'),
(11, '88-sohan', 987654321, '2024-02-26', 500000, '2030-02-26', '6 year', 3000, 'monthly', 'milan', 'son', '2014-07-26', 1, '2024-02-26 12:01:01'),
(13, '82-sohan patra', 2147483647, '2024-02-26', 500000, '2030-02-26', '6 year', 3000, 'monthly', 'milan', 'son', '2018-07-26', 1, '2024-02-26 12:45:32'),
(14, '89-milan', 1234456778, '2024-02-26', 10000, '2028-02-26', '4 year', 1000, 'monthly', 'milan', 'daughter', '2023-12-08', 2, '2024-02-26 14:24:27'),
(16, '88-sohan', 2147483647, '2023-03-27', 900000, '2028-03-27', '5 years', 5000, 'monthly', 'milan', 'son', '2024-02-01', 1, '2024-02-27 10:37:46');

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
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `plc_mst`
--
ALTER TABLE `plc_mst`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_mst`
--
ALTER TABLE `user_mst`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
