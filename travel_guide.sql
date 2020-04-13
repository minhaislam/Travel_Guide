-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 05:08 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_info`
--

CREATE TABLE `add_info` (
  `id` int(5) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `placename` varchar(255) NOT NULL,
  `cost` int(5) NOT NULL,
  `travelmedium` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `scout_name` varchar(255) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_info`
--

INSERT INTO `add_info` (`id`, `country`, `city`, `placename`, `cost`, `travelmedium`, `description`, `scout_name`, `admin_name`) VALUES
(1, 'Bangladesh', 'Dhaka', 'Cox\'s Bazar', 7000, 'Bus/Plane/Private Car', 'One of the most beautiful place in the world', 'habib_rahi', 'minhaj_islam'),
(6, 'Bangladesh', 'Sunamgonj,Sylhet', 'tanguar haor', 5500, 'Bus/Train', 'A beautiful Lake', 'habib_rahi', NULL),
(7, 'Bangladesh', 'Bogura', 'Mohosthangor', 4000, 'Bus', 'One of the ancient place of bengali history', 'habib_rahi', 'minhaj_islam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `user_name`, `password`, `type`) VALUES
(5, 'habib@gmail.com', 'habib_rahi', '123456', 'scout'),
(6, 'ratul@gmail.com', 'ratul', '123456', 'user'),
(7, 'min@gmail.com', 'min_95', '123456', 'scout'),
(8, 'minhajislam95@gmail.com', 'minhaj_islam', '123123', 'admin'),
(9, 'Rashiq@gmail.com', 'rashiq', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `id` int(5) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `place_id` int(5) NOT NULL,
  `commentator_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`id`, `comment`, `place_id`, `commentator_id`) VALUES
(3, 'beautiful', 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_info`
--
ALTER TABLE `add_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_info`
--
ALTER TABLE `add_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
