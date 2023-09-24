-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 31. Aug 2023 um 13:14
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kontakt`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_form`
--

CREATE TABLE `contact_form` (
  `Zeit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Name` varchar(25) NOT NULL,
  `Email` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `contact_form`
--

INSERT INTO `contact_form` (`Zeit`, `Name`, `Email`, `Phone`, `Message`) VALUES
('2023-08-31 10:48:00', '0', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:51:25', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:51:28', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:51:55', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:52:38', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:52:42', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:54:43', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:54:44', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:55:54', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:57:14', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:58:19', 'Pesche', 'pesche@pesche.ch', 1213134545, 'Hallo Buddys ich war hier'),
('2023-08-31 10:59:11', 'test', 'test@test.ch', 13856955, 'hello, ich war hier du nicht, dann bin ich wieder weg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
