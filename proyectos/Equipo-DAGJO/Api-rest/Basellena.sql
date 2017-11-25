-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2017 a las 11:41:46
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`Id`, `Nombre`) VALUES
(1, 'CANCUN'),
(2, 'PLAYA DEL CARMEN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Descripcion` varchar(500) DEFAULT NULL,
  `IdSitioWeb` int(11) NOT NULL,
  `IdTipoEvento` int(11) NOT NULL,
  `IdCiudad` int(11) NOT NULL,
  `Ubicacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`Id`, `Nombre`, `Fecha`, `Descripcion`, `IdSitioWeb`, `IdTipoEvento`, `IdCiudad`, `Ubicacion`) VALUES
(1, 'Exposicion de obras de arte', '2017-11-27', 'Se llevara a cabo en la casa de la cultura una exposicion de distintas pinturas hechas por alguien muy reconocido.', 1, 1, 1, 'Av wallmart detras de suburvia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `Id` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdEventos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`Id`, `IdUsuario`, `IdEventos`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitioweb`
--

CREATE TABLE `sitioweb` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Pagina` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sitioweb`
--

INSERT INTO `sitioweb` (`Id`, `Nombre`, `Pagina`) VALUES
(1, 'Casa de la cultura', 'www.casitacultura.com'),
(2, '8 de Octubre', 'www.8october.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoevento`
--

CREATE TABLE `tipoevento` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoevento`
--

INSERT INTO `tipoevento` (`Id`, `Nombre`) VALUES
(1, 'CULTURALES'),
(2, 'MUSICALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Usuario` varchar(26) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nombre`, `Apellidos`, `Usuario`, `Password`, `Correo`) VALUES
(1, 'Julio', 'Profe Sor', 'ProfeJul', '1234', 'jp777@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`Id`,`IdSitioWeb`,`IdTipoEvento`,`IdCiudad`),
  ADD KEY `fk_Eventos_Sitioweb1_idx` (`IdSitioWeb`),
  ADD KEY `fk_Eventos_TipoEvento1_idx` (`IdTipoEvento`),
  ADD KEY `fk_Eventos_Ciudad1_idx` (`IdCiudad`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`Id`,`IdUsuario`,`IdEventos`),
  ADD KEY `fk_Favoritos_Usuario_idx` (`IdUsuario`),
  ADD KEY `fk_Favoritos_Eventos1_idx` (`IdEventos`);

--
-- Indices de la tabla `sitioweb`
--
ALTER TABLE `sitioweb`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipoevento`
--
ALTER TABLE `tipoevento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_Eventos_Ciudad1` FOREIGN KEY (`IdCiudad`) REFERENCES `ciudad` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Eventos_Sitioweb1` FOREIGN KEY (`IdSitioWeb`) REFERENCES `sitioweb` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Eventos_TipoEvento1` FOREIGN KEY (`IdTipoEvento`) REFERENCES `tipoevento` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `fk_Favoritos_Eventos1` FOREIGN KEY (`IdEventos`) REFERENCES `eventos` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Favoritos_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
