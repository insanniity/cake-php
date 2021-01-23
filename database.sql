/*
 Navicat Premium Data Transfer

 Source Server         : My Local
 Source Server Type    : MySQL
 Source Server Version : 80021
 Source Host           : localhost:3306
 Source Schema         : cake

 Target Server Type    : MySQL
 Target Server Version : 80021
 File Encoding         : 65001

 Date: 23/01/2021 19:12:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created` datetime NULL DEFAULT NULL,
  `modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'admin@admin.com', '$2y$10$Enaqkmd4OnHx6y260tIrG.yON042UTLzsMJCbFTUlChfJI..gTQW2', '2021-01-23 03:23:28', '2021-01-23 03:23:28');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
