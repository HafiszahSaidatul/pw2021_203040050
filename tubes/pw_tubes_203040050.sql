-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 08:36 AM
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
  `quantity` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lampu`
--

INSERT INTO `lampu` (`id`, `img`, `nama`, `designer`, `harga`, `variant`, `quantity`, `foto`, `room`) VALUES
(1, 'lamp1.png', 'Melt pendant lamps', 'Melt', 'Rp.144.000,--', 'Smoke', '4 Pcs', 'r1.jpg', 'Bathroom'),
(2, 'lamp2.png', 'Bazar wall lamp', 'Tom Dixon', 'Rp.198.000,--', 'Black', '2 Pcs', 'r2.jpg', 'Wastafel'),
(3, 'lamp3.png', 'Hensi table lamp', 'By On', 'Rp.120.000,--', 'Dark grey', '3 Pcs', 'r3.jpg', 'Living Room'),
(4, 'lamp4.png', 'FlowerPot pendant big VP2', 'Verner Panton', 'Rp.235.000,--', 'Dark Green', '1 Pcs', 'r4.jpg', 'Terrace'),
(5, 'lamp5.png', 'Streck wall lamp', 'Joel Karlsson', 'Rp.450.000,--', 'Black', '7 Pcs', 'r5.jpg', 'Bedroom'),
(6, 'lamp6.png', 'Bidar lamp shade', 'House Doctor', 'Rp.328.000,--', 'Sand', '1 pcs', 'r6.jpg', 'Kitchen'),
(7, 'lamp7.png', 'Vienda table lamp', 'Hestral', 'Rp.560.000,--', 'Brass-white', '6 Pcs', 'r7.jpg', 'Dining Room'),
(8, 'lamp8.png', 'Cymbal pendant', 'Helena Svensson', 'Rp.360.000,--', 'Brass-white', '2 Pcs', 'r8.jpg', 'Family Room'),
(9, 'lamp9.png', 'Gatsby ceiling light', 'Patrick Hall', 'Rp.222.000,--', 'Brass', '5 Pcs', 'r9.jpg', 'Wastafel'),
(10, 'lamp10.png', 'Stone Table lamp2', 'Norm Architects', 'Rp.980.000,--', 'Grey', '2 Pcs', 'r10.jpg', 'Clothing Room\r\n');

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
(6, 'hafizasaidatll', '$2y$10$Cax5Y1/GKKAv5EH3SwuICuQ8btyWvkzcqPX56dOI89ROLqSnOwGea'),
(8, 'admin', '$2y$10$12U2yRunAl91WoMDiHXu/OEeHOuXFy4cy4Hy1MPxT35SEJoxHYhXe'),
(14, 'hafiszahsaidatull@gmail.com', '$2y$10$wDsp.E9Cn8dd3Vn454cP6O9Jx.be0UCESsKGirxOxHzpB/zt9Sdg2'),
(16, 'kendallj', '$2y$10$BsEZE.TzGaXdnbNKaaEPt.JAKrOJNLcGf2wb22/s8uTwhx3Wb7pr.'),
(17, 'kendal', '$2y$10$6XkiQly8r79LiUPZqXSa1ucXPFAmPWWIF77/ANZl8xTzXTK8SMTRC');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
