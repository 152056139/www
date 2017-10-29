/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-10-29 12:39:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_no` bigint(255) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_position` varchar(255) DEFAULT NULL,
  `admin_birthday` varchar(255) DEFAULT NULL,
  `admin_sex` tinyint(255) DEFAULT NULL,
  `admin_phone` varchar(255) DEFAULT NULL,
  `admin_qq` varchar(255) DEFAULT NULL,
  `admin_weixin` varchar(255) DEFAULT NULL,
  `admin_avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for admin_photo
-- ----------------------------
DROP TABLE IF EXISTS `admin_photo`;
CREATE TABLE `admin_photo` (
  `admin_photo_no` bigint(20) DEFAULT NULL,
  `admin_photo_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for authority
-- ----------------------------
DROP TABLE IF EXISTS `authority`;
CREATE TABLE `authority` (
  `authority_no` bigint(255) NOT NULL AUTO_INCREMENT,
  `authority_name` varchar(255) DEFAULT NULL,
  `authority_url` varchar(255) DEFAULT NULL,
  `authority_introduction` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`authority_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for column
-- ----------------------------
DROP TABLE IF EXISTS `column`;
CREATE TABLE `column` (
  `column_no` bigint(255) NOT NULL AUTO_INCREMENT,
  `column_name` varchar(255) DEFAULT NULL,
  `column_introduction` varchar(255) DEFAULT NULL,
  `column_precursor` bigint(255) DEFAULT NULL,
  `column_authority` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`column_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `message_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `message_title` varchar(30) DEFAULT NULL,
  `message_name` varchar(10) DEFAULT NULL,
  `message_phone` varchar(20) DEFAULT NULL,
  `message_email` varchar(30) DEFAULT NULL,
  `message_content` text,
  `message_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message_auditer` varchar(255) DEFAULT NULL,
  `message_audit` tinyint(4) DEFAULT '0' COMMENT '0 未审核，1 已审核',
  `message_type` int(6) DEFAULT NULL COMMENT '0 官网留言',
  PRIMARY KEY (`message_no`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for message_audit
-- ----------------------------
DROP TABLE IF EXISTS `message_audit`;
CREATE TABLE `message_audit` (
  `message_audit_no` varchar(11) NOT NULL,
  `message_audit_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`message_audit_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for message_type
-- ----------------------------
DROP TABLE IF EXISTS `message_type`;
CREATE TABLE `message_type` (
  `message_type_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `message_type_name` varchar(10) NOT NULL COMMENT '消息类型名',
  `message_type_color` varchar(7) NOT NULL DEFAULT '',
  PRIMARY KEY (`message_type_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for position
-- ----------------------------
DROP TABLE IF EXISTS `position`;
CREATE TABLE `position` (
  `position_no` bigint(255) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) DEFAULT NULL,
  `position_leader` bigint(255) DEFAULT NULL,
  `positon_introduction` varchar(255) DEFAULT NULL,
  `position_blame` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`position_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for system_log
-- ----------------------------
DROP TABLE IF EXISTS `system_log`;
CREATE TABLE `system_log` (
  `log_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `log_admin` varchar(255) DEFAULT NULL,
  `log_column` varchar(255) DEFAULT NULL,
  `log_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for system_setting
-- ----------------------------
DROP TABLE IF EXISTS `system_setting`;
CREATE TABLE `system_setting` (
  `setting_admin` bigint(20) DEFAULT NULL,
  `setting_column` bigint(20) DEFAULT NULL,
  `setting_name` varchar(255) DEFAULT NULL,
  `setting_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_sex` tinyint(4) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_qq` varchar(255) DEFAULT NULL,
  `user_weixin` varchar(255) DEFAULT NULL,
  `user_type` bigint(20) DEFAULT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_photo
-- ----------------------------
DROP TABLE IF EXISTS `user_photo`;
CREATE TABLE `user_photo` (
  `user_photo_no` bigint(20) DEFAULT NULL,
  `user_photo_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_type
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type` (
  `user_type_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_type_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
