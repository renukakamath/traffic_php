/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - traffic
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`traffic` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `traffic`;

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `complaint` varchar(20) DEFAULT NULL,
  `reply` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `complaint` */

insert  into `complaint`(`complaint_id`,`login_id`,`complaint`,`reply`,`date`) values 
(1,2,'good','hai','2022-06-29'),
(2,2,'good','pending','2022-06-29'),
(3,3,'dfdf','dfdf','2022-06-29'),
(4,3,'good','pending','2022-06-29'),
(5,2,'hai','pending','2022-06-30'),
(6,3,'bad','asdfhtyuio','2022-06-30');

/*Table structure for table `duties` */

DROP TABLE IF EXISTS `duties`;

CREATE TABLE `duties` (
  `duties_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_id` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`duties_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `duties` */

insert  into `duties`(`duties_id`,`place_id`,`date`) values 
(1,'1','2022-06-11'),
(2,'1','2022-06-12'),
(3,'3','2022-06-12'),
(4,'4','2022-06-17'),
(5,'1','2022-06-04');

/*Table structure for table `dutyassigned` */

DROP TABLE IF EXISTS `dutyassigned`;

CREATE TABLE `dutyassigned` (
  `dutyassign_id` int(11) NOT NULL AUTO_INCREMENT,
  `police_id` int(11) DEFAULT NULL,
  `duties_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`dutyassign_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `dutyassigned` */

insert  into `dutyassigned`(`dutyassign_id`,`police_id`,`duties_id`) values 
(1,2,4),
(2,2,2),
(3,2,3),
(4,2,4);

/*Table structure for table `fine` */

DROP TABLE IF EXISTS `fine`;

CREATE TABLE `fine` (
  `fine_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`fine_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `fine` */

insert  into `fine`(`fine_id`,`user_id`,`description`,`amount`,`date`,`status`) values 
(1,1,'no helmet','500','2022-06-29','paid'),
(2,1,'driveing speead','1000','2022-06-30','paid'),
(3,2,'stop the vehicle','100','2022-06-30','paid');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'admin','admin','admin'),
(2,'renuka','12345','user'),
(3,'renuka','123','police'),
(4,'renuka','123','police'),
(5,'shyam','234','police'),
(6,'anu','anu123','user');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `fine_id` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`fine_id`,`type`,`amount`,`date`) values 
(1,1,'user','500','2022-06-29'),
(2,2,'police','1000','2022-06-30'),
(3,2,'user','1000','2022-06-30'),
(4,3,'police','100','2022-06-30');

/*Table structure for table `place` */

DROP TABLE IF EXISTS `place`;

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `place` */

insert  into `place`(`place_id`,`place`,`district`) values 
(1,'kerala','ernakulam'),
(2,'mp','gusavir'),
(3,'maharastra','mumbai'),
(4,'tamil nadu','chennai'),
(5,'kochi             ','tvmm nm,');

/*Table structure for table `police` */

DROP TABLE IF EXISTS `police`;

CREATE TABLE `police` (
  `police_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`police_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `police` */

insert  into `police`(`police_id`,`login_id`,`fname`,`lname`,`place`,`phone`,`email`) values 
(2,4,'renuka','kamath','ernakulam','9495736748','renukakamath2@gmail.com'),
(3,5,'shyam','kamath','ernakaulam','9495736748','shyamkamath@gmail.com');

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `licensenum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `registration` */

insert  into `registration`(`user_id`,`login_id`,`fname`,`lname`,`place`,`phone`,`email`,`licensenum`) values 
(1,2,'renuka','kamath','ernakulam','9495736748','renukakamath@gmail.com','3543634646'),
(2,6,'anu','ddggd','ernakulam','9495736748','anu@gmail.com','454363637');

/*Table structure for table `trafficrules` */

DROP TABLE IF EXISTS `trafficrules`;

CREATE TABLE `trafficrules` (
  `rules_id` int(11) NOT NULL AUTO_INCREMENT,
  `rule` varchar(20) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`rules_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `trafficrules` */

insert  into `trafficrules`(`rules_id`,`rule`,`description`,`date`) values 
(1,'red','stop ','2022-06-29'),
(2,'green','go','2022-06-29'),
(3,'yellowwwww','readyyyy','2022-06-29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
