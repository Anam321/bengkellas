/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : bengkellas

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 23/05/2022 19:49:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery`  (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_post` date NULL DEFAULT NULL,
  `projek_id` int(11) NULL DEFAULT NULL,
  `produk_id` int(11) NULL DEFAULT NULL,
  `token` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`gallery_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES (31, NULL, 'WhatsApp_Image_2022-04-07_at_16_34_26.jpeg', NULL, NULL, 6, '2');
INSERT INTO `gallery` VALUES (32, NULL, 'WhatsApp_Image_2022-04-07_at_16_47_51.jpeg', NULL, NULL, 6, '2');
INSERT INTO `gallery` VALUES (33, NULL, 'WhatsApp_Image_2022-04-12_at_20_00_41_(1).jpeg', NULL, NULL, 7, '2');
INSERT INTO `gallery` VALUES (34, NULL, 'WhatsApp_Image_2022-04-12_at_20_00_41.jpeg', NULL, NULL, 0, '2');
INSERT INTO `gallery` VALUES (35, NULL, 'WhatsApp_Image_2022-04-12_at_20_00_07.jpeg', NULL, NULL, 7, '2');
INSERT INTO `gallery` VALUES (36, 'kanopi', 'kanopi-1653309837.jpeg', '2022-05-23', NULL, NULL, '1');
INSERT INTO `gallery` VALUES (37, 'kanopi2', 'kanopi2-1653309887.jpeg', '2022-05-23', NULL, NULL, '1');
INSERT INTO `gallery` VALUES (38, 'kanopi3', 'kanopi3-1653309901.jpeg', '2022-05-23', NULL, NULL, '1');
INSERT INTO `gallery` VALUES (39, 'kanopi4', 'kanopi4-1653309919.jpeg', '2022-05-23', NULL, NULL, '1');

-- ----------------------------
-- Table structure for ref_produk
-- ----------------------------
DROP TABLE IF EXISTS `ref_produk`;
CREATE TABLE `ref_produk`  (
  `produk_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_post` datetime NOT NULL,
  `slug` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`produk_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_produk
-- ----------------------------
INSERT INTO `ref_produk` VALUES (6, 'Canopy alderon', 'Canopy', '<span style=\"color: rgb(108, 117, 125); font-family: Nunito, sans-serif; font-size: 14.4px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</span>', 'canopy-alderon-1653296693.jpeg', '2022-05-23 09:04:53', 'canopy-alderon', '125.000,00');
INSERT INTO `ref_produk` VALUES (7, 'canopy murah meriah', 'Canopy', '<span style=\"color: rgb(108, 117, 125); font-family: Nunito, sans-serif; font-size: 14.4px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</span>', 'canopy-murah-meriah-1653296734.jpeg', '2022-05-23 09:05:34', 'canopy-murah-meriah', '546.000,00');

-- ----------------------------
-- Table structure for set_kontak
-- ----------------------------
DROP TABLE IF EXISTS `set_kontak`;
CREATE TABLE `set_kontak`  (
  `kontak_id` int(11) NOT NULL AUTO_INCREMENT,
  `telpon` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `facebook` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `instagram` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `whatsap` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `github` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kontak_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of set_kontak
-- ----------------------------
INSERT INTO `set_kontak` VALUES (1, '87772211019', 'meinfo@anamsaepul.site', 'https://facebook.com/anam.as.1422409/', 'intagram.com', '87772211018', NULL);

-- ----------------------------
-- Table structure for set_profil
-- ----------------------------
DROP TABLE IF EXISTS `set_profil`;
CREATE TABLE `set_profil`  (
  `profil_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `logo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kontak_id` int(11) NULL DEFAULT NULL,
  `company_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `web_url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`profil_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of set_profil
-- ----------------------------
INSERT INTO `set_profil` VALUES (1, 'saepul anam', 'jl. jkjkjkkkjkjkkj', 'dccfgh', '1651221939.png', '1651222435.jpg', 1, 'saepul anam', 'https://www.anamsaepul.site');

-- ----------------------------
-- Table structure for tender
-- ----------------------------
DROP TABLE IF EXISTS `tender`;
CREATE TABLE `tender`  (
  `projek_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_post` date NULL DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`projek_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tender
-- ----------------------------
INSERT INTO `tender` VALUES (2, 'Web Bengkellas Rafi Utama', 'https://rafiutama.com', '2022-05-03', '1651546694.jpg');

-- ----------------------------
-- Table structure for tweb_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tweb_kategori`;
CREATE TABLE `tweb_kategori`  (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tweb_kategori
-- ----------------------------
INSERT INTO `tweb_kategori` VALUES (1, 'Canopy');
INSERT INTO `tweb_kategori` VALUES (2, 'Pagar');
INSERT INTO `tweb_kategori` VALUES (3, 'Tralis');
INSERT INTO `tweb_kategori` VALUES (4, 'Tangga');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` date NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'saepul anam', 'admin', '$2y$10$tTkqFyup5YE0PcP.VNs1lOl/CclznGAjbGpEnNd4yjj03KCmwDIyq', 'default.jfif', 1, '2022-04-28');
INSERT INTO `user` VALUES (2, 'saepul anam', 'admin', '$2y$10$DFXgfnGsF3bc2NekfhHJZuRvYWzzABWQC4gNYN.DQU7l6jtto3gne', 'default.jpg', 0, '2022-04-28');

SET FOREIGN_KEY_CHECKS = 1;
