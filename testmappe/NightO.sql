-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28. Sep, 2020 17:15 PM
-- Tjener-versjon: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NightO`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Events`
--

CREATE TABLE `Events` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `organiser_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `organiser_id` int(10) NOT NULL,
  `event_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `event_status` int(10) NOT NULL,
  `event_coordinates` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dataark for tabell `Events`
--

INSERT INTO `Events` (`event_id`, `event_name`, `organiser_name`, `organiser_id`, `event_date`, `event_status`, `event_coordinates`) VALUES
(2, 'a', 'a', 3, '', 11, 'x=\"10.80001\" y=\"60.02154\" unit=\"WGS-84\"'),
(4, 'apeløp', 'apeklubb', 99, '', 11, ''),
(7, 'j', 'k', 5, '', 11, 'x=\"10.80001\" y=\"60.02154\" unit=\"WGS-84\"'),
(12, 'test1', 'testklubb', 111, '', 12, ''),
(123, 'Harry Lagert 1', 'nydalen', 22, '', 11, ''),
(231, 'Harry Lagert 2', 'nydalen', 3, '', 11, ''),
(1234, 'test4', 'ape', 1111, '', 11, '');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Results`
--

CREATE TABLE `Results` (
  `person_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `time` time NOT NULL,
  `result_position` int(11) NOT NULL,
  `competitor_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `points` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Runners`
--

CREATE TABLE `Runners` (
  `person_id` int(10) NOT NULL,
  `given_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `family_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `organisation_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `organisation_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dataark for tabell `Runners`
--

INSERT INTO `Runners` (`person_id`, `given_name`, `family_name`, `birth_date`, `sex`, `organisation_id`, `organisation_name`) VALUES
(1, 'Mathias', 'Benjaminsen', '1992', 'm', '9999', 'lillomarka'),
(10, 'Karl', 'Fremstad', '1996', 'm', '283', 'tyrving'),
(11, 'Håkon', 'Westergård', '1992', 'm', '11', 'tyrving'),
(21, 'herre', 'loper', '', 'm', '3', 'asker'),
(50, 'Test', 'Person', '2000', 'w', '0', 'noname'),
(55, 'andrine', 'benjaminsen', '', 'w', '1116', 'lillo'),
(222, 'dame', 'loper', '', 'w', '2', 'askersk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `Runners`
--
ALTER TABLE `Runners`
  ADD PRIMARY KEY (`person_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
