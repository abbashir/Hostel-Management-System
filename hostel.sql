-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 10:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `borders`
--

CREATE TABLE `borders` (
  `id` int(10) UNSIGNED NOT NULL,
  `roomNo` bigint(20) NOT NULL,
  `seatNo` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bDay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NID` bigint(20) NOT NULL,
  `relegious` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borders`
--

INSERT INTO `borders` (`id`, `roomNo`, `seatNo`, `name`, `fName`, `mName`, `institute`, `bDay`, `NID`, `relegious`, `phone`, `created_at`, `updated_at`) VALUES
(1, 101, 1, 'shamim', 'X', 'y', 'varendra university', '2018-09-20', 56576576345, 'Islam', 1745073403, '2018-09-18 02:07:59', '2018-09-18 02:07:59'),
(2, 102, 3, 'hgfh', 'fdghdf', 'fdgf', 'dfgdfg', '2018-09-26', 34634634, 'Islam', 453654, '2018-09-18 09:32:44', '2018-09-18 09:32:44'),
(4, 103, 5, 'hgf', 'fgh', 'gh', 'fgh', '2018-09-26', 76576, 'Islam', 5675474, '2018-09-19 03:05:23', '2018-09-19 03:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `border_pay_lists`
--

CREATE TABLE `border_pay_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomNo` int(11) NOT NULL,
  `seatNo` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `fine` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `border_pay_lists`
--

INSERT INTO `border_pay_lists` (`id`, `name`, `roomNo`, `seatNo`, `phone`, `rent`, `month`, `year`, `fine`, `created_at`, `updated_at`) VALUES
(1, 'shamim', 101, 1, 1745073403, 1500, 6, 2018, 50, NULL, NULL),
(2, 'shamim', 101, 1, 1745073403, 1500, 6, 2015, 60, NULL, NULL),
(3, 'hgf', 103, 5, 5675474, 2100, 7, 2018, 50, NULL, NULL);

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2018_09_17_132932_create_borders_table', 1),
(8, '2018_09_18_052554_create_seats_table', 1),
(9, '2018_09_22_090955_create_border_pay_lists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(10) UNSIGNED NOT NULL,
  `roomNo` int(11) NOT NULL,
  `seatNo` int(11) NOT NULL,
  `rent` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `roomNo`, `seatNo`, `rent`, `created_at`, `updated_at`) VALUES
(1, 101, 1, 1500, '2018-09-18 02:09:29', '2018-09-18 02:09:29'),
(2, 101, 2, 1600, '2018-09-18 02:10:54', '2018-09-19 02:25:08'),
(3, 102, 3, 1550, '2018-09-18 02:11:04', '2018-09-18 02:11:04'),
(4, 102, 4, 1550, '2018-09-18 02:11:18', '2018-09-18 02:11:18'),
(5, 103, 5, 2100, '2018-09-18 02:22:11', '2018-09-18 02:22:11'),
(6, 104, 6, 2300, '2018-09-18 09:18:17', '2018-09-18 09:18:17'),
(8, 105, 7, 1200, '2018-09-19 03:04:45', '2018-09-19 03:04:45'),
(9, 105, 8, 1780, '2018-09-19 12:31:05', '2018-09-19 12:31:05'),
(12, 104, 10, 1700, '2018-09-22 04:08:40', '2018-09-22 04:08:40'),
(13, 105, 11, 2000, '2018-09-22 04:09:14', '2018-09-22 04:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borders`
--
ALTER TABLE `borders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `borders_roomno_unique` (`roomNo`);

--
-- Indexes for table `border_pay_lists`
--
ALTER TABLE `border_pay_lists`
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
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seats_seatno_unique` (`seatNo`);

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
-- AUTO_INCREMENT for table `borders`
--
ALTER TABLE `borders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `border_pay_lists`
--
ALTER TABLE `border_pay_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
