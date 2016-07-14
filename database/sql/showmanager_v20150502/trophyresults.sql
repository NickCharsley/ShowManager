-- --------------------------------------------------------

--
-- Structure for view `trophyresults`
--
DROP TABLE IF EXISTS `trophyresults`;

CREATE VIEW `trophyresults` AS select `trophy`.`ID` AS `TrophyID`,`exhibitionexhibitor`.`ExhibitorID` AS `ExhibitorID`,sum(`exhibitionclassprize`.`Points`) AS `Points` from (((`trophy` join `exhibitiontrophyclass` on((`trophy`.`ID` = `exhibitiontrophyclass`.`TrophyID`))) join `exhibitionclassprize` on((`exhibitiontrophyclass`.`ExhibitionClassID` = `exhibitionclassprize`.`ExhibitionClassID`))) join `exhibitionexhibitor` on((`exhibitionclassprize`.`ExhibitionExhibitorID` = `exhibitionexhibitor`.`ID`))) group by `trophy`.`ID`,`trophy`.`Name`,`exhibitionexhibitor`.`ExhibitorID` order by `trophy`.`ID`,sum(`exhibitionclassprize`.`Points`) desc;


