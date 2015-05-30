CREATE DATABASE qcop CHARACTER SET utf8;

CREATE TABLE user_base (
id SERIAL PRIMARY KEY,
email VARCHAR(255) NOT NULL,
user_name VARCHAR (255) NOT NULL,
user_surname VARCHAR (255) NOT NULL,
mail_url VARCHAR (255) NOT NULL,
used TINYINT NOT NULL,
create_date DATETIME NOT NULL
)ENGINE=MyISAM;

ALTER TABLE user_base ADD gender TINYINT NOT NULL AFTER user_surname;

CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  user_group_id BIGINT UNSIGNED NOT NULL,
  email VARCHAR(255) NOT NULL,
  user_password VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  user_name VARCHAR (255) NOT NULL,
  user_surname VARCHAR (255) NOT NULL,
  hash VARCHAR (255) NOT NULL,
  create_date DATETIME NOT NULL
)ENGINE=MyISAM;

CREATE TABLE user_groups (
  id SERIAL PRIMARY KEY,
  group_name VARCHAR (255) NOT NULL,
  create_date DATETIME NOT NULL
)ENGINE=MyISAM;

CREATE TABLE `system_routes` (
  `id` SERIAL PRIMARY KEY,
  `route` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `hidden` tinyint(4) NOT NULL,
  `extenal` tinyint(4) NOT NULL,
  `parent` bigint(20) unsigned NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `system_route_user_group_relations` (
  `system_route_id` bigint(20) unsigned NOT NULL,
  `user_group_id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11102 DEFAULT CHARSET=utf8