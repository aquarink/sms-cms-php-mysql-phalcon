/*
SQLyog Enterprise v10.42 
MySQL - 5.5.5-10.1.21-MariaDB : Database - smsgw_engine_log
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`smsgw_engine_log` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `smsgw_engine_log`;

/*Table structure for table `tb_dr_2017_07_25` */

DROP TABLE IF EXISTS `tb_dr_2017_07_25`;

CREATE TABLE `tb_dr_2017_07_25` (
  `id_dr` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `trx_date` varchar(50) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `session_date` varchar(50) DEFAULT NULL,
  `stat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_dr`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_dr_2017_07_25` */

insert  into `tb_dr_2017_07_25`(`id_dr`,`telco`,`shortcode`,`msisdn`,`trx_id`,`trx_date`,`session_id`,`session_date`,`stat`) values (1,'xl','912345','6281066655211','ID-334986821','2017-07-25 18-44-03','16070458','2017-07-25 06:44:03','3'),(2,'xl','912345','6281066655211','9022112211','2017-07-25 18-44-03','81595838','2017-07-25 06:44:03','3');

/*Table structure for table `tb_dr_2017_07_27` */

DROP TABLE IF EXISTS `tb_dr_2017_07_27`;

CREATE TABLE `tb_dr_2017_07_27` (
  `id_dr` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `trx_date` varchar(50) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `session_date` varchar(50) DEFAULT NULL,
  `stat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_dr`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_dr_2017_07_27` */

insert  into `tb_dr_2017_07_27`(`id_dr`,`telco`,`shortcode`,`msisdn`,`trx_id`,`trx_date`,`session_id`,`session_date`,`stat`) values (1,'xl','912345','62817450049791','ID-957387741','2017-07-27 09-54-09','4219408','2017-07-27 09:54:09','3'),(2,'xl','912345','62817455804321','ID-521016434','2017-07-27 09-54-10','49659617','2017-07-27 09:54:10','3'),(3,'xl','912345','62819455804321','ID-220857421','2017-07-27 09-54-10','63857099','2017-07-27 09:54:10','3');

/*Table structure for table `tb_dr_summary_2017_07` */

DROP TABLE IF EXISTS `tb_dr_summary_2017_07`;

CREATE TABLE `tb_dr_summary_2017_07` (
  `id_dr` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `trx_date` varchar(50) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `session_date` varchar(50) DEFAULT NULL,
  `stat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_dr`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_dr_summary_2017_07` */

insert  into `tb_dr_summary_2017_07`(`id_dr`,`telco`,`shortcode`,`msisdn`,`trx_id`,`trx_date`,`session_id`,`session_date`,`stat`) values (1,'xl','912345','6281066655211','ID-334986821','2017-07-25 18-44-03','16070458','2017-07-25 06:44:03','3'),(2,'xl','912345','6281066655211','9022112211','2017-07-25 18-44-03','81595838','2017-07-25 06:44:03','3');

/*Table structure for table `tb_dr_today` */

DROP TABLE IF EXISTS `tb_dr_today`;

CREATE TABLE `tb_dr_today` (
  `id_dr` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `trx_date` varchar(50) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `session_date` varchar(50) DEFAULT NULL,
  `stat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_dr`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_dr_today` */

insert  into `tb_dr_today`(`id_dr`,`telco`,`shortcode`,`msisdn`,`trx_id`,`trx_date`,`session_id`,`session_date`,`stat`) values (4,'xl','912345','62817450049791','ID-957387741','2017-07-27 09-54-09','4219408','2017-07-27 09:54:09','3'),(5,'xl','912345','62817455804321','ID-521016434','2017-07-27 09-54-10','49659617','2017-07-27 09:54:10','3'),(6,'xl','912345','62819455804321','ID-220857421','2017-07-27 09-54-10','63857099','2017-07-27 09:54:10','3');

/*Table structure for table `tb_mo_2017_07_25` */

DROP TABLE IF EXISTS `tb_mo_2017_07_25`;

CREATE TABLE `tb_mo_2017_07_25` (
  `id_mo` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `sms_field` varchar(200) DEFAULT NULL,
  `keyword` varchar(50) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `trx_date` varchar(50) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `session_date` varchar(50) DEFAULT NULL,
  `reg_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_mo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mo_2017_07_25` */

insert  into `tb_mo_2017_07_25`(`id_mo`,`telco`,`shortcode`,`msisdn`,`sms_field`,`keyword`,`trx_id`,`trx_date`,`session_id`,`session_date`,`reg_type`) values (1,'xl','912345','6281066655211','reg bola','bola','9022112211','2017-07-25','521705','2017-07-25 06:43:17','reg');

/*Table structure for table `tb_mo_2017_07_27` */

DROP TABLE IF EXISTS `tb_mo_2017_07_27`;

CREATE TABLE `tb_mo_2017_07_27` (
  `id_mo` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `sms_field` varchar(200) DEFAULT NULL,
  `keyword` varchar(50) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `trx_date` varchar(50) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `session_date` varchar(50) DEFAULT NULL,
  `reg_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_mo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mo_2017_07_27` */

insert  into `tb_mo_2017_07_27`(`id_mo`,`telco`,`shortcode`,`msisdn`,`sms_field`,`keyword`,`trx_id`,`trx_date`,`session_id`,`session_date`,`reg_type`) values (1,'xl','912345','6281066655231','reg bola','bola','9022112231','2017-07-27','90102803','2017-07-27 09:26:27','reg');

/*Table structure for table `tb_mo_summary_2017_07` */

DROP TABLE IF EXISTS `tb_mo_summary_2017_07`;

CREATE TABLE `tb_mo_summary_2017_07` (
  `id_mo` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `sms_field` varchar(200) DEFAULT NULL,
  `keyword` varchar(50) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `trx_date` varchar(50) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `session_date` varchar(50) DEFAULT NULL,
  `reg_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_mo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mo_summary_2017_07` */

insert  into `tb_mo_summary_2017_07`(`id_mo`,`telco`,`shortcode`,`msisdn`,`sms_field`,`keyword`,`trx_id`,`trx_date`,`session_id`,`session_date`,`reg_type`) values (1,'xl','912345','6281066655211','reg bola','bola','9022112211','2017-07-25','521705','2017-07-25 06:43:17','reg');

/*Table structure for table `tb_mo_today` */

DROP TABLE IF EXISTS `tb_mo_today`;

CREATE TABLE `tb_mo_today` (
  `id_mo` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `id_app` int(11) DEFAULT NULL,
  `sms_field` varchar(200) DEFAULT NULL,
  `keyword` varchar(50) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `trx_date` varchar(50) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `session_date` varchar(50) DEFAULT NULL,
  `reg_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_mo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_mo_today` */

/*Table structure for table `tb_push_2017_07_25` */

DROP TABLE IF EXISTS `tb_push_2017_07_25`;

CREATE TABLE `tb_push_2017_07_25` (
  `id_push` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `sms_field` varchar(200) DEFAULT NULL,
  `id_app` int(11) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `content_number` int(11) DEFAULT NULL,
  `content_field` varchar(200) DEFAULT NULL,
  `trx_id` varchar(250) DEFAULT NULL,
  `trx_date` varchar(20) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `session_date` varchar(20) DEFAULT NULL,
  `reg_type` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `cost` varchar(10) DEFAULT NULL,
  `send_status` varchar(10) DEFAULT NULL,
  `response_code` varchar(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `date_create` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_push`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_push_2017_07_25` */

insert  into `tb_push_2017_07_25`(`id_push`,`telco`,`shortcode`,`msisdn`,`sms_field`,`id_app`,`keyword`,`content_number`,`content_field`,`trx_id`,`trx_date`,`session_id`,`session_date`,`reg_type`,`type`,`cost`,`send_status`,`response_code`,`subject`,`date_create`) values (1,'xl','912345','6281066655211','reg bola',1,'bola',1,'Reply Bola Pertama','ID-334986821','2017-07-25','40113626','2017-07-25 06:43:17','firstpush','push','1000','3','3','PUSH;IOD;BOLA;FIRSTPUSH','2017-07-25'),(2,'xl','912345','6281066655211','reg bola',1,'bola',0,'Welcome Message reg 1x','9022112211','2017-07-25','521705','2017-07-25 06:43:17','reg','pull','0','3','3','REG;IOD;BOLA','2017-07-25');

/*Table structure for table `tb_push_2017_07_27` */

DROP TABLE IF EXISTS `tb_push_2017_07_27`;

CREATE TABLE `tb_push_2017_07_27` (
  `id_push` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `sms_field` varchar(200) DEFAULT NULL,
  `id_app` int(11) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `content_number` int(11) DEFAULT NULL,
  `content_field` varchar(200) DEFAULT NULL,
  `trx_id` varchar(250) DEFAULT NULL,
  `trx_date` varchar(20) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `session_date` varchar(20) DEFAULT NULL,
  `reg_type` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `cost` varchar(10) DEFAULT NULL,
  `send_status` varchar(10) DEFAULT NULL,
  `response_code` varchar(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `date_create` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_push`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_push_2017_07_27` */

insert  into `tb_push_2017_07_27`(`id_push`,`telco`,`shortcode`,`msisdn`,`sms_field`,`id_app`,`keyword`,`content_number`,`content_field`,`trx_id`,`trx_date`,`session_id`,`session_date`,`reg_type`,`type`,`cost`,`send_status`,`response_code`,`subject`,`date_create`) values (1,'xl','912345','62817726131836','reg bola',1,'bola',1,'Reply Bola Pertama','ID-150388146','2017-07-27','11639861','2017-07-27 09:26:27','firstpush','push','1000','1','1','PUSH;IOD;BOLA;FIRSTPUSH','2017-07-27'),(2,'xl','912345','6281066655231','reg bola',1,'bola',0,'Welcome Message reg 1x','9022112231','2017-07-27','90102803','2017-07-27 09:26:27','reg','pull','0','1','3','REG;IOD;BOLA','2017-07-27'),(3,'xl','912345','6281066655211','unreg bola',1,'bola',0,'Anda telah berhenti dari layanan bola','ID-830677800','2017-07-25','32236755','2017-07-25 06:46:36','unreg','PUSH','1000','1','1','PUSH;IOD;BOLA;UNREG','2017-07-27'),(4,'xl','912345','62819455804321','DAILY PUSH CANTIK',2,'cantik',2,'Reply Cantik 2','ID-781474486','2017-07-27','34139415','2017-07-27 09:53:01','dailypush','push','900','1','3','PUSH;IOD;CANTIK;DAILYPUSH','2017-07-27'),(5,'xl','912345','62817450049791','DAILY PUSH BOLA',1,'bola',3,'Ini Konten bola ke 3','ID-806503186','2017-07-27','41948178','2017-07-27 09:53:01','dailypush','push','1000','1','2','PUSH;IOD;BOLA;DAILYPUSH','2017-07-27'),(6,'xl','912345','62817455804321','DAILY PUSH BOLA',1,'bola',4,'Ini Konten bola ke 4','ID-354581825','2017-07-27','49803754','2017-07-27 09:53:01','dailypush','push','1000','1','0','PUSH;IOD;BOLA;DAILYPUSH','2017-07-27'),(7,'xl','912345','62817450049791','DAILY PUSH BOLA',1,'bola',3,'Ini Konten bola ke 3','ID-957387741','2017-07-27','44698566','2017-07-27 09:53:54','dailypush','push','1000','3','3','PUSH;IOD;BOLA;DAILYPUSH','2017-07-27'),(8,'xl','912345','62819455804321','DAILY PUSH CANTIK',2,'cantik',2,'Reply Cantik 2','ID-220857421','2017-07-27','68719464','2017-07-27 09:53:54','dailypush','push','900','3','3','PUSH;IOD;CANTIK;DAILYPUSH','2017-07-27'),(9,'xl','912345','62817455804321','DAILY PUSH BOLA',1,'bola',4,'Ini Konten bola ke 4','ID-521016434','2017-07-27','89641142','2017-07-27 09:53:54','dailypush','push','1000','3','3','PUSH;IOD;BOLA;DAILYPUSH','2017-07-27');

/*Table structure for table `tb_push_summary_2017_07` */

DROP TABLE IF EXISTS `tb_push_summary_2017_07`;

CREATE TABLE `tb_push_summary_2017_07` (
  `id_push` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `sms_field` varchar(200) DEFAULT NULL,
  `id_app` int(11) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `content_number` int(11) DEFAULT NULL,
  `content_field` varchar(200) DEFAULT NULL,
  `trx_id` varchar(250) DEFAULT NULL,
  `trx_date` varchar(20) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `session_date` varchar(20) DEFAULT NULL,
  `reg_type` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `cost` varchar(10) DEFAULT NULL,
  `send_status` varchar(10) DEFAULT NULL,
  `response_code` varchar(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `date_create` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_push`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_push_summary_2017_07` */

insert  into `tb_push_summary_2017_07`(`id_push`,`telco`,`shortcode`,`msisdn`,`sms_field`,`id_app`,`keyword`,`content_number`,`content_field`,`trx_id`,`trx_date`,`session_id`,`session_date`,`reg_type`,`type`,`cost`,`send_status`,`response_code`,`subject`,`date_create`) values (1,'xl','912345','62817726131836','reg bola',1,'bola',1,'Reply Bola Pertama','ID-334986821','2017-07-25','40113626','2017-07-25 06:43:17','firstpush','push','1000','3','3','PUSH;IOD;BOLA;FIRSTPUSH','2017-07-25'),(2,'xl','912345','6281066655211','reg bola',1,'bola',0,'Welcome Message reg 1x','9022112211','2017-07-25','521705','2017-07-25 06:43:17','reg','pull','0','3','3','REG;IOD;BOLA','2017-07-25');

/*Table structure for table `tb_push_today` */

DROP TABLE IF EXISTS `tb_push_today`;

CREATE TABLE `tb_push_today` (
  `id_push` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(20) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `sms_field` varchar(200) DEFAULT NULL,
  `id_app` int(11) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `content_number` int(11) DEFAULT NULL,
  `content_field` varchar(200) DEFAULT NULL,
  `trx_id` varchar(250) DEFAULT NULL,
  `trx_date` varchar(20) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `session_date` varchar(20) DEFAULT NULL,
  `reg_type` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `cost` varchar(10) DEFAULT NULL,
  `send_status` varchar(10) DEFAULT NULL,
  `response_code` varchar(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `date_create` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_push`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_push_today` */

/*Table structure for table `tb_signin_user` */

DROP TABLE IF EXISTS `tb_signin_user`;

CREATE TABLE `tb_signin_user` (
  `id_ulog` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `name_user` varchar(100) DEFAULT NULL,
  `ip_user` varchar(100) DEFAULT NULL,
  `sign_date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_ulog`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tb_signin_user` */

insert  into `tb_signin_user`(`id_ulog`,`id_user`,`name_user`,`ip_user`,`sign_date`) values (2,1,'Pebri','::1','2017-07-26 02:26:27'),(3,1,'Pebri','::1','2017-07-26 04:25:07'),(4,4,'Pebri','::1','2017-07-27 10:16:55'),(5,4,'Pebri','::1','2017-07-27 10:17:34'),(6,4,'Pebri','::1','2017-07-27 10:19:10'),(7,4,'Pebri','::1','2017-07-27 10:46:47'),(8,4,'Pebri','::1','2017-07-27 10:47:21'),(9,4,'Pebri','::1','2017-07-27 10:47:50'),(10,4,'Pebri','::1','2017-07-27 12:39:02'),(11,4,'Pebri','::1','2017-07-27 12:44:39'),(12,4,'Pebri','::1','2017-07-27 02:25:51'),(13,4,'Pebri','::1','2017-07-28 09:42:09'),(14,4,'Pebri','::1','2017-07-28 09:57:08'),(15,4,'Pebri','::1','2017-07-28 10:15:42');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
