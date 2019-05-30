-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 01:37 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign5`
--

CREATE TABLE `assign5` (
  `ID` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `URL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign5`
--

INSERT INTO `assign5` (`ID`, `Date`, `Name`, `Description`, `URL`) VALUES
(2, '2019-05-02 23:16:37', 'yyy', 'alhflasdhf', 'reryrtewf'),
(4, '2019-05-02 22:34:01', '', '', ''),
(5, '2019-05-02 22:34:07', '', '', ''),
(6, '2019-05-02 22:42:11', '', '', ''),
(7, '2019-05-02 22:42:16', '', '', ''),
(10, '2019-05-02 23:32:29', '', '', ''),
(11, '2019-05-02 23:32:36', '', '', ''),
(12, '2019-05-02 23:33:25', '', '', ''),
(13, '2019-05-02 23:34:08', '', '', ''),
(14, '2019-05-02 23:34:10', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign5`
--
ALTER TABLE `assign5`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign5`
--
ALTER TABLE `assign5`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
