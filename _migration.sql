-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2022 at 07:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RoadCare`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientAuth`
--

CREATE TABLE `clientAuth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientAuth`
--

INSERT INTO `clientAuth` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', 'user@example.com', 'user'),
(2, 'user2', 'user2@example.com', 'user2');

-- --------------------------------------------------------

--
-- Table structure for table `districtRoads`
--

CREATE TABLE `districtRoads` (
  `roadName` varchar(50) NOT NULL,
  `roadLengthInKM` float NOT NULL,
  `roadWidth` float NOT NULL DEFAULT 12
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districtRoads`
--

INSERT INTO `districtRoads` (`roadName`, `roadLengthInKM`, `roadWidth`) VALUES
('district road 1', 50, 12),
('district road 2', 30, 12),
('district road 3', 60, 12),
('district road 4', 10, 12),
('district road 5', 80, 12);

-- --------------------------------------------------------

--
-- Table structure for table `moderatorLogin`
--

CREATE TABLE `moderatorLogin` (
  `moderatorId` int(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderatorLogin`
--

INSERT INTO `moderatorLogin` (`moderatorId`, `password`) VALUES
(100, '100');

-- --------------------------------------------------------

--
-- Table structure for table `stateHighway`
--

CREATE TABLE `stateHighway` (
  `stateRoad` varchar(30) NOT NULL,
  `lengthInKM` float NOT NULL,
  `roadWidthInMeter` float NOT NULL DEFAULT 12
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stateHighway`
--

INSERT INTO `stateHighway` (`stateRoad`, `lengthInKM`, `roadWidthInMeter`) VALUES
('state road 1', 50, 12),
('state road 2', 150, 12),
('state road 1', 50, 12),
('state road 3', 70, 12),
('state road 4', 100, 12),
('state road 5', 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `villageRoads`
--

CREATE TABLE `villageRoads` (
  `roadName` varchar(255) NOT NULL,
  `roadLengthInKM` float NOT NULL,
  `roadWidth` float NOT NULL DEFAULT 3.75
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `villageRoads`
--

INSERT INTO `villageRoads` (`roadName`, `roadLengthInKM`, `roadWidth`) VALUES
('village road 1', 2, 3.75),
('village road 2', 3, 3.75),
('village road 3', 1, 3.75),
('village road 4', 5, 3.75),
('village road 5', 2, 3.75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientAuth`
--
ALTER TABLE `clientAuth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `moderatorLogin`
--
ALTER TABLE `moderatorLogin`
  ADD PRIMARY KEY (`moderatorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientAuth`
--
ALTER TABLE `clientAuth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;