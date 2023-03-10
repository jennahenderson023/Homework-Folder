-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2023 at 04:20 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `username`, `role`) VALUES
(1, 'bsmith', 'admin'),
(3, 'pjones', 'user'),
(4, 'pjones', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `forename` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `forename`, `surname`, `password`) VALUES
(1232981, 'hendejen001', 'Jenna', 'Henderson', 'helloworld123'),
(1232982, 'LittleWomen', 'Greta', 'Gerwig', 'ilovemovies'),
(1232983, 'OnceUponATimeInHollywood', 'Quentin', 'Tarintino', 'ihatemovies'),
(1232984, 'GoodFellas', 'Martin', 'Scorsese', 'actionpacked'),
(1232985, 'Avatar', 'James', 'Cameron', 'lovemykids'),
(1232988, 'profoh', 'Chong', 'Oh', 'isiscool'),
(1232990, 'bsmith', 'Bill', 'Smith', 'mysecret'),
(1232992, 'pjones', 'Pauline', 'Jones', 'acrobat'),
(1232993, 'The Shining', 'Stanley', 'Kubrick', 'sscary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1232994;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
