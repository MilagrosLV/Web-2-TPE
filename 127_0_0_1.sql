-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 23:13:50
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
-- Base de datos: `registro_inicio`
--
CREATE DATABASE IF NOT EXISTS `registro_inicio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `registro_inicio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `titulo` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `autor,` varchar(15) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre_completo` varchar(50) NOT NULL,
  `Correo_Eletronico` varchar(50) NOT NULL,
  `Usuarios` varchar(50) NOT NULL,
  `Contraseñas` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre_completo`, `Correo_Eletronico`, `Usuarios`, `Contraseñas`) VALUES
(25, 'gustavo', 'fghjklñ', 'bhnjmk,l.-', '2c9d6f02186573b7dc7bafd676e284f8c7c1ea9a268e33f4143aa650f6e39fbf856e5926d7141ab72ba095ca0524b5377402f675d8d18400a7f90ed125f3fd88'),
(26, 'gustavo', 'fghjklñ', 'bhnjmk,l.-', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(27, 'gustavo', 'riogustavo2001@gmail.com', 'gustavo2424', 'c07e11d41880e4a684d65f8affda953e59744c0e790007f94597472f89c538aedb8d29be65e510356ac5b6c099bbf5e2bc19091b5df7aee2d1290c0a0b749d44'),
(28, 'ghnjmk', 'hjkl.', 'fghjk', '24eea8e4d123c81dfc601d45b2f7358bbc55b439e9b6ea2d8734cf8ba9a6a4e46ab093433c6ae795c04f4c64fec197eac500e4bcab51e50f2e41437fab77ad10'),
(29, 'fvgbhnm,', 'gbhnjmk,l', 'gbhnjmk,', 'f81e87775bb9d55712dcf05bc1e0f56abf08cf7614ef307c89e31107613a705fa323aacc3c2b50ddca51d8dbb9feab7824d7f7db0ee05dda46d92bfa4a5dd1e0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
