-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Erstellungszeit: 09. Aug 2017 um 16:20
-- Server Version: 5.5.33a-MariaDB
-- PHP-Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `hsa3`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `archivalien`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Daten für Tabelle `archivalien`
--

INSERT INTO `archivalien` (`ID`, `Titel`, `Komponist`, `Bearbeiter`, `Dichter`, `Setzer`, `Typus`, `Verlag`, `Verfassungsdatum`, `Sprache`, `Anzahl`, `Sammlung`, `Standort`, `Signatur`, `Bemerkungen`, `Audiolink`, `Dokumentlink`) VALUES
(1, 'Gott der Herr ist Sonn und Schild', 'Johann Sebastian Bach', NULL, NULL, 'Kruzianer', 'Handschrift', NULL, 'ungefähr 28.02.1950', 'Deutsch', '12x Sopran', 'Archiv', 'Kasten 1', 200101, NULL, NULL, '//e.issuu.com/embed.html#25938217/39210329'),
(2, 'Kein Schöner Land', 'Volkslied', NULL, NULL, 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '1x Tenor II', 'Archiv', 'Kasten 3', 200301, NULL, NULL, NULL),
(3, 'Der Faulbeerbaum', 'Alexander Tichonowitsch Gretschaninow', NULL, 'Sergei Alexandrowitsch Jessenin', 'Gottfried Heder', 'Handschrift', NULL, NULL, 'Russisch (Transkript)', '5x Sopran<br>5x Alt', 'Archiv', 'Kasten 8', 200801, 'für Knabenchor <br> Kruzianer und Rantsdiskantist Dr.rer.nat. Gottfried Heder (Abgang vom Kreuzchor 1952)', NULL, 'https://musescore.com/user/19552071/scores/3834591/embed //e.issuu.com/embed.html#25938217/45880531 //e.issuu.com/embed.html#25938217/45878938'),
(4, 'Maria im Walde', 'Carl Riedel', NULL, NULL, NULL, 'Druck', NULL, NULL, 'Deutsch', '5x Sopran<br>4x Alt<br>4x Tenor<br>4x Bass', 'Archiv', 'Kasten 9', 220901, NULL, NULL, NULL),
(5, 'Weihnachtswunder', 'Carl Riedel', NULL, NULL, NULL, 'Druck', NULL, NULL, 'Deutsch', '5x Sopran<br>3x Alt<br>4x Tenor<br>4xBass', 'Archiv', 'Kasten 9', 220902, NULL, NULL, NULL),
(6, 'Christkindleins Bergfahrt', 'Carl Riedel', NULL, NULL, NULL, 'Druck', NULL, NULL, 'Deutsch', '4x Sopran<br>4x Alt<br>4x Tenor<br>4x Bass', 'Archiv', 'Kasten 9', 220903, NULL, NULL, NULL),
(7, 'Introitus für den 11. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 113', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211101, NULL, NULL, NULL),
(9, 'Introitus für den 9. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 40', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '2x', 'Introitensammlung', 'Kasten 11', 211103, NULL, NULL, NULL),
(10, 'Introitus für den Buß- und Bettag', NULL, NULL, 'Psalm 85', 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '6x A5<br>1x A4', 'Introitensammlung', 'Kasten 11', 201104, NULL, NULL, NULL),
(11, 'Introitus für den 21. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 19', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211105, NULL, NULL, NULL),
(12, 'Introitus für den 10. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 74', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211106, NULL, NULL, NULL),
(13, 'Introitus für den Sonntag Estomihi', NULL, NULL, 'Psalm 31', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211107, NULL, NULL, NULL),
(14, 'Introitus für Judica, Palmarum, Gründonnerstag und Karfreitag', NULL, NULL, 'Psalm 102', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211108, NULL, NULL, NULL),
(15, 'Ergänzung zum Introitus (Invocavit, Reminiscere, Oculi, Laetare)', NULL, NULL, 'verschiedene Psalmen', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211109, NULL, NULL, NULL),
(16, 'Introiten-Sammlung - Beilagen', NULL, NULL, NULL, 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '4x', 'Introitensammlung', 'Kasten 11', 201110, '- Zettel: Vorderseite mit Schreibmaschine: Probentermine für Ostermette (ca. 1950), Rückseite handschriftliche Ergänzungen zu Introiten\n<br>\n- Zettel (3x): Rückseite maschinell geschrieben Brief: Von: Bund der Landeskirchen in der Deutschen Demokratischen Republik, 28.10.1980; An: Landesjugendpfarrer der Gliedkirchen des Bundes der Ev. Kirchen in der DDR; Betreff: Friedensdekade und Bußtag 1980\nVorderseite: Handschriftliche Reihenfolge der (damaligen) Intoriten-Sammlung', NULL, NULL),
(17, 'Evangelisches Gesangbuch 602, Introitus', NULL, NULL, NULL, NULL, 'Druck', NULL, NULL, 'Deutsch', '5x', 'Introitensammlung', 'Kasten 11', 221111, 'Handschriftliche Ergänzungen', NULL, NULL),
(18, 'Introitus für den 6. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 139', 'Kruzainer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '5x', 'Introitensammlung', 'Kasten 11', 211112, 'Beilage: Programmheft mit Introitus', NULL, NULL),
(19, 'Introitus für den 6. Sonntag nach Trinitatis', NULL, NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '5x', 'Introitensammlung', 'Kasten 11', 211113, NULL, NULL, NULL),
(20, 'Introitus für Judica', NULL, NULL, 'Psalm 102', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211114, NULL, NULL, NULL),
(21, 'Introitus für den 5. Sonntag nach Trinitatis', NULL, NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '5x', 'Introitensammlung', 'Kasten 11', 211115, NULL, NULL, NULL),
(22, 'Der 150. Psalm', 'Sethus Calvisius', NULL, NULL, NULL, 'Druck', 'Breitkopf & Härtel', NULL, 'Deutsch', '11x Sopran<br>6x Alt<br>9x Tenor<br>9x Baß', 'Archiv', 'Kasten 9', 220904, NULL, NULL, NULL),
(23, 'Stadt am Strom', 'Rudolf Mauersberger', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '2x Sopran<br>2x Alt<br>2x Tenor<br>3x Baß', 'Archiv', 'Kasten 12', 211201, NULL, NULL, NULL),
(24, 'Ave Maria', 'Anton Bruckner', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, '1968', '?', '5x Partitur ', 'Archiv', 'Kasten 12', 211202, NULL, NULL, NULL),
(25, 'Herr, bleibe bei uns', 'Bruno Heroldt', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, '1954', 'Deutsch', '5x Sopran<br>5x Alt<br>5x Tenor<br>5x Baß', 'Archiv', 'Kasten 12', 211203, '"Dem Johanniskirchen- und Riedelschen Männerchor, Plauen, gewidmet."', NULL, NULL),
(26, 'Siehe, ich stehe vor der Tür', 'Bruno Heroldt', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, '1949', 'Deutsch', '5x Sopran<br>5x Alt<br>5x Tenor<br>5x Baß', 'Archiv', 'Kasten 12', 211204, NULL, NULL, NULL),
(27, 'Wie lieblich sind die Füße der Boten', 'Bruno Heroldt', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, '1955, 1956', 'Deutsch', '5x Sopran<br>5x Alt<br>6x Tenor<br>8x Baß', 'Archiv', 'Kasten 12', 211205, NULL, NULL, NULL),
(28, 'Maria durch ein Dornwald ging', 'Bruno Heroldt', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, '1956', 'Deutsch', '5x Sopran<br>6x Alt<br>4x Tenor<br>5x Baß', 'Archiv', 'Kasten 12', 211206, NULL, NULL, NULL),
(29, 'Still, Still', 'Bruno Heroldt', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, '1956', 'Deutsch', '5x Sopran<br>5x Alt<br>5x Tenor<br>5x Baß', 'Archiv', 'Kasten 12', 211207, NULL, NULL, NULL),
(30, 'Auf, auf, ihr Hirten nicht schlaft', 'Bruno Heroldt', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, '1956', 'Deutsch', '5x Sopran<br>5x Alt<br>5x Tenor<br>5x Baß', 'Archiv', 'Kasten 12', 211208, NULL, NULL, NULL),
(31, 'Mondlied', 'Bruno Heroldt', NULL, NULL, 'Kruzianer, Kürzel K.M.', 'Kopie von Handschrift', NULL, '1957', 'Deutsch', '6x Knabenchor (auch Jugendchor)<br>5x Tenor<br>5x Baß', 'Archiv', 'Kasten 12', 211209, 'Kopien mit dem Stempel vom »Riedelscher Männerchor von Plauen« versehen', NULL, NULL),
(32, 'Das Wanderlied der Jugend', 'Bruno Heroldt', NULL, NULL, 'Kruzianer, Kürzel K.M.', 'Kopie von Handschrift', NULL, '1957', 'Deutsch', '5x Knabenchor (auch Jugendchor)<br>5x Tenor<br>5x Baß', 'Archiv', 'Kasten 12', 211210, 'Kopien mit dem Stempel vom »Riedelscher Männerchor von Plauen« versehen', NULL, NULL),
(33, 'Einen Brief soll ich schreiben', 'Bruno Heroldt', NULL, NULL, 'Kruzianer, Kürzel K.M.', 'Kopie von Handschrift', NULL, '1957', 'Deutsch', '5x Knabenchor (auch Jugendchor)<br>5x Tenor<br>5x Baß', 'Archiv', 'Kasten 12', 211211, 'Kopien mit dem Stempel vom »Riedelscher Männerchor von Plauen« versehen', NULL, NULL),
(34, 'Abendwolke', 'Bruno Heroldt', NULL, 'Conrad Ferdinand Meyer', 'Kruzianer, Kürzel K.M.', 'Kopie von Handschrift', NULL, '1957', 'Deutsch', '5x Knabenchor (auch Jugendchor)<br>5x Männerchor (Tenor I,II)', 'Archiv', 'Kasten 12', 211212, 'Kopien mit dem Stempel vom »Riedelscher Männerchor von Plauen« versehen', NULL, NULL),
(35, 'Morgenstern-Gesänge', 'Otto Reinhold', NULL, 'Christian Morgenstern', 'Kruzianer', 'Handschrift', NULL, '1949-1960*', 'Deutsch', '17x Sopran<br>10x Alt<br>35x Tenor**<br>43x Baß**', 'Archiv', 'Kasten 12', 201213, '* Die Handschriften sind verschieden datiert. Vermutlich wurde sie zwischen 1949 und 1960 verfasst. \n<br>\n**Sopran und Alt werden aus ganzen Stimmgruppen-Partituren gebildet (Präludium, Kleine Geschichte, Das Häuschen an der Bahn, Abendläuten). Bei Tenor und Baß bildet sich der Bestand aus einzelnen Liedblättern:\n<br>\n- Tenor aus 11x Präludium, 9x Kleine Geschichte, 7x Das Häuschen an der Bahn, 8x Abendläuten\n<br>\n- Baß aus 10x Präludium, 12x Kleine Geschichte, 10x Das Häuschen an der Bahn, 11x Abendläuten', NULL, NULL),
(36, 'Dresdner Requiem', 'Rudolf Mauersberger', NULL, NULL, 'Gunter Groß', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x Kanbenchorpartitur', 'Archiv', 'Kasten 12', 211214, NULL, NULL, NULL),
(37, 'Danket dem Herrn', 'Franz-Meyer Ambros', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x Sopran<br>1x Alt<br>1x Tenor<br>1x Baß', 'Archiv', 'Kasten 12', 211215, NULL, NULL, NULL),
(38, 'Laßt uns lauschen', 'Volksweise', 'U. Schicha', NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x Gesamtchor', 'Archiv', 'Kasten 12', 211216, NULL, NULL, NULL),
(39, 'Dresdner Requiem', 'Rudolf Mauersberger', NULL, NULL, 'Gunter Groß', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x Knabenchor', 'Archiv', 'Kasten 12', 211217, NULL, NULL, NULL),
(40, 'Introitus für den Sonntag Jubilate', NULL, NULL, 'Psalm 66', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211116, 'Psalm 66', NULL, NULL),
(41, 'Liturgische Ergänzung zu den Sonntagen Inovativ, Reminiscere, Okuli und Lätare', NULL, NULL, 'Psalm 143', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211117, NULL, NULL, NULL),
(42, 'Introitus für den letzten Sonntag nach Trinitatis', NULL, NULL, 'Psalm 50', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '5x DIN A5<br>1x DIN A4<br>1x ehemals DIN A4', 'Introitensammlung', 'Kasten 12', 211118, NULL, NULL, NULL),
(43, '25. Sonntag nach Trinitatis (Eingangsliturgie der Kreuzkirche)', 'Rudolf Mauersberger', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x DIN A5', 'Introitensammlung', 'Kasten 11', 211118, NULL, NULL, NULL),
(44, 'Introitus für den vorletzten Sonntag nach Trinitatis', NULL, NULL, 'Psalm 143', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '5x DIN A5<br>1x DIN A4', 'Introitensammlung', 'Kasten 11', 211119, NULL, NULL, NULL),
(45, '24. Sonntag nach Trinitatis (Liturgie der Kreuzkirche)', 'Rudolf Mauersberger', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x DIN A5', 'Introitensammlung', 'Kasten 11', 211120, NULL, NULL, NULL),
(46, 'Introitus für das Reformationsfest', NULL, NULL, 'Psalm 40', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x DIN A5', 'Introitensammlung', 'Kasten 11', 211121, NULL, NULL, NULL),
(47, 'Introitus für den Michaelistag', NULL, NULL, 'Psalm 103, 19-22', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x DIN A5', 'Introitensammlung', 'Kasten 11', 211122, NULL, NULL, NULL),
(48, 'Introitus für den 14. Sonntag nach Trinitatis (Gedenktag der Kirchweih)', NULL, NULL, 'Psalm 84', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x DIN A5', 'Introitensammlung', 'Kasten 11', 211123, NULL, NULL, NULL),
(49, 'Introitus für den 15. Sonntag nach Trinitatis (1. Sonntag nach Michaelis; Erntedankfest)', NULL, NULL, 'Psalm 104', ' Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211124, NULL, NULL, NULL),
(50, 'Introitus for den 24. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 39', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211125, NULL, NULL, NULL),
(51, 'Introitus für den 23. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 138, 2-3', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '3x', 'Introitensammlung', 'Kasten 11', 211126, NULL, NULL, NULL),
(52, 'Introitus für den 22. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 130, 5-8', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211127, NULL, NULL, NULL),
(53, 'Introitus für den 20. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 119', ' Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211128, NULL, NULL, NULL),
(54, 'Introitus für den 19. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 78, 2-4', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211129, NULL, NULL, NULL),
(55, 'Introitus für den 18. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 122', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211130, 'Bemerkung: ersetzt durch Nr. 618 im Evangelischen Kirchengesangbuch', NULL, NULL),
(56, 'Introitus für den 17. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 119', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211131, NULL, NULL, NULL),
(57, 'Introitus für den 16. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 51', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211132, NULL, NULL, NULL),
(58, 'Introitus für den 15. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 86', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211133, NULL, NULL, NULL),
(59, 'Introitus für den 14. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 146', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211134, NULL, NULL, NULL),
(60, 'Introitus für den 13. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 73', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211135, '', NULL, NULL),
(61, 'Introitus für den 12. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 71', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211136, NULL, NULL, NULL),
(62, 'Introitus für den 4. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 27', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211137, NULL, NULL, NULL),
(63, 'Introitus für den 3. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 25, 1, 4, 8, 9', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211138, NULL, NULL, NULL),
(64, 'Introitus für den 2. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 18, 2, 3, 7, 47', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211139, NULL, NULL, NULL),
(65, 'Introitus für den 1. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 13', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211140, NULL, NULL, NULL),
(66, 'Introitus für den 1. Sonntag nach Trinitatis', NULL, NULL, 'Psalm 34', 'Kruzianer', 'Kopie von Handschrift', 'Kruzianer ', NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211141, NULL, NULL, NULL),
(67, 'Introitus für das Trinitatisfest', NULL, NULL, 'Psalm 145', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211142, NULL, NULL, NULL),
(68, 'Introitus für Pfingsten', NULL, NULL, 'Psalm 118', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211143, NULL, NULL, NULL),
(69, 'Introitus für Himmelfahrt', NULL, NULL, 'Psalm 47', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211144, NULL, NULL, NULL),
(70, 'Introitus für den Sonntag Exaudi', NULL, NULL, 'Psalm 27', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211145, NULL, NULL, NULL),
(71, 'Introtius für den Sonntag Rogate', NULL, NULL, 'Psalm 66, 16, 17, 20', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '2x', 'Introitensammlung', 'Kasten 11', 211146, NULL, NULL, NULL),
(72, 'Introitus für den Sonntag Rogate', NULL, NULL, 'Psalm 95', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211147, NULL, NULL, NULL),
(73, 'Introitus für den Sonntag Kantate', NULL, NULL, 'Psalm 98', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211148, NULL, NULL, NULL),
(74, 'Introitus für Quasimodogeniti, Misericordias Domini, Jubilate, Kantate und Rogate', NULL, NULL, 'Psalm 66', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211149, NULL, NULL, NULL),
(75, 'Introitus zum Sonntag Misericordias Domini', NULL, NULL, 'Psalm 23', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211150, NULL, NULL, NULL),
(76, 'Introitus für den Sonntag Quasimodogeniti', NULL, NULL, 'Psalm 116', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211151, NULL, NULL, NULL),
(77, 'Introitus für Ostern', NULL, NULL, 'Psalm 118', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211152, NULL, NULL, NULL),
(78, 'Introitus für den Karfreitag ', NULL, NULL, 'Psalm 22', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211153, NULL, NULL, NULL),
(79, 'Introitus für den Sonntag Palmarum', NULL, NULL, 'Psalm 22', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211154, NULL, NULL, NULL),
(80, 'Introitus für Iudica', NULL, NULL, 'Psalm 102', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211155, NULL, NULL, NULL),
(81, 'Introitus für den Sonntag Laetare', NULL, NULL, 'Psalm 122', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211156, NULL, NULL, NULL),
(82, 'Introitus für den Sonntag Oculi', NULL, NULL, 'Psalm 25', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211157, NULL, NULL, NULL),
(83, 'Introitus für den Sonntag Reminiscere', NULL, NULL, 'Psalm 10', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211158, NULL, NULL, NULL),
(84, 'Introitus für den Sonntag Invokavit', NULL, NULL, 'Psalm 91', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211159, NULL, NULL, NULL),
(85, 'Introitus für Estomihi (und für Septuageimae und Sexagesimae)', NULL, NULL, 'Psalm 31', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211160, NULL, NULL, NULL),
(86, 'Introitus für den Sonntag Sexagesimae', NULL, NULL, 'Psalm 119, 89-90, 105', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211161, NULL, NULL, NULL),
(87, 'Introitus für den Sonntag Septuagesimae', NULL, NULL, 'Psalm 31', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211162, NULL, NULL, NULL),
(88, 'Introitus für die [den letzten] Sonntag[e] nach Epiphanias', NULL, NULL, 'Psalm 97', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211163, NULL, NULL, NULL),
(89, 'Introitus für den 4. Sonntag nach Epiphanias', NULL, NULL, 'Psalm 93', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211164, NULL, NULL, NULL),
(90, 'Introitus für den 3. Sonntag nach Epiphanias', NULL, NULL, 'Psalm 67', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211165, NULL, NULL, NULL),
(91, 'Introitus für den 2. Sonntag nach Epiphanias', NULL, NULL, 'Psalm 105', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211166, NULL, NULL, NULL),
(92, 'Introitus für den 1. Sonntag nach Epiphanias', NULL, NULL, 'Psalm 89', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211167, NULL, NULL, NULL),
(93, 'Introitus für den 25. [drittletzten] Sonntag nach Trinitatis', NULL, NULL, 'Psalm 85', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '5x', 'Introitensammlung', 'Kasten 11', 211168, NULL, NULL, NULL),
(94, 'Gottesdienst - Liturgische Ergänzung', 'Rudolf Mauersberger', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211169, NULL, NULL, NULL),
(95, 'Introitus für Epiphanias und für die Sonntage nach Epiphanias', NULL, NULL, 'Psalm 100', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211170, NULL, NULL, NULL),
(96, 'Introitus für Neujahr', NULL, NULL, 'Psalm 121', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211171, NULL, NULL, NULL),
(97, 'Introitus für den 4. Sonntag im Advent', NULL, NULL, 'Psalm 19 (102)', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211172, NULL, NULL, NULL),
(98, 'Introitus für den 3. Sonntag im Advent', NULL, NULL, 'Psalm 85', 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211173, NULL, NULL, NULL),
(99, 'Introitus für den 2. Sonntag im Advent ', NULL, NULL, 'Psalm 80', 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '6x', 'Introitensammlung', 'Kasten 11', 211174, NULL, NULL, NULL),
(100, 'Adventsintroitus', NULL, NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '1x', 'Introitensammlung', 'Kasten 11', 211175, NULL, NULL, NULL),
(101, 'Tochter Zion', 'Heinrich Peter Freiherr von Herzogenberg', NULL, NULL, 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '22x Sopran I<br>\r\n15x Sopran II <br>\r\n12x Alt <br>\r\n4x Tenor I <br>\r\n3x Tenor II <br>\r\n9x Bass', 'Archiv', 'Kasten 10', 201001, NULL, NULL, NULL),
(102, 'Gesang vom Lernen', 'Hanns Eisler', NULL, 'Johannes Robert Becher', 'Kruzianer', 'Handschrift', NULL, '29.10.1950', 'Deutsch', '42x Partitur (eine Stimmgruppe)', 'Archiv', 'Kasten 10', 201002, NULL, NULL, NULL),
(103, 'Im Frühling', 'Hanns Eisler', NULL, 'Johannes Robert Becher', 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '33x Partitur (eine Stimmgruppe)', 'Archiv', 'Kasten 10', 201003, 'Zusätzlich zu den Handschriften wurde der Notensatz, durch Kopien dieser, vergrößert.', NULL, NULL),
(104, 'Immer Bereit', NULL, NULL, NULL, 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '32x Partitur (einer Stimmgruppe)', 'Archiv', 'Kasten 10', 201004, NULL, NULL, NULL),
(105, 'Beißt das Tor zum Frieden auf', 'h. Harden', NULL, NULL, 'Kruzianer ', 'Handschrift', NULL, NULL, 'Deutsch', '41x Partitur (eine Stimmgruppe)', 'Archiv', 'Kasten 10', 201005, NULL, NULL, NULL),
(106, 'Das Lied der blauen Fahne', 'Hanns Eisler', NULL, 'Johannes Robert Becher', 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '6x Knabenchor<br>\r\n6x Männerchor', 'Archiv', 'Kasten 10', 201006, 'Zusätzlich zu den Handschriften wurde der Notensatz, durch Kopien dieser, vergrößert.', NULL, NULL),
(107, 'Not wird vergehen', 'Walter Rohde', NULL, 'Walther Dehmel', 'Kruzianer', 'Handschrift', NULL, NULL, 'Deutsch', '6x Sopran<br>\r\n6x Alt <br>\r\n6x Tenor <br>\r\n6x Bass', 'Archiv', 'Kasten 10', 201007, 'Zusätzlich zu den Handschriften wurde der Notensatz, durch Kopien dieser, vergrößert.', NULL, NULL),
(108, 'Lied der Jugend 1945', 'Walter Rohde', NULL, NULL, 'Kruzianer ', 'Handschrift', NULL, '1950', 'Deutsch', '31x Knabenchor <br>\r\n15x Männerchor', 'Archiv', 'Kasten 10', 201008, 'komponiert 1945\r\n', NULL, NULL),
(109, 'Herbst', 'Heinrich Schütz', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '2x Sopran I <br>\r\n1x Sopran II <br>\r\n2x Alt <br>\r\n2x Tenor <br>\r\n2x Bass', 'Archiv', 'Kasten 10', 211009, NULL, NULL, NULL),
(110, '"Tornate" (Erntedank)', 'Heinrich Schütz', NULL, NULL, 'Kruzianer', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '3x Knabenchor<br>\r\n3x Männerchor', 'Archiv', 'Kasten 10', 211010, NULL, NULL, NULL),
(111, 'Frühling', 'Heinrich Schütz', NULL, NULL, 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '3x Knabenchor <br>\r\n3x Männerchor', 'Archiv', 'Kasten 10', 211011, NULL, NULL, NULL),
(112, 'Schmetterling', 'Heinrich Schütz', NULL, NULL, 'Kruzianer ', 'Kopie von Handschrift', NULL, NULL, 'Deutsch', '3x Knabenchor <br>\r\n3x Männerchor', 'Archiv', 'Kasten 10', 211012, 'eventuelle Unstimmigkeiten in der Transkription des Titels', NULL, NULL),
(113, 'Das Deutsche Gloria in Excelsis', 'Heinrich Schütz', NULL, NULL, 'Kruzianer ', 'Handschrift', NULL, NULL, 'Deutsch, Latein', '3x Tenor', 'Archiv', 'Kasten 10', 201013, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
