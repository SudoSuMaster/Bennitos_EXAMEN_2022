-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 12:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `vliegtickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `informatie`
--

CREATE TABLE `informatie` (
  `id3` int(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `aantal` int(255) NOT NULL,
  `premium` varchar(255) NOT NULL,
  `id1` int(255) NOT NULL,
  `id2` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informatie`
--

INSERT INTO `informatie` (`id3`, `startdate`, `enddate`, `aantal`, `premium`, `id1`, `id2`) VALUES
(25, '2022-04-21', '2022-04-22', 3, 'ja', 1, 1),
(26, '2022-04-13', '2022-04-28', 2, 'ja', 1, 1),
(27, '2022-04-13', '2022-04-22', 2, 'ja', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `landen`
--

CREATE TABLE `landen` (
  `id1` int(255) NOT NULL,
  `land` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landen`
--

INSERT INTO `landen` (`id1`, `land`) VALUES
(1, 'Belgie'),
(2, 'Duitsland'),
(3, 'Spanje');

-- --------------------------------------------------------

--
-- Table structure for table `vliegvelden`
--

CREATE TABLE `vliegvelden` (
  `id2` int(255) NOT NULL,
  `id1` int(255) NOT NULL,
  `vliegvelden` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vliegvelden`
--

INSERT INTO `vliegvelden` (`id2`, `id1`, `vliegvelden`) VALUES
(1, 1, 'Brussel'),
(2, 1, 'Antwerpen'),
(3, 2, 'Berlijn'),
(4, 2, 'Frankfurt'),
(5, 3, 'Barcelona'),
(6, 3, 'Madrid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informatie`
--
ALTER TABLE `informatie`
  ADD PRIMARY KEY (`id3`),
  ADD KEY `id1` (`id1`),
  ADD KEY `id2` (`id2`);

--
-- Indexes for table `landen`
--
ALTER TABLE `landen`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `vliegvelden`
--
ALTER TABLE `vliegvelden`
  ADD PRIMARY KEY (`id2`),
  ADD KEY `id1` (`id1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informatie`
--
ALTER TABLE `informatie`
  MODIFY `id3` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `landen`
--
ALTER TABLE `landen`
  MODIFY `id1` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vliegvelden`
--
ALTER TABLE `vliegvelden`
  MODIFY `id2` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `informatie`
--
ALTER TABLE `informatie`
  ADD CONSTRAINT `informatie_ibfk_1` FOREIGN KEY (`id1`) REFERENCES `landen` (`id1`),
  ADD CONSTRAINT `informatie_ibfk_2` FOREIGN KEY (`id2`) REFERENCES `vliegvelden` (`id2`);

--
-- Constraints for table `vliegvelden`
--
ALTER TABLE `vliegvelden`
  ADD CONSTRAINT `vliegvelden_ibfk_1` FOREIGN KEY (`id1`) REFERENCES `landen` (`id1`);