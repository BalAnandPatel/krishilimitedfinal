-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2023 at 04:22 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glintqnj_krishilimited`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `createdOn` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `fullName`, `userName`, `password`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, 'mrityunjay singh', 'Glintel@gmail.com', '12345', '2023-06-05 06:17:28.094642', '0', '0000-00-00 00:00:00.000000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
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
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmerregistration`
--

CREATE TABLE `farmerregistration` (
  `id` int(255) NOT NULL,
  `farmerName` varchar(100) NOT NULL,
  `farmerMobile` varchar(12) NOT NULL,
  `farmerDistrict` varchar(200) NOT NULL,
  `farmerMsg` varchar(2000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerregistration`
--

INSERT INTO `farmerregistration` (`id`, `farmerName`, `farmerMobile`, `farmerDistrict`, `farmerMsg`, `status`, `createdOn`, `createdBy`) VALUES
(7, 'Harendra Singh', '8009678491, ', 'Lucknow', '??????? ?????,\r\n???? ???? ?? ???? ????? ??? ???????? ???? ??? ??? ?? ??? ???? ???????? ?? ??? ???? ??? ?????? ?? ???? ????? ????\r\n?? ?? ??????? ??? ????, ???? ????? ?? ???? ????? ?????? ??? ??????\r\n???????', 0, '2023-06-14 05:37:58', 'Harendra Singh'),
(6, 'HARENDRA SINGH', '8009678491, ', 'LUCKNOW', 'Hello sir, my agriculture land in RAE BARELI and ballia', 0, '2023-06-11 05:05:10', 'HARENDRA SINGH');

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE `imagegallery` (
  `id` int(255) NOT NULL,
  `galleryTitle` varchar(255) NOT NULL,
  `galleryDescription` varchar(1000) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagegallery`
--

INSERT INTO `imagegallery` (`id`, `galleryTitle`, `galleryDescription`, `created_on`, `created_by`) VALUES
(28, 'Goat Farming With Farmer', 'Goat farming Farmer Goat Herding in Ground.', '2023-06-23 06:13:36', 'Admin'),
(29, 'Duck Farming', 'Duck is Collecting Food from Ground and Pound.', '2023-06-23 06:17:27', 'Admin'),
(30, 'Sonali Murgi farming', 'Sonali Murgi Farming. Farmer is collecting feed for Hens.', '2023-06-23 06:24:13', 'Admin'),
(31, 'Flower farming', 'Farmer picking flowers.', '2023-06-23 10:40:47', 'Admin'),
(32, 'Fish seed packing', 'Farmer packing the baby fish.', '2023-06-23 10:45:20', 'Admin'),
(33, 'Applicable industry', 'Company\'s trainer giving training of applicable industry to housewife', '2023-06-23 11:10:44', 'Admin'),
(34, 'Tailoring training', 'Company\'s trainer giving tailoring training to housewife', '2023-06-23 11:11:26', 'Admin'),
(35, 'Opening of the mandal office', 'Opening of the mandal office for the better management', '2023-06-23 11:13:03', 'Admin'),
(36, 'The office was inaugurated in Lucknow', 'The office was inaugurated in Lucknow, the capital of the state, from where the whole of Uttar Pradesh would be monitored.', '2023-06-23 11:19:01', 'Admin'),
(37, 'Transporting eggs.', 'Transporting eggs from company', '2023-06-23 11:24:05', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `n_title` varchar(200) NOT NULL,
  `n_description` varchar(200) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `user_id` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `transaction_id` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `request_id` varchar(155) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `user_id`, `amount`, `transaction_id`, `status`, `request_id`, `created_by`, `created_on`) VALUES
(10, '69', 200.00, 'pay_LjCUEUNUh2Ai3T', '1', 'order_LjCTlSh6VcH9Ui', 'MRITYUNJAY SINGH', '2023-04-27 23:48:30'),
(9, '69', 200.00, 'pay_LjCNK7wObmjEfT', '1', 'order_LjCMo3TbLHo2Qw', 'MRITYUNJAY SINGH', '2023-04-27 23:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `dob`, `gender`, `marital_status`, `father_name`, `mother_name`, `status`, `password`, `result`, `admit_card`, `spouse_name`, `cor_address`, `address1`, `address2`, `address3`, `district`, `state`, `pincode`, `mobile`, `email`, `h_qualification`, `subject`, `passing_date`, `h_percentage`, `grade`, `languages`, `is_read`, `is_write`, `is_speak`, `alternate_mobile`, `zone`, `post`, `postcode`, `disability_cat`, `disability_type`, `ex_serviceman`, `exam_name`, `serving_defence_per`, `service_period`, `religion`, `nationality`, `category`, `state_exam1`, `center_exam1`, `state_exam2`, `center_exam2`, `registration_no`, `created_on`, `created_by`, `updated_by`, `updated_on`) VALUES
(68, 'MRITYUNJAY SINGH', '01/01/2000', 'MALE', 'Unmarried', 'F NAME', 'M NAME', '2', '01012000', '0', '0', 'NA', 'C ADD', 'ADD 1', 'ADD 2', 'ADD 3', 'DIS', 'STATE ', '236525', '123456789', 'ms@gmail.com', 'UNDER GRADUATION', 'SUB', '2023-04-12 18:30:00', 80.00, 'First', 'HINDI', 'Yes', 'Yes', 'Yes', '2365896548', NULL, NULL, NULL, 'dc', 'dt', 'No', 'UPPCS', 'No', '2', 'REL', 'NA', 'CATED', NULL, NULL, NULL, NULL, '2787135741', '2023-04-26 10:36:32', 'USER', NULL, NULL),
(69, 'MRITYUNJAY SINGH', '2000-01-01', 'MALE', 'Unmarried', 'F NAME', 'M NAME', '0', '01012000', '0', '0', 'NA', 'C ADD', 'ADD 1', 'ADD 2', 'ADD 3', 'PRATAPGARH', 'UTTER PRADESH', '230306', '0117559689', 'ms@gmail.com', 'UNDER GRADUATION', 'HINDI', '2023-04-27 18:30:00', 80.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '1059658965', NULL, NULL, NULL, 'na', 'na', 'No', 'UPPCS', 'No', '1', 'HINDU', 'IND', 'OBC', NULL, NULL, NULL, NULL, '3044878763', '2023-04-28 11:39:04', 'USER', NULL, NULL),
(70, 'USER', '01/01/2000', 'MALE', 'Unmarried', 'FATHER ', 'MOTHER ', '1', '01012000', '0', '0', '', 'COR ADD ', 'ADD 1', 'ADD 2', 'ADD 3', 'JAUNPUR', 'UTTAR PRADESH', '222202', '9876543210', 'user@gmail.com', 'UNDER GRADUATION', 'MATH', '2020-03-30 18:30:00', 80.00, 'Second', 'HINDI', 'Yes', 'Yes', 'Yes', '9876543210', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CIVIL EXAM', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '8654021385', '2023-06-05 10:14:20', 'USER', NULL, NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_name` (`exam_name`),
  ADD UNIQUE KEY `exam_name_2` (`exam_name`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
