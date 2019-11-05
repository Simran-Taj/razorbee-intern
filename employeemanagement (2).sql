-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 01:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
-- Table structure for table `employeemaster1`
--

CREATE TABLE `employeemaster1` (
  `id` int(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `empid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `alternatenumber` int(100) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `presentaddress` varchar(100) NOT NULL,
  `permanentaddress` varchar(100) NOT NULL,
  `maritalstatus` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `adminprivileges` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeemaster1`
--

INSERT INTO `employeemaster1` (`id`, `empname`, `empid`, `email`, `designation`, `mobile`, `alternatenumber`, `doj`, `dob`, `gender`, `presentaddress`, `permanentaddress`, `maritalstatus`, `nationality`, `department`, `adminprivileges`) VALUES
(1, 'Ashwak', 'RB001', 'ashwak@razorbee.com', 'Director', 2147483647, 2147483647, '12-02-2019', '13-12-2019', 'Male', 'singasandra', 'bangalore', 'Married', 'indian', 'IT', '1'),
(2, 'simran', 'rb003', 'simran@razorbee.com', 'employee', 2147483647, 2147483647, '12-06-2019', '08-03-1997', 'Female', 'singasandra', 'periyapatna', 'Single', 'indian', 'web development', 'undefined'),
(6, 'qsa', '', '', '', 0, 0, '', '', 'undefined', '', '', 'undefined', 'indian', 'select', 'undefined');

-- --------------------------------------------------------

--
-- Table structure for table `newtask`
--

CREATE TABLE `newtask` (
  `id` int(100) NOT NULL,
  `assignee` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status_id` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newtask`
--

INSERT INTO `newtask` (`id`, `assignee`, `description`, `status_id`, `comments`) VALUES
(1, 'Sindhu', 'test', 'open', 'ewewwr'),
(5, 'Priya', 'hello', 'open', 'testeree');

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
(1, 'student details', 'simran', 'development', 'New'),
(2, 'employee table', 'uzma', 'development', 'New'),
(3, 'hospital management', 'ashwak', 'details of patient', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `salestracker`
--

CREATE TABLE `salestracker` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `followupby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salestracker`
--

INSERT INTO `salestracker` (`id`, `name`, `mobile`, `description`, `status`, `followupby`) VALUES
(1, '0', 0, '0', '0', '0'),
(2, '0', 0, '0', '0', '0'),
(3, '0', 0, '0', '0', '0'),
(4, '0', 0, '0', '0', '0'),
(5, '', 324, 'dfg', 'new', ''),
(6, 'fghf', 543, 'fgcb', 'new', ''),
(7, 'sdg', 3245, 'dfg', 'new', ''),
(8, 'sdg', 3245, 'dfg', 'new', ''),
(9, 'gfh', 5543, 'fgh', 'new', ''),
(10, 'gfh', 5543, 'fgh', 'new', ''),
(11, 'gfh', 5543, 'fgh', 'new', ''),
(12, 'fdghc', 54354, 'cbv', 'new', 'RB001'),
(13, 'fdghc', 54354, 'cbv', 'new', 'RB001'),
(14, 'fdghc', 54354, 'cbv', 'new', 'RB001'),
(15, 'fdghc', 54354, 'cbv', 'new', 'RB001'),
(16, 'sgf', 2342, 'sdfv', 'new', 'RB001'),
(17, 'sgf', 2342, 'sdfv', 'new', 'RB001'),
(18, 'sgf', 2342, 'sdfv', 'new', 'RB001'),
(19, 'sgf', 2342, 'sdfv', 'new', 'RB001');

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
-- Table structure for table `statusmaster`
--

CREATE TABLE `statusmaster` (
  `id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `status_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusmaster`
--

INSERT INTO `statusmaster` (`id`, `status`, `status_id`) VALUES
(1, 'new', 0),
(2, 'open', 0),
(3, 'In-progress', 0),
(4, 'Invalid', 0),
(5, 'closed', 0),
(6, 'Reopen', 0),
(7, 'Differed', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taskcomment`
--

CREATE TABLE `taskcomment` (
  `id` int(100) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `task_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskcomment`
--

INSERT INTO `taskcomment` (`id`, `comments`, `task_id`, `status`, `date`) VALUES
(14, 'reset', 1, 'open', '2019-11-05 10:31:22.000000'),
(15, 'new test', 5, 'In-progress', '2019-11-05 10:33:01.000000'),
(16, 'new test', 5, 'In-progress', '2019-11-05 10:33:07.000000');

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
(3, 'RB006', '2019-09-23', 'this is to infor'),
(4, 'RB002', '2019-10-22', 'ftyhfrt'),
(5, 'RB002', '2019-10-22', 'done'),
(6, 'RB002', '2019-10-22', 'completed'),
(7, 'RB002', '2019-10-22', 'h'),
(8, 'RB002', '2019-10-22', 'jjj'),
(9, 'RB002', '2019-10-22', 'kk'),
(10, 'RB002', '2019-10-22', 'shd'),
(11, 'RB002', '2019-10-22', 'ff'),
(12, 'RB002', '2019-10-22', 'f'),
(13, 'RB002', '2019-10-22', 'ff'),
(14, 'RB002', '2019-10-22', 'ss'),
(15, 'RB002', '2019-10-29', 'ff'),
(16, 'RB002', '2019-10-29', 'xx'),
(17, 'RB002', '2019-10-29', 'cc'),
(18, 'RB002', '2019-10-29', 'x'),
(19, 'RB002', '2019-10-29', 'x'),
(20, 'RB002', '2019-10-29', 'hu'),
(21, 'RB002', '2019-10-29', 'uyu'),
(22, 'RB002', '2019-10-29', 'rer'),
(23, 'RB002', '2019-10-29', 'ere'),
(24, 'RB002', '2019-10-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `tasktable`
--

CREATE TABLE `tasktable` (
  `id` int(100) NOT NULL,
  `empid` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `task` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasktable`
--

INSERT INTO `tasktable` (`id`, `empid`, `date`, `task`) VALUES
(1, '', '0000-00-00', 'erwer');

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

CREATE TABLE `tblattendance` (
  `id` int(100) NOT NULL,
  `empid` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` time NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblattendance`
--

INSERT INTO `tblattendance` (`id`, `empid`, `date`, `time`, `type`) VALUES
(17, 'RB004', '2019-09-26', '11:21:56', 'login'),
(18, 'RB004', '2019-09-26', '11:22:58', 'logout'),
(19, 'RB005', '2019-09-26', '14:33:57', 'login'),
(20, 'RB005', '2019-09-26', '14:35:58', 'logout'),
(21, 'RB006', '2019-09-27', '10:31:47', 'login'),
(32, 'RB005', '2019-09-27', '11:42:18', 'login'),
(34, 'RB001', '2019-09-27', '11:47:52', 'login'),
(37, 'RB005', '2019-09-27', '11:50:03', 'logout'),
(49, 'RB004', '2019-09-27', '12:26:14', 'login'),
(50, 'RB004', '2019-09-27', '12:26:32', 'logout'),
(56, 'RB001', '2019-09-30', '18:32:15', 'login'),
(57, 'RB001', '2019-09-30', '18:32:21', 'logout'),
(58, 'RB001', '2019-10-01', '10:52:48', 'login'),
(59, 'RB002', '2019-10-22', '18:22:25', 'login'),
(60, 'RB002', '2019-10-22', '18:22:30', 'logout'),
(61, 'RB002', '2019-10-29', '11:21:50', 'login'),
(62, 'RB002', '2019-10-29', '11:21:53', 'logout'),
(63, 'RB002', '2019-10-30', '15:53:21', 'login'),
(64, 'RB002', '2019-10-30', '15:53:22', 'logout'),
(65, 'RB002', '2019-10-31', '11:50:18', 'login'),
(66, 'RB002', '2019-10-31', '11:50:23', 'logout'),
(67, 'RB002', '2019-11-02', '10:27:29', 'login');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeemaster1`
--
ALTER TABLE `employeemaster1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newtask`
--
ALTER TABLE `newtask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectmaster`
--
ALTER TABLE `projectmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salestracker`
--
ALTER TABLE `salestracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusmaster`
--
ALTER TABLE `statusmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskcomment`
--
ALTER TABLE `taskcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskmanagement`
--
ALTER TABLE `taskmanagement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasktable`
--
ALTER TABLE `tasktable`
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
-- AUTO_INCREMENT for table `employeemaster1`
--
ALTER TABLE `employeemaster1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newtask`
--
ALTER TABLE `newtask`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projectmaster`
--
ALTER TABLE `projectmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salestracker`
--
ALTER TABLE `salestracker`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `statusmaster`
--
ALTER TABLE `statusmaster`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `taskcomment`
--
ALTER TABLE `taskcomment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `taskmanagement`
--
ALTER TABLE `taskmanagement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tasktable`
--
ALTER TABLE `tasktable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblattendance`
--
ALTER TABLE `tblattendance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
