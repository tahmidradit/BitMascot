-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 07:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitmascot`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(5) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `FirstName` varchar(65) NOT NULL,
  `LastName` varchar(65) NOT NULL,
  `Address` varchar(65) NOT NULL,
  `Phone` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Birthdate` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Password` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `UserName`, `FirstName`, `LastName`, `Address`, `Phone`, `Email`, `Birthdate`, `Age`, `Password`) VALUES
(1, 'admin', 'Tahmid', 'Radit', 'Dhaka', '01715192335', 'admin@localhost.local', '1998-12-31', 23, 'Admin'),
(2, 'tahmidradit', 'Toky Tahmid ', 'Radit', 'Mymensingh', '01567822877', 'tahmidradit@yahoo.com', '1998-12-31', 23, 'tahmid1'),
(3, 'radit', 'Muhammad Tahmid', 'Radit', 'Mymensingh, Dhaka, Bangladesh', '01715192335', 'tahmid.radit@outlook.com', '1998-12-31', 23, 'radit1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
