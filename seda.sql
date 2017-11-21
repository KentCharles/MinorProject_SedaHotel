-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 06:18 AM
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
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`, `role`) VALUES
(24, 'rsorima', 'renoroysorima@gmail.com', 'b6556c1936c4203a382917d8660d5679', 'user'),
(26, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(27, 'Kent Charles', 'kentcharles12@outlook.com', '31bd449a8f480fbf5f917e864b52954c', 'user'),
(28, 'jonell', 'jonel@yahoo.com', '2030d5f18b38bbe1996798914b124075', 'user'),
(29, 'Kavin', 'kaka@hayyo', '31bd449a8f480fbf5f917e864b52954c', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE IF NOT EXISTS `approve` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `troom` varchar(100) NOT NULL,
  `nroom` varchar(100) NOT NULL,
  `meal` varchar(100) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`id`, `fname`, `email`, `phone`, `troom`, `nroom`, `meal`, `cin`, `cout`, `status`, `username`) VALUES
(11, 'Kent Charles', 'askdj@gmail.com', '123123', '123123', '1', 'Breakfast', '2017-11-23', '2017-11-22', 'ACCEPTED', ''),
(13, 'Kent Charles Cutamora', 'kentcharles12@outlook.com', '09192838778', '09192838778', '1', 'Room only', '2017-11-30', '2017-11-29', 'ACCEPTED', ''),
(14, 'Kavin Merontos', 'kaka@hayyo', '09192838778', '09192838778', '2', 'Room only', '2017-12-06', '2017-12-04', 'ACCEPTED', '');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE IF NOT EXISTS `availability` (
  `id` int(1) NOT NULL,
  `room_num` int(5) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `fname` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `message`) VALUES
(0, 'reno roy', '09123456789', 'renoroysorima@gmail.com', 'thank you for having a very nice service');

-- --------------------------------------------------------

--
-- Table structure for table `rejects`
--

CREATE TABLE IF NOT EXISTS `rejects` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `troom` varchar(100) NOT NULL,
  `nroom` varchar(100) NOT NULL,
  `meal` varchar(100) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rejects`
--

INSERT INTO `rejects` (`id`, `fname`, `email`, `phone`, `troom`, `nroom`, `meal`, `cin`, `cout`, `status`) VALUES
(12, 'aira', 'arialmbrt@gmail.com', '02312231241', '02312231241', '3', 'Full Board', '2017-11-30', '2017-11-25', 'REJECTED');

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
