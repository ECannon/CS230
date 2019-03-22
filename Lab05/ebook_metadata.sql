-- phpMyAdmin SQL Dump

-- version 4.8.5

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Generation Time: Mar 20, 2019 at 04:18 PM

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

-- Table structure for table `ebook_metadata`

--



CREATE TABLE `ebook_metadata` (
 
 
`ID` int(11) NOT NULL,

`Creator` varchar(50) NOT NULL,
  
`Title` varchar(50) NOT NULL,
  
`Type` varchar(50) NOT NULL,
  
`Identifier` varchar(50) NOT NULL,
  
`Date` date NOT NULL,
  
`Language` varchar(50) NOT NULL,
  
`Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--

-- Dumping data for table `ebook_metadata`

--



INSERT INTO `ebook_metadata` (`ID`, `Creator`, `Title`, `Type`, `Identifier`, `Date`, `Language`, `Description`) VALUES

(1, 'Eric', 'Mr.', 'Non-Fiction', '123-456-789', '1993-07-18', 'Irish', '5/5'),

(2, 'Louise', 'Mrs.', 'Fiction', '987-654-321', '2008-09-22', 'Spanish', 'Great');




--

-- Indexes for dumped tables

--



--

-- Indexes for table `ebook_metadata`

--


ALTER TABLE `ebook_metadata`
  
	ADD PRIMARY KEY (`ID`);



--

-- AUTO_INCREMENT for dumped tables

--



--

-- AUTO_INCREMENT for table `ebook_metadata`

--


ALTER TABLE `ebook_metadata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
