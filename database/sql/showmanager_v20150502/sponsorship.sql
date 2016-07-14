-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--


CREATE TABLE IF NOT EXISTS `sponsorship` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `ExhibitionClassPrizeID` int(11) NOT NULL,
  `Prize` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`),
  KEY `fk_sponsorship_exhibitionclassprize_idx` (`ExhibitionClassPrizeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

--
-- Constraints for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD CONSTRAINT `fk_sponsorship_exhibitionclassprize` FOREIGN KEY (`ExhibitionClassPrizeID`) REFERENCES `exhibitionclassprize` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Dumping data for table `sponsorship`
--
;
INSERT INTO `sponsorship` (`ID`, `Name`, `ExhibitionClassPrizeID`, `Prize`) VALUES
(24, 'Sweet Peas 1st', 2099, 'Unwins Voucher'),
(25, 'Patio Pot 1st', 2099, 'Â£7 Voucher (Baldock Hardware)'),
(26, 'Patio Pot 2nd', 2099, 'Â£3 Voucher (Baldock Hardware)'),
(27, 'Flowering Plant 1st', 2099, 'Â£10 Voucher (Bickerdike Garden Centre)'),
(28, 'Flowering Plant 2nd', 2099, 'Â£5 Voucher (Bickerdike Garden Centre)'),
(29, 'Hanging Basket 1st', 2099, 'Â£8 Voucher (C Keeble)'),
(30, 'Hanging Basket 2nd', 2099, 'Â£6 Voucher (C Keeble)'),
(31, 'Hanging Basket 3rd', 2099, 'Â£4 Voucher (C Keeble)'),
(32, 'Other Fruit 1st', 2099, 'Â£5 (Mr M Camp)'),
(33, 'Other Fruit 2nd', 2099, 'Â£3 (Mr M Camp)'),
(34, 'Other Fruit 3rd', 2099, 'Â£2 (Mr M Camp)'),
(35, 'Embroidery 1st', 2099, 'Â£5 (Wool-n-Things)'),
(36, 'Embroidery 2nd', 2099, 'Â£3 Voucher (Wool-n-Things)'),
(37, 'Embroidery 3rd', 2099, 'Â£2 Voucher (Wool-n-Things)'),
(38, 'Fruit Cake 1st', 2099, 'Â£5 (Days of Ashwell)'),
(39, 'Fruit Cake 2nd', 2099, 'Â£3 (Days of Ashwell)'),
(40, 'Fruit Cake 3rd', 2099, 'Â£2 (Days of Ashwell)'),
(41, 'Sweet Peas 2nd', 2100, 'Unwins Voucher'),
(42, 'Roses 1st', 2126, 'Â£5 (Bob Smith)'),
(43, 'Roses 2nd', 2127, 'Â£3 (Bob Smith)'),
(44, 'Roses 3rd', 2128, 'Â£2 (Bob Smith)'),
(45, 'Vase of Flowers 1st', 2132, 'Â£5 (Mrs Gray)'),
(46, 'Vase of Flowers 2nd', 2133, 'Â£3 (Mrs Gray)'),
(47, 'Vase of Flowers 3rd', 2134, 'Â£2 (Mrs Gray)'),
(48, 'Foliage Plant 1st', 2099, 'Â£10 Voucher (Bickerdike Garden Centre)'),
(49, 'Foliage Plant 2nd', 2099, 'Â£5 Voucher (Bickerdike Garden Centre)'),
(50, 'Knitting 1st', 2099, 'Â£3 (Mrs J Vallis)'),
(51, 'Knitting 2nd', 2099, 'Â£2 (Mrs J Vallis)'),
(52, 'Knitting 3rd', 2099, 'Â£1 (Mrs J Vallis)'),
(53, 'Garden in a Tray (I) 1st', 2099, 'Â£5 (Mr Spriggs)'),
(54, 'Garden in a Tray (I) 2nd', 2099, 'Â£3 (Mr Spriggs)'),
(55, 'Garden in a Tray (I) 3rd', 2099, 'Â£2 (Mr Spriggs)'),
(56, 'Garden in a Tray (II) 1st', 2099, 'Â£5 (Mr Spriggs)'),
(57, 'Garden in a Tray (II) 2nd', 2099, 'Â£3 (Mr Spriggs)'),
(58, 'Garden in a Tray (II) 3rd', 2099, 'Â£2 (Mr Spriggs)'),
(59, 'Garden in a Tray (III) 1st', 2099, 'Â£5 (Mr Spriggs)'),
(60, 'Garden in a Tray (III) 2nd', 2099, 'Â£3 (Mr Spriggs)'),
(61, 'Garden in a Tray (III) 3rd', 2099, 'Â£2 (Mr Spriggs)');


