-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE IF NOT EXISTS `prize` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Prize` decimal(10,2) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`ID`, `Name`, `Prize`, `Points`) VALUES
(1, 'First', '0.00', 3),
(2, 'Second', '0.00', 2),
(3, 'Third', '0.00', 1);


