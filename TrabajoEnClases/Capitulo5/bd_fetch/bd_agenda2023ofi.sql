-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 04:34:11
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
-- Base de datos: `bd_agenda2023ofi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `fotografia` varchar(35) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `celular` int(11) NOT NULL,
  `idprofesion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `fotografia`, `nombres`, `apellidos`, `celular`, `idprofesion`) VALUES
(1, '644064d4aafff.jpg', 'Juan ', 'Perez Gomez', 68771354, 3),
(5, '646aa8dbe6804.jpeg', 'Adrian ', 'Romero ', 12312312, 1),
(6, '646aa90aa1ed8.jpg', 'Cristopher', 'Edisson', 989, 1),
(9, '644062ce7d327.png', 'Et mollit accusantiu', 'Cillum nulla odio qu', 38, 2),
(10, '646a7bdb1a26b.jpeg', 'Mollit exercitation ', 'Accusantium anim lor', 69, 2),
(16, '646aa310ca188.jpg', 'Enim ut commodi tota', 'Nostrud non est imp', 73, 2),
(17, '646aa2db6d139.png', 'Vel voluptas ratione', 'Culpa consequat Ut', 14, 1),
(19, '646aa4eb4ddef.jpeg', 'Lulu', 'Nostrum reiciendis s', 21341341, 3),
(20, '646aa9acee126.png', 'Marcos', 'Sempertegui ', 7987825, 2),
(21, '646aa9c2a7604.jpg', 'Perferendis tenetur ', 'Sed quia fuga Atque', 57, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesiones`
--

CREATE TABLE `profesiones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesiones`
--

INSERT INTO `profesiones` (`id`, `nombre`) VALUES
(1, 'Ingeniero de Sistemas'),
(2, 'Ingeniero en Ciencias de la Computación'),
(3, 'Abogado'),
(4, 'Medico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nivel` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `correo`, `contrasena`, `nivel`) VALUES
(1, 'admin', 'admin@sis256.tk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(2, 'Usuario', 'usuario@sis256.tk', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesiones`
--
ALTER TABLE `profesiones`
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
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `profesiones`
--
ALTER TABLE `profesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
