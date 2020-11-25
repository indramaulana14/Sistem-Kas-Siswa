-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Okt 2020 pada 11.39
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kas_smkmp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
('adm01', 'Indra Mualana Yusuf', 'indramaulanayusuf', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bendahara`
--

CREATE TABLE IF NOT EXISTS `bendahara` (
  `id_bendahara` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bendahara`
--

INSERT INTO `bendahara` (`id_bendahara`, `nama`, `nis`, `username`, `password`, `id_kelas`) VALUES
('bdxiirpl2', 'Indra Maulana Yusuf', '12345678', 'indramaulanayusuf', '12345678', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_ganjil`
--

CREATE TABLE IF NOT EXISTS `kas_ganjil` (
  `nis` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jul` int(11) DEFAULT NULL,
  `agu` int(11) DEFAULT NULL,
  `sep` int(11) DEFAULT NULL,
  `okt` int(11) DEFAULT NULL,
  `nov` int(11) DEFAULT NULL,
  `des` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas_ganjil`
--

INSERT INTO `kas_ganjil` (`nis`, `nama`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`) VALUES
('12345678', 'Indra Maulana Yusuf', 2000, 2000, 2000, 2000, 2000, 2000),
('1234567800', 'Iyus Lasmana', 2000, 2000, 2000, 2000, 2000, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_genap`
--

CREATE TABLE IF NOT EXISTS `kas_genap` (
  `jumlah` int(30) DEFAULT NULL,
  `nis` varchar(30) NOT NULL,
  `jan` int(30) DEFAULT NULL,
  `feb` int(30) DEFAULT NULL,
  `mar` int(30) DEFAULT NULL,
  `apr` int(30) DEFAULT NULL,
  `mei` int(30) DEFAULT NULL,
  `jun` int(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas_genap`
--

INSERT INTO `kas_genap` (`jumlah`, `nis`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `keterangan`, `nama`) VALUES
(240000, '12345', 2000, 2000, 2000, 2000, 2000, 2000, 'Lunas', 'Indra Mualana Yusuf'),
(NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Iyus Lasmana'),
(NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Abdul'),
(NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nizam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_kelas`
--

CREATE TABLE IF NOT EXISTS `kas_kelas` (
  `id_rekap` varchar(30) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas_kelas`
--

INSERT INTO `kas_kelas` (`id_rekap`, `total`, `tanggal`, `keterangan`) VALUES
('rkp10', 300000, '2020-10-30', 'Jumlah Kas Siswa ditambah dapat give away dari kepala sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `username`, `password`, `id_kelas`) VALUES
('12345678', 'Indra Maulana Yusuf', 'indramaulanayusuf', '12345678', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE IF NOT EXISTS `walikelas` (
  `id_walikelas` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`id_walikelas`, `nama`, `username`, `password`) VALUES
('wk_23', 'Indra Maulana Yusuf', 'indramaulanayusuf', '12345678'),
('wk_xiirpl2', 'Indra Maulana Yusuf Abullah Muhammad', 'indramaulanayusufabdullahmuham', '11223344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bendahara`
--
ALTER TABLE `bendahara`
 ADD PRIMARY KEY (`id_bendahara`);

--
-- Indexes for table `kas_ganjil`
--
ALTER TABLE `kas_ganjil`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `kas_genap`
--
ALTER TABLE `kas_genap`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `kas_kelas`
--
ALTER TABLE `kas_kelas`
 ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
 ADD PRIMARY KEY (`id_walikelas`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
ADD CONSTRAINT `id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `bendahara` (`id_bendahara`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
