-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2023 a las 23:17:42
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
-- Base de datos: `librería_alejandría`
--
CREATE DATABASE IF NOT EXISTS `librería_alejandría` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `librería_alejandría`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `libros` varchar(5000) NOT NULL,
  `géneros` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombre`, `libros`, `géneros`) VALUES
(1, 'Brandon Sanderson', 'El Camino de los Reyes', 'Fantasía'),
(2, 'Suzanne Collins', 'Los Juegos del Hambre', 'Ciencia Ficción'),
(3, 'Kass Morgan', 'Los 100', 'Ciencia Ficción'),
(4, 'Juliet Marillier', 'El Hijo de la Profecía', 'Fantasía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lectura`
--

CREATE TABLE `lectura` (
  `id_usuario` int(11) NOT NULL,
  `id_lectura` int(11) NOT NULL,
  `hora_última_visita` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nro_página` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lectura`
--

INSERT INTO `lectura` (`id_usuario`, `id_lectura`, `hora_última_visita`, `nro_página`, `id_libro`) VALUES
(3, 4, '2023-09-29 20:59:09', 92, 3),
(2, 5, '2023-09-29 20:59:09', 142, 2),
(1, 6, '2023-09-29 21:00:37', 623, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `título` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `edición` varchar(100) NOT NULL,
  `género` varchar(50) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`título`, `autor`, `edición`, `género`, `id_libro`, `id_autor`) VALUES
('El Hijo de la Profecía', 'Juliet Marilliet', '1ra edición: julio de 2007', 'Fantasía', 1, 4),
('Los Juegos del Hambre', 'Suzanne Collins', '9na reimpresión: septiembre de 2013', 'Ciencia Ficción', 2, 2),
('Los 100', 'Kass Morgan', '1ra edición: noviembre de 2014', 'Ciencia Ficción', 3, 3),
('El Camino de los Reyes', 'Brandon Sanderson', '1ra edición: octubre de 2021', 'Fantasía', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `contraseña`) VALUES
(1, 'Milagros', 'Lopez Vilaclara', 'lopezvmilagros@gmail', '111111111'),
(2, 'Clara', 'Franco', 'clarafranco@gmail.com', 'Clara3'),
(3, 'Gustavo Nahuel', 'Río', 'riogustavo2001@gmail.com', '2011_2001');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`),
  ADD KEY `libros` (`libros`(768)),
  ADD KEY `géneros` (`géneros`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `lectura`
--
ALTER TABLE `lectura`
  ADD PRIMARY KEY (`id_lectura`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `libro` (`id_libro`),
  ADD KEY `libro_2` (`id_libro`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_autor` (`id_autor`),
  ADD KEY `autor` (`autor`),
  ADD KEY `título` (`título`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lectura`
--
ALTER TABLE `lectura`
  MODIFY `id_lectura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lectura`
--
ALTER TABLE `lectura`
  ADD CONSTRAINT `fk_lectura` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_libro` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_nombre_autor` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
