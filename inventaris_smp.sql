-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2021 at 07:02 PM
-- Server version: 10.3.31-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pencaker_inventaris_smp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nm_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nm_barang`) VALUES
(1, 'Kursi '),
(2, 'Meja Siswa'),
(3, 'Papan Tulis'),
(4, 'Meja Guru'),
(5, 'Kursi Guru'),
(6, 'Buku Cetak B.I');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `hak`) VALUES
(1, 'admin', '12345678', 'admin'),
(2, 'kepsek', '12345678', 'kepsek');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id` int(11) NOT NULL,
  `nm_tempat` varchar(100) NOT NULL,
  `kode` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id`, `nm_tempat`, `kode`) VALUES
(1, 'Kelas 7', '7'),
(2, 'Kelas 8', '8'),
(3, 'Kelas 9', '9'),
(4, 'LAB IPA', 'IPA'),
(5, 'PERPUSTAKAAN', 'PER'),
(7, 'RUANG BIMBINGAN KONSELING', 'BK'),
(9, 'KESISWAAN/PRAMUKA', 'Ks'),
(10, 'KANTIN', 'KT'),
(11, 'Ruang Kurikulum', 'RK'),
(12, 'RUANG GURU', 'RG');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_det`
--

CREATE TABLE `tempat_det` (
  `id` int(11) NOT NULL,
  `tempat_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jmlh` int(11) NOT NULL,
  `baik` int(11) NOT NULL,
  `sedang` int(11) NOT NULL,
  `rusak` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_det`
--

INSERT INTO `tempat_det` (`id`, `tempat_id`, `barang_id`, `jmlh`, `baik`, `sedang`, `rusak`, `gambar`, `ket`) VALUES
(2, 1, 2, 195, 110, 85, 0, '1636806758.jpg', 'Meja belajar'),
(3, 1, 3, 12, 6, 5, 1, '1636806697.jpg', 'Tempat Menulis'),
(4, 1, 4, 6, 5, 1, 0, '1636806726.png', 'Tempat Menulis'),
(5, 1, 5, 6, 5, 1, 0, '1636806789.jpg', 'Tempat Duduk'),
(6, 2, 1, 160, 100, 60, 0, '1637035554.jpg', 'Tempat Dududk'),
(7, 2, 2, 160, 110, 50, 0, '1637035626.jpg', 'Tempat Menulis'),
(8, 2, 3, 5, 4, 1, 0, '1637035663.jpg', 'Tempat Menulis'),
(9, 2, 4, 5, 4, 1, 0, '1637035838.jpg', 'Tempat Menulis'),
(10, 2, 5, 5, 4, 1, 0, '1637035879.jpg', 'Tempat Duduk'),
(11, 3, 1, 128, 110, 18, 0, '1637035928.jpg', 'Tempat Duduk'),
(12, 3, 2, 128, 100, 28, 0, '1637200703.png', 'Meja Belajar'),
(13, 3, 3, 4, 4, 0, 0, '1637201074.png', 'Tempat Menulis'),
(14, 3, 4, 4, 4, 0, 0, '1637201199.png', 'Tempat Menulis'),
(15, 3, 5, 4, 4, 0, 0, '1637201240.jpg', 'Tempat Dududk'),
(16, 4, 5, 33, 33, 0, 0, '1634698072.png', 'Tempat Dududk'),
(17, 4, 2, 15, 15, 0, 0, '1638359729.jpg', 'Tempat alat praktikum'),
(18, 4, 3, 1, 1, 0, 0, '1638359822.jpg', 'Tempat Menulis'),
(19, 4, 4, 5, 5, 0, 0, '1638359856.jpg', 'Tempat Kerja'),
(20, 5, 4, 1, 1, 0, 0, '1638359768.jpg', 'Tempat Menulis'),
(21, 5, 6, 50, 50, 0, 0, '1634698300.png', 'Buku Pelajaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat_det`
--
ALTER TABLE `tempat_det`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tempat_id` (`tempat_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tempat_det`
--
ALTER TABLE `tempat_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tempat_det`
--
ALTER TABLE `tempat_det`
  ADD CONSTRAINT `tempat_det_ibfk_1` FOREIGN KEY (`tempat_id`) REFERENCES `tempat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tempat_det_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
