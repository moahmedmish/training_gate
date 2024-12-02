-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 10:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roma`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'رخام', 'Marble', NULL, '2024-11-07 17:14:40', '2024-11-07 17:14:40'),
(2, 'جرانيت', 'Granite', NULL, '2024-11-07 17:17:23', '2024-11-07 17:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name_ar`, `name_en`, `logo`, `url`, `created_at`, `updated_at`) VALUES
(1, 'عميل', 'client', 'images/clients/8-black.png-672cfa6accee8.png', 'https://www.example.com/', '2024-11-07 15:28:06', '2024-11-07 15:35:38'),
(2, 'عميل2', 'client2', 'images/clients/7-black.png-672cfad251615.png', 'https://www.example.com/', '2024-11-07 15:37:22', '2024-11-07 15:37:22'),
(3, 'عميل3', 'client3', 'images/clients/3-white.png-672cfaeb590b4.png', 'https://www.example.com/', '2024-11-07 15:37:47', '2024-11-07 15:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'salovojaz', 'nygezafora@mailinator.com', NULL, NULL, 'Ipsa quod cupidatat', '2024-10-29 18:31:44', '2024-10-29 18:31:44');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `categoryy` enum('Marble','Stone','Onyx','Granite') NOT NULL,
  `summary_ar` varchar(255) DEFAULT NULL,
  `summary_en` varchar(255) DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 32144213,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `video_url`, `title_ar`, `title_en`, `categoryy`, `summary_ar`, `summary_en`, `order`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'images/galleries/ونتر_وايت.png-672d68ef2acf2.png', NULL, 'ونتر وايت', 'walter white', 'Marble', 'عربى عربى عربى', 'Minus numquam modi e', 69, '2024-10-29 04:44:26', '2024-11-07 23:27:11', 1),
(5, 'images/galleries/White_wavy_(1).jpg-672d673e57000.jpg', NULL, 'جرانيت ابيض مموج', 'white wavy', 'Granite', 'صورة صورة صورة', 'Ex adipisci corrupti', 29, '2024-10-29 04:45:16', '2024-11-07 23:19:58', 2),
(6, 'images/galleries/tiger_red.png-672d67c943228.png', NULL, 'جرانيت احمر تايجر', 'tiger red', 'Granite', 'ايمدج ايمدج ايمدج', 'Aspernatur dignissim', 16, '2024-10-29 04:45:30', '2024-11-07 23:22:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `joins`
--

CREATE TABLE `joins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `role_ar` varchar(255) DEFAULT NULL,
  `role_en` varchar(255) DEFAULT NULL,
  `notes_ar` text DEFAULT NULL,
  `notes_en` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `image`, `banner`, `name_ar`, `name_en`, `type`, `role_ar`, `role_en`, `notes_ar`, `notes_en`, `created_at`, `updated_at`) VALUES
(1, 'images/members/1.jpg-672d021a7ce39.jpg', NULL, 'عمر الاديب', 'Omar aladib', 'ش', 'مدير', 'manager', NULL, NULL, '2024-11-07 16:08:26', '2024-11-09 03:39:35'),
(2, 'images/members/5.jpg-672f276c2a92b.jpg', NULL, 'ايمن الطويل', 'Ayman altawil', NULL, 'مدير', 'manager', NULL, NULL, '2024-11-09 03:42:12', '2024-11-09 03:42:12');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_12_191334_create_sliders_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2024_10_12_230433_create_services_table', 3),
(9, '2024_10_12_231104_create_tests_table', 4),
(11, '2024_10_19_145850_create_pages_table', 5),
(12, '2024_10_19_202504_create_settings_table', 6),
(13, '2024_10_23_202925_create_members_table', 7),
(15, '2024_10_26_175846_create_photo_settings_table', 8),
(16, '2024_10_28_103619_create_galleries_table', 9),
(17, '2024_10_29_211832_create_contacts_table', 10),
(18, '2024_10_31_202141_create_projects_table', 11),
(20, '2024_10_31_235837_create_project_photos_table', 12),
(21, '2024_11_07_164050_create_clients_table', 13),
(22, '2024_11_07_190750_create_categories_table', 14),
(26, '2024_11_09_144847_create_joins_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner1` varchar(255) DEFAULT NULL,
  `banner2` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) NOT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) NOT NULL,
  `summary_ar` text DEFAULT NULL,
  `summary_en` text DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `publish` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `on_menu` tinyint(4) DEFAULT NULL,
  `menu_order` tinyint(4) DEFAULT NULL,
  `route_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `image`, `banner1`, `banner2`, `title_ar`, `video_url`, `title_en`, `summary_ar`, `summary_en`, `description_ar`, `description_en`, `publish`, `created_at`, `updated_at`, `on_menu`, `menu_order`, `route_name`) VALUES
(1, 'images/pages/Screenshot_2024-11-02_16-27-51.png-672637b3015cc.png', 'images/pages/Screenshot_2024-11-02_16-30-43.png-672637b350fb5.png', 'images/pages/Screenshot_2024-11-02_16-30-25.png-672637b3b4ba5.png', 'عن الشركة', 'https://www.youtube.com/watch?v=NrtwBO_nyFA', 'About Us', 'شركة روما الدولية تأسست في عام 1995 و هي من أبرز المستوردين و الموزعين للرخام والجرانيت الطبيعي والصناعي) و الحجر الطبيعي من كافة أنحاء العالم إيطاليا - أسبانيا - البرتغال البرازيل) بالإضافة إلى معظم دول الخليج العربي و قارة آسيا. نمت شركة روما الدولية وتوسعت بقوة لتصبح نموذجاً عالمياً في هذه الصناعة حيث تقدم المجموعة الأكثر تنوعا من الجرانيت والحجر والرخام مع أكثر من 450 صنف للإختيار من بينها. تمیزت شركة روما بالحصول على الفئة (أ) في القسم الهندسي و قسم المقاولات التابع لها وذلك يرجع إلى دعمه بعدد هائل من المتخصصين المعماريين المدنيين - الرسامين ( القائمين بدور مثالي في تنفيذ كافة المشاريع المساهمة أو المخصصة في ذات المجال الخاص بهم وتسليمها على الوجة الأكمل من الإزدهار و التوسع العمراني كما تعتني شركة روما الدولية بكل الفئات العاملة حيث أن الأقسام المخصصة بالتركيب مزودة بأمهر عمالة فنية متخصصة بكافة أنواع التركيب بالإضافة إلى تجميع جميع الأعمال الفنية تحرص شركة روما الدولية على مواكبة الطفرة العمرانية القائمة بدولة الكويت وخارجها على المستوى الدولي حيث ساعدت المعايير العالية للإنتاج والأسعار التنافسية و استراتيجية رعاية العملاء الواسعة على اكتساب سمعة واحدة من أكثر الشركات الموثوقة التي تحتل مكانة تنافسية في الأسواق الوطنية', 'Roma International Company was established in 1995 and is one of the leading importers and distributors of natural and artificial marble and granite and natural stone from all over the world (Italy - Spain - Portugal - Brazil) in addition to most of the Gulf countries and the Asian continent. Roma International Company has grown and expanded strongly to become a global model in this industry, offering the most diverse range of granite, stone and marble with more than 450 varieties to choose from. Roma Company has been distinguished by obtaining the (A) category in the engineering department and its contracting department, due to its support by a huge number of civil architects and draftsmen (who play an ideal role in implementing all projects contributed or allocated in their own field and delivering them in the most complete manner of prosperity and urban expansion. Roma International Company also takes care of all working categories, as the departments designated for installation are equipped with the most skilled technical workers specialized in all types of installation, in addition to assembling all technical works. Roma International Company is keen to keep pace with the urban boom taking place in the State of Kuwait and abroad at the international level, as the high standards of production, competitive prices and the broad customer care strategy have helped to gain a reputation as one of the most reliable companies that occupies a competitive position in the national markets.', 'شركة روما الدولية تأسست في عام 1995 و هي من أبرز المستوردين و الموزعين للرخام والجرانيت الطبيعي والصناعي) و الحجر الطبيعي من كافة أنحاء العالم إيطاليا - أسبانيا - البرتغال البرازيل) بالإضافة إلى معظم دول الخليج العربي و قارة آسيا. نمت شركة روما الدولية وتوسعت بقوة لتصبح نموذجاً عالمياً في هذه الصناعة حيث تقدم المجموعة الأكثر تنوعا من الجرانيت والحجر والرخام مع أكثر من 450 صنف للإختيار من بينها. تمیزت شركة روما بالحصول على الفئة (أ) في القسم الهندسي و قسم المقاولات التابع لها وذلك يرجع إلى دعمه بعدد هائل من المتخصصين المعماريين المدنيين - الرسامين ( القائمين بدور مثالي في تنفيذ كافة المشاريع المساهمة أو المخصصة في ذات المجال الخاص بهم وتسليمها على الوجة الأكمل من الإزدهار و التوسع العمراني كما تعتني شركة روما الدولية بكل الفئات العاملة حيث أن الأقسام المخصصة بالتركيب مزودة بأمهر عمالة فنية متخصصة بكافة أنواع التركيب بالإضافة إلى تجميع جميع الأعمال الفنية تحرص شركة روما الدولية على مواكبة الطفرة العمرانية القائمة بدولة الكويت وخارجها على المستوى الدولي حيث ساعدت المعايير العالية للإنتاج والأسعار التنافسية و استراتيجية رعاية العملاء الواسعة على اكتساب سمعة واحدة من أكثر الشركات الموثوقة التي تحتل مكانة تنافسية في الأسواق الوطنية', 'Roma International Company was established in 1995 and is one of the leading importers and distributors of natural and artificial marble and granite and natural stone from all over the world (Italy - Spain - Portugal - Brazil) in addition to most of the Gulf countries and the Asian continent. Roma International Company has grown and expanded strongly to become a global model in this industry, offering the most diverse range of granite, stone and marble with more than 450 varieties to choose from. Roma Company has been distinguished by obtaining the (A) category in the engineering department and its contracting department, due to its support by a huge number of civil architects and draftsmen (who play an ideal role in implementing all projects contributed or allocated in their own field and delivering them in the most complete manner of prosperity and urban expansion. Roma International Company also takes care of all working categories, as the departments designated for installation are equipped with the most skilled technical workers specialized in all types of installation, in addition to assembling all technical works. Roma International Company is keen to keep pace with the urban boom taking place in the State of Kuwait and abroad at the international level, as the high standards of production, competitive prices and the broad customer care strategy have helped to gain a reputation as one of the most reliable companies that occupies a competitive position in the national markets.', 1, '2024-10-19 15:16:30', '2024-11-09 08:09:10', 1, 1, 'about'),
(2, 'images/pages/Screenshot_2024-11-02_16-26-10.png-67263d51e4141.png', 'images/pages/Screenshot_2024-11-02_16-30-25.png-67263d524d0ec.png', 'images/pages/Screenshot_2024-11-02_16-29-13.png-67263d52a5002.png', 'الخدمات', NULL, 'Services', 'test', 'test', 'تست', 'تست', 1, '2024-11-02 12:55:15', '2024-11-02 12:55:15', 1, 2, 'service-details'),
(3, 'images/pages/Screenshot_2024-11-02_16-38-53.png-672693f8f04be.png', 'images/pages/Screenshot_2024-11-02_16-29-13.png-672693f914011.png', 'images/pages/Screenshot_2024-11-02_16-28-56.png-672693f987640.png', 'مجموعاتنا', NULL, 'our collection', 'مجموعاتنا', 'our collection', 'مجموعاتنا', 'our collection', 1, '2024-11-02 19:04:58', '2024-11-02 19:05:24', 1, 3, 'collection'),
(4, 'images/pages/Screenshot_2024-11-02_16-13-23.png-6726948a2e522.png', 'images/pages/Screenshot_2024-11-02_16-15-25.png-6726948b3d627.png', 'images/pages/Screenshot_2024-11-02_16-13-23.png-6726948c1cda7.png', 'المشاريع', NULL, 'projects', 'المشاريع', 'projects', 'المشاريع', 'projects', 1, '2024-11-02 19:07:25', '2024-11-02 19:07:25', 1, 4, 'project-details'),
(5, 'images/pages/Screenshot_2024-11-02_16-38-11.png-672694e32cd10.png', 'images/pages/Screenshot_2024-11-02_16-38-53.png-672694e33f04d.png', 'images/pages/Screenshot_2024-11-02_16-44-34.png-672694e356637.png', 'كتالوج', NULL, 'catalog', 'كتالوج', 'catalog', 'كتالوج', 'catalog', 1, '2024-11-02 19:08:51', '2024-11-02 20:50:05', 1, 5, 'catalog'),
(6, 'images/pages/Screenshot_2024-11-02_16-26-10.png-672695525283e.png', 'images/pages/Screenshot_2024-11-02_16-15-25.png-67269552affcd.png', 'images/pages/Screenshot_2024-11-02_16-13-23.png-672695538e8db.png', 'إتصل بنا', NULL, 'contact us', 'إتصل بنا', 'contact us', 'إتصل بنا', 'contact us', 1, '2024-11-02 19:10:00', '2024-11-02 19:10:54', 1, 6, 'contact'),
(7, 'images/pages/interior_.png-672f6513daa6b.png', 'images/pages/Screenshot_2024-11-02_16-30-43.png-672f651417139.png', 'images/pages/Screenshot_2024-11-02_16-29-13.png-672f65149047b.png', 'إنضم إلينا', NULL, 'Join us', NULL, NULL, NULL, NULL, 1, '2024-11-09 08:05:17', '2024-11-09 08:05:17', 1, 7, 'join');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `photo_settings`
--

CREATE TABLE `photo_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `recommended_dimensions` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_settings`
--

INSERT INTO `photo_settings` (`id`, `name`, `image`, `created_at`, `updated_at`, `recommended_dimensions`) VALUES
(2, 'top banner background', 'images/photo_settings/Screenshot_2024-11-02_16-09-04.png-67263babe4a9f.png', '2024-10-26 15:18:54', '2024-11-07 13:42:38', '1395x726'),
(3, 'before', 'images/photo_settings/before.jpg-671d34ce544cf.jpg', '2024-10-26 15:28:30', '2024-11-07 13:43:07', '1280x853'),
(4, 'after', 'images/photo_settings/after.jpg-671d34df49e6b.jpg', '2024-10-26 15:28:47', '2024-11-07 13:43:15', '1280x853'),
(5, 'middle banner background', 'images/photo_settings/Screenshot_2024-11-02_16-09-04.png-67268ee6a27ff.png', '2024-10-26 15:34:38', '2024-11-07 13:44:43', '1395x1442'),
(9, 'logo_en', 'images/photo_settings/Baraa_Project.png-673a557b5e0e0.png', '2024-11-01 00:21:25', '2024-11-17 17:43:39', '120x50'),
(10, 'contact banner', 'images/photo_settings/Screenshot_2024-11-02_16-09-04.png-672cd2a52d37c.png', '2024-11-01 02:23:07', '2024-11-07 12:45:57', '1395x455'),
(11, 'logo_ar', 'images/photo_settings/Baraa_Project.png-673a556c5c4d5.png', '2024-11-02 09:40:53', '2024-11-17 17:43:24', '120x50'),
(12, 'overlay slider banner', 'images/photo_settings/Screenshot_2024-11-02_16-09-04.png-672632c944d97.png', '2024-11-02 12:10:18', '2024-11-02 12:10:18', '1393x632'),
(13, 'home footer background', 'images/photo_settings/Screenshot_2024-11-02_16-09-04.png-672ccd6cd58f4.png', '2024-11-07 12:23:41', '2024-11-07 12:23:41', '1395x1442');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `category` enum('exterior','interior','washbasins','flooring','stairs','table','others') NOT NULL,
  `summary_ar` text NOT NULL,
  `summary_en` text NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `banner`, `image`, `title_ar`, `title_en`, `category`, `summary_ar`, `summary_en`, `order`, `created_at`, `updated_at`) VALUES
(1, 'images/projects/exteriorbann11.png-672d6f289fa08.png', 'images/projects/exteriorbann221.png-672d6f28e8a03.png', 'أعمال خارجية', 'exterior', 'exterior', 'اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية  اضافة مشروع من نوع أعمال خارجية', 'exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary \r\nexterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary exterior project type summary', 1, '2024-10-31 19:20:42', '2024-11-07 23:53:45'),
(2, 'images/projects/interior_banner1.png-672d712654e98.png', 'images/projects/interior_banner221.png-672d7126a59e9.png', 'أعمال داخلية', 'interior', 'interior', 'أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية \r\n\r\nأعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية أعمال داخلية', 'interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details interior project details', 2, '2024-11-01 03:34:29', '2024-11-08 00:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `project_photos`
--

CREATE TABLE `project_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_photos`
--

INSERT INTO `project_photos` (`id`, `image`, `title_ar`, `title_en`, `created_at`, `updated_at`, `project_id`) VALUES
(3, 'images/pages/exterior1.png-672d6f526996f.png', 'تست', 'asfd', '2024-10-31 22:51:43', '2024-11-07 23:54:26', 1),
(4, 'images/pages/exterior11.png-672d6f5c4f7c9.png', 'تست تست', 'asdfasf', '2024-10-31 22:51:57', '2024-11-07 23:54:36', 1),
(5, 'images/pages/interior_.png-672d713e7bfd7.png', 'تست', 'test', '2024-11-01 03:35:57', '2024-11-08 00:02:38', 2),
(6, 'images/pages/interio123r_.png-672d71550332c.png', 'تست', 'asfd', '2024-11-01 03:36:25', '2024-11-08 00:03:01', 2),
(7, 'images/pages/exterior.png-672d6f6b7f2e2.png', 'Nam architecto atque', 'Est eius duis quia n', '2024-11-02 10:36:38', '2024-11-07 23:54:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `summary_ar` text NOT NULL,
  `summary_en` text NOT NULL,
  `desc_ar` text NOT NULL,
  `desc_en` text NOT NULL,
  `publish` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `banner`, `title_ar`, `title_en`, `summary_ar`, `summary_en`, `desc_ar`, `desc_en`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'images/services/Screenshot_2024-11-02_16-36-44.png-67263908cc1b9.png', 'images/services/Screenshot_2024-11-02_16-29-13.png-6726388668703.png', 'نحن نورد', 'We Supply', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\nهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\nهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 translation by H. Rackham\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', 1, '2024-10-23 20:51:49', '2024-11-02 12:36:56'),
(2, 'images/services/Screenshot_2024-11-02_16-38-11.png-672639655cdb4.png', 'images/services/Screenshot_2024-11-02_16-28-56.png-67263891a23de.png', 'نحن نخطط', 'We Draw', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\nهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\nهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 translation by H. Rackham\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', 1, '2024-10-26 15:55:56', '2024-11-02 12:38:29'),
(3, 'images/services/Screenshot_2024-11-02_16-38-53.png-6726398b74c11.png', 'images/services/Screenshot_2024-11-02_16-30-25.png-6726389bde9dd.png', 'نحن نصنع', 'We Manufacture', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\nهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\nهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 translation by H. Rackham\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', 1, '2024-10-26 16:00:06', '2024-11-02 12:39:07'),
(4, 'images/services/Screenshot_2024-11-02_16-44-34.png-67263b6345570.png', 'images/services/Screenshot_2024-11-02_16-44-34.png-67263b635af48.png', 'نحن نثبت', 'we install', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\nهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\nهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 translation by H. Rackham\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', 1, '2024-11-02 12:46:59', '2024-11-02 12:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `value` varchar(500) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `path`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://facebook.com', 'global', '2024-10-19 17:29:38', '2024-10-19 17:29:38'),
(2, 'years of experience', '30', 'global', '2024-10-26 18:39:10', '2024-10-29 17:29:37'),
(3, 'types of natural stone', '450', 'global', '2024-10-26 18:39:30', '2024-10-29 17:45:36'),
(4, 'm2 of natural stone in stock', '55000', 'global', '2024-10-26 18:40:01', '2024-10-29 17:42:05'),
(5, 'site_title_en', 'TRAINING GATE INTERNATIONAL', 'global', '2024-10-28 05:47:42', '2024-11-11 17:42:55'),
(6, 'site_title_ar', 'TRAINING GATE INTERNATIONAL', 'global', '2024-10-28 05:49:36', '2024-11-11 17:42:02'),
(7, 'meta_description_ar', 'TRAINING GATE INTERNATIONAL', 'global', '2024-10-28 05:51:13', '2024-11-11 17:42:33'),
(8, 'meta_description_en', 'TRAINING GATE INTERNATIONAL', 'global', '2024-10-28 05:51:27', '2024-11-11 17:42:45'),
(9, 'contact email', 'purchase@romaintl.net', 'global', '2024-10-29 18:36:41', '2024-10-29 19:03:21'),
(10, 'contact location', '10 abc st. elraml alexandria', 'global', '2024-10-29 18:36:52', '2024-10-29 19:04:13'),
(13, 'instagram', 'https://www.instagram.com/roma.int.marble/?hl=en', 'global', '2024-10-29 19:03:51', '2024-11-01 00:14:45'),
(14, 'landline phone', '+96524836072', 'global', '2024-10-29 19:04:34', '2024-11-01 02:31:07'),
(15, 'sales phone', '+96556527031', 'global', '2024-10-29 19:04:54', '2024-11-01 02:31:35'),
(16, 'address_en', 'Shuwaikh - suncity - Gate 4', 'global', '2024-10-29 19:05:15', '2024-11-01 02:32:08'),
(18, 'youtube', 'https://www.youtube.com/', 'global', '2024-11-01 00:11:10', '2024-11-09 08:25:14'),
(19, 'twitter', 'https://x.com/?lang=en&mx=2', 'global', '2024-11-01 00:12:03', '2024-11-01 00:12:03'),
(20, 'catalog', 'https://facebook.com', 'global', '2024-11-01 00:49:27', '2024-11-01 00:49:27'),
(21, 'address_ar', 'الشويخ الصناعية - شارع 26 مقابل تروفاليو قسيمة 65', 'global', '2024-11-01 02:32:32', '2024-11-01 02:32:32'),
(22, 'meta_keywords_en', 'Roma International Company, marble supplier Kuwait, granite supplier Kuwait, natural stone Kuwait, marble and granite supplier, stone materials Kuwait, competitive stone prices Kuwait, stone suppliers Gulf, Arabic marble supplier', NULL, '2024-11-09 06:20:16', '2024-11-09 06:20:16'),
(23, 'meta_keywords_ar', 'شركة روما العالمية، مورد رخام الكويت، مورد جرانيت الكويت، حجر طبيعي الكويت، مورد رخام وجرانيت، مواد حجرية الكويت، أسعار حجر تنافسية الكويت، موردو حجر الخليج، مورد رخام عربي', NULL, '2024-11-09 06:32:41', '2024-11-09 06:32:41'),
(24, 'meta_author_en', 'Roma International Company', NULL, '2024-11-09 06:35:18', '2024-11-09 06:35:18'),
(25, 'meta_author_ar', 'شركة روما العالمية', NULL, '2024-11-09 06:36:19', '2024-11-09 06:36:19'),
(26, 'meta_robots', 'index, follow', NULL, '2024-11-09 06:38:36', '2024-11-09 06:38:36'),
(27, 'og_title_en', 'Roma International Company | Leading Supplier of Marble, Granite, and Natural Stone in Kuwait', NULL, '2024-11-09 06:41:31', '2024-11-09 06:41:31'),
(28, 'og_title_ar', 'شركة روما العالمية | المورد الرائد للرخام والجرانيت والحجر الطبيعي في الكويت', NULL, '2024-11-09 06:42:05', '2024-11-09 06:42:05'),
(29, 'og_description_en', 'Roma International Company offers a wide range of marble, granite, and natural stone materials at competitive prices for clients across Kuwait.', NULL, '2024-11-09 06:43:38', '2024-11-09 06:43:38'),
(30, 'og_description_ar', 'تقدم شركة روما العالمية تشكيلة واسعة من مواد الرخام والجرانيت والحجر الطبيعي بأسعار تنافسية للعملاء في جميع أنحاء الكويت.', NULL, '2024-11-09 06:44:06', '2024-11-09 06:44:06'),
(31, 'tiktok', 'https://www.tiktok.com/en/', NULL, '2024-11-09 19:04:44', '2024-11-09 19:04:44'),
(32, 'google map', 'https://maps.app.goo.gl/W8CRCg4wYkK21GRo6', NULL, '2024-11-10 06:47:01', '2024-11-10 06:47:01'),
(33, 'Latitude', '29.3317056', NULL, '2024-11-10 07:02:04', '2024-11-10 07:02:04'),
(34, 'Longitude', '47.9432942', NULL, '2024-11-10 07:02:27', '2024-11-10 07:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) NOT NULL,
  `summary_ar` text NOT NULL,
  `summary_en` text NOT NULL,
  `publish` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title_ar`, `video_url`, `title_en`, `summary_ar`, `summary_en`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'images/sliders/Screenshot_2024-11-02_16-18-24.png-672634f405594.png', 'روما للرخام الطبيعى', 'afdadsf', 'Roma For Natural Stone', 'متخصصون في توريد وتركيب جميع أنواع الرخام والأحجار الطبيعية لمشروع البناء التجاري والسكني منذ عام 1995', 'Specializes in the supply and installation of all types of marble and natural stones for commercial and residential construction project since 1995', 1, '2024-10-12 16:30:42', '2024-11-02 12:19:32'),
(2, 'images/sliders/Screenshot_2024-11-02_16-15-25.png-6726353aea52d.png', 'صالة العرض لدينا', 'afdadsf', 'our showroom', 'يصاحب شركة روما الدولية صالة عرض تتكون من عدة أقسام تحتوي على العديد من الأنماط بمختلف أنواعها وألوانها من ( الحجر - و الرخام الطبيعي و الجرانيت ( بالإضافة إلى ذلك وجود قسم للرسومات والمنتجات الفنية العتيقة الخاصة بنا', 'Roma International Company is accompanied by a showroom consisting of several sections containing many styles of different types and colors of (stone - natural marble and granite) in addition to the presence of a section for our antique drawings and artistic products.', 1, '2024-10-12 16:30:42', '2024-11-02 12:20:43'),
(3, 'images/sliders/Screenshot_2024-11-02_16-13-23.png-67263547c61f4.png', 'مصنعنا', 'afdadsf', 'Our Factory', 'لدى شركة روما الدولية مصنع عملاق بمنطقة ( أمغرة ) يحتوي على کامل المعدات المطلوبة لتنفيذ جميع الأعمال الفنية للرخام و الجرانيت و الحجر الطبيعي و السيراميك و مجهز بمجموعة وفيرة من المهنيين من ذوي الخبرة العالية لتنفيذ كافة الأشغال', 'Roma International Company has a giant factory in the (Amghara) area that contains all the equipment required to implement all the technical works of marble, granite, natural stone and ceramics, and is equipped with an abundant group of highly experienced professionals to implement all the works.', 1, '2024-10-12 16:30:42', '2024-11-02 12:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$/VV6LgJpTMfOEC5UgVP.Te1139Mtvg1ID3p7qBU3QGGfRskd1HbAO', NULL, '2024-10-18 20:44:40', '2024-11-02 20:55:48'),
(2, 'Veronica Miller', 'zaxevomisu@mailinator.com', NULL, '$2y$12$2YVFvCfFre348.JRxSyAt.0zT0lTout70WqLcvtURBjf2Yefg0a/O', NULL, '2024-11-02 10:21:48', '2024-11-02 10:28:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joins`
--
ALTER TABLE `joins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photo_settings`
--
ALTER TABLE `photo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_photos`
--
ALTER TABLE `project_photos`
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
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `joins`
--
ALTER TABLE `joins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_settings`
--
ALTER TABLE `photo_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_photos`
--
ALTER TABLE `project_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
