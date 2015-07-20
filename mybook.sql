-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2014 at 11:22 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE IF NOT EXISTS `bio` (
  `email` varchar(255) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `relstatus` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`email`, `pname`, `dob`, `country`, `city`, `relstatus`, `work`) VALUES
('aakas@mybook.com', 'AAksahs', '5 may 1994', 'germany', 'Coimbatore', 'Complicated', 'In a job'),
('ananad@mybook.com', 'Ananad', '3 may 1997', 'India', 'coimbatore', 'Single', 'In a job'),
('arvind@gmail.com', 'Karthi', '4 apr 1992', 'India', 'coimbatore', 'In a relationship', 'In a job'),
('fff', 'gyg', '2 mar 1992', 'uyfyu', 'uyfuy', 'Single', 'In a job'),
('krishna@gmail.com', 'Kumki', '3 mar 1994', 'germany', 'coimbatore', 'Complicated', 'Studying'),
('krishnadev@gmail.com', 'Devan', '3 july 1994', 'India', 'madurai', 'Single', 'In a job'),
('nishanth93@gmail.com', 'Nisanth', '4 may 1995', 'germany', 'frankfurt', 'In a relationship', 'In a job'),
('vjkrishna689@gmail.com', 'Vijay Krish', '3 apr 1996', 'India', 'Coimbatore', 'Single', 'In a job');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `f1` int(10) NOT NULL,
  `f2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`f1`, `f2`) VALUES
(15, 17),
(17, 15),
(15, 16),
(16, 15),
(15, 18),
(18, 15),
(15, 18),
(18, 15),
(15, 18),
(18, 15),
(15, 16),
(16, 15),
(15, 16),
(16, 15),
(15, 16),
(16, 15),
(15, 16),
(16, 15),
(15, 16),
(16, 15),
(15, 16),
(16, 15),
(15, 20),
(20, 15),
(15, 20),
(20, 15),
(15, 20),
(20, 15),
(16, 18),
(18, 16),
(15, 21),
(21, 15),
(18, 21),
(21, 18),
(15, 22),
(22, 15),
(16, 22),
(22, 16),
(21, 16),
(16, 21),
(21, 16),
(16, 21),
(21, 16),
(16, 21),
(21, 16),
(16, 21),
(21, 16),
(16, 21),
(21, 16),
(16, 21),
(22, 21),
(21, 22),
(18, 21),
(21, 18),
(18, 22),
(22, 18),
(15, 22),
(22, 15);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `pby` int(10) DEFAULT NULL,
  `post` varchar(2000) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `pby`, `post`, `time`) VALUES
(4, 15, 'hEY GUYS i AM IN MY BOOK', '2014-05-08 14:31:38'),
(5, 17, 'Hey guys Its fun', '2014-05-08 14:42:00'),
(6, 16, 'cop landers', '2014-05-08 14:57:54'),
(7, 16, 'hi hows life', '2014-05-08 15:10:53'),
(8, 18, 'gfdhgjbxv', '2014-05-08 15:49:47'),
(9, 18, 'gfdhgjbxv', '2014-05-08 15:49:48'),
(10, 22, 'Wow This is awesome', '2014-05-08 19:25:35'),
(11, 22, 'Wo', '2014-05-08 19:25:48'),
(12, 16, 'hssg', '2014-05-08 19:59:48'),
(13, 16, 'fsedddssdgdsg', '2014-05-08 20:00:26'),
(14, 16, '1234', '2014-05-08 20:00:56'),
(15, 16, 'fsdgsdg', '2014-05-08 20:01:16'),
(16, 16, 'fsdfsdfgsdf', '2014-05-08 20:02:28'),
(17, 16, 'safasfaf', '2014-05-08 20:02:49'),
(18, 16, 'dgdhdfhdfhdfh', '2014-05-08 20:07:12'),
(19, 16, 'gsegsdgsdsgsd', '2014-05-08 20:07:53'),
(20, 16, 'dsdsdgsdgsbsssgsd', '2014-05-08 20:08:30'),
(21, 16, 'afafasfasfasfasfa', '2014-05-08 20:08:50'),
(22, 16, 'fhdshsgsgsdhsdhsh', '2014-05-08 20:09:11'),
(23, 16, 'sdgsdgsdgsdgsdg', '2014-05-08 20:09:30'),
(24, 16, 'fsdgsdg', '2014-05-08 20:10:10'),
(25, 16, 'dfsdfsdf', '2014-05-08 20:10:25'),
(26, 16, 'kjk', '2014-05-08 20:11:36'),
(27, 16, 'aesgdsgsdg', '2014-05-08 20:12:21'),
(28, 16, 'sdgsdgsdg', '2014-05-08 20:12:41'),
(29, 16, 'sggsdgsgsdg', '2014-05-08 20:13:06'),
(30, 16, 'dgdfgdfg', '2014-05-08 20:13:18'),
(31, 16, 'asfafasf', '2014-05-08 20:14:00'),
(32, 16, 'dsfsfsdf', '2014-05-08 20:14:55'),
(33, 16, 'dfgdsgsdg', '2014-05-08 20:15:16'),
(34, 16, 'dsdgsdgsdg', '2014-05-08 20:15:43'),
(35, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:35:25'),
(36, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:36:38'),
(37, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:37:59'),
(38, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:38:04'),
(39, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:39:44'),
(40, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:40:23'),
(41, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:40:51'),
(42, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:41:37'),
(43, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:42:02'),
(44, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:42:39'),
(45, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:42:52'),
(46, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:43:06'),
(47, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:43:27'),
(48, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:43:43'),
(49, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:44:36'),
(50, 15, 'Hey This is My Book is simply superb .What a job by manadhi and ds', '2014-05-08 20:44:52'),
(51, 23, 'HI.....To aLLL', '2014-05-08 20:56:46'),
(52, 23, 'Hi Again', '2014-05-08 20:57:02'),
(53, 24, 'idssg', '2014-05-08 21:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `fromid` int(10) DEFAULT NULL,
  `toid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`fromid`, `toid`) VALUES
(16, 17),
(16, 20),
(21, 17),
(21, 20),
(21, 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact` int(30) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `gender`, `contact`, `profilepic`) VALUES
(15, 'Vijay', 'KrishNa', 'vjkrishna689@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 2147483647, 'C:/xampp/htdocs/mybook/profilepics/Koala.jpg'),
(16, 'Krishna', 'Kumar', 'krishna@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 45789, 'C:/xampp/htdocs/mybook/profilepics/Penguins.jpg'),
(17, 'Nishanth', 'Sivakumar', 'nishanth93@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 457878, 'C:/xampp/htdocs/mybook/profilepics/Jellyfish.jpg'),
(18, 'Subramaniyan', 'narayanan', 'manianh1857@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 54679, ''),
(20, 'krishna', 'devan', 'krishnadev@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 98423478, 'C:/xampp/htdocs/mybook1/profilepics/Lighthouse.jpg'),
(21, 'viviek', 'maiden', 'fff', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 12345, 'C:/xampp/htdocs/mybook1/profilepics/Tulips.jpg'),
(22, 'Aakash', 'Dsouza', 'aakas@mybook.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 4578, 'C:/xampp/htdocs/mybook1/profilepics/Chrysanthemum.jpg'),
(23, 'karthik', 'arvind', 'arvind@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 876545799, 'C:/xampp/htdocs/mybook1/profilepics/Lighthouse.jpg'),
(24, 'Anand', 'Aravind', 'ananad@mybook.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 1234567, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
