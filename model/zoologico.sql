-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-02-2022 a las 20:11:54
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
-- Base de datos: `zoologico`
--
CREATE DATABASE IF NOT EXISTS `zoologico` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zoologico`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atiende`
--

DROP TABLE IF EXISTS `atiende`;
CREATE TABLE IF NOT EXISTS `atiende` (
  `id_atiende` int(11) NOT NULL AUTO_INCREMENT,
  `especie` int(11) NOT NULL,
  `cuidador` int(11) NOT NULL,
  `fecha_encargo` date NOT NULL,
  PRIMARY KEY (`id_atiende`),
  KEY `fk_cuidador` (`cuidador`),
  KEY `fk_especie` (`especie`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuidadores`
--

DROP TABLE IF EXISTS `cuidadores`;
CREATE TABLE IF NOT EXISTS `cuidadores` (
  `id_cuidador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cuidador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies`
--

DROP TABLE IF EXISTS `especies`;
CREATE TABLE IF NOT EXISTS `especies` (
  `id_especie` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cientifico` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `nombre_espa` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `zona` int(11) NOT NULL,
  PRIMARY KEY (`id_especie`),
  KEY `fk_zona` (`zona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guias`
--

DROP TABLE IF EXISTS `guias`;
CREATE TABLE IF NOT EXISTS `guias` (
  `id_guia` int(11) NOT NULL AUTO_INCREMENT,
  `num_visit_max` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numero` varchar(30) NOT NULL,
  PRIMARY KEY (`id_guia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitats`
--

DROP TABLE IF EXISTS `habitats`;
CREATE TABLE IF NOT EXISTS `habitats` (
  `id_habitat` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `clima` varchar(30) NOT NULL,
  `vegetacion` varchar(30) NOT NULL,
  `continentes` varchar(30) NOT NULL,
  PRIMARY KEY (`id_habitat`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itinerarios`
--

DROP TABLE IF EXISTS `itinerarios`;
CREATE TABLE IF NOT EXISTS `itinerarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `num_especies_visit` int(30) NOT NULL,
  `longitud` int(30) NOT NULL,
  `duracion` time NOT NULL,
  `visitantes_autorizados_max` int(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lleva`
--

DROP TABLE IF EXISTS `lleva`;
CREATE TABLE IF NOT EXISTS `lleva` (
  `id_lleva` int(11) NOT NULL AUTO_INCREMENT,
  `itinerario` int(11) NOT NULL,
  `guia` int(11) NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id_lleva`),
  KEY `fk_itinerario` (`itinerario`),
  KEY `fk_guia` (`guia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorre`
--

DROP TABLE IF EXISTS `recorre`;
CREATE TABLE IF NOT EXISTS `recorre` (
  `id_recorre` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(11) NOT NULL,
  `itinerario` int(11) NOT NULL,
  PRIMARY KEY (`id_recorre`),
  KEY `fk_zona_itinerario` (`zona`),
  KEY `fk_itinerario_zona` (`itinerario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vive`
--

DROP TABLE IF EXISTS `vive`;
CREATE TABLE IF NOT EXISTS `vive` (
  `id_vive` int(11) NOT NULL AUTO_INCREMENT,
  `especie` int(11) NOT NULL,
  `habitat` int(11) NOT NULL,
  PRIMARY KEY (`id_vive`),
  KEY `fk_especie` (`especie`) USING BTREE,
  KEY `fk_habitat` (`habitat`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

DROP TABLE IF EXISTS `zonas`;
CREATE TABLE IF NOT EXISTS `zonas` (
  `id_zona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `extension` int(11) NOT NULL,
  PRIMARY KEY (`id_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atiende`
--
ALTER TABLE `atiende`
  ADD CONSTRAINT `fk_cuidador` FOREIGN KEY (`cuidador`) REFERENCES `cuidadores` (`id_cuidador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_especie_atiende` FOREIGN KEY (`especie`) REFERENCES `especies` (`id_especie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `especies`
--
ALTER TABLE `especies`
  ADD CONSTRAINT `fk_zona` FOREIGN KEY (`zona`) REFERENCES `zonas` (`id_zona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lleva`
--
ALTER TABLE `lleva`
  ADD CONSTRAINT `fk_guia` FOREIGN KEY (`guia`) REFERENCES `guias` (`id_guia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_itinerario` FOREIGN KEY (`itinerario`) REFERENCES `itinerarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recorre`
--
ALTER TABLE `recorre`
  ADD CONSTRAINT `fk_itinerario_zona` FOREIGN KEY (`itinerario`) REFERENCES `itinerarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_zona_itinerario` FOREIGN KEY (`zona`) REFERENCES `zonas` (`id_zona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vive`
--
ALTER TABLE `vive`
  ADD CONSTRAINT `fk_especie` FOREIGN KEY (`especie`) REFERENCES `especies` (`id_especie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_habitat` FOREIGN KEY (`habitat`) REFERENCES `habitats` (`id_habitat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
