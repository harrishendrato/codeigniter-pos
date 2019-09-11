-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 08:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ut', '841.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(2, 'deserunt', '255.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(3, 'et', '70395.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(4, 'reprehenderit', '79678.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(5, 'eos', '164451.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(6, 'culpa', '148.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(7, 'voluptates', '21.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(8, 'velit', '9.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(9, 'fugit', '4491942.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL),
(10, 'at', '842.00', 1, '2019-09-06 21:38:35', '2019-09-06 21:38:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
