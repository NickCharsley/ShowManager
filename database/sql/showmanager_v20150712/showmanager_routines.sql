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
-- Temporary table structure for view `defaultprizefund`
--

DROP TABLE IF EXISTS `defaultprizefund`;
/*!50001 DROP VIEW IF EXISTS `defaultprizefund`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `defaultprizefund` (
  `ID` tinyint NOT NULL,
  `Prize` tinyint NOT NULL,
  `Points` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `defaultexhibitionclass`
--

DROP TABLE IF EXISTS `defaultexhibitionclass`;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitionclass`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `defaultexhibitionclass` (
  `ID` tinyint NOT NULL,
  `ExhibitionID` tinyint NOT NULL,
  `ExhibitionSectionID` tinyint NOT NULL,
  `ClassNumber` tinyint NOT NULL,
  `ClassID` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `defaultexhibitionclassprize`
--

DROP TABLE IF EXISTS `defaultexhibitionclassprize`;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitionclassprize`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `defaultexhibitionclassprize` (
  `ID` tinyint NOT NULL,
  `ExhibitionClassID` tinyint NOT NULL,
  `PrizeID` tinyint NOT NULL,
  `Prize` tinyint NOT NULL,
  `Points` tinyint NOT NULL,
  `ExhibitionExhibitorID` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `defaultexhibitionexhibitor`
--

DROP TABLE IF EXISTS `defaultexhibitionexhibitor`;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitionexhibitor`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `defaultexhibitionexhibitor` (
  `ID` tinyint NOT NULL,
  `ExhibitionID` tinyint NOT NULL,
  `ExhibitorNumber` tinyint NOT NULL,
  `ExhibitorID` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `trophyresults`
--

DROP TABLE IF EXISTS `trophyresults`;
/*!50001 DROP VIEW IF EXISTS `trophyresults`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `trophyresults` (
  `TrophyID` tinyint NOT NULL,
  `ExhibitorID` tinyint NOT NULL,
  `Points` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `defaultexhibitiontrophyclass`
--

DROP TABLE IF EXISTS `defaultexhibitiontrophyclass`;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitiontrophyclass`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `defaultexhibitiontrophyclass` (
  `id` tinyint NOT NULL,
  `trophyid` tinyint NOT NULL,
  `exhibitionclassid` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `defaultexhibitionsection`
--

DROP TABLE IF EXISTS `defaultexhibitionsection`;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitionsection`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `defaultexhibitionsection` (
  `ID` tinyint NOT NULL,
  `SectionNumber` tinyint NOT NULL,
  `Name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `defaultprizefund`
--

/*!50001 DROP TABLE IF EXISTS `defaultprizefund`*/;
/*!50001 DROP VIEW IF EXISTS `defaultprizefund`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`showmanager`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `defaultprizefund` AS select `exhibitor`.`ID` AS `ID`,sum(`exhibitionclassprize`.`Prize`) AS `Prize`,sum(`exhibitionclassprize`.`Points`) AS `Points` from ((((`exhibitionclass` join `defaults` on((`exhibitionclass`.`ExhibitionID` = `defaults`.`ShowID`))) join `exhibitionclassprize` on((`exhibitionclass`.`ID` = `exhibitionclassprize`.`ExhibitionClassID`))) join `exhibitionexhibitor` on((`exhibitionclassprize`.`ExhibitionExhibitorID` = `exhibitionexhibitor`.`ID`))) join `exhibitor` on((`exhibitionexhibitor`.`ExhibitorID` = `exhibitor`.`ID`))) group by `exhibitor`.`ID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `defaultexhibitionclass`
--

/*!50001 DROP TABLE IF EXISTS `defaultexhibitionclass`*/;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitionclass`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`showmanager`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `defaultexhibitionclass` AS select `exhibitionclass`.`ID` AS `ID`,`exhibitionclass`.`ExhibitionID` AS `ExhibitionID`,`exhibitionclass`.`ExhibitionSectionID` AS `ExhibitionSectionID`,`exhibitionclass`.`ClassNumber` AS `ClassNumber`,`exhibitionclass`.`ClassID` AS `ClassID` from (`defaults` join `exhibitionclass` on((`defaults`.`ShowID` = `exhibitionclass`.`ExhibitionID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `defaultexhibitionclassprize`
--

/*!50001 DROP TABLE IF EXISTS `defaultexhibitionclassprize`*/;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitionclassprize`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`showmanager`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `defaultexhibitionclassprize` AS select `exhibitionclassprize`.`ID` AS `ID`,`exhibitionclassprize`.`ExhibitionClassID` AS `ExhibitionClassID`,`exhibitionclassprize`.`PrizeID` AS `PrizeID`,`exhibitionclassprize`.`Prize` AS `Prize`,`exhibitionclassprize`.`Points` AS `Points`,`exhibitionclassprize`.`ExhibitionExhibitorID` AS `ExhibitionExhibitorID` from `exhibitionclassprize` where `exhibitionclassprize`.`ExhibitionClassID` in (select `exhibitionclass`.`ID` AS `ID` from (`exhibitionclass` join `defaults` on((`defaults`.`ShowID` = `exhibitionclass`.`ExhibitionID`)))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `defaultexhibitionexhibitor`
--

/*!50001 DROP TABLE IF EXISTS `defaultexhibitionexhibitor`*/;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitionexhibitor`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`showmanager`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `defaultexhibitionexhibitor` AS select `exhibitionexhibitor`.`ID` AS `ID`,`exhibitionexhibitor`.`ExhibitionID` AS `ExhibitionID`,`exhibitionexhibitor`.`ExhibitorNumber` AS `ExhibitorNumber`,`exhibitionexhibitor`.`ExhibitorID` AS `ExhibitorID` from (`exhibitionexhibitor` join `defaults` on((`defaults`.`ShowID` = `exhibitionexhibitor`.`ExhibitionID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `trophyresults`
--

/*!50001 DROP TABLE IF EXISTS `trophyresults`*/;
/*!50001 DROP VIEW IF EXISTS `trophyresults`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`showmanager`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `trophyresults` AS select `trophy`.`ID` AS `TrophyID`,`exhibitionexhibitor`.`ExhibitorID` AS `ExhibitorID`,sum(`exhibitionclassprize`.`Points`) AS `Points` from (((`trophy` join `exhibitiontrophyclass` on((`trophy`.`ID` = `exhibitiontrophyclass`.`TrophyID`))) join `exhibitionclassprize` on((`exhibitiontrophyclass`.`ExhibitionClassID` = `exhibitionclassprize`.`ExhibitionClassID`))) join `exhibitionexhibitor` on((`exhibitionclassprize`.`ExhibitionExhibitorID` = `exhibitionexhibitor`.`ID`))) group by `trophy`.`ID`,`trophy`.`Name`,`exhibitionexhibitor`.`ExhibitorID` order by `trophy`.`ID`,sum(`exhibitionclassprize`.`Points`) desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `defaultexhibitiontrophyclass`
--

/*!50001 DROP TABLE IF EXISTS `defaultexhibitiontrophyclass`*/;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitiontrophyclass`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`showmanager`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `defaultexhibitiontrophyclass` AS select `exhibitiontrophyclass`.`ID` AS `id`,`exhibitiontrophyclass`.`TrophyID` AS `trophyid`,`exhibitiontrophyclass`.`ExhibitionClassID` AS `exhibitionclassid` from `exhibitiontrophyclass` where `exhibitiontrophyclass`.`ExhibitionClassID` in (select `exhibitionclass`.`ID` AS `ID` from (`exhibitionclass` join `defaults` on((`defaults`.`ShowID` = `exhibitionclass`.`ExhibitionID`)))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `defaultexhibitionsection`
--

/*!50001 DROP TABLE IF EXISTS `defaultexhibitionsection`*/;
/*!50001 DROP VIEW IF EXISTS `defaultexhibitionsection`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`showmanager`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `defaultexhibitionsection` AS select `exhibitionsection`.`ID` AS `ID`,`exhibitionsection`.`SectionNumber` AS `SectionNumber`,`section`.`Name` AS `Name` from ((`exhibitionsection` join `defaults` on((`defaults`.`ShowID` = `exhibitionsection`.`ExhibitionID`))) join `section` on((`section`.`ID` = `exhibitionsection`.`SectionID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-12 12:08:47
