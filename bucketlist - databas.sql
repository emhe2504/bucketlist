-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 19 nov 2026 kl 15:58
-- Serverversion: 10.4.32-MariaDB
-- PHP-version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `bucketlist`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `bucketlist`
--

CREATE TABLE `bucketlist` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `priority` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumpning av Data i tabell `bucketlist`
--

INSERT INTO `bucketlist` (`id`, `name`, `description`, `priority`, `created_at`) VALUES
(2, 'Resa runt jorden', 'Besöka minst 50 länder', 2, '2026-11-19 09:19:34'),
(8, 'Hjälpa hemlösa katter', 'Adoptera och hjälpa hemlösa katter', 1, '2026-11-19 09:36:41'),
(9, 'Skriva en barnbok', 'Skriva en egen barnbok och publicera', 1, '2026-11-19 12:05:43'),
(10, 'Utveckla min matlagning', 'Gå en matlagningskurs', 3, '2026-11-19 12:06:43');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `bucketlist`
--
ALTER TABLE `bucketlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `bucketlist`
--
ALTER TABLE `bucketlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
