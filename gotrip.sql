-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 09:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userType` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userType`, `fName`, `lName`, `email`, `address`, `phone`, `password`) VALUES
(1, 3, 'ps', 'bandarigoda', 'ps@gmail.com', 'egodahawaththa, hikkaduwa', '0776358592', '123'),
(2, 3, 'Ashmila', 'Shehani', 'ashmila@gmail.com', 'weligama, matara', '0715558592', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booked_package`
--

CREATE TABLE `booked_package` (
  `id` int(11) NOT NULL,
  `package` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `startDate` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_package`
--

INSERT INTO `booked_package` (`id`, `package`, `user`, `adults`, `children`, `startDate`, `price`, `status`) VALUES
(1, 1, 2, 0, 0, '23-07-2020', 0, 'payed'),
(2, 1, 1, 2, 1, '2020-08-27', 500, 'payed'),
(10, 1, 1, 1, 1, '2020-08-27', 300, 'CASH'),
(19, 1, 1, 2, 1, '2020-08-31', 500, 'no paid');

-- --------------------------------------------------------

--
-- Table structure for table `booked_vehicle`
--

CREATE TABLE `booked_vehicle` (
  `id` int(11) NOT NULL,
  `vehicle` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `startDate` varchar(255) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_vehicle`
--

INSERT INTO `booked_vehicle` (`id`, `vehicle`, `user`, `startDate`, `days`) VALUES
(1, 1, 2, '23-07-2020', 2);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `pacName` varchar(255) NOT NULL,
  `pacDetails` varchar(255) NOT NULL,
  `pacPrice` int(11) NOT NULL,
  `pacImage` varchar(255) NOT NULL,
  `pacDays` varchar(255) NOT NULL,
  `pacLoaction` varchar(255) NOT NULL,
  `pacAvailability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `pacName`, `pacDetails`, `pacPrice`, `pacImage`, `pacDays`, `pacLoaction`, `pacAvailability`) VALUES
(1, 'Galle One Day', 'Galle Foart, Jungle beach, Rumassala Japan Tempe', 200, 'assets/img/service/services1.jpg', '1', 'Galle', 8),
(2, 'Galle Two Day', 'Galle Foart, Jungle beach, Hikkaduwa, Seenigama, Diving', 300, 'assets/img/service/services2.jpg', '2', 'Galle', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userType` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userType`, `fName`, `lName`, `email`, `address`, `phone`, `password`, `last_login`) VALUES
(1, 1, 'kaushi', 'athukorala', 'kaushi@gmail.com', 'Wekunugoda,Galle', '0776358942', '456', 2147483647),
(2, 1, 'bodini', 'athukorala', 'bodini@gmail.com', 'Wekunugoda,Galle', '0762539542', '654', 2147483647),
(3, 2, 'pasindu', 'sandaruwan', 'pasindu@gmail.com', 'Colombo', '0715667854', '12345', 2147483647),
(4, 3, 'pasindu', 'sandaruwan', '97psps@gmail.com', 'Colombo', '0715667854', '1111', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`) VALUES
(1, 'user'),
(2, 'vehicle_owner'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `vType` int(11) NOT NULL,
  `vOwner` int(11) NOT NULL,
  `vRegNo` varchar(255) NOT NULL,
  `vColour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vType`, `vOwner`, `vRegNo`, `vColour`) VALUES
(1, 1, 2, 'ACB-0201', 'black'),
(2, 2, 2, 'AAA-8205', 'black'),
(3, 3, 2, 'ACD-2203', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_owner`
--

CREATE TABLE `vehicle_owner` (
  `id` int(11) NOT NULL,
  `userType` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_owner`
--

INSERT INTO `vehicle_owner` (`id`, `userType`, `fName`, `lName`, `email`, `address`, `phone`, `password`) VALUES
(2, 2, 'pasindu', 'sandaruwan', 'pasindu@gmail.com', 'baddegama', '0773638654', '123'),
(3, 2, 'isuri', 'sandamini', 'isuri@gmail.com', 'baddegama', '0763638654', '321');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `type`, `price`, `availability`) VALUES
(1, 'scooty', 10, 1),
(2, 'off road', 20, 1),
(3, 'tuk tuk', 30, 1),
(4, 'mini car', 40, 0),
(5, 'premier car', 0, 0),
(6, 'luxury car', 0, 0),
(7, 'mini van', 0, 0),
(8, 'luxury van', 0, 0),
(9, 'luxury bus', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_Type3` (`userType`);

--
-- Indexes for table `booked_package`
--
ALTER TABLE `booked_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package`),
  ADD KEY `user_id2` (`user`);

--
-- Indexes for table `booked_vehicle`
--
ALTER TABLE `booked_vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_id` (`vehicle`),
  ADD KEY `user_id` (`user`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_Type2` (`userType`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_type` (`vType`),
  ADD KEY `vehicle_owner` (`vOwner`);

--
-- Indexes for table `vehicle_owner`
--
ALTER TABLE `vehicle_owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_Type` (`userType`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booked_package`
--
ALTER TABLE `booked_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `booked_vehicle`
--
ALTER TABLE `booked_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_owner`
--
ALTER TABLE `vehicle_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `user_Type3` FOREIGN KEY (`userType`) REFERENCES `user_type` (`id`);

--
-- Constraints for table `booked_package`
--
ALTER TABLE `booked_package`
  ADD CONSTRAINT `package_id` FOREIGN KEY (`package`) REFERENCES `package` (`id`),
  ADD CONSTRAINT `user_id2` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Constraints for table `booked_vehicle`
--
ALTER TABLE `booked_vehicle`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `vehicle_id` FOREIGN KEY (`vehicle`) REFERENCES `vehicle` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_Type2` FOREIGN KEY (`userType`) REFERENCES `user_type` (`id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_owner` FOREIGN KEY (`vOwner`) REFERENCES `vehicle_owner` (`id`),
  ADD CONSTRAINT `vehicle_type` FOREIGN KEY (`vType`) REFERENCES `vehicle_type` (`id`);

--
-- Constraints for table `vehicle_owner`
--
ALTER TABLE `vehicle_owner`
  ADD CONSTRAINT `user_Type` FOREIGN KEY (`userType`) REFERENCES `user_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
