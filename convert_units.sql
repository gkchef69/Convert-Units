-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 23 Απρ 2023 στις 15:59:59
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `convert_units`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item` varchar(50) DEFAULT NULL,
  `kg` float DEFAULT NULL,
  `grams` float DEFAULT NULL,
  `oz` float DEFAULT NULL,
  `liter` float DEFAULT NULL,
  `milliliters` float DEFAULT NULL,
  `tablespoons` float DEFAULT NULL,
  `teaspoons` float DEFAULT NULL,
  `cups` float DEFAULT NULL,
  `glasses` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `items`
--

INSERT INTO `items` (`id`, `item`, `kg`, `grams`, `oz`, `liter`, `milliliters`, `tablespoons`, `teaspoons`, `cups`, `glasses`) VALUES
(29, 'Dominic Guy', 1, 1000, 35.274, 66, 16, 54, 30, 38, 34),
(30, 'Julian Good', 1, 1000, 35.274, 9, 45, 29, 6, 84, 12),
(31, 'Aaron Rivas', 1, 1000, 35.274, 34, 99, 73, 24, 83, 94),
(32, 'Brandon Mccall', 1, 1000, 35.274, 62, 31, 74, 51, 23, 75),
(33, 'Scarlett Booker', 1, 1000, 35.274, 64, 84, 59, 56, 86, 80),
(34, 'Astra Avery', 1, 1000, 35.274, 88, 69, 46, 69, 85, 19),
(35, 'Alan Stout', 1, 1000, 35.274, 75, 1, 18, 60, 28, 81),
(36, 'Fallon Strickland', 1, 1000, 35.274, 91, 69, 74, 34, 78, 5),
(37, 'Adam Foley', 1, 1000, 35.274, 14, 78, 8, 30, 11, 14);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item` (`item`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
