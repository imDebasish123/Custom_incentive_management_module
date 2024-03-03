-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 05:01 PM
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
-- Database: `hyscalar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `dob`, `gender`, `usertype`) VALUES
(2, 'admin', 'admin@gmail.com', '111', '2024-02-06', 'Male', 'admin'),
(3, 'admin1', 'admin1@gmail.com', '1111', '2024-02-07', 'Male', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Tahid Mohammed', 'tahidmohammed123@gmail.com', 'ghghg'),
(2, 'Tahid Mohammed', 'tahidmohammed123@gmail.com', 'hiii'),
(3, 'Tahid Mohammed', 'tahidmohammed123@gmail.com', 'svsvsv'),
(4, 'Tahid Mohammed', 'tahidmohammed123@gmail.com', 'i want to login but its not working'),
(0, 'user1', 'user1@gmail.com', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `email`, `message`) VALUES
(1, '$name', '$email', '$message'),
(2, 'Tahid Mohammed', 'tahidmohammed123@gmail.com', 'hiii'),
(3, 'Tahid Mohammed', 'tahidmohammed123@gmail.com', 'hiii'),
(4, 'Tahid Mohammed', 'tahidmohammed123@gmail.com', 'i want help....'),
(0, 'user1', 'user1@gmail.com', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_pkg`
--

CREATE TABLE `holiday_pkg` (
  `holiday_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Holiday_name` varchar(30) NOT NULL,
  `Duration` int(10) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Location` text NOT NULL,
  `Amenities` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holiday_pkg`
--

INSERT INTO `holiday_pkg` (`holiday_id`, `username`, `Holiday_name`, `Duration`, `Destination`, `Location`, `Amenities`) VALUES
(4, 'user5', 'Abu Dhabi', 2, 'America', 'Africa', '222');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `target_sales` int(11) NOT NULL,
  `inc_per` float NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `hol_pck_elg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `dob`, `gender`, `usertype`, `target_sales`, `inc_per`, `bonus`, `hol_pck_elg`) VALUES
(1, 'user1', 'user1@gmail.com', '111', '2024-02-07', 'Male', 'user', 66, 66, '22', '6'),
(2, 'user2', 'user2@gmail.com', '111', '2024-02-17', 'Male', 'user', 0, 0, 'RTRTRT', 'RTRT'),
(3, 'user3', 'user3@gmail.com', '111', '2024-02-06', 'Male', 'user', 20000, 3, 'None', 'No'),
(4, 'user4', 'user4@gmail.com', '111', '2024-02-13', 'Male', 'user', 10000, 2, 'None', 'No'),
(5, 'user5', 'user5@gmail.com', '111', '2024-02-13', 'Male', 'user', 50000, 5, 'None', 'Yes'),
(6, 'user6', 'user6@gmail.com', '111', '2024-02-19', 'Male', 'user', 60000, 5, 'None', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_pkg`
--
ALTER TABLE `holiday_pkg`
  ADD PRIMARY KEY (`holiday_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `holiday_pkg`
--
ALTER TABLE `holiday_pkg`
  MODIFY `holiday_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
