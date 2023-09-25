-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 22:34:03
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

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombre`, `libros`, `géneros`) VALUES
(1, 'Brandon Sanderson', 'El Camino de los Reyes', 'Fantasía'),
(2, 'Suzanne Collins', 'Los Juegos del Hambre', 'Ciencia Ficción'),
(3, 'Kass Morgan', 'Los 100', 'Ciencia Ficción'),
(4, 'Juliet Marillier', 'El Hijo de la Profecía', 'Fantasía');

--
-- Volcado de datos para la tabla `lectura`
--

INSERT INTO `lectura` (`id_usuario`, `id_lectura`, `hora_última_visita`, `nro_página`, `libro`) VALUES
(1, 1, '2023-09-23 20:07:32', 623, 'El Camino de los Reyes'),
(3, 2, '2023-09-23 20:08:41', 251, 'Los Juegos del Hambre'),
(2, 3, '2023-09-23 20:08:41', 109, 'Los 100');

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`título`, `autor`, `edición`, `género`, `id_libro`, `id_autor`) VALUES
('El Hijo de la Profecía', 'Juliet Marilliet', '1ra edición: julio de 2007', 'Fantasía', 1, 4),
('Los Juegos del Hambre', 'Suzanne Collins', '9na reimpresión: septiembre de 2013', 'Ciencia Ficción', 2, 2),
('Los 100', 'Kass Morgan', '1ra edición: noviembre de 2014', 'Ciencia Ficción', 3, 3),
('El Camino de los Reyes', 'Brandon Sanderson', '1ra edición: octubre de 2021', 'Fantasía', 4, 1);

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `contraseña`) VALUES
(1, 'Milagros', 'Lopez Vilaclara', 'lopezvmilagros@gmail', '111111111'),
(2, 'Clara', 'Franco', 'clarafranco@gmail.com', 'Clara3'),
(3, 'Gustavo Nahuel', 'Río', 'riogustavo2001@gmail.com', '2011_2001');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
