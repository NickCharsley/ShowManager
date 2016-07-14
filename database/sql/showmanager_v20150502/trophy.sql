-- --------------------------------------------------------

--
-- Table structure for table `trophy`
--

CREATE TABLE IF NOT EXISTS `trophy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ExhibitionID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Member` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `trophy_index01` (`ExhibitionID`,`Name`),
  KEY `Name` (`Name`),
  KEY `fk_trophy_exhibition_idx` (`ExhibitionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Constraints for table `trophy`
--
ALTER TABLE `trophy`
  ADD CONSTRAINT `fk_trophy_exhibition` FOREIGN KEY (`ExhibitionID`) REFERENCES `exhibition` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Dumping data for table `trophy`
--

INSERT INTO `trophy` (`ID`, `ExhibitionID`, `Name`, `Member`) VALUES
(2, 3, 'Sweet Pea', 0),
(3, 3, 'Flowers', 0),
(4, 5, 'George Ashton Shield', 0),
(5, 5, 'Don Kenny Cup', 0),
(6, 5, 'Scott Shield', 0),
(7, 5, 'Sheild for most points in Show', 0),
(8, 5, 'Cup for most points in Vegetables', 0),
(9, 5, 'Cup for most points in Flowers & Pot Plants', 0),
(10, 6, 'Glass', 0),
(11, 7, 'Most Points Vegetables', 0),
(12, 7, 'Most Points Flowers & Pot Plants', 0),
(13, 2, 'Most Points Children 7/11', 0),
(14, 2, 'Most Points Needlecraft/Hobbies', 0),
(15, 7, 'Don Kenny Trophy', 0),
(16, 2, 'Most Points in Show', 0),
(17, 7, 'George Ashton Shield', 0),
(18, 7, 'Scott Shield', 0),
(19, 7, 'Baldock School', 0),
(20, 7, 'Most Points in Show', 0),
(21, 7, 'Most Points Children 7/11', 0),
(22, 7, 'Medal Children 3/6', 0),
(23, 7, 'Most Points Needlecraft/Hobbies', 0),
(24, 9, 'Most Points in Show', 0),
(25, 8, 'Most Points in Show', 0),
(26, 9, 'George Ashton Shield', 0),
(27, 9, 'Most Points Sweet Peas 1/2', 0),
(28, 9, 'Most Points Vegetables', 0),
(29, 9, 'Most Points Flowers & Pot Plants', 0),
(30, 9, 'Most Points Children 7/11', 0),
(31, 9, 'Most Points Needlecraft/Hobbies', 0),
(32, 9, 'Don Kenny Trophy', 0),
(33, 9, 'Scott Shield', 0),
(35, 9, 'School Shield', 0),
(36, 10, 'Most Points', 0),
(37, 11, 'Vegetable Cup', 0),
(38, 11, 'Flower + Pot Plant Cup', 0),
(39, 11, 'Childrens Section Cup', 0),
(40, 11, 'Individual Stage 2 Medal', 0),
(41, 11, 'School Stage 2 Medal', 0),
(42, 11, 'School Shield', 0),
(43, 11, 'Needlecraft/Hobbies Cup', 0),
(44, 11, 'Individual Key Stage 1 Medal', 0),
(45, 11, 'School Key Stage 1 Medal', 0),
(46, 11, 'Don Keny Trophy', 0),
(47, 11, 'Scott Shield', 0),
(48, 11, 'George Ashton Shield', 0),
(49, 11, 'Show Shield', 0);


