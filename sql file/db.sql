-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 11:47 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_shortbio` text,
  `user_username` varchar(255) NOT NULL,
  `user_dob` date DEFAULT NULL,
  `user_profession` text,
  `user_gender` varchar(255) DEFAULT NULL,
  `user_joindate` date NOT NULL,
  `user_youtube` varchar(255) DEFAULT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_country` varchar(20) NOT NULL,
  `user_website` varchar(20) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_password`, `user_firstname`, `user_lastname`, `user_avatar`, `user_shortbio`, `user_username`, `user_dob`, `user_profession`, `user_gender`, `user_joindate`, `user_youtube`, `user_address`, `user_country`, `user_website`, `user_email`) VALUES
(1485, 'hello', 'yuga', 'a', 'default.jpg', 'hiii', 'yugandar', '1995-12-21', 'tv', '', '2017-09-28', '', '', 'india', '', 'yugandar@gmail.com'),
(1487, 'hello', 'yuga', 'a', '_20160115_180646-652533930.jpg', 'hiii', 'yuga', '1995-12-21', 'tv', '', '2017-09-28', '', '', 'india', '', 'yugandar@gmail.com'),
(1490, 'hello', 'yuga', 'a', 'default.jpg', 'hiii', 'mani', '1995-12-21', 'tv', '', '2017-09-29', '', '', 'india', '', 'yugandar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1492;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
