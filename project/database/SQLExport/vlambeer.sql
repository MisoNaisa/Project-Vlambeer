-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2015 at 04:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vlambeer`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL,
  `game_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `game_background_img` text COLLATE utf8_unicode_ci,
  `ios_game_background_img` text COLLATE utf8_unicode_ci,
  `vita_game_background_img` text COLLATE utf8_unicode_ci,
  `game_background_video` text COLLATE utf8_unicode_ci,
  `regular_payment_link` text COLLATE utf8_unicode_ci,
  `steam_payment_link` text COLLATE utf8_unicode_ci,
  `mac_payment_link` text COLLATE utf8_unicode_ci,
  `ios_payment_link` text COLLATE utf8_unicode_ci,
  `vita_payment_link` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `game_name`, `description`, `game_background_img`, `ios_game_background_img`, `vita_game_background_img`, `game_background_video`, `regular_payment_link`, `steam_payment_link`, `mac_payment_link`, `ios_payment_link`, `vita_payment_link`, `created_at`, `updated_at`) VALUES
(1, 'Gun Godz (PC, Mac)', 'Builded with one-year venus patrol subscription & admin atomics capsule', 'http://www.vlambeer.com/wp-content/uploads/2012/02/LOGO-510x286.png', NULL, NULL, NULL, NULL, 'http://venuspatrol.com/subscribe/#subscriptionform', 'http://venuspatrol.com/subscribe/#subscriptionform', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Serious Sam: The Random Encounter (PC)', 'Serious Sam: The Random Encounter', 'http://images2.wikia.nocookie.net/__cb20120105005351/serious/images/6/6f/TREMajorMechanoid.jpg', NULL, NULL, NULL, NULL, 'http://store.steampowered.com/app/201480/', NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Super Crate Box', 'Super Crate Box', 'http://pixelannihilation.files.wordpress.com/2010/10/scb.png?w=630', 'http://a2.mzstatic.com/us/r1000/091/Purple/v4/42/21/79/4221792e-a630-f38e-0dfa-3500b110f2ee/mzm.ubyemkid.175x175-75.jpg', 'http://uk.playstation.com/media/VHzg0SBQ/161/SuperCrateBox-Featured-image.jpg', NULL, NULL, 'http://supercratebox.com', NULL, 'https://itunes.apple.com/us/app/super-crate-box/id483025428?mt=8', 'https://www.playstation.com/en-gb/games/super-crate-box-psvita/', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_11_23_082406_create-games-table', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
