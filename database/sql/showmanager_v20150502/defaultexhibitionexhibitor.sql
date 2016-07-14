-- --------------------------------------------------------

--
-- Structure for view `defaultexhibitionexhibitor`
--
DROP TABLE IF EXISTS `defaultexhibitionexhibitor`;

CREATE  VIEW `defaultexhibitionexhibitor` AS select `exhibitionexhibitor`.`ID` AS `ID`,`exhibitionexhibitor`.`ExhibitionID` AS `ExhibitionID`,`exhibitionexhibitor`.`ExhibitorNumber` AS `ExhibitorNumber`,`exhibitionexhibitor`.`ExhibitorID` AS `ExhibitorID` from (`exhibitionexhibitor` join `defaults` on((`defaults`.`ShowID` = `exhibitionexhibitor`.`ExhibitionID`)));


