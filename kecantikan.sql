-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 10.33
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kecantikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kecantikan`
--

CREATE TABLE `data_kecantikan` (
  `ID` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `kode_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kecantikan`
--

INSERT INTO `data_kecantikan` (`ID`, `nama_pelanggan`, `alamat`, `nama_produk`, `kode_produk`) VALUES
(1, 'hilma alviani', 'sirnagalih indihiang', 'facial wash', '345526ggh'),
(2, 'cantika putri', 'cihideng balong', 'foundation matte', '57686dhdhd'),
(3, 'nova arista', 'singaparna', 'lipstik', '357ehhdhdh'),
(4, 'putri delina', 'sukaratu ', 'one set wardah', '67547gagjh'),
(5, 'alviani faisal', 'nagarawangi', 'concealer', '5474egdgdg'),
(6, '', '', '', ''),
(7, 'hilma', 'sirnagalih', 'bedak', '7678yhhg'),
(8, 'nova', 'singaparna', 'lipcream', '8266guhgz'),
(9, 'alviani', 'tasimalaya', 'settingspray', '898ew6ds'),
(10, 'hilma', 'sirnagalih', 'bedak', '7678yhhg'),
(11, 'nova', 'singaparna', 'lipcream', '8266guhgz'),
(12, 'alviani', 'tasimalaya', 'settingspray', '898ew6ds'),
(13, '', '', '', ''),
(14, 'hilma ', 'sirnagalih', 'bedak', '7678yhhg'),
(15, 'hilma ', 'sirnagalih', 'bedak', '7678yhhg'),
(16, '', '', '', ''),
(17, 'hilma ', 'sirnagalih', 'bedak', '7678yhhg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kecantikan`
--
ALTER TABLE `data_kecantikan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kecantikan`
--
ALTER TABLE `data_kecantikan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
