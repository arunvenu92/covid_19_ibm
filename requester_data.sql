-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2020 at 06:27 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `covid-19-India`
--

-- --------------------------------------------------------

--
-- Table structure for table `requester`
--

CREATE TABLE IF NOT EXISTS `requester` (
  `REQ_ID` varchar(50) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `REQ_TEXT` varchar(512) NOT NULL,
  `LATITUDE` double NOT NULL,
  `LONGITUDE` double NOT NULL,
  `PHONE` bigint(10) NOT NULL,
  `REQ_TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requester`
--

INSERT INTO `requester` (`REQ_ID`, `USER_NAME`, `REQ_TEXT`, `LATITUDE`, `LONGITUDE`, `PHONE`, `REQ_TYPE`) VALUES
('REQ00001', 'arunvenu92', 'Hello, My uncle needs medicines for his asthma. We are not have any transportation, Request to help us.', 11.0168, 76.9558, 9791826428, 'P1'),
('REQ00002', 'anandvenu92', 'Hello admin, We are in short of water and food supplies. Please help.', 13.0827, 80.2707, 7845677486, 'P2'),
('REQ00003', 'kunalpadam23', 'Hello, I am living in Madurai and there are no stores to buy the essential here. Requesting to provide the needful', 9.9252, 78.1198, 8484847679, 'P2'),
('REQ00004', 'anoopbala45', 'We have a medical emergency in Kanyakumari district. Please send ambulance to kalaignar street immediately.', 8.80883, 77.5385, 9894167856, 'P1'),
('REQ00005', 'viralthakkar234', 'We are 20 member team, and having food packets for 120 members. We are in need of transport to move the food and deliver to needy people. Please do the needful', 18.5204, 73.8567, 7678901203, 'P3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
