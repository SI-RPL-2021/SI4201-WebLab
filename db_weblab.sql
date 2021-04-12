-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 04:37 PM
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
(12, '2021_04_12_121037_create_tb_pelatihan_table', 4);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `nama`, `nim`, `kelas`, `divisi`, `study_group`, `email`, `password`, `akses`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 1111, 'SI-42-01', 'Trainer', 'Data Engineer', 'admin@gmail.com', '$2y$10$dHP1X5Cx6Z9pfJcUmR34ou1ocu/7yNAzCThYFVdCxb.xbN5aUWLqe', 'admin', '2021-04-11 08:07:51', '2021-04-11 08:07:51'),
(3, 'Jody Mardika', 1202180092, 'SI-42-01', 'Trainer', 'Data Scientist', 'jodymardika@gmail.com', '$2y$10$kfZXNwZV/8qghJatOXBiAeu5phx4bv37ox7fUPtGBeFpi1AJ4Cur.', 'non_admin', '2021-04-11 08:08:52', '2021-04-12 06:36:29'),
(4, 'Sekretaris', 2222, 'SI-42-01', 'Sekretaris', 'Data Engineer', 'sekretaris@gmail.com', '$2y$10$L2JXHA7oqJtVPPM/tQC7DO41wwegn1iOY1fydIwXeYX0XowycDdTq', 'non_admin', '2021-04-11 08:09:17', '2021-04-11 08:09:17'),
(5, 'Trainer', 3333, 'SI-42-01', 'Trainer', 'Data Scientist', 'trainer@gmail.com', '$2y$10$HKPPZrJ7a3MeUpupu2Fn6ecCTePxIn8B1MeaYaiQM6YVcRkTnIiGC', 'non_admin', '2021-04-12 05:06:39', '2021-04-12 05:06:39'),
(6, 'poiuio', 6666, 'SI-42-01', 'Trainer', 'Data Engineer', 'a@gmail.com', '$2y$10$LriUa5riwTVp8aTYDXJn9eUsnlab/SjInwWst6ToA3PNQAby12XEi', 'non_admin', '2021-04-12 06:37:56', '2021-04-12 06:37:56');

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
(2, 'Pelatihan 1', 1111, 'Data Engineer', '2021-04-13', '22:25:00', 'Link Pelatihan 1', 'aproved', 'pelatihan', '2021-04-12 07:24:52', '2021-04-12 07:36:36');

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
(23, 'Tes Rapat 2 (edited)', 1202180092, '2021-04-12', '19:00:00', 'Link Rapat 2', 'disaproved', '\'rapat\'', '2021-04-12 00:55:49', '2021-04-12 06:17:24'),
(25, 'Tes Rapat 3', 1202180092, '2021-04-13', '21:10:00', 'Link Rapat 3', 'waiting', '\'rapat\'', '2021-04-12 06:09:41', '2021-04-12 06:09:41');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rapat`
--
ALTER TABLE `tb_rapat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

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
