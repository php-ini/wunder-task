-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 07:03 PM
-- Server version: 5.7.14
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wunder`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 2),
(4, '2020_11_12_124345_create_user_table', 2),
(5, '2020_11_12_134407_create_user_address_table', 2),
(6, '2020_11_12_135826_create_user_payment_info_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_step` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `telephone`, `email`, `is_active`, `token`, `completed_step`, `created_at`, `updated_at`) VALUES
(4, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazama_m@yahoo.com', 0, NULL, 2, '2020-11-11 23:00:00', '2020-11-14 01:14:58'),
(13, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazamda_m@yahoo.com', 1, NULL, 1, '2020-11-14 01:50:33', NULL),
(12, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazama_m77@yahoo.com', 1, NULL, 1, '2020-11-14 01:47:49', NULL),
(14, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazamdsa_m@yahoo.com', 1, NULL, 3, '2020-11-14 01:54:26', '2020-11-14 01:54:58'),
(15, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazamsaa_m@yahoo.com', 1, NULL, 3, '2020-11-14 01:55:32', '2020-11-14 01:56:01'),
(16, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazama_m@yapphoo.com', 1, NULL, 3, '2020-11-14 02:06:39', '2020-11-14 02:09:29'),
(17, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazama_rerm@yahoo.com', 1, NULL, 3, '2020-11-14 02:25:23', '2020-11-14 02:25:45'),
(18, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkaza0ma_m@yahoo.com', 1, NULL, 1, '2020-11-14 11:30:16', NULL),
(19, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkaza76ma_m@yahoo.com', 1, NULL, 1, '2020-11-14 11:34:08', NULL),
(20, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazama_msa@yahoo.com', 1, NULL, 3, '2020-11-14 11:49:37', '2020-11-14 11:52:14'),
(21, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazafdsma_m@yahoo.com', 1, NULL, 3, '2020-11-14 11:54:17', '2020-11-14 11:54:49'),
(22, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazama_fddm@yahoo.com', 1, NULL, 3, '2020-11-14 12:00:46', '2020-11-14 12:01:43'),
(23, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazyyama_m@yahoo.com', 1, NULL, 3, '2020-11-14 14:51:06', '2020-11-14 14:53:02'),
(24, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazama_mjj@yahoo.com', 1, NULL, 3, '2020-11-14 15:25:38', '2020-11-14 15:25:49'),
(25, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazamdasa_m@yahoo.com', 1, NULL, 3, '2020-11-14 16:12:08', '2020-11-14 16:12:20'),
(26, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazadsama_m@yahoo.com', 1, NULL, 3, '2020-11-14 16:14:09', '2020-11-14 16:14:28'),
(27, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jidsnkazama_m@yahoo.com', 1, NULL, 3, '2020-11-14 16:32:08', '2020-11-14 16:32:22'),
(28, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkpoazama_m@yahoo.com', 1, NULL, 3, '2020-11-14 16:33:00', '2020-11-14 16:33:17'),
(29, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazamuyga_m@yahoo.com', 1, NULL, 3, '2020-11-14 17:44:26', '2020-11-14 17:44:42'),
(30, 'Mahmoud', 'Abdelsattar', '+4915167186688', 'jinkazamewqa_m@yahoo.com', 1, NULL, 3, '2020-11-14 19:01:13', '2020-11-14 19:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_number` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `user_id`, `street`, `house_number`, `zip_code`, `city`, `country`, `is_primary`, `created_at`, `updated_at`) VALUES
(4, 4, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-13 22:41:32', '2020-11-14 00:44:55'),
(5, 10, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 01:42:57', NULL),
(6, 12, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 01:48:55', NULL),
(7, 14, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 01:54:34', NULL),
(8, 15, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 01:55:49', NULL),
(9, 16, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 02:06:43', NULL),
(10, 17, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 02:25:32', NULL),
(11, 19, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 11:38:13', NULL),
(12, 20, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 11:49:44', NULL),
(13, 21, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 11:54:37', NULL),
(14, 22, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 12:00:55', NULL),
(15, 23, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 14:51:11', NULL),
(16, 24, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 15:25:43', NULL),
(17, 25, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 16:12:14', NULL),
(18, 26, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 16:14:18', NULL),
(19, 27, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 16:32:16', NULL),
(20, 28, 'Berliner Platz 39', '39', '48143', 'Munster', 'DE', 0, '2020-11-14 16:33:09', NULL),
(21, 29, 'Georgiou Seferi 31, Sea Lordos court, 31', '39', '6017', 'larnaca', 'DE', 0, '2020-11-14 17:44:31', NULL),
(22, 30, 'Georgiou Seferi 31, Sea Lordos court, 31', '39', '6017', 'larnaca', 'DE', 0, '2020-11-14 19:01:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_payment_info`
--

CREATE TABLE `user_payment_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_owner_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iban` varchar(34) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_primary` tinyint(4) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `response` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_payment_info`
--

INSERT INTO `user_payment_info` (`id`, `user_id`, `account_owner_name`, `iban`, `payment_data`, `is_primary`, `status`, `response`, `created_at`, `updated_at`) VALUES
(11, 0, 'test', 'tttt', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-13 22:41:58', '2020-11-14 01:14:36'),
(12, 14, 'testtt', 'erwr', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 01:54:58', NULL),
(13, 15, 'weq', 'qeww', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 01:56:01', NULL),
(14, 16, 'ew', 'ew', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 02:09:29', NULL),
(15, 17, 'yrty', 'yrty', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 02:25:45', NULL),
(16, 20, 'fds', 'fsdf', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 11:52:14', NULL),
(17, 21, 'test', 'ytry', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 11:54:49', NULL),
(18, 22, 'rewrew', 'rew', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 12:01:43', NULL),
(19, 23, 'hgf', 'terter', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 14:53:02', NULL),
(20, 24, 'uty', 'utu', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 15:25:49', NULL),
(21, 25, 'dsada', 'dasdsa', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 16:12:20', NULL),
(22, 26, 'rwer', 'fs', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 16:14:28', NULL),
(23, 27, 'po', 'po', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 16:32:22', NULL),
(24, 28, 'ioi', 'iui', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 16:33:17', NULL),
(25, 29, 'oij', 'oji', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 17:44:42', NULL),
(26, 30, 'gfdg', 'gdf', 'c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95', 0, 200, '{"paymentDataId":"c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"}', '2020-11-14 19:01:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_is_active_index` (`is_active`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_address_user_id_index` (`user_id`);

--
-- Indexes for table `user_payment_info`
--
ALTER TABLE `user_payment_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_payment_info_iban_index` (`iban`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user_payment_info`
--
ALTER TABLE `user_payment_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
