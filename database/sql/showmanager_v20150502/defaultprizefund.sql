-- --------------------------------------------------------

--
-- Structure for view `defaultprizefund`
--
DROP TABLE IF EXISTS `defaultprizefund`;

CREATE  VIEW `defaultprizefund` AS select `exhibitor`.`ID` AS `ID`,sum(`exhibitionclassprize`.`Prize`) AS `Prize`,sum(`exhibitionclassprize`.`Points`) AS `Points` from ((((`exhibitionclass` join `defaults` on((`exhibitionclass`.`ExhibitionID` = `defaults`.`ShowID`))) join `exhibitionclassprize` on((`exhibitionclass`.`ID` = `exhibitionclassprize`.`ExhibitionClassID`))) join `exhibitionexhibitor` on((`exhibitionclassprize`.`ExhibitionExhibitorID` = `exhibitionexhibitor`.`ID`))) join `exhibitor` on((`exhibitionexhibitor`.`ExhibitorID` = `exhibitor`.`ID`))) group by `exhibitor`.`ID`;


