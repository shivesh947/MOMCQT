-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 06:02 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mockfiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerd_links_key`
--

CREATE TABLE IF NOT EXISTS `registerd_links_key` (
  `key` varchar(500) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerd_links_key`
--

INSERT INTO `registerd_links_key` (`key`) VALUES
('test1');

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(1000) NOT NULL,
  `optA` varchar(200) NOT NULL,
  `optB` varchar(200) NOT NULL,
  `optC` varchar(200) NOT NULL,
  `optD` varchar(200) NOT NULL,
  `Correctopt` varchar(500) NOT NULL,
  PRIMARY KEY (`sno`),
  KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`sno`, `Question`, `optA`, `optB`, `optC`, `optD`, `Correctopt`) VALUES
(1, 'Which among the following is true regarding the Humidity of the air?', 'It increases with the increase in atmospheric temperature', 'It decreases with the increase in atmospheric temperature', 'It is not affected by the change in atmospheric temperature', 'It does not show any consistent behaviour with the change in atmospheric temperature', 'It is not affected by the change in atmospheric temperature'),
(2, 'What are the grass lands of South America called?', 'Stepes', 'Prairies', 'Pampas', 'Savanna', 'Prairies'),
(3, 'Which among the following is true regarding the Humidity of the air?', 'It increases with the increase in atmospheric temperature', 'It decreases with the increase in atmospheric temperature', 'It is not affected by the change in atmospheric temperature', 'It does not show any consistent behaviour with the change in atmospheric temperature', 'It is not affected by the change in atmospheric temperature'),
(4, 'What are the grass lands of South America called?', 'Stepes', 'Prairies', 'Pampas', 'Savanna', 'Prairies');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
