-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 07:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` int(100) NOT NULL,
  `to` text NOT NULL,
  `from` text NOT NULL,
  `msg` text NOT NULL,
  `status` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `to`, `from`, `msg`, `status`, `time`) VALUES
(60, 'b@yahoo.com', 'a@yahoo.com', 'dffd', '0', '2018-07-25 11:55:01'),
(61, 'b@yahoo.com', 'a@yahoo.com', 'ss', '0', '2018-07-25 11:59:44'),
(62, 'a@yahoo.com', 'b@yahoo.com', 'ssdfdf', '0', '2018-07-25 12:03:30'),
(63, 'b@yahoo.com', 'a@yahoo.com', 'ssdfdf', '0', '2018-07-25 12:08:19'),
(64, 'a@yahoo.com', 'b@yahoo.com', 'cvcv', '0', '2018-07-25 12:08:22'),
(65, 'b@yahoo.com', 'a@yahoo.com', 'fgfg', '0', '2018-07-26 00:53:31'),
(66, 'b@yahoo.com', 'a@yahoo.com', 'nagana', '0', '2018-07-26 01:57:46'),
(67, 'b@yahoo.com', 'a@yahoo.com', 'fdd', '0', '2018-07-26 03:55:20'),
(68, 'b@yahoo.com', 'a@yahoo.com', 'gghhg', '0', '2018-07-26 03:57:19'),
(69, 'jing@yahoo.com', 'a@yahoo.com', 'dfdf', '1', '2018-07-26 04:11:02'),
(70, 'b@yahoo.com', 'rose@yahoo.com', 'hello', '0', '2018-07-26 22:31:42'),
(71, 'rose@yahoo.com', 'b@yahoo.com', 'hi there', '0', '2018-07-27 01:04:01'),
(72, 'rose@yahoo.com', 'b@yahoo.com', 'dfdf', '0', '2018-07-27 01:20:23'),
(73, 'b@yahoo.com', 'rose@yahoo.com', 'wer are you', '0', '2018-07-28 04:26:49'),
(74, 'a@yahoo.com', 'rose@yahoo.com', 'hi jun', '0', '2018-07-28 04:48:29'),
(78, 'b@yahoo.com', 'rose@yahoo.com', 'huyy', '1', '2021-07-15 08:38:49'),
(79, 'rose@yahoo.com', 'a@yahoo.com', 'huyy mag pasa kana late kana parang yung estudyante ko ', '0', '2021-07-22 03:04:30'),
(80, 'b@yahoo.com', 'rose@yahoo.com', 'hi maam im looking for a job kahit ano', '1', '2021-07-22 03:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
CREATE TABLE `employers` (
  `accountid` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 1,
  `birthday` date NOT NULL,
  `contact` varchar(50) NOT NULL,
  `civilstatus` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `idphoto` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`accountid`, `lname`, `fname`, `mname`, `email`, `password`, `address`, `gender`, `birthday`, `contact`, `civilstatus`, `education`, `avatar`, `verified`, `idphoto`, `status`) VALUES
(1, 'Abingona', 'Lesly', 'Capistrano', 'b@yahoo.com', '123123', 'Campo', 0, '2007-09-12', '09519059886', 'Single', 'Elementary Graduate', '16366-ID Picture (2).jpg', 1, '', 1),
(2, 'Abingona', 'Jun', 'Capistrano', 'a@yahoo.com', '123', 'ilocos', 1, '2001-02-04', '+639165991010', 'married', 'college undergraduate', '50083-sample.jpg', 1, '98375-sample.jpg', 1),
(5, 'AKO', 'ako', 'sdf', 'ako@gmail.com', 'qweqweqwe', 'Campo', 1, '1992-05-04', '0954266556', 'Single', 'College Graduate', '', 1, '', 1),
(6, 'crane', 'Rose', 'r', '123@mail.com', '123123', 'campo avejar', 1, '2007-10-14', '12312312', 'Single', 'Elementary Graduate', '', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employersrating`
--

DROP TABLE IF EXISTS `employersrating`;
CREATE TABLE `employersrating` (
  `id` int(11) NOT NULL,
  `rating` tinyint(3) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `byapplicant` int(11) NOT NULL,
  `toclient` int(11) NOT NULL,
  `dateposted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employersrating`
--

INSERT INTO `employersrating` (`id`, `rating`, `comment`, `byapplicant`, `toclient`, `dateposted`) VALUES
(1, 7, 'nice', 1, 1, '2018-07-26 20:35:03'),
(2, 0, 'i hate him', 1, 1, '2018-07-27 04:22:00'),
(3, 1, 'masungit', 1, 1, '2021-07-22 11:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

DROP TABLE IF EXISTS `expertise`;
CREATE TABLE `expertise` (
  `id` int(11) NOT NULL,
  `accountid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`id`, `accountid`, `title`) VALUES
(2, 1, 'Data Encoder'),
(3, 1, 'Proofreader');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplications`
--

DROP TABLE IF EXISTS `jobapplications`;
CREATE TABLE `jobapplications` (
  `accountid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobapplications`
--

INSERT INTO `jobapplications` (`accountid`, `jobid`, `status`) VALUES
(1, 4, 0),
(1, 9, 0),
(1, 6, 0),
(1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobcontracts`
--

DROP TABLE IF EXISTS `jobcontracts`;
CREATE TABLE `jobcontracts` (
  `accountid` int(11) NOT NULL,
  `mark` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `jobid` int(11) NOT NULL,
  `jobtitle` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `dateposted` datetime NOT NULL DEFAULT current_timestamp(),
  `category` int(11) NOT NULL DEFAULT 0,
  `accountid` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `payrate` int(100) NOT NULL,
  `role` varchar(200) NOT NULL,
  `xdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `jobtitle`, `description`, `dateposted`, `category`, `accountid`, `status`, `payrate`, `role`, `xdate`) VALUES
(1, 'Java Programmer', 'Need someone to make me a customized java desktop application. Must be knowledgeable in Java version 8 above.', '2018-07-23 17:47:37', 0, 1, 2, 0, '', ''),
(2, 'Proofreader', 'Responsible for proofreading and editing content of my articles.', '2018-07-26 12:46:00', 0, 1, 1, 0, '', ''),
(3, 'test', 'test', '2018-08-03 14:15:34', 0, 1, 1, 0, '', ''),
(4, 'Network Engineer', 'A highly skilled network engineer', '2021-07-22 10:30:50', 0, 2, 1, 500, 'Technician', '2021-08-07'),
(5, 'Network Engineer', 'A highly skilled network engineer', '2021-07-22 10:32:52', 0, 2, 1, 500, 'Technician', '2021-08-07'),
(6, 'Network Engineer', 'A highly skilled network engineer', '2021-07-22 10:33:41', 0, 2, 1, 500, 'Technician', '2021-08-07'),
(7, 'Network Engineer', 'A highly skilled network engineer', '2021-07-22 10:34:28', 0, 2, 1, 500, 'Technician', '2021-08-07'),
(8, 'Network Engineer', 'A highly skilled network engineer', '2021-07-22 10:35:13', 0, 2, 2, 500, 'Technician', '2021-08-07'),
(9, 'kahitano', 'farmer axie', '2021-07-22 11:09:32', 0, 2, 2, 500, 'Farmer', '2021-08-25'),
(10, 'OBS Live Tech', 'Can operate OBS', '2021-08-25 06:52:56', 0, 1, 1, 500, 'Technician', '2021-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

DROP TABLE IF EXISTS `jobseekers`;
CREATE TABLE `jobseekers` (
  `accountid` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 1,
  `address` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `idphoto` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `role` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `refer` int(11) NOT NULL,
  `education` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `avail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`accountid`, `lname`, `mname`, `fname`, `birthday`, `email`, `password`, `gender`, `address`, `avatar`, `verified`, `idphoto`, `status`, `role`, `jobtitle`, `description`, `name`, `refer`, `education`, `contact`, `avail`) VALUES
(1, 'Tirona', 'Cruz', 'Rose', '1980-07-17', 'rose@yahoo.com', '12345', 1, 'Nasugbu Batangas', 'joan.jpg', 1, '1533193585626.jpg', 1, '', '', '', '', 1, '', 0, ''),
(3, 'dsds', 'dssd', 'dsds', '2018-07-18', 'hh@yahoo.com', 'd', 1, 'sdsd', '', 1, '', 1, '', '', '', '', 0, '', 0, ''),
(4, 'dsds', 'dssd', 'dsds', '2018-07-18', 'hh@yahoo.com', 'fddf', 1, 'sdsd', '', 0, '', 1, '', '', '', '', 0, '', 0, ''),
(5, 'sa', 'sd', 'sa', '2010-07-10', 'a@yahoo.com', 'a', 1, 'dsds', '', 0, '', 1, '', '', '', '', 0, '', 0, ''),
(6, 'Dela Cruz', 'Berganio', 'Jing', '0000-00-00', 'jing@yahoo.com', '12345', 1, '', '', 0, '', 1, '', '', '', '', 0, '', 0, ''),
(7, 'd', 'd', 'd', '2008-01-18', 'd@yahoo.com', 'x', 1, 'x', '', 0, '', 1, '', '', '', '', 0, '', 0, ''),
(8, 'd', 'd', 'd', '2008-01-18', 'dfgghh', 'x', 1, 'bbb', '', 0, '', 1, '', '', '', '', 0, '', 0, ''),
(9, 'Secret', 'R', 'Rose', '1999-10-13', 'roses@gmail.com', 'asdasd', 1, 'campo avejar', '', 1, '', 0, '', '', '', '', 0, 'College Undergraduate', 2147483647, ''),
(10, 'blast', 'r', 'fire', '2006-10-16', 'blast@gmail.com', '123123', 1, 'campo avejar', '', 1, '', 0, '', '', '', '', 0, 'College Undergraduate', 81232371, '');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekersrating`
--

DROP TABLE IF EXISTS `jobseekersrating`;
CREATE TABLE `jobseekersrating` (
  `id` int(11) NOT NULL,
  `rating` tinyint(3) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `byclient` int(11) NOT NULL,
  `toapplicant` int(11) NOT NULL,
  `dateposted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseekersrating`
--

INSERT INTO `jobseekersrating` (`id`, `rating`, `comment`, `byclient`, `toapplicant`, `dateposted`) VALUES
(1, 3, 'madali kausap, mbilis s work', 2, 1, '2018-07-27 04:38:18'),
(2, 4, 'bad bad', 1, 1, '2018-08-06 14:15:35'),
(3, 3, 'cute', 1, 1, '2018-08-06 14:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `logid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `name`, `category`, `status`, `time`) VALUES
(1, 'b@yahoo.com', 'Client', 'log in', '2021-07-21 23:58:14'),
(2, 'b@yahoo.com', 'Client', 'log in', '2021-07-21 23:58:15'),
(3, 'b@yahoo.com', 'Client', 'log out', '2021-07-21 23:58:34'),
(4, 'rose@yahoo.com', 'Applicant', 'log in', '2021-07-21 23:59:17'),
(5, 'rose@yahoo.com', 'Applicant', '0', '2021-07-22 00:00:22'),
(6, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 00:00:36'),
(7, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 00:00:37'),
(8, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 00:01:26'),
(9, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 00:01:27'),
(10, 'a@yahoo.com', 'Client', 'log out', '2021-07-22 00:03:23'),
(11, 'rose@yahoo.com', 'Applicant', 'log in', '2021-07-22 00:03:29'),
(12, 'rose@yahoo.com', 'Applicant', '0', '2021-07-22 01:40:23'),
(13, 'b@yahoo.com', 'Client', 'log in', '2021-07-22 01:40:52'),
(14, 'b@yahoo.com', 'Client', 'log in', '2021-07-22 01:40:54'),
(15, 'b@yahoo.com', 'Client', 'log out', '2021-07-22 01:41:34'),
(16, 'b@yahoo.com', 'Client', 'log in', '2021-07-22 01:41:44'),
(17, 'b@yahoo.com', 'Client', 'log out', '2021-07-22 01:43:10'),
(18, 'b@yahoo.com', 'Client', 'log in', '2021-07-22 02:12:35'),
(19, 'b@yahoo.com', 'Client', 'log in', '2021-07-22 02:12:36'),
(20, 'b@yahoo.com', 'Client', 'log in', '2021-07-22 02:12:37'),
(21, 'b@yahoo.com', 'Client', 'log out', '2021-07-22 02:12:57'),
(22, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 02:13:02'),
(23, 'rose@yahoo.com', 'Applicant', 'log in', '2021-07-22 02:39:34'),
(24, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 02:48:28'),
(25, 'rose@yahoo.com', 'Applicant', 'log in', '2021-07-22 02:48:41'),
(26, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 03:02:39'),
(27, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 03:02:40'),
(28, 'rose@yahoo.com', 'Applicant', 'log in', '2021-07-22 03:03:57'),
(29, 'rose@yahoo.com', 'Applicant', '0', '2021-07-22 03:07:23'),
(30, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 03:08:51'),
(31, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 03:08:52'),
(32, 'rose@yahoo.com', 'Applicant', 'log in', '2021-07-22 03:09:49'),
(33, 'rose@yahoo.com', 'Applicant', '0', '2021-07-22 03:12:25'),
(34, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 03:13:04'),
(35, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 03:13:06'),
(36, 'a@yahoo.com', 'Client', 'log in', '2021-07-22 03:13:06'),
(37, 'a@yahoo.com', 'Client', 'log out', '2021-07-22 03:13:08'),
(38, 'b@yahoo.com', 'Client', 'log in', '2021-07-27 18:12:55'),
(39, 'b@yahoo.com', 'Client', 'log in', '2021-07-27 18:12:56'),
(40, 'b@yahoo.com', 'Client', 'log in', '2021-07-27 18:12:57'),
(41, 'b@yahoo.com', 'Client', 'log in', '2021-07-27 18:12:57'),
(42, 'b@yahoo.com', 'Client', 'log out', '2021-07-27 18:13:02'),
(43, 'rose@yahoo.com', 'Applicant', 'log in', '2021-07-27 18:13:17'),
(44, 'rose@yahoo.com', 'Applicant', '0', '2021-07-27 18:13:28'),
(45, 'b@yahoo.com', 'Client', 'log in', '2021-07-31 01:48:09'),
(46, 'b@yahoo.com', 'Client', 'log in', '2021-08-24 22:33:27'),
(47, 'b@yahoo.com', 'Client', 'log out', '2021-08-24 22:51:27'),
(48, 'b@yahoo.com', 'Client', 'log in', '2021-08-24 22:51:36'),
(49, 'b@yahoo.com', 'Client', 'log out', '2021-08-24 22:55:19'),
(50, 'rose@yahoo.com', 'Applicant', 'log in', '2021-08-24 22:55:24'),
(51, 'rose@yahoo.com', 'Applicant', '0', '2021-08-24 23:01:29'),
(52, 'b@yahoo.com', 'Client', 'log in', '2021-08-24 23:01:34'),
(53, 'rose@yahoo.com', 'Applicant', 'log in', '2021-08-24 23:07:31'),
(54, 'b@yahoo.com', 'Client', 'log in', '2021-09-14 18:26:38'),
(55, 'b@yahoo.com', 'Client', 'log in', '2021-09-14 18:35:33'),
(56, 'b@yahoo.com', 'Client', 'log out', '2021-09-14 18:39:40'),
(57, 'rose@yahoo.com', 'Applicant', 'log in', '2021-09-14 18:40:19'),
(58, 'rose@yahoo.com', 'Applicant', 'log in', '2021-09-18 08:59:24'),
(59, 'rose@yahoo.com', 'Applicant', '0', '2021-09-18 09:24:57'),
(60, 'b@yahoo.com', 'Client', 'log in', '2021-09-18 09:25:07'),
(61, 'b@yahoo.com', 'Client', 'log in', '2021-09-18 09:25:10'),
(62, 'rose@yahoo.com', 'Applicant', 'log in', '2021-09-18 09:28:11'),
(63, 'b@yahoo.com', 'Client', 'log in', '2021-09-18 13:41:39'),
(64, 'b@yahoo.com', 'Client', 'log in', '2021-09-18 13:41:40'),
(65, 'rose@yahoo.com', 'Applicant', 'log in', '2021-09-18 13:42:00'),
(66, 'rose@yahoo.com', 'Applicant', 'log in', '2021-09-18 14:09:19'),
(67, 'csinag@gmail.com', 'Client', 'log in', '2021-10-01 20:56:13'),
(68, 'csinag@gmail.com', 'Client', 'log in', '2021-10-01 20:56:14'),
(69, 'csinag@gmail.com', 'Client', 'log in', '2021-10-01 20:56:28'),
(70, 'csinag@gmail.com', 'Client', 'log in', '2021-10-01 20:57:37'),
(71, 'csinag@gmail.com', 'Client', 'log in', '2021-10-01 20:57:38'),
(72, 'csinag@gmail.com', 'Client', 'log in', '2021-10-01 20:58:10'),
(73, 'b@yahoo.com', 'Client', 'log in', '2021-10-01 20:58:27'),
(74, 'b@yahoo.com', 'Client', 'log out', '2021-10-01 20:58:40'),
(75, 'blast@yahoo.com', 'Client', 'log in', '2021-10-01 22:14:07'),
(76, 'blast@yahoo.com', 'Client', 'log in', '2021-10-01 22:14:08'),
(77, 'ako@gmail.com', 'Client', 'log in', '2021-10-01 22:26:02'),
(78, 'ako@gmail.com', 'Client', 'log in', '2021-10-01 22:26:03'),
(79, 'rose@yahoo.com', 'Applicant', 'log in', '2021-10-10 17:33:55'),
(80, 'rose@yahoo.com', 'Applicant', '0', '2021-10-10 17:34:14'),
(81, 'rose@yahoo.com', 'Applicant', 'log in', '2021-10-10 17:39:07'),
(82, '123@mail.com', 'Client', 'log in', '2021-10-10 17:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `refer`
--

DROP TABLE IF EXISTS `refer`;
CREATE TABLE `refer` (
  `emp` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `efname` varchar(500) NOT NULL,
  `elname` varchar(500) NOT NULL,
  `accountid` int(11) NOT NULL,
  `rfname` varchar(200) NOT NULL,
  `rlname` varchar(500) NOT NULL,
  `jobid` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refer`
--

INSERT INTO `refer` (`emp`, `rid`, `fname`, `lname`, `status`, `jobtitle`, `efname`, `elname`, `accountid`, `rfname`, `rlname`, `jobid`, `date`, `mark`) VALUES
(1, 1, 'Rose', 'Tirona', 1, 'OBS Live Tech', 'Lesly', 'Abingona', 1, 'Rose', 'Tirona', 10, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `secretclient`
--

DROP TABLE IF EXISTS `secretclient`;
CREATE TABLE `secretclient` (
  `accountid` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretclient`
--

INSERT INTO `secretclient` (`accountid`, `question`, `answer`, `email`) VALUES
(1, 'Who is your favorite pet?', 'Cristian', 'b@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `lname`, `fname`, `mname`, `email`, `password`) VALUES
(1, 'Cervante', 'Joan', 'Cruz', 'joanadmin@yahoo.com', '12345'),
(2, 'Dela Cruz', 'Jing', 'Berganio', 'jing@yahoo.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`accountid`);

--
-- Indexes for table `employersrating`
--
ALTER TABLE `employersrating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcontracts`
--
ALTER TABLE `jobcontracts`
  ADD KEY `accountid` (`accountid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `jobseekers`
--
ALTER TABLE `jobseekers`
  ADD PRIMARY KEY (`accountid`);

--
-- Indexes for table `jobseekersrating`
--
ALTER TABLE `jobseekersrating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `refer`
--
ALTER TABLE `refer`
  ADD KEY `emp` (`emp`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `secretclient`
--
ALTER TABLE `secretclient`
  ADD KEY `accountid` (`accountid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `accountid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employersrating`
--
ALTER TABLE `employersrating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobseekers`
--
ALTER TABLE `jobseekers`
  MODIFY `accountid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobseekersrating`
--
ALTER TABLE `jobseekersrating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobcontracts`
--
ALTER TABLE `jobcontracts`
  ADD CONSTRAINT `jobcontracts_ibfk_1` FOREIGN KEY (`accountid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `refer`
--
ALTER TABLE `refer`
  ADD CONSTRAINT `refer_ibfk_1` FOREIGN KEY (`emp`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `refer_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `secretclient`
--
ALTER TABLE `secretclient`
  ADD CONSTRAINT `secretclient_ibfk_1` FOREIGN KEY (`accountid`) REFERENCES `jobseekers` (`accountid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
