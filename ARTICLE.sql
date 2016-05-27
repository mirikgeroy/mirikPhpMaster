/*
 Navicat Premium Data Transfer

 Source Server         : mySql
 Source Server Type    : MySQL
 Source Server Version : 50542
 Source Host           : localhost
 Source Database       : ARTICLE

 Target Server Type    : MySQL
 Target Server Version : 50542
 File Encoding         : utf-8

 Date: 05/27/2016 22:26:59 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `statti`
-- ----------------------------
DROP TABLE IF EXISTS `statti`;
CREATE TABLE `statti` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` int(111) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `tegs` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=cp1251;

-- ----------------------------
--  Records of `statti`
-- ----------------------------
BEGIN;
INSERT INTO `statti` VALUES ('1', '0', '', '', ''), ('2', '1464376143', 'sdf', 'sdf', 'sdf'), ('3', '1464376321', 'dfgd', 'dfg', '234'), ('4', '1464377017', 'dfgd', 'dfg', '234'), ('5', '1464377076', 'Пизда', 'Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана Ебана ', 'ываывбы,ывывб,Ывыв'), ('6', '1464377180', '', '', '');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
