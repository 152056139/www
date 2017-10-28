/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-09-30 21:53:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_admin
-- ----------------------------
DROP TABLE IF EXISTS `admin_admin`;
CREATE TABLE `admin_admin` (
  `admin_admin_no` bigint(255) NOT NULL,
  `admin_admin_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_admin_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for home_message
-- ----------------------------
DROP TABLE IF EXISTS `home_message`;
CREATE TABLE `home_message` (
  `home_message_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `home_message_title` varchar(30) DEFAULT NULL,
  `home_message_name` varchar(10) DEFAULT NULL,
  `home_message_phone` varchar(20) DEFAULT NULL,
  `home_message_email` varchar(30) DEFAULT NULL,
  `home_message_content` text,
  `home_message_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `home_message_auditer` varchar(255) DEFAULT NULL,
  `home_message_audit` tinyint(4) DEFAULT '0' COMMENT '0 未审核，1 已审核',
  `home_message_type` smallint(6) DEFAULT NULL COMMENT '0 官网留言',
  PRIMARY KEY (`home_message_no`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for home_message_type
-- ----------------------------
DROP TABLE IF EXISTS `home_message_type`;
CREATE TABLE `home_message_type` (
  `home_message_type_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `home_message_type_name` varchar(10) NOT NULL COMMENT '消息类型名',
  `home_message_type_color` varchar(7) NOT NULL DEFAULT '',
  PRIMARY KEY (`home_message_type_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for home_messagee_tabel
-- ----------------------------
DROP TABLE IF EXISTS `home_messagee_tabel`;
CREATE TABLE `home_messagee_tabel` (
  `home_message_table_no` int(255) NOT NULL,
  `home_message_table_name` varchar(255) NOT NULL,
  `home_message_table_isshow` tinyint(4) NOT NULL,
  PRIMARY KEY (`home_message_table_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for home_module
-- ----------------------------
DROP TABLE IF EXISTS `home_module`;
CREATE TABLE `home_module` (
  `home_module_no` int(11) NOT NULL AUTO_INCREMENT,
  `home_module_name` varchar(255) DEFAULT NULL,
  `home_module_farther` int(11) DEFAULT NULL,
  `home_module_type` varchar(255) DEFAULT NULL,
  `home_module_order` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`home_module_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
