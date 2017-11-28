-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2017 at 10:48 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urcscon3_milan`
--
CREATE DATABASE IF NOT EXISTS `urcscon3_milan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `urcscon3_milan`;

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE IF NOT EXISTS `responses` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `isStudent` varchar(30) NOT NULL,
  `isInternational` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `cuisines` varchar(60) NOT NULL,
  `restaurants` varchar(120) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`user_id`, `fname`, `lname`, `email`, `isStudent`, `isInternational`, `country`, `cuisines`, `restaurants`, `comments`) VALUES
(7, 'Kevin', 'Walsh', 'kevin.walsh@rochester.edu', 'yes', 'yes', 'vatican city', 'Chinese,American', 'Dinosaur BBQ', 'portillos in chicago'),
(11, 'Slim', 'Shady', 'not@emin.em', 'yes', 'yes', '8 Mile', 'American', 'Tsingtao House,Dinosaur BBQ', ''),
(16, 'Sibel', 'Spahija', 'sspahija@u.rochester.edu', 'yes', 'yes', 'RKS', 'Mediterranean,Korean,Japanese,Italian', 'Shiki Sushi,Restaurant Good Luck,Lento', 'Nobu (NYC)'),
(21, 'Kurt', 'Cobain', 'comeasyouare@nirvana.com', 'no', 'no', '', 'Korean,Japanese,Italian', 'Tsingtao House,Shiki Sushi,Seoul House,Restaurant Good Luck,Lento,Dinosaur BBQ', ''),
(26, 'Sibel', 'Spahija', 'sspahija@u.rochester.edu', 'yes', 'no', '', 'Thai', 'Tournedos Steakhouse', 'Tao'),
(27, 'Binley', 'Yang', 'bin@gmail.com', 'yes', 'no', '', 'Chinese', 'Tsingtao House,Shiki Sushi', ''),
(29, 'Testing', 'Again', 'pls@work', 'yes', 'no', '', 'American', 'Dinosaur BBQ', ''),
(34, 'Robert', 'Kostin', 'robert@rkostin.com', 'yes', 'yes', '', 'Italian,Chinese,American', 'Tournedos Steakhouse,Tsingtao House,Shiki Sushi', 'blah blah blah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
