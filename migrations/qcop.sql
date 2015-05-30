-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 30 2015 г., 14:21
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `qcop`
--
CREATE DATABASE IF NOT EXISTS `qcop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `qcop`;

-- --------------------------------------------------------

--
-- Структура таблицы `system_routes`
--

CREATE TABLE IF NOT EXISTS `system_routes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `route` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `hidden` tinyint(4) NOT NULL,
  `extenal` tinyint(4) NOT NULL,
  `parent` bigint(20) unsigned NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `system_routes`
--

INSERT INTO `system_routes` (`id`, `route`, `title`, `position`, `hidden`, `extenal`, `parent`, `icon`) VALUES
(1, '', 'Dashboard', 1, 0, 0, 0, 'fa fa-dashboard'),
(2, '', 'Пользователи', 2, 0, 0, 0, 'fa fa-user'),
(3, 'users', 'Список', 3, 0, 0, 2, ''),
(4, 'users/add', 'Добавить', 4, 0, 0, 2, ''),
(5, 'users/groups', 'Группы', 5, 0, 0, 2, ''),
(6, 'users/add_group', 'Добавить группу', 6, 0, 0, 2, ''),
(7, 'users/permissions', 'Права', 7, 0, 0, 2, '');

-- --------------------------------------------------------

--
-- Структура таблицы `system_routes_user_groups_relations`
--

CREATE TABLE IF NOT EXISTS `system_routes_user_groups_relations` (
  `system_route_id` bigint(20) unsigned NOT NULL,
  `user_group_id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `system_routes_user_groups_relations`
--

INSERT INTO `system_routes_user_groups_relations` (`system_route_id`, `user_group_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` bigint(20) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_surname` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `email`, `user_password`, `phone`, `user_name`, `user_surname`, `hash`, `create_date`) VALUES
(1, 1, 'admin', '4d32b723c8b58e1846a8e997c6ecdb63', '', 'Евгений', 'Новичков', '', '2015-05-29 21:04:00');

-- --------------------------------------------------------

--
-- Структура таблицы `user_base`
--

CREATE TABLE IF NOT EXISTS `user_base` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_surname` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `mail_url` varchar(255) NOT NULL,
  `used` tinyint(4) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `create_date`) VALUES
(1, 'Суперадмин', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
