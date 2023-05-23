-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 08:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `establishment`
--

CREATE TABLE `establishment` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `es_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `auth_person` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `establishment`
--

INSERT INTO `establishment` (`id`, `code`, `es_name`, `contact_number`, `address`, `email_address`, `auth_person`, `position`, `status`) VALUES
(1, 'ES-001', 'First Valley Banks', '090909', 'Test 1, Test City', 'test@gmail.com', 'Testing Test', 'Tester', ''),
(34, 'ES-002', 'Second Valley Bank', '090909', 'Test 1, Test City', 'test@gmail.com', 'Testing Test', 'Manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(255) NOT NULL,
  `es_id` int(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `local_permanent` int(255) DEFAULT NULL,
  `local_probationary` int(255) DEFAULT NULL,
  `local_contractual` int(255) DEFAULT NULL,
  `local_project_based` int(255) DEFAULT NULL,
  `local_seasonal` int(255) DEFAULT NULL,
  `local_jo` int(255) DEFAULT NULL,
  `local_mgt` int(255) DEFAULT NULL,
  `outside_permanent` int(255) DEFAULT NULL,
  `outside_probationary` int(255) DEFAULT NULL,
  `outside_contractual` int(255) DEFAULT NULL,
  `outside_project_based` int(255) DEFAULT NULL,
  `outside_seasonal` int(255) DEFAULT NULL,
  `outside_jo` int(255) DEFAULT NULL,
  `outside_mgt` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `es_id`, `year`, `local_permanent`, `local_probationary`, `local_contractual`, `local_project_based`, `local_seasonal`, `local_jo`, `local_mgt`, `outside_permanent`, `outside_probationary`, `outside_contractual`, `outside_project_based`, `outside_seasonal`, `outside_jo`, `outside_mgt`) VALUES
(4, 0, '2023', 20, NULL, 0, 0, 0, 5, 0, 10, NULL, 0, 0, 0, 0, 0),
(5, 0, '2024', 5, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0),
(6, 0, '2025', 2, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0),
(7, 0, '2026', 1, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0),
(8, 0, '2027', 1, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0),
(9, 0, '2028', 1, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(225) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `middle_name`, `last_name`, `username`, `password`) VALUES
(2, 'Admin', 'Test', 'Trator', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `establishment`
--
ALTER TABLE `establishment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `establishment`
--
ALTER TABLE `establishment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
