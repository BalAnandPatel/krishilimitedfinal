-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2023 at 10:50 AM
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
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
`id` int(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `createdOn` timestamp(6) NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp(6) NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `fullName`, `userName`, `password`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, 'mrityunjay singh', 'ms@gmail.com', '123', '0000-00-00 00:00:00.000000', '0', '0000-00-00 00:00:00.000000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`id` int(155) NOT NULL,
  `exam_name` varchar(200) DEFAULT NULL,
  `type` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `total_post` varchar(100) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `age` varchar(255) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `exam_date_start` varchar(255) DEFAULT NULL,
  `exam_date_end` varchar(255) NOT NULL,
  `result_date` varchar(255) DEFAULT NULL,
  `admit_card_date` varchar(255) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_on` timestamp NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_name`, `type`, `amount`, `total_post`, `eligibility`, `age`, `status`, `exam_date_start`, `exam_date_end`, `result_date`, `admit_card_date`, `created_by`, `created_on`, `updated_on`, `updated_by`) VALUES
(39, 'UPPCS', 'Mcqs', 100.00, '200', 'Graduation', '18-25', '1', '28-04-2023', '28-04-2023', '30-04-2023', '25-04-2023', 'Admin', '2023-04-26 20:52:43', '0000-00-00 00:00:00', ''),
(40, 'NEW POST', 'Post type', 55.00, '55', 'Gar', '22', '1', '27-05-2023', '18-05-2023', '24-05-2023', '26-05-2023', 'Admin', '2023-04-30 23:14:56', '0000-00-00 00:00:00', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `farmerregistration`
--

INSERT INTO `farmerregistration` (`id`, `farmerName`, `farmerMobile`, `farmerDistrict`, `farmerMsg`, `status`, `createdOn`, `createdBy`) VALUES
(1, 'MESHA YADAV', '09648488477', 'District', 'Fjoej', 0, '2023-06-09 00:48:18', 'MESHA YADAV'),
(2, 'Mrityunjay Singh', '154546459', 'District', 'New', 0, '2023-06-09 00:51:18', 'Mrityunjay Singh'),
(3, 'Mrityunjay Singh', '154546459', 'District', 'New', 0, '2023-06-09 00:55:14', 'Mrityunjay Singh'),
(4, 'Mrityunjay Singh', '154546459', 'Kkfk', 'Fk', 0, '2023-06-10 05:54:02', 'Mrityunjay Singh'),
(5, 'MESHA YADAV', '09648488477', 'Jaunpur', 'Message', 0, '2023-06-10 06:02:12', 'MESHA YADAV');

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE IF NOT EXISTS `imagegallery` (
`id` int(255) NOT NULL,
  `galleryTitle` varchar(255) NOT NULL,
  `galleryDescription` varchar(1000) NOT NULL,
  `created_on` timestamp NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `imagegallery`
--

INSERT INTO `imagegallery` (`id`, `galleryTitle`, `galleryDescription`, `created_on`, `created_by`) VALUES
(23, '', '', '2023-06-23 11:45:19', 'Admin'),
(18, 'Second title', 'Sec des', '2023-06-22 08:57:11', 'Admin'),
(17, 'New title', 'Des', '2023-06-22 08:56:42', 'Admin'),
(22, '', '', '2023-06-23 11:44:11', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `news_gallery`
--

CREATE TABLE IF NOT EXISTS `news_gallery` (
`id` int(255) NOT NULL,
  `newsTitle` varchar(255) NOT NULL,
  `newsDescription` varchar(2000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news_gallery`
--

INSERT INTO `news_gallery` (`id`, `newsTitle`, `newsDescription`, `status`, `created_on`, `created_by`) VALUES
(3, 'New title', 'News description here', 0, '2023-06-24 09:46:20', 'Admin'),
(4, 'Putin calls armed rebellion by mercenary chief a betrayal and promises to defend Russia', 'This battle, when the fate of our people is being decided, requires the unification of all forces, unity, consolidation and responsibility. An armed rebellion at a time like this is a blow to Russia, to its people, the president said.\r\nRussian President Vladimir Putin addressed the nation Saturday and vowed to defend the country and its people from an armed rebellion declared by mercenary chief Yevgeny Prigozhin.', 0, '2023-06-24 09:48:47', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`id` int(255) NOT NULL,
  `n_title` varchar(200) NOT NULL,
  `n_description` varchar(200) NOT NULL,
  `created_on` timestamp NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_on` timestamp NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `n_title`, `n_description`, `created_on`, `created_by`, `updated_on`, `updated_by`) VALUES
(2, 'My notification', '', '2023-04-26 09:03:23', 'Admin', '0000-00-00 00:00:00', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `user_id`, `amount`, `transaction_id`, `status`, `request_id`, `created_by`, `created_on`) VALUES
(5, '72', 100.00, 'pay_LimMpdcz6q7fGq', '1', 'order_LimKlCYiCd6m6c', 'KAVITA PATEL', '2023-04-26 22:15:28'),
(4, '78', 100.00, 'pay_LilZYcc1IDUOnM', '1', 'order_LilYX2FO07udc6', 'MRITYUNJAY SINGH', '2023-04-26 21:28:50'),
(6, '70', 100.00, 'pay_LimMpdcz6q7fGq', '0', 'order_LimKlCYiCd6m6c', 'KAVITA PATEL', '2023-04-26 22:18:33'),
(7, '72', 100.00, 'pay_LimMpdcz6q7fGq', '1', 'order_LimKlCYiCd6m6c', 'KAVITA PATEL', '2023-04-26 22:19:35'),
(8, '72', 100.00, 'pay_LimMpdcz6q7fGq', '1', 'order_LimKlCYiCd6m6c', 'KAVITA PATEL', '2023-04-26 22:20:51'),
(9, '70', 100.00, 'pay_LjBEmn9tty8rSm', '1', 'order_LjBEJGOk5t8uyb', 'MRITYUNJAY SINGH PATEL', '2023-04-27 22:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(11) NOT NULL,
  `full_name` varchar(155) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(155) DEFAULT NULL,
  `marital_status` varchar(155) DEFAULT NULL,
  `father_name` varchar(155) DEFAULT NULL,
  `mother_name` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `password` varchar(155) DEFAULT NULL,
  `result` varchar(155) DEFAULT NULL,
  `admit_card` varchar(155) DEFAULT NULL,
  `spouse_name` varchar(155) DEFAULT NULL,
  `cor_address` text,
  `address1` text,
  `address2` text,
  `address3` text,
  `district` text,
  `state` text,
  `pincode` text,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `h_qualification` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `passing_date` timestamp NULL DEFAULT NULL,
  `h_percentage` double(255,2) DEFAULT NULL,
  `grade` varchar(155) DEFAULT NULL,
  `languages` varchar(155) DEFAULT NULL,
  `is_read` varchar(155) DEFAULT NULL,
  `is_write` varchar(155) DEFAULT NULL,
  `is_speak` varchar(155) DEFAULT NULL,
  `alternate_mobile` varchar(155) DEFAULT NULL,
  `zone` varchar(155) DEFAULT NULL,
  `post` varchar(155) DEFAULT NULL,
  `postcode` varchar(155) DEFAULT NULL,
  `disability_cat` varchar(155) DEFAULT NULL,
  `disability_type` varchar(155) DEFAULT NULL,
  `ex_serviceman` varchar(155) DEFAULT NULL,
  `exam_name` varchar(200) DEFAULT NULL,
  `serving_defence_per` varchar(155) DEFAULT NULL,
  `service_period` varchar(155) DEFAULT NULL,
  `religion` varchar(155) DEFAULT NULL,
  `nationality` varchar(155) DEFAULT NULL,
  `category` varchar(155) DEFAULT NULL,
  `state_exam1` varchar(155) DEFAULT NULL,
  `center_exam1` varchar(155) DEFAULT NULL,
  `state_exam2` varchar(155) DEFAULT NULL,
  `center_exam2` varchar(155) DEFAULT NULL,
  `registration_no` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `updated_by` varchar(155) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `dob`, `gender`, `marital_status`, `father_name`, `mother_name`, `status`, `password`, `result`, `admit_card`, `spouse_name`, `cor_address`, `address1`, `address2`, `address3`, `district`, `state`, `pincode`, `mobile`, `email`, `h_qualification`, `subject`, `passing_date`, `h_percentage`, `grade`, `languages`, `is_read`, `is_write`, `is_speak`, `alternate_mobile`, `zone`, `post`, `postcode`, `disability_cat`, `disability_type`, `ex_serviceman`, `exam_name`, `serving_defence_per`, `service_period`, `religion`, `nationality`, `category`, `state_exam1`, `center_exam1`, `state_exam2`, `center_exam2`, `registration_no`, `created_on`, `created_by`, `updated_by`, `updated_on`) VALUES
(72, 'KAVITA PATEL', '01/01/2000', 'MALE', 'Unmarried', 'F NAME', 'M NAME', '0', '01012000', '0', '0', 'NA', 'C ADD', 'ADD 1', 'ADD 2', 'ADD 3', 'DIS', 'STATE', '16111', '987654321', 'kavita@gmail.com', 'UNDER GRADUATION', 'ENGLISH', '2023-04-18 18:30:00', 70.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '46516151', NULL, NULL, NULL, 'dc', 'dt', 'No', 'UPPCS', 'No', '1', 'REL', 'IND', 'CTE', NULL, NULL, NULL, NULL, '45526555522', '2023-04-27 10:12:51', 'USER', NULL, NULL),
(70, 'MRITYUNJAY SINGH PATEL', '2000-01-01', 'MALE', 'Unmarried', 'F NAME', 'M NAME', '1', '01012000', '0', '0', 'NA', 'C ADD', 'ADD 1', 'ADD 2', 'ADD 3', 'DISTRICT', 'STATE', '3222', '1234567891', 'ms@gmail.com', '0', 'SUBJECT ', '2023-04-26 18:30:00', 80.00, 'First', 'HINDI', 'Yes', 'Yes', 'Yes', '5698569856', NULL, NULL, NULL, 'dc', 'dc', 'No', 'UPPCS', 'No', '2', 'REL', 'IND', 'CATEGORY', NULL, NULL, NULL, NULL, '1354965371', '2023-04-27 09:02:21', 'USER', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videogallery`
--

CREATE TABLE IF NOT EXISTS `videogallery` (
`id` int(255) NOT NULL,
  `videoTitle` varchar(255) NOT NULL,
  `videoDescription` varchar(1000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `videogallery`
--

INSERT INTO `videogallery` (`id`, `videoTitle`, `videoDescription`, `status`, `created_on`, `created_by`) VALUES
(2, 'xcn ', 'nkn', 0, '2023-06-23 11:54:17', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `exam_name` (`exam_name`), ADD UNIQUE KEY `exam_name_2` (`exam_name`);

--
-- Indexes for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagegallery`
--
ALTER TABLE `imagegallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_gallery`
--
ALTER TABLE `news_gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `id` int(155) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `news_gallery`
--
ALTER TABLE `news_gallery`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
