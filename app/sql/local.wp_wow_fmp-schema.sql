/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wow_fmp` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `param` text,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
