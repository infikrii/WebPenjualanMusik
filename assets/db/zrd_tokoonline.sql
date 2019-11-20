-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 03:48 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zrd_tokoonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
`id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul_gambar` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(1, 13, 'TAMA Imperialstar 6Pcs Drum Kit (atas)', 'TAMA_Imperialstar_6Pcs_Drum_Hairline_Black1.jpg', '2019-11-04 06:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

CREATE TABLE IF NOT EXISTS `header_transaksi` (
`id_header_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kode_transaksi` varchar(100) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `rekening_pembayaran` varchar(100) DEFAULT NULL,
  `rekening_pelanggan` varchar(100) DEFAULT NULL,
  `bukti_bayar` varchar(100) DEFAULT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `tanggal_bayar` varchar(20) DEFAULT NULL,
  `nama_bank` varchar(20) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `id_user`, `id_pelanggan`, `nama_pelanggan`, `email`, `telepon`, `alamat`, `kode_transaksi`, `tanggal_transaksi`, `jumlah_transaksi`, `status_bayar`, `jumlah_bayar`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `id_rekening`, `tanggal_bayar`, `nama_bank`, `tanggal_post`, `tanggal_update`) VALUES
(1, 0, 1, 'Dean Abner', 'deabnerjulian@gmail.com', '081388231733', 'Tebet, Jakarta Pusat', '11112019LKUWYG37', '2019-11-11 00:00:00', 8800000, 'Dibayar', 8800000, '817236871111', 'Dean Abner', 'code_igniter1.png', 1, '11-11-2019', 'BANK BCA', '2019-11-11 08:41:03', '2019-11-14 02:44:19'),
(2, 0, 1, 'Dean Abner', 'deabnerjulian@gmail.com', '081388231733', 'Tebet, Jakarta Pusat', '11112019WPJRMR5U', '2019-11-11 00:00:00', 7500000, 'Dibayar', 7500000, '817236871111', 'Dean Abner', 'Tulips.jpg', 2, '11-11-2019', 'BANK BNI', '2019-11-11 08:45:13', '2019-11-14 02:44:16'),
(3, 0, 1, 'Dean Abner', 'deabnerjulian@gmail.com', '081388231733', 'Tebet, Jakarta Pusat', '1111201976JSSQVM', '2019-11-11 00:00:00', 38000000, 'Dibayar', 38000000, '253265365', 'Dean Abner', 'IMG_20191010_064355.jpg', 4, '11-11-2019', 'BANK MANDIRI', '2019-11-11 15:18:49', '2019-11-14 02:44:13'),
(4, 0, 1, 'Dean Abner', 'deabnerjulian@gmail.com', '081388231733', 'Tebet, Jakarta Pusat', '14112019Z3ET0STE', '2019-11-14 00:00:00', 9000000, 'Belum dibayar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-14 01:47:10', '2019-11-14 00:47:10'),
(5, 0, 1, 'Dean Abner', 'deabnerjulian@gmail.com', '081388231733', 'Tebet, Jakarta Pusat', '14112019ARSKQ4LH', '2019-11-14 00:00:00', 6260000, 'Belum dibayar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-14 01:50:20', '2019-11-14 00:50:20'),
(6, 0, 1, 'Dean Abner', 'deabnerjulian@gmail.com', '081388231733', 'Tebet, Jakarta Pusat', '141120192QFGEFHN', '2019-11-14 00:00:00', 8800000, 'Belum dibayar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-14 01:52:34', '2019-11-14 00:52:34'),
(7, 0, 2, 'Vivi Endang', 'test4@gmail.com', '087198642863', 'Bekasi, Jawa Barat', '14112019EVROYNCA', '2019-11-14 00:00:00', 15000000, 'Dibayar', 15000000, '72635782634', 'Vivi Endang Sagita', 'Chrysanthemum.jpg', 1, '14-11-2019', 'BANK BCA', '2019-11-14 02:21:04', '2019-11-14 02:44:09'),
(8, 0, 3, 'Rizki Suntoro', 'rizkisuntoro@gmail.com', '087142324252', 'Utan Kayu, Jakarta Pusat', '14112019T5CMVI9Q', '2019-11-14 00:00:00', 15000000, 'Dibayar', 15000000, '87687412475', 'Rizki', 'Desert.jpg', 2, '14-11-2019', 'BANK BCA', '2019-11-14 03:36:53', '2019-11-14 02:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal_update`) VALUES
(1, 'yamaha', 'YAMAHA', 1, '2019-11-04 05:15:12'),
(2, 'korg', 'KORG', 2, '2019-11-02 01:43:43'),
(3, 'tama', 'TAMA', 3, '2019-11-02 01:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE IF NOT EXISTS `konfigurasi` (
`id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(100) NOT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `keywords` text,
  `metatext` text,
  `telepon` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `logo` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `rekening_pembayaran` varchar(100) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `rekening_pembayaran`, `tanggal_update`) VALUES
(1, 'Monster Music Store', 'Menjual Berbagai Alat Musik', 'monsmusic@gmail.com', 'http://zamrudexe.com', 'penjualan alat musik', 'ok', '081388231745', 'Jl. Kampung irian 1, Serdang, Kemayoran, Jakarta Pusat', 'http://facebook.com/', 'http://instagram/', 'Menjual berbagai macam alat musik dan perlengkapannya', 'logo2.png', 'icon.png', '9812981264', '2019-11-09 03:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `status_pelanggan`, `nama_pelanggan`, `email`, `password`, `telepon`, `alamat`, `tanggal_daftar`, `tanggal_update`) VALUES
(1, 0, 'Active', 'Dean Abner', 'deabnerjulian@gmail.com', 'eaf676c36d00fddf18a190add04f4f3e6ad8c09b', '081388231733', 'Tebet, Jakarta Pusat', '2019-11-09 06:39:44', '2019-11-09 05:39:44'),
(2, 0, 'Active', 'Vivi Endang', 'test4@gmail.com', 'ed42785ca24ae8fa2d9fd131401e44c3c86519ae', '087198642863', 'Bekasi, Jawa Barat', '2019-11-14 02:19:14', '2019-11-14 01:19:14'),
(3, 0, 'Active', 'Rizki Suntoro', 'rizkisuntoro@gmail.com', '950dcea8816a8e452b98f0cb20d0424c8d597180', '087142324252', 'Utan Kayu, Jakarta Pusat', '2019-11-14 03:17:11', '2019-11-14 02:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `slug_produk` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `keywords` text,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `berat` float DEFAULT NULL,
  `ukuran` varchar(100) DEFAULT NULL,
  `status_produk` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `keterangan`, `keywords`, `harga`, `stok`, `gambar`, `berat`, `ukuran`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(2, 1, 1, 'YMH002', 'YAMAHA Gitar Akustik Elektrik CPX500II - Black', 'yamaha-gitar-akustik-elektrik-cpx500ii-black-ymh002', '<ul>\r\n	<li>6 String</li>\r\n	<li>Top Body Spruce</li>\r\n	<li>Body Back &amp; Side Nato</li>\r\n	<li>Neck Nato</li>\r\n	<li>Rosewood</li>\r\n	<li>Fret 20</li>\r\n</ul>\r\n', 'yamaha gitar', 3130000, 1, 'YAMAHA-Gitar-Mini-CPX-500-Black.jpg', 0, '', 'Publish', '2019-11-02 01:42:15', '2019-11-14 00:50:20'),
(3, 1, 1, 'YMH003', 'YAMAHA APX700II Acoustic-electric Guitar Natural', 'yamaha-apx700ii-acoustic-electric-guitar-natural-ymh003', '<ul>\r\n	<li>Acoustic-electric Guitar</li>\r\n	<li>6 String</li>\r\n	<li>Top Body Solid Spruce</li>\r\n	<li>Back &amp; Side Body Nato</li>\r\n	<li>Neck Nato</li>\r\n	<li>Fingerboard Rosewood</li>\r\n	<li>22 Fret</li>\r\n	<li>Bridge Rosewood</li>\r\n	<li>Preamp System 64 1-way A.R.T.</li>\r\n</ul>\r\n', 'yamaha gitar', 8800000, 2, 'yamaha_apx_700_ii.jpg', 0, '', 'Publish', '2019-11-02 01:45:06', '2019-11-14 00:52:34'),
(4, 1, 1, 'YMH004', 'YAMAHA Silent Guitar SLG130NW', 'yamaha-silent-guitar-slg130nw-ymh004', '<ul>\r\n	<li>6 String</li>\r\n	<li>Top Body Maple</li>\r\n	<li>Neck Mahogany</li>\r\n	<li>Rosewood</li>\r\n	<li>Fret 20</li>\r\n</ul>\r\n', 'yamaha gitar', 6500000, 2, 'YAMAHA_Silent_Guitar_SLG130NW.jpg', 0, '', 'Publish', '2019-11-02 01:46:51', '2019-11-02 00:46:51'),
(5, 1, 1, 'YMH005', 'YAMAHA Gitar Elektrik Pacifica Series PAC611HFM', 'yamaha-gitar-elektrik-pacifica-series-pac611hfm-ymh005', '<ul>\r\n	<li>Colour - Transculent Purple</li>\r\n	<li>6 String</li>\r\n	<li>Alder Body</li>\r\n	<li>Maple Neck</li>\r\n	<li>Rosewood Fingerboard</li>\r\n	<li>22 Fret</li>\r\n	<li>2 Pickup</li>\r\n	<li>3-Lever Switch</li>\r\n	<li>Hardtail Bridge with Graph Tech String Saver Saddle</li>\r\n	<li>2 Control Knobs</li>\r\n</ul>\r\n', 'yamaha gitar', 7500000, 3, 'YAMAHA_Gitar_Elektrik_Pacifica_Series_PAC611HFM_-_Translucent_Purple.jpg', 0, '', 'Publish', '2019-11-02 01:48:46', '2019-11-14 02:36:53'),
(6, 1, 1, 'YMH501', 'YAMAHA YAS-280S Alto Saxophones', 'yamaha-yas-280s-alto-saxophones-ymh501', '<ul>\r\n	<li>Key : Eb</li>\r\n	<li>Neck : 280 style</li>\r\n	<li>Mouthpiece : 4C</li>\r\n	<li>Bell Type : Two-piece</li>\r\n	<li>Key Buttons : Polyester</li>\r\n	<li>Auxiliary Keys : High F#; Front F</li>\r\n</ul>\r\n', 'yamaha saxophones', 17000000, 2, 'YAMAHA_YAS-280S_Alto_Saxophones.jpg', 0, '', 'Publish', '2019-11-02 01:54:42', '2019-11-02 00:54:42'),
(7, 1, 1, 'YMH502', 'YAMAHA YAS-480 Alto Saxophones', 'yamaha-yas-480-alto-saxophones-ymh502', '<ul>\r\n	<li>Key : Eb</li>\r\n	<li>Neck : 480 style</li>\r\n	<li>Mouthpiece : 4C</li>\r\n	<li>Bell Type : Two-piece</li>\r\n	<li>Bell Decoration : Hand engraved</li>\r\n	<li>Key Buttons : Polyester</li>\r\n	<li>Auxiliary Keys : High F#; Front F</li>\r\n	<li>Gold lacquer</li>\r\n</ul>\r\n', 'yamaha saxophones', 19000000, 2, 'YAMAHA_YAS-480_Alto_Saxophones.jpg', 0, '', 'Publish', '2019-11-02 01:56:23', '2019-11-02 00:56:23'),
(8, 1, 1, 'YMH503', 'YAMAHA YAS-480S Alto Saxophones', 'yamaha-yas-480s-alto-saxophones-ymh503', '<ul>\r\n	<li>Key : Eb</li>\r\n	<li>Neck : 480 style</li>\r\n	<li>Mouthpiece : 4C</li>\r\n	<li>Bell Type : Two-piece</li>\r\n	<li>Bell Decoration : Hand engraved</li>\r\n	<li>Key Buttons : Polyester</li>\r\n	<li>Auxiliary Keys : High F#; Front F</li>\r\n	<li>Silver-plated</li>\r\n</ul>\r\n', 'yamaha saxophones', 20000000, 2, 'YAMAHA_YAS-480s_Alto_Saxophones.jpg', 0, '', 'Publish', '2019-11-02 02:22:12', '2019-11-02 01:22:12'),
(9, 1, 1, 'YMH504', 'YAMAHA YAS-280 Alto Saxophones', 'yamaha-yas-280-alto-saxophones-ymh504', '<ul>\r\n	<li>Key : Eb</li>\r\n	<li>Neck : 280 style</li>\r\n	<li>Mouthpiece : 4C</li>\r\n	<li>Bell Type : Two-piece</li>\r\n	<li>Key Buttons : Polyester</li>\r\n	<li>Auxiliary Keys : High F#; Front F</li>\r\n</ul>\r\n', 'yamaha saxophones', 15000000, 2, 'YAMAHA_YAS-280_Alto_Saxophones.jpg', 0, '', 'Publish', '2019-11-02 02:23:42', '2019-11-02 01:23:42'),
(10, 1, 2, 'KRG301', 'KORG Digital Piano C1 Air White', 'korg-digital-piano-c1-air-white-krg301', '<ul>\r\n	<li>88 Key (A0&ndash;C8)</li>\r\n	<li>RH3 (Real Weighted Hammer Action 3) Keyboard</li>\r\n	<li>Touch Curve Selection: Five types</li>\r\n	<li>Sound Generation: Stereo PCM</li>\r\n	<li>Max Polyphony: 120 Voice</li>\r\n	<li>2 x 10cm Speakers</li>\r\n	<li>Built-in Sounds/Effect/Demo Songs/Metronome</li>\r\n	<li>MIDI</li>\r\n	<li>Bluetooth</li>\r\n</ul>\r\n', 'korg piano', 17000000, 1, 'KORG_Digital_Piano_C1_Air_White.jpg', 0, '', 'Publish', '2019-11-02 02:37:30', '2019-11-02 01:37:30'),
(11, 1, 2, 'KRG302', 'KORG Digital Piano C1 Air Brown', 'korg-digital-piano-c1-air-brown-krg302', '<ul>\r\n	<li>88 Key (A0&ndash;C8)</li>\r\n	<li>RH3 (Real Weighted Hammer Action 3) Keyboard</li>\r\n	<li>Touch Curve Selection: Five types</li>\r\n	<li>Sound Generation: Stereo PCM</li>\r\n	<li>Max Polyphony: 120 Voice</li>\r\n	<li>2 x 10cm Speakers</li>\r\n	<li>Built-in Sounds/Effect/Demo Songs/Metronome</li>\r\n	<li>MIDI</li>\r\n	<li>Bluetooth</li>\r\n</ul>\r\n', 'korg piano', 17000000, 1, 'KORG_Digital_Piano_C1_Air_Brown.jpg', 0, '', 'Publish', '2019-11-02 02:38:42', '2019-11-02 01:38:42'),
(12, 1, 3, 'TMA001', 'TAMA Drum Kit Imperialstar Vintage Red', 'tama-drum-kit-imperialstar-vintage-red-tma001', '<ul>\r\n	<li>Bass Drums 18&quot;x22&quot;</li>\r\n	<li>Tom - Tom 8&quot;x10&quot; &amp; 9&quot;x12&quot;</li>\r\n	<li>Floor Tom 14&quot;x16&quot;</li>\r\n	<li>Snare Drum 5&quot;x14&quot;</li>\r\n	<li>Hardware</li>\r\n</ul>\r\n', 'tama drum', 7500000, 3, 'TAMA_Drum_Kit_Imperialstar_IP52_-_Vintage_Red.jpg', 0, '', 'Publish', '2019-11-02 02:45:32', '2019-11-14 01:21:04'),
(13, 5, 3, 'TMA002', 'TAMA Imperialstar 6Pcs Drum Kit', 'tama-imperialstar-6pcs-drum-kit-tma002', '<ul>\r\n	<li>Hairlane Black</li>\r\n	<li>22&quot; x 18&quot; Bass Drum</li>\r\n	<li>10&quot; x 8&quot; and 12&quot; x 9&quot; Tom-toms</li>\r\n	<li>16&quot; x 14&quot; and 14&quot; x 12&quot; Floor-toms</li>\r\n	<li>14&quot; x 5&quot; Snare Drum</li>\r\n	<li>Include Hardware (1x Snare Stand + 1x Hi-Hat Stand + 1x Boom Cymbal Stand + 1x Straight Cymbal Stand + 1x Drum Pedal + 1x Double Tom Holder + 1x Drum Throne)</li>\r\n</ul>\r\n', 'tama drum', 9000000, 2, 'TAMA_Imperialstar_6Pcs_Drum_Hairline_Black.jpg', 0, '', 'Publish', '2019-11-02 02:48:10', '2019-11-14 00:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE IF NOT EXISTS `rekening` (
`id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `gambar` varchar(20) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `pemilik`, `gambar`, `tanggal_post`) VALUES
(1, 'BANK BCA', '871523586', 'Iqbal Nur Fikri', NULL, '2019-11-11 09:00:33'),
(2, 'BANK MANDIRI', '817264127', 'Aridiarto', NULL, '2019-11-11 09:02:04'),
(3, 'BANK BRI', '712657161', 'Iqbal Nur ', NULL, '2019-11-11 09:01:58'),
(4, 'BANK BNI', '817246812', 'Vivi Endang', NULL, '2019-11-11 09:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(100) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_pelanggan`, `kode_transaksi`, `id_produk`, `harga`, `jumlah`, `total_harga`, `tanggal_transaksi`, `tanggal_update`) VALUES
(5, 0, 2, '051120198SWRDXMW', 12, 7500000, 1, 7500000, '2019-11-05 00:00:00', '2019-11-05 15:25:08'),
(6, 0, 2, '05112019UFF3XIUN', 4, 6500000, 2, 13000000, '2019-11-05 00:00:00', '2019-11-05 17:02:40'),
(7, 0, 2, '05112019UFF3XIUN', 3, 8800000, 1, 8800000, '2019-11-05 00:00:00', '2019-11-05 17:02:40'),
(8, 0, 1, '11112019LKUWYG37', 3, 8800000, 1, 8800000, '2019-11-11 00:00:00', '2019-11-11 07:41:04'),
(9, 0, 1, '11112019WPJRMR5U', 12, 7500000, 1, 7500000, '2019-11-11 00:00:00', '2019-11-11 07:45:13'),
(10, 0, 1, '1111201976JSSQVM', 7, 19000000, 2, 38000000, '2019-11-11 00:00:00', '2019-11-11 14:18:49'),
(11, 0, 1, '14112019Z3ET0STE', 13, 9000000, 1, 9000000, '2019-11-14 00:00:00', '2019-11-14 00:47:10'),
(12, 0, 1, '14112019ARSKQ4LH', 2, 3130000, 2, 6260000, '2019-11-14 00:00:00', '2019-11-14 00:50:20'),
(13, 0, 1, '141120192QFGEFHN', 3, 8800000, 1, 8800000, '2019-11-14 00:00:00', '2019-11-14 00:52:34'),
(14, 0, 2, '14112019EVROYNCA', 12, 7500000, 2, 15000000, '2019-11-14 00:00:00', '2019-11-14 01:21:04'),
(15, 0, 3, '14112019T5CMVI9Q', 5, 7500000, 2, 15000000, '2019-11-14 00:00:00', '2019-11-14 02:36:53');

--
-- Triggers `transaksi`
--
DELIMITER //
CREATE TRIGGER `transaksi` AFTER INSERT ON `transaksi`
 FOR EACH ROW BEGIN
UPDATE produk set stok = stok-NEW.jumlah WHERE id_produk = NEW.id_produk;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(1, 'Iqbal Nur FIkri', 'fikriiqbal.nur@gmail.com', 'Iqbale', '65f568e1b3ac89d15bd804b9f1bd95cd37ca0ecb', 'Admin', '2019-11-12 04:05:10'),
(4, 'Vivi Endang Sagita', 'vivi.ensa21@gmail.com', 'viviensa', 'ed42785ca24ae8fa2d9fd131401e44c3c86519ae', 'Admin', '2019-11-12 04:31:54'),
(5, 'Aridiarto', 'ariocol@gmail.com', 'admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '2019-11-12 04:32:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
 ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
 ADD PRIMARY KEY (`id_header_transaksi`), ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
 ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`), ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
 ADD PRIMARY KEY (`id_rekening`), ADD UNIQUE KEY `nmr_rekening` (`nomor_rekening`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
