-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2024 at 07:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palpressmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `website_title` varchar(191) DEFAULT NULL,
  `training_title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `website_logo_dark` text,
  `website_logo_light` text,
  `website_logo_small` text,
  `website_favicon` varchar(191) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_tag` text,
  `currency_id` bigint UNSIGNED DEFAULT NULL,
  `address` text,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `github` varchar(191) DEFAULT NULL,
  `training_cost` mediumint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `about` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `who_we_are` text,
  `telegram_group` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_title`, `training_title`, `website_logo_dark`, `website_logo_light`, `website_logo_small`, `website_favicon`, `meta_title`, `meta_description`, `meta_tag`, `currency_id`, `address`, `phone`, `email`, `facebook`, `twitter`, `linkedin`, `instagram`, `github`, `training_cost`, `created_at`, `updated_at`, `hotline`, `about`, `who_we_are`, `telegram_group`) VALUES
(1, 'Palpress Media', 'Palpress Media', '670f53a134e6d-logo.png', '67101e1150652-logo.png', '', '', 'Palpres Media', 'At Palpres Media  we specialize in helping businesses grow and succeed in the ever-evolving digital world. Located in the heart of Owerri, Imo State, Nigeria, our digital marketing agency is committed to delivering innovative strategies tailored to meet your unique business needs.', 'At Palpres Media  we specialize in helping businesses grow and succeed in the ever-evolving digital world. Located in the heart of Owerri, Imo State, Nigeria, our digital marketing agency is committed to delivering innovative strategies tailored to meet your unique business needs.', 1, '4th Floor 110 Bishopsgate, London', '+2348064655625', 'info@palpresmedia.com.ng', 'https://www.facebook.com/', 'www.twitter.com/soumik9', 'https://www.linkedin.com/in/', 'https://www.instagram.com/', 'https://github.com/', 0, '2023-12-14 09:14:41', '2024-10-16 20:19:11', NULL, 'At Palpres Media, we are committed to helping businesses thrive in today’s competitive digital landscape. Based in Owerri, Imo State, Nigeria, we specialize in providing innovative digital marketing solutions tailored to meet the unique needs of each client. Our services span across search engine optimization (SEO), social media management, content marketing, pay-per-click (PPC) advertising, and web design & development. We combine local expertise with a results-driven approach, ensuring businesses achieve maximum online visibility, engage effectively with their audience, and ultimately drive growth and success.\r\n<br>\r\nOur team of experts understands the intricacies of the Nigerian market, enabling us to craft strategies that resonate locally while maintaining a global appeal. At Palpres Media, we prioritize long-term partnerships by offering flexible pricing plans for businesses of all sizes and providing dedicated support every step of the way. Whether you\'re a startup looking to establish an online presence or an established enterprise aiming to expand your reach, we are here to develop a comprehensive digital strategy that delivers measurable results.', NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_currency_id_foreign` (`currency_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
