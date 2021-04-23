-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 21 apr 2021 kl 08:28
-- Serverversion: 10.4.12-MariaDB
-- PHP-version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `taxilernbo`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `bookingform`
--

CREATE TABLE `bookingform` (
  `id` int(11) NOT NULL,
  `startPos` varchar(255) NOT NULL,
  `endPos` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `music` varchar(20) NOT NULL,
  `conversation` varchar(20) NOT NULL,
  `name` varchar(747) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `bookingform`
--

INSERT INTO `bookingform` (`id`, `startPos`, `endPos`, `date`, `time`, `music`, `conversation`, `name`, `phone`) VALUES
(14, 'Lernbo', 'BorÃ¥s', '2021-03-27', '14:15:00', '', '', '', ''),
(1001, 'Ludvika', 'BorlÃ¤nge', '2021-04-15', '00:01:00', '', '', 'Daniel Eriksson', '0739495425'),
(1003, 'gyygyg', 'gyuygyugyu', '2024-11-05', '16:33:00', '', '', 'gyyuyug ygyugy', '+46708530802'),
(1004, 'ääääääääääääääåöåö', 'äöåöåöåöäåö', '2021-04-15', '15:31:00', '', '', 'åöåöäöä öåäö', '+46708530802'),
(1005, 'Don\'t know', 'In the middle of nowhere', '2021-05-07', '12:33:00', 'Klassisk', 'konversation', 'Greger Gregersson', '+46708530802');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `bookingform`
--
ALTER TABLE `bookingform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `bookingform`
--
ALTER TABLE `bookingform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
