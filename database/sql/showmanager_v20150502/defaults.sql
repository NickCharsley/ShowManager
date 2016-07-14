-- --------------------------------------------------------

--
-- Table structure for table `defaults`
--

CREATE TABLE IF NOT EXISTS `defaults` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ShowName` varchar(255) DEFAULT NULL,
  `ShowID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_defaults_exhibition_idx` (`ShowID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Constraints for table `defaults`
--
ALTER TABLE `defaults`
  ADD CONSTRAINT `fk_defaults_exhibition` FOREIGN KEY (`ShowID`) REFERENCES `exhibition` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Dumping data for table `defaults`
--

INSERT INTO `defaults` (`ID`, `ShowName`, `ShowID`) VALUES
(1, 'bhs', 13);


