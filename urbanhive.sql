-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 06:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urbanhive`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoints`
--

/*use heroku_1c080eed5e1812a;*/
 
 use heroku_659481b517225a1;
 
 DROP TABLE IF EXISTS `appoints`;

CREATE TABLE `appoints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `developer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appoints`
--

INSERT INTO `appoints` (`id`, `firstname`, `lastname`, `email`, `phone`, `course`, `developer`, `date`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'akolawole', 'Olamilekan', 'faith@gmail.com', '907456864', 'php', 'lanre', '2022-02-23', '12:00 - 2:00', '1', NULL, NULL),
(2, 'Ade', 'ojo', 'olajide@gmail.com', '907456864', 'php', 'lanre', '2022-02-24', '2:00 - 4:00', '1', NULL, NULL),
(3, 'akolawole', 'ojo', 'faith@gmail.com', '8975323223', 'Frontend Developer', 'Backend Developer', '2022-02-23', '12:00 - 2:00', '1', NULL, NULL),
(4, 'Opeyemi', 'Uranta', 'olajide@gmail.com', '8975323223', 'Frontend', 'Backend Developer', '2022-02-23', '10:00 - 12:00', '1', NULL, NULL),
(5, 'Ayodele', 'Akindele', 'ayodeledele@gmail.com', '09087366532', 'Frontend', 'Backend Developer', '2022-02-24', '10:00 - 12:00', '2', NULL, NULL),
(6, 'Faith', 'Uban', 'faithurban@gmail.com', '080786534212', 'Frontend', 'Backend Developer', '2022-02-23', '10:00 - 12:00', '6', NULL, NULL),
(7, 'ola', 'Olad', 'oladipo@gmail.com', '907456864', 'Backend', 'Frontend Developer', '2022-02-24', '12:00 - 2:00', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookclasses`
--

DROP TABLE IF EXISTS `bookclasses`;


CREATE TABLE `bookclasses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `developer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--
DROP TABLE IF EXISTS `developers`;


CREATE TABLE `developers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `firstname`, `lastname`, `course`, `message`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Olanrewaju', 'Kabir', 'Laravel', 'Mr Olanrewaju Php laravel developer with many years of experience.', 'image/1725265887786325.jpg', NULL, NULL),
(2, 'Dagogo', 'Uranta', 'Frontend Developer', 'Dagogo is frontend developer with 4year experience ', 'image/1725265947958403.png', NULL, NULL),
(3, 'Opeyemi', 'Olamilekan', 'Flutter Mobile', 'He is a mobile developer', 'image/1725379018152581.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--


DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_06_082641_create_sessions_table', 1),
(7, '2022_02_11_121128_create_developers_table', 1),
(8, '2022_02_12_174912_create_bookclasses_table', 1),
(9, '2022_02_13_080112_create_appoints_table', 1),
(10, '2022_02_17_131304_create_times_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;


CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--


INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('co7NwnWAzAuLUygqX6wgdL2yBylzRbji8BQucXFs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVpDTWhGdFIyN2VPYTVzemJ1cUVEbHVheGFhNUZpcUJUMzFJR3ZYWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1645484605),
('uTWkF5IUacVCCRJyv7pSFLGHHnrGZDUHeHFStvw6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzByaDNRY1BxVnYwMTZPcDVYUzFyTXB1MU5EMDFCMHJSWTU3SFpjZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1645451832),
('v0Y4z5qK0mS1HWoXGD8UHt3xy1B62VhpqblRTT3I', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiak5oUWNPa1hrVE5QQ1hPd3p1SWRiODlpOU1BU3JLYmdDRHVGS1NOcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGRfZGV2ZWxvcGVyIjt9fQ==', 1645533499);

-- --------------------------------------------------------

--
-- Table structure for table `times`
--


DROP TABLE IF EXISTS `times`;

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `time`, `created_at`, `updated_at`) VALUES
(2, '10:00 - 12:00', NULL, NULL),
(3, '12:00 - 2:00', NULL, NULL),
(4, '2:00 - 4:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'ola dipo', 'admin@gmail.com', '1', NULL, '$2y$10$9aGUaD5Mvl87iu31xxShoOAPc3Njymjmsf6J/CI1v5UTuKJ6TEqqW', NULL, NULL, NULL, NULL, NULL, '2022-02-17 22:34:11', '2022-02-17 22:34:11'),
(2, 'faith', 'faith@gmail.com', '0', NULL, '$2y$10$o23BXCDS9kURsQruWBN4eenGJ2udvCHuA.43tLmJESQK4S6xEZME6', NULL, NULL, NULL, NULL, NULL, '2022-02-17 22:55:55', '2022-02-17 22:55:55'),
(3, 'dagogo', 'dagogo@gmail.com', '0', NULL, '$2y$10$CmYR7ePs0Hp91kQ8x3C3SOZRAMLxgqcTD3ARPnFozP1GYkrfAN/N6', NULL, NULL, NULL, NULL, NULL, '2022-02-18 01:15:32', '2022-02-18 01:15:32'),
(4, 'folake', 'follyola@gmail.com', '0', NULL, '$2y$10$8mQ.SfdjU4ZmO8fxn4FPmODPNSurVuY9i4iEyFtPtBds.yxvRzGEW', NULL, NULL, NULL, NULL, NULL, '2022-02-21 18:57:55', '2022-02-21 18:57:55'),
(5, 'demeji ola', 'demeji@gmail.com', '0', NULL, '$2y$10$6w3wu3Ac4fWjh4eVLQTR6OkxvALUDJhEkOnYMNFzSjnh/dPWsmkJm', NULL, NULL, NULL, NULL, NULL, '2022-02-21 18:59:37', '2022-02-21 18:59:37'),
(6, 'dagogo Uranta', 'dagogouranta@gmail.com', '0', NULL, '$2y$10$a7ZjANnlGVx3GcDy07Zl3uA91GveIxvf7wfWkIbVwoEEcakRvWL.i', NULL, NULL, NULL, NULL, NULL, '2022-02-21 19:11:19', '2022-02-21 19:11:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoints`
--
ALTER TABLE `appoints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookclasses`
--
ALTER TABLE `bookclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
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
-- AUTO_INCREMENT for table `appoints`
--
ALTER TABLE `appoints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookclasses`
--
ALTER TABLE `bookclasses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
