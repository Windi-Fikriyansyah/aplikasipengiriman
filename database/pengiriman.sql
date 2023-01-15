-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 01:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengiriman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(225) NOT NULL,
  `hak_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `hak_akses`) VALUES
(6, 'windi', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `no_pengirim` varchar(20) NOT NULL,
  `jenis_barang` varchar(150) NOT NULL,
  `colly` int(3) NOT NULL,
  `berat` int(5) NOT NULL,
  `harga` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `no_pengirim`, `jenis_barang`, `colly`, `berat`, `harga`, `subtotal`) VALUES
(1, '20221230000001', 'sepeda', 1, 100, 12000, 12000),
(2, '20221230000001', 'motor', 1, 250, 12000, 12000),
(3, '20221230000002', 'sepeda', 1, 120, 12000, 12000),
(4, '20221231000003', 'a', 1, 100, 12000, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `harga` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `harga`) VALUES
(3, '12000');

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id` int(11) NOT NULL,
  `nama_kapal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`id`, `nama_kapal`) VALUES
(2, 'KMP. Bobara');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `no_polisi` varchar(50) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `no_mesin` varchar(100) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `id_supir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `alamat`, `telepon`) VALUES
(1, 'windi', 'laki laki', 'pontianak', '09989898');

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `id_supir` int(11) NOT NULL,
  `nama_supir` varchar(150) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supir`
--

INSERT INTO `supir` (`id_supir`, `nama_supir`, `no_ktp`, `alamat`, `telepon`) VALUES
(1, 'fikri yansyah', '6108212019', 'jalan raden kusno', '089622981080'),
(4, 'windi', '899898989', 'jhjhjh', '7878787878');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_pengirim` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `telpn` varchar(14) NOT NULL,
  `alamat_penerima` varchar(150) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_pengirim`, `tgl`, `id_pelanggan`, `penerima`, `telpn`, `alamat_penerima`, `asal`, `id_kapal`, `total`) VALUES
('20221230000001', '2022-12-30', 1, 'a', '0898867', 'Makasar', 'Jakarta', 2, 4200000),
('20221230000002', '2022-12-30', 1, 'abc', '08956798843', 'Makasar', 'Jakarta', 2, 1440000),
('20221231000003', '2022-12-31', 1, 'abc', '08956798843', 'Makasar', 'Jakarta', 2, 1200000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kendaraan`
-- (See below for the actual view)
--
CREATE TABLE `v_kendaraan` (
`id_kendaraan` int(11)
,`no_polisi` varchar(50)
,`merk` varchar(100)
,`no_mesin` varchar(100)
,`tahun` varchar(50)
,`warna` varchar(100)
,`id_supir` int(11)
,`nama_supir` varchar(150)
,`no_ktp` varchar(50)
,`alamat` varchar(150)
,`telepon` varchar(13)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `v_transaksi` (
`no_pengirim` varchar(20)
,`tgl` date
,`id_pelanggan` int(11)
,`penerima` varchar(100)
,`telpn` varchar(14)
,`alamat_penerima` varchar(150)
,`asal` varchar(100)
,`id_kapal` int(11)
,`total` int(11)
,`nama_pelanggan` varchar(150)
,`alamat` varchar(150)
,`telepon` varchar(15)
,`nama_kapal` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `v_kendaraan`
--
DROP TABLE IF EXISTS `v_kendaraan`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_kendaraan`  AS   (select `kendaraan`.`id_kendaraan` AS `id_kendaraan`,`kendaraan`.`no_polisi` AS `no_polisi`,`kendaraan`.`merk` AS `merk`,`kendaraan`.`no_mesin` AS `no_mesin`,`kendaraan`.`tahun` AS `tahun`,`kendaraan`.`warna` AS `warna`,`kendaraan`.`id_supir` AS `id_supir`,`supir`.`nama_supir` AS `nama_supir`,`supir`.`no_ktp` AS `no_ktp`,`supir`.`alamat` AS `alamat`,`supir`.`telepon` AS `telepon` from (`kendaraan` join `supir`) where `kendaraan`.`id_supir` = `supir`.`id_supir`)  ;

-- --------------------------------------------------------

--
-- Structure for view `v_transaksi`
--
DROP TABLE IF EXISTS `v_transaksi`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_transaksi`  AS   (select `transaksi`.`no_pengirim` AS `no_pengirim`,`transaksi`.`tgl` AS `tgl`,`transaksi`.`id_pelanggan` AS `id_pelanggan`,`transaksi`.`penerima` AS `penerima`,`transaksi`.`telpn` AS `telpn`,`transaksi`.`alamat_penerima` AS `alamat_penerima`,`transaksi`.`asal` AS `asal`,`transaksi`.`id_kapal` AS `id_kapal`,`transaksi`.`total` AS `total`,`pelanggan`.`nama_pelanggan` AS `nama_pelanggan`,`pelanggan`.`alamat` AS `alamat`,`pelanggan`.`telepon` AS `telepon`,`kapal`.`nama_kapal` AS `nama_kapal` from ((`transaksi` join `pelanggan`) join `kapal`) where `transaksi`.`id_pelanggan` = `pelanggan`.`id_pelanggan` and `transaksi`.`id_kapal` = `kapal`.`id`)  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_pengirim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
  MODIFY `id_supir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
