-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2012 at 05:03 AM
-- Server version: 5.5.16
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c3333333`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(2) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(30) NOT NULL,
  `itemprice` varchar(5) NOT NULL,
  `itemdescription` varchar(50) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `photo` varchar(30) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `itemname`, `itemprice`, `itemdescription`, `Gender`, `photo`) VALUES
(1, 'Bottle', '5.99', 'Baby''s Bottle', 'Girl', 'images/bottle.jpg'),
(2, ' Spark Pushchair', '64.99', ' Spark Black Pushchair', 'Both', 'images/pushchair.jpg'),
(3, 'Toilet Trainer', '9.99', 'Cushioned Toilet Trainer - White', 'Both', 'images/toilet_trainer.jpg'),
(4, 'Baby Bouncer', '47.99', 'Motorized Baby Bouncer', 'Girl', 'images/bouncer.jpg'),
(5, 'Kneeling Pad', '17.99', 'Blue Kneeling Pad', 'Boy', 'images/kneeling_pad.jpg'),
(6, 'Moulded Toilet Trainer', '14.99', 'Moulded Toilet Trainer - Pink', 'Girl', 'images/toilet_trainer2.jpg'),
(7, 'Lotus Highchair', '59.99', 'Lotus Highchair ', 'Boy', 'images/highchair.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `firstname`, `surname`, `email`) VALUES
(1, 'Jake', 'password', 'Jake', 'Saleh', 'Jake@saleh.com'),
(12, 'Ahmed', 'password', 'Ahmed', 'Alhamdi', 'ahmedalhamdi@gmail.com'),
(13, 'Sam', 'password', 'Sam', 'Bruton', 'sam@sam.com'),
(14, 'Paul', 'password1', 'Paul', 'Weller', 'paul@hotmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
