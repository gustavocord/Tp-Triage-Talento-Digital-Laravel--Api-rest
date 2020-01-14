-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2020 a las 14:01:39
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `administracion_urgencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_de_urgencia`
--

CREATE TABLE `nivel_de_urgencia` (
  `id` int(11) UNSIGNED NOT NULL,
  `color` varchar(30) NOT NULL,
  `tipo_de_urgencia` varchar(50) NOT NULL,
  `tiempo_de_espera_maximo` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivel_de_urgencia`
--

INSERT INTO `nivel_de_urgencia` (`id`, `color`, `tipo_de_urgencia`, `tiempo_de_espera_maximo`, `deleted_at`) VALUES
(1, 'rojo', 'resusitacion', 0, NULL),
(2, 'naranja', 'emergencia', 12, '2019-11-18 21:54:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) UNSIGNED NOT NULL,
  `descripcion_estado` varchar(300) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date DEFAULT NULL,
  `nivel_de_urgencia_id` int(11) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `edad`, `descripcion_estado`, `fecha_ingreso`, `fecha_egreso`, `nivel_de_urgencia_id`, `deleted_at`) VALUES
(1, 'gustavo javier', 'cordoba', 25, 'mejora positiva', '2019-11-19', '2019-11-18', 1, NULL),
(2, 'esteban javier', 'molina', 25, 'tiene fiebre', '2019-11-19', NULL, 2, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nivel_de_urgencia`
--
ALTER TABLE `nivel_de_urgencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nivel_de_urgencia_id` (`nivel_de_urgencia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nivel_de_urgencia`
--
ALTER TABLE `nivel_de_urgencia`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`nivel_de_urgencia_id`) REFERENCES `nivel_de_urgencia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
