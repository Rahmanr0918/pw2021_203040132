-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 19.08
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
  `Picture` varchar(50) NOT NULL,
  `Statuss` varchar(50) NOT NULL,
  `Category` varchar(35) NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `Logo`, `Picture`, `Statuss`, `Category`, `Price`) VALUES
(1, 'logo.png', 'aa.png', 'Available at Store', 'Donut', 10000),
(2, 'logo.png', 'ab.png', 'Available at Store', 'Donut', 8500),
(3, 'logo.png', 'ac.png', 'Available at Store', 'Donut', 9000),
(4, 'logo.png', 'ad.png', 'Available at Store', 'Donut', 10000),
(5, 'logo.png', 'ba.png', 'Not Available', 'Classic Bread', 11000),
(6, 'logo.png', 'bb.png', 'Available at Store', 'Classic Bread', 8500),
(7, 'logo.png', 'bc.png', 'Available at Store', 'Classic Bread', 9000),
(8, 'logo.png', 'bd.png', 'Available at Store', 'Classic Bread', 8500),
(9, 'logo.png', 'ca.png', 'Not Available', 'Pudding', 22000),
(10, 'logo.png', 'cb.png', 'Available at Store', 'Pudding', 110000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(11, 'rr', '$2y$10$GuVvrQI6fbOQCF7i4XlY5.adXYvEA/zWpmz3fN6us5E'),
(12, 'aku', '$2y$10$cZIlTblgeCjimsQuJD5TnOCYiUfIVS80XQNHydrNCXD');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
