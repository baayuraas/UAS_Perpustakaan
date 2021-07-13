-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2021 pada 09.22
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `user_admin` varchar(30) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `pass_admin` varchar(255) NOT NULL,
  `foto_admin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `user_admin`, `email_admin`, `pass_admin`, `foto_admin`) VALUES
(5, 'uyab', 'sky@ymail.com', '$2y$10$V6QnlfdGUeJ2vTL0LgW1Vew1BF0D78JyzQ/uOrv2N4fDMc0OWhliK', 'WhatsApp Image 2019-10-26 at 7.23.32 AM.jpeg'),
(6, 'kary', 'tralalauyab@gmail.com', '$2y$10$K735te.k0pDVLNh.1GNVcuvduF/9eqLXGTCiYgUF7x28FKG1qLD2a', 'download (1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `penerbit_buku` varchar(30) NOT NULL,
  `pengarang_buku` varchar(30) NOT NULL,
  `data_buku` varchar(100) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penerbit_buku`, `pengarang_buku`, `data_buku`, `tanggal_rilis`, `genre`) VALUES
(13, 'buku 3', 'penerbit 3', 'pengarang 3', 'buku-panduan-2019.pdf', '2021-05-06', 'genre 3'),
(14, 'buku 2', 'penerbit 2', 'pengarang 2', 'DAFTAR RUANG KELAS PAGI FINAL.pdf', '2021-07-09', 'genre 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(30) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `user_pengguna` varchar(20) NOT NULL,
  `pw_pengguna` varchar(20) NOT NULL,
  `email_pengguna` varchar(30) NOT NULL,
  `foto_pengguna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `user_pengguna`, `pw_pengguna`, `email_pengguna`, `foto_pengguna`) VALUES
('uyab', 'sky@ymail.com', '0', 'baayuraas', '123', 'WhatsApp Image 2019-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
