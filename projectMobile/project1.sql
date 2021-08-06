-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 12:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `hazard`
--

CREATE TABLE `hazard` (
  `id` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `dsc` varchar(250) NOT NULL,
  `lat` double(10,4) NOT NULL,
  `lng` double(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hazard`
--

INSERT INTO `hazard` (`id`, `hname`, `loc`, `dsc`, `lat`, `lng`) VALUES
(1, 'Car Accident', 'NKVE Highway', 'Kuala Lumpur', 3.1390, 101.6869),
(2, 'Car Stopped', 'Bukit Bintang ', 'Kuala Lumpur', 3.1468, 101.7113),
(3, 'Road Construction', 'Damansara', 'Selangor', 3.1694, 101.6087),
(4, 'Car Stopped', 'Federal Highway', 'Kuala Lumpur', 3.1523, 101.7178),
(5, 'Car Accident', 'Karak Highway', 'Pahang', 3.3690, 101.8560),
(6, 'Car Stopped', 'Klang', 'Selangor', 3.0360, 101.4360),
(7, 'Road Construction', 'Petaling Jaya', 'Selangor', 3.0950, 101.6324),
(8, 'Car Accident', 'Port Dickson', 'Negeri Sembilan', 2.5500, 101.8640),
(9, 'Car Stopped', 'Jalan Tunku', 'Kuala Lumpur', 3.1080, 101.5840),
(10, 'Road Construction', 'Austin Heights Water & Adventure Park', 'Johor', 1.5621, 103.7757),
(11, 'Road Construction', 'GeorgeTown', 'P.Pinang', 5.4040, 100.3190),
(12, 'Car Stopped', 'Bazaar Johor (Bazaar Karat)', 'Johor', 1.4582, 103.7641),
(13, 'Car Accident', 'Johor Premium Outlet (JPO)', 'Johor', 1.6037, 103.6217),
(14, 'Road Construction', 'Nasuha Herbs & Spice Farm', 'Johor', 2.1287, 102.7043),
(15, 'Car Stopped', 'Taman Buaya Teluk Sengat', 'Johor', 1.5651, 104.0264),
(16, 'Car Accident', 'Air Terjun Kota Tinggi', 'Johor', 1.8289, 103.8275),
(17, 'Road Construction', 'Kluang Coffee Powder Factory', 'Johor', 2.0220, 103.3247),
(18, 'Car Stopped', 'Danga Bay', 'Johor', 1.4774, 103.7238),
(19, 'Car Accident', 'Rock World', 'Johor', 1.5795, 103.7290),
(20, 'Road Construction', 'LOST in JB Escape Room', 'Johor', 1.5612, 103.7793),
(21, 'Car Stopped', 'Desaru Ostrich Farm', 'Johor', 1.3689, 104.2393),
(22, 'Road Construction', 'Angry Bird Activity Park', 'Johor', 1.4629, 103.7635),
(23, 'Car Accident', 'Puteri Harbour Indoor Theme Park', 'Johor', 1.4162, 103.6569),
(24, 'Road Construction', 'Hutan Bandar MBJB', 'Johor', 1.4827, 103.7447),
(25, 'Car Stopped', 'Taman Negara Pulau Kukup', 'Johor', 1.3272, 103.4343),
(26, 'Road Construction', 'Nanyang Fish Farm', 'Johor', 1.6978, 103.4888),
(27, 'Car Stopped', 'Laman Mahkota Istana Bukit Serene', 'Johor', 1.4804, 103.7226),
(28, 'Car Accident', 'Masjid Sultan Abu Bakar', 'Johor', 1.4572, 103.7513),
(29, 'Car Stopped', 'Taman Rekreasi Tanjung Emas', 'Johor', 2.0476, 102.5555),
(30, 'Car Accident', 'Taman Hutan Lagenda Gunung Ledang', 'Johor', 2.3417, 102.6173);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hazard`
--
ALTER TABLE `hazard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hazard`
--
ALTER TABLE `hazard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
