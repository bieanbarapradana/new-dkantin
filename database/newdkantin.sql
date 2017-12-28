-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 02:28 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newdkantin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE IF NOT EXISTS `tb_akun` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `saldo` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_user`, `nama`, `username`, `password`, `email`, `kelamin`, `no_hp`, `alamat`, `saldo`, `level`) VALUES
(3, 'praseto singgih laksono', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'psinggihl@gmail.com', 'Laki-Laki', '085603087176', 'bandung                            \r\n                        ', '1033000', '1'),
(4, 'praseto singgih laksono', 'singgih', 'ed11c116038057f6c8c840f64a8a8698', 'psinggihl@gmail.com', 'Laki-Laki', '085603087176', 'bandung                            \r\n                        ', '67000', '2'),
(5, 'Iman Ahmad Setyawan', 'imanastyawan', '68051c6f359dc2441e9c93763a422a37', 'iman@mitrakomitel.com', 'Laki-Laki', '082225373657', 'Cikoneng bojongsoang', '100000', '2'),
(6, 'robinzon', 'robinzon29', 'fbddec0cf64824bec0715c51f80c75b9', 'robinzon126@gmail.com', 'Laki-Laki', '081361378976', 'Gg PGA telkomuniversity    ', '100000', '2'),
(7, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Laki-Laki', '', '                            \r\n                        ', '100000', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_isi_sub_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_isi_sub_kategori` (
  `id_isi_sub` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub` int(11) NOT NULL,
  `isi_sub` varchar(100) NOT NULL,
  `foto` varchar(60) NOT NULL,
  PRIMARY KEY (`id_isi_sub`),
  KEY `id_sub` (`id_sub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tb_isi_sub_kategori`
--

INSERT INTO `tb_isi_sub_kategori` (`id_isi_sub`, `id_sub`, `isi_sub`, `foto`) VALUES
(31, 105, 'S. Buryam Bu Imas', 'resto.JPG'),
(32, 89, 'RM Pak Mardi', 'resto.JPG'),
(33, 85, 'Warung 11 Meter', 'resto.JPG'),
(34, 83, 'Hoka-Hoka Bento', 'resto.JPG'),
(35, 83, 'MacDonald', 'resto.JPG'),
(36, 83, 'Pizza Hut', 'resto.JPG'),
(37, 32, 'warung baru', 'resto.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Fast Food'),
(2, 'Rumah Makan'),
(3, 'Warung Tegal'),
(4, 'Rumah Makan Padang'),
(11, 'Cemilan'),
(12, 'Sarapan'),
(13, 'Cafe'),
(15, 'Paket Makan Murah'),
(16, 'Aneka Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE IF NOT EXISTS `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_keranjang`),
  KEY `id_menu` (`id_menu`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE IF NOT EXISTS `tb_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_isi_sub` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `ketersediaan` varchar(20) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `rating` varchar(10) NOT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `id_isi_sub` (`id_isi_sub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `id_isi_sub`, `foto`, `nama`, `harga`, `ketersediaan`, `keterangan`, `rating`) VALUES
(28, 31, 'buryam spesial biasa.jpg', 'Buryam Spesial Biasa', '11000', 'In stock', '<p>Bubur ayam dengan Telor dan ati ampela</p>\r\n', '0'),
(29, 32, 'Resep-Soto-Lamongan-Bumbu-Koya-Sedap.jpg', 'Soto Lamongan Spesial Koya', '14000', 'In stock', '<p>Soto khas surabaya buatan pak mardi yang mantaps dengan spesial koya</p>\r\n', '0'),
(30, 32, '13743601_100944837017743_704064621_n.jpg', 'Bakso Kepala Sapi Asli Surabaya', '14000', 'In stock', '<p>Bakso Asli daging sapi yang halal di buat dengan khas oleh pak mardi</p>\r\n', '0'),
(31, 31, 'buryam biasa.jpg', 'Buryam Biasa', '6000', 'In stock', '<p>Bubur Ayam Bu imas tanpa tambahan apa2</p>\r\n', '0'),
(32, 31, 'buryam ati ampela.jpg', 'Buryam Ati Ampela', '9000', 'In stock', '<p>Bubur ayam dengan tambahan ati dan ampela</p>\r\n', '0'),
(33, 31, 'buryam spesial pindang.jpg', 'Buryam Spesial Pindang', '12000', 'In stock', '<p>Bubur ayam dengan taburan pindang ditambah telor yang super mantaps</p>\r\n', '0'),
(34, 31, 'buryam telor biasa.jpg', 'Buryam Telur Biasa', '8000', 'In stock', '<p>Bubur ayam dengan campuran telor gurih dan enak buat sarapan</p>\r\n', '0'),
(35, 33, 'paket ayam original.jpg', 'Paket Ayam Goreng Original', '14000', 'In stock', '<p>Paket ayam goreng original sudah termasuk ayam, lalapan dan nasi.</p>\r\n', '0'),
(36, 33, 'paket ayam simanalagi.jpg', 'Paket Ayam Goreng Simanalagi', '14000', 'In stock', '<p>Paket ayam simanalagi sudah termasuk ayam manis gurih, lalapan dan nasi</p>\r\n', '0'),
(37, 33, 'paket ayam cobek merapi.jpg', 'Paket Ayam Cobek Merapi', '15000', 'In stock', '<p>Ayam cobek merapi ini sangat enak dan mantapss sudah plus nasi dan lalapan</p>\r\n', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notifikasi`
--

CREATE TABLE IF NOT EXISTS `tb_notifikasi` (
  `id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_notif`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE IF NOT EXISTS `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `total` varchar(10) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pesanan`),
  KEY `id_user` (`id_user`,`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_user`, `id_menu`, `tgl`, `total`, `harga`, `kode`, `pembayaran`, `alamat`, `status`) VALUES
(9, 4, 3, '30-Sep-2016', '2', '200000', 'UOKZKP', 'Cash', 'kampus telkom', 'pesan'),
(10, 4, 2, '30-Sep-2016', '1', '100000', 'UOKZKP', 'Cash', 'kampus telkom', 'pesan'),
(11, 4, 13, '30-Sep-2016', '2', '20000', '5XHXXM', 'Transfer', '                    ', 'pesan'),
(12, 4, 13, '30-Sep-2016', '', '0', 'ITPFUX', 'Transfer', '                    ', 'pesan'),
(13, 4, 13, '04-Oct-2016', '2', '20000', 'JZL3GM', 'Cash', 'dikampus telkom', 'pesan'),
(14, 4, 13, '04-Oct-2016', '12', '120000', 'B3NX5L', 'Cash', ' kampus telkom bandung                   ', 'pesan'),
(15, 4, 13, '07-Oct-2016', '2', '20000', 'NS67L9', 'Transfer', 'telkom                    ', 'pesan'),
(16, 5, 18, '09-Oct-2016', '4', '56000', 'XXOLHD', 'Cash', 'Cikoneng Bojongsoang       ', 'pesan'),
(17, 5, 20, '10-Oct-2016', '10', '10000', '2AF3UF', 'Cash', '                    ', 'pesan'),
(18, 5, 18, '10-Oct-2016', '1', '14000', 'X7HJPN', 'Transfer', '                    ', 'pesan'),
(19, 5, 19, '10-Oct-2016', '12', '168000', 'SNCX8M', 'Cash', 'Di kampus asrama 2', 'pesan'),
(20, 5, 20, '10-Oct-2016', '5', '5000', 'YBIG9T', 'Cash', '                    ', 'pesan'),
(21, 4, 28, '24-Oct-2016', '3', '33000', 'TUBWUZ', 'Saldo Dompet', 'kampus telkom                    ', 'pesan'),
(22, 4, 32, '24-Oct-2016', '2', '18000', 'DZWRKJ', 'Saldo Dompet', 'telkom                    ', 'pesan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_promo`
--

CREATE TABLE IF NOT EXISTS `tb_promo` (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `diskon` varchar(10) NOT NULL,
  PRIMARY KEY (`id_promo`),
  KEY `id_menu` (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE IF NOT EXISTS `tb_reservasi` (
  `id_tempat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `diskripsi` varchar(1000) NOT NULL,
  `foto` varchar(60) NOT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_tempat`, `nama`, `alamat`, `diskripsi`, `foto`) VALUES
(1, 'dakora', 'jl.Telekoomunikasi Bandung', 'tempatnya nyaman dan santai buat nongkrong', 'dakora.JPG'),
(2, 'Warung Steak WS', 'Buah Batu ', 'tempatnya nyaman dan santai buat nongkrong', 'ws.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi_tempat`
--

CREATE TABLE IF NOT EXISTS `tb_reservasi_tempat` (
  `id_reservasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_reservasi`),
  KEY `id_tempat` (`id_tempat`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_reservasi_tempat`
--

INSERT INTO `tb_reservasi_tempat` (`id_reservasi`, `id_user`, `id_tempat`, `tgl`, `jumlah`, `nohp`, `status`) VALUES
(7, 4, 1, '2016-09-27', '12', '458798', 'pesan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resto_rapat`
--

CREATE TABLE IF NOT EXISTS `tb_resto_rapat` (
  `id_tempat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `diskripsi` varchar(1000) NOT NULL,
  `foto` varchar(60) NOT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_resto_rapat`
--

INSERT INTO `tb_resto_rapat` (`id_tempat`, `nama`, `alamat`, `diskripsi`, `foto`) VALUES
(1, 'kartikasari', 'buah batu', 'menerima pesanan untuk rapat', 'kartikasari.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_sub_kategori` (
  `id_sub` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `sub_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sub`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `tb_sub_kategori`
--

INSERT INTO `tb_sub_kategori` (`id_sub`, `id_kategori`, `sub_kategori`) VALUES
(30, 11, 'Cemilan di PGA'),
(31, 11, 'Cemilan Sukapura'),
(32, 11, 'Cemilan di Sukabirus'),
(47, 12, 'Sarapan di Bojongsoang'),
(48, 12, 'Sarapan di Sukapura'),
(49, 12, 'Sarapan di PGA'),
(50, 12, 'Sarapan di Pinggir Jalan Telkom'),
(51, 12, 'Sarapan di Perumahan Buahbatu'),
(52, 12, 'Sarapan di Terusan Buahbatu'),
(55, 4, 'RMP Bandung'),
(57, 4, 'RMP Sukabirus'),
(58, 11, 'Cemilan di Pinggir Jalan Telkom'),
(59, 11, 'Cemilan di Perumahan Buahbatu'),
(60, 11, 'Cemilan di Terusan Buahbatu'),
(61, 11, 'Cemilan di Bojongsoang'),
(62, 11, 'Cemilan di Cikoneng'),
(63, 13, 'Cafe di Sukabirus'),
(64, 13, 'Cafe di Sukapura'),
(65, 13, 'Cafe di Pinggir Jalan Telkom'),
(66, 13, 'Cafe di Perumahan Buahbatu'),
(68, 13, 'Cafe di Terusan Buahbatu'),
(69, 13, 'Cafe di PGA'),
(70, 12, 'Sarapan di Cikoneng'),
(71, 2, 'RM di Sukapura'),
(72, 4, 'RMP Sukapura'),
(73, 4, 'RMP Pinggir Jalan Telkom'),
(74, 4, 'RMP Perumahan Buahbatu'),
(75, 4, 'RMP Bojongsoang'),
(76, 4, 'RMP Cikoneng'),
(78, 4, 'RMP Terusan Buahbatu'),
(79, 1, 'Fast Food di Sukabirus'),
(80, 1, 'Fast Food di Sukapura'),
(81, 1, 'Fast Food di Bojongsoang'),
(82, 1, 'Fast Food di Terusan Buahbatu'),
(83, 1, 'Fast Food di Bandung'),
(84, 1, 'Fast Food di Pinggir Jalan Telkom'),
(85, 2, 'RM di Sukabirus'),
(89, 2, 'RM di Cikoneng'),
(90, 2, 'RM di Bojongsoang'),
(91, 2, 'RM di Terusan Buahbatu'),
(92, 2, 'RM di Bandung'),
(93, 2, 'RM di Pinggir Jalan Telkom'),
(94, 2, 'RM di PGA'),
(95, 3, 'Warteg di Sukabirus'),
(96, 3, 'Warteg di Sukapura'),
(97, 3, 'Warteg di PGA'),
(98, 3, 'Warteg di Pinggir Jalan Telkom'),
(99, 3, 'Warteg di Terusan Buahbatu'),
(100, 3, 'Warteg di Bojongsoang'),
(101, 3, 'Warteg di Perumahan Buahbatu'),
(102, 3, 'Warteg di Cikoneng'),
(103, 13, 'Cafe di Bandung'),
(104, 13, 'Cafe di Bojongsoang'),
(105, 12, 'Sarapan di Sukabirus');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_isi_sub_kategori`
--
ALTER TABLE `tb_isi_sub_kategori`
  ADD CONSTRAINT `tb_isi_sub_kategori_ibfk_1` FOREIGN KEY (`id_sub`) REFERENCES `tb_sub_kategori` (`id_sub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `tb_keranjang_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `tb_menu_ibfk_1` FOREIGN KEY (`id_isi_sub`) REFERENCES `tb_isi_sub_kategori` (`id_isi_sub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_promo`
--
ALTER TABLE `tb_promo`
  ADD CONSTRAINT `tb_promo_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  ADD CONSTRAINT `tb_sub_kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
