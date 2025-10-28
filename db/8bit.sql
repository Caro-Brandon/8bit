-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2025 a las 05:36:26
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

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`idBiblioteca`, `IDusuario`, `idVideoJuego`) VALUES
(1, 4, 9),
(2, 4, 12),
(3, 4, 18),
(4, 4, 19),
(5, 4, 20),
(6, 4, 21),
(7, 4, 22);

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
(37, 12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBeXtRAQreKLRQbflDnEU9Q-svDCaxxtMu0xA9HqrQswnqnSsVUxJd5eM6y_gR4RRhsLk&usqp=CAU', 'galeria', 4),
(38, 18, 'https://www.nintendo.com/eu/media/images/10_share_images/games_15/game_boy_4/H2x1_GB_PokemonRed_esES_image1600w.jpg', 'portada', 1),
(39, 18, 'https://m.media-amazon.com/images/M/MV5BZWY5ODVkMDgtMjNjYy00YzljLWE3NzQtYjVlMjE5Y2EzNjIyXkEyXkFqcGc@._V1_.jpg', 'galeria', 2),
(40, 18, 'https://m.media-amazon.com/images/M/MV5BZWNlNTE1YjUtZWRmOS00ZWM4LWEwMzAtNDI2MWY0NGM1OGZmXkEyXkFqcGc@._V1_QL75_UX395_.jpg', 'galeria', 3),
(41, 18, 'https://pm1.aminoapps.com/6154/52474485007ad7ef6a42f61e579b69ebf163a27f_hq.jpg', 'galeria', 4),
(46, 19, 'https://scontent.faep25-1.fna.fbcdn.net/v/t1.6435-9/104483778_2461068277329649_5080057375274248651_n.jpg?stp=dst-jpg_s720x720_tt6&_nc_cat=111&ccb=1-7&_nc_sid=127cfc&_nc_ohc=NtQQg3-YMzAQ7kNvwFkLfIM&_nc_oc=AdlxPTX7qFydnhqSa28QyzTY2GuXTBFRAJAJzfdy-fbhdTl2pQzzwtJenTNNOkAlovlrLLVnIpGf6q6N_T4o1_R5&_nc_zt=23&_nc_ht=scontent.faep25-1.fna&_nc_gid=4cIjeUSHuL7a_Wjh5M2nwQ&oh=00_AfeNP5UfsDlcbzuyiehd8GNGLAOGMtF_2wK4vxRc0orAbg&oe=69278B51', 'portada', 1),
(47, 19, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsFjFInh4LGa7_6yrgbI6JUfyK5hxL6GRsvw&s', 'galeria', 2),
(48, 19, 'https://seasidehillparadise.wordpress.com/wp-content/uploads/2022/02/portadashp.jpg', 'galeria', 3),
(49, 19, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDP3NYx8v-tcMehGvdyTw3ITle-YFf5KZB4A&s', 'galeria', 4),
(50, 20, 'https://e1.pxfuel.com/desktop-wallpaper/560/351/desktop-wallpaper-nfs-most-wanted-ps2-need-for-speed-most-wanted-black-edition.jpg', 'portada', 1),
(51, 20, 'https://i.ytimg.com/vi/MfoTpg_W80s/maxresdefault.jpg', 'galeria', 2),
(52, 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4sFiCzR60gx91616FGKa-ZcUIgH_j2-mHmg&s', 'galeria', 3),
(53, 20, 'https://www.mariogba.nl/Plaatjes/GBA_spel_large/Need_for_Speed_Most_Wanted_GBA4.jpg', 'galeria', 4),
(54, 21, 'https://assets.altarofgaming.com/wp-content/uploads/2024/01/crash-bandicoot-the-huge-adventure-game-cover-altar-of-gaming.jpg', 'portada', 1),
(55, 21, 'https://www.crashmania.net/images/games/crash-bandicoot-the-huge-adventure/overview/1.png', 'galeria', 2),
(56, 21, 'https://www.crashmania.net/images/games/crash-bandicoot-the-huge-adventure/screenshots/tiny-tiger-2.png', 'galeria', 3),
(57, 21, 'https://www.crashmania.net/images/games/crash-bandicoot-the-huge-adventure/unused-content/mock-up-1-1.jpg', 'galeria', 4),
(58, 22, 'https://cdn2.steamgriddb.com/thumb/8d8f19fe5378f786c24d183f8a0cf3bd.jpg', 'portada', 1),
(59, 22, 'https://img.asmedia.epimg.net/resizer/v2/3J4ECKUV6RNFDPURW2IKO4CI3A.jpg?auth=f12a3d1abfd7e659b7e2dc4c1f89caf9464520d6908f882fa978f4b63199f8d7&width=360', 'galeria', 2),
(60, 22, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTixIDUoGx7UQRZLUZ--lGx93PyuATXg0wrRZJIK6PJY_3__3eafdsprPZnp51BPvB2n64&usqp=CAU', 'galeria', 3),
(61, 22, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxbqgbNpY88aXs6k2lI1Fq93Pfy4XtDE4z8gRggRoSbovqlMu_ljwRh8sM6Ts-gJ-Qea0&usqp=CAU', 'galeria', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

CREATE TABLE `opinion` (
  `idOpinion` int(11) NOT NULL,
  `IDusuario` int(11) NOT NULL,
  `idVideoJuego` int(11) NOT NULL,
  `comentario` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opinion`
--

INSERT INTO `opinion` (`idOpinion`, `IDusuario`, `idVideoJuego`, `comentario`, `rating`, `fecha`) VALUES
(19, 4, 12, 'probando', NULL, '2025-10-24 19:14:50'),
(23, 24, 10, '1', 4, '2025-10-27 16:30:19');

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
(4, '1', '1@1', '1', '2025-09-19', 0.00, 'admin'),
(5, '4', '4@4', '4', '2025-09-19', 0.00, 'user'),
(6, 'rodri', 'rodrigo@gmail.com', 'rodri', '2025-09-19', 0.00, 'user'),
(7, 'prueba2', 'prueba2@2', '2', '2025-09-19', 0.00, 'user'),
(8, 'probando', 'Probando@1', 'probando', '2025-09-20', 0.00, 'user'),
(9, 'Messi', 'verdad@verdad', 'verdad', '2025-09-21', 0.00, 'admin'),
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
(23, 'NoLousaran', 'EstegmailNuncaLoVanAusar@gmaul.com', 'noseusa', '2025-10-20', 0.00, 'user'),
(24, 'nuevo', 'usuarioNuevo@gmail.com', '123', '2025-10-27', 0.00, 'admin');

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
  `rutaJuego` varchar(255) NOT NULL,
  `creador` varchar(255) NOT NULL DEFAULT 'desconocido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`idVideoJuego`, `genero`, `descripcion`, `nombreDelJuego`, `precio`, `fechaDeLanzamiento`, `rutaJuego`, `creador`) VALUES
(9, 'pelea', 'Mortal Kombat es un juego de lucha clásico donde varios guerreros combaten en un torneo mortal usando artes marciales y poderes especiales, famoso por su violencia y los icónicos fatalities.', 'Mortal Kombat', 100000.00, '2025-10-20', 'emulator/games/Mortal_Kombat_Europe_Beta_.sfc', ''),
(10, 'disparos', 'Metal Slug 2 es un juego de acción de disparos de desplazamiento lateral lanzado en 1998, donde los jugadores combaten al Ejército Rebelde del General Morden y a los invasores alienígenas', 'metal slug 2', 100000.00, '2025-10-20', 'emulator/games/Metal_slug_2.sfc', ''),
(11, 'combate', 'El juego arcade Alien vs. Predator de 1994 es un juego de lucha de desplazamiento lateral, o beat \'em up, donde hasta tres jugadores controlan a diferentes personajes, como Dutch Schaefer y la cyborg Linn Kurosawa, para luchar contra hordas de aliens', 'aliens vs predator', 100000.00, '2025-10-20', 'emulator/games/aliens_vs_depredator.sfc', ''),
(12, 'aventura', 'El juego sigue la aventura de Mario y Luigi mientras rescatan a la Princesa Peach de Bowser en el Reino Dinosaurio', 'super mario advance 2', 50000.00, '2025-10-20', 'emulator/games/Super_Mario_Advance_2.gba', ''),
(18, 'aventura', 'Pokémon Rojo Fuego es un videojuego de rol (RPG) para Game Boy Advance que es una versión mejorada de los juegos originales Pokémon Rojo y Pokémon Verde. Los jugadores exploran la región de Kanto para convertirse en el mejor entrenador Pokémon, ganando medallas de los líderes de gimnasio para enfrentarse a la Liga Pokémon.', 'Pokemon Rojo Fuego', 1000000.00, '2025-10-28', 'emulator/games/Pokemon_2004.gb', '1'),
(19, 'accion', 'Sonic Advance 3 es un juego de plataformas en 2D para Game Boy Advance donde controlas a Sonic y a un amigo a la vez, cada uno con habilidades únicas, para detener al Dr. Eggman. El juego incluye siete zonas, cada una dividida en tres actos y con un jefe final. Un elemento clave es la mecánica de \"equipo\", que permite combinar las habilidades de dos personajes para explorar diferentes partes de los niveles.', 'Sonic Advance 3', 100000.00, '2025-10-28', 'emulator/games/Sonic_Advance.gba', '1'),
(20, 'carreras', 'Need for Speed: Most wanted es un juego de carreras estilo arcade que fomenta la conducción temeraria. Los conductores intentan infringir las normas y evadir a la policía, obteniendo recompensas por ello. El juego también cuenta con una opción de chat abierto sin moderación.', 'Need for Speed: Most wanted', 1000000.00, '2025-10-28', 'emulator/games/Need_for_Speed.gba', '1'),
(21, 'aventura', 'Crash Bandicoot: The Huge Adventure es un juego de plataformas de desplazamiento lateral para Game Boy Advance, donde Crash debe recuperar 20 cristales para detener al Dr. Neo Cortex y su rayo que empequeñece la Tierra. El juego se basa en correr, saltar y golpear a través de niveles para recolectar cristales que su hermana Coco necesita para revertir el daño planetario.', 'Crash Bandicoot: The Huge Adventure', 100000.00, '2025-10-28', 'emulator/games/Crash_Bandicoot.gba', '1'),
(22, 'accion', 'Grand Theft Auto Advance es un juego de acción y aventura para la Game Boy Advance que sirve como precuela de Grand Theft Auto III, ambientado un año antes y centrado en el criminal Mike y su búsqueda de venganza en Liberty City. El juego incluye una jugabilidad clásica de vista cenital, misiones y vehículos, pero adaptada a las limitaciones de la consola, como la ausencia de canales de radio y diálogos de peatones.', 'Grand Theft Auto Advance', 100000.00, '2025-10-28', 'emulator/games/Gta_Advance.gba', '1');

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
(10, 12, 'https://www.youtube.com/embed/hs81jSrhOg0'),
(13, 18, 'https://www.youtube.com/embed/wgObHXprSOw'),
(15, 19, 'https://www.youtube.com/embed/7C4hd3BfUfw'),
(16, 20, 'https://www.youtube.com/embed/du1CCurnKq4'),
(17, 21, 'https://www.youtube.com/embed/OQvelBebPvY'),
(18, 22, 'https://www.youtube.com/embed/7wBBjgQk1Zk');

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
  ADD PRIMARY KEY (`idOpinion`),
  ADD KEY `FK_Opinion_Usuario` (`IDusuario`),
  ADD KEY `fk_opinion_videojuego` (`idVideoJuego`);

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
  MODIFY `idBiblioteca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `opinion`
--
ALTER TABLE `opinion`
  MODIFY `idOpinion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  MODIFY `idVideoJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `video_juego`
--
ALTER TABLE `video_juego`
  MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  ADD CONSTRAINT `FK_Opinion_Usuario` FOREIGN KEY (`IDusuario`) REFERENCES `usuario` (`IDusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_opinion_videojuego` FOREIGN KEY (`idVideoJuego`) REFERENCES `videojuego` (`idVideoJuego`);

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
