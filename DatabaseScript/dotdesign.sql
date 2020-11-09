-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2020 a las 04:38:28
-- Versión del servidor: 10.4.8-MariaDB-log
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
-- Base de datos: `dotdesign`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Id_Carrito` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritoxproducto`
--

CREATE TABLE `carritoxproducto` (
  `Id_CarxPro` int(11) NOT NULL,
  `Id_Carrito` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_Categoria` int(11) NOT NULL,
  `Nombre_Categoria` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Descripcion_Categoria` varchar(45) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `Nombre_Categoria`, `Descripcion_Categoria`) VALUES
(2, 'Fotos', '....'),
(3, 'Iconos', '...'),
(4, 'Vectores', '...'),
(5, 'Gratis', '...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaxproducto`
--

CREATE TABLE `categoriaxproducto` (
  `Id_CatxPro` int(11) NOT NULL,
  `Id_Categoria` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `Id_Comentario` int(11) NOT NULL,
  `Fecha_Comentario` date NOT NULL,
  `Texto_Comentario` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarioxproducto`
--

CREATE TABLE `comentarioxproducto` (
  `Id_CxP` int(11) NOT NULL,
  `Id_Comentario` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Descr_Producto` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Vistas` int(11) NOT NULL,
  `Calificacion` int(11) NOT NULL,
  `Precio` float NOT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id_Rol` int(11) NOT NULL,
  `Nombre_Rol` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Descr_Rol` varchar(45) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `Id_Suscripcion` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Precio` float NOT NULL,
  `Duracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Id_Rol` int(11) NOT NULL,
  `Nombre_Usuario` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Direccion` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Telefono` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Emaill` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `CLABE` int(11) NOT NULL,
  `Contraseña` varchar(45) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `Id_Venta` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Forma_Pago` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Total` float NOT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasxproducto`
--

CREATE TABLE `ventasxproducto` (
  `Id_VxP` int(11) NOT NULL,
  `Id_Venta` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Precio` float NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`Id_Carrito`),
  ADD KEY `IdUsuarioCar_fk` (`Id_Usuario`);

--
-- Indices de la tabla `carritoxproducto`
--
ALTER TABLE `carritoxproducto`
  ADD PRIMARY KEY (`Id_CarxPro`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indices de la tabla `categoriaxproducto`
--
ALTER TABLE `categoriaxproducto`
  ADD PRIMARY KEY (`Id_CatxPro`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`Id_Comentario`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `comentarioxproducto`
--
ALTER TABLE `comentarioxproducto`
  ADD PRIMARY KEY (`Id_CxP`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `Id_Usuarios_fk` (`Id_Usuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id_Rol`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`Id_Suscripcion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Id_Venta`),
  ADD KEY `Id_UsuarioVe_fk` (`Id_Usuario`);

--
-- Indices de la tabla `ventasxproducto`
--
ALTER TABLE `ventasxproducto`
  ADD PRIMARY KEY (`Id_VxP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `Id_Carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carritoxproducto`
--
ALTER TABLE `carritoxproducto`
  MODIFY `Id_CarxPro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoriaxproducto`
--
ALTER TABLE `categoriaxproducto`
  MODIFY `Id_CatxPro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `Id_Comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarioxproducto`
--
ALTER TABLE `comentarioxproducto`
  MODIFY `Id_CxP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id_Rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `Id_Suscripcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `Id_Venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventasxproducto`
--
ALTER TABLE `ventasxproducto`
  MODIFY `Id_VxP` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `IdUsuarioCar_fk` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `Id_Usuarios_fk` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `Id_UsuarioVe_fk` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
