-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 07:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` int(1) NOT NULL,
  `branchId` varchar(10) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstname`, `lastname`, `email`, `password`, `permission`, `branchId`, `active`) VALUES
('U-0000001', 'Jose', 'Dela Cruz', 'josedelacruz@gmail.com', 'josed', 1, '1', 2),
('U-0000002', 'Richard', 'Talman', 'richtalman@gmail.com', 'rtalman', 2, '2', 1),
('U-0000003', 'Alex', 'Balmores', 'alexb@gmail.com', 'alexbalmores', 1, '1', 1),
('U-0000004', 'Rey Abel', 'Santiago', 'reyabelsantiago@gmail.com', 'rayzor', 2, '2', 1),
('U-0000005', 'Azuki', 'Expand', 'azukiexpand@yahoo.com', 'azuki', 3, '4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`,`branchId`,`permission`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
