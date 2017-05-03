-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2017 a las 16:30:35
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `imss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE IF NOT EXISTS `cita` (
  `id` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(20) NOT NULL,
  `apepat` varchar(15) NOT NULL,
  `apemat` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contra` varchar(30) NOT NULL,
  `afiliacion` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apepat`, `apemat`, `correo`, `contra`, `afiliacion`) VALUES
(1, 'Hector Eduardo', 'Martinez', 'Alcantara', 'hector12x13@gmail.com', '3334723132', 1111111),
(2, 'Diego Issac', 'Cardenas', 'Aranda', 'a01227808@itesm.mx', 'contrasuno', 222222),
(3, 'Oscar Alejandro', 'Sierra', 'Valdez', 'a01632767@itesm.mx', 'contrasdos', 333333),
(4, 'Cesar', 'Reyes', 'Fernandez', 'Cesar@itesm.mx', 'soyjotillo', 444444),
(7, 'Isaac', 'De la Cruz', 'Lopez', 'a01633223@itesm.mx', 'Di322$25', 777777),
(9, 'Jose Angel', 'Mendoza', 'Sandoval', 'angel@gmail.com', '', 9999999);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
