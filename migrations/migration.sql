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
) ENGINE=InnoDB AUTO_INCREMENT=11102 DEFAULT CHARSET=utf8;

CREATE TABLE attributes (
  id SERIAL PRIMARY KEY,
  attribute_name VARCHAR(255) NOT NULL,
  attribute_key VARCHAR(255) NOT NULL
)  ENGINE=MYISAM;

CREATE TABLE products (
  id SERIAL PRIMARY KEY,
  product_name VARCHAR(255) NOT NULL,
  product_key VARCHAR(255) NOT NULL,
  create_date VARCHAR(255) NOT NULL
)  ENGINE=MYISAM;

CREATE TABLE products_attributes_relations (
  id SERIAL PRIMARY KEY,
  product_id BIGINT UNSIgned not null,
  attribute_id BIGINT UNSIgned not null,
  visibility TINYINT NOT NULL,
  position INT not null
)  ENGINE=MYISAM;

CREATE INDEX product_attribute_idx ON products_attributes_relations (product_id, attribute_id);