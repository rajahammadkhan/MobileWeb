-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 12:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ae_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` varchar(191) DEFAULT NULL,
  `meta_keywords` varchar(191) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(17, 'Raja Hammd', 'raja@gmail.com', 'project', 'testing', NULL, '2023-12-22 16:39:26', '2023-12-22 16:39:26', NULL),
(18, 'Curran', 'fynoxujej@mailinator.com', 'Hines', 'Aut voluptates eum p', NULL, '2023-12-24 02:24:06', '2023-12-24 02:24:06', NULL),
(19, 'Samsung', 'admin@offbeatdxb.ae', 'fgdfg', 'ggjgh', NULL, '2023-12-25 10:10:57', '2023-12-25 10:10:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` bigint(20) NOT NULL,
  `unique_name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `base_url` varchar(255) DEFAULT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `alt_tag` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `batch_no` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `u_id`, `unique_name`, `link`, `base_url`, `extension`, `size`, `alt_tag`, `title`, `batch_no`, `description`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, '122420230331386587a61a08441samsung.png', NULL, NULL, NULL, NULL, NULL, 'brand', NULL, '<p>Image simulated for illustrative purposes. Actual UX/UI may vary. Buds Controller is compatible with Samsung Galaxy Buds+, Samsung Galaxy Watch4, and their respective following models. Active Noise Canceling is supported in Galaxy Buds Live and later released models. Samsung Galaxy S23 Ultra, Samsung Galaxy Watch5, Samsung Galaxy Buds2 Pro are sold separately. Availability of colors, sizes, models, and watch bands may vary by country or carrier.</p>', 1, NULL, NULL, '2023-12-23 22:31:38', '2023-12-23 22:31:38', NULL),
(5, 1, '122420230347356587a9d787134lenovo.png', NULL, NULL, NULL, NULL, NULL, 'brand', NULL, '<p>Level up your look and choose from stunning colours: Midnight Blue, Marshmallow Blue and PANTONE&trade; Colour of the Year 2023 - Viva Magenta1. The vibrant moto g84 5G colors</p>', 1, NULL, NULL, '2023-12-23 22:47:35', '2023-12-23 22:47:35', NULL),
(6, 1, '122420230352386587ab0631551huawei.png', NULL, NULL, NULL, NULL, NULL, 'brand', NULL, '<p>The Ultra Lighting Main Camera, boasting an F1.4&ndash;F4.0 auto-adjustable physical aperture, helps produce marvellous images day and night with its unprecedented full-path light capturing capabilities. XMAGE styles reproduce colours with distinctive styles that look simply outstanding.</p>', 1, NULL, NULL, '2023-12-23 22:52:38', '2023-12-23 22:52:38', NULL),
(7, 1, '122420230427536587b34923023add2.png', NULL, NULL, NULL, NULL, NULL, 'brand', NULL, '<p>tertert</p>', 1, 1, NULL, '2023-12-23 22:52:57', '2023-12-23 23:39:49', '2023-12-23 23:39:49'),
(14, 1, '1225202310504465895e84bf6b9add2.png', NULL, NULL, NULL, NULL, NULL, 'category', NULL, NULL, 1, 1, NULL, '2023-12-24 01:14:42', '2023-12-25 05:50:44', NULL),
(15, 1, '1225202310510565895e991e59cadd1.png', NULL, NULL, NULL, NULL, NULL, 'category', NULL, NULL, 1, 1, NULL, '2023-12-24 01:15:18', '2023-12-25 05:51:05', NULL),
(25, 1, '1225202310481965895df3f18b8image 92.png', NULL, NULL, NULL, NULL, NULL, 'brand', NULL, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quod, fuga quo, totam alias eius unde in dolores, blanditiis ea ducimus. Cumque reiciendis hic itaque libero nihil consectetur. Odit, dolore!', 1, NULL, NULL, '2023-12-25 05:48:19', '2023-12-25 05:48:19', NULL),
(26, 1, '1225202310484765895e0f06efeinfinix.png', NULL, NULL, NULL, NULL, NULL, 'brand', NULL, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quod, fuga quo, totam alias eius unde in dolores, blanditiis ea ducimus. Cumque reiciendis hic itaque libero nihil consectetur. Odit, dolore!', 1, NULL, NULL, '2023-12-25 05:48:47', '2023-12-25 05:48:47', NULL),
(27, 1, '1225202310493765895e41afffevivo.png', NULL, NULL, NULL, NULL, NULL, 'brand', NULL, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quod, fuga quo, totam alias eius unde in dolores, blanditiis ea ducimus. Cumque reiciendis hic itaque libero nihil consectetur. Odit, dolore!', 1, NULL, NULL, '2023-12-25 05:49:37', '2023-12-25 05:49:37', NULL),
(28, 1, '1225202310495965895e57284b6tecno.png', NULL, NULL, NULL, NULL, NULL, 'brand', NULL, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quod, fuga quo, totam alias eius unde in dolores, blanditiis ea ducimus. Cumque reiciendis hic itaque libero nihil consectetur. Odit, dolore!', 1, NULL, NULL, '2023-12-25 05:49:59', '2023-12-25 05:49:59', NULL),
(29, 1, '12252023124302658978d6be437image 125.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:43:02', '2023-12-25 07:43:02', NULL),
(30, 1, '12252023124302658978d6c1397image 127 (1).png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:43:02', '2023-12-25 07:43:02', NULL),
(31, 1, '12252023124302658978d6c374cimage 127.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:43:02', '2023-12-25 07:43:02', NULL),
(32, 1, '12252023124723658979db54981image 126.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:47:23', '2023-12-25 07:47:23', NULL),
(33, 1, '12252023124723658979db565fdimage 136.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:47:23', '2023-12-25 07:47:23', NULL),
(34, 1, '12252023124723658979db58635image 152.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:47:23', '2023-12-25 07:47:23', NULL),
(35, 1, '1225202312510865897abc6eaedimage 128 (1).png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(36, 1, '1225202312510865897abc70ba6image 127 (1).png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(37, 1, '1225202312510865897abc724efimage 127.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(38, 1, '1225202312510865897abc74f9cimage 128.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(39, 1, '1225202312510865897abc7684aimage 158.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(40, 1, '1225202313224465898224d7fccimage 127 (1).png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 08:22:44', '2023-12-25 08:22:44', NULL),
(41, 1, '1225202313224465898224da969image 136.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 08:22:44', '2023-12-25 08:22:44', NULL),
(42, 1, '1225202313224465898224dcce0image 152.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 08:22:44', '2023-12-25 08:22:44', NULL),
(43, 1, '1225202313224465898224de629image 158.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 08:22:44', '2023-12-25 08:22:44', NULL),
(44, 1, '12252023133023658983efb46d5image 60.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 08:30:23', '2023-12-25 08:30:23', NULL),
(45, 1, '12252023133023658983efb6f0cimage 125.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 08:30:23', '2023-12-25 08:30:23', NULL),
(46, 1, '12252023133023658983efb938bimage 128 (1).png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 08:30:23', '2023-12-25 08:30:23', NULL),
(47, 1, '12252023133023658983efbbaf5image 128.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2023-12-25 08:30:23', '2023-12-25 08:30:23', NULL),
(48, 1, '0101202411112965929de1eaa2croyal-car.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2024-01-01 06:11:29', '2024-01-01 06:11:29', NULL),
(49, 1, '0101202411113065929de27533bhomebanner.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(50, 1, '0101202411113065929de29c348image.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(51, 1, '0101202411113065929de2b1e5aimage_720.jpg', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(52, 1, '0101202411113065929de2cce42live_stream.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(53, 1, '010120241157506592a8be0a59bCapture.PNG', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, 1, '2024-01-01 06:57:50', '2024-01-01 07:24:40', '2024-01-01 07:24:40'),
(54, 1, '010120241157506592a8be3d7a5car.png', NULL, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL, 1, NULL, 1, '2024-01-01 06:57:50', '2024-01-01 07:23:51', '2024-01-01 07:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_21_101537_create_media_table', 1),
(6, '2022_08_21_101639_create_mobile_brands_table', 1),
(7, '2022_08_21_102033_create_mobile_categories_table', 1),
(8, '2022_08_21_102159_create_mobile_status_table', 1),
(9, '2022_08_21_102311_create_mobile_operating_systems', 1),
(10, '2022_08_21_102352_create_mobile_table', 1),
(11, '2022_08_21_102438_create_mobile_general_info_table', 1),
(12, '2022_08_21_102508_create_mobile_body_info_table', 1),
(13, '2022_08_21_102557_create_processor_types_table', 1),
(14, '2022_08_21_102713_create_processor_size_table', 1),
(15, '2022_08_21_102802_create_mobile_memory_info_table', 1),
(16, '2022_08_21_102931_create_mobile_network_info_table', 1),
(17, '2022_08_21_103002_create_mobile_cam_info', 1),
(18, '2022_08_21_103028_create_mobile_battery_info_table', 1),
(19, '2022_08_21_103119_create_mobile_media_table', 1),
(20, '2022_08_21_103148_create_mobile_review_table', 1),
(21, '2024_01_02_070022_create_deals_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` bigint(20) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `price_pkr` decimal(8,2) NOT NULL,
  `price_usd` decimal(8,2) NOT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `operating_system_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `u_id`, `name`, `price_pkr`, `price_usd`, `slug`, `short_description`, `long_description`, `brand_id`, `category_id`, `status_id`, `operating_system_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 1, 'Galaxy M53', 69999.00, 336.00, 'galaxy-m53', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim in, sint pariatur dolore quaerat voluptas laudantium debitis perferendis similique eaque necessitatibus. Distinctio cum dolorum accusantium ducimus dolore et?</p>', 9, 1, 2, 1, 1, 1, NULL, '2023-12-25 06:08:32', '2023-12-25 13:41:08', NULL),
(8, 1, 'Lenovo Legion', 65999.00, 70.00, 'lenovo-legion', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim in, sint pariatur dolore quaerat voluptas laudantium debitis perferendis similique eaque necessitatibus. Distinctio cum dolorum accusantium ducimus dolore et?</p>', 10, 1, 2, 2, 1, 1, NULL, '2023-12-25 06:09:58', '2023-12-25 13:40:56', NULL),
(9, 1, 'Huawei Enjoy 70', 60999.00, 120.00, 'huawei-enjoy-70', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim in, sint pariatur dolore quaerat voluptas laudantium debitis perferendis similique eaque necessitatibus. Distinctio cum dolorum accusantium ducimus dolore et?</p>', 11, 1, 2, 3, 1, 1, NULL, '2023-12-25 06:13:49', '2023-12-25 13:39:49', NULL),
(10, 1, 'Oppo A59', 70999.00, 170.00, 'oppo-a59', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim in, sint pariatur dolore quaerat voluptas laudantium debitis perferendis similique eaque necessitatibus. Distinctio cum dolorum accusantium ducimus dolore et?</p>', 13, 1, 2, 3, 1, 1, NULL, '2023-12-25 06:14:35', '2023-12-25 13:39:34', NULL),
(11, 1, 'Infinix Hot 40 Pro', 58999.00, 295.00, 'infinix-hot-40-pro', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit, enim in, sint pariatur dolore quaerat voluptas laudantium debitis perferendis similique eaque necessitatibus. Distinctio cum dolorum accusantium ducimus dolore et?</p>', 14, 2, 2, 3, 1, 1, NULL, '2023-12-25 06:15:41', '2023-12-25 13:39:19', NULL),
(12, 1, 'Leigh Chavez', 63.00, 526.00, 'leigh-chavez', '<p>Leigh Chavez</p>', '<p>Leigh Chavez</p>', 9, 1, 1, 1, 1, 1, NULL, '2023-12-25 10:17:14', '2024-01-01 06:11:29', NULL),
(13, 1, 'Hall Bullock', 26.00, 898.00, 'hall-bullock', '<p>Ullam temporibus lau.</p>', '<p>Exercitationem amet.</p>', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2024-01-01 06:36:41', '2024-01-01 06:36:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_battery_info`
--

CREATE TABLE `mobile_battery_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_remove` tinyint(1) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `fast_charging` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_battery_info`
--

INSERT INTO `mobile_battery_info` (`id`, `mobile_id`, `is_remove`, `capacity`, `fast_charging`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 7, 1, '2000', '33W', 1, NULL, NULL, '2023-12-25 06:21:29', '2023-12-30 08:10:38', NULL),
(17, 8, 1, '5000', '33W', 1, NULL, NULL, '2023-12-25 07:44:32', '2023-12-30 08:10:46', NULL),
(18, 9, 1, '6000', '33W', 1, NULL, NULL, '2023-12-25 07:47:49', '2023-12-30 08:10:54', NULL),
(19, 10, 1, '7000', '33W', 1, NULL, NULL, '2023-12-25 07:52:00', '2023-12-30 08:11:00', NULL),
(20, 11, 2, '8000', '33W', 1, NULL, NULL, '2023-12-25 08:26:55', '2023-12-30 08:11:07', NULL),
(24, 12, 1, ';kl;kl;kl;', 'dfgdfgdfg', 1, 1, NULL, '2023-12-26 03:28:38', '2024-01-02 01:34:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_body`
--

CREATE TABLE `mobile_body` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dim_width` smallint(6) DEFAULT NULL,
  `dim_height` smallint(6) DEFAULT NULL,
  `dim_wide` smallint(6) DEFAULT NULL,
  `weight` smallint(6) DEFAULT NULL,
  `colors` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`colors`)),
  `no_of_sim` smallint(6) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_body`
--

INSERT INTO `mobile_body` (`id`, `mobile_id`, `dim_width`, `dim_height`, `dim_wide`, `weight`, `colors`, `no_of_sim`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 7, 1, 1, 26, 194, '[\"Orange Purple\"]', 2, 1, NULL, NULL, '2023-12-25 06:23:13', '2023-12-27 07:21:07', NULL),
(3, 8, 1, 2, 3, 185, '[\"Orange Gray\"]', 3, 1, NULL, NULL, '2023-12-25 07:44:51', '2023-12-27 07:27:47', NULL),
(4, 9, 2, 1, 3, 153, '[\"Green Purple\"]', 1, 1, NULL, NULL, '2023-12-25 07:48:04', '2023-12-27 07:27:13', NULL),
(5, 10, 1, 2, 2, 198, '[\"Yellow White\"]', 1, 1, NULL, NULL, '2023-12-25 07:52:12', '2023-12-27 07:27:18', NULL),
(6, 11, 2, 1, 3, 175, '[\"Red Blue\"]', 2, 1, NULL, NULL, '2023-12-25 08:27:11', '2023-12-27 07:27:42', NULL),
(7, 12, 1, 1, 1, 10, '[\"Black Blue\"]', 3, 1, 1, NULL, '2023-12-26 03:21:14', '2024-01-01 03:06:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_brands`
--

CREATE TABLE `mobile_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_brands`
--

INSERT INTO `mobile_brands` (`id`, `name`, `slug`, `description`, `media_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'Samsung', 'samsung', '<p>Image simulated for illustrative purposes. Actual UX/UI may vary. Buds Controller is compatible with Samsung Galaxy Buds+, Samsung Galaxy Watch4, and their respective following models. Active Noise Canceling is supported in Galaxy Buds Live and later released models. Samsung Galaxy S23 Ultra, Samsung Galaxy Watch5, Samsung Galaxy Buds2 Pro are sold separately. Availability of colors, sizes, models, and watch bands may vary by country or carrier.</p>', 4, 1, NULL, NULL, '2023-12-23 22:31:38', '2023-12-23 22:31:38', NULL),
(10, 'Lenovo', 'lenovo', '<p>Level up your look and choose from stunning colours: Midnight Blue, Marshmallow Blue and PANTONE&trade; Colour of the Year 2023 - Viva Magenta1. The vibrant moto g84 5G colors</p>', 5, 1, NULL, NULL, '2023-12-23 22:47:35', '2023-12-23 22:47:35', NULL),
(11, 'Huawei', 'huawei', '<p>The Ultra Lighting Main Camera, boasting an F1.4&ndash;F4.0 auto-adjustable physical aperture, helps produce marvellous images day and night with its unprecedented full-path light capturing capabilities. XMAGE styles reproduce colours with distinctive styles that look simply outstanding.</p>', 6, 1, NULL, NULL, '2023-12-23 22:52:38', '2023-12-23 22:52:38', NULL),
(12, 'rtertgfgdfgdfgdf', 'rtertgfgdfgdfgdf', '<p>rtertgfgdfgdfgdf</p>', 7, 1, 1, 1, '2023-12-23 22:52:57', '2023-12-23 23:39:49', '2023-12-23 23:39:49'),
(13, 'Oppo', 'oppo', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quod, fuga quo, totam alias eius unde in dolores, blanditiis ea ducimus. Cumque reiciendis hic itaque libero nihil consectetur. Odit, dolore!', 25, 1, NULL, NULL, '2023-12-25 05:48:19', '2023-12-25 05:48:19', NULL),
(14, 'Infinix', 'infinix', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quod, fuga quo, totam alias eius unde in dolores, blanditiis ea ducimus. Cumque reiciendis hic itaque libero nihil consectetur. Odit, dolore!', 26, 1, NULL, NULL, '2023-12-25 05:48:47', '2023-12-25 05:48:47', NULL),
(15, 'Vivo', 'vivo', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quod, fuga quo, totam alias eius unde in dolores, blanditiis ea ducimus. Cumque reiciendis hic itaque libero nihil consectetur. Odit, dolore!', 27, 1, NULL, NULL, '2023-12-25 05:49:37', '2023-12-25 05:49:37', NULL),
(16, 'Tecno', 'tecno', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quod, fuga quo, totam alias eius unde in dolores, blanditiis ea ducimus. Cumque reiciendis hic itaque libero nihil consectetur. Odit, dolore!', 28, 1, NULL, NULL, '2023-12-25 05:49:59', '2023-12-25 05:49:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_cam_info`
--

CREATE TABLE `mobile_cam_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` smallint(6) NOT NULL DEFAULT 1 COMMENT '1=front, 2=back',
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `no_of_cams` smallint(6) DEFAULT NULL,
  `cam_size` smallint(6) DEFAULT NULL,
  `cam_text` varchar(255) DEFAULT NULL,
  `led` tinyint(1) DEFAULT NULL,
  `face_detection` tinyint(1) DEFAULT NULL,
  `geo` tinyint(1) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_cam_info`
--

INSERT INTO `mobile_cam_info` (`id`, `type_id`, `mobile_id`, `no_of_cams`, `cam_size`, `cam_text`, `led`, `face_detection`, `geo`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 7, 2, 8, 'Distinctio cum dolorum', 1, 1, 1, 1, NULL, NULL, '2023-12-25 06:27:16', '2023-12-27 07:16:03', NULL),
(3, 2, 8, 2, 64, 'Distinctio cum dolorum', 2, 1, 2, 1, NULL, NULL, '2023-12-25 07:45:07', '2023-12-27 07:16:18', NULL),
(4, 1, 9, 2, 16, 'Distinctio cum dolorum', 3, 2, 3, 1, NULL, NULL, '2023-12-25 07:48:20', '2023-12-27 07:16:07', NULL),
(5, 1, 10, 2, 32, 'Distinctio cum dolorum', 2, 2, 2, 1, NULL, NULL, '2023-12-25 07:52:29', '2023-12-27 07:16:14', NULL),
(6, 2, 11, 3, 5, 'Distinctio cum dolorum', 2, 2, 4, 1, NULL, NULL, '2023-12-25 08:28:17', '2023-12-27 07:15:56', NULL),
(7, 1, 12, 1, 1, 'Yes it Cam Text written', 1, 1, 1, 1, 1, NULL, '2023-12-26 06:30:08', '2024-01-01 03:07:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_categories`
--

CREATE TABLE `mobile_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_categories`
--

INSERT INTO `mobile_categories` (`id`, `name`, `slug`, `description`, `media_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mason Harrington', 'mason-harrington', '<p>Nostrum enim itaque .</p>', 14, 1, 1, NULL, '2023-12-21 01:30:40', '2023-12-24 01:14:42', NULL),
(2, 'Adena Buchanan', 'adena-buchanan', '<p>Adena BuchananAdena BuchananAdena Buchanan</p>', 15, 1, 1, NULL, '2023-12-24 00:07:32', '2023-12-24 01:15:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_general_info`
--

CREATE TABLE `mobile_general_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `res_width` smallint(6) DEFAULT NULL,
  `res_height` smallint(6) DEFAULT NULL,
  `res_ppi` smallint(6) DEFAULT NULL,
  `size` double DEFAULT NULL COMMENT 'like 6.6 inches',
  `release_date` date DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `ui` varchar(255) DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `torch` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_general_info`
--

INSERT INTO `mobile_general_info` (`id`, `mobile_id`, `res_width`, `res_height`, `res_ppi`, `size`, `release_date`, `os`, `ui`, `audio`, `torch`, `browser`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 7, 1, 2, 3, 6.6, '2023-12-20', 'Android 11 OS', 'Android UI 2.0  ', '3.5mm Audio Jack, MP4/H.264 player, MP3/WAV/eAAC+/FLAC player, Speaker Phone  ', 'Yes  ', 'Yes  ', 1, NULL, NULL, '2023-12-25 07:38:31', '2023-12-27 07:25:08', NULL),
(4, 8, 1, 2, 2, 6.9, '2023-12-12', 'BlackBerry', 'BlackBerry UI 2.0', '3.5mm Audio Jack, MP4/H.264 player, MP3/WAV/eAAC+/FLAC player, Speaker Phone  ', 'Yes  ', 'Yes  ', 1, NULL, NULL, '2023-12-25 07:45:31', '2023-12-27 07:33:31', NULL),
(5, 9, 1, 2, 3, 5.1, '2023-12-21', ' iOS 15', 'iOS UI 2.0  ', '3.5mm Audio Jack, MP4/H.264 player, MP3/WAV/eAAC+/FLAC player, Speaker Phone  ', 'Yes  ', 'Yes  ', 1, NULL, NULL, '2023-12-25 07:48:45', '2023-12-27 07:33:06', NULL),
(6, 10, 2, 1, 1, 6.2, '2023-12-08', 'Windows', 'Windows UI 2.0', '3.5mm Audio Jack, MP4/H.264 player, MP3/WAV/eAAC+/FLAC player, Speaker Phone  ', 'Yes  ', 'Yes  ', 1, NULL, NULL, '2023-12-25 07:52:59', '2023-12-27 07:25:55', NULL),
(7, 11, 3, 2, 3, 5.7, '2023-12-22', 'Android 11 OS', 'Android UI 2.0', '3.5mm Audio Jack, MP4/H.264 player, MP3/WAV/eAAC+/FLAC player, Speaker Phone  ', 'Yes  ', 'Yes  ', 1, NULL, NULL, '2023-12-25 08:28:43', '2023-12-27 07:25:15', NULL),
(8, 12, 11, 21, 31, 5.6, '2023-12-07', ' iOS 1', 'iOS UI 2', 'Android O', 'Android O', 'Android O', 1, 1, NULL, '2023-12-26 06:58:00', '2024-01-01 03:09:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_media`
--

CREATE TABLE `mobile_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_media`
--

INSERT INTO `mobile_media` (`id`, `mobile_id`, `media_id`, `is_feature`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 7, 29, 1, 1, NULL, NULL, '2023-12-25 07:43:02', '2023-12-25 07:43:02', NULL),
(10, 7, 30, 0, 1, NULL, NULL, '2023-12-25 07:43:02', '2023-12-25 07:43:02', NULL),
(11, 7, 31, 0, 1, NULL, NULL, '2023-12-25 07:43:02', '2023-12-25 07:43:02', NULL),
(12, 8, 32, 1, 1, NULL, NULL, '2023-12-25 07:47:23', '2023-12-25 07:47:23', NULL),
(13, 8, 33, 0, 1, NULL, NULL, '2023-12-25 07:47:23', '2023-12-25 07:47:23', NULL),
(14, 8, 34, 0, 1, NULL, NULL, '2023-12-25 07:47:23', '2023-12-25 07:47:23', NULL),
(15, 9, 35, 1, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(16, 9, 36, 0, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(17, 9, 37, 0, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(18, 9, 38, 0, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(19, 9, 39, 0, 1, NULL, NULL, '2023-12-25 07:51:08', '2023-12-25 07:51:08', NULL),
(20, 10, 40, 1, 1, NULL, NULL, '2023-12-25 08:22:44', '2023-12-25 08:22:44', NULL),
(21, 10, 41, 0, 1, NULL, NULL, '2023-12-25 08:22:44', '2023-12-25 08:22:44', NULL),
(22, 10, 42, 0, 1, NULL, NULL, '2023-12-25 08:22:44', '2023-12-25 08:22:44', NULL),
(23, 10, 43, 0, 1, NULL, NULL, '2023-12-25 08:22:44', '2023-12-25 08:22:44', NULL),
(24, 11, 44, 1, 1, NULL, NULL, '2023-12-25 08:30:23', '2023-12-25 08:30:23', NULL),
(25, 11, 45, 0, 1, NULL, NULL, '2023-12-25 08:30:23', '2023-12-25 08:30:23', NULL),
(26, 11, 46, 0, 1, NULL, NULL, '2023-12-25 08:30:23', '2023-12-25 08:30:23', NULL),
(27, 11, 47, 0, 1, NULL, NULL, '2023-12-25 08:30:23', '2023-12-25 08:30:23', NULL),
(28, 12, 48, 1, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(29, 12, 49, 0, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(30, 12, 50, 0, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(31, 12, 51, 0, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(32, 12, 52, 0, 1, NULL, NULL, '2024-01-01 06:11:30', '2024-01-01 06:11:30', NULL),
(33, 12, 53, 0, 1, NULL, NULL, '2024-01-01 06:57:50', '2024-01-01 06:57:50', NULL),
(34, 12, 54, 0, 1, NULL, NULL, '2024-01-01 06:57:50', '2024-01-01 06:57:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_memory_info`
--

CREATE TABLE `mobile_memory_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `card_supported` tinyint(1) DEFAULT NULL,
  `supported_card_size` smallint(6) DEFAULT NULL,
  `ram_1` smallint(6) DEFAULT NULL,
  `ram_2` smallint(6) DEFAULT NULL,
  `built_in_memory_1` smallint(6) DEFAULT NULL,
  `built_in_memory_2` smallint(6) DEFAULT NULL,
  `process_size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `no_of_process` smallint(6) DEFAULT NULL,
  `processor_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `process_text` varchar(255) DEFAULT NULL,
  `chipset` varchar(255) DEFAULT NULL,
  `gpu` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_memory_info`
--

INSERT INTO `mobile_memory_info` (`id`, `mobile_id`, `card_supported`, `supported_card_size`, `ram_1`, `ram_2`, `built_in_memory_1`, `built_in_memory_2`, `process_size_id`, `no_of_process`, `processor_type_id`, `process_text`, `chipset`, `gpu`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 7, 2, 12, 2, 4, 8, 16, 2, 2, 2, 'Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)', 'Mediatek Helio G96 (12 nm)', 'Mali-G57 MC2', 1, NULL, NULL, '2023-12-25 07:39:25', '2023-12-30 11:03:04', NULL),
(3, 8, 2, 2, 4, 8, 16, 32, 2, 4, 3, 'Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)', 'Mediatek Helio G96 (12 nm)', 'Mali-G57 MC2', 1, NULL, NULL, '2023-12-25 07:45:56', '2023-12-30 11:03:08', NULL),
(4, 9, 1, 2, 6, 16, 32, 64, 2, 7, 1, 'Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)', 'Mediatek Helio G96 (12 nm)', 'Mali-G57 MC2', 1, NULL, NULL, '2023-12-25 07:49:15', '2023-12-30 11:03:12', NULL),
(5, 10, 1, 2, 8, 32, 64, 128, 2, 1, 3, 'Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)', 'Mediatek Helio G96 (12 nm)', 'Mali-G57 MC2', 1, NULL, NULL, '2023-12-25 07:53:19', '2023-12-30 11:04:08', NULL),
(6, 11, 2, 3, 16, 64, 128, 256, 3, 4, 3, 'Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)', 'Mediatek Helio G96 (12 nm)', 'Mali-G57 MC2', 1, NULL, NULL, '2023-12-25 08:29:18', '2023-12-30 11:03:26', NULL),
(7, 12, 1, 1, 32, 64, 128, 256, 2, 1, 1, 'Android Os', 'Android Os', 'Android Os', 1, 1, NULL, '2023-12-26 07:24:32', '2024-01-01 03:12:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_network_info`
--

CREATE TABLE `mobile_network_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `wlan` varchar(255) DEFAULT NULL,
  `bluetooth` varchar(255) DEFAULT NULL,
  `radio` varchar(255) DEFAULT NULL,
  `usb` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `g2` varchar(255) DEFAULT NULL,
  `g3` varchar(255) DEFAULT NULL,
  `g4` varchar(255) DEFAULT NULL,
  `g5` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_network_info`
--

INSERT INTO `mobile_network_info` (`id`, `mobile_id`, `wlan`, `bluetooth`, `radio`, `usb`, `data`, `g2`, `g3`, `g4`, `g5`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 7, 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot ', 'v5.1 with A2DP, LE ', 'MP3/WAV/eAAC', 'USB Type-C 2.0, USB On-The-Go', 'GPRS, Edge, 3G (HSPA 42.2/5.76 Mbps), 4G LTE-A', 'SIM1: GSM 850 / 900 / 1800 / 1900', 'SIM2: GSM 850 / 900 / 1800 / 1900  ', 'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100  ', 'LTE band 1(2100), 3(1800), 5(850), 8(900), 38(2600), 40(2300), 41(2500)', 1, NULL, NULL, '2023-12-25 07:39:41', '2023-12-25 07:39:41', NULL),
(3, 8, 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot ', 'v5.1 with A2DP, LE ', 'MP3/WAV/eAAC', 'USB Type-C 2.0, USB On-The-Go', 'GPRS, Edge, 3G (HSPA 42.2/5.76 Mbps), 4G LTE-A', 'SIM1: GSM 850 / 900 / 1800 / 1900', 'SIM2: GSM 850 / 900 / 1800 / 1900  ', 'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100  ', 'LTE band 1(2100), 3(1800), 5(850), 8(900), 38(2600), 40(2300), 41(2500)', 1, NULL, NULL, '2023-12-25 07:46:52', '2023-12-25 07:46:52', NULL),
(4, 9, 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot ', 'v5.1 with A2DP, LE ', 'MP3/WAV/eAAC', 'USB Type-C 2.0, USB On-The-Go', 'GPRS, Edge, 3G (HSPA 42.2/5.76 Mbps), 4G LTE-A', 'SIM1: GSM 850 / 900 / 1800 / 1900', 'SIM2: GSM 850 / 900 / 1800 / 1900  ', 'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100  ', 'LTE band 1(2100), 3(1800), 5(850), 8(900), 38(2600), 40(2300), 41(2500)', 1, NULL, NULL, '2023-12-25 07:49:31', '2023-12-25 07:49:31', NULL),
(5, 10, 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot ', 'v5.1 with A2DP, LE ', 'MP3/WAV/eAAC', 'USB Type-C 2.0, USB On-The-Go', 'GPRS, Edge, 3G (HSPA 42.2/5.76 Mbps), 4G LTE-A', 'SIM1: GSM 850 / 900 / 1800 / 1900', 'SIM2: GSM 850 / 900 / 1800 / 1900  ', 'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100  ', 'LTE band 1(2100), 3(1800), 5(850), 8(900), 38(2600), 40(2300), 41(2500)', 1, NULL, NULL, '2023-12-25 07:53:36', '2023-12-25 07:53:36', NULL),
(6, 11, 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot ', 'v5.1 with A2DP, LE ', 'MP3/WAV/eAAC', 'USB Type-C 2.0, USB On-The-Go', 'GPRS, Edge, 3G (HSPA 42.2/5.76 Mbps), 4G LTE-A', 'SIM1: GSM 850 / 900 / 1800 / 1900', 'SIM2: GSM 850 / 900 / 1800 / 1900  ', 'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100  ', 'LTE band 1(2100), 3(1800), 5(850), 8(900), 38(2600), 40(2300), 41(2500)', 1, NULL, NULL, '2023-12-25 08:29:34', '2023-12-25 08:29:34', NULL),
(8, 12, 'Android OS', 'Android OS', 'Android OS', 'Android OS', 'Android OS', 'Android OS', 'Android OS', 'Android OS', 'Android OS', 1, NULL, NULL, '2024-01-01 03:13:53', '2024-01-01 03:13:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_operating_systems`
--

CREATE TABLE `mobile_operating_systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_operating_systems`
--

INSERT INTO `mobile_operating_systems` (`id`, `name`, `slug`, `description`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Axel Nash', 'axel-nash', '<p>Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)</p>', 1, NULL, NULL, '2023-12-21 01:33:00', '2023-12-27 07:30:02', NULL),
(2, 'Sylvia Wood', 'sylvia-wood', '<p>Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)</p>', 1, NULL, NULL, '2023-12-25 05:51:25', '2023-12-27 07:30:07', NULL),
(3, 'Imani Calhoun', 'imani-calhoun', '<p>Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)</p>', 1, NULL, NULL, '2023-12-25 05:51:32', '2023-12-27 07:30:10', NULL),
(4, 'Quyn Harrington', 'quyn-harrington', '<p>Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)</p>', 1, NULL, NULL, '2023-12-25 05:51:39', '2023-12-27 07:30:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_review`
--

CREATE TABLE `mobile_review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `star` tinyint(4) DEFAULT NULL,
  `reviews_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_review`
--

INSERT INTO `mobile_review` (`id`, `mobile_id`, `user_id`, `tittle`, `name`, `email`, `feedback`, `star`, `reviews_status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 7, NULL, NULL, 'Raja', 'raja@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 3, 1, NULL, NULL, NULL, '2023-12-26 13:00:27', '2023-12-29 10:45:34', NULL),
(12, 7, NULL, NULL, 'Huzaifa', 'huzaifa@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 4, 1, NULL, NULL, NULL, '2023-12-26 13:00:35', '2023-12-29 10:45:45', NULL),
(13, 8, NULL, NULL, 'Naveed', 'naveed@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 5, 1, NULL, NULL, NULL, '2023-12-26 13:01:10', '2023-12-29 10:45:53', NULL),
(14, 8, NULL, NULL, 'Hamza', 'hamza@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 1, 1, NULL, NULL, 1, '2023-12-26 13:01:17', '2023-12-29 10:46:02', '2023-12-28 15:54:18'),
(15, 8, NULL, NULL, 'Nabeel', 'nabeel@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 3, 1, NULL, NULL, NULL, '2023-12-26 13:01:25', '2023-12-29 10:46:12', NULL),
(16, 7, NULL, NULL, 'Musa', 'musa@gmail.com', '<p class=\"review\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</p>', 2, 0, NULL, NULL, NULL, '2023-12-29 10:44:07', '2023-12-29 10:44:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_status`
--

CREATE TABLE `mobile_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_status`
--

INSERT INTO `mobile_status` (`id`, `name`, `slug`, `description`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Steel Marsh', 'steel-marsh', '<p>Numquam ipsa, omnis .</p>', 1, NULL, NULL, '2023-12-21 01:34:17', '2023-12-21 01:34:17', NULL),
(2, 'Malachi Salas', 'malachi-salas', 'Doloribus quia tempo', 1, NULL, NULL, '2023-12-25 05:51:52', '2023-12-25 05:51:52', NULL),
(3, 'Macy Witt', 'macy-witt', 'Quas incididunt fugi', 1, NULL, NULL, '2023-12-25 05:51:58', '2023-12-25 05:51:58', NULL),
(4, 'Chantale Allison', 'chantale-allison', 'Temporibus doloremqu', 1, NULL, NULL, '2023-12-25 05:52:04', '2023-12-25 05:52:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `processor_sizes`
--

CREATE TABLE `processor_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processor_sizes`
--

INSERT INTO `processor_sizes` (`id`, `name`, `slug`, `description`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Samuel Moon', 'samuel-moon', '<p>Distinctio. Ex tempo.</p>', 1, 1, NULL, '2023-12-21 01:35:57', '2023-12-21 01:36:32', NULL),
(2, 'Dane Stevenson', 'dane-stevenson', '<p>Mali-G57 MC2</p>', 1, NULL, NULL, '2023-12-23 23:51:39', '2023-12-23 23:51:39', NULL),
(3, 'Simon Meyer', 'simon-meyer', 'Quasi eum velit iru', 1, NULL, NULL, '2023-12-25 05:52:21', '2023-12-25 05:52:21', NULL),
(4, 'Erica Myers', 'erica-myers', 'A aliquid neque blan', 1, NULL, NULL, '2023-12-25 05:52:27', '2023-12-25 05:52:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `processor_types`
--

CREATE TABLE `processor_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processor_types`
--

INSERT INTO `processor_types` (`id`, `name`, `slug`, `description`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jerry Osborn', 'jerry-osborn', '<p>Amet, rerum blanditi.</p>', 1, NULL, NULL, '2023-12-21 01:44:03', '2023-12-21 01:44:03', NULL),
(2, 'CPU', 'cpu', '<p>Octa-core (2 x 2.05 GHz Cortex-A76 + 6 x 2.0 GHz Cortex-A55)</p>', 1, NULL, NULL, '2023-12-23 23:50:22', '2023-12-23 23:50:22', NULL),
(3, 'Chipset', 'chipset', '<p>Mediatek Helio G96 (12 nm)</p>', 1, NULL, NULL, '2023-12-23 23:50:47', '2023-12-23 23:50:47', NULL),
(4, 'GPU', 'gpu', '<p>Mali-G57 MC2</p>', 1, NULL, NULL, '2023-12-23 23:51:08', '2023-12-23 23:51:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `about_me` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `date_of_probation_end` date DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL COMMENT '1=male, 2=female, 3=other',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `phone_no` varchar(500) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `map_address` varchar(1500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `email_verified` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=no, 1=yes',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_verified` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=no, 1=yes',
  `is_login` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=no, 1=yes',
  `is_blocked` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=no, 1=yes',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `about_me`, `date_of_birth`, `date_of_joining`, `date_of_probation_end`, `employee_id`, `gender`, `email`, `password`, `remember_token`, `phone_no`, `address`, `map_address`, `city`, `state`, `zip`, `lat`, `lng`, `email_verified`, `email_verified_at`, `phone_verified`, `is_login`, `is_blocked`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@admin.com', '$2y$10$kLs0IwTj0ypr8Mk0d5hNSudWyFR9xvDd92lb.Jby6V5ie92/yZsPi', 'RDvUoTGFNmZhHi1Pm54PRXaJddUmqntuH15dHgyFVR4Q65ar3zMIx806Lp1I', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2023-12-20 01:23:43', '2023-12-31 16:25:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `youtube_videos`
--

CREATE TABLE `youtube_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `video_link` varchar(191) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtube_videos`
--

INSERT INTO `youtube_videos` (`id`, `mobile_id`, `video_link`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 12, '[\"Leigh\",\"Asgfgdfggh\"]', 1, 1, NULL, '2024-01-02 01:31:09', '2024-01-02 01:33:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_id_blogs` (`media_id`),
  ADD KEY `blog_created_by` (`created_by`),
  ADD KEY `blog_updated_by` (`updated_by`),
  ADD KEY `blog_deleted_by` (`deleted_by`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_delete` (`deleted_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_created_by_foreign` (`created_by`),
  ADD KEY `media_updated_by_foreign` (`updated_by`),
  ADD KEY `media_deleted_by_foreign` (`deleted_by`),
  ADD KEY `media_id_index` (`id`),
  ADD KEY `media_u_id_index` (`u_id`),
  ADD KEY `media_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobiles_brand_id_foreign` (`brand_id`),
  ADD KEY `mobiles_category_id_foreign` (`category_id`),
  ADD KEY `mobiles_status_id_foreign` (`status_id`),
  ADD KEY `mobiles_operating_system_id_foreign` (`operating_system_id`),
  ADD KEY `mobiles_created_by_foreign` (`created_by`),
  ADD KEY `mobiles_updated_by_foreign` (`updated_by`),
  ADD KEY `mobiles_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobiles_id_index` (`id`),
  ADD KEY `mobiles_u_id_index` (`u_id`),
  ADD KEY `mobiles_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_battery_info`
--
ALTER TABLE `mobile_battery_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_battery_info_mobile_id_foreign` (`mobile_id`),
  ADD KEY `mobile_battery_info_created_by_foreign` (`created_by`),
  ADD KEY `mobile_battery_info_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_battery_info_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_battery_info_id_index` (`id`),
  ADD KEY `mobile_battery_info_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_body`
--
ALTER TABLE `mobile_body`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_body_mobile_id_foreign` (`mobile_id`),
  ADD KEY `mobile_body_created_by_foreign` (`created_by`),
  ADD KEY `mobile_body_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_body_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_body_id_index` (`id`),
  ADD KEY `mobile_body_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_brands`
--
ALTER TABLE `mobile_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_brands_created_by_foreign` (`created_by`),
  ADD KEY `mobile_brands_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_brands_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_brands_id_index` (`id`),
  ADD KEY `mobile_brands_deleted_at_index` (`deleted_at`),
  ADD KEY `mobile_brands_media_id` (`media_id`);

--
-- Indexes for table `mobile_cam_info`
--
ALTER TABLE `mobile_cam_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_cam_info_mobile_id_foreign` (`mobile_id`),
  ADD KEY `mobile_cam_info_created_by_foreign` (`created_by`),
  ADD KEY `mobile_cam_info_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_cam_info_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_cam_info_id_index` (`id`),
  ADD KEY `mobile_cam_info_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_categories`
--
ALTER TABLE `mobile_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_categories_created_by_foreign` (`created_by`),
  ADD KEY `mobile_categories_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_categories_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_categories_id_index` (`id`),
  ADD KEY `mobile_categories_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_general_info`
--
ALTER TABLE `mobile_general_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_general_info_mobile_id_foreign` (`mobile_id`),
  ADD KEY `mobile_general_info_created_by_foreign` (`created_by`),
  ADD KEY `mobile_general_info_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_general_info_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_general_info_id_index` (`id`),
  ADD KEY `mobile_general_info_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_media`
--
ALTER TABLE `mobile_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_media_mobile_id_foreign` (`mobile_id`),
  ADD KEY `mobile_media_media_id_foreign` (`media_id`),
  ADD KEY `mobile_media_created_by_foreign` (`created_by`),
  ADD KEY `mobile_media_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_media_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_media_id_index` (`id`),
  ADD KEY `mobile_media_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_memory_info`
--
ALTER TABLE `mobile_memory_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_memory_info_mobile_id_foreign` (`mobile_id`),
  ADD KEY `mobile_memory_info_process_size_id_foreign` (`process_size_id`),
  ADD KEY `mobile_memory_info_processor_type_id_foreign` (`processor_type_id`),
  ADD KEY `mobile_memory_info_created_by_foreign` (`created_by`),
  ADD KEY `mobile_memory_info_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_memory_info_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_memory_info_id_index` (`id`),
  ADD KEY `mobile_memory_info_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_network_info`
--
ALTER TABLE `mobile_network_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_network_info_mobile_id_foreign` (`mobile_id`),
  ADD KEY `mobile_network_info_created_by_foreign` (`created_by`),
  ADD KEY `mobile_network_info_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_network_info_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_network_info_id_index` (`id`),
  ADD KEY `mobile_network_info_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_operating_systems`
--
ALTER TABLE `mobile_operating_systems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_operating_systems_created_by_foreign` (`created_by`),
  ADD KEY `mobile_operating_systems_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_operating_systems_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_operating_systems_id_index` (`id`),
  ADD KEY `mobile_operating_systems_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_review`
--
ALTER TABLE `mobile_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_review_mobile_id_foreign` (`mobile_id`),
  ADD KEY `mobile_review_user_id_foreign` (`user_id`),
  ADD KEY `mobile_review_created_by_foreign` (`created_by`),
  ADD KEY `mobile_review_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_review_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_review_id_index` (`id`),
  ADD KEY `mobile_review_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `mobile_status`
--
ALTER TABLE `mobile_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_status_created_by_foreign` (`created_by`),
  ADD KEY `mobile_status_updated_by_foreign` (`updated_by`),
  ADD KEY `mobile_status_deleted_by_foreign` (`deleted_by`),
  ADD KEY `mobile_status_id_index` (`id`),
  ADD KEY `mobile_status_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `processor_sizes`
--
ALTER TABLE `processor_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `processor_sizes_created_by_foreign` (`created_by`),
  ADD KEY `processor_sizes_updated_by_foreign` (`updated_by`),
  ADD KEY `processor_sizes_deleted_by_foreign` (`deleted_by`),
  ADD KEY `processor_sizes_id_index` (`id`),
  ADD KEY `processor_sizes_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `processor_types`
--
ALTER TABLE `processor_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `processor_types_created_by_foreign` (`created_by`),
  ADD KEY `processor_types_updated_by_foreign` (`updated_by`),
  ADD KEY `processor_types_deleted_by_foreign` (`deleted_by`),
  ADD KEY `processor_types_id_index` (`id`),
  ADD KEY `processor_types_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_index` (`id`),
  ADD KEY `users_first_name_index` (`first_name`),
  ADD KEY `users_middle_name_index` (`middle_name`),
  ADD KEY `users_last_name_index` (`last_name`),
  ADD KEY `users_phone_no_index` (`phone_no`),
  ADD KEY `users_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `youtube_videos`
--
ALTER TABLE `youtube_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `youtube_videos_mobile_id_foreign` (`mobile_id`),
  ADD KEY `youtube_videos_created_by_foreign` (`created_by`),
  ADD KEY `youtube_videos_updated_by_foreign` (`updated_by`),
  ADD KEY `youtube_videos_deleted_by_foreign` (`deleted_by`),
  ADD KEY `youtube_videos_id_index` (`id`),
  ADD KEY `youtube_videos_deleted_at_index` (`deleted_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mobile_battery_info`
--
ALTER TABLE `mobile_battery_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mobile_body`
--
ALTER TABLE `mobile_body`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobile_brands`
--
ALTER TABLE `mobile_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mobile_cam_info`
--
ALTER TABLE `mobile_cam_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobile_categories`
--
ALTER TABLE `mobile_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobile_general_info`
--
ALTER TABLE `mobile_general_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mobile_media`
--
ALTER TABLE `mobile_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mobile_memory_info`
--
ALTER TABLE `mobile_memory_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobile_network_info`
--
ALTER TABLE `mobile_network_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mobile_operating_systems`
--
ALTER TABLE `mobile_operating_systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobile_review`
--
ALTER TABLE `mobile_review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mobile_status`
--
ALTER TABLE `mobile_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processor_sizes`
--
ALTER TABLE `processor_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `processor_types`
--
ALTER TABLE `processor_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `youtube_videos`
--
ALTER TABLE `youtube_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contact_delete` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `media_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `media_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD CONSTRAINT `mobiles_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `mobile_brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobiles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `mobile_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobiles_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobiles_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobiles_operating_system_id_foreign` FOREIGN KEY (`operating_system_id`) REFERENCES `mobile_operating_systems` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobiles_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `mobile_status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobiles_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobile_battery_info`
--
ALTER TABLE `mobile_battery_info`
  ADD CONSTRAINT `mobile_id_battery` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobile_body`
--
ALTER TABLE `mobile_body`
  ADD CONSTRAINT `mobile_body` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobile_cam_info`
--
ALTER TABLE `mobile_cam_info`
  ADD CONSTRAINT `mobile_cam_info` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobile_general_info`
--
ALTER TABLE `mobile_general_info`
  ADD CONSTRAINT `mobile_id_general` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobile_media`
--
ALTER TABLE `mobile_media`
  ADD CONSTRAINT `media_id_mobile` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobile_id_media` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobile_memory_info`
--
ALTER TABLE `mobile_memory_info`
  ADD CONSTRAINT `mobile_id_memory` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobile_network_info`
--
ALTER TABLE `mobile_network_info`
  ADD CONSTRAINT `mobile_id_network` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mobile_review`
--
ALTER TABLE `mobile_review`
  ADD CONSTRAINT `mobile_id_review` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `youtube_videos`
--
ALTER TABLE `youtube_videos`
  ADD CONSTRAINT `youtube_videos_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `youtube_videos_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `youtube_videos_mobile_id_foreign` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `youtube_videos_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
