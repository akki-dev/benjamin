-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2020 a las 23:15:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `benjamincoffee`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,0) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`) VALUES
(91, 62, 8, '120', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcon` mediumtext COLLATE utf8_bin NOT NULL,
  `Imagen` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcon`, `Imagen`) VALUES
(1, 'Single Origin (250 gr)', '300.00', 'Our coffee specialist, Max Morgenthaler, had a mission to create a delicious cup of coffee by simply adding water. Max and his team worked hard to find a new way to make instant coffee that retains the natural flavor of coffee.', 'img/co_5.png'),
(2, 'Pacae Bend (250 gr)', '120.00', 'Our coffee specialist, Max Morgenthaler, had a mission to create a delicious cup of coffee by simply adding water. Max and his team worked hard to find a new way to make instant coffee that retains the natural flavor of coffee.', 'img/co_6.png'),
(3, 'Single Origin (500 gr)', '300.00', 'Our coffee specialist, Max Morgenthaler, had a mission to create a delicious cup of coffee by simply adding water. Max and his team worked hard to find a new way to make instant coffee that retains the natural flavor of coffee.', 'img/co_5.png'),
(4, 'Pacae Bend (500 gr)', '120.00', 'Our coffee specialist, Max Morgenthaler, had a mission to create a delicious cup of coffee by simply adding water. Max and his team worked hard to find a new way to make instant coffee that retains the natural flavor of coffee.', 'img/co_6.png'),
(5, 'Single Origin (1 kg)', '300.00', 'Our coffee specialist, Max Morgenthaler, had a mission to create a delicious cup of coffee by simply adding water. Max and his team worked hard to find a new way to make instant coffee that retains the natural flavor of coffee.', 'img/co_5.png'),
(6, 'Pacae Bend (1 kg)', '120.00', 'Our coffee specialist, Max Morgenthaler, had a mission to create a delicious cup of coffee by simply adding water. Max and his team worked hard to find a new way to make instant coffee that retains the natural flavor of coffee.', 'img/co_6.png'),
(7, 'Single Origin (1.5 kg)', '300.00', 'Our coffee specialist, Max Morgenthaler, had a mission to create a delicious cup of coffee by simply adding water. Max and his team worked hard to find a new way to make instant coffee that retains the natural flavor of coffee.', 'img/co_5.png'),
(8, 'Pacae Bend (1.5 kg)', '120.00', 'Our coffee specialist, Max Morgenthaler, had a mission to create a delicious cup of coffee by simply adding water. Max and his team worked hard to find a new way to make instant coffee that retains the natural flavor of coffee.', 'img/co_6.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblstate`
--

CREATE TABLE `tblstate` (
  `idState` int(11) NOT NULL,
  `state` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblstate`
--

INSERT INTO `tblstate` (`idState`, `state`) VALUES
(1, 'Australian Capital Territory'),
(2, 'New South Wales'),
(3, 'Northern Territory'),
(4, 'Queensland'),
(5, 'South Australia'),
(6, 'Tasmania'),
(7, 'Victoria'),
(8, 'Western Australia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) COLLATE utf8_bin NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(500) COLLATE utf8_bin NOT NULL,
  `Total` decimal(60,0) NOT NULL,
  `status` varchar(200) COLLATE utf8_bin NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(200) COLLATE utf8_bin NOT NULL,
  `country` varchar(200) COLLATE utf8_bin NOT NULL,
  `addressA` varchar(200) COLLATE utf8_bin NOT NULL,
  `city` varchar(200) COLLATE utf8_bin NOT NULL,
  `state` varchar(200) COLLATE utf8_bin NOT NULL,
  `postcode` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone` varchar(200) COLLATE utf8_bin NOT NULL,
  `addressD` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `Fecha`, `Correo`, `Total`, `status`, `name`, `lastname`, `country`, `addressA`, `city`, `state`, `postcode`, `phone`, `addressD`) VALUES
(62, '5aam4mkd4ncdu1bql2mo5kgh38', '2020-05-01 15:17:57', 'gohanje9815@gmail.com', '120', 'pendiente', 'Gohan Sanchez', 'PAPARASSI', 'Perú', 'Mz E lt 5', 'Lima', 'Northern Territory', '1151', '912037540', ' ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`idState`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `idState` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
