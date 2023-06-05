-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2023 at 01:10 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipkan`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_website`
--

DROP TABLE IF EXISTS `detail_website`;
CREATE TABLE IF NOT EXISTS `detail_website` (
  `detail_website_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `site_deskripsi` text,
  `notelp` varchar(255) DEFAULT NULL,
  `nama_kontak` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `alamat_universitas` text,
  `images` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`detail_website_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_website`
--

INSERT INTO `detail_website` (`detail_website_id`, `site_title`, `email`, `site_deskripsi`, `notelp`, `nama_kontak`, `facebook`, `instagram`, `youtube`, `telegram`, `alamat_universitas`, `images`, `site_favicon`) VALUES
(1, 'SIPkan', 'provita@gmail.com', 'Sistem Informasi Perikanan Kab Keerom', '62812345678', 'Admin SIPkan', 'https://www.facebook.com/link_anda/', 'https://www.instagram.com/link_anda/', 'https://www.youtube.com/c/link_anda', 'https://t.me/link_anda', 'Jayapura, Papua', '1ac12671226fc2218b7a75a30059ebee.jpeg', 'c8329678e30eb62c6f3760072f1eb003.png');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE IF NOT EXISTS `lokasi` (
  `kodelokasi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  PRIMARY KEY (`kodelokasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`kodelokasi`, `lokasi`) VALUES
('91.11', 'KAB. KEEROM'),
('91.11.01', 'Waris'),
('91.11.01.2001', 'Banda'),
('91.11.01.2002', 'Pund'),
('91.11.01.2003', 'Kalifam'),
('91.11.01.2004', 'Yuwainda'),
('91.11.01.2005', 'Kalimala'),
('91.11.01.2006', 'Ampas'),
('91.11.01.2007', 'Bompai'),
('91.11.01.2008', 'Sack'),
('91.11.02', 'Arso'),
('91.11.02.2001', 'Arso Kota'),
('91.11.02.2002', 'Workwana'),
('91.11.02.2003', 'Kwimi'),
('91.11.02.2004', 'Ubiyau'),
('91.11.02.2006', 'Sawanawa'),
('91.11.02.2009', 'Yuwanain'),
('91.11.02.2010', 'Yanamaa'),
('91.11.02.2011', 'Asyaman'),
('91.11.02.2012', 'Yamta'),
('91.11.02.2016', 'Bagia'),
('91.11.02.2030', 'Sawabuun'),
('91.11.02.2031', 'Bibiosi'),
('91.11.03', 'Senggi'),
('91.11.03.2001', 'Molof'),
('91.11.03.2002', 'Senggi'),
('91.11.03.2003', 'Warlef'),
('91.11.03.2005', 'Usku'),
('91.11.03.2006', 'Woslay'),
('91.11.03.2010', 'Namla'),
('91.11.03.2011', 'Waley'),
('91.11.04', 'Web'),
('91.11.04.2001', 'Dubu'),
('91.11.04.2002', 'Umuraf'),
('91.11.04.2003', 'Semografi'),
('91.11.04.2005', 'Embi'),
('91.11.04.2015', 'Yamraf Dua'),
('91.11.04.2017', 'Tatakra'),
('91.11.05', 'Skanto'),
('91.11.05.2001', 'Skanto'),
('91.11.05.2002', 'Jaifuri'),
('91.11.05.2003', 'Arsopura'),
('91.11.05.2004', 'Wiantre'),
('91.11.05.2005', 'Naramben'),
('91.11.05.2006', 'Intaimelyan'),
('91.11.05.2007', 'Traimelyan'),
('91.11.05.2008', 'Wulukubun'),
('91.11.05.2009', 'Gudang Garam'),
('91.11.05.2010', 'Saefen Empat Dua'),
('91.11.05.2011', 'Walma'),
('91.11.05.2012', 'Alang-alang Raya'),
('91.11.06', 'Arso Timur'),
('91.11.06.2005', 'Yetti'),
('91.11.06.2006', 'Kriku'),
('91.11.06.2007', 'Skofro'),
('91.11.06.2008', 'Kibay'),
('91.11.06.2009', 'Sangke'),
('91.11.06.2011', 'Suskun'),
('91.11.06.2013', 'Amyu'),
('91.11.06.2014', 'Kikere'),
('91.11.06.2015', 'Petewi'),
('91.11.07', 'Towe'),
('91.11.07.2001', 'Towe Hitam'),
('91.11.07.2002', 'Towe Atas'),
('91.11.07.2003', 'Terfones'),
('91.11.07.2004', 'Tefalma'),
('91.11.07.2005', 'Bias'),
('91.11.07.2006', 'Milki'),
('91.11.07.2007', 'Lules'),
('91.11.07.2009', 'Jember'),
('91.11.07.2010', 'Niliti'),
('91.11.07.2011', 'Pris'),
('91.11.08', 'Arso Barat'),
('91.11.08.2001', 'Dukwia'),
('91.11.08.2002', 'Sanggaria'),
('91.11.08.2003', 'Yatu Raharja'),
('91.11.08.2004', 'Warbo'),
('91.11.08.2005', 'Yammua'),
('91.11.08.2006', 'Ifia-fia'),
('91.11.08.2007', 'Baburia'),
('91.11.08.2008', 'Yowong'),
('91.11.09', 'Mannem'),
('91.11.09.2001', 'Yamara'),
('91.11.09.2002', 'Wembi'),
('91.11.09.2003', 'Wonorejo'),
('91.11.09.2004', 'Pyawi'),
('91.11.09.2005', 'Sawyatami'),
('91.11.09.2006', 'Wambes'),
('91.11.09.2007', 'Uskwar'),
('91.11.10', 'Yaffi'),
('91.11.10.2001', 'Yabanda'),
('91.11.10.2002', 'Yuruf'),
('91.11.10.2003', 'Amgotro'),
('91.11.10.2004', 'Jifanggry'),
('91.11.10.2005', 'Monggoafi'),
('91.11.10.2006', 'Fafenumbu'),
('91.11.10.2007', 'Akarinda'),
('91.11.11', 'Kaisenar'),
('91.11.11.2001', 'Kaisenar'),
('91.11.11.2002', 'Kiambra'),
('91.11.11.2003', 'Liket'),
('91.11.11.2004', 'Onam'),
('91.11.11.2005', 'Tefanma Satu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

DROP TABLE IF EXISTS `tbl_home`;
CREATE TABLE IF NOT EXISTS `tbl_home` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `home_caption_1` varchar(255) DEFAULT NULL,
  `home_caption_2` longtext,
  `home_bg_heading` varchar(50) DEFAULT NULL,
  `home_bg_heading2` varchar(50) DEFAULT NULL,
  `home_bg_heading3` varchar(50) DEFAULT NULL,
  `home_bg_testimonial` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`home_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_caption_1`, `home_caption_2`, `home_bg_heading`, `home_bg_heading2`, `home_bg_heading3`, `home_bg_testimonial`) VALUES
(1, 'Japanese Language NAT-TEST', 'The Japanese Language NAT-TEST is an examination that measures the Japanese language ability of students who are not native Japanese speakers.The tests are separated by difficulty (five levels) and general ability is measured in three categories: Grammar/Vocabulary, Listening and Reading Comprehension. The format of the exam and the types of questions are equivalent to those that appear on the Japanese-Language Proficiency Test (JLPT).', 'portfolio-details-1.jpg', 'portfolio-details-2.jpg', 'portfolio-details-3.jpg', 'nat-tes4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

DROP TABLE IF EXISTS `tbl_log`;
CREATE TABLE IF NOT EXISTS `tbl_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ket` varchar(255) DEFAULT NULL,
  `tgl_log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`id`, `ket`, `tgl_log`) VALUES
(1, '<b>Zikry</b> Melakukan Tambah Konsumen <b>Test</b>', '2023-02-25 09:59:02'),
(2, '<b>Zikry</b> Melakukan Tambah Role <b>Admin</b>', '2023-02-26 09:11:06'),
(3, '<b>Zikry</b> Melakukan Tambah Role <b>Vendor</b>', '2023-02-26 09:17:19'),
(4, '<b>Zikry</b> Melakukan Tambah Role <b>Pegawai</b>', '2023-02-26 09:27:52'),
(5, '<b>Zikry</b> Melakukan Tambah Role <b>Manajer</b>', '2023-02-26 09:28:10'),
(6, '<b>Zikry</b> Melakukan Tambah Role <b>Direktur</b>', '2023-02-26 09:28:18'),
(7, '<b>Zikry</b> Melakukan Edit Role <b>Manajer/Karyawan</b>', '2023-02-26 09:38:53'),
(8, '<b>Zikry</b> Melakukan Edit Role <b>Manajer</b>', '2023-02-26 09:39:34'),
(9, '<b>Zikry</b> Melakukan Edit Role <b>Pegawai/Karyawan</b>', '2023-02-26 09:39:39'),
(10, '<b>IsW</b> Melakukan Tambah Role <b>Tes</b>', '2023-02-26 09:45:28'),
(11, '<b>IsW</b> Melakukan Edit Role <b>Tes1</b>', '2023-02-26 09:56:00'),
(12, '<b>IsW</b> Melakukan Tambah Role <b>eee</b>', '2023-02-26 09:58:35'),
(13, '<b>IsW</b> Melakukan Edit Role <b>eeee</b>', '2023-02-26 09:58:41'),
(14, '<b>IsW</b> Melakukan Edit Role <b>eqw</b>', '2023-02-26 09:58:59'),
(15, '<b>IsW</b> Melakukan Tambah atasan <b>Manajer 1</b>', '2023-02-26 11:15:45'),
(16, '<b>IsW</b> Melakukan Tambah atasan <b>Manajer 2</b>', '2023-02-26 11:15:56'),
(17, '<b>IsW</b> Melakukan Tambah atasan <b>Manajer 3</b>', '2023-02-26 11:16:02'),
(18, '<b>IsW</b> Melakukan Tambah atasan <b>Manajer 4</b>', '2023-02-26 11:16:13'),
(19, '<b>IsW</b> Melakukan Tambah atasan <b>tes</b>', '2023-02-26 11:16:20'),
(20, '<b>IsW</b> Melakukan Edit atasan <b>tes 1</b>', '2023-02-26 11:16:28'),
(21, '<b>IsW</b> Melakukan Tambah Material Packing <b>qqq</b>', '2023-02-26 12:05:52'),
(22, '<b>Rahmat Warehouse</b> Melakukan Penambahan Stok Material <b> sebanyak 7 Pcs</b>', '2023-02-26 12:07:11'),
(23, '<b>Hendra Ekspedisi</b> Menambah Pengeluaran Sebesar <b>Rp 1</b> Untuk Keperluan qqq', '2023-02-26 12:12:14'),
(24, '<b>IsW</b> Melakukan Tambah bagian <b>LAB</b>', '2023-02-26 12:20:02'),
(25, '<b>IsW</b> Melakukan Tambah bagian <b>FARMASI</b>', '2023-02-26 12:20:12'),
(26, '<b>IsW</b> Melakukan Tambah bagian <b>RADIOLOGI</b>', '2023-02-26 12:20:26'),
(27, '<b>IsW</b> Melakukan Tambah bagian <b>JANG UM</b>', '2023-02-26 12:20:34'),
(28, '<b>IsW</b> Melakukan Tambah bagian <b>PANTRY</b>', '2023-02-26 12:20:44'),
(29, '<b>IsW</b> Melakukan Tambah bagian <b>TES</b>', '2023-02-26 12:21:12'),
(30, '<b>IsW</b> Melakukan Edit bagian <b>TES 1</b>', '2023-02-26 12:21:17'),
(31, '<b>IsW</b> Menambah pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan as1', '2023-02-27 07:32:19'),
(32, '<b>IsW</b> Menghapus pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan as1', '2023-02-27 07:32:55'),
(33, '<b>RS PROVITA 1</b> Menambah pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan aaa', '2023-02-27 07:38:41'),
(34, '<b>RS PROVITA 1</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 296,000</b> Untuk Keperluan aaaa', '2023-02-27 07:40:47'),
(35, '<b>RS PROVITA 1</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 396,000</b> Untuk Keperluan aaaa1', '2023-02-27 07:44:15'),
(36, '<b>RS PROVITA 1</b> Menghapus pettycash Sebesar <b>Rp 396,000</b> Untuk Keperluan aaaa1', '2023-02-27 08:54:17'),
(37, '<b>RS PROVITA 1</b> Menambah pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan Tes', '2023-02-27 08:57:46'),
(38, '<b>RS PROVITA 1</b> Menghapus pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan Tes', '2023-02-27 09:04:26'),
(39, '<b>RS PROVITA 1</b> Menambah pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan Test', '2023-02-27 09:04:36'),
(40, '<b>RS PROVITA 1</b> Menghapus pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan Test', '2023-02-27 09:05:33'),
(41, '<b>RS PROVITA 1</b> Menambah pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan Test', '2023-02-27 09:07:22'),
(42, '<b>RS PROVITA 1</b> Menghapus pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan Test', '2023-02-27 13:39:38'),
(43, '<b>RS PROVITA 1</b> Menambah pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan Tes', '2023-02-27 13:41:27'),
(44, '<b>RS PROVITA 1</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 296,001</b> Untuk Keperluan Tes1', '2023-02-27 14:25:15'),
(45, '<b>RS PROVITA 1</b> Menghapus pettycash Sebesar <b>Rp 296,001</b> Untuk Keperluan Tes1', '2023-02-28 02:00:54'),
(46, '<b>RS PROVITA 1</b> Menambah pettycash Sebesar <b>Rp 296,000</b> Untuk Keperluan Tes', '2023-02-28 02:01:07'),
(47, '<b>IsW</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 296,000</b> Untuk Keperluan Tessknfklsnflksdfhdskhf\r\njskfsdkjf\r\ndfkdjhf', '2023-02-28 07:27:14'),
(48, '<b>IsW</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 296,000</b> Untuk Keperluan Tessknfklsnflksdfhdskhf\r\njskfsdkjf\r\ndfkdjhf', '2023-02-28 07:27:27'),
(49, '<b>IsW</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 296,000</b> Untuk Keperluan Test', '2023-02-28 07:29:34'),
(50, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b> dan catatan </b>', '2023-02-28 08:31:09'),
(51, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b> dan catatan </b>', '2023-02-28 08:32:31'),
(52, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan </b>', '2023-02-28 08:42:45'),
(53, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan </b>', '2023-02-28 08:47:25'),
(54, '<b>RS PROVITA 1</b> Menambah pettycash Sebesar <b>Rp 390,000</b> Untuk Keperluan Coba', '2023-02-28 08:53:46'),
(55, '<b>Tes Karyawan</b> Menambah pettycash Sebesar <b>Rp 100,000</b> Untuk Keperluan Anu', '2023-02-28 12:32:56'),
(56, '<b>tes</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan </b>', '2023-02-28 13:21:08'),
(57, '<b>tes</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan Okk</b>', '2023-02-28 13:40:15'),
(58, '<b>tes</b> Membahasa pengajuan pettycash dengan status <b>DITOLAK dan catatan Biaya terlalu besar</b>', '2023-02-28 13:41:16'),
(59, '<b>Direktur</b> Memrilis pengajuan pettycash dengan status <b>DISETUJUI dan catatan Okk</b>', '2023-03-01 02:41:38'),
(60, '<b>Direktur</b> Memrilis pengajuan pettycash dengan status <b>RILIS dan catatan Okk</b>', '2023-03-01 02:45:20'),
(61, '<b>Karyawan 4</b> Menambah pettycash Sebesar <b>Rp 200,000</b> Untuk Keperluan Tes', '2023-03-01 03:00:05'),
(62, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan Okk</b>', '2023-03-01 03:01:30'),
(63, '<b>Direktur</b> Memrilis pengajuan pettycash dengan status <b>RILIS dan catatan Okk</b>', '2023-03-01 03:02:15'),
(64, '<b>RS PROVITA 1</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 296,000</b> Untuk Keperluan Aaa', '2023-03-01 13:44:53'),
(65, '<b>RS PROVITA 1</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 296,000</b> Untuk Keperluan Aaa', '2023-03-01 13:45:12'),
(66, '<b>RS PROVITA 1</b> Mengubah pettycash Sebesar <b>Rp 296,000 Menjadi Rp 296,000</b> Untuk Keperluan Aaa', '2023-03-01 13:52:08'),
(67, '<b>RS PROVITA 1</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 296,000</b> Untuk Keperluan Test', '2023-03-02 07:43:07'),
(68, '<b>RS PROVITA 1</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 296,000</b> Untuk Keperluan Test', '2023-03-02 07:43:14'),
(69, '<b>RS PROVITA 1</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 296,000</b> Untuk Keperluan Test', '2023-03-02 07:44:54'),
(70, '<b>IsW</b> Melakukan Edit atasan <b>Manajer JangMed</b>', '2023-03-02 08:14:42'),
(71, '<b>IsW</b> Melakukan Edit atasan <b>Manajer Marketing</b>', '2023-03-02 08:14:57'),
(72, '<b>IsW</b> Melakukan Edit atasan <b>Manajer Eksekutif</b>', '2023-03-02 08:15:11'),
(73, '<b>IsW</b> Melakukan Edit atasan <b>Manajer Jang Umum</b>', '2023-03-02 08:15:36'),
(74, '<b>IsW</b> Melakukan Tambah atasan <b>Manajer Mutu</b>', '2023-03-02 08:15:57'),
(75, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-02 14:12:17'),
(76, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-02 14:19:58'),
(77, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-02 14:24:16'),
(78, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-02 14:25:51'),
(79, '<b>IsW</b> Melakukan Penambahan Jenis Harga <b>zz1</b> Dengan Harga Rp 121', '2023-03-02 14:35:12'),
(80, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-02 14:50:32'),
(81, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-02 14:50:59'),
(82, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-02 14:51:36'),
(83, '<b>IsW</b> Melakukan Tambah belanja <b>Bolpoin</b>', '2023-03-03 01:07:54'),
(84, '<b>Staff Eksekutif</b> Melakukan Tambah belanja <b>Kertas HVS 1 Rim</b>', '2023-03-03 02:21:05'),
(85, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-03 02:25:08'),
(86, '<b>Staff Eksekutif</b> Melakukan Tambah belanja <b>Kertas HVS 1 Rim</b>', '2023-03-03 02:25:41'),
(87, '<b>Staff Eksekutif</b> Melakukan Tambah belanja <b>Bolpoin 1 pax</b>', '2023-03-03 02:25:55'),
(88, '<b>Staff Eksekutif</b> Melakukan Edit belanja <b>Kertas HVS 1 Rim</b>', '2023-03-03 05:17:42'),
(89, '<b>Staff Eksekutif</b> Melakukan Tambah belanja <b>Kertas HVS 1 Rim</b>', '2023-03-03 06:31:57'),
(90, '<b>Staff Eksekutif</b> Melakukan Tambah belanja <b>Print Laporan Bulanan</b>', '2023-03-03 07:39:21'),
(91, '<b>Staff Lab</b> Melakukan Tambah belanja <b>Tes</b>', '2023-03-03 08:17:34'),
(92, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-10 11:32:30'),
(93, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-10 11:55:47'),
(94, '<b>Staff Eksekutif</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Tes', '2023-03-10 11:56:39'),
(95, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan Okk</b>', '2023-03-10 11:58:20'),
(96, '<b>Staff Lab</b> Menambah pettycash Sebesar <b>Rp 150,000</b> Untuk Keperluan Beli Kertas HVS', '2023-03-11 08:27:28'),
(97, '<b>Staff Lab</b> Menambah pettycash Sebesar <b>Rp 100,000</b> Untuk Keperluan Suntikan', '2023-03-11 08:27:51'),
(98, '<b>Staff Farmasi</b> Menambah pettycash Sebesar <b>Rp 200,000</b> Untuk Keperluan Obat', '2023-03-11 08:30:30'),
(99, '<b>Staff Farmasi</b> Menambah pettycash Sebesar <b>Rp 150,000</b> Untuk Keperluan Seragam', '2023-03-11 08:30:56'),
(100, '<b>Staff Marketing</b> Menambah pettycash Sebesar <b>Rp 500,000</b> Untuk Keperluan Tes Apapun', '2023-03-11 08:32:12'),
(101, '<b>Staff Marketing</b> Menambah pettycash Sebesar <b>Rp 275,000</b> Untuk Keperluan Hem', '2023-03-11 08:35:02'),
(102, '<b>Manajer 2</b> Membahasa pengajuan pettycash dengan status <b>DITOLAK dan catatan Dana Terlalu Besar</b>', '2023-03-11 08:35:51'),
(103, '<b>Manajer 2</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan Okk</b>', '2023-03-11 08:36:24'),
(104, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DITOLAK dan catatan Seragam Apa ya?</b>', '2023-03-11 08:39:03'),
(105, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan Gas</b>', '2023-03-11 08:39:20'),
(106, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan Okk</b>', '2023-03-11 08:39:33'),
(107, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan Okk</b>', '2023-03-11 08:39:40'),
(108, '<b>Direktur</b> Memrilis pengajuan pettycash dengan status <b>RILIS dan catatan Lanjutkan!!!</b>', '2023-03-11 08:41:55'),
(109, '<b>Direktur</b> Memrilis pengajuan pettycash dengan status <b>RILIS dan catatan Lanjutkan!!!</b>', '2023-03-11 08:42:05'),
(110, '<b>Direktur</b> Memrilis pengajuan pettycash dengan status <b>RILIS dan catatan Lanjutkan!!!</b>', '2023-03-11 08:42:18'),
(111, '<b>Direktur</b> Memrilis pengajuan pettycash dengan status <b>NONRILIS dan catatan Ditahan dulu</b>', '2023-03-11 08:42:53'),
(112, '<b>Staff Lab</b> Menambah pettycash Sebesar <b>Rp 123,000</b> Untuk Keperluan Tes', '2023-03-11 09:27:18'),
(113, '<b>Staff Lab</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 150,000</b> Untuk Keperluan Beli Kertas HVS', '2023-03-11 09:33:23'),
(114, '<b>Staff Marketing</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 275,000</b> Untuk Keperluan Hem', '2023-03-11 14:52:34'),
(115, '<b>Manajer 1</b> Membahasa pengajuan pettycash bon merah dengan status <b>DISETUJUI dan catatan Okk1</b>', '2023-03-12 04:59:42'),
(116, '<b>Staff Farmasi</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Obat', '2023-03-12 05:25:30'),
(117, '<b>Staff Farmasi</b> Mengubah pettycashmerah Sebesar <b>Rp 0 Menjadi Rp 200,000</b> Untuk Keperluan Obat', '2023-03-12 05:26:35'),
(118, '<b>Manajer 1</b> Membahasa pengajuan pettycash bon merah dengan status <b>DISETUJUI dan catatan Okk</b>', '2023-03-12 05:29:33'),
(119, '<b>Manajer 1</b> Membahasa pengajuan pettycash dengan status <b>DISETUJUI dan catatan Lanjutkan</b>', '2023-03-12 05:52:17'),
(120, '<b>Direktur</b> Rilis pettycash bon merah dengan status <b>RILIS dan catatan Ok Rilis</b>', '2023-03-12 08:44:55'),
(121, '<b>IsWah</b> Menambah reimburse Sebesar <b>Rp 1,112,223</b> Untuk Keperluan tes re', '2023-04-20 10:45:38'),
(122, '<b>IsWah</b> Mengubah reimburse Sebesar <b>Rp 1,112,223 Menjadi Rp 1,112,223</b> Untuk Keperluan tes', '2023-04-20 10:45:48'),
(123, '<b>Staff Lab</b> Menambah reimburse Sebesar <b>Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-20 13:29:26'),
(124, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:29:43'),
(125, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:31:29'),
(126, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:31:42'),
(127, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:32:04'),
(128, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:50:27'),
(129, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:52:51'),
(130, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:54:23'),
(131, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:56:55'),
(132, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:57:47'),
(133, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:58:44'),
(134, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,000</b> Untuk Keperluan Tes tes', '2023-04-21 07:59:02'),
(135, '<b>Staff Lab</b> Mengubah reimburse Sebesar <b>Rp 100,000 Menjadi Rp 100,001</b> Untuk Keperluan Tes tes 1', '2023-04-21 08:14:14'),
(136, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,001 Menjadi Rp 100,001</b> Untuk Keperluan Tes tes 1', '2023-04-21 08:17:03'),
(137, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,001 Menjadi Rp 100,001</b> Untuk Keperluan Tes tes 1', '2023-04-21 08:17:11'),
(138, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 100,001 Menjadi Rp 100,001</b> Untuk Keperluan Tes tes 1', '2023-04-21 08:17:43'),
(139, '<b>Staff Lab</b> Mengubah reimburse Sebesar <b>Rp 100,001 Menjadi Rp 10,000</b> Untuk Keperluan Tes tes ', '2023-04-21 08:39:56'),
(140, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 10,000 Menjadi Rp 10,000</b> Untuk Keperluan Tes tes ', '2023-04-21 08:40:41'),
(141, '<b>Staff Lab</b> Menambah reimburse Sebesar <b>Rp 1,212,121,212</b> Untuk Keperluan Asasas', '2023-04-21 09:12:30'),
(142, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 1,112,223 Menjadi Rp 1,112,223</b> Untuk Keperluan tes', '2023-04-21 11:14:41'),
(143, '<b>Direktur</b> Mengubah reimburse Sebesar <b>Rp 1,112,223 Menjadi Rp 1,112,223</b> Untuk Keperluan tes', '2023-04-23 10:52:15'),
(144, '<b>Direktur</b> Mengubah reimburse Sebesar <b>Rp 1,112,223 Menjadi Rp 1,112,223</b> Untuk Keperluan tes', '2023-04-23 10:52:23'),
(145, '<b>Direktur</b> Mengubah reimburse Sebesar <b>Rp 1,112,223 Menjadi Rp 1,112,223</b> Untuk Keperluan tes', '2023-04-23 10:53:05'),
(146, '<b>Staff Lab</b> Menambah reimburse Sebesar <b>Rp 20,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:11:30'),
(147, '<b>Staff Lab</b> Menghapus reimburse Sebesar <b>Rp 20,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:13:26'),
(148, '<b>Staff Lab</b> Menambah reimburse Sebesar <b>Rp 200,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:13:50'),
(149, '<b>Staff Lab</b> Mengubah reimburse Sebesar <b>Rp 200,000 Menjadi Rp 20,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:14:04'),
(150, '<b>Staff Lab</b> Menambah reimburse Sebesar <b>Rp 10,000</b> Untuk Keperluan Beli Pensin', '2023-04-23 11:14:32'),
(151, '<b>Staff Lab</b> Menghapus reimburse Sebesar <b>Rp 10,000</b> Untuk Keperluan Beli Pensin', '2023-04-23 11:15:52'),
(152, '<b>Staff Lab</b> Menghapus reimburse Sebesar <b>Rp 20,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:15:57'),
(153, '<b>Staff Lab</b> Menambah reimburse Sebesar <b>Rp 200,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:16:21'),
(154, '<b>Staff Lab</b> Menambah reimburse Sebesar <b>Rp 10,000</b> Untuk Keperluan Beli Pulpen', '2023-04-23 11:16:43'),
(155, '<b>Staff Lab</b> Mengubah reimburse Sebesar <b>Rp 200,000 Menjadi Rp 20,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:16:54'),
(156, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 10,000 Menjadi Rp 10,000</b> Untuk Keperluan Beli Pulpen', '2023-04-23 11:17:40'),
(157, '<b>Manajer 11</b> Mengubah reimburse Sebesar <b>Rp 20,000 Menjadi Rp 20,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:17:52'),
(158, '<b>Direktur</b> Mengubah reimburse Sebesar <b>Rp 20,000 Menjadi Rp 20,000</b> Untuk Keperluan Beli Bensin', '2023-04-23 11:18:23'),
(159, '<b>Manajer 11</b> Melakukan Tambah jeniskolam <b>Tes</b>', '2023-05-03 10:09:13'),
(160, '<b>Manajer 11</b> Melakukan Tambah jeniskolam <b>Asasasas</b>', '2023-05-03 10:09:34'),
(161, '<b>IsWah</b> Melakukan Edit jeniskolam <b>Manajer Jang</b>', '2023-05-03 10:32:50'),
(162, '<b>IsWah</b> Melakukan Tambah jeniskolam <b>hhh</b>', '2023-05-03 11:15:46'),
(163, '<b>IsWah</b> Melakukan Tambah jeniskolam <b>qwqwqwqw</b>', '2023-05-03 11:16:38'),
(164, '<b>IsWah</b> Melakukan Edit jeniskolam <b>Manajer</b>', '2023-05-03 11:17:49'),
(165, '<b>IsWah</b> Melakukan Edit jeniskolam <b>qwqwqw</b>', '2023-05-03 11:21:45'),
(166, '<b>IsWah</b> Melakukan Tambah jeniskolam <b>adsd</b>', '2023-05-03 11:24:27'),
(167, '<b>IsWah</b> Melakukan Tambah jeniskolam <b>asdasad</b>', '2023-05-03 11:25:39'),
(168, '<b>IsWah</b> Melakukan Tambah jeniskolam <b>sss</b>', '2023-05-04 03:16:11'),
(169, '<b>IsWah</b> Melakukan Edit jeniskolam <b>sss2</b>', '2023-05-04 03:16:17'),
(170, '<b>IsWah</b> Melakukan Tambah jenisikan <b>Pari</b>', '2023-05-04 03:34:21'),
(171, '<b>IsWah</b> Melakukan Edit jenisikan <b>Paris</b>', '2023-05-04 03:34:34'),
(172, '<b>IsWah</b> Melakukan Edit jenisikan <b>Pari</b>', '2023-05-04 03:34:40'),
(173, '<b>IsWah</b> Melakukan Tambah jenisikan <b>sss</b>', '2023-05-04 03:34:54'),
(174, '<b>IsWah</b> Melakukan Edit jenisikan <b>Hiu</b>', '2023-05-04 03:35:00'),
(175, '<b>IsWah</b> Melakukan Tambah jenisbudidaya <b>Ikan Lele</b>', '2023-05-04 04:32:36'),
(176, '<b>IsWah</b> Melakukan Edit jenisbudidaya <b>Ikan Leleee</b>', '2023-05-04 04:32:45'),
(177, '<b>IsWah</b> Melakukan Tambah jeniskomoditas <b>Komoditas1</b>', '2023-05-10 15:42:29'),
(178, '<b>IsWah</b> Melakukan Edit jeniskomoditas <b>Komoditas2</b>', '2023-05-10 15:42:35'),
(179, '<b>IsWah</b> Melakukan Tambah jeniskolam <b>kolam123</b>', '2023-05-12 04:27:56'),
(180, '<b>IsWah</b> Melakukan Edit jeniskolam <b>kolam123z</b>', '2023-05-12 04:28:03'),
(181, '<b>IsWah</b> Melakukan Tambah jenisikan <b>zzzz</b>', '2023-05-12 04:28:16'),
(182, '<b>IsWah</b> Melakukan Edit jenisikan <b>zzzza</b>', '2023-05-12 04:28:19'),
(183, '<b>IsWah</b> Melakukan Tambah jenisbudidaya <b>zzzz</b>', '2023-05-12 04:28:30'),
(184, '<b>IsWah</b> Melakukan Tambah jeniskomoditas <b>Komoditas1</b>', '2023-05-12 07:21:42'),
(185, '<b>IsWah</b> Melakukan Tambah Tambak Sederhana', '2023-05-12 16:15:10'),
(186, '<b>IsWah</b> Melakukan Update Tambak Sederhana', '2023-05-13 08:25:15'),
(187, '<b>IsWah</b> Melakukan Tambah Tambak Sederhana', '2023-05-13 08:45:53'),
(188, '<b>IsWah</b> Melakukan Tambah jenisbudidaya <b>Ikan Lele</b>', '2023-05-13 08:55:59'),
(189, '<b>IsWah</b> Melakukan Tambah Tambak Sederhana', '2023-05-13 09:00:17'),
(190, '<b>IsWah</b> Melakukan Tambah Tambak Sederhana', '2023-05-13 13:08:21'),
(191, '<b>IsWah</b> Melakukan Tambah Tambak Sederhana', '2023-05-13 13:29:34'),
(192, '<b>IsWah</b> Melakukan Update Tambak Sederhana', '2023-05-13 13:29:55'),
(193, '<b>IsWah</b> Melakukan Update Tambak Sederhana', '2023-05-13 13:32:50'),
(194, '<b>IsWah</b> Melakukan Tambah Tambak Sederhana', '2023-05-15 08:47:59'),
(195, '<b>IsWah</b> Melakukan Update Tambak Sederhana', '2023-05-15 08:51:30'),
(196, '<b>IsWah</b> Melakukan Tambah KAT', '2023-05-15 14:09:54'),
(197, '<b>IsWah</b> Melakukan Update Tambak Sederhana', '2023-05-15 14:20:02'),
(198, '<b>IsWah</b> Melakukan Tambah KAT', '2023-05-16 03:10:06'),
(199, '<b>IsWah</b> Melakukan Update Tambak Sederhana', '2023-05-16 03:10:19'),
(200, '<b>IsWah</b> Melakukan Tambah KJT T', '2023-05-16 03:40:12'),
(201, '<b>IsWah</b> Melakukan Tambah KJT T', '2023-05-16 03:43:50'),
(202, '<b>IsWah</b> Melakukan Tambah KJT T', '2023-05-16 03:44:44'),
(203, '<b>IsWah</b> Melakukan Tambah KJT T', '2023-05-16 03:51:19'),
(204, '<b>IsWah</b> Melakukan Update KJT T', '2023-05-16 03:53:00'),
(205, '<b>IsWah</b> Melakukan Tambah KJT T', '2023-05-16 03:54:51'),
(206, '<b>IsWah</b> Melakukan Update KJT T', '2023-05-16 03:55:06'),
(207, '<b>IsWah</b> Melakukan Tambah KJA T', '2023-05-16 05:32:23'),
(208, '<b>IsWah</b> Melakukan Tambah KJA T', '2023-05-16 05:33:27'),
(209, '<b>IsWah</b> Melakukan Tambah KJA T', '2023-05-16 06:51:48'),
(210, '<b>IsWah</b> Melakukan Tambah KJA T', '2023-05-16 06:52:16'),
(211, '<b>IsWah</b> Melakukan Update KJA T', '2023-05-16 06:53:21'),
(212, '<b>IsWah</b> Melakukan Tambah KJA T', '2023-05-17 02:19:20'),
(213, '<b>IsWah</b> Melakukan Tambah KJA T', '2023-05-17 02:19:52'),
(214, '<b>IsWah</b> Melakukan Update KJA T', '2023-05-17 02:20:07'),
(215, '<b>IsWah</b> Melakukan Tambah RL', '2023-05-17 02:34:33'),
(216, '<b>IsWah</b> Melakukan Update RL', '2023-05-17 02:40:48'),
(217, '<b>IsWah</b> Melakukan Tambah RL', '2023-05-18 10:03:29'),
(218, '<b>IsWah</b> Melakukan Tambah KJAL', '2023-05-19 02:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

DROP TABLE IF EXISTS `tbl_site`;
CREATE TABLE IF NOT EXISTS `tbl_site` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(100) DEFAULT NULL,
  `site_title` varchar(200) DEFAULT NULL,
  `site_description` text,
  `site_favicon` varchar(50) DEFAULT NULL,
  `site_logo_header` varchar(50) DEFAULT NULL,
  `site_logo_footer` varchar(50) DEFAULT NULL,
  `site_logo_big` varchar(50) DEFAULT NULL,
  `site_facebook` varchar(150) DEFAULT NULL,
  `site_twitter` varchar(150) DEFAULT NULL,
  `site_instagram` varchar(150) DEFAULT NULL,
  `site_youtube` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`site_id`, `site_name`, `site_title`, `site_description`, `site_favicon`, `site_logo_header`, `site_logo_footer`, `site_logo_big`, `site_facebook`, `site_twitter`, `site_instagram`, `site_youtube`) VALUES
(1, 'Admin Portal', 'Medan Test Center for Japanese Language NAT-TEST', 'Medan Test Center for Japanese Language NAT - TEST', 'nat-tes1.webp', 'Untitled-11.png', 'favicon.png', 'bg211.png', 'https://www.facebook.com/keeki/', 'https://twitter.com/keeki/', 'https://www.instagram.com/keeki/', 'https://www.youtube.com/c/keeki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `user_atasan` varchar(10) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT '1',
  `user_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_atasan`, `user_status`, `user_photo`) VALUES
(1, 'IsWah', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '', '1', '6fb7c763bc537efdd9d923e3b3f42393.png'),
(2, 'Staff Eksekutif', 'staff@eksekutif', '698d51a19d8a121ce581499d7b701668', '3', '3', '1', '0455c308a1c9922f734fd2d977b34fe8.webp'),
(3, 'Staff Marketing', 'staff@marketing', '698d51a19d8a121ce581499d7b701668', '3', '2', '1', '8cf49c4c37f819e7cb3a1fbdb82955a2.webp'),
(5, 'Staff Radiologi', 'staff@radiologi', '698d51a19d8a121ce581499d7b701668', '3', '1', '1', '7b721343224db5f97d39ca8d4e0a607d.png'),
(6, 'Staff Farmasi', 'staff@farmasi', '698d51a19d8a121ce581499d7b701668', '3', '1', '1', '251c80e09c866fff9188629a1c9c860d.jpeg'),
(7, 'Staff Lab', 'staff@lab', '698d51a19d8a121ce581499d7b701668', '3', '1', '1', 'user_blank.webp'),
(8, 'Manajer 11', 'manajer@1', 'b0baee9d279d34fa1dfd71aadb908c3f', '4', '1', '1', '5c225bdc57f09fa389b797488d9558c1.png'),
(9, 'Direktur', 'direktur@provita', '698d51a19d8a121ce581499d7b701668', '5', '0', '1', '359494e0352d1915ece70f71784abbe6.jpg'),
(10, 'Manajer 2', 'manajer@2', '698d51a19d8a121ce581499d7b701668', '4', '2', '1', 'user_blank.webp'),
(11, 'Manajer 3', 'manajer@3', '698d51a19d8a121ce581499d7b701668', '4', '3', '1', 'user_blank.webp'),
(12, 'Manajer 4', 'manajer@4', '698d51a19d8a121ce581499d7b701668', '4', '4', '1', 'user_blank.webp'),
(13, 'Manajer 5', 'isnanwahyudi4@gmail.com', '698d51a19d8a121ce581499d7b701668', '4', '6', '1', 'user_blank.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bagian`
--

DROP TABLE IF EXISTS `tb_bagian`;
CREATE TABLE IF NOT EXISTS `tb_bagian` (
  `id_bagian` int(11) NOT NULL AUTO_INCREMENT,
  `namabagian` varchar(25) NOT NULL,
  PRIMARY KEY (`id_bagian`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `namabagian`) VALUES
(1, 'LAB'),
(2, 'FARMASI'),
(3, 'RADIOLOGI'),
(4, 'JANG UM'),
(5, 'PANTRY');

-- --------------------------------------------------------

--
-- Table structure for table `tb_belanja`
--

DROP TABLE IF EXISTS `tb_belanja`;
CREATE TABLE IF NOT EXISTS `tb_belanja` (
  `id_belanja` int(11) NOT NULL AUTO_INCREMENT,
  `namabelanja` varchar(255) NOT NULL,
  `biaya` int(11) NOT NULL,
  `tgl_belanja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_pettycash` int(11) NOT NULL,
  PRIMARY KEY (`id_belanja`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_belanja`
--

INSERT INTO `tb_belanja` (`id_belanja`, `namabelanja`, `biaya`, `tgl_belanja`, `id_user`, `id_pettycash`) VALUES
(5, 'Kertas HVS 1 Rim', 100000, '2023-03-03 06:31:57', 2, 10),
(6, 'Print Laporan Bulanan', 100000, '2023-03-03 07:39:21', 2, 10),
(7, 'Tes', 150000, '2023-03-03 08:17:34', 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisbudidaya`
--

DROP TABLE IF EXISTS `tb_jenisbudidaya`;
CREATE TABLE IF NOT EXISTS `tb_jenisbudidaya` (
  `id_jenisbudidaya` int(11) NOT NULL AUTO_INCREMENT,
  `namajenisbudidaya` text NOT NULL,
  PRIMARY KEY (`id_jenisbudidaya`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenisbudidaya`
--

INSERT INTO `tb_jenisbudidaya` (`id_jenisbudidaya`, `namajenisbudidaya`) VALUES
(3, 'Ikan Lele');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisikan`
--

DROP TABLE IF EXISTS `tb_jenisikan`;
CREATE TABLE IF NOT EXISTS `tb_jenisikan` (
  `id_jenisikan` int(11) NOT NULL AUTO_INCREMENT,
  `namajenisikan` text NOT NULL,
  PRIMARY KEY (`id_jenisikan`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenisikan`
--

INSERT INTO `tb_jenisikan` (`id_jenisikan`, `namajenisikan`) VALUES
(2, 'Hiu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskolam`
--

DROP TABLE IF EXISTS `tb_jeniskolam`;
CREATE TABLE IF NOT EXISTS `tb_jeniskolam` (
  `id_jeniskolam` int(11) NOT NULL AUTO_INCREMENT,
  `namajeniskolam` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jeniskolam`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskolam`
--

INSERT INTO `tb_jeniskolam` (`id_jeniskolam`, `namajeniskolam`) VALUES
(1, 'Manajer'),
(2, 'Manajer Marketing'),
(3, 'Manajer Eksekutif'),
(4, 'Manajer Jang Umum'),
(6, 'Manajer Mutu'),
(13, 'sss2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskomoditas`
--

DROP TABLE IF EXISTS `tb_jeniskomoditas`;
CREATE TABLE IF NOT EXISTS `tb_jeniskomoditas` (
  `id_jeniskomoditas` int(11) NOT NULL AUTO_INCREMENT,
  `namajeniskomoditas` text NOT NULL,
  PRIMARY KEY (`id_jeniskomoditas`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskomoditas`
--

INSERT INTO `tb_jeniskomoditas` (`id_jeniskomoditas`, `namajeniskomoditas`) VALUES
(2, 'Komoditas1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat`
--

DROP TABLE IF EXISTS `tb_kat`;
CREATE TABLE IF NOT EXISTS `tb_kat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jenis_kolam` int(11) NOT NULL,
  `jml_kolam` int(11) NOT NULL,
  `uk_kolam` double NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_katpp`
--

DROP TABLE IF EXISTS `tb_katpp`;
CREATE TABLE IF NOT EXISTS `tb_katpp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kat` int(11) NOT NULL,
  `jan` double DEFAULT NULL,
  `feb` double DEFAULT NULL,
  `mar` double DEFAULT NULL,
  `apr` double DEFAULT NULL,
  `mei` double DEFAULT NULL,
  `jun` double DEFAULT NULL,
  `jul` double DEFAULT NULL,
  `agu` double DEFAULT NULL,
  `sep` double DEFAULT NULL,
  `okt` double DEFAULT NULL,
  `nov` double DEFAULT NULL,
  `des` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjal`
--

DROP TABLE IF EXISTS `tb_kjal`;
CREATE TABLE IF NOT EXISTS `tb_kjal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_unit` int(11) NOT NULL,
  `jml_petak` int(11) NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjalpp`
--

DROP TABLE IF EXISTS `tb_kjalpp`;
CREATE TABLE IF NOT EXISTS `tb_kjalpp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kjal` int(11) NOT NULL,
  `jan` double DEFAULT NULL,
  `feb` double DEFAULT NULL,
  `mar` double DEFAULT NULL,
  `apr` double DEFAULT NULL,
  `mei` double DEFAULT NULL,
  `jun` double DEFAULT NULL,
  `jul` double DEFAULT NULL,
  `agu` double DEFAULT NULL,
  `sep` double DEFAULT NULL,
  `okt` double DEFAULT NULL,
  `nov` double DEFAULT NULL,
  `des` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjat`
--

DROP TABLE IF EXISTS `tb_kjat`;
CREATE TABLE IF NOT EXISTS `tb_kjat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_unit` int(11) NOT NULL,
  `jml_petak` int(11) NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjatpp`
--

DROP TABLE IF EXISTS `tb_kjatpp`;
CREATE TABLE IF NOT EXISTS `tb_kjatpp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kjat` int(11) NOT NULL,
  `jan` double DEFAULT NULL,
  `feb` double DEFAULT NULL,
  `mar` double DEFAULT NULL,
  `apr` double DEFAULT NULL,
  `mei` double DEFAULT NULL,
  `jun` double DEFAULT NULL,
  `jul` double DEFAULT NULL,
  `agu` double DEFAULT NULL,
  `sep` double DEFAULT NULL,
  `okt` double DEFAULT NULL,
  `nov` double DEFAULT NULL,
  `des` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjtt`
--

DROP TABLE IF EXISTS `tb_kjtt`;
CREATE TABLE IF NOT EXISTS `tb_kjtt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_unit` int(11) NOT NULL,
  `jml_petak` int(11) NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kjtt`
--

INSERT INTO `tb_kjtt` (`id`, `lokasi`, `kampung`, `ketua`, `jml_anggota`, `jml_unit`, `jml_petak`, `potensi`, `existing`, `jenis_komoditas`, `jml_ekor`) VALUES
(6, '91.11', '91.11.03.2003', '2', 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjttpp`
--

DROP TABLE IF EXISTS `tb_kjttpp`;
CREATE TABLE IF NOT EXISTS `tb_kjttpp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kjtt` int(11) NOT NULL,
  `jan` double DEFAULT NULL,
  `feb` double DEFAULT NULL,
  `mar` double DEFAULT NULL,
  `apr` double DEFAULT NULL,
  `mei` double DEFAULT NULL,
  `jun` double DEFAULT NULL,
  `jul` double DEFAULT NULL,
  `agu` double DEFAULT NULL,
  `sep` double DEFAULT NULL,
  `okt` double DEFAULT NULL,
  `nov` double DEFAULT NULL,
  `des` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kjttpp`
--

INSERT INTO `tb_kjttpp` (`id`, `id_kjtt`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`) VALUES
(5, 6, 22, 2, 2, 2, 2, 2, 2, 2, 22, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mnp`
--

DROP TABLE IF EXISTS `tb_mnp`;
CREATE TABLE IF NOT EXISTS `tb_mnp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_kolam` int(11) NOT NULL,
  `uk_kolam` double NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mnp`
--

INSERT INTO `tb_mnp` (`id`, `lokasi`, `kampung`, `ketua`, `jml_anggota`, `jml_kolam`, `uk_kolam`, `potensi`, `existing`, `jenis_komoditas`, `jml_ekor`) VALUES
(4, '91.11', '91.11.01.2002', '4', 4, 4, 3, 4, 4, 2, 1),
(3, '91.11', '91.11.02.2002', '4', 4, 4, 4, 4, 4, 2, 45),
(5, '91.11', '91.11.04.2002', '92', 9, 9, 9, 9, 9, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mnppp`
--

DROP TABLE IF EXISTS `tb_mnppp`;
CREATE TABLE IF NOT EXISTS `tb_mnppp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mnp` int(11) NOT NULL,
  `jan` double DEFAULT NULL,
  `feb` double DEFAULT NULL,
  `mar` double DEFAULT NULL,
  `apr` double DEFAULT NULL,
  `mei` double DEFAULT NULL,
  `jun` double DEFAULT NULL,
  `jul` double DEFAULT NULL,
  `agu` double DEFAULT NULL,
  `sep` double DEFAULT NULL,
  `okt` double DEFAULT NULL,
  `nov` double DEFAULT NULL,
  `des` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mnppp`
--

INSERT INTO `tb_mnppp` (`id`, `id_mnp`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`) VALUES
(2, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 45),
(3, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 5, 9, 9, 9, 9, 9, 9, 99, 9, 9, 9, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembenihan`
--

DROP TABLE IF EXISTS `tb_pembenihan`;
CREATE TABLE IF NOT EXISTS `tb_pembenihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(50) NOT NULL,
  `bulan` int(11) NOT NULL,
  `id_budidaya` int(11) NOT NULL,
  `id_jenisikan` int(11) NOT NULL,
  `produksi` bigint(20) NOT NULL,
  `harga` double NOT NULL,
  `luas_lahan` double NOT NULL,
  `luas_wadah` double NOT NULL,
  `jumlah_upr_pembudidayaan` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembesaran`
--

DROP TABLE IF EXISTS `tb_pembesaran`;
CREATE TABLE IF NOT EXISTS `tb_pembesaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(50) NOT NULL,
  `bulan` int(11) NOT NULL,
  `id_budidaya` int(11) NOT NULL,
  `id_jenisikan` int(11) NOT NULL,
  `produksi` bigint(20) NOT NULL,
  `harga` double NOT NULL,
  `luas_lahan` double NOT NULL,
  `luas_wadah` double NOT NULL,
  `jumlah_rtp_pembesaran` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pettycash`
--

DROP TABLE IF EXISTS `tb_pettycash`;
CREATE TABLE IF NOT EXISTS `tb_pettycash` (
  `id_pettycash` int(11) NOT NULL AUTO_INCREMENT,
  `ket_pettycash` text,
  `biaya_pettycash` double DEFAULT NULL,
  `tgl_pettycash` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_pettycash_manajer` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_pettycash_direktur` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `catatan_manajer` text,
  `catatan_direktur` text,
  `id_user_pettycash` int(11) DEFAULT NULL,
  `id_user_manager` int(11) DEFAULT NULL,
  `id_bagian` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `imgbukti` varchar(255) DEFAULT NULL,
  `tgl_bonmerah` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_bonmerah_manajer` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_bonmerah_direktur` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `catatan_manajer_bonmerah` text NOT NULL,
  `catatan_direktur_bonmerah` text NOT NULL,
  `status_bonmerah` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pettycash`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pettycash`
--

INSERT INTO `tb_pettycash` (`id_pettycash`, `ket_pettycash`, `biaya_pettycash`, `tgl_pettycash`, `tgl_pettycash_manajer`, `tgl_pettycash_direktur`, `catatan_manajer`, `catatan_direktur`, `id_user_pettycash`, `id_user_manager`, `id_bagian`, `status`, `imgbukti`, `tgl_bonmerah`, `tgl_bonmerah_manajer`, `tgl_bonmerah_direktur`, `catatan_manajer_bonmerah`, `catatan_direktur_bonmerah`, `status_bonmerah`) VALUES
(15, 'Beli Kertas HVS', 150000, '2023-03-11 08:27:28', '2023-03-11 08:39:40', '2023-03-11 08:42:18', 'Okk', 'Lanjutkan!!!', 7, 1, 1, 'RILIS', 'fda2ea5ded93f75d988bc1093d4d0877.png', '2023-03-11 09:33:23', '2023-03-12 04:59:42', '2023-03-12 08:44:55', 'Okk1', 'Ok Rilis', 'RILIS'),
(16, 'Suntikan', 100000, '2023-03-11 08:27:51', '2023-03-11 08:39:33', '2023-03-11 08:42:53', 'Okk', 'Ditahan dulu', 7, 1, 1, 'NONRILIS', NULL, NULL, NULL, NULL, '', '', ''),
(17, 'Obat', 200000, '2023-03-11 08:30:30', '2023-03-11 08:39:20', '2023-03-11 08:42:05', 'Gas', 'Lanjutkan!!!', 6, 1, 2, 'RILIS', '505df7d8cb1c88e6d9fa8facca90e197.png', '2023-03-12 05:26:35', '2023-03-12 05:29:33', NULL, 'Okk', '', 'DISETUJUI'),
(18, 'Seragam', 150000, '2023-03-11 08:30:56', '2023-03-11 08:39:03', NULL, 'Seragam Apa ya?', NULL, 6, 1, 2, 'DITOLAK', NULL, NULL, NULL, NULL, '', '', ''),
(19, 'Tes Apapun', 500000, '2023-03-11 08:32:12', '2023-03-11 08:35:51', NULL, 'Dana Terlalu Besar', NULL, 3, 2, 4, 'DITOLAK', NULL, NULL, NULL, NULL, '', '', ''),
(20, 'Hem', 275000, '2023-03-11 08:35:02', '2023-03-11 08:36:24', '2023-03-11 08:41:55', 'Okk', 'Lanjutkan!!!', 3, 2, 5, 'RILIS', 'b10f237d01bc509cf5e49f98a9487468.png', '2023-03-11 14:52:34', NULL, NULL, '', '', 'PENGAJUAN'),
(21, 'Tes', 123000, '2023-03-11 09:27:18', '2023-03-12 05:52:17', NULL, 'Lanjutkan', NULL, 7, 1, 1, 'DISETUJUI', NULL, NULL, NULL, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reimburse`
--

DROP TABLE IF EXISTS `tb_reimburse`;
CREATE TABLE IF NOT EXISTS `tb_reimburse` (
  `id_reimburse` int(11) NOT NULL AUTO_INCREMENT,
  `ket_reimburse` text,
  `biaya_reimburse` double DEFAULT NULL,
  `tgl_reimburse` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_reimburse_manajer` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_reimburse_direktur` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `catatan_manajer` text,
  `catatan_direktur` text,
  `id_user_reimburse` int(11) DEFAULT NULL,
  `id_user_manager` int(11) DEFAULT NULL,
  `id_bagian` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `imgbukti` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_reimburse`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rl`
--

DROP TABLE IF EXISTS `tb_rl`;
CREATE TABLE IF NOT EXISTS `tb_rl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_unit` int(11) NOT NULL,
  `jml_longline` int(11) NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_bibit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rl`
--

INSERT INTO `tb_rl` (`id`, `lokasi`, `kampung`, `ketua`, `jml_anggota`, `jml_unit`, `jml_longline`, `potensi`, `existing`, `jenis_komoditas`, `jml_bibit`) VALUES
(2, '91.11', '91.11.02.2002', '1', 1, 1, 1, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rlpp`
--

DROP TABLE IF EXISTS `tb_rlpp`;
CREATE TABLE IF NOT EXISTS `tb_rlpp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rl` int(11) NOT NULL,
  `jan` double DEFAULT NULL,
  `feb` double DEFAULT NULL,
  `mar` double DEFAULT NULL,
  `apr` double DEFAULT NULL,
  `mei` double DEFAULT NULL,
  `jun` double DEFAULT NULL,
  `jul` double DEFAULT NULL,
  `agu` double DEFAULT NULL,
  `sep` double DEFAULT NULL,
  `okt` double DEFAULT NULL,
  `nov` double DEFAULT NULL,
  `des` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rlpp`
--

INSERT INTO `tb_rlpp` (`id`, `id_rl`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`) VALUES
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

DROP TABLE IF EXISTS `tb_role`;
CREATE TABLE IF NOT EXISTS `tb_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `namarole` varchar(25) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `namarole`) VALUES
(1, 'Admin'),
(2, 'Vendor'),
(3, 'Pegawai/Karyawan'),
(4, 'Manajer'),
(5, 'Direktur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ts`
--

DROP TABLE IF EXISTS `tb_ts`;
CREATE TABLE IF NOT EXISTS `tb_ts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_tambak` int(11) NOT NULL,
  `uk_tambak` double NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ts`
--

INSERT INTO `tb_ts` (`id`, `lokasi`, `kampung`, `ketua`, `jml_anggota`, `jml_tambak`, `uk_tambak`, `potensi`, `existing`, `jenis_komoditas`, `jml_ekor`) VALUES
(7, '91.11', '91.11.03.2003', '1', 1, 1, 1, 1, 1, 2, 1),
(4, '91.11', '91.11.01.2001', 'A', 1, 1, 1, 1, 1, 2, 1),
(5, '91.11', '91.11.01.2001', '1', 1, 1, 1, 1, 1, 2, 1),
(6, '91.11', '91.11.06.2005', '2', 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tspp`
--

DROP TABLE IF EXISTS `tb_tspp`;
CREATE TABLE IF NOT EXISTS `tb_tspp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ts` int(11) NOT NULL,
  `jan` double DEFAULT NULL,
  `feb` double DEFAULT NULL,
  `mar` double DEFAULT NULL,
  `apr` double DEFAULT NULL,
  `mei` double DEFAULT NULL,
  `jun` double DEFAULT NULL,
  `jul` double DEFAULT NULL,
  `agu` double DEFAULT NULL,
  `sep` double DEFAULT NULL,
  `okt` double DEFAULT NULL,
  `nov` double DEFAULT NULL,
  `des` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tspp`
--

INSERT INTO `tb_tspp` (`id`, `id_ts`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`) VALUES
(7, 7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 4, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 6, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

DROP TABLE IF EXISTS `tokens`;
CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(1, '2718f9264dc5ab8a9438efcbaeb69c', 13, '2023-03-05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
