-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2024 a las 13:22:02
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conserjeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problems`
--

CREATE TABLE `problems` (
  `id` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `dateTime` date NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `problems`
--

INSERT INTO `problems` (`id`, `room`, `issue`, `dateTime`, `area`) VALUES
(1, 215, 'Pata de la cama rota.', '2024-11-11', 'Planta 1'),
(2, 113, 'Aire acondicionado roto.', '2024-11-09', 'Planta 2'),
(3, 1, 'Caldera.', '2024-11-12', 'Sotano'),
(4, 513, 'Colchón rajado y sucio.', '2024-11-13', 'Planta 5'),
(5, 449, 'Cortinas-ñoñas.', '2024-11-02', 'Planta 4'),
(6, 345, 'Hay un hombre durmiendo en la cama.', '2024-11-06', 'Planta 3'),
(7, 444, 'La habitación no tiene puerta. ', '2024-10-18', 'Planta 4'),
(8, 666, 'El diablo.', '2024-11-21', 'Desconocida'),
(9, 987, 'No existe la planta.', '2024-11-06', 'Cielo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `problems`
--
ALTER TABLE `problems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
