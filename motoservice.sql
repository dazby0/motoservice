-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Kwi 2023, 23:11
-- Wersja serwera: 10.4.10-MariaDB
-- Wersja PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `motoservice`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `img_src` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `services`
--

INSERT INTO `services` (`id`, `img_src`, `title`, `description`, `price`) VALUES
(1, 'https://images.unsplash.com/photo-1636761358954-cebc0e5dfebb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bW90byUyMHJlcGFpcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60', 'Podstawowy przegląd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur dapibus tortor sit amet tristique. Praesent tempor ex at vulputate.', 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'adam123', '$2y$10$fDAFNlYo8uuV3lF1F/4moejKe/ewxXjvx1XvYBEaeTifATkdoQNBi'),
(2, 'adam', '$2y$10$RV44a50IfFSOwwf3Y9aQs.1VwBMpTIjkNqybpr2wRHuiM9Ofz9V/m'),
(3, 'adas123', '$2y$10$HGGP/D7e8njqEPP8dYkN4.nsRdrmx9GWj36it6dASC6hy1VPLFTo6');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
