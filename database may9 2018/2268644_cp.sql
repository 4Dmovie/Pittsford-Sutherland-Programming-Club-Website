-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb15.biz.nf
-- Generation Time: May 10, 2018 at 01:09 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2268644_cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ts`
--

CREATE TABLE `ts` (
  `id` bigint(15) NOT NULL,
  `date` datetime NOT NULL,
  `filename` varchar(5000) NOT NULL,
  `description` text NOT NULL,
  `filepath` varchar(5000) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `timeline` varchar(1000) NOT NULL,
  `md` varchar(50) NOT NULL,
  `yr` varchar(50) NOT NULL,
  `code` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts`
--

INSERT INTO `ts` (`id`, `date`, `filename`, `description`, `filepath`, `title`, `author`, `type`, `timeline`, `md`, `yr`, `code`) VALUES
(126, '2017-11-27 00:37:33', 'photo3.jpg', '', 'files/photo3.jpg', '', '', 'snap', '', '', '', ''),
(127, '2017-11-27 00:40:44', '20171013_144805.jpg', '', 'files/20171013_144805.jpg', '', '', 'snap', '', '', '', ''),
(128, '2017-11-27 00:42:46', 'pp1.jpg', '', 'files/pp1.jpg', '', '', 'snap', '', '', '', ''),
(129, '2017-11-27 00:43:19', 'pp2.JPG', '', 'files/pp2.JPG', '', '', 'snap', '', '', '', ''),
(123, '2017-11-27 00:35:08', 'photo1 (1).jpg', '', 'files/photo1 (1).jpg', '', '', 'snap', '', '', '', ''),
(124, '2017-11-27 00:35:20', 'photo2 (1).jpg', '', 'files/photo2 (1).jpg', '', '', 'snap', '', '', '', ''),
(131, '2017-11-27 00:49:17', 'HSprogrammingApril2017 019.JPG', '', 'files/HSprogrammingApril2017 019.JPG', '', '', 'snap', '', '', '', ''),
(132, '2017-11-27 00:51:17', 'IMG_9684[126].JPG', '', 'files/IMG_9684[126].JPG', '', '', 'snap', '', '', '', ''),
(152, '2017-12-15 05:39:09', 'acsl1.pdf', '', 'files/acsl1.pdf', 'ACSL#1 Sample Problem', '', 'ts', 'We discussed a sample programming problem to prepare for the first ACSL contest. \r\nIf you want to look at the problem, you may visit \r\nhttp://www.acsl.org/acsl/sample_ques/c_1_code_int.pdf\r\n\r\n\r\n', 'Dec08', '2017', 'files/acsl.txt'),
(154, '2017-12-15 05:43:11', '20171208_151856.jpg', '', 'files/20171208_151856.jpg', '', '', 'snap', '', '', '', 'files/'),
(159, '2018-01-06 19:37:40', '', '', '', 'ACSL Contest #1 Short Answer Test', '', 'ts', 'Worked on the first American Computer Science League(ACSL) test of the year!', 'Dec19', '2017', ''),
(160, '2018-01-26 19:39:08', '', 'Preparation materials:\r\nPlease see the emails.\r\n\r\nTopics:\r\nPre/Post/Infix Notation\r\nBit-String Flicking\r\nLISP\r\n', '', 'ACSL Contest #2', '', 'ts', 'Preparation materials:\r\nPlease see the emails.\r\n\r\nTopics:\r\nPre/Post/Infix Notation\r\nBit-String Flicking\r\nLISP\r\n', 'Jan19', '2018', ''),
(161, '2018-02-09 01:06:32', 'c_2_checkers_int.pdf', 'We did the practice programming problem for ACSL contest#2 on acsl.org.\r\n\r\nIt is a searching problem, and the data size is quite small. A DFS or BFS algorithm will solve the problem.\r\n\r\n', 'files/c_2_checkers_int.pdf', 'ACSL Contest#2 Practice-Programming Problem', '', 'ts', 'Link to the programming problem:\r\nhttp://www.acsl.org/acsl/sample_ques/c_2_checkers_int.pdf\r\n', 'Jan26', '2018', 'files/code.txt'),
(162, '2018-02-09 01:10:38', '', 'We took the Written and Programming Parts for ACSL Contest#2! 7 of us took the test, and most of us did better than last time.', '', 'ACSL #2 Real Test', '', 'ts', 'Taking the ACSL Contest#2 both Written and Programming Parts! ', 'Feb02', '2018', ''),
(166, '2018-03-18 17:25:49', '', 'We watched a video about BFS, an important skill and searching technique, on MIT OpenCourseWare Introduction to Algorithms. Link to the Course and Video: https://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-006-introduction-to-algorithms-fall-2011/lecture-videos/lecture-13-breadth-first-search-bfs/', '', 'MIT OpenCouseWare BFS', '', 'ts', 'Link to the Course and Video: https://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-006-introduction-to-algorithms-fall-2011/lecture-videos/lecture-13-breadth-first-search-bfs/', 'Feb16', '2018', ''),
(164, '2018-02-10 03:07:42', '', 'Miss LaBarr from Mendon High School joined us and let us know the results and answers for the first two ACSL Contests.\r\n', '', 'ACSL Contest#2 Past-contest review', '', 'ts', '', 'Feb09', '2018', ''),
(165, '2018-02-10 03:42:39', '', 'Miss LaBarr joined us and showed us the results and answers to the past two ACSL tests.', '', 'ACSL Post-Contest#2 Session', '', 'ts', '', 'Feb09', '2018', ''),
(167, '2018-03-18 17:42:28', '', 'Winter Break', '', 'Winter break', '', 'ts', 'Winter Break', 'Feb23', '2018', ''),
(168, '2018-03-18 17:47:13', 'c_3_walk_sr_student.pdf', 'Give out the ACSL Contest #3 Programming Part. Students have the weekend to work on it.', 'files/c_3_walk_sr_student.pdf', 'ACSL Contest #3 Programming Part', '', 'ts', 'ACSL Contest#3 Programming Part', 'Mar02', '2018', ''),
(169, '2018-03-18 17:48:38', '', 'No Programming Club Due to NYS Science Olympiad', '', 'No Programming Club Due to NYS Science Olympiad', '', 'ts', 'No Programming Club Due to NYS Science Olympiad', 'Mar09', '2018', ''),
(170, '2018-03-18 17:51:21', '', 'We formed teams for Cornell High School Programming Contest.\r\nhttps://www.cs.cornell.edu/events/cornell-high-school-programming-contest\r\nWarm-up Links:\r\nWarm up 1 (Closes March 1): https://www.hackerrank.com/cornell-university-high-school-competition-warm-up-1\r\nWarm up 2 (March 4-10) : https://www.hackerrank.com/cornell-university-high-school-competition-warm-up-2\r\nWarm up 3 (March 18-24): https://www.hackerrank.com/cornell-university-high-school-competition-warm-up-3', '', 'Cornell Team Assignment', '', 'ts', 'We formed teams for Cornell High School Programming Contest.\r\nhttps://www.cs.cornell.edu/events/cornell-high-school-programming-contest\r\n\r\nTeam1: Yizuo Chen, Raymond Feng\r\nTeam2: Yiyou Chen, Will Wang, Simon Narang\r\n\r\n', 'Mar16', '2018', ''),
(172, '2018-04-27 03:34:28', 'shortest path.pdf', 'Learned to find the shortest path by using Shortest Path Fast Algorithm.\r\n\r\nProblem Link: https://drive.google.com/open?id=1QozDH0sN-YARbVBRwEsPwHxCnJ1CZv908TxakJHNhRw', 'files/shortest path.pdf', 'Shortest Path (SPFA)', 'Yiyou Chen', 'ts', 'Shortest Path (SPFA)', 'Apr26', '2018', 'files/shortest path.cpp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ts`
--
ALTER TABLE `ts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ts`
--
ALTER TABLE `ts`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
