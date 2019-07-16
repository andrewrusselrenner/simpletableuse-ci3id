-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 04:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuas_arif`
--
CREATE DATABASE IF NOT EXISTS `dbuas_arif` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbuas_arif`;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_barang`
--

DROP TABLE IF EXISTS `pinjam_barang`;
CREATE TABLE `pinjam_barang` (
  `no_pinjam` int(4) NOT NULL,
  `tgl_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kode_barang` int(10) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jml_pinjam` int(50) NOT NULL,
  `peminjam` varchar(255) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `pinjam_barang`:
--

--
-- Dumping data for table `pinjam_barang`
--

INSERT INTO `pinjam_barang` (`no_pinjam`, `tgl_pinjam`, `kode_barang`, `nama_brg`, `jml_pinjam`, `peminjam`, `tgl_kembali`, `keterangan`) VALUES
(1, '2019-07-12 13:35:29', 460005380, 'Toolbox Alat Pipa', 2, 'Kleen', '2019-07-18', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  MODIFY `no_pinjam` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
