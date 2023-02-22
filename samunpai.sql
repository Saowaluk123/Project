-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2023 at 06:42 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samunpai`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `pk` int(11) NOT NULL,
  `detail` text NOT NULL,
  `member` text NOT NULL,
  `post` text NOT NULL,
  `date_start` text NOT NULL,
  `date_start2` text NOT NULL,
  `date_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `pk` int(11) NOT NULL,
  `post` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_all`
--

CREATE TABLE `member_all` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `telphone` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_all`
--

INSERT INTO `member_all` (`pk`, `name`, `telphone`, `username`, `password`, `status`) VALUES
(1, 'admin', '', 'admin', '1234', 'A'),
(2, 'นาง บรรจง มาแล้ว', '095784551', 'test', '1234', 'ST'),
(3, 'นาย ศัก', '0989456151', 'staff1', '1234', 'ST');

-- --------------------------------------------------------

--
-- Table structure for table `postdata`
--

CREATE TABLE `postdata` (
  `pk` int(11) NOT NULL,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `date_start` text NOT NULL,
  `date_start2` text NOT NULL,
  `date_time` text NOT NULL,
  `bill_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `run_bill`
--

CREATE TABLE `run_bill` (
  `pk` int(11) NOT NULL,
  `bill_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `member_all`
--
ALTER TABLE `member_all`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `postdata`
--
ALTER TABLE `postdata`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `run_bill`
--
ALTER TABLE `run_bill`
  ADD PRIMARY KEY (`pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member_all`
--
ALTER TABLE `member_all`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `postdata`
--
ALTER TABLE `postdata`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `run_bill`
--
ALTER TABLE `run_bill`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
