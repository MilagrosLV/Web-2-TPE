-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2023 a las 01:20:09
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
-- Base de datos: `alexandria_bookstore`
--
CREATE DATABASE IF NOT EXISTS `alexandria_bookstore` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `alexandria_bookstore`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id_book` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `genre` int(11) NOT NULL,
  `synopsis` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_book`, `title`, `date`, `genre`, `synopsis`) VALUES
(1, 'El halcón maltés', '1930-06-01', 4, 'La audaz mezcla de realismo descarnado y de sentimientos románticos característica de Dashiell Hammett (1894-1961) alcanza en \"El halcón maltés\" (1930) su mejor expresión. Una estatuilla configura de halcón que los caballeros de la Orden de Malta regalaron al emperador Carlos V en 1530 ha sido objet'),
(2, 'Cosecha roja', '1929-02-01', 4, 'cuando en una pequeña ciudad minera la mortandad se multiplica por diez y los propios coches de la policía sirven para cubrir las fugas de los gángsters, puede decirse que algo no funciona.Cosecha roja es la violenta historia de un detective privado que a las pocas horas de llegar a Personville se s'),
(3, 'Spade & Archer', '2009-01-01', 4, 'Joe Gores es autor de dieciséis novelas por las que ha recibido múltiples premios, así como guionista de series de televisión tan populares como Colombo, Remington Steele y Kojak. Con Spade & Archer está cosechando un gran éxito; autores de la talla de James Ellroy se han rendido a la brillantez de '),
(4, 'Nosotros en la luna', '2020-10-15', 3, 'las el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddard Stark, señor de Invernalia, deja sus dominios para unirse a la corte del rey Robert Baratheon el Usurpador,hombre díscolo y otrora guerrero audaz cuyas mayores aficiones son comer, beber y engendrar bastardos. Eddard Stark de'),
(5, 'A dos metros de ti', '2018-05-02', 3, 'Dos adolescentes, Stella y Will, se encuentran en un hospital debido a las graves enfermedades que padecen y que amenazan su vida. Poco a poco comienzan a conocerse y enamorarse, pero deberán enfrentarse a las reglas hospitalarias que los alejan.'),
(6, 'After', '2013-09-07', 3, 'Tessa Young acaba de llegar a la universidad, y su estable y ordenada vida da un giro busco al conocer al misterioso Hardin Scott, cuyo pasado es algo oscuro. Aunque de entrada se odian,estos polos opuestos se unirán y nada volverá a ser como antes. Tendrán que enfrentarse amultiples pruebas como la'),
(7, 'Juego de tronos', '1996-08-06', 1, 'las el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddard Stark, señor de Invernalia, deja sus dominios para unirse a la corte del rey Robert Baratheon el Usurpador,hombre díscolo y otrora guerrero audaz cuyas mayores aficiones son comer, beber y engendrar bastardos. Eddard Stark de'),
(8, 'La quinta estación', '2015-08-10', 1, 'La quinta estación (título original en inglés: The Fifth Season) es una novela de ficción especulativa escrita por la autora estadounidense N. K. Jemisin y publicada en agosto de 2015 por la editorial Orbit Books. La edición en español ha sido publicada en mayo de 2017 por Ediciones B dentro de su s'),
(9, 'Los jovenes de la el', '2016-10-07', 1, 'Comienza la explosiva saga de fantasía número 1 del New York Times. Los supervivientes de la fiebre de la sangre, una enfermedad que arrasó Kenettra hace diez años, son admirados y temidos a partes iguales.'),
(12, 'desconocido', '2030-05-02', 4, 'este libro lo puse porque me pinto poner un libro que no se pueda clasificar ni genero o fecha para hacer la tabla con diez elementos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(350) NOT NULL,
  `url` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genre`
--

INSERT INTO `genre` (`id_genre`, `name`, `description`, `url`) VALUES
(1, 'Fantacia', 'En el género de fantacia, los personajes se embarcan en emocionantes viajes llenos de peligros e desafíos, explorando mundos desconocidos y enfrentándose a situaciones extraordinarias.', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Ftierradefay.blogspot.com%2F2013%2F01%2Fconceptos-que-es-la-fantasia-i.html&psig=AOvVaw23KxFfCQyF50dC-bAA2blW&ust=1698356889413000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCMifj8uWkoIDFQAAAAAdAAAAABAE'),
(3, 'Romance', 'En el género romántico, las historias se enfocan en las relaciones personales y amorosas entre los protagonistas. Estas narrativas exploran temas de pasión, deseo y conexión emocional.', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.definicionabc.com%2Fgeneral%2Fromance.php&psig=AOvVaw0SgXmYmdyjNSbFaxEgXQwb&ust=1698357010401000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIjQuYSXkoIDFQAAAAAdAAAAABAE'),
(4, 'Misterio', 'El género de misterios se centra en la resolución de enigmas y crímenes intrigantes. Los personajes investigan pistas y secretos oscuros para descubrir la verdad detrás de eventos misteriosos.', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fdefinicion.de%2Fmisterio%2F&psig=AOvVaw27g8TXl02bnr19Y6vBhomh&ust=1698357148329000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIjJnMaXkoIDFQAAAAAdAAAAABAE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user`, `password`) VALUES
(1, 'adminuser', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `Genero` (`genre`);

--
-- Indices de la tabla `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;