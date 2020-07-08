-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 08:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu_tb`
--

CREATE TABLE `menu_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `type` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_tb`
--

INSERT INTO `menu_tb` (`id`, `name`, `price`, `info`, `type`, `image`) VALUES
(2, 'Salmon Steack', '170', 'The Dish is very delicious. It enrich with all nutrients&nbsp;', 'Lunch', 'breakfast-7.jpg'),
(3, 'Chopsey', '80 ', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dish is very delicious. It enrich with all nutrients</span>', 'Breakfast', 'breakfast-4.jpg'),
(4, 'Morning Pastha', '80', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dish is very delicious. It enrich with all nutrients</span>', 'Breakfast', 'breakfast-5.jpg'),
(5, 'Oats', '80', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dish is very delicious. It enrich with all nutrients</span>', 'Breakfast', 'breakfast-8.jpg'),
(6, 'Beef Steack', '280', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dish is very delicious. It enrich with all nutrients</span>', 'Lunch', 'lunch-1.jpg'),
(7, 'Chicken Soup', '180', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dish is very delicious. It enrich with all nutrients</span>', 'Lunch', 'lunch-3.jpg'),
(8, 'Noodles', '120', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dish is very delicious. It enrich with all nutrients</span>', 'Dinner', 'dinner-2.jpg'),
(9, 'Bread With Egg', '150', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dish is very delicious. It enrich with all nutrients</span>', 'Dinner', 'dinner-6.jpg'),
(10, 'Pastha With Salad', '100', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dish is very delicious. It enrich with all nutrients</span>', 'Dinner', 'dinner-3.jpg'),
(11, 'Cheese Cack', '249', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dessert is very delicious. It enrich with all nutrients</span>', 'Desserts', 'dessert-3.jpg'),
(12, 'Ice Cream', '80', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dessert is very delicious. It enrich with all nutrients</span>', 'Desserts', 'dessert-4.jpg'),
(13, 'Falooda', '149', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Dessert is very delicious. It enrich with all nutrients</span>', 'Desserts', 'dessert-2.jpg'),
(15, 'Orange Juice', '80', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Drink is very delicious. It enrich with all nutrients</span>', 'Drinks', 'drink-11.jpg'),
(16, 'LIme Juice', '50', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Drink is very delicious. It enrich with all nutrients</span>', 'Drinks', 'drink-2.jpg'),
(17, 'Grape Juice', '80', '<span style=\"color: rgb(55, 58, 60); background-color: rgba(0, 0, 0, 0.05);\">The Drink is very delicious. It enrich with all nutrients</span>', 'Drinks', 'drink-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_tb`
--

CREATE TABLE `reservation_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `datex` varchar(100) NOT NULL,
  `seats` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_tb`
--

INSERT INTO `reservation_tb` (`id`, `name`, `email`, `mobile`, `datex`, `seats`, `time`) VALUES
(5, 'Ami', '9497883962', 'dsdsd', '4/13/2020', '3', '6:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `table_tb`
--

CREATE TABLE `table_tb` (
  `id` int(11) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_tb`
--

INSERT INTO `table_tb` (`id`, `table_name`, `status`) VALUES
(1, '', 'Booked'),
(2, '', 'Booked'),
(3, '', 'Booked'),
(4, '', 'Available'),
(5, '', 'Available'),
(6, '', 'Available'),
(7, '', 'Available'),
(8, '', 'Available'),
(9, '', 'Available'),
(10, '', 'Available'),
(11, '', 'Available'),
(12, '', 'Available'),
(13, '', 'Available'),
(14, '', 'Available'),
(15, '', 'Available'),
(16, '', 'Available'),
(17, '', 'Available'),
(18, '', 'Available'),
(19, '', 'Available'),
(20, '', 'Available'),
(21, '', 'Available'),
(22, '', 'Available'),
(23, '', 'Available'),
(24, '', 'Available'),
(25, '', 'Available'),
(26, '', 'Available'),
(27, '', 'Available'),
(28, '', 'Available'),
(29, '', 'Available'),
(30, '', 'Available'),
(31, '', 'Available'),
(32, '', 'Available'),
(33, '', 'Available'),
(34, '', 'Available'),
(35, '', 'Available'),
(36, '', 'Available'),
(37, '', 'Available'),
(38, '', 'Available'),
(39, '', 'Available'),
(40, '', 'Available'),
(41, '', 'Available'),
(42, '', 'Available'),
(43, '', 'Available'),
(44, '', 'Available'),
(45, '', 'Available'),
(46, '', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `test_tb`
--

CREATE TABLE `test_tb` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_tb`
--

CREATE TABLE `time_tb` (
  `id` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_tb`
--

INSERT INTO `time_tb` (`id`, `time`, `status`) VALUES
(2, '6:00 PM', 'Available'),
(3, '6:30 PM', 'Available'),
(4, '7:00 PM', 'Available'),
(5, '7:30 PM', 'Available'),
(6, '8:00 PM', 'Available'),
(7, '8:30 PM', 'Available'),
(8, '9:00 PM', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `name`, `mobile`, `place`, `email`, `password`) VALUES
(1, 'dsd', 'sds', 'sdd', 'sdsd', 'sdsd'),
(2, 'Vaishnav', '8451621321', 'Kasarkod', 'v@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_tb`
--
ALTER TABLE `menu_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_tb`
--
ALTER TABLE `reservation_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tb`
--
ALTER TABLE `table_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_tb`
--
ALTER TABLE `test_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_tb`
--
ALTER TABLE `time_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_tb`
--
ALTER TABLE `menu_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservation_tb`
--
ALTER TABLE `reservation_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_tb`
--
ALTER TABLE `table_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `test_tb`
--
ALTER TABLE `test_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `time_tb`
--
ALTER TABLE `time_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
