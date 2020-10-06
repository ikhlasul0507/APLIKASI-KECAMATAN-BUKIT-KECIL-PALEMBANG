-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Sep 2020 pada 02.37
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_magangkec`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absen`
--

CREATE TABLE `tbl_absen` (
  `ida` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_absen`
--

INSERT INTO `tbl_absen` (`ida`, `nip`, `waktu`) VALUES
(5, 132131244, '2020-09-01'),
(9, 12, '2020-09-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `judul`, `photo`, `tanggal`, `isi`) VALUES
(24, 'amal', 'diagaram-uml.jpg', '2020-09-23', 'sadasd'),
(28, 'sdasdsadsad', 'Danau-Teluk-Rasau.jpg', '2020-09-15', 'sadasdsad'),
(30, 'qwwe', 'Bukit-Batu.jpg', '2020-09-22', 'sdfsfd'),
(31, 'werewrerewrewr', 'orang.png', '2020-09-23', 'zdsadsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keperluan`
--

CREATE TABLE `tbl_keperluan` (
  `idk` int(11) NOT NULL,
  `keperluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_keperluan`
--

INSERT INTO `tbl_keperluan` (`idk`, `keperluan`) VALUES
(1, 'KTP/KK BARU'),
(2, 'PERBAIKAN KTP/KK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id`, `nip`, `nama`) VALUES
(1, 132131244, 'Fixto Aldo'),
(2, 123213123, 'Ikhlasul Amal'),
(3, 12, 'Amal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelayanan`
--

CREATE TABLE `tbl_pelayanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `handphone` varchar(14) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_pelayanan` int(1) NOT NULL,
  `status` int(1) NOT NULL COMMENT '1 = proses\r\n2 = selesai\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pelayanan`
--

INSERT INTO `tbl_pelayanan` (`id`, `nama`, `nik`, `alamat`, `handphone`, `tanggal`, `jenis_pelayanan`, `status`) VALUES
(2, 'Ikhlasul', '13123123', 'asadsadsa', '123123213', '2020-09-25', 1, 2),
(4, 'Ikhlasul', '1602150507990006', 'asas', '082280524264', '2020-09-21', 1, 1),
(5, 'fixto', '123456', 'asdas', '082280524264', '2020-09-21', 1, 2),
(6, 'kemal', '1602150507990001', 'palembang', '081367073783', '2020-09-21', 1, 1),
(7, 'Kemas', '2131313123123', 'Palembang', '0123123123', '2020-09-22', 1, 2),
(9, 'Iga', '1231273981238', 'Pedamaran', '082280524264', '2020-09-22', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id` int(11) NOT NULL,
  `kode_pengunjung` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `keperluan` int(1) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id`, `kode_pengunjung`, `nama`, `alamat`, `keperluan`, `tanggal`) VALUES
(20, 'PE001', 'amal', 'kota BUMI', 1, '2020-09-20'),
(21, 'PE002', 'Ikhlasul', 'kota BUMI', 2, '2020-09-20'),
(22, 'PE003', 'Dinas Kebudayaan dan Pariwisata', 'kota BUMI', 1, '2020-09-21'),
(23, 'PE004', 'ikhkasul amal', 'kota BUMI', 1, '2020-10-21'),
(24, 'PE005', 'Fixto', 'Palembang', 2, '2020-09-21'),
(25, 'PE006', 'Kemas', 'Palembang', 1, '2020-09-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1 = admin\r\n2 = pegawai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `password`, `role`) VALUES
(1, 'Ikhlasul', 'ikhlasul@gmail.com', '12345', 1),
(2, 'Amal', 'amal@gmail.com', '12345', 2),
(6, 'Fixto', 'fixto@gmail.com', '12345', 2),
(7, 'kemas', 'kemas@gmail.com', '12345', 2),
(8, 'anu', 'anu@gmail.com', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_absen`
--
ALTER TABLE `tbl_absen`
  ADD PRIMARY KEY (`ida`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_keperluan`
--
ALTER TABLE `tbl_keperluan`
  ADD PRIMARY KEY (`idk`);

--
-- Indeks untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_absen`
--
ALTER TABLE `tbl_absen`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_keperluan`
--
ALTER TABLE `tbl_keperluan`
  MODIFY `idk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
