-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2021 pada 19.10
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Kota` varchar(100) NOT NULL,
  `Pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`ID`, `Nama`, `Email`, `Alamat`, `Kota`, `Pesan`) VALUES
(4, 'Dicky Resta Kusuma', 'dickyrestak123@gmail.com', 'Citayem', 'Depok', 'Ngopi Aja!'),
(15, 'Husni Mubarok', 'husni6011@gmail.com', 'Tambora', 'Jakarta Barat', 'Jangan Mencuri!'),
(29, 'Indrajit Sumarsono', 'indrajitsumarsono@gmail.com', 'Kemang', 'Jakarta Selatan', 'Right Answer!'),
(31, 'Badya Prisai Nugraha', 'badyap3105@gmail.com', 'Pancoran', 'Jakarta Selatan', 'Hallo!'),
(95, 'Baday Nugraha', 'badyap3195@gmail.com', 'Pasar Minggu', 'Jakarta Selatan', 'Adios Amigo!');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;