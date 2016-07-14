CREATE DATABASE  IF NOT EXISTS `showmanager` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `showmanager`;
-- MySQL dump 10.13  Distrib 5.7.12, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: showmanager
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `trophy`
--

DROP TABLE IF EXISTS `trophy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trophy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ExhibitionID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Member` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `trophy_index01` (`ExhibitionID`,`Name`),
  KEY `Name` (`Name`),
  KEY `fk_trophy_exhibition_idx` (`ExhibitionID`),
  CONSTRAINT `fk_trophy_exhibition` FOREIGN KEY (`ExhibitionID`) REFERENCES `exhibition` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trophy`
--

LOCK TABLES `trophy` WRITE;
/*!40000 ALTER TABLE `trophy` DISABLE KEYS */;
INSERT INTO `trophy` VALUES (2,3,'Sweet Pea',0),(3,3,'Flowers',0),(4,5,'George Ashton Shield',0),(5,5,'Don Kenny Cup',0),(6,5,'Scott Shield',0),(7,5,'Sheild for most points in Show',0),(8,5,'Cup for most points in Vegetables',0),(9,5,'Cup for most points in Flowers & Pot Plants',0),(10,6,'Glass',0),(11,7,'Most Points Vegetables',0),(12,7,'Most Points Flowers & Pot Plants',0),(13,2,'Most Points Children 7/11',0),(14,2,'Most Points Needlecraft/Hobbies',0),(15,7,'Don Kenny Trophy',0),(16,2,'Most Points in Show',0),(17,7,'George Ashton Shield',0),(18,7,'Scott Shield',0),(19,7,'Baldock School',0),(20,7,'Most Points in Show',0),(21,7,'Most Points Children 7/11',0),(22,7,'Medal Children 3/6',0),(23,7,'Most Points Needlecraft/Hobbies',0),(24,9,'Most Points in Show',0),(25,8,'Most Points in Show',0),(26,9,'George Ashton Shield',0),(27,9,'Most Points Sweet Peas 1/2',0),(28,9,'Most Points Vegetables',0),(29,9,'Most Points Flowers & Pot Plants',0),(30,9,'Most Points Children 7/11',0),(31,9,'Most Points Needlecraft/Hobbies',0),(32,9,'Don Kenny Trophy',0),(33,9,'Scott Shield',0),(35,9,'School Shield',0),(36,10,'Most Points',0),(37,11,'Vegetable Cup',0),(38,11,'Flower &amp; Pot Plant Cup',0),(39,11,'KS2 Childrens Cup',0),(40,11,'KS1 Childrens Medal',0),(41,11,'KS2 Childrens Medal',0),(42,11,'School EYF Medal',0),(43,11,'School KS1 Medal',0),(44,11,'School KS2 Medal',0),(45,11,'Needlecraft/Hobby Cup',0),(46,11,'Points in show',0),(47,11,'Baldock School Shield',0),(48,11,'Don Kenny Trophy',0),(49,11,'Scott Shield',0),(50,11,'George Ashton Shield',0),(51,11,'Needlecraft Section',0),(52,12,'Baldock School Shield',0),(53,12,'Don Kenny Trophy',0),(54,12,'Flower &amp; Pot Plant Cup',0),(55,12,'George Ashton Shield',0),(56,12,'KS1 Childrens Medal',0),(57,12,'KS2 Childrens Cup',0),(58,12,'KS2 Childrens Medal',0),(59,12,'Needlecraft Section',0),(60,12,'Needlecraft/Hobby Cup',0),(61,12,'Points in show',0),(62,12,'School EYF Medal',0),(63,12,'School KS1 Medal',0),(64,12,'School KS2 Medal',0),(65,12,'Scott Shield',0),(66,12,'Vegetable Cup',0);
/*!40000 ALTER TABLE `trophy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-09 20:21:08
