-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2026 at 01:03 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemia`
--
CREATE DATABASE IF NOT EXISTS `chemia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chemia`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pierwiastki`
--

DROP TABLE IF EXISTS `pierwiastki`;
CREATE TABLE IF NOT EXISTS `pierwiastki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `symbol` varchar(3) NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `nazwa_d` varchar(100) NOT NULL,
  `stopien` int(11) NOT NULL,
  `czy_elektrododatni` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pierwiastki`
--

INSERT INTO `pierwiastki` (`id`, `symbol`, `nazwa`, `nazwa_d`, `stopien`, `czy_elektrododatni`) VALUES
(1, 'Na', 'sód', 'sodu', 1, 1),
(2, 'Cl', 'chlor', 'chloru', 1, 1),
(3, 'Cl', 'chlor', 'chloru', 4, 1),
(4, 'Mg', 'magnez', 'magnezu', 2, 1),
(5, 'Al', 'glin', 'glinu', 3, 1),
(6, 'Fe', 'żelazo', 'żelaza', 3, 1),
(7, 'N', 'azot', 'azotu', 1, 1),
(8, 'N', 'azot', 'azotu', 2, 1),
(9, 'N', 'azot', 'azotu', 3, 1),
(10, 'N', 'azot', 'azotu', 4, 1),
(11, 'N', 'azot', 'azotu', 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
