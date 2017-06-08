-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2017 at 11:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `job` int(11) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `job`, `user`) VALUES
(1, 1, 'demo@demo.com'),
(2, 3, 'demo@demo.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'dsfas', 'abhishek.jain@trippo.co.in', '214124', 'sdgsg\r\nghj'),
(2, 'dsfas', 'abhishek.jain@trippo.co.in', '214124', 'sdgsg\r\nghj');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `web` varchar(255) NOT NULL,
  `job_desig` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `no_of_pos` varchar(255) NOT NULL,
  `work_exp_min` int(11) NOT NULL,
  `job_loc` varchar(255) NOT NULL,
  `ctc_min` int(11) NOT NULL,
  `sal_det` varchar(255) NOT NULL,
  `cand_prof` text NOT NULL,
  `ug_qual` varchar(255) NOT NULL,
  `pg_qual` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `work_exp_max` int(11) NOT NULL,
  `ctc_max` int(11) NOT NULL,
  `time_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `company`, `name`, `designation`, `mobile`, `email`, `address`, `web`, `job_desig`, `detail`, `no_of_pos`, `work_exp_min`, `job_loc`, `ctc_min`, `sal_det`, `cand_prof`, `ug_qual`, `pg_qual`, `time`, `day`, `work_exp_max`, `ctc_max`, `time_post`, `status`) VALUES
(1, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-08 08:36:12', 1),
(2, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-08 08:49:29', 1),
(3, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-08 08:36:11', 1),
(4, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-08 08:36:10', 1),
(5, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-08 08:48:13', 0),
(6, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-08 08:49:37', 1),
(7, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-08 08:48:13', 0),
(8, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-08 08:49:43', 1),
(9, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-08 08:48:12', 0),
(10, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-08 08:48:05', 0),
(11, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-08 08:47:32', 0),
(12, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-08 08:47:10', 0),
(13, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-08 08:47:09', 0),
(14, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-08 08:47:09', 0),
(15, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-08 08:47:08', 0),
(16, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-08 08:47:08', 0),
(17, 'sf', 'dasf', 'saf', '24', 'admin@admin.com', 'fsa', 'fsda', 'Audit Manager', 'asf', '2', 1, 'Hyderabad / Secunderabad', 125000, 'das', 'sdf', '80', '160', '10:00 AM-05:00 PM', 'Anyday', 1, 125000, '2017-06-08 08:47:08', 0),
(18, 'sf', 'dasf', 'saf', '24', 'admin@admin.com', 'fsa', 'fsda', 'Audit Manager', 'asf', '2', 1, 'Hyderabad / Secunderabad', 125000, 'das', 'sdf', '80', '160', '10:00 AM-05:00 PM', 'Anyday', 1, 125000, '2017-06-08 08:47:07', 0),
(19, 'sdf', 'fsdfa', 'gfdgdf', '24124', 'admin@admin.com', 'sfd', 'sdf', 'Credit/Control Manager', 'fsdsffd', '2', 15, 'Gannavaram', 300000, 'sfd', 'fds', '77', '160', '10:00 AM-05:00 PM', 'Anyday', 18, 425000, '2017-06-08 08:47:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `work_exp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `qual` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `aoi` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `name`, `work_exp`, `email`, `mobile`, `qual`, `spec`, `gender`, `country`, `city`, `aoi`, `salary`, `cv`) VALUES
(1, 'dfa', '', 'demo@demo.com', '', '', '', '', '', '', '', '', ''),
(2, 'dfa', '4year4month', '', '', '', '', '', '', '', '', '', ''),
(3, 'ASDF', '1year1month', '', '', '', '', '', '', '', '', '', ''),
(4, 'ASDF', '1year1month', 'sdf@FDSF.GDF', '24', '27', 'zzzsds', 'Male', 'India', '48', 'fds', '11Lac70thousand', '85064feone.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'jdd dasdas', '', '421', '43'),
(2, 'jdd dasdas', '', '421', '43'),
(3, 'dsad', 'sdds@s.com', '231', '231'),
(4, 'dsad', 'sdds@s.com', '231', '231'),
(5, '', 'df@fsa.kjl', '', 'sdf'),
(6, 'demo', 'demo@demo.com', '1234567890', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
