-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 06:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `idhasil` int(3) NOT NULL,
  `periodebulan` varchar(10) NOT NULL,
  `periodetahun` varchar(4) NOT NULL,
  `idproduk` varchar(10) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('KTA001', 'PERSEN KEUNTUNGAN', '0.40', 'benefit', 'input', 'masukkan angka 1-100'),
('KTA002', 'SIFAT BAHAN (DIDAPATKAN)', '0.20', 'cost', 'option', '1) sangat mudah 2) mudah 3) sedang 4) sulit 5) sangat sulit'),
('KTA003', 'AVG REVIEW', '0.20', 'benefit', 'option', '1) sangat buruk 2) buruk 3) sedang 4) baik 5) sangat baik'),
('KTA004', 'JUMLAH ORDER', '0.20', 'benefit', 'input', 'masukkan angka integer');

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

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`idpenilaian`, `idproduk`, `idkriteria`, `nilai`, `periodebulan`, `periodetahun`) VALUES
(9, 'PDK007', 'KTA001', 30, 'juli', '2021'),
(10, 'PDK007', 'KTA002', 3, 'juli', '2021'),
(11, 'PDK007', 'KTA003', 4, 'juli', '2021'),
(12, 'PDK007', 'KTA004', 300, 'juli', '2021'),
(13, 'PDK007', 'KTA001', 35, 'januari', '2019'),
(14, 'PDK007', 'KTA002', 4, 'januari', '2019'),
(15, 'PDK007', 'KTA003', 4, 'januari', '2019'),
(16, 'PDK007', 'KTA004', 233, 'januari', '2019'),
(17, 'PDK008', 'KTA001', 25, 'juli', '2021'),
(18, 'PDK008', 'KTA002', 3, 'juli', '2021'),
(19, 'PDK008', 'KTA003', 5, 'juli', '2021'),
(20, 'PDK008', 'KTA004', 422, 'juli', '2021');

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
('PDK011', 'JNS002', 'Mug002'),
('PDK012', 'JNS003', 'Bag001'),
('PDK013', 'JNS004', 'Jam001'),
('PDK014', 'JNS002', 'Mug003'),
('PDK015', 'JNS008', 'Payung001'),
('PDK016', 'JNS006', 'Flashdisk001'),
('PDK017', 'JNS007', 'Balon001');

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
('admin5', '$2y$10$S/UC/keX3rmp/vmEXwK0kuVhOIDf7BwkwO4Lp6fg87UbTwlljwYwO', 'Richa Pratiwi', 'Bukit Kecil', '08123321', 'Admin'),
('edo', '$2y$10$yGvp0TRnL5/QrUF.o2ClBOwk3luVgTImEeBdQfGgZFaimhfUmRC2S', 'Edo Dwi', 'puncak sekuning', '081233323323', 'Admin'),
('pimpinan', '$2y$10$dGtM1yGY2UDy9sTO0yhzYut87fAlD/MGSJSkhSxCALKbrq3XdCgdO', 'Pimpinan1', 'jln pajajaran', '08123123123', 'Pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`idhasil`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `idhasil` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `idpenilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
