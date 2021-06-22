-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 06:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
(9, 7, 1111, 'Menunggu validasi', '2021-06-22 04:45:54', '2021-06-22 04:45:54'),
(10, 8, 1111, 'Menunggu validasi', '2021-06-22 04:45:57', '2021-06-22 04:45:57');

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
(23, 29, 1111, 'Menunggu validasi', '2021-06-22 04:37:14', '2021-06-22 04:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasipelatihan`
--

CREATE TABLE `dokumentasipelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelatihan` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasirapat`
--

CREATE TABLE `dokumentasirapat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rapat` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(7, 'Pelatihan 1', 1111, 'Data Engineer', '2021-06-22', '18:34:00', 'Link Rapat 1', 'aproved', 'pelatihan', '2021-06-22 04:34:52', '2021-06-22 04:35:03'),
(8, 'Pelatihan 1 edited', 1111, 'Data Engineer', '2021-06-22', '18:38:00', 'Link Rapat 1', 'aproved', 'pelatihan', '2021-06-22 04:38:47', '2021-06-22 04:38:54');

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
  `jenis_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'rapat',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_rapat`
--

INSERT INTO `tb_rapat` (`id`, `nama_rapat`, `pemohon`, `tgl_rapat`, `jam_rapat`, `link`, `status_aproval`, `jenis_kegiatan`, `created_at`, `updated_at`) VALUES
(29, 'Tes Rapat 1', 1111, '2021-06-22', '18:34:00', 'Link Rapat 1', 'aproved', '\'rapat\'', '2021-06-22 04:34:35', '2021-06-22 04:34:59'),
(30, 'Tes Rapat 2', 1111, '2021-06-22', '19:27:00', 'Link Rapat 2', 'aproved', '\'rapat\'', '2021-06-22 05:27:26', '2021-06-22 05:27:32');

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
-- Indexes for table `dokumentasipelatihan`
--
ALTER TABLE `dokumentasipelatihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK id pelatihan` (`id_pelatihan`);

--
-- Indexes for table `dokumentasirapat`
--
ALTER TABLE `dokumentasirapat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK id rapat` (`id_rapat`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `absenrapat`
--
ALTER TABLE `absenrapat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dokumentasipelatihan`
--
ALTER TABLE `dokumentasipelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dokumentasirapat`
--
ALTER TABLE `dokumentasirapat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_rapat`
--
ALTER TABLE `tb_rapat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- Constraints for table `dokumentasipelatihan`
--
ALTER TABLE `dokumentasipelatihan`
  ADD CONSTRAINT `FK id pelatihan` FOREIGN KEY (`id_pelatihan`) REFERENCES `tb_pelatihan` (`id`);

--
-- Constraints for table `dokumentasirapat`
--
ALTER TABLE `dokumentasirapat`
  ADD CONSTRAINT `FK id rapat` FOREIGN KEY (`id_rapat`) REFERENCES `tb_rapat` (`id`);

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
