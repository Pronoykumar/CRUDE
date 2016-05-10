-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 05:33 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atomicproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `title`, `created_at`, `modified_at`, `deleted_at`) VALUES
(3, 'Samgsung555', '2016-04-25 12:53:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Samphony2', '2016-04-27 13:24:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Samphony', '2016-05-10 16:58:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Micromax', '2016-05-10 16:59:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Nokia', '2016-05-10 18:57:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Sony', '2016-05-10 20:01:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Samgsung4', '2016-05-10 20:02:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Samgsung00', '2016-05-10 20:11:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'ggggg', '2016-05-10 20:56:39', '0000-00-00 00:00:00', NULL),
(16, 'nokia4h', '2016-05-10 21:24:11', '0000-00-00 00:00:00', NULL),
(17, 'Sony', '2016-05-10 21:24:20', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
