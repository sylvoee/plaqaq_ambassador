-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 09:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ref`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `ig_handle` varchar(50) NOT NULL,
  `fb_handle` varchar(40) NOT NULL,
  `mobile` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ref_code` varchar(50) NOT NULL,
  `twitter_handle` varchar(40) NOT NULL,
  `no_of_twitter_followers` int(40) NOT NULL,
  `youtube_page` varchar(40) NOT NULL,
  `no_of_youtube_sub` int(11) NOT NULL,
  `info` varchar(30) NOT NULL,
  `time` varchar(18) NOT NULL,
  `count` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `first_name`, `last_name`, `university`, `course`, `phone_number`, `age`, `ig_handle`, `fb_handle`, `mobile`, `email`, `ref_code`, `twitter_handle`, `no_of_twitter_followers`, `youtube_page`, `no_of_youtube_sub`, `info`, `time`, `count`) VALUES
(20, 'justicestt71', 'plaqse8tt71', 'UNIILORIN', 'Physics', '0909988769', 24, 'sylvoee', '@kemifb', 0, 'sylvoee@yahool.com', 'plaq1', 'sylvoee@twiiter', 0, 'youtbeurl', 77, 'Twitter', '2019-11-07 03:32:2', 0),
(21, 'justicestt71', 'plaqse8tt71', 'UNIBEN', 'Chemistry', '0703543534', 26, 'daniel_core', 'Daniel@fb', 0, 'danieelcore@gmail.com', 'sylvoee', 'danielCore', 0, 'youtbeurl', 100, 'SMS', '2019-11-07 03:35:5', 0),
(22, 'justicestt71', 'plaqse8tt71', 'ABSU', 'Biolgy', '08033382', 27, 'henry_plaq', 'henry@fb', 0, 'gotv@gmail.com', 'sylvoee', 'henry', 0, 'youtbeurl', 100, 'Twitter', '2019-11-07 03:38:4', 0),
(23, 'justice', 'plaqse', 'UNIBEN', 'MATHS', '7039472179', 30, 'justice_plaq', 'face', 0, 'gotv@gmail.com', 'sylvoee', 'justice_plaq', 0, 'youtbeurl', 100, 'SMS', '2019-11-07 03:40:5', 7),
(24, 'justicestt71', 'plaqse8tt71', 'Noun', 'MATHS', '7039472179', 30, 'jenny_plaq', 'face', 0, 'gotv@gmail.com', 'justice_plaq', 'Jenny_plaq_tw', 0, 'youtbeurl', 100, 'SMS', '2019-11-07 03:44:4', 0),
(25, 'justicestt71', 'plaqse8tt71', 'AAU', 'Eng', '7039472179', 30, 'customer_plaq', 'face', 0, 'email@gmail.com', 'justice_plaq', '545', 0, 'youtbeurl', 66, 'SMS', '2019-11-07 03:47:3', 0),
(26, 'justicestt71', 'plaqse8tt71', 'UNIBEN', 'MATHS', '7039472179', 30, 'man', 'face', 0, 'sylvoee@gmail.com', 'sylvoee', 'henry', 0, 'youtbeurl', 22, 'Twitter', '2019-11-07 04:52:0', 0),
(27, 'justicestt71', 'plaqse8tt71', 'UNIBEN', 'MATHS', '7039472179', 30, 'justice_plaq2', 'face', 0, 'samson@gmail.com', 'justice_plaq', 'justice_plaq', 0, 'youtbeurl', 66, 'SMS', '2019-11-11 02:28:1', 2),
(28, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:01:4', 0),
(29, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:03:0', 0),
(30, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:04:2', 0),
(31, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:06:2', 0),
(32, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:07:5', 0),
(33, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:09:2', 0),
(34, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:11:1', 0),
(35, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:12:1', 0),
(36, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:15:0', 0),
(37, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:18:4', 0),
(38, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:20:1', 0),
(39, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:21:1', 0),
(41, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:36:4', 0),
(43, 'justicestt71', 'plaqse8tt71', 'Noun', 'Eng', '081872997', 23, 'insta', 'face', 0, 'insta@GMAIL.COM', 'justice_plaq', 'sylvoee@twiiter', 0, 'youtbeurl', 100, 'SMS', '2019-11-11 03:45:4', 0),
(44, 'justicestt71', 'plaqse8tt71', 'UNIBEN', 'MATHS', '7039472179', 30, 'jenny_plaq', 'face', 0, 'fan@gmail.com', 'justice_plaq2', 'danielCore', 0, 'youtbeurl', 66, 'SMS', '2019-11-11 03:48:4', 0),
(45, 'justicestt71', 'plaqse8tt71', 'UNIBEN', 'MATHS', '7039472179', 30, 'jenny_plaq', 'face', 0, 'fan@gmail.com', 'justice_plaq2', 'danielCore', 0, 'youtbeurl', 66, 'SMS', '2019-11-11 03:53:4', 0),
(46, 'justicestt71', 'plaqse8tt71', 'UNIBEN', 'MATHS', '7039472179', 30, 'justice_plaq', 'face', 0, 'email@gmail.com', 'plaq2', 'plaq2', 0, 'youtbeurl', 66, 'SMS', '2019-11-11 03:55:1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
