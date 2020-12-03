-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 01:02 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newpams_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'admin', 'admin@pams.com', 'abc12345');

-- --------------------------------------------------------

--
-- Table structure for table `assignactivity_tb`
--

CREATE TABLE `assignactivity_tb` (
  `a_id` int(11) NOT NULL,
  `activity_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `p_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `p_head` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_workers` bigint(20) NOT NULL,
  `a_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_zip` bigint(20) NOT NULL,
  `activity_head` varchar(60) COLLATE utf8_bin NOT NULL,
  `activity_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignactivity_tb`
--

INSERT INTO `assignactivity_tb` (`a_id`, `activity_name`, `p_name`, `p_head`, `a_workers`, `a_city`, `a_state`, `a_zip`, `activity_head`, `activity_date`) VALUES
(1, 'Marketing and sales  ', 'ABC Expressway', 'rahul', 200, 'Noida', 'UP', 20056, 'suresh', '0000-00-00'),
(2, 'Marketing and sales  ', 'NH4', 'abc', 300, 'Noida', 'UP', 56622, 'bhjk', '2020-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `assignworker_tb`
--

CREATE TABLE `assignworker_tb` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `expectant_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_pname` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_phead` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_add1` text COLLATE utf8_bin NOT NULL,
  `expectant_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_zip` int(11) NOT NULL,
  `assign_del_worker` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignworker_tb`
--

INSERT INTO `assignworker_tb` (`rno`, `request_id`, `request_info`, `request_desc`, `expectant_name`, `expectant_pname`, `expectant_phead`, `expectant_add1`, `expectant_city`, `expectant_state`, `expectant_zip`, `assign_del_worker`) VALUES
(1, 1, 'Tools and Equipments required', 'abc,def,ghi,jkl', 'Aditya', 'Gaur City', 'Abhishek', 'NH7 Expressway', 'Lucknow', 'Uttar Pradesh', 20054, 'sanjay');

-- --------------------------------------------------------

--
-- Table structure for table `expectantlogin_tb`
--

CREATE TABLE `expectantlogin_tb` (
  `e_login_id` int(11) NOT NULL,
  `e_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `e_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `e_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `expectantlogin_tb`
--

INSERT INTO `expectantlogin_tb` (`e_login_id`, `e_name`, `e_email`, `e_password`) VALUES
(5, 'abhishek', 'abhi@pams.com', '145766'),
(3, 'aditya mittal', 'adi@gmail.com', '562134'),
(6, 'aman', 'def@pams.com', '23654'),
(11, 'suk', 'sukriti@pams.com', '1234569'),
(12, 'raja', 'raja@pams.com', '12365479');

-- --------------------------------------------------------

--
-- Table structure for table `projectsassigned_tb`
--

CREATE TABLE `projectsassigned_tb` (
  `pid` int(11) NOT NULL,
  `p_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `p_head` varchar(60) COLLATE utf8_bin NOT NULL,
  `p_workers` bigint(20) NOT NULL,
  `status` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `projectsassigned_tb`
--

INSERT INTO `projectsassigned_tb` (`pid`, `p_name`, `p_head`, `p_workers`, `status`) VALUES
(1, 'HouseVilla', 'Akash', 3400, 'In Progress'),
(2, 'noida city', 'abhishek', 3000, 'in progress'),
(3, 'gaur villa', 'ajay', 3500, 'site preparation'),
(4, 'ABC Expressway', 'rahul', 6500, 'Site preparation ');

-- --------------------------------------------------------

--
-- Table structure for table `projects_tb`
--

CREATE TABLE `projects_tb` (
  `pid` int(11) NOT NULL,
  `p_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `p_head` varchar(60) COLLATE utf8_bin NOT NULL,
  `p_location` varchar(60) COLLATE utf8_bin NOT NULL,
  `p_startdate` date NOT NULL,
  `p_enddate` date NOT NULL,
  `p_status` text COLLATE utf8_bin NOT NULL,
  `p_workers` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `projects_tb`
--

INSERT INTO `projects_tb` (`pid`, `p_name`, `p_head`, `p_location`, `p_startdate`, `p_enddate`, `p_status`, `p_workers`) VALUES
(1, 'xyz', 'amit', 'delhi', '2017-07-08', '2020-12-12', 'fitting of utilities', 300),
(2, 'noida city', 'abhishek', 'Haryana', '2018-06-30', '2020-09-23', 'In Progress', 3000),
(3, 'gaur villa', 'ajay', 'delhi', '2019-06-22', '2020-12-15', 'site preparation', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `expectant_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_pname` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_phead` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_add1` text COLLATE utf8_bin NOT NULL,
  `expectant_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `expectant_zip` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_desc`, `expectant_name`, `expectant_pname`, `expectant_phead`, `expectant_add1`, `expectant_city`, `expectant_state`, `expectant_zip`) VALUES
(1, 'Tools and Equipments required', 'abc,def,ghi,jkl', 'Aditya', 'Gaur City', 'Abhishek', 'NH7 Expressway', 'Lucknow', 'Uttar Pradesh', 20054),
(3, 'abcd', 'abcdefgh', 'aman', 'Gaur City', 'akash', 'NH12 Expressway', 'Lucknow', 'Uttar Pradesh', 20056);

-- --------------------------------------------------------

--
-- Table structure for table `workers_tb`
--

CREATE TABLE `workers_tb` (
  `worker_id` int(11) NOT NULL,
  `worker_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `worker_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `worker_mobile` bigint(20) NOT NULL,
  `worker_city` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `workers_tb`
--

INSERT INTO `workers_tb` (`worker_id`, `worker_name`, `worker_email`, `worker_mobile`, `worker_city`) VALUES
(1, 'abc', 'abc@pams.com', 96541252, 'delhi'),
(2, 'sonu', 'sonu@pams.com', 3214569, 'kolkata'),
(3, 'mohan', 'mohan@pams.com', 541233115, 'haryana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assignactivity_tb`
--
ALTER TABLE `assignactivity_tb`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `assignworker_tb`
--
ALTER TABLE `assignworker_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `expectantlogin_tb`
--
ALTER TABLE `expectantlogin_tb`
  ADD PRIMARY KEY (`e_login_id`);

--
-- Indexes for table `projectsassigned_tb`
--
ALTER TABLE `projectsassigned_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `projects_tb`
--
ALTER TABLE `projects_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `workers_tb`
--
ALTER TABLE `workers_tb`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assignactivity_tb`
--
ALTER TABLE `assignactivity_tb`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `assignworker_tb`
--
ALTER TABLE `assignworker_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `expectantlogin_tb`
--
ALTER TABLE `expectantlogin_tb`
  MODIFY `e_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `projectsassigned_tb`
--
ALTER TABLE `projectsassigned_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projects_tb`
--
ALTER TABLE `projects_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `workers_tb`
--
ALTER TABLE `workers_tb`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
