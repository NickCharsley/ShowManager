-- --------------------------------------------------------

--
-- Structure for view `defaultexhibitionclass`
--
DROP TABLE IF EXISTS `defaultexhibitionclass`;

CREATE  VIEW `defaultexhibitionclass` AS select `exhibitionclass`.`ID` AS `ID`,`exhibitionclass`.`ExhibitionID` AS `ExhibitionID`,`exhibitionclass`.`ExhibitionSectionID` AS `ExhibitionSectionID`,`exhibitionclass`.`ClassNumber` AS `ClassNumber`,`exhibitionclass`.`ClassID` AS `ClassID` from (`defaults` join `exhibitionclass` on((`defaults`.`ShowID` = `exhibitionclass`.`ExhibitionID`)));


