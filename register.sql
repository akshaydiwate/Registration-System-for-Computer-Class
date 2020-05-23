-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2017 at 01:24 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register`
--
CREATE DATABASE IF NOT EXISTS `register` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `register`;

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE IF NOT EXISTS `submit` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `conno` bigint(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `reciptno` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `name`, `address`, `dob`, `conno`, `blood`, `course`, `category`, `fees`, `reciptno`) VALUES
(1, 'ADHIKARI SAMEER RAJENDRA', 'AT POST PALGHAR', '25/06/1997', 7262223482, 'O+', 'JAVASCRIPT', 'OPEN', '7000', '1'),
(2, 'BARI PALLAV SUNIL', 'AT POST DAHANU', '25/08/1998', 8885487695, 'AB+', 'MONGODB', 'OBC', '5000', '2'),
(3, 'DIWATE AKSHAY SHRIKANT', 'AT POST NAGADE', '19/11/1997', 9271416641, 'AB-', 'ANDROID', 'SBC', '10000', '3'),
(4, 'LONDHE SACHIN BALASAHEB', 'AT POST BABHULGAON', '31/12/1995', 7387871709, 'O+', 'PHP,JAVASCRIPT', 'OPEN', '8000', '4'),
(5, 'GOSAVI SHUBHAM', 'AT POST KOPARGAON', '12/07/1995', 8888457815, 'O+', 'MYSQL', 'NT', '4500', '5'),
(6, 'GAIKWAD SANKET', 'AT POST KOPARGAON', '25/05/1997', 8888364515, 'A+', 'PHP', 'OBC', '7680', '6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
