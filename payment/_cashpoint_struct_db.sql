-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2017 at 10:24 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3592378_tc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashpoint_exchangetable`
--

DROP TABLE IF EXISTS `cashpoint_exchangetable`;
CREATE TABLE IF NOT EXISTS `cashpoint_exchangetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transactionId` int(11) NOT NULL,
  `cashpointId` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `finish` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashpoint_usertable`
--

DROP TABLE IF EXISTS `cashpoint_usertable`;
CREATE TABLE IF NOT EXISTS `cashpoint_usertable` (
  `userId` int(11) NOT NULL,
  `cashpointId` int(11) NOT NULL,
  `availableBalance` decimal(10,2) NOT NULL,
  `floatingBalance` decimal(10,2) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `cashpointId` (`cashpointId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashpoint_vaulttable`
--

DROP TABLE IF EXISTS `cashpoint_vaulttable`;
CREATE TABLE IF NOT EXISTS `cashpoint_vaulttable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `checksum` varchar(128) NOT NULL,
  `datetimegiven` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datetimeexpiry` timestamp NOT NULL,
  `cashpointvalue` decimal(10,2) NOT NULL,
  `cashpointbalance` decimal(10,2) NOT NULL,
  `reasonid` int(11) NOT NULL COMMENT '1=REFUND',
  `reason` varchar(512) NOT NULL,
  `approvedby` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashtable_transactiontable`
--

DROP TABLE IF EXISTS `cashtable_transactiontable`;
CREATE TABLE IF NOT EXISTS `cashtable_transactiontable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` decimal(10,2) NOT NULL,
  `userid` int(11) NOT NULL,
  `referenceid` int(11) NOT NULL,
  `reasonid` int(11) NOT NULL COMMENT '1=CASHIN/CREDIT, 2=CASHOUT/DEBIT',
  `reason` varchar(512) NOT NULL,
  `cancelled` tinyint(1) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
