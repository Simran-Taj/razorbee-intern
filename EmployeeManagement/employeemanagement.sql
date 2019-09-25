-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 12:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `id` int(100) NOT NULL,
  `empid` text NOT NULL,
  `empname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `designation` text NOT NULL,
  `mobilenumber` text NOT NULL,
  `residencephone` text NOT NULL,
  `doj` text NOT NULL,
  `dol` text NOT NULL,
  `isadmin` int(11) NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeemaster`
--

INSERT INTO `employeemaster` (`id`, `empid`, `empname`, `emailid`, `designation`, `mobilenumber`, `residencephone`, `doj`, `dol`, `isadmin`, `isactive`) VALUES
(1, 'RB001', 'Ashwak', 'ashwak@razorbee.com', 'Director', '9880507806', '0', '01-10-2018', '', 1, 1),
(2, 'RB002', 'Anam', 'anam@razorbee.com', 'Director', '9988776655', '9876543210', '01-10-2018', '', 1, 1),
(3, 'RB003', 'Saleem', 'saleem@razorbee.com', 'CEO', '9988776654', '9876543211', '01-10-2018', '', 1, 1),
(4, 'RB004', 'Priya', 'priya@razorbee.com', 'employee', '', '', '', '', 0, 1),
(5, 'RB005', 'Roopa', 'roopa@razorbee.com', 'Employee', '', '', '', '', 0, 1),
(6, 'RB006', 'Sindhu', 'sindhu@razorbee.com', 'Employee', '', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `projectcomments`
--

CREATE TABLE `projectcomments` (
  `projectid` int(11) NOT NULL,
  `empname` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectcomments`
--

INSERT INTO `projectcomments` (`projectid`, `empname`, `comment`) VALUES
(1, 'Ashwak', 'My comments'),
(1, 'Anam', 'My comments dsfja s djfsaadj fadjf ksjdkfjsd');

-- --------------------------------------------------------

--
-- Table structure for table `projectmaster`
--

CREATE TABLE `projectmaster` (
  `id` int(11) NOT NULL,
  `projectname` text NOT NULL,
  `clientname` text NOT NULL,
  `description` text NOT NULL,
  `projectstatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectmaster`
--

INSERT INTO `projectmaster` (`id`, `projectname`, `clientname`, `description`, `projectstatus`) VALUES
(1, 'p1', 'c1', 'd1', ''),
(2, 'p2', 'n', 'j', ''),
(3, 'p3', 'j', 'kkj', ''),
(4, 'p7', '', '', ''),
(5, 'nm', '', '', ''),
(6, 'mm', 'dfa', 'dfsd', ''),
(7, 'kdf', '', '', ''),
(8, 'kkj', '', '', ''),
(9, 'kjdsf', '', '', ''),
(10, 'abcd', 'a', 'b', ''),
(11, 'a1', '', '', ''),
(12, 'jj', '', '', ''),
(13, 'knj', '', '', ''),
(14, 'kk', '', '', ''),
(15, 'kll', '', '', ''),
(16, 'klkl', '', '', ''),
(17, 'mlk', '', '', ''),
(18, 'lklk', '', '', ''),
(19, 'op', '', '', ''),
(20, 'mana', '', '', ''),
(21, 'nbb', 'kg', 'kfd', ''),
(22, 'rr', '', '', 'New'),
(23, 'pr1', 'jfds', 'jef', 'New'),
(24, 'mnop', '', '', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(100) NOT NULL,
  `empid` text NOT NULL,
  `emailid` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `empid`, `emailid`, `pass`) VALUES
(1, 'RB001', 'ashwak@razorbee.com', '123'),
(2, 'RB002', 'anam@razorbee.com', '123'),
(3, 'RB003', 'saleem@razorbee.com', '123'),
(4, 'RB006', 'sindhu@razorbee.com', '1234'),
(11, 'RB005', 'roopa@razorbee.com', '1234'),
(15, 'RB004', 'priya@razorbee.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `taskmanagement`
--

CREATE TABLE `taskmanagement` (
  `id` int(100) NOT NULL,
  `empid` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `task` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskmanagement`
--

INSERT INTO `taskmanagement` (`id`, `empid`, `date`, `task`) VALUES
(1, 'RB004', '2019-09-23', 'Today i have done task management module and view attendance'),
(2, 'RB006', '2019-09-23', 'todays task'),
(3, 'RB006', '2019-09-23', 'this is to infor');

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

CREATE TABLE `tblattendance` (
  `id` int(100) NOT NULL,
  `empid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblattendance`
--

INSERT INTO `tblattendance` (`id`, `empid`, `date`, `time`, `type`) VALUES
(1998, 'RB004', '2019-09-25', '13:46:55', 'login'),
(1999, 'RB004', '2019-09-25', '13:46:55', 'login'),
(2000, 'RB004', '2019-09-25', '13:46:55', 'login'),
(2001, 'RB004', '2019-09-25', '13:47:34', 'login'),
(2002, 'RB004', '2019-09-25', '13:50:40', 'login'),
(2003, 'RB004', '2019-09-25', '13:50:40', 'login'),
(2004, 'RB004', '2019-09-25', '13:50:40', 'login'),
(2005, 'RB004', '2019-09-25', '13:50:40', 'login'),
(2006, 'RB004', '2019-09-25', '13:50:54', 'login'),
(2007, 'RB004', '2019-09-25', '13:51:10', 'login'),
(2008, 'RB004', '2019-09-25', '13:52:04', 'login'),
(2009, 'RB004', '2019-09-25', '13:52:05', 'login'),
(2010, 'RB004', '2019-09-25', '13:52:05', 'login'),
(2011, 'RB004', '2019-09-25', '13:52:13', 'login'),
(2012, 'RB004', '2019-09-25', '13:58:23', 'login'),
(2013, 'RB004', '2019-09-25', '14:05:14', 'login'),
(2014, 'RB004', '2019-09-25', '14:05:29', 'login'),
(2015, 'RB004', '2019-09-25', '14:06:47', 'login'),
(2016, 'RB004', '2019-09-25', '14:07:39', 'login'),
(2017, 'RB004', '2019-09-25', '14:07:46', 'login'),
(2018, 'RB004', '2019-09-25', '14:08:08', 'login'),
(2019, 'RB004', '2019-09-25', '14:08:17', 'login'),
(2020, 'RB004', '2019-09-25', '14:08:19', 'login'),
(2021, 'RB004', '2019-09-25', '14:08:20', 'login'),
(2022, 'RB004', '2019-09-25', '14:08:20', 'login'),
(2023, 'RB004', '2019-09-25', '14:08:20', 'login'),
(2024, 'RB004', '2019-09-25', '14:08:20', 'login'),
(2025, 'RB004', '2019-09-25', '14:08:20', 'login'),
(2026, 'RB004', '2019-09-25', '14:08:21', 'login'),
(2027, 'RB004', '2019-09-25', '14:08:21', 'login'),
(2028, 'RB004', '2019-09-25', '14:08:21', 'login'),
(2029, 'RB004', '2019-09-25', '14:08:21', 'login'),
(2030, 'RB004', '2019-09-25', '14:08:21', 'login'),
(2031, 'RB004', '2019-09-25', '14:08:21', 'login'),
(2032, 'RB004', '2019-09-25', '14:08:22', 'login'),
(2033, 'RB004', '2019-09-25', '14:08:22', 'login'),
(2034, 'RB004', '2019-09-25', '14:08:22', 'login'),
(2035, 'RB004', '2019-09-25', '14:08:22', 'login'),
(2036, 'RB004', '2019-09-25', '14:08:22', 'login'),
(2037, 'RB004', '2019-09-25', '14:08:23', 'login'),
(2038, 'RB004', '2019-09-25', '14:08:23', 'login'),
(2039, 'RB004', '2019-09-25', '14:08:23', 'login'),
(2040, 'RB004', '2019-09-25', '14:08:23', 'login'),
(2041, 'RB004', '2019-09-25', '14:08:23', 'login'),
(2042, 'RB004', '2019-09-25', '14:08:24', 'login'),
(2043, 'RB004', '2019-09-25', '14:08:24', 'login'),
(2044, 'RB004', '2019-09-25', '14:08:45', 'login'),
(2045, 'RB004', '2019-09-25', '14:09:09', 'login'),
(2046, 'RB004', '2019-09-25', '14:37:12', 'login'),
(2047, 'RB004', '2019-09-25', '14:37:12', 'login'),
(2048, 'RB004', '2019-09-25', '14:37:44', 'login'),
(2049, 'RB004', '2019-09-25', '14:38:02', 'login'),
(2050, 'RB004', '2019-09-25', '14:38:23', 'login'),
(2051, 'RB004', '2019-09-25', '14:38:38', 'login'),
(2052, 'RB004', '2019-09-25', '14:38:45', 'login'),
(2053, 'RB004', '2019-09-25', '14:39:27', 'login'),
(2054, 'RB004', '2019-09-25', '14:43:23', 'login'),
(2055, 'RB004', '2019-09-25', '15:07:49', 'login'),
(2056, 'RB004', '2019-09-25', '15:09:19', 'login'),
(2057, 'RB004', '2019-09-25', '15:09:47', 'login'),
(2058, 'RB004', '2019-09-25', '15:10:10', 'login'),
(2059, 'RB004', '2019-09-25', '15:16:14', 'login'),
(2060, 'RB004', '2019-09-25', '15:17:01', 'login'),
(2061, 'RB004', '2019-09-25', '15:17:10', 'login'),
(2062, 'RB004', '2019-09-25', '15:18:54', 'login'),
(2063, 'RB004', '2019-09-25', '15:19:00', 'login'),
(2064, 'RB004', '2019-09-25', '15:19:00', 'login'),
(2065, 'RB004', '2019-09-25', '15:19:00', 'login'),
(2066, 'RB004', '2019-09-25', '15:19:06', 'login'),
(2067, 'RB004', '2019-09-25', '15:19:06', 'login'),
(2068, 'RB004', '2019-09-25', '15:19:07', 'login'),
(2069, 'RB004', '2019-09-25', '15:19:31', 'login'),
(2070, 'RB004', '2019-09-25', '15:20:00', 'login'),
(2071, 'RB004', '2019-09-25', '15:20:34', 'login'),
(2072, 'RB004', '2019-09-25', '15:20:49', 'login'),
(2073, 'RB004', '2019-09-25', '15:20:59', 'login'),
(2074, 'RB004', '2019-09-25', '15:32:20', 'login'),
(2075, 'RB004', '2019-09-25', '15:32:50', 'login'),
(2076, 'RB004', '2019-09-25', '15:32:56', 'login'),
(2077, 'RB004', '2019-09-25', '15:33:04', 'login'),
(2078, 'RB004', '2019-09-25', '15:33:09', 'login');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskmanagement`
--
ALTER TABLE `taskmanagement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeemaster`
--
ALTER TABLE `employeemaster`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `taskmanagement`
--
ALTER TABLE `taskmanagement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblattendance`
--
ALTER TABLE `tblattendance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2079;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
