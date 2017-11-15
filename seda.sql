-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2017 at 03:36 PM
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
-- Database: `seda`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`) VALUES
(3, 'Kent Charles', 'kentcharles12@outlook.com', '12345'),
(4, 'Reno Roy', 'rsorima@gmail.com', '12345'),
(5, 'Kent Charles', 'kentcharles12@outlook.com', '12345'),
(6, 'asdf', 'sdf@yahoo.com', '123'),
(7, 'Rhona Mae', 'rhonamae@yahoo.com', '12345'),
(8, 'Keeent', 'kentcharles12@outlook.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Jonel', 'jjumangit@yahoo.com', '400b180b8a458403c4a7c9bc05c2aa8b'),
(10, 'Kavin', 'kavin@gmail.co', 'fe7d37361c5bb9f0d9b640b48b244327'),
(11, 'Mamameyah', 'mamameyah@uuuu', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'Mamameyah', 'mamameyah@uuuu', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'yas', 'yas@haha', 'c57f431343f100b441e268cc12babc34'),
(14, 'jparame', 'st1ch@gmail.com', '6b2244ecf5881e4aa6d4235d16be7b48');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
CREATE TABLE IF NOT EXISTS `availability` (
  `room_num` int(5) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`room_num`, `check_in`, `check_out`) VALUES
(501, '2017-11-14', '2017-11-15'),
(301, '2017-11-14', '2017-11-15'),
(502, '2017-11-14', '2017-11-15'),
(302, '2017-11-14', '2017-11-15'),
(303, '2017-11-14', '2017-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `troom` varchar(100) NOT NULL,
  `nroom` int(10) NOT NULL,
  `meal` varchar(100) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fname`, `lname`, `email`, `phone`, `troom`, `nroom`, `meal`, `cin`, `cout`) VALUES
(48, 'yas', 'tagi', 'tagiyas@gmail.com', '09192838778', 'Deluxe Room', 1, 'Room only', '2017-11-14', '2017-11-18'),
(49, 'Jonell', 'parame', 'kentcharles12@outlook.com', '09192838778', 'Deluxe Room', 4, 'Room only', '2017-11-15', '2017-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_num` int(4) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `room_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_num`, `room_type`, `room_price`) VALUES
(401, 'CLUB HOUSE', 750),
(402, 'CLUB HOUSE', 750),
(403, 'CLUB HOUSE', 750),
(404, 'CLUB HOUSE', 750),
(405, 'CLUB HOUSE', 750),
(301, 'DELUXE', 250),
(302, 'DELUXE', 250),
(303, 'DELUXE', 250),
(304, 'DELUXE', 250),
(305, 'DELUXE', 250),
(501, 'PREMEIRE', 1000),
(502, 'PREMEIRE', 1000),
(503, 'PREMEIRE', 1000),
(504, 'PREMEIRE', 1000),
(505, 'PREMEIRE', 1000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
