/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.14-MariaDB : Database - database
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`database` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `database`;

/*Table structure for table `form` */

DROP TABLE IF EXISTS `form`;

CREATE TABLE `form` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(15) NOT NULL,
  `subject` char(50) NOT NULL,
  `message` longtext NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `form` */

insert  into `form`(`name`,`email`,`telephone`,`subject`,`message`,`ID`) values 
('test','test',0,'test','test ',1);

/*Table structure for table `newsarticles` */

DROP TABLE IF EXISTS `newsarticles`;

CREATE TABLE `newsarticles` (
  `title` char(255) NOT NULL,
  `image` char(255) NOT NULL,
  `author` char(255) NOT NULL,
  `authorImage` char(255) NOT NULL,
  `datePosted` date NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `text` char(255) DEFAULT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `newsarticles` */

insert  into `newsarticles`(`title`,`image`,`author`,`authorImage`,`datePosted`,`ID`,`text`) values 
('Coronavirus Update: We are here to support you.','\"img/asset-7.jpeg\"','James Gulliver','\"img/asset-8.jpeg\"','2020-03-19',1,'With so much uncertainty across the UK and around the world at the moment, there are many question...'),
('Coronavirus: Our Plan.','\"img/coronavirus-our-plan-NHEI.jpg\"','Netmatters','\"img/netmatters-ltd-VXAv.png\"','2020-03-05',2,'The government is predicting that it is highly likely we will see a significant expansion in the n...'),
('Happy 25th Birthday Henry!','\"img/happy-25th-birthday-nSbO.jpg\"','Netmatters','\"img/netmatters-ltd-VXAv.png\"','2020-03-26',3,'Happy 25th Birthday Henry! Henry Hardwell joined us in November 2018 as part of our ever grow...');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
