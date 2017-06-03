-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2017 at 10:01 AM
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
  `work_exp` varchar(255) NOT NULL,
  `job_loc` varchar(255) NOT NULL,
  `ctc` varchar(255) NOT NULL,
  `sal_det` varchar(255) NOT NULL,
  `cand_prof` text NOT NULL,
  `ug_qual` varchar(255) NOT NULL,
  `pg_qual` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `company`, `name`, `designation`, `mobile`, `email`, `address`, `web`, `job_desig`, `detail`, `no_of_pos`, `work_exp`, `job_loc`, `ctc`, `sal_det`, `cand_prof`, `ug_qual`, `pg_qual`, `time`, `day`) VALUES
(1, 'sdf', 'ads', 'sa', '642', 'a@a.com', 'dfg\r\nhhjk', 'fhfhgg', 'fsdgdsf', 'sdgfbvb', '4', '1year10month', '56', '225000-350000', 'as', 'sdf ', '79', '158', '02:30 PM-03:00 PM', 'Anyday');

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
(1, 'dfa', '', '', '', '', '', '', '', '', '', '', ''),
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
(5, '', 'df@fsa.kjl', '', 'sdf');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
