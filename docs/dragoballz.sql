-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-10-2023 a las 14:55:21
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dragonballz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

DROP TABLE IF EXISTS `personajes`;
CREATE TABLE IF NOT EXISTS `personajes` (
  `idpersonajes` int(11) NOT NULL AUTO_INCREMENT,
  `personajes` varchar(128) NOT NULL,
  `Raza` varchar(128) NOT NULL,
  `Poderes` varchar(128) NOT NULL,
  `Categoria` varchar(128) NOT NULL,
  PRIMARY KEY (`idpersonajes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`idpersonajes`, `personajes`, `Raza`, `Poderes`, `Categoria`) VALUES
(1, 'Goku', 'Supersayayin', 'Kameha\r\nKenkidama\r\nsupersayayin', 'Bueno'),
(2, 'Freezer', 'Could', 'Gold freezer', 'Malo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
