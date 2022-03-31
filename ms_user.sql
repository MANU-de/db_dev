-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 31. Mrz 2022 um 12:11
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `ms_user`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gerichte`
--

CREATE TABLE `gerichte` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `beschreibung` text DEFAULT NULL,
  `kategorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gerichte`
--

INSERT INTO `gerichte` (`id`, `name`, `beschreibung`, `kategorie_id`) VALUES
(1, 'Rosmarienkartoffeln', 'Im Ofen gebackene Kartoffeln am besten mit frischen Rosmarien', 4),
(3, 'Lasagne', 'Vegetarische Lasagne mit Mozarella', 5),
(4, 'Zucchiniboote', 'Gefüllte Zucchinihälften im Ofen gebacken', 6);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorien`
--

CREATE TABLE `kategorien` (
  `kategorie_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `kategorien`
--

INSERT INTO `kategorien` (`kategorie_id`, `name`) VALUES
(4, 'Beilage'),
(5, 'Hauptgericht'),
(6, 'Hauptgericht');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gerichte`
--
ALTER TABLE `gerichte`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kategorien`
--
ALTER TABLE `kategorien`
  ADD PRIMARY KEY (`kategorie_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gerichte`
--
ALTER TABLE `gerichte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `kategorien`
--
ALTER TABLE `kategorien`
  MODIFY `kategorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
