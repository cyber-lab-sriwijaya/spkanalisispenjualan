-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 02:46 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkanalisispenjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenisproduk`
--

CREATE TABLE `jenisproduk` (
  `idjenis` varchar(10) NOT NULL,
  `namajenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisproduk`
--

INSERT INTO `jenisproduk` (`idjenis`, `namajenis`) VALUES
('JNS001', 'Tumbler'),
('JNS002', 'Mug'),
('JNS003', 'Bag'),
('JNS004', 'Jam'),
('JNS005', 'Giftset'),
('JNS006', 'Flashdisk'),
('JNS007', 'Balon'),
('JNS008', 'Payung');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `idkriteria` varchar(10) NOT NULL,
  `namakriteria` varchar(50) NOT NULL,
  `bobot` decimal(4,2) NOT NULL,
  `sifat` enum('benefit','cost') NOT NULL,
  `tipeinput` enum('input','option') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`idkriteria`, `namakriteria`, `bobot`, `sifat`, `tipeinput`, `keterangan`) VALUES
('KTA001', 'PERSEN KEUNTUNGAN', '0.35', 'benefit', 'input', 'masukkan angka 1-100'),
('KTA002', 'SIFAT BAHAN (DIDAPATKAN)', '0.15', 'cost', 'option', '1) sangat mudah 2) mudah 3) sedang 4) sulit 5) sangat sulit'),
('KTA003', 'AVG REVIEW', '0.25', 'benefit', 'option', '1) sangat buruk 2) buruk 3) sedang 4) baik 5) sangat baik'),
('KTA004', 'JUMLAH ORDER', '0.25', 'benefit', 'input', 'masukkan angka integer');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `idpenilaian` int(11) NOT NULL,
  `idproduk` varchar(10) NOT NULL,
  `idkriteria` varchar(10) NOT NULL,
  `nilai` int(11) NOT NULL,
  `periodebulan` varchar(10) NOT NULL,
  `periodetahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` varchar(10) NOT NULL,
  `idjenis` varchar(10) NOT NULL,
  `namaproduk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idjenis`, `namaproduk`) VALUES
('PDK007', 'JNS002', 'Mug001'),
('PDK008', 'JNS001', 'Tumbler004'),
('PDK009', 'JNS001', 'Tumbler003'),
('PDK011', 'JNS002', 'Mug002');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nomorhp` varchar(13) NOT NULL,
  `level` enum('Admin','Pimpinan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `alamat`, `nomorhp`, `level`) VALUES
('admin', '$2y$10$dtzo1D4I.XqYaQOvB/nqh.et0rG.TH2tKy1ZVtI94ynzV6xalPpBy', 'Ruben H', 'Jln Mojopahit', '08117821998', 'Admin'),
('admin5', '$2y$10$S/UC/keX3rmp/vmEXwK0kuVhOIDf7BwkwO4Lp6fg87UbTwlljwYwO', 'Pratiwi', 'Bukit Kecil', '08123321', 'Admin'),
('pimpinan', '$2y$10$dGtM1yGY2UDy9sTO0yhzYut87fAlD/MGSJSkhSxCALKbrq3XdCgdO', 'Yusron', 'jln pajajaran', '08123123123', 'Pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenisproduk`
--
ALTER TABLE `jenisproduk`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`idkriteria`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`idpenilaian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `idpenilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
