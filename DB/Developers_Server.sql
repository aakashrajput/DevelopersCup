-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2019 at 06:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Developer_Server`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `phone no` varchar(12) NOT NULL,
  `college name` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `reg_date` varchar(50) NOT NULL,
  `tandc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `username`, `email`, `password`, `role`, `phone no`, `college name`, `branch`, `country`, `state`, `reg_date`, `tandc`) VALUES
(1, '', 'Aakash', 'aakashsingh1999@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '', '', '', '', '', '2019/02/05', ''),
(2, '', 'Aakash12', 'aakashsingh1999a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '', '', '', '', '', '2019/02/05', '&c'),
(3, '', 'IndianCharizard', 'in@fmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '', '', '', '', '', '2019/02/05', ''),
(4, '', 'ksheeraja', 'ksrksheeraja@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '', '', '', '', '', '2019/02/05', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
