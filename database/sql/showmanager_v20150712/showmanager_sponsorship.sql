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
-- Table structure for table `sponsorship`
--

DROP TABLE IF EXISTS `sponsorship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponsorship` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `ExhibitionClassPrizeID` int(11) NOT NULL,
  `Prize` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`),
  KEY `fk_sponsorship_exhibitionclassprize_idx` (`ExhibitionClassPrizeID`),
  CONSTRAINT `fk_sponsorship_exhibitionclassprize` FOREIGN KEY (`ExhibitionClassPrizeID`) REFERENCES `exhibitionclassprize` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsorship`
--

/*!40000 ALTER TABLE `sponsorship` DISABLE KEYS */;
INSERT INTO `sponsorship` VALUES (1,'Sweet Pea 1',164,'Unwin Voucher'),(2,'Sweet Pea 2',165,'Unwin Voucher'),(3,'Vase of Flowers 1',698,'£5 Mrs Gray'),(4,'Vase of Flowers 2',698,'£3 Mrs Gray'),(5,'Vase of Flowers 3',698,'£2 Mrs Gray'),(6,'Patio Pot 1',698,'£7 Hardware Voucher'),(7,'Patio Pot 2',698,'£3 Hardware Voucher'),(8,'Begonias',159,'Unwin Voucher'),(9,'Flowering Plant 1',698,'£10 Bickerdike Vouch'),(10,'Flowering Plant 2',159,'?5 Bickerdike Vouche'),(11,'Foliage Plant 1',159,'?10 Bickerdike Vouch'),(12,'Foliage Plant 2',159,'?5 Bickerdike Vouche'),(13,'Hanging Basket 1',159,'?8 Keeble Voucher'),(14,'Hanging Basket 2',159,'?6 Keeble Voucher'),(15,'Hanging Basket 3',159,'?4 Keeble Voucher'),(16,'Potatoes 1',159,'Unwin Voucher'),(17,'Veg & Flower 1',159,'Unwin Voucher'),(18,'Football World Cup 1',159,'?6 Baldock Flowers V'),(19,'Football World Cup 2',159,'?4 Baldock Flower Vo'),(20,'Football World Cup 3',159,'?3 Baldock Flower Vo'),(21,'Roses 1',728,'£5 Bob Smith'),(22,'Roses 2',729,'£3 Bob Smith'),(23,'Roses 3',730,'£2 Bob Smith');
/*!40000 ALTER TABLE `sponsorship` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-12 12:08:46
