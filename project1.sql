-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 07:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `aid` int(20) NOT NULL,
  `pid` varchar(2000) NOT NULL,
  `eid` varchar(2000) NOT NULL,
  `jid` varchar(2000) NOT NULL,
  `ar` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `eid` int(11) NOT NULL,
  `eactive` varchar(2000) NOT NULL,
  `ecname` varchar(2000) NOT NULL,
  `eclogo` varchar(2000) NOT NULL,
  `epic` varchar(2000) NOT NULL,
  `ename` varchar(500) NOT NULL,
  `eemail` varchar(2000) NOT NULL,
  `epass` varchar(2000) NOT NULL,
  `esq` varchar(500) NOT NULL,
  `esans` varchar(2000) NOT NULL,
  `ephn` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eid`, `eactive`, `ecname`, `eclogo`, `epic`, `ename`, `eemail`, `epass`, `esq`, `esans`, `ephn`) VALUES
(1, '', '', '', '', 'dbsdbh', 'z@g.in', '123', 'Enter favourite food name', 'egg', '56456564'),
(2, '1', 'dragon', 'profile_pic/1568912911', '', 'sin', 'j@j.in', '123', 'Enter your school name', 'egg', '99999999');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `jid` int(11) NOT NULL,
  `jactive` varchar(2000) NOT NULL,
  `jpic` varchar(2000) NOT NULL,
  `jname` varchar(500) NOT NULL,
  `jemail` varchar(500) NOT NULL,
  `jpass` varchar(500) NOT NULL,
  `jdob` varchar(500) NOT NULL,
  `jgender` varchar(500) NOT NULL,
  `jsq` varchar(500) NOT NULL,
  `jsans` varchar(500) NOT NULL,
  `jphn` varchar(500) NOT NULL,
  `skill` varchar(2000) NOT NULL,
  `jresume` varchar(2000) NOT NULL,
  `jdes` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`jid`, `jactive`, `jpic`, `jname`, `jemail`, `jpass`, `jdob`, `jgender`, `jsq`, `jsans`, `jphn`, `skill`, `jresume`, `jdes`) VALUES
(1, '', '', 'sks', 'a@g.in', '123', '2019-09-13', 'male', 'Enter favourite food name', 'egg', '123', '0,1,2', '156839263810600117003_marksheet.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `pid` int(20) NOT NULL,
  `skill` varchar(2000) NOT NULL,
  `exp` varchar(2000) NOT NULL,
  `salary_from` varchar(2000) NOT NULL,
  `salary_to` varchar(2000) NOT NULL,
  `ad` varchar(2000) NOT NULL,
  `eid` varchar(2000) NOT NULL,
  `place` varchar(2000) NOT NULL,
  `pin` varchar(2000) NOT NULL,
  `noap` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`pid`, `skill`, `exp`, `salary_from`, `salary_to`, `ad`, `eid`, `place`, `pin`, `noap`) VALUES
(1, '0,1,2,4,5,6', '', '', '12000', 'post_job/1568704960lecture1423455475.pdf', '2', 'kolkata', '70000001', '0'),
(2, '', '', '', '', 'post_job/1568705109', '2', 'tewt', '123', '0'),
(3, '', '', '', '122', 'post_job/1568705224', '2', '', '', '0'),
(4, '', '', '120', '122', 'post_job/1568705255', '2', '', '', '0'),
(5, '', '', '1000', '2000', 'post_job/1568705290', '2', '', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_job`
--
ALTER TABLE `post_job`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
