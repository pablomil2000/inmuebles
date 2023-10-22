-- phpMyAdmin SQL Dump

-- version 5.2.1

-- https://www.phpmyadmin.net/

--

-- Servidor: 127.0.0.1

-- Tiempo de generación: 18-10-2023 a las 17:43:09

-- Versión del servidor: 10.4.28-MariaDB

-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Base de datos: `inmuebles`

--

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `contacto`

--

CREATE TABLE
    `contacto` (
        `id` int(11) NOT NULL,
        `nombre` varchar(250) NOT NULL,
        `apellido` varchar(250) NOT NULL,
        `tel` varchar(10) NOT NULL,
        `email` varchar(100) NOT NULL,
        `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        `Abierto` tinyint(1) NOT NULL DEFAULT 0,
        `asunto` varchar(200) NOT NULL,
        `text` text NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `galeria`

--

CREATE TABLE
    `galeria` (
        `id` int(11) NOT NULL,
        `name` varchar(250) NOT NULL,
        `habitacion_id` int(11) NOT NULL,
        `destacada` tinyint(1) NOT NULL DEFAULT 0
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `habitaciones`

--

CREATE TABLE
    `habitaciones` (
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
        `piscina` tinyint(1) NOT NULL DEFAULT 0
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `inmuebles`

--

CREATE TABLE
    `inmuebles` (
        `id` int(11) NOT NULL,
        `nombre` varchar(250) NOT NULL,
        `imagen` varchar(250) NOT NULL DEFAULT 'default.png',
        `localizacion_id` int(11) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `localizacion`

--

CREATE TABLE
    `localizacion` (
        `id` int(11) NOT NULL,
        `nombre` varchar(250) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Volcado de datos para la tabla `localizacion`

--

INSERT INTO
    `localizacion` (`id`, `nombre`)
VALUES (0, 'Sin ubicacion');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `usuarios`

--

CREATE TABLE
    `usuarios` (
        `id` int(11) NOT NULL,
        `nombre` varchar(250) NOT NULL,
        `password` varchar(250) NOT NULL,
        `activo` tinyint(1) NOT NULL DEFAULT 1,
        `lastLogin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Volcado de datos para la tabla `usuarios`

--

INSERT INTO
    `usuarios` (
        `id`,
        `nombre`,
        `password`,
        `activo`,
        `lastLogin`
    )
VALUES (
        1,
        'admin',
        'admin',
        1,
        '2023-10-17 22:00:00'
    );

--

-- Índices para tablas volcadas

--

--

-- Indices de la tabla `contacto`

--

ALTER TABLE `contacto` ADD PRIMARY KEY (`id`);

--

-- Indices de la tabla `galeria`

--

ALTER TABLE `galeria` ADD PRIMARY KEY (`id`);

--

-- Indices de la tabla `habitaciones`

--

ALTER TABLE `habitaciones` ADD PRIMARY KEY (`id`);

--

-- Indices de la tabla `inmuebles`

--

ALTER TABLE `inmuebles` ADD PRIMARY KEY (`id`);

--

-- Indices de la tabla `localizacion`

--

ALTER TABLE `localizacion` ADD PRIMARY KEY (`id`);

--

-- Indices de la tabla `usuarios`

--

ALTER TABLE `usuarios` ADD PRIMARY KEY (`id`);

--

-- AUTO_INCREMENT de las tablas volcadas

--

--

-- AUTO_INCREMENT de la tabla `contacto`

--

ALTER TABLE `contacto` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT de la tabla `galeria`

--

ALTER TABLE `galeria` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT de la tabla `habitaciones`

--

ALTER TABLE
    `habitaciones` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

--

-- AUTO_INCREMENT de la tabla `inmuebles`

--

ALTER TABLE
    `inmuebles` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

--

-- AUTO_INCREMENT de la tabla `localizacion`

--

ALTER TABLE
    `localizacion` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

--

-- AUTO_INCREMENT de la tabla `usuarios`

--

ALTER TABLE
    `usuarios` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;