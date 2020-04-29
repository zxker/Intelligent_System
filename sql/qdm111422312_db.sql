# Host: qdm111422312.my3w.com  (Version: 5.1.48-log)
# Date: 2018-06-11 16:31:22
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES gb2312 */;

#
# Structure for table "ajax_demo"
#

DROP TABLE IF EXISTS `ajax_demo`;
CREATE TABLE `ajax_demo` (
  `Id` int(4) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(4) NOT NULL DEFAULT '',
  `Age` varchar(4) NOT NULL DEFAULT '',
  `Lastname` varchar(4) NOT NULL DEFAULT '',
  `Hometown` varchar(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`,`FirstName`,`Age`,`Lastname`,`Hometown`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

#
# Data for table "ajax_demo"
#

/*!40000 ALTER TABLE `ajax_demo` DISABLE KEYS */;
INSERT INTO `ajax_demo` VALUES (1,'Pete','41','Grif','Quah'),(2,'Lois','40','Grif','Newp'),(3,'Jose','39','Swan','Quah'),(4,'Glen','1','Quag','Quah');
/*!40000 ALTER TABLE `ajax_demo` ENABLE KEYS */;

#
# Structure for table "led"
#

DROP TABLE IF EXISTS `led`;
CREATE TABLE `led` (
  `id` varchar(11) NOT NULL DEFAULT '',
  `led` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "led"
#

/*!40000 ALTER TABLE `led` DISABLE KEYS */;
INSERT INTO `led` VALUES ('1',0);
/*!40000 ALTER TABLE `led` ENABLE KEYS */;

#
# Structure for table "smart_home"
#

DROP TABLE IF EXISTS `smart_home`;
CREATE TABLE `smart_home` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `control` varchar(255) DEFAULT NULL,
  `ele` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "smart_home"
#

/*!40000 ALTER TABLE `smart_home` DISABLE KEYS */;
INSERT INTO `smart_home` VALUES (1,'0','LED'),(2,'1','DOOR'),(3,'0','TV');
/*!40000 ALTER TABLE `smart_home` ENABLE KEYS */;
