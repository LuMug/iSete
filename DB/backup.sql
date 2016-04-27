-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2016 at 09:47 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET time_zone = "+00:00";


-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8 */;
--
-- Database: `isete`
--

-- --------------------------------------------------------

--
-- Table structure for table `capsula`
--
drop database if exists isete;
create database isete;
use isete;
CREATE TABLE IF NOT EXISTS `capsula` (
  `ca_tipo` varchar(30) NOT NULL,
  `ca_prezzoAcquisto` float DEFAULT NULL,
  `ca_prezzoVendita` float DEFAULT NULL,
  `ca_quantitaRimanente` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capsula`
--

INSERT INTO `capsula` (`ca_tipo`, `ca_prezzoAcquisto`, `ca_prezzoVendita`, `ca_quantitaRimanente`) VALUES
('Green', 83.3, 13.4, 17),
('White', 87.3, 1.8, 88),
('Purple', 14.2, 8.5, 43),
('Fucsia', 76.2, 73, 3),
('Red', 15.8, 86.9, 83),
('Indigo', 68.1, 62.3, 95),
('Maroon', 8.1, 57, 35),
('Blue', 59.6, 53.2, 71),
('Black', 89.1, 12.5, 2),
('Yellow', 66, 88.3, 80);

-- --------------------------------------------------------

--
-- Table structure for table `caricacredito`
--

CREATE TABLE IF NOT EXISTS `caricacredito` (
  `ut_idResp` int(11) NOT NULL DEFAULT '0',
  `ut_idNorm` int(11) NOT NULL DEFAULT '0',
  `cre_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cre_importo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caricacredito`
--

INSERT INTO `caricacredito` (`ut_idResp`, `ut_idNorm`, `cre_data`, `cre_importo`) VALUES
(1, 1, '2016-03-10 09:24:17', 62),
(1, 2, '2016-03-10 09:24:17', 43),
(1, 3, '2016-03-10 09:24:17', 58),
(1, 4, '2016-03-10 09:24:17', 71),
(1, 5, '2016-03-10 09:24:17', 44),
(1, 6, '2016-03-10 09:24:17', 33),
(1, 7, '2016-03-10 09:24:17', 87),
(1, 8, '2016-03-10 09:24:17', 61),
(1, 9, '2016-03-10 09:24:17', 55),
(1, 10, '2016-03-10 09:24:17', 91),
(1, 11, '2016-03-10 09:24:17', 34),
(1, 12, '2016-03-10 09:24:17', 10),
(1, 13, '2016-03-10 09:24:17', 8),
(1, 14, '2016-03-10 09:24:17', 45),
(1, 15, '2016-03-10 09:24:17', 67),
(1, 16, '2016-03-10 09:24:17', 40),
(1, 17, '2016-03-10 09:24:17', 65),
(1, 18, '2016-03-10 09:24:17', 8),
(1, 19, '2016-03-10 09:24:17', 79),
(1, 20, '2016-03-10 09:24:17', 40),
(1, 21, '2016-03-10 09:24:17', 63),
(1, 22, '2016-03-10 09:24:17', 22),
(1, 23, '2016-03-10 09:24:17', 9),
(1, 24, '2016-03-10 09:24:17', 35),
(1, 25, '2016-03-10 09:24:17', 22),
(1, 26, '2016-03-10 09:24:17', 3),
(1, 27, '2016-03-10 09:24:17', 26),
(1, 28, '2016-03-10 09:24:17', 20),
(1, 29, '2016-03-10 09:24:17', 13),
(1, 30, '2016-03-10 09:24:17', 29),
(1, 31, '2016-03-10 09:24:17', 63),
(1, 32, '2016-03-10 09:24:17', 26),
(1, 33, '2016-03-10 09:24:17', 25),
(1, 34, '2016-03-10 09:24:17', 9),
(1, 35, '2016-03-10 09:24:17', 16),
(1, 36, '2016-03-10 09:24:17', 30),
(1, 37, '2016-03-10 09:24:17', 53),
(1, 38, '2016-03-10 09:24:17', 72),
(1, 39, '2016-03-10 09:24:17', 55),
(1, 40, '2016-03-10 09:24:17', 17),
(1, 41, '2016-03-10 09:24:17', 55),
(1, 42, '2016-03-10 09:24:17', 70),
(1, 43, '2016-03-10 09:24:17', 76),
(1, 44, '2016-03-10 09:24:17', 80),
(1, 45, '2016-03-10 09:24:17', 9),
(1, 46, '2016-03-10 09:24:17', 43),
(1, 47, '2016-03-10 09:24:17', 15),
(1, 48, '2016-03-10 09:24:17', 68),
(1, 49, '2016-03-10 09:24:17', 29),
(1, 50, '2016-03-10 09:24:17', 31),
(1, 51, '2016-03-10 09:24:17', 93),
(1, 52, '2016-03-10 09:24:17', 82),
(1, 53, '2016-03-10 09:24:17', 59),
(1, 54, '2016-03-10 09:24:17', 81),
(1, 55, '2016-03-10 09:24:17', 30),
(1, 56, '2016-03-10 09:24:17', 81),
(1, 57, '2016-03-10 09:24:17', 50),
(1, 58, '2016-03-10 09:24:17', 77),
(1, 59, '2016-03-10 09:24:17', 95),
(1, 60, '2016-03-10 09:24:17', 62),
(1, 61, '2016-03-10 09:24:17', 77),
(1, 62, '2016-03-10 09:24:17', 84),
(1, 63, '2016-03-10 09:24:17', 27),
(1, 64, '2016-03-10 09:24:17', 1),
(1, 65, '2016-03-10 09:24:17', 23),
(1, 66, '2016-03-10 09:24:17', 55),
(1, 67, '2016-03-10 09:24:17', 62),
(1, 68, '2016-03-10 09:24:17', 14),
(1, 69, '2016-03-10 09:24:17', 38),
(1, 70, '2016-03-10 09:24:17', 22),
(1, 71, '2016-03-10 09:24:17', 7),
(1, 72, '2016-03-10 09:24:17', 59),
(1, 73, '2016-03-10 09:24:17', 17),
(1, 74, '2016-03-10 09:24:17', 6),
(1, 75, '2016-03-10 09:24:17', 36),
(1, 76, '2016-03-10 09:24:17', 13),
(1, 77, '2016-03-10 09:24:17', 67),
(1, 78, '2016-03-10 09:24:17', 89),
(1, 79, '2016-03-10 09:24:17', 70),
(1, 80, '2016-03-10 09:24:17', 90),
(1, 81, '2016-03-10 09:24:17', 57),
(1, 82, '2016-03-10 09:24:17', 93),
(1, 83, '2016-03-10 09:24:17', 85),
(1, 84, '2016-03-10 09:24:17', 62),
(1, 85, '2016-03-10 09:24:17', 97),
(1, 86, '2016-03-10 09:24:17', 28),
(1, 87, '2016-03-10 09:24:17', 38),
(1, 88, '2016-03-10 09:24:17', 58),
(1, 89, '2016-03-10 09:24:17', 46),
(1, 90, '2016-03-10 09:24:17', 92),
(1, 91, '2016-03-10 09:24:17', 81),
(1, 92, '2016-03-10 09:24:17', 14),
(1, 93, '2016-03-10 09:24:17', 44),
(1, 94, '2016-03-10 09:24:17', 18),
(1, 95, '2016-03-10 09:24:17', 25),
(1, 96, '2016-03-10 09:24:17', 3),
(1, 97, '2016-03-10 09:24:17', 19),
(1, 98, '2016-03-10 09:24:17', 6),
(1, 99, '2016-03-10 09:24:17', 59),
(1, 100, '2016-03-10 09:24:17', 2),
(1, 101, '2016-03-10 09:24:17', 56),
(1, 102, '2016-03-10 09:24:17', 71),
(1, 103, '2016-03-10 09:24:17', 100),
(1, 104, '2016-03-10 09:24:17', 71),
(1, 105, '2016-03-10 09:24:17', 72),
(1, 106, '2016-03-10 09:24:17', 62),
(1, 107, '2016-03-10 09:24:17', 95),
(1, 108, '2016-03-10 09:24:17', 32),
(1, 109, '2016-03-10 09:24:17', 23),
(1, 110, '2016-03-10 09:24:17', 92),
(1, 111, '2016-03-10 09:24:17', 45),
(1, 112, '2016-03-10 09:24:17', 59),
(1, 113, '2016-03-10 09:24:17', 85),
(1, 114, '2016-03-10 09:24:17', 81),
(1, 115, '2016-03-10 09:24:17', 52),
(1, 116, '2016-03-10 09:24:17', 8),
(1, 117, '2016-03-10 09:24:17', 36),
(1, 118, '2016-03-10 09:24:17', 66),
(1, 119, '2016-03-10 09:24:17', 20),
(1, 120, '2016-03-10 09:24:17', 7),
(1, 121, '2016-03-10 09:24:17', 89),
(1, 122, '2016-03-10 09:24:17', 22),
(1, 123, '2016-03-10 09:24:17', 52),
(1, 124, '2016-03-10 09:24:17', 71),
(1, 125, '2016-03-10 09:24:17', 67),
(1, 126, '2016-03-10 09:24:17', 47),
(1, 127, '2016-03-10 09:24:17', 62),
(1, 128, '2016-03-10 09:24:17', 58),
(1, 129, '2016-03-10 09:24:17', 75),
(1, 130, '2016-03-10 09:24:17', 28),
(1, 131, '2016-03-10 09:24:17', 68),
(1, 132, '2016-03-10 09:24:17', 93),
(1, 133, '2016-03-10 09:24:17', 14),
(1, 134, '2016-03-10 09:24:17', 57),
(1, 135, '2016-03-10 09:24:17', 62),
(1, 136, '2016-03-10 09:24:17', 6),
(1, 137, '2016-03-10 09:24:17', 89),
(1, 138, '2016-03-10 09:24:17', 87),
(1, 139, '2016-03-10 09:24:17', 45),
(1, 140, '2016-03-10 09:24:17', 26),
(1, 141, '2016-03-10 09:24:17', 26),
(1, 142, '2016-03-10 09:24:17', 69),
(1, 143, '2016-03-10 09:24:17', 47),
(1, 144, '2016-03-10 09:24:17', 46),
(1, 145, '2016-03-10 09:24:17', 64),
(1, 146, '2016-03-10 09:24:17', 95),
(1, 147, '2016-03-10 09:24:17', 92),
(1, 148, '2016-03-10 09:24:17', 74),
(1, 149, '2016-03-10 09:24:17', 56),
(1, 150, '2016-03-10 09:24:17', 89),
(1, 151, '2016-03-10 09:24:17', 48),
(1, 152, '2016-03-10 09:24:17', 75),
(1, 153, '2016-03-10 09:24:17', 70),
(1, 154, '2016-03-10 09:24:17', 41),
(1, 155, '2016-03-10 09:24:17', 5),
(1, 156, '2016-03-10 09:24:17', 63),
(1, 157, '2016-03-10 09:24:17', 26),
(1, 158, '2016-03-10 09:24:17', 21),
(1, 159, '2016-03-10 09:24:18', 99),
(1, 160, '2016-03-10 09:24:18', 84),
(1, 161, '2016-03-10 09:24:18', 26),
(1, 162, '2016-03-10 09:24:18', 97),
(1, 163, '2016-03-10 09:24:18', 22),
(1, 164, '2016-03-10 09:24:18', 72),
(1, 165, '2016-03-10 09:24:18', 15),
(1, 166, '2016-03-10 09:24:18', 87),
(1, 167, '2016-03-10 09:24:18', 10),
(1, 168, '2016-03-10 09:24:18', 23),
(1, 169, '2016-03-10 09:24:18', 45),
(1, 170, '2016-03-10 09:24:18', 98),
(1, 171, '2016-03-10 09:24:18', 47),
(1, 172, '2016-03-10 09:24:18', 91),
(1, 173, '2016-03-10 09:24:18', 75),
(1, 174, '2016-03-10 09:24:18', 71),
(1, 175, '2016-03-10 09:24:18', 97),
(1, 176, '2016-03-10 09:24:18', 79),
(1, 177, '2016-03-10 09:24:18', 92),
(1, 178, '2016-03-10 09:24:18', 63),
(1, 179, '2016-03-10 09:24:18', 66),
(1, 180, '2016-03-10 09:24:18', 76),
(1, 181, '2016-03-10 09:24:18', 97),
(1, 182, '2016-03-10 09:24:18', 21),
(1, 183, '2016-03-10 09:24:18', 68),
(1, 184, '2016-03-10 09:24:18', 11),
(1, 185, '2016-03-10 09:24:18', 63),
(1, 186, '2016-03-10 09:24:18', 93),
(1, 187, '2016-03-10 09:24:18', 97),
(1, 188, '2016-03-10 09:24:18', 44),
(1, 189, '2016-03-10 09:24:18', 47),
(1, 190, '2016-03-10 09:24:18', 27),
(1, 191, '2016-03-10 09:24:18', 5),
(1, 192, '2016-03-10 09:24:18', 23),
(1, 193, '2016-03-10 09:24:18', 59),
(1, 194, '2016-03-10 09:24:18', 60),
(1, 195, '2016-03-10 09:24:18', 59),
(1, 196, '2016-03-10 09:24:18', 52),
(1, 197, '2016-03-10 09:24:18', 63),
(1, 198, '2016-03-10 09:24:18', 6),
(1, 199, '2016-03-10 09:24:18', 63),
(1, 200, '2016-03-10 09:24:18', 96),
(1, 201, '2016-03-10 09:24:18', 96),
(1, 202, '2016-03-10 09:24:18', 43),
(1, 203, '2016-03-10 09:24:18', 50),
(1, 204, '2016-03-10 09:24:18', 87),
(1, 205, '2016-03-10 09:24:18', 31),
(1, 206, '2016-03-10 09:24:18', 58),
(1, 207, '2016-03-10 09:24:18', 8),
(1, 208, '2016-03-10 09:24:18', 94),
(1, 209, '2016-03-10 09:24:18', 26),
(1, 210, '2016-03-10 09:24:18', 45),
(1, 211, '2016-03-10 09:24:18', 58),
(1, 212, '2016-03-10 09:24:18', 39),
(1, 213, '2016-03-10 09:24:18', 87),
(1, 214, '2016-03-10 09:24:18', 61),
(1, 215, '2016-03-10 09:24:18', 18),
(1, 216, '2016-03-10 09:24:18', 51),
(1, 217, '2016-03-10 09:24:18', 79),
(1, 218, '2016-03-10 09:24:18', 19),
(1, 219, '2016-03-10 09:24:18', 58),
(1, 220, '2016-03-10 09:24:18', 34),
(1, 221, '2016-03-10 09:24:18', 35),
(1, 222, '2016-03-10 09:24:18', 73),
(1, 223, '2016-03-10 09:24:18', 43),
(1, 224, '2016-03-10 09:24:18', 42),
(1, 225, '2016-03-10 09:24:18', 81),
(1, 226, '2016-03-10 09:24:18', 67),
(1, 227, '2016-03-10 09:24:18', 96),
(1, 228, '2016-03-10 09:24:18', 32),
(1, 229, '2016-03-10 09:24:18', 12),
(1, 230, '2016-03-10 09:24:18', 79),
(1, 231, '2016-03-10 09:24:18', 96),
(1, 232, '2016-03-10 09:24:18', 41),
(1, 233, '2016-03-10 09:24:18', 14),
(1, 234, '2016-03-10 09:24:18', 91),
(1, 235, '2016-03-10 09:24:18', 25),
(1, 236, '2016-03-10 09:24:18', 40),
(1, 237, '2016-03-10 09:24:18', 1),
(1, 238, '2016-03-10 09:24:18', 28),
(1, 239, '2016-03-10 09:24:18', 69),
(1, 240, '2016-03-10 09:24:18', 75),
(1, 241, '2016-03-10 09:24:18', 96),
(1, 242, '2016-03-10 09:24:18', 67),
(1, 243, '2016-03-10 09:24:18', 17),
(1, 244, '2016-03-10 09:24:18', 98),
(1, 245, '2016-03-10 09:24:18', 84),
(1, 246, '2016-03-10 09:24:18', 39),
(1, 247, '2016-03-10 09:24:18', 84),
(1, 248, '2016-03-10 09:24:18', 37),
(1, 249, '2016-03-10 09:24:18', 83),
(1, 250, '2016-03-10 09:24:18', 62);

-- --------------------------------------------------------

--
-- Table structure for table `configurazione`
--

CREATE TABLE IF NOT EXISTS `configurazione` (
  `co_nome` varchar(30) NOT NULL,
  `co_valore` varchar(30) DEFAULT NULL,
  `co_descrizione` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configurazione`
--

INSERT INTO `configurazione` (`co_nome`, `co_valore`, `co_descrizione`) VALUES
('minimo capsule', '5', 'Quantita minima della capsule');

-- --------------------------------------------------------

--
-- Table structure for table `prende`
--

CREATE TABLE IF NOT EXISTS `prende` (
  `ut_id` int(11) NOT NULL DEFAULT '0',
  `ca_tipo` varchar(30) NOT NULL DEFAULT '',
  `pre_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pre_quantita` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prende`
--

INSERT INTO `prende` (`ut_id`, `ca_tipo`, `pre_data`, `pre_quantita`) VALUES
(1, 'Green', '2016-03-10 09:23:35', 17),
(2, 'Green', '2016-03-10 09:23:35', 16),
(3, 'Green', '2016-03-10 09:23:35', 16),
(4, 'Green', '2016-03-10 09:23:35', 17),
(1, 'Red', '2016-03-10 09:23:35', 16),
(2, 'Red', '2016-03-10 09:23:35', 16),
(3, 'Red', '2016-03-10 09:23:35', 16),
(4, 'Red', '2016-03-10 09:23:35', 16),
(1, 'Green', '2016-03-10 09:23:36', 17),
(2, 'Green', '2016-03-10 09:23:36', 16),
(3, 'Green', '2016-03-10 09:23:36', 16),
(4, 'Green', '2016-03-10 09:23:36', 17),
(1, 'Red', '2016-03-10 09:23:36', 16),
(2, 'Red', '2016-03-10 09:23:36', 16),
(3, 'Red', '2016-03-10 09:23:36', 16),
(4, 'Red', '2016-03-10 09:23:36', 16);

-- --------------------------------------------------------

--
-- Table structure for table `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
`ut_id` int(11) NOT NULL,
  `ut_nome` varchar(30) DEFAULT NULL,
  `ut_cognome` varchar(30) DEFAULT NULL,
  `ut_password` char(32) DEFAULT NULL,
  `ut_email` varchar(50) DEFAULT NULL,
  `ut_credito` float DEFAULT NULL,
  `ut_gruppo` enum('Responsabile', 'Utente', 'Admin') DEFAULT 'Utente'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=251 ;

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`ut_id`, `ut_nome`, `ut_cognome`, `ut_password`, `ut_email`, `ut_credito`, `ut_gruppo`) VALUES
(1, 'Karen', 'Johnston', 'a87c2c813a64a69074effa1db3de2559', 'karen.johnston@samtrevano.ch', 64, 'Responsabile');
INSERT INTO `utente` (`ut_id`, `ut_nome`, `ut_cognome`, `ut_password`, `ut_email`, `ut_credito`) VALUES
(2, 'Louise', 'Castillo', 'b88d6b04a9dc38860301f6bdd81e5ccd', 'louise.castillo@samtrevano.ch', 86),
(3, 'Lori', 'Moreno', 'f7a88d7c3168218b580aa68ab3030491', 'lori.moreno@samtrevano.ch', 52),
(4, 'Juan', 'Sullivan', 'd3dc39b29f873ec94631cdbe4e92dbf7', 'juan.sullivan@samtrevano.ch', 34),
(5, 'Terry', 'Carr', '4ae57130f9a401c10ce0f017c628262d', 'terry.carr@samtrevano.ch', 95),
(6, 'Wanda', 'Crawford', 'de9df19c7a217fe5d4c7d20d1ed0d4d5', 'wanda.crawford@samtrevano.ch', 24),
(7, 'Philip', 'Graham', '518449b4e86d497dcdf915f0d043e3b1', 'philip.graham@samtrevano.ch', 43),
(8, 'Judith', 'Ferguson', '358ce2a996d7fc89579b66773381bcf6', 'judith.ferguson@samtrevano.ch', 65),
(9, 'Irene', 'Reid', '99ec1183eaff0b0d60c48eaea91d8d3f', 'irene.reid@samtrevano.ch', 84),
(10, 'Lillian', 'Banks', '37f0c27ba74b212edd95aab5413c2c7a', 'lillian.banks@samtrevano.ch', 34),
(11, 'Paula', 'Watson', '53c0850ad553e1619d4f3c42dd29bebe', 'paula.watson@samtrevano.ch', 73),
(12, 'Laura', 'King', '726d39ae88b59c310ce3ce53f596dc16', 'laura.king@samtrevano.ch', 80),
(13, 'Gregory', 'Black', 'd7460e489cff260d26f7b22b653eacae', 'gregory.black@samtrevano.ch', 45),
(14, 'Julie', 'Fuller', 'e3144fe999f67c5c85e22e2efb0f629d', 'julie.fuller@samtrevano.ch', 69),
(15, 'Peter', 'Wilson', '758c16ffad00b94c275d8a2f2bd4abb9', 'peter.wilson@samtrevano.ch', 68),
(16, 'Kelly', 'Bryant', '05a13dc8668a4ada7f0775d9cf21b80a', 'kelly.bryant@samtrevano.ch', 12),
(17, 'Lois', 'Russell', '72deb897a8f2877f5a582e08b4d1fbb6', 'lois.russell@samtrevano.ch', 35),
(18, 'Frank', 'Romero', '9547270a7d9449a1337f4e90b9385d60', 'frank.romero@samtrevano.ch', 8),
(19, 'Christine', 'Powell', '37e6ae0174941c3d0ff6ac095d157ce0', 'christine.powell@samtrevano.ch', 40),
(20, 'Henry', 'Morrison', 'fbcecc961d66d9f1c96a1097547fd53a', 'henry.morrison@samtrevano.ch', 17),
(21, 'Fred', 'Nguyen', 'c3a932087320ca6ad998260e5b083f04', 'fred.nguyen@samtrevano.ch', 30),
(22, 'Peter', 'Tucker', '2f5cf9c4e5727da66ff31247bf231be0', 'peter.tucker@samtrevano.ch', 15),
(23, 'John', 'Stewart', 'd1d77c270d38c882327f017c74c5effd', 'john.stewart@samtrevano.ch', 31),
(24, 'Laura', 'Pierce', '4b28c064c00a1c85fd877fdbb67ee2f7', 'laura.pierce@samtrevano.ch', 14),
(25, 'Helen', 'Gomez', '88c662376f1f11cf6a2b722c0e81f83c', 'helen.gomez@samtrevano.ch', 20),
(26, 'Bonnie', 'Boyd', '622d02be46516d29f957c067604564c2', 'bonnie.boyd@samtrevano.ch', 43),
(27, 'Frank', 'Peters', '0501d8c44cb7c9d10a05d7b07ca3831f', 'frank.peters@samtrevano.ch', 11),
(28, 'Angela', 'Ortiz', '9c0963136e86892f349d158f7448c669', 'angela.ortiz@samtrevano.ch', 75),
(29, 'Julie', 'Green', '6f80ec14f10789464d8e2580c80e6b19', 'julie.green@samtrevano.ch', 22),
(30, 'Johnny', 'Chavez', 'a4496060a106f669d05c22e395616f05', 'johnny.chavez@samtrevano.ch', 20),
(31, 'Lois', 'Cook', 'ffabd3dff663a183b544c6e649c099c7', 'lois.cook@samtrevano.ch', 14),
(32, 'Clarence', 'Knight', '4c0778c7f27311e7ad9b249ae06e4670', 'clarence.knight@samtrevano.ch', 17),
(33, 'Beverly', 'Holmes', 'a0a657412aa9afcc1408727d7f9d2bf1', 'beverly.holmes@samtrevano.ch', 38),
(34, 'Gerald', 'Edwards', '9051227ed9d3025ecd9ff04665077957', 'gerald.edwards@samtrevano.ch', 34),
(35, 'Henry', 'Collins', '356152d42ac3e24c604f08a727ad70e7', 'henry.collins@samtrevano.ch', 86),
(36, 'Wanda', 'Mccoy', '45c2a3f304dbcd0b44e3347340afd79e', 'wanda.mccoy@samtrevano.ch', 2),
(37, 'Joan', 'Carter', '36b41e3d9bf1519fbbd12162fa9c9250', 'joan.carter@samtrevano.ch', 87),
(38, 'Jessica', 'Wright', 'b170e8d0b8f4f7e0ac418e33ae0aed92', 'jessica.wright@samtrevano.ch', 57),
(39, 'Robin', 'Kelly', 'b91ba7ae218280359096f0159961e6c0', 'robin.kelly@samtrevano.ch', 85),
(40, 'Juan', 'Dunn', 'b87ba715ccbae7398ab4a456f93cff86', 'juan.dunn@samtrevano.ch', 8),
(41, 'Marilyn', 'Vasquez', 'cd1a767c147ae711d09747fc35e73d3c', 'marilyn.vasquez@samtrevano.ch', 69),
(42, 'Joshua', 'Andrews', '13e50da256f257692cf9877de972e651', 'joshua.andrews@samtrevano.ch', 41),
(43, 'Jennifer', 'Ward', '69e39581a405ee6556d5b192e52d02dc', 'jennifer.ward@samtrevano.ch', 73),
(44, 'Jean', 'Barnes', '2d0086baa7d3835b856595e69d4ed44b', 'jean.barnes@samtrevano.ch', 79),
(45, 'Sandra', 'Cooper', '3060455f966f3215a279a2fcbb9948e7', 'sandra.cooper@samtrevano.ch', 23),
(46, 'Ryan', 'Porter', 'a2fed87ce09c08d701510a07dac32600', 'ryan.porter@samtrevano.ch', 59),
(47, 'Louis', 'Kim', 'c919d1463cf77cfd6830ddeaa054f699', 'louis.kim@samtrevano.ch', 85),
(48, 'Jason', 'Mendoza', '21b9556d6724fc516bd6f242634fc00a', 'jason.mendoza@samtrevano.ch', 27),
(49, 'Phillip', 'Adams', '4cb6719109b2c45ab0c14f5e1eb59728', 'phillip.adams@samtrevano.ch', 37),
(50, 'Mary', 'Sanchez', 'd86c2bbf8a62460b6266584e37e222b4', 'mary.sanchez@samtrevano.ch', 92),
(51, 'Stephen', 'Gibson', '5eb4826d8dcd5a1628e5ccb3859ad98a', 'stephen.gibson@samtrevano.ch', 48),
(52, 'Henry', 'Pierce', 'aa34404dfbcd23f78b105510e7cf3cad', 'henry.pierce@samtrevano.ch', 41),
(53, 'Judy', 'Boyd', '4b8d74e88ec3d0e2cb4b078ffdd65603', 'judy.boyd@samtrevano.ch', 86),
(54, 'Edward', 'Dunn', '97975ef6234248808f96eefe560191f4', 'edward.dunn@samtrevano.ch', 87),
(55, 'Roger', 'Turner', '2dc216c0c46de2735f5af4d6b1efe5d0', 'roger.turner@samtrevano.ch', 35),
(56, 'Margaret', 'Shaw', '57e396417af24efeadc53dd722af7240', 'margaret.shaw@samtrevano.ch', 71),
(57, 'Todd', 'Watkins', '33a3a5ae0c3a150906f1c85029d74472', 'todd.watkins@samtrevano.ch', 22),
(58, 'Jason', 'Scott', '51e590a772dca9abfa7101ed2127b22f', 'jason.scott@samtrevano.ch', 94),
(59, 'Teresa', 'Sims', 'b67aef80fdb5c2c64636f9d830092ae1', 'teresa.sims@samtrevano.ch', 87),
(60, 'Paul', 'Perry', '409dc87fedb06f1ffc544de8969333f5', 'paul.perry@samtrevano.ch', 40),
(61, 'Gary', 'Kennedy', '537b960085832b13f57f1556cdb77910', 'gary.kennedy@samtrevano.ch', 26),
(62, 'Tammy', 'Stephens', '93a6ed8b4f4cb909f11846239b347a0e', 'tammy.stephens@samtrevano.ch', 30),
(63, 'Julie', 'Payne', 'e9bd1b9f0ca463215240314094fd7a3a', 'julie.payne@samtrevano.ch', 53),
(64, 'James', 'Alexander', '5e0e360c644b9df9bf0797b733f85cb5', 'james.alexander@samtrevano.ch', 27),
(65, 'Terry', 'Burns', 'f64a1fcf8c3326d0a4d309549ac89022', 'terry.burns@samtrevano.ch', 11),
(66, 'Michael', 'Hall', 'addf7b6521e709078eec5a952af44f26', 'michael.hall@samtrevano.ch', 49),
(67, 'Denise', 'Reid', 'd9b452bcbb7e20273392b5390399850d', 'denise.reid@samtrevano.ch', 70),
(68, 'Steve', 'Lawrence', '8703dd28e7e7647626718ea6cff07615', 'steve.lawrence@samtrevano.ch', 14),
(69, 'Ruby', 'Robinson', '897f22108a5ea8cb849702a57702c769', 'ruby.robinson@samtrevano.ch', 76),
(70, 'Russell', 'Fowler', 'cece2aecbb28e7fb34c2948d617e1431', 'russell.fowler@samtrevano.ch', 32),
(71, 'Michael', 'Bradley', '52dcd078faa2146dfa49c0f396962984', 'michael.bradley@samtrevano.ch', 74),
(72, 'Stephen', 'Riley', 'aa38d459c4933920e72e4d25b3c93c5f', 'stephen.riley@samtrevano.ch', 44),
(73, 'Elizabeth', 'Harrison', '77631a23469b929759b2ae4925b8d56e', 'elizabeth.harrison@samtrevano.ch', 65),
(74, 'Janice', 'Marshall', 'cd74e7fae547a0ba0a20af97b2f90773', 'janice.marshall@samtrevano.ch', 34),
(75, 'Andrea', 'Crawford', '8f4dffb47a35a6f0a828adc00b0b4e14', 'andrea.crawford@samtrevano.ch', 90),
(76, 'Carlos', 'Murphy', '07b69797627a49c93ead304c4d3debc1', 'carlos.murphy@samtrevano.ch', 40),
(77, 'Jeremy', 'Watson', 'caa91bb80112ecab38b3e24408245fad', 'jeremy.watson@samtrevano.ch', 46),
(78, 'Bonnie', 'Gonzalez', '795d43ffd3a4aa78586e0f60d07560bf', 'bonnie.gonzalez@samtrevano.ch', 21),
(79, 'Catherine', 'Black', 'ae20e8d986dbeae0d96f4b8ee053b12e', 'catherine.black@samtrevano.ch', 16),
(80, 'Doris', 'Nguyen', 'cb5a75f0b6b3ee953f1a080c21bd32a2', 'doris.nguyen@samtrevano.ch', 49),
(81, 'Fred', 'Campbell', 'fbf9f7b6c217d63458161d7bc80c07fa', 'fred.campbell@samtrevano.ch', 21),
(82, 'Arthur', 'Mendoza', 'c4496c667f847038b6a8ecae81202cb9', 'arthur.mendoza@samtrevano.ch', 84),
(83, 'Jeffrey', 'Welch', '45693d9f23c1824c4794e13cd9286c27', 'jeffrey.welch@samtrevano.ch', 97),
(84, 'Kathleen', 'Johnston', '440aefe5b9438abf483b5c811094180f', 'kathleen.johnston@samtrevano.ch', 26),
(85, 'Nancy', 'Cunningham', '451cfe37b4c9de6d3576c119297e26a2', 'nancy.cunningham@samtrevano.ch', 12),
(86, 'Heather', 'Freeman', 'bfa10e9839401d4ed28604e13e857dcc', 'heather.freeman@samtrevano.ch', 48),
(87, 'Russell', 'Fowler', 'LkaxWq', 'rfowler2e@mysql.com', 45),
(88, 'Roger', 'Perez', '580848d51daa4ffdef69879a08a86b7b', 'roger.perez@samtrevano.ch', 86),
(89, 'Susan', 'Harper', 'd67b143e4ec2f5790fa92ce88354643e', 'susan.harper@samtrevano.ch', 60),
(90, 'Jack', 'Campbell', 'e4a9f01702958f51df1209d928a54819', 'jack.campbell@samtrevano.ch', 48),
(91, 'Howard', 'Foster', 'b2d9657dec14a9da98f1d352f8f52a84', 'howard.foster@samtrevano.ch', 78),
(92, 'Gerald', 'Roberts', '641807c82cb91f231f2e8b2e0be6032b', 'gerald.roberts@samtrevano.ch', 95),
(93, 'Linda', 'Harris', 'f2fce090974e5c44b35ce218407df675', 'linda.harris@samtrevano.ch', 15),
(94, 'Charles', 'Moreno', '3a6ff45e642a1e24d5f7c0b85c0e3a88', 'charles.moreno@samtrevano.ch', 4),
(95, 'Julie', 'Ruiz', 'd8f31ad5d44e26921122f8d188480577', 'julie.ruiz@samtrevano.ch', 10),
(96, 'Emily', 'Gordon', '1d555377f508d6dc54776ba2c0e5f0f4', 'emily.gordon@samtrevano.ch', 84),
(97, 'Pamela', 'Hayes', '24d3bc58a963fc3bd79363bff0acb6a6', 'pamela.hayes@samtrevano.ch', 87),
(98, 'Thomas', 'Johnson', 'fe442bafac30e5f332f38f98f68fd9f0', 'thomas.johnson@samtrevano.ch', 49),
(99, 'Cheryl', 'Berry', '86185421e51e300b7c6958e407a16d34', 'cheryl.berry@samtrevano.ch', 48),
(100, 'Jerry', 'Harvey', '4872889140c154a5000be39e82f5ddbf', 'jerry.harvey@samtrevano.ch', 76),
(101, 'Gerald', 'Stewart', 'b883262331b3b1a322f5fd5480474f57', 'gerald.stewart@samtrevano.ch', 57),
(102, 'Lori', 'Harrison', '43652579c7b381e887a912c3834cb1a9', 'lori.harrison@samtrevano.ch', 52),
(103, 'Dennis', 'Wright', '77756cb3cf1326a414be1752aff20f4a', 'dennis.wright@samtrevano.ch', 62),
(104, 'Jerry', 'Morris', 'fa15bfe52755cda7315880e3bb870990', 'jerry.morris@samtrevano.ch', 82),
(105, 'Justin', 'Jones', '4fd207680900af178cff2d4607a1d0bf', 'justin.jones@samtrevano.ch', 32),
(106, 'Denise', 'Gibson', 'bea7be07b8538286100346e04a4cec64', 'denise.gibson@samtrevano.ch', 97),
(107, 'Jane', 'Vasquez', 'd421f17e5a89163bd81da69da4acd104', 'jane.vasquez@samtrevano.ch', 41),
(108, 'Julia', 'Castillo', '400a9ed03d77c6ad12b3f943293a4beb', 'julia.castillo@samtrevano.ch', 52),
(109, 'Rachel', 'Jordan', '5170a150b9b7fa5ba25178f78fe5e5e0', 'rachel.jordan@samtrevano.ch', 82),
(110, 'Walter', 'Schmidt', '789009ed412b71734800af910e832a94', 'walter.schmidt@samtrevano.ch', 51),
(111, 'Tammy', 'Harrison', '3871b52f2d42a904d29657131dab5656', 'tammy.harrison@samtrevano.ch', 28),
(112, 'Sean', 'Miller', '2a6b6c2013a4165a17d390a25c6c7fb6', 'sean.miller@samtrevano.ch', 61),
(113, 'Kimberly', 'Wilson', '4e2d66d26736f79ba873a855e48dc6fc', 'kimberly.wilson@samtrevano.ch', 38),
(114, 'Elizabeth', 'Montgomery', '4a1ef6156dc980ac060527fbc97ef754', 'elizabeth.montgomery@samtrevano.ch', 84),
(115, 'Randy', 'Thomas', '02ac35703d9b8b6a9c0094094add048e', 'randy.thomas@samtrevano.ch', 78),
(116, 'Brian', 'Richards', '156685c631d0d0a05ec43364e1f6711f', 'brian.richards@samtrevano.ch', 48),
(117, 'Jesse', 'Austin', '4db42b7390de8a8760494bebd3baa459', 'jesse.austin@samtrevano.ch', 92),
(118, 'Donna', 'Morgan', '5004b1a55b84aedf1710b7877c210a3a', 'donna.morgan@samtrevano.ch', 63),
(119, 'Steven', 'Mcdonald', 'ec70babb1d8241ee5ecef2e07ccc7241', 'steven.mcdonald@samtrevano.ch', 41),
(120, 'Katherine', 'Garrett', 'be3eb9a88bdb9a6538990b9ae97a57e4', 'katherine.garrett@samtrevano.ch', 51),
(121, 'Anna', 'Garza', '357659832b6949e35fc710ec31acec1f', 'anna.garza@samtrevano.ch', 87),
(122, 'Clarence', 'Harrison', 'd6771859a5f6d31038d0a153faa45380', 'clarence.harrison@samtrevano.ch', 1),
(123, 'Patricia', 'Jacobs', 'ad5cae84bcb253d1297d38be67b01970', 'patricia.jacobs@samtrevano.ch', 42),
(124, 'Louis', 'Simpson', 'c244b31f0f9750fbc3b8e52936b6877a', 'louis.simpson@samtrevano.ch', 45),
(125, 'Kenneth', 'Clark', 'b2a3b90f7b4d7308a1b034ddba1a634c', 'kenneth.clark@samtrevano.ch', 5),
(126, 'Marilyn', 'Sanders', 'a0fa47caf0aaf21fd88942e12370f525', 'marilyn.sanders@samtrevano.ch', 30),
(127, 'Ryan', 'Mason', '02e6774b0eefd4e1a745ccc56c6812ac', 'ryan.mason@samtrevano.ch', 4),
(128, 'Ashley', 'Scott', 'a980e57ef18bab9451161891c35191e3', 'ashley.scott@samtrevano.ch', 35),
(129, 'Gloria', 'Marshall', 'e792a90297093997d1ec38412fb72194', 'gloria.marshall@samtrevano.ch', 49),
(130, 'Nicholas', 'Warren', '95ca2693e8d6bca7d3c264f8e53967b9', 'nicholas.warren@samtrevano.ch', 58),
(131, 'Sara', 'Simmons', '17b1e5e5d278cb97ec8fbcc0728eeb79', 'sara.simmons@samtrevano.ch', 38),
(132, 'Jesse', 'Hayes', '2a7d02d52ee78ed7b8cf822a64f223e5', 'jesse.hayes@samtrevano.ch', 5),
(133, 'Donna', 'Hunt', '875e0a12cb8be6e5842e4291d9f0375d', 'donna.hunt@samtrevano.ch', 97),
(134, 'Mary', 'Olson', '763590b22a4c9ca1a0181794271ad1f4', 'mary.olson@samtrevano.ch', 10),
(135, 'Beverly', 'Taylor', '54e44abec9798804991745455033a2c0', 'beverly.taylor@samtrevano.ch', 74),
(136, 'Russell', 'Ward', '01fe99a0d8b0eb8b2553bfdfb5ba969e', 'russell.ward@samtrevano.ch', 81),
(137, 'Diana', 'Brooks', '79098a6fc80a9c2c15ca57b6f9c0e978', 'diana.brooks@samtrevano.ch', 68),
(138, 'Ryan', 'Young', '76b7a3994f08cb5a490dc1f2c90af4c0', 'ryan.young@samtrevano.ch', 6),
(139, 'Matthew', 'Wagner', '57f0a09ac1b446272815f0ab8f55c2c7', 'matthew.wagner@samtrevano.ch', 6),
(140, 'Janet', 'Brown', '640e41b05a7e50a5ff5230febec7ff90', 'janet.brown@samtrevano.ch', 48),
(141, 'Paula', 'Stone', '99df3f2f28d7e54142ec2711cbd4056d', 'paula.stone@samtrevano.ch', 96),
(142, 'Jeremy', 'Lopez', '9c5456d9144b7c96e419e788b72cb26a', 'jeremy.lopez@samtrevano.ch', 76),
(143, 'Amy', 'Gonzales', 'af356097cb88a9a3dc6a6963c9143cb9', 'amy.gonzales@samtrevano.ch', 99),
(144, 'Julie', 'Bishop', '5a2256559c5678a3e4be56a481973611', 'julie.bishop@samtrevano.ch', 55),
(145, 'Heather', 'Wagner', '5b876ade87c18499235fbf6c50c15365', 'heather.wagner@samtrevano.ch', 18),
(146, 'Howard', 'Carter', '69be05d8370be1b19ff91df4ab625b53', 'howard.carter@samtrevano.ch', 28),
(147, 'William', 'Lynch', '6035b712fa759e99abed6236849c0305', 'william.lynch@samtrevano.ch', 28),
(148, 'Walter', 'Reed', 'ee0edb718f05dc743fdf927e54b640be', 'walter.reed@samtrevano.ch', 17),
(149, 'Brenda', 'James', 'b3511a01de958ef8c3e6dc7b0769ba81', 'brenda.james@samtrevano.ch', 92),
(150, 'Maria', 'Stephens', '3677e16acdab85c5797860f45f3abe45', 'maria.stephens@samtrevano.ch', 6),
(151, 'David', 'Clark', 'f75521494e110c7d6b05268edf65b42a', 'david.clark@samtrevano.ch', 13),
(152, 'Willie', 'Castillo', 'e27d606bbe280e86f51a221a454e21df', 'willie.castillo@samtrevano.ch', 40),
(153, 'Patrick', 'Cook', '44c93180f31ca2277578f22d39002876', 'patrick.cook@samtrevano.ch', 31),
(154, 'Gerald', 'Alexander', 'eb22d2184416f8feb4ca6f68eb31e4e3', 'gerald.alexander@samtrevano.ch', 11),
(155, 'Anna', 'Woods', '496ea5b701992fbfb9a88d420d8071b6', 'anna.woods@samtrevano.ch', 81),
(156, 'Victor', 'Brown', 'b4054b0065354577e814f1fece89b585', 'victor.brown@samtrevano.ch', 23),
(157, 'Kevin', 'Gonzales', 'dec43b74fc675d28c9aec9db71ec829c', 'kevin.gonzales@samtrevano.ch', 83),
(158, 'Anna', 'Gilbert', '2f06c2cec76ee6d27f560e4ad25a4399', 'anna.gilbert@samtrevano.ch', 39),
(159, 'Lillian', 'Diaz', 'bf8381d42960bd32d6be931a8992f1b0', 'lillian.diaz@samtrevano.ch', 74),
(160, 'Eric', 'Russell', '6b389874b01dbf13fd7aa763bc7d4ecd', 'eric.russell@samtrevano.ch', 52),
(161, 'Patrick', 'Banks', '8bbad78398a9e5caff3c4eee107d7f7a', 'patrick.banks@samtrevano.ch', 60),
(162, 'Teresa', 'Walker', '3bb2617037b0827409fcb48448a09789', 'teresa.walker@samtrevano.ch', 91),
(163, 'Nancy', 'Snyder', 'fa3bdf0099017c4a3f7d92bfa359cb2b', 'nancy.snyder@samtrevano.ch', 51),
(164, 'Christine', 'Banks', 'c2db879f0c49efa283e2ae0517d329a0', 'christine.banks@samtrevano.ch', 55),
(165, 'Virginia', 'Thomas', 'a0cc807834a163684aa237ad88a25cac', 'virginia.thomas@samtrevano.ch', 96),
(166, 'Amy', 'Sanchez', '91aa58d921c41acdfa2ad332ab6fc010', 'amy.sanchez@samtrevano.ch', 96),
(167, 'Lisa', 'Price', 'fe8db59b340b17a661403c4d4c5ab7df', 'lisa.price@samtrevano.ch', 59),
(168, 'Joseph', 'Riley', '1f3a801b297f73ea83f2e61e9ac9ebfc', 'joseph.riley@samtrevano.ch', 65),
(169, 'Paula', 'Baker', '20405ab93b1cbf644759d20d48d9459a', 'paula.baker@samtrevano.ch', 35),
(170, 'Henry', 'Richards', 'fde33d55bb6d99f82df2818a8ec76f83', 'henry.richards@samtrevano.ch', 9),
(171, 'Kathy', 'Ward', '6d0ab9847950ee0a307aba77cdd25130', 'kathy.ward@samtrevano.ch', 46),
(172, 'Jerry', 'Duncan', 'cff5f51f5cc8dc5f668bd42653f54d3f', 'jerry.duncan@samtrevano.ch', 51),
(173, 'John', 'Fox', 'c2f0bfaad9f052b5c993fdb9f42c0062', 'john.fox@samtrevano.ch', 35),
(174, 'Fred', 'Cole', '81ef899078ff6799335e0932f0dfbbb6', 'fred.cole@samtrevano.ch', 47),
(175, 'Karen', 'Marshall', '168c9411b767f88aebdaa0b0c0bd8bb4', 'karen.marshall@samtrevano.ch', 37),
(176, 'Sean', 'Daniels', '55a40366868462be16c091cd3af7ce63', 'sean.daniels@samtrevano.ch', 98),
(177, 'Lois', 'Ward', 'c8b889c066f5f749e335f162f5816d9e', 'lois.ward@samtrevano.ch', 99),
(178, 'Gloria', 'Perry', 'c6b05f476b8803439008a5c268780291', 'gloria.perry@samtrevano.ch', 59),
(179, 'Julia', 'Washington', '6126036f3ce243332392a9c03605cea0', 'julia.washington@samtrevano.ch', 100),
(180, 'Frances', 'Black', 'de7adc21db946a74f0c903c6337c0b19', 'frances.black@samtrevano.ch', 62),
(181, 'Deborah', 'Medina', '44792ed371f66d1d0e7ad94a31a8d887', 'deborah.medina@samtrevano.ch', 74),
(182, 'Diana', 'Turner', 'f63a5d4d679267feb102b1891f1eb8d4', 'diana.turner@samtrevano.ch', 20),
(183, 'Jesse', 'Robertson', '37336763848e3783e9eda3773c5ea6df', 'jesse.robertson@samtrevano.ch', 57),
(184, 'Robin', 'Fields', '0308e7c1370b1422e6229c2b35eade6c', 'robin.fields@samtrevano.ch', 76),
(185, 'Dorothy', 'Alvarez', 'dd1d43752436a90c800c42215146b9a5', 'dorothy.alvarez@samtrevano.ch', 39),
(186, 'Jack', 'Reynolds', '18dafdd029d700d71383459151c95427', 'jack.reynolds@samtrevano.ch', 68),
(187, 'Steven', 'Carpenter', '3eb2cdcf9e5456cc4287209db4048057', 'steven.carpenter@samtrevano.ch', 26),
(188, 'Cynthia', 'Knight', 'a96ce7e3690c18c32abc96e301e1cb06', 'cynthia.knight@samtrevano.ch', 57),
(189, 'Donald', 'Weaver', '29c28ced72c4b298f30b10d65b8e942d', 'donald.weaver@samtrevano.ch', 52),
(190, 'Anthony', 'Bradley', '37ee5c84b4f8531559a9257d47b9eba3', 'anthony.bradley@samtrevano.ch', 98),
(191, 'Ronald', 'Cook', '81532e1b47e33f4a030dcb41c760b7a3', 'ronald.cook@samtrevano.ch', 80),
(192, 'Joshua', 'Cunningham', '32441e70ab201279aa6833be6c042a8e', 'joshua.cunningham@samtrevano.ch', 57),
(193, 'Ann', 'Alexander', 'acda0c368206d3b4b7adcac030dff72c', 'ann.alexander@samtrevano.ch', 30),
(194, 'Julia', 'Harvey', '1d7476a99d246253bd034b829b9c6d5a', 'julia.harvey@samtrevano.ch', 27),
(195, 'Jeffrey', 'Wagner', 'ded5e45e672a827229db522d4a52bf9f', 'jeffrey.wagner@samtrevano.ch', 4),
(196, 'Sandra', 'Matthews', '4ba80d575de31a761f40d5bf26820a2f', 'sandra.matthews@samtrevano.ch', 14),
(197, 'Frances', 'Kelley', '71ae08d1a4a9ec69c64a2e8f660a1e20', 'frances.kelley@samtrevano.ch', 75),
(198, 'Bonnie', 'Bradley', '1513e60b4645fec9d514ac568df7e54f', 'bonnie.bradley@samtrevano.ch', 79),
(199, 'Judy', 'Arnold', '2038fb7d93794cbef1a7cde052fb1179', 'judy.arnold@samtrevano.ch', 83),
(200, 'Samuel', 'Alexander', '6b71363890cc1b858761c186e503a052', 'samuel.alexander@samtrevano.ch', 57),
(201, 'Edward', 'Gray', '2f689df277c354eaa17bf66817f46957', 'edward.gray@samtrevano.ch', 16),
(202, 'Daniel', 'Banks', '74abc92f0b68ecd21a5d29cd03c68861', 'daniel.banks@samtrevano.ch', 12),
(203, 'Bonnie', 'Marshall', 'e3c5ae53b8b2804dae76780bdb7e7f13', 'bonnie.marshall@samtrevano.ch', 17),
(204, 'Bonnie', 'Griffin', '08fa621e6c327e86d608b646629f39b3', 'bonnie.griffin@samtrevano.ch', 81),
(205, 'Diane', 'Banks', 'd95502fff7fc5265333cac7d58988384', 'diane.banks@samtrevano.ch', 10),
(206, 'Todd', 'Allen', 'b8ec2e16cf697d18c824c59836e4a6f9', 'todd.allen@samtrevano.ch', 32),
(207, 'Patrick', 'Griffin', '59d3633399f09c6ea875c3b383d39569', 'patrick.griffin@samtrevano.ch', 2),
(208, 'Carl', 'Castillo', '4f11ef24401216fb2301a704e6147162', 'carl.castillo@samtrevano.ch', 45),
(209, 'Aaron', 'Cooper', '47017339e281ce8ebd58859c63351c1a', 'aaron.cooper@samtrevano.ch', 62),
(210, 'Eric', 'Olson', 'ed4f5bc715bee7468594381cee23e978', 'eric.olson@samtrevano.ch', 94),
(211, 'Evelyn', 'Warren', '1bcc9875e49415ff1e8938d646fff0ba', 'evelyn.warren@samtrevano.ch', 21),
(212, 'John', 'Alvarez', '370f667ba1bcfef4da932e0aa2a51563', 'john.alvarez@samtrevano.ch', 85),
(213, 'Angela', 'Lopez', '1968a5f3534ad889e1269a5238e7d8ee', 'angela.lopez@samtrevano.ch', 36),
(214, 'Raymond', 'Burton', '2f5d07c2cbb83781083c18586641f520', 'raymond.burton@samtrevano.ch', 84),
(215, 'Roger', 'Howard', '3dfd415898c52455712cde994b9b1d33', 'roger.howard@samtrevano.ch', 92),
(216, 'Terry', 'Spencer', '4c678990baa6914f6e95973bd6602cc8', 'terry.spencer@samtrevano.ch', 72),
(217, 'Christine', 'Torres', '3a51bbb44be4d51de50d931459ee2dd6', 'christine.torres@samtrevano.ch', 45),
(218, 'Larry', 'Jacobs', 'd64c688797ef25bcd9ec4f0cbf0bcdd1', 'larry.jacobs@samtrevano.ch', 20),
(219, 'Clarence', 'Murray', 'e9e06bbb6f9a38c3bb9f37daa4993aa4', 'clarence.murray@samtrevano.ch', 96),
(220, 'Alice', 'Nichols', '39436ba45cddeb48cad64ff5f9210883', 'alice.nichols@samtrevano.ch', 14),
(221, 'George', 'Griffin', '5c6414ad52682f9675deb150fd6c9faf', 'george.griffin@samtrevano.ch', 99),
(222, 'Gloria', 'Dixon', '3ef75c90bc0a97b91f442f0106cc34c6', 'gloria.dixon@samtrevano.ch', 69),
(223, 'Emily', 'Richardson', 'a916d123a15f416f418bf903a7496c63', 'emily.richardson@samtrevano.ch', 67),
(224, 'Paula', 'Simmons', '9246e8e75303b47e4a73616b6877f4f9', 'paula.simmons@samtrevano.ch', 23),
(225, 'Donna', 'Murphy', 'ddcf458afc961aadc8851ab16601d618', 'donna.murphy@samtrevano.ch', 13),
(226, 'Thomas', 'Rivera', 'be412e4a4feb5e0069e8ebb7eaa97f23', 'thomas.rivera@samtrevano.ch', 32),
(227, 'Annie', 'Hunt', '08ba0fb46005d1314923ba5c305757be', 'annie.hunt@samtrevano.ch', 44),
(228, 'Phillip', 'Knight', '1d72516d067e4cd75e5ed8e6555d3a1c', 'phillip.knight@samtrevano.ch', 53),
(229, 'Mary', 'Davis', '10453b3421ccd001aeb9cd987e0d5168', 'mary.davis@samtrevano.ch', 50),
(230, 'Carolyn', 'Warren', '2139cf581e29cfed71408830ffe600ab', 'carolyn.warren@samtrevano.ch', 71),
(231, 'Rose', 'Nichols', '7d7bc0cbe6ba47ea6a3e57b16862d9d2', 'rose.nichols@samtrevano.ch', 19),
(232, 'Joshua', 'Jenkins', '229d5a91af79ba8afa52fe3f2ad6f59f', 'joshua.jenkins@samtrevano.ch', 53),
(233, 'Thomas', 'Russell', '3ed5042b366d8368222d8c50b24f5bef', 'thomas.russell@samtrevano.ch', 39),
(234, 'Sean', 'Burton', '23e4c62b848893faf06e293555ce51a8', 'sean.burton@samtrevano.ch', 41),
(235, 'Willie', 'Ferguson', 'fdb4eaaa48b16ac89fa101be491a7592', 'willie.ferguson@samtrevano.ch', 99),
(236, 'Martin', 'Flores', '5c75d49f17c364f3cffc3f696f459b14', 'martin.flores@samtrevano.ch', 50),
(237, 'Walter', 'Hayes', '1e2abf1dd9a6efc82edd12c5d5926b94', 'walter.hayes@samtrevano.ch', 41),
(238, 'Russell', 'Howell', '458bfdbac0e012eb799232b836acb8cf', 'russell.howell@samtrevano.ch', 25),
(239, 'Brian', 'Morales', '47ee35ebd23dda9f89a4d0c98f0331cd', 'brian.morales@samtrevano.ch', 23),
(240, 'Jane', 'Diaz', '661419714b96f5d60b0d013d0b800711', 'jane.diaz@samtrevano.ch', 84),
(241, 'Ruth', 'Wilson', 'cfbbae4c22365b4b28d34533e2440e84', 'ruth.wilson@samtrevano.ch', 78),
(242, 'Martin', 'George', '5a702bcce86437b25ef222581e401bcf', 'martin.george@samtrevano.ch', 5),
(243, 'Lillian', 'Miller', '24c726be9524742c0f5eafce45c03bf1', 'lillian.miller@samtrevano.ch', 53),
(244, 'Scott', 'Garrett', 'db530d6896beff5893c205e471d8682a', 'scott.garrett@samtrevano.ch', 74),
(245, 'Steven', 'Lee', '093bd20aca9ef2cf7a6429178e61ab8a', 'steven.lee@samtrevano.ch', 77),
(246, 'Aaron', 'Mills', 'd35c2dca24e91eee29ddefd6e1db45ce', 'aaron.mills@samtrevano.ch', 51),
(247, 'Wayne', 'Wheeler', '4488b30df9c8c73af316c0dbf186d3b0', 'wayne.wheeler@samtrevano.ch', 28),
(248, 'Raymond', 'Ortiz', 'b5069e619319ac7a3fc5ae14ca36c430', 'raymond.ortiz@samtrevano.ch', 55),
(249, 'Marie', 'Fuller', 'e500e4179c447028a5439052381e0582', 'marie.fuller@samtrevano.ch', 27),
(250, 'Randy', 'Freeman', 'c135b0e5c33592ba6dbbb3589fe3aaef', 'randy.freeman@samtrevano.ch', 39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capsula`
--
ALTER TABLE `capsula`
 ADD PRIMARY KEY (`ca_tipo`);

--
-- Indexes for table `caricacredito`
--
ALTER TABLE `caricacredito`
 ADD PRIMARY KEY (`ut_idNorm`,`ut_idResp`,`cre_data`), ADD KEY `ut_idResp` (`ut_idResp`);

--
-- Indexes for table `configurazione`
--
ALTER TABLE `configurazione`
 ADD PRIMARY KEY (`co_nome`);

--
-- Indexes for table `prende`
--
ALTER TABLE `prende`
 ADD PRIMARY KEY (`ut_id`,`ca_tipo`,`pre_data`), ADD KEY `ca_tipo` (`ca_tipo`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
 ADD PRIMARY KEY (`ut_id`), ADD UNIQUE KEY `ut_email` (`ut_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utente`
--
ALTER TABLE `utente`
MODIFY `ut_id` int NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
