-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2013 at 07:26 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpsbonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('40292033dfb67759969474eef0f7d699', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0', 1383610956, '');

-- --------------------------------------------------------

--
-- Table structure for table `master_aturan`
--

CREATE TABLE IF NOT EXISTS `master_aturan` (
  `id_aturan` int(5) NOT NULL AUTO_INCREMENT,
  `period` varchar(30) DEFAULT NULL,
  `aturan` text,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_aturan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `master_aturan`
--

INSERT INTO `master_aturan` (`id_aturan`, `period`, `aturan`, `status`) VALUES
(11, '2013/2014', 'Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan.', 'umum'),
(12, '2013/2014', 'Undang-Undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah sebagaimana telah beberapa kali diubah terakhir dengan Undang-Undang Nomor 12 Tahun 2008.', 'umum'),
(13, '2013/2014', 'Undang-Undang Nomor 29 Tahun 2007 tentang Pemerintahan Provinsi Daerah Khusus Ibukota Jakarta sebagai Ibukota Negara Kesatuan Republik Indonesia.', 'umum'),
(14, '2013/2014', 'Undang-Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan Perundang-undangan.', 'umum'),
(15, '2013/2014', 'Peraturan Pemerintah Nomor 19 Tahun 2005 tentang Standar Nasional Pendidikan.', 'umum'),
(16, '2013/2014', 'Peraturan Pemerintah Nomor 17 Tahun 2010 tentang Pengelolaan dan Penyelenggaraan Pendidikan sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 66 Tahun 2010 tentang Perubahan Atas Peraturan Pemerintah Nomor 17 Tahun 2010 tentang Pengelolaan dan Penyelenggaraan Pendidikan.', 'umum'),
(17, '2013/2014', 'Peraturan Menteri Pendidikan Nasional Nomor 34 Tahun 2006 tentang Pembinaan Prestasi Peserta Didik Yang Memiliki Potensi Kecerdasan dan/atau Bakat Istimewa.', 'umum'),
(18, '2013/2014', 'Peraturan Menteri Pendidikan Nasional Nomor 15 Tahun 2008 tentang Ujian Nasional Pendidikan Kesetaraan.', 'umum'),
(19, '2013/2014', 'Peraturan Menteri Pendidikan Nasional Nomor 70 Tahun 2009 tentang Pendidikan Inklusif Bagi Peserta Didik yang Memiliki Kelainan dan Memiliki Potensi Kecerdasan dan/atau Bakat\r\nIstimewa.', 'umum'),
(20, '2013/2014', 'Peraturan Menteri Pendidikan Nasional Nomor 78 Tahun 2009 tentang Penyelenggaraan Sekolah Bertaraf Internasional Pada Jenjang Pendidikan Dasar dan Menengah.', 'umum'),
(21, NULL, 'memiliki SKHUN SMP/SMPLB/MTs, DNUN Paket B atau SKYBS;', 'syarat'),
(22, NULL, 'berusia maksimal 21 (dua puluh satu) tahun pada hari pertama masuk sekolah.', 'syarat'),
(23, NULL, 'menyerahkan fotokopi Kartu Keluarga (KK) serta memperlihatkan KK asli.', 'syarat'),
(27, '2013/2014', 'test', 'umum'),
(28, '2013/2014', '1234567890-=', 'umum');

-- --------------------------------------------------------

--
-- Table structure for table `master_info`
--

CREATE TABLE IF NOT EXISTS `master_info` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `period` text NOT NULL,
  `info_beranda` text NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master_info`
--

INSERT INTO `master_info` (`id_info`, `period`, `info_beranda`) VALUES
(1, '2013/2014', 'Situs ini dipersiapkan sebagai pengganti pusat informasi dan pengolahan seleksi data siswa peserta PSB SMAN 1 Cisarua periode 2013/2014 secara online real time process. Informasi lengkap seputar pelaksanaan PSB akan di update di situs ini. Bagi anda calon peserta, harap membaca Aturan dan Prosedur pendaftaran dengan seksama sebelum melakukan proses pendaftaran. Demikian informasi ini dan terima kasih atas perhatian dan kerjasamanya.');

-- --------------------------------------------------------

--
-- Table structure for table `master_infojadwal`
--

CREATE TABLE IF NOT EXISTS `master_infojadwal` (
  `id_jadwal` int(5) NOT NULL AUTO_INCREMENT,
  `period` varchar(20) DEFAULT NULL,
  `kegiatan` varchar(50) DEFAULT NULL,
  `tanggal` varchar(30) DEFAULT NULL,
  `tempat` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master_infojadwal`
--

INSERT INTO `master_infojadwal` (`id_jadwal`, `period`, `kegiatan`, `tanggal`, `tempat`) VALUES
(1, NULL, 'Pendaftaran On-line', '15 - 17 oktober 2013', 'internet (website)'),
(2, NULL, 'test seleksi', '25 - 23 oktober 2013', 'SMA Negeri Cisarua');

-- --------------------------------------------------------

--
-- Table structure for table `master_jadwaltest`
--

CREATE TABLE IF NOT EXISTS `master_jadwaltest` (
  `id_jadwaltest` int(5) NOT NULL AUTO_INCREMENT,
  `kode_pendaftar` int(5) NOT NULL,
  `waktu_test` date NOT NULL,
  `tempat_test` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jadwaltest`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master_jadwaltest`
--

INSERT INTO `master_jadwaltest` (`id_jadwaltest`, `kode_pendaftar`, `waktu_test`, `tempat_test`) VALUES
(1, 12345, '2013-10-25', 'ruangan 3 sman 1 cisarua');

-- --------------------------------------------------------

--
-- Table structure for table `master_nilai`
--

CREATE TABLE IF NOT EXISTS `master_nilai` (
  `id_nilai` int(20) NOT NULL AUTO_INCREMENT,
  `kode_pendaftar` int(20) NOT NULL,
  `nilai_test` double NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `master_nilai`
--

INSERT INTO `master_nilai` (`id_nilai`, `kode_pendaftar`, `nilai_test`, `status`) VALUES
(3, 87654, 90.5, '');

-- --------------------------------------------------------

--
-- Table structure for table `master_pendaftar`
--

CREATE TABLE IF NOT EXISTS `master_pendaftar` (
  `kode_pendaftar` int(5) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pihak_wali` varchar(20) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `alamat_ortu` varchar(200) NOT NULL,
  `agama_ortu` varchar(10) NOT NULL,
  `pilihan_1` varchar(50) NOT NULL,
  `pilihan_2` varchar(50) NOT NULL,
  `smp` varchar(40) NOT NULL,
  `lama_belajar` int(5) NOT NULL,
  `nilai_skhun` double NOT NULL,
  `status_siswa` int(5) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`kode_pendaftar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pendaftar`
--

INSERT INTO `master_pendaftar` (`kode_pendaftar`, `nama_siswa`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `gol_darah`, `alamat`, `no_telepon`, `email`, `pihak_wali`, `nama_ortu`, `alamat_ortu`, `agama_ortu`, `pilihan_1`, `pilihan_2`, `smp`, `lama_belajar`, `nilai_skhun`, `status_siswa`, `id_user`) VALUES
(87654, 'syifa azizah lalalala', 'ipa', 'cililin', '0000-00-00', 'L', 'islam', 'A', 'cililin', 8765, NULL, 'ayah', '87654', '7654', 'islam', '432', '7654', '6543', 654, 654, 1, NULL),
(12345, 'fariz mustaba', 'fariz', 'bandung', NULL, 'L', 'islam', 'B', 'bandung', 987654321, NULL, 'ayah', 'yono santika', 'bandung', 'islam', 'sman 1 cisarua', '', 'smpn 1 cisarua', 3, 60, 1, NULL),
(12346, 'muhamad fariz', 'fariz', 'bandung', '0000-00-00', 'L', 'islam', 'B', 'bandung', 987654321, NULL, 'ayah', 'yono santika', 'bandung', 'islam', 'sman 1 cisarua', '', 'smpn 1 cisarua', 3, 60, 1, NULL),
(404, 'aenil', 'aenil', 'bandung', '0000-00-00', 'P', 'islam', 'B', 'cipeusing', 1234567890, NULL, 'ayah', 'ghjk', 'jhgf', 'islam', 'ytrew', 'nbvccx', 'hgf', 3, 90, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_petugas`
--

CREATE TABLE IF NOT EXISTS `master_petugas` (
  `kode_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(5) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tanggal_terdaftar` date DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`kode_petugas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `master_petugas`
--

INSERT INTO `master_petugas` (`kode_petugas`, `nama_petugas`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `tanggal_terdaftar`, `alamat`, `jabatan`, `id_user`) VALUES
(1, 'siti aenil wafiroh', 'bandung', '1992-04-04', 'P', 'aenilwafiroh44@gmail.com', '2013-10-10', 'bandung barat', 'guru matematika', 0),
(3, 'muhamad cucu', 'subang', '1990-04-15', 'L', 'mhd.cucu@gmail.com', '2013-10-10', 'bandung', 'kepala sekolah', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_siswa`
--

CREATE TABLE IF NOT EXISTS `master_siswa` (
  `nis` int(30) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pihak_wali` varchar(20) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `alamat_ortu` varchar(200) NOT NULL,
  `agama_ortu` varchar(10) NOT NULL,
  `kode_pendaftar` int(5) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master_siswa`
--

INSERT INTO `master_siswa` (`nis`, `nama_siswa`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `gol_darah`, `alamat`, `no_telepon`, `email`, `pihak_wali`, `nama_ortu`, `alamat_ortu`, `agama_ortu`, `kode_pendaftar`) VALUES
(1, 'syifa azizah lalalala', 'ipa', 'cililin', '0000-00-00', 'L', 'islam', 'A', 'cililin', 8765, NULL, 'ayah', '87654', '7654', 'islam', 0),
(2, 'fariz mustaba', 'fariz', 'bandung', NULL, 'L', 'islam', 'B', 'bandung', 987654321, NULL, 'ayah', 'yono santika', 'bandung', 'islam', 0),
(3, 'muhamad fariz', 'fariz', 'bandung', '0000-00-00', 'L', 'islam', 'B', 'bandung', 987654321, NULL, 'ayah', 'yono santika', 'bandung', 'islam', 0),
(4, 'aenil', 'aenil', 'bandung', '0000-00-00', 'P', 'islam', 'B', 'cipeusing', 1234567890, NULL, 'ayah', 'ghjk', 'jhgf', 'islam', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE IF NOT EXISTS `master_user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_user` int(5) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`id_user`, `username`, `email`, `password`, `status_user`, `role_id`) VALUES
(1, 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'aenil', 'aenilwafiroh44@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 1, 3),
(4, 'lalalala', 'lala', '2e3817293fc275dbee74bd71ce6eb056', 1, 3),
(5, 'lala', 'lala', '2e3817293fc275dbee74bd71ce6eb056', 1, 3),
(6, '3', '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'Pendaftar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
