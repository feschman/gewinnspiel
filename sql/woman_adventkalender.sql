-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: nnw-db1.news.at
-- Erstellungszeit: 07. Dez 2017 um 10:21
-- Server Version: 5.5.55-0+deb8u1
-- PHP-Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `www_gewinnspiel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `woman_adventkalender`
--

CREATE TABLE IF NOT EXISTS `woman_adventkalender` (
`id` int(11) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `Geburtsdatum` varchar(200) NOT NULL,
  `geschlecht` varchar(200) NOT NULL,
  `addresse` varchar(200) NOT NULL,
  `hausnummer` varchar(200) NOT NULL,
  `plz` varchar(200) NOT NULL,
  `ort` varchar(200) NOT NULL,
  `mobil-telefon` varchar(200) NOT NULL,
  `e-mail` varchar(200) NOT NULL,
  `agb` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `woman_adventkalender`
--
ALTER TABLE `woman_adventkalender`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `woman_adventkalender`
--
ALTER TABLE `woman_adventkalender`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
