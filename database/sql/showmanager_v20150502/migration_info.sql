-- --------------------------------------------------------

--
-- Table structure for table `migration_info`
--

CREATE TABLE IF NOT EXISTS `migration_info` (
  `version` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration_info`
--

INSERT INTO `migration_info` (`version`) VALUES
('005');


