-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: industry
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `industry`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `industry` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `industry`;



--
-- Table structure for table `industries`
--

DROP TABLE IF EXISTS `industries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industries` (
  `industry_no` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `industry_name` varchar(50)  NOT NULL,
  PRIMARY KEY (`industry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industries`
--

LOCK TABLES `industries` WRITE;
/*!40000 ALTER TABLE `industries` DISABLE KEYS */;
INSERT INTO `industries` VALUES (1,'plumming'),(2,'electrician');
/*!40000 ALTER TABLE `industries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(15) NOT NULL,
  `u_email` varchar(128) NOT NULL,
  `u_password` char(32) NOT NULL,
  `industry_no` int(11) unsigned NOT NULL,
  `user_type` int(11) unsigned NOT NULL,
  `u_img` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_email` (`u_email`),
  KEY `industry_no` (`industry_no`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`industry_no`) REFERENCES `industries` (`industry_no`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','root@mail.com','202cb962ac59075b964b07152d234b70',1,1,'../assets/img/1.jpg'),(3,'Hazem','hazem@mail.com','202cb962ac59075b964b07152d234b70',1,2,'../assets/img/2.jpg'),(4,'Magdy','dasdasd','123',1,3,'dasdasdasd');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;


--
-- Table structure for table `work_history`
--

DROP TABLE IF EXISTS `work_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_history`
(
  `wh_id` int (11) unsigned NOT NULL AUTO_INCREMENT,
  `worker_id` int (11)  NOT NULL ,
  `desc` varchar (1000)  NOT NULL,
  `experience` varchar (1000)  NOT NULL,
  PRIMARY KEY (`wh_id`),
  UNIQUE KEY `worker_id` (`worker_id`),
  CONSTRAINT `worker_history_ibfk_12` FOREIGN KEY (`worker_id`) REFERENCES `users`(`u_id`) ON DELETE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_history`
--

LOCK TABLES `work_history` WRITE;
/*!40000 ALTER TABLE `work_history` DISABLE KEYS */;
INSERT INTO `work_history` VALUES (1,1, 'descrptions text bla bla','experience text bla bla'),(2,3,'desc test','exp test');
/*!40000 ALTER TABLE `work_history` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images`
(
  `img_id` int (11) unsigned NOT NULL AUTO_INCREMENT,
  `work_history_id` int (11) unsigned NOT NULL ,
  `image` varchar (1000)  NOT NULL,
  PRIMARY KEY (`img_id`),
  CONSTRAINT `img_constraint_ibfk_13` FOREIGN KEY (`work_history_id`) REFERENCES `work_history`(`wh_id`) ON DELETE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,1, 'test.png'),(2,1,'test.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;




--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `requester_id` int(11) NOT NULL ,
  `worker_id` int(11) NOT NULL ,
  `date` date NOT NULL,
  `desc` varchar(500) NOT NULL,
  PRIMARY KEY (`request_id`),
  CONSTRAINT `requests_ibfk_10` FOREIGN KEY (`requester_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE,
  CONSTRAINT `requests_ibfk_11` FOREIGN KEY (`worker_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES (1,1,3,'2019-04-21','request description'),(2,1,3,'2019-04-20','request description');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;






/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-20 16:26:51
