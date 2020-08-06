-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2020 at 08:01 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fbn`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Language_id` int(11) NOT NULL DEFAULT 2 COMMENT 'language of comment',
  `post_id` bigint(20) UNSIGNED NOT NULL COMMENT 'post commented upon',
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'user commenting',
  `content` text NOT NULL COMMENT 'content of comment',
  `commented` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'timestamp of comment',
  `approved_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_comment_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'originating comment if any',
  `approved` timestamp NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'timestamp of approval',
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `Language_id` (`Language_id`),
  KEY `fk_user` (`user_id`) USING BTREE,
  KEY `fk_post` (`post_id`) USING BTREE,
  KEY `fk_approver` (`approved_user_id`) USING BTREE,
  KEY `fk_comment` (`parent_comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id of ingredient',
  `language_id` int(11) NOT NULL DEFAULT 2 COMMENT 'translation language',
  `name` varchar(60) NOT NULL COMMENT 'description of ingredient',
  `nutriscore` varchar(2) DEFAULT NULL COMMENT 'health score',
  `food_category_id` int(11) DEFAULT NULL COMMENT 'id of food category',
  `picture` varchar(250) NOT NULL COMMENT 'picture of ingredient',
  `created` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'creation timestamp',
  PRIMARY KEY (`ID`,`language_id`) USING BTREE,
  UNIQUE KEY `UK_name_language` (`name`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `ID` int(11) NOT NULL,
  `iso` varchar(2) NOT NULL,
  `flag` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`ID`, `iso`, `flag`) VALUES
(1, 'LU', ''),
(2, 'EN', ''),
(3, 'FR', ''),
(4, 'DE', ''),
(5, 'PO', ''),
(6, 'IT', ''),
(7, 'ES', ''),
(8, 'NL', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'unike post identifier',
  `language_id` int(11) NOT NULL DEFAULT 2,
  `author_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'user id of the author',
  `posted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'posted date',
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'contents text',
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'post title',
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'summary',
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish' COMMENT 'status of post',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open' COMMENT 'status of comment',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'name of post',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp() COMMENT 'date of last modification',
  `parent_post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'id of original post',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'graphical user interface id',
  `menu_order` int(11) NOT NULL DEFAULT 0 COMMENT 'order in the menu',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post' COMMENT 'type of post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'mime content type',
  `comment_count` bigint(20) NOT NULL DEFAULT 0 COMMENT 'number of comments',
  `reference` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'bibliographic or url reference reference',
  PRIMARY KEY (`ID`,`language_id`) USING BTREE,
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`posted`,`ID`),
  KEY `post_parent` (`parent_post_id`),
  KEY `post_author` (`author_id`),
  KEY `language_id` (`language_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `post_ID` bigint(20) UNSIGNED NOT NULL COMMENT 'posted recipe',
  `ingredient_id` bigint(20) UNSIGNED NOT NULL COMMENT 'recipe ingredient',
  PRIMARY KEY (`post_ID`,`ingredient_id`),
  KEY `ingredient_id` (`ingredient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id of user',
  `language_id` int(11) NOT NULL DEFAULT 2,
  `email` varchar(60) NOT NULL COMMENT 'email',
  `pass` varchar(255) DEFAULT NULL,
  `registered` timestamp NULL DEFAULT current_timestamp() COMMENT 'registration timestamp',
  `role` varchar(10) NOT NULL DEFAULT 'poster' COMMENT 'admin, moderator or poster',
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'last time updated',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UK_login` (`email`),
  KEY `idx_language` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`Language_id`) REFERENCES `language` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_4` FOREIGN KEY (`parent_comment_id`) REFERENCES `comment` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `language` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`parent_post_id`) REFERENCES `post` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`post_ID`) REFERENCES `post` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `recipe_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `language` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
