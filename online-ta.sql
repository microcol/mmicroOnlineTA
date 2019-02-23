-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 05:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(4, 4, 'tZiFuRA5BBf1OIXjUAYzsjQ0FmU7bsjd', 1, '2018-12-01 14:15:07', '2018-12-01 14:15:07', '2018-12-01 14:15:07'),
(5, 5, 'MGiYrnE0yRJYAoovRDyseOrVv1Rtvd0y', 1, '2018-12-01 14:16:23', '2018-12-01 14:16:23', '2018-12-01 14:16:23'),
(9, 3, '1NiCyKG9cBWqm3GDG5PxadvJyELMceID', 1, '2018-12-02 04:52:46', '2018-12-02 04:52:46', '2018-12-02 04:52:46'),
(10, 4, 'whVYEsTU5NR4Sxk7Kag5YTAvOMvNWIFu', 1, '2018-12-02 05:37:16', '2018-12-02 05:37:16', '2018-12-02 05:37:16'),
(11, 5, 'mmK0z92PAfPFsQ4vYewZfZlztqiihPij', 1, '2018-12-02 22:24:16', '2018-12-02 22:24:16', '2018-12-02 22:24:16'),
(13, 7, '5meDXOdOJ8jtqIjriDEhCBLhW0p6FImn', 1, '2018-12-02 22:51:09', '2018-12-02 22:51:09', '2018-12-02 22:51:09'),
(17, 1, 'EaPCiCxW2CrxzDNnVrWsFFse1w3Mc8FL', 1, '2018-12-04 04:29:30', '2018-12-04 04:29:30', '2018-12-04 04:29:30'),
(18, 2, 'VWEbRtWuSAkzh33IJWXio3qicts08c8h', 1, '2018-12-04 04:33:44', '2018-12-04 04:33:43', '2018-12-04 04:33:44'),
(19, 3, 'h5USKL8Z0S3uPLHFpYEngxztvLpqtm93', 1, '2018-12-04 04:37:38', '2018-12-04 04:37:38', '2018-12-04 04:37:38'),
(20, 4, '2ZWNQuVkhOpzNW801GUqSElZcEeT9hxB', 1, '2018-12-04 04:39:49', '2018-12-04 04:39:49', '2018-12-04 04:39:49'),
(21, 5, 'g6A9juhHF7MeBb0uxqXYl8r7geSyG8xN', 1, '2018-12-04 04:43:15', '2018-12-04 04:43:15', '2018-12-04 04:43:15'),
(22, 6, '8DUS25Qlf5fyZ8VqTCBAVJdy8MmvC3k6', 1, '2018-12-04 04:44:55', '2018-12-04 04:44:55', '2018-12-04 04:44:55'),
(23, 7, 'jLOIPLWifPhQrY1ObFiyye125d2flwj3', 1, '2018-12-11 13:55:18', '2018-12-11 13:55:18', '2018-12-11 13:55:18'),
(24, 8, 'hEmV31GsmygfxcgE7bfxGex1LGLAnAwU', 1, '2018-12-11 14:17:15', '2018-12-11 14:17:15', '2018-12-11 14:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_07_02_230147_migration_cartalyst_sentinel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(121, 1, 'GiOBCtZxaDhtKjPL8qWT17wrhG8R0sC4', '2018-12-04 04:30:44', '2018-12-04 04:30:44'),
(122, 3, 'TjEOReRBkOxdxGerBKUzaCnyHC0Fdy2e', '2018-12-04 10:32:48', '2018-12-04 10:32:48'),
(123, 1, 'I0UAwxHACgBxUCPjARi3lnOqk4FkrqbB', '2018-12-12 03:28:36', '2018-12-12 03:28:36'),
(125, 1, 'dKPlrWwuNiJH7SSG2cclxzqpmZKQ5PbW', '2018-12-12 05:08:20', '2018-12-12 05:08:20'),
(126, 2, 'sl29X05zKUbawDonH3bFtRWOHJYzOZvW', '2018-12-12 05:08:51', '2018-12-12 05:08:51'),
(127, 1, 'XRaFaOIJxn5EUVjMN366R5BG5Qa7DHQ0', '2019-02-18 01:16:25', '2019-02-18 01:16:25'),
(130, 2, 'NsuzG91RD0bpW7VGOCD6PiBCLinWVRu0', '2019-02-20 01:40:26', '2019-02-20 01:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-12-01 12:59:29', '2018-12-01 12:59:29'),
(2, NULL, 'ip', '127.0.0.1', '2018-12-01 12:59:29', '2018-12-01 12:59:29'),
(4, NULL, 'global', NULL, '2018-12-01 14:22:22', '2018-12-01 14:22:22'),
(5, NULL, 'ip', '127.0.0.1', '2018-12-01 14:22:22', '2018-12-01 14:22:22'),
(6, NULL, 'global', NULL, '2018-12-01 14:23:37', '2018-12-01 14:23:37'),
(7, NULL, 'ip', '127.0.0.1', '2018-12-01 14:23:37', '2018-12-01 14:23:37'),
(8, NULL, 'global', NULL, '2018-12-01 14:24:10', '2018-12-01 14:24:10'),
(9, NULL, 'ip', '127.0.0.1', '2018-12-01 14:24:10', '2018-12-01 14:24:10'),
(10, NULL, 'global', NULL, '2018-12-01 14:24:35', '2018-12-01 14:24:35'),
(11, NULL, 'ip', '127.0.0.1', '2018-12-01 14:24:35', '2018-12-01 14:24:35'),
(12, NULL, 'global', NULL, '2018-12-01 14:25:16', '2018-12-01 14:25:16'),
(13, NULL, 'ip', '127.0.0.1', '2018-12-01 14:25:16', '2018-12-01 14:25:16'),
(14, NULL, 'global', NULL, '2018-12-01 14:47:23', '2018-12-01 14:47:23'),
(15, NULL, 'ip', '127.0.0.1', '2018-12-01 14:47:23', '2018-12-01 14:47:23'),
(16, NULL, 'global', NULL, '2018-12-01 14:49:14', '2018-12-01 14:49:14'),
(17, NULL, 'ip', '127.0.0.1', '2018-12-01 14:49:14', '2018-12-01 14:49:14'),
(18, NULL, 'global', NULL, '2018-12-01 23:08:07', '2018-12-01 23:08:07'),
(19, NULL, 'ip', '127.0.0.1', '2018-12-01 23:08:07', '2018-12-01 23:08:07'),
(20, NULL, 'global', NULL, '2018-12-01 23:21:57', '2018-12-01 23:21:57'),
(21, NULL, 'ip', '127.0.0.1', '2018-12-01 23:21:57', '2018-12-01 23:21:57'),
(22, NULL, 'global', NULL, '2018-12-01 23:45:24', '2018-12-01 23:45:24'),
(23, NULL, 'ip', '127.0.0.1', '2018-12-01 23:45:24', '2018-12-01 23:45:24'),
(24, NULL, 'global', NULL, '2018-12-02 04:55:06', '2018-12-02 04:55:06'),
(25, NULL, 'ip', '127.0.0.1', '2018-12-02 04:55:06', '2018-12-02 04:55:06'),
(26, NULL, 'global', NULL, '2018-12-02 05:09:45', '2018-12-02 05:09:45'),
(27, NULL, 'ip', '127.0.0.1', '2018-12-02 05:09:45', '2018-12-02 05:09:45'),
(28, NULL, 'global', NULL, '2018-12-02 05:10:07', '2018-12-02 05:10:07'),
(29, NULL, 'ip', '127.0.0.1', '2018-12-02 05:10:07', '2018-12-02 05:10:07'),
(30, NULL, 'global', NULL, '2018-12-02 05:10:22', '2018-12-02 05:10:22'),
(31, NULL, 'ip', '127.0.0.1', '2018-12-02 05:10:22', '2018-12-02 05:10:22'),
(32, NULL, 'global', NULL, '2018-12-02 22:20:33', '2018-12-02 22:20:33'),
(33, NULL, 'ip', '127.0.0.1', '2018-12-02 22:20:33', '2018-12-02 22:20:33'),
(34, NULL, 'global', NULL, '2018-12-02 22:24:51', '2018-12-02 22:24:51'),
(35, NULL, 'ip', '127.0.0.1', '2018-12-02 22:24:51', '2018-12-02 22:24:51'),
(36, 5, 'user', NULL, '2018-12-02 22:24:51', '2018-12-02 22:24:51'),
(37, NULL, 'global', NULL, '2018-12-02 22:25:15', '2018-12-02 22:25:15'),
(38, NULL, 'ip', '127.0.0.1', '2018-12-02 22:25:15', '2018-12-02 22:25:15'),
(39, 5, 'user', NULL, '2018-12-02 22:25:15', '2018-12-02 22:25:15'),
(40, NULL, 'global', NULL, '2018-12-02 22:27:54', '2018-12-02 22:27:54'),
(41, NULL, 'ip', '127.0.0.1', '2018-12-02 22:27:54', '2018-12-02 22:27:54'),
(42, 5, 'user', NULL, '2018-12-02 22:27:54', '2018-12-02 22:27:54'),
(43, NULL, 'global', NULL, '2018-12-02 22:30:38', '2018-12-02 22:30:38'),
(44, NULL, 'ip', '127.0.0.1', '2018-12-02 22:30:38', '2018-12-02 22:30:38'),
(45, 5, 'user', NULL, '2018-12-02 22:30:38', '2018-12-02 22:30:38'),
(46, NULL, 'global', NULL, '2018-12-02 22:31:23', '2018-12-02 22:31:23'),
(47, NULL, 'ip', '127.0.0.1', '2018-12-02 22:31:23', '2018-12-02 22:31:23'),
(48, 5, 'user', NULL, '2018-12-02 22:31:23', '2018-12-02 22:31:23'),
(49, NULL, 'global', NULL, '2018-12-02 22:39:02', '2018-12-02 22:39:02'),
(50, NULL, 'ip', '127.0.0.1', '2018-12-02 22:39:02', '2018-12-02 22:39:02'),
(51, 5, 'user', NULL, '2018-12-02 22:39:02', '2018-12-02 22:39:02'),
(52, NULL, 'global', NULL, '2018-12-02 22:47:38', '2018-12-02 22:47:38'),
(53, NULL, 'ip', '127.0.0.1', '2018-12-02 22:47:38', '2018-12-02 22:47:38'),
(54, 5, 'user', NULL, '2018-12-02 22:47:38', '2018-12-02 22:47:38'),
(55, NULL, 'global', NULL, '2018-12-02 22:51:56', '2018-12-02 22:51:56'),
(56, NULL, 'ip', '127.0.0.1', '2018-12-02 22:51:56', '2018-12-02 22:51:56'),
(57, 7, 'user', NULL, '2018-12-02 22:51:56', '2018-12-02 22:51:56'),
(58, NULL, 'global', NULL, '2018-12-02 22:54:55', '2018-12-02 22:54:55'),
(59, NULL, 'ip', '127.0.0.1', '2018-12-02 22:54:55', '2018-12-02 22:54:55'),
(60, 7, 'user', NULL, '2018-12-02 22:54:55', '2018-12-02 22:54:55'),
(61, NULL, 'global', NULL, '2018-12-02 23:06:55', '2018-12-02 23:06:55'),
(62, NULL, 'ip', '127.0.0.1', '2018-12-02 23:06:55', '2018-12-02 23:06:55'),
(64, NULL, 'global', NULL, '2018-12-02 23:15:44', '2018-12-02 23:15:44'),
(65, NULL, 'ip', '127.0.0.1', '2018-12-02 23:15:44', '2018-12-02 23:15:44'),
(67, NULL, 'global', NULL, '2018-12-03 03:35:03', '2018-12-03 03:35:03'),
(68, NULL, 'ip', '127.0.0.1', '2018-12-03 03:35:03', '2018-12-03 03:35:03'),
(69, NULL, 'global', NULL, '2018-12-04 02:08:33', '2018-12-04 02:08:33'),
(70, NULL, 'ip', '127.0.0.1', '2018-12-04 02:08:33', '2018-12-04 02:08:33'),
(71, NULL, 'global', NULL, '2018-12-04 02:08:50', '2018-12-04 02:08:50'),
(72, NULL, 'ip', '127.0.0.1', '2018-12-04 02:08:50', '2018-12-04 02:08:50'),
(73, NULL, 'global', NULL, '2018-12-04 02:09:02', '2018-12-04 02:09:02'),
(74, NULL, 'ip', '127.0.0.1', '2018-12-04 02:09:02', '2018-12-04 02:09:02'),
(75, NULL, 'global', NULL, '2018-12-04 02:09:15', '2018-12-04 02:09:15'),
(76, NULL, 'ip', '127.0.0.1', '2018-12-04 02:09:15', '2018-12-04 02:09:15'),
(77, NULL, 'global', NULL, '2018-12-04 02:15:58', '2018-12-04 02:15:58'),
(78, NULL, 'ip', '127.0.0.1', '2018-12-04 02:15:58', '2018-12-04 02:15:58'),
(79, NULL, 'global', NULL, '2018-12-04 03:16:10', '2018-12-04 03:16:10'),
(80, NULL, 'ip', '127.0.0.1', '2018-12-04 03:16:10', '2018-12-04 03:16:10'),
(81, NULL, 'global', NULL, '2018-12-04 03:16:47', '2018-12-04 03:16:47'),
(82, NULL, 'ip', '127.0.0.1', '2018-12-04 03:16:47', '2018-12-04 03:16:47'),
(83, NULL, 'global', NULL, '2018-12-04 03:17:44', '2018-12-04 03:17:44'),
(84, NULL, 'ip', '127.0.0.1', '2018-12-04 03:17:44', '2018-12-04 03:17:44'),
(85, NULL, 'global', NULL, '2018-12-04 03:21:29', '2018-12-04 03:21:29'),
(86, NULL, 'ip', '127.0.0.1', '2018-12-04 03:21:29', '2018-12-04 03:21:29'),
(87, NULL, 'global', NULL, '2018-12-04 03:22:19', '2018-12-04 03:22:19'),
(88, NULL, 'ip', '127.0.0.1', '2018-12-04 03:22:19', '2018-12-04 03:22:19'),
(89, NULL, 'global', NULL, '2018-12-04 03:22:42', '2018-12-04 03:22:42'),
(90, NULL, 'ip', '127.0.0.1', '2018-12-04 03:22:42', '2018-12-04 03:22:42'),
(91, NULL, 'global', NULL, '2018-12-04 03:32:47', '2018-12-04 03:32:47'),
(92, NULL, 'ip', '127.0.0.1', '2018-12-04 03:32:47', '2018-12-04 03:32:47'),
(93, NULL, 'global', NULL, '2018-12-04 03:43:35', '2018-12-04 03:43:35'),
(94, NULL, 'ip', '127.0.0.1', '2018-12-04 03:43:35', '2018-12-04 03:43:35'),
(95, NULL, 'global', NULL, '2018-12-04 03:49:59', '2018-12-04 03:49:59'),
(96, NULL, 'ip', '127.0.0.1', '2018-12-04 03:49:59', '2018-12-04 03:49:59'),
(97, 11, 'user', NULL, '2018-12-04 03:49:59', '2018-12-04 03:49:59'),
(98, NULL, 'global', NULL, '2018-12-04 03:51:15', '2018-12-04 03:51:15'),
(99, NULL, 'ip', '127.0.0.1', '2018-12-04 03:51:15', '2018-12-04 03:51:15'),
(100, 11, 'user', NULL, '2018-12-04 03:51:15', '2018-12-04 03:51:15'),
(101, NULL, 'global', NULL, '2018-12-04 03:51:24', '2018-12-04 03:51:24'),
(102, NULL, 'ip', '127.0.0.1', '2018-12-04 03:51:24', '2018-12-04 03:51:24'),
(103, 11, 'user', NULL, '2018-12-04 03:51:24', '2018-12-04 03:51:24'),
(104, NULL, 'global', NULL, '2018-12-04 03:54:07', '2018-12-04 03:54:07'),
(105, NULL, 'ip', '127.0.0.1', '2018-12-04 03:54:07', '2018-12-04 03:54:07'),
(106, 11, 'user', NULL, '2018-12-04 03:54:07', '2018-12-04 03:54:07'),
(107, NULL, 'global', NULL, '2018-12-04 03:54:55', '2018-12-04 03:54:55'),
(108, NULL, 'ip', '127.0.0.1', '2018-12-04 03:54:55', '2018-12-04 03:54:55'),
(109, 11, 'user', NULL, '2018-12-04 03:54:55', '2018-12-04 03:54:55'),
(110, NULL, 'global', NULL, '2018-12-04 04:13:23', '2018-12-04 04:13:23'),
(111, NULL, 'ip', '127.0.0.1', '2018-12-04 04:13:23', '2018-12-04 04:13:23'),
(112, NULL, 'global', NULL, '2018-12-04 04:14:56', '2018-12-04 04:14:56'),
(113, NULL, 'ip', '127.0.0.1', '2018-12-04 04:14:56', '2018-12-04 04:14:56'),
(114, 11, 'user', NULL, '2018-12-04 04:14:56', '2018-12-04 04:14:56'),
(115, NULL, 'global', NULL, '2018-12-04 04:16:39', '2018-12-04 04:16:39'),
(116, NULL, 'ip', '127.0.0.1', '2018-12-04 04:16:39', '2018-12-04 04:16:39'),
(117, 12, 'user', NULL, '2018-12-04 04:16:39', '2018-12-04 04:16:39'),
(118, NULL, 'global', NULL, '2018-12-11 13:28:12', '2018-12-11 13:28:12'),
(119, NULL, 'ip', '127.0.0.1', '2018-12-11 13:28:12', '2018-12-11 13:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varsity_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `varsity_id`, `first_name`, `last_name`, `full_name`, `email`, `department`, `phone`, `password`, `photo`, `permissions`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'student', '1000', 'Rana', 'Saiful', 'Rana Saiful', 'ranasaiful@gmail.com', 'cse', 1586364799, '$2y$10$pL4CwVnBc40sjl/n07XN8eOW5AklPT3jQa5rtUH4hM/wI8o4Daupq', NULL, NULL, '2019-02-18 01:16:25', '2018-12-04 04:29:30', '2019-02-18 01:16:25'),
(2, 'employee', '1001', 'Afifa', 'Islam', 'Afifa Islam', 'afifaislam@gmail.com', 'cse', 167889935, '$2y$10$.WYjUGVjJ5BV.Ejt0NfGouUBzUUr8qCrArAyBUoRCpg0T/4ZfIYuK', NULL, NULL, '2019-02-20 01:40:26', '2018-12-04 04:33:43', '2019-02-20 01:40:26'),
(3, 'student', '1002', 'Bala krishna', 'Chowdhury', 'Bala Krishna Chowdhury', 'bkc12345@gmail.com', 'English', 13728476591, '$2y$10$YaFTxhPJjlHDGt3sZjM8kOnq/qcE/KYKrrfZ0LQxffYtt7TvJCala', NULL, NULL, '2018-12-04 10:32:48', '2018-12-04 04:37:38', '2018-12-04 10:32:48'),
(4, 'employee', '1003', 'Jibon', 'Chowdhury', 'Jibon Chowdhury', 'jibon1234@gmail.com', 'LAW', 123785940228, '$2y$10$AJNY3NSIpEwC15zRaSCMLOBcwzQumUwZtMJkCone5bxo.YLYuSXuW', NULL, NULL, '2019-02-18 01:17:21', '2018-12-04 04:39:49', '2019-02-18 01:17:21'),
(5, 'employee', '1004', 'Srii Norendro', 'Modi', 'Srii Norendro Modi', 'modi1234@gmail.com', 'ETE', 1538295841, '$2y$10$pibEVzFCYaCQDTTPIqQlvuqsZC56rif4Ddt7v0g4rxMmPh3NJ9vHW', NULL, NULL, '2018-12-11 13:29:45', '2018-12-04 04:43:15', '2018-12-11 13:29:45'),
(6, 'employee', '1005', 'Shekh Donald', 'Trump', 'Shekh Donald Trump', 'trump1234@gmail.com', 'English', 1732875641, '$2y$10$nZQuu7n42dpaqSGTRfsuauE80Jwt5fVx/.W0hVgEikApBFBYZPpkC', NULL, NULL, '2018-12-12 03:29:03', '2018-12-04 04:44:54', '2018-12-12 03:29:03'),
(7, 'employee', '1006', 'Akhter', 'Hossain', 'Akhter Hossain', 'akhterhossain@gmail.com', 'cse', 123785940228, '$2y$10$TvUZ6xmCaorGHK9FmJ1vCOxnrMG9Af5OaRkeBzwI78r1YEVQXM22u', NULL, NULL, NULL, '2018-12-11 13:55:18', '2018-12-11 13:55:18'),
(8, 'employee', '1007', 'Akhter', 'Hossain', 'Akhter Hossain', 'akhterhossain@gmail.com', 'ete', 1538295841, '$2y$10$5u7XVpfH2GoJ69PFht/Hp.u5x9rtZQqFzCUEJPDp5KW9HgDDx.EBW', NULL, NULL, NULL, '2018-12-11 14:17:15', '2018-12-11 14:17:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_varsity_id_unique` (`varsity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
