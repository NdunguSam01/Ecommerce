-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 02:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userName`, `password`) VALUES
('Muigai', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `isDeleted` bit(1) NOT NULL DEFAULT b'0',
  `DeletedDate` varchar(255) DEFAULT NULL,
  `RestoredDate` varchar(255) DEFAULT NULL,
  `deletedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `image`, `description`, `price`, `category`, `isDeleted`, `DeletedDate`, `RestoredDate`, `deletedBy`) VALUES
(1, 'cart.png', 'aaaa', 9000, 'ps3controller', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(2, 'cart.png', 'bbbb', 9000, 'ps3console', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(3, 'cart.png', 'cccc', 9000, 'ps3game', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(4, 'cart.png', 'dddd', 9000, 'ps4controller', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(5, 'cart.png', 'eeee', 9000, 'ps4console', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(6, 'cart.png', 'ffff', 9000, 'ps5controller', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(7, 'cart.png', 'gggg', 9000, 'ps4game', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(8, 'cart.png', 'hhhh', 9000, 'ps5console', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(9, 'cart.png', 'iiii', 9000, 'ps5game', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(10, 'cart.png', 'jjjj', 9000, 'seriesscontroller', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(11, 'cart.png', 'kkkk', 9000, 'seriessconsole', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(12, 'cart.png', 'llll', 9000, 'seriessgame', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(13, 'cart.png', 'mmmm', 9000, 'seriessbcontroller', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(14, 'cart.png', 'nnnn', 9000, 'seriessbconsole', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(15, 'cart.png', 'oooo', 9000, 'seriessbgame', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(16, 'cart.png', 'pppp', 9000, 'seriesxcontroller', b'0', '31-03-2022', '31-03-2022', 'NULL'),
(17, 'cart.png', 'qqqq', 9000, 'seriesxconsole', b'0', NULL, NULL, NULL),
(18, 'cart.png', 'rrrr', 9000, 'seriesxgame', b'0', NULL, NULL, NULL),
(19, 'cart.png', 'ssss', 9000, 'ndsc', b'0', NULL, NULL, NULL),
(20, 'cart.png', 'tttt', 9000, 'ndsa', b'0', NULL, NULL, NULL),
(21, 'cart.png', 'uuuu', 9000, 'n3dsa', b'0', NULL, NULL, NULL),
(22, 'cart.png', 'vvvv', 9000, 'n3dsc', b'0', NULL, NULL, NULL),
(23, 'cart.png', 'wwww', 9000, 'n3dsg', b'0', NULL, NULL, NULL),
(24, 'cart.png', 'xxxx', 9000, 'wiia', b'0', NULL, NULL, NULL),
(25, 'cart.png', 'yyyy', 9000, 'wiic', b'0', NULL, NULL, NULL),
(26, 'cart.png', 'zzzz', 9000, 'wiig', b'0', NULL, NULL, NULL),
(27, 'cart.png', 'a11', 9000, 'pcg', b'0', NULL, NULL, NULL),
(28, 'cart.png', 'jnknknl', 9000, 'ps3console', b'0', NULL, NULL, NULL),
(29, 'cart.png', 'jnesjn', 9000, 'ps3console', b'0', NULL, NULL, NULL),
(30, 'cart.png', 'asimi x i', 9000, 'ps3console', b'0', NULL, NULL, NULL),
(31, 'cart.png', 'abcd', 9000, 'ps3console', b'0', NULL, NULL, NULL),
(32, 'cart.png', 'efgh', 9000, 'ps3controller', b'0', NULL, NULL, NULL),
(33, 'cart.png', 'ijkl', 9000, 'ps3controller', b'0', NULL, NULL, NULL),
(34, 'cart.png', 'mnop', 9000, 'ps3controller', b'0', NULL, NULL, NULL),
(35, 'cart.png', 'ljdfbvuibciubc', 90000, 'ps4controller', b'0', NULL, NULL, NULL),
(36, 'cart.png', 'ljbwnopwjsnocw', 0, 'ps4console', b'0', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
