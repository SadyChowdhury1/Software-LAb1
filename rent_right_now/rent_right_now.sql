-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 06:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_right_now`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` char(20) DEFAULT NULL,
  `pw` varchar(20) DEFAULT NULL,
  `problem` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pw`, `problem`) VALUES
('sady', '1234', NULL),
('sady', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(10) NOT NULL,
  `room` int(10) DEFAULT NULL,
  `kitchen` int(10) DEFAULT NULL,
  `toilet` int(10) DEFAULT NULL,
  `balcony` int(10) DEFAULT NULL,
  `area` int(10) DEFAULT NULL,
  `location` char(200) DEFAULT NULL,
  `floor` char(10) DEFAULT NULL,
  `genarator` char(10) DEFAULT NULL,
  `drawing_dining` char(10) DEFAULT NULL,
  `electric_bill` char(10) DEFAULT NULL,
  `water_bill` char(10) DEFAULT NULL,
  `gas_bill` char(10) DEFAULT NULL,
  `bill_pay_system` char(20) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `lift` char(10) DEFAULT NULL,
  `Date1` char(20) DEFAULT NULL,
  `rent` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `room`, `kitchen`, `toilet`, `balcony`, `area`, `location`, `floor`, `genarator`, `drawing_dining`, `electric_bill`, `water_bill`, `gas_bill`, `bill_pay_system`, `contact`, `lift`, `Date1`, `rent`) VALUES
(1, 2, 1, 2, 2, 1100, 'dhaka,badda,shajadpur,kha 44/1', '4th', 'yes', 'yes', 'yes', 'no', 'yes', 'no card', 1955555555, 'no', '2-2-2022', '14000'),
(2, 2, 1, 2, 2, 1100, 'dhaka,badda,shajadpur,kha 44/1', '4th', 'yes', 'yes', 'yes', 'no', 'yes', 'Card', 1712222222, 'no', '2-5-2021', '14000'),
(3, 4, 1, 3, 3, 1400, 'Dhaka,Mohammodpur,shajahan road, 12/8', '2nd', 'yes', 'yes', 'yes', 'yes', 'yes', 'All card', 96255, 'yes', '1-5-2022', '30000'),
(4, 5, 1, 4, 3, 1800, '  3 No Tejturi Bazar West, Panthapath, Dhaka 1215', '9th', 'yes', 'yes', 'yes', 'yes', 'yes', 'Electric bill onlyca', 1744444444, 'Yes', '5-5-2022', '50000'),
(5, 5, 1, 4, 3, 1800, '  3 No Tejturi Bazar West, Panthapath, Dhaka 1215', '9th', 'yes', 'yes', 'yes', 'yes', 'yes', 'Electric bill onlyca', 1744444444, 'Yes', '6-6-22', '50000'),
(6, 2, 1, 1, 1, 1000, 'KhajaNogor,block:F,22/A', 'ground', 'no', 'yes', 'yes', 'yes', 'yes', 'not card', 23333, 'no', '02-02-2020', '12000'),
(7, 2, 1, 1, 1, 1000, 'KhajaNogor,block:F,22/A', 'ground', 'no', 'yes', 'yes', 'yes', 'yes', 'not card', 23333, 'no', '02-02-2020', '12000'),
(8, 2, 1, 1, 1, 1000, 'KhajaNogor,block:F,22/A', 'ground', 'no', 'yes', 'yes', 'yes', 'yes', 'not card', 23333, 'no', '02-02-2020', '12000'),
(9, 3, 1, 3, 3, 1300, 'Dhanmondi 10/A,22/1', '3rd', 'yes', 'yes', 'yes', 'yes', 'yes', 'card', 1822222222, 'yes', '26-3-2022', '35000'),
(10, 2, 1, 2, 2, 1100, 'Lalmatia,block-c,1/A', '2nd', 'no', 'no', 'yes', 'yes', 'yes', 'card', 15332561, 'no', '02-06-2022', '30000'),
(11, 6, 1, 4, 3, 2000, 'KA-244, Kuril, Progoti Shoroni, Dhaka', '9th', 'yes', 'yes', 'yes', 'yes', 'yes', 'Card', 12333, 'yes', '02-7-2022', '30000'),
(12, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `house_owner`
--

CREATE TABLE `house_owner` (
  `owner_id` int(10) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `pw` varchar(20) DEFAULT NULL,
  `contact_no` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_owner`
--

INSERT INTO `house_owner` (`owner_id`, `name`, `pw`, `contact_no`) VALUES
(1, 'sady', '1234', 1233),
(2, 'sady', '1234', 1233),
(3, 'kamal', '1234', 121212),
(4, 'kamal', '1234', 121212),
(5, 'jamal', '1234', 21212),
(6, 'jamal', '1234', 21212),
(7, 'Sany', '1234', 131313),
(8, 'Sany', '1234', 131313),
(9, 'jamal', '2', 2553),
(10, 'nafij', 'abc', 256625561),
(11, 'Kabul', '1234', 171523333),
(12, 'jahir', '1111', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `name` char(20) DEFAULT NULL,
  `pw` varchar(20) DEFAULT NULL,
  `contact_no` int(20) DEFAULT NULL,
  `nid` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`name`, `pw`, `contact_no`, `nid`) VALUES
('sady', '1234', NULL, ''),
('sady', '1234', 12121, '12121'),
('labiba', '1212', 3213213, '21212121'),
('labiba', '1212', 316544, '2563325455555'),
('kamal', 'abc', 546546, '4234234'),
('Kabul', '1234', 12133, '5957756'),
('labiba', '1212', 2132132, '65655');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `house_owner`
--
ALTER TABLE `house_owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `house_owner`
--
ALTER TABLE `house_owner`
  MODIFY `owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
