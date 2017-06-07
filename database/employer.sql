-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2017 at 07:34 AM
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
  `time_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `company`, `name`, `designation`, `mobile`, `email`, `address`, `web`, `job_desig`, `detail`, `no_of_pos`, `work_exp_min`, `job_loc`, `ctc_min`, `sal_det`, `cand_prof`, `ug_qual`, `pg_qual`, `time`, `day`, `work_exp_max`, `ctc_max`, `time_post`) VALUES
(1, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(2, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(3, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(4, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(5, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(6, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(7, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(8, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(9, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(10, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(11, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(12, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(13, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(14, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(15, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', 1, '56', 225000, 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(16, 'fg', 'sfd', 'dfsg', '352', 'a@s.j', 'fds', 'fsdg', 'Audit Manager', 'fds', '', 0, '', 0, '', '', '', '', '10:00 AM-05:00 PM', 'Anyday', 0, 0, '2017-06-07 05:28:02'),
(17, 'sf', 'dasf', 'saf', '24', 'admin@admin.com', 'fsa', 'fsda', 'Audit Manager', 'asf', '2', 1, 'Hyderabad / Secunderabad', 125000, 'das', 'sdf', '80', '160', '10:00 AM-05:00 PM', 'Anyday', 1, 125000, '2017-06-07 05:28:02'),
(18, 'sf', 'dasf', 'saf', '24', 'admin@admin.com', 'fsa', 'fsda', 'Audit Manager', 'asf', '2', 1, 'Hyderabad / Secunderabad', 125000, 'das', 'sdf', '80', '160', '10:00 AM-05:00 PM', 'Anyday', 1, 125000, '2017-06-07 02:02:01'),
(19, 'sdf', 'fsdfa', 'gfdgdf', '24124', 'admin@admin.com', 'sfd', 'sdf', 'Credit/Control Manager', 'fsdsffd', '2', 15, 'Gannavaram', 300000, 'sfd', 'fds', '77', '160', '10:00 AM-05:00 PM', 'Anyday', 18, 425000, '2017-06-07 02:02:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
