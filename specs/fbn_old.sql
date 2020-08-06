-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 31, 2020 at 07:55 AM
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
CREATE DATABASE IF NOT EXISTS `fbn` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fbn`;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `ingredient_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id of ingredient',
  `ingredient_name` varchar(60) NOT NULL COMMENT 'description of ingredient',
  `nutriscore_quality` varchar(1) DEFAULT NULL COMMENT 'nutritional rating from A to F',
  `food_category_id` int(11) DEFAULT NULL COMMENT 'id of food category',
  `picture` varchar(250) NOT NULL COMMENT 'picture of ingredient',
  `created` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'creation timestamp',
  PRIMARY KEY (`ingredient_id`),
  UNIQUE KEY `UK_name` (`ingredient_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'unike post identifier',
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
  `article` tinyint(1) DEFAULT 0 COMMENT 'is an article',
  `reference` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'bibliographic reference reference',
  PRIMARY KEY (`post_id`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`posted`,`post_id`),
  KEY `post_parent` (`parent_post_id`),
  KEY `post_author` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_recipe`
--

DROP TABLE IF EXISTS `post_recipe`;
CREATE TABLE IF NOT EXISTS `post_recipe` (
  `post_id` bigint(20) UNSIGNED NOT NULL COMMENT 'post referred by',
  `recipe_id` int(11) NOT NULL COMMENT 'recipe referred by',
  `comment` varchar(2000) NOT NULL COMMENT 'comment on posted recipe',
  PRIMARY KEY (`post_id`,`recipe_id`),
  KEY `recipe_id` (`recipe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `recipe_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of recipe',
  `author_id` bigint(20) UNSIGNED NOT NULL COMMENT 'user posing recipe',
  `recipe_name` varchar(200) NOT NULL COMMENT 'description of recipe',
  `recipe_status` varchar(10) NOT NULL,
  `recipe_description` varchar(5000) DEFAULT NULL,
  `recipe_picture` varchar(250) DEFAULT NULL COMMENT 'main picture of recipe',
  `nutritional_score` varchar(1) DEFAULT NULL COMMENT 'nutriscore A TO F',
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'last updated',
  `difficulty` int(11) DEFAULT NULL COMMENT 'degree of difficulty',
  PRIMARY KEY (`recipe_id`),
  UNIQUE KEY `UK_name_user_id` (`recipe_id`,`recipe_name`),
  KEY `idx_author` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recipes_ingredients`
--

DROP TABLE IF EXISTS `recipes_ingredients`;
CREATE TABLE IF NOT EXISTS `recipes_ingredients` (
  `recipe_id` int(11) NOT NULL COMMENT 'id of recipe',
  `ingredient_id` bigint(20) NOT NULL COMMENT 'id of ingredient',
  `qty` float NOT NULL COMMENT 'quantity of ingredient in recipe',
  `unit` varchar(20) NOT NULL COMMENT 'measurement unit',
  PRIMARY KEY (`recipe_id`,`ingredient_id`),
  KEY `ingredient_id` (`ingredient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id of user',
  `user_login` varchar(60) NOT NULL COMMENT 'login or email',
  `user_pass` varchar(255) NOT NULL,
  `registered` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'registration timestamp',
  `role` varchar(10) NOT NULL DEFAULT 'poster' COMMENT 'admin, moderator or poster',
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'last time updated',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UK_login` (`user_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_recipe_rating`
--

DROP TABLE IF EXISTS `user_recipe_rating`;
CREATE TABLE IF NOT EXISTS `user_recipe_rating` (
  `recipe_id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_score` varchar(1) DEFAULT NULL COMMENT 'score A to F',
  `user_comment` varchar(2000) DEFAULT NULL,
  `score_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'timestamp of comment',
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'last update timestamp',
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`recipe_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `post_recipe`
--
ALTER TABLE `post_recipe`
  ADD CONSTRAINT `post_recipe_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `post_recipe_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`) ON UPDATE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `recipes_ingredients`
--
ALTER TABLE `recipes_ingredients`
  ADD CONSTRAINT `recipes_ingredients_ibfk_1` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`ingredient_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `recipes_ingredients_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_recipe_rating`
--
ALTER TABLE `user_recipe_rating`
  ADD CONSTRAINT `user_recipe_rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
