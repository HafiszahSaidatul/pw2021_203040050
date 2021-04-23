-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 05:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040050`
--

-- --------------------------------------------------------

--
-- Table structure for table `lampu`
--

CREATE TABLE `lampu` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `designer` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `variant` varchar(100) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lampu`
--

INSERT INTO `lampu` (`id`, `img`, `nama`, `designer`, `harga`, `variant`, `quantity`) VALUES
(1, 'lamp1.jpg', 'Melt pendant lamp', 'Melt', 'Rp.144.000,--', 'Smoke', '2 Pcs'),
(2, 'lamp2.jpg', 'Bazar wall lamp', 'Tom Dixon', 'Rp.198.000,--', 'Black', '2 Pcs'),
(3, 'lamp3.jpg', 'Hensi table lamp', 'By On', 'Rp.120.000,--', 'Dark grey', '3 Pcs'),
(4, 'lamp4.jpg', 'FlowerPot pendant big VP2', 'Verner Panton', 'Rp.235.000,--', 'Dark Green', '1 Pcs'),
(5, 'lamp5.jpg', 'Streck wall lamp', 'Joel Karlsson', 'Rp.450.000,--', 'Black', '7 Pcs'),
(6, 'lamp6.jpg', 'Bidar lamp shade', 'House Doctor', 'Rp.328.000,--', 'Sand', '1 pcs'),
(7, 'lamp7.jpg', 'Vienda table lamp', 'Hestral', 'Rp.560.000,--', 'Brass-white', '6 Pcs'),
(8, 'lamp8.jpg', 'Cymbal pendant', 'Helena Svensson', 'Rp.360.000,--', 'Brass-white', '2 Pcs'),
(9, 'lamp9.jpg', 'Gatsby ceiling light', 'Patrick Hall', 'Rp.222.000,--', 'Brass', '5 Pcs'),
(10, 'lamp10.jpg', 'Stone Table lamp', 'Norm Architects', 'Rp.980.000,--', 'Grey', '2 Pcs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'hafizasaidatll', '$2y$10$Cax5Y1/GKKAv5EH3SwuICuQ8btyWvkzcqPX56dOI89ROLqSnOwGea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lampu`
--
ALTER TABLE `lampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lampu`
--
ALTER TABLE `lampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
