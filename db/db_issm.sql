-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 07:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_issm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `start` varchar(10) NOT NULL,
  `end` varchar(10) NOT NULL,
  `month` varchar(8) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `title`, `description`, `start`, `end`, `month`, `year`) VALUES
(2, 'developer ', 'candidate must have background of front end and know at least one framework per language ', '011217', '012318', 'Oct', '2017'),
(3, 'Software Engineering', 'I need Software Interns who will be able to devote 3 - 6 month for an intensive ', '2020-06-15', '2020-06-30', 'Jun', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`) VALUES
(3, 'Livinstone', 'group1', 'Livinstone');

-- --------------------------------------------------------

--
-- Table structure for table ` aplicants`
--

CREATE TABLE ` aplicants` (
  `id` int(8) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` varchar(25) NOT NULL,
  `address` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `company_name` varchar(55) NOT NULL,
  `cv` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fill_details`
--

CREATE TABLE `fill_details` (
  `id` int(8) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fill_details`
--

INSERT INTO `fill_details` (`id`, `company_name`, `first_name`, `last_name`, `email`, `gender`, `file`) VALUES
(3, 'hh', 'deddd', 'dd', 'aaaa@gmail.com', 'Male', '1.jpg'),
(4, 'techzim', 'leo', 'mutema', 'muteam@gmail.com', 'Female', '444.PNG'),
(5, 'gtech', 'mutoro', 'mutoro', 'mutorok@gmail.com', 'Female', '444.PNG'),
(16, 'lllll', 'ddd', 'sshgsh', 'sssksjjs', 'Male', 'Capture 1.PNG'),
(17, 'yththh', 'figffjjkf', 'ffjeofhoe', 'dfhjhjdfdf', 'Male', 'funny.PNG'),
(26, 'eee', 'eee', 'eeeeaa', 'aaaa@gmail.com', '', ''),
(28, 'fff', 'dd', 'dd', 'aaaa@gmail.com', 'Male', 'did u.jpg'),
(29, 'jjmm', 'vjj', 'hjhjhj', 'aaaa@gmail.com', 'Male', '444.PNG'),
(31, 'lolo', 'jghjj', 'gfgg', 'aaaa@gmail.com', 'Female', '1.jpg'),
(32, 'hjhjk', 'kjkj', 'trt', 'aaaa@gmail.com', 'Male', 'did u.jpg'),
(33, 'lolo', 'lll', 'gfg', 'aaaa@gmail.com', 'Male', '1.jpg'),
(34, 'techzim', 'libert', 'liberty', 'aaaa@gmail.com', 'Female', '1.jpg'),
(35, 'comapp', 'asa', 'aaa', 'aaaa@gmail.com', 'Female', 'libary features 1.PNG'),
(36, 'chatikobo', 'chatikobo', 'chatikobo', 'aaaa@gmail.com', 'Male', 'liberty2.jpg'),
(40, ' dfddfd', 'eeee', 'dddd', 'ddd', 'Male', 'Capture 2.PNG'),
(42, ' dfddfd', 'eeee', 'dddd', 'hhhh@m.b', 'Female', 'Capture 2.PNG'),
(43, ' dramcache ', 'liberty', 'chatikobo', 'vbvb@gmail.com', 'Male', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `first_name`, `last_name`, `password`, `email`, `gender`) VALUES
(0, 'chat', 'linda', 'linda', '123', 'aa@gmail.com', 'female'),
(1, 'lolo', 'leo', 'quism', '1234', 'aa@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` varchar(40) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `year` varchar(2) NOT NULL,
  `section` varchar(1) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `firstname`, `middlename`, `lastname`, `year`, `section`, `photo`) VALUES
(3, 21201455, 'Daw', 'asd', 'asd', 'II', 'A', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `fill_details`
--
ALTER TABLE `fill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fill_details`
--
ALTER TABLE `fill_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
