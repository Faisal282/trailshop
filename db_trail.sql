/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.34-MariaDB : Database - db_trail
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_trail` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_trail`;

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL AUTO_INCREMENT,
  `nama_brand` varchar(30) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `brand` */

insert  into `brand`(`id_brand`,`nama_brand`,`gambar`) values 
(1,'Honda','Honda'),
(2,'Kawasaki','Kawasaki'),
(3,'Aprilia','Aprilia');

/*Table structure for table `pesanan` */

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `id_produk` (`id_produk`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pesanan` */

insert  into `pesanan`(`id_nota`,`id_user`,`id_produk`,`qty`,`status`,`created_at`,`updated_at`) values 
(1,2,2,1,0,NULL,NULL),
(2,3,1,1,1,'2019-01-31 18:48:42',NULL),
(3,3,2,1,0,'2019-01-31 19:01:04',NULL),
(4,2,2,1,0,'2019-02-02 00:55:58','2019-02-02 00:56:00'),
(5,2,1,1,NULL,'0000-00-00 00:00:00',NULL),
(6,2,2,1,NULL,'0000-00-00 00:00:00',NULL),
(7,2,1,1,NULL,'2019-02-08 19:40:42',NULL);

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) DEFAULT NULL,
  `jenis_produk` enum('trail','sport','bebek','street','matic') DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `brand` (`brand`),
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`brand`) REFERENCES `brand` (`id_brand`) ON DELETE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `produk` */

insert  into `produk`(`id_produk`,`nama_produk`,`jenis_produk`,`brand`,`harga`) values 
(1,'CBR 250','bebek',1,10000000),
(2,'KLX',NULL,1,15000000),
(6,'C70','bebek',1,1000);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`telp`,`email`,`password`,`role`) values 
(1,'admin','0341 724486','admin@gmail.com','admin',1),
(2,'Muhammad Thoriq Al Faruq','1321231','thoriq@gmail.com','12321',0),
(3,'Fridha','0341 231229','fridha@gmail.com','31321',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
