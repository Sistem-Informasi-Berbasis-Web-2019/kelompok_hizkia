-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Sep 2019 pada 19.08
-- Versi server: 10.2.27-MariaDB-cll-lve
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lombalin_lla_smansa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Miran', 'miran', 'bb648e8f7447085cf0a4dbfa46cb1ea2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `gambar`) VALUES
(1, 'LLA XXVIII SE-NUSANTARA 2019', 'lla1.png'),
(7, 'Peserta LLA 27 Tahun kemarin ', 'line75214830746981.jpg'),
(8, 'Adik adik Peserta Sedang Memperagakan Yel-Yel kreatif mereka', 'potretlla28bmhrz1cb6t3.jpg'),
(9, 'Persiapan Start Peserta Lomba Lintas Alam ke 27 ', 'line75211601210628.jpg'),
(10, 'Para Peserta Sangat Antusias Sebelum Start Dimulai ', 'line75220800283750.jpg'),
(11, 'Para peserta terlihat Eksis Dulu Saat Beristirahat ', 'potretlla28bozje1ybctk.jpg'),
(12, 'Para peserta Sedang melapor di pos ', 'potretlla28bmdsr7fb7uh.jpg'),
(13, 'Para Peserta Sedang melaksanakan upacara Pembukaan dengan Khidmat', 'line8408190283666.jpg'),
(14, 'Penyerahan piala', 'line1919606340099.jpg'),
(15, 'Kegiatan di pos ', 'potretlla28bmkzsunhvc9.jpg'),
(16, 'Pertunjukan peserta sebelum hari H ', 'potretlla28bmuzlx2bm2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama_pembina` varchar(100) NOT NULL,
  `no_pembina` varchar(50) NOT NULL,
  `nama_pangkalan` varchar(100) NOT NULL,
  `gugus_depan` varchar(100) NOT NULL,
  `alamat_gugus` text NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama_pembina`, `no_pembina`, `nama_pangkalan`, `gugus_depan`, `alamat_gugus`, `file`) VALUES
(8, 'Rico Herlambang', '089660484361', 'SMKN MITRA MARITIM', '29.169-29.170', 'Jalan Pantai Song Tengah No.169 Karangsong, Kecamatan Indramayu, Kabupaten Indramayu', 'formulirpendaftaransmkmitramaritimindramayu.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
