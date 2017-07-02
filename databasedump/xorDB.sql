-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 02. Jul 2017 um 23:43
-- Server-Version: 10.1.22-MariaDB
-- PHP-Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `xor`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `question`
--

CREATE TABLE `question` (
  `questionID` int(11) NOT NULL,
  `questionName` varchar(255) NOT NULL,
  `answerA` varchar(100) NOT NULL,
  `answerB` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `question`
--

INSERT INTO `question` (`questionID`, `questionName`, `answerA`, `answerB`) VALUES
(1, 'Having lunch at ...', 'Schl&ouml;gl', 'H&ouml;rtnagel'),
(2, 'For party and drinks...', 'Schenke', 'Pure'),
(3, 'What to drink...', 'Beer', 'Wine'),
(4, 'What to drink...', 'Gin', 'Vodka'),
(5, 'If you are bored, you get a...', 'Dog', 'Cat'),
(6, 'You are...', 'Apple-User', 'Microsoft-User'),
(7, 'Our earth is...', 'Flat', 'A ball'),
(8, 'If you have the choice either to study or to clean you apartment, which TV-Show would you watch?', 'Modern Family', 'Game of Thrones'),
(9, 'Which app is your first choice?', 'Snapchat', 'Instagram'),
(10, 'On a powder day you go...', 'Snowboarding', 'Skiing');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `userquestion`
--

CREATE TABLE `userquestion` (
  `selection` int(1) NOT NULL,
  `usersID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionID`);

--
-- Indizes für die Tabelle `userquestion`
--
ALTER TABLE `userquestion`
  ADD KEY `usersID` (`usersID`),
  ADD KEY `questionID` (`questionID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `question`
--
ALTER TABLE `question`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `userquestion`
--
ALTER TABLE `userquestion`
  ADD CONSTRAINT `userquestion_ibfk_1` FOREIGN KEY (`usersID`) REFERENCES `users` (`usersID`),
  ADD CONSTRAINT `userquestion_ibfk_2` FOREIGN KEY (`questionID`) REFERENCES `question` (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
