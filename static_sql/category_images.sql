-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2022 at 06:07 PM
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
-- Table structure for table `category_images`
--

CREATE TABLE `category_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_images`
--

INSERT INTO `category_images` (`id`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/images/28-02-2022/621cab9aa425b.png', '2022-02-28 11:01:46', '2022-02-28 11:01:46'),
(2, 2, 'uploads/images/28-02-2022/621cfa8ee1c69.jpeg', '2022-02-28 16:38:38', '2022-02-28 16:38:38'),
(3, 3, 'uploads/images/28-02-2022/621cfab5cbd47.png', '2022-02-28 16:39:17', '2022-02-28 16:39:17'),
(4, 4, 'uploads/images/28-02-2022/621cfad1f17c4.png', '2022-02-28 16:39:45', '2022-02-28 16:39:45'),
(5, 5, 'uploads/images/28-02-2022/621cfb077e723.png', '2022-02-28 16:40:39', '2022-02-28 16:40:39'),
(6, 6, 'uploads/images/28-02-2022/621cfb5c603d2.jpeg', '2022-02-28 16:42:04', '2022-02-28 16:42:04'),
(7, 7, 'uploads/images/28-02-2022/621cfb6fcf0d8.png', '2022-02-28 16:42:23', '2022-02-28 16:42:23'),
(8, 8, 'uploads/images/28-02-2022/621cfd175aba1.jpeg', '2022-02-28 16:49:27', '2022-02-28 16:49:27'),
(9, 9, 'uploads/images/28-02-2022/621cfd24364c6.png', '2022-02-28 16:49:40', '2022-02-28 16:49:40'),
(10, 10, 'uploads/images/28-02-2022/621cfdda669a5.png', '2022-02-28 16:52:42', '2022-02-28 16:52:42'),
(11, 11, 'uploads/images/28-02-2022/621cfdefafa3e.jpeg', '2022-02-28 16:53:03', '2022-02-28 16:53:03'),
(12, 12, 'uploads/images/28-02-2022/621cfdfa5e3f6.png', '2022-02-28 16:53:14', '2022-02-28 16:53:14'),
(13, 13, 'uploads/images/28-02-2022/621cfe513a40c.png', '2022-02-28 16:54:41', '2022-02-28 16:54:41'),
(14, 14, 'uploads/images/28-02-2022/621cfedb48d6e.png', '2022-02-28 16:56:59', '2022-02-28 16:56:59'),
(15, 15, 'uploads/images/28-02-2022/621cff28cd537.jpeg', '2022-02-28 16:58:16', '2022-02-28 16:58:16'),
(16, 16, 'uploads/images/28-02-2022/621cffaf2f282.png', '2022-02-28 17:00:31', '2022-02-28 17:00:31'),
(17, 17, 'uploads/images/28-02-2022/621d0047e9107.png', '2022-02-28 17:03:03', '2022-02-28 17:03:03'),
(18, 18, 'uploads/images/28-02-2022/621d008fea862.png', '2022-02-28 17:04:15', '2022-02-28 17:04:15'),
(19, 20, 'uploads/images/28-02-2022/621d0171b55d9.png', '2022-02-28 17:08:01', '2022-02-28 17:08:01'),
(20, 21, 'uploads/images/28-02-2022/621d02921a155.jpeg', '2022-02-28 17:12:50', '2022-02-28 17:12:50'),
(21, 22, 'uploads/images/28-02-2022/621d0321cbea7.png', '2022-02-28 17:15:13', '2022-02-28 17:15:13'),
(22, 23, 'uploads/images/28-02-2022/621d043ddf825.png', '2022-02-28 17:19:57', '2022-02-28 17:19:57'),
(23, 24, 'uploads/images/28-02-2022/621d04f39fc69.jpeg', '2022-02-28 17:22:59', '2022-02-28 17:22:59'),
(24, 25, 'uploads/images/28-02-2022/621d058434fd6.jpeg', '2022-02-28 17:25:24', '2022-02-28 17:25:24'),
(25, 26, 'uploads/images/28-02-2022/621d05e1bd64c.jpeg', '2022-02-28 17:26:57', '2022-02-28 17:26:57'),
(26, 27, 'uploads/images/28-02-2022/621d05f12f524.jpeg', '2022-02-28 17:27:13', '2022-02-28 17:27:13'),
(27, 28, 'uploads/images/28-02-2022/621d060a744d3.jpeg', '2022-02-28 17:27:38', '2022-02-28 17:27:38'),
(28, 29, 'uploads/images/28-02-2022/621d06589b76e.png', '2022-02-28 17:28:56', '2022-02-28 17:28:56'),
(29, 19, 'uploads/images/28-02-2022/621d06a422388.jpeg', '2022-02-28 17:30:12', '2022-02-28 17:30:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_images`
--
ALTER TABLE `category_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_images_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_images`
--
ALTER TABLE `category_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_images`
--
ALTER TABLE `category_images`
  ADD CONSTRAINT `category_images_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
