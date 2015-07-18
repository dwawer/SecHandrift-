
SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(255) not NULL,
  `password` varchar(255) not NULL,
  `email` varchar(40) not NULL,
  `telephone` varchar(20) default "",
  `QQ` varchar(20) default "",
  PRIMARY KEY  (`username`)
)DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('test1', '123', '123@11.com','13900000000','123123');

-- ----------------------------
-- Table structure for `objects`
-- ----------------------------
DROP TABLE IF EXISTS `objects`;
CREATE TABLE `objects` (
  `O_id` int NOT NULL auto_increment,
  `name` varchar(50) not NULL,
  `picture` int(10) default NULL,
  `type` tinyint(1) default '0',
  `class` int default NULL,
  `publisher` varchar(255) not NULL,
  `gainer` varchar(255) default NULL,
  `onshelf` tinyint(1) default '0',
  `description` text,
  `pubDate` date NOT NULL,
  `price` double(32,4) default '0',
  PRIMARY KEY  (`O_id`)
)DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `logs`
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `L_id` int NOT NULL auto_increment,
  `publisher` varchar(255) NOT NULL,
  `gainer` varchar(255) default "",
  `logDate` date NOT NULL,
  PRIMARY KEY  (`L_id`)
)DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `remarks`
-- ----------------------------
DROP TABLE IF EXISTS `remarks`;
CREATE TABLE `remarks` (
  `R_id` int NOT NULL auto_increment,
  `publisher` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `reDate` date NOT NULL,
  `content` text,
  PRIMARY KEY  (`R_id`)
)DEFAULT CHARSET=utf8;

