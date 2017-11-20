-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 08:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seda`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`) VALUES
(23, 'Kent Charles', 'kentcharles12@outlook.com', '31bd449a8f480fbf5f917e864b52954c');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE IF NOT EXISTS `availability` (
  `id` int(1) NOT NULL,
  `room_num` int(5) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `fname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `room_num`, `check_in`, `check_out`, `fname`) VALUES
(1, 301, '2017-11-21', '2017-11-22', ''),
(1, 302, '2017-11-21', '2017-11-22', ''),
(1, 303, '2017-11-21', '2017-11-22', ''),
(1, 304, '2017-11-21', '2017-11-22', ''),
(1, 302, '2017-11-21', '2017-11-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `troom` varchar(50) NOT NULL,
  `cin` varchar(50) NOT NULL,
  `cout` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `nroom` int(5) NOT NULL,
  `meal` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `troom`, `cin`, `cout`, `fname`, `email`, `phone`, `nroom`, `meal`) VALUES
(1, 'DELUXE', '2017-11-24', '2017-11-22', 'Kent Charles Cutamora', 'kentcharles12@outlook.com', '09192838778', 1, 'Room only'),
(2, 'DELUXE', '2017-11-22', '2017-11-21', 'Kent Charles Cutamora', 'kentcharles12@outlook.com', '09192838778', 1, 'Room only'),
(3, 'DELUXE', '2017-11-22', '2017-11-21', 'Kent Ivan', 'princejayesdrelon@yahoo.com', '09192838778', 0, 'Room only'),
(4, 'DELUXE', '2017-11-22', '2017-11-21', 'Kent Charles Cutamora', 'kentcharles12@outlook.com', '09192838778', 1, 'Breakfast');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_num` int(5) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_num`, `room_type`, `room_price`) VALUES
(301, 'DELUXE ROOM', 6800),
(302, 'DELUXE ROOM', 6800),
(303, 'DELUXE ROOM', 6800),
(304, 'DELUXE ROOM', 6800),
(305, 'DELUXE ROOM', 6800),
(401, 'CLUB ROOM', 7800),
(402, 'CLUB ROOM', 7800),
(403, 'CLUB ROOM', 7800),
(404, 'CLUB ROOM', 7800),
(405, 'CLUB ROOM', 7800),
(501, 'PREMIER ROOM', 8800),
(502, 'PREMIER ROOM', 8800),
(503, 'PREMIER ROOM', 8800),
(504, 'PREMIER ROOM', 8800),
(505, 'PREMIER ROOM', 8800);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
