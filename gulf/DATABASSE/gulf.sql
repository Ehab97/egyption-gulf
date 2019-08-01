-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 06:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gulf`
--

-- --------------------------------------------------------

--
-- Table structure for table `agris`
--

CREATE TABLE `agris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agris`
--

INSERT INTO `agris` (`id`, `place`, `size`, `created_at`, `updated_at`) VALUES
(2, 'المنيا', '78', '2019-08-01 12:41:07', '2019-08-01 12:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `image`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, '285435827.PNG', '2019-08-16', '2019-08-31', '2019-08-01 14:12:29', '2019-08-01 14:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Mohamed', 'a@gmail.com', '123', '123', '2019-07-31 09:59:59', '2019-07-31 09:59:59'),
(2, 'Ehab Reda', 'e@gmail.com', '1', '123', '2019-07-31 10:01:26', '2019-07-31 10:01:26');

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
(1, '2019_07_31_111959_create_employes_table', 1),
(2, '2019_07_31_192957_create_renters_table', 2),
(3, '2019_08_01_061408_create_renter1s_table', 3),
(4, '2019_08_01_142142_create_agris_table', 4),
(5, '2019_08_01_153527_create_contracts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `renter1s`
--

CREATE TABLE `renter1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_nation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_pay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_zr3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_place1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_land` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_proj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `renter1s`
--

INSERT INTO `renter1s` (`id`, `name`, `place`, `proj_place`, `center`, `phone`, `date`, `id_nation`, `type_pay`, `proj_time`, `type_zr3`, `proj_place1`, `home`, `state`, `last_land`, `last_proj`, `new_pos`, `message`, `created_at`, `updated_at`) VALUES
(3, 'عمر جمعه', 'المنيا', 'المنيا', 'المينا', '1', '2019-08-09', '54354', 'قسطا', 'سنوات', 'تقليدي', 'الوادي', 'منزل مجهز', 'متزوج', 'لا', 'لا', 'المنيا', 'الحمدلله', '2019-08-01 12:20:12', '2019-08-01 12:20:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agris`
--
ALTER TABLE `agris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renter1s`
--
ALTER TABLE `renter1s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agris`
--
ALTER TABLE `agris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `renter1s`
--
ALTER TABLE `renter1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
