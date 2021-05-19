-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2021 pada 07.18
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040132`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Statuss` varchar(50) NOT NULL,
  `Category` varchar(35) NOT NULL,
  `Price` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `Logo`, `Picture`, `Statuss`, `Category`, `Price`, `Nama`) VALUES
(1, 'logo.png', '60a39b2633f8b.png', 'Tersedia', 'Donut', 10000, 'Cheese John'),
(4, 'logo.png', 'ad.png', 'Tersedia', 'Donut', 10000, 'Donat Ayam Special'),
(5, 'logo.png', 'ba.png', 'Tersedia', 'Classic Bread', 11000, 'Roti Bakso Sapi'),
(6, 'logo.png', 'bb.png', 'Habis', 'Classic Bread', 8500, 'Roti Coklat'),
(7, 'logo.png', 'bc.png', 'Tersedia', 'Classic Bread', 9000, 'Roti Coklat Susu'),
(8, 'logo.png', 'bd.png', 'Habis', 'Classic Bread', 8500, 'Roti Kismis'),
(9, 'logo.png', 'ca.png', 'Tersedia', 'Pudding', 2200, 'Kelapa Pandan Pudding'),
(53, '', '60a498c565303.png', 'Bukan makanan', 'Classic Bread', 0, 'Pejuang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(11, 'rr', '$2y$10$GuVvrQI6fbOQCF7i4XlY5.adXYvEA/zWpmz3fN6us5E'),
(12, 'aku', '$2y$10$cZIlTblgeCjimsQuJD5TnOCYiUfIVS80XQNHydrNCXD'),
(15, 'aman', '$2y$10$XilfFfE/CFAlNUHjJsP3auRE3jIe/eZqjzv.o5pxHMMq/RxQvDig6'),
(16, 'pp', '$2y$10$OFwNBwCxTlzEltK8Ivy6beCUyVany3SBq1DqRd.EoCwU1BGGgYssy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
