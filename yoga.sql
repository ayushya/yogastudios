-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2015 at 07:24 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yoga`
--
CREATE DATABASE IF NOT EXISTS `yoga` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yoga`;

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE IF NOT EXISTS `studio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `trial` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `name`, `type`, `city`, `price`, `trial`) VALUES
(1, 'Perfect Yoga', 'bikram', 'Bangalore', '50', 'yes'),
(2, 'Elasticiser', 'ashtanga', 'Pune', '100', 'no'),
(3, 'Happy Life', 'hatha', 'Gurgaon', '75', 'yes'),
(4, 'Life Extender', 'All', 'Delhi', '150', 'yes'),
(5, 'Rejuvenate', 'asana', 'Noida', '100', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
