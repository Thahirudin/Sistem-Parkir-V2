-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2023 pada 07.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL,
  `nomor_plat` varchar(20) NOT NULL,
  `tanggal_masuk` datetime DEFAULT current_timestamp(),
  `tanggal_keluar` datetime DEFAULT NULL,
  `status` enum('masuk','keluar') NOT NULL,
  `id_petugas_masuk` int(11) NOT NULL,
  `id_petugas_keluar` int(11) DEFAULT NULL,
  `tarif` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `jenis_kendaraan`, `nomor_plat`, `tanggal_masuk`, `tanggal_keluar`, `status`, `id_petugas_masuk`, `id_petugas_keluar`, `tarif`) VALUES
(1, 'Mobil', 'AB 1234 CD', '2023-10-30 11:00:58', '2023-10-30 13:42:00', 'keluar', 1, 2, '3000.00'),
(2, 'Motor', 'CD 5678 EF', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '2000.00'),
(3, 'Mobil', 'EF 9876 GH', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '3000.00'),
(4, 'Motor', 'GH 5432 IJ', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '2000.00'),
(5, 'Mobil', 'IJ 2468 KL', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '3000.00'),
(6, 'Motor', 'KL 1357 MN', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '2000.00'),
(7, 'Mobil', 'MN 8642 OP', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '3000.00'),
(8, 'Motor', 'OP 7261 QR', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '2000.00'),
(9, 'Mobil', 'QR 6543 ST', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '3000.00'),
(10, 'Motor', 'ST 1234 UV', '2023-10-30 11:00:58', NULL, 'masuk', 1, NULL, '2000.00'),
(11, 'Mobil', 'UV 3456 WX', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '3000.00'),
(12, 'Motor', 'WX 7890 YZ', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '2000.00'),
(13, 'Mobil', 'YZ 9876 AB', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '3000.00'),
(14, 'Motor', 'AB 2345 CD', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '2000.00'),
(15, 'Mobil', 'CD 7654 EF', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '3000.00'),
(16, 'Motor', 'EF 8765 GH', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '2000.00'),
(17, 'Mobil', 'GH 5432 IJ', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '3000.00'),
(18, 'Motor', 'IJ 1234 KL', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '2000.00'),
(19, 'Mobil', 'KL 9876 MN', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '3000.00'),
(20, 'Motor', 'MN 7654 OP', '2023-10-30 11:00:58', NULL, 'masuk', 2, NULL, '2000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `tanggal_lahir`) VALUES
(1, 'John Smith', '1990-05-15'),
(2, 'Maria Garcia', '1988-09-22'),
(3, 'Robert Johnson', '1992-02-10'),
(4, 'Linda Davis', '1995-07-30'),
(5, 'Michael Brown', '1985-04-18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
