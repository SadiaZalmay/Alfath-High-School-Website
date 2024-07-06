-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 08:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(4) NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `name`, `image`) VALUES
(1, 'This is ahmad			', 'Ahmad', 'images/69599628411459707206.jpg'),
(2, 'Nice picture...', 'Mohammad Yasin', 'images/954690_222992257863904_1850045368_n.png'),
(3, 'This is Salam			', 'Salam', 'images/spring-316535_1280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(40) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `fname`, `lname`, `gender`, `email`, `contact`, `picture`, `username`, `password`) VALUES
(1, '', '', '', '', 0, '', 'sahnosh', 'sahnosh'),
(2, 'jalal', 'jooyan', 'Male', 'jooyan@gmail.com', 2147483647, '1273822208-EY7M39A.jpg', 'jooyan', '2ad2dc9229db30d083c691a4c00b0c11'),
(3, 'Ali', 'ahmadi', 'male', 'ali@yahoo.com', 0, '', 'ali', 'ali1234'),
(4, 'Maryam', 'Ahmadi', 'Female', 'Maryam.ahmadi@gmail.com', 2147483647, '', 'maryam', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Ali', 'ahmadi', 'Male', 'Ali@gmail.com', 98888, '', 'ali', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Jalal', 'Ahmad', 'Male', 'Jalal@gmail.com', 937007676, '', 'jalal', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` text CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('Gulab', ' e10adc3949ba59abbe56e057f20f883'),
('Ahmad', ' ahmad@123'),
('Mahmood', ' 25f9e794323b453885f5181f1b624d0'),
('ahmd', ' 81dc9bdb52d04dc20036dbd8313ed05'),
('jalal', ' 61243c7b9a4022cb3f8dc3106767ed1'),
('ÙØ±Ù‡Ø§Ø¯', ' 827ccb0eea8a706c4c34a16891f84e7'),
('ÙØ±Ù‡Ø§Ø¯ ', ' 7a08a5a0e7e209ea37f0c1c5daa4fb6'),
('Ø¬Ù…Ø§Ù„', ' e0b5605734de1da1ad2d4379e8c172e'),
('Ø¬Ù„Ø§Ù„', ' 21fc32cdc46fd8cca0af56c4c6f0eae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
