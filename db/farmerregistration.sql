-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2023 at 01:05 PM
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
-- Table structure for table `farmerregistration`
--

CREATE TABLE IF NOT EXISTS `farmerregistration` (
`id` int(255) NOT NULL,
  `farmerName` varchar(100) NOT NULL,
  `farmerMobile` varchar(12) NOT NULL,
  `farmerDistrict` varchar(200) NOT NULL,
  `farmerMsg` varchar(2000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `farmerregistration`
--

INSERT INTO `farmerregistration` (`id`, `farmerName`, `farmerMobile`, `farmerDistrict`, `farmerMsg`, `status`, `createdOn`, `createdBy`) VALUES
(1, 'MESHA YADAV', '09648488477', 'District', 'Fjoej', 0, '2023-06-09 00:48:18', 'MESHA YADAV'),
(2, 'Mrityunjay Singh', '154546459', 'District', 'New', 0, '2023-06-09 00:51:18', 'Mrityunjay Singh'),
(3, 'Mrityunjay Singh', '154546459', 'District', 'New', 0, '2023-06-09 00:55:14', 'Mrityunjay Singh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
