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
  `Anzahl` varchar(255) NOT NULL,
  `Sammlung` enum('Introitensammlung','Archiv') NOT NULL,
  `Standort` varchar(50) NOT NULL,
  `Signatur` int(6) NOT NULL,
  `Bemerkungen` text,
  `Audiolink` varchar(255) DEFAULT NULL,
  `Dokumentlink` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

REPLACE INTO `archivalien` (`ID`, `Titel`, `Komponist`, `Bearbeiter`, `Dichter`, `Setzer`, `Typus`, `Verlag`, `Verfassungsdatum`, `Sprache`, `Anzahl`, `Sammlung`, `Standort`, `Signatur`, `Besonderheiten`, `Audiolink`, `Dokumentlink`) VALUES
(1, 'Gott der Herr ist Sonn und Schild', 'Johann Sebastian Bach', NULL, NULL, 'Kruzianer', 'Handschrift', NULL, 'ungefähr 28.02.1950', 'Deutsch', '12x Sopran', 'Archiv', 'Kasten 1', 20011, NULL, NULL, NULL),
(2, 'Kein Schöner Land', 'Volkslied', NULL, NULL, 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '1x Tenor II', 'Archiv', 'Kasten 3', 20031, NULL, NULL, NULL),
(3, 'Der Faulbeerbaum', 'Alexander Tichonowitsch Gretschaninow', NULL, 'Sergei Alexandrowitsch Jessenin', 'Gottfried Heder', 'Handschrift', NULL, NULL, 'Russisch (Transkript)', '5x Sopran<br>5x Alt', 'Archiv', 'Kasten 8', 20081, 'für Knabenchor <br> Kruzianer und Rantsdiskantist Dr.rer.nat. Gottfried Heder (Abgang vom Kreuzchor 1952)', NULL, NULL),
(4, 'Maria im Walde', 'Carl Riedel', NULL, NULL, NULL, 'Druck', NULL, NULL, 'Deutsch', '5x Sopran<br>4x Alt<br>4x Tenor<br>4x Bass', 'Archiv', 'Kasten 9', 22091, NULL, NULL, NULL),
(5, 'Weihnachtswunder', 'Carl Riedel', NULL, NULL, NULL, 'Druck', NULL, NULL, 'Deutsch', '5x Sopran<br>3x Alt<br>4x Tenor<br>4xBass', 'Archiv', 'Kasten 9', 22092, NULL, NULL, NULL),
(6, 'Christkindleins Bergfahrt', 'Carl Riedel', NULL, NULL, NULL, 'Druck', NULL, NULL, 'Deutsch', '4x Sopran<br>4x Alt<br>4x Tenor<br>4x Bass', 'Archiv', 'Kasten 9', 22093, NULL, NULL, NULL),
(7, 'Introitus für den 11. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 133', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 21111, NULL, NULL, NULL),
(8, 'Introitus für den 11. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 133', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 21112, NULL, NULL, NULL),
(9, 'Introitus für den 9. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 40', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '2x', 'Introitensammlung', 'Kasten 11', 21113, NULL, NULL, NULL),
(10, 'Introitus für den Buß- und Bettag', NULL, NULL, 'Psalm 85', 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '6x A5<br>1x A4', 'Introitensammlung', 'Kasten 11', 20114, NULL, NULL, NULL),
(11, 'Introitus für den 21. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 19', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 21115, NULL, NULL, NULL),
(12, 'Introitus für den 10. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 74', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 21116, NULL, NULL, NULL),
(13, 'Introitus für den Sonntag Estomihi', NULL, NULL, 'Psalm 31', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 21117, NULL, NULL, NULL),
(14, 'Introitus für Judica, Palmarum, Gründonnerstag und Karfreitag', NULL, NULL, 'Psalm 102', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 21118, NULL, NULL, NULL),
(15, 'Ergänzung zum Introitus (Invocavit, Reminiscere, Oculi, Laetare)', NULL, NULL, 'verschiedene Psalmen', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 21119, NULL, NULL, NULL);
