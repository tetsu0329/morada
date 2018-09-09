-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2017 at 05:05 PM
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
-- Table structure for table `itemtransactiontable`
--

DROP TABLE IF EXISTS `itemtransactiontable`;
CREATE TABLE IF NOT EXISTS `itemtransactiontable` (
  `transactionID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` varchar(32) NOT NULL,
  `note` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemtransactiontable`
--

INSERT INTO `itemtransactiontable` (`transactionID`, `productID`, `qty`, `price`, `size`, `note`) VALUES
(1, 1, 1, '1000.00', 'Small', ''),
(1, 7, 1, '1200.00', 'Small', ''),
(1, 6, 2, '500.00', 'Medium', ''),
(2, 2, 3, '200.00', 'XL', ''),
(3, 4, 1, '3999.00', 'Large', ''),
(4, 4, 1, '3999.00', 'Small', ''),
(5, 6, 1, '500.00', 'Medium', ''),
(6, 7, 1, '1200.00', 'Large', '');

-- --------------------------------------------------------

--
-- Table structure for table `paypalpaymenttable`
--

DROP TABLE IF EXISTS `paypalpaymenttable`;
CREATE TABLE IF NOT EXISTS `paypalpaymenttable` (
  `paypalTransactionID` varchar(32) NOT NULL,
  `transactionTime` varchar(32) NOT NULL,
  `transactionToken` varchar(32) NOT NULL,
  `transactionStatus` varchar(32) NOT NULL,
  `transactionAmount` varchar(64) NOT NULL,
  `payerPaypalId` varchar(32) NOT NULL DEFAULT '',
  `payerStatus` varchar(32) NOT NULL DEFAULT '',
  `buyerName` varchar(512) NOT NULL,
  `buyerEmail` varchar(512) NOT NULL,
  `buyerShipToName` varchar(512) NOT NULL,
  `buyerAddress` varchar(1000) NOT NULL,
  PRIMARY KEY (`paypalTransactionID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paypalpaymenttable`
--

INSERT INTO `paypalpaymenttable` (`paypalTransactionID`, `transactionTime`, `transactionToken`, `transactionStatus`, `transactionAmount`, `payerPaypalId`, `payerStatus`, `buyerName`, `buyerEmail`, `buyerShipToName`, `buyerAddress`) VALUES
('4EE14458Y9656654E', '2017-11-14T16:50:49Z', 'EC-95E06393WB214263V', 'Completed', 'PHP 3485.00', 'UG6T9HA4ZA324', 'verified', 'test buyer', 'me-buyer@patlo.tech', 'test buyer', '1 Main St, San Jose, CA, 95131, US'),
('53K51038BA707320L', '2017-11-14T16:51:59Z', 'EC-0BB87610WU605644P', 'Completed', 'PHP 780.00', 'UG6T9HA4ZA324', 'verified', 'test buyer', 'me-buyer@patlo.tech', 'test buyer', '1 Main St, San Jose, CA, 95131, US'),
('0SS78784UX0861742', '2017-11-14T16:54:41Z', 'EC-7MN86062Y5166452D', 'Completed', 'PHP 4179.00', 'UG6T9HA4ZA324', 'verified', 'test buyer', 'me-buyer@patlo.tech', 'test buyer', '1 Main St, San Jose, CA, 95131, US'),
('162374795U429581W', '2017-11-14T17:03:05Z', 'EC-6BN88471HU7538438', 'Completed', 'PHP 1380.00', 'UG6T9HA4ZA324', 'verified', 'test buyer', 'me-buyer@patlo.tech', 'test buyer', '1 Main St, San Jose, CA, 95131, US');

-- --------------------------------------------------------

--
-- Table structure for table `transactiontable`
--

DROP TABLE IF EXISTS `transactiontable`;
CREATE TABLE IF NOT EXISTS `transactiontable` (
  `transactionID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transactionStatus` varchar(32) NOT NULL DEFAULT 'CANCELLED' COMMENT 'CANCELLED or PAID or PENDING or DELIVERED',
  `paymentMethod` varchar(32) NOT NULL DEFAULT 'CANCELLED' COMMENT 'CANCELLED or PAYPAL or BANK_DEPOSIT',
  `paypalTransactionID` varchar(32) DEFAULT NULL,
  `totalAmount` decimal(10,2) NOT NULL,
  `itemAmount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shippingFeeAmount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`transactionID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactiontable`
--

INSERT INTO `transactiontable` (`transactionID`, `userID`, `timestamp`, `transactionStatus`, `paymentMethod`, `paypalTransactionID`, `totalAmount`, `itemAmount`, `shippingFeeAmount`, `note`) VALUES
(1, 10, '2017-11-14 16:50:50', 'PAID', 'PAYPAL', '4EE14458Y9656654E', '3485.00', '3200.00', '285.00', ''),
(2, 10, '2017-11-14 16:52:00', 'PAID', 'PAYPAL', '53K51038BA707320L', '780.00', '600.00', '180.00', ''),
(3, 10, '2017-11-14 16:53:11', 'PENDING', 'BANK_DEPOSIT', '', '4179.00', '3999.00', '180.00', ''),
(4, 10, '2017-11-14 16:54:42', 'PAID', 'PAYPAL', '0SS78784UX0861742', '4179.00', '3999.00', '180.00', ''),
(5, 10, '2017-11-14 16:57:21', 'PENDING', 'BANK_DEPOSIT', '', '680.00', '500.00', '180.00', ''),
(6, 10, '2017-11-14 17:03:05', 'PAID', 'PAYPAL', '162374795U429581W', '1380.00', '1200.00', '180.00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
