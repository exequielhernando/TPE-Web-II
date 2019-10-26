-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2019 a las 21:40:34
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mayoristaropa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_category` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_category`, `name`, `description`) VALUES
(1, 'Masculino', 'Para uso de Hombres'),
(2, 'Femenino', 'Para uso de Mujeres'),
(3, 'Unisex', 'Para uso de Hombres/Mujeres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_product` int(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `stock` int(100) NOT NULL,
  `image` blob NOT NULL,
  `id_category` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_product`, `description`, `price`, `stock`, `image`, `id_category`) VALUES
(4, 'Medias Negras', 100, 50, '', 3),
(22, 'Brassier Blanco', 300, 40, '', 2),
(33, 'Pantalon Jean Azul', 150, 50, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `pass`, `email`, `name`, `lastname`) VALUES
(1, 'guille', '$2y$10$OLVC7GbeszXNFA4WGfu4h.xFOElAE8NoinIXyNLR5YkoQs55KT5Ge', 'asd@asd.com', 'asd', 'asdasd'),
(2, 'exe', '$2y$10$OLVC7GbeszXNFA4WGfu4h.xFOElAE8NoinIXyNLR5YkoQs55KT5Ge', 'asd2@asd.com', 'asd2', 'asdasd2'),
(12, 'resape', '$2y$10$Hl2ezBsRiRnbTUecLMVsh.Rn49RpVEJnszqDbfvbyM2dLNHBPK5Zi', 'resape@resape.com', 'resape', 'resape'),
(13, 'guille2', '$2y$10$WtoYGF8iNuhluBseYzdJgeyHFEzJwmhfKz051DR1KZFFfrYyC36WS', 'asd@gmail.com', 'asd', 'asd'),
(14, 'guille3', '$2y$10$QpWdXlfoDYMS0UR5thTRzubYfi.RsOf6zcykEM59f0lLmWeAIUeRu', 'asd3@hotmail.com', 'asd', 'asd'),
(15, 'guille4', '$2y$10$do8r3/ayldNpQIkMQBGVlOMQRH0BTWfbyRhhiC0jKXnpChoWC1M.u', 'asd3@hotmail.com', 'asd', 'asd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_categoria` (`id_category`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categoria` (`id_category`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
