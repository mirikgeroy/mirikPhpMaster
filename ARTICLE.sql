-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 05:13 PM
-- Server version: 5.1.40
-- PHP Version: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ARTICLE`
--

-- --------------------------------------------------------

--
-- Table structure for table `statti`
--

CREATE TABLE IF NOT EXISTS `statti` (
  `id` int(5) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `tegs` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `statti`
--

INSERT INTO `statti` (`id`, `date`, `title`, `text`, `tegs`) VALUES
(0, '0000-00-00', '', '', '');
