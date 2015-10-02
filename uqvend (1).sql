-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2015 at 03:17 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uqvend`
--

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE IF NOT EXISTS `machines` (
  `long` decimal(10,4) NOT NULL,
  `lat` decimal(10,4) NOT NULL,
  `name` text NOT NULL,
  `contains` longtext NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`long`, `lat`, `name`, `contains`, `id`) VALUES
('-27.4986', '153.0155', 'A Machine', 'Coke, Carrots, Mountain Dew', 1),
('-27.4983', '153.0145', 'wfwe', 'sfjfjfjf', 2),
('-27.4975', '153.0139', 'A Machine', 'Coke, Mountain Dew, Sprite, Chocolate Bars', 3),
('-27.4764', '153.0142', 'scott', 'coke', 4),
('-27.4982', '153.0142', 'scott', 'hi', 5),
('2.0000', '3.0000', 'd', 'c', 8),
('2.0000', '3.0000', 'd', 'c', 9);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `long` double NOT NULL,
  `lat` double NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`long`, `lat`, `name`) VALUES
(-27.4955095, 153.01246889999993, 'St Lucia'),
(-25, 34, 'horses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
