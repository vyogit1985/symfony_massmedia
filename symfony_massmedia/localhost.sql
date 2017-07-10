-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2017 at 01:16 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony_massmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Windows', 'Цікаві дописи стосовно ОС Windows'),
(2, 'Linux', 'Фанати темного терміналу перебувають тут');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9474526C4B89032C` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `author`, `content`, `created_at`) VALUES
(1, 6, 'Петро Васильович', 'Звичайно переходьте, приєднуйтесь до группи користувачів чорного екрану', '2017-07-10 00:00:00'),
(2, 6, 'Смиридон Петрович', 'І не думайте, я раз переходив, чорний екран, ніякого 3D, жах.', '2017-07-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `file` longblob,
  PRIMARY KEY (`id`),
  KEY `IDX_5A8A6C8D12469DE2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_id`, `name`, `content`, `file`) VALUES
(1, 1, 'Win10 видає екран з смайликом', 'Після оновлення перестала завантажуватися Win10 Home, вона ліцензійна, не чекав такого від коробкової версії, знаючі люди підкажіть.', ''),
(2, 1, 'Чи варто вивчати PHP на Win-платформі?', 'Хочу розпочати вивчення програмування, зупинив вибір на PHP, підкажіть чи варто вивчати її беручи за основу ОС Windows?', ''),
(3, 1, 'Як вважаєте GS-GO варта уваги?', 'У мене CS закінчилась на CS 1.6, чи варта уваги нова версія?', ''),
(4, 2, 'Ази роботи з bash', 'На перший погляд, може скластися враження, що bash - це щось не зрозуміле, але поступово ви самі переконаєтеся в тому, що працюєте з дуже зручним інструментом.', ''),
(5, 2, 'Не бачу Wi-Fi мережі', 'Встановив UBUNTU 10.10, все наче нормально, але не можу підключитися до безпровідної мережі, даного пункту просто немає в меню.', ''),
(6, 1, 'Win VS Linux', 'Чи варто переходити, в кого які думки?', ''),
(7, 2, 'Різниця в файлових системах', 'Все, що потрібно знати про файлову систему ext4.', ''),
(8, 1, 'Пишить ПК при старті', 'Почав пищати ПК при старті, пишу з мобілки, що може бути?', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C4B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_5A8A6C8D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
