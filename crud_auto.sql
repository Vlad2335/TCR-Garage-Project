-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 dec 2020 om 20:45
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
