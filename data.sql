/*
 Navicat Premium Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 80012
 Source Host           : localhost:3306
 Source Schema         : data

 Target Server Type    : MySQL
 Target Server Version : 80012
 File Encoding         : 65001

 Date: 21/01/2024 18:39:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户名',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', '123456');

-- ----------------------------
-- Table structure for latestnews
-- ----------------------------
DROP TABLE IF EXISTS `latestnews`;
CREATE TABLE `latestnews`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标签',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标题',
  `createtime` datetime(0) NULL DEFAULT NULL COMMENT '时间',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '内容',
  `user_id` int(11) NULL DEFAULT NULL COMMENT '用户',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '帖子管理' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of latestnews
-- ----------------------------
INSERT INTO `latestnews` VALUES (5, '2', '123', '2024-01-11 03:28:31', NULL, 11);
INSERT INTO `latestnews` VALUES (6, '2', '123123123', '2024-01-11 03:32:43', '123123', 11);
INSERT INTO `latestnews` VALUES (7, '6', '123123', '2024-01-11 04:28:47', '123123123123123', 11);
INSERT INTO `latestnews` VALUES (8, '6', '12312', '2024-01-11 04:29:56', '3123123', 11);
INSERT INTO `latestnews` VALUES (9, '8', '哈哈第一篇帖子', '2024-01-11 09:07:55', '哈哈第一篇帖子哈哈第一篇帖子哈哈第一篇帖子哈哈第一篇帖子', 12);
INSERT INTO `latestnews` VALUES (10, '2', '测试一下', '2024-01-11 09:08:07', '测试一下测试一下测试一下测试一下', 12);
INSERT INTO `latestnews` VALUES (11, '8', '第二个', '2024-01-11 09:08:18', '123123', 12);
INSERT INTO `latestnews` VALUES (12, '6', '哈哈', '2024-01-11 09:08:47', '哈哈哈哈哈哈哈哈', 12);

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `createtime` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '收藏' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES (4, 5, 7, '2', '2023-10-24 07:09:56');
INSERT INTO `link` VALUES (5, 4, 7, '2', '2023-10-24 07:10:01');
INSERT INTO `link` VALUES (8, 5, 9, '2', '2023-10-24 08:03:44');
INSERT INTO `link` VALUES (7, 4, 9, '2', '2023-10-24 07:24:37');
INSERT INTO `link` VALUES (9, 8, 11, '123', '2024-01-11 05:32:26');
INSERT INTO `link` VALUES (10, 8, 11, '111', '2024-01-11 05:33:46');
INSERT INTO `link` VALUES (11, 11, 12, '不错', '2024-01-11 09:08:30');
INSERT INTO `link` VALUES (12, 11, 12, '留言', '2024-01-11 09:08:36');

-- ----------------------------
-- Table structure for model
-- ----------------------------
DROP TABLE IF EXISTS `model`;
CREATE TABLE `model`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT '模块名称',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT '模块图片',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci COMMENT = '帖子模块' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model
-- ----------------------------
INSERT INTO `model` VALUES (2, '该游戏板块请严格遵守规则否则永久删除账号', 'avatars/aKIXubjGcgmkV96iT2QTGy1w6GsAAQamoFs6nAtT.png');
INSERT INTO `model` VALUES (3, '该游戏板块请严格遵守规则否则永久删除账号', 'avatars/LHbHJSG2LWqdA0HJ9Xlmp2gBBTxyVTpm8HVhFvvv.png');
INSERT INTO `model` VALUES (4, '该游戏板块请严格遵守规则否则永久删除账号', 'avatars/oWEPEUXnMNnDLwF3XfiQhLQYubkKD3I08N91p9ZQ.png');
INSERT INTO `model` VALUES (5, '该游戏板块请严格遵守规则否则永久删除账号', 'avatars/0kFbpMUANzgckXAe35whzPomq8zORv3aYyPjlaHi.png');
INSERT INTO `model` VALUES (6, '该游戏板块请严格遵守规则否则永久删除账号', 'avatars/QZAms9gcDgDDNZx7Q0tIU9gIEjAnKRgsHyoc1W6y.png');
INSERT INTO `model` VALUES (7, '该游戏板块请严格遵守规则否则永久删除账号', 'avatars/ixXTR4aZJSxemrNTQz0jxMeKkCnAKQHEQTR1lJnk.png');
INSERT INTO `model` VALUES (8, '模块公告 不允许骂人模块公告 不允许骂人模块公告 不允许骂人模块公告 不允许骂人', 'avatars/qhj09FRfXDbzCZ0T8bLMBN2h5cA4slYsmQhkrwdS.png');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '手机号',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '密码',
  `sex` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '性别',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '头像',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (2, '22', '22', '女', '张三', '22');
INSERT INTO `user` VALUES (3, '19999999999', '123456', '男', '李四', NULL);
INSERT INTO `user` VALUES (4, '16666666666', '123456', '女', '王五', NULL);
INSERT INTO `user` VALUES (6, '15555555555', '123456', '男', '张三', NULL);
INSERT INTO `user` VALUES (7, '18738978978', '321', '男', '123', NULL);
INSERT INTO `user` VALUES (8, '18738978979', '123', '男', '123', NULL);
INSERT INTO `user` VALUES (9, '18738978912', '123321', '男', '123张三', NULL);
INSERT INTO `user` VALUES (10, '111', '111', '111', '111', NULL);
INSERT INTO `user` VALUES (11, '222', '22', '222', '222', NULL);
INSERT INTO `user` VALUES (12, '55555555555', '123456', '男', '测试', NULL);

SET FOREIGN_KEY_CHECKS = 1;
