-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2022 at 06:06 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printgaraundotcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `depth_level` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `searchable` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `total_sale` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `avg_rating` double(8,2) NOT NULL DEFAULT '0.00',
  `commission_rate` double(16,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `depth_level`, `icon`, `searchable`, `status`, `total_sale`, `avg_rating`, `commission_rate`, `created_at`, `updated_at`) VALUES
(1, 'Business Essentials', 'business-essentials', 0, 1, 'fas fa-business-time', 1, 1, 0, 0.00, 0.00, '2022-02-28 11:01:46', '2022-02-28 11:01:46'),
(2, 'Gifts, Photo Print & Wall Art', 'gifts-photo-print--wall-art', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:38:38', '2022-02-28 16:38:38'),
(3, 'Board, Signange & Lables & Packaging', 'board-signange-lables-packaging', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:39:17', '2022-02-28 16:39:17'),
(4, 'Events and Celebration', 'events-and-celebration', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:39:45', '2022-02-28 16:39:45'),
(5, 'Clothing and Appearls', 'clothing-and-appearls', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:40:39', '2022-02-28 16:40:39'),
(6, 'Interiors and Furnitre', 'interiors-and-furnitre', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:42:04', '2022-02-28 16:42:04'),
(7, 'Merchandise', 'merchandise', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:42:23', '2022-02-28 16:42:23'),
(8, 'Covid Essentials', 'covid-essentials', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:49:27', '2022-02-28 16:49:27'),
(9, 'New Arrivals', 'new-arrivals', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:49:40', '2022-02-28 16:49:40'),
(10, 'Business Stationery', 'business-stationery', 1, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:52:42', '2022-02-28 16:52:42'),
(11, 'Marketing Materials', 'marketing-materials', 1, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:53:03', '2022-02-28 16:53:03'),
(12, 'Ids and Lynard', 'ids-and-lynard', 1, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:53:14', '2022-02-28 16:53:14'),
(13, 'Photo Prints', 'photo-prints', 2, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:54:41', '2022-02-28 16:54:41'),
(14, 'Wall Decor', 'wall-decor', 2, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:56:59', '2022-02-28 16:56:59'),
(15, 'Gifts', 'gifts', 2, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 16:58:16', '2022-02-28 16:58:16'),
(16, 'Signange and Boards', 'signange-and-boards', 3, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:00:31', '2022-02-28 17:01:50'),
(17, 'Sticker Branding', 'sticker-branding', 3, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:03:03', '2022-02-28 17:03:03'),
(18, 'Flex branding', 'flex-branding', 3, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:04:15', '2022-02-28 17:04:15'),
(19, 'Glow sign Board', 'glow-sign-board', 3, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:05:52', '2022-02-28 17:30:12'),
(20, 'Labels & Packaging', 'labels--packaging', 0, 1, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:08:01', '2022-02-28 17:08:01'),
(21, 'Canvas Print', 'canvas-print', 3, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:12:50', '2022-02-28 17:12:50'),
(22, 'Wood Signages', 'wood-signages', 3, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:15:13', '2022-02-28 17:15:43'),
(23, 'Direction Boards', 'direction-boards', 3, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:19:57', '2022-02-28 17:19:57'),
(24, 'Birthday Themed Shop', 'birthday-themed-shop', 4, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:22:59', '2022-02-28 17:22:59'),
(25, 'Anniversary Themed Shop', 'anniversary-themed-shop', 4, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:25:24', '2022-02-28 17:25:24'),
(26, 'Bridal Shower Themed Shop', 'bridal-shower-themed-shop', 4, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:26:57', '2022-02-28 17:26:57'),
(27, 'Baby Shower Themed Shop', 'baby-shower-themed-shop', 4, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:27:13', '2022-02-28 17:27:13'),
(28, 'Other Celebration', 'other-celebration', 4, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:27:38', '2022-02-28 17:27:38'),
(29, 'Bags', 'bags', 5, 2, NULL, 1, 1, 0, 0.00, 0.00, '2022-02-28 17:28:56', '2022-02-28 17:28:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
