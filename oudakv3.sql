-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 03:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oudakv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) DEFAULT NULL,
  `percent_off` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent_off`, `created_at`, `updated_at`) VALUES
(1, 'qwe123', 'option1', 99999, 99999, '2019-06-27 10:23:00', '2019-06-27 10:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(33, 5, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(34, 5, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(35, 5, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(36, 5, 'details', 'text', 'Details', 0, 1, 1, 1, 1, 1, '{}', 4),
(37, 5, 'price', 'text', 'Price', 1, 1, 1, 1, 1, 1, '{}', 5),
(38, 5, 'initial_description', 'text_area', 'Initial Description', 1, 1, 1, 1, 1, 1, '{}', 6),
(39, 5, 'main_description', 'text_area', 'Main Description', 1, 1, 1, 1, 1, 1, '{}', 7),
(40, 5, 'sizes', 'text', 'Sizes', 1, 1, 1, 1, 1, 1, '{}', 8),
(42, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(43, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(44, 5, 'mainimage', 'image', 'Mainimage', 1, 1, 1, 1, 1, 1, '{}', 9),
(45, 5, 'layout', 'checkbox', 'Layout', 1, 1, 1, 1, 1, 1, '{\"off\":\"twocolumn\",\"on\":\"threecolumn\",\"checked\":false}', 12),
(47, 5, 'thirdimage', 'multiple_images', 'Thirdimage', 0, 1, 1, 1, 1, 1, '{}', 14),
(48, 5, 'secondimage', 'image', 'Secondimage', 0, 1, 1, 1, 1, 1, '{}', 13),
(49, 6, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(50, 6, 'code', 'text', 'Code', 1, 1, 1, 1, 1, 1, '{}', 2),
(51, 6, 'type', 'select_dropdown', 'Type', 1, 1, 1, 1, 1, 1, '{\"default\":\"fixed\",\"options\":{\"option1\":\"fixed\",\"option2\":\"percent\"}}', 3),
(52, 6, 'value', 'number', 'Value', 0, 1, 1, 1, 1, 1, '{}', 4),
(53, 6, 'percent_off', 'number', 'Percent Off', 0, 1, 1, 1, 1, 1, '{}', 5),
(54, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(55, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(56, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 9, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 9, 'media', 'image', 'Media', 1, 1, 1, 1, 1, 1, '{}', 4),
(60, 9, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{}', 5),
(61, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(62, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-06-26 11:33:39', '2019-06-26 11:33:39'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-06-26 11:33:39', '2019-06-26 11:33:39'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-06-26 11:33:39', '2019-06-26 11:33:39'),
(5, 'products', 'products', 'Product', 'Products', NULL, 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-26 11:38:02', '2019-06-26 13:40:07'),
(6, 'coupons', 'coupons', 'Coupon', 'Coupons', NULL, 'App\\Coupon', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-27 10:22:43', '2019-06-27 10:34:00'),
(9, 'pages', 'pages', 'Page', 'Pages', NULL, 'App\\Page', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-27 12:01:34', '2019-06-27 12:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(2, 'main', '2019-06-27 12:32:27', '2019-06-27 12:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 4, '2019-06-26 11:33:40', '2019-06-27 12:48:49', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 7, '2019-06-26 11:33:40', '2019-06-27 12:48:49', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 6, '2019-06-26 11:33:40', '2019-06-27 12:48:49', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 5, '2019-06-26 11:33:40', '2019-06-27 12:48:49', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 8, '2019-06-26 11:33:40', '2019-06-27 12:48:49', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-06-26 11:33:40', '2019-06-27 12:48:43', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-06-26 11:33:40', '2019-06-27 12:48:43', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-06-26 11:33:40', '2019-06-27 12:48:43', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-06-26 11:33:40', '2019-06-27 12:48:44', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 9, '2019-06-26 11:33:40', '2019-06-27 12:48:49', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-06-26 11:33:42', '2019-06-27 12:48:44', 'voyager.hooks', NULL),
(13, 1, 'Products', '', '_self', 'voyager-helm', '#000000', NULL, 1, '2019-06-26 11:38:02', '2019-06-27 12:51:51', 'voyager.products.index', 'null'),
(14, 1, 'Coupons', '', '_self', 'voyager-helm', '#000000', NULL, 3, '2019-06-27 10:22:43', '2019-06-27 12:52:09', 'voyager.coupons.index', 'null'),
(15, 1, 'Pages', '', '_self', 'voyager-helm', '#000000', NULL, 2, '2019-06-27 12:01:34', '2019-06-27 12:52:00', 'voyager.pages.index', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(47, '2014_10_12_000000_create_users_table', 1),
(48, '2014_10_12_100000_create_password_resets_table', 1),
(49, '2016_01_01_000000_add_voyager_user_fields', 1),
(50, '2016_01_01_000000_create_data_types_table', 1),
(51, '2016_05_19_173453_create_menu_table', 1),
(52, '2016_10_21_190000_create_roles_table', 1),
(53, '2016_10_21_190000_create_settings_table', 1),
(54, '2016_11_30_135954_create_permission_table', 1),
(55, '2016_11_30_141208_create_permission_role_table', 1),
(56, '2016_12_26_201236_data_types__add__server_side', 1),
(57, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(58, '2017_01_14_005015_create_translations_table', 1),
(59, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(60, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(61, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(62, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(63, '2017_08_05_000000_add_group_to_settings_table', 1),
(64, '2017_11_26_013050_add_user_role_relationship', 1),
(65, '2017_11_26_015000_create_user_roles_table', 1),
(66, '2018_03_11_000000_add_user_settings', 1),
(67, '2018_03_14_000000_add_details_to_data_types_table', 1),
(68, '2018_03_16_000000_make_settings_value_nullable', 1),
(69, '2019_06_26_083723_create_products_table', 1),
(70, '2019_06_27_120513_create_coupons_table', 2),
(71, '2019_06_27_134855_create_pages_table', 3),
(72, '2019_06_27_140001_create_pages_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `media` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `media`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Privacy', 'privacy', 'pages\\June2019\\DSSVXRFDsEPlU146am2A.jpg', '<p>Oudak COUTURE PRIVACY POLICY</p>\r\n<p>We are committed to offering you personalised services while respecting your privacy and choices.</p>\r\n<p>Wehave created this Privacy Policy to be transparent with you about our policies and practices relating to the collection and use of personal data you provide to or share with us during our relationship through any touchpoints you use to interact with us (e.g. in store, Customer Department, Oudak.com, social media, digital app, events).</p>\r\n<p>Please read this Privacy Policy carefully. Do not hesitate to contact us if you wish to have the privacy policy in another language.&nbsp;</p>\r\n<p>In this Privacy Policy, you will find information on:</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Who we are</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; What data may we collect about you</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; How we collect or receive your data</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; For what purposes we may use it</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; For how long we may keep it</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Who we may share it with</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; How we protect it and keep it confidential</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; What are your rights under the European Regulation</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; How to contact us if you have any questions or concerns about our use of your personal data</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Information about cookie management</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>WHO are we?</p>\r\n<p>&nbsp;</p>\r\n<p>When we say &ldquo;Oudak&rdquo;, &ldquo;us&rdquo;, &ldquo;our&rdquo; or &ldquo;we&rdquo;, we refer to:</p>\r\n<p>Oudak Couture S.A., a French company with offices located at 30, Avenue Montaigne, 75008 Paris, France, represented by Hien Tran Trung, acting as Chief Information Officer</p>\r\n<p>&nbsp;</p>\r\n<p>WHAT data may we collect about you?&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Personal data&rdquo; means any information that could identify you either directly (e.g. your name) or indirectly (e.g. through a unique client ID number).</p>\r\n<p>Depending on the data you provide or share with us, personal data may include information related to:</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your identity and status</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your contact details</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your family status and relatives</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your personal preferences</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your size and style</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your purchases (in store or online)</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your online journeys (Oudak.com, social media pages, partners websites)</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your repairs</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your requests through our customer department</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; your participation to our events</p>\r\n<p>In the context of a job application with Oudak Couture, we may collect the following information:</p>\r\n<p>&bull;&nbsp; &nbsp; &nbsp; &nbsp;Your identity</p>\r\n<p>&bull;&nbsp; &nbsp; &nbsp; &nbsp;your contact details</p>\r\n<p>&bull;&nbsp; &nbsp; &nbsp; &nbsp;Your Curriculum Vitae</p>\r\n<p>&bull;&nbsp; &nbsp; &nbsp; &nbsp;Your cover letter</p>\r\n<p>We invite you to keep us informed in writing of any changes to your contact details.</p>\r\n<p>&nbsp;</p>\r\n<p>HOW we collect or receive your data?</p>\r\n<p>&nbsp;</p>\r\n<p>As part of our relationship, we might collect or receive data from you</p>\r\n<p>In the following context(s):</p>\r\n<p>o&nbsp; &nbsp;Account Creation and management</p>\r\n<p>o&nbsp; &nbsp;Newsletter and commercial communications subscription</p>\r\n<p>o&nbsp; &nbsp;Purchases</p>\r\n<p>o&nbsp; &nbsp;Online browsing</p>\r\n<p>o&nbsp; &nbsp;Marketing surveys</p>\r\n<p>o&nbsp; &nbsp;User Generated Content</p>\r\n<p>o&nbsp; &nbsp;Use of Digital Apps</p>\r\n<p>o&nbsp; &nbsp;Enquiries</p>\r\n<p>o&nbsp; &nbsp;Participation to an event we organize</p>\r\n<p>o&nbsp; &nbsp;Application for a job</p>\r\n<p>&nbsp;</p>\r\n<p>Via the following touchpoints(s):</p>\r\n<p>o&nbsp; &nbsp;Oudak.com journey</p>\r\n<p>o&nbsp; &nbsp;In store relationship with our salesperson</p>\r\n<p>o&nbsp; &nbsp;Relationship with us during an event we organize</p>\r\n<p>o&nbsp; &nbsp;Customer Department relationship</p>\r\n<p>o&nbsp; &nbsp;Collection forms you complete in store or online</p>\r\n<p>o&nbsp; &nbsp;Digital apps you use</p>\r\n<p>o&nbsp; &nbsp;Oudak social media pages you visit or comment / like</p>\r\n<p>o&nbsp; &nbsp;Digital Media Advertising you click on</p>\r\n<p>o&nbsp; &nbsp;Search Engines Paid Advertising you click on</p>\r\n<p>&nbsp;</p>\r\n<p>FOR WHAT PURPOSES Oudak Couture may use it?</p>\r\n<p>&nbsp;</p>\r\n<p>The PURPOSE for the processing of your data is the MANAGEMENT OFOUR CLIENT RELATIONSHIP.</p>\r\n<p>It includes, depending in which context your data is collected:</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The management of your orders</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The management of our digital communications and offers to you</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The management of your profile*</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The management of your enquiries</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The management of events you register and/or participate</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The management of your job application</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The management of our website and digital apps</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The improvement of our products and services</p>\r\n<p>&nbsp;</p>\r\n<p>The LEGAL BASIS for the processing of your data can be, depending in which context your data is collected:</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Your consent&nbsp;</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The performance of a contract</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Legal grounds where a processing is required by law</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Our legitimate interest, which can be (i) To tailor our marketing communications; Improvement of our products and services; Fraud prevention; Securing our tools;</p>\r\n<p>* Please note that when we send or display personalised communications or content, we may use some techniques qualified as &ldquo;profiling&rdquo; to evaluate and predict your personal preferences and/or interests. Based on our analysis, we send or display communications and/or content tailored to your interests/needs.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>FOR HOW LONG we may keep it?</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>We only keep your personal data for as long as we need it for the purpose for which we hold your personal data, to meet your needs, or to comply with our legal obligations.</p>\r\n<p>&nbsp;</p>\r\n<p>As a general principle, your personal data will be retained in our client database for a period not exceeding:</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; if you are &ldquo;prospect&rdquo; (i.e. you have never purchased a Oudak product but you are interested in Oudak brand), we keep your data for 3 years;</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; if you are &ldquo;client&rdquo; (i.e. you have already purchased a Oudak product), we keep your data for the duration of our commercial relationship + 10 years;</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; If you are a &ldquo;job candidate&rdquo; (i.e. you apply for a job offered by Oudak Couture), we keep your data for 2 years.&nbsp;&nbsp;</p>\r\n<p>Where cookies are placed on your computer, we shall keep them for no more than 13 months.</p>\r\n<p>&nbsp;</p>\r\n<p>We may retain some personal data to comply with our legal or regulatory obligations, as well as to allow us to manage our rights (for example to assert our claims in Courts) or for statistical or historical purposes.</p>\r\n<p>&nbsp;</p>\r\n<p>When we no longer need to use your personal data, it is removed from our systems and records or anonymised so that you can no longer be identified from it.</p>\r\n<p>&nbsp;</p>\r\n<p>WHO we may share it with&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>WE ONLY SHARE INFORMATION:</p>\r\n<p>ON A NEED TO KNOW BASIS;</p>\r\n<p>WHERE POSSIBLE IN A PSEUDONIMIZED WAY ((not allowing direct identification);</p>\r\n<p>FOR LEGITIMATE PURPOSES (to provide you with requested services, to comply with our legal obligations, to prevent fraud and/or to secure our tools, to improve our products and services, or after having obtained your consent to do so);</p>\r\n<p>To:</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Other affiliate of Oudak House to provide you with the same personalised service worldwide</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Other entities of LVMH Group, some acting as data processors</p>\r\n<p>We may share some of your personal data including those collected through Cookies with Parfums Oudak to harmonize and update the information you share with us, to perform statistics based on your characteristics and to tailor our communications.</p>\r\n<p>We only share your personal data with Parfums Oudak for direct marketing purposes with your consent. In this context, Parfums Oudak acts as a data controller, and its own privacy notice applies. Please visit Parfums Oudak Privacy Policy for further details on how Parfums Oudak uses your data.</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Our trusted third-party suppliers</p>\r\n<p>For instance, we may entrust services to:</p>\r\n<p>Third parties providing digital and e-commerce services</p>\r\n<p>Advertising, marketing, digital and social media agencies</p>\r\n<p>Third parties delivering a product to you</p>\r\n<p>Third parties providing IT services</p>\r\n<p>Payment service providers and credit reference agencies</p>\r\n<p>Third parties assisting us for customer care;</p>\r\n<p>Third parties assisting us in the organisation of our events</p>\r\n<p>Third parties securing transactions placed through Oudak.com against fraud and misappropriation</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; Third-parties for change of control; for legal grounds; with your prior consent</p>\r\n<p>&nbsp;</p>\r\n<p>You may also choose to disclose your personal data to our partners, advertisers or affiliates by following a link to and from their websites. Please note that these websites have their own privacy policies.</p>\r\n<p>&nbsp;</p>\r\n<p>We may also offer you the opportunity to use your social media login. Please be aware that in such case you share your profile information with us. The personal data shared depends on your social media platform settings. Please note that these social media platforms have their own privacy policies.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>HOW do we protect it and keep it confidential?</p>\r\n<p>&nbsp;</p>\r\n<p>We take all reasonable precautions to keep your data secure.</p>\r\n<p>We contractually require that trusted third parties who handle your personal data for us do the same.</p>\r\n<p>&nbsp;</p>\r\n<p>Your data may be transferred to, accessed from, and stored outside the European Union by staff members who work for us or for one of our trusted service providers.</p>\r\n<p>&nbsp;</p>\r\n<p>We do it only in a secure and lawful way, and taking steps to make sure that third parties adhere to the commitments set out in this Policy (in particular by entering into appropriate contracts based on the template adopted by the European Commission).</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>YOUR RIGHTS UNDER EUROPEAN REGULATION &ldquo;GDPR&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>It is important that you can control your personal data. Please find hereunder a summary of the rights you have under the GDPR:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to be informed</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right of access</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to rectification</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to erasure/right to be forgotten</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to object to direct marketing, including profiling</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to withdraw consent at any time for data processing based on consent</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to object to processing based on legitimate interests</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to lodge a complaint with a supervisory authority</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to data portability</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to restriction</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; The right to deactivate Cookies</p>\r\n<p>&nbsp;</p>\r\n<p>PLEASE CONTACT US AT THE CONTACT DETAILS BELOW TO EXERCISE THESE RIGHTS.&nbsp;</p>\r\n<p>Note that we may require proof of your identity and full details of your request before we process your requests above.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>HOW TO CONTACT US</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>If you have any questions or concerns about how we treat and use your personal data, or would like to exercise any of your rights above, please contact us:</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; by calling our Customer Department at +33 (0)1 40 73 73 73 or sending us an email at CONTACTOudakEU@Oudak.com;</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; or by writing to us through the contact form on Oudak.com available at https://www.Oudak.com/couture/fr_fr/contact;</p>\r\n<p>&nbsp;</p>\r\n<p>You may also contact our Data Protection Officer (DPO) at privacy@christianOudak.com&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Do not hesitate to contact us if you wish to have the privacy policy in another language.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Information about cookie management&nbsp;</p>\r\n<p>This section presents our policy for managing cookies on the Oudak.com website.</p>\r\n<p>It aims to explain where the browsing information processed when you visit our website comes from, how it is used, and your rights.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>What is a cookie?&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>When you visit our website, we might, depending on the choices you make, store a text file on your device (computer, smartphone, tablet, etc.) through your web browser.</p>\r\n<p>&nbsp;</p>\r\n<p>This text file is a cookie. For as long as it is valid and stored on your device, it will enable Oudak Couture to identify your device when you visit the website in the future.&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Only the issuer of a cookie can read or modify information stored in it.</p>\r\n<p>&nbsp;</p>\r\n<p>Below you will find information on the cookies that might be stored on your device when you visit pages on the Oudak.com website, either by Oudak Couture or by third parties, and how you can delete cookies or refuse to allow them to be stored on your device.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>What is the purpose of the cookies issued on Oudak.com?</p>\r\n<p>&nbsp;</p>\r\n<p>There are several categories of cookie. Some of them are issued directly by Oudak Couture and its providers, and some are issued by third-party companies.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; I.&nbsp; &nbsp; &nbsp;The cookies issued by Oudak Couture and its providers</p>\r\n<p>&nbsp;</p>\r\n<p>Various types of cookie might be stored on your device when you browse our website:</p>\r\n<p>&nbsp;</p>\r\n<p>(i)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &ldquo;Essential&rdquo; cookies&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>These cookies are essential for browsing our website, including to ensure that the ordering process runs smoothly.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>If you delete them it can cause difficulties when browsing our website and make it impossible to place an order.</p>\r\n<p>&nbsp;</p>\r\n<p>These cookies are also needed to track the activity of Oudak Couture.</p>\r\n<p>&nbsp;</p>\r\n<p>They might be stored on your device by Oudak Couture or by its providers.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>(ii)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&ldquo;Analytical and Customisation&rdquo; cookies</p>\r\n<p>&nbsp;</p>\r\n<p>These cookies are not essential for browsing our website but might make it easier for you to conduct searches, optimise your buying experience, and enable us to better determine your expectations, and improve our offering and the way our website works.</p>\r\n<p>&nbsp;</p>\r\n<p>(iii)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &ldquo;Advertising&rdquo; cookies</p>\r\n<p>&nbsp;</p>\r\n<p>Cookies might also be used for advertising purposes. These cookies ensure that the adverts you see are relevant to you.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>What is the advantage of seeing promotional offers and adverts tailored to your browsing?&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>The aim is to present you with offers and adverts that are as relevant to you as possible. To this end, cookies technology allows us to display, in real time, the content that corresponds most closely to your interests based on your recent browsing of our website.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Your interest in the content displayed on your device when you browse a website often determines that website\'s advertising resources, which in turn enable the website to operate its services, which are often provided free of charge to users. You would probably prefer to see offers and adverts that interest you rather than content which is of no interest to you. Similarly, Oudak Couture, like any advertiser, would like its offers and adverts to be seen by internet users who might be interested in them.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Please note: if you share your device with other people:</p>\r\n<p>&nbsp;</p>\r\n<p>If your device is used by several people and if one device uses several web browsers, we cannot be certain that the services and adverts delivered to your device are determined based on your use of the device and not on that of another user.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>It is your decision and responsibility whether you share use of your device and configuration of your web browser&rsquo;s cookie settings with other people.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; II.&nbsp; &nbsp; &nbsp;Cookies issued by third-party companies&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Cookies are issued and used by third parties on our website in accordance with these third parties&rsquo; privacy protection policies.</p>\r\n<p>&nbsp;</p>\r\n<p>These cookies are not essential for browsing our website.</p>\r\n<p>&nbsp;</p>\r\n<p>We might include on our website applications produced by third parties which enable you to share our site content with other people or to tell other people what content you have been browsing or your opinions of it. This is true of the &ldquo;Share&rdquo; and &ldquo;Like&rdquo; buttons for social networks like Facebook, Twitter, Instagram and Pinterest.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Social networks that provide buttons like these might be able to use them to identify you, even if you did not use the button when browsing our website.</p>\r\n<p>&nbsp;</p>\r\n<p>This type of button can enable the social network concerned to track your browsing of our website, simply because you were logged into your account with the social network on your device (you had an open session) while you were browsing our website.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>We have no control over the process the social networks use to collect information relating to your browsing of our website and linked to the personal data they hold.</p>\r\n<p>&nbsp;</p>\r\n<p>We urge you to read these social networks&rsquo; privacy protection policies to find out for what purposes, including advertising, they use the browsing information they might collect using these buttons. These privacy protection policies must give you the option to inform the social networks of your choices, including by configuring your user accounts with each of them.</p>\r\n<p>&nbsp;</p>\r\n<p>To read the privacy protection polices of the aforementioned social networks, visit their websites.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; III.&nbsp; &nbsp; Managing the cookies stored on your device</p>\r\n<p>&nbsp;</p>\r\n<p>You can decide whether cookies are stored on your device.</p>\r\n<p>&nbsp;</p>\r\n<p>Using your web browser settings, you can at any time simply and at no cost choose to accept or block the storage of cookies on your device.</p>\r\n<p>&nbsp;</p>\r\n<p>You can configure your web browser as you wish, so that cookies are (a) accepted and stored on your device, or conversely (b) blocked.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>a.&nbsp; &nbsp; &nbsp; Consent to cookies&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>If your web browser is configured to allow cookies to be stored on your device, the cookies embedded in the pages and content you browse will be routinely stored on your device.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>b.&nbsp; &nbsp; &nbsp; Blocking cookies&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>You can configure your web browser so that:</p>\r\n<p>&nbsp;</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; you are given the option to accept or block cookies on a case-by-case basis, before a cookie is likely to be stored on your device;</p>\r\n<p>&middot;&nbsp; &nbsp; &nbsp; &nbsp; it always refuses to store cookies on your device.&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Please note: Any changes you make to your web browser&rsquo;s cookie acceptance or blocking settings may change your web browsing experience and the process of accessing services that require the use of these cookies.&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>For example, if you block essential cookies you might no longer be able to place orders on our website.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>If you choose to refuse to allow cookies to be stored on your device or if you delete cookies that are stored on it, we cannot accept any liability for the consequences should our services under-perform because we are unable to store or consult the cookies needed for these services to operate and which you might have blocked or deleted.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;How can you exercise your rights, depending on the browser you use?&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>The configuration process is different for each web browser. It is usually described in the browser&rsquo;s help menu. We suggest you find out how to configure your browser and change your cookies preferences.&nbsp;</p>', '2019-06-27 12:04:00', '2019-06-27 12:20:06'),
(2, 'Legal Terms', 'legal-terms', 'pages\\June2019\\63UbWOrJIqLQXEtx6BmQ.jpg', '<p><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">This site (hereinafter the \"Site\") is published by Parfums Christian Dior, a Soci&eacute;t&eacute; Anonyme having its head office located at 33, avenue Hoche 75008 PARIS, with a share capital of 2,620,860 Euros, registered with the Paris Commercial and Companies Registry under number 552 065 187. The Publication Director and&nbsp; Editorial Manager of the Site is Val&eacute;rie Loh, International Internet Manager, CRM &amp; Media. Hosting of the Site is provided by LINKBYNET S.A.S. RCS Bobigny 430 359 927 sise au 5-9, rue de l\'Industrie - 93200 Saint-Denis.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">Access to the site, as well as the use of its contents, is subject to the following terms of use. Accessing and browsing the Site constitutes unconditional acceptance by the visitor of the following stipulations:</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">The Site is owned exclusively by Parfums Christian Dior which is the only entity authorized to use the intellectual property rights and personality rights related thereto, in particular the brand, models, copyrights and image rights, in terms of originals or through express authorisation.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">Christian Dior is the owner of the brands: 克麗絲汀, 迪奧, 姫仙蒂婀 克里斯蒂昂 迪奥, КРИСТИАН ДИОР, דיור ディオール, クリスチャンディオール.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">Parfums Christian Dior endeavors to make its best efforts to ensure the accuracy and updates of the information distributed on its Site and reserves the right to correct, at any moment without prior notice, its contents. However, Parfums Christian Dior cannot guarantee the accuracy, precision and exhaustivity of information available on the Site.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">As a result, Parfums Christian Dior accepts no responsibility whatsoever: ,for any imprecision, inaccuracy or omission with regard to information available on the Site, for any damage resulting from the intrusion by a third party leading to&nbsp; modification of the information available on the Site and, more generally, for any damage, direct or indirect, for whatever cause, origin, nature and consequence, brought about by anyone having access to the Site or the impossibility of accessing the Site; likewise for the use of the Site and/or credit granted to any information emanating directly or indirectly from the latter.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">Visitors are likely to provide personal data. Provision of this personal information is optional. in accordance with the French Data Protection and Civil Liberties Law n&deg; 78-17 of 6 January 1978, each visitor may access personal data concerning him/her and amend or delete it, if appropriate, by contacting Parfums Christian Dior - Customer Services Department - 33 avenue Hoche 75008 Paris.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">Parfums Christian Dior may set up a \"cookie\" on the visitor\'s computer who allows him/herself to be identified. The visitor is reminded that it is possible to refuse the installation of \"cookies\" on his/her computer by configuring his/her browser accordingly. Parfums Christian Dior has installed the means to ensure the security of files constituted from personal data collected on the Site. However, Parfums Christian Dior is not able to control the risks linked to operation of the Internet and would draw the internet user\'s attention to the existence of possible risks concerning the confidentiality of data transiting through this network and accepts no responsibility whatsoever concerning this risk. The creation of hypertext links to the Site may only be done so with the prior, written authorisation of Parfums Christian Dior, which may be revoked at any time. As a result, Parfums Christian Dior accepts no responsibility whatsoever concerning the contents of sites linked to the Site.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">&nbsp;Parfums Christian Dior informs visitors to the Site that these conditions may be changed at any time. These modifications are published online and are considered to be accepted unconditionally by all visitors accessing the site following their publication on line.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">The present terms and conditions are governed by French law. French courts of law are territorially qualified and are acquainted with any lawsuits related to use of the Site.</span><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><br style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\" /><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">Click on&nbsp;</span><a style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 13px; line-height: inherit; font-family: CenturyGothic, Futura, Arial, sans-serif; vertical-align: baseline; outline: 0px; color: #000000;\" href=\"mailto:accueil@linkbynet.com?subject=dior.com/beauty\">this link</a><span style=\"color: #000000; font-family: CenturyGothic, Futura, Arial, sans-serif; font-size: 13px;\">&nbsp;if you wish to send a message to our host. (Law n&deg;: 2004-575 of 21 June 2004)</span></p>', '2019-06-27 12:29:24', '2019-06-27 12:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(2, 'browse_bread', NULL, '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(3, 'browse_database', NULL, '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(4, 'browse_media', NULL, '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(5, 'browse_compass', NULL, '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(6, 'browse_menus', 'menus', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(7, 'read_menus', 'menus', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(8, 'edit_menus', 'menus', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(9, 'add_menus', 'menus', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(10, 'delete_menus', 'menus', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(11, 'browse_roles', 'roles', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(12, 'read_roles', 'roles', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(13, 'edit_roles', 'roles', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(14, 'add_roles', 'roles', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(15, 'delete_roles', 'roles', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(16, 'browse_users', 'users', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(17, 'read_users', 'users', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(18, 'edit_users', 'users', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(19, 'add_users', 'users', '2019-06-26 11:33:41', '2019-06-26 11:33:41'),
(20, 'delete_users', 'users', '2019-06-26 11:33:41', '2019-06-26 11:33:41'),
(21, 'browse_settings', 'settings', '2019-06-26 11:33:41', '2019-06-26 11:33:41'),
(22, 'read_settings', 'settings', '2019-06-26 11:33:41', '2019-06-26 11:33:41'),
(23, 'edit_settings', 'settings', '2019-06-26 11:33:41', '2019-06-26 11:33:41'),
(24, 'add_settings', 'settings', '2019-06-26 11:33:41', '2019-06-26 11:33:41'),
(25, 'delete_settings', 'settings', '2019-06-26 11:33:41', '2019-06-26 11:33:41'),
(26, 'browse_hooks', NULL, '2019-06-26 11:33:42', '2019-06-26 11:33:42'),
(32, 'browse_products', 'products', '2019-06-26 11:38:02', '2019-06-26 11:38:02'),
(33, 'read_products', 'products', '2019-06-26 11:38:02', '2019-06-26 11:38:02'),
(34, 'edit_products', 'products', '2019-06-26 11:38:02', '2019-06-26 11:38:02'),
(35, 'add_products', 'products', '2019-06-26 11:38:02', '2019-06-26 11:38:02'),
(36, 'delete_products', 'products', '2019-06-26 11:38:02', '2019-06-26 11:38:02'),
(37, 'browse_coupons', 'coupons', '2019-06-27 10:22:43', '2019-06-27 10:22:43'),
(38, 'read_coupons', 'coupons', '2019-06-27 10:22:43', '2019-06-27 10:22:43'),
(39, 'edit_coupons', 'coupons', '2019-06-27 10:22:43', '2019-06-27 10:22:43'),
(40, 'add_coupons', 'coupons', '2019-06-27 10:22:43', '2019-06-27 10:22:43'),
(41, 'delete_coupons', 'coupons', '2019-06-27 10:22:43', '2019-06-27 10:22:43'),
(42, 'browse_pages', 'pages', '2019-06-27 12:01:34', '2019-06-27 12:01:34'),
(43, 'read_pages', 'pages', '2019-06-27 12:01:34', '2019-06-27 12:01:34'),
(44, 'edit_pages', 'pages', '2019-06-27 12:01:34', '2019-06-27 12:01:34'),
(45, 'add_pages', 'pages', '2019-06-27 12:01:34', '2019-06-27 12:01:34'),
(46, 'delete_pages', 'pages', '2019-06-27 12:01:34', '2019-06-27 12:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `initial_description` text COLLATE utf8_unicode_ci NOT NULL,
  `main_description` text COLLATE utf8_unicode_ci NOT NULL,
  `sizes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mainimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondimage` longtext COLLATE utf8_unicode_ci,
  `thirdimage` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `initial_description`, `main_description`, `sizes`, `mainimage`, `created_at`, `updated_at`, `layout`, `secondimage`, `thirdimage`) VALUES
(1, 'oudak oil', 'oudak-oil', 'asdasd', 200, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '50', 'products\\June2019\\FiuUircQJUGSEKii1CqU.jpg', '2019-06-26 11:36:00', '2019-06-26 13:41:20', '1', 'products\\June2019\\ahLIcw9cru51tcO1tjnN.png', '[\"products\\\\June2019\\\\JqVaODkd5gVP1I2k9QqV.jpg\"]'),
(2, 'oud fragrance', 'oud-fragrance', NULL, 10, 'initial', 'main', '15g', 'products\\June2019\\nOqMEHcYN8vWN4swb8Dj.png', '2019-06-26 13:49:11', '2019-06-26 13:49:11', '0', 'products\\June2019\\DM0uxijmtPJInvHfkpfI.jpg', NULL),
(3, 'newoud', 'newoud', NULL, 50, 'initial description', 'main description', '20', 'products\\June2019\\kdhpvtX43Tqh0iaAzrWE.jpg', '2019-06-26 16:51:00', '2019-06-26 16:51:56', '1', 'products\\June2019\\zlg0JHsmKbIgXoLZ89oF.png', '[\"products\\\\June2019\\\\qY0ownyLO5fYqDfWKAIA.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-06-26 11:33:40', '2019-06-26 11:33:40'),
(2, 'user', 'Normal User', '2019-06-26 11:33:40', '2019-06-26 11:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `details` text COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Oudak', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Oudak CMS', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\June2019\\bWRkGbdjFwNrg7Lrnocr.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Oudak', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Oudak CMS', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Oudak admin', 'bolanaguib@gmail.com', 'users/default.png', NULL, '$2y$10$vX1bHHqZZjMer/UprMqMkeHa80.lJvzd/QHad4P8opMECYIZDTX3y', NULL, NULL, '2019-06-26 11:34:15', '2019-06-26 11:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_name_unique` (`name`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
