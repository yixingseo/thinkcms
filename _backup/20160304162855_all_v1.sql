--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: localhost
-- 生成日期: 2016 年  03 月 04 日 16:28
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
INSERT INTO `t_article` VALUES('5','asdfasdf fasdf','','','','0000-00-00','0','','','','0');
INSERT INTO `t_article` VALUES('6','修改测试！！！！！！！！！！','','','','0000-00-00','0','','','','0');
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
  `content` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_category
--

INSERT INTO `t_category` VALUES('1','公司简介','0','','','','0');
INSERT INTO `t_category` VALUES('2','产品展示','0','','','','0');
INSERT INTO `t_category` VALUES('3','产品小类','2','','','','0');
INSERT INTO `t_category` VALUES('4','新闻中心','0','','','','0');
INSERT INTO `t_category` VALUES('5','公司新闻','4','','','','0');
INSERT INTO `t_category` VALUES('6','行业动态','4','','','','0');
INSERT INTO `t_category` VALUES('7','联系我们','0','11','&lt;p&gt;22&lt;/p&gt;','','0');
INSERT INTO `t_category` VALUES('8','地图','7','','','','0');
INSERT INTO `t_category` VALUES('9','企业文化','1','','','','0');
