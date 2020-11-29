-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 05:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `food`, `address`, `age`, `email`, `password`) VALUES
(1, 'kailash', 'Non-veg', 'RZ-121,FIRST FLOOR,Q-BLOCK EXTENSION,UTTAM VIHAR,UTTAM NAGAR,NEW DELHI-110059', 23, 'kailashchandra2896@gmail.com', 'kailash'),
(2, 'kaka', 'Veg', 'new delhi', 25, 'kaka@gmail.com', 'kakakaka');

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE `rest` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rest`
--

INSERT INTO `rest` (`id`, `name`, `designation`, `department`, `age`, `email`, `password`) VALUES
(1, 'aadhish sethi', 'Chef', 'Executive kitchen', 26, 'aadhishsethi5@gmail.com', 'aadhish');

-- --------------------------------------------------------

--
-- Table structure for table `veg`
--

CREATE TABLE `veg` (
  `code` int(255) NOT NULL,
  `dishes` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `restaurant` varchar(300) NOT NULL,
  `status` varchar(255) NOT NULL,
  `rate` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veg`
--

INSERT INTO `veg` (`code`, `dishes`, `food`, `restaurant`, `status`, `rate`) VALUES
(1, 'Sabji roti', 'Veg', 'Kailash da dhaba', 'Available', 100),
(2, 'Kadhai chicken', 'Non-veg', 'Kailash da dhabha', 'Available', 250),
(3, 'Chhole bhature', 'Veg', 'Kailash da dhaba', 'Available', 60),
(4, 'Paneer', 'Veg', 'Kaka restaurant', 'Available', 60),
(5, 'Chicken tikka', 'Non-veg', 'Kailash da dhaba', 'Available', 260),
(6, 'Chicken chowmin', 'Non-veg', 'Kailash da dhaba', 'Available', 120),
(7, 'butter chicken', 'Non-veg', 'Kaka', 'Available', 260);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veg`
--
ALTER TABLE `veg`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rest`
--
ALTER TABLE `rest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
