-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 06:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `correct`
--

CREATE TABLE `correct` (
  `qno` int(220) NOT NULL,
  `answer` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `correct`
--

INSERT INTO `correct` (`qno`, `answer`) VALUES
(1, 'B'),
(1, 'B'),
(2, 'D'),
(3, 'D'),
(4, 'C'),
(5, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q1` varchar(220) NOT NULL,
  `q2` varchar(220) NOT NULL,
  `q3` varchar(220) NOT NULL,
  `q4` varchar(220) NOT NULL,
  `q5` varchar(220) NOT NULL,
  `score` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q1`, `q2`, `q3`, `q4`, `q5`, `score`) VALUES
('A', 'B', 'C', 'D', 'B', ''),
('A', 'B', 'C', 'D', 'A', ''),
('B', 'D', 'D', 'C', 'B', ''),
('B', 'B', 'C', 'C', 'B', ''),
('B', 'D', 'D', 'C', 'B', ''),
('B', 'D', 'D', 'C', 'D', ''),
('', '', '', '', '', '0/0'),
('B', 'D', 'B', 'C', 'D', ''),
('', '', '', '', '', '0/0'),
('B', 'D', 'D', 'C', 'A', ''),
('', '', '', '', '', '0/5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(220) NOT NULL,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `cpassword` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(15, 'kaviya', 'kavya@gmail.com', '123', '123'),
(16, 'Elakkiya', 'elak@gmail.com', '123', '123'),
(17, 'usha', 'u@gmail.com', '123', '123'),
(18, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
