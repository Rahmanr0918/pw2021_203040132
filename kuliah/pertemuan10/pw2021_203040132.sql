-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2021 pada 01.30
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
-- Database: `pw2021_203040132`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembaga`
--

CREATE TABLE `lembaga` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `KepalaStaf` varchar(50) NOT NULL,
  `Personel` varchar(150) NOT NULL,
  `Moto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lembaga`
--

INSERT INTO `lembaga` (`id`, `Gambar`, `Unit`, `KepalaStaf`, `Personel`, `Moto`) VALUES
(1, 'tniAD.png', 'Angkatan Darat', '', '483.000 (2016)', 'Kartika Eka Paksi'),
(2, 'tniAL.png', 'Angkatan Laut', ' Laksamana TNI Yudo Margono', '74.000 (2011)', 'Jalesveva Jayamahe'),
(3, 'tniAU.png', ' Angkatan Udara', 'Marsekal TNI Fadjar Prasetyo', '37.850 224 pesawat', 'Swa Bhuwa'),
(7, 'nophoto.jpg', 'Masyaakat', '', '10.000', 'Bersama');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
