-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 08:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminandinstructorlogin`
--

CREATE TABLE `adminandinstructorlogin` (
  `id` int(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminandinstructorlogin`
--

INSERT INTO `adminandinstructorlogin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345'),
(2, 'instructor@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `complainbox`
--

CREATE TABLE `complainbox` (
  `id` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainbox`
--

INSERT INTO `complainbox` (`id`, `email`, `subject`, `description`) VALUES
(6, 'wahidsadik38@gmail.com', 'instructor review', 'why do instuctor not connect me??');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `gender` varchar(50) NOT NULL,
  `age` varchar(200) NOT NULL,
  `height` varchar(500) NOT NULL,
  `weight` varchar(300) NOT NULL,
  `checkbox` varchar(300) NOT NULL,
  `history` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dietchart`
--

CREATE TABLE `dietchart` (
  `id` int(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mealday` varchar(300) NOT NULL,
  `saturday` varchar(300) NOT NULL,
  `sunday` varchar(300) NOT NULL,
  `monday` varchar(300) NOT NULL,
  `tuesday` varchar(300) NOT NULL,
  `wednesday` varchar(300) NOT NULL,
  `thursday` varchar(300) NOT NULL,
  `friday` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietchart`
--

INSERT INTO `dietchart` (`id`, `email`, `mealday`, `saturday`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
(6, 'harun@gmail.com', 'lanch', 'asda', 'asda', 'dadasd', 'asda', 'asd', 'asda', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `hiredinstructor`
--

CREATE TABLE `hiredinstructor` (
  `id` int(22) NOT NULL,
  `instructorid` varchar(300) NOT NULL,
  `clientemail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiredinstructor`
--

INSERT INTO `hiredinstructor` (`id`, `instructorid`, `clientemail`) VALUES
(6, '13', 'wahidsadik38@gmail.com'),
(7, '14', 'wahidsadik7375@gmail.com'),
(8, '14', 'harun@gmail.com'),
(9, '14', 'harun@gmail.com'),
(10, '13', 'harun@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `expericence` varchar(200) NOT NULL,
  `expertise` varchar(300) NOT NULL,
  `monthlyfee` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`name`, `email`, `phone`, `expericence`, `expertise`, `monthlyfee`, `description`, `id`) VALUES
('wahid sadik', 'sadik123@gmail.com', '0197522222', '4 Years ', 'Diet and Gym ', '2000', 'sei sei sei sei', 13),
('Harun', 'Harun123@gmail.com', '01975222222', '2 Years ', 'DIET', '3000', 'sei vai seii', 14);

-- --------------------------------------------------------

--
-- Table structure for table `showreply`
--

CREATE TABLE `showreply` (
  `id` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `created_date` varchar(300) NOT NULL,
  `reply` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showreply`
--

INSERT INTO `showreply` (`id`, `email`, `subject`, `created_date`, `reply`) VALUES
(4, 'wahidsadik38@gmail.com', 'instructor review', '2023-12-10', 'we are very sorry for that. As soon as possible we will solve your problem.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` int(50) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `role`, `id`) VALUES
('Wahid Sadik', 'admin123@gmail.com', '12345', 1, 1),
('wahid sadik', 'wahidsadik38@gmail.com', '12345', 0, 2),
('Nabi', 'instructor1@gmail.com', '12345', 2, 3),
('Nabi', 'nabi123@gmail.com', '12345', 0, 4),
('harun', 'harun@gmail.com', '12345', 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminandinstructorlogin`
--
ALTER TABLE `adminandinstructorlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complainbox`
--
ALTER TABLE `complainbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dietchart`
--
ALTER TABLE `dietchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiredinstructor`
--
ALTER TABLE `hiredinstructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showreply`
--
ALTER TABLE `showreply`
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
-- AUTO_INCREMENT for table `adminandinstructorlogin`
--
ALTER TABLE `adminandinstructorlogin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complainbox`
--
ALTER TABLE `complainbox`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dietchart`
--
ALTER TABLE `dietchart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hiredinstructor`
--
ALTER TABLE `hiredinstructor`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `showreply`
--
ALTER TABLE `showreply`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
