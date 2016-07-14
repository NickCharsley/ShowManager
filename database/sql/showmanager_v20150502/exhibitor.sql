-- --------------------------------------------------------

--
-- Table structure for table `exhibitor`
--

CREATE TABLE IF NOT EXISTS `exhibitor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Surname` varchar(255) NOT NULL,
  `Member` tinyint(1) NOT NULL DEFAULT '0',
  `Title` varchar(20) DEFAULT NULL,
  `Initials` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `name` (`Surname`,`Initials`,`Title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=316 ;

--
-- Dumping data for table `exhibitor`
--

INSERT INTO `exhibitor` (`ID`, `Surname`, `Member`, `Title`, `Initials`) VALUES
(1, 'George', 0, 'Mr', 'P'),
(2, 'Payne', 0, 'Mrs', 'S M'),
(3, 'Clarke', 0, 'Mrs', NULL),
(4, 'Lee', 0, 'Mrs', NULL),
(5, 'Davey', 0, 'Mrs', NULL),
(6, 'Metcalfe', 1, 'Mrs', 'E'),
(7, 'Metcalfe', 0, 'Mr', 'A J'),
(8, 'Bird', 0, 'Mr', 'J'),
(9, 'Wagstaff', 0, 'Mrs', NULL),
(10, 'Ginn', 0, 'Mr', NULL),
(11, 'West', 0, 'Mrs', NULL),
(12, 'Fairey', 0, 'Mr', 'B'),
(13, 'Fairey', 0, 'Mrs', 'E R'),
(14, 'Davidson', 0, 'Mrs', 'J'),
(15, 'Dashwood', 0, 'Mrs', 'B'),
(16, 'Mynott', 0, 'Mr', NULL),
(17, 'Davidson', 0, 'Mr', 'H'),
(18, 'Harris', 1, 'Mrs', 'P'),
(19, 'Harris', 1, 'Mr', 'D'),
(20, 'Gray', 1, 'Mrs', 'P'),
(21, 'Kuzminski', 1, 'Mrs', 'E'),
(22, 'Clark', 1, 'Mrs', 'S'),
(23, 'Kuzminski', 1, 'Mr', 'A'),
(24, 'Livermore', 0, 'Mrs', 'E'),
(25, 'Char', 0, NULL, NULL),
(26, 'Livermore', 0, 'Mr', 'D'),
(27, 'Char', 0, NULL, NULL),
(28, 'Hurren', 0, 'Mr', 'P'),
(29, 'Livermore', 0, 'Mrs', NULL),
(30, 'Thomas', 0, 'Mrs', 'J'),
(31, 'Campbell', 1, 'Mrs', 'J'),
(32, 'Driver', 0, 'Mrs', 'V'),
(33, 'Watson', 0, 'Mrs', 'J'),
(34, 'Gray', 1, 'Mr', 'J'),
(35, 'Potts', 0, 'Mrs', 'F'),
(36, 'Scott', 0, 'Mrs', 'J E'),
(37, 'Scott', 0, 'Mr', NULL),
(38, 'Chalkley', 0, 'Mrs', 'P'),
(39, 'Brierley', 0, 'Mr', NULL),
(40, 'Cannon', 0, 'Mrs', NULL),
(41, 'Beatie', 0, NULL, 'J'),
(42, 'Southwood', 0, NULL, 'J'),
(43, 'Ball', 1, 'Mrs', NULL),
(44, 'Filby', 1, 'Mrs', 'A'),
(45, 'Filby', 1, 'Mr', NULL),
(46, 'Camp', 0, NULL, 'M'),
(47, 'Palfreyman', 0, 'Mrs', 'J'),
(48, 'Camp', 0, 'Mrs', 'A'),
(49, 'Hailey', 0, 'Mrs', NULL),
(50, 'Palfreyman', 0, 'Mrs', NULL),
(51, 'Gammon', 0, 'Mrs', 'C R'),
(52, 'Rusted', 0, 'Mrs', 'S'),
(53, 'Palfreyman', 0, 'Mr', NULL),
(54, 'Campbell', 0, NULL, 'Annabelle'),
(55, 'Goddard', 0, NULL, 'Lotte'),
(56, 'Groves', 0, NULL, 'Maddy'),
(57, 'Hughes', 0, NULL, 'Emily'),
(58, 'Knight', 0, NULL, 'Amber'),
(59, 'Knight', 0, NULL, 'Jasmine'),
(60, 'Mills', 0, NULL, 'Eleanor'),
(61, 'Lucas', 0, NULL, 'Zoe'),
(62, 'Pearce', 0, NULL, 'Lucy'),
(63, 'Prior', 0, NULL, 'Sophie'),
(64, 'Sell', 0, NULL, 'Bethany'),
(65, 'Whinray-Edwards', 0, NULL, 'Robyn'),
(66, 'Wilcox', 0, NULL, 'Ellie'),
(67, 'Wilcox', 0, NULL, 'Neave'),
(68, 'Stokes', 0, NULL, 'Jade'),
(69, 'Isabelle', 0, NULL, NULL),
(70, 'Bailey', 0, NULL, NULL),
(71, 'Darragh', 0, NULL, NULL),
(72, 'Elle-May', 0, NULL, NULL),
(73, 'Amy', 0, NULL, NULL),
(74, 'Beth', 0, NULL, NULL),
(75, 'Amelia', 0, NULL, NULL),
(76, 'Matilda', 0, NULL, NULL),
(77, 'Rio', 0, NULL, NULL),
(78, 'Ella', 0, NULL, NULL),
(79, 'Jake', 0, NULL, NULL),
(80, 'Jack', 0, NULL, NULL),
(81, 'Gabriella', 0, NULL, NULL),
(82, 'Raphael', 0, NULL, NULL),
(83, 'Owen', 0, NULL, NULL),
(84, 'Raphael', 0, NULL, NULL),
(85, 'Rhys', 0, NULL, NULL),
(86, 'Summer', 0, NULL, NULL),
(87, 'Jarral', 0, NULL, 'Z'),
(88, 'Charsley', 0, NULL, 'R'),
(89, 'Charsley', 0, NULL, 'R'),
(90, 'Charsley', 0, NULL, 'N'),
(91, 'Gray', 0, NULL, 'Pat'),
(92, 'Harris', 0, NULL, 'Pam'),
(93, 'Charsley', 0, NULL, 'Rosemary'),
(94, 'Metcalfe', 0, NULL, 'Eunice'),
(95, 'Harris', 0, NULL, 'Don'),
(96, 'Smith', 0, NULL, 'Iris'),
(97, 'Turner', 0, NULL, 'Chris'),
(98, 'Kuzminski', 0, NULL, 'Adam'),
(99, 'UNKNOWN', 0, NULL, NULL),
(100, 'Camp', 1, NULL, 'Mick'),
(101, 'Willans', 0, NULL, 'Thelma'),
(102, 'Kuzminski', 0, NULL, 'Liz'),
(103, 'Page', 0, NULL, 'Mary'),
(104, 'Camp', 0, NULL, 'Angela'),
(105, 'Wagstaff', 1, NULL, 'Vera'),
(106, 'Ephgrave', 1, NULL, 'Barbara'),
(107, 'Ephgrave', 0, NULL, 'Martin'),
(108, 'Collins', 0, NULL, 'Bobbie'),
(109, 'Luker', 0, NULL, 'Martin'),
(110, 'Luker', 0, NULL, 'Angela'),
(111, 'Barker', 0, NULL, 'Carol'),
(112, 'Robinson', 0, NULL, 'Pat'),
(113, 'Furze', 0, NULL, 'Helen'),
(114, 'Gates', 0, NULL, 'Shirley'),
(115, 'Harnden', 0, NULL, 'Monica'),
(116, 'Hamblin', 0, NULL, 'Shirley'),
(117, 'Watson', 0, NULL, 'Jean'),
(118, 'Kirke', 0, NULL, 'Maired'),
(119, 'Scott', 0, NULL, 'Karen'),
(120, 'Scott', 1, NULL, 'Arthur'),
(121, 'Hayward', 0, NULL, 'Janet'),
(122, 'Mills', 0, 'Mr', 'P M'),
(123, 'Eley', 0, 'Mrs', 'D'),
(124, 'Hoskins', 1, 'Mrs', 'J F E'),
(125, 'Horley', 1, 'Mrs', 'S'),
(126, 'Smart', 0, 'Mr', 'R T'),
(127, 'Ginn', 0, 'Mrs', 'A'),
(128, 'Saville', 0, 'Mr', 'D'),
(129, 'Paxton', 0, 'Mr', 'Chris'),
(130, 'Metcalfe', 0, 'Mrs', 'Ann'),
(131, 'Clark', 0, 'Mr', 'P'),
(132, 'Stokes', 0, NULL, 'Jade'),
(133, 'Thomas', 0, NULL, 'Mary'),
(134, 'Over', 0, NULL, 'Francesca'),
(135, 'Lewis', 0, NULL, 'Abi'),
(136, 'Rashid', 0, NULL, 'Shakirah'),
(137, 'Parkin', 0, NULL, 'Lola'),
(138, 'Lalli', 0, NULL, 'Gursimran'),
(139, 'Lalli', 0, NULL, 'Sukhmani'),
(140, 'O''Connor', 0, NULL, 'Caitlin'),
(141, 'Lucas', 0, NULL, 'Amy'),
(142, 'Williams', 0, NULL, 'Joshua'),
(143, 'Baxter', 0, NULL, 'Eden'),
(144, 'Hand', 0, NULL, 'Rosie'),
(145, 'Jones', 0, NULL, 'Bettsie'),
(146, 'Wright', 0, NULL, 'Charlotte'),
(147, 'MacDonald', 0, NULL, 'Samuel'),
(148, 'Cotterell', 0, NULL, 'Millie'),
(149, 'Bennet', 0, NULL, 'Xander'),
(150, 'Gillham', 0, NULL, 'Anna'),
(151, 'Rees', 0, NULL, 'Charlotte'),
(152, 'Macheod', 0, NULL, 'Isla'),
(153, 'Briffitt', 0, NULL, 'Sophie'),
(154, 'Medland', 0, NULL, 'Casey'),
(155, 'Catlin', 0, NULL, 'Harry'),
(156, 'St Mary''s', 0, NULL, 'Year 5'),
(157, 'St Mary''s', 0, NULL, 'Year 3'),
(158, 'St Mary''s', 0, NULL, 'Year 4'),
(159, 'St Mary''s', 0, NULL, 'Garden Club'),
(160, 'Mills', 0, NULL, 'Luke'),
(161, 'Collison', 0, NULL, 'Rebecca'),
(162, 'Charsley', 0, 'Mr', 'N.A.'),
(163, 'Hiorns', 1, 'Mrs', 'G'),
(164, 'Keech', 1, 'Mrs', 'G'),
(165, 'UNKNOWN', 0, NULL, NULL),
(166, 'Churchyard', 0, 'Mr', NULL),
(167, 'Pauline', 0, NULL, NULL),
(168, 'Langley', 0, 'Mr', NULL),
(169, 'Churchyard', 0, 'Mrs', NULL),
(170, 'Brewer', 0, 'Mrs', NULL),
(171, 'Barlow', 0, 'Mrs S', NULL),
(172, 'Burgess', 0, 'Miss E', NULL),
(173, 'Smith', 0, 'Mrs', NULL),
(174, 'Metcalf', 0, 'Mrs', NULL),
(175, 'Paxton', 0, 'Mrs', NULL),
(176, 'Homewood', 0, 'Mr B', NULL),
(177, 'Charsley', 0, 'Mr P', NULL),
(178, 'Clark', 0, 'Nobby', NULL),
(179, 'Year 2 Garden Club', 0, 'Hartsfield', NULL),
(180, 'Hartsfield Year 2 Garden Club', 0, NULL, NULL),
(181, 'Hartsfield Year 2 Garden Club', 0, NULL, NULL),
(182, 'Garden Club', 0, NULL, NULL),
(183, 'Garden Club', 0, 'Hartsfield Year 2', NULL),
(184, '2 Garden Club', 0, 'Hartsfield Year', NULL),
(185, 'Club', 0, 'Hartsfield Year 2 Ga', NULL),
(186, 'St Marys', 0, 'Year 6', NULL),
(187, 'Marys', 0, 'Year 6 St', NULL),
(188, 'Club St Marys', 0, 'Garden', NULL),
(189, 'Marys', 0, 'Year 5 St', NULL),
(190, 'Marys', 0, 'Year 3 St', NULL),
(191, 'Marys', 0, 'Year 4 St', NULL),
(192, 'Homewood', 0, 'Mr', 'J'),
(193, 'Bingham', 0, 'Samia', NULL),
(194, 'Calver', 0, 'Summer', NULL),
(195, 'Lucas', 0, 'Amy', NULL),
(196, 'Ramsey', 0, 'Isabel', NULL),
(197, 'Strickland', 0, 'Ebrielle', NULL),
(198, 'Thomas', 0, 'Daisy', NULL),
(199, 'McGinley', 0, 'Poppy', NULL),
(200, 'Hobon', 0, 'Annabel', NULL),
(201, 'Bramwell', 0, 'Emily', NULL),
(202, 'McAdam', 0, 'Kian', NULL),
(203, 'Birch', 0, 'Izzy', NULL),
(204, 'McNaught', 0, 'Charlie', NULL),
(205, 'Rook', 0, 'Adela', NULL),
(206, 'Davis', 0, 'Cerys', NULL),
(207, 'Bates', 0, 'Daniel', NULL),
(208, 'Racher', 0, 'Daisy', NULL),
(209, 'Lalli', 0, 'Umber', NULL),
(210, 'Jones', 0, 'Brooke', NULL),
(211, 'Nursery', 0, 'Weston', NULL),
(212, 'Weston Nursery', 0, NULL, NULL),
(213, 'Kendall', 0, NULL, NULL),
(214, 'Kendall', 0, NULL, 'Sandra'),
(215, 'Payne', 1, 'Mrs', 'S'),
(216, 'Ms', 1, 'Thomas', 'J'),
(217, 'McDonald', 1, 'Mrs', 'M'),
(218, 'West', 0, 'Mrs', 'M'),
(219, 'Thomas', 0, 'Ms', 'J'),
(220, 'Fairey', 0, 'Mrs', 'R'),
(221, 'Whiteman', 0, 'Mr', 'A P'),
(222, 'Smith', 1, 'Mrs', 'M'),
(223, 'Hurren', 1, 'Mr', NULL),
(224, 'Mills', 0, 'Mrs', 'J'),
(225, 'Mills', 0, 'Mr', 'L'),
(226, 'Wagstaff', 0, 'Miss', 'V'),
(228, 'Vallis', 0, 'Mrs', 'J'),
(229, 'Scott', 0, 'K', NULL),
(230, 'Jackson', 0, 'Mr', 'R'),
(232, 'Harris', 0, 'Mr', NULL),
(233, 'Clark', 0, 'Mrs', 'A'),
(234, 'Nicholls', 0, 'Mrs', 'M'),
(235, 'Furze', 0, 'Mr', 'M'),
(236, 'Paxton', 0, 'Mrs', 'C'),
(237, 'Metcalfe', 0, 'Mrs', 'A'),
(238, 'Metcalfe', 0, 'Mr', 'G'),
(239, 'Fielding', 0, 'Mrs', 'G'),
(240, 'Camp', 0, 'Mr', 'M'),
(241, 'KSI', 0, NULL, NULL),
(242, 'St Marys', 0, 'KSI', NULL),
(243, 'Hartsfield', 0, 'KSI', NULL),
(244, 'Mercia', 0, 'Miss', 'E'),
(245, 'Green Team', 0, 'KS2', NULL),
(246, 'Green Team', 0, 'KS2', 'Hartsfield'),
(247, 'Green Team', 0, 'Foundation', 'Hartsfield'),
(248, 'Green Team', 0, 'KSI', NULL),
(249, 'Prior', 0, 'Miss', 'S'),
(250, 'Green Team', 0, 'KSI', 'Hartsfield'),
(251, 'Baldock Brownies', 0, '3rd', NULL),
(252, 'Baldock Rainbows', 0, '1st', NULL),
(253, 'Johns School', 0, 'St', NULL),
(254, 'Brandles School', 0, NULL, NULL),
(255, '(WWNS)', 0, NULL, 'Charlie'),
(256, '(WWNS)', 0, 'Umber', NULL),
(257, '(WWNS)', 0, 'Eddie', NULL),
(258, '(WWNS)', 0, 'Navary', NULL),
(259, '(WWNS)', 0, NULL, 'Daisy'),
(260, '(WWNS)', 0, NULL, 'Arabella'),
(261, '(WWNS)', 0, 'Harry', NULL),
(262, '(WWNS)', 0, NULL, 'Oliver B'),
(263, '(WWNS)', 0, NULL, 'Ellah'),
(264, '(WWNS)', 0, NULL, 'Beu'),
(265, '(WWNS)', 0, NULL, 'Jesleen'),
(266, '(WWNS)', 0, 'Marrin', NULL),
(267, 'St Johns', 0, 'Year 2', NULL),
(268, 'St Johns', 0, 'Year 1', NULL),
(269, '(HF)', 0, NULL, 'Akshith'),
(270, '(HF)', 0, NULL, 'Mathew'),
(271, '(HF)', 0, NULL, 'Grace'),
(272, '(HF)', 0, NULL, 'Thomas F'),
(273, '(HF)', 0, NULL, 'Spencer'),
(274, '(HF)', 0, NULL, 'Leila'),
(275, '(HF)', 0, NULL, 'Daisy'),
(276, '(HF)', 0, NULL, 'Christopher'),
(277, '(HF)', 0, NULL, 'Leah'),
(278, '(HF)', 0, NULL, 'Amelia'),
(279, '(HF)', 0, NULL, 'Ella'),
(280, '(HF)', 0, NULL, 'Henry'),
(281, '(HF)', 0, NULL, 'Samira'),
(282, '(HF)', 0, NULL, 'Jack'),
(283, '(HF)', 0, NULL, 'Charlotte'),
(284, '(HF)', 0, NULL, 'Ellen'),
(285, '(HF)', 0, NULL, 'Eva'),
(286, '(HF)', 0, NULL, 'Freddie'),
(287, '(HF)', 0, NULL, 'Anna'),
(288, '(HF)', 0, NULL, 'Frankie'),
(289, '(HF)', 0, NULL, 'Lucia'),
(290, '(HF)', 0, NULL, 'Lillian'),
(291, '(HF)', 0, NULL, 'Samuel'),
(292, '(HF)', 0, NULL, 'Mina'),
(293, '(HF)', 0, NULL, 'Isaac'),
(294, '(HF)', 0, NULL, 'Rose'),
(295, '(HF)', 0, NULL, 'Ethan'),
(296, '(HF)', 0, NULL, 'Rory'),
(297, '(HF)', 0, NULL, 'Harry'),
(298, '(HF)', 0, NULL, 'Katharine'),
(299, '(HF)', 0, NULL, 'Charlotte KS2'),
(300, '(HF)', 0, NULL, 'Maisy'),
(301, '(HF)', 0, NULL, 'Laura'),
(302, '(HF)', 0, NULL, 'Rosalind'),
(303, '(HF)', 0, NULL, 'Olivia'),
(304, '(HF)', 0, NULL, 'Callum'),
(305, '(HF)', 0, NULL, 'Freya'),
(306, '(HF)', 0, NULL, 'Oliver'),
(307, '(HF)', 0, NULL, 'Amelia EY'),
(308, '(HF)', 0, NULL, 'Thomas'),
(309, '(St.J)', 0, NULL, 'Runi'),
(310, '(St.J)', 0, NULL, 'Dal'),
(311, '(St.J)', 0, NULL, 'Calum'),
(312, '(3rd BB)', 0, NULL, 'Maisie Carly'),
(313, '(3rd BB)', 0, NULL, 'Summer'),
(314, '(1st BR)', 0, NULL, 'Lily F'),
(315, '(1st BR)', 0, NULL, 'Samira');


