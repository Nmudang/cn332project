-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 03:55 PM
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
-- Database: `user_db`
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
  `Number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL DEFAULT '',
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`Id`, `CollectionType`, `Type`, `Name`, `Price`, `Number`, `product_image`) VALUES
(1, 'Summer', 'shirts', 'flower', '799.00', '2', 'summershirt.jpg'),
(2, 'Summer', 'dress', 'sun', '200.00', '1', 'summerdress.jpg'),
(3, 'Summer', 'trousers', 'pink', '199.00', '3', 'summertrouser.jpg'),
(4, 'Winter', 'shirts', 'last', '399.00', '4', 'wintershirt.jpg'),
(5, 'Winter', 'dress', 'with you', '849.00', '5', 'winterdress.jpg'),
(6, 'Winter', 'trousers', 'pat', '299.00', '2', 'wintertrouser.jpg'),
(7, 'Winter', 'shirts', 'snow', '309.00', '1', 'wintershirt2.jpg'),
(8, 'Winter', 'dress', 'cold', '749.00', '6', 'winterdress1.jpg'),
(9, 'Winter', 'trousers', 'hug', '289.00', '8', 'wintertrouser1.jpg'),
(10, 'Summer', 'shirts', 'love', '149.00', '10', 'summershirt2.jpg'),
(11, 'Summer', 'dress', 'sun', '349.00', '2', 'summerdress1.jpg'),
(12, 'Summer', 'trousers', 'easy', '299.00', '9', 'summertrouser1.jpg'),
(13, 'Summer', 'shirts', 'rainbow', '449.00', '2', 'summershirt3.jpg'),
(14, 'Summer', 'dress', 'cutecute', '649.00', '3', 'summerdress2.jpg'),
(15, 'Summer', 'trousers', 'kaki', '299.00', '4', 'summertrouser3.jpg'),
(16, 'Winter', 'shirts', 'you', '399.00', '5', 'wintershirt3.jpg'),
(17, 'Winter', 'dress', 'work', '449.00', '7', 'winterdress2.jpg');

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
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
