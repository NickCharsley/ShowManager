-- --------------------------------------------------------

--
-- Table structure for table `exhibitionsection`
--

CREATE TABLE IF NOT EXISTS `exhibitionsection` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ExhibitionID` int(11) NOT NULL,
  `SectionNumber` varchar(20) NOT NULL,
  `SectionID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ExhibitionID` (`ExhibitionID`,`SectionNumber`),
  UNIQUE KEY `ExhibitionID_2` (`ExhibitionID`,`SectionID`),
  KEY `fk_exhibitionsection_exhibition_idx` (`ExhibitionID`),
  KEY `fk_exhibitionsection_section_idx` (`SectionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Constraints for table `exhibitionsection`
--
ALTER TABLE `exhibitionsection`
  ADD CONSTRAINT `fk_exhibitionsection_exhibition` FOREIGN KEY (`ExhibitionID`) REFERENCES `exhibition` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_exhibitionsection_section` FOREIGN KEY (`SectionID`) REFERENCES `section` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Dumping data for table `exhibitionsection`
--

INSERT INTO `exhibitionsection` (`ID`, `ExhibitionID`, `SectionNumber`, `SectionID`) VALUES
(1, 3, '1', 1),
(2, 3, '2', 2),
(3, 3, '3', 3),
(4, 3, '4', 4),
(5, 3, '5', 6),
(6, 3, '6', 5),
(7, 3, '7', 7),
(8, 3, '8', 8),
(9, 3, '9', 9),
(10, 3, '10', 10),
(11, 2, '1', 11),
(12, 5, '1', 1),
(13, 5, '2', 2),
(14, 5, '3', 3),
(15, 5, '4', 4),
(16, 5, '5', 6),
(17, 5, '6', 5),
(18, 5, '7', 7),
(19, 5, '8', 8),
(20, 5, '9', 9),
(21, 5, '10', 10),
(22, 6, '1', 12),
(23, 7, '1', 1),
(24, 7, '2', 2),
(25, 7, '3', 3),
(26, 7, '4', 4),
(27, 7, '5', 6),
(28, 7, '6', 5),
(29, 7, '7', 7),
(30, 7, '8', 8),
(31, 7, '9', 9),
(32, 7, '10', 10),
(33, 8, '2012', 12),
(34, 8, '1', 13),
(35, 9, '1', 1),
(36, 9, '2', 2),
(37, 9, '3', 3),
(38, 9, '4', 4),
(39, 9, '5', 6),
(40, 9, '6', 5),
(41, 9, '7', 7),
(42, 9, '8', 8),
(43, 9, '9', 9),
(44, 9, '10', 10),
(45, 10, '1', 15),
(46, 11, '1', 1),
(47, 11, '2', 2),
(48, 11, '3', 3),
(49, 11, '4', 4),
(50, 11, '5', 6),
(51, 11, '6', 5),
(52, 11, '7', 7),
(53, 11, '8', 8),
(54, 11, '9', 9),
(55, 11, '10', 10),
(56, 12, '1', 16),
(57, 13, '1', 16);

