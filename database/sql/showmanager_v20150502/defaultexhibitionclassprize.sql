-- --------------------------------------------------------

--
-- Structure for view `defaultexhibitionclassprize`
--
DROP TABLE IF EXISTS `defaultexhibitionclassprize`;

CREATE  VIEW `defaultexhibitionclassprize` AS select `exhibitionclassprize`.`ID` AS `ID`,`exhibitionclassprize`.`ExhibitionClassID` AS `ExhibitionClassID`,`exhibitionclassprize`.`PrizeID` AS `PrizeID`,`exhibitionclassprize`.`Prize` AS `Prize`,`exhibitionclassprize`.`Points` AS `Points`,`exhibitionclassprize`.`ExhibitionExhibitorID` AS `ExhibitionExhibitorID` from `exhibitionclassprize` where `exhibitionclassprize`.`ExhibitionClassID` in (select `exhibitionclass`.`ID` AS `ID` from (`exhibitionclass` join `defaults` on((`defaults`.`ShowID` = `exhibitionclass`.`ExhibitionID`))));


