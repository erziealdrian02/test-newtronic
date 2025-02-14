-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2025 at 07:12 AM
-- Server version: 8.0.41-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack-newtronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint UNSIGNED NOT NULL,
  `sport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_a` int NOT NULL DEFAULT '0',
  `score_b` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `sport`, `team_a`, `team_b`, `score_a`, `score_b`, `created_at`, `updated_at`) VALUES
(1, 'Soccer', 'Team A', 'Team B', 113, 1345, '2025-02-14 02:57:20', '2025-02-13 23:36:48'),
(2, 'Basketball', 'Team C', 'Team D', 100, 98, '2025-02-14 02:57:20', '2025-02-14 02:57:20'),
(3, 'Tennis', 'Player 1', 'Player 2', 3, 0, '2025-02-14 02:57:20', '2025-02-14 02:57:20'),
(4, 'Baseball', 'Team E', 'Team F', 5, 3, '2025-02-14 02:57:20', '2025-02-14 02:57:20'),
(5, 'Hockey', 'Team G', 'Team H', 4, 4, '2025-02-14 02:57:20', '2025-02-14 02:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_crawls`
--

CREATE TABLE `master_crawls` (
  `id` bigint UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denomination` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy` decimal(10,5) NOT NULL,
  `sell` decimal(10,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_crawls`
--

INSERT INTO `master_crawls` (`id`, `currency`, `denomination`, `buy`, `sell`, `created_at`, `updated_at`) VALUES
(1, 'USD', '100-50', 16.33000, 16.41000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(2, '', '20-5', 16.21000, 16.41000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(3, 'EUR', '500-50', 16.96500, 17.07000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(4, 'AUD', '100-50', 10.24500, 10.32000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(5, 'NZD', '100-50', 9.20000, 9.31500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(6, 'CAD', '100-50', 11.36000, 11.49500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(7, 'CHF', '1.000-100', 17.91000, 18.04500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(8, 'GBP', '50-20', 20.36000, 20.47500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(9, 'JPY', '', 10540.00000, 10700.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(10, 'SGD', '100', 12.09000, 12.13500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(11, '', '50', 12.07000, 12.13500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(12, 'BND', '1.000-50', 12.07000, 12.11500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(13, 'MYR', '100-50', 3.65000, 3.68000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(14, 'THB', '', 48000.00000, 48520.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(15, 'HKD', '1.000-500', 2.09900, 2.11100, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(16, 'CNY', '100', 2.23600, 2.25500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(17, '', '50-5', 2.03600, 2.25500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(18, 'TWD', '2.000-500', 48550.00000, 49200.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(19, 'KRW', '', 1111.00000, 1127.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(20, 'PHP', '1.000-500', 27200.00000, 28800.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(21, 'INR', '500', 18000.00000, 19700.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(22, 'VND', '500.000-100.000', 61.00000, 665.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(23, 'SAR', '500', 4.32300, 4.39000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(24, 'AED', '1.000', 4.42100, 4.46500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(25, 'QAR', '500-50', 4.38000, 4.46000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(26, 'BHD', '20-5', 42.50000, 42.95000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(27, 'OMR', '50-5', 41.62500, 42.17500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(28, 'KWD', '20-5', 51.97500, 52.70000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(29, 'JOD', '50-10', 22.22500, 22.57500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(30, 'TRY', '200-100', 44000.00000, 49400.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(31, 'IQD', '', 860.00000, 1230.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(32, 'SEK', '', 1.34500, 1.60000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(33, 'NOK', '', 1.31000, 1.55000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(34, 'DKK', '', 2.10000, 2.33000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(35, 'RUB', '', 12900.00000, 21000.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(36, 'ZAR', '', 82000.00000, 94500.00000, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(37, 'MOP', '', 2.03000, 2.10500, '2025-02-13 09:26:30', '2025-02-13 09:26:30'),
(38, 'USD', '100-50', 16.33000, 16.41000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(39, '', '20-5', 16.21000, 16.41000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(40, 'EUR', '500-50', 16.96500, 17.07000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(41, 'AUD', '100-50', 10.24500, 10.32000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(42, 'NZD', '100-50', 9.20000, 9.31500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(43, 'CAD', '100-50', 11.36000, 11.49500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(44, 'CHF', '1.000-100', 17.91000, 18.04500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(45, 'GBP', '50-20', 20.36000, 20.47500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(46, 'JPY', '', 10540.00000, 10700.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(47, 'SGD', '100', 12.09000, 12.13500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(48, '', '50', 12.07000, 12.13500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(49, 'BND', '1.000-50', 12.07000, 12.11500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(50, 'MYR', '100-50', 3.65000, 3.68000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(51, 'THB', '', 48000.00000, 48520.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(52, 'HKD', '1.000-500', 2.09900, 2.11100, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(53, 'CNY', '100', 2.23600, 2.25500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(54, '', '50-5', 2.03600, 2.25500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(55, 'TWD', '2.000-500', 48550.00000, 49200.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(56, 'KRW', '', 1111.00000, 1127.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(57, 'PHP', '1.000-500', 27200.00000, 28800.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(58, 'INR', '500', 18000.00000, 19700.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(59, 'VND', '500.000-100.000', 61.00000, 665.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(60, 'SAR', '500', 4.32300, 4.39000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(61, 'AED', '1.000', 4.42100, 4.46500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(62, 'QAR', '500-50', 4.38000, 4.46000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(63, 'BHD', '20-5', 42.50000, 42.95000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(64, 'OMR', '50-5', 41.62500, 42.17500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(65, 'KWD', '20-5', 51.97500, 52.70000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(66, 'JOD', '50-10', 22.22500, 22.57500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(67, 'TRY', '200-100', 44000.00000, 49400.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(68, 'IQD', '', 860.00000, 1230.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(69, 'SEK', '', 1.34500, 1.60000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(70, 'NOK', '', 1.31000, 1.55000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(71, 'DKK', '', 2.10000, 2.33000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(72, 'RUB', '', 12900.00000, 21000.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(73, 'ZAR', '', 82000.00000, 94500.00000, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(74, 'MOP', '', 2.03000, 2.10500, '2025-02-13 09:26:48', '2025-02-13 09:26:48'),
(75, 'USD', '100-50', 16.33000, 16.41000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(76, '', '20-5', 16.21000, 16.41000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(77, 'EUR', '500-50', 16.96500, 17.07000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(78, 'AUD', '100-50', 10.24500, 10.32000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(79, 'NZD', '100-50', 9.20000, 9.31500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(80, 'CAD', '100-50', 11.36000, 11.49500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(81, 'CHF', '1.000-100', 17.91000, 18.04500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(82, 'GBP', '50-20', 20.36000, 20.47500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(83, 'JPY', '', 10540.00000, 10700.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(84, 'SGD', '100', 12.09000, 12.13500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(85, '', '50', 12.07000, 12.13500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(86, 'BND', '1.000-50', 12.07000, 12.11500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(87, 'MYR', '100-50', 3.65000, 3.68000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(88, 'THB', '', 48000.00000, 48520.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(89, 'HKD', '1.000-500', 2.09900, 2.11100, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(90, 'CNY', '100', 2.23600, 2.25500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(91, '', '50-5', 2.03600, 2.25500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(92, 'TWD', '2.000-500', 48550.00000, 49200.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(93, 'KRW', '', 1111.00000, 1127.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(94, 'PHP', '1.000-500', 27200.00000, 28800.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(95, 'INR', '500', 18000.00000, 19700.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(96, 'VND', '500.000-100.000', 61.00000, 665.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(97, 'SAR', '500', 4.32300, 4.39000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(98, 'AED', '1.000', 4.42100, 4.46500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(99, 'QAR', '500-50', 4.38000, 4.46000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(100, 'BHD', '20-5', 42.50000, 42.95000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(101, 'OMR', '50-5', 41.62500, 42.17500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(102, 'KWD', '20-5', 51.97500, 52.70000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(103, 'JOD', '50-10', 22.22500, 22.57500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(104, 'TRY', '200-100', 44000.00000, 49400.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(105, 'IQD', '', 860.00000, 1230.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(106, 'SEK', '', 1.34500, 1.60000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(107, 'NOK', '', 1.31000, 1.55000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(108, 'DKK', '', 2.10000, 2.33000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(109, 'RUB', '', 12900.00000, 21000.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(110, 'ZAR', '', 82000.00000, 94500.00000, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(111, 'MOP', '', 2.03000, 2.10500, '2025-02-13 09:28:10', '2025-02-13 09:28:10'),
(112, 'USD', '100-50', 16.33000, 16.41000, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(113, '', '20-5', 16.21000, 16.41000, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(114, 'EUR', '500-50', 16.96500, 17.07000, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(115, 'AUD', '100-50', 10.24500, 10.32000, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(116, 'NZD', '100-50', 9.20000, 9.31500, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(117, 'CAD', '100-50', 11.36000, 11.49500, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(118, 'CHF', '1.000-100', 17.91000, 18.04500, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(119, 'GBP', '50-20', 20.36000, 20.47500, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(120, 'JPY', NULL, 10540.00000, 10700.00000, '2025-02-13 09:40:57', '2025-02-13 09:40:57'),
(121, 'SGD', '100', 12.09000, 12.13500, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(122, '', '50', 12.07000, 12.13500, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(123, 'BND', '1.000-50', 12.07000, 12.11500, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(124, 'MYR', '100-50', 3.65000, 3.68000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(125, 'THB', NULL, 48000.00000, 48520.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(126, 'HKD', '1.000-500', 2.09900, 2.11100, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(127, 'CNY', '100', 2.23600, 2.25500, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(128, '', '50-5', 2.03600, 2.25500, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(129, 'TWD', '2.000-500', 48550.00000, 49200.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(130, 'KRW', NULL, 1111.00000, 1127.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(131, 'PHP', '1.000-500', 27200.00000, 28800.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(132, 'INR', '500', 18000.00000, 19700.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(133, 'VND', '500.000-100.000', 61.00000, 665.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(134, 'SAR', '500', 4.32300, 4.39000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(135, 'AED', '1.000', 4.42100, 4.46500, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(136, 'QAR', '500-50', 4.38000, 4.46000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(137, 'BHD', '20-5', 42.50000, 42.95000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(138, 'OMR', '50-5', 41.62500, 42.17500, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(139, 'KWD', '20-5', 51.97500, 52.70000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(140, 'JOD', '50-10', 22.22500, 22.57500, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(141, 'TRY', '200-100', 44000.00000, 49400.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(142, 'IQD', NULL, 860.00000, 1230.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(143, 'SEK', NULL, 1.34500, 1.60000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(144, 'NOK', NULL, 1.31000, 1.55000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(145, 'DKK', NULL, 2.10000, 2.33000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(146, 'RUB', NULL, 12900.00000, 21000.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(147, 'ZAR', NULL, 82000.00000, 94500.00000, '2025-02-13 09:40:58', '2025-02-13 09:40:58'),
(148, 'MOP', NULL, 2.03000, 2.10500, '2025-02-13 09:40:58', '2025-02-13 09:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `master_detail_transaksis`
--

CREATE TABLE `master_detail_transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `id_transaksi` bigint UNSIGNED NOT NULL,
  `id_produk` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_detail_transaksis`
--

INSERT INTO `master_detail_transaksis` (`id`, `id_transaksi`, `id_produk`, `quantity`, `created_at`, `updated_at`) VALUES
(6, 4, 3, 1, '2025-02-13 00:10:36', '2025-02-13 00:10:36'),
(9, 6, 1, 14, '2025-02-13 00:15:38', '2025-02-13 00:15:38'),
(10, 7, 1, 1, '2025-02-13 00:17:00', '2025-02-13 00:17:00'),
(11, 7, 3, 12, '2025-02-13 00:17:00', '2025-02-13 00:17:00'),
(31, 3, 2, 1, '2025-02-13 01:35:58', '2025-02-13 01:35:58'),
(35, 2, 2, 90, '2025-02-13 01:39:30', '2025-02-13 07:24:33'),
(36, 2, 3, 11, '2025-02-13 01:39:30', '2025-02-13 01:39:30'),
(39, 8, 1, 144, '2025-02-13 07:27:35', '2025-02-13 07:27:35'),
(40, 9, 2, 23, '2025-02-13 07:29:09', '2025-02-13 07:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `master_produks`
--

CREATE TABLE `master_produks` (
  `id` bigint UNSIGNED NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int NOT NULL,
  `harga` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_produks`
--

INSERT INTO `master_produks` (`id`, `produk`, `stok`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Produk A', 0, 50000, '2025-02-12 15:39:34', '2025-02-12 15:39:34'),
(2, 'Produk B', 99, 75000, '2025-02-12 15:39:34', '2025-02-13 07:29:09'),
(3, 'Produk C', 150, 30000, '2025-02-12 15:39:34', '2025-02-13 07:24:33'),
(5, 'Product 2', 12, 100000, '2025-02-13 06:16:58', '2025-02-13 06:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `master_transaksis`
--

CREATE TABLE `master_transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_transaksis`
--

INSERT INTO `master_transaksis` (`id`, `kode_transaksi`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, 'TRX002', '2025-02-12 11:30:00', '2025-02-12 15:40:51', '2025-02-12 15:40:51'),
(3, 'TRX003', '2025-02-12 14:15:00', '2025-02-12 15:40:51', '2025-02-12 15:40:51'),
(4, 'TRX004', '2025-02-13 00:00:00', '2025-02-13 00:10:36', '2025-02-13 00:10:36'),
(6, 'TRX006', '2025-02-18 00:00:00', '2025-02-13 00:15:38', '2025-02-13 00:15:38'),
(7, 'TRX007', '2025-02-18 00:00:00', '2025-02-13 00:17:00', '2025-02-13 00:17:00'),
(8, 'TRX008', '2025-02-13 00:00:00', '2025-02-13 07:27:35', '2025-02-13 07:27:35'),
(9, 'TRX009', '2025-02-18 00:00:00', '2025-02-13 07:29:09', '2025-02-13 07:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '0001_01_01_000000_create_users_table', 1),
(12, '0001_01_01_000001_create_cache_table', 1),
(13, '0001_01_01_000002_create_jobs_table', 1),
(14, '2025_02_12_140910_create_master_produks_table', 1),
(15, '2025_02_12_140926_create_master_transaksis_table', 1),
(16, '2025_02_12_140942_create_master_detail_transaksis_table', 1),
(17, '2025_02_13_161133_create_master_crawls_table', 2),
(18, '0000_00_00_000000_create_websockets_statistics_entries_table', 3),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(20, '2025_02_14_024504_create_games_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('nIfZmRizmSeoPOxqkbKgIYp8XxWKQEOR3xS58znW', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVFhqREFrTjFIRFIxRUc1S1FjN1NEOVBteDVPdlFtUUJmeHlicnJadCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODA4MC9jcmF3bC1kYXRhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1739464858);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Muhamad Erzie Aldrian Nugraha', 'erzie.aldrian02@gmail.com', NULL, '$2y$12$x4cGrNh2HZvK7AaEGNqpOugei9j8gH8HMxTxRFu7DAdQJJeensDE2', NULL, '2025-02-12 07:30:11', '2025-02-12 07:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int NOT NULL,
  `websocket_message_count` int NOT NULL,
  `api_message_count` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_crawls`
--
ALTER TABLE `master_crawls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_detail_transaksis`
--
ALTER TABLE `master_detail_transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_detail_transaksis_id_transaksi_foreign` (`id_transaksi`),
  ADD KEY `master_detail_transaksis_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `master_produks`
--
ALTER TABLE `master_produks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_produks_produk_unique` (`produk`);

--
-- Indexes for table `master_transaksis`
--
ALTER TABLE `master_transaksis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_transaksis_kode_transaksi_unique` (`kode_transaksi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_crawls`
--
ALTER TABLE `master_crawls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `master_detail_transaksis`
--
ALTER TABLE `master_detail_transaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `master_produks`
--
ALTER TABLE `master_produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_transaksis`
--
ALTER TABLE `master_transaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_detail_transaksis`
--
ALTER TABLE `master_detail_transaksis`
  ADD CONSTRAINT `master_detail_transaksis_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `master_produks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_detail_transaksis_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `master_transaksis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
