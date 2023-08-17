-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2023 at 09:22 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `about_us_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'About Our Library', '<p><strong>Welcome to the Sonargaon University Library and Information Division (LID).</strong></p>\r\n<p>This Library is one of the pioneer university libraries in Bangladesh in terms of comprehensive collections, variety of services, up to date technology, professionally skilled manpower, user education, etc. We committed to support all the activities, overall vision, mission and programs of the University and our commitment through services geared towards retrieval, acquisition, preservation and dissemination of information in various forms and formats. The staffs of LID are here to serve you and we hope that you will feel comport and at home to stay in the library.</p>', 'images/Untitled-1700891112834531.png', '', 'superadmin', '2021-05-27 00:16:09', '2021-05-29 04:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin@gmail.com', 'admin', NULL, '$2y$10$jqol97oR2IFg.X8Fa2U95eJDIIJ0fvtncgkuX0Yp8YAAW8UXCpQnK', NULL, '2021-05-02 22:50:28', '2021-05-02 22:50:28'),
(2, 'shahed', 'shahed@gmail.com', 'shahed', NULL, '$2y$10$srEgbd7ydSbWb8nEeICJCe/BRUrnwknRt3k36xgh.nUgUHqk3mZ92', NULL, '2021-05-06 03:54:01', '2021-05-06 03:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_description` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_page` int DEFAULT NULL,
  `book_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_books` int NOT NULL DEFAULT '0',
  `current_total_books` int NOT NULL DEFAULT '0',
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `books_book_name_unique` (`book_name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `writer_name`, `book_description`, `total_page`, `book_image`, `book_url`, `total_books`, `current_total_books`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(10, 'জার্নি টু আল্লাহ (হার্ডকভার)', 'হাফিয ইবনে রজব আল-হাম্বলী রহ.', 'জার্নি টু আল্লাহ একটি ইসলামিক বই', 120, 'images/books/fb1d37236_157140-1699173145179448.jpg', 'https://www.rokomari.com/book/157140/the-journey-to-allah', 40, 40, 'superadmin', 'superadmin', '2021-05-08 01:04:24', '2023-08-17 02:47:32'),
(11, 'রাহে বেলায়াত (হার্ডকভার)', 'ড. খোন্দকার আব্দুল্লাহ জাহাঙ্গীর', 'রাহে বেলায়াত-এর বিষয়বস্তু পাঁচটি অধ্যায়ে বিভক্ত ছিল। এবার নতুন দুটি অধ্যায় সংযোজন করে গ্রন্থটিকে সাত অধ্যায়ে বিভক্ত করা হয়েছে। সকল অধ্যায়েই কমবেশি পরিবর্তন, সংশোধন বা সংযোজন করা হয়েছে।', 46, 'images/books/092e66e9f764_75371 (1)-1699173072527491.jpg', 'https://www.rokomari.com/book/75371/rahe-belayat', 0, 0, 'superadmin', 'superadmin', '2021-05-08 01:08:38', '2021-05-27 04:09:43'),
(12, 'রমাদান আত্মশুদ্ধির বিপ্লব (হার্ডকভার)', 'ড. খালিদ আবু শাদি', 'রমাদান পরিবর্তনের মাস। রমাদান গাফিলতি ঝেড়ে নিজেকে শুধরে নেওয়ার মাস। রমাদান আত্মশুদ্ধির সুবর্ণ সময়। রমাদান তাকওয়া অর্জনের শ্রেষ্ঠ সময়। রমাদান নেক আমলের বসন্ত। রমাদান কুরআন নাজিলের মাস। রমাদান বিজয়ের মাস। রমাদান আল্লাহর নৈকট্যলাভের শ্রেষ্ঠ সময়। \r\nপ্রিয় ভাই, আমাদের জীবনে প্রতি বছরই রমাদান আসে। সময়ের আবর্তনে আবার তা বিদায় নেয়। কিন্তু আমরা কি এ রমাদানের যথাযথ কদর করি? রমাদানের প্রভাব কি এর পরবর্তী সময়গুলোতে আমাদের মাঝে থাকে? রমাদান থেকে তাকওয়ার সবক নিয়ে সারা বছর কি আমরা তাকওয়ার পথে চলি? হায়, কত রমাদানই তো আমরা পার করেছি;', 120, 'images/books/8ea7c4168_209523-1699173428453213.jpg', NULL, 0, 0, 'superadmin', '', '2021-05-08 01:14:17', '2021-05-08 01:14:17'),
(13, 'খোশ আমদেদ মাহে রমযান (পেপারব্যাক)', 'খুররম মুরাদ', 'Title	খোশ আমদেদ মাহে রমযান\r\nAuthor	খুররম মুরাদ\r\nPublisher	আধুনিক প্রকাশনী\r\nEdition	10th Published, 2019\r\nNumber of Pages	46\r\nCountry	বাংলাদেশ\r\nLanguage	বাংলা', 46, 'images/books/401ba87d8ff4_44709-1699173600297160.jpg', NULL, 0, 0, 'superadmin', '', '2021-05-08 01:17:01', '2021-05-08 01:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

DROP TABLE IF EXISTS `downloads`;
CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `uuid`, `title`, `cover`, `created_at`, `updated_at`) VALUES
(3, '2ad632b0-c11e-11eb-aca2-15e6b8df7866', 'test', 'https://storage.googleapis.com/cinemoja-cdn/Test_Files/1gb.bin', '2021-05-30 02:08:07', '2021-05-30 02:08:07'),
(4, '92493a00-c11e-11eb-9711-81ae31969c39', 'something', 'https://storage.googleapis.com/cinemoja-cdn/Test_Files/10GB.zip', '2021-05-30 02:11:01', '2021-05-30 02:11:01'),
(5, 'bbf86180-c11e-11eb-a72a-f7e943cebb8e', 'Internal Test', 'images/Untitled-1700891112834531.png', '2021-05-30 02:12:11', '2021-05-30 02:12:11'),
(6, 'bd3987d0-c132-11eb-99a4-d5fc2e70ff51', 'Jachai ad', 'https://www.odhikar.news/templates/adhikar-v1/images/jachai_video.mp4', '2021-05-30 04:35:23', '2021-05-30 04:35:23'),
(7, '55b137d0-c135-11eb-b9ca-0bf2b21bc5fc', 'something', 'https://stage.cinedrive.net/archive/media/19/', '2021-05-30 04:53:58', '2021-05-30 04:53:58'),
(8, '8848d2c0-c135-11eb-8fec-e10870b5d5bd', 'USEFUL LINKS', 'https://storage.googleapis.com/cinemoja-cdn/Test_Files/100MB.zip', '2021-05-30 04:55:22', '2021-05-30 04:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2021_03_19_171025_create_permission_tables', 1),
(21, '2021_04_26_065800_refr', 1),
(22, '2021_04_26_182145_create_admins_table', 1),
(23, '2021_04_27_093937_create_books_table', 1),
(24, '2021_04_29_053644_create_pages_table', 1),
(25, '2021_05_03_100615_create_sliders_table', 2),
(27, '2021_05_26_074622_create_web_pages_table', 4),
(28, '2021_05_26_043009_create_about_us_table', 5),
(29, '2021_05_30_052212_create_downloads_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(2, 'App\\Models\\Admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `book_id` int NOT NULL,
  `approve_by` int DEFAULT '0',
  `book_return` timestamp NULL DEFAULT NULL,
  `note` longtext,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `book_id`, `approve_by`, `book_return`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 1, '2023-08-17 07:16:11', NULL, 4, '2023-08-17 07:16:11', '2023-08-17 02:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2021-05-02 22:50:26', '2021-05-02 22:50:26'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2021-05-02 22:50:26', '2021-05-02 22:50:26'),
(3, 'blog.create', 'admin', 'blog', '2021-05-02 22:50:26', '2021-05-02 22:50:26'),
(4, 'blog.view', 'admin', 'blog', '2021-05-02 22:50:26', '2021-05-02 22:50:26'),
(5, 'blog.edit', 'admin', 'blog', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(6, 'blog.delete', 'admin', 'blog', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(7, 'blog.approve', 'admin', 'blog', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(8, 'admin.create', 'admin', 'admin', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(9, 'admin.view', 'admin', 'admin', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(10, 'admin.edit', 'admin', 'admin', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(11, 'admin.delete', 'admin', 'admin', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(12, 'admin.approve', 'admin', 'admin', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(13, 'role.create', 'admin', 'role', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(14, 'role.view', 'admin', 'role', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(15, 'role.edit', 'admin', 'role', '2021-05-02 22:50:27', '2021-05-02 22:50:27'),
(16, 'role.delete', 'admin', 'role', '2021-05-02 22:50:28', '2021-05-02 22:50:28'),
(17, 'role.approve', 'admin', 'role', '2021-05-02 22:50:28', '2021-05-02 22:50:28'),
(18, 'profile.view', 'admin', 'profile', '2021-05-02 22:50:28', '2021-05-02 22:50:28'),
(19, 'profile.edit', 'admin', 'profile', '2021-05-02 22:50:28', '2021-05-02 22:50:28'),
(20, 'book.create', 'admin', 'book', '2021-05-02 22:50:28', '2021-05-02 22:50:28'),
(21, 'book.view', 'admin', 'book', '2021-05-02 22:50:28', '2021-05-02 22:50:28'),
(22, 'book.edit', 'admin', 'book', '2021-05-02 22:50:28', '2021-05-02 22:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2021-05-02 22:50:26', '2021-05-02 22:50:26'),
(2, 'admin', 'admin', '2021-05-02 22:50:26', '2021-05-02 22:50:26'),
(3, 'editor', 'admin', '2021-05-02 22:50:26', '2021-05-02 22:50:26'),
(4, 'user', 'web', '2021-05-02 22:50:26', '2021-05-02 22:50:26'),
(5, 'blogger', 'admin', '2021-05-06 03:55:18', '2021-05-06 03:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(3, 5),
(4, 5),
(5, 5),
(6, 5),
(7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 'Academics University3333', 'This Library is one of the pioneer university libraries in Bangladesh in terms of comprehensive333', 'images/sliders/Untitled-1700807935610548.png', 'superadmin', 'superadmin', '2021-05-08 01:51:07', '2021-05-26 02:14:05'),
(6, 'Academics University 222', 'This Library is one of the pioneer university libraries in Bangladesh in terms of comprehensive', 'images/sliders/01-1699178293066861.jpg', 'superadmin', 'superadmin', '2021-05-08 02:31:19', '2021-05-08 02:31:37'),
(7, 'Academics University Library', 'This Library is one of the pioneer university libraries in Bangladesh in terms of comprehensive', 'images/sliders/03-1699178328417381.jpg', 'superadmin', NULL, '2021-05-08 02:32:10', '2021-05-08 02:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Ashikur Rahman Sorol', 'admin@gmail.com', NULL, '$2y$10$jqol97oR2IFg.X8Fa2U95eJDIIJ0fvtncgkuX0Yp8YAAW8UXCpQnK', NULL, '2021-05-02 22:50:26', '2021-05-02 22:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `web_pages`
--

DROP TABLE IF EXISTS `web_pages`;
CREATE TABLE IF NOT EXISTS `web_pages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `web_pages_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_pages`
--

INSERT INTO `web_pages` (`id`, `title`, `description`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'test', '<p><span style=\"color: #e03e2d;\">something Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio sapiente facilis optio id aliquid repellat veritatis officia, alias ducimus quidem aspernatur, dolores placeat delectus atque similique expedita ratione perferendis dolore voluptates enim dolorum! Voluptatibus porro quis quibusdam optio exercitationem sed quasi maiores. Eius laudantium incidunt blanditiis eaque aliquam minus suscipit autem, illum debitis repellat eos aperiam inventore nisi culpa molestiae eveniet? Fuga quidem enim perspiciatis quis nemo, qui, eius ipsam ut dolor sunt dignissimos. Odit rem possimus soluta accusantium sequi officiis, laudantium nesciunt enim consectetur alias? Officia dicta ipsam vitae vero quis? Id, vel unde repellendus maxime odio obcaecati repellat.&nbsp;</span></p>', 'images/Untitled-1700806574850868.png', '', 'superadmin', '2021-05-26 01:52:27', '2021-05-29 01:03:58'),
(2, 'Muktijuddha Corner', '<p style=\"margin: 0in 0in 0.0001pt; text-align: center; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif;\"><strong><span style=\"font-size: 13.0pt; line-height: 107%; color: #002060;\">&nbsp;</span></strong><strong><span style=\"font-size: 19.0pt; line-height: 107%; color: yellow; background: navy;\">Library and Information Division (LID)</span></strong></p>\r\n<p style=\"margin: 0in 0in 0.0001pt; text-align: center; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif;\"><strong><span style=\"font-size: 16.0pt; line-height: 107%; color: #002060;\">&nbsp;</span></strong></p>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"color: #ffffff;\"><strong><span style=\"font-size: 15.5pt; line-height: 107%; font-family: Helvetica, sans-serif; background: blue;\">Muktijuddah Corner</span></strong></span></p>\r\n<p style=\"margin: 6pt 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\', serif; color: black; background: white;\">SU Library and Information Division has launched a unique Muktijuddah Corner from August 2018 at its Green Road Campus Central Library north- west corner of ground&nbsp;floor. </span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\', serif; color: black;\">This corner consists of a good number of historic, liberation war related books, monographs, photographs, portraits, posters, videos, documents, films and maps etc. are collected and preserved <span style=\"background: white;\">on the basis of Great Liberation War of Bangladesh held in 1971. </span></span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\', serif; color: black;\">The center has been developed to strengthen the spirit of Liberation war and increase the knowledge on history of liberation war among the university student community. Video clips and CDs are available for users to see and feel the war and glorious struggle on a day to day basis throughout the nine months of 1971. </span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\', serif; color: black; background: white;\">The rare collections of this corner are the daily Joy Bangla, manuscript hand-writing constitution of Bangladesh. The corner is enriching day by day. It is noted that this corner will provide to the students and the faculty members of SU to know the dedication of the heroic freedom fighters and history of the liberation war of Bangladesh and its independence. The present collection of books in the Muktijuddah Corner is more than 1100 copies. </span></p>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"font-size: 18pt; line-height: 107%; font-family: Helvetica, sans-serif; color: #ffffff; background: #843fa1;\">&nbsp;LINK&nbsp;</span></p>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><strong><span style=\"font-size: 12.5pt; line-height: 107%; font-family: Helvetica, sans-serif; color: yellow; background: purple;\">Liberation War Photo Gallery</span></strong></p>\r\n<h2 style=\"margin: 0in 0in 12pt; vertical-align: top; line-height: 107%; break-after: avoid; font-size: 13pt; font-family: \'Calibri Light\', sans-serif; color: #5b9bd5; text-align: center;\"><span style=\"font-size: 12.5pt; line-height: 107%; font-family: Helvetica, sans-serif; color: #ffffff; background: red;\">Useful Link of Liberation War</span></h2>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: Helvetica, sans-serif; color: red; background: white;\">&nbsp;</span></p>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: Helvetica, sans-serif; color: #333333; background: white;\">&nbsp;</span></p>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: Helvetica, sans-serif; color: #333333; background: white;\">&nbsp;</span></p>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: Helvetica, sans-serif; color: #333333; background: white;\">&nbsp;</span></p>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: Helvetica, sans-serif; color: #333333; background: white;\">&nbsp;</span></p>\r\n<p style=\"margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif; text-align: center;\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: Helvetica, sans-serif; color: #333333; background: white;\">&nbsp;</span></p>', 'images/webpagesunnamed-1701072467818105.png', '', 'superadmin', '2021-05-26 02:16:10', '2021-05-29 01:15:39'),
(3, 'About Us', '<p>something</p>', 'images/webpages/Untitled-1700891043761852.png', 'superadmin', '', '2021-05-27 00:15:03', '2021-05-27 00:15:03');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
