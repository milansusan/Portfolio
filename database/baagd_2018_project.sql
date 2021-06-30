-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 01:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baagd_2018_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_180021021518`
--

CREATE TABLE `stu_180021021518` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `textarea` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_180021021518`
--

INSERT INTO `stu_180021021518` (`id`, `name`, `email`, `mobile`, `textarea`) VALUES
(1, 'milan', 'milan@gmail.com', '7894561230', 'helloo'),
(2, 'joe', 'joe@gmail.com', '1234567890', 'hello hiii'),
(3, 'alex', 'alex@gmail.com', '7894561235', 'helllo how are yoy'),
(4, 'omiska', 'omi@gmail.com', '7889456122', 'hiii'),
(5, 'joe', 'joe@gmail.com', '7451236982', 'helloooo'),
(6, 'jack', 'jak@gmail.com', '7851236954', 'hello hii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_180021021518`
--
ALTER TABLE `stu_180021021518`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_180021021518`
--
ALTER TABLE `stu_180021021518`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
