-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2024 at 12:46 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

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
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `naam` varchar(300) NOT NULL,
  `inhoud` varchar(600) NOT NULL,
  `datum` varchar(10) DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `favoriet` tinyint(1) DEFAULT '0',
  `thema` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `naam`, `inhoud`, `datum`, `foto`, `favoriet`, `thema`, `link`) VALUES
(1, 'Invoering elektronische procesvoering voor het Grondwettelijk Hof', 'De ministerraad keurt een ontwerp van koninklijk besluit goed voor de eerste fase van elektronische procesvoering bij het Grondwettelijk Hof, waarbij verzoekschriften en stukken elektronisch kunnen worden ingediend via een platform op de website van het Hof.', '29-03-2024', 'image1Politiek.png', 0, 'politiek', ''),
(2, 'Verkiezingen', 'Jouw stem telt. Met die drie woorden zullen heel wat politieke partijen jou proberen te overtuigen om op hen te stemmen bij de verkiezingen van 9 juni. Eens iedereen gestemd heeft, worden de stemmen omgezet in zetels. In het federaal parlement zijn er bijvoorbeeld 150 zetels, in het Vlaams 124, in het Brussels 89.', '06-04-2024', 'image2politiek.png', 1, 'politiek', 'Verkiezingen.php'),
(3, 'Europese verkiezingen', 'Op 9 juni 2024 worden 150 leden van de Kamer van Volksvertegenwoordigers verkozen in elf kieskringen, één per provincie en de kieskring Brussel-Hoofdstad. De 60 leden van de Senaat worden niet rechtstreeks gekozen, maar via de deelstaatparlementen. Deze verkiezingen markeren het begin van de 56ste zittingsperiode van het Federaal Parlement van België.', '06-04-2024', 'image3Politiek.png', 0, 'politiek', ''),
(4, 'Begroting ', 'België sluit 2023 af met een begrotingstekort dat 6,5 miljard euro kleiner is dan gevreesd, vooral dankzij een sterkere economische groei, maar het tekort blijft nog steeds oplopen in vergelijking met voorgaande jaren.', '04-02-2024', 'imageEconomie1.png', 1, 'economie', 'begroting.php'),
(5, 'De pensioenhervorming is gestemd', 'RSVZ en de Pensioendienst lanceren proactieve campagne voor pensioenbonus met slogan \'En jij, hoeveel doe jij erbij?\'', '05-04-2024', 'imageEconomie2.png', 0, 'economie', ''),
(6, 'Faillissement Van Hool', 'Faillissement van busbouwer Van Hool dreigt Vlaanderen 18 tot 20 miljoen euro te kosten.', '02-04-2024', 'imageEconomie3.png', 0, 'economie', ''),
(7, 'Betaalbare psychologische zorg', 'Toegankelijke psychologische zorg: een stap naar welzijn voor iedereen.', '09-03-2024', 'imageGzondheid1.png', 0, 'gezondheid', ''),
(8, 'De jungle van de medische platformen', 'Ontdek de weg naar jouw medische gegevens - helder, veilig en eenvoudig.', '11-04-2024', 'imageGezondheid2.png', 0, 'gezondheid', ''),
(9, 'Duurzaamheid in jouw huis', 'Maak van je (ver)bouwproject een klimaatvriendelijke missie met deze tips voor duurzame keuzes en praktische oplossingen.', '22-04-2024', 'imageklimaat1.png', 1, 'klimaat', ''),
(10, 'Oprichting van de Wetenschappelijke Klimaatraad', 'Het ontwerp van koninklijk besluit introduceert een onafhankelijke Wetenschappelijke Klimaatraad voor evaluatie en opvolging van het federale klimaatbeleid, met bevoegdheid tot deskundigenraadpleging en onderzoeksrichtlijnen.', '05-04-2024', 'imageKlimaat2.png', 0, 'klimaat', '');

-- --------------------------------------------------------

--
-- Table structure for table `favorieten`
--

CREATE TABLE `favorieten` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artikel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profiel_foto` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `profiel_foto`) VALUES
(1, 'Hannelore', 'Van Buynderen', 'hannelorevb@hotmail.be', '$2y$10$rsL2iOt/juVigXfwdTddMOvLO5EllvtMlrFECc0Zq/7eGU17E5DfO', 'profile_picture_leeg.png'),
(2, 'Hannelore', 'Van Buynderen', 'hannelorevb@hotmail.be', '$2y$10$jONLgGT/E9eKq4LT58XP2uJlirIBu/QOzN8D.uvUDkMey5MLVxs5i', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorieten`
--
ALTER TABLE `favorieten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `artikel_id` (`artikel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorieten`
--
ALTER TABLE `favorieten`
  ADD CONSTRAINT `favorieten_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favorieten_ibfk_2` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
