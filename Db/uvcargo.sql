-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 09:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uvcargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(2) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `name`, `password`) VALUES
(1, 'GAUTAM', '123'),
(2, 'KARAN', '234');

-- --------------------------------------------------------

--
-- Table structure for table `branchlog`
--

CREATE TABLE `branchlog` (
  `id` int(2) NOT NULL,
  `branchcity` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `branchname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `branchcontactnumber` int(10) NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branchlog`
--

INSERT INTO `branchlog` (`id`, `branchcity`, `branchname`, `branchcontactnumber`, `password`) VALUES
(1, 'RAJKOT', 'RAJKOT', 123098754, 'rj'),
(2, 'SURAT', 'SZ1', 456123789, 'sz1'),
(4, 'Navsari', 'Navsari Z1', 1234567890, 'nz1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` int(30) NOT NULL,
  `subject` int(30) NOT NULL,
  `massage` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `udetail`
--

CREATE TABLE `udetail` (
  `uid` int(3) NOT NULL,
  `od` date NOT NULL,
  `cn` varchar(25) NOT NULL,
  `pd` date NOT NULL,
  `ce` varchar(40) NOT NULL,
  `cno` int(10) NOT NULL,
  `pa` varchar(50) NOT NULL,
  `pc` varchar(10) NOT NULL,
  `dc` varchar(10) NOT NULL,
  `da` varchar(50) NOT NULL,
  `CargoType` varchar(40) NOT NULL,
  `cod` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `udetail`
--

INSERT INTO `udetail` (`uid`, `od`, `cn`, `pd`, `ce`, `cno`, `pa`, `pc`, `dc`, `da`, `CargoType`, `cod`) VALUES
(1, '2021-05-07', 'Meet ', '2021-05-05', 'meetpatel@gmail.com', 981234567, 'Gandhigram street no-3 house  no-10', 'rajkot', 'Ahmdabad', 'West bhopal', '31', 'cod'),
(2, '2021-05-07', 'karan patel', '2021-05-06', 'kp1@gmai;.com', 1230987654, 'rajkot', 'eajkot', 'morbi', 'morbi', 'Select Cargo', 'cod'),
(3, '2021-05-07', 'karan patel', '2021-05-06', 'kp1@gmai;.com', 1230987654, 'rajkot', 'eajkot', 'morbi', 'morbi', '40ft High Cube Conta', 'cod'),
(4, '2021-05-08', 'ajsbhjajk', '2021-05-07', 'd@gmail.com', 2147483647, 'skaldhlka', 'bnxz,mbc', 'dkmvn', 'mnsczmc', '20ft Container', 'cod');

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `uid` int(2) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`uid`, `uname`, `email`, `contact`, `city`, `psw`) VALUES
(1, 'Patel Karan', 'uv230@gmail.com', '1237894560', 'Surat', 'uv1'),
(2, 'Kp', 'kp@gmail.com', '0987654321', 'junagadh', 'kk'),
(3, 'karan Patel', 'kp@gmail.com', '1234567890', 'Rajkot', 'kp'),
(4, 'Gautam Patel', 'gppatel@gmail.com', '0987654321', 'Lathi', 'gp'),
(5, 'Sanjog Patel', 'sp@gmail.com', '1234567890', 'Rajkot', 'sp'),
(6, 'Deepak', 'd@gmail.com', '0987654321', 'Jamnagar', 'dd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branchlog`
--
ALTER TABLE `branchlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `udetail`
--
ALTER TABLE `udetail`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branchlog`
--
ALTER TABLE `branchlog`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `udetail`
--
ALTER TABLE `udetail`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usersignup`
--
ALTER TABLE `usersignup`
  MODIFY `uid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
