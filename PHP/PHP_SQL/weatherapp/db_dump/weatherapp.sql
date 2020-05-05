-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 10 apr 2019 om 12:03
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weatherapp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `weather`
--

CREATE TABLE `weather` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `high` int(11) NOT NULL,
  `low` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `weather`
--

INSERT INTO `weather` (`id`, `city`, `high`, `low`, `created_at`) VALUES
(1, 'Brussels', 26, 12, '2019-04-08 16:20:13'),
(2, 'Liege', 25, 14, '2019-04-08 16:20:13'),
(3, 'Namur', 26, 15, '2019-04-08 16:20:13'),
(4, 'Charleroi', 25, 12, '2019-04-08 16:20:13'),
(5, 'Bruges', 28, 16, '2019-04-08 16:20:13'),
(6, 'Maastricht', 16, 9, '2019-04-09 16:26:13'),
(7, 'Geleen', 12, 3, '2019-04-10 09:27:44'),
(9, 'Elsloo', 12, 5, '2019-04-10 09:34:56'),
(10, 'Beek', 25, 15, '2019-04-10 10:18:28');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `weather`
--
ALTER TABLE `weather`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `weather`
--
ALTER TABLE `weather`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
