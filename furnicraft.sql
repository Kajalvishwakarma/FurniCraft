-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 09:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnicraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mrp` varchar(100) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `mrp`, `sp`, `img`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `query`) VALUES
(6, 'Kajal', 'Vishwakarma', 'bekajal1993@gmail.com', 'Testing mail'),
(7, 'Kajal', 'Vishwakarma', 'bekajal1993@gmail.com', 'Testing mail'),
(10, 'kajal', 'kajal', 'kajal123@gmail.com', 'scdsc'),
(11, 'kajal', 'Vishwakarma', 'bekajal1993@gmail.com', 'i want this product'),
(13, 'Kajal', 'Vishwakarma', 'bekajal1993@gmail.com', 'safsdg'),
(14, 'jfdsjlkf', 'fergtr', 'kajal123@gmail.com', 'sasg'),
(15, 'Kajal', 'vishwakarma', 'bekajal1993@gmail.com', 'fsdgfsg'),
(16, 'Kajal', 'adg', 'kajal123@gmail.com', 'ADAS'),
(18, 'Kajal', 'Vishwakarma', 'bekajal1993@gmail.com', 'ksjdlkas'),
(19, 'Kajal', 'Vishwakarma', 'kajal123@gmail.com', 'sfdg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mrp` varchar(20) NOT NULL,
  `sp` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `mrp`, `sp`, `category`, `image`) VALUES
(6, 'Table', '234', '100', 'table', 'post-1.jpg'),
(10, 'Modern Table', '2343', '1212', 'table', 'table4.jpg'),
(11, 'Modern Table', '2343', '1212', 'table', 'table4.jpg'),
(12, 'table', '565', '434', 'table', 'table3.webp'),
(13, 'table', '556', '435', 'table', 'table1.jpg'),
(14, 'table', '6556', '5456', 'table', 'table4.jpg'),
(15, 'table', '576', '457', 'table', 'table5.webp'),
(16, 'chair', '7667', '545', 'chair', 'sofa.jpg'),
(17, 'chair', '767', '456', 'chair', 'sofa.jpg'),
(18, 'shelves', '55767', '35435', 'shelves', 'books8.jpg'),
(19, 'shelves', '765767', '654654', 'shelves', 'books4.jpg'),
(20, 'shelves', '6786', '5646', 'shelves', 'books7.jpg'),
(21, 'table', '5000', '4500', 'table', 'table1.jpg'),
(25, 'Table', '7655', '675', 'table', 'chair4.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`) VALUES
(2, 'kajal', '9876543210', 'kajal123@gmail.com', 'kajal'),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, 'laksh', '7385675376', 'laksh@gmail.com', '123'),
(6, 'sofuuuu', '37854231', 'adxgh@gmail.com', 'ccss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
