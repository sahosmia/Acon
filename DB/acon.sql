-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 02:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acon`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_main` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `created_at`, `updated_at`) VALUES
(1, 'Application Developer', NULL, '2022-08-09 11:53:21'),
(2, 'Developer', NULL, NULL),
(3, 'Tester', NULL, NULL),
(4, 'Project Manager', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `content`, `show`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book<br></p>', 2, '2022-08-09 05:45:11', '2022-08-09 11:20:10'),
(2, 'Lorem Ipsum is simply.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy<br></p>', 2, '2022-08-09 11:21:21', NULL),
(3, 'Rorem Ipsum has been the industry\'s standard dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy<br></p>', 2, '2022-08-09 11:23:26', NULL),
(4, 'Ipsum has been the industry\'s standard dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy<br></p>', 2, '2022-08-09 11:24:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `val` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `val`, `created_at`, `updated_at`) VALUES
(1, 'HOME', 'Home', NULL, '2022-08-09 07:28:52'),
(2, 'CONTACT', 'Contact', NULL, '2022-08-09 07:28:52'),
(3, 'NEWS', 'News', NULL, '2022-08-09 07:28:52'),
(4, 'TESTIMONIAL', 'Testimonial', NULL, '2022-08-09 07:28:52'),
(5, 'PORTFOLIO', 'Portfolio', NULL, '2022-08-09 07:28:52'),
(6, 'SERVICE', 'Service', NULL, '2022-08-09 07:28:52'),
(7, 'PAGE', 'Page', NULL, '2022-08-09 07:28:52'),
(8, 'FAQ', 'Faq', NULL, '2022-08-09 07:28:52'),
(9, 'GALLERY', 'Gallery', NULL, '2022-08-09 07:28:52'),
(10, 'ABOUT', 'About', NULL, '2022-08-09 07:28:52'),
(11, 'ADDRESS', 'Address', NULL, '2022-08-09 07:28:52'),
(12, 'WORKING_HOURS', 'Working Hours', NULL, '2022-08-09 07:28:52'),
(13, 'CALL_US', 'Call Us', NULL, '2022-08-09 07:28:52'),
(14, 'POPULER_NEWS', 'Populler News', NULL, '2022-08-09 07:28:52'),
(15, 'LATEST_NEWS', 'Latest News', NULL, '2022-08-09 07:28:52'),
(16, 'ABOUT_US', 'About Us', NULL, '2022-08-09 07:28:52'),
(17, 'QUICK_LINKS', 'Quick Link', NULL, '2022-08-09 07:28:52'),
(18, 'TERMS_AND_CONDITION', 'Terms and Condition', NULL, '2022-08-09 07:28:52'),
(19, 'PRIVACY_POLICY', 'Privacy Policy', NULL, '2022-08-09 07:28:52'),
(20, 'READ_MORE', 'Read More', NULL, '2022-08-09 07:28:52'),
(21, 'ALL', 'All', NULL, '2022-08-09 07:28:52'),
(22, 'SERVICES', 'Services', NULL, '2022-08-09 07:28:52'),
(23, 'DESCRIPTION', 'Description', NULL, '2022-08-09 07:28:52'),
(24, 'CLIENT_NAME', 'Client Name', NULL, '2022-08-09 07:28:52'),
(25, 'CLIENT_COMPANY', 'Client Company', NULL, '2022-08-09 07:28:52'),
(26, 'PROJECT_START_DATE', 'Project Start Date', NULL, '2022-08-09 07:28:52'),
(27, 'PROJECT_END_DATE', 'Project End Date', NULL, '2022-08-09 07:28:52'),
(28, 'PROJECT_COST', 'Project Cost', NULL, '2022-08-09 07:28:52'),
(29, 'CLIENT_COMMENT', 'Client Comment', NULL, '2022-08-09 07:28:52'),
(30, 'PROJECT_WEBSITE', 'Project Website', NULL, '2022-08-09 07:28:52'),
(31, 'PROJECTS', 'Projects', NULL, '2022-08-09 07:28:52'),
(32, 'ADMIN', 'Admin', NULL, '2022-08-09 07:28:52'),
(33, 'POSTED_ON', 'Posted On', NULL, '2022-08-09 07:28:52'),
(34, 'CONTACT_US_PAGE_FORM_HEADING_TEXT', 'CONTACT_US_PAGE_FORM_HEADING_TEXT', NULL, '2022-08-09 07:28:52'),
(35, 'SEND_MESSAGE', 'Send Message', NULL, '2022-08-09 07:28:52'),
(36, 'MESSAGE', 'Message', NULL, '2022-08-09 07:28:52'),
(37, 'PHONE', 'Phone', NULL, '2022-08-09 07:28:52'),
(38, 'EMAIL_ADDRESS', 'Email Address', NULL, '2022-08-09 07:28:52'),
(39, 'NAME', 'Name', NULL, '2022-08-09 07:28:52'),
(40, 'FIND_US_ON_MAP', 'Find us on map', NULL, '2022-08-09 07:28:52'),
(41, 'SHARE_THIS', 'Share this', NULL, NULL),
(42, 'COMMENTS', 'Comments', NULL, NULL),
(43, 'SEARCH_NEWS', 'Search News', NULL, NULL),
(44, 'CATEGORY', 'Category', NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_20_121145_create_designations_table', 1),
(6, '2021_10_21_030841_create_teams_table', 1),
(7, '2021_10_21_113611_create_partners_table', 1),
(8, '2021_10_21_171141_create_why_chooses_table', 1),
(9, '2021_10_22_043802_create_faqs_table', 1),
(10, '2021_10_22_091709_create_sliders_table', 1),
(11, '2021_10_23_042428_create_services_table', 1),
(12, '2021_10_23_075535_create_portfolio_categories_table', 1),
(13, '2021_10_23_092031_create_portfolio_photos_table', 1),
(14, '2021_10_23_092446_create_portfolios_table', 1),
(15, '2021_10_23_093954_create_testimonials_table', 1),
(16, '2021_10_23_094906_create_photos_table', 1),
(17, '2021_10_26_031520_create_settings_table', 1),
(18, '2021_10_27_045617_create_socials_table', 1),
(19, '2021_10_27_102036_create_news_categories_table', 1),
(20, '2021_10_28_073157_create_news_table', 1),
(21, '2021_10_28_102707_create_pages_table', 1),
(22, '2021_11_18_125401_create_languages_table', 2),
(23, '2021_11_24_222752_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` int(11) NOT NULL,
  `total_view` int(11) NOT NULL DEFAULT 0,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `short_content`, `content`, `category_id`, `photo`, `banner`, `comment`, `total_view`, `meta_title`, `meta_description`, `added_by`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy.', 'slug', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;', 1, 'news_2.jpg', 'news_banner_2.jpg', 1, 11, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, '2022-08-09 05:39:38', '2022-08-09 12:04:29'),
(3, 'Lorem Ipsum is simply dummy', 'news-category-slug', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;<br></p>', 2, 'news_3.jpg', 'news_banner_3.jpg', 1, 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-08-09 11:32:50', '2022-08-09 12:12:41'),
(4, 'Lorem Ipsum is simply dummy', 'news-category-3', 'Lorem Ipsum is simply dummy text of the prinLorem Ipsum is simply dummy text of the printing and typesetting industry. ting and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;<br></p>', 2, 'news_4.jpg', 'news_banner_4.jpg', 1, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-08-09 12:01:54', '2022-08-09 12:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'News Category', 'news-category', 'News Category', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2022-08-09 05:33:58', NULL),
(2, 'News Category 2', 'news-category-2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-08-09 11:29:56', NULL),
(3, 'New Category 3', 'news-category-3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-08-09 11:30:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mt_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_home` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_gallery` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_faq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_faq` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_portfolio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_portfolio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_testimonial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `search_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_search` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_search` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_term` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_privacy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_privacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `mt_home`, `md_home`, `about_photo`, `about_heading`, `about_content`, `mission_heading`, `mission_content`, `vision_heading`, `vision_content`, `mt_about`, `md_about`, `gallery_heading`, `mt_gallery`, `md_gallery`, `faq_heading`, `mt_faq`, `md_faq`, `service_heading`, `mt_service`, `md_service`, `portfolio_heading`, `mt_portfolio`, `md_portfolio`, `testimonial_heading`, `mt_testimonial`, `md_testimonial`, `news_heading`, `mt_news`, `md_news`, `contact_heading`, `mt_contact`, `md_contact`, `search_heading`, `mt_search`, `md_search`, `term_heading`, `term_content`, `mt_term`, `md_term`, `privacy_heading`, `privacy_content`, `mt_privacy`, `md_privacy`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'new partner', 'partner_1.png', '2022-08-09 05:48:32', '2022-08-09 05:48:32'),
(2, 'Nhq', 'partner_2.png', '2022-08-09 10:32:54', '2022-08-09 10:32:54'),
(3, 'Admin', 'partner_3.png', '2022-08-09 10:33:03', '2022-08-09 10:33:03'),
(4, 'Admin34', 'partner_4.png', '2022-08-09 10:33:16', '2022-08-09 10:33:17'),
(5, 'Sahos Mia', 'partner_5.png', '2022-08-09 10:33:39', '2022-08-09 10:33:39'),
(6, 'test account', 'partner_6.png', '2022-08-09 10:33:55', '2022-08-09 10:33:55');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 'photo_1.jpg', 'Lorem Ipsum has been the dummy', 1, '2022-08-09 05:44:54', '2022-08-09 10:40:15'),
(2, 'photo_2.jpg', 'Lorem Ipsum has been the dummy', 2, '2022-08-09 10:40:36', '2022-08-09 10:41:56'),
(3, 'photo_3.jpg', 'Lorem Ipsum has been the dummy', 1, '2022-08-09 10:40:50', '2022-08-09 10:40:50'),
(4, 'photo_4.jpg', 'Lorem Ipsum has been the dummy', 1, '2022-08-09 10:41:01', '2022-08-09 10:41:01'),
(5, 'photo_5.jpg', 'Lorem Ipsum has been the dummy', 1, '2022-08-09 10:41:29', '2022-08-09 10:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `client_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `slug`, `short_content`, `content`, `client_name`, `client_company`, `start_date`, `end_date`, `website`, `cost`, `client_comment`, `category_id`, `photo`, `banner`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply text.', 'slug', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book<br></p>', 'ridoy', 'new company', '2022-08-09', '2022-08-09', 'http://127.0.0.1:8000/admin/portfolio/add', 2342, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 'portfolio_1.jpg', 'protfolio_banner_1.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2022-08-09 05:44:24', '2022-08-09 10:27:36'),
(2, 'Lorem Ipsum is simply dummy', 'lorem-ipsum-is-simply-dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy<br></p>', 'Hassan', 'impactech.pro', '2022-08-02', '2022-08-10', 'http://127.0.0.1:8000/admin/portfolio/add', 5000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 2, 'protfolio_2.jpg', 'protfolio_banner_2.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-08-09 10:20:37', '2022-08-09 10:20:37'),
(3, 'Lorem Ipsum is simply dummy', 'lorem-ipsum-is-simply-dummy-1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy<br></p>', 'Meherab', 'Nhq', '2022-08-09', '2022-08-09', 'http://127.0.0.1:8000/admin/portfolio/add', 5000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 2, 'protfolio_3.jpg', 'protfolio_banner_3.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '2022-08-09 10:27:10', '2022-08-09 10:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 1, '2022-08-09 05:42:08', '2022-08-09 10:07:07'),
(2, 'Developer', 1, '2022-08-09 10:07:48', '2022-08-09 10:08:28'),
(3, 'UI Desinger', 1, '2022-08-09 10:08:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_photos`
--

CREATE TABLE `portfolio_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_photos`
--

INSERT INTO `portfolio_photos` (`id`, `portfolio_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'protfolio_photo_1.1.jpg', '2022-08-09 05:44:24', NULL),
(2, 2, 'protfolio_photo_2.1.jpg', '2022-08-09 10:20:37', NULL),
(3, 2, 'protfolio_photo_2.2.jpg', '2022-08-09 10:20:37', NULL),
(4, 2, 'protfolio_photo_2.3.jpg', '2022-08-09 10:20:37', NULL),
(5, 2, 'protfolio_photo_2.4.jpg', '2022-08-09 10:20:37', NULL),
(6, 1, 'protfolio_photo_1.2.jpg', '2022-08-09 10:21:07', NULL),
(7, 1, 'protfolio_photo_1.4.jpg', '2022-08-09 10:21:07', NULL),
(8, 3, 'protfolio_photo_3.1.jpg', '2022-08-09 10:27:10', NULL),
(9, 3, 'protfolio_photo_3.2.jpg', '2022-08-09 10:27:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `heading`, `slug`, `short_content`, `content`, `photo`, `banner`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text.', 'slug', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book<br></p>', 'service_1.jpg', 'service_banner_1.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2022-08-09 05:46:14', '2022-08-09 09:28:41'),
(2, 'Lorem Ipsum is simply dummy text.', 'lorem-ipsum-is-simply-dummy-text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy<br></p>', 'service_2.jpg', 'service_banner_2.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '2022-08-09 09:11:44', '2022-08-09 09:11:45'),
(3, 'Lorem Ipsum is simply dummy text.', 'lorem-ipsum-is-simply-dummy-text.-1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummytry\'s standard dummy<br></p>', 'service_3.jpg', 'service_banner_3.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '2022-08-09 09:30:48', '2022-08-09 09:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter_bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_working_hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_address_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_phone_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_working_hour_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_bar_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_bar_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_map_iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_email_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_email_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_active` int(11) NOT NULL,
  `smtp_ssl` int(11) NOT NULL,
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_recent_post` int(11) NOT NULL,
  `total_popular_post` int(11) NOT NULL,
  `total_recent_post_home` int(11) NOT NULL,
  `theme_color_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_color_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter1_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter1_value` int(11) NOT NULL,
  `counter2_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter2_value` int(11) NOT NULL,
  `counter3_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter3_value` int(11) NOT NULL,
  `counter4_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter4_value` int(11) NOT NULL,
  `counter_status` int(11) NOT NULL,
  `banner_about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_faq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_portfolio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_testimonial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_search` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_terms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_privacy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_status` int(11) NOT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_status` int(11) NOT NULL,
  `portfolio_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_status` int(11) NOT NULL,
  `team_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_status` int(11) NOT NULL,
  `testimonial_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_status` int(11) NOT NULL,
  `faq_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_status` int(11) NOT NULL,
  `gallery_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_status` int(11) NOT NULL,
  `recent_post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recent_post_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recent_post_status` int(11) NOT NULL,
  `partner_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_status` int(11) NOT NULL,
  `preloader_status` int(11) NOT NULL,
  `faq_main_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_main_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_main_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_item_bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tawk_live_chat_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tawk_live_chat_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `logo_admin`, `favicon`, `counter_bg`, `login_bg`, `footer_copyright`, `footer_address`, `footer_phone`, `footer_working_hour`, `footer_address_icon`, `footer_phone_icon`, `footer_working_hour_icon`, `footer_about`, `top_bar_email`, `top_bar_phone`, `contact_map_iframe`, `send_email_from`, `receive_email_to`, `smtp_active`, `smtp_ssl`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`, `total_recent_post`, `total_popular_post`, `total_recent_post_home`, `theme_color_1`, `theme_color_2`, `counter1_text`, `counter1_value`, `counter2_text`, `counter2_value`, `counter3_text`, `counter3_value`, `counter4_text`, `counter4_value`, `counter_status`, `banner_about`, `banner_faq`, `banner_gallery`, `banner_service`, `banner_portfolio`, `banner_testimonial`, `banner_news`, `banner_contact`, `banner_search`, `banner_category`, `banner_terms`, `banner_privacy`, `why_choose_title`, `why_choose_subtitle`, `why_choose_status`, `service_title`, `service_subtitle`, `service_status`, `portfolio_title`, `portfolio_subtitle`, `portfolio_status`, `team_title`, `team_subtitle`, `team_status`, `testimonial_title`, `testimonial_subtitle`, `testimonial_status`, `faq_title`, `faq_subtitle`, `faq_status`, `gallery_title`, `gallery_subtitle`, `gallery_status`, `recent_post_title`, `recent_post_subtitle`, `recent_post_status`, `partner_title`, `partner_subtitle`, `partner_status`, `preloader_status`, `faq_main_photo`, `testimonial_main_photo`, `why_choose_main_photo`, `why_choose_item_bg`, `tawk_live_chat_code`, `tawk_live_chat_status`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'logo_admin.png', 'favicon.png', 'counter_bg.jpg', 'login_bg.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '07, H, Banani, Dhaka', '0934587945834', '3:00 - 6:00', 'footer_address_icon.png', 'footer_phone_icon.png', 'footer_working_hour_icon.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'sahos@gmail.com', '019837573234', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7302.106493680636!2d90.39090247230135!3d23.78111815620362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c76a25b04c17%3A0xc32fd7eaacd36446!2sMohakhali%20DOHS%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1660046773195!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '', 0, 0, '', '', '', '', 4, 4, 4, '', '', 'Employee', 200, 'Client', 48, 'Counter 3', 850, 'Counter 4', 2342, 1, 'banner_about.jpg', 'banner_faq.jpg', 'banner_gallery.jpg', 'banner_service.jpg', 'banner_portfolio.jpg', 'banner_testimonial.jpg', 'banner_news.jpg', 'banner_contact.jpg', 'banner_search.jpg', 'banner_category.jpg', 'banner_terms.jpg', 'banner_privacy.jpg', 'Why Choose Us', 'Why Choose Us', 1, 'Service', 'Service', 1, 'Portfolio', 'Portfolio', 1, 'Team', 'Team', 1, 'Testimonial', 'Testimonial', 1, 'FAQ', 'Lorem Ipsum has been the dummyLorem Ipsum has been the dummy', 1, 'Gallery', 'Gallery', 1, 'Recent Post', 'Recent Post', 1, 'Partner', 'Partner', 1, 0, 'faq_main_photo.png', 'testimonial_main_photo.jpg', 'why_choose_main_photo.jpg', 'why_choose_item_bg.jpg\r\n', '', 0, NULL, '2022-08-09 12:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button1_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button1_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button2_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button2_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `created_at`, `updated_at`) VALUES
(1, 'slider_1.jpg', 'Lorem Ipsum is simply dummy text.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Read More', 'http://127.0.0.1:8000/admin/portfolio/add', 'See All', 'http://127.0.0.1:8000/admin/portfolio/add', '2022-08-09 05:47:04', '2022-08-09 06:54:31'),
(2, 'slider_2.jpg', 'Lorem Ipsum is simply dummy text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'Read More', 'http://127.0.0.1:8000/admin/portfolio/add', 'See All', 'http://127.0.0.1:8000/admin/portfolio/add', '2022-08-09 08:00:20', '2022-08-09 08:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'team_member.jpg',
  `designation_id` int(11) NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flickr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `photo`, `designation_id`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`, `created_at`, `updated_at`) VALUES
(1, 'Sahos Mia', 'team_member_1.jpg', 1, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, NULL, NULL, '2022-08-09 05:41:49', '2022-08-09 11:50:21'),
(2, 'Admin', 'team_member_2.jpg', 2, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, NULL, NULL, NULL, '2022-08-09 11:50:59', '2022-08-09 11:50:59'),
(3, 'Admin34', 'team_member_3.jpg', 3, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, NULL, '2022-08-09 11:51:20', '2022-08-09 11:51:20'),
(4, 'Market', 'team_member_4.jpg', 4, 'https://www.facebook.com/', NULL, NULL, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, '2022-08-09 11:52:05', '2022-08-09 11:52:05'),
(5, 'Hassan', 'team_member_5.jpg', 1, 'https://www.facebook.com/', NULL, 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, NULL, NULL, '2022-08-09 11:52:27', '2022-08-09 11:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `company`, `photo`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Sahos Mia', 'application developer', 'isocial', 'testimonial_1.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2022-08-09 05:40:36', '2022-08-09 05:40:36'),
(2, 'Admin', 'Software Developer', 'Nhq', 'testimonial_2.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '2022-08-09 10:29:12', '2022-08-09 10:29:12'),
(3, 'Arik', 'Project Manager', 'Nhq', 'testimonial_3.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '2022-08-09 11:18:41', '2022-08-09 11:18:41'),
(4, 'Misu', 'Ui Designer', 'Nhq', 'testimonial_4.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '2022-08-09 11:19:14', '2022-08-09 11:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `photo`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'meherab', 'mehrab@isocial.com', NULL, '$2y$10$NkXXBwphOMIfdcNG.RLx1OxYuMlp4Pnlplig2dxMKMjYvzyEE5tL.', '01952827301', 'user_1.jpg', 0, 'unactive', NULL, NULL, '2022-08-09 07:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `why_chooses`
--

CREATE TABLE `why_chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_chooses`
--

INSERT INTO `why_chooses` (`id`, `photo`, `heading`, `content`, `created_at`, `updated_at`) VALUES
(1, 'why_choose_1.png', 'Lorem Ipsum is simply dummy text .', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2022-08-09 05:48:06', '2022-08-09 07:03:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_photos`
--
ALTER TABLE `portfolio_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_chooses`
--
ALTER TABLE `why_chooses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_photos`
--
ALTER TABLE `portfolio_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_chooses`
--
ALTER TABLE `why_chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
