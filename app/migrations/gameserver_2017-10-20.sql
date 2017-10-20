# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.16)
# Database: gameserver
# Generation Time: 2017-10-20 19:07:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table galaxy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `galaxy`;

CREATE TABLE `galaxy` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `galaxy` WRITE;
/*!40000 ALTER TABLE `galaxy` DISABLE KEYS */;

INSERT INTO `galaxy` (`id`, `name`)
VALUES
	(1,'Milky Way');

/*!40000 ALTER TABLE `galaxy` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table map
# ------------------------------------------------------------

DROP TABLE IF EXISTS `map`;

CREATE TABLE `map` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `world_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `map` WRITE;
/*!40000 ALTER TABLE `map` DISABLE KEYS */;

INSERT INTO `map` (`id`, `world_id`, `name`, `description`, `width`, `height`)
VALUES
	(1,1,'Great Britain','Dear Old Blighty',NULL,NULL);

/*!40000 ALTER TABLE `map` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table map_resource
# ------------------------------------------------------------

DROP TABLE IF EXISTS `map_resource`;

CREATE TABLE `map_resource` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `map_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table plot_point
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plot_point`;

CREATE TABLE `plot_point` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `map_id` int(11) DEFAULT NULL,
  `x` int(11) DEFAULT '0',
  `y` int(11) DEFAULT '0',
  `z` int(11) DEFAULT '0',
  `type_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table plot_point_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plot_point_type`;

CREATE TABLE `plot_point_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `plot_point_type` WRITE;
/*!40000 ALTER TABLE `plot_point_type` DISABLE KEYS */;

INSERT INTO `plot_point_type` (`id`, `name`)
VALUES
	(1,'Land'),
	(2,'Water');

/*!40000 ALTER TABLE `plot_point_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resource
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resource`;

CREATE TABLE `resource` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `map_resource_id` int(11) DEFAULT NULL,
  `x` int(11) DEFAULT '0',
  `y` int(11) DEFAULT '0',
  `z` int(11) DEFAULT '0',
  `type_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table resource_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resource_type`;

CREATE TABLE `resource_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table solar_system
# ------------------------------------------------------------

DROP TABLE IF EXISTS `solar_system`;

CREATE TABLE `solar_system` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `galaxy_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `solar_system` WRITE;
/*!40000 ALTER TABLE `solar_system` DISABLE KEYS */;

INSERT INTO `solar_system` (`id`, `galaxy_id`, `name`)
VALUES
	(1,1,'The Solar System');

/*!40000 ALTER TABLE `solar_system` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table world
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world`;

CREATE TABLE `world` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `solar_system_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `world` WRITE;
/*!40000 ALTER TABLE `world` DISABLE KEYS */;

INSERT INTO `world` (`id`, `solar_system_id`, `name`)
VALUES
	(1,1,'Earth');

/*!40000 ALTER TABLE `world` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
