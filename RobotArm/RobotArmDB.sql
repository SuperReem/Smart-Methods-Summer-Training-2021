-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2021 at 05:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RobotArmDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Angles`
--

CREATE TABLE `Angles` (
  `Engine1` int(11) NOT NULL,
  `Engine2` int(11) NOT NULL,
  `Engine3` int(11) NOT NULL,
  `Engine4` int(11) NOT NULL,
  `Engine5` int(11) NOT NULL,
  `Engine6` int(11) NOT NULL,
  `DateTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Angles`
--

INSERT INTO `Angles` (`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`, `DateTime`) VALUES
(90, 45, 0, 180, 0, 0, '2021-06-24 03:11:03.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ONOFF`
--

CREATE TABLE `ONOFF` (
  `ONOFF` varchar(255) NOT NULL,
  `DateTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ONOFF`
--

INSERT INTO `ONOFF` (`ONOFF`, `DateTime`) VALUES
('OFF', '2021-06-24 03:10:04.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
