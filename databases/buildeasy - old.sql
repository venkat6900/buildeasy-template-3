-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 10:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buildeasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_custmor` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `service` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_custmor`, `id_service`, `service`, `category`, `date`) VALUES
(10, 1, 1, 'building works', 'Construction Service Providers', '2017-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `custmors`
--

CREATE TABLE `custmors` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(20) NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custmors`
--

INSERT INTO `custmors` (`id`, `name`, `email`, `mobile`, `image`, `password`, `isEmailConfirmed`, `token`, `expire`) VALUES
(1, 'venkata ', 'venkat.tumu261@gmail.com', '9182387725', 'DSC_6282.JPG', '$2y$10$Xf/VGOjzABrQYFP3aRMJOuAWiwLODx81H9o4f1pgiUejpgX9tH.Nm', 1, '', '2018-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `custmor_profile`
--

CREATE TABLE `custmor_profile` (
  `id` int(11) NOT NULL,
  `id_custmor` int(11) NOT NULL,
  `area` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custmor_profile`
--

INSERT INTO `custmor_profile` (`id`, `id_custmor`, `area`, `address`) VALUES
(1, 1, 'madhapur', 'hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `category` varchar(256) NOT NULL,
  `service` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `id_vendor`, `category`, `service`, `address`, `description`, `image`) VALUES
(1, 1, 'Construction Service Providers', 'building works', 'hyderabad', 'vekab ndjsjsd jdsjdsjsd scjsddhsd dsksdvsd kkjehsdv jsdkjd jhkdhsd jkdjkdvjk jsdvhdvhkvsd kj', 'suit-1.jpg'),
(2, 1, 'Construction Material Dealers', 'cement deales', 'hyderabad', 'i cjhbjo932ui3hebbejd', 'DSC_6282.JPG'),
(3, 2, 'Building Maintanence Services', 'floor cleaning', 'madhapur', ' i will work for floor cleann', 'preview_IMG_20160717_182707.jpg'),
(4, 3, 'Building Maintanence Services', 'swiping', 'pragathinager, hyderabad', ' vkvnkvn oh hdvhohvovohohvo bb ', 'client-face2.png');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(20) NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `password`, `isEmailConfirmed`, `token`, `expire`) VALUES
(1, 'venkata Narayana reddy', 'venkat.tumu261@gmail.com', '$2y$10$LGAUnf/4wodkwZSfIMHNQ.zyXf7rtPPrfj4Suw3Q6hOLf0JfBKspK', 1, '', '2018-12-11'),
(2, 'narayana Reddy', 'venkyhack452@gmail.com', '$2y$10$eZUBkCn5e0.xbYsVrA8sFucFPssnsTchhGWu4AUWwli0.yNDkjt0y', 1, '', '0000-00-00'),
(3, 'swamy', 'swamy6123@gmail.com', '$2y$10$XcXNZOOH5L1EtqfsE9rMO.3OddxeAyseVIWzjl/jbMcDCC62FayqG', 1, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_profile`
--

CREATE TABLE `vendor_profile` (
  `id` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `area` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_profile`
--

INSERT INTO `vendor_profile` (`id`, `id_vendor`, `image`, `mobile`, `area`, `address`) VALUES
(1, 1, 'suit-1.jpg', '8790010929', 'madhapur', 'hyderabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custmors`
--
ALTER TABLE `custmors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custmor_profile`
--
ALTER TABLE `custmor_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_profile`
--
ALTER TABLE `vendor_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `custmors`
--
ALTER TABLE `custmors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custmor_profile`
--
ALTER TABLE `custmor_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_profile`
--
ALTER TABLE `vendor_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
