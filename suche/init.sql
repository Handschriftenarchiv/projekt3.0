SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `archivalien` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Titel` varchar(100) NOT NULL,
  `Komponist` varchar(50) DEFAULT NULL,
  `Bearbeiter` varchar(50) DEFAULT NULL,
  `Dichter` varchar(50) DEFAULT NULL,
  `Setzer` varchar(50) DEFAULT NULL,
  `Typus` enum('Handschrift','Kopie von Handschrift','Druck') NOT NULL,
  `Verlag` varchar(50) DEFAULT NULL,
  `Verfassungsdatum` varchar(20) DEFAULT NULL,
  `Sprache` varchar(50) NOT NULL,
  `Schrift` varchar(50) NOT NULL DEFAULT 'Latn',
  `Anzahl` varchar(255) NOT NULL,
  `Sammlung` enum('Introitensammlung','Archiv') NOT NULL,
  `Standort` varchar(50) NOT NULL,
  `Signatur` int(6) NOT NULL,
  `Bemerkungen` text,
  `Audiolink` varchar(255) DEFAULT NULL,
  `Dokumentlink` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;
