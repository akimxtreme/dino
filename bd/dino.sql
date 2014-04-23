-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-04-2014 a las 17:54:24
-- Versión del servidor: 5.5.35-0ubuntu0.13.10.2
-- Versión de PHP: 5.5.3-1ubuntu2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_amigable` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `nomb_img_mini` varchar(100) NOT NULL,
  `ruta_img_mini` varchar(100) NOT NULL,
  `nomb_img_ppal` varchar(100) NOT NULL,
  `ruta_img_ppal` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_amigable` (`url_amigable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Categoria de Recetas y Videos' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente`
--

CREATE TABLE IF NOT EXISTS `ingrediente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `ingrediente` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Ingredientes de una Receta' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE IF NOT EXISTS `receta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_amigable` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `preparacion` varchar(600) NOT NULL,
  `nomb_img_mini` varchar(50) NOT NULL,
  `ruta_img_mini` varchar(100) NOT NULL,
  `nomb_img_ppal` varchar(50) NOT NULL,
  `ruta_img_ppal` varchar(100) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `hora_publicacion` date NOT NULL,
  `slider` tinyint(1) NOT NULL,
  `video` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_amigable` (`url_amigable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Recetas agregadas' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta_video`
--

CREATE TABLE IF NOT EXISTS `receta_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `receta_video` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Receta asociada a un video y viceversa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `nomb_img` varchar(100) NOT NULL,
  `ruta_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Sliders agregados' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_amigable` varchar(200) NOT NULL,
  `url_youtube` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `nomb_img_mini` varchar(50) NOT NULL,
  `ruta_img_mini` varchar(100) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `hora_publicacion` date NOT NULL,
  `receta` tinyint(1) NOT NULL,
  `slider` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_amigable` (`url_amigable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Videos agregados' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
