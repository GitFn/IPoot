/*
Navicat MySQL Data Transfer

Source Server         : www.ipoot.com
Source Server Version : 80024
Source Database       : ipoot_db

Target Server Type    : MYSQL
Target Server Version : 80024
File Encoding         : 65001

Date: 2022-03-06 03:18:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ipoot_logs
-- ----------------------------
DROP TABLE IF EXISTS `ipoot_logs`;
CREATE TABLE `ipoot_logs` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID编号',
  `uploadtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新的时间',
  `IP_Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT 'IP地址',
  `IP_Number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT '数字IP地址',
  `IP_Attribution` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT 'IP归属地',
  `IPproxy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT '代理IP地址',
  `VisitingURL` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT 'URL地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='查询记录汇总表';

-- ----------------------------
-- Records of ipoot_logs
-- ----------------------------
