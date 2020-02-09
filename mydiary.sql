-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 08:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `entry_ID` int(11) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `entry` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`entry_ID`, `userID`, `entry`, `entry_time`) VALUES
(3, 'tommyshelby', 'Dear Diary,\r\nWe did it boysssss', '2020-02-08 01:16:40'),
(7, 'geo', 'Dear Diary,\r\nToday was a good day', '2020-02-08 21:38:26'),
(8, 'geo', 'Dear Diary,\r\nToday was a bad day', '2020-02-08 21:40:38'),
(10, 'tommyshelby', 'Dear Diary,\r\nIntelligence is a very valuable thing, innit, my friend? And usually it comes far too ******* late.\r\nMen don’t have the strategic intelligence to conduct a war between families. Men are less good at keeping secrets out of their lies.', '2020-02-08 23:23:01'),
(11, 'tommyshelby', 'Dear Diary,\r\nMay you be in heaven a full half hour before the devil knows you’re dead.\r\nWhisky’s good proofing water. Tells you who’s real and who isn’t.\r\n', '2020-02-08 23:25:00'),
(12, 'arthurshelby', 'Dear Diary,\r\nBy order of the Peaky Blinders.', '2020-02-08 23:25:25'),
(13, 'tonymontana', 'Dear Diary,\r\nI always tell the truth. Even when I lie.\r\nIn this country, you gotta make the money first. Then when you get the money, you get the power. Then when you get the power, then you get the women.', '2020-02-08 23:46:25'),
(16, 'jonsnow', 'Dear Diary, \r\nWhen enough people make false promises, words stop meaning anything.', '2020-02-08 23:54:31'),
(17, 'theweeknd', 'Dear Diary,\r\nHappiness exists when you don’t know a thing.\r\nToo many people spend money they haven’t earned to buy things they don’t want to impress people they don’t like.', '2020-02-09 00:06:29'),
(18, 'leodicaprio', 'Dear Diary,\r\nFinally got that Oscar', '2020-02-09 15:41:53'),
(28, 'leodicaprio', 'Dear Diary, Ive been planted here to be a vessel for acting... Thats why Im really taking any part, regardless of how complicated its going to be.\r\n', '2020-02-09 16:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `userID` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`userID`, `password`, `email`) VALUES
('', '', ''),
('arthurshelby', '123', 'peakyblinders@gmail.com'),
('geo', '123', 'mrgeooo14@gmail.com'),
('jonsnow', 'wall', 'gameofthrones@gmail.com'),
('leodicaprio', 'oscar', 'leodicaprio@gmail.com'),
('theweeknd', 'xo', 'xoxo@gmail.com'),
('tommyshelby', '123', 'peakyblinders@gmail.com'),
('tonymontana', 'cuba', 'scarface@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`entry_ID`,`userID`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `entry_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
