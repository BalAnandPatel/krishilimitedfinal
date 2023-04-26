-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2023 at 09:21 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `krishilimited`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE IF NOT EXISTS `imagegallery` (
`id` int(255) NOT NULL,
  `created_on` timestamp NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `imagegallery`
--

INSERT INTO `imagegallery` (`id`, `created_on`, `created_by`) VALUES
(10, '2023-04-26 08:41:07', 'Admin'),
(9, '2023-04-26 08:40:41', 'Admin'),
(8, '2023-04-26 08:33:00', 'Admin'),
(7, '2023-04-26 08:31:23', 'Admin'),
(6, '2023-04-26 07:11:40', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagegallery`
--
ALTER TABLE `imagegallery`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
