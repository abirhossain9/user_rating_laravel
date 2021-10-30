-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 11:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_test`
--

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_29_122620_create_services_table', 1),
(6, '2021_10_29_145636_create_ratings_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars_rated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `service_id`, `stars_rated`, `created_at`, `updated_at`) VALUES
(1, '11', '5', '4', '2021-10-30 03:49:50', '2021-10-30 03:49:50'),
(2, '11', '4', '4', '2021-10-30 03:49:54', '2021-10-30 03:49:54'),
(3, '11', '3', '3', '2021-10-30 03:49:57', '2021-10-30 03:49:57'),
(4, '11', '1', '5', '2021-10-30 03:50:00', '2021-10-30 03:50:00'),
(5, '11', '2', '5', '2021-10-30 03:50:03', '2021-10-30 03:50:03'),
(6, '11', '5', '5', '2021-10-30 03:50:39', '2021-10-30 03:50:39'),
(7, '11', '5', '3', '2021-10-30 03:50:44', '2021-10-30 03:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avg_rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `description`, `avg_rating`, `created_at`, `updated_at`) VALUES
(1, 'Medical Secretary', 'Laboriosam ea quia sit architecto.', NULL, NULL, NULL),
(2, 'Engineering Teacher', 'Earum consequatur consequuntur dolorem et.', NULL, NULL, NULL),
(3, 'Shoe and Leather Repairer', 'Quam dolorem tenetur qui nihil.', NULL, NULL, NULL),
(4, 'Counselor', 'Qui sed ducimus provident molestiae omnis qui.', '4', NULL, '2021-10-30 03:50:15'),
(5, 'Airframe Mechanic', 'Nam et veniam doloremque.', '4', NULL, '2021-10-30 03:50:46');

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
(1, 'Ms. Jane Wehner I', 'agoodwin@example.org', NULL, '$2y$10$1a5R8RWZ/UJzaUf0gNnTC.pDMhehdeIOALF.DJ/byDU1NHxzpXAyi', NULL, NULL, NULL),
(2, 'Dr. Lavada Davis', 'alivia95@example.net', NULL, '$2y$10$pCI3HcSvMPPVWTgdiV6ao.OaAnm6W0WvE8lHdUS616Rvp8pQdIWzW', NULL, NULL, NULL),
(3, 'Amina Johns', 'price.sasha@example.net', NULL, '$2y$10$r0ScfaQVHmp211iTh3AE3ej88j21RH1PHfScz1Vifeolw6qpI9.P.', NULL, NULL, NULL),
(4, 'Columbus Nitzsche', 'aturner@example.com', NULL, '$2y$10$nlv76/gIfp/Vr3vCuKobcO77P7F4Mvf.Jvc.BTMmOBDSesfZuppaK', NULL, NULL, NULL),
(5, 'Alva Beier', 'krajcik.evans@example.org', NULL, '$2y$10$M0nprkUJEnl4NPmdloXWQ.dA32bUJtv0m6BzJoQuq4yedwSvQhfiu', NULL, NULL, NULL),
(6, 'Dr. Morris Stamm MD', 'purdy.hortense@example.org', NULL, '$2y$10$cGgC8s6BDRts6aCURps7xehzRF6fPrbJxSbm1Nn3JXPmGXNDT251y', NULL, NULL, NULL),
(7, 'Francisca Becker Jr.', 'syble91@example.com', NULL, '$2y$10$Us0sstiY/Aai/XW6Qcu7segKK6mvZKzFfFV4EmIm4uIoQE1GLq/g2', NULL, NULL, NULL),
(8, 'Vivianne Pollich', 'darian39@example.org', NULL, '$2y$10$Mplbwmlppku4jUHLw.ylger6FG.J0jH9QzkAezZc0g3Pd02MgobuG', NULL, NULL, NULL),
(9, 'Franco Smitham IV', 'lkihn@example.com', NULL, '$2y$10$sixOdzYZp3ymPYXgU1sfcuCoRzbxIlXi70nUjoWaNuxXxH30QqzSC', NULL, NULL, NULL),
(10, 'Dr. Hertha Emard', 'walsh.cortney@example.com', NULL, '$2y$10$H.cKFJHirUR1OFPQkFl4NuKPJ0cHUTWbX3d2hogmi49L8LCC1LX4e', NULL, NULL, NULL),
(11, 'Md Abir Hossain', 'abirhasan282@gmail.com', NULL, '$2y$10$XCk/TjvKQ4sBPfwgXprsr.Fututt2n7p6xhh1BCWt8Kfyw11aWuEi', NULL, '2021-10-30 03:49:44', '2021-10-30 03:49:44');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
