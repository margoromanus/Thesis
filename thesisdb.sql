-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 02 okt 2019 om 15:13
-- Serverversie: 8.0.17
-- PHP-versie: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesisdb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebouwen`
--

CREATE TABLE `gebouwen` (
  `id` int(11) NOT NULL,
  `gebouwnaam` varchar(128) NOT NULL,
  `architect` varchar(128) NOT NULL,
  `modelnaam` varchar(128) NOT NULL,
  `beschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebouwen`
--

INSERT INTO `gebouwen` (`id`, `gebouwnaam`, `architect`, `modelnaam`, `beschrijving`) VALUES
(1, 'Philips Pavilioen', 'Le Corbusier', 'scene.gltf', 'Dit is ooit eens gebouwd'),
(2, 'etrimo', 'Een brusselaar', 'etrimo.gltf', 'Etrimos hebben nood aan vernieuwing'),
(3, 'Spacestation', 'Jelle Vermandere', 'spacestation.gltf', 'Een optopping van het rectoraat.'),
(4, 'Woning Lampens', 'Juliaan Lampens', 'lampens.gltf', 'Een woning van lampens');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebouwen`
--
ALTER TABLE `gebouwen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebouwen`
--
ALTER TABLE `gebouwen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
