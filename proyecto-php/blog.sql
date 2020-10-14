-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 13-10-2020 a las 22:41:00
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Deportes'),
(2, 'Accion'),
(3, 'Autos'),
(4, 'Casino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

DROP TABLE IF EXISTS `entradas`;
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios` (`usuario_id`),
  KEY `fk_categorias` (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 1, 1, 'PES', 'PES 2020', '2020-09-23'),
(2, 1, 2, 'CS', 'CS GO', '2020-09-23'),
(3, 1, 3, 'Cars', 'Disney Cars', '2020-09-23'),
(4, 2, 1, 'FIFA', 'FIFA 2020', '2020-09-23'),
(5, 2, 2, 'Fortnit', 'Fortnite', '2020-09-23'),
(6, 2, 3, 'PCars', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-09-23'),
(7, 3, 1, 'UFC', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2020-09-23'),
(8, 3, 2, 'COD', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2020-09-23'),
(9, 3, 3, 'NFS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-09-23');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `entradas_con_nombres`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `entradas_con_nombres`;
CREATE TABLE IF NOT EXISTS `entradas_con_nombres` (
`id` int(255)
,`titulo` varchar(255)
,`Autor` varchar(100)
,`Cateogiras` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `fecha`) VALUES
(1, 'Gianfranco', 'Groppo', 'gianfranco@merguerian.com.ar', '1234', '2020-09-20'),
(2, 'Alfonso', 'Perez', 'alfonso@perez.com', '123123', '2015-05-06'),
(3, 'Pedro', 'Giemenz', 'pedro@gimenez.com', '1111', NULL),
(4, 'Rodrigo', 'Amuchastegui', 'Rodrigo@rodrigo.com', '111', '2017-09-20'),
(5, 'Martin', 'Livermann', 'martin@liverman.com.ar', 'adasd', '2020-09-24'),
(6, 'hola', 'nda', 'asd@asd.com', '$2y$04$dZUL6sDX3nwsefnqteThduml4m9OtLe7rUTaTiP6tBpEDVuinGF6q', '2020-10-10'),
(7, 'Ricardo', 'Montaner', 'ricky@gola.com', '$2y$04$xnE8ay09Weg/Xh90BlFiQOOtKoK1j/RGVWKDQyWlnvd6vKyYiKBo6', '2020-10-10'),
(8, 'ewqe\"', 'das\'', 'asfd@asd.com', '$2y$04$CqIzTgqzhkqn8W1zxsC/G.6FghIZSA5p0tzS6yBDE3VEIeUVnUJ3K', '2020-10-10'),
(9, 'ewujqe\"', 'jhgjg\'', 'aggsfd@asd.com', '$2y$04$f6P9xfXPWJ5e/WKsDmM3ku5Qrcj7HLvOHf6x9uRIbZQggXUviybCm', '2020-10-10'),
(10, 'Rigoberto', 'Sanchez', 'rigo@mailchu.com', '$2y$04$/G90IW6AX25GztI4mmFovemMzf4DwioPhEXAyFU4Hu4p0fZGaJUti', '2020-10-10'),
(11, 'Jorge', 'Andradre', 'andrea@asd.com', '$2y$04$oPvHVtBSklr1Lo/kU.z2C.M6Nwrrn1eptx2Icy2rGRCi/JCyf9Lc2', '2020-10-10'),
(12, 'Armando', 'Perez', 'armando@perez.com', '$2y$04$NxcbSyg/mLShKGx1dpEKvO9rQF07hKjXy.LsDqWNK0n41Z33BFd3C', '2020-10-12');

-- --------------------------------------------------------

--
-- Estructura para la vista `entradas_con_nombres`
--
DROP TABLE IF EXISTS `entradas_con_nombres`;

DROP VIEW IF EXISTS `entradas_con_nombres`;
CREATE ALGORITHM=UNDEFINED DEFINER=`gian`@`localhost` SQL SECURITY DEFINER VIEW `entradas_con_nombres`  AS  select `e`.`id` AS `id`,`e`.`titulo` AS `titulo`,`u`.`nombre` AS `Autor`,`c`.`nombre` AS `Cateogiras` from ((`entradas` `e` join `usuarios` `u` on(`e`.`usuario_id` = `u`.`id`)) join `categorias` `c` on(`e`.`categoria_id` = `c`.`id`)) ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fk_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
