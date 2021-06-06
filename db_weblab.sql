-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 04:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_weblab`
--

-- --------------------------------------------------------

--
-- Table structure for table `absenpelatihan`
--

CREATE TABLE `absenpelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelatihan` bigint(20) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `status_validasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Menunggu validasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absenpelatihan`
--

INSERT INTO `absenpelatihan` (`id`, `id_pelatihan`, `nim`, `status_validasi`, `created_at`, `updated_at`) VALUES
(1, 6, 1111, 'Menunggu validasi', '2021-05-21 22:43:54', '2021-05-21 22:43:54'),
(2, 6, 1111, 'Menunggu validasi', '2021-05-21 22:44:47', '2021-05-21 22:44:47'),
(3, 6, 2222, 'Menunggu validasi', '2021-05-23 06:52:38', '2021-05-23 06:52:38'),
(4, 6, 1202184312, 'Menunggu validasi', '2021-05-24 01:48:40', '2021-05-24 01:48:40'),
(6, 6, 54187343, 'Menunggu validasi', '2021-06-05 18:43:46', '2021-06-05 18:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `absenrapat`
--

CREATE TABLE `absenrapat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rapat` bigint(20) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `status_validasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Menunggu validasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absenrapat`
--

INSERT INTO `absenrapat` (`id`, `id_rapat`, `nim`, `status_validasi`, `created_at`, `updated_at`) VALUES
(11, 28, 1202184312, 'Menunggu validasi', '2021-05-30 02:28:00', '2021-05-30 02:28:00'),
(13, 22, 1202184312, 'Menunggu validasi', '2021-05-30 02:32:04', '2021-05-30 02:32:04'),
(20, 28, 1202181111, 'Menunggu validasi', '2021-05-30 09:53:29', '2021-05-30 09:53:29'),
(21, 22, 164669513, 'Menunggu validasi', '2021-06-05 18:47:56', '2021-06-05 18:47:56'),
(22, 28, 164669513, 'Menunggu validasi', '2021-06-05 18:48:08', '2021-06-05 18:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_dokumentasi` int(11) NOT NULL,
  `foto` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_04_02_085805_create_tb_anggota_table', 1),
(10, '2021_04_11_150249_create_tb_rapat_table', 2),
(11, '2021_04_12_033004_create_kegiatan_table', 3),
(12, '2021_04_12_121037_create_tb_pelatihan_table', 4),
(13, '2021_05_01_090145_create__tb_kehadiran_table', 5),
(14, '2021_05_22_044259_create_absenpelatihan_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(11) NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_group` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'non_admin',
  `Status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `nama`, `nim`, `kelas`, `divisi`, `study_group`, `email`, `password`, `akses`, `Status`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 1111, 'SI-42-01', 'Trainer', 'Data Engineer', 'admin@gmail.com', '$2y$10$dHP1X5Cx6Z9pfJcUmR34ou1ocu/7yNAzCThYFVdCxb.xbN5aUWLqe', 'admin', 'Diterima', '2021-04-11 08:07:51', '2021-06-03 22:33:36'),
(3, 'Jody Mardika', 1202180092, 'SI-42-01', 'Trainer', 'Data Scientist', 'jodymardika@gmail.com', '$2y$10$kfZXNwZV/8qghJatOXBiAeu5phx4bv37ox7fUPtGBeFpi1AJ4Cur.', 'non_admin', 'Diterima', '2021-04-11 08:08:52', '2021-06-03 22:33:34'),
(4, 'Sekretaris', 2222, 'SI-42-01', 'Sekretaris', 'Data Engineer', 'sekretaris@gmail.com', '$2y$10$L2JXHA7oqJtVPPM/tQC7DO41wwegn1iOY1fydIwXeYX0XowycDdTq', 'non_admin', 'Diterima', '2021-04-11 08:09:17', '2021-06-03 22:33:32'),
(5, 'Trainer', 3333, 'SI-42-01', 'Trainer', 'Data Scientist', 'trainer@gmail.com', '$2y$10$HKPPZrJ7a3MeUpupu2Fn6ecCTePxIn8B1MeaYaiQM6YVcRkTnIiGC', 'non_admin', 'Pending', '2021-04-12 05:06:39', '2021-04-12 05:06:39'),
(6, 'poiuio', 6666, 'SI-42-01', 'Trainer', 'Data Engineer', 'a@gmail.com', '$2y$10$LriUa5riwTVp8aTYDXJn9eUsnlab/SjInwWst6ToA3PNQAby12XEi', 'non_admin', 'Diterima', '2021-04-12 06:37:56', '2021-06-03 22:33:30'),
(10, 'Tasya Nozuka Hasprasi', 1202184312, 'SI-42-01', 'Anggota', 'Data Engineer', 'tasyanozuka@gmail.com', '$2y$10$vbW0u.ag3qF.iQL3h66S.ePLZjoia5zrdP9WcgIY34/KjaWr1UkpG', 'non_admin', 'Diterima', '2021-04-27 19:54:03', '2021-06-03 22:33:28'),
(11, 'trainer2', 123456789, 'SI-42-02', 'Trainer', 'Data Engineer', 'trainer2@gmail.com', '$2y$10$iXWkrb9kTAxSrEwxqSJO6uP3T1rbdlsRXdb8AWDzIk.wJclM5xnSO', 'non_admin', 'Diterima', '2021-05-01 01:45:56', '2021-06-03 22:33:27'),
(12, 'nanana', 1202181111, 'SI-42-04', 'Anggota', 'Data Scientist', 'nanana@gmail.com', '$2y$10$U90SHopzfCEO5jrUgpjaoublZuPu0EHtpAN/W9ukpwOSnNus4dCwW', 'non_admin', 'Diterima', '2021-05-30 09:40:33', '2021-06-03 22:33:25'),
(13, 'dada', 1212122112, 'SI-42-01', 'Trainer', 'Data Engineer', 'dada@gmail.com', '$2y$10$dIEX5lSVm23aEUVCOsbc7u6OwmObXyyMTn0aaPtQ7t8LW5rorc5b.', 'non_admin', 'Diterima', '2021-06-03 22:32:55', '2021-06-03 22:33:22'),
(14, 'Sekretaris 2', 1202184287, 'SI-42-01', 'Sekretaris', 'Data Engineer', 'sekretaris2@gmail.com', '$2y$10$RnYRM3DlV4fqkcuOupmGMepYm31IB1LXvUx.bCW8QczDTiZw82/lW', 'non_admin', 'Pending', '2021-06-04 18:21:21', '2021-06-04 18:21:21'),
(15, 'Trainer 3', 54187343, 'SI-42-01', 'Trainer', 'Data Engineer', 'trainer3@gmail.com', '$2y$10$gZzSVUg9cPNo28yjqxL1i.4RE23QAHUZ/XFx6AWjCSqhNHQk8APA2', 'non_admin', 'Pending', '2021-06-05 07:34:22', '2021-06-05 07:34:22'),
(17, 'Anggota 3', 164669513, 'SI-42-01', 'Anggota', 'Data Engineer', 'Anggota3@gmail.com', '$2y$10$SnR.YoRx7ndxo5ZcWbCSw.ON8G8B4ajKGAxz5AWWqZmebaDXiFeOO', 'non_admin', 'Diterima', '2021-06-05 18:47:43', '2021-06-05 19:02:10'),
(18, 'Admin 2', 138763, 'SI-42-01', 'Anggota', 'Data Engineer', 'admin2@gmail.com', '$2y$10$SnR.YoRx7ndxo5ZcWbCSw.ON8G8B4ajKGAxz5AWWqZmebaDXiFeOO', 'admin', 'Diterima', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemohon` int(11) NOT NULL,
  `study_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pelatihan` date NOT NULL,
  `jam_pelatihan` time NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_aproval` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `jenis_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pelatihan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`id`, `nama_pelatihan`, `pemohon`, `study_group`, `tgl_pelatihan`, `jam_pelatihan`, `link`, `status_aproval`, `jenis_kegiatan`, `created_at`, `updated_at`) VALUES
(2, 'Pelatihan 1', 1111, 'Data Engineer', '2021-04-13', '22:25:00', 'https://meet.google.com/ehv-qsqc-htj', 'disaproved', 'pelatihan', '2021-04-12 07:24:52', '2021-06-05 18:45:30'),
(4, 'Pelatihan 2', 3333, 'Data Scientist', '2021-05-01', '09:00:00', 'https://meet.google.com/ehv-qsqc-htj', 'aproved', 'pelatihan', '2021-04-29 10:58:44', '2021-05-23 07:01:23'),
(5, 'Pelatihan 3', 123456789, 'Data Engineer', '2021-05-03', '10:00:00', 'https://meet.google.com/ehv-qsqc-htj', 'aproved', 'pelatihan', '2021-05-01 01:47:19', '2021-05-01 02:30:11'),
(6, 'Pelatihan 4', 1111, 'Data Engineer', '2021-05-20', '10:54:00', 'https://meet.google.com/swd-iifv-pru', 'aproved', 'pelatihan', '2021-05-20 19:53:33', '2021-05-23 05:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rapat`
--

CREATE TABLE `tb_rapat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rapat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemohon` int(11) NOT NULL,
  `tgl_rapat` date NOT NULL,
  `jam_rapat` time NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_aproval` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `jenis_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''rapat''',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_rapat`
--

INSERT INTO `tb_rapat` (`id`, `nama_rapat`, `pemohon`, `tgl_rapat`, `jam_rapat`, `link`, `status_aproval`, `jenis_kegiatan`, `created_at`, `updated_at`) VALUES
(22, 'Tes Rapat 1', 1111, '2021-04-12', '14:34:00', 'Link Rapat 1', 'aproved', '\'rapat\'', '2021-04-12 00:34:44', '2021-04-12 06:09:02'),
(23, 'Tes Rapat 2 (edited)', 1202180092, '2021-04-12', '19:00:00', 'Link Rapat 2', 'disaproved', '\'rapat\'', '2021-04-12 00:55:49', '2021-04-28 14:32:45'),
(25, 'Tes Rapat 3', 1202180092, '2021-04-13', '21:10:00', 'Link Rapat 3', 'waiting', '\'rapat\'', '2021-04-12 06:09:41', '2021-04-12 06:09:41'),
(28, 'Rapat 4', 2222, '2021-05-27', '10:00:00', 'https://meet.google.com/zya-ctxf-ppd', 'aproved', '\'rapat\'', '2021-05-24 17:04:20', '2021-05-24 17:05:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absenpelatihan`
--
ALTER TABLE `absenpelatihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelatihan` (`id_pelatihan`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `absenrapat`
--
ALTER TABLE `absenrapat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rapat` (`id_rapat`) USING BTREE,
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemohon` (`pemohon`);

--
-- Indexes for table `tb_rapat`
--
ALTER TABLE `tb_rapat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemohon` (`pemohon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absenpelatihan`
--
ALTER TABLE `absenpelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `absenrapat`
--
ALTER TABLE `absenrapat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rapat`
--
ALTER TABLE `tb_rapat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absenpelatihan`
--
ALTER TABLE `absenpelatihan`
  ADD CONSTRAINT `fk_id_pelatihan` FOREIGN KEY (`id_pelatihan`) REFERENCES `tb_pelatihan` (`id`),
  ADD CONSTRAINT `fk_nim` FOREIGN KEY (`nim`) REFERENCES `tb_anggota` (`nim`);

--
-- Constraints for table `absenrapat`
--
ALTER TABLE `absenrapat`
  ADD CONSTRAINT `absenrapat_ibfk_1` FOREIGN KEY (`id_rapat`) REFERENCES `tb_rapat` (`id`),
  ADD CONSTRAINT `absenrapat_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_anggota` (`nim`);

--
-- Constraints for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD CONSTRAINT `fk_pemohon2` FOREIGN KEY (`pemohon`) REFERENCES `tb_anggota` (`nim`);

--
-- Constraints for table `tb_rapat`
--
ALTER TABLE `tb_rapat`
  ADD CONSTRAINT `fk_pemohon` FOREIGN KEY (`pemohon`) REFERENCES `tb_anggota` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
