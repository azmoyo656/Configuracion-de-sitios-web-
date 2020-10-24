-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2020 a las 06:10:17
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrarvisita`
--

CREATE TABLE `registrarvisita` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrarvisita`
--

INSERT INTO `registrarvisita` (`id`, `nombre`) VALUES
(1, 'asdasd'),
(2, 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrousuarios`
--

CREATE TABLE `registrousuarios` (
  `id_usuario` int(11) NOT NULL,
  `perfil` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `email_encriptado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `departament` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `verificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registrousuarios`
--

INSERT INTO `registrousuarios` (`id_usuario`, `perfil`, `nombre`, `email`, `password`, `email_encriptado`, `foto`, `departament`, `fecharegistro`, `token`, `verificacion`) VALUES
(1, 'Admin', 'luis fernando rendon leal', 'luisrendon@usc.edu.co', '$2a$07$asxx54ahjppf45sd87a5auSUMgagkWHShLOJ0oP1Qx7v/.pKgEE/y', '7cb6a822db50e2938e606c987f34f492', NULL, 's', '2020-10-05 03:19:05', '3e64f3c201c28cdba41ccd7f21e63bd7', 1),
(2, 'usuario', 'casa', 'casa@usc.edu.co', '$2a$07$asxx54ahjppf45sd87a5auLz17S3S48CYbTDIpzD09SFAjU6/dAzW', 'c24e2257765dced4bb5e3fca78a1ef31', NULL, 's', '2020-10-04 21:26:54', 'a1c3ecc902940cd5a2b8e187efbc4b91', 1),
(3, 'usuario', 'sss', 'ss@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auLz17S3S48CYbTDIpzD09SFAjU6/dAzW', '3607fb2767dfcda89bc936ee8086839e', NULL, '32423234', '2020-10-05 03:26:07', '4684eca4fbf03708dc1b54f6df30f7e0', 1),
(4, 'usuario', 'asdad', 'luisrendon@usc.edu.co', '$2a$07$asxx54ahjppf45sd87a5auSUMgagkWHShLOJ0oP1Qx7v/.pKgEE/y', '7cb6a822db50e2938e606c987f34f492', NULL, '', '2020-10-18 04:16:29', 'd3da43684ee0b0a16d04408070d01c0d', 1),
(5, 'usuario', 'asdasd', 'luisrendon1@usc.edu.co', '$2a$07$asxx54ahjppf45sd87a5auSUMgagkWHShLOJ0oP1Qx7v/.pKgEE/y', 'b7bb600c4d541048848aa9b23a9731a6', NULL, '', '2020-10-18 04:17:21', '16ae7deeec2245a17237d5ddbedef050', 1),
(6, 'usuario', 'sdsdfsdfs', 'luisrendon4@usc.edu.co', '$2a$07$asxx54ahjppf45sd87a5auSUMgagkWHShLOJ0oP1Qx7v/.pKgEE/y', 'a7384170bb8b0ce4e7784bed6fc90636', NULL, '', '2020-10-18 04:31:01', '3ea03305292671c33b996e5ed604478e', 1),
(7, 'visitante', 'carlos mejia lopez', 'carlos@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auLz17S3S48CYbTDIpzD09SFAjU6/dAzW', 'db1e0a3750e0399df3eeee808187d9b4', NULL, '', '2020-10-18 17:07:23', '4c59f5c38d68425536d41817336c15cc', 1),
(8, 'visitante', 'carlos mejia lopez', 'carlos123@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auLz17S3S48CYbTDIpzD09SFAjU6/dAzW', '7da999b629932f81a4356e36f6971cbf', NULL, '', '2020-10-24 02:34:48', '0036e419f315ff15e29fbe9559fe3534', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `bloque` text NOT NULL,
  `piso` text NOT NULL,
  `apartamento` text NOT NULL,
  `fechaderegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idusuario` text NOT NULL,
  `seleccionhora` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `visita`
--

INSERT INTO `visita` (`id`, `nombre`, `bloque`, `piso`, `apartamento`, `fechaderegistro`, `idusuario`, `seleccionhora`) VALUES
(2, 'sfsdf', '2', '4', '234', '2020-10-18 19:14:59', '', '4:39 PM'),
(3, 'carlos mejia lopez', '2', '3', '234', '2020-10-18 19:18:28', '', '4:39 PM'),
(4, 'carlos mejia lopez', '3', '4', '3456', '2020-10-18 19:19:15', '', '5:19 PM'),
(5, 'luis fernando rendon leal', '3', '4', '302', '2020-10-18 19:25:03', '', '4:39 PM'),
(6, 'luis fernando rendon leal', '1', '3', '3536', '2020-10-24 01:05:59', '', '4:39 PM'),
(7, 'carlos mejia lopez', '2', '3', '3065', '2020-10-24 02:36:23', '', '4:39 PM'),
(8, 'carlos mejia lopez', '2', '3', '125', '2020-10-24 02:52:46', '8', '2:47 PM'),
(9, 'luis fernando rendon leal', '2', '4', '412', '2020-10-24 02:54:16', '1', '4:39 PM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrarvisita`
--
ALTER TABLE `registrarvisita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrousuarios`
--
ALTER TABLE `registrousuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrarvisita`
--
ALTER TABLE `registrarvisita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registrousuarios`
--
ALTER TABLE `registrousuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
