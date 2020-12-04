-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 04:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantor`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_barang` int(15) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kondisi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_barang`, `nama_barang`, `jenis_barang`, `jumlah`, `kondisi`) VALUES
(748328, 'Canon Stylus', 'Printer', 7, 'Baik'),
(748374, 'Epson L120', 'Printer', 4, 'Baik'),
(2294838, 'ZTE Wide Router', 'Network Router', 5, 'Baik'),
(6636294, 'Samsung Air Conditio', 'Pendingin Ruangan', 10, 'Baik'),
(6673930, 'Asrock MB Intel', 'Motherboard', 5, 'Rusak'),
(7732380, 'Olympic Desk', 'Meja Resepsionis', 1, 'Baik'),
(7776373, 'Lenovo IdeaPad', 'Komputer Tablet', 2, 'Baik'),
(9993782, 'Lion Star Chair', 'Kursi Kerja', 25, 'Baik-Sedang'),
(11284024, 'Pixma Scanner 2in1', 'Scanner Optik', 2, 'Baik'),
(78497473, 'Samsung Projector', 'Projector Screen', 5, 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78497476;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
