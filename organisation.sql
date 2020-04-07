-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 01:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organisation`
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
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'saurabh', 'saurabhanshraj@gmail.com', 'saurabh'),
(2, 'saurabh', 'saurabhanshraj@gmail.com', 'saurabh');

-- --------------------------------------------------------

--
-- Table structure for table `primiumcourse`
--

CREATE TABLE `primiumcourse` (
  `id` int(11) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `coursematerial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `primiumcourse`
--

INSERT INTO `primiumcourse` (`id`, `coursename`, `coursematerial`) VALUES
(1, 'C', 'WELCOME to the world of C.The beauty of C language resides within its simple and easy structure and syntax.\r\nC is a procedural programming language. It was initially developed by Dennis Ritchie in the year 1972. It was mainly developed as a system program'),
(2, 'CPP', 'C++ is a general purpose programming language and widely used now a days for competitive programming. It has imperative, object-oriented and generic programming features. C++ runs on lots of platform like Windows, Linux, Unix, Mac etc'),
(4, 'Java', 'java has been one of the most popular programming language for many years.\r\nJava is Object Oriented. However it is not considered as pure object oriented as it provides support for primitive data types (like int, char, etc)\r\nThe Java codes are first compi'),
(5, 'PHP', 'The term PHP is an acronym for PHP: Hypertext Preprocessor. PHP is a server-side scripting language designed specifically for web development. PHP can be easily embedded in HTML files and HTML codes can also be written in a PHP file. The thing that differ'),
(6, 'FrontEnd', 'The part of a website that user interacts with directly is termed as front end. It is also referred to as the \'client side\' of the application. It includes everything that users experience directly: text colors and styles, images, graphs and tables, butto'),
(7, 'Python', 'Python is currently the most widely used multi-purpose, high-level programming language.\r\nPython allows programming in Object-Oriented and Procedural paradigms.\r\nPython programs generally are smaller than other programming languages like Java. Programmers');

-- --------------------------------------------------------

--
-- Table structure for table `stusers`
--

CREATE TABLE `stusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `collegename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stusers`
--

INSERT INTO `stusers` (`id`, `name`, `email`, `password`, `contact`, `city`, `collegename`) VALUES
(1, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(2, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(3, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(13, 'saurabh', 'saurabhanshraj@gmail.com', '133057facf49cbe6520b15a4d96ee395', '6878787867', 'jalandhar', 'phagwara');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmPassword` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `collegeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `confirmPassword`, `phone`, `city`, `collegeName`) VALUES
(1, 'saurabh', 'saurabhanshraj@gmail.com', 'Saurabh', 'saurabh', '7905966858', 'jalandhar', 'lovely professional university'),
(2, 'prabhakar', 'prabhakar@gmail.com', 'prabhakar', 'prabhakar', '7867867888', 'baraily', 'lovely professional university');

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `coursepurchase` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`id`, `name`, `email`, `contact`, `city`, `college`, `coursepurchase`, `status`) VALUES
(1, 'saurabh', 'saurabhanshraj@gmail.com', '7905966858', 'jalandhar', 'lovely professional university', 'C', NULL),
(3, 'saurabh', 'saurabhanshraj@gmail.com', '7905966858', 'jalandhar', 'lovely professional university', 'FrontEnd', NULL),
(4, 'saurabh', 'saurabhanshraj@gmail.com', '7905966858', 'jalandhar', 'lovely professional university', 'CPP', NULL),
(5, 'saurabh', 'saurabhanshraj@gmail.com', '7905966858', 'jalandhar', 'lovely professional university', 'Java', NULL),
(6, 'saurabh', 'saurabhanshraj@gmail.com', '7905966858', 'jalandhar', 'lovely professional university', 'PHP', NULL),
(7, 'prabhakar', 'prabhakar@gmail.com', '7867867888', 'baraily', 'lovely professional university', 'FrontEnd', NULL),
(8, 'saurabh', 'saurabhanshraj@gmail.com', '7905966858', 'jalandhar', 'lovely professional university', 'Java', NULL),
(9, 'saurabh', 'saurabhanshraj@gmail.com', '7905966858', 'jalandhar', 'lovely professional university', 'Python', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `primiumcourse`
--
ALTER TABLE `primiumcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stusers`
--
ALTER TABLE `stusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_course`
--
ALTER TABLE `user_course`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `primiumcourse`
--
ALTER TABLE `primiumcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stusers`
--
ALTER TABLE `stusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
