-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 dec 2020 om 23:57
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
(5, 'Sandy', 'Richardson', '4012 ZM', '0653134346', 'sandy12434@gmail.com', 5),
(6, 'Henk', 'Dijkhuizen', '3044 ZT', '0654329012', 'henkdijkhuzen2349@gmail.com', 6);

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
