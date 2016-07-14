-- --------------------------------------------------------

--
-- Structure for view `defaultexhibitiontrophyclass`
--
DROP TABLE IF EXISTS `defaultexhibitiontrophyclass`;

CREATE  VIEW `defaultexhibitiontrophyclass` AS select `exhibitiontrophyclass`.`ID` AS `id`,`exhibitiontrophyclass`.`TrophyID` AS `trophyid`,`exhibitiontrophyclass`.`ExhibitionClassID` AS `exhibitionclassid` from `exhibitiontrophyclass` where `exhibitiontrophyclass`.`ExhibitionClassID` in (select `exhibitionclass`.`ID` AS `ID` from (`exhibitionclass` join `defaults` on((`defaults`.`ShowID` = `exhibitionclass`.`ExhibitionID`))));


