-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2023 at 03:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

CREATE TABLE `detail_website` (
  `tahun` varchar(4) DEFAULT NULL,
  `detail_website_id` int(11) NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `site_deskripsi` text DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `nama_kontak` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `alamat_universitas` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_website`
--

INSERT INTO `detail_website` (`tahun`, `detail_website_id`, `site_title`, `email`, `site_deskripsi`, `notelp`, `nama_kontak`, `facebook`, `instagram`, `youtube`, `telegram`, `alamat_universitas`, `images`, `site_favicon`) VALUES
('2023', 1, 'SIPkan', 'provita@gmail.com', 'Sistem Informasi Perikanan Kab Keerom', '62812345678', 'Admin SIPkan', 'https://www.facebook.com/link_anda/', 'https://www.instagram.com/link_anda/', 'https://www.youtube.com/c/link_anda', 'https://t.me/link_anda', 'Keerom, Papua', '1ac12671226fc2218b7a75a30059ebee.jpeg', 'c8329678e30eb62c6f3760072f1eb003.png');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `kodelokasi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL
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

CREATE TABLE `tbl_home` (
  `home_id` int(11) NOT NULL,
  `home_caption_1` varchar(255) DEFAULT NULL,
  `home_caption_2` longtext DEFAULT NULL,
  `home_bg_heading` varchar(50) DEFAULT NULL,
  `home_bg_heading2` varchar(50) DEFAULT NULL,
  `home_bg_heading3` varchar(50) DEFAULT NULL,
  `home_bg_testimonial` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_caption_1`, `home_caption_2`, `home_bg_heading`, `home_bg_heading2`, `home_bg_heading3`, `home_bg_testimonial`) VALUES
(1, 'Japanese Language NAT-TEST', 'The Japanese Language NAT-TEST is an examination that measures the Japanese language ability of students who are not native Japanese speakers.The tests are separated by difficulty (five levels) and general ability is measured in three categories: Grammar/Vocabulary, Listening and Reading Comprehension. The format of the exam and the types of questions are equivalent to those that appear on the Japanese-Language Proficiency Test (JLPT).', 'portfolio-details-1.jpg', 'portfolio-details-2.jpg', 'portfolio-details-3.jpg', 'nat-tes4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `id` int(11) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `tgl_log` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(218, '<b>IsWah</b> Melakukan Tambah KJAL', '2023-05-19 02:50:16'),
(219, '<b>IsWah</b> Melakukan Edit jenisbudidaya <b>Pembenihan Air Tawar</b>', '2023-06-05 11:21:35'),
(220, '<b>IsWah</b> Melakukan Tambah jenisbudidaya <b>Pembenihan Air Laut</b>', '2023-06-05 11:21:44'),
(221, '<b>IsWah</b> Melakukan Edit jenisikan <b>Nila</b>', '2023-06-05 11:22:12'),
(222, '<b>IsWah</b> Melakukan Tambah jenisikan <b>Mas</b>', '2023-06-05 11:22:21'),
(223, '<b>IsWah</b> Melakukan Tambah jenisikan <b>Lele</b>', '2023-06-05 11:22:27'),
(224, '<b>IsWah</b> Melakukan Tambah Pembenihan', '2023-06-05 16:40:48'),
(225, '<b>IsWah</b> Melakukan Tambah Pembenihan', '2023-06-05 16:42:38'),
(226, '<b>IsWah</b> Melakukan Tambah Tambak Sederhana', '2023-06-06 03:03:26'),
(227, '<b>IsWah</b> Melakukan Update Tambak Sederhana', '2023-06-06 05:53:28'),
(228, '<b>IsWah</b> Melakukan Update Pembenihan', '2023-06-06 09:33:12'),
(229, '<b>IsWah</b> Melakukan Update Pembenihan', '2023-06-06 09:33:49'),
(230, '<b>IsWah</b> Melakukan Update Pembenihan', '2023-06-06 09:34:00'),
(231, '<b>IsWah</b> Melakukan Update Pembenihan', '2023-06-06 09:34:09'),
(232, '<b>IsWah</b> Melakukan Tambah Pembenihan', '2023-06-06 11:54:36'),
(233, '<b>IsWah</b> Melakukan Tambah Pembenihan', '2023-06-06 13:06:02'),
(234, '<b>IsWah</b> Melakukan Edit jeniskolam <b>Kolam Tanah</b>', '2023-06-06 13:18:37'),
(235, '<b>IsWah</b> Melakukan Edit jeniskolam <b>Kolam Terpal</b>', '2023-06-06 13:18:59'),
(236, '<b>IsWah</b> Melakukan Edit jeniskolam <b>Kolam Beton</b>', '2023-06-06 13:19:15'),
(237, '<b>IsWah</b> Melakukan Edit jeniskolam <b>Bioflok</b>', '2023-06-06 13:19:30'),
(238, '<b>IsWah</b> Melakukan Tambah Pembenihan', '2023-06-06 14:43:32'),
(239, '<b>IsWah</b> Melakukan Tambah pembesaran', '2023-06-06 15:10:46'),
(240, '<b>IsWah</b> Melakukan Update pembesaran', '2023-06-06 15:10:57'),
(241, '<b>IsWah</b> Melakukan Tambah pembesaran', '2023-06-06 15:12:29'),
(242, '<b>IsWah</b> Melakukan Tambah pembesaran', '2023-06-06 15:57:58'),
(243, '<b>IsWah</b> Melakukan Tambah pembesaran', '2023-06-06 16:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE `tbl_site` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `site_title` varchar(200) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `site_favicon` varchar(50) DEFAULT NULL,
  `site_logo_header` varchar(50) DEFAULT NULL,
  `site_logo_footer` varchar(50) DEFAULT NULL,
  `site_logo_big` varchar(50) DEFAULT NULL,
  `site_facebook` varchar(150) DEFAULT NULL,
  `site_twitter` varchar(150) DEFAULT NULL,
  `site_instagram` varchar(150) DEFAULT NULL,
  `site_youtube` varchar(255) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`site_id`, `site_name`, `site_title`, `site_description`, `site_favicon`, `site_logo_header`, `site_logo_footer`, `site_logo_big`, `site_facebook`, `site_twitter`, `site_instagram`, `site_youtube`, `tahun`) VALUES
(1, 'Admin Portal', 'Medan Test Center for Japanese Language NAT-TEST', 'Medan Test Center for Japanese Language NAT - TEST', 'nat-tes1.webp', 'Untitled-11.png', 'favicon.png', 'bg211.png', 'https://www.facebook.com/keeki/', 'https://twitter.com/keeki/', 'https://www.instagram.com/keeki/', 'https://www.youtube.com/c/keeki', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `user_atasan` varchar(10) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT '1',
  `user_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tb_jenisbudidaya`
--

CREATE TABLE `tb_jenisbudidaya` (
  `id_jenisbudidaya` int(11) NOT NULL,
  `namajenisbudidaya` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenisbudidaya`
--

INSERT INTO `tb_jenisbudidaya` (`id_jenisbudidaya`, `namajenisbudidaya`) VALUES
(3, 'Pembenihan Air Tawar'),
(4, 'Pembenihan Air Laut');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisikan`
--

CREATE TABLE `tb_jenisikan` (
  `id_jenisikan` int(11) NOT NULL,
  `namajenisikan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenisikan`
--

INSERT INTO `tb_jenisikan` (`id_jenisikan`, `namajenisikan`) VALUES
(2, 'Nila'),
(4, 'Mas'),
(5, 'Lele');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskolam`
--

CREATE TABLE `tb_jeniskolam` (
  `id_jeniskolam` int(11) NOT NULL,
  `namajeniskolam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskolam`
--

INSERT INTO `tb_jeniskolam` (`id_jeniskolam`, `namajeniskolam`) VALUES
(1, 'Kolam Tanah'),
(2, 'Kolam Terpal'),
(3, 'Kolam Beton'),
(4, 'Bioflok');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskomoditas`
--

CREATE TABLE `tb_jeniskomoditas` (
  `id_jeniskomoditas` int(11) NOT NULL,
  `namajeniskomoditas` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskomoditas`
--

INSERT INTO `tb_jeniskomoditas` (`id_jeniskomoditas`, `namajeniskomoditas`) VALUES
(2, 'Komoditas1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat`
--

CREATE TABLE `tb_kat` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
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
  `jml_ekor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_katpp`
--

CREATE TABLE `tb_katpp` (
  `id` int(11) NOT NULL,
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
  `des` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjal`
--

CREATE TABLE `tb_kjal` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_unit` int(11) NOT NULL,
  `jml_petak` int(11) NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjalpp`
--

CREATE TABLE `tb_kjalpp` (
  `id` int(11) NOT NULL,
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
  `des` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjat`
--

CREATE TABLE `tb_kjat` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_unit` int(11) NOT NULL,
  `jml_petak` int(11) NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjatpp`
--

CREATE TABLE `tb_kjatpp` (
  `id` int(11) NOT NULL,
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
  `des` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjtt`
--

CREATE TABLE `tb_kjtt` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_unit` int(11) NOT NULL,
  `jml_petak` int(11) NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kjtt`
--

INSERT INTO `tb_kjtt` (`id`, `tahun`, `lokasi`, `kampung`, `ketua`, `jml_anggota`, `jml_unit`, `jml_petak`, `potensi`, `existing`, `jenis_komoditas`, `jml_ekor`) VALUES
(6, NULL, '91.11', '91.11.03.2003', '2', 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kjttpp`
--

CREATE TABLE `tb_kjttpp` (
  `id` int(11) NOT NULL,
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
  `des` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kjttpp`
--

INSERT INTO `tb_kjttpp` (`id`, `id_kjtt`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`) VALUES
(5, 6, 22, 2, 2, 2, 2, 2, 2, 2, 22, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mnp`
--

CREATE TABLE `tb_mnp` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_kolam` int(11) NOT NULL,
  `uk_kolam` double NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mnp`
--

INSERT INTO `tb_mnp` (`id`, `tahun`, `lokasi`, `kampung`, `ketua`, `jml_anggota`, `jml_kolam`, `uk_kolam`, `potensi`, `existing`, `jenis_komoditas`, `jml_ekor`) VALUES
(4, NULL, '91.11', '91.11.01.2002', '4', 4, 4, 3, 4, 4, 2, 1),
(3, NULL, '91.11', '91.11.02.2002', '4', 4, 4, 4, 4, 4, 2, 45),
(5, NULL, '91.11', '91.11.04.2002', '92', 9, 9, 9, 9, 9, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mnppp`
--

CREATE TABLE `tb_mnppp` (
  `id` int(11) NOT NULL,
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
  `des` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `tb_pembenihan` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `lokasi` varchar(50) NOT NULL,
  `bulan` int(11) NOT NULL,
  `id_budidaya` int(11) NOT NULL,
  `id_jenisikan` int(11) NOT NULL,
  `produksi` bigint(20) NOT NULL,
  `harga` double NOT NULL,
  `nilai_produksi` double DEFAULT NULL,
  `luas_lahan` double NOT NULL,
  `luas_wadah` double NOT NULL,
  `jumlah_upr_pembudidayaan` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembenihan`
--

INSERT INTO `tb_pembenihan` (`id`, `tahun`, `lokasi`, `bulan`, `id_budidaya`, `id_jenisikan`, `produksi`, `harga`, `nilai_produksi`, `luas_lahan`, `luas_wadah`, `jumlah_upr_pembudidayaan`) VALUES
(1, NULL, '91.11', 1, 3, 4, 11, 100, 50, 10, 100, 5000),
(3, NULL, '91.11', 1, 3, 5, 123, 30000, 123, 10, 1234, 4321),
(4, '2023', '91.11', 2, 3, 2, 100, 15000, 150000, 10, 25, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembesaran`
--

CREATE TABLE `tb_pembesaran` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `lokasi` varchar(50) NOT NULL,
  `bulan` int(11) NOT NULL,
  `id_budidaya` int(11) NOT NULL,
  `id_jenisikan` int(11) NOT NULL,
  `produksi` bigint(20) NOT NULL,
  `harga` double NOT NULL,
  `nilai_produksi` double DEFAULT NULL,
  `luas_lahan` double NOT NULL,
  `luas_wadah` double NOT NULL,
  `jumlah_rtp_pembesaran` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id` int(11) NOT NULL,
  `periode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id`, `periode`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rl`
--

CREATE TABLE `tb_rl` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_unit` int(11) NOT NULL,
  `jml_longline` int(11) NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_bibit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rl`
--

INSERT INTO `tb_rl` (`id`, `tahun`, `lokasi`, `kampung`, `ketua`, `jml_anggota`, `jml_unit`, `jml_longline`, `potensi`, `existing`, `jenis_komoditas`, `jml_bibit`) VALUES
(2, NULL, '91.11', '91.11.02.2002', '1', 1, 1, 1, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rlpp`
--

CREATE TABLE `tb_rlpp` (
  `id` int(11) NOT NULL,
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
  `des` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `namarole` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `tb_ts` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `ketua` text NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `jml_tambak` int(11) NOT NULL,
  `uk_tambak` double NOT NULL,
  `potensi` double NOT NULL,
  `existing` double NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jml_ekor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ts`
--

INSERT INTO `tb_ts` (`id`, `tahun`, `lokasi`, `kampung`, `ketua`, `jml_anggota`, `jml_tambak`, `uk_tambak`, `potensi`, `existing`, `jenis_komoditas`, `jml_ekor`) VALUES
(7, NULL, '91.11', '91.11.03.2003', '1', 1, 1, 1, 1, 1, 2, 1),
(4, NULL, '91.11', '91.11.01.2001', 'A', 1, 1, 1, 1, 1, 2, 1),
(5, NULL, '91.11', '91.11.01.2001', '1', 1, 1, 1, 1, 1, 2, 1),
(6, NULL, '91.11', '91.11.06.2005', '2', 2, 2, 2, 2, 2, 2, 2),
(8, NULL, '91.11', '91.11.01.2001', 'qw', 12, 1212, 212, 123, 321, 2, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tspp`
--

CREATE TABLE `tb_tspp` (
  `id` int(11) NOT NULL,
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
  `des` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tspp`
--

INSERT INTO `tb_tspp` (`id`, `id_ts`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`) VALUES
(7, 7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 4, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 6, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(8, 8, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(1, '2718f9264dc5ab8a9438efcbaeb69c', 13, '2023-03-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_website`
--
ALTER TABLE `detail_website`
  ADD PRIMARY KEY (`detail_website_id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`kodelokasi`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_site`
--
ALTER TABLE `tbl_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_jenisbudidaya`
--
ALTER TABLE `tb_jenisbudidaya`
  ADD PRIMARY KEY (`id_jenisbudidaya`);

--
-- Indexes for table `tb_jenisikan`
--
ALTER TABLE `tb_jenisikan`
  ADD PRIMARY KEY (`id_jenisikan`);

--
-- Indexes for table `tb_jeniskolam`
--
ALTER TABLE `tb_jeniskolam`
  ADD PRIMARY KEY (`id_jeniskolam`);

--
-- Indexes for table `tb_jeniskomoditas`
--
ALTER TABLE `tb_jeniskomoditas`
  ADD PRIMARY KEY (`id_jeniskomoditas`);

--
-- Indexes for table `tb_kat`
--
ALTER TABLE `tb_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_katpp`
--
ALTER TABLE `tb_katpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kjal`
--
ALTER TABLE `tb_kjal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kjalpp`
--
ALTER TABLE `tb_kjalpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kjat`
--
ALTER TABLE `tb_kjat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kjatpp`
--
ALTER TABLE `tb_kjatpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kjtt`
--
ALTER TABLE `tb_kjtt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kjttpp`
--
ALTER TABLE `tb_kjttpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mnp`
--
ALTER TABLE `tb_mnp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mnppp`
--
ALTER TABLE `tb_mnppp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembenihan`
--
ALTER TABLE `tb_pembenihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembesaran`
--
ALTER TABLE `tb_pembesaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rl`
--
ALTER TABLE `tb_rl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rlpp`
--
ALTER TABLE `tb_rlpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_ts`
--
ALTER TABLE `tb_ts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tspp`
--
ALTER TABLE `tb_tspp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_website`
--
ALTER TABLE `detail_website`
  MODIFY `detail_website_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `tbl_site`
--
ALTER TABLE `tbl_site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_jenisbudidaya`
--
ALTER TABLE `tb_jenisbudidaya`
  MODIFY `id_jenisbudidaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jenisikan`
--
ALTER TABLE `tb_jenisikan`
  MODIFY `id_jenisikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jeniskolam`
--
ALTER TABLE `tb_jeniskolam`
  MODIFY `id_jeniskolam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_jeniskomoditas`
--
ALTER TABLE `tb_jeniskomoditas`
  MODIFY `id_jeniskomoditas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kat`
--
ALTER TABLE `tb_kat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_katpp`
--
ALTER TABLE `tb_katpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kjal`
--
ALTER TABLE `tb_kjal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kjalpp`
--
ALTER TABLE `tb_kjalpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kjat`
--
ALTER TABLE `tb_kjat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kjatpp`
--
ALTER TABLE `tb_kjatpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kjtt`
--
ALTER TABLE `tb_kjtt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kjttpp`
--
ALTER TABLE `tb_kjttpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mnp`
--
ALTER TABLE `tb_mnp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mnppp`
--
ALTER TABLE `tb_mnppp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pembenihan`
--
ALTER TABLE `tb_pembenihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pembesaran`
--
ALTER TABLE `tb_pembesaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_rl`
--
ALTER TABLE `tb_rl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rlpp`
--
ALTER TABLE `tb_rlpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_ts`
--
ALTER TABLE `tb_ts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_tspp`
--
ALTER TABLE `tb_tspp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
