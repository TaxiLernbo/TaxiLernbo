-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2021 at 01:33 PM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxilernbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingform`
--

CREATE TABLE `bookingform` (
  `id` int(11) NOT NULL,
  `startPos` varchar(255) NOT NULL,
  `endPos` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookingform`
--

INSERT INTO `bookingform` (`id`, `startPos`, `endPos`, `date`, `time`, `description`) VALUES
(14, 'Lernbo', 'BorÃ¥s', '2021-03-27', '14:15:00', 'AMOGUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingform`
--
ALTER TABLE `bookingform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingform`
--
ALTER TABLE `bookingform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
