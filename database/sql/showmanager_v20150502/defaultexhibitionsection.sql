-- --------------------------------------------------------

--
-- Structure for view `defaultexhibitionsection`
--
DROP TABLE IF EXISTS `defaultexhibitionsection`;

CREATE  VIEW `defaultexhibitionsection` AS select `exhibitionsection`.`ID` AS `ID`,`exhibitionsection`.`SectionNumber` AS `SectionNumber`,`section`.`Name` AS `Name` from ((`exhibitionsection` join `defaults` on((`defaults`.`ShowID` = `exhibitionsection`.`ExhibitionID`))) join `section` on((`section`.`ID` = `exhibitionsection`.`SectionID`)));


