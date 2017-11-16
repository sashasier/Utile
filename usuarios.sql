-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 18:24:55
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `utile_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `avatar_id` int(10) UNSIGNED DEFAULT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `estado_civil` int(10) UNSIGNED DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `nombre`, `apellido`, `email`, `password`, `avatar_id`, `fecha_nacimiento`, `estado_civil`, `created_at`, `updated_at`) VALUES
(1, 'nicolas', 'Nicolas', NULL, 'nicolasriccardi_94@hotmail.com', '$2y$10$lBIglxwuz1EjrGHS1FuNqeDldM3gZzdIOKZD3YG7hyH.aN1c4277y', NULL, '0000-00-00 00:00:00', 0, '2017-11-07 15:13:37', '0000-00-00 00:00:00'),
(2, 'Gustavo', 'Gustavo', NULL, 'gustavo@mail.com', '$2y$10$yvqMjNhKcNB5LUhylXwEPOcAjdYu/0N4ukU6iawaANfoVQEKfbp22', NULL, '0000-00-00 00:00:00', 0, '2017-11-07 15:13:37', '0000-00-00 00:00:00'),
(3, 'Gaby', 'Gabriel', NULL, 'gabriel@mail.com', '$2y$10$EeWruAKuSBAk16gF.iPRk.zVwEzNNuY18QwzsuNm6SL8CsLud18eC', NULL, '0000-00-00 00:00:00', 0, '2017-11-07 15:13:37', '0000-00-00 00:00:00'),
(5, 'mriera', 'miguel riera', NULL, 'miguel@mail.com', '$2y$10$ZkbScEWMSrA.JdC2Ue.HTe1/BQsrZv.e6vbSjj/ekzmlXTEbMDxZu', NULL, '0000-00-00 00:00:00', 0, '2017-11-07 15:13:37', '0000-00-00 00:00:00'),
(8, 'ultimo', 'pepe', 'sarasa', 'ultimo@mail.com', '$2y$10$QR.DbQCRt85/VPprfj3PS.CElw59MZStRtts9QYlbY2/L7D4l1EIu', 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'prueba01', 'pepe', 'sarasa', 'prueba01@mail.com', '$2y$10$e3d2ZBNjRR0EGOh2zRUolempJ8Sv/tSd2RnA0zaJmZewqeQILbSym', 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
