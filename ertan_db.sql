-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 04 jan 2021 om 12:57
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ertan_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `crud_auto`
--

CREATE TABLE `crud_auto` (
  `AutoID` int(10) NOT NULL,
  `KlantID` int(10) NOT NULL,
  `Kenteken` varchar(10) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Bouwjaar` int(10) NOT NULL,
  `Brandstof` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `crud_auto`
--

INSERT INTO `crud_auto` (`AutoID`, `KlantID`, `Kenteken`, `Merk`, `Model`, `Bouwjaar`, `Brandstof`) VALUES
(1, 1, 'N2-SS-DF', 'BMW', 'i5', 2018, 'Hybrid'),
(1, 1, 'N2-SS-DF', 'BMW', 'i5', 2018, 'Hybrid'),
(2, 2, 'HDH-2C-3', 'Mercedes Benz', 'CLS 450', 2019, 'Benzine'),
(3, 3, 'SS-B22-3', 'Cadilac', 'Escalade', 2017, 'Benzine'),
(4, 4, 'HD-C34-1', 'Audi', 'RS6', 2015, 'Benzine'),
(5, 5, 'HHS-23-1', 'Tesla', 'Model S', 2020, 'Elektrisch'),
(6, 6, 'NXL-42-1', 'Chevrolet', 'Lecetti', 2004, 'Benzine');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE `klanten` (
  `ID` int(11) NOT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL,
  `adres` varchar(45) DEFAULT NULL,
  `telefoon` char(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `autoid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `klanten`
--

INSERT INTO `klanten` (`ID`, `voornaam`, `achternaam`, `adres`, `telefoon`, `email`, `autoid`) VALUES
(1, 'Joe', 'Boeler', '3074 SM', '0654101010', 'joeboeler@gmail.com', 1),
(2, 'Micheal', 'Myers', '3032 SD', '0655443321', 'michealmyers@outlook.com', 2),
(3, 'David', 'Boeler', '3074 SM', '0634659867', 'davidboeler@hotmail.com', 3),
(4, 'Jordan', 'Belfort', '4053 ZM', '0653124254', 'jbelfort@stratonoak.com', 4),
(6, 'Henk', 'Dijkhuizen', '3044 ZT', '0654329012', 'henkdijkhuzen2349@gmail.com', 6),
(7, 'Maikel', 'Pinnen', '3073 TP', '0654106565', 'MaikelP@outlook.com', 7),
(8, 'Danny', 'Housen', '3034 DM', '0654106565', 'DannyH@outlook.com', 8),
(9, 'Trevor', 'Shores', '3044 DS', '0634567890', 'TrevorS@outlook.com', 9),
(10, 'Allure', 'Monroe', '3075 ZM', '0654106565', 'alurre@gmail.com', 10),
(11, 'Maik', 'Demison', '3303 TS', '0609876543', 'maikdemi@outlook.com', 11);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
