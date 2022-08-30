-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 09:00 AM
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
-- Database: `sarpras`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `ruangan` (
`id` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`id_sekolah` INT(10) DEFAULT NULL,
`kepsek` varchar(50) DEFAULT NULL,
`kepsek_luas` varchar(50) DEFAULT NULL,
`kepsek_kondisi` varchar(50) DEFAULT NULL,
`guru` varchar(50) DEFAULT NULL,
`guru_luas` varchar(50) DEFAULT NULL,
`guru_kondisi` varchar(50) DEFAULT NULL,
`tu` varchar(50) DEFAULT NULL,
`tu_luas` varchar(50) DEFAULT NULL,
`tu_kondisi` varchar(50) DEFAULT NULL,
`perpus` varchar(50) DEFAULT NULL,
`perpus_luas` varchar(50) DEFAULT NULL,
`perpus_kondisi` varchar(50) DEFAULT NULL,
`labkom` varchar(50) DEFAULT NULL,
`labkom_luas` varchar(50) DEFAULT NULL,
`labkom_kondisi` varchar(50) DEFAULT NULL,
`uks` varchar(50) DEFAULT NULL,
`uks_luas` varchar(50) DEFAULT NULL,
`uks_kondisi` varchar(50) DEFAULT NULL,
`ibadah` varchar(50) DEFAULT NULL,
`ibadah_luas` varchar(50) DEFAULT NULL,
`ibadah_kondisi` varchar(50) DEFAULT NULL,
`org` varchar(50) DEFAULT NULL,
`org_luas` varchar(50) DEFAULT NULL,
`org_kondisi` varchar(50) DEFAULT NULL,
`gudang` varchar(50) DEFAULT NULL,
`gudang_luas` varchar(50) DEFAULT NULL,
`gudang_kondisi` varchar(50) DEFAULT NULL,
`lap` varchar(50) DEFAULT NULL,
`lap_luas` varchar(50) DEFAULT NULL,
`lap_kondisi` varchar(50) DEFAULT NULL,
`kantin` varchar(50) DEFAULT NULL,
`kantin_luas` varchar(50) DEFAULT NULL,
`kantin_kondisi` varchar(50) DEFAULT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL
);
--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Pendidikan', '2022-07-21 22:07:24', '2022-07-21 22:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(10) NOT NULL,
  `id_category` int(10) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `blog` longtext DEFAULT NULL,
  `post_by` varchar(50) DEFAULT NULL,
  `post_read` int(11) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `post_slug` longtext DEFAULT NULL,
  `post_tag` longtext DEFAULT NULL,
  `banner_image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `id_category`, `title`, `blog`, `post_by`, `post_read`, `post_date`, `post_slug`, `post_tag`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 3, 'What is Lorem Ipsum?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit interdum erat quis volutpat. Nam dictum velit id orci porttitor, quis efficitur tortor blandit. Fusce tempor augue risus, vel cursus magna tristique quis. In hac habitasse platea dictumst. Morbi sollicitudin, purus eu imperdiet scelerisque, nisi diam rutrum orci, in rutrum enim dolor cursus diam. Nullam rhoncus est sem, eleifend accumsan quam dignissim et. Nulla sit amet ornare sapien. In in condimentum mi, quis molestie dolor. Nam non enim sed nisl mattis mollis non non dui. Integer lectus arcu, interdum sed elit id, varius bibendum sapien. Integer et mi at eros egestas semper. Proin sit amet sapien mollis, imperdiet turpis at, ultricies purus. Fusce tristique libero ac velit elementum, quis commodo eros eleifend. Fusce lectus mauris, interdum sed eros quis, ultrices dictum sem. Nullam a feugiat metus, a rhoncus sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Suspendisse nec lectus feugiat, suscipit quam ac, elementum ante. Donec posuere enim porttitor vestibulum sollicitudin. Fusce dolor lacus, tincidunt et nulla non, semper viverra eros. In rhoncus lectus in arcu vestibulum mollis. Vestibulum luctus, magna in tempus aliquam, nisi ipsum hendrerit magna, ac tincidunt nibh enim at orci. Suspendisse est lacus, sollicitudin quis sollicitudin quis, pretium ac nisl. Vivamus vitae pharetra massa. Proin facilisis nunc ut felis hendrerit, vel molestie quam tristique.</p>\r\n\r\n<p>Morbi eget tellus maximus nulla vulputate mollis. Vestibulum ac odio eget neque aliquet rutrum commodo sed mi. Integer fermentum posuere nisl, nec tincidunt elit vulputate vitae. Aliquam orci dolor, porta non magna quis, volutpat posuere dolor. Vestibulum eget molestie tellus. Quisque pharetra tempor tortor non lacinia. Morbi id nisi auctor, efficitur felis nec, posuere mauris. Ut dapibus velit et purus vulputate, nec semper felis egestas. Sed luctus ante lacinia enim egestas blandit. Maecenas condimentum mauris nec ullamcorper feugiat. Vivamus in tortor aliquet, volutpat lorem ac, bibendum nulla. Nam enim erat, tristique eget congue in, pellentesque finibus turpis. In vel vulputate dui, non lobortis quam. Integer pulvinar mauris et nisi porttitor mattis. Proin sed porta augue, vel tempus nisl. Praesent et libero non nunc luctus lacinia vitae id metus.</p>\r\n\r\n<p>Vestibulum vestibulum non nunc id tincidunt. Donec vitae erat massa. Curabitur non elit ac sapien commodo vulputate. Aliquam in eleifend urna. Vivamus nibh ipsum, faucibus id elit nec, feugiat blandit ipsum. Suspendisse eget justo erat. Phasellus ac sagittis lectus, at finibus odio. Aenean auctor risus sed mauris venenatis congue. Integer vehicula aliquam fermentum. Vivamus dignissim nulla erat, ut auctor diam rutrum sed. Ut quis hendrerit libero. Nunc sagittis quis enim id semper. Donec placerat bibendum venenatis.</p>\r\n\r\n<p>Cras mollis ex vel semper commodo. Morbi mollis, ligula id vestibulum rutrum, ligula ante finibus ex, quis fringilla diam mi eget diam. Vivamus ac tempus odio, eu imperdiet sapien. Aliquam hendrerit arcu sem, ut consectetur nunc porta eu. Quisque consequat non dolor eget convallis. Cras id fringilla orci, eu pharetra ipsum. In mattis tortor tellus, sit amet fermentum dui finibus ultricies. Nullam magna ex, pretium in mattis sit amet, fringilla sed ex. Vivamus dictum ligula nec sagittis elementum. Donec id massa nibh. Maecenas maximus eros porta placerat blandit.</p>', 'Administrator', NULL, '2022-07-22 00:00:00', 'what-is-lorem-ipsum', 'pendidikan, tes, coba, lorem ipsum', 'F9bnhQcLkmDpSPphdvtu2rn5AbE07k0tcTeM4AED.jpg', '2022-07-21 22:29:33', '2022-07-21 22:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_siswa`
--

CREATE TABLE `jumlah_siswa` (
  `id` int(10) NOT NULL,
  `id_sekolah` int(10) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `guru` int(10) DEFAULT NULL,
  `siswa_laki` int(10) DEFAULT NULL,
  `siswa_perempuan` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumlah_siswa`
--

INSERT INTO `jumlah_siswa` (`id`, `id_sekolah`, `kelas`, `guru`, `siswa_laki`, `siswa_perempuan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kelas 1', NULL, NULL, NULL, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_05_20_140800_create_sekolahs_table', 1),
(5, '2022_05_23_025440_create_ruang_kelas_table', 1),
(6, '2022_05_23_030443_create_ruang_penunjangs_table', 1);

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
-- Table structure for table `roadmap`
--

CREATE TABLE `roadmap` (
  `id` int(10) NOT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `roadmap` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE `ruang_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_ruang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panjang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lebar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kondisi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_rusak` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rehab_akhir` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meja_baik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meja_rusak` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kursi_baik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kursi_rusak` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_sekolah` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`id`, `created_at`, `updated_at`, `jenis_ruang`, `panjang`, `lebar`, `kondisi`, `tingkat_rusak`, `rehab_akhir`, `meja_baik`, `meja_rusak`, `kursi_baik`, `kursi_rusak`, `id_sekolah`) VALUES
(4, '2022-06-07 09:28:58', '2022-06-07 09:28:58', 'Kelas 1', '5', '10', 'Baik', NULL, '2000', '18', '2', '30', '10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ruang_penunjangs`
--

CREATE TABLE `ruang_penunjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_ruang` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lebar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sekolah` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang_penunjangs`
--

INSERT INTO `ruang_penunjangs` (`id`, `created_at`, `updated_at`, `jenis_ruang`, `keterangan`, `panjang`, `lebar`, `kondisi`, `id_sekolah`) VALUES
(1, '2022-06-07 09:47:58', '2022-06-07 09:47:58', 'Ruang Kepala Sekolah', 'Ada', '5', '5', 'Baik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanitasi`
--

CREATE TABLE `sanitasi` (
  `id` int(10) NOT NULL,
  `jenis_ruang` varchar(50) DEFAULT NULL,
  `baik` int(11) DEFAULT NULL,
  `rusak_sedang` int(11) DEFAULT NULL,
  `rusak_berat` int(11) DEFAULT NULL,
  `panjang` int(11) DEFAULT NULL,
  `lebar` int(11) DEFAULT NULL,
  `id_sekolah` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanitasi`
--

INSERT INTO `sanitasi` (`id`, `jenis_ruang`, `baik`, `rusak_sedang`, `rusak_berat`, `panjang`, `lebar`, `id_sekolah`, `created_at`, `updated_at`) VALUES
(1, 'WC/KM Siswa Laki-laki', 1, 1, 0, 5, 5, 1, '2022-06-07 10:13:08', '2022-06-07 10:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(10) UNSIGNED NOT NULL,
  `tingkat` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kepsek` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sekolah_kepsek` int(20) DEFAULT NULL,
  `akredetasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_akredetasi` int(11) DEFAULT NULL,
  `npsn` int(11) DEFAULT NULL,
  `nss` int(11) DEFAULT NULL,
  `luas_tanah` int(11) DEFAULT NULL,
  `luas_bangunan` int(11) DEFAULT NULL,
  `status_tanah` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kurikulum` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyelenggaraan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_rombel` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `tingkat`, `nama_sekolah`, `alamat`, `kecamatan`, `kelurahan`, `nama_kepsek`, `no_sekolah_kepsek`, `akredetasi`, `no_akredetasi`, `npsn`, `nss`, `luas_tanah`, `luas_bangunan`, `status_tanah`, `kurikulum`, `penyelenggaraan`, `status`, `latitude`, `longitude`, `jumlah_rombel`, `created_at`, `updated_at`) VALUES
(1, 'SD', 'SD Negeri 1 Rantau Buda', 'Jl. Rantau Jaya Km.13, Kelurahan Rantau Jaya', 'Sungai Durian', NULL, NULL, NULL, NULL, NULL, 30303473, NULL, NULL, NULL, NULL, NULL, NULL, 'Negeri', '-3.0230741', '114.773644', NULL, '2022-06-06 16:21:41', '2022-07-10 20:08:10'),
(3, 'SD', 'SD Negeri 3 Rantau Buda', 'Jl. Transmigrasi Km 09 Terombo', 'Sungai Durian', 'Terombong Sari', NULL, NULL, NULL, NULL, 30303485, NULL, NULL, NULL, NULL, NULL, NULL, 'Negeri', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('ADMIN','SD','SMP') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ADMIN',
  `id_sekolah` int(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `level`, `id_sekolah`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'admin@gmail.com', NULL, '$2a$12$3YCrEbEPzcc6U.XQl4NiEuB6Ez.xxF1YzEia90ugLNtCJviNfiHIO', 'ADMIN', NULL, NULL, NULL, NULL),
(5, 'SD Negeri 1 Rantau Buda', '30303473', NULL, NULL, '$2y$10$7oz83N5.bcEYkC3.YAnUcu9yfFre0pxs/TEfSnUG4wG17.0I.DaUi', 'SD', 1, NULL, '2022-06-07 05:45:03', '2022-06-07 05:45:03'),
(6, 'SD Negeri 3 Rantau Buda', '30303485', NULL, NULL, '$2y$10$JrzR83ybQpG2STLA9DdkzOBY1VdHJCrrRAdWYZ0ozhxoaYjnnA2Yi', 'SD', 3, NULL, '2022-06-07 05:45:08', '2022-06-07 05:45:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jumlah_siswa`
--
ALTER TABLE `jumlah_siswa`
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
-- Indexes for table `roadmap`
--
ALTER TABLE `roadmap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_penunjangs`
--
ALTER TABLE `ruang_penunjangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanitasi`
--
ALTER TABLE `sanitasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jumlah_siswa`
--
ALTER TABLE `jumlah_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roadmap`
--
ALTER TABLE `roadmap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ruang_penunjangs`
--
ALTER TABLE `ruang_penunjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanitasi`
--
ALTER TABLE `sanitasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
