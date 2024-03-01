-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 12:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wastemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `arid` int(11) NOT NULL,
  `arpincode` int(11) NOT NULL,
  `arstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `caid` int(11) NOT NULL,
  `cacategory` varchar(20) NOT NULL,
  `carate` int(11) NOT NULL,
  `castatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `collection_agent`
--

CREATE TABLE `collection_agent` (
  `caid` int(20) NOT NULL,
  `caname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cacontact` bigint(10) NOT NULL,
  `caemail` varchar(50) NOT NULL,
  `caaadhar` bigint(12) NOT NULL,
  `area` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collection_agent`
--

INSERT INTO `collection_agent` (`caid`, `caname`, `address`, `cacontact`, `caemail`, `caaadhar`, `area`, `pass`) VALUES
(3, 'ahzan', 'panayikulam', 6758909876, 'ahsan@gmail.com', 123434234512, 'Ward-4, Ward-5, Ward-6', 'ahzan'),
(4, 'Sourav', 'Mannam', 6788564786, 'sourav@gmail.com', 657483456723, 'Ward-7, Ward-8, Ward-9', 'sourav'),
(5, 'sreerag', 'sreekandan', 8776574855, 'sree@gmail.com', 2345645237894, 'Ward-1, Ward-2, Ward-3', 'sreerag'),
(6, 'Ansil', 'aluva', 7896054321, 'ansil@gmail.com', 8906543216, 'Ward-1, Ward-2, Ward-3', 'ansil');

-- --------------------------------------------------------

--
-- Table structure for table `collection_schedule`
--

CREATE TABLE `collection_schedule` (
  `csid` int(11) NOT NULL,
  `csprocedure` int(11) NOT NULL,
  `cscollectionid` int(11) NOT NULL,
  `csday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `ward` varchar(11) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`id`, `name`, `email`, `address`, `pincode`, `ward`, `phno`, `password`) VALUES
(1, 'nadeem', 'nadeem@gmail.com', 'al fajir', 683511, 'Ward-8', 8089143474, 'nadeem'),
(2, 'vyshakh', 'vysh@gmail.com', 'souravam', 683511, 'Ward-10', 3456765432, 'vyshakh'),
(3, 'Krishna Priya', 'kp@gmail.com', 'Kaprasserry', 678544, 'Ward-2', 8796546789, 'krishna'),
(4, 'Anu', 'anu@gmail.com', 'Aluva', 683178, 'Ward-3', 7890654321, 'anu');

-- --------------------------------------------------------

--
-- Table structure for table `customer_request`
--

CREATE TABLE `customer_request` (
  `id` int(11) NOT NULL,
  `customerid` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `sack` int(11) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_request`
--

INSERT INTO `customer_request` (`id`, `customerid`, `status`, `sack`, `date`, `category`) VALUES
(1, '2', 'Requested', 3, '2022-12-05', 'E-waste'),
(2, '1', 'Requested', 1, '2022-12-14', 'E-waste'),
(3, '3', 'Collected', 2, '2022-12-20', 'E-waste'),
(4, '3', 'Collected', 7, '2022-12-05', 'Plastic'),
(5, '4', 'Requested', 3, '2022-12-05', 'Plastic');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uname`, `pass`, `usertype`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'nadeem', 'nadeem', 'customer', 1),
(3, 'vyshakh', 'vyshakh', 'customer', 1),
(4, 'Krishna Priya', 'krishna', 'customer', 1),
(5, 'Sourav', 'sourav', 'worker', 1),
(6, 'sreerag', 'sreerag', 'worker', 1),
(7, 'anu@gmail.com', 'anu', 'customer', 1),
(8, 'ansil@gmail.com', 'ansil', 'worker', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ewaste`
--

CREATE TABLE `tbl_ewaste` (
  `sino` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ewaste`
--

INSERT INTO `tbl_ewaste` (`sino`, `date`, `time`, `area`) VALUES
(1, '2022-11-06', '09:00:00', 'ward-1,ward-2,ward-3'),
(2, '2022-11-07', '09:00:00', 'ward-4,ward-5,ward-6'),
(3, '2022-11-08', '09:00:00', 'ward-7,ward-8,ward-9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection_agent`
--
ALTER TABLE `collection_agent`
  ADD PRIMARY KEY (`caid`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_request`
--
ALTER TABLE `customer_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `tbl_ewaste`
--
ALTER TABLE `tbl_ewaste`
  ADD PRIMARY KEY (`sino`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection_agent`
--
ALTER TABLE `collection_agent`
  MODIFY `caid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_request`
--
ALTER TABLE `customer_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_ewaste`
--
ALTER TABLE `tbl_ewaste`
  MODIFY `sino` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
