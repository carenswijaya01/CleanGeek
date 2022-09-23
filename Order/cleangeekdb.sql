-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 06:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleangeekdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Service` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Statuss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `User_id`, `Service`, `Price`, `Date`, `Address`, `Statuss`) VALUES
(22, 3, 'Deep Cleaning (Hard)', 50000, '2021-05-24', 'Jl. Comberan', 'Completed'),
(23, 3, 'Unyellowing', 50000, '2021-05-24', 'Ambarawa', 'Completed'),
(24, 5, 'Fast Cleaning', 30000, '2021-05-24', 'Tangerang Tengah', 'Completed'),
(25, 5, 'Unyellowing', 50000, '2021-05-24', 'Aduh', 'Completed'),
(26, 5, 'Unyellowing', 50000, '2021-05-24', 'Tangerang Samping', 'Completed'),
(27, 5, 'Deep Cleaning (Hard)', 50000, '2021-05-24', 'asdasdad', 'Completed'),
(28, 5, 'Unyellowing', 50000, '2021-05-24', 'Jl. Brondong', 'Completed'),
(29, 3, 'Unyellowing', 50000, '2021-05-24', 'Semarang', 'Completed'),
(30, 3, 'Unyellowing', 50000, '2021-05-24', 'Yes', 'Completed'),
(31, 3, 'Fast Cleaning', 30000, '2021-05-24', 'Surabaya', 'In Progress'),
(32, 3, 'Deep Cleaning (Normal)', 25000, '2021-05-24', 'Indonesia', 'In Progress'),
(33, 3, 'Boost Repaint', 60000, '2021-05-24', 'Jakarta', 'In Progress'),
(34, 3, 'Fast Cleaning', 30000, '2021-05-24', 'Sembarang', 'In Progress'),
(35, 3, 'Boost Repaint', 60000, '2021-05-24', 'Sembarangs', 'In Progress'),
(36, 6, 'Fast Cleaning', 30000, '2021-05-24', 'Jl. Mengkudu', 'Completed'),
(37, 6, 'Boost Repaint', 60000, '2021-05-24', 'Sembilu', 'In Progress'),
(38, 3, 'Fast Cleaning', 30000, '2021-05-24', 'asdasdxx', 'In Progress'),
(39, 3, 'Unyellowing', 50000, '2021-05-24', 'meksa', 'In Progress'),
(40, 6, 'Deep Cleaning (Hard)', 50000, '2021-05-24', 'Maks', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `usertables`
--

CREATE TABLE `usertables` (
  `User_id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertables`
--

INSERT INTO `usertables` (`User_id`, `Email`, `First_Name`, `Last_Name`, `Password`) VALUES
(2, 'ceret@gmail.com', 'Ceret', 'Kurniawan', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(3, 'mike@gmail.com', 'Mikhael', 'Susanta', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(4, 'felix@gmail.com', 'felix', 'tandrio', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(5, 'mbe@gmail.com', 'Mbe', 'Brian', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(6, 'Vinzier@gmail.com', 'Vinzier', 'Kwak', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `usertables`
--
ALTER TABLE `usertables`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `usertables`
--
ALTER TABLE `usertables`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `usertables` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
