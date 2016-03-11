--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: localhost
-- 生成日期: 2016 年  03 月 11 日 08:03
-- MySQL版本: 5.5.20-log
-- PHP 版本: 5.3.10

--
-- 数据库: `thinkcms`
--

-- -------------------------------------------------------

--
-- 表的结构t_article
--

DROP TABLE IF EXISTS `t_article`;
CREATE TABLE `t_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `addtime` date NOT NULL,
  `parent` int(11) NOT NULL,
  `info` text NOT NULL,
  `anthor` varchar(20) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_article
--

INSERT INTO `t_article` VALUES('1','测试测试','测试测试','0','测试测试测试','2016-02-26','0','','','','0');
INSERT INTO `t_article` VALUES('2','测试测试','测试测试','测试测试','测试测试测试','2016-02-26','0','','','','0');
INSERT INTO `t_article` VALUES('3','1111111','','','','0000-00-00','0','','','','0');
INSERT INTO `t_article` VALUES('4','修改！！！','','','','0000-00-00','0','','','','0');
INSERT INTO `t_article` VALUES('7','关于我们','','','&lt;p&gt;11111111&lt;br/&gt;&lt;/p&gt;','0000-00-00','1','','','','0');
--
-- 表的结构t_category
--

DROP TABLE IF EXISTS `t_category`;
CREATE TABLE `t_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `parent` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_category
--

INSERT INTO `t_category` VALUES('1','公司简介','0','','0');
INSERT INTO `t_category` VALUES('2','产品展示','0','','0');
INSERT INTO `t_category` VALUES('3','产品小类','2','','0');
INSERT INTO `t_category` VALUES('4','新闻中心','0','','0');
INSERT INTO `t_category` VALUES('5','公司新闻','4','','0');
INSERT INTO `t_category` VALUES('6','行业动态','4','','0');
INSERT INTO `t_category` VALUES('7','联系我们','0','11','0');
INSERT INTO `t_category` VALUES('8','地图','7','','0');
INSERT INTO `t_category` VALUES('9','企业文化','1','','0');
--
-- 表的结构t_channel
--

DROP TABLE IF EXISTS `t_channel`;
CREATE TABLE `t_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `cion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_channel
--

INSERT INTO `t_channel` VALUES('1','公司简介','ABOUT US','page','','','99','0','','');
--
-- 表的结构t_channel_type
--

DROP TABLE IF EXISTS `t_channel_type`;
CREATE TABLE `t_channel_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_weight` int(11) NOT NULL,
  `img_height` int(11) NOT NULL,
  `page_size` int(11) NOT NULL,
  `fields` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `template` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_channel_type
--

--
-- 表的结构t_config
--

DROP TABLE IF EXISTS `t_config`;
CREATE TABLE `t_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `value` text NOT NULL,
  KEY `name` (`name`),
  KEY `name_2` (`name`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_config
--

INSERT INTO `t_config` VALUES('1','title','111');
INSERT INTO `t_config` VALUES('2','url','http://www.yixingseo.com/');
--
-- 表的结构t_content
--

DROP TABLE IF EXISTS `t_content`;
CREATE TABLE `t_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(10) NOT NULL,
  `font_weight` text NOT NULL,
  `text` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `add_time` date NOT NULL,
  `add_user` int(11) NOT NULL,
  `anthor` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_content
--

--
-- 表的结构t_content_att
--

DROP TABLE IF EXISTS `t_content_att`;
CREATE TABLE `t_content_att` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `att` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_content_att
--

--
-- 表的结构t_thumbnail
--

DROP TABLE IF EXISTS `t_thumbnail`;
CREATE TABLE `t_thumbnail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_thumbnail
--

