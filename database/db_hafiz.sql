-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jul 2017 pada 17.21
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hafiz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_daftar`
--

CREATE TABLE `data_daftar` (
  `num` int(11) NOT NULL,
  `no_daftar` int(11) NOT NULL,
  `mhs` text NOT NULL,
  `telp` text NOT NULL,
  `sosmed` text NOT NULL,
  `email` text NOT NULL,
  `univ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_daftar`
--

INSERT INTO `data_daftar` (`num`, `no_daftar`, `mhs`, `telp`, `sosmed`, `email`, `univ`) VALUES
(1, 1, 'Gabe', '2147483647', 'gabedhiar', 'gabedhiar@yahoo.com', 'Undip'),
(1, 2, 'Hafiz', '822558899', 'hafizr', 'hafizr@yahoo.com', 'UNS'),
(2, 3, 'Arima', '0844998822', 'arimaat', 'arima@yahoo.com', 'UI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_event`
--

CREATE TABLE `data_event` (
  `num` int(11) NOT NULL,
  `nama` text NOT NULL,
  `bidang` text NOT NULL,
  `tanggal` text NOT NULL,
  `lokasi` text NOT NULL,
  `jangka` text,
  `penjelasan` text,
  `target` text,
  `req` text,
  `posisi` text,
  `biaya` text,
  `keuntungan` text,
  `penulis` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_event`
--

INSERT INTO `data_event` (`num`, `nama`, `bidang`, `tanggal`, `lokasi`, `jangka`, `penjelasan`, `target`, `req`, `posisi`, `biaya`, `keuntungan`, `penulis`) VALUES
(1, 'Pensi', 'Pensi', '2017-12-31', 'Solo', '3 hari', 'Ada dance', 'Mahasiswa', 'Jago', 'PDD', 'Rp100.000,00', 'Hebat', 'gabedhiar@yahoo.com'),
(2, 'KKL', 'Kampus', '2017-12-31', 'Semarang', '10 hari', 'Spektakuler', 'Mahasiswa', 'Jago', 'Acara', '', '', 'nancy@yahoo.com'),
(5, 'Paduan Suara', 'Musik', '2017-12-31', 'KLCC', '', '', '', '', '', '', '', 'hafiz@yahoo.com'),
(4, 'MUN', 'English', '2017-12-31', 'Jakarta', '', '', '', '', '', '', '', 'gabedhiar@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `telp` text NOT NULL,
  `sosmed` text NOT NULL,
  `univ` text NOT NULL,
  `posisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pengguna`
--

INSERT INTO `data_pengguna` (`email`, `password`, `nama`, `telp`, `sosmed`, `univ`, `posisi`) VALUES
('gabedhiar@yahoo.com', 'lolipop1', 'Gabe', '08174954317', 'gabedhiar', 'Undip', 'User'),
('hafiz@yahoo.com', 'lolipop1', 'Hafiz', '08174954444', 'hafizrachman', 'UNS', 'Admin'),
('nancy@yahoo.com', 'lolipop1', 'Nancy', '08174954444', 'nancyr', 'Unpar', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_daftar`
--
ALTER TABLE `data_daftar`
  ADD PRIMARY KEY (`num`,`no_daftar`);

--
-- Indexes for table `data_event`
--
ALTER TABLE `data_event`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
