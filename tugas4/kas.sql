-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2021 pada 18.02
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `no_telepon` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `jenis_kelamin`, `no_telepon`, `email`) VALUES
(1, 'Zahra', 'wanita', '085837284111', 'zahra@gmail.com'),
(2, 'Ratna', 'wanita', '085678305590', 'ratna@gmail.com'),
(4, 'Rio', 'pria', '088230361351', 'rioputra@gmail.com'),
(5, 'Reggi', 'wanita', '085738402731', 'reggi@gmail.com'),
(6, 'Yoga', 'pria', '085647293900', 'yoga@gmail.com'),
(7, 'Putri', 'wanita', '082833748933', 'putri@gmail.com'),
(8, 'Ayu', 'wanita', '088374592044', 'ayu@gmail.com'),
(9, 'Sekar', 'wanita', '085768304932', 'sekar@gmail.com'),
(10, 'Putra', 'pria', '088736482937', 'putra@gmail.com'),
(11, 'Dewi', 'wanita', '082374920488', 'dewi@gmail.com'),
(12, 'Nisa', 'wanita', '085637492034', 'nisa@gmail.com'),
(14, 'Wahyu', 'pria', '085837405837', 'wahyu@gmail.com'),
(15, 'Pamungkas', 'pria', '089374620383', 'pamungkas@gmail.com'),
(16, 'Naura', 'wanita', '082747293847', 'naura@gmail.com'),
(17, 'Anton', 'pria', '085374920345', 'anton@gmail.com'),
(18, 'Vio', 'wanita', '085283940283', 'vio@gmail.com'),
(19, 'Yulia', 'wanita', '085291038470', 'yulia@gmail.com'),
(20, 'Erico', 'pria', '085192736498', 'erico@gmail.com'),
(21, 'Elya', 'wanita', '085749314392', 'elyakumala1804@gmail.com'),
(25, 'kumala', 'wanita', '088230361352', 'kumala@gmail.com'),
(26, 'bunga', 'wanita', '088652418362', 'bunga@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `id_jabatan`) VALUES
(1, 'Elya Kumala Fauziyah', 'elya123', '$2y$10$RtlG8gY2cp/2BYEeMBJ2C.tMli1qvWGCoT/jkKIZVNrRJ/4cGbbTm', 1),
(2, 'Elya Kumala Fauziyah', 'elyakumala', '$2y$10$.ioqnmHR/dU./VGovZxZc.8u8vXo/xJHFo80lTUeonv.0j.0PhvFa', 2),
(3, 'Annisa Fatimah, S.Kom', 'annisa321', '$2y$10$1G9mvmbcbdwjdqCb1EuG5OGAYNhPa1aOmlmd2yS2/Yz.A3HRS/u5u', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
