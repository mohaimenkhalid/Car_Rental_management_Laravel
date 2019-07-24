-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 08:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `author_name`, `category_id`, `blog_description`, `blog_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'HighCar', 'Sparow', 5, 'Well-=jjknmn', 'blog-images/images (1).jpg', 1, '2018-03-27 13:48:17', '2018-05-23 14:46:44'),
(4, 'NewCar', 'Sparow', 4, 'Well Journey', 'blog-images/images.jpg', 1, '2018-03-27 13:48:57', '2018-03-27 13:48:57'),
(5, 'Tourr', 'Sparow', 5, 'ttttttttttt', 'blog-images/online-reservation.jpg', 1, '2018-03-31 00:55:36', '2018-03-31 00:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `car_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_price` float(10,2) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `author_name`, `category_id`, `car_description`, `car_image`, `car_price`, `publication_status`, `created_at`, `updated_at`) VALUES
(10, 'Hiace', 'Imran', 5, 'Luxury', 'car-images/219409.jpg', 6000.00, 1, '2018-06-05 00:42:46', '2018-07-01 21:25:09'),
(11, 'BlackHiace', 'Imran', 4, 'Ac with luxury Chair Coachh', 'car-images/5 - Micro Bus (Standard Roof 1).png.ximg.l_6_m.smart.png', 7000.00, 1, '2018-06-05 00:55:34', '2018-07-02 00:15:51'),
(13, 'MiniAcBus', 'Imran', 4, 'Fifty people can travel here', 'car-images/53096_tt211.jpg', 10000.00, 1, '2018-06-05 01:06:24', '2018-06-05 01:06:24'),
(14, 'Laplico', 'Imran', 5, 'Well travel, super fast ac car', 'car-images/images (2).jpg', 4000.00, 1, '2018-06-05 01:09:24', '2018-06-05 01:09:24'),
(15, 'TOYOTA', 'Sparow', 4, 'llllllllllllllllllllllllllllllllllllllllll', 'car-images/mini-bus-600x333.jpg', 4000.00, 1, '2018-07-17 00:06:11', '2018-07-17 00:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Car', 'High definition Service', 1, '2018-03-27 13:45:46', '2018-03-27 13:45:46'),
(5, 'Mercedes Benz', 'Well High Quality Car', 1, '2018-03-27 13:46:46', '2018-03-27 13:46:46'),
(6, 'jkfjkjxkg', 'sfndksfm', 1, '2018-05-23 14:41:34', '2018-05-23 14:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(5, 'Imran', 'Hossain', 'hossain3704@diu.edu.bd', '$2y$10$odtOqgQinKWjJujFswUwkOJYWh8ZphIlndGo93SWkYjr.CqRILVha', '01677560331', 'wwwwwwww', '2018-03-29 01:48:20', '2018-03-29 01:48:20'),
(6, 'Imran', 'khan', 'imrankhan01749207035@gmail.com', '$2y$10$9YECWQIrgzxl8Rv2T/vI6uSwNPQhzqWY.ExFvROuF47NWzk/8/MJ6', '01677560331', 'WWWWWWWWWWWWWWWWw', '2018-03-30 09:42:38', '2018-03-30 09:42:38'),
(7, 'rifat', 'ara emon', 'rifat3954@gmail.com', '$2y$10$Uan/5zOI8hE5GPK9fOb5TO7uDkmUHq.CY2lNba4J/BKMGdiu4TjiO', '01629880021', 'Sukrabad', '2018-03-31 00:46:58', '2018-03-31 00:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(10) UNSIGNED NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `driver_name`, `driver_type`, `driver_description`, `driver_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Rifat', 'Airport', 'Well service', 'driver-images/car-insurance-for-male-drivers.jpeg', 1, '2018-07-03 22:43:58', '2018-07-03 22:43:58'),
(5, 'Emon', 'Dhaka to chitagong', 'High class performance', 'driver-images/teen-driver.jpg', 1, '2018-07-03 22:44:53', '2018-07-03 22:44:53');

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
(3, '2018_03_19_143856_create_categories_table', 2),
(4, '2017_10_15_162916_create_blogs_table', 3),
(5, '2018_03_27_202324_create_cars_table', 4),
(6, '2018_03_28_203735_create_customers_table', 5),
(7, '2018_03_30_181805_create_orders_table', 6),
(8, '2018_06_12_071725_create_services_table', 7),
(9, '2018_07_03_073904_create_drivers_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_drop_off` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_date_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_time_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_vehicle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passengers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luggage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carseat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialreguests` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `location`, `location_drop_off`, `option1`, `option2`, `input_date`, `input_time`, `input_date_2`, `input_time_2`, `select_vehicle`, `passengers`, `luggage`, `carseat`, `first_name`, `last_name`, `mobile_number`, `email`, `specialreguests`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Comilla', 'a1', 'a2', '11-12-18', '8.30 am', '11-12-18', '12.30 pm', '3', '2', '3', 'a2', 'Imran', 'Hossain', '45678', 'imransparow@gmail.com', 'wwwwwwwwwwwwwwww', '2018-03-30 13:56:47', '2018-03-30 13:56:47'),
(5, 'Khuna', 'Coxsbazar', 'a1', 'a2', '11-12-18', '8.30 am', '13-12-18', '4.30 pm', 'MiniAcBus', '1', '2', 'a2', 'Rafi', 'khan', '020020202', 'Rafi3704@diu.edu.bd', 'kajdksj;ldf;lsf;lm;lfg', '2018-07-16 08:29:22', '2018-07-16 08:29:22'),
(6, 'Rajshahi', 'Comilla', 'a1', 'a2', '11-12-18', '8.30pm', '13-12-18', '4.30 am', 'Laplico', '1', '3', 'a2', 'Jamal', 'Hossain', '01677560331', 'Jamal@gmail.com', 'Plz Come Quick', '2018-07-16 12:04:43', '2018-07-16 12:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_description`, `car_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, '24 Hour Airport Services', 'Rental Cars offers worldwide airport transportation, making its airport car services available at hundreds of airport pick-up locationss, anytime. Trying to find a taxi at an airport can be hectic any time of day.', 'service-images/219409.jpg', 1, '2018-06-21 01:34:09', '2018-07-02 00:16:44'),
(4, 'Corporate Meetings &amp; Events', 'Does your company have employees or clients who frequently rent in the Los Angeles area? Setting up a corporate account allowsus to pre-deliver vehicles to hotels, offices, residences.', 'service-images/carlineup_hiacevan_grade_grade1_01_pc.png', 1, '2018-07-16 12:36:04', '2018-07-16 12:36:04'),
(5, 'Business Travel', 'We offer professional drivers who can chauffeur you to any destination you choose. Or ask for a type of tour or drive you are in the mood for and let us do the rest.', 'service-images/53096_tt211.jpg', 1, '2018-07-16 12:37:35', '2018-07-16 12:37:35'),
(6, 'Private Tours', 'Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades. Free maintenance.  We offer amazing deals on car rental rates. Give us a call we make it easy and affordable.', 'service-images/download.jpg', 1, '2018-07-16 12:39:01', '2018-07-16 12:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Imran', 'hossain3704@diu.edu.bd', '$2y$10$W5Ww.24ZHE63u8CiVIsdXOibMP.JAJqxF2m4aSBHj/9cZh6xwIb82', 'PozD8osV3pfpxuzmD1Nz7hwQARwWSDylJLe2y5TvJfTUCJq5o7uuw8ljIzwx', '2018-02-25 12:38:59', '2018-02-25 12:38:59'),
(2, 'Sparow', 'imrankhan01749207035@gmail.com', '$2y$10$KOhv7wSr0ARytFH46Dwy3uU1YmlCwYSKq6gmBQZELhtKg.oRejqLS', 'dlFfZRuF4DSEMpn1buCwtwLJ7bxdPb3zLY0EUsfsMin24D6bG7Y4slFhQzAR', '2018-03-15 01:15:37', '2018-03-15 01:15:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
