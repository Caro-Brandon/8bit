-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2025 a las 02:41:35
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
(7, 4, 22),
(8, 4, 23),
(9, 4, 24),
(10, 4, 25),
(11, 4, 26),
(12, 4, 27),
(13, 4, 28),
(14, 4, 29),
(15, 4, 30),
(16, 4, 31),
(17, 4, 32),
(18, 4, 33),
(19, 4, 34),
(20, 4, 35),
(21, 4, 36);

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
(61, 22, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxbqgbNpY88aXs6k2lI1Fq93Pfy4XtDE4z8gRggRoSbovqlMu_ljwRh8sM6Ts-gJ-Qea0&usqp=CAU', 'galeria', 4),
(62, 23, 'https://static0.gamerantimages.com/wordpress/wp-content/uploads/2024/12/mixcollage-28-dec-2024-07-56-pm-2935.jpg?q=50&fit=crop&w=480&h=600&dpr=1.5', 'portada', 1),
(63, 23, 'https://i.ytimg.com/vi/K-E5qpRjFrk/maxresdefault.jpg', 'galeria', 2),
(64, 23, 'https://oldgameshelf.com/roms/gba/fifa-2007/images/gba_fifa_2007_2.jpg', 'galeria', 3),
(65, 23, 'https://i.ytimg.com/vi/-R9h3xm3glg/hqdefault.jpg', 'galeria', 4),
(66, 24, 'https://assets-prd.ignimgs.com/2022/01/21/spiderman3-gba-sq-1642793342926.jpg', 'portada', 1),
(67, 24, 'https://media.retroachievements.org/Images/034319.png', 'galeria', 2),
(68, 24, 'https://r.mprd.se/GBA/snaps/2732.png', 'galeria', 3),
(69, 24, 'https://comicbookvideogames.com/wp-content/uploads/2017/02/spider-man-3-hint-system.jpg', 'galeria', 4),
(70, 25, 'https://assets.altarofgaming.com/wp-content/uploads/2021/12/pokemon-leaf-green-version-game-cover-altar-of-gaming.jpg', 'portada', 1),
(71, 25, 'https://i.ytimg.com/vi/3zFfGXPTYQs/maxresdefault.jpg', 'galeria', 2),
(72, 25, 'https://assets1.ignimgs.com/2004/08/31/pokemon-fireredleafgreen-20040831021007484-923327.jpg', 'galeria', 3),
(73, 25, 'https://pm1.aminoapps.com/7938/406492c492aa50f62813d1879286c6f73b416724r1-1080-727v2_hq.jpg', 'galeria', 4),
(74, 26, 'https://i.ytimg.com/vi/tYr3evcAtJs/mqdefault.jpg', 'portada', 1),
(75, 26, 'https://i.imgur.com/LR12WvW.jpeg', 'galeria', 2),
(76, 26, 'https://i.imgur.com/4w7MDFr.jpeg', 'galeria', 3),
(77, 26, 'https://i.imgur.com/6hSds5G.jpeg', 'galeria', 4),
(78, 27, 'https://www.nintendo.com/eu/media/images/10_share_images/games_15/game_boy_advance_7/SI_GBA_KirbyNightmareInDreamland.jpg', 'portada', 1),
(79, 27, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYcWTSmfJ05eHyryKyFLE7yNX1-7HmlqEv3A&s', 'galeria', 2),
(80, 27, 'https://m.media-amazon.com/images/I/51VGTFISBDL._AC_UF1000,1000_QL80_.jpg', 'galeria', 3),
(81, 27, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjE7OQpQKKpRi4tfMcI2dxCRPIU_uxyXa-wnpX90-43mNJw-FrhUe2_M2FVRYWzdb4CZs&usqp=CAU', 'galeria', 4),
(82, 28, 'https://media.vandal.net/m/30299/super-mario-64-cv-201542164822_1.jpg', 'portada', 1),
(83, 28, 'https://cdn.mobygames.com/screenshots/10782573-super-mario-64-nintendo-64-going-to-the-castle.jpg', 'galeria', 2),
(84, 28, 'https://media.revistagq.com/photos/60ec6c8854e0443ce59c77e1/master/pass/super%20mario%2064.jpeg', 'galeria', 3),
(85, 28, 'https://dailygame.at/wp-content/uploads/2022/03/Mario-64.jpg', 'galeria', 4),
(86, 29, 'https://i.ytimg.com/vi/VDTK9uIs71A/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDozdnI0KgRh2ULMzRalEHNQUwdnA', 'portada', 1),
(87, 29, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-uuxz-zfn3Q5CLFiPlAr00q9MmWvpYyxGRQ&s', 'galeria', 2),
(88, 29, 'https://tcrf.net/images/4/46/ToyStory2N64-enemy2.png', 'galeria', 3),
(89, 29, 'https://i.ytimg.com/vi/DOeJwX7BI0A/hqdefault.jpg', 'galeria', 4),
(90, 30, 'https://i.ytimg.com/vi/5yLp7Lr9yp4/maxresdefault.jpg', 'portada', 1),
(91, 30, 'https://www.mario64.nl/Plaatjes/N64-spel_large/F1_Racing_Championship4.jpg', 'galeria', 2),
(92, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFXbV0eu4zBdfJ6GI5pzemn-ZonpI1dUibhDhtIEvEN9RYIwRu1lYrM-rDbLBoSt35SZg&usqp=CAU', 'galeria', 3),
(93, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh3LjotuwJyzUb9T--3VR7K3Ch98MsE6XuxQ&s', 'galeria', 4),
(94, 31, 'https://altarofgaming.com/wp-content/uploads/2022/01/harry-potter-and-the-sorcerers-stone-game-cover-altar-of-gaming.jpg', 'portada', 1),
(95, 31, 'https://www.vgmuseum.com/end/gba/b/harrysor-4.png', 'galeria', 2),
(96, 31, 'https://i.ytimg.com/vi/DzypJ2tJL2Q/maxresdefault.jpg', 'galeria', 3),
(97, 31, 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgX3dqOXo2cvNB0bHE4RZpjLvI4zzkkPGBNYysjTTA-9M9kZ4xQdoWZiCz9L3ZxjYPEXa7V6Wy9JzhaUc7YkwjIA1tSOQIYS5lSlA0Rlkh2x_MXaCZk5Bpq1UJ_R133-4jJc4TVwPNJdD5P/s1600/HPSSGBA2.jpg', 'galeria', 4),
(98, 32, 'https://i.ytimg.com/vi/2fu2NWZL4es/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLA3h_ICc7E5Gvh-niMgoAGaEcaQQg', 'portada', 1),
(99, 32, 'https://i.ytimg.com/vi/6iwcpl2-faE/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AHeA4ACwAKKAgwIABABGHIgUSgvMA8=&rs=AOn4CLAGwqTvwr_NuLjpRhQZgycjgKzr2w', 'galeria', 2),
(100, 32, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbkWFJANBIchdbbm4c2YKtheB79gzF5l_Z1A&s', 'galeria', 3),
(101, 32, 'https://dn721606.ca.archive.org/0/items/naruto-ninja-council/screenshot_22.png', 'galeria', 4),
(102, 33, 'https://assets-prd.ignimgs.com/2022/02/28/ff6advance-1646091365970.jpg?crop=1%3A1%2Csmart&format=jpg&auto=webp&quality=80', 'portada', 1),
(103, 33, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn5hyZFg2kJJbwPSlXPAd5s2VSeVB1jY4KjVdBJynqA9MShZTuB3pDM2FE2_xv75WMdz4&usqp=CAU', 'galeria', 2),
(104, 33, 'https://media.retroachievements.org/Images/005283.png', 'galeria', 3),
(105, 33, 'https://www.retroplace.com/pics/gba/ingames/60971--final-fantasy-vi-advance.png', 'galeria', 4),
(106, 34, 'https://m.media-amazon.com/images/I/A1pm8fy2ZgL.png', 'portada', 1),
(107, 34, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvNAPWeejBs8n-0WprlT6U9I2DFVVCJBduog&s', 'galeria', 2),
(108, 34, 'https://s.uvlist.net/l/y2011/04/83891.jpg', 'galeria', 3),
(109, 34, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyiYOksZhxS5b_rgxEF02wwluk_rB0-91ds_lL9-97ObCRDIn8RsZbHdJC2qd3ICOoVS0&usqp=CAU', 'galeria', 4),
(110, 35, 'https://www.nintendo.com/eu/media/images/10_share_images/games_15/game_boy_advance_7/SI_GBA_PokemonRuby_esES_image1600w.jpg', 'portada', 1),
(111, 35, 'https://www.mariogba.nl/Plaatjes/GBA_spel_large/Pokemon_Ruby_Version3.png', 'galeria', 2),
(112, 35, 'https://2.bp.blogspot.com/-MtqiitxjqAI/W64egaKZweI/AAAAAAAAn40/jQzmvx877h8lxhlPIy_yynUNr9HUbwmhACLcBGAs/w1200-h630-p-k-no-nu/pokemon-ruby.png', 'galeria', 3),
(113, 35, 'https://m.media-amazon.com/images/I/51vBEz3dFeL._AC_UF350,350_QL80_.jpg', 'galeria', 4),
(114, 36, 'https://cdn2.steamgriddb.com/thumb/d0683d8499a7dbd42ee1abbb938e090b.jpg', 'portada', 1),
(115, 36, 'https://m.media-amazon.com/images/M/MV5BOTk1MDU4MmQtZjBlZC00ZmQ2LTgzYmYtZDAxZTc3NDZkMTE2XkEyXkFqcGc@._V1_.jpg', 'galeria', 2),
(116, 36, 'https://media.retroachievements.org/Images/095165.png', 'galeria', 3),
(117, 36, 'https://cdn.mobygames.com/screenshots/15732198-dragon-ball-z-the-legacy-of-goku-ii-game-boy-advance-did-he-surv.png', 'galeria', 4),
(118, 37, 'https://i.ytimg.com/vi/cXdSkMfQ2Fg/mqdefault.jpg', 'portada', 1),
(119, 37, 'https://assets2.ignimgs.com/2002/08/27/tarzan_082702_3-434962.jpg', 'galeria', 2),
(120, 37, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeDS1SC7djbvNhc5Tk6ewWClqSrIev5-tBIzla_x6pJsEOQPOK1OmV1SpTlTKFb2d7X38&usqp=CAU', 'galeria', 3),
(121, 37, 'https://i.ytimg.com/vi/14s8JcnguSI/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCipJ9H_uZXgjvJ50JGcJNREG2Tzw', 'galeria', 4),
(122, 38, 'https://assets-prd.ignimgs.com/2024/01/06/galagagbc-1704507507586.jpg', 'portada', 1),
(123, 38, 'https://assets2.ignimgs.com/2000/11/02/galaga3-192059.jpg', 'galeria', 2),
(124, 38, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTInNyjwzWzaIB22-FTPpY1empr_Gpr5CTicpm0_2LbnX82NMWdBdhlPMDnG8TAAKqUGzQ&usqp=CAU', 'galeria', 3),
(125, 38, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShknv3P_E1LmjDB41qBSaniUF5BulDboMUCr3sQktyF_cuzzY57OO0garuyaydpqye02s&usqp=CAU', 'galeria', 4);

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
(22, 'accion', 'Grand Theft Auto Advance es un juego de acción y aventura para la Game Boy Advance que sirve como precuela de Grand Theft Auto III, ambientado un año antes y centrado en el criminal Mike y su búsqueda de venganza en Liberty City. El juego incluye una jugabilidad clásica de vista cenital, misiones y vehículos, pero adaptada a las limitaciones de la consola, como la ausencia de canales de radio y diálogos de peatones.', 'Grand Theft Auto Advance', 100000.00, '2025-10-28', 'emulator/games/Gta_Advance.gba', '1'),
(23, 'deportes', 'FIFA 07 para Game Boy Advance (GBA) es un videojuego de fútbol desarrollado por EA Sports que ofrece una experiencia auténtica con controles intuitivos y gráficos adaptados para la consola portátil. Incluye modos como Temporada, Torneo y Partidos Amistosos, permitiendo a los jugadores elegir entre una amplia selección de equipos y ligas del mundo real.', 'Fifa 2007', 100000.00, '2025-10-28', 'emulator/games/Fifa_2007.gba', '1'),
(24, 'accion', 'Spider-Man 3 es un beat \'em up de desplazamiento lateral en 2D, centrado en la acción y la lucha contra villanos de la película. A diferencia de otras versiones, el modo del traje negro se activa como una \"furia\" temporal al llenar una barra, perdiéndose si el jugador recibe daño.', 'Spider man 3', 100000.00, '2025-10-28', 'emulator/games/Spiderman_3.gba', '1'),
(25, 'aventura', 'Pokémon Verde Hoja es un remake de los juegos originales de Pokémon que se lanzó para Game Boy Advance. Se ambienta en la región de Kanto e incluye gráficos y jugabilidad mejorados, la adición de nuevas islas llamadas Islas Sevii, y nuevas características como el adaptador inalámbrico para intercambiar y luchar con amigos, además de la posibilidad de obtener Pokémon de las regiones de Johto y Hoenn.', 'Pokemon Verde Hoja', 100000.00, '2025-10-28', 'emulator/games/Pokemon_2006.gba', '1'),
(26, 'aventura', 'Pokémon Esmeralda es un videojuego de rol de 2004 para Game Boy Advance, considerado una versión mejorada y superior de Pokémon Rubí y Zafiro, y el cierre de la tercera generación Pokémon. Destaca por su historia mejorada, que une la trama del Equipo Magma y el Equipo Aqua, la incorporación del Pokémon legendario Rayquaza y la inclusión del Frente de Batalla.', 'Pokemon Esmeralda', 100000.00, '2025-10-28', 'emulator/games/Pokemon_2008.gba', '1'),
(27, 'accion', 'Kirby: Nightmare in Dream Land es un juego de plataformas de acción para Game Boy Advance lanzado en 2002, que es un remake mejorado de Kirby\'s Adventure de NES. En él, Kirby debe recuperar la Varita Estelar del Rey DeDeDe, quien robó sus fragmentos y robó la capacidad de soñar a los habitantes de Dream Land.\r\n', 'Kirby: Nightmare in Dream Land', 100000.00, '2025-10-28', 'emulator/games/Kirby_Nightmare.gba', '1'),
(28, 'aventura', 'Super Mario 64 es un videojuego de plataformas en 3D que marcó un hito por su innovación en el control de movimiento y la cámara en un entorno tridimensional. El objetivo del jugador es controlar a Mario para explorar el castillo de la Princesa Peach y recolectar estrellas de poder, las cuales permiten acceder a nuevos niveles. Los niveles son mundos cerrados, donde el jugador es libre de explorar y completar diversas misiones para obtener las estrellas.', 'Super Mario 64', 100000.00, '2025-10-28', 'emulator/games/Mario_64.z64', '1'),
(29, 'accion', 'Toy Story 2: Buzz Lightyear al Rescate! es un videojuego de plataformas en tercera persona donde controlas a Buzz Lightyear para rescatar a Woody, secuestrado por un coleccionista de juguetes. El juego combina acción de plataformas con exploración de escenarios de la película, recolectando fichas de Pizza Planeta para avanzar.', 'Toy Story 2: Buzz Lightyear al Rescate!', 100000.00, '2025-10-28', 'emulator/games/Toy_Story_2.z64', '1'),
(30, 'carreras', 'F1 Racing Championship es un simulador de carreras de Fórmula 1 para Nintendo 64 que ofrece una experiencia realista con licencias oficiales de la temporada 1999, aunque con una inteligencia artificial (IA) deficiente y algunos errores técnicos. El juego permite ajustar la configuración del coche, incluyendo la aerodinámica, los neumáticos y el combustible.', 'F1 Racing Championship', 100000.00, '2025-10-28', 'emulator/games/F1_Racing.z64', '1'),
(31, 'aventura', 'Harry Potter y la Pieda Filosofal es un juego de aventuras y puzles en vista cenital que adapta la novela del mismo nombre. El jugador controla a Harry Potter, asistiendo a clases para aprender hechizos, resolviendo acertijos en laberintos, recolectando objetos, y participando en minijuegos como el Quidditch para salvar a Hogwarts y a la Piedra Filosofal.', 'Harry Potter y la Piedra Filosofal', 100000.00, '2025-10-28', 'emulator/games/Harry_Potter.gba', '1'),
(32, 'aventura', 'Naruto: Ninja Council es un juego de acción y plataformas de desplazamiento lateral que sigue la historia del anime, donde puedes jugar como Naruto o Sasuke para completar misiones y derrotar enemigos. Al terminar el juego con ambos personajes, se desbloquea a Kakashi. El juego mezcla plataformas, combates de \"beat \'em up\" y la recolección de pergaminos para usar ataques de chakra.', 'Naruto Ninja Council', 70000.00, '2025-10-28', 'emulator/games/Naruto.gba', '1'),
(33, 'aventura', 'Final Fantasy es una saga de videojuegos de rol japoneses donde cada entrega principal tiene una historia independiente, usualmente centrada en un grupo de héroes que deben luchar contra un gran enemigo para salvar el mundo. Los juegos se caracterizan por sus mundos de fantasía épica, personajes memorables, combates con magia, invocaciones y elementos recurrentes como los chocobos, moguris y naves voladoras.', 'Final Fantasy VI Advance', 90000.00, '2025-10-28', 'emulator/games/Final_Fantasy.gba', '1'),
(34, 'carreras', 'Cars: Mater-National Championship es un videojuego de carreras de 2007, secuela de Cars: El Videojuego, donde los jugadores compiten en el primer Campeonato Mater-Nacional en Radiador Springs. El juego presenta un mundo abierto expandido de Radiador Springs, nuevos personajes internacionales, 20+ minijuegos y 7 nuevas pistas de carreras.', 'Cars Mater National Championship', 100000.00, '2025-10-29', 'emulator/games/Cars_Mater.gba', '1'),
(35, 'aventura', 'Pokémon Rubí es un videojuego de rol para la Game Boy Advance que te permite iniciar una aventura en la región de Hoenn, capturar y entrenar Pokémon, y convertirte en el campeón de la Liga Pokémon. El juego destaca por introducir batallas dobles, nuevos Pokémon, y la región de Hoenn, además de los Concursos Pokémon como una forma alternativa de juego.', 'Pokemon Rubi', 150000.00, '2025-10-29', 'emulator/games/Pokemon_Ruby.gba', '1'),
(36, 'aventura', 'Dragon Ball Z: The Legacy of Goku II es un videojuego de acción y aventura con elementos de rol para Game Boy Advance que narra las sagas de los Androides y Cell. Los jugadores pueden jugar como varios personajes, como Gohan, Piccolo, Vegeta, Trunks y Goku, subir de nivel, desbloquear transformaciones Super Saiyajin y completar misiones. Ofrece una experiencia más profunda que su predecesor, con una historia más compleja, combate mejorado y un mundo de juego más expansivo.', 'Dragon Ball Z: Legacy of Goku II', 120000.00, '2025-10-29', 'emulator/games/Dragonball_Z.gba', '1'),
(37, 'accion', 'Tarzan: Return to the Jungle es un videojuego de plataformas de acción para Game Boy Advance en el que los jugadores controlan a Tarzán desde la niñez hasta la adultez. La trama gira en torno a la amenaza de la malvada Reina La y los cazadores furtivos en la jungla, quienes intentan apoderarse de la selva y robar huevos de dinosaurio.El juego presenta un gameplay de plataformas que incluye columpiarse en lianas, surfear en árboles y nadar por pantanos.', 'Tarzan: Return to the jungle', 175000.00, '2025-10-29', 'emulator/games/Tarzan.gba', '1'),
(38, 'disparos', 'versión moderna del clásico Galaga, donde pilotás una nave y enfrentás oleadas de enemigos alienígenas en distintos planetas.', 'Galaga - Destination Earth', 150000.00, '2025-10-30', 'emulator/games/Galaga_Destination_Earth_(USA).gbc', '1');

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
(18, 22, 'https://www.youtube.com/embed/7wBBjgQk1Zk'),
(19, 23, 'https://www.youtube.com/embed/yU7hjv7zvRY'),
(20, 24, 'https://www.youtube.com/embed/v5_yEzPf0-M'),
(21, 25, 'https://www.youtube.com/embed/Az5aBvofoVw'),
(22, 26, 'https://www.youtube.com/embed/5LxJEOJ4k-g'),
(23, 27, 'https://www.youtube.com/embed/JBSyUDcs6fs'),
(24, 28, 'https://www.youtube.com/embed/8Fk5sRwbEWI'),
(25, 29, 'https://www.youtube.com/embed/E9y3jXpSUwI'),
(26, 30, 'https://www.youtube.com/embed/tT5YWDGpj-w'),
(27, 31, 'https://www.youtube.com/embed/xbOEa3tddTo'),
(28, 32, 'https://www.youtube.com/embed/aMax1rVYxcw'),
(29, 33, 'https://www.youtube.com/embed/cDyk9VwG3P8'),
(30, 34, 'https://www.youtube.com/embed/2-CyuqtyusM'),
(31, 35, 'https://www.youtube.com/embed/RJHEyUKAd7s'),
(32, 36, 'https://www.youtube.com/embed/t7fsN6W7JGs'),
(33, 37, 'https://www.youtube.com/embed/R66Hu68ZJ6U'),
(34, 38, 'https://www.youtube.com/embed/nqTbWPvRQ3g');

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
  MODIFY `idBiblioteca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

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
  MODIFY `idVideoJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `video_juego`
--
ALTER TABLE `video_juego`
  MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
