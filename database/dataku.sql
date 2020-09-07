-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 09:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataku`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_orang_terdekat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_yang_dilamar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_institusi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kursus` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_terakhir` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan_terakhir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_selesai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id`, `user_id`, `nama`, `email`, `tempat_tanggal_lahir`, `status`, `agama`, `jenis_kelamin`, `nohp`, `golongan_darah`, `no_orang_terdekat`, `alamat`, `posisi_yang_dilamar`, `pendidikan_terakhir`, `nama_institusi`, `jurusan`, `tahun_lulus`, `nama_kursus`, `sertifikat`, `tahun`, `nama_perusahaan`, `posisi_terakhir`, `pendapatan_terakhir`, `tahun_selesai`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 0, 'Binar', 'binsar@gmail.com', 'Jakarta ,23 Januari 1994', 'Belum Menikah', 'Islam', 'L', '09232443543', 'O', '0813145435456', 'Bekasi', 'Backend', 'S1', 'Institut Golden Internasional', 'Management', '2021', 'Babastudio,Bwaangga,Udemy dan Dicoding', 'ya', '2018', 'PT.Gandooz Solusi Aplikasi', 'Backend', '7.500.000', '2020', 'testimonials-4.jpg', '2020-09-07 10:55:11', '2020-09-07 05:19:43'),
(5, 7, 'Boris', 'boris@gmail.com', 'Jakarta,23 Maret 1993', 'Belum Kawin', 'Kristen', 'L', '081314200090', 'O', '08123745955', 'Bekasi', 'Frontend', 'S1', 'Universitas Gajah Mada', 'Teknik Informatika', '2020', 'Babastudi,Udemy, Bwaangga, dan Dicoding', 'Ya', '2019', 'PT.Gaspol Jek Indonesia', 'Backend', '7.000.000', '2020', 'testimonials-5.jpg', '2020-09-07 10:08:44', '2020-09-07 10:08:44'),
(6, 9, 'Sepianus Gulo', 'sepygulo95@gmail.com', 'Baruzo Bobozioli Loloana\'a ,17  September 1995', 'Belum Kawin', 'Kristen', 'L', '081314200099', 'O', '0811976277', 'Jakarta Selatan', 'Backend', 'S1', 'Institut Golden Internasional', 'Management', '2021', 'Babastudi,Udemy, Bwaangga, dan Dicoding', 'Ya', '2019', 'PT.Gandooz Solusi Aplikasi', 'Backend', '7.500.000', '2020', 'banner.png', '2020-09-07 11:41:15', '2020-09-07 11:41:15'),
(7, 10, 'Ninja', 'ninja@gmail.com', 'Jakarta,23 Maret 1994', 'Belum Kawin', 'Kristen', 'P', '081314200093', 'B', '08123745950', 'Depok', 'Backend', 'S1', 'Universitas Gajah Mada', 'Teknik Informatika', '2022', 'Babastudi,Udemy, Bwaangga, dan Dicoding', 'Ya', '2019', 'PT.Gaspol Jek Indonesia', 'Backend', '7.000.000', '2020', 'testimonials-3.jpg', '2020-09-07 11:49:45', '2020-09-07 12:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(19, '2020_09_07_100202_create_user_table', 1),
(26, '2014_10_12_000000_create_users_table', 2),
(27, '2014_10_12_100000_create_password_resets_table', 2),
(28, '2019_08_19_000000_create_failed_jobs_table', 2),
(32, '2020_09_07_105042_create_calon_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$TE/Uc/qGB2o1P//zpktnyuQlyVhuVLM8mZ2Y9XvlRhylOS.02KxQC', 'fPJucWUqKEvg9jouCKrllGFDUTslxcwagBz2BD9cysC4pJQKeBYH2cyCZZwP', '2020-09-07 06:01:50', '2020-09-07 06:01:50'),
(7, 'calon', 'Boris', 'boris@gmail.com', NULL, '$2y$10$8kGZwf4sgdkuk4q16.Useuer/AyUQDgWzoOXDkqxdrmuWsY9wpXIS', 'm0p12hpZfJXuemrUTs6SdMbGwItXmBQTdnI9UjPsddtCOnYy0hry5GRqwtPp', '2020-09-07 10:08:44', '2020-09-07 10:08:44'),
(9, 'calon', 'Sepianus Gulo', 'sepygulo95@gmail.com', NULL, '$2y$10$RbvKRnn/R6CTB5EtQGtXaOFEqn8ButUFw/jiJ9VHK3UbnpgVMPbTG', 'NdJZH3dOPriUjBoP4kbhLkLsYYNSZ1kByw7vLLPphtPwaQENzLO42EeoRxr4', '2020-09-07 11:41:15', '2020-09-07 11:41:15'),
(10, 'calon', 'Ninja', 'ninja@gmail.com', NULL, '$2y$10$FW0vjYR4N4cnYVB7ju0jduU2paWrpWgJRgzPTv9vKH.SBlgavpPVK', 'nr4nvwZzY089znrhXmwvMiWAIhkmmJhmfsfTZuKJk8W3P36GcTHLFy4OASDe', '2020-09-07 11:49:45', '2020-09-07 11:49:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
