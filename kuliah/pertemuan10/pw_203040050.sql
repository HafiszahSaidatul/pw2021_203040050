-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 07:35 PM
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
-- Database: `pw_203040050`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Ell Profesor', '204020001', 'elprofesor@gmail.com', 'Teknik Informatika', '1.jpg'),
(2, 'Berlin Caiso', '204020002', 'berlincas@gmail.com', 'Teknik Mesin', '2.jpg'),
(3, 'Palermo Seiu', '204020003', 'palermo22@gmail.com', 'Teknik Informatika', '3.jpg'),
(4, 'Tokio Nei', '204020004', 'tokiooo@gmail.com', 'Teknik Industri', '4.jpg'),
(5, 'Denver Evier', '204020005', 'denverr05@gmail.com', 'Teknik Pangan', '5.jpg'),
(6, 'Lisboa Murillo', '204020006', 'LisboaM@gmail.com', 'Teknik Informatika', '6.jpg'),
(7, 'Helsinki Nui', '204020007', 'helsinkiNuii2@gmail.com', 'Teknik Informatika', '7.jpg'),
(8, 'Estocolmo Oium', '204020008', 'estocolmoium@gmail.com', 'Teknik Pangan', '8.jpg'),
(9, 'Bogota Eria', '204020009', 'bogotaaerriaa@gmail.com', 'Teknik Mesin', '9.jpg'),
(10, 'Sofia Deli', '204020010', 'sofia0110@gmail.com', 'Teknik Mesin', '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
