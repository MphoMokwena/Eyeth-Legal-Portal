-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2020 at 02:57 PM
-- Server version: 5.7.26
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyethu-sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_forms`
--

DROP TABLE IF EXISTS `application_forms`;
CREATE TABLE IF NOT EXISTS `application_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `work_code` varchar(225) NOT NULL,
  `cover` varchar(225) NOT NULL,
  `form` varchar(225) DEFAULT NULL,
  `reward` decimal(19,2) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_forms`
--

INSERT INTO `application_forms` (`id`, `app_id`, `name`, `email`, `work_code`, `cover`, `form`, `reward`, `created_at`, `updated_at`) VALUES
(1, 3, 'Mpho Mokwena', 'burgermokwena@gmail.com', '#ELP202017', 'Bronze', '', '175.00', '2020-01-18 22:00:00', '2020-01-18 22:00:00'),
(2, 3, 'Mpho Mokwena', 'burgermokwena@gmail.com', '#ELP202017', 'Platinum', NULL, '175.00', '2020-01-21 12:11:32', '2020-01-21 12:11:32'),
(3, 3, 'Mpho Mokwena', 'burgermokwena@gmail.com', '#ELP202017', 'Prestige', 'application-forms/mW939vsdz2ENZlVCCLVhx1yaZ9azEC5nkOclXKA5.jpeg', '175.00', '2020-01-23 09:02:41', '2020-01-23 09:02:41'),
(4, 3, 'Mpho Mokwena', 'burgermokwena@gmail.com', '#ELP202017', 'Gold', 'application-forms/lf1UlAPvjBuqG8eN6LkTkWNZvo8Fj5CbjjFaainA.jpeg', '175.00', '2020-01-23 09:39:59', '2020-01-23 09:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `from_email` varchar(225) NOT NULL,
  `to_email` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('burgermokwena@gmail.com', '$2y$10$HfaXUb70aFpmPuZXGBr2qerDWDtWzYxRiNZnzlNuC2HkXMx4Fzspy', '2020-01-23 11:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_code` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `photo`, `contact_no`, `work_code`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Max Mertsi', 'max@yahoo.com', NULL, '$2y$10$qvkxn9oHnSNpStxkWzw2v.UbHixkSJTV7ce1Apl7F4s3CHZN9VWSi', 'vScLCZOWmNeTM3ewkmULqPc6nbphxvyvScZf4H3coE2eBM7UtThFbhBBUaob', NULL, '0112528877', '#ELP202018', 'Yende Street, EXT 2', '2020-01-16 08:20:53', '2020-01-16 08:20:53'),
(4, 'Mpho Mokwena', 'burgermokwena@gmail.com', NULL, '$2y$10$725ImplhmktpyN0UHvLcieUixGDpInwv.JowpJi/JxClxbMVKRvUK', NULL, NULL, '0620689263', '#ELP202017', '12061 Barwa Street, Daveyton', '2020-01-23 12:07:01', '2020-01-23 12:07:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
