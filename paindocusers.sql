-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2023 a las 15:55:40
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paindocdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paindocusers`
--

CREATE TABLE `paindocusers` (
  `ID` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paindocusers`
--

INSERT INTO `paindocusers` (`ID`, `name`, `birthDate`) VALUES
(1, 'Edwin Sebna Albarrán García', '2000-12-27'),
(2, 'Jimena Sanchez Guerrero', '2000-02-02'),
(3, 'Alexa Marianne Albarran Garcia', '2000-12-27'),
(4, 'Edwin Sebna Albarrán García', '2000-12-27'),
(5, 'Jimena Sanchez Guerrero', '2000-02-02'),
(6, 'Jimena Sanchez Guerrero', '2000-02-02'),
(7, 'Selim Mohamed', '1997-12-07'),
(8, '', '0000-00-00'),
(9, 'Jimena Sanchez Guerrero', '2000-02-02'),
(10, 'Jimena Sanchez Guerrero', '2000-02-02'),
(11, 'Jimena Sanchez Guerrero', '2000-02-02'),
(12, 'Jimena Sanchez Guerrero', '2000-02-02'),
(13, 'Edwin Sebna Albarrán García', '2000-12-27'),
(14, 'Jimena Sanchez Guerrero', '2000-02-02'),
(15, 'Edwin Sebna Albarrán García', '2000-12-27'),
(16, 'Edwin Sebna Albarrán García', '2000-12-27'),
(17, 'Jimena Sanchez Guerrero', '2000-02-02'),
(18, 'Edwin Sebna Albarrán García', '2000-12-27'),
(19, 'Jimena Sanchez Guerrero', '2000-02-02'),
(20, 'Claudia Berenice ', '1974-05-16'),
(21, 'Alexa Marianne Albarrán García', '2005-10-21'),
(22, 'Jimena Sanchez Guerrero', '2000-02-02'),
(23, 'Edwin Sebna Albarrán García', '2000-12-27'),
(24, 'Edwin Sebna Albarrán García', '2000-12-27'),
(25, 'Jimena Sanchez Guerrero', '2000-02-02'),
(26, 'Alexa Marianne Albarrán García', '2005-10-21'),
(27, 'Edwin Sebna Albarrán García', '2000-12-27'),
(28, 'Jimena Sanchez Guerrero', '2000-02-02'),
(29, 'Edwin Sebna Albarrán García', '2000-02-02'),
(30, 'Jimena Sanchez Guerrero', '2000-02-02'),
(31, 'Jimena Sanchez Guerrero', '2000-02-02'),
(32, 'Jimena Sanchez Guerrero', '2000-02-02'),
(33, 'Alexa Marianne Albarrán García', '2000-02-02'),
(34, 'Alexa Marianne Albarrán García', '2000-02-02'),
(35, 'Edwin Sebna Albarrán García', '2000-12-27'),
(36, 'Alexa Marianne Albarrán García', '2005-10-21'),
(37, 'Claudia Berenice', '1974-05-16'),
(38, 'Edwin Sebna Albarrán García', '2000-12-27'),
(39, 'Jimena Sanchez Guerrero', '2000-02-02'),
(40, 'Jimena Sanchez Guerrero', '2000-02-02'),
(41, 'Edwin Sebna Albarrán García', '2000-12-27'),
(42, 'Edwin Sebna Albarrán García', '2000-12-27'),
(43, 'Jimena Sanchez Guerrero', '2000-02-02'),
(44, 'Alexa Marianne Albarrán García', '2005-10-21'),
(45, 'Jimena Sanchez Guerrero', '2000-02-02'),
(46, 'Edwin Sebna Albarrán García', '2000-12-27'),
(47, 'Claudia Berenice', '1974-05-16'),
(48, 'Alexa Marianne Albarrán García', '2005-10-21'),
(49, 'Jimena Sanchez Guerrero', '2000-02-02'),
(50, 'Edwin Sebna Albarrán García', '2000-12-27'),
(51, 'Jimena Sanchez Guerrero', '2000-02-02'),
(52, 'Jimena Sanchez Guerrero', '2000-02-02'),
(53, 'Alexa Marianne Albarrán García', '2005-10-21'),
(54, 'Edwin Sebna Albarrán García', '2000-12-27'),
(55, 'Alexa Marianne Albarrán García', '2005-10-21'),
(56, 'Jimena Sanchez Guerrero', '2000-02-02'),
(57, 'Irmgard Müller', '1974-04-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paindocusers`
--
ALTER TABLE `paindocusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paindocusers`
--
ALTER TABLE `paindocusers`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
