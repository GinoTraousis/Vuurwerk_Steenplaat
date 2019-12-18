-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 dec 2019 om 11:32
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuurwerkshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `Naam` varchar(35) NOT NULL,
  `Prijs` double(5,2) NOT NULL,
  `Categorie` varchar(20) NOT NULL,
  `Voorraad` int(3) NOT NULL,
  `URL_Afbeelding` varchar(400) NOT NULL,
  `Geleverd(in dagen)` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`Naam`, `Prijs`, `Categorie`, `Voorraad`, `URL_Afbeelding`, `Geleverd(in dagen)`) VALUES
('Thunder Rotjes', 2.00, 'Knalvuurwerk', 60, 'ThunderRotjes.jpg', 5),
('Bazooka Knallers', 10.00, 'Knalvuurwerk', 20, 'Bazooka.jpg', 3),
('Flying Dragon Kanonslag', 1.99, 'Knalvuurwerk', 100, 'Dragon.jpg', 5),
('B2B Grondbloem', 2.99, 'Siervuurwerk', 30, 'Grondbloem.jpg', 2),
('B2B Knetterballen', 4.99, 'Siervuurwerk', 20, 'Knetterballen.jpg', 2),
('Ratelband', 1.50, 'Siervuurwerk', 100, 'Ratelband.jpg', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
