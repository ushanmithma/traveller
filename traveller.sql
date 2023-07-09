-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 11:00 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveller`
--
CREATE DATABASE IF NOT EXISTS `traveller` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `traveller`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Greatest', 'Lord', 'greatestlords@gmail.com', '$2y$10$LP43ArNN7WWF.bNvicmdeOlnZVH1eJSlFYYWYbckcfqkNHXr1ZgDG'),
(2, 'admin', 'user', 'admin@123.lk', '$2y$10$pipwjsb0bf4.CdXAusj6UeO07etjaLVjD9JLMjLIs8aUzlOrA6bUe'),
(3, 'admin', 'admin', 'admin@abc.com', '$2y$10$lSk6WehwxuoyvyYhoHjjae1QfhVzdj7vLmjbvc7waBeC7EdOY7xn2'),
(4, 'LOCKDOWN', '123w', 'lockdown@gmail.com', '$2y$10$cf0OMW.iqGTTtLV8EY.tOuZMREeBwRsS0Jz/9Bbal5oMpqiP/ibBO');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
