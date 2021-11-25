-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2021 pada 15.58
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `alamat_admin` varchar(1000) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `pass_admin` varchar(255) NOT NULL,
  `tl_admin` date NOT NULL,
  `foto_admin` varchar(255) NOT NULL,
  `agama_admin` varchar(255) NOT NULL,
  `hobi_admin` varchar(255) NOT NULL,
  `jk_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `alamat_admin`, `email_admin`, `pass_admin`, `tl_admin`, `foto_admin`, `agama_admin`, `hobi_admin`, `jk_admin`) VALUES
(1, 'Ardianita Fauziyah', '<p>Klaten</p>\r\n', 'ardianita06@gmail.com', '$2y$10$yvZrev7A/oHiGc2kF4f7s.zp9MF893w/MxvzEC60ej3ZJotkuqDEy', '2002-10-11', 'gambar3.png', 'Islam', 'Nonton', 'Perempuan'),
(2, 'Elya Kumala Fauziyah', '<p>Madiun</p>\r\n', 'elyakumala1804@gmail.com', '$2y$10$l8o.Ca12sNj/82tLp9H.W.kpbGtqfNiiMIro6rPkpCDawXbLx3sr2', '2002-04-18', 'gambar3.png', 'Islam', 'Traveling', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
