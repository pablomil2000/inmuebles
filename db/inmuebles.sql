-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 11:10:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmuebles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Abierto` tinyint(1) NOT NULL DEFAULT 0,
  `asunto` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `tel`, `email`, `fecha`, `Abierto`, `asunto`, `text`) VALUES
(1, 'Pablo', 'Martin lopez', '676688670', 'martinlopezpablo@gmail.com', '2023-10-28 18:01:14', 1, 'Necesito ayuda', 'Ayuda'),
(2, 'Pablo', 'Martin lopez', '676688670', 'martinlopezpablo@gmail.com', '2023-10-30 10:22:03', 0, 'asd', 'adf'),
(3, 'Pablo', 'Martin lopez', '676688670', 'martinlopezpablo@gmail.com', '2023-10-30 10:22:27', 0, 'sdg', 'sdfhg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `habitacion_id` int(11) NOT NULL,
  `destacada` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `name`, `habitacion_id`, `destacada`) VALUES
(1, 'DGEPOmEXtZ.png', 72, 1),
(2, 'CP1HsEhYVT.png', 73, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `text_intro` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `precio` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT 1,
  `inmueble_id` int(11) NOT NULL,
  `doble` tinyint(1) NOT NULL DEFAULT 0,
  `banio` tinyint(1) NOT NULL DEFAULT 0,
  `terraza` tinyint(1) NOT NULL DEFAULT 0,
  `calefaccion` tinyint(1) NOT NULL DEFAULT 0,
  `piscina` tinyint(1) NOT NULL DEFAULT 0,
  `ascensor` tinyint(1) NOT NULL DEFAULT 1,
  `mixto` tinyint(1) NOT NULL DEFAULT 0,
  `piso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id`, `nombre`, `text_intro`, `text`, `precio`, `disponible`, `inmueble_id`, `doble`, `banio`, `terraza`, `calefaccion`, `piscina`, `ascensor`, `mixto`, `piso`) VALUES
(72, 'h1', 'h1', 'h1\r\n                        ', 123, 1, 42, 0, 0, 0, 0, 1, 1, 1, 0),
(73, 'h2', 'habitacion 2 en rivas', 'Una habitación en Rivas\r\n                        ', 123, 1, 42, 0, 0, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL DEFAULT 'default.png',
  `precio` int(11) DEFAULT 0,
  `disponible` tinyint(1) NOT NULL DEFAULT 1,
  `localizacion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `nombre`, `imagen`, `precio`, `disponible`, `localizacion_id`) VALUES
(42, 'inmueble1', 'xieIzDYT3O.png', 0, 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizacion`
--

CREATE TABLE `localizacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `localizacion`
--

INSERT INTO `localizacion` (`id`, `nombre`) VALUES
(0, 'Sin ubicacion'),
(11, 'Rivas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newclient`
--

CREATE TABLE `newclient` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Abierto` tinyint(1) NOT NULL DEFAULT 0,
  `asunto` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `lastLogin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `activo`, `lastLogin`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 1, '2023-10-30 23:00:00'),
(2, 'Pablo', 'e4b0da8a66b7dd2154d92df97da1c6cea8d421519b0a300df2be329e423f9675e39f6240733a7534df30ade501af974fb267e6e6a2768af68e55a3b47a31bf1b', 1, '2023-10-31 08:29:49'),
(3, 'Habbo', 'fedcf30c0121e25e7e55e4a9328069829550b11db10ea86b26dae51c00e4d2a3c774e2e9ab9b3a5b2272eb8be9823744eedb9e9532bc1a90c974e7a4e8f4979c', 1, '2023-10-31 08:29:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localizacion`
--
ALTER TABLE `localizacion`
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
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
