-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2020 at 01:16 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmasathi`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambers`
--

CREATE TABLE `chambers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=open,1=closed',
  `day_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evening_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evening_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chambers`
--

INSERT INTO `chambers` (`id`, `user_id`, `status`, `day_from`, `day_to`, `evening_from`, `evening_to`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '7:00 AM', '11:00 AM', '5:00 PM', '7:30 PM', '2020-10-30 01:11:24', '2020-11-02 06:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` longtext COLLATE utf8mb4_unicode_ci,
  `is_blocked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=active,1=blocked',
  `is_deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=active,1=deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `gender`, `dob`, `phone`, `registration_no`, `aadhar_no`, `pan_no`, `city`, `state`, `country`, `latitude`, `longitude`, `about_me`, `is_blocked`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Male', '2020-10-30', '9331234567', '123456', '1234567891234567', 'ABC123456789', 'Kolkata', 'West Bengal', 'India', '27.2046° N', '77.4977° E', 'I am a Web Developer.', '0', '0', '2020-10-29 09:39:40', '2020-11-02 03:53:42'),
(2, 2, 'Male', '2020-08-10', '9999999999', '888888888888', '7777 7777 7777 7777', 'AZX1234567', 'Kolkata', 'West Bengal', 'India', '12.152. N', '14.152.36 S', 'New Doctor', '0', '0', '2020-10-30 01:08:53', '2020-10-30 01:08:53'),
(3, 3, 'Male', '2020-08-10', '9999999999', '888888888888', '7777 7777 7777 7777', 'AZX1234567', 'Kolkata', 'West Bengal', 'India', '12.152. N', '14.152.36 S', 'New Doctor', '0', '0', '2020-10-30 01:11:24', '2020-10-30 01:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laboratories`
--

CREATE TABLE `laboratories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=open,1=closed',
  `lab_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_contact_no2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_open_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_close_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_close_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laboratories`
--

INSERT INTO `laboratories` (`id`, `user_id`, `status`, `lab_name`, `reg_no`, `lab_contact_person`, `lab_contact_no`, `lab_contact_no2`, `city`, `state`, `country`, `latitude`, `longitude`, `lab_open_time`, `lab_close_time`, `full_close_day`, `pan_no`, `gst_no`, `details`, `created_at`, `updated_at`) VALUES
(1, 4, '0', 'Lab 5', '123', 'Admin5', '123', '123', 'kolkata', 'west bengal', 'india', '123', '456', '08:15 AM', '5:15 PM', 'Sunday', '147', '123', 'new lab 5', '2020-10-30 06:41:54', '2020-11-02 06:28:38');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_29_063348_create_doctors_table', 1),
(5, '2020_10_30_062241_create_chambers_table', 2),
(7, '2020_10_30_073012_create_laboratories_table', 3),
(8, '2020_10_30_124019_create_patients_table', 4);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `is_blocked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=active,1=blocked',
  `is_deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=active,1=deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `user_id`, `gender`, `dob`, `phone`, `aadhar_no`, `pan_no`, `city`, `state`, `country`, `description`, `is_blocked`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 7, 'make', '2004-08-10', '123', '456', '789', 'kolkata', 'west bengal', 'india', 'i am a patient.72', '0', '0', '2020-10-30 07:35:59', '2020-10-31 07:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1: Admin; 2: Doctor; 3:Retailer; 4:Laboratory; 5:Customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sanatan Nayak', 'admin@admin.com', '2', NULL, '$2y$10$jmR7tWIJxwMJ1jdvzhUp7eZi/dOZq1c8nyX4Z4EUdexgnwnfDVA36', NULL, '2020-10-29 09:39:40', '2020-11-02 03:54:02'),
(2, 'Admin2', 'admin2@admin.com', '2', NULL, '$2y$10$yrYIR.Ln.Hwxro6MCzkCEO7Hb6shjsWUKoiszx8YDXpZEKxUpmJ0W', NULL, '2020-10-30 01:08:53', '2020-10-30 01:08:53'),
(3, 'Admin3', 'admin3@admin.com', '2', NULL, '$2y$10$0101Ds6McTBFT6UiGNJWcODp8z/OhKhhEJMY.G3InLTjnqwIHrJT.', NULL, '2020-10-30 01:11:24', '2020-10-30 01:11:24'),
(4, 'Admin4', 'admin4@admin.com', '4', NULL, '$2y$10$tCzvv7elC5BYKg0Kde3NbOlMmQlhNawAVNpVPym5xSvKbQELj1d46', NULL, '2020-10-30 03:54:02', '2020-10-30 03:54:02'),
(5, 'Admin5', 'admin5@admin.com', '4', NULL, '$2y$10$6zB0cu4P8tQz9MM4KoP.fuY.puNVJ4FttwILWya/GaMMEFGZDWGi6', NULL, '2020-10-30 06:41:54', '2020-10-30 06:53:09'),
(6, 'Admin6', 'admin6@admin.com', '5', NULL, '$2y$10$eXV3wKT.C44xrHrlF8QOwO1HLg4nhNi7oa7f2IefgEyKN2yUHktxG', NULL, '2020-10-30 07:31:07', '2020-10-30 07:31:07'),
(7, 'admin7', 'admin7@admin.com', '5', NULL, '$2y$10$HG7JbRSTLEZE8.dNxRTTbOcjO2jXKT4BZ8M/rYXOkYycCvq6rCqC6', NULL, '2020-10-30 07:35:59', '2020-10-31 07:41:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambers`
--
ALTER TABLE `chambers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratories`
--
ALTER TABLE `laboratories`
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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `chambers`
--
ALTER TABLE `chambers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratories`
--
ALTER TABLE `laboratories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
