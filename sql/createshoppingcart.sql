-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2023 at 04:31 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20577656_shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoppingCart`
--

CREATE TABLE `shoppingCart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `AddOnPrice` double(10,2) DEFAULT NULL,
  `totalPrice` double(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingCart`
--

INSERT INTO `shoppingCart` (`id`, `name`, `image`, `price`, `AddOnPrice`, `totalPrice`) VALUES
(1, 'Lavender Honey Tea Latte', '/images/lavenderlatte.png', 4.45, NULL, NULL),
(2, 'Coconut Macaroons', '/images/cocomac.png', 3.50, NULL, NULL),
(3, 'Cinnamon Tea Latte', '/images/cinnlatte.png', 4.00, NULL, NULL),
(4, 'Chocolate Croissant', '/images/chococross.png', 5.25, NULL, NULL),
(5, 'Baklava', '/images/baklava.png', 4, NULL, NULL),
(6, 'Kunafeh', '/images/kunafeh.png', 4, NULL, NULL),
(7, 'Tea', '/images/transparent-green-tea.png', 0.5, NULL, NULL),
(8, 'Turkish tea', '/images/turkish-tea.png', 0.5, NULL, NULL);





--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoppingCart`
--
ALTER TABLE `shoppingCart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoppingCart`
--
ALTER TABLE `shoppingCart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;