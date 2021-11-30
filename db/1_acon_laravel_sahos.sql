-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 03:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1_acon_laravel_sahos`
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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `code_body`, `code_main`, `created_at`, `updated_at`) VALUES
(1, '<script type=\"text/javascript\">\r\n    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n    (function(){\r\n        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\n        s1.async=true;\r\n        s1.src=\'https://embed.tawk.to/5a7c31ded7591465c7077c48/default\';\r\n        s1.charset=\'UTF-8\';\r\n        s1.setAttribute(\'crossorigin\',\'*\');\r\n        s0.parentNode.insertBefore(s1,s0);\r\n    })();\r\n</script>', '<div class=\"fb-comments\" data-href=\"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts=\"5\"></div>', '2021-11-02 16:34:05', '2021-11-24 16:54:33');

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
(1, 'Maneger', NULL, '2021-10-21 03:03:12'),
(2, 'Chairman', NULL, '2021-10-31 05:00:20'),
(3, 'Worker', NULL, '2021-11-22 11:02:27');

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
(1, 'Eam aeterno nominavi id nisl magna', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, '2021-10-21 23:28:14', '2021-11-21 14:31:46'),
(2, 'DETRACTO CONTENTIONES TE EST, BRUTE IPSUM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, '2021-10-21 23:28:35', NULL),
(3, 'TOLLIT CETERO CU USU, ETIAM EVERTITUR ID NEC', 'Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.', 2, '2021-10-21 23:29:08', NULL),
(4, 'Latine sanctus perfecto ad pro ut vel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, '2021-10-31 05:44:13', NULL),
(5, 'Mei ut errem legimus periculis, eos liber', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, '2021-10-31 05:44:35', NULL),
(6, 'Ancillae interpretaris ea has id amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, '2021-10-31 05:45:07', NULL);

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
(1, 'HOME', 'Home', NULL, '2021-11-29 14:13:25'),
(2, 'PAGE', 'Page', NULL, '2021-11-29 14:13:25'),
(3, 'ABOUT', 'Abut', NULL, '2021-11-29 14:13:25'),
(4, 'GALLERY', 'Gallery', NULL, '2021-11-29 14:13:25'),
(5, 'FAQ', 'Faq', NULL, '2021-11-29 14:13:25'),
(6, 'SERVICE', 'Service', NULL, '2021-11-29 14:13:25'),
(7, 'PORTFOLIO', 'Portfolio', NULL, '2021-11-29 14:13:25'),
(8, 'TESTIMONIAL', 'Testimonial', NULL, '2021-11-29 14:13:25'),
(9, 'NEWS', 'News', NULL, '2021-11-29 14:13:26'),
(10, 'CONTACT', 'Contact', NULL, '2021-11-29 14:13:26'),
(11, 'ADDRESS', 'Address', NULL, '2021-11-29 14:13:26'),
(12, 'CALL_US', 'Call Us', NULL, '2021-11-29 14:13:26'),
(13, 'WORKING_HOURS', 'Working Hours', NULL, '2021-11-29 14:13:26'),
(14, 'ABOUT_US', 'About Us', NULL, '2021-11-29 14:13:26'),
(15, 'LATEST_NEWS', 'Latest News', NULL, '2021-11-29 14:13:26'),
(16, 'POPULER_NEWS', 'Populer News', NULL, '2021-11-29 14:13:26'),
(17, 'QUICK_LINKS', 'Quick Links', NULL, '2021-11-29 14:13:26'),
(18, 'TERMS_AND_CONDITION', 'Terms and Condition', NULL, '2021-11-29 14:13:26'),
(19, 'PRIVACY_POLICY', 'Privacy and Policy', NULL, '2021-11-29 14:13:26'),
(20, 'READ_MORE', 'Read More', NULL, '2021-11-29 14:13:26'),
(21, 'POSTED_ON', 'Posted On:', NULL, '2021-11-29 14:13:26'),
(22, 'ADMIN', 'Admin', NULL, '2021-11-29 14:13:26'),
(23, 'SERVICES', 'Services', NULL, '2021-11-29 14:13:26'),
(24, 'ALL', 'All', NULL, '2021-11-29 14:13:27'),
(25, 'PROJECTS', 'Projects', NULL, '2021-11-29 14:13:27'),
(26, 'DESCRIPTION', 'Description', NULL, '2021-11-29 14:13:27'),
(27, 'CLIENT_NAME', 'Client Name', NULL, '2021-11-29 14:13:27'),
(28, 'CLIENT_COMPANY', 'Client Company', NULL, '2021-11-29 14:13:27'),
(29, 'PROJECT_START_DATE', 'Project Start Date', NULL, '2021-11-29 14:13:27'),
(30, 'PROJECT_END_DATE', 'Project End Date', NULL, '2021-11-29 14:13:27'),
(31, 'CLIENT_COMMENT', 'Client\'s Comment', NULL, '2021-11-29 14:13:27'),
(32, 'SEARCH_NEWS', 'Search News', NULL, '2021-11-29 14:13:27'),
(33, 'CATEGORY', 'Category', NULL, '2021-11-29 14:13:27'),
(34, 'SHARE_THIS', 'Share This', NULL, '2021-11-29 14:13:27'),
(35, 'COMMENTS', 'Comments', NULL, '2021-11-29 14:13:27'),
(36, 'SEARCH_BY', 'Search By:', NULL, '2021-11-29 14:13:27'),
(37, 'NO_RESULT_FOUND', 'No Result Found', NULL, '2021-11-29 14:13:27'),
(38, 'CONTACT_US_PAGE_FORM_HEADING_TEXT', 'Contact us through the following form:', NULL, '2021-11-29 14:13:28'),
(39, 'PREVIOUS', 'Previous', NULL, '2021-11-29 14:13:28'),
(40, 'NEXT', 'Next', NULL, '2021-11-29 14:13:28'),
(41, 'FIND_US_ON_MAP', 'Find Us on Map:', NULL, '2021-11-29 14:13:28'),
(42, 'NAME', 'Name', NULL, '2021-11-29 14:13:28'),
(43, 'EMAIL_ADDRESS', 'Email Address', NULL, '2021-11-29 14:13:28'),
(44, 'PHONE', 'Phone', NULL, '2021-11-29 14:13:28'),
(45, 'MESSAGE', 'Message', NULL, '2021-11-29 14:13:28'),
(46, 'SEND_MESSAGE', 'Send Message', NULL, '2021-11-29 14:13:28'),
(47, 'EMPTY_ERROR_NAME', 'Name can not be empty', NULL, '2021-11-29 14:13:28'),
(48, 'EMPTY_ERROR_PHONE', 'Phone number can not be empty', NULL, '2021-11-29 14:13:28'),
(49, 'EMPTY_ERROR_EMAIL', 'Email address can not be empty', NULL, '2021-11-29 14:13:28'),
(50, 'VALID_ERROR_EMAIL', 'Email address is invalid', NULL, '2021-11-29 14:13:28'),
(51, 'EMPTY_ERROR_COMMENT', 'Comment can not be empty', NULL, '2021-11-29 14:13:28'),
(52, 'CONTACT_FORM_EMAIL_SUBJECT', 'Contact Form Email - YourWebsite.com', NULL, '2021-11-29 14:13:28'),
(53, 'CONTACT_FORM_EMAIL_SUCCESS_MESSAGE', 'Thank you for sending us the email. We will contact you shortly.', NULL, '2021-11-29 14:13:28'),
(54, 'PASSWORD_REQUEST_EMAIL_SUBJECT', 'Password Request - yourwebsite.com', NULL, '2021-11-29 14:13:29'),
(55, 'PROJECT_COST', 'Project Cost', NULL, '2021-11-29 14:13:29'),
(56, 'PROJECT_WEBSITE', 'Project Website', NULL, '2021-11-29 14:13:29');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_10_20_121145_create_designations_table', 2),
(14, '2021_10_21_030841_create_teams_table', 3),
(15, '2021_10_21_113611_create_partners_table', 4),
(16, '2021_10_21_171141_create_why_chooses_table', 5),
(18, '2021_10_22_043802_create_faqs_table', 6),
(19, '2021_10_22_091709_create_sliders_table', 7),
(21, '2021_10_23_042428_create_services_table', 8),
(22, '2021_10_23_075535_create_portfolio_categories_table', 9),
(23, '2021_10_23_092031_create_portfolio_photos_table', 10),
(24, '2021_10_23_092446_create_portfolios_table', 10),
(25, '2021_10_23_093954_create_testimonials_table', 11),
(27, '2021_10_23_094906_create_photos_table', 12),
(28, '2021_10_26_031520_create_settings_table', 13),
(29, '2021_10_27_045617_create_socials_table', 14),
(30, '2021_10_27_102036_create_news_categories_table', 15),
(31, '2021_10_28_073157_create_news_table', 16),
(32, '2021_10_28_102707_create_pages_table', 17),
(33, '2021_11_18_125401_create_languages_table', 18),
(34, '2021_11_24_222752_create_comments_table', 19);

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
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `short_content`, `content`, `category_id`, `photo`, `banner`, `comment`, `total_view`, `meta_title`, `meta_description`, `added_by`, `created_at`, `updated_at`) VALUES
(4, 'Ex usu vero quaerendum, mei no falli', 'ex-usu-vero-quaerendum-mei-no-falli', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p>', 2, 'news_4.jpg', 'news_banner4.jpg', 1, 39, 'Ex usu vero quaerendum, mei no falli', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne.', 1, '2021-10-28 04:06:17', '2021-11-29 14:05:27'),
(5, 'Detracto contentiones te est, brute ipsum', 'detracto-contentiones-te-est-brute-ipsum', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p>', 1, 'news_5.jpg', 'news_banner5.jpg', 1, 33, 'Detracto contentiones te est, brute ipsum', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne.', 1, '2021-10-28 04:07:21', '2021-11-29 13:59:23'),
(6, 'Liber utroque vim an amet Latine sa', 'liber-utroque-vim-an-amet-latine-sa', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne.', '<p><span style=\"color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.&nbsp;</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.&nbsp;</span></p><hr><p><span style=\"color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</span><span style=\"color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\"><br></span><br></p>', 1, 'news_6.jpg', 'news_banner_6.jpg', 2, 9, 'Liber utroque vim an', 'Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.', 1, '2021-10-31 09:08:16', '2021-11-29 14:04:14');

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
(1, 'category2', 'category2', 'category1', 'asdfasdf  fd gsdfg sdfg', '2021-10-27 04:36:57', '2021-11-24 06:15:18'),
(2, 'category 4', 'category-4', 'category 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, itaque natus porro reprehenderit accusamus est. Placeat non provident praesentium dolorum, molestiae suscipit deleniti in error tenetur dolor expedita, cupiditate soluta!', '2021-10-28 03:30:17', '2021-11-24 06:36:44');

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
(1, 'Acon - Building and Architecture Website CMS', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'about_photo.jpg', 'ABOUT US', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae laudantium dignissimos doloremque tempore fugiat error blanditiis voluptas aliquam fuga, molestiae. Corporis enim iusto, in magnam, commodi minus officiis maxime neque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae laudantium dignissimos doloremque tempore fugiat error blanditiis voluptas aliquam fuga, molestiae.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif;\">Corporis enim iusto, in magnam, commodi minus officiis maxime neque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae laudantium dignissimos doloremque tempore fugiat error blanditiis voluptas aliquam fuga, molestiae. Corporis enim iusto, in magnam, commodi minus officiis maxime neque.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif;\">Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.</p>', 'MISSION', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'VISION', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'About Us - Acon - Building and Architecture Website CMS', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Gallery', 'Duo purto pertinax in. Ea noluisse mediocrem qui,', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Faq', 'Duo purto pertinax in. Ea noluisse mediocrem qui,', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Service', 'Duo purto pertinax in. Ea noluisse mediocrem qui,', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Portfolio', 'Duo purto pertinax in. Ea noluisse mediocrem qui,', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Tesimonial', 'Duo purto pertinax in. Ea noluisse mediocrem qui,', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'News', 'Duo purto pertinax in. Ea noluisse mediocrem qui,', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Contact', 'Duo purto pertinax in. Ea noluisse mediocrem qui,', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Search By:', 'Duo purto pertinax in. Ea noluisse mediocrem qui,', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Term & Condition', '<p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.<br></p>', 'Duo purto pertinax in.', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', 'Privacy Policy', '<p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.&nbsp;</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.<br></p>', 'Duo purto pertinax in.', 'Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.', NULL, '2021-11-27 16:17:50');

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
(1, 'bangladesh', 'partner_1.png', '2021-10-30 12:38:39', '2021-10-30 12:38:39'),
(2, 'Facebook', 'partner_2.png', '2021-10-31 05:55:38', '2021-10-31 05:55:38'),
(3, 'Google', 'partner_3.png', '2021-10-31 05:55:52', '2021-10-31 05:55:52'),
(4, 'Amazon', 'partner_4.png', '2021-10-31 05:56:47', '2021-10-31 05:56:47'),
(5, 'Ali Baba', 'partner_5.png', '2021-10-31 05:57:20', '2021-10-31 05:57:20'),
(6, 'eValy', 'partner_6.png', '2021-10-31 05:58:45', '2021-10-31 05:58:46');

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
(2, 'photo_2.jpg', 'Photo Caption 1', 2, '2021-10-23 09:11:44', '2021-11-21 15:40:15'),
(3, 'photo_3.jpg', 'Photo Caption 2', 1, '2021-10-23 09:12:01', '2021-10-23 09:12:02'),
(4, 'photo_4.jpg', 'Photo Caption 3', 1, '2021-10-31 04:17:44', '2021-10-31 04:17:44'),
(5, 'photo_5.jpg', 'Photo Caption 4', 1, '2021-10-31 04:18:15', '2021-10-31 04:18:16'),
(6, 'photo_6.jpg', 'Caption Photo 5', 1, '2021-10-31 04:18:45', '2021-10-31 04:18:46'),
(7, 'photo_7.jpg', 'Caption Photo 6', 1, '2021-10-31 04:19:17', '2021-10-31 04:19:17'),
(8, 'photo_8.jpg', 'Caption Photo 7', 1, '2021-10-31 04:19:32', '2021-10-31 04:19:32'),
(9, 'photo_9.jpg', 'Caption Photo 8', 1, '2021-10-31 04:20:36', '2021-10-31 04:20:36');

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
(1, 'Corporate Work 1', 'corporate-work-1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.g', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '2021-10-06', '2021-10-28', 'http://www.abc.com', 3600, 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', 1, 'portfolio_1.jpg', 'portfolio_banner1.jpg', 'Corporate Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '2021-10-24 23:19:52', '2021-11-22 17:32:10'),
(3, 'Engineering Work 2', 'engineering-work-2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '2021-10-04', '2021-10-31', 'http://www.abc.com', 780, 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et,', 1, 'protfolio_3.jpg', 'protfolio_banner_3.jpg', 'Engineering Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '2021-10-31 06:17:47', '2021-11-22 17:32:33'),
(4, 'Corporate Work 2', 'corporate-work-2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '2021-10-02', '2021-10-26', 'http://www.abc.com', 780, 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et,', 2, 'protfolio_4.jpg', 'protfolio_banner_4.jpg', 'Corporate Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '2021-10-31 06:19:01', '2021-11-22 17:32:45'),
(5, 'Business Work 2', 'business-work-2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '2021-10-08', '2021-10-31', 'http://www.abc.com', 780, 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et,', 3, 'protfolio_5.jpg', 'protfolio_banner_5.jpg', 'Business Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '2021-10-31 06:19:29', '2021-11-22 17:33:02'),
(6, 'Engineering Work 1', 'engineering-work-1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '2021-10-03', '2021-10-31', 'http://www.abc.com', 780, 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et,', 4, 'protfolio_6.jpg', 'protfolio_banner_6.jpg', 'Engineering Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '2021-10-31 06:19:42', '2021-11-22 17:33:09'),
(7, 'Business Work 1', 'business-work-1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Nicholas Y. Coleman', 'Baltimore Markets', '2021-10-03', '2021-10-31', 'http://www.abc.com', 458, 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et,', 4, 'portfolio_7.jpg', 'protfolio_banner_7.jpg', 'Business Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '2021-10-31 06:21:25', '2021-11-22 17:33:14'),
(8, 'Business Work 1', 'business-work-1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '2021-10-02', '2021-10-28', 'http://www.abc.com', 780, 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et,', 3, 'protfolio_8.jpg', 'protfolio_banner_8.jpg', 'Business Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '2021-10-31 06:21:53', '2021-11-22 17:33:19'),
(9, 'Business Work 1', 'business-work-1-1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '2021-10-02', '2021-10-28', 'http://www.abc.com', 780, 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et,', 3, 'portfolio_9.jpg', 'protfolio_banner_9.jpg', 'Business Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '2021-10-31 06:23:04', '2021-11-22 17:33:24');

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
(1, 'web design', 1, '2021-10-23 02:22:57', '2021-10-23 02:44:39'),
(2, 'Web Developer', 1, '2021-10-23 02:44:59', NULL),
(3, 'App Development', 1, '2021-10-23 02:45:12', NULL),
(4, 'Mobail', 1, '2021-10-23 02:46:02', NULL);

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
(2, 1, 'protfolio_photo_1.1.jpg', '2021-10-31 05:20:20', NULL),
(5, 3, 'protfolio_photo_3.1.jpg', '2021-10-31 06:17:47', NULL),
(6, 3, 'protfolio_photo_3.2.jpg', '2021-10-31 06:17:47', NULL),
(7, 3, 'protfolio_photo_3.3.jpg', '2021-10-31 06:17:47', NULL),
(8, 3, 'protfolio_photo_3.4.jpg', '2021-10-31 06:17:47', NULL),
(9, 4, 'protfolio_photo_4.1.jpg', '2021-10-31 06:19:01', NULL),
(10, 4, 'protfolio_photo_4.2.jpg', '2021-10-31 06:19:01', NULL),
(11, 4, 'protfolio_photo_4.3.jpg', '2021-10-31 06:19:01', NULL),
(12, 5, 'protfolio_photo_5.1.jpg', '2021-10-31 06:19:29', NULL),
(13, 5, 'protfolio_photo_5.2.jpg', '2021-10-31 06:19:29', NULL),
(14, 5, 'protfolio_photo_5.3.jpg', '2021-10-31 06:19:29', NULL),
(15, 7, 'protfolio_photo_7.1.jpg', '2021-10-31 06:21:25', NULL),
(16, 7, 'protfolio_photo_7.2.jpg', '2021-10-31 06:21:25', NULL),
(17, 7, 'protfolio_photo_7.3.jpg', '2021-10-31 06:21:25', NULL),
(18, 7, 'protfolio_photo_7.4.jpg', '2021-10-31 06:21:25', NULL);

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
(4, 'ENGINEERING & DESIGN', 'engineering-design', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p><p>Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;</p>', 'service_4.jpg', 'service_banner_4.jpg', 'ENGINEERING & DESIGN', 'Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '2021-10-23 00:27:57', '2021-11-21 11:01:05'),
(5, 'INDUSTRY TRAINING', 'industry-training', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p><p>Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;</p>', 'service_5.jpg', 'service_banner_5.jpg', 'INDUSTRY TRAINING', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '2021-10-23 00:31:38', '2021-11-24 03:56:04'),
(6, 'DIGITAL ENTERPRISE', 'digital-enterprise', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '<p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p><p style=\"padding: 0px; border: 0px; outline: none; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;</p>', 'service_6.jpg', 'service_banner_6.jpg', 'DIGITAL ENTERPRISE', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '2021-10-31 05:36:06', '2021-11-24 03:56:22'),
(8, 'PROGRAM MANAGEMENT', 'program-management', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p><p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p><p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p><p>Lorem ipsum dolor sit amet, an labores explicari qi, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.<br></p>', 'service_8.jpg', 'service_banner_8.jpg', 'PROGRAM MANAGEMENT', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '2021-10-31 05:40:21', '2021-11-24 03:57:07'),
(9, 'ANALYTICS & RESEARCH', 'analytics-research', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.&nbsp;</p><p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.&nbsp;</p><p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.<br></p>', 'service_9.jpg', 'service_banner_9.jpg', 'ANALYTICS & RESEARCH', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '2021-10-31 05:41:37', '2021-11-24 03:56:59'),
(11, 'ENGINEERING & DESIGN', 'engineering-design-1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p><p>Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridensÂ&nbsp;</p><div><br></div>', 'service_11.jpg', 'service_banner_11.jpg', 'ENGINEERING & DESIGN', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', '2021-11-21 11:03:57', '2021-11-21 11:03:58');

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
  `top_bar_phone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'logo.png', 'logo_admin.png', 'favicon.png', 'counter_bg.jpg', 'login_bg.jpg', 'Copyright 2021. All Rights Reserved.', 'Lane A21, ABC Steet,  \r\nNewYork, USA.', '111-222-3333 \r\n111-222-4444', 'Monday-Friday (9:00 AM - 5:00 PM) \r\nSaturday and Sunday: Off', 'footer_address_icon.png', 'footer_phone_icon.png', 'footer_working_hour_icon.png', 'Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim concludaturque. Senserit salutandi euripidis no per, modus maiestatis scribentur est an. Ea suas pertinax has, solet officiis pericula cu pro, possit inermis qui ad. An mea tale perfecto sententiae.', 'info@yourdomain.com', '123-456-7878', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84040262736!2d-74.25819605476612!3d40.70583158628177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1485712851643\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'contact@yourwebsite.com', 'youremail@gmail.com', 1, 1, 'smtp_host', 'smtp_port', 'smtp_username', 'smtp_password', 4, 4, 11, '13233B', 'F8BE2E', 'Working Persons', 150, 'Projects Completed', 300, 'Happy Clients', 1200, 'Running', 450, 1, 'banner_about.jpg', 'banner_faq.jpg', 'banner_gallery.jpg', 'banner_service.jpg', 'banner_portfolio.jpg', 'banner_testimonial.jpg', 'banner_news.jpg', 'banner_contact.jpg', 'banner_search.jpg', 'banner_category.jpg', 'banner_terms.jpg', 'banner_privacy.jpg', 'WHY CHOOSE US', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate', 1, 'SERVICES', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate', 1, 'PORTFOLIO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate\n\n', 1, 'EXPERIENCED TEAM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate\n\n', 1, 'WHAT OUR CLIENTS SAY', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate', 1, 'Have Some Questions?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate', 1, 'PHOTO GALLERY', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate', 1, 'RECENT POSTS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate', 1, 'OUR PARTNERS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Deserunt libero voluptate', 1, 2, 'faq_main_photo.png', 'testimonial_main_photo.jpg', 'why_choose_main_photo.jpg', 'why_choose_item_bg.jpg', '<script type=\"text/javascript\">\r\n    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n    (function(){\r\n        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\n        s1.async=true;\r\n        s1.src=\'https://embed.tawk.to/5a7c31ded7591465c7077c48/default\';\r\n        s1.charset=\'UTF-8\';\r\n        s1.setAttribute(\'crossorigin\',\'*\');\r\n        s0.parentNode.insertBefore(s1,s0);\r\n    })();\r\n</script>', 1, NULL, '2021-11-25 12:03:18');

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
(1, 'slider1.jpg', 'HELPING BUILD A BETTER FUTURE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.', 'Contact', 'http://127.0.0.1:8000/slider/add_page', 'Read More', 'http://127.0.0.1:8000/slider/add_paged', '2021-10-22 04:27:12', '2021-11-21 07:08:52'),
(2, 'slider2.jpg', 'BUILD WITH CONFIDENCE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.', 'About US', 'http://127.0.0.1:8000/slider/add_pageg', 'Read More', 'http://127.0.0.1:8000/slider/add_page', '2021-10-22 04:28:21', '2021-11-21 07:08:33');

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

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_name`, `social_url`, `social_icon`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'f', 'fa fa-facebook', NULL, '2021-11-22 05:53:03'),
(2, 'Twitter', 'b', 'fa fa-twitter', NULL, '2021-11-22 05:53:03'),
(3, 'Linkedin', 'd', 'fa fa-linkedin', NULL, '2021-11-22 05:53:03'),
(4, 'Googleplus', 'http://127.0.0.1:8000/social', 'fa fa-google-plus', NULL, '2021-11-22 05:53:03'),
(5, 'Pinterest', 'g', 'fa fa-pinterest', NULL, '2021-11-22 05:53:03'),
(6, 'Youtube', NULL, 'fa fa-youtube', NULL, '2021-11-22 05:53:03'),
(7, 'Instagram', NULL, 'fa fa-instagram', NULL, '2021-11-22 05:53:03'),
(8, 'Tumblr', 'asd', 'fa fa-tumblr', NULL, '2021-11-22 05:53:03'),
(9, 'Flickr', NULL, 'fa fa-flickr', NULL, '2021-11-22 05:53:03'),
(10, 'Reddit', NULL, 'fa fa-reddit', NULL, '2021-11-22 05:53:03'),
(11, 'Snapchat', NULL, 'fa fa-snapchat', NULL, '2021-11-22 05:53:03'),
(12, 'Whatsapp', NULL, 'fa fa-whatsapp', NULL, '2021-11-22 05:53:03'),
(13, 'Quora', NULL, 'fa fa-quora', NULL, '2021-11-22 05:53:03'),
(14, 'Stumbleupon', NULL, 'fa fa-stumbleupon', NULL, '2021-11-22 05:53:03'),
(15, 'Delicious', NULL, 'fa fa-delicious', NULL, '2021-11-22 05:53:03'),
(16, 'Digg', NULL, 'fa fa-digg', NULL, '2021-11-22 05:53:03');

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
(1, 'Robert Smith', 'team_member_1.jpg', 1, 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', NULL, NULL, '2021-10-30 12:53:49', '2021-10-30 12:55:20'),
(2, 'Jon Robis', 'team_member_2.jpg', 3, 'http://www.facebook.com', 'http://www.facebook.com', NULL, NULL, NULL, NULL, NULL, '2021-10-31 05:02:05', '2021-10-31 05:02:06'),
(3, 'Millar Don', 'team_member_3.jpg', 2, 'http://www.facebook.com', 'http://www.facebook.com', NULL, 'http://www.facebook.com', NULL, NULL, NULL, '2021-10-31 05:03:09', '2021-10-31 05:03:10'),
(4, 'Bilas bon', 'team_member_4.jpg', 3, 'http://www.facebook.com', NULL, NULL, NULL, 'http://www.facebook.com', NULL, 'http://www.facebook.com', '2021-10-31 05:03:45', '2021-10-31 05:03:46'),
(5, 'Iskil Saho', 'team_member_5.jpg', 3, NULL, 'http://www.facebook.com', NULL, NULL, 'http://www.facebook.com', 'http://www.facebook.com', NULL, '2021-10-31 08:32:34', '2021-10-31 08:32:35');

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
(1, 'John Doe', 'Managing Director', 'ABC Inc.', 'testimonial_1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.', '2021-10-30 12:20:29', '2021-11-22 10:38:31'),
(2, 'Dadiv Smith', 'CEO', 'SS Multimedia', 'testimonial_2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.', '2021-10-31 05:48:06', '2021-10-31 05:48:06'),
(3, 'Stefen Carman', 'Chairman', 'GH Group', 'testimonial_3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.', '2021-10-31 05:48:49', '2021-10-31 05:48:49'),
(4, 'Gary Brent', 'CFO', 'XYZ It Solution', 'testimonial_4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.', '2021-10-31 05:51:23', '2021-10-31 05:51:23');

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
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user.png',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `photo`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Np5D4f3E4/aGK7imVQXA/.zlhEyOdItxhou.mbLJDObLoP7vjYNHi', '41', 'user_1.jpg', '1', 'unactive', 'Jm0qD9hYTJw1OvkwHtuE9cM4EPTot1hcYpvX9MdfSfd5nTtt3pwfPTPqMEWb', '2021-10-01 04:31:30', '2021-11-28 15:09:13');

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
(1, 'why_choose_1.png.png', 'Brute altera causae ne sed cum no', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.Sea ocurreret principes ne.', '2021-10-30 12:46:47', '2021-10-30 12:47:03'),
(2, 'why_choose_2.png', 'Liber utroque vim an, ne his brute', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.Sea ocurreret principes ne.', '2021-10-31 05:33:07', '2021-10-31 05:33:08'),
(3, 'why_choose_3.png', 'Vix tale noluisse voluptua ad ne', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.Sea ocurreret principes ne.', '2021-10-31 05:33:32', '2021-10-31 05:33:32'),
(4, 'why_choose_4.png', 'Mei ut errem legimus, periculis eos', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.Sea ocurreret principes ne.', '2021-10-31 05:34:12', '2021-10-31 05:34:13');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_photos`
--
ALTER TABLE `portfolio_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_chooses`
--
ALTER TABLE `why_chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
