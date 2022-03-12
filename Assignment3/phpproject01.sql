-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 12:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject01`
--

-- --------------------------------------------------------

--
-- Table structure for table `peopleinformation`
--

CREATE TABLE `peopleinformation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peopleinformation`
--

INSERT INTO `peopleinformation` (`id`, `name`, `position`, `birthday`, `degree`, `image`, `phone`, `description`) VALUES
(19, 'Shuzheng Wang', 'javaDeveloper', '19990412', 'Bachelor', '../asset/picture/img-1.jpg', '1334567898', 'I am good at java'),
(21, 'Chang Chen', 'pythonDeveloper', '19990614', 'Bachelor', '../asset/picture/img-2.jpg', '1345778', 'I am good at python'),
(22, 'Minzhe Gu', 'phpDeveloper', '19990614', 'Bachelor', '../asset/picture/img-3.jpg', '13345567', 'I am good at php'),
(23, 'Donald ', 'htmlDeveloper', '19780611', 'Master', '../asset/picture/img-4.jpg', '14456789', 'I am good at html'),
(24, 'Anna', 'javaDeveloper', '19830712', 'Master', '../asset/picture/img-5.jpg', '14456789', 'I am good at java'),
(25, 'Lisa', 'pythonDeveloper', '19760915', 'Master', '../asset/picture/img-6.jpg', '15567890', 'I am good at python'),
(26, 'Joe', 'phpDeveloper', '19950730', 'Doctor', '../asset/picture/img-7.jpg', '1235645', 'I am good at php'),
(27, 'Maria', 'htmlDeveloper', '19890605', 'Doctor', '../asset/picture/img-8.jpg', '17867439', 'I am good at html');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `usersType` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersPwd`, `usersType`) VALUES
(19, '123455', '123456@qq.com', '$2y$10$hRWmZcB1sxk//.0EQNEYiOriHBuDZLMmS.gzZ1e2swyQZs5R1Re8G', 'employee'),
(20, '000000', '000000@qq.com', '$2y$10$9WS3B3wdjzIJtGIXEAejH.WhzNIDQ49d4n1A3a8WFXuTYO9ZKGezO', 'boss'),
(21, '23456', '23456@qq.com', '$2y$10$sQdbpwjisqGGSIo0EgtO.uqJbJ4KKwbhL0fzlXspS3Vux/bo2WP82', 'employee'),
(22, '345678', '345678@qq.com', '$2y$10$rpPSyVdDCX1BcjqyPMxbwOfZb8EUGsF7UU1uRwYpKLE2Sw0Mltw8G', 'employee'),
(23, '45678', '45678@qq.com', '$2y$10$9YYwvXejldJDIshWEuHL5eKKlBWDK0dpZLnf4R8a9NgzGL8CtfzZ6', 'employee'),
(24, '567890', '567890@qq.com', '$2y$10$4HuaXdUSrQvZffgP7HhbeOywTTsL2.oN3hJur1owlojKaiIA765j.', 'employee'),
(25, '678901', '678901@qq.com', '$2y$10$JRSN9g21JLlRn3KiPiFQUOEZ/GeZCN5Rdbt.LhMSEZE4r5Jh1zBoS', 'employee'),
(26, '789012', '789012@qq.com', '$2y$10$AL8NENZ4v3Hfut15BBWd.e12XFyq/MuhmruWRNwVxhUQBYasGWQs2', 'employee'),
(27, '890123', '890123@qq.com', '$2y$10$G/Z1w/POFDGXFMnY6LCwPesKf20pncLyCbcie1BSPGbF36Cw56wo.', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peopleinformation`
--
ALTER TABLE `peopleinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
