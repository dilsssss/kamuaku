-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 11:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `no_anggota` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `wajib` varchar(20) NOT NULL,
  `pokok` varchar(20) NOT NULL,
  `saldo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`no_anggota`, `nama`, `wajib`, `pokok`, `saldo`) VALUES
(1, 'Erpan Kurniawan', '10000', '20000', '30000234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kasir`
--

CREATE TABLE `tbl_kasir` (
  `kode_ksr` int(11) NOT NULL,
  `nama_ksr` varchar(20) NOT NULL,
  `password_ksr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kasir`
--

INSERT INTO `tbl_kasir` (`kode_ksr`, `nama_ksr`, `password_ksr`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `no_pinjam` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_anggota` int(11) NOT NULL,
  `jml_pinjam` int(11) NOT NULL,
  `kode_ksr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_simpan`
--

CREATE TABLE `tbl_simpan` (
  `no_simpan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_anggota` int(11) NOT NULL,
  `jml_simpan` int(11) NOT NULL,
  `kode_ksr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`no_anggota`);

--
-- Indexes for table `tbl_kasir`
--
ALTER TABLE `tbl_kasir`
  ADD PRIMARY KEY (`kode_ksr`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `kode_ksr` (`kode_ksr`);

--
-- Indexes for table `tbl_simpan`
--
ALTER TABLE `tbl_simpan`
  ADD PRIMARY KEY (`no_simpan`),
  ADD KEY `no_anggota` (`no_anggota`),
  ADD KEY `kode_ksr` (`kode_ksr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `no_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kasir`
--
ALTER TABLE `tbl_kasir`
  MODIFY `kode_ksr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `no_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_simpan`
--
ALTER TABLE `tbl_simpan`
  MODIFY `no_simpan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD CONSTRAINT `tbl_pinjam_ibfk_1` FOREIGN KEY (`kode_ksr`) REFERENCES `tbl_kasir` (`kode_ksr`);

--
-- Constraints for table `tbl_simpan`
--
ALTER TABLE `tbl_simpan`
  ADD CONSTRAINT `tbl_simpan_ibfk_1` FOREIGN KEY (`no_anggota`) REFERENCES `tbl_anggota` (`no_anggota`),
  ADD CONSTRAINT `tbl_simpan_ibfk_2` FOREIGN KEY (`kode_ksr`) REFERENCES `tbl_kasir` (`kode_ksr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
