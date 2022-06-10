-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-02-2022 a las 20:12:16
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
-- Base de datos: `agencia`
--
CREATE DATABASE IF NOT EXISTS `agencia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agencia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
CREATE TABLE IF NOT EXISTS `candidatos` (
  `id_candidato` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `curriculum` int(11) NOT NULL,
  PRIMARY KEY (`id_candidato`),
  KEY `fk_curriculum` (`curriculum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_notificacion`
--

DROP TABLE IF EXISTS `categoria_notificacion`;
CREATE TABLE IF NOT EXISTS `categoria_notificacion` (
  `id_cate_noti` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(30) NOT NULL,
  `notificacion` int(11) NOT NULL,
  PRIMARY KEY (`id_cate_noti`),
  KEY `fk_categoria_notificacion` (`categoria`),
  KEY `fk_notificacion` (`notificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculums`
--

DROP TABLE IF EXISTS `curriculums`;
CREATE TABLE IF NOT EXISTS `curriculums` (
  `id_curriculum` int(11) NOT NULL AUTO_INCREMENT,
  `formacion` varchar(50) NOT NULL,
  `experiencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_curriculum`),
  KEY `fk_experiencia` (`experiencia`),
  KEY `fk_formacion` (`formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deseables`
--

DROP TABLE IF EXISTS `deseables`;
CREATE TABLE IF NOT EXISTS `deseables` (
  `requisito` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`requisito`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias_profesionales`
--

DROP TABLE IF EXISTS `experiencias_profesionales`;
CREATE TABLE IF NOT EXISTS `experiencias_profesionales` (
  `id_experiencia` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(30) NOT NULL,
  `puesto` varchar(30) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizacion` date NOT NULL,
  `descripcion_responsabilidades` text NOT NULL,
  PRIMARY KEY (`id_experiencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaciones_academicas`
--

DROP TABLE IF EXISTS `formaciones_academicas`;
CREATE TABLE IF NOT EXISTS `formaciones_academicas` (
  `titulo` varchar(50) NOT NULL,
  `meritos` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `institucion` varchar(30) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  PRIMARY KEY (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscribe`
--

DROP TABLE IF EXISTS `inscribe`;
CREATE TABLE IF NOT EXISTS `inscribe` (
  `id_inscribe` int(11) NOT NULL AUTO_INCREMENT,
  `candidato` int(11) DEFAULT NULL,
  `oferta` int(11) NOT NULL,
  PRIMARY KEY (`id_inscribe`),
  KEY `fk_candidato_inscribe` (`candidato`),
  KEY `fk_oferta_inscribe` (`oferta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `minimos`
--

DROP TABLE IF EXISTS `minimos`;
CREATE TABLE IF NOT EXISTS `minimos` (
  `requisito` int(11) NOT NULL,
  `idiomas` varchar(30) NOT NULL,
  `nivel_estudio` varchar(30) NOT NULL,
  `experiencia_previa` varchar(30) NOT NULL,
  PRIMARY KEY (`requisito`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

DROP TABLE IF EXISTS `notificaciones`;
CREATE TABLE IF NOT EXISTS `notificaciones` (
  `id_notificacion` int(11) NOT NULL AUTO_INCREMENT,
  `candidato` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notificacion`),
  KEY `fk_candidato` (`candidato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas_empleo`
--

DROP TABLE IF EXISTS `ofertas_empleo`;
CREATE TABLE IF NOT EXISTS `ofertas_empleo` (
  `id_oferta` int(11) NOT NULL AUTO_INCREMENT,
  `num_vacantes` int(30) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text NOT NULL,
  `salario` double NOT NULL,
  `jornada` varchar(30) NOT NULL,
  `duracion_contrato` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `poblacion` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  PRIMARY KEY (`id_oferta`),
  UNIQUE KEY `empresa` (`empresa`),
  KEY `fk_categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos`
--

DROP TABLE IF EXISTS `requisitos`;
CREATE TABLE IF NOT EXISTS `requisitos` (
  `id_requisito` int(11) NOT NULL AUTO_INCREMENT,
  `vacante` int(11) NOT NULL,
  PRIMARY KEY (`id_requisito`),
  KEY `fk_vacante` (`vacante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

DROP TABLE IF EXISTS `subcategorias`;
CREATE TABLE IF NOT EXISTS `subcategorias` (
  `nombre` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`nombre`),
  KEY `fk_categoria_sub` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD CONSTRAINT `fk_curriculum` FOREIGN KEY (`curriculum`) REFERENCES `curriculums` (`id_curriculum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categoria_notificacion`
--
ALTER TABLE `categoria_notificacion`
  ADD CONSTRAINT `fk_categoria_notificacion` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_notificacion` FOREIGN KEY (`notificacion`) REFERENCES `notificaciones` (`id_notificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `curriculums`
--
ALTER TABLE `curriculums`
  ADD CONSTRAINT `fk_experiencia` FOREIGN KEY (`experiencia`) REFERENCES `experiencias_profesionales` (`id_experiencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_formacion` FOREIGN KEY (`formacion`) REFERENCES `formaciones_academicas` (`titulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `deseables`
--
ALTER TABLE `deseables`
  ADD CONSTRAINT `fk_requisito_deseable` FOREIGN KEY (`requisito`) REFERENCES `requisitos` (`id_requisito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscribe`
--
ALTER TABLE `inscribe`
  ADD CONSTRAINT `fk_candidato_inscribe` FOREIGN KEY (`candidato`) REFERENCES `candidatos` (`id_candidato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_oferta_inscribe` FOREIGN KEY (`oferta`) REFERENCES `ofertas_empleo` (`id_oferta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `minimos`
--
ALTER TABLE `minimos`
  ADD CONSTRAINT `fk_requisito_minimo` FOREIGN KEY (`requisito`) REFERENCES `requisitos` (`id_requisito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `fk_candidato` FOREIGN KEY (`candidato`) REFERENCES `candidatos` (`id_candidato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ofertas_empleo`
--
ALTER TABLE `ofertas_empleo`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD CONSTRAINT `fk_vacante` FOREIGN KEY (`vacante`) REFERENCES `ofertas_empleo` (`id_oferta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `fk_categoria_sub` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
