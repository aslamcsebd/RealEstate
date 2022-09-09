-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2022 at 12:09 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architect`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `logo`, `details`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Email', '<i class=\"fas fa-envelope\"></i>', '<a href=\"mailto:support.mail@kribtree.com\">support.mail@kribtree.com</a>', 1, 1, '2021-09-20 16:42:08', '2021-09-20 16:48:10', NULL),
(2, 'Mobile', '<i class=\"fas fa-phone-volume\"></i>', '<a href=\"tel:+880\">+880</a>', 2, 1, '2021-09-20 17:13:25', '2022-09-08 12:07:45', NULL),
(3, 'Whatsapp', '<i class=\'fab fa-whatsapp\'></i>', '<a href=\"https://wa.me/+880\">Text whatsapp!</a>', 3, 1, '2021-09-20 17:19:53', '2022-09-08 12:07:56', NULL),
(4, 'Address', '<i class=\"fas fa-map-marker-alt\"></i>', 'Address, KRIBTREE LLC\nNEWYORK.', 5, 1, '2021-09-20 17:26:11', NULL, NULL),
(5, 'Skype', '<i class=\'fab fa-skype\'></i>', '<a href=\"https://\">Call me skype!</a>', 4, 1, '2022-02-24 03:51:46', '2022-09-08 12:08:06', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buttonName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `title`, `buttonName`, `link`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'images/home/1662498103.jpg', '<p><span style=\"color: rgb(41, 41, 42); font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; background-color: rgb(247, 247, 247);\">Hello. We Are IA.</span><br></p>', 'WHO WE ARE', '#', 1, 1, '2022-09-06 21:01:43', '2022-09-06 21:27:19', NULL),
(2, 'images/home/1662498229.jpg', '<p><span style=\"color: rgb(41, 41, 42); font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; background-color: rgb(239, 239, 239);\">We Know Environments.</span><br></p>', 'WHAT WE DO', '#', 2, 1, '2022-09-06 21:03:49', '2022-09-06 21:28:03', NULL),
(3, 'images/home/1662498296.jpg', '<div class=\"thrv_wrapper thrv_text_element optml-bg-lazyloaded\" data-css=\"tve-u-1826ea639e9\" style=\"box-sizing: content-box; font-family: futura-pt; overflow-wrap: break-word; margin: 0px; padding: 1px; font-size: 18px; box-shadow: none !important; --tve-applied-box-shadow:none  !important;\"><p data-css=\"tve-u-1826ecddc51\" style=\"box-sizing: inherit; font-family: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 24px; --tcb-typography-font-family: inherit; text-shadow: rgba(255, 255, 255, 0.72) 2px 2px 2px; --tve-applied-text-shadow:2px 2px 2px rgba(255,255,255,0.72); text-align: center; font-size: 61px !important; line-height: 1.2em !important; font-weight: var(--g-bold-weight,bold)  !important; --tcb-applied-color:rgb(41,41,42)  !important; --tve-applied-color:rgb(41,41,42)  !important;\"><span style=\"color: rgb(66, 66, 66);\">We Solve the Right Problems.</span><br></p></div>', 'HOW WE DO IT', '#', 3, 1, '2022-09-06 21:04:56', '2022-09-06 21:29:13', NULL),
(4, 'images/home/1662498336.jpg', '<p><span style=\"color: rgb(41, 41, 42); font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center;\">See Our Press.</span><br></p>', 'WHAT THEY\'RE SAYING', '#', 4, 1, '2022-09-06 21:05:36', '2022-09-06 21:05:36', NULL),
(5, 'images/home/1662498433.jpg', '<p><span style=\"font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; color: rgb(156, 156, 148);\">Read Our Blog.</span><br></p>', 'WHAT WE\'RE SAYING', '#', 5, 1, '2022-09-06 21:07:13', '2022-09-06 21:29:44', NULL),
(6, 'images/home/1662498552.jpg', '<p><span style=\"font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; color: rgb(247, 247, 247);\">Become a Part of the Team.</span><br></p>', 'JOIN US', '#', 6, 1, '2022-09-06 21:09:12', '2022-09-06 21:30:07', NULL),
(7, 'images/home/1662498662.jpg', '<p><span style=\"color: rgb(41, 41, 42); font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center;\">IA is Around </span><span style=\"font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; color: rgb(156, 156, 148);\">the Globe.</span><br></p>', 'FIND IA', '#', 7, 1, '2022-09-06 21:11:02', '2022-09-06 21:30:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leaderships`
--

CREATE TABLE `leaderships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaderships`
--

INSERT INTO `leaderships` (`id`, `title`, `url`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Blog', '#', 1, 1, '2022-09-06 21:12:39', '2022-09-06 21:12:39', NULL),
(2, 'Videos', '#', 2, 1, '2022-09-06 21:12:49', '2022-09-06 21:12:49', NULL),
(3, 'Webinars', '#', 3, 1, '2022-09-06 21:12:58', '2022-09-06 21:12:58', NULL),
(4, 'Research', '#', 4, 1, '2022-09-06 21:13:09', '2022-09-06 21:13:09', NULL),
(5, 'Press', '#', 5, 1, '2022-09-06 21:13:19', '2022-09-06 21:13:19', NULL);

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
(4, '2021_08_02_134009_create_social_sites_table', 1),
(5, '2021_08_03_033321_create_homes_table', 1),
(6, '2021_08_22_135951_create_contacts_table', 1),
(7, '2022_09_06_231605_create_products_table', 1),
(8, '2022_09_07_000040_create_usefull_links_table', 1),
(9, '2022_09_07_000145_create_leaderships_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_sites`
--

CREATE TABLE `social_sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `socialLogo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socialName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socialUrl` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_sites`
--

INSERT INTO `social_sites` (`id`, `socialLogo`, `socialName`, `socialUrl`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<i class=\"fab fa-linkedin\"></i>', 'Linkedin', '#', 1, 1, '2021-09-20 05:36:02', NULL, NULL),
(2, '<i class=\"fab fa-github\"></i>', 'Github', '#', 4, 1, '2021-09-20 05:38:30', NULL, NULL),
(3, '<i class=\"fab fa-stack-overflow\"></i>', 'Stack-overflow', 'stack-overflow', 5, 1, '2021-09-20 05:40:09', NULL, NULL),
(4, '<i class=\"fab fa-facebook\"></i>', 'Facebook', '#', 6, 1, '2021-09-20 05:41:29', NULL, NULL),
(5, '<i class=\"fab fa-instagram\"></i>', 'Instagram', '#', 7, 1, '2021-09-20 05:43:07', NULL, NULL),
(6, '<i class=\"fab fa-twitter\"></i>', 'Twitter', '#', 8, 1, '2021-10-09 15:48:51', NULL, NULL),
(7, '<i class=\'fab fa-skype\'></i>', 'Skype', '#', 3, 1, '2022-02-24 04:19:22', '2022-02-24 04:23:08', NULL),
(8, '<i class=\'fab fa-whatsapp\'></i>', 'Whatsapp', '#', 2, 1, '2022-02-24 04:21:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usefull_links`
--

CREATE TABLE `usefull_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usefull_links`
--

INSERT INTO `usefull_links` (`id`, `title`, `url`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Who We Are', '#', 1, 1, '2022-09-06 21:11:41', '2022-09-06 21:11:41', NULL),
(2, 'What We Do', '#', 2, 1, '2022-09-06 21:12:03', '2022-09-06 21:12:03', NULL),
(3, 'How We Do It', '#', 3, 1, '2022-09-06 21:12:15', '2022-09-06 21:12:15', NULL),
(4, 'What They\'re Saying', '#', 4, 1, '2022-09-06 21:12:24', '2022-09-06 21:12:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aslam', 'admin@gmail.com', '2022-09-06 20:35:25', '$2y$10$p6R6/T/.TOl43T47PQO/kezYdWMCmVOTxW74ZGChOkPo8N7y9BjYS', '123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaderships`
--
ALTER TABLE `leaderships`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_sites`
--
ALTER TABLE `social_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usefull_links`
--
ALTER TABLE `usefull_links`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leaderships`
--
ALTER TABLE `leaderships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_sites`
--
ALTER TABLE `social_sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usefull_links`
--
ALTER TABLE `usefull_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
