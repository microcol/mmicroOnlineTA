-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 10:52 PM
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
(24, 8, 'hEmV31GsmygfxcgE7bfxGex1LGLAnAwU', 1, '2018-12-11 14:17:15', '2018-12-11 14:17:15', '2018-12-11 14:17:15'),
(25, 5, 'wb07MlzQnxNYumVVyTh9ZrnqdT4OCHbh', 1, '2019-02-28 07:48:41', '2019-02-28 07:48:41', '2019-02-28 07:48:41'),
(26, 7, '93neDxJUKUVlZRBPwTXBQGFE7m6Elx5o', 1, '2019-02-28 07:50:46', '2019-02-28 07:50:46', '2019-02-28 07:50:46'),
(27, 8, 'Msu3o7hhphNVaY7UeVEolUskwjrmuogH', 1, '2019-02-28 07:51:51', '2019-02-28 07:51:51', '2019-02-28 07:51:51'),
(28, 12, 'TGFvrjcTjLEb4TzpC6I8RT9EqoTuiumf', 1, '2019-02-28 08:41:17', '2019-02-28 08:41:17', '2019-02-28 08:41:17'),
(29, 13, 's7zJ0YGnFYqLKGYsenpCEPY7HN1B4nBs', 1, '2019-02-28 09:01:25', '2019-02-28 09:01:25', '2019-02-28 09:01:25'),
(30, 14, 'bqrQJB5vBBxz2A2MWjMrUrA63INSYqBD', 1, '2019-03-04 03:21:28', '2019-03-04 03:21:28', '2019-03-04 03:21:28'),
(31, 15, 'CFgjTflr9CqDBmqwD5XomI4Ntqv4im2E', 1, '2019-03-04 05:37:31', '2019-03-04 05:37:31', '2019-03-04 05:37:31'),
(32, 15, 'irHFa3FxqB5g6I18rOKnQKjdXRKYIkBK', 1, '2019-03-04 12:48:19', '2019-03-04 12:48:19', '2019-03-04 12:48:19'),
(33, 16, 'iwQmyLQWzvv0p6Dp9Biy5QLmGtbiIpF8', 1, '2019-03-04 13:54:21', '2019-03-04 13:54:21', '2019-03-04 13:54:21'),
(34, 20, 'lDCdaw8GdiyB7S67zJO4dtyRiJevoV47', 1, '2019-03-05 13:25:37', '2019-03-05 13:25:37', '2019-03-05 13:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id`, `department`, `course_title`, `course_code`, `created_at`, `updated_at`) VALUES
(1, 'cse', 'Problem Solving', 'cse111', '2019-03-05 05:25:24', '2019-03-05 05:25:24'),
(2, 'bba', 'finance', 'bba234', '2019-03-05 05:35:47', '2019-03-05 05:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `book_title`, `course_code`, `file`, `created_at`, `updated_at`) VALUES
(2, 'Finance', 'bba234', '1551809828.pdf', '2019-03-05 12:17:08', '2019-03-05 12:17:08'),
(3, 'C', 'cse111', '1551813701.pdf', '2019-03-05 13:21:41', '2019-03-05 13:21:41');

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
(3, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(4, '2019_03_05_104854_create_classrooms_table', 2),
(5, '2019_03_05_180502_create_libraries_table', 3),
(6, '2019_03_05_192833_create_notices_table', 4),
(7, '2019_03_06_184818_create_posts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `department`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Classes will remain closed on Saturday', 'CSE', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '1551816189.pdf', '2019-03-05 14:03:09', '2019-03-05 14:03:09'),
(2, 'A meeting will be held on Monday at 4 p.m', 'bba', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1551858028.pdf', '2019-03-06 01:40:28', '2019-03-06 01:40:28');

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
(130, 2, 'NsuzG91RD0bpW7VGOCD6PiBCLinWVRu0', '2019-02-20 01:40:26', '2019-02-20 01:40:26'),
(134, 1, '2ZjY9TQV8EqUuB9tkExc1Coq0ij498YU', '2019-02-24 00:40:44', '2019-02-24 00:40:44'),
(135, 2, 'WFTDH8Zb4Hbjswnxq11jW7C7YXUTtj17', '2019-02-24 00:41:23', '2019-02-24 00:41:23'),
(136, 2, 'pXBbTotbLSxPNmsWxcaPSCDCUUBV7rPW', '2019-02-24 00:43:35', '2019-02-24 00:43:35'),
(137, 2, 'js5qScyEdojrxPOFpUvngF9HAXwIbtB3', '2019-02-24 00:45:09', '2019-02-24 00:45:09'),
(138, 1, 'MnpfsqT0aICpcUcgTpMxfVAW6TwykAah', '2019-02-24 00:45:19', '2019-02-24 00:45:19'),
(139, 2, 'NOwqjFXgdqHSzLNG8eEqTv9t1xNrPmmS', '2019-02-24 02:46:58', '2019-02-24 02:46:58'),
(140, 1, 'n85CkYhPW6C1rpowrLJDkgtIk0ksTD5A', '2019-02-24 02:47:10', '2019-02-24 02:47:10'),
(142, 2, 'C9KaEZz4TASCnwdNeQwGcarartsbbpiO', '2019-02-24 04:37:07', '2019-02-24 04:37:07'),
(143, 1, 'Uexfse7XlnjRN5PTNs8WJQIHySLz32kg', '2019-02-26 01:58:37', '2019-02-26 01:58:37'),
(145, 1, 'tt4m2lGdyBXbnTBkSJvrHuGQCx1CFNV2', '2019-02-26 02:05:35', '2019-02-26 02:05:35'),
(154, 2, 'i7PYuXVffv2Y535xzqiEQJS900wZqXnl', '2019-02-27 03:17:25', '2019-02-27 03:17:25'),
(158, 6, 'r75K2mXCO8YYS88gCoFfUxFuIwZb5ZY5', '2019-02-27 04:43:42', '2019-02-27 04:43:42'),
(159, 6, 'KpUSOprhYB1HFraLW2mn801WpGskMIkF', '2019-02-27 04:45:16', '2019-02-27 04:45:16'),
(160, 6, 'XcE5WglQV94QuwFBhvs2C8Hz3pTXzh6v', '2019-02-27 04:45:34', '2019-02-27 04:45:34'),
(164, 6, 'vrF7DBFhEsq03hrqvBQMLSLpvTxcrXKg', '2019-02-27 04:47:47', '2019-02-27 04:47:47'),
(165, 12, '0aoi9RncA8CDX2GN2SKmsdlbVUP6eAGD', '2019-02-28 08:46:41', '2019-02-28 08:46:41'),
(166, 12, '2dDAaZQqJL4P531mt7sFR1pIwi5TGLPC', '2019-02-28 08:46:42', '2019-02-28 08:46:42'),
(167, 12, 'ChlORCbNBpbtiUudeEgCxozuABRX88LS', '2019-02-28 08:47:29', '2019-02-28 08:47:29'),
(168, 12, 'LwcHAKdfPKVvKunxbcsCLL6tUPNXexfi', '2019-02-28 08:47:58', '2019-02-28 08:47:58'),
(169, 12, 'rSa9zx5auXtAuDqOrr3tiqK2WcZ2gtkO', '2019-02-28 08:48:07', '2019-02-28 08:48:07'),
(172, 13, 'syeb513hxUFgR6OsG6N2Pa0Ff1I7uSCd', '2019-02-28 09:02:35', '2019-02-28 09:02:35'),
(173, 13, 'rEojGqBiCimLhmQvK7SuexlLYgSAmB9b', '2019-02-28 09:03:20', '2019-02-28 09:03:20'),
(174, 13, 'MZLjRS2C3bzw2wZCGhTvldwpVjgXc96t', '2019-02-28 09:04:10', '2019-02-28 09:04:10'),
(175, 13, 'x5RJi2N8XLue3ZKiHZbDQOxjRBIlCzxL', '2019-02-28 09:07:18', '2019-02-28 09:07:18'),
(176, 12, 'WxcxOnBKK7tgaLQI3wgGPKkxC6YNVYwM', '2019-03-04 03:05:10', '2019-03-04 03:05:10'),
(178, 13, 'lKTylVevPlc1gkYfd5Bx9NbJdKSOqRZ5', '2019-03-04 03:07:01', '2019-03-04 03:07:01'),
(183, 14, 'mVoUFWoSeiSkWCL1SPZt0LyqiesDghfn', '2019-03-04 03:28:08', '2019-03-04 03:28:08'),
(189, 14, 'uA4qpmw5jQsc9f3vRuqqyYoqGsg29ezk', '2019-03-04 05:56:28', '2019-03-04 05:56:28'),
(193, 14, 'QShgJq0w79wQ8bPyen0L5YuTsTNBLaZz', '2019-03-04 14:04:34', '2019-03-04 14:04:34'),
(194, 14, 'zNrBSXern8PrXZILBwZxnnMzM0DKow0Y', '2019-03-04 14:26:35', '2019-03-04 14:26:35'),
(198, 14, 'KVAcnjszFaSqYoFlW7sK2cDPp9Bow7S9', '2019-03-05 05:21:52', '2019-03-05 05:21:52'),
(203, 14, 'PSseLgxBtd0ROqtdwTVDNHzB1S5nN9S6', '2019-03-05 13:21:07', '2019-03-05 13:21:07'),
(207, 14, '3u3hbUvEQZttO2I3IY3DVImNnyP4pbbk', '2019-03-06 02:45:36', '2019-03-06 02:45:36'),
(208, 13, 'hQvUoF73D1Gk2iBY20bRda0eFRLDvuIL', '2019-03-06 12:33:12', '2019-03-06 12:33:12'),
(209, 20, 'uyhSjYLlNjdz6UxbV5QieYYfMb4nHiIH', '2019-03-06 13:10:08', '2019-03-06 13:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post`, `created_at`, `updated_at`) VALUES
(1, '13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. \r\nMany desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', '2019-03-06 13:42:54', '2019-03-06 13:42:54'),
(2, '20', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-03-06 13:46:18', '2019-03-06 13:46:18');

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
(119, NULL, 'ip', '127.0.0.1', '2018-12-11 13:28:12', '2018-12-11 13:28:12'),
(120, NULL, 'global', NULL, '2019-02-24 00:41:04', '2019-02-24 00:41:04'),
(121, NULL, 'ip', '127.0.0.1', '2019-02-24 00:41:04', '2019-02-24 00:41:04'),
(122, NULL, 'global', NULL, '2019-02-24 00:43:23', '2019-02-24 00:43:23'),
(123, NULL, 'ip', '127.0.0.1', '2019-02-24 00:43:23', '2019-02-24 00:43:23'),
(124, NULL, 'global', NULL, '2019-02-24 02:46:36', '2019-02-24 02:46:36'),
(125, NULL, 'ip', '127.0.0.1', '2019-02-24 02:46:36', '2019-02-24 02:46:36'),
(126, NULL, 'global', NULL, '2019-02-24 03:17:29', '2019-02-24 03:17:29'),
(127, NULL, 'ip', '127.0.0.1', '2019-02-24 03:17:30', '2019-02-24 03:17:30'),
(128, NULL, 'global', NULL, '2019-02-24 03:58:11', '2019-02-24 03:58:11'),
(129, NULL, 'ip', '127.0.0.1', '2019-02-24 03:58:11', '2019-02-24 03:58:11'),
(130, NULL, 'global', NULL, '2019-02-24 03:58:43', '2019-02-24 03:58:43'),
(131, NULL, 'ip', '127.0.0.1', '2019-02-24 03:58:43', '2019-02-24 03:58:43'),
(132, NULL, 'global', NULL, '2019-02-27 05:00:31', '2019-02-27 05:00:31'),
(133, NULL, 'ip', '127.0.0.1', '2019-02-27 05:00:31', '2019-02-27 05:00:31'),
(134, 1, 'user', NULL, '2019-02-27 05:00:31', '2019-02-27 05:00:31'),
(135, NULL, 'global', NULL, '2019-02-27 05:03:06', '2019-02-27 05:03:06'),
(136, NULL, 'ip', '127.0.0.1', '2019-02-27 05:03:06', '2019-02-27 05:03:06'),
(137, 1, 'user', NULL, '2019-02-27 05:03:06', '2019-02-27 05:03:06'),
(138, NULL, 'global', NULL, '2019-02-27 05:03:46', '2019-02-27 05:03:46'),
(139, NULL, 'ip', '127.0.0.1', '2019-02-27 05:03:46', '2019-02-27 05:03:46'),
(140, 4, 'user', NULL, '2019-02-27 05:03:46', '2019-02-27 05:03:46'),
(141, NULL, 'global', NULL, '2019-02-27 05:06:06', '2019-02-27 05:06:06'),
(142, NULL, 'ip', '127.0.0.1', '2019-02-27 05:06:07', '2019-02-27 05:06:07'),
(143, 4, 'user', NULL, '2019-02-27 05:06:07', '2019-02-27 05:06:07'),
(144, NULL, 'global', NULL, '2019-02-27 05:06:19', '2019-02-27 05:06:19'),
(145, NULL, 'ip', '127.0.0.1', '2019-02-27 05:06:19', '2019-02-27 05:06:19'),
(146, 4, 'user', NULL, '2019-02-27 05:06:19', '2019-02-27 05:06:19'),
(147, NULL, 'global', NULL, '2019-02-27 05:07:32', '2019-02-27 05:07:32'),
(148, NULL, 'ip', '127.0.0.1', '2019-02-27 05:07:33', '2019-02-27 05:07:33'),
(149, 4, 'user', NULL, '2019-02-27 05:07:33', '2019-02-27 05:07:33'),
(150, NULL, 'global', NULL, '2019-02-27 05:15:33', '2019-02-27 05:15:33'),
(151, NULL, 'ip', '127.0.0.1', '2019-02-27 05:15:33', '2019-02-27 05:15:33'),
(152, 1, 'user', NULL, '2019-02-27 05:15:33', '2019-02-27 05:15:33'),
(153, NULL, 'global', NULL, '2019-02-28 08:03:37', '2019-02-28 08:03:37'),
(154, NULL, 'ip', '127.0.0.1', '2019-02-28 08:03:37', '2019-02-28 08:03:37'),
(155, 8, 'user', NULL, '2019-02-28 08:03:37', '2019-02-28 08:03:37'),
(156, NULL, 'global', NULL, '2019-02-28 08:05:52', '2019-02-28 08:05:52'),
(157, NULL, 'ip', '127.0.0.1', '2019-02-28 08:05:52', '2019-02-28 08:05:52'),
(158, 8, 'user', NULL, '2019-02-28 08:05:52', '2019-02-28 08:05:52'),
(159, NULL, 'global', NULL, '2019-02-28 08:06:40', '2019-02-28 08:06:40'),
(160, NULL, 'ip', '127.0.0.1', '2019-02-28 08:06:40', '2019-02-28 08:06:40'),
(161, 8, 'user', NULL, '2019-02-28 08:06:40', '2019-02-28 08:06:40'),
(162, NULL, 'global', NULL, '2019-02-28 08:07:43', '2019-02-28 08:07:43'),
(163, NULL, 'ip', '127.0.0.1', '2019-02-28 08:07:43', '2019-02-28 08:07:43'),
(164, 8, 'user', NULL, '2019-02-28 08:07:43', '2019-02-28 08:07:43'),
(165, NULL, 'global', NULL, '2019-02-28 08:08:09', '2019-02-28 08:08:09'),
(166, NULL, 'ip', '127.0.0.1', '2019-02-28 08:08:09', '2019-02-28 08:08:09'),
(167, 8, 'user', NULL, '2019-02-28 08:08:09', '2019-02-28 08:08:09'),
(168, NULL, 'global', NULL, '2019-02-28 08:08:30', '2019-02-28 08:08:30'),
(169, NULL, 'ip', '127.0.0.1', '2019-02-28 08:08:30', '2019-02-28 08:08:30'),
(170, 8, 'user', NULL, '2019-02-28 08:08:30', '2019-02-28 08:08:30'),
(171, NULL, 'global', NULL, '2019-02-28 08:19:34', '2019-02-28 08:19:34'),
(172, NULL, 'ip', '127.0.0.1', '2019-02-28 08:19:34', '2019-02-28 08:19:34'),
(173, 8, 'user', NULL, '2019-02-28 08:19:34', '2019-02-28 08:19:34'),
(174, NULL, 'global', NULL, '2019-02-28 08:20:54', '2019-02-28 08:20:54'),
(175, NULL, 'ip', '127.0.0.1', '2019-02-28 08:20:55', '2019-02-28 08:20:55'),
(176, 8, 'user', NULL, '2019-02-28 08:20:55', '2019-02-28 08:20:55'),
(177, NULL, 'global', NULL, '2019-02-28 08:21:54', '2019-02-28 08:21:54'),
(178, NULL, 'ip', '127.0.0.1', '2019-02-28 08:21:54', '2019-02-28 08:21:54'),
(179, 8, 'user', NULL, '2019-02-28 08:21:54', '2019-02-28 08:21:54'),
(180, NULL, 'global', NULL, '2019-02-28 08:36:03', '2019-02-28 08:36:03'),
(181, NULL, 'ip', '127.0.0.1', '2019-02-28 08:36:03', '2019-02-28 08:36:03'),
(182, 8, 'user', NULL, '2019-02-28 08:36:03', '2019-02-28 08:36:03'),
(183, NULL, 'global', NULL, '2019-02-28 08:36:08', '2019-02-28 08:36:08'),
(184, NULL, 'ip', '127.0.0.1', '2019-02-28 08:36:08', '2019-02-28 08:36:08'),
(185, 8, 'user', NULL, '2019-02-28 08:36:08', '2019-02-28 08:36:08'),
(186, NULL, 'global', NULL, '2019-02-28 08:36:32', '2019-02-28 08:36:32'),
(187, NULL, 'ip', '127.0.0.1', '2019-02-28 08:36:32', '2019-02-28 08:36:32'),
(188, 8, 'user', NULL, '2019-02-28 08:36:32', '2019-02-28 08:36:32'),
(189, NULL, 'global', NULL, '2019-02-28 08:37:06', '2019-02-28 08:37:06'),
(190, NULL, 'ip', '127.0.0.1', '2019-02-28 08:37:06', '2019-02-28 08:37:06'),
(191, 8, 'user', NULL, '2019-02-28 08:37:07', '2019-02-28 08:37:07'),
(192, NULL, 'global', NULL, '2019-02-28 08:38:05', '2019-02-28 08:38:05'),
(193, NULL, 'ip', '127.0.0.1', '2019-02-28 08:38:05', '2019-02-28 08:38:05'),
(194, 8, 'user', NULL, '2019-02-28 08:38:05', '2019-02-28 08:38:05'),
(195, NULL, 'global', NULL, '2019-02-28 08:38:06', '2019-02-28 08:38:06'),
(196, NULL, 'ip', '127.0.0.1', '2019-02-28 08:38:06', '2019-02-28 08:38:06'),
(197, 8, 'user', NULL, '2019-02-28 08:38:06', '2019-02-28 08:38:06'),
(198, NULL, 'global', NULL, '2019-02-28 08:55:46', '2019-02-28 08:55:46'),
(199, NULL, 'ip', '127.0.0.1', '2019-02-28 08:55:46', '2019-02-28 08:55:46'),
(200, NULL, 'global', NULL, '2019-03-04 05:55:58', '2019-03-04 05:55:58'),
(201, NULL, 'ip', '127.0.0.1', '2019-03-04 05:55:58', '2019-03-04 05:55:58'),
(202, NULL, 'global', NULL, '2019-03-05 01:40:34', '2019-03-05 01:40:34'),
(203, NULL, 'ip', '127.0.0.1', '2019-03-05 01:40:34', '2019-03-05 01:40:34'),
(204, NULL, 'global', NULL, '2019-03-05 13:24:34', '2019-03-05 13:24:34'),
(205, NULL, 'ip', '127.0.0.1', '2019-03-05 13:24:34', '2019-03-05 13:24:34');

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
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(12, 'employee', '1123554', 'teacher1', 'one', 'teacher one', 'teacher@onlineta.com', 'bba', 6576, '$2y$10$1nsiUzvpHH5wafk7//eeoOvwm3n9S8FD2rHsMKn8rRw/.kXNH1hRi', '1551364876.jpg', NULL, '2019-03-04 03:33:37', '2019-02-28 08:41:17', '2019-03-04 03:33:37'),
(13, 'student', '151-15-335', 'Md Mohaiminul', 'Islam', 'Md Mohaiminul Islam', 'rabidislam@hotmail.com', 'CSE', 1624585608, '$2y$10$KJiCGKUdyAAPhcNAhJxeLuyvY1Ul2IWh.oooU2GZFZc5RihHO21fS', '1551366085.jpg', NULL, '2019-03-06 12:33:12', '2019-02-28 09:01:25', '2019-03-06 12:33:12'),
(14, 'superadmin', '121243422', 'Super', 'Admin', 'Super Admin', 'superadmin@onlineta.com', 'ALL', 9873546723, '$2y$10$eIw.SbAAekC4kerloTbM1e2cO8uCM1A44T4WB3t0hgjn86jQ53C02', '1551691288.png', NULL, '2019-03-06 02:45:36', '2019-03-04 03:21:28', '2019-03-06 02:45:36'),
(16, 'employee', '11235544', 'teacher1', 'one', 'teacher sakib', 'teacher@onlineta.com', 'bba', 6576, '$2y$10$gEqijPwCLBun1Hejo6B1u.hbxjMhGbwhGayKkY2ivlAogwaj9Huj.', '1551779998.png', '{\"user.update\":false}', NULL, '2019-03-04 13:54:21', '2019-03-05 03:59:58'),
(20, 'student', '151-15-313', 'Tohfae Masrura', 'Sumaia', 'Tohfae Masrura Sumaia', 'tohfa@onlineta.com', 'cse', 1639219939, '$2y$10$o/fC4rDEYhdFVM9Kbpedteqh6GidHvWzuAst7w5qq57Hf3pKlO.wi', '1551813936.jpg', NULL, '2019-03-06 13:10:08', '2019-03-05 13:25:37', '2019-03-06 13:10:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
