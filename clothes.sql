-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 08:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `Id` int(11) UNSIGNED NOT NULL,
  `CollectionType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL DEFAULT '',
  `Type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL DEFAULT '',
  `Price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL DEFAULT '',
  `Number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`Id`, `CollectionType`, `Type`, `Name`, `Price`, `Number`) VALUES
(1, 'Summer', 'shirts', 'flower shirts', '100', '3'),
(2, 'Summer', 'dress', 'pink dress', '200', '4'),
(3, 'Winter', 'trousers', 'winter trous', '400', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
