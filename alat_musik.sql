-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Jan 2022 pada 00.25
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alat_musik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_boking` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_musik` int(11) DEFAULT NULL,
  `id_studio` int(11) DEFAULT NULL,
  `no_boking` varchar(128) DEFAULT NULL,
  `tgl_boking` date DEFAULT NULL,
  `no_telpon` varchar(25) DEFAULT NULL,
  `tanggal_jadwal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `harga_bayar` varchar(128) DEFAULT NULL,
  `jumlah_bayar` varchar(128) DEFAULT NULL,
  `atas_nama` varchar(128) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `status_boking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_boking`, `id_pelanggan`, `id_musik`, `id_studio`, `no_boking`, `tgl_boking`, `no_telpon`, `tanggal_jadwal`, `jam`, `harga_bayar`, `jumlah_bayar`, `atas_nama`, `bukti_bayar`, `status_bayar`, `status_boking`) VALUES
(1, 1, NULL, NULL, '20211117GVAL0KDH', '2021-11-17', '085754785529', '2021-11-19', NULL, '50000', '12000', 'asep', 'Samurai_warrior.jpg', 1, 3),
(2, 1, NULL, NULL, '20211118GCYJWMBP', '2021-11-18', '085754785529', '2021-11-27', NULL, '20600', NULL, NULL, NULL, 0, 2),
(3, 1, NULL, NULL, '202111185CSM4RBI', '2021-11-18', '085754785529', '2021-11-30', NULL, '20600', NULL, NULL, NULL, 0, 2),
(4, 2, NULL, NULL, '20211130KHN3DQGX', '2021-11-30', '081904964266', '2021-12-03', NULL, '105000', '100000', 'wahyu', '4dce5831-75d6-4b6b-932d-f686f759e5bb_-_Copy1.jpg', 1, 3),
(5, 2, NULL, NULL, '20211130AZXN0QOE', '2021-11-30', '081904964266', '2021-12-04', NULL, '1200000', NULL, NULL, NULL, 0, 3),
(6, 2, NULL, NULL, '20211130EHYTXSUG', '2021-11-30', '081904964266', '2021-12-05', NULL, '30000', '15000', 'wahyu', '74d98fd6-919a-40fe-8e60-d58e0f98a70a.jpg', 1, 3),
(7, 3, NULL, NULL, '202111300CZGY9MJ', '2021-11-30', '081904964267', '2021-12-06', NULL, '75000', '20600', 'maman', 'wp7897261-satoru-gojo-jujutsu-kaisen-wallpapers.jpg', 1, 3),
(8, 2, NULL, NULL, '20220106Y6TTGUWV', '2022-01-06', '081904964266', '2022-01-20', '20:25:00', '250000', NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `musik`
--

CREATE TABLE `musik` (
  `id_musik` int(11) NOT NULL,
  `nama_alat` varchar(128) DEFAULT NULL,
  `tipe` varchar(128) DEFAULT NULL,
  `harga` varchar(128) DEFAULT NULL,
  `promo` bigint(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `musik`
--

INSERT INTO `musik` (`id_musik`, `nama_alat`, `tipe`, `harga`, `promo`, `deskripsi`, `gambar`) VALUES
(1, 'Paket Sewa 2 Unit Alat Musik PROMO', 'Alat Musik', '100000', 20000, ' -Gitar\r\n-Bass', 'studio4.jpg'),
(2, 'Booking Studio', 'Studio', '30000', 0, 'Studio', 'IMG_20210318_1527121.jpg'),
(5, 'Paket Sewa 3 Unit Alat Musik', 'Alat Musik', '200000', 0, '   gitar\r\nbass\r\npiano', 'FIMG-Studio-Musik.jpg'),
(6, 'Paket Full Alat Musik', 'Alat Musik', '250000', 0, ' -Gitar\r\n-Bass\r\n-Piano\r\n-Dram', 'studio22.jpg'),
(7, 'Promo Booking Akhir Tahun tanggal 27-31 Desember', 'Studio', '30000', 25000, '  studio', 'FB_IMG_16378194940801.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(128) DEFAULT NULL,
  `no_telpon` varchar(25) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telpon`, `email`, `password`, `alamat`) VALUES
(2, 'Wahyu Saputra', '081904964266', 'wahyusaputra99@gmail.com', '12345', NULL),
(3, 'Maman Rohaman', '081904964267', 'mamanrohaman17@gmail.com', '12345', NULL),
(4, 'Jejen Junaedi', '081904964268', 'jejenjunaedi18@gmail.com', '12345', NULL),
(5, 'Tr', '081904964266', 'tri16@gmail.com', 'tr1', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `studio`
--

CREATE TABLE `studio` (
  `id_studio` int(11) NOT NULL,
  `nama_studio` varchar(128) DEFAULT NULL,
  `harga` varchar(128) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `studio`
--

INSERT INTO `studio` (`id_studio`, `nama_studio`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'studio satu', '50000', 'Alucard_Gloves.jpg', '  lebar luas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `no_boking` int(11) DEFAULT NULL,
  `id_musik` int(11) DEFAULT NULL,
  `id_boking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `no_boking`, `id_musik`, `id_boking`) VALUES
(1, 20211117, 1, 1),
(2, 20211118, 2, 2),
(3, 202111185, 2, NULL),
(4, 20211130, 6, NULL),
(5, 20211130, 2, NULL),
(6, 20211130, 5, NULL),
(7, 20211130, 8, NULL),
(8, 202111300, 6, NULL),
(9, 20220106, 6, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'corvins studio', 'corvins studio', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indeks untuk tabel `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id_musik`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `musik`
--
ALTER TABLE `musik`
  MODIFY `id_musik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `studio`
--
ALTER TABLE `studio`
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
