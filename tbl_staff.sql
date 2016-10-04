-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2016 at 12:02 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trustbean`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `st_roll` int(10) NOT NULL,
  `st_age` int(3) NOT NULL,
  `st_email` varchar(30) NOT NULL,
  `st_status` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`st_id`, `st_name`, `st_roll`, `st_age`, `st_email`, `st_status`) VALUES
(1, 'pronab', 10, 24, 'p@gmail.com', 'CEO(chief Excutive Officer)'),
(2, 'Sakib', 20, 23, 's@gmail.com', 'CTO(chief Technical Officer)'),
(3, 'sha Ali', 30, 26, 'sha@gmail.com', 'CPO(chief Programmer Officer)'),
(6, 'Tanzir huda', 40, 27, 'tanzir@gmail.com', 'CDO(chief Devlopment Officer)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
