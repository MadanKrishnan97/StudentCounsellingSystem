-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2017 at 07:28 AM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` int(11) NOT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL,
  `astuid` int(11) NOT NULL,
  `acid` int(11) NOT NULL,
  `abranchid` int(11) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `adate`, `atime`, `astuid`, `acid`, `abranchid`, `cdate`) VALUES
(2, '2017-10-10', '09:00:00', 1, 4, 7, '2017-11-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `baddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `bname`, `baddress`) VALUES
(1, 'rnsit', 'rr nagar'),
(2, 'vvs', 'rajajinagar'),
(6, 'ergaerg', 'bgatrhetyj');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `pamt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `stuid` int(11) NOT NULL,
  `sfirstname` varchar(50) NOT NULL,
  `slastname` varchar(50) NOT NULL,
  `sphone` varchar(250) NOT NULL,
  `semail` varchar(250) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`stuid`, `sfirstname`, `slastname`, `sphone`, `semail`, `dt_created`) VALUES
(6, '10', 'BACHELOR OF TECHNOLOGY', 'Engineering Drawing', 'Computer Programming', '2016-04-16 19:51:43'),
(7, 'masf', 'aff', '432', 'sg', '2017-11-10 12:58:12'),
(9, 'Bapu', 'Patil', '9980981', 'baou@gmail.com', '2017-11-10 13:05:05'),
(10, 'abhay', 'desh', '99030384', 'abhay@gmail.com', '2017-11-10 13:26:04'),
(11, 'Blah', 'blah', '9089093', 'blah@gmail.com', '2017-11-10 13:31:41'),
(12, 'abcd', 'efgh', '93974', 'abcd@gmail.com', '2017-11-10 16:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `cid` int(11) NOT NULL,
  `cshort` varchar(250) NOT NULL,
  `clastname` varchar(20) NOT NULL,
  `clocation` varchar(250) NOT NULL,
  `cdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`cid`, `cshort`, `clastname`, `clocation`, `cdate`) VALUES
(7, 'Koushal', 'KH', 'Kolar', '10-11-2017'),
(8, 'mahathi', 'S', 'RR Nagar', '10-11-2017'),
(9, 'B.Com', '', 'BACHELOR OF COMMERCE', '12-04-2016'),
(10, 'B.TECH', '', 'BACHELOR OF TECHNOLOGY', '12-04-2016'),
(11, 'M.B.A', '', 'MASTER OF BUSINESS ADMINISTRATION', '17-04-2016'),
(12, 'Bapusaheb', 'Patil', 'CSE', '10-11-2017'),
(14, 'Chetan', 'BM', 'Bangalore', '10-11-2017'),
(15, 'Apeksha', 'Joshi', 'India', '10-11-2017'),
(17, 'Bharadwaj', 'Murthy', 'Rnsit', '10-11-2017'),
(18, 'hhghkghgj', 'iiiikh', 'hjgf', '10-11-2017'),
(20, '2017-11-17', '10:00:00', '9', '15'),
(21, '2017-11-17', '10:00:00', '5', '23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `loginid` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `loginid`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'madan', 'b59c67bf196a4758191e42f76670ceba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`stuid`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `stuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
