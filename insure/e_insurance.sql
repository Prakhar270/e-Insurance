-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 02:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `password`) VALUES
('username', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`name`, `email`, `contact`, `service_type`, `msg`, `date`) VALUES
('kamal', 'kamal.kishor1323@gamil.com', '', '', '', '11/05/23'),
('kamal', 'kamal.kishor1323@gamil.com', '', '', 'asdgfdhghj', '11/05/23'),
('kamal', 'kamal.kishor1323@gamil.com', '2q546547', 'lko', 'qqeqwrew', '11/05/23'),
('kamal', 'kamal.kishor1323@gamil.com', '2q546547', 'lko', 'qqeqwrew', '11/05/23'),
('kamal', 'kamal.kishor1323@gamil.com', '2q546547', 'lko', 'qqeqwrew', '11/05/23');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `email`, `pswd`) VALUES
('ram', 'raam@gmail.com', '12345'),
('kamal', 'kk@gmail.com', '12345'),
('vikas', 'vk@yhoo.on', '12345'),
('anli', 'anil@yahoo.in', '12345'),
('manish', 'mn@yahoo.in', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `user_name` varchar(255) NOT NULL,
  `policy_num` varchar(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`user_name`, `policy_num`, `ctype`, `cardnumber`, `cname`, `expiry`, `cvv`, `date`, `paid`) VALUES
('vikas', '12376', 'debit', '131243454364565', 'aman', '2023-06', '123', '11/05/23', ''),
('vikas', '12376', 'debit', '131243454364565', 'aman', '2023-06', '123', '11/05/23', ''),
('vikas', '12376', 'debit', '3124234345', 'aman', '2023-06', '123', '11/05/23', '13000');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(245) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `cpswd` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `insurance_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `sname`, `uname`, `email`, `pswd`, `cpswd`, `mob`, `address`, `insurance_type`) VALUES
('Anil', 'kumar', 'anli', 'anil@yahoo.in', '12345', '12345', '9944994552', 'lko', 'Vehicle Insurance'),
('kamal', 'kamal', 'kamal', 'kk@gmail.com', '123', '123', '9125377114', 'sitapur', 'Vehicle Insurance'),
('ram', 'Raam', 'kumar', 'adsdsa', '12345', '12345', '9125377114', 'lko', 'engagement'),
('Manish', 'kumar', 'manish', 'mn@yahoo.in', '12345', '12345', '9125377114', 'lko', 'Vehicle Insurance'),
('kumar', 'vikas', 'vikas', 'vk@yhoo.on', '12345', '12345', '9223459875', 'lko', 'Heth Insurance');

-- --------------------------------------------------------

--
-- Table structure for table `user_kyc`
--

CREATE TABLE `user_kyc` (
  `user_name` varchar(255) NOT NULL,
  `ensuranse_type` varchar(255) NOT NULL,
  `gen` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `occ` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_kyc`
--

INSERT INTO `user_kyc` (`user_name`, `ensuranse_type`, `gen`, `adhar`, `pan`, `occ`, `name`, `adress`, `image`) VALUES
('ram', 'Life Insurance', 'Male', '21345678', 'ks1323123', 'emoy', 'Delhi', 'lko', 'uploadimg/an.png'),
('vikas', 'Life Insurance', 'Male', '3543654654', 'vk32324', 'manager', 'vikas kumar', '132432423', 'uploadimg/an.png'),
('anli', 'Life Insurance', 'Male', '3912432423543', 'kk12444', 'manager', 'anil kumar', 'lko', 'uploadimg/1678446619197.jfif'),
('manish', 'Vehicle Insurance', 'Male', '213433232', 'kk12444', 'manager', 'Manish', 'lko', 'uploadimg/Class.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_policy`
--

CREATE TABLE `user_policy` (
  `uname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `insurance_type` varchar(255) NOT NULL,
  `policy_number` varchar(255) NOT NULL,
  `paid_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_policy`
--

INSERT INTO `user_policy` (`uname`, `name`, `insurance_type`, `policy_number`, `paid_amount`) VALUES
('ram', 'Delhi', 'Life Insurance', '134234', '12000'),
('vikas', 'vikas kumar', 'Life Insurance', '134234', '12000'),
('anli', 'anil kumar', 'Life Insurance', '134234', '12000'),
('ram', 'Delhi', 'Life Insurance', '123', '12000'),
('vikas', 'vikas kumar', 'Life Insurance', '123', '12000'),
('anli', 'anil kumar', 'Life Insurance', '123', '12000'),
('ram', 'Delhi', 'Life Insurance', '56733', '12000'),
('vikas', 'vikas kumar', 'Life Insurance', '56733', '12000'),
('anli', 'anil kumar', 'Life Insurance', '56733', '12000'),
('manish', 'Manish', 'Vehicle Insurance', '56733', '12000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
