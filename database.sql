-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2023 at 10:34 PM
-- Server version: 5.7.40
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digipenk_db`
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

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Pendidikan', '2022-07-21 22:07:24', '2022-07-21 22:07:24'),
(4, 'Teknologi', '2022-08-18 18:00:29', '2022-08-18 18:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(10) NOT NULL,
  `id_category` int(10) DEFAULT NULL,
  `title` longtext,
  `blog` longtext,
  `post_by` varchar(50) DEFAULT NULL,
  `post_read` int(11) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `post_slug` longtext,
  `post_tag` longtext,
  `banner_image` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `id_category`, `title`, `blog`, `post_by`, `post_read`, `post_date`, `post_slug`, `post_tag`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 3, 'What is Lorem Ipsum?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit interdum erat quis volutpat. Nam dictum velit id orci porttitor, quis efficitur tortor blandit. Fusce tempor augue risus, vel cursus magna tristique quis. In hac habitasse platea dictumst. Morbi sollicitudin, purus eu imperdiet scelerisque, nisi diam rutrum orci, in rutrum enim dolor cursus diam. Nullam rhoncus est sem, eleifend accumsan quam dignissim et. Nulla sit amet ornare sapien. In in condimentum mi, quis molestie dolor. Nam non enim sed nisl mattis mollis non non dui. Integer lectus arcu, interdum sed elit id, varius bibendum sapien. Integer et mi at eros egestas semper. Proin sit amet sapien mollis, imperdiet turpis at, ultricies purus. Fusce tristique libero ac velit elementum, quis commodo eros eleifend. Fusce lectus mauris, interdum sed eros quis, ultrices dictum sem. Nullam a feugiat metus, a rhoncus sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Suspendisse nec lectus feugiat, suscipit quam ac, elementum ante. Donec posuere enim porttitor vestibulum sollicitudin. Fusce dolor lacus, tincidunt et nulla non, semper viverra eros. In rhoncus lectus in arcu vestibulum mollis. Vestibulum luctus, magna in tempus aliquam, nisi ipsum hendrerit magna, ac tincidunt nibh enim at orci. Suspendisse est lacus, sollicitudin quis sollicitudin quis, pretium ac nisl. Vivamus vitae pharetra massa. Proin facilisis nunc ut felis hendrerit, vel molestie quam tristique.</p>\r\n\r\n<p>Morbi eget tellus maximus nulla vulputate mollis. Vestibulum ac odio eget neque aliquet rutrum commodo sed mi. Integer fermentum posuere nisl, nec tincidunt elit vulputate vitae. Aliquam orci dolor, porta non magna quis, volutpat posuere dolor. Vestibulum eget molestie tellus. Quisque pharetra tempor tortor non lacinia. Morbi id nisi auctor, efficitur felis nec, posuere mauris. Ut dapibus velit et purus vulputate, nec semper felis egestas. Sed luctus ante lacinia enim egestas blandit. Maecenas condimentum mauris nec ullamcorper feugiat. Vivamus in tortor aliquet, volutpat lorem ac, bibendum nulla. Nam enim erat, tristique eget congue in, pellentesque finibus turpis. In vel vulputate dui, non lobortis quam. Integer pulvinar mauris et nisi porttitor mattis. Proin sed porta augue, vel tempus nisl. Praesent et libero non nunc luctus lacinia vitae id metus.</p>\r\n\r\n<p>Vestibulum vestibulum non nunc id tincidunt. Donec vitae erat massa. Curabitur non elit ac sapien commodo vulputate. Aliquam in eleifend urna. Vivamus nibh ipsum, faucibus id elit nec, feugiat blandit ipsum. Suspendisse eget justo erat. Phasellus ac sagittis lectus, at finibus odio. Aenean auctor risus sed mauris venenatis congue. Integer vehicula aliquam fermentum. Vivamus dignissim nulla erat, ut auctor diam rutrum sed. Ut quis hendrerit libero. Nunc sagittis quis enim id semper. Donec placerat bibendum venenatis.</p>\r\n\r\n<p>Cras mollis ex vel semper commodo. Morbi mollis, ligula id vestibulum rutrum, ligula ante finibus ex, quis fringilla diam mi eget diam. Vivamus ac tempus odio, eu imperdiet sapien. Aliquam hendrerit arcu sem, ut consectetur nunc porta eu. Quisque consequat non dolor eget convallis. Cras id fringilla orci, eu pharetra ipsum. In mattis tortor tellus, sit amet fermentum dui finibus ultricies. Nullam magna ex, pretium in mattis sit amet, fringilla sed ex. Vivamus dictum ligula nec sagittis elementum. Donec id massa nibh. Maecenas maximus eros porta placerat blandit.</p>', 'Administrator', NULL, '2022-07-22 00:00:00', 'what-is-lorem-ipsum', 'pendidikan, tes, coba, lorem ipsum', 'F9bnhQcLkmDpSPphdvtu2rn5AbE07k0tcTeM4AED.jpg', '2022-07-21 22:29:33', '2022-07-21 22:29:33'),
(2, 4, 'Judul Tes Tes Kategori Teknologi', '<p>tes isi berita, test ,tes ,tes ,tes</p>', 'Administrator', 0, '2022-08-19 01:01:53', 'judul-tes-tes-kategori-teknologi', 'teknologi, tes, sekolah, web, pendataan', '5DiIC0rHk2Fo2mgntfeJhoP2l8B0F7BbzGRFounz.jpg', '2022-08-18 18:01:53', '2022-08-18 18:01:53');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(10) NOT NULL,
  `id_sekolah` int(10) DEFAULT NULL,
  `elearning` varchar(20) DEFAULT NULL,
  `wifi` varchar(20) DEFAULT NULL,
  `selular` varchar(20) DEFAULT NULL,
  `listrik` varchar(20) DEFAULT NULL,
  `daya_listrik` varchar(20) DEFAULT NULL,
  `komputer` varchar(20) DEFAULT NULL,
  `komputer_jml` int(5) DEFAULT NULL,
  `komputer_kondisi` varchar(50) DEFAULT NULL,
  `proyektor` varchar(20) DEFAULT NULL,
  `proyektor_jml` int(5) DEFAULT NULL,
  `proyektor_kondisi` varchar(50) DEFAULT NULL,
  `genset` varchar(20) DEFAULT NULL,
  `genset_jml` int(5) DEFAULT NULL,
  `genset_kondisi` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `id_sekolah`, `elearning`, `wifi`, `selular`, `listrik`, `daya_listrik`, `komputer`, `komputer_jml`, `komputer_kondisi`, `proyektor`, `proyektor_jml`, `proyektor_kondisi`, `genset`, `genset_jml`, `genset_kondisi`, `created_at`, `updated_at`) VALUES
(1, 40, NULL, NULL, 'Ada', 'PLN', '900', NULL, NULL, NULL, 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(2, 41, NULL, NULL, 'Ada', 'PLN', NULL, 'Ada', 3, 'Baik', 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(3, 42, NULL, NULL, 'Ada', 'PLN', '900', NULL, NULL, NULL, 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Baik', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(4, 43, NULL, NULL, 'Ada', 'Non-PLN', '1300', 'Ada', 6, 'Butuh Perbaikan', 'Ada', 8, NULL, 'Ada', 1, 'Butuh Perbaikan', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(5, 44, NULL, NULL, 'Ada', 'Non-PLN', NULL, 'Ada', 3, 'Baik', 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(6, 45, 'Ada', NULL, 'Ada', 'PLN', '1200', 'Ada', 4, 'Baik', 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(7, 46, NULL, NULL, 'Ada', 'PLN', NULL, 'Ada', 4, 'Baik', 'Ada', 5, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(8, 47, NULL, NULL, 'Ada', 'PLN', NULL, 'ada', 5, NULL, 'ada', 2, NULL, 'Ada', 1, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(9, 48, 'Ada', NULL, 'Ada', 'PLN', NULL, 'Ada', NULL, 'Baik', NULL, NULL, NULL, 'Ada', NULL, 'Butuh Perbaikan', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(10, 49, NULL, NULL, 'Ada', 'PLN', '2300', 'Ada', 20, 'Butuh Perbaikan', 'Ada', 2, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(11, 50, 'Ada', NULL, 'Ada', 'PLN', NULL, 'Ada', 6, NULL, 'Ada', 6, NULL, NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(12, 51, 'Ada', 'Ada', 'Ada', 'PLN', NULL, NULL, NULL, NULL, 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(13, 52, 'Ada', 'Ada', 'Ada', 'PLN', '2100', 'Ada', 10, 'Baik', 'Ada', 6, NULL, NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(14, 53, NULL, NULL, 'Ada', 'PLN', '900', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(15, 54, NULL, 'Ada', 'Ada', 'PLN', '6600', 'Ada', 40, 'Baik', 'Ada', 3, 'Butuh Perbaikan', 'Ada', 1, 'Baik', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(16, 55, NULL, NULL, 'Ada', 'PLN', '900', NULL, NULL, NULL, 'Ada', 1, 'Baik', 'Ada', 1, 'Butuh Perbaikan', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(17, 56, NULL, NULL, 'Ada', 'PLN', NULL, 'Ada', 2, 'Baik', 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(18, 57, NULL, NULL, 'Ada', 'PLN', '1300', 'Ada', 7, 'Baik', 'Ada', 1, 'Baik', 'Ada', 1, 'Baik', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(19, 58, NULL, NULL, 'Ada', 'PLN', '900', 'Ada', 9, 'Baik', 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(20, 59, NULL, NULL, 'Ada', 'PLN', '900', 'Ada', 6, 'Baik', 'Ada', 1, 'Baik', 'Ada', 1, 'Butuh Perbaikan', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(21, 60, 'Ada', NULL, 'Ada', 'Non-PLN', NULL, 'Ada', 6, 'Baik', 'Ada', 1, 'Baik', 'Ada', 1, 'Baik', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(22, 61, NULL, NULL, 'Ada', 'PLN', NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(23, 62, NULL, 'Ada', 'Ada', 'PLN', '5500', 'Ada', 50, 'Baik', 'Ada', 2, 'Baik', 'Ada', 1, 'Baik', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(24, 63, NULL, NULL, 'Ada', 'PLN', '900', 'Ada', 10, 'Baik', 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(25, 64, NULL, 'Ada', 'Ada', 'PLN', '2300', 'Ada', 14, 'Baik', 'Ada', 1, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(26, 65, NULL, NULL, 'Ada', 'PLN', '1300', 'Ada', 28, 'Baik', 'Ada', 3, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(27, 66, NULL, NULL, 'Ada', 'PLN', NULL, 'Ada', NULL, 'Baik', 'Ada', NULL, 'Baik', 'Ada', NULL, 'Baik', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(28, 67, NULL, NULL, 'Ada', 'PLN', '900', 'Ada', 11, 'Baik', 'Ada', 2, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(29, 68, NULL, NULL, 'Ada', 'PLN', '900', 'Ada', 5, 'Baik', 'Ada', 1, 'Baik', 'Ada', 1, 'Baik', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(30, 69, NULL, NULL, 'Ada', 'PLN', '5000', 'Ada', 10, 'Baik', 'Ada', 2, 'Baik', NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(31, 70, NULL, NULL, 'Ada', 'Non-PLN', '450', 'Ada', 8, 'Baik', 'Ada', 1, 'Baik', 'Ada', 1, 'Butuh Perbaikan', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(32, 71, NULL, NULL, 'Ada', 'Non-PLN', NULL, 'Ada', 4, 'Baik', 'Ada', 1, 'Butuh Perbaikan', 'Ada', 1, 'Butuh Perbaikan', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(33, 72, NULL, NULL, 'Ada', 'Non-PLN', NULL, 'Ada', 4, 'Baik', 'Ada', 1, 'Baik', 'Ada', 1, 'Baik', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(34, 73, NULL, NULL, 'Ada', 'PLN', '900', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', 1, 'Butuh Perbaikan', '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(35, 74, NULL, NULL, 'Ada', 'PLN', '900', 'Ada', 7, 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27'),
(36, 75, NULL, NULL, 'Ada', 'PLN', '900', 'Ada', 4, 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:17:27', '2022-08-30 05:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `file` longtext NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `id_sekolah`, `file`, `updated_at`, `created_at`) VALUES
(1, 50, '50-image-1664916324383.jpg', '2022-10-05 00:45:30', '2022-10-05 00:45:30'),
(2, 50, '50-image-1664916330758.jpg', '2022-10-05 00:45:34', '2022-10-05 00:45:34'),
(3, 50, '50-image-1664916334332.jpg', '2022-10-05 00:45:39', '2022-10-05 00:45:39'),
(4, 51, '51-image-1664916656170.jpg', '2022-10-05 00:51:00', '2022-10-05 00:51:00'),
(5, 51, '51-image-1664916660827.jpg', '2022-10-05 00:51:04', '2022-10-05 00:51:04'),
(6, 51, '51-image-1664916665426.jpg', '2022-10-05 00:51:10', '2022-10-05 00:51:10'),
(7, 51, '51-image-1664916670845.jpg', '2022-10-05 00:51:15', '2022-10-05 00:51:15'),
(8, 52, '52-image-166492221611.jpg', '2022-10-05 02:23:41', '2022-10-05 02:23:41'),
(9, 52, '52-image-1664922221133.jpg', '2022-10-05 02:23:48', '2022-10-05 02:23:48'),
(10, 52, '52-image-1664922228875.jpg', '2022-10-05 02:23:54', '2022-10-05 02:23:54'),
(11, 52, '52-image-1664922401889.jpg', '2022-10-05 02:26:47', '2022-10-05 02:26:47'),
(12, 52, '52-image-1664922407612.jpg', '2022-10-05 02:26:54', '2022-10-05 02:26:54'),
(13, 53, '53-image-166492450310.jpg', '2022-10-05 03:01:49', '2022-10-05 03:01:49'),
(14, 53, '53-image-1664924509140.jpg', '2022-10-05 03:01:56', '2022-10-05 03:01:56'),
(15, 53, '53-image-1664924516414.jpg', '2022-10-05 03:02:01', '2022-10-05 03:02:01'),
(16, 53, '53-image-1664924654305.jpg', '2022-10-05 03:04:20', '2022-10-05 03:04:20'),
(17, 53, '53-image-166492466084.jpg', '2022-10-05 03:04:24', '2022-10-05 03:04:24'),
(18, 54, '54-image-1664924825772.jpg', '2022-10-05 03:07:10', '2022-10-05 03:07:10'),
(19, 54, '54-image-1664924830305.jpg', '2022-10-05 03:07:14', '2022-10-05 03:07:14'),
(20, 54, '54-image-1664924834602.jpg', '2022-10-05 03:07:18', '2022-10-05 03:07:18'),
(21, 54, '54-image-1664924838375.jpg', '2022-10-05 03:07:24', '2022-10-05 03:07:24'),
(22, 65, '65-image-1664925019221.jpg', '2022-10-05 03:10:19', '2022-10-05 03:10:19'),
(23, 65, '65-image-1664925019697.jpg', '2022-10-05 03:10:19', '2022-10-05 03:10:19'),
(24, 65, '65-image-1664925019481.jpg', '2022-10-05 03:10:19', '2022-10-05 03:10:19'),
(25, 65, '65-image-1664925019736.jpg', '2022-10-05 03:10:19', '2022-10-05 03:10:19'),
(26, 65, '65-image-1664925019535.jpg', '2022-10-05 03:10:19', '2022-10-05 03:10:19'),
(27, 65, '65-image-1664925019591.jpg', '2022-10-05 03:10:19', '2022-10-05 03:10:19'),
(28, 66, '66-image-1664925112679.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(29, 66, '66-image-1664925112961.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(30, 66, '66-image-1664925112548.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(31, 66, '66-image-1664925112803.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(32, 66, '66-image-166492511297.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(33, 66, '66-image-1664925112599.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(34, 66, '66-image-1664925112351.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(35, 66, '66-image-1664925112592.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(36, 66, '66-image-1664925112546.jpg', '2022-10-05 03:11:52', '2022-10-05 03:11:52'),
(37, 66, '66-image-1664925113980.jpg', '2022-10-05 03:11:53', '2022-10-05 03:11:53'),
(38, 66, '66-image-1664925113890.jpg', '2022-10-05 03:11:53', '2022-10-05 03:11:53'),
(39, 66, '66-image-1664925113578.jpg', '2022-10-05 03:11:53', '2022-10-05 03:11:53'),
(40, 66, '66-image-1664925113575.jpg', '2022-10-05 03:11:53', '2022-10-05 03:11:53'),
(41, 64, '64-image-166492536716.jpg', '2022-10-05 03:16:11', '2022-10-05 03:16:11'),
(42, 64, '64-image-1664925371944.jpg', '2022-10-05 03:16:16', '2022-10-05 03:16:16'),
(43, 64, '64-image-1664925376151.jpg', '2022-10-05 03:16:20', '2022-10-05 03:16:20'),
(44, 64, '64-image-1664925445559.jpg', '2022-10-05 03:17:29', '2022-10-05 03:17:29'),
(45, 64, '64-image-1664925449245.jpg', '2022-10-05 03:17:34', '2022-10-05 03:17:34'),
(46, 64, '64-image-1664925454577.jpg', '2022-10-05 03:17:39', '2022-10-05 03:17:39'),
(47, 64, '64-image-1664925638527.jpg', '2022-10-05 03:20:42', '2022-10-05 03:20:42'),
(48, 64, '64-image-166492564235.jpg', '2022-10-05 03:20:46', '2022-10-05 03:20:46'),
(49, 64, '64-image-1664925646605.jpg', '2022-10-05 03:20:51', '2022-10-05 03:20:51'),
(50, 58, '58-image-1664925675974.png', '2022-10-05 03:21:15', '2022-10-05 03:21:15'),
(51, 58, '58-image-1664925675796.png', '2022-10-05 03:21:16', '2022-10-05 03:21:16'),
(52, 55, '55-image-166492570846.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(53, 55, '55-image-1664925708550.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(54, 55, '55-image-1664925708951.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(55, 55, '55-image-1664925708542.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(56, 55, '55-image-1664925708876.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(57, 55, '55-image-1664925708371.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(58, 55, '55-image-1664925708293.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(59, 55, '55-image-1664925708502.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(60, 55, '55-image-1664925708340.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(61, 55, '55-image-1664925708262.jpg', '2022-10-05 03:21:48', '2022-10-05 03:21:48'),
(62, 55, '55-image-1664925708807.jpg', '2022-10-05 03:21:49', '2022-10-05 03:21:49'),
(63, 56, '56-image-1664925812492.jpg', '2022-10-05 03:23:37', '2022-10-05 03:23:37'),
(64, 56, '56-image-1664925817766.jpg', '2022-10-05 03:23:41', '2022-10-05 03:23:41'),
(65, 56, '56-image-166492582279.jpg', '2022-10-05 03:23:47', '2022-10-05 03:23:47'),
(66, 56, '56-image-1664925827704.jpg', '2022-10-05 03:23:50', '2022-10-05 03:23:50'),
(67, 74, '74-image-166492595331.png', '2022-10-05 03:25:54', '2022-10-05 03:25:54'),
(68, 74, '74-image-166492595439.png', '2022-10-05 03:25:54', '2022-10-05 03:25:54'),
(69, 74, '74-image-1664925954756.png', '2022-10-05 03:25:54', '2022-10-05 03:25:54'),
(70, 74, '74-image-1664925954267.png', '2022-10-05 03:25:55', '2022-10-05 03:25:55'),
(71, 74, '74-image-1664925955776.png', '2022-10-05 03:25:55', '2022-10-05 03:25:55'),
(72, 74, '74-image-1664925955763.png', '2022-10-05 03:25:56', '2022-10-05 03:25:56'),
(73, 74, '74-image-1664925956673.png', '2022-10-05 03:25:56', '2022-10-05 03:25:56'),
(74, 61, '61-image-1664926086166.jpg', '2022-10-05 03:28:06', '2022-10-05 03:28:06'),
(75, 61, '61-image-1664926086779.jpg', '2022-10-05 03:28:06', '2022-10-05 03:28:06'),
(76, 61, '61-image-1664926086649.jpg', '2022-10-05 03:28:06', '2022-10-05 03:28:06'),
(77, 61, '61-image-166492608635.jpg', '2022-10-05 03:28:06', '2022-10-05 03:28:06'),
(78, 61, '61-image-1664926086355.jpg', '2022-10-05 03:28:06', '2022-10-05 03:28:06'),
(79, 61, '61-image-1664926086259.jpg', '2022-10-05 03:28:06', '2022-10-05 03:28:06'),
(80, 61, '61-image-1664926086875.jpg', '2022-10-05 03:28:06', '2022-10-05 03:28:06'),
(81, 61, '61-image-1664926086954.jpg', '2022-10-05 03:28:07', '2022-10-05 03:28:07'),
(82, 62, '62-image-1664926113120.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(83, 62, '62-image-1664926113984.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(84, 62, '62-image-1664926113484.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(85, 62, '62-image-1664926113487.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(86, 62, '62-image-1664926113736.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(87, 62, '62-image-1664926113537.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(88, 62, '62-image-1664926113674.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(89, 62, '62-image-1664926113138.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(90, 62, '62-image-166492611335.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(91, 62, '62-image-166492611351.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(92, 62, '62-image-1664926113144.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(93, 62, '62-image-166492611364.jpg', '2022-10-05 03:28:33', '2022-10-05 03:28:33'),
(94, 63, '63-image-1664926180456.jpg', '2022-10-05 03:29:45', '2022-10-05 03:29:45'),
(95, 63, '63-image-1664926185164.jpg', '2022-10-05 03:29:50', '2022-10-05 03:29:50'),
(96, 63, '63-image-1664926190670.jpg', '2022-10-05 03:29:55', '2022-10-05 03:29:55'),
(97, 44, '44-image-1664926269272.jpg', '2022-10-05 03:31:13', '2022-10-05 03:31:13'),
(98, 44, '44-image-1664926273111.jpg', '2022-10-05 03:31:17', '2022-10-05 03:31:17'),
(99, 44, '44-image-1664926277496.jpg', '2022-10-05 03:31:22', '2022-10-05 03:31:22'),
(100, 40, '40-image-1664926400721.jpg', '2022-10-05 03:33:24', '2022-10-05 03:33:24'),
(101, 40, '40-image-166492640438.jpg', '2022-10-05 03:33:30', '2022-10-05 03:33:30'),
(102, 40, '40-image-1664926410747.jpg', '2022-10-05 03:33:35', '2022-10-05 03:33:35'),
(103, 40, '40-image-1664926416549.jpg', '2022-10-05 03:33:40', '2022-10-05 03:33:40'),
(104, 41, '41-image-1664926507622.jpg', '2022-10-05 03:35:12', '2022-10-05 03:35:12'),
(105, 41, '41-image-166492651236.jpg', '2022-10-05 03:35:19', '2022-10-05 03:35:19'),
(106, 41, '41-image-1664926520848.jpg', '2022-10-05 03:35:24', '2022-10-05 03:35:24'),
(107, 42, '42-image-1664926654925.jpg', '2022-10-05 03:37:39', '2022-10-05 03:37:39'),
(108, 42, '42-image-1664926659256.jpg', '2022-10-05 03:37:48', '2022-10-05 03:37:48'),
(109, 42, '42-image-1664926668138.jpg', '2022-10-05 03:37:54', '2022-10-05 03:37:54'),
(110, 42, '42-image-1664926674494.jpg', '2022-10-05 03:37:59', '2022-10-05 03:37:59'),
(111, 45, '45-image-1664926765652.jpg', '2022-10-05 03:39:31', '2022-10-05 03:39:31'),
(112, 45, '45-image-1664926771519.jpg', '2022-10-05 03:39:35', '2022-10-05 03:39:35'),
(113, 45, '45-image-1664926825511.jpg', '2022-10-05 03:40:30', '2022-10-05 03:40:30'),
(114, 45, '45-image-1664926830689.jpg', '2022-10-05 03:40:36', '2022-10-05 03:40:36'),
(115, 46, '46-image-1664926913820.jpg', '2022-10-05 03:41:56', '2022-10-05 03:41:56'),
(116, 46, '46-image-1664926916642.jpg', '2022-10-05 03:42:00', '2022-10-05 03:42:00'),
(117, 46, '46-image-166492692074.jpg', '2022-10-05 03:42:05', '2022-10-05 03:42:05'),
(118, 46, '46-image-1664927005400.jpg', '2022-10-05 03:43:31', '2022-10-05 03:43:31'),
(119, 46, '46-image-1664927011931.jpg', '2022-10-05 03:43:36', '2022-10-05 03:43:36'),
(120, 46, '46-image-1664927016616.jpg', '2022-10-05 03:43:41', '2022-10-05 03:43:41'),
(121, 43, '43-image-1664950216255.jpg', '2022-10-05 10:10:22', '2022-10-05 10:10:22'),
(122, 43, '43-image-1664950222857.jpg', '2022-10-05 10:10:27', '2022-10-05 10:10:27'),
(123, 43, '43-image-166495022763.jpg', '2022-10-05 10:10:33', '2022-10-05 10:10:33'),
(124, 43, '43-image-1664950323813.jpg', '2022-10-05 10:12:08', '2022-10-05 10:12:08'),
(125, 43, '43-image-1664950328190.jpg', '2022-10-05 10:12:14', '2022-10-05 10:12:14'),
(126, 47, '47-image-1664950453720.jpg', '2022-10-05 10:14:18', '2022-10-05 10:14:18'),
(127, 47, '47-image-1664950458112.jpg', '2022-10-05 10:14:22', '2022-10-05 10:14:22'),
(128, 47, '47-image-1664950462155.jpg', '2022-10-05 10:14:27', '2022-10-05 10:14:27'),
(129, 47, '47-image-1664950590397.jpg', '2022-10-05 10:16:35', '2022-10-05 10:16:35'),
(130, 47, '47-image-1664950595615.jpg', '2022-10-05 10:16:40', '2022-10-05 10:16:40'),
(131, 48, '48-image-1664950715946.jpg', '2022-10-05 10:18:36', '2022-10-05 10:18:36'),
(132, 48, '48-image-1664950716367.jpg', '2022-10-05 10:18:42', '2022-10-05 10:18:42'),
(133, 48, '48-image-1664950722967.jpg', '2022-10-05 10:18:47', '2022-10-05 10:18:47'),
(134, 48, '48-image-1664950727585.jpg', '2022-10-05 10:18:52', '2022-10-05 10:18:52'),
(135, 48, '48-image-1664950845626.jpg', '2022-10-05 10:20:51', '2022-10-05 10:20:51'),
(136, 48, '48-image-1664950851651.jpg', '2022-10-05 10:20:57', '2022-10-05 10:20:57'),
(137, 48, '48-image-166495085767.jpg', '2022-10-05 10:21:03', '2022-10-05 10:21:03'),
(138, 48, '48-image-1664950870211.jpg', '2022-10-05 10:21:17', '2022-10-05 10:21:17'),
(139, 49, '49-image-1664951068419.jpg', '2022-10-05 10:24:33', '2022-10-05 10:24:33'),
(140, 49, '49-image-1664951074215.jpg', '2022-10-05 10:24:40', '2022-10-05 10:24:40'),
(141, 49, '49-image-1664951231909.jpg', '2022-10-05 10:27:18', '2022-10-05 10:27:18'),
(142, 49, '49-image-1664951238217.jpg', '2022-10-05 10:27:23', '2022-10-05 10:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(10) NOT NULL,
  `id_sekolah` int(10) DEFAULT NULL,
  `website_sekolah` char(2) DEFAULT NULL,
  `manajemen_sekolah` char(2) DEFAULT NULL,
  `e_raport` char(2) DEFAULT NULL,
  `elearning` char(2) DEFAULT NULL,
  `sistem_utbk` char(2) DEFAULT NULL,
  `sistem_pegawai` char(2) DEFAULT NULL,
  `sistem_keuangan` char(2) DEFAULT NULL,
  `sistem_aset` char(2) DEFAULT NULL,
  `sistem_perpus` char(2) DEFAULT NULL,
  `guru_media_belajar` char(2) DEFAULT NULL,
  `guru_zoom` char(2) DEFAULT NULL,
  `siswa_internet` char(2) DEFAULT NULL,
  `siswa_zoom` char(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `id_sekolah`, `website_sekolah`, `manajemen_sekolah`, `e_raport`, `elearning`, `sistem_utbk`, `sistem_pegawai`, `sistem_keuangan`, `sistem_aset`, `sistem_perpus`, `guru_media_belajar`, `guru_zoom`, `siswa_internet`, `siswa_zoom`, `created_at`, `updated_at`) VALUES
(1, 40, 'N', 'Y', 'Y', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'BP', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 14:53:34'),
(2, 41, 'Y', 'N', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'N', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(3, 42, 'N', 'N', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'BK', 'BP', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(4, 43, 'Y', 'Y', 'Y', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'K', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(5, 44, 'N', 'Y', 'Y', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'BP', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(6, 45, 'N', 'N', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'N', 'BK', 'P', 'K', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(7, 46, 'N', 'N', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(8, 47, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(9, 48, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(10, 49, 'N', 'N', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'N', 'BK', 'P', 'K', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(11, 50, 'N', 'N', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'N', 'K', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(12, 51, 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(13, 52, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'K', 'P', 'K', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(14, 53, 'N', 'N', 'Y', NULL, 'Y', 'Y', 'Y', 'Y', 'N', 'BK', 'P', 'BK', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(15, 54, 'N', 'N', 'N', NULL, 'Y', 'N', 'N', 'N', 'N', 'K', 'P', 'K', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(16, 55, 'N', 'Y', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'BK', 'BP', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(17, 56, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(18, 57, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(19, 58, 'N', 'Y', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'BK', 'BP', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(20, 59, 'N', 'Y', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'K', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(21, 60, 'N', 'Y', 'Y', NULL, 'Y', 'Y', 'Y', 'Y', 'N', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(22, 61, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'N', 'K', 'P', 'K', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(23, 62, 'Y', 'N', 'Y', NULL, 'Y', 'N', 'N', 'N', 'N', 'K', 'P', 'K', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(24, 63, 'N', 'N', 'N', NULL, 'N', 'Y', 'N', 'N', 'N', 'BK', 'P', 'BK', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(25, 64, 'N', 'Y', 'Y', NULL, 'Y', 'Y', 'Y', 'Y', 'N', 'K', 'P', 'BK', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(26, 65, 'N', 'N', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'K', 'P', 'K', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(27, 66, 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'K', 'P', 'BK', 'P', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(28, 67, 'N', 'Y', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'K', 'BP', 'K', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(29, 68, 'N', 'Y', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(30, 69, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(31, 70, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'K', 'P', 'K', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(32, 71, 'N', 'Y', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'BK', 'BP', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(33, 72, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'BK', 'BP', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(34, 73, 'N', 'Y', 'N', NULL, 'N', 'Y', 'Y', 'Y', 'Y', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(35, 74, 'N', 'N', 'Y', NULL, 'N', 'N', 'Y', 'N', 'N', 'BK', 'P', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57'),
(36, 75, 'N', 'Y', 'N', NULL, 'Y', 'Y', 'Y', 'Y', 'N', 'BK', 'BP', 'BK', 'BP', '2022-08-30 04:35:57', '2022-08-30 04:35:57');

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
  `deskripsi` longtext,
  `roadmap` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roadmap`
--

INSERT INTO `roadmap` (`id`, `deskripsi`, `roadmap`, `created_at`, `updated_at`) VALUES
(4, 'Inovasi \"Digitalisasi Pendidikan\" Kab Kotabaru', 'Jp2wbTLnsCK5Be5feR2EqnyNvrRPqZuWspcnALvr.jpg', '2022-08-31 05:11:00', '2022-08-31 05:11:00'),
(5, 'Roadmap', 'jmxGLhsdpwCnYWa7SwFobrNv1Xd7No5BZ2jRX5NR.jpg', '2022-08-31 05:11:15', '2022-08-31 05:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(10) NOT NULL,
  `id_sekolah` int(10) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `id_sekolah`, `kepsek`, `kepsek_luas`, `kepsek_kondisi`, `guru`, `guru_luas`, `guru_kondisi`, `tu`, `tu_luas`, `tu_kondisi`, `perpus`, `perpus_luas`, `perpus_kondisi`, `labkom`, `labkom_luas`, `labkom_kondisi`, `uks`, `uks_luas`, `uks_kondisi`, `ibadah`, `ibadah_luas`, `ibadah_kondisi`, `org`, `org_luas`, `org_kondisi`, `gudang`, `gudang_luas`, `gudang_kondisi`, `lap`, `lap_luas`, `lap_kondisi`, `kantin`, `kantin_luas`, `kantin_kondisi`, `created_at`, `updated_at`) VALUES
(2, 40, 'Ada', '7x6', 'Baik', 'Ada', '8x8', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(3, 41, NULL, NULL, NULL, 'Ada', NULL, 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(4, 42, NULL, NULL, NULL, 'Ada', '9x7', 'Baik', NULL, NULL, NULL, 'Ada', '9x7', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '9x7', 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(5, 43, 'Ada', NULL, 'Baik', 'Ada', NULL, 'Baik', NULL, NULL, NULL, 'Ada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Butuh Perbaikan', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(6, 44, 'Ada', '9m2', 'Baik', 'Ada', '18m2', 'Baik', NULL, NULL, NULL, 'Ada', NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, 'Baik', 'Ada', NULL, 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(7, 45, 'Ada', '2x3', 'Baik', 'Ada', '3x6', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '3x7', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '20x20', 'Baik', 'Ada', '6x6', 'Baik', '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(8, 46, 'Ada', '2x3', 'Baik', 'Ada', '4x7', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '6x3', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(9, 47, 'Ada', NULL, 'Baik', 'Ada', NULL, 'Baik', 'Ada', NULL, NULL, 'Ada', NULL, 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Butuh Perbaikan', 'ada', NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(10, 48, 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, 'Baik', 'ada', NULL, 'Butuh Perbaikan', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(11, 49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '96m2', 'baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(12, 50, 'Ada', NULL, NULL, 'Ada', '8x6', NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(13, 51, NULL, NULL, NULL, 'Ada', '56m2', 'Butuh Perbaikan', NULL, NULL, NULL, 'Ada', '56m2', 'baik', NULL, NULL, NULL, 'Ada', '28m2', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '6m2', 'Baik', 'Ada', NULL, 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(14, 52, 'Ada', '7x8', 'Baik', 'Ada', '7x8', 'Baik', 'Ada', '7x8', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '4x4', 'Baik', NULL, NULL, NULL, 'Ada', '3x2', 'Baik', 'Ada', '100x100', 'Baik', 'Ada', '6x6', NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(15, 53, 'Ada', NULL, 'Butuh Perbaikan', 'Ada', NULL, 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, NULL, 'Ada', NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(16, 54, 'Ada', '4x6', 'Baik', 'Ada', '8x10', 'Baik', 'Ada', '4x3', 'Baik', 'Ada', '8x10', 'Baik', 'Ada', '7x10', 'Baik', 'Ada', '4x6', 'Baik', NULL, NULL, NULL, 'Ada', '2x5', 'Baik', 'Ada', '5x7', 'Baik', 'Ada', '20x30', 'Baik', 'Ada', '4x6', 'Baik', '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(17, 55, 'Ada', '3x3', 'Baik', 'Ada', '7x8', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '3x3', 'Baik', 'Ada', '25x25', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(18, 56, NULL, NULL, NULL, 'Ada', '8x7', 'Baik', NULL, NULL, NULL, 'Ada', '8x7', 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '4x8', 'Baik', 'Ada', '40x20', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(19, 57, NULL, NULL, NULL, 'Ada', '9x8', 'Baik', NULL, NULL, NULL, 'Ada', '5x7', 'Butuh Perbaikan', NULL, NULL, NULL, 'Ada', '2x3', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '105x70', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(20, 58, 'Ada', '3x3', 'Baik', 'Ada', '7x9', 'Baik', NULL, NULL, NULL, 'Ada', '5x5', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '3x3', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(21, 59, NULL, NULL, NULL, 'Ada', '9x7', 'Baik', NULL, NULL, NULL, 'Ada', '5x6', 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '5x5', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '125x75', 'Baik', 'Ada', '4x5', 'Baik', '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(22, 60, 'Ada', '5x5', 'Baik', 'ada', '6x7', 'Baik', NULL, NULL, NULL, 'ada', '6x7', 'Baik', NULL, NULL, NULL, 'Ada', '5x5', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '5x5', 'Baik', 'Ada', '12x20', 'Baik', 'ada', '3x4', 'Baik', '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(23, 61, 'Ada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, NULL, NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(24, 62, 'Ada', '12m2', 'Baik', 'Ada', '72m2', 'Baik', 'Ada', '15m2', 'Baik', 'Ada', '80m2', 'Butuh Perbaikan', 'Ada', '108m2', 'Baik', 'Ada', '12m2', 'Baik', 'Ada', '104m2', 'Butuh Perbaikan', NULL, NULL, NULL, 'Ada', '16m2', 'Baik', 'Ada', '10000m2', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(25, 63, NULL, NULL, NULL, 'Ada', '8x9', 'Butuh Perbaikan', NULL, NULL, NULL, 'Ada', NULL, 'Baik', 'Ada', NULL, 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', NULL, 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(26, 64, 'Ada', '3x4', 'Baik', 'Ada', '8x8', 'Baik', 'Ada', '3x4', 'Baik', 'Ada', '15x8', 'Butuh Perbaikan', 'Ada', '20x6', 'Baik', 'Ada', '3x2', 'Baik', 'Ada', '3x3', 'Baik', 'Ada', '3x3', 'Baik', 'Ada', '2x1.5', 'Baik', 'Ada', '30x20', 'Baik', 'Ada', '4x5', 'Baik', '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(27, 65, NULL, NULL, NULL, 'Ada', '8x9', 'Baik', NULL, NULL, NULL, 'Ada', NULL, 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '16m2', 'Baik', 'Ada', '1125m2', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(28, 66, 'Ada', '4x4', 'Baik', 'Ada', '8x6', 'Baik', NULL, NULL, NULL, 'Ada', '8x12', 'Baik', 'Ada', '8x12', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '5x6', 'Baik', 'Ada', '80x60', 'Baik', 'Ada', '4x8', 'Baik', '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(29, 67, 'Ada', '4x3', 'Baik', 'Ada', '9x8', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '4x4', 'Baik', NULL, NULL, NULL, 'Ada', '5x4', 'Baik', 'Ada', '125x75', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(30, 68, NULL, NULL, NULL, 'Ada', '9x8', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '3x4', 'Baik', 'Ada', '4x5', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '75x50', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(31, 69, 'Ada', '3x3', 'Baik', 'Ada', '7x8', 'Baik', NULL, NULL, NULL, 'Ada', '17x9', 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '3x3', 'Baik', 'Ada', '50X25', 'Butuh Perbaikan', 'Ada', '4x4', 'Baik', '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(32, 70, 'Ada', '6x3', 'Baik', 'Ada', '9x8', 'Baik', NULL, NULL, NULL, 'Ada', '7x6', 'Baik', NULL, NULL, NULL, 'Ada', '4x3', 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '100x100', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(33, 71, 'Ada', '3x3', 'Butuh Perbaikan', 'Ada', '7x6', 'Butuh Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '75x50', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(34, 72, NULL, NULL, NULL, 'Ada', '6x8', 'Baik', NULL, NULL, NULL, 'Ada', '9x7', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '4x4', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '80x50', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(35, 73, 'Ada', '3x4', 'Baik', 'Ada', '7x7', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '4x5', 'Baik', NULL, NULL, NULL, 'Ada', '3x3', 'Baik', 'Ada', '50x50', 'Butuh Perbaikan', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(36, 74, NULL, NULL, NULL, 'Ada', '9x10', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '5x5', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '50x50', 'Baik', 'Ada', '4x3', 'Butuh Perbaikan', '2022-08-30 05:43:49', '2022-08-30 05:43:49'),
(37, 75, NULL, NULL, NULL, 'Ada', '7x9', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '3x3', 'Butuh Perbaikan', 'Ada', '4x4', 'Baik', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '75x20', 'Baik', NULL, NULL, NULL, '2022-08-30 05:43:49', '2022-08-30 05:43:49');

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
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `kelurahan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_guru` int(5) DEFAULT NULL,
  `jumlah_guru_tik` int(5) DEFAULT NULL,
  `jumlah_rombel` int(5) DEFAULT NULL,
  `jumlah_siswa` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `tingkat`, `status`, `nama_sekolah`, `alamat`, `kelurahan`, `kecamatan`, `nama_kepsek`, `no_sekolah_kepsek`, `akredetasi`, `no_akredetasi`, `npsn`, `nss`, `luas_tanah`, `luas_bangunan`, `status_tanah`, `kurikulum`, `penyelenggaraan`, `latitude`, `longitude`, `jumlah_guru`, `jumlah_guru_tik`, `jumlah_rombel`, `jumlah_siswa`, `created_at`, `updated_at`) VALUES
(40, 'SD', 'Negeri', 'SDN 1 RANTAU BUDA', 'RT.03/RW.01', 'Rantau Jaya', 'Sungai Durian', 'H.SUKIMIN, S.Pd', NULL, 'B', NULL, 30303473, NULL, 12000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.496005', '116.078673', 8, NULL, 6, 100, '2022-08-30 00:26:41', '2022-08-30 14:53:34'),
(41, 'SD', 'Negeri', 'SDN 2 RANTAU BUDA', 'Jl.Pamukan Raya KM.12', 'Rantau Buda', 'Sungai Durian', 'ARDIAN NOOR, S.Pd. SD', NULL, 'C', NULL, 30303484, NULL, 10000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.496127', '116.07883', 6, NULL, 6, 66, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(42, 'SD', 'Negeri', 'SDN 3 RANTAU BUDA', 'Jl.Delima', 'Terombongsari', 'Sungai Durian', 'RAMLAN,S.Pd. SD', NULL, 'B', NULL, 30303485, NULL, 15000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.47377', '116.138051', 7, NULL, 6, 75, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(43, 'SD', 'Negeri', 'SDN MANUNGGUL LAMA', 'jl. Meranti No.32', 'Manunggul Lama', 'Sungai Durian', 'RAMLAN,S.Pd. SD', NULL, 'B', NULL, 30303536, NULL, NULL, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.515297', '116.164641', 12, NULL, 9, 232, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(44, 'SD', 'Swasta', 'SDS SWADAYA ANDIKA', 'Selabak Estate', 'Manunggul Lama', 'Sungai Durian', 'SABEK MANGGARANTO', NULL, 'B', NULL, 30303350, NULL, NULL, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.48391', '116.20774', 8, NULL, 6, 190, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(45, 'SD', 'Negeri', 'SDN BULUH KUNING', 'Jl.Provinsi Kalsel-Kaltim', 'Buluh Kuning', 'Sungai Durian', 'SYARWANI, S.Pd.', NULL, 'B', NULL, 30303382, NULL, 8100, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.54991', '115.964722', 15, NULL, 12, 263, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(46, 'SD', 'Negeri', 'SDN GENDANG TIMBURU', 'Jl.Provinsi Kalsel-Kaltim', 'Gendang Timburu', 'Sungai Durian', 'GUNAWAN, S.Pd', NULL, 'C', NULL, 30303405, NULL, 12500, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.549926', '115.963384', 13, NULL, 6, 201, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(47, 'SMP', 'Negeri', 'SMPN 1 SUNGAI DURIAN', 'Jl.Pamukan Raya', 'Manunggul Lama', 'Sungai Durian', 'JHON FREDDY PANE, M.Pd.', NULL, 'B', NULL, 30303297, NULL, 20000, NULL, NULL, 'MERDEKA', 'Senin - Sabtu', '-2510105', '116.158978', 15, 1, 9, 220, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(48, 'SMP', 'Negeri', 'SMPN 2 SUNGAI DURIAN', 'Jl.Delima', 'Terombongsari', 'Sungai Durian', 'H.ZARKASYI,S.Ag', NULL, 'B', NULL, 30303289, NULL, NULL, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.498024', '116.119366', 10, NULL, 3, 70, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(49, 'SMP', 'Negeri', 'SMPN 3 SUNGAI DURIAN', 'Jl. A.Yani KM.404', 'Buluh Kuning', 'Sungai Durian', 'ALI ADRIANTO,S.Pd, MM.', NULL, 'B', NULL, 30311487, NULL, 5600, NULL, NULL, ' K-13', 'Senin - Sabtu', '-2.510358', '115.954285', 10, NULL, 6, 138, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(50, 'SD', 'Negeri', 'SDN 1 SENGAYAM', 'Jl. Lintas Prov. Kalsel-Kaltim', 'Sengayam', 'Pamukan Barat', 'MARDI SISWANTO, S.Pd.', NULL, 'B', NULL, 30303257, NULL, NULL, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.36269', '116.00347', 12, NULL, 12, 267, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(51, 'SD', 'Negeri', 'SDN 2 SENGAYAM', 'Jl. Pangeran Samudera', 'Mayangsari', 'Pamukan Barat', 'ENITA . A.Ma.Pd.', NULL, 'B', NULL, 30303258, NULL, 7500, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.33696', '116.01678', 19, NULL, 13, 300, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(52, 'SD', 'Negeri', 'SDN 3 SENGAYAM', 'Jl. Johar RT.10', 'Marga Jaya', 'Pamukan Barat', 'ENITA . A.Ma.Pd.', NULL, 'B', NULL, 30303250, NULL, 14400, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.337173', '116.0067349', 21, NULL, 12, 375, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(53, 'SD', 'Negeri', 'SDN MANTAM', 'Jl. Lintas Prov. Kalsel-Kaltim', 'Batuah', 'Pamukan Barat', 'MUCHAMAD MAKMUR', NULL, 'C', NULL, 30311718, NULL, NULL, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.44153', '115.95167', 10, NULL, 8, 198, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(54, 'SMP', 'Negeri', 'SMPN 1 PAMUKAN BARAT', 'Jl. Pangeran Sintang', 'Mayangsari', 'Pamukan Barat', 'NOOR AFIATI, S.Pd. MM', NULL, 'B', NULL, 30303283, NULL, NULL, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.336475', '116.01721', 25, NULL, 15, 479, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(55, 'SD', 'Negeri', 'SDN BINTURUNG', 'Jl.Teguh Sakti, RT.01/01', 'Binturung', 'Pamukan Utara', 'MOHAMMAD HELMI, S.Pd.SD.', NULL, 'B', NULL, 30303383, NULL, 1000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.38911', '116.39006', 5, NULL, 6, 32, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(56, 'SD', 'Negeri', 'SDN SEKAYU BARU', 'Desa Sekayu Baru', 'Sekayu Baru', 'Pamukan Utara', 'TARAHARJI, S.Pa', NULL, 'B', NULL, 30303493, NULL, 12000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.31899', '116.19044', 8, NULL, 6, 29, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(57, 'SD', 'Swasta', 'SDS BETUNG ESTATE', 'Jl.desa betung', 'Betung', 'Pamukan Utara', 'YOSFINA TADINGAN, S.Pd', NULL, 'B', NULL, 30311538, NULL, 6400, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.35623', '116.19945', 10, NULL, 6, 78, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(58, 'SD', 'Negeri', 'SDN BAKAU', 'Jl. Rantau Intan Bakau', 'Bakau', 'Pamukan Utara', 'PLT- MASDIANSYAH', NULL, 'B', NULL, 30303442, NULL, 3987, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.54219', '116.30318', 11, NULL, 9, 186, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(59, 'SD', 'Negeri', 'SDN PUKUNG', 'Jl.Poros Trans RT.04/RW.02', 'Wonorejo', 'Pamukan Utara', 'DJUMARI, S.Pd', NULL, 'B', NULL, 30303475, NULL, 5300, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.349512', '116.321619', 9, NULL, 6, 55, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(60, 'SD', 'Swasta', 'SDS SEKAYU ESTATE', 'Ds.Sekayu Estate, PT Laguna Mandiri II', 'Sekayu Baru', 'Pamukan Utara', 'MUHAMMAD ABDI RAHMAN S.Ag', NULL, 'B', NULL, 30311549, NULL, 900, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.3597', '116.1812', 7, NULL, 6, 91, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(61, 'SMP', 'Negeri', 'SMPN 1 PAMUKAN UTARA', 'Jl.Trans Pamukan II', 'Bakau', 'Pamukan Utara', 'RAHARJO WIDYATMOKO, S.Pd', NULL, 'B', NULL, 30303359, NULL, 20000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.40817', '116.24372', 18, NULL, 9, 279, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(62, 'SMP', 'Negeri', 'SMPN 2 PAMUKAN UTARA', 'Jl.Merak RT.05/001', 'Mulyoharjo', 'Pamukan Utara', 'ANDERIANSON', NULL, 'B', NULL, 30311491, NULL, 20000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.35280', '116.31953', 12, 1, 3, 50, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(63, 'SMP', 'Negeri', 'SMPN 3 PAMUKAN UTARA', 'Jl. Poros Sekayu Bakau RT.01', 'Sekayu Baru', 'Pamukan Utara', 'SARPANI, S.Pd', NULL, 'C', NULL, 69969396, NULL, 20000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.323775', '116.008693', 12, NULL, 3, 20, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(64, 'SMP', 'Negeri', 'SMPN 1 PAMUKAN SELATAN', 'Jl.pembangungan RT.02', 'Tanjung Samalantakan', 'Pamukan Selatan', 'Dra. SITTI MARLIATI', NULL, 'B', NULL, 30303358, NULL, 10000, NULL, NULL, 'MERDEKA dan K-13', 'Senin - Sabtu', '-2.5792', '116.4138', 12, NULL, 4, 111, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(65, 'SD', 'Negeri', 'SDN RAMPA CENGAL', 'R.T. 04 Desa Rampa Cengal', 'Rampa Cengal', 'Pamukan Selatan', 'R. MOHAMMAD SU UD,S.Pd.', NULL, 'B', NULL, 30303471, NULL, 10000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.486194', '116.405073', 9, NULL, 8, 191, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(66, 'SMP', 'Negeri', 'SMP PARIPURNA SWAKARSA', 'Jln poros divisi 3 sse ', 'Sesulung', 'Pamukan Selatan', 'DAHIR, S.Pd', NULL, 'C', NULL, 30311488, NULL, 10000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.51155', '116.50885', 11, 1, 6, 184, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(67, 'SD', 'Negeri', 'SDN SEKANDIS', 'Jl.Paya Batung', 'Sekandis', 'Pamukan Selatan', 'JASRI, S.Pd', NULL, 'A', NULL, 30303489, NULL, 5312, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.73489', '116.35907', 12, NULL, 6, 47, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(68, 'SD', 'Negeri', 'SDN SEKANDIS GUNUNG', 'Jl.Gunung Sungkai', 'Gunung Calang', 'Pamukan Selatan', 'SABARAWI, A.Ma.Pd', NULL, 'A', NULL, 30303490, NULL, 4332, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.72323', '116.35524', 8, NULL, 6, 68, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(69, 'SD', 'Swasta', 'SDS 4 PARIPURNA SWAKARSA', 'Jl.ds.sesulung pondok III/Divisi III', 'Sesulung Estate', 'Pamukan Selatan', 'ANDI AWALUDDIN, S.Pd', NULL, 'B', NULL, 30311535, NULL, 4200, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.48349', '116.49841', 13, NULL, 7, 179, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(70, 'SD', 'Swasta', 'SDS BEBUNGA ESTATE', 'jl. Perkebunan Bebunga Estate', 'Binturung', 'Pamukan Utara', 'YOHANA ULLU, S.Pd', NULL, 'B', NULL, 30311537, NULL, 12800, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.37533', '116.34059', 15, NULL, 6, 221, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(71, 'SD', 'Swasta', 'SDS 2 PARIPURNA SWAKARSA', 'desa pondok labu', 'Pondok Labu', 'Pamukan Selatan', 'LALU WIRNA, S.Pd', NULL, 'B', NULL, 30303344, NULL, 10000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-3.84153', '116.08390', 7, NULL, 6, 49, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(72, 'SD', 'Swasta', 'SDS SUNGAI CENGAL ESTATE', 'jl.PT. LMR IV, Sungai Cengal Estate', 'Binturung', 'Pamukan Utara', 'RUKMAN, S.Pd', NULL, 'B', NULL, 30311540, NULL, 18000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.40645', '116.36220', 8, NULL, 6, 120, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(73, 'SD', 'Negeri', 'SDN LINTANG', 'Jl. Lintang Jaya RT 04/RW 02', 'Lintang Jaya', 'Pamukan Utara', 'SUHARYANTA', NULL, 'C', NULL, 30303513, NULL, 20000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.35800', '116.34646', 12, NULL, 5, 59, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(74, 'SD', 'Swasta', 'SDS RANDI ESTATE', 'Jl.Desa Bakau', 'Bakau', 'Pamukan Utara', 'AZIS S.Pd', NULL, 'B', NULL, 30311548, NULL, 3750, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.44560', '116.20941', 10, NULL, 6, 128, '2022-08-30 00:26:41', '2022-08-30 00:26:41'),
(75, 'SD', 'Negeri', 'SDN BEPARA', 'Jl. Desa Matalok', 'Matalok', 'Pamukan Utara', 'MUSMULIADI, S.Pd', NULL, 'B', NULL, 30303387, NULL, 5000, NULL, NULL, 'K-13', 'Senin - Sabtu', '-2.454754', '116.134403', 7, NULL, 6, 30, '2022-08-30 00:26:41', '2022-08-30 00:26:41');

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
(7, 'SDN 1 RANTAU BUDA', '30303473', NULL, NULL, '$2y$10$dYBlc1/ZuQs/wwL8TCZ4GeAoOa4W7oM7rFx2moMAUO0rV6jDWrDTC', 'SD', 40, NULL, '2022-08-30 00:26:56', '2022-08-30 00:26:56'),
(8, 'SDN 2 RANTAU BUDA', '30303484', NULL, NULL, '$2y$10$WPkll36HQ7l7Z45b7zwYqOx9EnS//OscFoayExxx70wIwtwI87N1e', 'SD', 41, NULL, '2022-08-30 03:46:34', '2022-08-30 03:46:34'),
(9, 'SDN 3 RANTAU BUDA', '30303485', NULL, NULL, '$2y$10$txDa6Z35AOvNqot78CZaNejwyX0eIQxD/VMOeUitnarDSawXytHEi', 'SD', 42, NULL, '2022-08-30 06:08:14', '2022-08-30 06:08:14'),
(10, 'SDN MANUNGGUL LAMA', '30303536', NULL, NULL, '$2y$10$aofqIKXbAw8F3Ico.0alBuuCWamYYg3x5Mc4LIMASS4p6Tsxr47E.', 'SD', 43, NULL, '2022-08-31 06:14:56', '2022-08-31 06:14:56'),
(11, 'SMPN 1 SUNGAI DURIAN', '30303297', NULL, NULL, '$2y$10$Yz7oXJjyM.zkc6Zdrrx7ReH77lMfVb4q2rlSOi.KmJS8QbZinw.rq', 'SMP', 47, NULL, '2022-11-10 23:19:41', '2022-11-10 23:19:41');

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
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
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
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roadmap`
--
ALTER TABLE `roadmap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ruang_penunjangs`
--
ALTER TABLE `ruang_penunjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanitasi`
--
ALTER TABLE `sanitasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
