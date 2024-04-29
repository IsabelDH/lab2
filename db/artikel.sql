-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 28 apr 2024 om 22:28
-- Serverversie: 5.7.24
-- PHP-versie: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `naam` varchar(300) NOT NULL,
  `inhoud` varchar(600) NOT NULL,
  `datum` date DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `favoriet` tinyint(1) DEFAULT '0',
  `thema` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `artikel`
--

INSERT INTO `artikel` (`id`, `naam`, `inhoud`, `datum`, `foto`, `favoriet`, `thema`) VALUES
(1, 'Invoering elektronische procesvoering voor het Grondwettelijk Hof', 'De ministerraad keurt een ontwerp van koninklijk besluit goed voor de eerste fase van elektronische procesvoering bij het Grondwettelijk Hof, waarbij verzoekschriften en stukken elektronisch kunnen worden ingediend via een platform op de website van het Hof.', '2024-03-29', NULL, 0, ''),
(2, 'Federale verkiezingen', 'Jouw stem telt. Met die drie woorden zullen heel wat politieke partijen jou proberen te overtuigen om op hen te stemmen bij de verkiezingen van 9 juni. Eens iedereen gestemd heeft, worden de stemmen omgezet in zetels. In het federaal parlement zijn er bijvoorbeeld 150 zetels, in het Vlaams 124, in het Brussels 89.', '2024-04-06', NULL, 0, ''),
(3, 'Europese verkiezingen', 'Op 9 juni 2024 worden 150 leden van de Kamer van Volksvertegenwoordigers verkozen in elf kieskringen, één per provincie en de kieskring Brussel-Hoofdstad. De 60 leden van de Senaat worden niet rechtstreeks gekozen, maar via de deelstaatparlementen. Deze verkiezingen markeren het begin van de 56ste zittingsperiode van het Federaal Parlement van België.', '2024-04-06', NULL, 0, ''),
(4, 'Begroting ', '', NULL, NULL, 0, ''),
(5, 'De pensioenhervorming is gestemd', '', NULL, NULL, 0, ''),
(6, 'Faillissement Van Hool', '', NULL, NULL, 0, ''),
(7, 'Betaalbare psychologische zorg', '', NULL, NULL, 0, ''),
(8, 'De jungle van de medische platformen', '', NULL, NULL, 0, ''),
(9, 'Duurzaamheid in jouw huis', '', NULL, NULL, 0, ''),
(10, 'Oprichting van de Wetenschappelijke Klimaatraad', '', NULL, NULL, 0, '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
