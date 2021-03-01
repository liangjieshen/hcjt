/*
Navicat MySQL Data Transfer

Source Server         : Jayson
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : hcjt

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-12-31 10:48:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hc_category
-- ----------------------------
DROP TABLE IF EXISTS `hc_category`;
CREATE TABLE `hc_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1:新闻类型',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `name` varchar(20) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示 1：显示 0隐藏',
  `modify_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hc_category
-- ----------------------------
INSERT INTO `hc_category` VALUES ('1', '1', '0', '公司新闻', null, '0', '1', '0');
INSERT INTO `hc_category` VALUES ('2', '1', '0', '政策动态', null, '0', '1', '0');
INSERT INTO `hc_category` VALUES ('3', '1', '0', '人力外包', null, '0', '1', '0');
INSERT INTO `hc_category` VALUES ('4', '1', '0', '税务筹划', null, '0', '1', '0');
INSERT INTO `hc_category` VALUES ('5', '1', '0', '劳务派遣', null, '0', '1', '0');
INSERT INTO `hc_category` VALUES ('6', '1', '0', '代理招聘', null, '0', '1', '0');
INSERT INTO `hc_category` VALUES ('7', '1', '0', '猎头招聘', null, '0', '1', '0');
INSERT INTO `hc_category` VALUES ('8', '1', '0', '业务外包', null, '0', '1', '0');

-- ----------------------------
-- Table structure for hc_menu
-- ----------------------------
DROP TABLE IF EXISTS `hc_menu`;
CREATE TABLE `hc_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '名称',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
  `route` varchar(50) DEFAULT NULL COMMENT '路由',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='菜单表';

-- ----------------------------
-- Records of hc_menu
-- ----------------------------
INSERT INTO `hc_menu` VALUES ('1', '权限管理', '0', null, '2019-06-08 03:35:44', '2019-06-08 03:35:44');
INSERT INTO `hc_menu` VALUES ('2', '用户管理', '1', 'admin.user.index', '2019-06-08 03:36:00', '2019-06-08 03:36:00');
INSERT INTO `hc_menu` VALUES ('3', '角色管理', '1', 'admin.roles.index', '2019-06-08 03:36:20', '2019-06-08 03:36:20');
INSERT INTO `hc_menu` VALUES ('4', '权限组管理', '1', 'admin.permission.index', '2019-06-08 03:36:37', '2019-06-08 03:36:37');
INSERT INTO `hc_menu` VALUES ('5', '菜单管理', '1', 'admin.menu.index', '2019-06-08 03:37:12', '2019-06-08 03:37:12');
INSERT INTO `hc_menu` VALUES ('6', '文章管理', '0', null, '2020-12-21 16:56:01', '2020-12-21 16:56:01');
INSERT INTO `hc_menu` VALUES ('7', '新闻文章列表', '6', 'admin.article.newsList', '2020-12-21 16:56:30', '2020-12-21 16:56:30');
INSERT INTO `hc_menu` VALUES ('8', '留言管理', '0', null, '2020-12-23 09:51:31', '2020-12-23 09:51:31');
INSERT INTO `hc_menu` VALUES ('9', '预约方案', '8', 'admin.message.planAppointment', '2020-12-23 09:51:51', '2020-12-23 09:51:51');
INSERT INTO `hc_menu` VALUES ('10', '获取方案', '8', 'admin.message.planObtain', '2020-12-23 09:52:20', '2020-12-23 09:52:20');
INSERT INTO `hc_menu` VALUES ('11', '领取方案', '8', 'admin.message.planReceive', '2020-12-23 09:52:34', '2020-12-23 09:52:34');

-- ----------------------------
-- Table structure for hc_menu_roles
-- ----------------------------
DROP TABLE IF EXISTS `hc_menu_roles`;
CREATE TABLE `hc_menu_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='菜单-角色关系表';

-- ----------------------------
-- Records of hc_menu_roles
-- ----------------------------
INSERT INTO `hc_menu_roles` VALUES ('1', '6', '1', '2020-12-21 16:56:01', '2020-12-21 16:56:01');
INSERT INTO `hc_menu_roles` VALUES ('2', '6', '2', '2020-12-21 16:56:01', '2020-12-21 16:56:01');
INSERT INTO `hc_menu_roles` VALUES ('3', '7', '1', '2020-12-21 16:56:30', '2020-12-21 16:56:30');
INSERT INTO `hc_menu_roles` VALUES ('4', '7', '2', '2020-12-21 16:56:30', '2020-12-21 16:56:30');
INSERT INTO `hc_menu_roles` VALUES ('5', '8', '1', '2020-12-23 09:51:31', '2020-12-23 09:51:31');
INSERT INTO `hc_menu_roles` VALUES ('6', '8', '2', '2020-12-23 09:51:31', '2020-12-23 09:51:31');
INSERT INTO `hc_menu_roles` VALUES ('7', '9', '1', '2020-12-23 09:51:51', '2020-12-23 09:51:51');
INSERT INTO `hc_menu_roles` VALUES ('8', '9', '2', '2020-12-23 09:51:51', '2020-12-23 09:51:51');
INSERT INTO `hc_menu_roles` VALUES ('9', '10', '1', '2020-12-23 09:52:20', '2020-12-23 09:52:20');
INSERT INTO `hc_menu_roles` VALUES ('10', '10', '2', '2020-12-23 09:52:20', '2020-12-23 09:52:20');
INSERT INTO `hc_menu_roles` VALUES ('11', '11', '1', '2020-12-23 09:52:34', '2020-12-23 09:52:34');
INSERT INTO `hc_menu_roles` VALUES ('12', '11', '2', '2020-12-23 09:52:34', '2020-12-23 09:52:34');

-- ----------------------------
-- Table structure for hc_message
-- ----------------------------
DROP TABLE IF EXISTS `hc_message`;
CREATE TABLE `hc_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `place` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1：预约方案 2：方案获取留言 3：领取方案  4：联系我们 5：首页留言',
  `page` smallint(4) unsigned NOT NULL DEFAULT '0' COMMENT '页面id',
  `username` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `type` int(1) unsigned NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='留言表';

-- ----------------------------
-- Records of hc_message
-- ----------------------------
INSERT INTO `hc_message` VALUES ('1', '3', '1', '梁杰深', '13710624516', '1', null, null, '1608189201');
INSERT INTO `hc_message` VALUES ('2', '3', '1', 'asdf', '13710624516', '0', null, null, '1608190500');
INSERT INTO `hc_message` VALUES ('3', '3', '1', 'asdf', '13710624516', '1', null, null, '1608191427');
INSERT INTO `hc_message` VALUES ('4', '3', '2', '发生的事的', '13710624516', '1', null, null, '1608191951');
INSERT INTO `hc_message` VALUES ('5', '1', '1', 'asdfasdf', '13710624516', '5', null, null, '1608194836');
INSERT INTO `hc_message` VALUES ('6', '2', '1', 'asdf', '13710624516', '5', 'adf', null, '1608195155');
INSERT INTO `hc_message` VALUES ('7', '1', '2', '梁杰深', '13710624516', '2', null, null, '1608195868');
INSERT INTO `hc_message` VALUES ('8', '3', '9', '2132132', '13710624516', '1', null, '3213213', '1608275987');
INSERT INTO `hc_message` VALUES ('9', '3', '9', 'asfdsf', '13710624516', '5', 'asfsdfadsfd', 'afasdfdsafd', '1608276055');
INSERT INTO `hc_message` VALUES ('10', '4', '9', '3213', '13710624516', '1', '123', '2132', '1608276171');
INSERT INTO `hc_message` VALUES ('11', '4', '11', 'dfdsf', '13710624516', '4', 'sadfdsf', 'sdfdsf', '1608276362');
INSERT INTO `hc_message` VALUES ('12', '4', '10', 'dfasdf', '13710624516', '4', null, 'dsfadsf', '1608276444');
INSERT INTO `hc_message` VALUES ('13', '4', '12', '123', '13710624516', '1', 'asd', '123', '1608276561');
INSERT INTO `hc_message` VALUES ('14', '3', '10', '123', '13710624516', '3', null, null, '1608545699');
INSERT INTO `hc_message` VALUES ('15', '3', '1', 'wfdfds', '13710624516', '1', null, null, '1608546706');
INSERT INTO `hc_message` VALUES ('16', '3', '1', '13710624517', '13710624516', '1', null, null, '1608546719');
INSERT INTO `hc_message` VALUES ('17', '2', '1', 'adsf', '13710624516', '4', 'sdfd', null, '1608695731');
INSERT INTO `hc_message` VALUES ('18', '5', '1', 'adsfdsf', '13710624516', '4', 'asfdsf', null, '1608695805');
INSERT INTO `hc_message` VALUES ('19', '3', '1', 'admin', '13710624516', '2', null, null, '1608696000');
INSERT INTO `hc_message` VALUES ('20', '3', '1', 'asdfsd', '13710624516', '2', null, null, '1608715077');
INSERT INTO `hc_message` VALUES ('21', '4', '13', '爱的色放', '13710624516', '5', '撒旦', '阿斯顿', '1608779781');
INSERT INTO `hc_message` VALUES ('22', '4', '13', 'qubang', '13710624516', '3', null, null, '1608779879');
INSERT INTO `hc_message` VALUES ('23', '1', '1', 'qubang', '13710624516', '3', null, null, '1608863266');
INSERT INTO `hc_message` VALUES ('24', '2', '1', '阿道夫', '13710624516', '4', 'asd', null, '1608863273');
INSERT INTO `hc_message` VALUES ('25', '2', '1', 'admin', '19952654872', '1', 'sadf', null, '1608863300');
INSERT INTO `hc_message` VALUES ('26', '2', '3', 'asdfasdf', '13710624516', '3', 'asd f', null, '1608863578');
INSERT INTO `hc_message` VALUES ('27', '1', '13', 'qubang', '19952654872', '1', null, null, '1609222359');
INSERT INTO `hc_message` VALUES ('28', '1', '13', 'admin', '19952654872', '6', null, null, '1609222433');
INSERT INTO `hc_message` VALUES ('29', '1', '1', 'admin', '19952654872', '5', null, null, '1609228918');
INSERT INTO `hc_message` VALUES ('30', '4', '8', 'qubang', '13710624516', '4', null, 'afasdfdsafd', '1609229458');
INSERT INTO `hc_message` VALUES ('31', '3', '1', '阿道夫', '19952654872', '5', null, null, '1609292731');
INSERT INTO `hc_message` VALUES ('32', '1', '1', '1323', '13710624516', '1', null, null, '1609318267');

-- ----------------------------
-- Table structure for hc_news_list
-- ----------------------------
DROP TABLE IF EXISTS `hc_news_list`;
CREATE TABLE `hc_news_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `look` smallint(6) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(4) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `modify_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hc_news_list
-- ----------------------------
INSERT INTO `hc_news_list` VALUES ('2', '2', '阿道夫大师傅', '啊但是发射点', '打发士大夫的', '14', '0', '1', '0', '0');
INSERT INTO `hc_news_list` VALUES ('3', '4', 'asdfdf', ' ', 'asdfa', '0', '0', '1', '1608713801', '1608713801');
INSERT INTO `hc_news_list` VALUES ('4', '1', 'adsfdsfsdf', '/upload/images/20201229/5feafc0689e5c1609235462.png', '<p>asdfdsf</p><p>&nbsp; &nbsp;dsfdasfsdfsdfsdafasdfdsfs</p><p>dfsdfasdfsdfdfasfasdf</p><p style=\"text-align: center; \"><img src=\"/upload/images/20201229/5feafc181b9d61609235480.png\" alt=\"5feafc181b9d61609235480.png\"></p><p style=\"text-align: left;\">adsfsdfadsfafdfdsfadfdfsdfsdffasdfdsf</p>', '22', '0', '1', '1609235492', '1609235492');
INSERT INTO `hc_news_list` VALUES ('5', '2', 'dsafdsfsdfddf', '/upload/images/20201229/5feafc30af91c1609235504.png', 'fasdfdsfasdfds', '0', '0', '1', '1609235512', '1609235512');
INSERT INTO `hc_news_list` VALUES ('6', '3', 'dsfsdfa', '/upload/images/20201229/5feafc404c0d81609235520.png', 'dsfasdfdsf', '0', '0', '1', '1609235529', '1609235529');
INSERT INTO `hc_news_list` VALUES ('7', '5', 'dasfsdf', '/upload/images/20201229/5feafc4d699cb1609235533.png', 'sdafsdf', '0', '0', '1', '1609235543', '1609235543');
INSERT INTO `hc_news_list` VALUES ('8', '7', 'sdafsdfdasf', '/upload/images/20201229/5feafc5b4bace1609235547.png', 'sadfsdfs', '0', '0', '1', '1609235551', '1609235551');
INSERT INTO `hc_news_list` VALUES ('9', '1', 'sdfasdfsdfsdaf', '/upload/images/20201229/5feafc77414111609235575.png', 'asfsdfdsfdfadsfasdfsdf', '0', '0', '1', '1609235583', '1609235583');
INSERT INTO `hc_news_list` VALUES ('10', '1', 'asfdsfdsf', '/upload/images/20201229/5feafc84859e41609235588.png', 'fasdfsdfasdf', '0', '0', '1', '1609235593', '1609235593');
INSERT INTO `hc_news_list` VALUES ('11', '1', 'sdfasdf', '/upload/images/20201229/5feafc8d601a71609235597.png', 'safsdf', '0', '0', '1', '1609235601', '1609235601');

-- ----------------------------
-- Table structure for hc_news_look
-- ----------------------------
DROP TABLE IF EXISTS `hc_news_look`;
CREATE TABLE `hc_news_look` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ips` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hc_news_look
-- ----------------------------
INSERT INTO `hc_news_look` VALUES ('1', '2', '113.119.78.151', '广东省广州市', '1608792561');
INSERT INTO `hc_news_look` VALUES ('2', '2', '113.119.78.151', '广东省广州市', '1608792598');
INSERT INTO `hc_news_look` VALUES ('3', '2', '113.119.78.151', '广东省广州市', '1608792640');
INSERT INTO `hc_news_look` VALUES ('4', '2', '113.119.78.151', '广东省广州市', '1608863246');
INSERT INTO `hc_news_look` VALUES ('5', '2', '113.119.78.151', '广东省广州市', '1608863701');
INSERT INTO `hc_news_look` VALUES ('6', '2', '113.119.78.151', '广东省广州市', '1608863774');
INSERT INTO `hc_news_look` VALUES ('7', '2', '113.119.76.255', '广东省广州市', '1609115222');
INSERT INTO `hc_news_look` VALUES ('8', '2', '113.119.76.255', '广东省广州市', '1609115361');
INSERT INTO `hc_news_look` VALUES ('9', '2', '113.119.76.255', '广东省广州市', '1609116737');
INSERT INTO `hc_news_look` VALUES ('10', '2', '113.119.76.255', '广东省广州市', '1609116813');
INSERT INTO `hc_news_look` VALUES ('11', '2', '113.119.76.255', '广东省广州市', '1609116852');
INSERT INTO `hc_news_look` VALUES ('12', '2', '113.119.76.41', '广东省广州市', '1609207836');
INSERT INTO `hc_news_look` VALUES ('13', '2', '113.119.76.41', '广东省广州市', '1609235717');
INSERT INTO `hc_news_look` VALUES ('14', '2', '113.119.76.150', '广东省广州市', '1609321408');

-- ----------------------------
-- Table structure for hc_page
-- ----------------------------
DROP TABLE IF EXISTS `hc_page`;
CREATE TABLE `hc_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `is_page` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否单页面',
  `url` varchar(255) DEFAULT NULL,
  `sort` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='页面表';

-- ----------------------------
-- Records of hc_page
-- ----------------------------
INSERT INTO `hc_page` VALUES ('1', '首页', '0', 'home/index', '999');
INSERT INTO `hc_page` VALUES ('2', '人力外包', '1', 'single/page_outsource', '0');
INSERT INTO `hc_page` VALUES ('3', '税务筹划', '1', 'single/page_taxation', '0');
INSERT INTO `hc_page` VALUES ('4', '劳务派遣', '1', 'single/page_labour', '0');
INSERT INTO `hc_page` VALUES ('5', '代理招聘', '1', 'single/page_agent', '0');
INSERT INTO `hc_page` VALUES ('6', '猎头招聘', '1', 'single/page_headhunter', '0');
INSERT INTO `hc_page` VALUES ('7', '业务外包', '1', 'single/page_personnel', '0');
INSERT INTO `hc_page` VALUES ('8', '新闻政策', '1', 'single/page_news', '0');
INSERT INTO `hc_page` VALUES ('9', '联系我们', '1', 'single/contact', '0');
INSERT INTO `hc_page` VALUES ('10', '发展历程', '1', 'single/page_history', '0');
INSERT INTO `hc_page` VALUES ('11', '企业文化', '1', 'single/page_culture', '0');
INSERT INTO `hc_page` VALUES ('12', '了解更多', '1', 'more/page_more', '0');

-- ----------------------------
-- Table structure for hc_permission
-- ----------------------------
DROP TABLE IF EXISTS `hc_permission`;
CREATE TABLE `hc_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `routes` text COMMENT '路由别名，逗号分隔',
  `name` varchar(50) NOT NULL COMMENT '名称',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='permission权限组';

-- ----------------------------
-- Records of hc_permission
-- ----------------------------
INSERT INTO `hc_permission` VALUES ('2', '', '编辑员', '2020-01-04 15:23:22', '2020-10-16 16:39:21');

-- ----------------------------
-- Table structure for hc_roles
-- ----------------------------
DROP TABLE IF EXISTS `hc_roles`;
CREATE TABLE `hc_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '角色名称',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of hc_roles
-- ----------------------------
INSERT INTO `hc_roles` VALUES ('1', '查看人员', '2020-11-25 23:53:13', '2020-11-16 01:53:32');
INSERT INTO `hc_roles` VALUES ('2', '编辑角色', '2020-11-25 23:53:13', '2020-11-25 23:53:13');

-- ----------------------------
-- Table structure for hc_roles_permission
-- ----------------------------
DROP TABLE IF EXISTS `hc_roles_permission`;
CREATE TABLE `hc_roles_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `roles_id` int(10) unsigned NOT NULL COMMENT '角色id',
  `permission_id` int(10) unsigned NOT NULL COMMENT '权限组id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='角色-权限关系表';

-- ----------------------------
-- Records of hc_roles_permission
-- ----------------------------
INSERT INTO `hc_roles_permission` VALUES ('1', '1', '2', '2020-11-16 01:53:32', '2020-11-16 01:53:32');
INSERT INTO `hc_roles_permission` VALUES ('2', '2', '2', '2020-11-25 23:53:13', '2020-11-25 23:53:13');

-- ----------------------------
-- Table structure for hc_users
-- ----------------------------
DROP TABLE IF EXISTS `hc_users`;
CREATE TABLE `hc_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `name` varchar(50) NOT NULL COMMENT '姓名',
  `password` varchar(188) NOT NULL COMMENT '密码',
  `administrator` tinyint(3) DEFAULT '2' COMMENT '是否超管，1是，2否',
  `status` tinyint(3) DEFAULT '1' COMMENT '状态，1启用，2禁用',
  `creator_id` int(11) DEFAULT NULL COMMENT '创建者id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of hc_users
-- ----------------------------
INSERT INTO `hc_users` VALUES ('1', 'admin@admin.com', '超级管理员', '$2y$10$7EidSbbiHHv6zDlPiV4vR.u2N/HC8fN.XCCkq33RnBVE/JYocA8/K', '1', '1', '1', '2019-05-05 19:57:01', '2020-12-14 16:56:48');

-- ----------------------------
-- Table structure for hc_users_roles
-- ----------------------------
DROP TABLE IF EXISTS `hc_users_roles`;
CREATE TABLE `hc_users_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL COMMENT '用户id',
  `roles_id` int(10) unsigned NOT NULL COMMENT '角色id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户-角色关系表';

-- ----------------------------
-- Records of hc_users_roles
-- ----------------------------
