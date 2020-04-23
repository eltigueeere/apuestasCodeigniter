/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : adn

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-08-02 02:01:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `catAplicacion`
-- ----------------------------
DROP TABLE IF EXISTS `catAplicacion`;
CREATE TABLE `catAplicacion` (
  `idAplicacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreAplicacion` varchar(100) NOT NULL,
  `urlAplicacion` varchar(100) NOT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `idUsuarioCambio` int(10) unsigned DEFAULT NULL,
  `fechaCrea` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaCambio` datetime DEFAULT NULL,
  `idStatus` tinyint(1) unsigned NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idAplicacion`),
  UNIQUE KEY `Index_aplicacion_unico` (`nombreAplicacion`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of catAplicacion
-- ----------------------------
INSERT INTO `catAplicacion` VALUES ('1', 'Administracion', 'admin', '1', null, '2018-10-11 14:46:22', '0000-00-00 00:00:00', '1', 'link');
INSERT INTO `catAplicacion` VALUES ('2', 'Evento', 'evento', '1', null, '2019-08-02 00:58:40', null, '1', 'calendar-check-o');

-- ----------------------------
-- Table structure for `catArea`
-- ----------------------------
DROP TABLE IF EXISTS `catArea`;
CREATE TABLE `catArea` (
  `idArea` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idArea`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of catArea
-- ----------------------------
INSERT INTO `catArea` VALUES ('1', 'INNOVACION Y DESARROLLO', '1');

-- ----------------------------
-- Table structure for `catIcon`
-- ----------------------------
DROP TABLE IF EXISTS `catIcon`;
CREATE TABLE `catIcon` (
  `idIcon` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idIcon`)
) ENGINE=MyISAM AUTO_INCREMENT=863 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of catIcon
-- ----------------------------
INSERT INTO `catIcon` VALUES ('1', '500px');
INSERT INTO `catIcon` VALUES ('2', 'amazon');
INSERT INTO `catIcon` VALUES ('3', 'balance-scale');
INSERT INTO `catIcon` VALUES ('4', 'battery-0');
INSERT INTO `catIcon` VALUES ('5', 'battery-1');
INSERT INTO `catIcon` VALUES ('6', 'battery-2');
INSERT INTO `catIcon` VALUES ('7', 'battery-3');
INSERT INTO `catIcon` VALUES ('8', 'battery-4');
INSERT INTO `catIcon` VALUES ('9', 'battery-empty');
INSERT INTO `catIcon` VALUES ('10', 'battery-full');
INSERT INTO `catIcon` VALUES ('11', 'battery-half');
INSERT INTO `catIcon` VALUES ('12', 'battery-quarter');
INSERT INTO `catIcon` VALUES ('13', 'battery-three-quarters');
INSERT INTO `catIcon` VALUES ('14', 'black-tie');
INSERT INTO `catIcon` VALUES ('15', 'calendar-check-o');
INSERT INTO `catIcon` VALUES ('16', 'calendar-minus-o');
INSERT INTO `catIcon` VALUES ('17', 'calendar-plus-o');
INSERT INTO `catIcon` VALUES ('18', 'calendar-times-o');
INSERT INTO `catIcon` VALUES ('19', 'cc-diners-club');
INSERT INTO `catIcon` VALUES ('20', 'cc-jcb');
INSERT INTO `catIcon` VALUES ('21', 'chrome');
INSERT INTO `catIcon` VALUES ('22', 'clone');
INSERT INTO `catIcon` VALUES ('23', 'commenting');
INSERT INTO `catIcon` VALUES ('24', 'commenting-o');
INSERT INTO `catIcon` VALUES ('25', 'contao');
INSERT INTO `catIcon` VALUES ('26', 'creative-commons');
INSERT INTO `catIcon` VALUES ('27', 'expeditedssl');
INSERT INTO `catIcon` VALUES ('28', 'firefox');
INSERT INTO `catIcon` VALUES ('29', 'fonticons');
INSERT INTO `catIcon` VALUES ('30', 'genderless');
INSERT INTO `catIcon` VALUES ('31', 'get-pocket');
INSERT INTO `catIcon` VALUES ('32', 'gg');
INSERT INTO `catIcon` VALUES ('33', 'gg-circle');
INSERT INTO `catIcon` VALUES ('34', 'hand-grab-o');
INSERT INTO `catIcon` VALUES ('35', 'hand-lizard-o');
INSERT INTO `catIcon` VALUES ('36', 'hand-paper-o');
INSERT INTO `catIcon` VALUES ('37', 'hand-peace-o');
INSERT INTO `catIcon` VALUES ('38', 'hand-pointer-o');
INSERT INTO `catIcon` VALUES ('39', 'hand-rock-o');
INSERT INTO `catIcon` VALUES ('40', 'hand-scissors-o');
INSERT INTO `catIcon` VALUES ('41', 'hand-spock-o');
INSERT INTO `catIcon` VALUES ('42', 'hand-stop-o');
INSERT INTO `catIcon` VALUES ('43', 'hourglass');
INSERT INTO `catIcon` VALUES ('44', 'hourglass-1');
INSERT INTO `catIcon` VALUES ('45', 'hourglass-2');
INSERT INTO `catIcon` VALUES ('46', 'hourglass-3');
INSERT INTO `catIcon` VALUES ('47', 'hourglass-end');
INSERT INTO `catIcon` VALUES ('48', 'hourglass-half');
INSERT INTO `catIcon` VALUES ('49', 'hourglass-o');
INSERT INTO `catIcon` VALUES ('50', 'hourglass-start');
INSERT INTO `catIcon` VALUES ('51', 'houzz');
INSERT INTO `catIcon` VALUES ('52', 'i-cursor');
INSERT INTO `catIcon` VALUES ('53', 'industry');
INSERT INTO `catIcon` VALUES ('54', 'internet-explorer');
INSERT INTO `catIcon` VALUES ('55', 'map');
INSERT INTO `catIcon` VALUES ('56', 'map-o');
INSERT INTO `catIcon` VALUES ('57', 'map-pin');
INSERT INTO `catIcon` VALUES ('58', 'map-signs');
INSERT INTO `catIcon` VALUES ('59', 'mouse-pointer');
INSERT INTO `catIcon` VALUES ('60', 'object-group');
INSERT INTO `catIcon` VALUES ('61', 'object-ungroup');
INSERT INTO `catIcon` VALUES ('62', 'odnoklassniki');
INSERT INTO `catIcon` VALUES ('63', 'odnoklassniki-square');
INSERT INTO `catIcon` VALUES ('64', 'opencart');
INSERT INTO `catIcon` VALUES ('65', 'opera');
INSERT INTO `catIcon` VALUES ('66', 'optin-monster');
INSERT INTO `catIcon` VALUES ('67', 'registered');
INSERT INTO `catIcon` VALUES ('68', 'safari');
INSERT INTO `catIcon` VALUES ('69', 'sticky-note');
INSERT INTO `catIcon` VALUES ('70', 'sticky-note-o');
INSERT INTO `catIcon` VALUES ('71', 'television');
INSERT INTO `catIcon` VALUES ('72', 'trademark');
INSERT INTO `catIcon` VALUES ('73', 'tripadvisor');
INSERT INTO `catIcon` VALUES ('74', 'tv');
INSERT INTO `catIcon` VALUES ('75', 'vimeo');
INSERT INTO `catIcon` VALUES ('76', 'wikipedia-w');
INSERT INTO `catIcon` VALUES ('77', 'y-combinator');
INSERT INTO `catIcon` VALUES ('78', 'yc');
INSERT INTO `catIcon` VALUES ('79', 'adjust');
INSERT INTO `catIcon` VALUES ('80', 'anchor');
INSERT INTO `catIcon` VALUES ('81', 'archive');
INSERT INTO `catIcon` VALUES ('82', 'area-chart');
INSERT INTO `catIcon` VALUES ('83', 'arrows');
INSERT INTO `catIcon` VALUES ('84', 'arrows-h');
INSERT INTO `catIcon` VALUES ('85', 'arrows-v');
INSERT INTO `catIcon` VALUES ('86', 'asterisk');
INSERT INTO `catIcon` VALUES ('87', 'at');
INSERT INTO `catIcon` VALUES ('88', 'automobile');
INSERT INTO `catIcon` VALUES ('89', 'balance-scale');
INSERT INTO `catIcon` VALUES ('90', 'ban');
INSERT INTO `catIcon` VALUES ('91', 'bank');
INSERT INTO `catIcon` VALUES ('92', 'bar-chart');
INSERT INTO `catIcon` VALUES ('93', 'bar-chart-o');
INSERT INTO `catIcon` VALUES ('94', 'barcode');
INSERT INTO `catIcon` VALUES ('95', 'bars');
INSERT INTO `catIcon` VALUES ('96', 'battery-0');
INSERT INTO `catIcon` VALUES ('97', 'battery-1');
INSERT INTO `catIcon` VALUES ('98', 'battery-2');
INSERT INTO `catIcon` VALUES ('99', 'battery-3');
INSERT INTO `catIcon` VALUES ('100', 'battery-4');
INSERT INTO `catIcon` VALUES ('101', 'battery-empty');
INSERT INTO `catIcon` VALUES ('102', 'battery-full');
INSERT INTO `catIcon` VALUES ('103', 'battery-half');
INSERT INTO `catIcon` VALUES ('104', 'battery-quarter');
INSERT INTO `catIcon` VALUES ('105', 'battery-three-quarters');
INSERT INTO `catIcon` VALUES ('106', 'bed');
INSERT INTO `catIcon` VALUES ('107', 'beer');
INSERT INTO `catIcon` VALUES ('108', 'bell');
INSERT INTO `catIcon` VALUES ('109', 'bell-o');
INSERT INTO `catIcon` VALUES ('110', 'bell-slash');
INSERT INTO `catIcon` VALUES ('111', 'bell-slash-o');
INSERT INTO `catIcon` VALUES ('112', 'bicycle');
INSERT INTO `catIcon` VALUES ('113', 'binoculars');
INSERT INTO `catIcon` VALUES ('114', 'birthday-cake');
INSERT INTO `catIcon` VALUES ('115', 'bolt');
INSERT INTO `catIcon` VALUES ('116', 'bomb');
INSERT INTO `catIcon` VALUES ('117', 'book');
INSERT INTO `catIcon` VALUES ('118', 'bookmark');
INSERT INTO `catIcon` VALUES ('119', 'bookmark-o');
INSERT INTO `catIcon` VALUES ('120', 'briefcase');
INSERT INTO `catIcon` VALUES ('121', 'bug');
INSERT INTO `catIcon` VALUES ('122', 'building');
INSERT INTO `catIcon` VALUES ('123', 'building-o');
INSERT INTO `catIcon` VALUES ('124', 'bullhorn');
INSERT INTO `catIcon` VALUES ('125', 'bullseye');
INSERT INTO `catIcon` VALUES ('126', 'bus');
INSERT INTO `catIcon` VALUES ('127', 'cab');
INSERT INTO `catIcon` VALUES ('128', 'calculator');
INSERT INTO `catIcon` VALUES ('129', 'calendar');
INSERT INTO `catIcon` VALUES ('130', 'calendar-check-o');
INSERT INTO `catIcon` VALUES ('131', 'calendar-minus-o');
INSERT INTO `catIcon` VALUES ('132', 'calendar-o');
INSERT INTO `catIcon` VALUES ('133', 'calendar-plus-o');
INSERT INTO `catIcon` VALUES ('134', 'calendar-times-o');
INSERT INTO `catIcon` VALUES ('135', 'camera');
INSERT INTO `catIcon` VALUES ('136', 'camera-retro');
INSERT INTO `catIcon` VALUES ('137', 'car');
INSERT INTO `catIcon` VALUES ('138', 'caret-square-o-down');
INSERT INTO `catIcon` VALUES ('139', 'caret-square-o-left');
INSERT INTO `catIcon` VALUES ('140', 'caret-square-o-right');
INSERT INTO `catIcon` VALUES ('141', 'caret-square-o-up');
INSERT INTO `catIcon` VALUES ('142', 'cart-arrow-down');
INSERT INTO `catIcon` VALUES ('143', 'cart-plus');
INSERT INTO `catIcon` VALUES ('144', 'cc');
INSERT INTO `catIcon` VALUES ('145', 'certificate');
INSERT INTO `catIcon` VALUES ('146', 'check');
INSERT INTO `catIcon` VALUES ('147', 'check-circle');
INSERT INTO `catIcon` VALUES ('148', 'check-circle-o');
INSERT INTO `catIcon` VALUES ('149', 'check-square');
INSERT INTO `catIcon` VALUES ('150', 'check-square-o');
INSERT INTO `catIcon` VALUES ('151', 'child');
INSERT INTO `catIcon` VALUES ('152', 'circle');
INSERT INTO `catIcon` VALUES ('153', 'circle-o');
INSERT INTO `catIcon` VALUES ('154', 'circle-o-notch');
INSERT INTO `catIcon` VALUES ('155', 'circle-thin');
INSERT INTO `catIcon` VALUES ('156', 'clock-o');
INSERT INTO `catIcon` VALUES ('157', 'clone');
INSERT INTO `catIcon` VALUES ('158', 'close');
INSERT INTO `catIcon` VALUES ('159', 'cloud');
INSERT INTO `catIcon` VALUES ('160', 'cloud-download');
INSERT INTO `catIcon` VALUES ('161', 'cloud-upload');
INSERT INTO `catIcon` VALUES ('162', 'code');
INSERT INTO `catIcon` VALUES ('163', 'code-fork');
INSERT INTO `catIcon` VALUES ('164', 'coffee');
INSERT INTO `catIcon` VALUES ('165', 'cog');
INSERT INTO `catIcon` VALUES ('166', 'cogs');
INSERT INTO `catIcon` VALUES ('167', 'comment');
INSERT INTO `catIcon` VALUES ('168', 'comment-o');
INSERT INTO `catIcon` VALUES ('169', 'commenting');
INSERT INTO `catIcon` VALUES ('170', 'commenting-o');
INSERT INTO `catIcon` VALUES ('171', 'comments');
INSERT INTO `catIcon` VALUES ('172', 'comments-o');
INSERT INTO `catIcon` VALUES ('173', 'compass');
INSERT INTO `catIcon` VALUES ('174', 'copyright');
INSERT INTO `catIcon` VALUES ('175', 'creative-commons');
INSERT INTO `catIcon` VALUES ('176', 'credit-card');
INSERT INTO `catIcon` VALUES ('177', 'crop');
INSERT INTO `catIcon` VALUES ('178', 'crosshairs');
INSERT INTO `catIcon` VALUES ('179', 'cube');
INSERT INTO `catIcon` VALUES ('180', 'cubes');
INSERT INTO `catIcon` VALUES ('181', 'cutlery');
INSERT INTO `catIcon` VALUES ('182', 'dashboard');
INSERT INTO `catIcon` VALUES ('183', 'database');
INSERT INTO `catIcon` VALUES ('184', 'desktop');
INSERT INTO `catIcon` VALUES ('185', 'diamond');
INSERT INTO `catIcon` VALUES ('186', 'dot-circle-o');
INSERT INTO `catIcon` VALUES ('187', 'download');
INSERT INTO `catIcon` VALUES ('188', 'edit');
INSERT INTO `catIcon` VALUES ('189', 'ellipsis-h');
INSERT INTO `catIcon` VALUES ('190', 'ellipsis-v');
INSERT INTO `catIcon` VALUES ('191', 'envelope');
INSERT INTO `catIcon` VALUES ('192', 'envelope-o');
INSERT INTO `catIcon` VALUES ('193', 'envelope-square');
INSERT INTO `catIcon` VALUES ('194', 'eraser');
INSERT INTO `catIcon` VALUES ('195', 'exchange');
INSERT INTO `catIcon` VALUES ('196', 'exclamation');
INSERT INTO `catIcon` VALUES ('197', 'exclamation-circle');
INSERT INTO `catIcon` VALUES ('198', 'exclamation-triangle');
INSERT INTO `catIcon` VALUES ('199', 'external-link');
INSERT INTO `catIcon` VALUES ('200', 'external-link-square');
INSERT INTO `catIcon` VALUES ('201', 'eye');
INSERT INTO `catIcon` VALUES ('202', 'eye-slash');
INSERT INTO `catIcon` VALUES ('203', 'eyedropper');
INSERT INTO `catIcon` VALUES ('204', 'fax');
INSERT INTO `catIcon` VALUES ('205', 'feed');
INSERT INTO `catIcon` VALUES ('206', 'female');
INSERT INTO `catIcon` VALUES ('207', 'fighter-jet');
INSERT INTO `catIcon` VALUES ('208', 'file-archive-o');
INSERT INTO `catIcon` VALUES ('209', 'file-audio-o');
INSERT INTO `catIcon` VALUES ('210', 'file-code-o');
INSERT INTO `catIcon` VALUES ('211', 'file-excel-o');
INSERT INTO `catIcon` VALUES ('212', 'file-image-o');
INSERT INTO `catIcon` VALUES ('213', 'file-movie-o');
INSERT INTO `catIcon` VALUES ('214', 'file-pdf-o');
INSERT INTO `catIcon` VALUES ('215', 'file-photo-o');
INSERT INTO `catIcon` VALUES ('216', 'file-picture-o');
INSERT INTO `catIcon` VALUES ('217', 'file-powerpoint-o');
INSERT INTO `catIcon` VALUES ('218', 'file-sound-o');
INSERT INTO `catIcon` VALUES ('219', 'file-video-o');
INSERT INTO `catIcon` VALUES ('220', 'file-word-o');
INSERT INTO `catIcon` VALUES ('221', 'file-zip-o');
INSERT INTO `catIcon` VALUES ('222', 'film');
INSERT INTO `catIcon` VALUES ('223', 'filter');
INSERT INTO `catIcon` VALUES ('224', 'fire');
INSERT INTO `catIcon` VALUES ('225', 'fire-extinguisher');
INSERT INTO `catIcon` VALUES ('226', 'flag');
INSERT INTO `catIcon` VALUES ('227', 'flag-checkered');
INSERT INTO `catIcon` VALUES ('228', 'flag-o');
INSERT INTO `catIcon` VALUES ('229', 'flash');
INSERT INTO `catIcon` VALUES ('230', 'flask');
INSERT INTO `catIcon` VALUES ('231', 'folder');
INSERT INTO `catIcon` VALUES ('232', 'folder-o');
INSERT INTO `catIcon` VALUES ('233', 'folder-open');
INSERT INTO `catIcon` VALUES ('234', 'folder-open-o');
INSERT INTO `catIcon` VALUES ('235', 'frown-o');
INSERT INTO `catIcon` VALUES ('236', 'futbol-o');
INSERT INTO `catIcon` VALUES ('237', 'gamepad');
INSERT INTO `catIcon` VALUES ('238', 'gavel');
INSERT INTO `catIcon` VALUES ('239', 'gear');
INSERT INTO `catIcon` VALUES ('240', 'gears');
INSERT INTO `catIcon` VALUES ('241', 'gift');
INSERT INTO `catIcon` VALUES ('242', 'glass');
INSERT INTO `catIcon` VALUES ('243', 'globe');
INSERT INTO `catIcon` VALUES ('244', 'graduation-cap');
INSERT INTO `catIcon` VALUES ('245', 'group');
INSERT INTO `catIcon` VALUES ('246', 'hand-grab-o');
INSERT INTO `catIcon` VALUES ('247', 'hand-lizard-o');
INSERT INTO `catIcon` VALUES ('248', 'hand-paper-o');
INSERT INTO `catIcon` VALUES ('249', 'hand-peace-o');
INSERT INTO `catIcon` VALUES ('250', 'hand-pointer-o');
INSERT INTO `catIcon` VALUES ('251', 'hand-rock-o');
INSERT INTO `catIcon` VALUES ('252', 'hand-scissors-o');
INSERT INTO `catIcon` VALUES ('253', 'hand-spock-o');
INSERT INTO `catIcon` VALUES ('254', 'hand-stop-o');
INSERT INTO `catIcon` VALUES ('255', 'hdd-o');
INSERT INTO `catIcon` VALUES ('256', 'headphones');
INSERT INTO `catIcon` VALUES ('257', 'heart');
INSERT INTO `catIcon` VALUES ('258', 'heart-o');
INSERT INTO `catIcon` VALUES ('259', 'heartbeat');
INSERT INTO `catIcon` VALUES ('260', 'history');
INSERT INTO `catIcon` VALUES ('261', 'home');
INSERT INTO `catIcon` VALUES ('262', 'hotel');
INSERT INTO `catIcon` VALUES ('263', 'hourglass');
INSERT INTO `catIcon` VALUES ('264', 'hourglass-1');
INSERT INTO `catIcon` VALUES ('265', 'hourglass-2');
INSERT INTO `catIcon` VALUES ('266', 'hourglass-3');
INSERT INTO `catIcon` VALUES ('267', 'hourglass-end');
INSERT INTO `catIcon` VALUES ('268', 'hourglass-half');
INSERT INTO `catIcon` VALUES ('269', 'hourglass-o');
INSERT INTO `catIcon` VALUES ('270', 'hourglass-start');
INSERT INTO `catIcon` VALUES ('271', 'i-cursor');
INSERT INTO `catIcon` VALUES ('272', 'image');
INSERT INTO `catIcon` VALUES ('273', 'inbox');
INSERT INTO `catIcon` VALUES ('274', 'industry');
INSERT INTO `catIcon` VALUES ('275', 'info');
INSERT INTO `catIcon` VALUES ('276', 'info-circle');
INSERT INTO `catIcon` VALUES ('277', 'institution');
INSERT INTO `catIcon` VALUES ('278', 'key');
INSERT INTO `catIcon` VALUES ('279', 'keyboard-o');
INSERT INTO `catIcon` VALUES ('280', 'language');
INSERT INTO `catIcon` VALUES ('281', 'laptop');
INSERT INTO `catIcon` VALUES ('282', 'leaf');
INSERT INTO `catIcon` VALUES ('283', 'legal');
INSERT INTO `catIcon` VALUES ('284', 'lemon-o');
INSERT INTO `catIcon` VALUES ('285', 'level-down');
INSERT INTO `catIcon` VALUES ('286', 'level-up');
INSERT INTO `catIcon` VALUES ('287', 'life-bouy');
INSERT INTO `catIcon` VALUES ('288', 'life-buoy');
INSERT INTO `catIcon` VALUES ('289', 'life-ring');
INSERT INTO `catIcon` VALUES ('290', 'life-saver');
INSERT INTO `catIcon` VALUES ('291', 'lightbulb-o');
INSERT INTO `catIcon` VALUES ('292', 'line-chart');
INSERT INTO `catIcon` VALUES ('293', 'location-arrow');
INSERT INTO `catIcon` VALUES ('294', 'lock');
INSERT INTO `catIcon` VALUES ('295', 'magic');
INSERT INTO `catIcon` VALUES ('296', 'magnet');
INSERT INTO `catIcon` VALUES ('297', 'mail-forward');
INSERT INTO `catIcon` VALUES ('298', 'mail-reply');
INSERT INTO `catIcon` VALUES ('299', 'mail-reply-all');
INSERT INTO `catIcon` VALUES ('300', 'male');
INSERT INTO `catIcon` VALUES ('301', 'map');
INSERT INTO `catIcon` VALUES ('302', 'map-marker');
INSERT INTO `catIcon` VALUES ('303', 'map-o');
INSERT INTO `catIcon` VALUES ('304', 'map-pin');
INSERT INTO `catIcon` VALUES ('305', 'map-signs');
INSERT INTO `catIcon` VALUES ('306', 'meh-o');
INSERT INTO `catIcon` VALUES ('307', 'microphone');
INSERT INTO `catIcon` VALUES ('308', 'microphone-slash');
INSERT INTO `catIcon` VALUES ('309', 'minus');
INSERT INTO `catIcon` VALUES ('310', 'minus-circle');
INSERT INTO `catIcon` VALUES ('311', 'minus-square');
INSERT INTO `catIcon` VALUES ('312', 'minus-square-o');
INSERT INTO `catIcon` VALUES ('313', 'mobile');
INSERT INTO `catIcon` VALUES ('314', 'mobile-phone');
INSERT INTO `catIcon` VALUES ('315', 'money');
INSERT INTO `catIcon` VALUES ('316', 'moon-o');
INSERT INTO `catIcon` VALUES ('317', 'mortar-board');
INSERT INTO `catIcon` VALUES ('318', 'motorcycle');
INSERT INTO `catIcon` VALUES ('319', 'mouse-pointer');
INSERT INTO `catIcon` VALUES ('320', 'music');
INSERT INTO `catIcon` VALUES ('321', 'navicon');
INSERT INTO `catIcon` VALUES ('322', 'newspaper-o');
INSERT INTO `catIcon` VALUES ('323', 'object-group');
INSERT INTO `catIcon` VALUES ('324', 'object-ungroup');
INSERT INTO `catIcon` VALUES ('325', 'paint-brush');
INSERT INTO `catIcon` VALUES ('326', 'paper-plane');
INSERT INTO `catIcon` VALUES ('327', 'paper-plane-o');
INSERT INTO `catIcon` VALUES ('328', 'paw');
INSERT INTO `catIcon` VALUES ('329', 'pencil');
INSERT INTO `catIcon` VALUES ('330', 'pencil-square');
INSERT INTO `catIcon` VALUES ('331', 'pencil-square-o');
INSERT INTO `catIcon` VALUES ('332', 'phone');
INSERT INTO `catIcon` VALUES ('333', 'phone-square');
INSERT INTO `catIcon` VALUES ('334', 'photo');
INSERT INTO `catIcon` VALUES ('335', 'picture-o');
INSERT INTO `catIcon` VALUES ('336', 'pie-chart');
INSERT INTO `catIcon` VALUES ('337', 'plane');
INSERT INTO `catIcon` VALUES ('338', 'plug');
INSERT INTO `catIcon` VALUES ('339', 'plus');
INSERT INTO `catIcon` VALUES ('340', 'plus-circle');
INSERT INTO `catIcon` VALUES ('341', 'plus-square');
INSERT INTO `catIcon` VALUES ('342', 'plus-square-o');
INSERT INTO `catIcon` VALUES ('343', 'power-off');
INSERT INTO `catIcon` VALUES ('344', 'print');
INSERT INTO `catIcon` VALUES ('345', 'puzzle-piece');
INSERT INTO `catIcon` VALUES ('346', 'qrcode');
INSERT INTO `catIcon` VALUES ('347', 'question');
INSERT INTO `catIcon` VALUES ('348', 'question-circle');
INSERT INTO `catIcon` VALUES ('349', 'quote-left');
INSERT INTO `catIcon` VALUES ('350', 'quote-right');
INSERT INTO `catIcon` VALUES ('351', 'random');
INSERT INTO `catIcon` VALUES ('352', 'recycle');
INSERT INTO `catIcon` VALUES ('353', 'refresh');
INSERT INTO `catIcon` VALUES ('354', 'registered');
INSERT INTO `catIcon` VALUES ('355', 'remove');
INSERT INTO `catIcon` VALUES ('356', 'reorder');
INSERT INTO `catIcon` VALUES ('357', 'reply');
INSERT INTO `catIcon` VALUES ('358', 'reply-all');
INSERT INTO `catIcon` VALUES ('359', 'retweet');
INSERT INTO `catIcon` VALUES ('360', 'road');
INSERT INTO `catIcon` VALUES ('361', 'rocket');
INSERT INTO `catIcon` VALUES ('362', 'rss');
INSERT INTO `catIcon` VALUES ('363', 'rss-square');
INSERT INTO `catIcon` VALUES ('364', 'search');
INSERT INTO `catIcon` VALUES ('365', 'search-minus');
INSERT INTO `catIcon` VALUES ('366', 'search-plus');
INSERT INTO `catIcon` VALUES ('367', 'send');
INSERT INTO `catIcon` VALUES ('368', 'send-o');
INSERT INTO `catIcon` VALUES ('369', 'server');
INSERT INTO `catIcon` VALUES ('370', 'share');
INSERT INTO `catIcon` VALUES ('371', 'share-alt');
INSERT INTO `catIcon` VALUES ('372', 'share-alt-square');
INSERT INTO `catIcon` VALUES ('373', 'share-square');
INSERT INTO `catIcon` VALUES ('374', 'share-square-o');
INSERT INTO `catIcon` VALUES ('375', 'shield');
INSERT INTO `catIcon` VALUES ('376', 'ship');
INSERT INTO `catIcon` VALUES ('377', 'shopping-cart');
INSERT INTO `catIcon` VALUES ('378', 'sign-in');
INSERT INTO `catIcon` VALUES ('379', 'sign-out');
INSERT INTO `catIcon` VALUES ('380', 'signal');
INSERT INTO `catIcon` VALUES ('381', 'sitemap');
INSERT INTO `catIcon` VALUES ('382', 'sliders');
INSERT INTO `catIcon` VALUES ('383', 'smile-o');
INSERT INTO `catIcon` VALUES ('384', 'soccer-ball-o');
INSERT INTO `catIcon` VALUES ('385', 'sort');
INSERT INTO `catIcon` VALUES ('386', 'sort-alpha-asc');
INSERT INTO `catIcon` VALUES ('387', 'sort-alpha-desc');
INSERT INTO `catIcon` VALUES ('388', 'sort-amount-asc');
INSERT INTO `catIcon` VALUES ('389', 'sort-amount-desc');
INSERT INTO `catIcon` VALUES ('390', 'sort-asc');
INSERT INTO `catIcon` VALUES ('391', 'sort-desc');
INSERT INTO `catIcon` VALUES ('392', 'sort-down');
INSERT INTO `catIcon` VALUES ('393', 'sort-numeric-asc');
INSERT INTO `catIcon` VALUES ('394', 'sort-numeric-desc');
INSERT INTO `catIcon` VALUES ('395', 'sort-up');
INSERT INTO `catIcon` VALUES ('396', 'space-shuttle');
INSERT INTO `catIcon` VALUES ('397', 'spinner');
INSERT INTO `catIcon` VALUES ('398', 'spoon');
INSERT INTO `catIcon` VALUES ('399', 'square');
INSERT INTO `catIcon` VALUES ('400', 'square-o');
INSERT INTO `catIcon` VALUES ('401', 'star');
INSERT INTO `catIcon` VALUES ('402', 'star-half');
INSERT INTO `catIcon` VALUES ('403', 'star-half-empty');
INSERT INTO `catIcon` VALUES ('404', 'star-half-full');
INSERT INTO `catIcon` VALUES ('405', 'star-half-o');
INSERT INTO `catIcon` VALUES ('406', 'star-o');
INSERT INTO `catIcon` VALUES ('407', 'sticky-note');
INSERT INTO `catIcon` VALUES ('408', 'sticky-note-o');
INSERT INTO `catIcon` VALUES ('409', 'street-view');
INSERT INTO `catIcon` VALUES ('410', 'suitcase');
INSERT INTO `catIcon` VALUES ('411', 'sun-o');
INSERT INTO `catIcon` VALUES ('412', 'support');
INSERT INTO `catIcon` VALUES ('413', 'tablet');
INSERT INTO `catIcon` VALUES ('414', 'tachometer');
INSERT INTO `catIcon` VALUES ('415', 'tag');
INSERT INTO `catIcon` VALUES ('416', 'tags');
INSERT INTO `catIcon` VALUES ('417', 'tasks');
INSERT INTO `catIcon` VALUES ('418', 'taxi');
INSERT INTO `catIcon` VALUES ('419', 'television');
INSERT INTO `catIcon` VALUES ('420', 'terminal');
INSERT INTO `catIcon` VALUES ('421', 'thumb-tack');
INSERT INTO `catIcon` VALUES ('422', 'thumbs-down');
INSERT INTO `catIcon` VALUES ('423', 'thumbs-o-down');
INSERT INTO `catIcon` VALUES ('424', 'thumbs-o-up');
INSERT INTO `catIcon` VALUES ('425', 'thumbs-up');
INSERT INTO `catIcon` VALUES ('426', 'ticket');
INSERT INTO `catIcon` VALUES ('427', 'times');
INSERT INTO `catIcon` VALUES ('428', 'times-circle');
INSERT INTO `catIcon` VALUES ('429', 'times-circle-o');
INSERT INTO `catIcon` VALUES ('430', 'tint');
INSERT INTO `catIcon` VALUES ('431', 'toggle-down');
INSERT INTO `catIcon` VALUES ('432', 'toggle-left');
INSERT INTO `catIcon` VALUES ('433', 'toggle-off');
INSERT INTO `catIcon` VALUES ('434', 'toggle-on');
INSERT INTO `catIcon` VALUES ('435', 'toggle-right');
INSERT INTO `catIcon` VALUES ('436', 'toggle-up');
INSERT INTO `catIcon` VALUES ('437', 'trademark');
INSERT INTO `catIcon` VALUES ('438', 'trash');
INSERT INTO `catIcon` VALUES ('439', 'trash-o');
INSERT INTO `catIcon` VALUES ('440', 'tree');
INSERT INTO `catIcon` VALUES ('441', 'trophy');
INSERT INTO `catIcon` VALUES ('442', 'truck');
INSERT INTO `catIcon` VALUES ('443', 'tty');
INSERT INTO `catIcon` VALUES ('444', 'tv');
INSERT INTO `catIcon` VALUES ('445', 'umbrella');
INSERT INTO `catIcon` VALUES ('446', 'university');
INSERT INTO `catIcon` VALUES ('447', 'unlock');
INSERT INTO `catIcon` VALUES ('448', 'unlock-alt');
INSERT INTO `catIcon` VALUES ('449', 'unsorted');
INSERT INTO `catIcon` VALUES ('450', 'upload');
INSERT INTO `catIcon` VALUES ('451', 'user');
INSERT INTO `catIcon` VALUES ('452', 'user-plus');
INSERT INTO `catIcon` VALUES ('453', 'user-secret');
INSERT INTO `catIcon` VALUES ('454', 'user-times');
INSERT INTO `catIcon` VALUES ('455', 'users');
INSERT INTO `catIcon` VALUES ('456', 'video-camera');
INSERT INTO `catIcon` VALUES ('457', 'volume-down');
INSERT INTO `catIcon` VALUES ('458', 'volume-off');
INSERT INTO `catIcon` VALUES ('459', 'volume-up');
INSERT INTO `catIcon` VALUES ('460', 'warning');
INSERT INTO `catIcon` VALUES ('461', 'wheelchair');
INSERT INTO `catIcon` VALUES ('462', 'wifi');
INSERT INTO `catIcon` VALUES ('463', 'wrench');
INSERT INTO `catIcon` VALUES ('464', 'hand-grab-o');
INSERT INTO `catIcon` VALUES ('465', 'hand-lizard-o');
INSERT INTO `catIcon` VALUES ('466', 'hand-o-down');
INSERT INTO `catIcon` VALUES ('467', 'hand-o-left');
INSERT INTO `catIcon` VALUES ('468', 'hand-o-right');
INSERT INTO `catIcon` VALUES ('469', 'hand-o-up');
INSERT INTO `catIcon` VALUES ('470', 'hand-paper-o');
INSERT INTO `catIcon` VALUES ('471', 'hand-peace-o');
INSERT INTO `catIcon` VALUES ('472', 'hand-pointer-o');
INSERT INTO `catIcon` VALUES ('473', 'hand-rock-o');
INSERT INTO `catIcon` VALUES ('474', 'hand-scissors-o');
INSERT INTO `catIcon` VALUES ('475', 'hand-spock-o');
INSERT INTO `catIcon` VALUES ('476', 'hand-stop-o');
INSERT INTO `catIcon` VALUES ('477', 'thumbs-down');
INSERT INTO `catIcon` VALUES ('478', 'thumbs-o-down');
INSERT INTO `catIcon` VALUES ('479', 'thumbs-o-up');
INSERT INTO `catIcon` VALUES ('480', 'thumbs-up');
INSERT INTO `catIcon` VALUES ('481', 'ambulance');
INSERT INTO `catIcon` VALUES ('482', 'automobile');
INSERT INTO `catIcon` VALUES ('483', 'bicycle');
INSERT INTO `catIcon` VALUES ('484', 'bus');
INSERT INTO `catIcon` VALUES ('485', 'cab');
INSERT INTO `catIcon` VALUES ('486', 'car');
INSERT INTO `catIcon` VALUES ('487', 'fighter-jet');
INSERT INTO `catIcon` VALUES ('488', 'motorcycle');
INSERT INTO `catIcon` VALUES ('489', 'plane');
INSERT INTO `catIcon` VALUES ('490', 'rocket');
INSERT INTO `catIcon` VALUES ('491', 'ship');
INSERT INTO `catIcon` VALUES ('492', 'space-shuttle');
INSERT INTO `catIcon` VALUES ('493', 'subway');
INSERT INTO `catIcon` VALUES ('494', 'taxi');
INSERT INTO `catIcon` VALUES ('495', 'train');
INSERT INTO `catIcon` VALUES ('496', 'truck');
INSERT INTO `catIcon` VALUES ('497', 'wheelchair');
INSERT INTO `catIcon` VALUES ('498', 'genderless');
INSERT INTO `catIcon` VALUES ('499', 'intersex');
INSERT INTO `catIcon` VALUES ('500', 'mars');
INSERT INTO `catIcon` VALUES ('501', 'mars-double');
INSERT INTO `catIcon` VALUES ('502', 'mars-stroke');
INSERT INTO `catIcon` VALUES ('503', 'mars-stroke-h');
INSERT INTO `catIcon` VALUES ('504', 'mars-stroke-v');
INSERT INTO `catIcon` VALUES ('505', 'mercury');
INSERT INTO `catIcon` VALUES ('506', 'neuter');
INSERT INTO `catIcon` VALUES ('507', 'transgender');
INSERT INTO `catIcon` VALUES ('508', 'transgender-alt');
INSERT INTO `catIcon` VALUES ('509', 'venus');
INSERT INTO `catIcon` VALUES ('510', 'venus-double');
INSERT INTO `catIcon` VALUES ('511', 'venus-mars');
INSERT INTO `catIcon` VALUES ('512', 'file');
INSERT INTO `catIcon` VALUES ('513', 'file-archive-o');
INSERT INTO `catIcon` VALUES ('514', 'file-audio-o');
INSERT INTO `catIcon` VALUES ('515', 'file-code-o');
INSERT INTO `catIcon` VALUES ('516', 'file-excel-o');
INSERT INTO `catIcon` VALUES ('517', 'file-image-o');
INSERT INTO `catIcon` VALUES ('518', 'file-movie-o');
INSERT INTO `catIcon` VALUES ('519', 'file-o');
INSERT INTO `catIcon` VALUES ('520', 'file-pdf-o');
INSERT INTO `catIcon` VALUES ('521', 'file-photo-o');
INSERT INTO `catIcon` VALUES ('522', 'file-picture-o');
INSERT INTO `catIcon` VALUES ('523', 'file-powerpoint-o');
INSERT INTO `catIcon` VALUES ('524', 'file-sound-o');
INSERT INTO `catIcon` VALUES ('525', 'file-text');
INSERT INTO `catIcon` VALUES ('526', 'file-text-o');
INSERT INTO `catIcon` VALUES ('527', 'file-video-o');
INSERT INTO `catIcon` VALUES ('528', 'file-word-o');
INSERT INTO `catIcon` VALUES ('529', 'file-zip-o');
INSERT INTO `catIcon` VALUES ('530', 'circle-o-notch');
INSERT INTO `catIcon` VALUES ('531', 'cog');
INSERT INTO `catIcon` VALUES ('532', 'gear');
INSERT INTO `catIcon` VALUES ('533', 'refresh');
INSERT INTO `catIcon` VALUES ('534', 'spinner');
INSERT INTO `catIcon` VALUES ('535', 'check-square');
INSERT INTO `catIcon` VALUES ('536', 'check-square-o');
INSERT INTO `catIcon` VALUES ('537', 'circle');
INSERT INTO `catIcon` VALUES ('538', 'circle-o');
INSERT INTO `catIcon` VALUES ('539', 'dot-circle-o');
INSERT INTO `catIcon` VALUES ('540', 'minus-square');
INSERT INTO `catIcon` VALUES ('541', 'minus-square-o');
INSERT INTO `catIcon` VALUES ('542', 'plus-square');
INSERT INTO `catIcon` VALUES ('543', 'plus-square-o');
INSERT INTO `catIcon` VALUES ('544', 'square');
INSERT INTO `catIcon` VALUES ('545', 'square-o');
INSERT INTO `catIcon` VALUES ('546', 'cc-amex');
INSERT INTO `catIcon` VALUES ('547', 'cc-diners-club');
INSERT INTO `catIcon` VALUES ('548', 'cc-discover');
INSERT INTO `catIcon` VALUES ('549', 'cc-jcb');
INSERT INTO `catIcon` VALUES ('550', 'cc-mastercard');
INSERT INTO `catIcon` VALUES ('551', 'cc-paypal');
INSERT INTO `catIcon` VALUES ('552', 'cc-stripe');
INSERT INTO `catIcon` VALUES ('553', 'cc-visa');
INSERT INTO `catIcon` VALUES ('554', 'credit-card');
INSERT INTO `catIcon` VALUES ('555', 'google-wallet');
INSERT INTO `catIcon` VALUES ('556', 'paypal');
INSERT INTO `catIcon` VALUES ('557', 'area-chart');
INSERT INTO `catIcon` VALUES ('558', 'bar-chart');
INSERT INTO `catIcon` VALUES ('559', 'bar-chart-o');
INSERT INTO `catIcon` VALUES ('560', 'line-chart');
INSERT INTO `catIcon` VALUES ('561', 'pie-chart');
INSERT INTO `catIcon` VALUES ('562', 'bitcoin');
INSERT INTO `catIcon` VALUES ('563', 'btc');
INSERT INTO `catIcon` VALUES ('564', 'cny');
INSERT INTO `catIcon` VALUES ('565', 'dollar');
INSERT INTO `catIcon` VALUES ('566', 'eur');
INSERT INTO `catIcon` VALUES ('567', 'euro');
INSERT INTO `catIcon` VALUES ('568', 'gbp');
INSERT INTO `catIcon` VALUES ('569', 'gg');
INSERT INTO `catIcon` VALUES ('570', 'gg-circle');
INSERT INTO `catIcon` VALUES ('571', 'ils');
INSERT INTO `catIcon` VALUES ('572', 'inr');
INSERT INTO `catIcon` VALUES ('573', 'jpy');
INSERT INTO `catIcon` VALUES ('574', 'krw');
INSERT INTO `catIcon` VALUES ('575', 'money');
INSERT INTO `catIcon` VALUES ('576', 'rmb');
INSERT INTO `catIcon` VALUES ('577', 'rouble');
INSERT INTO `catIcon` VALUES ('578', 'rub');
INSERT INTO `catIcon` VALUES ('579', 'ruble');
INSERT INTO `catIcon` VALUES ('580', 'rupee');
INSERT INTO `catIcon` VALUES ('581', 'shekel');
INSERT INTO `catIcon` VALUES ('582', 'sheqel');
INSERT INTO `catIcon` VALUES ('583', 'try');
INSERT INTO `catIcon` VALUES ('584', 'turkish-lira');
INSERT INTO `catIcon` VALUES ('585', 'usd');
INSERT INTO `catIcon` VALUES ('586', 'won');
INSERT INTO `catIcon` VALUES ('587', 'yen');
INSERT INTO `catIcon` VALUES ('588', 'align-center');
INSERT INTO `catIcon` VALUES ('589', 'align-justify');
INSERT INTO `catIcon` VALUES ('590', 'align-left');
INSERT INTO `catIcon` VALUES ('591', 'align-right');
INSERT INTO `catIcon` VALUES ('592', 'bold');
INSERT INTO `catIcon` VALUES ('593', 'chain');
INSERT INTO `catIcon` VALUES ('594', 'chain-broken');
INSERT INTO `catIcon` VALUES ('595', 'clipboard');
INSERT INTO `catIcon` VALUES ('596', 'columns');
INSERT INTO `catIcon` VALUES ('597', 'copy');
INSERT INTO `catIcon` VALUES ('598', 'cut');
INSERT INTO `catIcon` VALUES ('599', 'dedent');
INSERT INTO `catIcon` VALUES ('600', 'eraser');
INSERT INTO `catIcon` VALUES ('601', 'file');
INSERT INTO `catIcon` VALUES ('602', 'file-o');
INSERT INTO `catIcon` VALUES ('603', 'file-text');
INSERT INTO `catIcon` VALUES ('604', 'file-text-o');
INSERT INTO `catIcon` VALUES ('605', 'files-o');
INSERT INTO `catIcon` VALUES ('606', 'floppy-o');
INSERT INTO `catIcon` VALUES ('607', 'font');
INSERT INTO `catIcon` VALUES ('608', 'header');
INSERT INTO `catIcon` VALUES ('609', 'indent');
INSERT INTO `catIcon` VALUES ('610', 'italic');
INSERT INTO `catIcon` VALUES ('611', 'link');
INSERT INTO `catIcon` VALUES ('612', 'list');
INSERT INTO `catIcon` VALUES ('613', 'list-alt');
INSERT INTO `catIcon` VALUES ('614', 'list-ol');
INSERT INTO `catIcon` VALUES ('615', 'list-ul');
INSERT INTO `catIcon` VALUES ('616', 'outdent');
INSERT INTO `catIcon` VALUES ('617', 'paperclip');
INSERT INTO `catIcon` VALUES ('618', 'paragraph');
INSERT INTO `catIcon` VALUES ('619', 'paste');
INSERT INTO `catIcon` VALUES ('620', 'repeat');
INSERT INTO `catIcon` VALUES ('621', 'rotate-left');
INSERT INTO `catIcon` VALUES ('622', 'rotate-right');
INSERT INTO `catIcon` VALUES ('623', 'save');
INSERT INTO `catIcon` VALUES ('624', 'scissors');
INSERT INTO `catIcon` VALUES ('625', 'strikethrough');
INSERT INTO `catIcon` VALUES ('626', 'subscript');
INSERT INTO `catIcon` VALUES ('627', 'superscript');
INSERT INTO `catIcon` VALUES ('628', 'table');
INSERT INTO `catIcon` VALUES ('629', 'text-height');
INSERT INTO `catIcon` VALUES ('630', 'text-width');
INSERT INTO `catIcon` VALUES ('631', 'th');
INSERT INTO `catIcon` VALUES ('632', 'th-large');
INSERT INTO `catIcon` VALUES ('633', 'th-list');
INSERT INTO `catIcon` VALUES ('634', 'underline');
INSERT INTO `catIcon` VALUES ('635', 'undo');
INSERT INTO `catIcon` VALUES ('636', 'unlink');
INSERT INTO `catIcon` VALUES ('637', 'angle-double-down');
INSERT INTO `catIcon` VALUES ('638', 'angle-double-left');
INSERT INTO `catIcon` VALUES ('639', 'angle-double-right');
INSERT INTO `catIcon` VALUES ('640', 'angle-double-up');
INSERT INTO `catIcon` VALUES ('641', 'angle-down');
INSERT INTO `catIcon` VALUES ('642', 'angle-left');
INSERT INTO `catIcon` VALUES ('643', 'angle-right');
INSERT INTO `catIcon` VALUES ('644', 'angle-up');
INSERT INTO `catIcon` VALUES ('645', 'arrow-circle-down');
INSERT INTO `catIcon` VALUES ('646', 'arrow-circle-left');
INSERT INTO `catIcon` VALUES ('647', 'arrow-circle-o-down');
INSERT INTO `catIcon` VALUES ('648', 'arrow-circle-o-left');
INSERT INTO `catIcon` VALUES ('649', 'arrow-circle-o-right');
INSERT INTO `catIcon` VALUES ('650', 'arrow-circle-o-up');
INSERT INTO `catIcon` VALUES ('651', 'arrow-circle-right');
INSERT INTO `catIcon` VALUES ('652', 'arrow-circle-up');
INSERT INTO `catIcon` VALUES ('653', 'arrow-down');
INSERT INTO `catIcon` VALUES ('654', 'arrow-left');
INSERT INTO `catIcon` VALUES ('655', 'arrow-right');
INSERT INTO `catIcon` VALUES ('656', 'arrow-up');
INSERT INTO `catIcon` VALUES ('657', 'arrows');
INSERT INTO `catIcon` VALUES ('658', 'arrows-alt');
INSERT INTO `catIcon` VALUES ('659', 'arrows-h');
INSERT INTO `catIcon` VALUES ('660', 'arrows-v');
INSERT INTO `catIcon` VALUES ('661', 'caret-down');
INSERT INTO `catIcon` VALUES ('662', 'caret-left');
INSERT INTO `catIcon` VALUES ('663', 'caret-right');
INSERT INTO `catIcon` VALUES ('664', 'caret-square-o-down');
INSERT INTO `catIcon` VALUES ('665', 'caret-square-o-left');
INSERT INTO `catIcon` VALUES ('666', 'caret-square-o-right');
INSERT INTO `catIcon` VALUES ('667', 'caret-square-o-up');
INSERT INTO `catIcon` VALUES ('668', 'caret-up');
INSERT INTO `catIcon` VALUES ('669', 'chevron-circle-down');
INSERT INTO `catIcon` VALUES ('670', 'chevron-circle-left');
INSERT INTO `catIcon` VALUES ('671', 'chevron-circle-right');
INSERT INTO `catIcon` VALUES ('672', 'chevron-circle-up');
INSERT INTO `catIcon` VALUES ('673', 'chevron-down');
INSERT INTO `catIcon` VALUES ('674', 'chevron-left');
INSERT INTO `catIcon` VALUES ('675', 'chevron-right');
INSERT INTO `catIcon` VALUES ('676', 'chevron-up');
INSERT INTO `catIcon` VALUES ('677', 'exchange');
INSERT INTO `catIcon` VALUES ('678', 'hand-o-down');
INSERT INTO `catIcon` VALUES ('679', 'hand-o-left');
INSERT INTO `catIcon` VALUES ('680', 'hand-o-right');
INSERT INTO `catIcon` VALUES ('681', 'hand-o-up');
INSERT INTO `catIcon` VALUES ('682', 'long-arrow-down');
INSERT INTO `catIcon` VALUES ('683', 'long-arrow-left');
INSERT INTO `catIcon` VALUES ('684', 'long-arrow-right');
INSERT INTO `catIcon` VALUES ('685', 'long-arrow-up');
INSERT INTO `catIcon` VALUES ('686', 'toggle-down');
INSERT INTO `catIcon` VALUES ('687', 'toggle-left');
INSERT INTO `catIcon` VALUES ('688', 'toggle-right');
INSERT INTO `catIcon` VALUES ('689', 'toggle-up');
INSERT INTO `catIcon` VALUES ('690', 'arrows-alt');
INSERT INTO `catIcon` VALUES ('691', 'backward');
INSERT INTO `catIcon` VALUES ('692', 'compress');
INSERT INTO `catIcon` VALUES ('693', 'eject');
INSERT INTO `catIcon` VALUES ('694', 'expand');
INSERT INTO `catIcon` VALUES ('695', 'fast-backward');
INSERT INTO `catIcon` VALUES ('696', 'fast-forward');
INSERT INTO `catIcon` VALUES ('697', 'forward');
INSERT INTO `catIcon` VALUES ('698', 'pause');
INSERT INTO `catIcon` VALUES ('699', 'play');
INSERT INTO `catIcon` VALUES ('700', 'play-circle');
INSERT INTO `catIcon` VALUES ('701', 'play-circle-o');
INSERT INTO `catIcon` VALUES ('702', 'random');
INSERT INTO `catIcon` VALUES ('703', 'step-backward');
INSERT INTO `catIcon` VALUES ('704', 'step-forward');
INSERT INTO `catIcon` VALUES ('705', 'stop');
INSERT INTO `catIcon` VALUES ('706', 'youtube-play');
INSERT INTO `catIcon` VALUES ('707', '500px');
INSERT INTO `catIcon` VALUES ('708', 'adn');
INSERT INTO `catIcon` VALUES ('709', 'amazon');
INSERT INTO `catIcon` VALUES ('710', 'android');
INSERT INTO `catIcon` VALUES ('711', 'angellist');
INSERT INTO `catIcon` VALUES ('712', 'apple');
INSERT INTO `catIcon` VALUES ('713', 'behance');
INSERT INTO `catIcon` VALUES ('714', 'behance-square');
INSERT INTO `catIcon` VALUES ('715', 'bitbucket');
INSERT INTO `catIcon` VALUES ('716', 'bitbucket-square');
INSERT INTO `catIcon` VALUES ('717', 'bitcoin');
INSERT INTO `catIcon` VALUES ('718', 'black-tie');
INSERT INTO `catIcon` VALUES ('719', 'btc');
INSERT INTO `catIcon` VALUES ('720', 'buysellads');
INSERT INTO `catIcon` VALUES ('721', 'cc-amex');
INSERT INTO `catIcon` VALUES ('722', 'cc-diners-club');
INSERT INTO `catIcon` VALUES ('723', 'cc-discover');
INSERT INTO `catIcon` VALUES ('724', 'cc-jcb');
INSERT INTO `catIcon` VALUES ('725', 'cc-mastercard');
INSERT INTO `catIcon` VALUES ('726', 'cc-paypal');
INSERT INTO `catIcon` VALUES ('727', 'cc-stripe');
INSERT INTO `catIcon` VALUES ('728', 'cc-visa');
INSERT INTO `catIcon` VALUES ('729', 'chrome');
INSERT INTO `catIcon` VALUES ('730', 'codepen');
INSERT INTO `catIcon` VALUES ('731', 'connectdevelop');
INSERT INTO `catIcon` VALUES ('732', 'contao');
INSERT INTO `catIcon` VALUES ('733', 'css3');
INSERT INTO `catIcon` VALUES ('734', 'dashcube');
INSERT INTO `catIcon` VALUES ('735', 'delicious');
INSERT INTO `catIcon` VALUES ('736', 'deviantart');
INSERT INTO `catIcon` VALUES ('737', 'digg');
INSERT INTO `catIcon` VALUES ('738', 'dribbble');
INSERT INTO `catIcon` VALUES ('739', 'dropbox');
INSERT INTO `catIcon` VALUES ('740', 'drupal');
INSERT INTO `catIcon` VALUES ('741', 'empire');
INSERT INTO `catIcon` VALUES ('742', 'expeditedssl');
INSERT INTO `catIcon` VALUES ('743', 'facebook');
INSERT INTO `catIcon` VALUES ('744', 'facebook-f');
INSERT INTO `catIcon` VALUES ('745', 'facebook-official');
INSERT INTO `catIcon` VALUES ('746', 'facebook-square');
INSERT INTO `catIcon` VALUES ('747', 'firefox');
INSERT INTO `catIcon` VALUES ('748', 'flickr');
INSERT INTO `catIcon` VALUES ('749', 'fonticons');
INSERT INTO `catIcon` VALUES ('750', 'forumbee');
INSERT INTO `catIcon` VALUES ('751', 'foursquare');
INSERT INTO `catIcon` VALUES ('752', 'ge');
INSERT INTO `catIcon` VALUES ('753', 'get-pocket');
INSERT INTO `catIcon` VALUES ('754', 'gg');
INSERT INTO `catIcon` VALUES ('755', 'gg-circle');
INSERT INTO `catIcon` VALUES ('756', 'git');
INSERT INTO `catIcon` VALUES ('757', 'git-square');
INSERT INTO `catIcon` VALUES ('758', 'github');
INSERT INTO `catIcon` VALUES ('759', 'github-alt');
INSERT INTO `catIcon` VALUES ('760', 'github-square');
INSERT INTO `catIcon` VALUES ('761', 'gittip');
INSERT INTO `catIcon` VALUES ('762', 'google');
INSERT INTO `catIcon` VALUES ('763', 'google-plus');
INSERT INTO `catIcon` VALUES ('764', 'google-plus-square');
INSERT INTO `catIcon` VALUES ('765', 'google-wallet');
INSERT INTO `catIcon` VALUES ('766', 'gratipay');
INSERT INTO `catIcon` VALUES ('767', 'hacker-news');
INSERT INTO `catIcon` VALUES ('768', 'houzz');
INSERT INTO `catIcon` VALUES ('769', 'html5');
INSERT INTO `catIcon` VALUES ('770', 'instagram');
INSERT INTO `catIcon` VALUES ('771', 'internet-explorer');
INSERT INTO `catIcon` VALUES ('772', 'ioxhost');
INSERT INTO `catIcon` VALUES ('773', 'joomla');
INSERT INTO `catIcon` VALUES ('774', 'jsfiddle');
INSERT INTO `catIcon` VALUES ('775', 'lastfm');
INSERT INTO `catIcon` VALUES ('776', 'lastfm-square');
INSERT INTO `catIcon` VALUES ('777', 'leanpub');
INSERT INTO `catIcon` VALUES ('778', 'linkedin');
INSERT INTO `catIcon` VALUES ('779', 'linkedin-square');
INSERT INTO `catIcon` VALUES ('780', 'linux');
INSERT INTO `catIcon` VALUES ('781', 'maxcdn');
INSERT INTO `catIcon` VALUES ('782', 'meanpath');
INSERT INTO `catIcon` VALUES ('783', 'medium');
INSERT INTO `catIcon` VALUES ('784', 'odnoklassniki');
INSERT INTO `catIcon` VALUES ('785', 'odnoklassniki-square');
INSERT INTO `catIcon` VALUES ('786', 'opencart');
INSERT INTO `catIcon` VALUES ('787', 'openid');
INSERT INTO `catIcon` VALUES ('788', 'opera');
INSERT INTO `catIcon` VALUES ('789', 'optin-monster');
INSERT INTO `catIcon` VALUES ('790', 'pagelines');
INSERT INTO `catIcon` VALUES ('791', 'paypal');
INSERT INTO `catIcon` VALUES ('792', 'pied-piper');
INSERT INTO `catIcon` VALUES ('793', 'pied-piper-alt');
INSERT INTO `catIcon` VALUES ('794', 'pinterest');
INSERT INTO `catIcon` VALUES ('795', 'pinterest-p');
INSERT INTO `catIcon` VALUES ('796', 'pinterest-square');
INSERT INTO `catIcon` VALUES ('797', 'qq');
INSERT INTO `catIcon` VALUES ('798', 'ra');
INSERT INTO `catIcon` VALUES ('799', 'rebel');
INSERT INTO `catIcon` VALUES ('800', 'reddit');
INSERT INTO `catIcon` VALUES ('801', 'reddit-square');
INSERT INTO `catIcon` VALUES ('802', 'renren');
INSERT INTO `catIcon` VALUES ('803', 'safari');
INSERT INTO `catIcon` VALUES ('804', 'sellsy');
INSERT INTO `catIcon` VALUES ('805', 'share-alt');
INSERT INTO `catIcon` VALUES ('806', 'share-alt-square');
INSERT INTO `catIcon` VALUES ('807', 'shirtsinbulk');
INSERT INTO `catIcon` VALUES ('808', 'simplybuilt');
INSERT INTO `catIcon` VALUES ('809', 'skyatlas');
INSERT INTO `catIcon` VALUES ('810', 'skype');
INSERT INTO `catIcon` VALUES ('811', 'slack');
INSERT INTO `catIcon` VALUES ('812', 'slideshare');
INSERT INTO `catIcon` VALUES ('813', 'soundcloud');
INSERT INTO `catIcon` VALUES ('814', 'spotify');
INSERT INTO `catIcon` VALUES ('815', 'stack-exchange');
INSERT INTO `catIcon` VALUES ('816', 'stack-overflow');
INSERT INTO `catIcon` VALUES ('817', 'steam');
INSERT INTO `catIcon` VALUES ('818', 'steam-square');
INSERT INTO `catIcon` VALUES ('819', 'stumbleupon');
INSERT INTO `catIcon` VALUES ('820', 'stumbleupon-circle');
INSERT INTO `catIcon` VALUES ('821', 'tencent-weibo');
INSERT INTO `catIcon` VALUES ('822', 'trello');
INSERT INTO `catIcon` VALUES ('823', 'tripadvisor');
INSERT INTO `catIcon` VALUES ('824', 'tumblr');
INSERT INTO `catIcon` VALUES ('825', 'tumblr-square');
INSERT INTO `catIcon` VALUES ('826', 'twitch');
INSERT INTO `catIcon` VALUES ('827', 'twitter');
INSERT INTO `catIcon` VALUES ('828', 'twitter-square');
INSERT INTO `catIcon` VALUES ('829', 'viacoin');
INSERT INTO `catIcon` VALUES ('830', 'vimeo');
INSERT INTO `catIcon` VALUES ('831', 'vimeo-square');
INSERT INTO `catIcon` VALUES ('832', 'vine');
INSERT INTO `catIcon` VALUES ('833', 'vk');
INSERT INTO `catIcon` VALUES ('834', 'wechat');
INSERT INTO `catIcon` VALUES ('835', 'weibo');
INSERT INTO `catIcon` VALUES ('836', 'weixin');
INSERT INTO `catIcon` VALUES ('837', 'whatsapp');
INSERT INTO `catIcon` VALUES ('838', 'wikipedia-w');
INSERT INTO `catIcon` VALUES ('839', 'windows');
INSERT INTO `catIcon` VALUES ('840', 'wordpress');
INSERT INTO `catIcon` VALUES ('841', 'xing');
INSERT INTO `catIcon` VALUES ('842', 'xing-square');
INSERT INTO `catIcon` VALUES ('843', 'y-combinator');
INSERT INTO `catIcon` VALUES ('844', 'y-combinator-square');
INSERT INTO `catIcon` VALUES ('845', 'yahoo');
INSERT INTO `catIcon` VALUES ('846', 'yc');
INSERT INTO `catIcon` VALUES ('847', 'yc-square');
INSERT INTO `catIcon` VALUES ('848', 'yelp');
INSERT INTO `catIcon` VALUES ('849', 'youtube');
INSERT INTO `catIcon` VALUES ('850', 'youtube-play');
INSERT INTO `catIcon` VALUES ('851', 'youtube-square');
INSERT INTO `catIcon` VALUES ('852', 'ambulance');
INSERT INTO `catIcon` VALUES ('853', 'h-square');
INSERT INTO `catIcon` VALUES ('854', 'heart');
INSERT INTO `catIcon` VALUES ('855', 'heart-o');
INSERT INTO `catIcon` VALUES ('856', 'heartbeat');
INSERT INTO `catIcon` VALUES ('857', 'hospital-o');
INSERT INTO `catIcon` VALUES ('858', 'medkit');
INSERT INTO `catIcon` VALUES ('859', 'plus-square');
INSERT INTO `catIcon` VALUES ('860', 'stethoscope');
INSERT INTO `catIcon` VALUES ('861', 'user-md');
INSERT INTO `catIcon` VALUES ('862', 'wheelchair');

-- ----------------------------
-- Table structure for `catModulo`
-- ----------------------------
DROP TABLE IF EXISTS `catModulo`;
CREATE TABLE `catModulo` (
  `idModulo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idAplicacion` int(10) unsigned NOT NULL,
  `nombreModulo` varchar(100) NOT NULL,
  `urlModulo` varchar(100) NOT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `idusuarioCambio` int(10) unsigned DEFAULT NULL,
  `fechaCrea` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaCambio` datetime DEFAULT NULL,
  `idStatus` tinyint(1) unsigned DEFAULT NULL,
  `iconModulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idModulo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of catModulo
-- ----------------------------
INSERT INTO `catModulo` VALUES ('1', '1', 'Aplicación', 'Admin_controller/agregar_aplicacion', '1', null, '2019-07-17 23:31:14', null, '1', 'server');
INSERT INTO `catModulo` VALUES ('2', '1', 'Modulo', 'Admin_controller/agregar_modulo', '1', null, '2019-03-20 17:56:03', null, '1', 'tasks');
INSERT INTO `catModulo` VALUES ('3', '1', 'Usuarios', 'Admin_controller/lista_usuarios', '1', null, '2019-03-20 17:56:09', null, '1', 'users');
INSERT INTO `catModulo` VALUES ('4', '1', 'Alta de usuario', 'Admin_controller/alta_usuario', '1', null, '2019-03-20 17:56:14', null, '1', 'user-plus');
INSERT INTO `catModulo` VALUES ('5', '2', 'Tabla', 'table/table/index', '1', null, '2019-08-02 00:59:41', null, '1', 'money');

-- ----------------------------
-- Table structure for `catrol`
-- ----------------------------
DROP TABLE IF EXISTS `catrol`;
CREATE TABLE `catrol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idRol`),
  UNIQUE KEY `nombre_UNIQUE` (`rol`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of catrol
-- ----------------------------
INSERT INTO `catrol` VALUES ('1', 'Administrador', 'Administrador', '1');

-- ----------------------------
-- Table structure for `tbPermisoUsuario`
-- ----------------------------
DROP TABLE IF EXISTS `tbPermisoUsuario`;
CREATE TABLE `tbPermisoUsuario` (
  `idUsuario` int(10) unsigned NOT NULL,
  `idModulo` int(10) unsigned NOT NULL,
  `administracion` tinyint(1) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `consulta` tinyint(1) NOT NULL,
  `exportacion` tinyint(1) NOT NULL,
  `insercion` tinyint(1) NOT NULL,
  `modificacion` tinyint(1) NOT NULL,
  `idStatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUsuario`,`idModulo`),
  KEY `idUsuario` (`idUsuario`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbPermisoUsuario
-- ----------------------------
INSERT INTO `tbPermisoUsuario` VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tbPermisoUsuario` VALUES ('1', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tbPermisoUsuario` VALUES ('1', '3', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tbPermisoUsuario` VALUES ('1', '4', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tbPermisoUsuario` VALUES ('1', '5', '1', '1', '1', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for `tbusuario`
-- ----------------------------
DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE `tbusuario` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `idArea` int(11) DEFAULT NULL,
  `idRol` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `idUsuarioCrea` int(11) DEFAULT NULL,
  `fechaCrea` datetime DEFAULT NULL,
  `idUsuarioCambio` int(11) DEFAULT NULL,
  `fechaCambio` datetime DEFAULT NULL,
  `idTurno` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `username_UNIQUE` (`username`) USING BTREE,
  UNIQUE KEY `email_UNIQUE` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbusuario
-- ----------------------------
INSERT INTO `tbusuario` VALUES ('1', 'EDUARDO', 'GUERRERO', 'MARTINEZ', '5584762255', 'conjguerrero@gmail.com', 'lalo', '56f4384f10a36152c0a6902809345d7a06b2d62e', '2', '1', '1', null, null, '1', '2019-08-02 05:48:53', '1');
INSERT INTO `tbusuario` VALUES ('2', 'USUARIO1', 'USER', 'USUARIO', '5518087764', 'user@user.com', 'user', '12dea96fec20593566ab75692c9949596833adc9', '1', '1', '0', '1', '2019-08-02 06:01:38', null, null, '0');
