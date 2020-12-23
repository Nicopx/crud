-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-12-2020 a las 15:34:25
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `persona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ID`, `Nombre`, `Apellido`, `Mail`) VALUES
(8, 'adaaw', 'a4adas', 'adas@aaaa'),
(2, ' Elva4', ' Gallo3', ' galloe4lva@gmail.com'),
(3, ' Elmo', ' Squito', ' elmosqui@gmail.com'),
(4, ' Cosmea', ' Fulanitoa', ' fulano@gmail.com'),
(5, ' Homero', ' Simpson', ' homeroS@gmail.com'),
(7, 'adasdasa2', 'dasdasda', 'adasdasdasd2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
