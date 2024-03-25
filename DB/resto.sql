-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Feb 2024 pada 08.45
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_order`
--

CREATE TABLE `tb_detail_order` (
  `id_dorder` int(11) NOT NULL,
  `check_available` int(11) NOT NULL,
  `id_order` varchar(50) NOT NULL,
  `id_masakan` int(11) NOT NULL,
  `keterangan_dorder` text,
  `jumlah_dorder` int(11) NOT NULL,
  `hartot_dorder` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_dorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_order`
--

INSERT INTO `tb_detail_order` (`id_dorder`, `check_available`, `id_order`, `id_masakan`, `keterangan_dorder`, `jumlah_dorder`, `hartot_dorder`, `id_user`, `status_dorder`) VALUES
(191, 1, 'ORD0001', 14, '', 1, 20000, 6, 0),
(192, 1, 'ORD0001', 29, '', 1, 12000, 6, 0),
(193, 1, 'ORD0001', 17, '', 1, 5000, 6, 0),
(194, 2, 'ORD0002', 14, '', 1, 20000, 39, 0),
(195, 2, 'ORD0002', 31, '', 1, 5000, 39, 0),
(196, 2, 'ORD0002', 32, '', 1, 6000, 39, 0),
(197, 3, 'ORD0003', 28, '', 1, 25000, 39, 0),
(198, 3, 'ORD0003', 15, '', 1, 15000, 39, 0),
(199, 3, 'ORD0003', 32, '', 1, 6000, 39, 0),
(200, 3, 'ORD0003', 20, '', 1, 3000, 39, 0),
(201, 4, 'ORD0004', 14, '', 1, 20000, 6, 0),
(202, 5, 'ORD0005', 13, '', 1, 18000, 6, 0),
(203, 6, 'ORD0006', 22, 'banyakin bumbu rendangnya', 1, 30000, 39, 0),
(204, 6, 'ORD0006', 30, '', 1, 12000, 39, 0),
(205, 6, 'ORD0006', 32, '', 1, 6000, 39, 0),
(206, 6, 'ORD0006', 17, 'jangan terlalu manis', 1, 5000, 39, 0),
(207, 7, 'ORD0007', 15, 'ayam paha', 1, 15000, 6, 0),
(208, 7, 'ORD0007', 23, '', 1, 5000, 6, 0),
(209, 7, 'ORD0007', 32, '', 1, 6000, 6, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(3, 'Kasir'),
(5, 'Pelanggan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masakan`
--

CREATE TABLE `tb_masakan` (
  `id_masakan` int(11) NOT NULL,
  `kategori_masakan` varchar(128) NOT NULL,
  `nama_masakan` varchar(128) NOT NULL,
  `harga_masakan` int(128) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status_masakan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_masakan`
--

INSERT INTO `tb_masakan` (`id_masakan`, `kategori_masakan`, `nama_masakan`, `harga_masakan`, `foto`, `status_masakan`) VALUES
(13, 'Makanan', 'Ayam Bakar', 18000, '19012024084647AyamBakar.jpg', 1),
(14, 'Makanan', 'Asam Padeh', 20000, '19012024084256Asam Padeh.jpg', 1),
(15, 'Makanan', 'Ayam Goreng', 15000, '19012024084211Ayam Goreng.jpg', 1),
(16, 'Minuman', 'Es jeruk', 5000, '25012024081517es jeruk.jpg', 1),
(17, 'Minuman', 'Jeruk Hangat', 5000, '25012024081624jeruk hangat.jpg', 1),
(18, 'Minuman', 'Es Teh ', 5000, '25012024081715es teh.jpg', 1),
(19, 'Minuman', 'Teh Hangat', 5000, '25012024081808teh anget.jpg', 1),
(20, 'Minuman', 'Air Mineral', 3000, '25012024081847air putih.jpg', 1),
(21, 'Makanan', 'Ayam Pop', 25000, '19012024084335Ayam Pop.jpg', 1),
(22, 'Makanan', 'Rendang Daging', 30000, '19012024084423Rendang.jpg', 1),
(23, 'Makanan', 'Perkedel', 5000, '19012024084526Perkedel Padang.jpg', 1),
(24, 'Makanan', 'Babat Padang', 20000, '19012024084612Babat Padang.jpg', 1),
(28, 'Makanan', 'Gulai Ikan Patin', 25000, '19012024084737Gulai Ikan Patin.png', 1),
(29, 'Makanan', 'Otak', 12000, '19012024084819Otak Padang.jpg', 1),
(30, 'Makanan', 'Sayur Nangka', 12000, '19012024084902Sayur nangka.jpg', 1),
(31, 'Makanan', 'Telur Dadar', 5000, '19012024085059Telur Dadar.jpg', 1),
(32, 'Makanan', 'Nasi', 6000, '24012024083009Nasi.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_meja`
--

CREATE TABLE `tb_meja` (
  `meja_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_meja`
--

INSERT INTO `tb_meja` (`meja_id`, `status`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 1),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` varchar(50) NOT NULL,
  `meja_order` int(11) NOT NULL,
  `tanggal_order` int(11) NOT NULL,
  `aTanggal_order` varchar(128) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan_order` text,
  `status_order` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `meja_order`, `tanggal_order`, `aTanggal_order`, `id_user`, `keterangan_order`, `status_order`) VALUES
('ORD0001', 2, 1709045613, '27-02-2024', 6, '', '1'),
('ORD0002', 5, 1709045674, '27-02-2024', 39, '', '1'),
('ORD0003', 9, 1709045751, '27-02-2024', 39, '', '1'),
('ORD0004', 1, 1709045880, '27-02-2024', 6, '', '1'),
('ORD0005', 7, 1709045985, '27-02-2024', 6, '', '1'),
('ORD0006', 3, 1709046585, '27-02-2024', 39, 'dibungkus ya', '1'),
('ORD0007', 5, 1709050434, '27-02-2024', 6, '-', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_order` varchar(50) NOT NULL,
  `tanggal_transaksi` int(11) NOT NULL,
  `aTanggal_transaksi` varchar(50) NOT NULL,
  `hartot_transaksi` int(11) NOT NULL,
  `diskon_transaksi` int(11) NOT NULL,
  `totbar_transaksi` int(11) NOT NULL,
  `uang_transaksi` int(11) NOT NULL,
  `kembalian_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_user`, `id_order`, `tanggal_transaksi`, `aTanggal_transaksi`, `hartot_transaksi`, `diskon_transaksi`, `totbar_transaksi`, `uang_transaksi`, `kembalian_transaksi`) VALUES
(89, 0, 'ORD0001', 1709045626, '27-02-2024', 37000, 0, 37000, 40000, 3000),
(90, 0, 'ORD0002', 1709045781, '27-02-2024', 31000, 0, 31000, 40000, 9000),
(91, 0, 'ORD0003', 1709045835, '27-02-2024', 49000, 0, 49000, 50000, 1000),
(92, 0, 'ORD0004', 1709045894, '27-02-2024', 20000, 0, 20000, 20000, 0),
(93, 0, 'ORD0005', 1709046625, '27-02-2024', 18000, 0, 18000, 20000, 2000),
(94, 0, 'ORD0006', 1709046649, '27-02-2024', 53000, 0, 53000, 55000, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `id_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_user`, `id_level`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(6, 'kasir', 'kasir', 'kasir', 3),
(31, 'Pelanggan', 'pelanggan', 'Pelanggan', 5),
(39, 'Atha', '123', 'Atha', 5),
(40, 'atha', '111', 'Atharindra', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  ADD PRIMARY KEY (`id_dorder`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_masakan`
--
ALTER TABLE `tb_masakan`
  ADD PRIMARY KEY (`id_masakan`);

--
-- Indexes for table `tb_meja`
--
ALTER TABLE `tb_meja`
  ADD PRIMARY KEY (`meja_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  MODIFY `id_dorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_masakan`
--
ALTER TABLE `tb_masakan`
  MODIFY `id_masakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_meja`
--
ALTER TABLE `tb_meja`
  MODIFY `meja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
