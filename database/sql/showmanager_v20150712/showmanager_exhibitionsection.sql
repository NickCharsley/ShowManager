CREATE DATABASE  IF NOT EXISTS `showmanager` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `showmanager`;
-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
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
-- Table structure for table `exhibitionsection`
--

DROP TABLE IF EXISTS `exhibitionsection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exhibitionsection` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ExhibitionID` int(11) NOT NULL,
  `SectionNumber` varchar(20) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `SectionID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ExhibitionID` (`ExhibitionID`,`SectionNumber`),
  UNIQUE KEY `ExhibitionID_2` (`ExhibitionID`,`SectionID`,`Description`),
  KEY `fk_exhibitionsection_exhibition_idx` (`ExhibitionID`),
  KEY `fk_exhibitionsection_section_idx` (`SectionID`),
  CONSTRAINT `fk_exhibitionsection_exhibition` FOREIGN KEY (`ExhibitionID`) REFERENCES `exhibition` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_exhibitionsection_section` FOREIGN KEY (`SectionID`) REFERENCES `section` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exhibitionsection`
--

/*!40000 ALTER TABLE `exhibitionsection` DISABLE KEYS */;
INSERT INTO `exhibitionsection` VALUES (1,3,'1',NULL,1),(2,3,'2',NULL,2),(3,3,'3',NULL,3),(4,3,'4',NULL,4),(5,3,'5',NULL,6),(6,3,'6',NULL,5),(7,3,'7',NULL,7),(8,3,'8',NULL,8),(9,3,'9',NULL,9),(10,3,'10',NULL,10),(11,2,'1',NULL,11),(12,5,'1',NULL,1),(13,5,'2',NULL,2),(14,5,'3',NULL,3),(15,5,'4',NULL,4),(16,5,'5',NULL,6),(17,5,'6',NULL,5),(18,5,'7',NULL,7),(19,5,'8',NULL,8),(20,5,'9',NULL,9),(21,5,'10',NULL,10),(22,6,'1',NULL,12),(23,7,'1',NULL,1),(24,7,'2',NULL,2),(25,7,'3',NULL,3),(26,7,'4',NULL,4),(27,7,'5',NULL,6),(28,7,'6',NULL,5),(29,7,'7',NULL,7),(30,7,'8',NULL,8),(31,7,'9',NULL,9),(32,7,'10',NULL,10),(33,8,'2012',NULL,12),(34,8,'1',NULL,13),(35,9,'1',NULL,1),(36,9,'2',NULL,2),(37,9,'3',NULL,3),(38,9,'4',NULL,4),(39,9,'5',NULL,6),(40,9,'6',NULL,5),(41,9,'7',NULL,7),(42,9,'8',NULL,8),(43,9,'9',NULL,9),(44,9,'10',NULL,10),(45,10,'1',NULL,15),(46,11,'1',NULL,1),(47,11,'2',NULL,2),(48,11,'3',NULL,3),(49,11,'4',NULL,4),(50,11,'5',NULL,6),(51,11,'6',NULL,5),(52,11,'7',NULL,7),(53,11,'8',NULL,8),(54,11,'9',NULL,9),(55,11,'10.EYF','Early Years Foundation',10),(56,11,'10.KS1','Key Stage 1',10),(57,11,'10.KS2','Key Stage 2',10);
/*!40000 ALTER TABLE `exhibitionsection` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-12 12:08:45
