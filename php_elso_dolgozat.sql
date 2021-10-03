-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2021. Okt 03. 17:10
-- Kiszolgáló verziója: 5.7.31
-- PHP verzió: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `php_elso_dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tomegkozlekedesi_eszkozok`
--

DROP TABLE IF EXISTS `tomegkozlekedesi_eszkozok`;
CREATE TABLE IF NOT EXISTS `tomegkozlekedesi_eszkozok` (
  `Rendszam` char(7) COLLATE utf8_hungarian_ci NOT NULL,
  `Gyarto` varchar(20) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Vizsgaztatva` enum('on','') COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Tipus` varchar(20) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Uzembehelyezes` date DEFAULT NULL,
  `Ulohely` int(11) DEFAULT NULL,
  PRIMARY KEY (`Rendszam`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `tomegkozlekedesi_eszkozok`
--

INSERT INTO `tomegkozlekedesi_eszkozok` (`Rendszam`, `Gyarto`, `Vizsgaztatva`, `Tipus`, `Uzembehelyezes`, `Ulohely`) VALUES
('RGG-344', 'Volvo', 'on', 'autobusz', '2020-11-11', 53),
('IGV-800', 'Ikarus', NULL, 'autobusz', '1988-10-10', 45),
('IKK-670', 'Ikarus', NULL, 'autobusz', '1996-02-10', 45),
('DFG-000', 'Volvo', 'on', 'Troli', '2000-10-22', 56),
('BBN-700', 'Combino', NULL, 'Villamos', '2007-12-12', 230),
('HHH-444', 'Ikarus', 'on', 'Troli', '2001-01-02', 44),
('ITK-999', 'Skoda', 'on', 'Troli', '2007-01-02', 55),
('RGG-340', 'Volvo', NULL, 'autobusz', '2019-02-01', 56),
('IKV-900', 'Skoda', NULL, 'autobusz', '2021-10-22', 54),
('ISS-007', 'Skoda', NULL, 'Troli', '2020-11-11', 56),
('UUU-444', 'Volvo', NULL, 'Troli', '2000-10-22', 44),
('UUU-440', 'Volvo', NULL, 'autobusz', '2000-10-22', 44),
('HHI-440', 'Skoda', NULL, 'autobusz', '2000-10-22', 56),
('UUU-000', 'Skoda', 'on', 'Troli', '2019-02-01', 56);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
