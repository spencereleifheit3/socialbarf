CREATE TABLE `analytics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request_url` varchar(150) DEFAULT NULL,
  `request_ip` varchar(25) DEFAULT NULL,
  `browser_agent` varchar(150) DEFAULT NULL,
  `referer` varchar(150) DEFAULT NULL,
  `time_stamp` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
