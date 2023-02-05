-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2023 at 12:11 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `photo`) VALUES
(5, '20db093ab926d030b16d9c2aedc6f094.png');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `text` varchar(255) COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `text`, `photo`) VALUES
(1, '-', '-', 'a8be6b10c3a259ef7b0bbb5ec3e4112d.jpg'),
(2, '-', '-', '0b3e4d34edae1c4c735a13eb42635ede.jpg'),
(3, '-', '-', 'e0c3ecbe426b8b09ea6421d29e37e9dd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bg_majors`
--

DROP TABLE IF EXISTS `bg_majors`;
CREATE TABLE IF NOT EXISTS `bg_majors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `bg_majors`
--

INSERT INTO `bg_majors` (`id`, `photo`) VALUES
(1, '60c605047a6f999c7b563da81cbc6125.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE IF NOT EXISTS `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `photo`) VALUES
(11, '-', '-20230104182551.jpg'),
(12, '-', '-20230104182602.jpg'),
(13, '-', '-20230104182616.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

DROP TABLE IF EXISTS `identity`;
CREATE TABLE IF NOT EXISTS `identity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `meta_description` mediumtext COLLATE utf8_bin NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`id`, `meta_title`, `meta_description`, `meta_keyword`, `photo`) VALUES
(1, '', 'Himbauan untuk siswa dan siswi SMK ASY-SYUHADA ROESLY  untuk tetap fokus untuk belajar dengan baik, amanah, serta berakhlak mulia.', 'SMK ASY-SYUHADA ROESLY', '18efe02e7fcc5c6a4ee8c619e501a7d9.png');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL,
  `login` varchar(100) COLLATE utf8_bin NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `subject` varchar(255) COLLATE utf8_bin NOT NULL,
  `data` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

DROP TABLE IF EXISTS `majors`;
CREATE TABLE IF NOT EXISTS `majors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `url` varchar(100) COLLATE utf8_bin NOT NULL,
  `icon` varchar(100) COLLATE utf8_bin NOT NULL,
  `is_active` char(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `user_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Web Settings', '', 'fas fa-fw fa-cog', 'Y'),
(2, 2, 'الخطة السنوية', 'jadwal', 'fas fa-fw fa-users', 'Y'),
(3, 2, 'أدارة المحتوى', '', 'fas fa-fw fa-school', 'Y'),
(4, 2, 'الهيكلية الأدارية', 'struktur', 'fas fa-fw fa-sitemap', 'Y'),
(5, 1, 'أدارة المستخدمين', 'user', 'fas fa-fw fa-user', 'Y'),
(6, 2, 'الصفحة الشخصية', '', 'fas fa-fw fa-home', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `opening`
--

DROP TABLE IF EXISTS `opening`;
CREATE TABLE IF NOT EXISTS `opening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` mediumtext COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `opening`
--

INSERT INTO `opening` (`id`, `content`, `photo`) VALUES
(1, 'مرحبا بكم في بلدية جبع', '556cce02b791c8f25467f509ac7f47c5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `seo_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` mediumtext COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  `is_active` char(1) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `seo_title` (`seo_title`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `seo_title`, `content`, `photo`, `is_active`, `date`) VALUES
(13, 'الهلال الأحمر الأماراتي', 'n-a', 'متابعات بلدية جبع\r\nمراجعة وتقييم اللجنة الفنية لعطاء الطرق', '-20230104170916.jpg', 'Y', '2023-01-07'),
(14, 'توسعة الطرق', '14', 'توسعة الطرق', '-20230104170953.jpg', 'Y', '2023-01-04'),
(15, 'مرحبا', 'n-a', 'رازي', 'مرحبا-20230107075359.jpeg', 'Y', '2023-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

DROP TABLE IF EXISTS `structure`;
CREATE TABLE IF NOT EXISTS `structure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`id`, `photo`) VALUES
(1, '0a9a0c2cabfd87f0b94e4c30a00242b6.png');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

DROP TABLE IF EXISTS `submenus`;
CREATE TABLE IF NOT EXISTS `submenus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `sub_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `sub_url` varchar(100) COLLATE utf8_bin NOT NULL,
  `is_active` char(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `sub_title`, `sub_url`, `is_active`) VALUES
(1, 1, 'Identitas Web', 'identitas', 'Y'),
(2, 1, 'الكلمة الترحيبية', 'sambutan', 'Y'),
(3, 3, 'الخلفيات المتحركة', 'banner', 'Y'),
(4, 3, 'صور للبلدة', 'fasilitas', 'Y'),
(5, 3, 'الأخبار', 'berita', 'Y'),
(6, 3, 'الخلفية الرئيسية', 'background', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(254) COLLATE utf8_bin NOT NULL,
  `activation_selector` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `activation_code` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `forgotten_password_selector` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `forgotten_password_code` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `remember_code` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$63pqg8Mtq8ABN3c59RD2.OLMNLSV2hEij7bo1n59XNQFoM/xSz.iS', 'admin@mail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1673077575, 1, 'Tegar', 'Pratama', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(36, 1, 1),
(37, 1, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
