-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 07:35 PM
-- Server version: 5.7.15
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fatherName` text,
  `firstName` text,
  `inputEmail` text,
  `inputPassword` text,
  `lastName` text,
  `phoneNumber` text,
  `postalAddress` text,
  `regdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fatherName`, `firstName`, `inputEmail`, `inputPassword`, `lastName`, `phoneNumber`, `postalAddress`, `regdate`) VALUES
(34, '', '', 'Admin@fdgdssdfg.ghhf', 'bf22a1d0acfca4af517e1417a80e92d1', '', '', '', '2020-09-27 17:39:30'),
(35, '', '', '', '', '', '', '', '2020-09-27 17:45:59'),
(36, '', '', '', '', '', '', '', '2020-09-27 17:47:50'),
(37, '', '', 'Admin@fdgdssdfg.ru', 'fdg', '', '', '', '2020-09-27 17:49:22'),
(38, '', 'fdbdfb', 'FDBDFB@DSFSD.COM', 'nvgfnf', 'DFBFDB', '', '', '2020-10-17 08:08:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
