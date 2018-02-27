-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 07:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademiksmkn13bdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `body`, `created_at`, `updated_at`) VALUES
(4, '1', '53', '<p>Reserved!</p>', '2018-02-26 09:11:05', '2018-02-26 09:11:05'),
(5, '11', '54', '<p>Alhamdulillah terima kasih pak dadan, aminn sugan sayah bisa masuk ke perguruan tinggi tea yah pak, do&#39;a kan saja. Dan sayah moal lenggggg deui ayeuna mah&nbsp;<strong>HAHAHAHAHAHAHA!</strong></p>', '2018-02-26 09:39:25', '2018-02-26 09:39:25'),
(6, '236', '54', '<p>:v</p>', '2018-02-26 09:40:39', '2018-02-26 09:40:39'),
(7, '250', '54', '<p>Pak ai ke sayah engga pak? sad :(</p>', '2018-02-26 09:43:25', '2018-02-26 09:43:25'),
(8, '250', '54', '<p>Baeud ah pak :(((( padahal saya24 jam nonstop belajar mtk :((</p>', '2018-02-26 09:55:24', '2018-02-26 09:55:24'),
(9, '236', '54', '<p>:v</p>', '2018-02-26 09:57:30', '2018-02-26 09:57:30'),
(10, '236', '54', '<p>URUS HEULA DRL! LOBA CHEATER!</p>', '2018-02-26 09:59:25', '2018-02-26 09:59:25'),
(11, '236', '54', '<p>))</p>', '2018-02-26 10:05:59', '2018-02-26 10:05:59'),
(12, '250', '54', '<p>Njir</p>', '2018-02-26 10:06:07', '2018-02-26 10:06:07'),
(13, '11', '54', '<p>:v</p>', '2018-02-27 07:56:58', '2018-02-27 07:56:58'),
(14, '1', '56', '<p>Wkwk kok ngakak&nbsp;</p>', '2018-02-27 08:00:33', '2018-02-27 08:00:33'),
(15, '11', '56', '<p>:v</p>', '2018-02-27 08:01:46', '2018-02-27 08:01:46'),
(16, '1', '56', '<h1>WKWK</h1>', '2018-02-27 08:02:26', '2018-02-27 08:02:26'),
(17, '12', '56', '<p>Njir si abah&nbsp;</p>', '2018-02-27 10:48:31', '2018-02-27 10:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(90) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `type_jurusan` varchar(100) NOT NULL,
  `id_mapel` varchar(90) DEFAULT 'default',
  `created_at` varchar(90) NOT NULL,
  `updated_at` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`, `type_jurusan`, `id_mapel`, `created_at`, `updated_at`) VALUES
(5, 'AK', 'Kimia', 'default', '2018-02-07 07:28:09', '2018-02-24 11:25:30'),
(6, 'TKJ', 'Informatika', 'default', '2018-02-07 07:32:18', '2018-02-24 11:25:09'),
(8, 'RPL', 'Informatika', 'default', '2018-02-07 07:44:50', '2018-02-24 11:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(90) NOT NULL,
  `tingkat_kelas` varchar(80) NOT NULL,
  `jumlah_kelas` int(80) NOT NULL,
  `nip` varchar(90) NOT NULL,
  `id_jurusan` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tingkat_kelas`, `jumlah_kelas`, `nip`, `id_jurusan`) VALUES
(19, 'X', 1, '3', '5'),
(20, 'X', 2, '3', '5'),
(21, 'X', 3, '3', '5'),
(22, 'X', 4, '3', '5'),
(23, 'X', 5, '3', '5'),
(24, 'X', 6, '3', '5'),
(25, 'XI', 1, '3', '5'),
(26, 'XI', 2, '3', '5'),
(27, 'XI', 4, '3', '5'),
(28, 'XI', 5, '3', '5'),
(29, 'XI', 6, '3', '5'),
(30, 'XII', 1, '3', '5'),
(31, 'XII', 2, '3', '5'),
(32, 'XII', 3, '3', '5'),
(33, 'XII', 4, '3', '5'),
(34, 'XII', 5, '3', '5'),
(35, 'XII', 6, '3', '5'),
(36, 'XIII', 1, '3', '5'),
(37, 'XIII', 2, '3', '5'),
(38, 'XIII', 3, '3', '5'),
(39, 'XIII', 4, '3', '5'),
(40, 'XIII', 5, '3', '5'),
(42, 'X', 1, '3', '8'),
(43, 'X', 2, '3', '8'),
(45, 'XI', 1, '3', '8'),
(46, 'XI', 2, '3', '8'),
(47, 'XI', 3, '3', '8'),
(48, 'XII', 1, '14', '8'),
(49, 'XII', 2, '236', '8'),
(50, 'XII', 3, '230', '8'),
(51, 'X', 1, '23', '6'),
(52, 'X', 2, '229', '6');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_jurusan`
--

CREATE TABLE `kepala_jurusan` (
  `id_kp_jurusan` int(100) NOT NULL,
  `nama_kp_jurusan` varchar(100) NOT NULL,
  `status` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(90) NOT NULL,
  `nama_mapel` varchar(90) NOT NULL,
  `type_mapel` varchar(90) NOT NULL,
  `kkm` varchar(900) NOT NULL,
  `id_jurusan` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `type_mapel`, `kkm`, `id_jurusan`) VALUES
(1, 'Bahasa Indonesia', 'Non produktif', '75', NULL),
(2, 'Bahasa Inggris', 'Non produktif', '75', NULL),
(3, 'Sejarah', 'Non produktif', '75', NULL),
(8, 'Olahraga', 'Non produktif', '75', NULL),
(9, 'Matematika', 'Non produktif', '75', NULL),
(10, 'Pemrograman Berbasis Objek', 'Produktif', '75', '8'),
(11, 'Bahasa Sunda', 'Non produktif', '75', NULL),
(12, 'Basis Data', 'Produktif', '75', '8'),
(13, 'Pemrograman Web', 'Produktif', '75', '8'),
(14, 'Pemodelan Perangkat Lunak', 'Produktif', '75', '8'),
(15, 'Pemrograman Dasar', 'Produktif', '75', '8'),
(16, 'Fisika', 'Non produktif', '75', NULL),
(17, 'Perakitan PC', 'Produktif', '75', '6'),
(18, 'Dasprog', 'Produktif', '75', '6'),
(19, 'Cisco', 'Produktif', '75', '6'),
(20, 'Seni Budaya', 'Non produktif', '75', NULL),
(21, 'Pendidikan Agama Islam', 'Non produktif', '75', NULL),
(22, 'Pendidikan Agama Kristen', 'Non produktif', '75', NULL),
(23, 'KP RPL', 'Produktif', '75', '8');

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
(1, '2018_02_15_033502_create_timeline_table', 1),
(2, '2018_02_15_040630_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('dc516e88-b15d-4462-b545-1fa26a3e5c9b', 'App\\Notifications\\CommentNotification', 236, 'App\\User', '{"id":"Andhika Saputra","data":"mengomentari postingan anda!","comment":"<p>Alhamdulillah terima kasih pak dadan, aminn sugan sayah bisa masuk ke perguruan tinggi tea yah pak, do&#39;a kan saja. Dan sayah moal lenggggg deui ayeuna mah&nbsp;<strong>HAHAHAHAHAHAHA!<\\/strong><\\/p>","postmu":"54","last_row":5}', '2018-02-26 09:58:01', '2018-02-26 09:39:26', '2018-02-26 09:58:01'),
('c974b520-b537-4be8-b63b-005618239a93', 'App\\Notifications\\CommentNotification', 236, 'App\\User', '{"id":"Rifqi Subagja","data":"mengomentari postingan anda!","comment":"<p>Pak ai ke sayah engga pak? sad :(<\\/p>","postmu":"54","last_row":7}', '2018-02-26 09:58:01', '2018-02-26 09:43:25', '2018-02-26 09:58:01'),
('c84e686e-9f10-4975-9307-5d5171a95194', 'App\\Notifications\\CommentNotification', 236, 'App\\User', '{"id":"Rifqi Subagja","data":"mengomentari postingan anda!","comment":"<p>Baeud ah pak :(((( padahal saya24 jam nonstop belajar mtk :((<\\/p>","postmu":"54","last_row":8}', '2018-02-26 09:58:01', '2018-02-26 09:55:24', '2018-02-26 09:58:01'),
('7df60ddd-1cfb-430f-8541-9e64a23cbd20', 'App\\Notifications\\CommentNotification', 236, 'App\\User', '{"id":"Rifqi Subagja","data":"mengomentari postingan anda!","comment":"<p>Njir<\\/p>","postmu":"54","last_row":12}', NULL, '2018-02-26 10:06:07', '2018-02-26 10:06:07'),
('e11ee068-5655-4284-b437-2c9e12da28a2', 'App\\Notifications\\CommentNotification', 236, 'App\\User', '{"id":"Andhika Saputra","data":"mengomentari postingan anda!","comment":"<p>:v<\\/p>","postmu":"54","last_row":13}', NULL, '2018-02-27 07:56:59', '2018-02-27 07:56:59'),
('cf7303b5-e222-4591-b91c-3339c16f835a', 'App\\Notifications\\CommentNotification', 11, 'App\\User', '{"id":"Rachmizard","data":"mengomentari postingan anda!","comment":"<p>Wkwk kok ngakak&nbsp;<\\/p>","postmu":"56","last_row":14}', NULL, '2018-02-27 08:00:33', '2018-02-27 08:00:33'),
('49f48ac5-6199-462d-aa78-f5b993df0574', 'App\\Notifications\\CommentNotification', 11, 'App\\User', '{"id":"Rachmizard","data":"mengomentari postingan anda!","comment":"<h1>WKWK<\\/h1>","postmu":"56","last_row":16}', NULL, '2018-02-27 08:02:26', '2018-02-27 08:02:26'),
('33985b0b-9e5a-4d04-a065-71cf35a930f3', 'App\\Notifications\\CommentNotification', 11, 'App\\User', '{"id":"Bayu Dirga Pratama","data":"mengomentari postingan anda!","comment":"<p>Njir si abah&nbsp;<\\/p>","postmu":"56","last_row":17}', NULL, '2018-02-27 10:48:31', '2018-02-27 10:48:31'),
('2258cc39-c04c-479d-ba96-53224b80b675', 'App\\Notifications\\AcceptedVerification', 254, 'App\\User', '{"id":"Rachmizard","data":"Akun mu berhasil di verifikasi!"}', '2018-02-27 13:40:36', '2018-02-27 13:39:46', '2018-02-27 13:40:36');

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
-- Table structure for table `rekap_nilai`
--

CREATE TABLE `rekap_nilai` (
  `id` int(90) NOT NULL,
  `id_siswa` varchar(90) NOT NULL,
  `id_mapel` varchar(90) NOT NULL,
  `id_kelas` varchar(90) NOT NULL,
  `id_jurusan` varchar(900) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `id_tahun` varchar(200) NOT NULL,
  `tugas1` decimal(10,0) NOT NULL,
  `tugas2` decimal(10,0) NOT NULL,
  `tugas3` decimal(10,0) NOT NULL,
  `nilai_sikap` int(90) NOT NULL,
  `nilai_pengetahuan` int(80) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekap_nilai`
--

INSERT INTO `rekap_nilai` (`id`, `id_siswa`, `id_mapel`, `id_kelas`, `id_jurusan`, `semester`, `id_tahun`, `tugas1`, `tugas2`, `tugas3`, `nilai_sikap`, `nilai_pengetahuan`, `uts`, `uas`) VALUES
(12, '11', '17', '48', '8', '5', '1', '89', '80', '85', 87, 90, 90, 90),
(13, '11', '10', '48', '8', '5', '1', '90', '90', '90', 87, 80, 85, 90),
(14, '11', '2', '48', '8', '5', '1', '78', '80', '84', 80, 90, 89, 85),
(15, '11', '9', '48', '8', '5', '1', '80', '80', '80', 78, 78, 78, 78),
(16, '11', '9', '48', '8', '1', '1', '80', '80', '80', 80, 80, 76, 76),
(17, '11', '9', '48', '8', '1', '1', '80', '80', '80', 80, 80, 80, 80),
(18, '11', '9', '48', '8', '2', '1', '80', '78', '78', 78, 90, 80, 80),
(19, '11', '12', '48', '8', '5', '1', '80', '80', '80', 80, 80, 78, 89),
(20, '11', '12', '48', '8', '5', '1', '80', '80', '80', 80, 80, 78, 89),
(21, '11', '12', '48', '8', '5', '1', '80', '80', '80', 80, 80, 78, 89);

-- --------------------------------------------------------

--
-- Table structure for table `spec_kelas`
--

CREATE TABLE `spec_kelas` (
  `id` int(90) NOT NULL,
  `jumlah_kelas` int(90) NOT NULL,
  `tingkat_kelas` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tahun` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id`, `tahun`) VALUES
(1, '2017/2018'),
(2, '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shared_user` varchar(900) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shared_desc` varchar(900) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` varchar(900) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `id_user`, `post`, `shared_user`, `shared_desc`, `read_at`, `created_at`, `updated_at`) VALUES
(42, '1', '<h1><img alt="LOGO SMKN 13 BANDUNG CUY" src="https://s17.postimg.org/bfpk18wcv/default.jpg" style="height:285px; margin-bottom:20px; margin-top:20px; width:300px" /></h1>\r\n\r\n<h1>Ini lah LOGO SMKN 13 BANDUNG ya..</h1>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '2018-02-25 17:01:25', '2018-02-25 17:01:25'),
(43, '1', '<p>tsukeu ueni gomibako ga arimasu, itulah yang saya tahu selaama saya belajar jepang 2 semester ini :v</p>\r\n\r\n<p><img alt="" src="http://banzai-smkn13bdg.esy.es/wp-content/uploads/2015/05/4.jpg" style="height:225px; width:400px" /></p>', NULL, NULL, NULL, '2018-02-25 17:17:23', '2018-02-25 17:17:23'),
(44, '11', '<p><iframe align="middle" frameborder="1" height="400" longdesc="NGAKAK SO HARD" scrolling="no" src="https://www.youtube.com/watch?v=lujDfE5rcfE" width="400"></iframe></p>', NULL, NULL, NULL, '2018-02-25 17:30:11', '2018-02-25 17:30:11'),
(45, '11', '<p><iframe frameborder="0" scrolling="no" src="https://www.youtube.com/watch?v=lujDfE5rcfE"></iframe></p>', NULL, NULL, NULL, '2018-02-25 17:32:22', '2018-02-25 17:32:22'),
(46, '1', '<h1><strong>Kedatangan Murid Teladan!!</strong></h1>\r\n\r\n<p><strong>SMKN 13 Bandung di datangi oleh alumni murid teladan!</strong></p>\r\n\r\n<p><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS93FEhq7ezf1Getb-i2-CjUPtgSFyHVUGuKVgOeqX7eL8wUGWfPA" /></p>', NULL, NULL, NULL, '2018-02-25 17:39:47', '2018-02-25 17:39:47'),
(47, '1', '<h3>Acara lepas sambut kepala SMK N 13 Bandung Drs. H. Entis Sutresna, MSi. Dengan Bapa Ino Soprano, S.Ps. M.M.Pd. Jumat 4 Agustus 2017.</h3>\r\n\r\n<p><img alt="" src="https://scontent.fcgk2-1.fna.fbcdn.net/v/t1.0-9/20526341_10155498468215011_934511659411511809_n.jpg?oh=4f58c2d48f020a364b2cc7038a972f05&amp;oe=5B0575F5" style="height:540px; width:960px" /></p>', NULL, NULL, NULL, '2018-02-25 17:43:37', '2018-02-25 17:43:37'),
(48, '1', '<p><img alt="" src="https://scontent.fcgk2-1.fna.fbcdn.net/v/t1.0-9/14517423_10154495233125011_4236663400910738761_n.jpg?oh=9000e970bd63563013533723f92f7058&amp;oe=5B094A5E" style="height:720px; width:720px" /></p>\r\n\r\n<p>Job Matching tea waaa</p>', NULL, NULL, NULL, '2018-02-25 17:48:36', '2018-02-25 17:48:36'),
(49, '1', '<p>aaaa</p>', NULL, NULL, NULL, '2018-02-25 17:57:13', '2018-02-25 17:57:13'),
(50, '1', '<h2>Tebak siapa ini hayo? Yang bisa tebak di kasih uang.</h2>\r\n\r\n<p><img alt="" src="http://127.0.0.1:8000/uploadgambar/rifqi.jpg" style="height:750px; width:500px" /></p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '2018-02-25 18:01:43', '2018-02-25 18:01:43'),
(52, '1', '<p>&nbsp;</p>\r\n\r\n<h2 style="color: rgb(170, 170, 170); font-style: italic;"><strong>Ini adalah nama siswa yang didaftar untuk simulasi pengetestan fiture diskusi group</strong></h2>\r\n\r\n<table cellspacing="0" style="width:599pt">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:170pt"><strong>Nama pengguna</strong></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:75pt"><strong>Username</strong></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:185pt"><strong>Verifikasi sebagai</strong></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:137pt"><strong>Email</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Rachmizard</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">admin</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai Admin</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">rachmizard@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Saeful Hamzah</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10192012912</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai Guru</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">saeful@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Isrinn Winadry</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10212121212</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai Admin</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">isrinn@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Annisa Firsta</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10151520</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">annisa@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Arabella Christina</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10151520</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">arabella@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Hanna Annisa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10151520</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">hanna@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Dhaffa Gustiadi Kurniawan</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10151518</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">dhaffa@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Andhika Saputra</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">101515915</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">andhika@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Bayu Dirga Pratama</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">101515916</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">ubay@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Devani Safitri</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">101515917</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">devani@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Adhi Ismail</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">adhimeong</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai Guru</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">adhimeong@gmail.com</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, '2018-02-26 08:44:52', '2018-02-26 08:44:52'),
(53, '1', '<table class="table table-hover" cellspacing="0" style="width:599pt">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:32pt"><strong>#</strong></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:170pt"><strong>Nama pengguna</strong></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:75pt"><strong>Username</strong></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:185pt"><strong>Verifikasi sebagai</strong></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap; width:137pt"><strong>Email</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Rachmizard</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">admin</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai Admin</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">rachmizard@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Saeful Hamzah</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10192012912</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai Guru</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">saeful@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Isrinn Winadry</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10212121212</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai Admin</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">isrinn@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Annisa Firsta</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10151520</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">annisa@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Arabella Christina</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10151520</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">arabella@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Hanna Annisa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10151520</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">hanna@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Dhaffa Gustiadi Kurniawan</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">10151518</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">dhaffa@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Andhika Saputra</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">101515915</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">andhika@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Bayu Dirga Pratama</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">101515916</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">ubay@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Devani Safitri</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">101515917</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai siswa</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">devani@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Adhi Ismail</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">adhimeong</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">Terverifikasi sebagai Guru</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">adhimeong@gmail.com</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, '2018-02-26 08:46:58', '2018-02-26 08:46:58'),
(54, '236', '<p>Saya salut sumpah sama anak siswa kelas XII-RPL I nu ngarana Andhika Saputra nis 101515915, saya lihat dia memang anak yang baik dan cerdas, mudah mudahan mau belajar tingkat lagi, kkan rek ka perguruan tinggi maenya weh, sok sugan di didiri kamu ada kemauan untuk belajar dan bersungguh sungguh</p>', NULL, NULL, NULL, '2018-02-26 09:33:43', '2018-02-26 09:33:43'),
(55, '252', '<p>Add WA : 089374637121</p>\r\n\r\n<p>line : sheylarianti123</p>\r\n\r\n<p>Sorry numpang promosi heheh :)) yang mau chatan boleh kontak nomor/idline&nbsp;di atas :))</p>', NULL, NULL, NULL, '2018-02-26 10:13:39', '2018-02-26 10:13:39'),
(56, '11', '<h2>Saya ganteng kie euy mantap nu moto na euy kualitas mantappp</h2>\r\n\r\n<p><img alt="" src="http://127.0.0.1:8000/uploadgambar/abah.jpg" style="height:300px; width:200px" /></p>', NULL, NULL, NULL, '2018-02-27 07:59:06', '2018-02-27 07:59:06'),
(57, '254', '<h2><strong>Bagi yang belum tau apa itu pagination di laravel nih</strong></h2>\r\n\r\n<h3>Paginating Query Builder Results</h3>\r\n\r\n<p>There are several ways to paginate items. The simplest is by using the&nbsp;<code>paginate</code>&nbsp;method on the&nbsp;<a href="https://laravel.com/docs/5.6/queries">query builder</a>&nbsp;or an&nbsp;<a href="https://laravel.com/docs/5.6/eloquent">Eloquent query</a>. The&nbsp;<code>paginate</code>&nbsp;method automatically takes care of setting the proper limit and offset based on the current page being viewed by the user. By default, the current page is detected by the value of the&nbsp;<code>page</code>&nbsp;query string argument on the HTTP request. Of course, this value is automatically detected by Laravel, and is also automatically inserted into links generated by the paginator.</p>\r\n\r\n<p>In this example, the only argument passed to the&nbsp;<code>paginate</code>&nbsp;method is the number of items you would like displayed &quot;per page&quot;. In this case, let&#39;s specify that we would like to display&nbsp;<code>15</code>items per page:</p>', NULL, NULL, NULL, '2018-02-27 18:50:04', '2018-02-27 18:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(90) NOT NULL DEFAULT '0',
  `id_kelas` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Verified',
  `id_jurusan` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Verified',
  `username` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Verified',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tmp_lahir` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `tgl_lahir` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `agama` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `goldar` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `alamat` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `nama_ortu` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `pekerjaan_ortu` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `jenis_kelamin` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `nip` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `photo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Setting',
  `id_mapel` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `id_kelas`, `id_jurusan`, `username`, `remember_token`, `created_at`, `updated_at`, `tmp_lahir`, `tgl_lahir`, `agama`, `goldar`, `alamat`, `nama_ortu`, `pekerjaan_ortu`, `jenis_kelamin`, `nip`, `photo`, `id_mapel`) VALUES
(1, 'Head Admin', 'headadmin@gmail.com', '$2y$10$TAJqFQsKYxOujbAV/8ciOuYI3xuVRQVuX8.bbzQzimiuVkGvL39mK', 2, '', '', 'headadmin', 'V6SosmQPDeJJsrth2NkpRHhi4bELcyXvP4JPGwTZg1fY7vCS5zdQex8rOomK', '2018-01-26 13:56:54', '2018-02-27 16:50:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1519750215.jpg', '0'),
(4, 'Isrinn Winadry', 'isrinn@gmail.com', '$2y$10$vbledybnF1biZve3eIeun..rWx34RallDJsLAJaP3g9ziTc/pRLVG', 3, '19', '5', '10212121212', 'OpXTrOe0BczHtkz65U7gN1lyVLpAIFV6UQ4ZRV1TGWrhPwz2VdekaMzomYhV', '2018-02-04 21:21:13', '2018-02-27 08:06:24', 'Cidurian', '2018-02-07', 'Islam', 'O', 'Cidurian', 'Asep', 'Penyanyi', 'Laki-Laki', 'Not Verified', 'Penguins.jpg', '8'),
(5, 'Annisa Firsta', 'annisa@gmail.com', '$2y$10$b/VmH9tSKipCNU5VupOc/.90nbzn4SFoiGOeGMXyo12BT0lqGax6i', 1, '31', '5', '10151520', 'mpws4Zy88lQk5Q5shqFieJ11nA0DsIYNwMpfKkpX5NKEoMtJjZ1OzESJhOnY', '2018-02-09 02:05:41', '2018-02-10 04:38:35', 'Sumedang', '2018-02-10', 'Islam', 'O', 'Ujung Berung Komplek Indah permata biru no.18', 'Asep Maulana', 'Penyanyi', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(6, 'Arabella Christina', 'arabella@gmail.com', '$2y$10$m1f1o3pvKh7Y/HKcxNa5.OJrmQozbuvn6lOcV51.zUOMgc9SK9N8C', 1, '20', '5', '10151520', 'ciF7adDVrT0xoWo1nFpsre9MYb3rmJnw80vakQwn8VOMXrszKQeLhijnJEgg', '2018-02-09 03:05:13', '2018-02-09 03:09:36', 'Bandung', '2000-11-07', 'Islam', NULL, 'Antapani', 'George McMillan', 'Police Departemend di America', 'Not Verified', 'Not Verified', 'team3.jpg', 'Not Verified'),
(8, 'Hanna Annisa', 'hanna@gmail.com', '$2y$10$LOtdonRuPieZOw05iS2ZROA0OS6Lebsyjj/hiE54TINIOrET6oFD6', 1, '19', '5', '10151520', 'iHvKYHwmDixo02XrPoedYRtfQtOgTRTIocu5idYxlMTmuak7LnOUAID7o0ck', '2018-02-09 03:48:26', '2018-02-09 03:50:14', 'Jakarta', '2000-11-07', 'Islam', NULL, 'Setiabudi', 'George McAllister', 'Police Departemend di America', 'Not Verified', 'Not Verified', 'team2.jpg', 'Not Verified'),
(9, 'Dhaffa Gustiadi Kurniawan', 'dhaffa@gmail.com', '$2y$10$U4W2ROi4pl4/Hvmoq76WWecu5evixdPtrjnotJ4jE9Huc/RCJua7e', 1, '48', '8', '10151518', 'suPTQGwQLhOINlTtBtkFdaM1hQJ7okQpaxP4ZJFvjCK0d2h5RHZWxa6gqooy', '2018-02-09 04:09:36', '2018-02-27 16:22:39', 'Bandung', '2000-11-07', 'Islam', 'O', 'Rancaekek', 'Rendi', 'Pengusaha', 'Not Verified', 'Not Verified', '1519748558.jpg', 'Not Verified'),
(11, 'Andhika Saputra', 'andhika@gmail.com', '$2y$10$Lb17UXNq9uit/cxHMoiLueblMzWbn4hlP31fHbxIFX8ISxtAu3epq', 1, '48', '8', '101515915', 'O43W5fQMXjzXHAn6sFNWWC8H8FBk8jvQmkHIniuqA0EM6n3QPxzowOSxJB2J', '2018-02-09 05:19:02', '2018-02-27 16:53:08', 'Bandung', '2000-11-07', 'Islam', 'O', 'Cinangka', 'Ujang', 'Penyanyi', 'Not Verified', 'Not Verified', '1519750387.jpg', 'Not Verified'),
(12, 'Bayu Dirga Pratama', 'ubay@gmail.com', '$2y$10$GRjLEBA818JLq0HwhK7rBO6g5W3p4sHyXK0CYApFna0DXuxexEm.C', 1, '48', '8', '101515916', 'TO61hWqKkoJjTTC4tGar4w3jmuz171dQTNwWOVbhdx8D9vhVoTHN0yA4BhBv', '2018-02-09 05:19:43', '2018-02-27 16:37:54', 'Bandung', '2000-11-07', 'Islam', NULL, 'Cisaranten', 'Hurip', 'Pengusaha', 'Not Verified', 'Not Verified', '1519749472.jpg', 'Not Verified'),
(13, 'Devani Safitri', 'devani@gmail.com', '$2y$10$UkzVyJjfqD/97aM179KHk.MB1JHFBlkeEHo0ANuC8eSe8a9eyhLUK', 1, '48', '8', '101515917', 'e9ZdYMWGdmUeAB4cytx85X2giBuFolqadOgPwSdcZ6zM0fasPNRsMR6ThKNU', '2018-02-09 05:21:02', '2018-02-27 16:48:26', 'Bandung', '2000-11-20', 'Islam', NULL, 'Bandung', 'Ujang', 'PNS', 'Not Verified', 'Not Verified', '1519750104.jpg', 'Not Verified'),
(14, 'Adhi Ismail', 'adhimeong@gmail.com', '$2y$10$tI.ZYHRmmdyWAA.mTd9bputHAVUS.SS/ADfnBtI4tSnbvaSM13FSu', 3, 'Not Verified', 'Not Verified', '9181726126666', 'b9MWeVi77Zhz69jzqMa3vdXxAPCoPPpI9W1ea90Gc5oTJ6wozlFLRfuRe402', '2018-02-11 04:27:27', '2018-02-18 04:24:37', 'Garut', '1985-11-11', 'Islam', 'O', 'Jl.Pasuruan No.14', 'Not Verified', 'Not Verified', 'Laki-Laki', 'Not Verified', '568227.jpg', '10'),
(18, 'Dinda Amelia', 'dinda@gmail.com', '$2y$10$fh6ljM/0lNEPUS5QHIsumOaJMVzIbltUovz7e5wfgEePlYTEz0a76', 1, '48', '8', '101515919', '3ProNGSIVDZKGqPFeoXLoHYAYjEW0omcnzfmJlCUXneknEsdvA4JETVPLQBB', '2018-02-16 04:03:34', '2018-02-27 16:26:25', 'Antapani', '1999-02-12', 'Islam', 'O', 'Antapani', 'Asep Maulana', 'Penyanyi', 'Not Verified', 'Not Verified', '1519748784.jpg', 'Not Verified'),
(21, 'Fadjri Alfalah', 'fadjri@gmail.com', '$2y$10$rsrL0kyAPNnPiD5.Q0VubuZx4M0.rFB3RsJ2h7PHWvg.bp43tf5F6', 1, '48', '8', '101515921', 'cztM5e7AnoKnDcLd8pnQXc0434uPAiwnZBgWj0dtro49A82T1yVum3PSSwVZ', '2018-02-16 06:30:24', '2018-02-27 16:27:10', 'Bandung', '2000-07-05', 'Islam', 'O', 'Cidurian Utara RT.04/RW.08 Kecamatan buah batu', 'Usman', 'Parkour', 'Not Verified', 'Not Verified', '1519748829.jpg', 'Not Verified'),
(22, 'Erlangga Dhaffa', 'erlangga@gmail.com', '$2y$10$w7qYUnv.wsWO8XDI5wO1keyND/aulSoA/MO2dT5xYY9dpeK8Jw.d2', 1, '48', '8', '101515922', 'ruT5Yi8PS5JjzuF0CIBxovr5pVGCY7UR10htZ32i5pNuqnEtuEICPLa4Uw27', '2018-02-16 06:40:30', '2018-02-18 04:10:56', 'Kiara Conding', '2000-12-11', 'Islam', 'O', 'Bandung', 'Popong', 'Penyanyi', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(23, 'Nogi Muharram', 'nogi@gmail.com', '$2y$10$DZnpCqkn7yyr8oI4pB1.4OpGfiGQdQSusAvwC3ilD2waL4HMcVMUm', 3, 'Not Verified', 'Not Verified', 'nogiduluah', 'X0HOlO0IDRh7ZenzuLJUyNGUJKUiA9OMKt8jnUc9LbfzBup66In5RPPVzHaj', '2018-02-18 02:00:10', '2018-02-20 15:20:31', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', '17'),
(24, 'Gabriele Pernando Tarigan', 'gabriele@gmail.com', '$2y$10$KGmzFSFoGrZgLP1JkFlU8.gSgVXsQQJhf2fkgckd88NZZgGzOSDYK', 1, '48', '8', '101515925', '51mCegPmIzAaMvcjP81uLzomCje2KEzSYwFpH80TBoUslzlYJCXTVpu9t35I', '2018-02-19 02:23:45', '2018-02-27 16:27:54', 'Medan', '2000-08-28', 'Kristen', 'O', 'Cisaranten', 'George McAllister', 'Penyanyi', 'Not Verified', 'Not Verified', '1519748873.jpg', 'Not Verified'),
(27, 'Ivan Rizky', 'ivan@gmail.com', '$2y$10$6qclm6GOgN30Gu54wZ5oUugq1YLFfTjNBpAAU3QMVFpML8lQkcXm2', 1, '30', '8', '101515931', 'O0NOimx5FRl2exnW2aGM7YHP4HghPajrnKxW2Vc9JpJR6NwiCnyh2opAzhFk', '2018-02-19 08:19:36', '2018-02-19 10:02:54', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(34, 'Jilan Hafizh', 'jilan@gmail.com', '$2y$10$nlM90f5KdRNYxzmSp6dAcuwY6nnQ/2nqlysQBUE3B31pgkuc04AlO', 1, '30', '8', '101515932', 'Yqp8kIMhbcqMHYPE2OV3DhZjt4kWauVaeHsJ4vO6zCiJEvelVPuYTdgEfirj', '2018-02-19 09:54:26', '2018-02-19 16:02:54', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(35, 'Ludi Priyadi', 'ludi@gmail.com', '$2y$10$6rkb.9KtF5sLibhm.A1Rbeh91oM/HW7rxgN2Jr1sTxXfBewrUCsHe', 1, '30', '8', '101515935', '0DvvvBELqOCtc9TatmA49grhR74uWDni6UQtoya4JerQXif7xemrs1Bvjg2Q', '2018-02-19 10:06:12', '2018-02-19 16:03:25', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(36, 'Muhammad Isrynn W', 'isrinn@gmail.com', '$2y$10$H1e0ZKY8Ssuly567P0kL9ewJSMcku52j5j3RPB.ncB10AkAwWefjO', 1, '30', '8', '101515936', 'uJPM3OPxt6Y9MQbzIUBXqUktRLyqK4kZnt5GxZeFBFjHZLgNyI8vY65qN9TK', '2018-02-19 16:01:30', '2018-02-24 05:11:49', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(37, 'Muhamman Rayandika A', 'rayandika@Gmail.com', '$2y$10$.4HYfVR/5dAe9cJXjiPVxOJlvO./Iwx7YgAUPULb8v/IPsbo/TcVi', 1, '30', '8', '101515937', 'trFp0xdm1hwetjv7JK2zkFR3XiSveZY8zbB5L0VySRONpTWFOiJGDzHu7X95', '2018-02-19 22:48:02', '2018-02-19 22:52:14', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(38, 'Muhammad Alfian S', 'alfian@gmail.com', '$2y$10$UVgPcSmy27uZ4uPadrcoWOUruSEyk1G7seuLqcqVSh16IfgC6xP8W', 1, '30', '8', '101515940', 'MuVL1EIycQPOC5SV2cAbMoEG0zG2fR9pZ6bgGziBalTrV8zfOouAA6uOwFAY', '2018-02-20 00:37:44', '2018-02-27 16:29:44', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', '1519748983.jpg', 'Not Verified'),
(39, 'Opak Ranginang', 'opak@gmail.com', '$2y$10$QRWIWC5qQ6Vr.KkR14lFEOqFjplN3QAJZXfeD.iYvdOQpQU4q.G/a', 4, '30', '8', '101515941', 'ToVptdvsLW3vDTiFQi2JBmksv8HZ8V6jhWUNCdfvy1QGlx6nIaE4c4reuOYJ', '2018-02-20 01:28:42', '2018-02-20 14:50:09', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(41, 'Dicka Ananda A', 'dika@gmail.com', '$2y$10$m5DdUutylIqa8nFOOXJa8uJpgYW9PvwKE2RC9D8N9tLch/jD8Gz9S', 1, '30', '8', '101515918', '5s5jvFHCbYxA3rSD3baBLbFUd0dxjFsOggkYII9EDwxKAtZtnLtlFW4pGTeI', '2018-02-20 13:32:34', '2018-02-27 16:23:24', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', '1519748603.jpg', 'Not Verified'),
(42, 'Asia Labadie Jr.', 'patrick96@example.org', '$2y$10$E7eEniWWK4RROaAyO93yJuTSSWsP1fDUdSj0bjFOF.OfhiDIMLsHK', 0, 'Not Verified', 'Not Verified', 'Not Verified', '5RZ0qN1cph9MDDEPlBYtkND5wcan2MjgkavFDENnELi3Zc7obR9w00nOCx4a', '2018-02-20 16:08:58', '2018-02-20 16:25:23', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(43, 'Shana Koch', 'trisha.paucek@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '3vrUKXUAH2', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(44, 'Dr. Luisa Shields', 'shanon.nikolaus@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Px9V82upa4', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(45, 'Anastacio Hodkiewicz II', 'jonas.mayert@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'cMDHOR6Llp', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(46, 'Janie Jacobi', 'collin.wilkinson@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'qur3iQYXoq', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(47, 'Nichole Connelly', 'manuel26@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'zcuPzcMuGY', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(48, 'Fidel Yost', 'yratke@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'yopzqCUgwf', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(49, 'Donna Luettgen', 'ndubuque@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'VZCFhbyLAu', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(50, 'Russ Williamson', 'auer.rachael@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'KoZJMx4X5P', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(51, 'Lester Brown', 'eveline62@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'cFYXJAqxV1', '2018-02-20 16:08:58', '2018-02-20 16:08:58', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(52, 'Nasir Erdman', 'htorphy@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'oLz9OmHYw2', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(53, 'Rollin Mayert V', 'aturcotte@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ZobaSzgQkM', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(54, 'Melyna Pfannerstill', 'cameron.okuneva@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'LU9jUoayO6', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(55, 'Lou Cole', 'jpadberg@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'JRvXlqCKpI', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(56, 'Ulices Padberg', 'ahmad.hessel@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'EcnpXyqezS', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(57, 'Troy Steuber', 'karianne.baumbach@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '6kHyQY50jJ', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(58, 'Chandler Thompson', 'shermann@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'lhaRwfo6fb', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(59, 'Lonie Treutel', 'odouglas@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'WGKlYcUqpg', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(60, 'Creola Graham', 'maggie22@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'b240hxYK7s', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(61, 'Ms. Nina Lindgren', 'letitia.mccullough@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'EAMmS9VMUm', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(62, 'Dustin Frami', 'zula38@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ShindFwMl7', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(63, 'Julia McClure', 'yprice@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'T3AxqF9ykG', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(64, 'Mr. Jayme Langworth', 'dicki.jenifer@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'j0c0QJ8PF1', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(65, 'Mr. Deontae Kuhn', 'evangeline70@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'PEILa1tfPy', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(66, 'Annalise Raynor', 'lina18@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '6jpdqeNoIn', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(67, 'Ms. Prudence Kris PhD', 'blick.marjory@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'AqSbQ6t66Z', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(68, 'Rebekah Friesen', 'antonietta24@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'btpS3xbTgQ', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(69, 'Prof. Issac Senger V', 'otillman@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Z3vXNjLZn0', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(70, 'Mustafa Koepp', 'aniya82@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'CcVa12glLq', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(71, 'Melvina Cremin Sr.', 'xlang@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'RXKTPEB5Lk', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(72, 'Lorenz Jenkins', 'cassie53@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'CmUsiecDAT', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(73, 'Terrance Hansen', 'shields.juvenal@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '3f7BXUF0P6', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(74, 'Dell McCullough', 'umetz@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'aKoat5ywYy', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(75, 'Jaden Spencer', 'betsy48@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'oCeSBoalWp', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(76, 'Orin Nicolas IV', 'hyman88@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ex6Wq3I5nQ', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(77, 'Prof. Odie Cronin', 'winifred22@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'VQ56Y0XDJc', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(78, 'Ada Hyatt', 'eemmerich@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'e2NwnGPQVy', '2018-02-20 16:09:56', '2018-02-20 16:09:56', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(79, 'Clement Berge DVM', 'dlynch@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '5Vkbk7DlTU', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(80, 'Nyah Mills', 'fmuller@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'mAssRBxz8g', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(81, 'Lenna Schneider', 'lewis77@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'yXUCHpudqf', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(82, 'Bobbie Gleichner', 'lindgren.elissa@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'B2ePXD57Lx', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(83, 'Laurine Kautzer II', 'nmayer@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'HqA8bqxhrj', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(84, 'Zion Kshlerin', 'dstiedemann@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'v0GdMvdlGS', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(85, 'Ellen Schroeder', 'zboncak.ford@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'csUyzDGhey', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(86, 'Maybell Beer', 'kilback.dax@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '01S6Dm82b2', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(87, 'Prof. Ashtyn Wolff', 'lueilwitz.elody@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Jl5BJO2qA1', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(88, 'Miss Cleta O''Keefe MD', 'reichel.josefina@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'qQWNKZtM9z', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(89, 'Ms. Margret Hamill V', 'bauch.hildegard@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'lJXVzO0OVy', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(90, 'Stephanie Kreiger', 'eleanore.daniel@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '8IxRYf4BkC', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(91, 'Hertha Wuckert III', 'presley.fay@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'd3DmyBlqF7', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(92, 'Adela Weimann', 'hroberts@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '161SqexyYy', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(93, 'Prof. Chanelle Corwin', 'gino.swaniawski@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'KuHrEZwm3e', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(94, 'Miss Zena Murazik MD', 'dorthy.monahan@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'uqjtPOh7wp', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(95, 'Rodolfo Koelpin', 'ward.durward@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'xF1QDuAX2g', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(96, 'Gaetano Jacobson', 'turcotte.nickolas@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '8fvzYw3BVH', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(97, 'Jeramy Wuckert', 'jess.boyer@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'zi99EmeBlE', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(98, 'Una Ankunding', 'annette53@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'FRAPoUVOKi', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(99, 'Helena Blick', 'lcole@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'sZVUVOEST2', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(100, 'Price Fadel', 'heaney.judge@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'TGIj8RYBCR', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(101, 'Norwood Prosacco', 'olson.jonatan@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'uE5VPrYA41', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(102, 'Mr. Alek Lowe III', 'bonita.yost@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'fSRgAnf931', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(103, 'Charley Renner', 'swisozk@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'LEgpXIYGwP', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(104, 'Prof. Elton Jerde', 'sebastian.ohara@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '22GUrkqHpT', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(105, 'Emmalee Boyle', 'osinski.haylie@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'MKCEO9gWPF', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(106, 'Miss Aurore Cole V', 'wehner.adalberto@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ExtPG6mqNv', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(107, 'Randall Schulist', 'anna89@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'bqsMp40m66', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(108, 'Mrs. Charlotte Terry PhD', 'drew.zieme@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'jCav1Xj3oB', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(109, 'Tara Kutch', 'princess90@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Ax93EMMSJu', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(110, 'Vincenzo Treutel', 'rpollich@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'IJCTtnxkER', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(111, 'Virginia Schaden Sr.', 'efrain.orn@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'FgiAYvK6N1', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(112, 'Johathan Anderson', 'smurazik@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'fUYrJkbCCN', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(113, 'Beatrice Reynolds', 'arlie89@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ewHFoo0A5R', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(114, 'Elbert Herzog III', 'klocko.cary@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'gLwpN9Z9bE', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(115, 'Prof. Xavier Mayert', 'madalyn03@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'm43fxvZV4r', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(116, 'Aisha Fadel', 'omonahan@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '4lwhEcMcCp', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(117, 'Ms. Lexie Carroll', 'florida.wolf@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '4FsamGMBGe', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(118, 'Ms. Blanche Raynor V', 'harvey31@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ZTJxoMuIGU', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(119, 'Mr. Alexander Runolfsdottir', 'quigley.benton@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'YIunRi7pX1', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(120, 'Prof. Alexandro Pollich', 'zboncak.keenan@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ef7dgiLrAL', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(121, 'Charlene Mayert', 'olaf.casper@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'sp3QlgomZS', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(122, 'Rashad Brakus', 'vonrueden.foster@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'YDe29mQ312', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(123, 'Prof. Justina Borer Sr.', 'jose.schmeler@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ZiecDGEVdv', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(124, 'Mireille Altenwerth', 'cassin.karson@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ILN04ZzwY1', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(125, 'Prof. Flavio Rogahn III', 'cummerata.jarred@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'evM4bJtpqa', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(126, 'Patrick Leffler', 'mertz.shyanne@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'nVFoPJyTiB', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(127, 'Melyssa Zulauf', 'abel52@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'e4fDcVu3fL', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(128, 'Cody Bruen Sr.', 'theodore03@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'BoHZlXknDK', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(129, 'Arturo Hyatt III', 'herzog.gus@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'srOrNIF9lr', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(130, 'Prof. Fred Dooley', 'franecki.howard@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'HUDpErQpyJ', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(131, 'Dr. Adaline Bahringer Sr.', 'boyer.helen@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '64UIA5hVjh', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(132, 'Dr. Marcos Crooks', 'lucas16@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'OhfEMF8tEa', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(133, 'Jayden Green', 'nsanford@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'XkP5WP8gMG', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(134, 'Drew Cormier', 'brandi89@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '516rHR9aPe', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(135, 'Jailyn Hilll', 'gcarter@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'OhCQAIrmXX', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(136, 'Prof. Woodrow Predovic', 'annette.veum@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'xcbzWD2V6W', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(137, 'Anna Willms', 'sierra.herman@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'BEcZaEV6eV', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(138, 'Marjory Skiles', 'karlie31@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'G4Dzak61lE', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(139, 'Caleigh Lang', 'lcorkery@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'gWNrV2xp1Q', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(140, 'Marlon Luettgen', 'wilber.padberg@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'LLmTug3mYg', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(141, 'Mr. Bret Gerhold', 'gbergstrom@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'u2XtCCeaBn', '2018-02-20 16:09:57', '2018-02-20 16:09:57', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified');
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `id_kelas`, `id_jurusan`, `username`, `remember_token`, `created_at`, `updated_at`, `tmp_lahir`, `tgl_lahir`, `agama`, `goldar`, `alamat`, `nama_ortu`, `pekerjaan_ortu`, `jenis_kelamin`, `nip`, `photo`, `id_mapel`) VALUES
(142, 'Eusebio Dooley', 'crawford.ledner@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '2kJbmKAXr4', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(143, 'Eulalia Hickle', 'cole.cleora@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'hI1Vv9Iwpt', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(144, 'Ms. Providenci Nicolas', 'liliana.vonrueden@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'M8TTiv1eib', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(145, 'Elton Hoppe', 'estel98@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'VanSjbIyGC', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(146, 'Laura Moen', 'torp.gerry@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'xiHYNWxEVz', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(147, 'Deontae Dietrich', 'uyundt@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '3VjsQSqs2A', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(148, 'Yazmin Sipes Sr.', 'hubert38@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'hZeG64vvcK', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(149, 'Hosea Moore', 'leonard06@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'GSgGGNHfKm', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(150, 'Ricardo Kemmer', 'reilly.bashirian@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ICa5vL7Fr3', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(151, 'Prof. Deanna Hartmann DDS', 'agleason@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'nDtK4AkS9D', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(152, 'Hermina Crist', 'emerson71@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'q2Fjk18jmQ', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(153, 'Adele Heidenreich', 'marguerite45@example.com', '$2y$10$E4hYQdjpvVkiR2OH8.5zWeKwQkkM.2H5z3jwe5hZiO785yU32KJPe', 2, 'Not Verified', 'Not Verified', 'admin4', 'tkDgR5glbZcDXXnyt8iw09PLhO1hxSNYJoTue7M8hkkMm6OKhcEWE7QDab6w', '2018-02-20 16:11:17', '2018-02-23 08:13:10', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(154, 'Salvador Hammes', 'edmond.shields@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '7V55TP4S2s', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(155, 'Kelton Turner III', 'sibyl.conn@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'U0zXXlK3si', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(156, 'Myrtie Russel', 'darrion.prosacco@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'VnSeMNAtZ5', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(157, 'Prof. Barney Veum V', 'econsidine@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '8YipVuQ0Y0', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(158, 'Mrs. Heaven Christiansen DDS', 'sadie.will@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'WaGpSXwYvp', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(159, 'Mrs. Ericka Pacocha', 'kody.donnelly@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'qhZIid7vqB', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(160, 'Devan Friesen Sr.', 'pasquale.terry@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'WJeaFVaJHy', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(161, 'Hailey Pollich PhD', 'cheaney@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'KsoFago6mF', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(162, 'Molly Powlowski I', 'shea78@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Nalf9693Ar', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(163, 'Miss Eleanore Kuhic', 'stuart36@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'l7yoNm1M0L', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(164, 'Dr. Cali Carroll', 'beier.donald@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Etql4mi8fG', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(165, 'Melany Kemmer DVM', 'hane.hazel@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'HPRywcX95T', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(166, 'Leann Moore Jr.', 'simonis.flossie@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'g6drnASqRn', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(167, 'Cale Stark', 'gwendolyn19@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '91JMf25L6h', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(168, 'Litzy Champlin', 'hbrakus@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'mEZpsYXqaz', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(169, 'Jonathan Pfeffer DVM', 'hilpert.maryam@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'LQ2icRhdg8', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(170, 'Dr. Isadore Herzog DVM', 'velda10@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'F13iZOQZst', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(171, 'Karelle Hilpert', 'chauncey.langworth@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '1n6SZ86TFL', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(172, 'Kian Beatty Jr.', 'zhills@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'KOOqMCt6mx', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(173, 'Pietro Champlin', 'jacey.goyette@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'NRKgapplpz', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(174, 'Prof. Madilyn Heathcote', 'lstamm@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Y04HIw04os', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(175, 'Ward Hirthe', 'crogahn@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '0qfTiv9nXQ', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(176, 'Ford Brakus MD', 'vanessa.abbott@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'IP06I0rFJG', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(177, 'Tito Stroman', 'mstiedemann@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'GjqmlNYL1S', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(178, 'Nels Murazik', 'mrice@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'BkYg8eq1xZ', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(179, 'Rodrick Ward', 'icassin@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'cXtJVpUpjq', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(180, 'Ima Osinski III', 'dmuller@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '9rvyhDJ47v', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(181, 'Zaria Pfeffer', 'albertha.heidenreich@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'TzpfsgideM', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(182, 'Norma Ritchie', 'jenkins.wade@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Jr7BdATMlv', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(183, 'Georgiana Becker', 'kamille.keeling@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'LxBtdPTXl5', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(184, 'Aric Goldner', 'maggio.scotty@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'uJve943rUh', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(185, 'Talon Wuckert', 'hoppe.whitney@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '1UxBG6sh9Z', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(186, 'Ms. Orpha Stehr', 'paucek.miracle@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'klahtlMWMt', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(187, 'Dewitt Stiedemann', 'mjerde@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'I0O2rr0ouo', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(188, 'Demond Rutherford', 'glowe@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'b8Y4UMAjEa', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(189, 'Dr. Thelma Eichmann', 'emmalee.fay@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '69lyjaLSvo', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(190, 'Lee Towne IV', 'alessandra99@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'PiQwkhTNzr', '2018-02-20 16:11:17', '2018-02-20 16:11:17', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(191, 'Christop Rempel', 'maybelle.weber@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '8lzuXKA8An', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(192, 'Zola Casper', 'lowe.kennith@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'fjJqrxpAAb', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(193, 'Mr. Alexandre Huel DVM', 'jpouros@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'O7fNFG2Acr', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(194, 'Lempi West', 'slangosh@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'LcPEP7Dc9c', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(195, 'Prof. Laurence Lynch PhD', 'rlindgren@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'VWQRXMYTfY', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(196, 'Mr. Glennie Pfeffer', 'kbreitenberg@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'JtVt24lMCD', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(197, 'Vernie Howe', 'tanya.lemke@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'ORfGRB3rqb', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(198, 'Octavia Welch', 'noreilly@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'PfjzaE4ySv', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(199, 'Rosalia Mertz MD', 'tstoltenberg@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'M1XINTXa0z', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(200, 'Clementine Lemke', 'vstracke@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'guXNWR0pXz', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(201, 'Alta McKenzie', 'oberbrunner.christophe@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'xV1bQ4td0H', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(202, 'Opal Wuckert DDS', 'buckridge.dallas@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'PGkfcSYvLU', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(203, 'Emmanuelle Lockman MD', 'kirlin.grayson@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'FCIzjRtXLs', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(204, 'Mrs. Imogene Brakus IV', 'fisher.beverly@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'i41nsjpIl8', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(205, 'Lora Paucek', 'pparker@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'YfS1TAaBSF', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(206, 'Mr. Clovis Sporer Sr.', 'chelsie84@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '0DtszM4yTf', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(207, 'Ron Gerhold', 'judy.walter@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '7iP5bMcVif', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(208, 'Angus Kihn', 'vicente.osinski@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'N7cAecYgOx', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(209, 'Gerry Johnson', 'kirstin72@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'Zsg4jN66Yf', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(210, 'Ms. Lyla McLaughlin I', 'erdman.agustin@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'dVvHuklIZu', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(211, 'Perry Lehner', 'pcronin@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'jmQJRqV7DM', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(212, 'Ephraim Parisian', 'sebastian27@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'zhMV3pBsli', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(213, 'Prof. Antwan Olson', 'mariana.goyette@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'UGnqRX8gVM', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(214, 'Jocelyn Lynch', 'breanna.borer@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'WcBUadutfq', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(215, 'Esmeralda Bins', 'rath.orlando@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '36odSu1lGD', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(216, 'Myriam Klein', 'cristal87@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'LfV83v5gFO', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(217, 'Mr. Kenneth Boyle III', 'luettgen.tia@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'XCMXhjf6o4', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(218, 'Jolie Bernier', 'yoshiko45@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '3DBM7s2dsG', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(219, 'Orie Cummings', 'lurline.schaefer@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'rqYPnhahgm', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(220, 'Mr. Camryn Orn', 'stacey42@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'KlTGcMjId7', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(221, 'Angeline Kirlin', 'odaniel@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', '4q2oXIDhuN', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(222, 'Ophelia Grant', 'nvon@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'mVqvgN6Ziu', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(223, 'Prof. Miller Bins DVM', 'greenholt.sunny@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'F0pzJQW9bz', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(224, 'Vern Koepp', 'saige52@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'aaqjcKIToG', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(225, 'Dr. Bonnie Turcotte', 'beer.raquel@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'DyUl4NbIGv', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(226, 'Mrs. Elenor Abernathy MD', 'norwood.walsh@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'djWVg4lmOr', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(227, 'Dr. Travon Corkery', 'runte.august@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'DFBfZJuTXk', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(228, 'Leola Schinner', 'gerardo37@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'Not Verified', 'Not Verified', 'Not Verified', 'CEF4dnauqD', '2018-02-20 16:11:18', '2018-02-20 16:11:18', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(229, 'Flossie Kassulke V', 'maria.reinger@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 3, 'Not Verified', 'Not Verified', 'Not Verified', '5zrlNohSAv', '2018-02-20 16:11:18', '2018-02-27 08:03:10', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', '16'),
(230, 'Bernard Schaefer PhD', 'hegmann.daniela@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 3, 'Not Verified', 'Not Verified', '123454321', 'Vk7BpsAGEk', '2018-02-20 16:11:18', '2018-02-27 08:03:43', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', '3'),
(231, 'Alejandra Runolfsson', 'hilbert.waters@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 'Not Verified', 'Not Verified', 'admin3', 'I9nvZdw666', '2018-02-20 16:11:18', '2018-02-22 03:24:13', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(236, 'Dadan Kardana', 'dadan@gmail.com', '$2y$10$gLQZxQ4bDqMM1EnzYH/1NeaVYwzq.Ll5dx3Fw2Dci8Jw/KhW.GSIe', 3, 'Not Verified', 'Not Verified', '0987654321', 'BKC63YYchpd5txzQwvSIwG64vEJtO7B4sAgnNRddLt02HZIsDCmODFOoXb1Q', '2018-02-20 17:20:00', '2018-02-26 09:18:13', 'Not Verified', '1976-11-07', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', '9'),
(237, 'Albert Eisenhower', 'alberte123@gmail.com', '$2y$10$idfwH6hF9tjZ19/pzL1/BuEWqEQh3905NLrnb64sTwijZrE0M3ck.', 4, 'Not Verified', 'Not Verified', 'kumahasayahweh', 'hN7T6LlHYivqupNbfqjLX9VwHoCeXfn1TspLiLJCtwohRyxntmgpNOxcBspP', '2018-02-20 18:27:54', '2018-02-20 18:28:36', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(238, 'Michael Alessandro', 'michael@gmail.com', '$2y$10$2911zWflojY0Gxn0Cq12U.mMjpo9YBKPKmKYYG97gSBjzmbiZjtam', 3, 'Not Verified', 'Not Verified', '123456789', NULL, '2018-02-21 03:26:04', '2018-02-25 08:26:38', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', '2'),
(239, 'Ricky Rizki', 'rickyrizki@gmail.com', '$2y$10$A8BmpV6wRadRX.zvJkBdIeWchsukY7YkIFPYx75oBVoSkfMY6YxGi', 1, '30', '8', '101515968', 'e1gSQQEx4c2poHirempqP5CLJGMu7LYLxIaSifK4enoItOdRfoHwWsBsoDPm', '2018-02-21 03:45:03', '2018-02-21 10:45:46', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'riki.jpg', 'Not Verified'),
(240, 'Alhambra Sukicpto', 'alhambra@gmail.com', '$2y$10$R423F.I01jcEsFb4KE9ooO1wGFwKpXO8/MeCtsyXc0226neGh80h.', 2, '30', '8', 'admin2', 'F8CdQTh7GxxILAj74REjYte5beojN4Q43jlWWgtR2VTwrFO00Adt0njnA40p', '2018-02-22 03:04:01', '2018-02-22 03:09:34', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(241, 'Nurhidayatullah', 'dayat@gmail.com', '$2y$10$fsh7hHcxsv3hqp7HSmkkw.v5LEUxM1EYtv1eHCxwpNzrZuCi/Rum6', 2, '22', '8', '101515954', 'LNIv8v8jHnFabGFuHofOIgNCOAHKUwhJLOTEXg53rR7Clv3BDJak6hOn4uLH', '2018-02-22 03:31:40', '2018-02-22 04:03:35', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(242, 'Muhammad Ridwan', 'ridwan@gmail.com', '$2y$10$Qq.9JoqfQNtt5mWYHZxYruJSz700WkyOKKnqCwUk89KoLZjBWzxCS', 1, '48', '8', '101515945', 'Jnoq8XMXD6ZaaKy9irTPY03hOTvLEjOEJgGEfKShEO5dTIM1LE3P1aBM25Sj', '2018-02-22 03:40:15', '2018-02-22 13:15:03', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(243, 'Gerry Firmansyah', 'gerry@gmail.com', '$2y$10$VoSI7aXVVzKULwZUPwmAh.XIczpQGT1F84./OhtbD/VyGMqrvtdP2', 1, '48', '8', '101515970', 'C1fHqEyr5P8Bg5mJP25yHl6LooKvm574OQRfQvBBXcGs36PP6e4T34bWsi1d', '2018-02-22 13:51:29', '2018-02-22 13:52:34', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(244, 'Ayu Ting Ting', 'ayu@gmail.com', '$2y$10$cqbC2HuGPMgoZ7LT8tygK.Hguk5m5mXqSSYCwOPN6HV9wVzT3wb.O', 1, '19', '6', 'ayu123', '28nLplGEuC1FtCIcl2DZINarhW2CDvnIuCNlnRX8oQpVbnSRzixMVmfYdmEn', '2018-02-23 09:40:22', '2018-02-23 09:41:51', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(245, 'Ismail Azhafir Rohaga', 'ismail@gmail.com', '$2y$10$lsErMDVskI8ObzMd3YZHwOGndOWW8ZtGFNkHgSHelcEbCHW8A.XUm', 1, '48', '8', '101515930', 'hZC873v7pL9GIFmq9nOkM4O4XjW9bAxUaUjUXbHdGc78PA4t3A2cWgGsm0t5', '2018-02-24 05:09:27', '2018-02-27 16:28:56', 'Bandung', '2000-02-06', 'Islam', 'O', 'Cempaka Arum', '--', '--', 'Not Verified', 'Not Verified', '1519748935.jpg', 'Not Verified'),
(246, 'Muhammad Rizki R', 'mrizki@gmail.com', '$2y$10$1xEbGigM1KPIZIc9wHOP1elhjTqYuOE4bjm0rGvVP6dhW21ILmkom', 1, '48', '8', '101515944', 'Pq8u7Qvq5HF63ptR1N1M6Z9h2baDrjfHmhk7PQkdni6g6EOnnovuUXJNjsQC', '2018-02-24 05:16:53', '2018-02-24 07:56:49', 'Bandung', '2000-02-01', 'Islam', 'O', 'Ujung Berung Komplek Indah permata biru no.18', '--', '--', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(247, 'Nurnaeni', 'nurnaeni@gmail.com', '$2y$10$qtemO/XG/1FSGAyvpwg5lOdlJ88UQ9V5mcLEZq6HysXsaT4EpzeC.', 1, '48', '8', '101515958', 'bR9hanJCBOoSpScWKF7bGxTUZDv6MDJtViOBDtTzFDZbg9gslbNa2u4Unnmj', '2018-02-24 06:12:31', '2018-02-24 06:13:25', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(248, 'Reisa Aprianti N', 'reisa@gmail.com', '$2y$10$Y0JU.rA71m2o1JMQOtU4G.0wzYLmLLoiFZLYPOyRTcaE0D2HfUyx2', 1, '48', '8', '101515960', 'fm4n6ATXXJ6UnbEz3WsLclxCYpMM97ocRHyGUswhIqZhd2VXiai4wrEy9lWP', '2018-02-24 06:17:52', '2018-02-24 07:27:10', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(249, 'Revyana Yusuf', 'revyana@gmail.com', '$2y$10$CDfodtN2olYDF.kDN6MVhOFsgdklppDNBAobBDCknDDhRLHydohBK', 1, '48', '8', '101515961', 'nkU2ATlqNH2XRHVT9bhGgipk1hJpYAoshEutuR3rLrsSYe1qubefn7OIGUgV', '2018-02-24 07:33:50', '2018-02-24 07:35:21', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(250, 'Rifqi Subagja', 'rifqi@gmail.com', '$2y$10$q7IHErRYdpksZ2LtefCGnO2y0Npsno.Ut86vUyM9SGCmfsb2SYMtS', 1, '48', '8', '101515966', '1TAC5xNDbjMYg9B6Lnkc1pFjQ5AY9ARWJpsu7PlJS82UZK2ssqCMwQZaeGkR', '2018-02-24 15:29:32', '2018-02-25 02:36:53', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'rifqi.jpg', 'Not Verified'),
(251, 'Tri Utari', 'tri@gmail.com', '$2y$10$6tlq8gVAN2zxEZNXIbGMFePnXFY7fFAdbxE0Jai3KpB6ZARWQmvHG', 1, '48', '8', '101515967', 'rRuw4UrrQMZ9tezKwiVF01b0GgVIDE1Vkhdx8xp8BfqvxcFUSFgBc4cZF0xx', '2018-02-25 00:44:27', '2018-02-25 00:48:29', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'tri.jpg', 'Not Verified'),
(252, 'Sheyla Rianti U', 'sheyla@gmail.com', '$2y$10$oAQKaqbIQcWXdZS3mCf72uinX5zCkSfe2UVGqXRwbnGbCI3PSuQEy', 1, '48', '8', '101515977', 'sTFMWQbBG7onIN55rDzveNj5uT0v7DrOFEHn7EogBUJtsyF9a1Ee3vTX2CIz', '2018-02-26 10:07:30', '2018-02-26 10:10:22', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', 'Not Verified'),
(253, 'Iman Akbar', 'iman@gmail.com', '$2y$10$ZYTZrSnaaHXmkak2y6caW.QM3hpTkfmNtaqnhu9gevaQW3.kLzpLq', 3, 'Not Verified', 'Not Verified', '987987987', 'roBGNfAEFTsNoayIhhgAPSUTAqYQ9fC4ufpT2MvZQjOFZInLJPc8rvBEeBua', '2018-02-27 11:56:20', '2018-02-27 12:00:43', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Setting', '12'),
(254, 'Rachmizard', 'rachmizard@gmail.com', '$2y$10$VMMT.C66rW7OoGVAYWB/AebQZns2ZlpG/OWmN3dYPsdAP.Bgz4hWa', 1, '48', '8', '101515959', 'ulx9QUxtijSDd7kEeu7eGu4VnS7uIBmR3OWsy7KEkggXPr5YFwoNwZ8Zs8qJ', '2018-02-27 13:38:46', '2018-02-27 16:10:31', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', 'Not Verified', '1519747831.jpg', 'Not Verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepala_jurusan`
--
ALTER TABLE `kepala_jurusan`
  ADD PRIMARY KEY (`id_kp_jurusan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekap_nilai`
--
ALTER TABLE `rekap_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spec_kelas`
--
ALTER TABLE `spec_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekap_nilai`
--
ALTER TABLE `rekap_nilai`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `spec_kelas`
--
ALTER TABLE `spec_kelas`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
