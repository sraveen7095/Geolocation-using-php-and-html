-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 05:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini10`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tours`
--

CREATE TABLE `tbl_tours` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `tid` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tours`
--

INSERT INTO `tbl_tours` (`id`, `name`, `image`, `price`, `tid`) VALUES
(1, 'TELANGANA', 'TS01.jpg', 10000.00, 'TS01'),
(17, 'BAGA BEACH', 'GO2.jpg', 125.00, 'GO2'),
(4, 'ADILABAD', 'TS1.jpeg', 10000.00, 'TS1'),
(5, 'KARIMNAGAR', 'TS2.jpg', 2990.00, 'TS2'),
(6, 'HYDERABAD', 'TS3.jpg', 12500.00, 'TS3'),
(7, 'WARANGAL', 'TS4.jpg', 10023.00, 'TS4'),
(8, 'KERALA', 'KA01.jpg', 29900.00, 'KS01'),
(16, 'CALANGUTE BEACH', 'GO1.jpg', 299.00, 'GO1'),
(15, 'GOA', 'GO02.jpg', 10000.00, 'GO01'),
(11, 'KOCHI', 'KA1.jpg', 29009.00, 'KA1'),
(12, 'MUNNAR', 'KA2.jpg', 12005.00, 'KA2'),
(13, 'ALLEPPEY', 'KA3.jpg', 11000.00, 'KA3'),
(14, 'THEKKADY', 'KA4.jpeg', 11299.00, 'KA4'),
(18, 'GRAND ISLAND', 'GO3.jpg', 100.00, 'GO3'),
(19, 'TITOS LANE', 'GO4.jpg', 29009.00, 'GO4'),
(20, 'TIRUPATHI', 'AN1.jpg', 29900.00, 'AN1'),
(21, 'VIZAG BEACH', 'AN2.jpg', 12500.00, 'AN2'),
(22, 'ARAKU VALLEY', 'AN3.jpg', 12005.00, 'AN3'),
(23, 'PAPIKONDALU', 'AN4.jpg', 12529.00, 'AN4'),
(24, 'AHMEDABAD', 'GU1.jpg', 12554.00, 'GU1'),
(25, 'SUN TEMPLE', 'GU2.jpg', 12774.00, 'GU2'),
(26, 'RANI KI VAV', 'GU3.jpeg', 11524.00, 'GU3'),
(27, 'KUTCH REGION', 'GU4.jpg', 10524.00, 'GU4'),
(28, 'KULLU', 'HM1.jpg', 10214.00, 'HM1'),
(29, 'MANALI', 'HM2.jpg', 19874.00, 'HM2'),
(30, 'SHIMLA', 'HM3.jpg', 14244.00, 'HM3'),
(31, 'CHAMBA', 'HM4.jpg', 4584.00, 'HM4'),
(32, 'RAMESHWARAM', 'TM1.jpg', 15247.00, 'TM1'),
(33, 'CHENNAI', 'TM2.jpeg', 16517.00, 'TM2'),
(34, 'MAHABALI', 'TM3.jpg', 18797.00, 'TM3'),
(35, 'MADURAI', 'TM4.jpg', 15667.00, 'TM4'),
(36, 'srav', 'sk1', 20000.00, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
