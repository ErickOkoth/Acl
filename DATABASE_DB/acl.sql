-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2021 at 12:04 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acl`
--

-- --------------------------------------------------------

--
-- Table structure for table `kplcs`
--

CREATE TABLE `kplcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2021_03_08_074916_create_kplcs_table', 1),
(14, '2021_03_08_080338_create_sms_table', 1);

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
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complaints` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `name`, `street`, `complaints`, `created_at`, `updated_at`) VALUES
(1, 'erick', 'er', 'blackout', '2021-03-13 10:39:43', '2021-03-13 10:39:43'),
(2, 'hh', 'str', 'hh', '2021-03-13 10:40:59', '2021-03-13 10:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
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

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$fgfQ9YK0rTS6RVRGBZC6lORaKcb5TyYsH7.Enmd9ufZRDj3XzquWK', 'vHQHbUlHfq6NNjTZQFcF8dzoJQs4eN618qCGjuri41nGXMuQpWMFNijkHi0Y', '2021-03-13 11:22:43', '2021-03-13 11:22:43'),
(2, 'editor', 'editor', 'editor@gmail.com', NULL, '$2y$10$TACrzjSUonQ6XMq5Rrbyz.V8tRYYnr6sx7FzTO/GezMmRu8YHFwfi', NULL, '2021-03-13 11:22:43', '2021-03-13 11:22:43'),
(3, 'author', 'author', 'author@gmail.com', NULL, '$2y$10$2IMKQ5FnCqVeJmBBCf3O3.uPZah/i08ZIxiSopZ2OjBw0nTKQx.G6', 'FemygVPZFf5PnmOOM7ENaF3hDTYEidF5xu6CKGcceJ0KlJuiuAp5e2UuyyHp', '2021-03-13 11:22:43', '2021-03-13 11:22:43'),
(5, 'erick okoth', 'editor', 'erick@gmail.com', NULL, '$2y$10$SfZJNADNj7zX5N2cfWk/oepXWUeI4y/.iEQaOptbkUaGTVPExr4o6', 'DYwpJVHzUTp0HPVgae8HIHS9YsVOKuaNJNCv2GTutLDWuEwyecn83CR7MrrG', '2021-03-15 08:09:08', '2021-03-15 08:09:08'),
(6, 'desmond', 'editor', 'desmond@gmail.com', NULL, '$2y$10$j/hkM5B7FJ9NI9yf4Y5h1uNBAOdVk0jCAWvO/uIEICywEMh.vkB2K', NULL, '2021-03-15 08:12:10', '2021-03-15 08:12:10'),
(7, 'Samuel Wambua', 'author', 'wambuasamurl604@gmail.com', NULL, '$2y$10$8Ju7Fd2v2sJJnFbjpQmZPej0bvkvVY1EPpviLsGWRPQBiticEilCG', 'FpwtOV5jKgFPhOs2Y3EKpK6SzZrlDFJ4n38cGklZGCxWdiimyUw3oWbnCESI', '2021-03-16 09:32:17', '2021-03-16 09:32:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kplcs`
--
ALTER TABLE `kplcs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kplcs_phone_unique` (`phone`);

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
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sms_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `kplcs`
--
ALTER TABLE `kplcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
