-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 02:10:57
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
  `id_category` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_category`, `name`, `description`) VALUES
(133, 'Masculino', 'Uso para hombres'),
(134, 'Femenino', 'Uso para mujeres'),
(135, 'Unisex', 'Uso para hombres/mujeres'),
(149, 'Undefined', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id_image`, `direccion`, `id_product`) VALUES
(7, 'imgProduct/5dd8c1c2edd29.jpg', 82),
(8, 'imgProduct/5dd8c1cb26173.jpg', 82),
(9, 'imgProduct/5dd8c26760998.', 83),
(10, 'imgProduct/5dd8c32c21826.', 83),
(11, 'imgProduct/5dd8d4657bbbc.jpg', 90),
(12, 'imgProduct/5dd8d4734bdb1.', 90),
(13, 'imgProduct/5dd8d49235391.', 90),
(14, 'imgProduct/5dd8d4945ab9c.', 90),
(15, 'imgProduct/5dd8d4a9b0763.', 90),
(16, 'imgProduct/5dd8d4ad3b7f4.', 90),
(17, 'imgProduct/5dd8d4f0bc091.', 90),
(18, 'imgProduct/5dd8d5368718b.', 90),
(19, 'imgProduct/5dd8d540bd918.jpg', 90),
(20, 'imgProduct/5dd8d87e26bba.jpg', 82),
(21, 'imgProduct/5dd8d88bed79b.jpg', 82),
(22, 'imgProduct/5dd8daaab0c99.jpg', 92);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_product` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_product`, `name`, `description`, `price`, `stock`, `image`, `id_category`) VALUES
(82, 'Zapatillas', 'Negras Talle 38', 150, 100, 'imgProduct/5dd8bffeb3291.jpg', 149),
(83, 'Medias', 'Blancas Talle m', 50, 100, 'imgProduct/5dd8c261b0288.jpg', 135),
(84, 'sadasd', 'asdasd', 3123, 1231, 'imgProduct/5dd8d0a5d332b.', 134),
(85, '123', '12312', 3123, 213, 'imgProduct/5dd8d2454b79b.jpg', 133),
(90, '12312', '312312', 3123120, 12312, 'imgProduct/5dd8d405c15a4.jpg', 133),
(91, 'MEDIAS', 'ASDASD', 123, 123123, 'imgProduct/5dd8d8a70e50a.', 135),
(92, '111111111111111111111', '111111111111', 11111, 11111, 'imgProduct/5dd8da9e1208e.jpg', 134);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
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
(2, 'guille', '$2y$10$KOoVzgcoI25LbsruQOWHW.wPe6KmzYwqQFqLrez7Dai9cBde0Jfo.', 'guille@gmail.com', 'asd', 'asd'),
(4, 'Exe', '$2y$10$fkxu/.VwJtl523dZpDjsruCWZECrr7iXomB.CTau9j2pa8zb4XXyq', 'exe@exe.com', 'exe', 'exe'),
(5, 'asd', '$2y$10$22Cexy7mwzu0ej1.FNIoVe/3usR4yxq9tpbih3alXFzg3ggeZBeCW', 'asd@asd.com', 'asd', 'asd'),
(6, 'asdd', '$2y$10$IHJ/xdHzgY0LeMY63Mu3g.suJ6U4QLJnraixgnV35XPWtpgHTqpw6', 'asdf@gmail.com', 'asdf', 'asdf'),
(7, 'guille', '$2y$10$QgaJUqep8bOVbYROP9wjmO3wMVhtvJeLOdKnqk.7A1b5OChpekB.W', 'asd@gmail.com', 'asd', 'asd'),
(8, 'asd', '$2y$10$kEjlVe3ZxWhdzwgnu86kfuPw2OSWXTFbwiIFiKpUXp3LbuzBkVuf2', 'asd@gmail.com', 'asd', 'asd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_product` (`id_product`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `name` (`name`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `producto` (`id_product`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categoria` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
