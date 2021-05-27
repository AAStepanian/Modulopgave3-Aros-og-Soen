-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2021 at 04:11 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crmmodulopgave3`
--

-- --------------------------------------------------------

--
-- Table structure for table `user classes`
--

CREATE TABLE `user classes` (
  `classes_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user classes`
--

INSERT INTO `user classes` (`classes_id`, `name`) VALUES
(1, 'employee'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name_Title` varchar(30) NOT NULL,
  `name_First` varchar(20) NOT NULL,
  `name_Last` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `user_classes_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name_Title`, `name_First`, `name_Last`, `email`, `user_classes_id`) VALUES
(17, 'Kenneth123', 'deeppink123', 'Medarbejder', 'Kenneth', 'Clausen', 'Clausen@gmail.com', 1),
(18, 'Christina123', 'hej123', 'Kunde', 'Christina', 'Aros', 'Aros@gmail.com', 2),
(19, 'Arkadii', 'halløj123', 'Medarbejder', 'Arkadii', 'Stepanian', 'Stepanian@gmail.com', 1),
(20, 'Jens', 'goddav1234', 'Kunde', 'Jens', 'Petersen', 'petersen@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user classes`
--
ALTER TABLE `user classes`
  ADD PRIMARY KEY (`classes_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`username`),
  ADD KEY `fk_users_user classes1_idx` (`user_classes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_user classes1` FOREIGN KEY (`user_classes_id`) REFERENCES `user classes` (`classes_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
