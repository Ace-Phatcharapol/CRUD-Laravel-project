-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 01:06 PM
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
-- Database: `laraveldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Emily Farrell Sr.', 'Ex deleniti ipsum expedita sunt ipsam recusandae. Sint corporis ut sed numquam ullam libero ut illum. Accusantium autem in earum. Architecto corporis voluptatem tenetur consequatur.', 0, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(2, 'Ms. Lenna Wyman', 'Ut amet corrupti qui. Accusamus ipsum ex iusto. Aut cum expedita nemo repudiandae. Quam numquam hic vero sit.', 0, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(3, 'Willy Klein', 'Rerum unde nihil quia rerum ut. Corrupti quis a voluptas placeat et. Earum deleniti omnis rerum blanditiis distinctio perferendis.', 0, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(4, 'Leora Okuneva', 'Tenetur distinctio id nam. In amet explicabo optio. Accusantium nihil at sed expedita similique aspernatur est.', 1, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(5, 'Dr. Eden Pacocha', 'Rerum id vel commodi doloribus est necessitatibus. Est omnis in consequatur sint aut rerum. At non quos dolor nostrum. Vero dolore soluta pariatur odio sit itaque consectetur.', 0, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(6, 'Jaquan Greenfelder', 'Rerum tenetur aut quisquam quas qui voluptatem et vitae. Facilis doloremque aliquid voluptatibus aut voluptatibus dolorem rerum id.', 0, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(7, 'Billy Dooley', 'Ipsam ratione et amet voluptatum modi qui ad. Voluptate et doloribus ut est sint fugiat. Omnis qui eaque libero. Quia eius id magni sed dicta.', 0, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(8, 'Vada Stanton', 'Et quas et vero at debitis rerum temporibus quidem. Dolorem sit consequatur iste rem est est.', 0, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(9, 'Carrie Bednar', 'Illum ut perferendis ipsam magnam. Et voluptas quam blanditiis fugit laboriosam cum eveniet numquam.', 0, '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(10, 'Rozella Wolff', 'Odio quia beatae sint esse ullam qui alias. Veniam incidunt odio voluptatem quo doloribus aut. Debitis quisquam et pariatur voluptas ea reprehenderit. Enim veniam reiciendis qui doloribus voluptatem.', 1, '2024-07-03 03:56:30', '2024-07-03 03:56:30');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_06_27_095020_create_blogs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luigi Weber', 'antonetta.anderson@example.org', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', 'X6ZLlumfma', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(2, 'Cristopher Ryan', 'tate.boyle@example.org', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', '4YqkrfJUGL', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(3, 'Reymundo Hartmann I', 'jacobson.deron@example.org', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'User', '2A5fPhcucG', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(4, 'Clemens Upton', 'afarrell@example.org', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', 'KccaqoXlHp', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(5, 'Marcelo Batz MD', 'mroberts@example.net', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', 'wZrp5aBLny', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(6, 'Teresa Kohler Jr.', 'vmarquardt@example.org', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', '6Clk7bBIhf', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(7, 'George Stroman', 'kuhlman.arianna@example.org', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', 'B1E2ZYvfdx', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(8, 'Dr. Tyshawn Ledner', 'wshields@example.com', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'User', 'Y3rMAZXfMi', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(9, 'Krystal Steuber', 'mckenzie.aleen@example.com', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', 'QZW38A16Si', '2024-07-03 03:56:30', '2024-07-03 03:56:30'),
(10, 'Della Heaney IV', 'mia.rohan@example.com', '2024-07-03 03:56:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', 'Y8eNPCWfwQ', '2024-07-03 03:56:30', '2024-07-03 03:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
