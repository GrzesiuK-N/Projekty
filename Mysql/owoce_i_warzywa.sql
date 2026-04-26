-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2025 at 02:19 PM
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
-- Database: `owoce_i_warzywa`
--
CREATE DATABASE IF NOT EXISTS `owoce_i_warzywa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `owoce_i_warzywa`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towar`
--

CREATE TABLE `towar` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cena_za_kg` float NOT NULL,
  `masa` float NOT NULL,
  `nazwa` varchar(200) NOT NULL,
  `opis` text NOT NULL,
  `kraj_pochodzenia` varchar(200) NOT NULL,
  `data_zbioru` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `towar`
--

INSERT INTO `towar` (`cena_za_kg`, `masa`, `nazwa`, `opis`, `kraj_pochodzenia`, `data_zbioru`) VALUES
(1.98, 100, 'ziemniaki', 'ziemniak myty najwyższej jakości z krajowej uprawy', 'Polska', '2025-10-01');

INSERT INTO `towar` (`cena_za_kg`, `masa`, `nazwa`, `opis`, `kraj_pochodzenia`, `data_zbioru`) VALUES
(4.50, 50, 'jabłka', 'Soczyste jabłka odmiany Ligol', 'Polska', '2025-09-15'),
(6.20, 30, 'gruszki', 'Dojrzałe gruszki konferencja', 'Polska', '2025-09-20'),
(3.80, 40, 'marchew', 'Słodka marchew ekologiczna', 'Polska', '2025-10-05'),
(12.50, 10, 'winogrona', 'Winogrona ciemne bezpestkowe', 'Włochy', '2025-08-30'),
(9.90, 8, 'borówki', 'Borówki amerykańskie premium', 'Hiszpania', '2025-06-25'),
(7.40, 25, 'pomarańcze', 'Duże soczyste pomarańcze', 'Hiszpania', '2025-11-01'),
(5.10, 60, 'cebula', 'Cebula żółta, odmiana długotrwała', 'Polska', '2025-09-28'),
(14.30, 12, 'cytryny', 'Świeże cytryny bez woskowania', 'Grecja', '2025-10-12'),
(8.80, 20, 'papryka czerwona', 'Papryka słodka klasy premium', 'Holandia', '2025-10-18'),
(11.20, 15, 'pomidor malinowy', 'Aromatyczny pomidor malinowy', 'Polska', '2025-09-05'),
(4.90, 45, 'buraki', 'Buraki ćwikłowe prosto z pola', 'Polska', '2025-10-02'),
(3.40, 70, 'kapusta biała', 'Kapusta świeża, idealna do kiszenia', 'Polska', '2025-09-14'),
(22.00, 5, 'awokado', 'Awokado Hass dojrzałe do spożycia', 'Peru', '2025-10-25'),
(16.50, 7, 'kiwi', 'Kiwi zielone, słodko-kwaśne', 'Nowa Zelandia', '2025-09-30'),
(5.90, 35, 'cukinia', 'Cukinia młoda, delikatna', 'Polska', '2025-08-22'),
(18.90, 6, 'maliny', 'Maliny deserowe najwyższej jakości', 'Polska', '2025-07-10'),
(4.20, 55, 'ogórki gruntowe', 'Ogórki świeże, chrupiące', 'Polska', '2025-08-15'),
(10.40, 18, 'bakłażan', 'Bakłażan o głębokim kolorze i gładkiej skórce', 'Turcja', '2025-10-03'),
(24.90, 4, 'truskawki', 'Truskawki słodkie, aromatyczne', 'Polska', '2025-06-05'),
(6.80, 22, 'sałata rzymska', 'Świeża sałata rzymska, chrupiące liście', 'Włochy', '2025-10-08');
--

