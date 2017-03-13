CREATE TABLE `dp_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

CREATE TABLE `dp_content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `post_time` int(10) DEFAULT NULL,
  `cid` int(10) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `dp_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL,
  `description` text,
  `area` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `score` int(10) DEFAULT NULL,
  `fans` text,
  `followers` text,
  `sex` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
