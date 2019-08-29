-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 29, 2019 at 09:40 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timekli`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `document_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `reported` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_document_id_foreign` (`document_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `document_id`, `text`, `reported`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'If the picture has a nice caption- \"That caption defines you so well\"', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(2, 1, 2, 'Gorgeous', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(3, 1, 2, 'Beautiful', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(4, 2, 2, 'I am proud to have you as my best friend!', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(5, 2, 2, 'Love that!', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(6, 2, 2, 'I dont know what to say.This makes me speechless.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(7, 2, 2, 'My words cant define you.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(8, 2, 3, 'I dont know what to say because I am just bad at commenting beautiful pictures', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(9, 2, 3, 'Cute!(How did I forget this?)', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(10, 2, 3, 'Your beauty is irresistible!!', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(11, 2, 4, 'You look energetic.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(12, 2, 4, 'Impressive picture.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(13, 2, 4, 'You look strong and confident.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(14, 2, 4, 'This picture is lit!!', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(15, 2, 4, 'Adorable picture.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(16, 3, 4, 'Your smile makes me Happy.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(17, 3, 4, 'Looking Gorgeous .', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(18, 3, 4, 'This picture made my day.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(19, 3, 5, 'Your beauty has no boundaries.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(20, 3, 5, 'My word can’t describe this!!', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(21, 3, 2, 'Your eyes sparkle like something Ive never seen before.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(22, 3, 5, 'Youre beautiful as like your character.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(23, 3, 5, 'Youre young like your mind.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(24, 3, 5, 'I couldnt find a mistake in you, Gods best design youre.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(25, 3, 5, 'Dont be fool enough to think you can know a persons character after a few moments of observation. You cant. You have no idea where his life began or how his saga has unfolded thus far. Only h', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(26, 3, 5, 'A quote is not a conversation, but an invitation to change your perspective.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(27, 3, 5, 'I love you the more in that I believe you had liked me for my own sake and for nothing else.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(28, 3, 5, 'But man is not made for defeat. A man can be destroyed but not defeated.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(29, 3, 5, 'When you reach the end of your rope, tie a knot in it and hang on.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(30, 3, 5, 'There is nothing permanent except change.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(31, 3, 6, 'You cannot shake hands with a clenched fist.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(32, 4, 6, 'Let us sacrifice our today so that our children can have a better tomorrow.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(33, 4, 6, 'The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; an', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(34, 4, 6, 'Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(35, 4, 6, 'Learning never exhausts the mind.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(36, 4, 7, 'There is no charm equal to tenderness of heart.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(37, 4, 7, 'All that we see or seem is but a dream within a dream.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(38, 4, 7, 'Lord, make me an instrument of thy peace. Where there is hatred, let me sow love.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(39, 4, 7, 'The only journey is the one within.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(40, 4, 7, 'Good judgment comes from experience, and a lot of that comes from bad judgment.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(41, 4, 7, 'Life without love is like a tree without blossoms or fruit.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(42, 4, 7, 'Think in the morning. Act in the noon. Eat in the evening. Sleep in the night.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(43, 4, 8, 'No act of kindness, no matter how small, is ever wasted.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(44, 1, 8, 'Love cures people - both the ones who give it and the ones who receive it.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(45, 1, 8, 'Work like you dont need the money. Love like youve never been hurt. Dance like nobodys watching.', 0, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(46, 1, 8, 'If you cannot do great things, do fucking nothing.', 1, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(47, 2, 8, 'Independence is fucking happiness.', 1, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(48, 3, 8, 'The supreme art of war is to subdue the enemy without kicking his ass.', 1, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(49, 4, 9, 'Keep your face always toward the sunshine - and shadows will fall in your ass.', 1, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(50, 4, 10, 'Happiness can exist only when your are dead.', 1, '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(51, 4, 16, 'galigi garam shis', 0, '2018-06-18 07:36:58', '2018-06-18 07:36:58'),
(52, 1, 1, 'If the picture has a nice caption- \"That caption defines you so well\"', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(53, 1, 2, 'Gorgeous', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(54, 1, 2, 'Beautiful', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(55, 2, 2, 'I am proud to have you as my best friend!', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(56, 2, 2, 'Love that!', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(57, 2, 2, 'I dont know what to say.This makes me speechless.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(58, 2, 2, 'My words cant define you.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(59, 2, 3, 'I dont know what to say because I am just bad at commenting beautiful pictures', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(60, 2, 3, 'Cute!(How did I forget this?)', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(61, 2, 3, 'Your beauty is irresistible!!', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(62, 2, 4, 'You look energetic.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(63, 2, 4, 'Impressive picture.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(64, 2, 4, 'You look strong and confident.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(65, 2, 4, 'This picture is lit!!', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(66, 2, 4, 'Adorable picture.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(67, 3, 4, 'Your smile makes me Happy.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(68, 3, 4, 'Looking Gorgeous .', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(69, 3, 4, 'This picture made my day.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(70, 3, 5, 'Your beauty has no boundaries.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(71, 3, 5, 'My word can’t describe this!!', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(72, 3, 2, 'Your eyes sparkle like something Ive never seen before.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(73, 3, 5, 'Youre beautiful as like your character.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(74, 3, 5, 'Youre young like your mind.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(75, 3, 5, 'I couldnt find a mistake in you, Gods best design youre.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(76, 3, 5, 'Dont be fool enough to think you can know a persons character after a few moments of observation. You cant. You have no idea where his life began or how his saga has unfolded thus far. Only h', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(77, 3, 5, 'A quote is not a conversation, but an invitation to change your perspective.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(78, 3, 5, 'I love you the more in that I believe you had liked me for my own sake and for nothing else.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(79, 3, 5, 'But man is not made for defeat. A man can be destroyed but not defeated.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(80, 3, 5, 'When you reach the end of your rope, tie a knot in it and hang on.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(81, 3, 5, 'There is nothing permanent except change.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(82, 3, 6, 'You cannot shake hands with a clenched fist.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(83, 4, 6, 'Let us sacrifice our today so that our children can have a better tomorrow.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(84, 4, 6, 'The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; an', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(85, 4, 6, 'Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(86, 4, 6, 'Learning never exhausts the mind.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(87, 4, 7, 'There is no charm equal to tenderness of heart.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(88, 4, 7, 'All that we see or seem is but a dream within a dream.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(89, 4, 7, 'Lord, make me an instrument of thy peace. Where there is hatred, let me sow love.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(90, 4, 7, 'The only journey is the one within.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(91, 4, 7, 'Good judgment comes from experience, and a lot of that comes from bad judgment.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(92, 4, 7, 'Life without love is like a tree without blossoms or fruit.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(93, 4, 7, 'Think in the morning. Act in the noon. Eat in the evening. Sleep in the night.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(94, 4, 8, 'No act of kindness, no matter how small, is ever wasted.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(95, 1, 8, 'Love cures people - both the ones who give it and the ones who receive it.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(96, 1, 8, 'Work like you dont need the money. Love like youve never been hurt. Dance like nobodys watching.', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(97, 1, 8, 'If you cannot do great things, do fucking nothing.', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(98, 2, 8, 'Independence is fucking happiness.', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(99, 3, 8, 'The supreme art of war is to subdue the enemy without kicking his ass.', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(100, 4, 9, 'Keep your face always toward the sunshine - and shadows will fall in your ass.', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(101, 4, 10, 'Happiness can exist only when your are dead.', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1. Kurss', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(2, '2. Kurss', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(3, '3. Kurss', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(4, '4. Kurss', '2019-08-28 15:44:08', '2019-08-28 15:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `editor_id` int(10) UNSIGNED DEFAULT NULL,
  `directory_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_author_id_foreign` (`author_id`),
  KEY `documents_editor_id_foreign` (`editor_id`),
  KEY `documents_directory_id_foreign` (`directory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `description`, `author_id`, `editor_id`, `directory_id`, `path`, `is_accepted`, `created_at`, `updated_at`) VALUES
(1, 'Pirmā lekcija Algebrā', 'Pirmais mājasdarbs Algebras kursā. Tiek apskatīta Gausa metode.', 2, NULL, 1, 'Nedzest_1.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(2, 'Otrā lekcija Algebrā', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 2, NULL, 1, 'Nedzest_2.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(3, 'Trešā lekcija Algebrā', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 1, NULL, 1, 'Nedzest_3.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(4, 'Pirmā lekcija Tīmekļu tehnologijās 1', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 3, NULL, 2, 'Nedzest_4.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(5, 'Otrā lekcija Tīmekļu tehnologijās 1', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 3, 0, 2, 'Nedzest_5.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(6, 'Pirmā lekcija Tīmekļu tehnologijās 2', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 3, NULL, 5, 'Nedzest_6.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(7, 'Pirmā lekcija Diskrētajā Matemātikā 2', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 4, NULL, 4, 'Nedzest_7.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(8, 'Otrā lekcija Diskrētajā Matemātikā 2', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 4, NULL, 4, 'Nedzest_8.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(9, 'Trešā lekcija Diskrētajā Matemātikā 2', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 4, NULL, 5, 'Nedzest_9.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(10, 'Otrā lekcija Tīmekļu tehnologijās 2', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 3, NULL, 5, 'Nedzest_10.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(11, 'Trešā lekcija Tīmekļu tehnologijās 2', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 3, NULL, 5, 'Nedzest_11.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(12, 'Pirmā lekcija Programmēšanas pamatos', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 2, NULL, 6, 'Nedzest_12.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(13, 'Otrā lekcija Programmēšanas pamatos', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 2, NULL, 6, 'Nedzest_13.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(14, 'Pirmā lekcija Programmatūras izstrādes pamatos', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 2, NULL, 7, 'Nedzest_MD14.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(15, 'Otrā lekcija Programmatūras izstrādes pamatos', 'Svarīgs dokuments!!!', 1, NULL, 7, 'Nedzest_15.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(16, 'Pirmā lekcija Angļu valodā', 'Svarīgs dokuments!!!', 1, NULL, 8, 'Nedzest_16.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(17, 'Otrā lekcija Angļu valodā', 'Svarīgs dokuments!!!', 1, NULL, 8, 'Nedzest_17.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(18, 'Trešā lekcija Angļu valodā', 'Svarīgs dokuments!!!', 2, NULL, 8, 'Nedzest_18.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(19, 'Pirmā lekcija Automātu teorijā', 'Svarīgs dokuments!!!', 2, NULL, 9, 'Nedzest_19.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(20, 'Otrā lekcija Automātu teorijā', 'Svarīgs dokuments!!!', 3, NULL, 9, 'Nedzest_20.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(21, 'Grāmata \"Galīgi nedeterminēti (slinki) automāti\"', 'Svarīgs dokuments!!!', 1, NULL, 9, 'Nedzest_21.pdf', 0, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(22, 'Grāmata \"Determinēti (apņēmīgi) automāti\"', 'Svarīgs dokuments!!!', 2, NULL, 9, 'Nedzest_22.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(23, 'Pirmā lekcija Kursa projektā', 'Svarīgs dokuments!!!', 4, NULL, 10, 'Nedzest_23.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(24, 'Otrā lekcija Kursa projektā', 'Svarīgs dokuments!!!', 3, NULL, 10, 'Nedzest_24.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(25, 'Trešā lekcija Kursa projektā', 'Svarīgs dokuments!!!', 3, NULL, 10, 'Nedzest_25.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(26, 'Pirmā prezentācija Automātu teorijā', 'Svarīgs dokuments!!!', 3, NULL, 9, 'Nedzest_26.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(27, 'Otrā prezentācija Automātu teorijā', 'Svarīgs dokuments!!!', 3, NULL, 9, 'Nedzest_27.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(28, 'Trešā prezentācija Automātu teorijā', 'Svarīgs dokuments!!!', 3, NULL, 9, 'Nedzest_28.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(29, 'Pirmā prezentācija Angļu valodā', 'Svarīgs dokuments!!!', 2, NULL, 8, 'Nedzest_29.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(30, 'Otrā prezentācija Angļu valodā', 'Svarīgs dokuments!!!', 4, NULL, 8, 'Nedzest_30.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(31, 'Pirmā prezentācija Programmatūras izstrādes pamatos', 'Svarīgs dokuments!!!', 1, NULL, 7, 'Nedzest_31.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(32, 'Pirmā prezentācija Programmēšanas pamatos', 'Svarīgs dokuments!!!', 2, NULL, 6, 'Nedzest_32.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(33, 'Grāmata \"PHP on database queries\"', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 4, NULL, 5, 'Nedzest_33.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(34, 'Grāmata \"Bootstap - Do not reinvent the wheel.\"', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 4, NULL, 5, 'Nedzest_34.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(35, 'Pirmā prezentācija Diskrētajā matemātikā 2', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 4, NULL, 4, 'Nedzest_35.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(36, 'Otrā prezentācija Diskrētajā matemātikā 2', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 2, NULL, 4, 'Nedzest_36.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(37, 'Trešā prezentācija Diskrētajā matemātikā 2', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 3, NULL, 4, 'Nedzest_37.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(38, 'Grāmata \"Grafu teorija\"', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 4, NULL, 4, 'Nedzest_38.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(39, 'Grāmata \"Varbūtības teorija\"', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 2, NULL, 4, 'Nedzest_39.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(40, 'Nedalāmā Polinoma piedzīvojums\"', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 1, NULL, 4, 'Nedzest_40.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(41, 'Grāmata HTML,CSS,JavaScript', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 1, NULL, 2, 'Nedzest_41.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(42, 'Grāmata \"Matricas\"', 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 4, NULL, 1, 'Nedzest_42.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(43, 'Grāmata \"Viss par un ap Gausa metodi\"', 'Nav īpaši svarīgs fails, bet ieteicams izlasīt.', 2, NULL, 1, 'Nedzest_43.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(44, 'Grāmata \"Gredzenu teorija\"', 'Nav īpaši svarīgs fails, bet ieteicams izlasīt.', 4, NULL, 1, 'Nedzest_44.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(45, 'Grāmata \"PHP is your friend.\"', 'Nav īpaši svarīgs fails, bet ieteicams izlasīt.', 4, NULL, 2, 'Nedzest_45.pdf', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `document_edits`
--

DROP TABLE IF EXISTS `document_edits`;
CREATE TABLE IF NOT EXISTS `document_edits` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `original_id` int(10) UNSIGNED NOT NULL,
  `editor_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `directory_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `document_edits_original_id_foreign` (`original_id`),
  KEY `document_edits_editor_id_foreign` (`editor_id`),
  KEY `document_edits_directory_id_foreign` (`directory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document_edits`
--

INSERT INTO `document_edits` (`id`, `original_id`, `editor_id`, `name`, `description`, `directory_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 45, 2, 'Grāmata \"PHP is your friend.\"', 'Best guid to learn PHP', 2, 'Nedzest_45.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(2, 16, 1, 'Pirmā lekcija Angļu valodā (Presentation skills)', 'adverasbadsv234g', 8, 'Nedzest_16.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(3, 39, 2, 'Grāmata \"Varbūtības teorija\"', 'Grāmata kur apkopotas augstākās matemātikas formulas par tēmu \"Varbūtība\".', 4, 'Nedzest_39.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(4, 38, 3, 'Grāmata \"Grafu teorija\"', 'Orientēti, neorientēti grafi un cilpas.', 4, 'Nedzest_38.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(5, 33, 1, 'Grāmata \"PHP on database queries\"', 'PHP with SQL', 4, 'Nedzest_33.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(6, 32, 1, 'Objektorientēta programmēšana', 'sdfssgsefaesdhh33', 6, 'Nedzest_32.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(7, 31, 1, 'Datoru arhitektūra un operētājsistēmas', 'sdgsg4sdsgsdg', 7, 'Nedzest_31.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(8, 30, 1, 'Otrā prezentācija Angļu valodā', 'Use of times', 8, 'Nedzest_30.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(9, 29, 1, 'Pirmā prezentācija Angļu valodā', 'Welcome to learning', 8, 'Nedzest_29.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(10, 21, 2, 'Grāmata \"Galīgi nedeterminēti (slinki) automāti\"', 'Nav jāraksta visas pārejas.', 9, 'Nedzest_21.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(11, 18, 3, 'Trešā lekcija Angļu valodā', 'Wlcome \"Afterparty\"', 8, 'Nedzest_18.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(12, 17, 3, 'Otrā lekcija Angļu valodā', 'Start to do stuff', 8, 'Nedzest_17.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(13, 16, 1, 'Pirmā lekcija Angļu valodā', 'Fuzzy English', 8, 'Nedzest_16.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(14, 16, 2, 'Pirmā lekcija Angļu valodā', 'Pasniedzejs aizmirsa publicet šo failu.', 8, 'Nedzest_16.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(15, 6, 3, 'Pirmā lekcija Tīmekļu tehnologijās 2', 'Introduction to Laravel', 5, 'Nedzest_6.pdf', '2018-06-13 18:10:12', '2018-06-13 18:10:12'),
(16, 45, 2, 'Grāmata \"PHP is your friend.\"', 'Best guid to learn PHP', 2, 'Nedzest_45.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(17, 16, 1, 'Pirmā lekcija Angļu valodā (Presentation skills)', 'adverasbadsv234g', 8, 'Nedzest_16.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(18, 39, 2, 'Grāmata \"Varbūtības teorija\"', 'Grāmata kur apkopotas augstākās matemātikas formulas par tēmu \"Varbūtība\".', 4, 'Nedzest_39.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(19, 38, 3, 'Grāmata \"Grafu teorija\"', 'Orientēti, neorientēti grafi un cilpas.', 4, 'Nedzest_38.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(20, 33, 1, 'Grāmata \"PHP on database queries\"', 'PHP with SQL', 4, 'Nedzest_33.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(21, 32, 1, 'Objektorientēta programmēšana', 'sdfssgsefaesdhh33', 6, 'Nedzest_32.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(22, 31, 1, 'Datoru arhitektūra un operētājsistēmas', 'sdgsg4sdsgsdg', 7, 'Nedzest_31.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(23, 30, 1, 'Otrā prezentācija Angļu valodā', 'Use of times', 8, 'Nedzest_30.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(24, 29, 1, 'Pirmā prezentācija Angļu valodā', 'Welcome to learning', 8, 'Nedzest_29.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(25, 21, 2, 'Grāmata \"Galīgi nedeterminēti (slinki) automāti\"', 'Nav jāraksta visas pārejas.', 9, 'Nedzest_21.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(26, 18, 3, 'Trešā lekcija Angļu valodā', 'Wlcome \"Afterparty\"', 8, 'Nedzest_18.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(27, 17, 3, 'Otrā lekcija Angļu valodā', 'Start to do stuff', 8, 'Nedzest_17.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(28, 16, 1, 'Pirmā lekcija Angļu valodā', 'Fuzzy English', 8, 'Nedzest_16.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(29, 16, 2, 'Pirmā lekcija Angļu valodā', 'Pasniedzejs aizmirsa publicet šo failu.', 8, 'Nedzest_16.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(30, 6, 3, 'Pirmā lekcija Tīmekļu tehnologijās 2', 'Introduction to Laravel', 5, 'Nedzest_6.pdf', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(31, 6, 5, 'Pirmā lekcija Tīmekļu tehnologijās 2', 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmāko', 5, 'Nedzest_6.pdf', '2019-08-28 15:46:18', '2019-08-28 15:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `file_directories`
--

DROP TABLE IF EXISTS `file_directories`;
CREATE TABLE IF NOT EXISTS `file_directories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `file_directories_course_id_foreign` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file_directories`
--

INSERT INTO `file_directories` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Algebra', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(2, 'Tīmekļu Tehnoloģijas I', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(3, 'Diskrētā Matemātika I', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(4, 'Diskrētā Matemātika II', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(5, 'Tīmekļu Tehnoloģijas II', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(6, 'Programmēšanas Pamati', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(7, 'Programmatūras Izstrādes Pamati', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(8, 'Nozares Angļu Valoda', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(9, 'Automātu Teorija', 1, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(10, 'Kursa projekts', 2, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(11, 'Kvalifikācijas darbs', 2, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(12, 'Programminžinierija', 2, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(13, 'Lineārā algebra II ', 2, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(14, 'Datu struktūras un pamatalgoritmi II', 2, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(15, 'Matemātiskā analīze II', 2, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(16, 'Grafu teorijas elementi', 2, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(17, 'Uzņēmējdarbības pamati', 2, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(18, 'ORACLE projektēšanas rīki', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(19, 'AB Suite programmēšanas vide', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(20, 'Lietišķā kriptogrāfija', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(21, 'Informācijas sistēmu drošība', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(22, 'Lietotņu izstrāde .NET vidē', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(23, 'Datoru tīkli II', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(24, 'Pamatalgoritmu analīze un optimizācija ', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(25, 'Kombinatorika', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(26, 'Biroja informācijas sistēmas', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(27, 'Programmēšanas valodu sintakse un semantika ', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(28, 'Datu bāzu praktikums', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(29, 'Bezvadu sensoru tīkli', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(30, 'Interneta meklēšanas tehnoloģijas', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(31, 'Tīmekļa dizaina pamati ', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(32, 'Datoru grafikas un attēlu apstrādes pamati', 3, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(33, 'Dabas zinātnes', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(34, 'Objektorientētā programmēšana', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(35, 'Algoritmu sarežģītība', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(36, 'Datoru tīkli IV', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(37, 'Programmēšanas valodas', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(38, 'Lietišķie algoritmi', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(39, 'Varbūtību teorijas un matemāt. statist. izvēlētas nod', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(40, 'Grafu teorijas elementi', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(41, 'IT projektu pārvaldība', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(42, 'DBPS Oracle', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(43, 'Specseminārs', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(44, 'Linux sistēmas programmēšana', 4, '2019-08-28 15:44:08', '2019-08-28 15:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(232, '2013_06_04_152402_create_courses_table', 2),
(233, '2014_05_11_065635_create_user_roles_table', 2),
(234, '2014_10_12_000000_create_users_table', 2),
(235, '2014_10_12_100000_create_password_resets_table', 2),
(236, '2014_11_27_084754_create_file_directories_table', 2),
(237, '2018_05_27_084656_create_documents_table', 2),
(151, '2018_06_04_152402_create_courses_table', 1),
(238, '2018_05_27_085916_create_comments_table', 2),
(239, '2018_05_28_140457_create_document_edits_table', 2),
(240, '2018_06_18_122314_update_documents_editor_id_column', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `bio`, `email`, `password`, `role_id`, `remember_token`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Galvenais šīs lapas uzturētājs. Ja kādam rodas jautājumi, tad droši rakstiet uz zemāk norādīto epastu.', 'admin@timekli.com', '$2y$10$bkhwq1p3b1mfmE5OWCy0/eRppPUkISr/Z7hrV9DqdjgsNE0VArjHC', 2, NULL, 'Admin.gif', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(2, 'Kristiāns Murds', NULL, 'murdskristians@timekli.com', '$2y$10$/ymLYorG76HN3PTZwDid.uOFcg22m1yrQvinCd4xOPlCE.UfcDIDC', 1, NULL, 'A.jpg', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(3, 'Reinis Šadinovs', NULL, 'sadinovsreinis@timekli.com', '$2y$10$QFC.c0xUwmp/ON8w0nCXHutouZOEuMT7dXddFPEEi76m6OI5cidO2', 1, NULL, 'B.jpg', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(4, 'Nikola Upīte', NULL, 'upitenikola@timekli.com', '$2y$10$zKH14snXHZUh.w0/C7NcKuGSZFiekDo1e.PVQMAZmZEKBo56zlfu.', 1, NULL, 'C.jpg', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(5, 'Nikola', 'bioo', 'nikola@yahoo.com', '$2y$10$zqo/xaxi72zgkIgGnQpd.uBYtPvFi/INMJpl18ZWEZWOeT.0GBFDG', 1, 'YWZdhhbqxfzuSc96JupYon1tfhigsdJC7y4Rswl6fjqnhWU0VhYmtgebY68w', '2019-08-28carissa_d.jpg', '2019-08-28 15:44:48', '2019-08-28 15:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Lietotājs', '2019-08-28 15:44:08', '2019-08-28 15:44:08'),
(2, 'Admins', '2019-08-28 15:44:08', '2019-08-28 15:44:08');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
