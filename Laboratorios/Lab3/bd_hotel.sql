--Administrador Password=123
--Recepcionista Password=456
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2023 a las 07:04:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_habitaciones`
--

CREATE TABLE `fotos_habitaciones` (
  `id` int(11) NOT NULL,
  `id_habitacion` int(11) NOT NULL,
  `fotografia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id` int(11) NOT NULL,
  `nro` int(11) NOT NULL,
  `idtipohabitacion` int(11) NOT NULL,
  `bonoprivado` bit(1) NOT NULL,
  `espacio` decimal(7,2) NOT NULL,
  `precio` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id`, `nro`, `idtipohabitacion`, `bonoprivado`, `espacio`, `precio`) VALUES
(1, 255, 2, b'0', '255.00', '255.00'),
(5, 1, 2, b'0', '25.50', '155.50'),
(6, 255, 1, b'1', '338.00', '336.00'),
(7, 5, 1, b'1', '36.00', '239.00'),
(9, 36, 2, b'1', '10.00', '10.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `codigoreserva` varchar(5) NOT NULL,
  `fechaingreso` date NOT NULL,
  `fechasalida` date NOT NULL,
  `idhabitacion` int(11) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `pagada` bit(1) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `correoelectronico` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Recepcionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitaciones`
--

CREATE TABLE `tipo_habitaciones` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(70) NOT NULL,
  `numero_camas` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_habitaciones`
--

INSERT INTO `tipo_habitaciones` (`id`, `descripcion`, `numero_camas`) VALUES
(1, 'Simple', 1),
(2, 'Doble', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `idrol` int(11) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `nombres`, `apellidos`, `idrol`, `estado`) VALUES
(1, 'admin@sis256.tk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Miguel Angel', 'Aceituno Avalos', 1, 'A'),
(2, 'recep@sis256.tk', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 'Jesus Renterias', 'Renterias Mendez', 2, 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos_habitaciones`
--
ALTER TABLE `fotos_habitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_habitaciones`
--
ALTER TABLE `tipo_habitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos_habitaciones`
--
ALTER TABLE `fotos_habitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_habitaciones`
--
ALTER TABLE `tipo_habitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
