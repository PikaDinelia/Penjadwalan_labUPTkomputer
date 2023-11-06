-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2023 pada 02.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjadwalan_labuptkomputer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab`
--

CREATE TABLE `lab` (
  `ID` int(11) NOT NULL,
  `PRODI` varchar(100) NOT NULL,
  `HARI` varchar(50) NOT NULL,
  `WAKTU` varchar(50) NOT NULL,
  `LAB-KE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lab`
--

INSERT INTO `lab` (`ID`, `PRODI`, `HARI`, `WAKTU`, `LAB-KE`) VALUES
(1, 'Sistem Informasi', 'Senin', '07:30 - 10:50', 'Lab 1'),
(2, 'Sistem Informasi', 'Selasa', '07:30 - 10:00', 'Lab 1'),
(3, 'Sistem Informasi', 'Rabu', '07:30 - 11:40', 'Lab 1'),
(4, 'Sistem Informasi', 'Kamis', '07:30 - 10:00', 'Lab 1'),
(5, 'Teknik Elektro', 'Selasa', '4, 5, 6', 'Lab 2'),
(8, 'Pendidikan Ekonomi', 'Jumat', '09:10 - 11:40', 'Lab 2'),
(9, 'Teknik Informatika', 'Selasa', '07:30 - 11:40', 'Lab 1'),
(10, 'Pascasarjana Pendidikan Bahasa dan Sastra Indonesia', 'Selasa', '07:30 - 11:40', 'Lab 2'),
(11, 'Farmasi', 'Rabu', '07:30 - 10:00', 'Lab 2'),
(12, 'Pascasarjana Pendidikan Bahasa dan Sastra Indonesia', 'Selasa', '07:30 - 10:00', 'Lab 2'),
(14, 'Pascasarjana Pendidikan Bahasa dan Sastra Indonesia', 'Kamis', '09:30 - 11:30', 'Lab 1'),
(15, 'Pendidikan Pancasila dan Kewarganegaraan', 'Kamis', '07:30 - 10:00', 'Lab 2'),
(16, 'Pendidikan Fisika', 'Kamis', '07:30 - 10:50', 'Lab 1'),
(17, 'Manajemen', 'Selasa', '07:30 - 11:40', 'Lab 2'),
(18, 'Akuntansi', 'jumat', '4, 5, 6', 'Lab 1'),
(19, 'Pendidikan Teknik Elektro', 'jumat', '07:30 - 10:50', 'Lab 2'),
(20, 'Ilmu Keolahragaan', 'Kamis', '07:30 - 10:00', 'Lab 1'),
(21, 'Pendidikan Bahasa dan Sastra Indonesia', 'rabu', '07:30 - 10:50', 'Lab 1'),
(23, 'Teknik Informatika', 'Rabu', '09:10 - 11:40', 'Lab 1'),
(24, 'Pendidikan Bahasa dan Sastra Indonesia', 'Rabu', '07:30 - 10:50', 'Lab 2'),
(25, 'Pendidikan Biologi', 'Rabu', '07:30 - 10:00', 'Lab 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lab`
--
ALTER TABLE `lab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
