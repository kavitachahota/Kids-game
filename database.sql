-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2023 at 05:19 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidsgames`
--

-- --------------------------------------------------------

--
-- Table structure for table `authenticator`
--

DROP TABLE IF EXISTS `authenticator`;
CREATE TABLE IF NOT EXISTS `authenticator` (
  `passCode` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `registrationOrder` int NOT NULL,
  KEY `registrationOrder` (`registrationOrder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authenticator`
--

INSERT INTO `authenticator` (`passCode`, `registrationOrder`) VALUES
('$2y$10$fxMTc4KD4mZlj03wc4grTuVLssP0ZKxeqfcfvxVx2xnrrKF.CKsk.', 1),
('$2y$10$AH/612QosAUyKIy5s4lEBuGdNAhnw.PbHYfIuLNK2aHQXWRMIF6fi', 2),
('$2y$10$rSNEZ5wd8YyRRlNCmwfb2uUvkffrAMdmLkcm5s.b7WAgiGy8UoA1i', 3),
('123456', 4),
('1234', 5),
('1234', 6),
('1234', 7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `history`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
`fName` varchar(50)
,`id` varchar(200)
,`livesUsed` int
,`lName` varchar(50)
,`result` enum('success','failure','incomplete')
,`scoreTime` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `fName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `userName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `registrationTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` varchar(200) COLLATE utf8mb4_general_ci GENERATED ALWAYS AS (concat(upper(left(`fName`,2)),upper(left(`lName`,2)),upper(left(`userName`,3)),cast(`registrationTime` as signed))) VIRTUAL,
  `registrationOrder` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`registrationOrder`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`fName`, `lName`, `userName`, `registrationTime`, `registrationOrder`) VALUES
('Patrick', 'Saint-Louis', 'sonic12345', '2023-03-10 09:41:26', 1),
('Marie', 'Jourdain', 'asterix2023', '2023-03-10 09:41:26', 2),
('Jonathan', 'David', 'pokemon527', '2023-03-10 09:41:26', 3),
('John', 'Doe', 'johndoe', '2023-03-22 20:00:53', 4),
('john', 'doe', 'johndoe1', '2023-03-22 20:19:22', 5),
('mark', 'henry', 'markhenry', '2023-03-24 09:40:01', 6),
('mark', 'henry', 'mark', '2023-03-31 09:57:01', 7);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `scoreTime` datetime NOT NULL,
  `result` enum('success','failure','incomplete') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `livesUsed` int NOT NULL,
  `registrationOrder` int DEFAULT NULL,
  KEY `registrationOrder` (`registrationOrder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`scoreTime`, `result`, `livesUsed`, `registrationOrder`) VALUES
('2023-03-10 09:41:26', 'success', 4, 1),
('2023-03-10 09:41:26', 'failure', 6, 2),
('2023-03-10 09:41:26', 'incomplete', 5, 3);

-- --------------------------------------------------------

--
-- Structure for view `history`
--
DROP TABLE IF EXISTS `history`;

DROP VIEW IF EXISTS `history`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `history`  AS SELECT `s`.`scoreTime` AS `scoreTime`, `p`.`id` AS `id`, `p`.`fName` AS `fName`, `p`.`lName` AS `lName`, `s`.`result` AS `result`, `s`.`livesUsed` AS `livesUsed` FROM (`player` `p` join `score` `s`) WHERE (`p`.`registrationOrder` = `s`.`registrationOrder`)  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
