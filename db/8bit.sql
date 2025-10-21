-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2025 a las 04:26:33
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
-- Base de datos: `8bit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE `biblioteca` (
  `idBiblioteca` int(11) NOT NULL,
  `IDusuario` int(11) NOT NULL,
  `idVideoJuego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` int(11) NOT NULL,
  `IDusuario` int(11) NOT NULL,
  `idVideoJuego` int(11) NOT NULL,
  `fechaDeCompra` datetime NOT NULL,
  `totalCompra` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE `descuento` (
  `IDdescuento` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_juego`
--

CREATE TABLE `imagenes_juego` (
  `idImagen` int(11) NOT NULL,
  `idVideoJuego` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `tipo` enum('portada','galeria') DEFAULT 'galeria',
  `orden` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes_juego`
--

INSERT INTO `imagenes_juego` (`idImagen`, `idVideoJuego`, `url`, `tipo`, `orden`) VALUES
(22, 9, 'https://wallpapercave.com/wp/wp8539049.jpg', 'portada', 1),
(23, 9, 'https://images.squarespace-cdn.com/content/v1/64b1b2f7f0636d071b56349d/da3b5eb7-314b-45d8-ac49-a7b21ef318d1/MK+1+3.jpg', 'galeria', 2),
(24, 9, 'https://i.blogs.es/0df80b/screenshot_764/1366_2000.jpeg', 'galeria', 3),
(25, 9, 'https://i.ytimg.com/vi/YFsC5WQVfpc/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGGUgXShQMA8=&rs=AOn4CLAo7LZXsPaiqPbV0xqWB1l17WPoig', 'galeria', 4),
(26, 10, 'https://images.gog-statics.com/9fc5b0c3b63f68f267cbc0799b166f890ffa6c91d9a4c6933bd9ec91c53f283f.jpg', 'portada', 1),
(27, 10, 'https://i.pinimg.com/736x/02/1f/89/021f89892b43787eb01fb7ff56693f09.jpg', 'galeria', 2),
(28, 10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpnygIj1RsbigCA6kunCBkMeB3_A9CvRtTV82aue8VL-ItogQXbP-CWcgdydxnzApqCiE&usqp=CAU', 'galeria', 3),
(29, 10, 'https://i.ytimg.com/vi/7uftEFUN4O8/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCi_sdFgVicJRsvwkcHkPTJSdiM9w', 'galeria', 4),
(30, 11, 'https://www.escapepodonline.com/cdn/shop/products/Alien_Vs_Predator_marquee_1200x1200.png?v=1539185429', 'portada', 1),
(31, 11, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUWrxbXKg6zCeNO7O3O1aVvZS3v5jVMSABGg&s', 'galeria', 2),
(32, 11, 'https://i.blogs.es/1a9bdc/011119-avsp-review-02/450_1000.webp', 'galeria', 3),
(33, 11, 'https://i.blogs.es/d32bcc/alien_vs_predator-5757732_jpg/450_1000.jpeg', 'galeria', 4),
(34, 12, 'https://http2.mlstatic.com/D_NQ_NP_725877-MLU78310841048_082024-O.webp', 'portada', 1),
(35, 12, 'https://images.cgames.de/images/gsgp/256/super-mario-world-super-mario-advance-2-30_975774.jpg', 'galeria', 2),
(36, 12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqg1lFVvKX2uZuJdi-CnHL2c29IDhYjR0m4GF2WTYhTch8_QfnJoOXStbrLbi8TdnQJZQ&usqp=CAU', 'galeria', 3),
(37, 12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBeXtRAQreKLRQbflDnEU9Q-svDCaxxtMu0xA9HqrQswnqnSsVUxJd5eM6y_gR4RRhsLk&usqp=CAU', 'galeria', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

CREATE TABLE `opinion` (
  `IDusuario` int(11) NOT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuacion`
--

CREATE TABLE `puntuacion` (
  `idPuntuacion` int(11) NOT NULL,
  `IDusuario` int(11) NOT NULL,
  `meGusta` tinyint(1) DEFAULT 0,
  `noMeGusta` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodedescuento`
--

CREATE TABLE `tipodedescuento` (
  `IDdescuento` int(11) NOT NULL,
  `TipoDeDescuento` tinyint(4) NOT NULL CHECK (`TipoDeDescuento` between 1 and 100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDusuario` int(11) NOT NULL,
  `nombreDeUsuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `saldo` decimal(12,2) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDusuario`, `nombreDeUsuario`, `email`, `contraseña`, `fechaRegistro`, `saldo`, `rol`) VALUES
(1, 'pepe', 'prueba123@prueba', 'tortaza', '2025-09-19', 0.00, 'user'),
(3, '123', '123@123', '$2y$10$uKfEl6vcgtdWjmGbYNpvUOs7RWsVCHg6cvkCZXesLNTiFMBv4HLfu', '2025-09-19', 0.00, 'user'),
(4, '1', '1@1', '1', '2025-09-19', 0.00, 'user'),
(5, '4', '4@4', '4', '2025-09-19', 0.00, 'user'),
(6, 'rodri', 'rodrigo@gmail.com', 'rodri', '2025-09-19', 0.00, 'user'),
(7, 'prueba2', 'prueba2@2', '2', '2025-09-19', 0.00, 'user'),
(8, 'probando', 'Probando@1', 'probando', '2025-09-20', 0.00, 'user'),
(9, 'Messi', 'verdad@verdad', 'verdad', '2025-09-21', 0.00, 'user'),
(10, 'prueba123', '098@098', '098', '2025-09-21', 0.00, 'user'),
(11, '1233', '122@123', '123', '2025-09-21', 0.00, 'user'),
(12, 'queonda', 'prueba1234@prueba', 'nse', '2025-09-21', 0.00, 'user'),
(13, 'hola098', 'hola098@xn--ida', '123', '2025-09-25', 0.00, 'user'),
(14, 'hola0981', 'hola098@xn--1-qga', '123', '2025-09-25', 0.00, 'user'),
(15, 'brandon', 'brandon@brandon', '6969', '2025-09-25', 0.00, 'user'),
(16, 'fer', 'f@f', 'f', '2025-09-26', 0.00, 'user'),
(17, '321', 'sdf@d', '12', '2025-10-02', 0.00, 'user'),
(18, 'f', 'f@4', 'f', '2025-10-02', 0.00, 'user'),
(19, '2', '1brandoncaro1@gmail.com', '1', '2025-10-02', 0.00, 'user'),
(20, '333', '333@333', '333', '2025-10-02', 0.00, 'user'),
(21, '12', '12@12', '12', '2025-10-02', 0.00, 'user'),
(22, 'MataAbuelas3k', '609@609', '6969', '2025-10-04', 0.00, 'user'),
(23, 'NoLousaran', 'EstegmailNuncaLoVanAusar@gmaul.com', 'noseusa', '2025-10-20', 0.00, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego`
--

CREATE TABLE `videojuego` (
  `idVideoJuego` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `nombreDelJuego` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fechaDeLanzamiento` date NOT NULL,
  `rutaJuego` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`idVideoJuego`, `genero`, `descripcion`, `nombreDelJuego`, `precio`, `fechaDeLanzamiento`, `rutaJuego`) VALUES
(9, 'pelea', 'Mortal Kombat es un juego de lucha clásico donde varios guerreros combaten en un torneo mortal usando artes marciales y poderes especiales, famoso por su violencia y los icónicos fatalities.', 'Mortal Kombat', 100000.00, '2025-10-20', 'emulator/games/Mortal_Kombat_Europe_Beta_.sfc'),
(10, 'disparos', 'Metal Slug 2 es un juego de acción de disparos de desplazamiento lateral lanzado en 1998, donde los jugadores combaten al Ejército Rebelde del General Morden y a los invasores alienígenas', 'metal slug 2', 100000.00, '2025-10-20', 'emulator/games/Metal_slug_2.sfc'),
(11, 'combate', 'El juego arcade Alien vs. Predator de 1994 es un juego de lucha de desplazamiento lateral, o beat \'em up, donde hasta tres jugadores controlan a diferentes personajes, como Dutch Schaefer y la cyborg Linn Kurosawa, para luchar contra hordas de aliens', 'aliens vs predator', 100000.00, '2025-10-20', 'emulator/games/aliens_vs_depredator.sfc'),
(12, 'aventura', 'El juego sigue la aventura de Mario y Luigi mientras rescatan a la Princesa Peach de Bowser en el Reino Dinosaurio', 'super mario advance 2', 50000.00, '2025-10-20', 'emulator/games/Super_Mario_Advance_2.gba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video_juego`
--

CREATE TABLE `video_juego` (
  `idVideo` int(11) NOT NULL,
  `idVideoJuego` int(11) NOT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `video_juego`
--

INSERT INTO `video_juego` (`idVideo`, `idVideoJuego`, `url`) VALUES
(7, 9, 'https://www.youtube.com/embed/S9uoyTMMWCg'),
(8, 10, 'https://www.youtube.com/embed/i8Zy5BUiQf8'),
(9, 11, 'https://www.youtube.com/embed/ySyId7TAEDU'),
(10, 12, 'https://www.youtube.com/embed/hs81jSrhOg0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`idBiblioteca`),
  ADD KEY `FK_Biblioteca_VideoJuego` (`idVideoJuego`),
  ADD KEY `FK_Biblioteca_Usuario` (`IDusuario`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `FK_Compra_Usuario` (`IDusuario`),
  ADD KEY `FK_Compra_VideoJuego` (`idVideoJuego`);

--
-- Indices de la tabla `descuento`
--
ALTER TABLE `descuento`
  ADD PRIMARY KEY (`IDdescuento`);

--
-- Indices de la tabla `imagenes_juego`
--
ALTER TABLE `imagenes_juego`
  ADD PRIMARY KEY (`idImagen`),
  ADD KEY `idVideoJuego` (`idVideoJuego`);

--
-- Indices de la tabla `opinion`
--
ALTER TABLE `opinion`
  ADD KEY `FK_Opinion_Usuario` (`IDusuario`);

--
-- Indices de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD PRIMARY KEY (`idPuntuacion`),
  ADD KEY `FK_Puntuacion_Usuario` (`IDusuario`);

--
-- Indices de la tabla `tipodedescuento`
--
ALTER TABLE `tipodedescuento`
  ADD KEY `FK_TipoDeDescuento_Descuento` (`IDdescuento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDusuario`);

--
-- Indices de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  ADD PRIMARY KEY (`idVideoJuego`);

--
-- Indices de la tabla `video_juego`
--
ALTER TABLE `video_juego`
  ADD PRIMARY KEY (`idVideo`),
  ADD UNIQUE KEY `idVideoJuego` (`idVideoJuego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `idBiblioteca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descuento`
--
ALTER TABLE `descuento`
  MODIFY `IDdescuento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes_juego`
--
ALTER TABLE `imagenes_juego`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  MODIFY `idPuntuacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  MODIFY `idVideoJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `video_juego`
--
ALTER TABLE `video_juego`
  MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD CONSTRAINT `FK_Biblioteca_Usuario` FOREIGN KEY (`IDusuario`) REFERENCES `usuario` (`IDusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Biblioteca_VideoJuego` FOREIGN KEY (`idVideoJuego`) REFERENCES `videojuego` (`idVideoJuego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_Compra_Usuario` FOREIGN KEY (`IDusuario`) REFERENCES `usuario` (`IDusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Compra_VideoJuego` FOREIGN KEY (`idVideoJuego`) REFERENCES `videojuego` (`idVideoJuego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes_juego`
--
ALTER TABLE `imagenes_juego`
  ADD CONSTRAINT `imagenes_juego_ibfk_1` FOREIGN KEY (`idVideoJuego`) REFERENCES `videojuego` (`idVideoJuego`) ON DELETE CASCADE;

--
-- Filtros para la tabla `opinion`
--
ALTER TABLE `opinion`
  ADD CONSTRAINT `FK_Opinion_Usuario` FOREIGN KEY (`IDusuario`) REFERENCES `usuario` (`IDusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD CONSTRAINT `FK_Puntuacion_Usuario` FOREIGN KEY (`IDusuario`) REFERENCES `usuario` (`IDusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipodedescuento`
--
ALTER TABLE `tipodedescuento`
  ADD CONSTRAINT `FK_TipoDeDescuento_Descuento` FOREIGN KEY (`IDdescuento`) REFERENCES `descuento` (`IDdescuento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `video_juego`
--
ALTER TABLE `video_juego`
  ADD CONSTRAINT `video_juego_ibfk_1` FOREIGN KEY (`idVideoJuego`) REFERENCES `videojuego` (`idVideoJuego`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
