-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2023 at 10:47 AM
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
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`pid` int(11) NOT NULL,
  `user_id` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `transaction_id` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `request_id` varchar(155) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `user_id`, `amount`, `transaction_id`, `status`, `request_id`, `created_by`, `created_on`) VALUES
(5, '72', 100.00, 'pay_LimMpdcz6q7fGq', '1', 'order_LimKlCYiCd6m6c', 'KAVITA PATEL', '2023-04-26 22:15:28'),
(4, '70', 100.00, 'pay_LilZYcc1IDUOnM', '1', 'order_LilYX2FO07udc6', 'MRITYUNJAY SINGH', '2023-04-26 21:28:50'),
(6, '72', 100.00, 'pay_LimMpdcz6q7fGq', '1', 'order_LimKlCYiCd6m6c', 'KAVITA PATEL', '2023-04-26 22:18:33'),
(7, '72', 100.00, 'pay_LimMpdcz6q7fGq', '1', 'order_LimKlCYiCd6m6c', 'KAVITA PATEL', '2023-04-26 22:19:35'),
(8, '72', 100.00, 'pay_LimMpdcz6q7fGq', '1', 'order_LimKlCYiCd6m6c', 'KAVITA PATEL', '2023-04-26 22:20:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
