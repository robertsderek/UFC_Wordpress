-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2023 at 01:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UFC_Wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `Records`
--

CREATE TABLE `Records` (
  `Fighter1` varchar(25) NOT NULL,
  `Fighter2` varchar(25) NOT NULL,
  `Winner` varchar(25) NOT NULL,
  `Event` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Method` varchar(25) NOT NULL,
  `Round` int(11) NOT NULL,
  `Time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Records`
--

INSERT INTO `Records` (`Fighter1`, `Fighter2`, `Winner`, `Event`, `Date`, `Method`, `Round`, `Time`) VALUES
('Conor McGregor', 'Dustin Poirier', 'Conor McGregor', 'UFC 178: Johnson vs Cariaso', '2014-09-27', 'KO/TKO', 1, '1:46'),
('Conor McGregor', 'Dustin Poirier', 'Dustin Poirier', 'UFC 257: Poirier vs. McGregor 2', '2021-01-23', 'KO/TKO', 2, '2:32'),
('Conor McGregor', 'Dustin Poirier', 'Dustin Poirier', 'UFC 264: Poirier vs. McGregor 3', '2021-07-10', 'KO/TKO', 1, '5:00'),
('Conor McGregor', 'Khabib Nurmagomedov', 'Khabib Nurmagomedov', 'UFC 229: Khabib vs. McGregor', '2018-10-06', 'SUB', 4, '3:03'),
('Dustin Poirier', 'Justin Gaethje', 'Dustin Poirier', 'UFC Fight Night: Poirier vs. Gaethje', '2018-04-14', 'KO/TKO', 4, '0:33'),
('Khabib Nurmagomedov', 'Dustin Poirier', 'Khabib Nurmagomedov', 'UFC 242: Khabib vs. Poirier', '2019-09-07', 'SUB', 3, '2:06'),
('Khabib Nurmagomedov', 'Justin Gaethje', 'Khabib Nurmagomedov', 'UFC 254: Khabib vs. Gaethje', '2020-10-24', 'SUB', 2, '1:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Records`
--
ALTER TABLE `Records`
  ADD PRIMARY KEY (`Fighter1`,`Fighter2`,`Date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
