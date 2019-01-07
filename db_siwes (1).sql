-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 01:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_siwes`
--

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE IF NOT EXISTS `logbook` (
`id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `activities` varchar(500) NOT NULL,
  `diagram` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `referralCode` varchar(20) NOT NULL,
  `matricNo` varchar(20) NOT NULL,
  `tokenId` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `date`, `activities`, `diagram`, `status`, `remark`, `comment`, `referralCode`, `matricNo`, `tokenId`) VALUES
(4, '01-01-2019', 'I created a robot the walks for 1 hour, also had a time to play in the game room with some of the staff.', 'no-image.png', 'unseen', 'satisfied', 'good work', '2020', 'F/HD/17/3210005', '16f3ed9d3c6f9097caa424a1810fa155'),
(5, '01-01-2019', 'i Learnt on how to configure a LAN network, using a switch and cables ', 'network wiring.jpg', 'seen', 'not satisfied', 'Use a good diagram next time', '4198', 'F/HD/17/3210020', 'c06fc305833fb9a2e42a888ee8d7bf7c'),
(7, '02-01-2019', 'I created a wedsite today.\r\nits was so much interesting.', 'Capture 4.PNG', 'seen', 'not satisfied', 'good job', '2020', 'F/HD/17/3210005', '16f3ed9d3c6f9097caa424a1810fa155'),
(14, '04-01-2019', 'I configured a Motherboard', 'motherboard  system unit.jpg', 'seen', 'not satisfied', 'i need a large diagram', '2020', 'F/HD/17/3210005', '16f3ed9d3c6f9097caa424a1810fa155');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `matricNo` varchar(30) NOT NULL,
  `issue` varchar(300) NOT NULL,
  `supervisorName` varchar(100) NOT NULL,
  `referralCode` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `date`, `matricNo`, `issue`, `supervisorName`, `referralCode`, `status`) VALUES
(1, '05-01-2019', 'F/HD/17/3210020', 'His not putting the required diagram', 'Uche Onyekwere', '4198', 'seen'),
(2, '06-01-2019', 'F/HD/17/3210005', 'His misusing the platform', 'Endurance Osarieti', '2020', 'seen'),
(3, '06-01-2019', 'F/HD/17/3210020', 'He was not present when i visited his siwes place', 'Uche Onyekwere', '4198', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE IF NOT EXISTS `studentlogin` (
`id` int(11) NOT NULL,
  `matricNo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `department` int(11) NOT NULL,
  `firstName` varchar(300) NOT NULL,
  `lastName` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phoneNo` varchar(300) NOT NULL,
  `referralCode` varchar(300) NOT NULL,
  `siwesPlacement` varchar(300) NOT NULL,
  `siwesPlacementAddress` varchar(200) NOT NULL,
  `tokenId` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `matricNo`, `password`, `salt`, `department`, `firstName`, `lastName`, `email`, `phoneNo`, `referralCode`, `siwesPlacement`, `siwesPlacementAddress`, `tokenId`) VALUES
(2, 'F/HD/17/3210005', 'ec9ba93c96a8c271ef9a1a0c1d694d1111e5be325c0cad80c1675a917cb06f94', 'Ìñ±‘R´ôœy_ýKI“w´íñ81Ê8slX¾?V', 6, 'Steve', 'Jackson', 'jackson11@gmail.com', '08188531726', '2020', 'Nexus Alliance Limited', '289B, Corporation Drive, Dolphin Estate, Ikoyi.1, Balogun Close Anifowose Lane, off Maidan Road, Mile 12, Lagos', '16f3ed9d3c6f9097caa424a1810fa155'),
(3, 'F/HD/17/3210020', '323fa0ff32a2b9bc450da578b70accb88eb32e058f9df84abc2aa39a5da620d4', '?œ nK|ÌÀ‚-frk™Fÿ„ÕîìTÌ«³†WX', 2, 'Ada Glory', 'Ogbonna', 'a.ogbonna@ymail.com', '08188531726', '4198', 'KPMG', '188, borno way, oyinbo', 'c06fc305833fb9a2e42a888ee8d7bf7c');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE IF NOT EXISTS `userroles` (
`id` int(11) NOT NULL,
  `userRole` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`id`, `userRole`) VALUES
(1, 'Administrator'),
(2, 'Course Adviser'),
(3, 'Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `userstable`
--

CREATE TABLE IF NOT EXISTS `userstable` (
`id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `userRole` varchar(100) NOT NULL,
  `referralCode` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstable`
--

INSERT INTO `userstable` (`id`, `firstName`, `lastName`, `userName`, `password`, `salt`, `userRole`, `referralCode`) VALUES
(2, 'Collins', 'Benson', 'admin@gmail.com', 'f65e44284d83f9f9d118d06d0b5a4442b180a770ddb2d580e5e51c0be63891d6', '{‘ °Ãa›¢$Q€‘Ôçû÷U@ªÑ=qœ²”©±', '1', ''),
(6, 'Uche', 'Onyekwere', 'joy124@k.com', '841e2d555f0272215382e6d142321a79f66190bec15e998b6918f4a3f379af21', '•l°_œ©c/|''w:ü‹ÏD×’cuBÝhRrÈzy', '3', '4198'),
(9, 'Ada', 'Ogbonna', 'ada@ymail', 'c863d3015f29bed6c4d894ea952b88b7a3e255c39d830328e70ceb2fbf5ebda6', 'Gö,4x”©+öTÍA{5Ÿ‹²/Á*ÕG‹', '2', ''),
(10, 'Endurance', 'Osarieti', 'endy@clane', 'c0005e3b78e67914ab62d4143b78385f63c49f84ea571e4deea1f36ed430341c', '½–›ÂÐ'': ''fPNáà±ÂÈ„TlÁœ2ÂõU', '3', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userstable`
--
ALTER TABLE `userstable`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userstable`
--
ALTER TABLE `userstable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
