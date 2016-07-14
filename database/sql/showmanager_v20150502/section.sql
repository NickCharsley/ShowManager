-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`ID`, `Name`, `Description`) VALUES
(1, 'Flowers', NULL),
(2, 'Pot Plants', NULL),
(3, 'Vegetables', NULL),
(4, 'Fruit', NULL),
(5, 'Homecraft', NULL),
(6, 'Floral Art', NULL),
(7, 'Photography', NULL),
(8, 'Art', NULL),
(9, 'Needlecraft/Hobbies', NULL),
(10, 'Children', NULL),
(11, '2009 Section 1', NULL),
(12, 'Spring Show', 'All Classes'),
(13, '2012 Spring Show', NULL),
(14, '2012 Summer Show', NULL),
(15, '2013 Spring Show', NULL),
(16, '2014 Spring Show', NULL);


