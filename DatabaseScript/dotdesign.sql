-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 06:58:22
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
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `Id_Usuario` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Calificacion` decimal(1,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Descripcion_Categoria` varchar(60) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `Nombre_Categoria`, `Descripcion_Categoria`) VALUES
(7, 'Fotos', 'Fotografías tomadas por profesionales.'),
(8, 'Íconos', 'Pictogramas vectoriales que representan versiones reducidas '),
(9, 'Vectores', 'Imágenes digitales creadas con objetos geométricos independi'),
(10, 'Gratis', 'Recursos de descarga gratuita.'),
(11, 'Pago', 'Recursos que requieren de un pago o suscripción para su uso.'),
(12, 'Blanco y negro', 'Recursos donde la escala de color está en grises.'),
(13, 'Negro', 'Recursos donde el color dominante es el negro.'),
(14, 'Blanco', 'Recursos donde el color dominante es el blanco.'),
(15, 'Rojo', 'Recursos donde el color dominante es el rojo.'),
(16, 'Azul', 'Recursos donde el color dominante es el azul.'),
(17, 'Verde', 'Recursos donde el color dominante es el verde.'),
(18, 'Rosa', 'Recursos donde el color dominante es el rosa.'),
(19, 'Morado', 'Recursos donde el color dominante es el morado.'),
(20, 'Amarillo', 'Recursos donde el color dominante es el amarillo.'),
(21, 'Flores', 'Recursos en los que uno de los elementos principales son flo'),
(22, 'Rosas', 'Recursos en los que uno de los elementos principales son ros'),
(23, 'Hojas', 'Recursos en los que uno de los elementos principales son hoj'),
(24, 'Naturaleza', 'Recursos en los que uno de los elementos principales son ele'),
(25, 'Árboles', 'Recursos en los que uno de los elementos principales son árb'),
(26, 'Cerezos', 'Recursos en los que uno de los elementos principales son cer'),
(27, 'Girasoles', 'Recursos en los que uno de los elementos principales son gir'),
(28, 'Postres', 'Recursos en los que uno de los elementos principales son pos'),
(29, 'Comida', 'Recursos en los que uno de los elementos principales son dis'),
(30, 'Dulces', 'Recursos en los que uno de los elementos principales son gol'),
(31, 'Malvaviscos', 'Recursos en los que uno de los elementos principales son mal'),
(32, 'Rosquillas', 'Recursos en los que uno de los elementos principales son don'),
(33, 'Pastel', 'Recursos en los que uno de los elementos principales son pas'),
(34, 'Magdalenas', 'Recursos en los que uno de los elementos principales son mag'),
(35, 'Frutas', 'Recursos en los que uno de los elementos principales son fru'),
(36, 'Dibujo', 'Recursos en los que uno de los elementos principales son ele'),
(37, 'Pintura', 'Recursos en los que uno de los elementos principales son ele'),
(38, 'Acuarela', 'Recursos en los que uno de los elementos principales son acu'),
(39, 'Arte', 'Recursos en los que uno de los elementos principales son dis'),
(40, 'Juegos', 'Recursos en los que uno de los elementos principales son jue'),
(41, 'Ajedrez', 'Recursos en los que uno de los elementos principales son pie'),
(42, 'Dardos', 'Recursos en los que uno de los elementos principales son dar'),
(43, 'Diana', 'Recursos en los que uno de los elementos principales son dia'),
(44, 'Tecnología', 'Recursos en los que uno de los elementos principales son ele'),
(45, 'Empresarios', 'Recursos en los que uno de los elementos principales son ele'),
(46, 'Computadoras', 'Recursos en los que uno de los elementos principales son com'),
(47, 'Presentación', 'Recursos en los que uno de los elementos principales es una '),
(48, 'Jóvenes', 'Recursos en los que uno de los elementos principales es la a'),
(49, 'Estadísticas', 'Recursos en los que uno de los elementos principales son est'),
(50, 'Abstracto', 'Recursos en los que sus elementos son complicados de entende'),
(51, 'Herramientas', 'Recursos en los que uno de los elementos principales son her'),
(52, 'Vídeo', 'Recursos en los que uno de los elementos principales es la p'),
(53, 'Imagen', 'Recursos en los que uno de los elementos principales es la p'),
(54, 'Indicadores', 'Recursos en que sirven como indicadores para describir una f'),
(55, 'Líneas', 'Recursos cuya composición resalta líneas.'),
(56, 'Puntos', 'Recursos cuya composición resalta puntos.'),
(57, 'Triángulos', 'Recursos cuya composición resalta triángulos.'),
(58, 'Navidad', 'Recursos con temática navideña.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaxproducto`
--

CREATE TABLE `categoriaxproducto` (
  `Id_CatxPro` int(11) NOT NULL,
  `Id_Categoria` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `categoriaxproducto`
--

INSERT INTO `categoriaxproducto` (`Id_CatxPro`, `Id_Categoria`, `Id_Producto`) VALUES
(4, 7, 2),
(7, 7, 3),
(13, 7, 5),
(16, 7, 6),
(25, 8, 9),
(22, 9, 8),
(19, 11, 7),
(14, 14, 5),
(23, 17, 8),
(10, 18, 4),
(5, 21, 2),
(11, 21, 4),
(6, 24, 2),
(12, 24, 4),
(15, 24, 5),
(8, 25, 3),
(9, 26, 3),
(24, 37, 8),
(18, 40, 6),
(20, 44, 7),
(21, 46, 7),
(27, 51, 9),
(17, 53, 6),
(26, 53, 9);

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
  `Imagen_Producto` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Vistas` int(11) NOT NULL,
  `Precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_Producto`, `Nombre_Producto`, `Descr_Producto`, `Imagen_Producto`, `Vistas`, `Precio`) VALUES
(2, 'Girasoles', 'Fotografía de par de girasoles con fondo negr', 'Fotos/001 - Girasoles.jpg', 0, 50),
(3, 'Flor de cerezo', 'Fotografía de la rama de un árbol de cerezo', 'Fotos/002 - Flor de Cerezo.jpg', 0, 70),
(4, 'Tulipanes ', 'Fotografía de un ramo de tulipanes con fondo ', 'Fotos/003 - Tulipanes.jpg', 0, 70),
(5, 'Tic Tac Toe de Frutas', 'Fotografía de un Tic Tac Toe hecho con rodaja', 'Fotos/005 - Tic Tac Toe de Frutas.jpg', 0, 0),
(6, 'Rompecabezas', 'Fotografía de unas piezas de rompecabezas de ', 'Fotos/006 - Rompecabezas.jpg', 0, 80),
(7, 'Computadora con Gráficas', 'Fotografía de una computadora que muestra dis', 'Fotos/009 - Computadora con Gráficas.jpg', 0, 100),
(8, 'Hojas acuarela verde', 'Vector con borde cuyo patrón son hojas pintad', 'Vectores/010.jpg', 0, 150),
(9, 'Sobre', 'Ícono de un sobre cerrado', 'Íconos/020 - Sobre.png', 0, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
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
  `Rol` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Nombre_Usuario` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Direccion` varchar(70) COLLATE utf8mb4_bin NOT NULL,
  `Telefono` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Emaill` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `Contraseña` varchar(45) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Rol`, `Nombre_Usuario`, `Direccion`, `Telefono`, `Emaill`, `Contraseña`) VALUES
(9, 'Admin', 'Cinthya Mata', 'Chicharo #201 ', '449 156 3205', 'mata.sanchez.cinthya2016@gmail.com', 'b32ac61dbeac146e3076d10602434e9d2527a9eba924f'),
(10, 'Admin', 'Israel Martinez', 'STEMA Condominio E-3', '449 349 1910', 'israelsaid16399@gmail.com', 'a237ee6c05bbd49f2e363b9dbe0ca5f382f2533808473');

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
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD KEY `Id_Usuario` (`Id_Usuario`,`Id_Producto`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`Id_Carrito`),
  ADD KEY `IdUsuarioCar_fk` (`Id_Usuario`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `carritoxproducto`
--
ALTER TABLE `carritoxproducto`
  ADD PRIMARY KEY (`Id_CarxPro`),
  ADD KEY `Id_Carrito` (`Id_Carrito`,`Id_Producto`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indices de la tabla `categoriaxproducto`
--
ALTER TABLE `categoriaxproducto`
  ADD PRIMARY KEY (`Id_CatxPro`),
  ADD KEY `Id_Categoria` (`Id_Categoria`,`Id_Producto`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`Id_Comentario`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Id_Usuario_2` (`Id_Usuario`);

--
-- Indices de la tabla `comentarioxproducto`
--
ALTER TABLE `comentarioxproducto`
  ADD PRIMARY KEY (`Id_CxP`),
  ADD KEY `Id_Comentario` (`Id_Comentario`,`Id_Producto`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`Id_Suscripcion`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

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
  ADD PRIMARY KEY (`Id_VxP`),
  ADD KEY `Id_Venta` (`Id_Venta`,`Id_Producto`),
  ADD KEY `Id_Producto` (`Id_Producto`);

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
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `categoriaxproducto`
--
ALTER TABLE `categoriaxproducto`
  MODIFY `Id_CatxPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `Id_Suscripcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carritoxproducto`
--
ALTER TABLE `carritoxproducto`
  ADD CONSTRAINT `carritoxproducto_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carritoxproducto_ibfk_2` FOREIGN KEY (`Id_Carrito`) REFERENCES `carrito` (`Id_Carrito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categoriaxproducto`
--
ALTER TABLE `categoriaxproducto`
  ADD CONSTRAINT `categoriaxproducto_ibfk_1` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id_Categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categoriaxproducto_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarioxproducto`
--
ALTER TABLE `comentarioxproducto`
  ADD CONSTRAINT `comentarioxproducto_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarioxproducto_ibfk_2` FOREIGN KEY (`Id_Comentario`) REFERENCES `comentario` (`Id_Comentario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD CONSTRAINT `suscripciones_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventasxproducto`
--
ALTER TABLE `ventasxproducto`
  ADD CONSTRAINT `ventasxproducto_ibfk_1` FOREIGN KEY (`Id_Venta`) REFERENCES `venta` (`Id_Venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventasxproducto_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
