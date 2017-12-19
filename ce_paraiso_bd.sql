-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2017 a las 16:38:00
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ce_paraiso_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `codigo` int(11) NOT NULL,
  `codigo_personal` int(11) NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`codigo`, `codigo_personal`, `telefono`) VALUES
(1, 2, '888888'),
(2, 7, '888888'),
(3, 8, '8888888'),
(4, 10, '8888888'),
(5, 13, '8888888'),
(6, 18, '8888888'),
(7, 24, '8888888'),
(8, 30, '8888888'),
(9, 36, '8888888'),
(10, 41, '8888888'),
(11, 46, '8888888'),
(12, 47, '8888888'),
(14, 51, '8888888'),
(15, 53, '8888888'),
(16, 54, '8888888'),
(17, 56, '8888888'),
(18, 57, '8888888'),
(19, 62, '8888888'),
(20, 63, '8888888'),
(21, 69, '8888888'),
(22, 73, '888888'),
(23, 74, '8888888'),
(24, 77, '8888888'),
(25, 83, '8888888'),
(26, 86, '8888888'),
(27, 92, '8888888'),
(28, 100, '8888888'),
(29, 112, '8888888'),
(30, 121, '8888888'),
(31, 128, '8888888'),
(32, 136, '8888888'),
(33, 137, '8888888'),
(34, 140, '8888888'),
(35, 143, '8888888'),
(36, 145, '8888888'),
(37, 146, '8888888'),
(38, 148, '8888888'),
(39, 158, '8888888'),
(40, 164, '8888888'),
(41, 165, '8888888'),
(42, 168, '8888888'),
(43, 139, '8888888'),
(44, 152, '88888888'),
(45, 181, '888888'),
(46, 187, '888888'),
(47, 190, '888888'),
(48, 194, '888888'),
(57, 3, '71577074');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(3000) COLLATE utf8_spanish_ci NOT NULL,
  `institucion` int(11) NOT NULL,
  `administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`codigo`, `nombre`, `descripcion`, `institucion`, `administrador`) VALUES
(1, 'Área Nocturna', 'Descripción Área nocturna', 1, 22),
(2, 'Plan Nacional', 'Descripción Área Vocacional', 1, 57),
(3, 'Área Diurno', 'Descripción Área Diurno', 1, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_departamento`
--

CREATE TABLE `area_departamento` (
  `area` int(11) NOT NULL,
  `departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `area_departamento`
--

INSERT INTO `area_departamento` (`area`, `departamento`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 49),
(2, 50),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(3, 37),
(3, 38),
(3, 39),
(3, 40),
(3, 41),
(3, 42),
(3, 43),
(3, 44),
(3, 45),
(3, 46),
(3, 47),
(3, 48),
(3, 51),
(3, 52),
(3, 53),
(3, 54);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite`
--

CREATE TABLE `comite` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `institucion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`codigo`, `nombre`, `descripcion`, `administrador`) VALUES
(1, 'Administrativos', 'Descripción departamento administrativos', 1),
(2, 'Biblioteca', 'Descripción Biblioteca', 2),
(3, 'Orientación', 'Descripción', 3),
(4, 'Servicios Generales', 'Descripción', 4),
(5, 'Español', 'Descripción', 5),
(6, 'Estudios Sociales', 'Descripción', 6),
(7, 'Matemáticas', 'Descripción', 7),
(8, 'Ciencias', 'Descripción', 8),
(9, 'Inglés', 'Descripción', 9),
(10, 'Inglés Conversacional, Música, Turismo y Contabili', 'Descripción', 10),
(11, 'Ética', 'Descripción', 11),
(12, 'Seguridad', 'Descripción', 12),
(13, 'Artes Industriales', 'Descripción', 14),
(14, 'Religión', 'Descripción', 15),
(15, 'Académicas', 'Descripción', 16),
(16, 'Audición y Lenguaje', 'Descripción', 17),
(17, 'Educación para el Hogar', 'Descripción', 18),
(18, 'Agroecología', 'Descripción', 19),
(19, 'Inglés', 'Descripción', 20),
(20, 'Música', 'Descripción', 21),
(21, 'Administrativo Docente', 'Descripción departamento', 23),
(22, 'Orientación', 'Descripción departamento', 24),
(23, 'Biblioteca', 'Descripción departamento', 25),
(24, 'Auxiliares Administrativos', 'Descripción departamento', 26),
(25, 'Administrativo', 'Descripción departamento', 22),
(26, 'Español', 'Descripción departamento', 27),
(27, 'Estudios Sociales', 'Descripción departamento', 28),
(28, 'Matemática', 'Descripción departamento', 29),
(29, 'Ciencias', 'Descripción departamento', 30),
(30, 'Química', 'Descripción departamento', 30),
(31, 'Biología', 'Descripción departamento', 30),
(32, 'Física', 'Descripción departamento', 30),
(33, 'Inglés', 'Descripción departamento', 31),
(34, 'Francés', 'Descripción departamento', 32),
(35, 'Música', 'Descripción departamento', 33),
(36, 'Artes Plásticas', 'Descripción departamento', 34),
(37, 'Psicología', 'Descripción departamento', 35),
(38, 'Filosofía', 'Descripción departamento', 36),
(39, 'Religión', 'Descripción departamento', 37),
(40, 'Educación Física', 'Descripción departamento', 38),
(41, 'Educación para la Vida Cotidiana', 'Descripción departamento', 39),
(42, 'Artes Industriales', 'Descripción departamento', 40),
(43, 'Informática', 'Descripción departamento', 41),
(44, 'Tecnología', 'Descripción departamento', 42),
(45, 'Turismo', 'Descripción departamento', 42),
(46, 'Diseño Publicitario', 'Descripción departamento', 42),
(47, 'Gestión Empresarial', 'Descripción departamento', 42),
(48, 'Contabilidad', 'Descripción departamento', 42),
(49, 'Artes Plásticas', 'Descripción Artes Plásticas Vocacional', 43),
(50, 'Educación Física', 'Descripción Educación Física Vocacional', 44),
(51, 'Misceláneos', 'Descripción Departamento', 45),
(52, 'Comedor', 'Descripción Departamento', 46),
(53, 'Agentes de Seguridad', 'Descripción Departamento', 47),
(54, 'Jardinería', 'Descripción Departamento', 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `historia` varchar(6000) COLLATE utf8_spanish_ci NOT NULL,
  `encargados` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(3000) COLLATE utf8_spanish_ci NOT NULL,
  `objetivos` varchar(3000) COLLATE utf8_spanish_ci NOT NULL,
  `mision` varchar(3000) COLLATE utf8_spanish_ci NOT NULL,
  `vision` varchar(3000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`codigo`, `nombre`, `ubicacion`, `historia`, `encargados`, `telefono`, `descripcion`, `objetivos`, `mision`, `vision`) VALUES
(1, 'Liceo de Paraíso', 'Centro Educativo Liceo Paraíso, Provincia de Cartago, Paraíso, Costa Rica', 'El Liceo de Paraíso inicia labores en 1969, y constituye el primer centro educativo de secundaria en Paraíso que se crea por un Proyecto de Ley No. 4106, del 28 de mayo de 1968, publicado en la Gaceta No. 125 del 1 de junio. Abrió sus puertas en febrero de 1969.Constituye una dependencia pública, con la categoría de Dirección 3, su código presupuestario es el No. 1399-155 y su personería jurídica es la No. 3-008051725.\r\n\r\nEste Liceo se encuentra ubicado en el Barrio San Antonio de la Ciudad de Paraíso, Distrito Primero del Cantón del mismo nombre, Provincia de Cartago. Sus instalaciones se encuentran emplazadas en una finca de 22 hectáreas, situada en la periferia Sur del área de la ciudad.\r\n                        ', 'Dirección Liceo de Paraíso.\r\n\r\nMSc. Guillermo Zúñiga Cerdas | Director del Liceo de Paraíso.\r\n\r\nMSc. Andrea Araya González | Sub-Directora del Liceo de Paraíso.', '(506) 2574-7404 ', 'El propósito general del Blog Institucional del centro educativo Liceo de Paraíso es contar con un espacio Colaborativo por parte de su personal para brindar información por departamentos, proyectos y servicios que brinda dicha institución.', 'Objetivos', 'El Liceo de Paraíso es una institución de educación pública al servicio de la comunidad, que alberga tres modalidades curriculares diferentes, en procura de la formación de jóvenes, de acuerdo a los lineamientos de la Política Educativa vigente, dentro de un marco filosófico que integre el humanismo, el reconstructivismo y racionalismo, cuyo norte es que la excelencia se proyecte en el estudiante.', 'El Liceo de Paraíso seguirá siendo la institución de educación pública líder del Cantón de Paraíso, que abraza tres modalidades a nivel de secundaria, cuyos esfuerzos estarán siempre dirigidos a contribuir en la formación integral de ciudadanos, que además de forjar su proyecto de vida, puedan apoyar el desarrollo social, político y económico de nuestra nación.\r\n                        ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_publicacion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_expericaion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`codigo`, `nombre`, `apellidos`, `correo`) VALUES
(1, 'Luis Gerardo', 'Leiva Arrieta', 'yulienht@gmail.com'),
(2, 'Arnoldo', 'Brenes Jiménez', NULL),
(3, 'Jorge Arturo', 'Arce Sáenz', 'yulienht@gmail.com'),
(4, 'Wendy', 'Brenes García', NULL),
(5, 'Rebeca', 'Loría Villareal', NULL),
(6, 'Cecilia', 'Brenes Quiros', NULL),
(7, 'María Fernanda', 'Mora Andrade', NULL),
(8, 'Lorena', 'Segura Abarca', NULL),
(9, 'Nataly', 'Alvarado Rivera', NULL),
(10, 'Nelson', 'Alvarado Solano', NULL),
(11, 'Carlos', 'Chaves Chaves', NULL),
(12, 'Grettel', 'Quesada Arias', NULL),
(13, 'Yansi', 'Díaz Ureña', NULL),
(14, 'Carlos Alberto', 'Robles Jiménez', NULL),
(15, 'Carolina', 'Solano Madrigal', NULL),
(16, 'Ligia', 'García Marengo', NULL),
(17, 'Rolando', 'Quesada Quiros', NULL),
(18, 'Fabricio', 'Maroto Roldan', NULL),
(19, 'Elizabeth', 'Monge Fuentes', NULL),
(20, 'Juan Francisco', 'Orozco Gamboa', NULL),
(21, 'Alexandra', 'Vega Serrano', NULL),
(22, 'Michael', 'Zuñiga Cascante', NULL),
(23, 'Gerardo Arturo', 'Masis Mata', NULL),
(24, 'Pablo', 'Acosta Rivera', NULL),
(25, 'Ana Beatriz', 'Guerrero Luna', NULL),
(26, 'Luis Fernando', 'Piedra Morera', NULL),
(27, 'Jhonny', 'Villalta Valladares', NULL),
(28, 'Wesly', 'Arce Loría', NULL),
(29, 'Linnet', 'Quesada Martínez', NULL),
(30, 'Milaneth ', 'Barahona Chaves', NULL),
(31, 'Marco Antonio', 'Chinchilla Obando', NULL),
(32, 'Greddy', 'Loría Machado', NULL),
(33, 'Gabriela', 'Smith Coto', NULL),
(34, 'Ana Sofía', 'Solano Solano', NULL),
(35, 'Isabel', 'Vargas Portuguez', NULL),
(36, 'Juan Carlos', 'Aguilar Fernández', NULL),
(37, 'Marlen', 'Alvarado Morales', NULL),
(38, 'Mario', 'Sanchez Araya', NULL),
(39, 'Jose Manuel', 'Ramirez Alvarado', NULL),
(40, 'Vivian', 'Martinez Brenes', NULL),
(41, 'Tatiana', 'Pereira Rodriguez', NULL),
(42, 'Meyling', 'Achoy Vargas', NULL),
(43, 'María Marta', 'Brenes Rojas', NULL),
(44, 'Katherin', 'Vásquez Espinoza', NULL),
(45, 'Luis Javier', 'Soto Salazar', NULL),
(46, 'Lourdes', 'Sanabria Mata', NULL),
(47, 'Carlos Humberto', 'Molina Cortes', NULL),
(48, 'Marvin', 'Mora Brenes', NULL),
(49, 'Marta María', 'Astorga Quiros', NULL),
(50, 'Rock Evans', 'Pereira Reyes', 'yulienht@gmail.com'),
(51, 'Jonathan', 'Abarca Pacheco', NULL),
(52, 'Yerny', 'Ángulo Chacón', NULL),
(53, 'Eduardo', 'Calvo Fernández', NULL),
(54, 'María del Rocío', 'Calvo Jiménez', NULL),
(55, 'Lady', 'Casasola Luna', NULL),
(56, 'Jorge Alberto', 'Cortés Rojas', NULL),
(57, 'Griselda', 'Chacón Matamoros', NULL),
(58, 'Bryan', 'Claudel Brenes', NULL),
(59, 'Eduardo', 'Guadamuz Vargas', NULL),
(60, 'Silvia Melissa', 'Jiménez Araya', NULL),
(61, 'Inesita', 'Jiménez Sánchez', NULL),
(62, 'Lorca', 'León Cayasso', NULL),
(63, 'Geovanny Samuel', 'Lobo Ávila', NULL),
(64, 'Adelina', 'MartInez Guevara', NULL),
(65, 'Sheira', 'Navarro Vargas', NULL),
(66, 'Maribel', 'Parajeles Gatita', NULL),
(67, 'Vera', 'Quesada Monge', NULL),
(68, 'Noemy', 'Quesada Quesada', NULL),
(69, 'Bryan Esteban', 'Rojas Orozco', NULL),
(70, 'Xinia Lourdes', 'Sanabria Mata', NULL),
(71, 'Sharon', 'Solano Arrieta', NULL),
(72, 'Alexandra', 'Vega Moya', NULL),
(73, 'Marisol', 'Garita Elizondo', 'yulienht@gmail.com'),
(74, 'María Andrea', 'Araya González', NULL),
(75, 'Marco Tulio', 'Fernández Hernández', NULL),
(76, 'María Elena', 'Guerrero Vargas', NULL),
(77, 'Ruth', 'López Bermúdez', NULL),
(78, 'Priscilla', 'Monge Valverde', NULL),
(79, 'Mayra', 'Rodriguéz Matarrita', NULL),
(80, 'Ivette', 'Sojo Granados', NULL),
(81, 'Andrea', 'Solano Víquez', NULL),
(82, 'Victoria Eugenia', 'Peña Roselló', NULL),
(83, 'Danny', 'Torres Calderón', NULL),
(84, 'Johnny', 'Arguello Vargas', NULL),
(85, 'Shirley', 'Blanco Fallas', NULL),
(86, 'Yorleny', 'Irola Calderón', NULL),
(87, 'Alberto', 'Sojo Gómez', NULL),
(88, 'David', 'Solano Solano', NULL),
(89, 'Cindy', 'Umaña Vásquez', NULL),
(90, 'María Vanessa', 'Orozco Solano', NULL),
(91, 'Socorro María', 'Solís Ramírez', NULL),
(92, 'Jeimy', 'Bonilla Gamboa', NULL),
(93, 'Olga', 'Camacho Chaves', NULL),
(94, 'Damaris', 'Chaves Ortiz', NULL),
(95, 'Bernarda', 'Cordero Camacho', NULL),
(96, 'Tania', 'Díaz Ruíz', NULL),
(97, 'Adrián', 'Hernández Hernández', NULL),
(98, 'María del Milagro', 'Zuñiga Flores', NULL),
(99, 'Bernal', 'Coto Segura', NULL),
(100, 'Eva María', 'Guevara Salazar', NULL),
(101, 'Roselyn', 'Hernández Molina', NULL),
(102, 'Elizabeth', 'Méndez Hernández', NULL),
(103, 'Vivian', 'Méndez Paniagua', NULL),
(104, 'Iván', 'Orozco Abarca', NULL),
(105, 'Fauricio', 'Ortíz Chavarría', NULL),
(106, 'Rodrigo Arturo', 'Soto Rodríguez', NULL),
(107, 'Gustavo', 'Varela Gonzáles', NULL),
(108, 'Lindsay', 'Aguilar Arias', NULL),
(109, 'Melissa', 'Alvarado Bonilla', NULL),
(110, 'Luis Alfredo', 'Barquero Monge', NULL),
(111, 'Sarita Melissa', 'Cubero Solano', NULL),
(112, 'Maricruz', 'Granados Medina', NULL),
(113, 'Omar Renato', 'Guzmán Alvarado', NULL),
(114, 'José Alberto', 'Martínez Fuentes', NULL),
(115, 'Siani Rebeca', 'Mora Oconitrillo', NULL),
(116, 'Jonathan', 'Peña Bonilla', NULL),
(117, 'Miguel Antonio', 'Villalta Ramírez', NULL),
(118, 'Olger', 'Alpízar Montero', NULL),
(119, 'Mario', 'Brenes Rojas', NULL),
(120, 'Isaac Daniel', 'Camacho Marín', NULL),
(121, 'Fabiola', 'Chacón Rojas', NULL),
(122, 'Ricardo', 'Herrera García', NULL),
(123, 'César Augusto', 'Pacheco Álvarez', NULL),
(124, 'José Luis', 'Pacheco Torres', NULL),
(125, 'Diley', 'Porras Cruz', NULL),
(126, 'Cynthia María', 'Ramírez Brenes', NULL),
(127, 'Viviana María', 'Sánchez Meza', NULL),
(128, 'Silvia', 'Chinchilla Molina', NULL),
(129, 'Eduardo', 'Chinchilla Valverde', NULL),
(130, 'Ana Lilia', 'Hidalgo Adorrente', NULL),
(131, 'Viria', 'Solano Martínez', NULL),
(132, 'Emilia', 'Coto Moya', NULL),
(133, 'Ana Isabel', 'Madrigal Sandí', NULL),
(134, 'Dianyi', 'Oviedo Ulloa', NULL),
(135, 'Jacqueline', 'Sánchez Coto', NULL),
(136, 'Leticia', 'Varela Gamboa', NULL),
(137, 'Manuel Norberto', 'Ramírez Arias', NULL),
(138, 'Francisco Javier', 'Solano Machado', NULL),
(139, 'Lucía', 'Cordero Miranda', NULL),
(140, 'María de lo Ángeles', 'Martínez Rojas', NULL),
(141, 'Elisa', 'Montenegro Flores', NULL),
(142, 'Campo Elías', 'Silva Yépez', NULL),
(143, 'Nancy', 'Martínez Mata', NULL),
(144, 'Alberto', 'Méndez Campos', NULL),
(145, 'Cristian', 'Bogantes Araya', NULL),
(146, 'Martín', 'Chinchilla valverde', NULL),
(147, 'María Rosibel', 'Gómez Campos', NULL),
(148, 'Ana Lucía', 'Aguirre Chaves', NULL),
(149, 'David', 'Gamboa Camareno', NULL),
(150, 'Lissette', 'Guzmán Somarribas', NULL),
(151, 'Jairo', 'Mora Quirós', NULL),
(152, 'Jeilin', 'Morales Pérez', NULL),
(153, 'Erick', 'Quirós Brenes', NULL),
(154, 'Róger', 'Romero Chavarría', NULL),
(155, 'Félix', 'Torres Córdoba', NULL),
(156, 'Irma', 'Chaves Solano', NULL),
(157, 'Ana Lía', 'Granados Ureña', NULL),
(158, 'María Elena', 'Quirós Brenes', NULL),
(159, 'Isabel María', 'Redondo Arias', NULL),
(160, 'Gabriela', 'Gómez Brenes', NULL),
(161, 'José Manuel', 'Leandro Marín', NULL),
(162, 'Oscar Luis', 'Meza Ramírez', NULL),
(163, 'Hernán', 'Morales Quirós', NULL),
(164, 'Lidia Isabel', 'Quirós Vargas', NULL),
(165, 'María del Rocío', 'Brenes Corrales', NULL),
(166, 'Vera Violeta', 'Brenes Corrales', NULL),
(167, 'Ana María', 'Sanabria Ureña', NULL),
(168, 'Maricruz', 'Arrieta Mata', NULL),
(169, 'Tomás', 'Garita Pacheco', NULL),
(170, 'Miguel Alberto', 'Ramírez Ramírez', NULL),
(171, 'Arianne Sofía', 'Solano Rivas', NULL),
(172, 'Dunia Patricia', 'Solano Torres', NULL),
(173, 'Karla', 'Aguilar Gonzáles', NULL),
(174, 'Nelson Abdón', 'Alvarado Solano', NULL),
(175, 'Laura', 'Barquero Barahona', NULL),
(176, 'Laura', 'Brenes Salazar', NULL),
(177, 'Ivannia', 'Cambronero Vega', NULL),
(178, 'María Isabel', 'Gutiérrez Sanabria', NULL),
(179, 'Edwin', 'Mena Alvarado', NULL),
(180, 'Elías', 'Molina Gómez', NULL),
(181, 'Grettel', 'Quesada Arias', NULL),
(182, 'Sara', 'Serrano Granados', NULL),
(183, 'Luz María', 'Serrano Coto', NULL),
(184, 'María Elena', 'Serrano Coto', NULL),
(185, 'Carmen María', 'Soto Mena', NULL),
(186, 'Natalia', 'Barahona Solano', NULL),
(187, 'Yessenia', 'Cantillo Sojo', NULL),
(188, 'Grace Vanessa', 'Leiva Solano', NULL),
(189, 'Nartha María', 'Astorga Quirós', NULL),
(190, 'Sergio', 'Granados Chaves', NULL),
(191, 'Carlos', 'Molina Cortés', NULL),
(192, 'Marvin', 'Mora Brenes', NULL),
(193, 'Eduardo', 'Solano Martínez', NULL),
(194, 'Victor Bernardo', 'Loría Fonseca', NULL),
(195, 'German', 'Torres Arroyo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_comite`
--

CREATE TABLE `personal_comite` (
  `comite` int(11) NOT NULL,
  `personal` int(11) NOT NULL,
  `cargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_departamento`
--

CREATE TABLE `personal_departamento` (
  `codigo_departamento` int(11) NOT NULL,
  `codigo_personal` int(11) NOT NULL,
  `funcion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal_departamento`
--

INSERT INTO `personal_departamento` (`codigo_departamento`, `codigo_personal`, `funcion`) VALUES
(1, 1, 'Función que desempeña'),
(1, 2, 'Función que desempeña'),
(1, 3, NULL),
(1, 4, NULL),
(1, 5, NULL),
(1, 6, NULL),
(2, 7, NULL),
(3, 8, NULL),
(3, 9, NULL),
(4, 10, NULL),
(4, 11, NULL),
(4, 12, NULL),
(5, 13, NULL),
(5, 14, NULL),
(5, 15, NULL),
(5, 16, NULL),
(5, 17, NULL),
(6, 18, NULL),
(6, 19, NULL),
(6, 20, NULL),
(6, 21, NULL),
(6, 22, NULL),
(6, 23, NULL),
(7, 24, NULL),
(7, 25, NULL),
(7, 26, NULL),
(7, 27, NULL),
(7, 28, NULL),
(7, 29, NULL),
(8, 30, NULL),
(8, 31, NULL),
(8, 32, NULL),
(8, 33, NULL),
(8, 34, NULL),
(8, 35, NULL),
(9, 36, NULL),
(9, 37, NULL),
(9, 38, NULL),
(9, 39, NULL),
(9, 40, NULL),
(10, 41, NULL),
(10, 42, NULL),
(10, 43, NULL),
(10, 44, NULL),
(10, 45, NULL),
(11, 46, NULL),
(12, 47, NULL),
(12, 48, NULL),
(12, 49, NULL),
(13, 51, NULL),
(13, 52, NULL),
(13, 58, NULL),
(13, 59, NULL),
(13, 67, NULL),
(14, 53, NULL),
(14, 70, NULL),
(15, 54, NULL),
(15, 55, NULL),
(15, 60, NULL),
(15, 61, NULL),
(15, 71, NULL),
(15, 72, NULL),
(16, 56, NULL),
(17, 57, NULL),
(17, 64, NULL),
(17, 65, NULL),
(17, 66, NULL),
(17, 68, NULL),
(18, 62, NULL),
(19, 63, NULL),
(20, 69, NULL),
(21, 74, NULL),
(21, 75, NULL),
(22, 76, NULL),
(22, 77, NULL),
(22, 78, NULL),
(22, 79, NULL),
(22, 80, NULL),
(22, 81, NULL),
(23, 82, NULL),
(23, 83, NULL),
(24, 84, NULL),
(24, 85, NULL),
(24, 86, NULL),
(24, 87, NULL),
(24, 88, NULL),
(24, 89, NULL),
(25, 73, NULL),
(25, 90, NULL),
(25, 91, NULL),
(26, 14, NULL),
(26, 92, NULL),
(26, 93, NULL),
(26, 94, NULL),
(26, 95, NULL),
(26, 96, NULL),
(26, 97, NULL),
(26, 98, NULL),
(27, 20, NULL),
(27, 99, NULL),
(27, 100, NULL),
(27, 101, NULL),
(27, 102, NULL),
(27, 103, NULL),
(27, 104, NULL),
(27, 105, NULL),
(27, 106, NULL),
(27, 107, NULL),
(28, 108, NULL),
(28, 109, NULL),
(28, 110, NULL),
(28, 111, NULL),
(28, 112, NULL),
(28, 113, NULL),
(28, 114, NULL),
(28, 115, NULL),
(28, 116, NULL),
(28, 117, NULL),
(29, 31, NULL),
(29, 35, NULL),
(29, 118, NULL),
(29, 119, NULL),
(29, 121, NULL),
(29, 122, NULL),
(29, 126, NULL),
(30, 119, NULL),
(30, 120, NULL),
(31, 123, NULL),
(31, 125, NULL),
(32, 124, NULL),
(32, 127, NULL),
(33, 2, NULL),
(33, 36, NULL),
(33, 37, NULL),
(33, 128, NULL),
(33, 129, NULL),
(33, 130, NULL),
(33, 131, NULL),
(34, 132, NULL),
(34, 133, NULL),
(34, 134, NULL),
(34, 135, NULL),
(34, 136, NULL),
(35, 43, NULL),
(35, 137, NULL),
(35, 138, NULL),
(36, 140, NULL),
(36, 141, NULL),
(36, 142, NULL),
(37, 143, NULL),
(37, 144, NULL),
(38, 145, NULL),
(39, 146, NULL),
(39, 147, NULL),
(40, 148, NULL),
(40, 149, NULL),
(40, 150, NULL),
(40, 151, NULL),
(40, 153, NULL),
(40, 154, NULL),
(40, 155, NULL),
(41, 156, NULL),
(41, 157, NULL),
(41, 158, NULL),
(41, 159, NULL),
(42, 160, NULL),
(42, 161, NULL),
(42, 162, NULL),
(42, 163, NULL),
(42, 164, NULL),
(43, 165, NULL),
(43, 166, NULL),
(43, 167, NULL),
(44, 171, NULL),
(45, 168, NULL),
(46, 169, NULL),
(47, 170, NULL),
(48, 172, NULL),
(49, 139, NULL),
(50, 152, NULL),
(51, 173, NULL),
(51, 174, NULL),
(51, 175, NULL),
(51, 176, NULL),
(51, 177, NULL),
(51, 178, NULL),
(51, 179, NULL),
(51, 180, NULL),
(51, 181, NULL),
(51, 182, NULL),
(51, 183, NULL),
(51, 184, NULL),
(51, 185, NULL),
(52, 186, NULL),
(52, 187, NULL),
(52, 188, NULL),
(53, 189, NULL),
(53, 190, NULL),
(53, 191, NULL),
(53, 192, NULL),
(53, 193, NULL),
(54, 194, NULL),
(54, 195, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_area`
--

CREATE TABLE `servicio_area` (
  `codigo_area` int(11) NOT NULL,
  `codigo_servicio` int(11) NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `administrador` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`administrador`, `usuario`, `clave`) VALUES
(2, 'maria.mora', '123'),
(3, 'lorena.segura', '123'),
(4, 'nelson.alvarado', '123'),
(5, 'yansi.diaz', '123'),
(6, 'fabricio.maroto', '123'),
(7, 'pablo.acosta', '123'),
(8, 'milaneth.barahona', '123'),
(9, 'juan.aguilar', '123'),
(10, 'tatiana.pereira', '123'),
(11, 'lourdes.sanabria', '123'),
(12, 'carlos.molina', '123'),
(14, 'jonathan.abarca', '123'),
(15, 'eduardo.calvo', '123'),
(16, 'maria.calvo', '123'),
(17, 'jose.cortes', '123'),
(18, 'griselda.chacon', '123'),
(19, 'lorca.leon', '123'),
(20, 'geovanny.lobo', '123'),
(21, 'bryan.rojas', '123'),
(22, 'marisol.garita', '123'),
(23, 'maria.araya', '123'),
(24, 'ruth.lopez', '123'),
(25, 'danny.torres', '123'),
(26, 'yorleny.irola', '123'),
(27, 'jeimy.bonilla', '123'),
(28, 'eva.guevara', '123'),
(29, 'maricruz.granados', '123'),
(30, 'fabiola.chacon', '123'),
(31, 'silvia.chinchilla', '123'),
(32, 'leticia.varela', '123'),
(33, 'manuel.ramirez', '123'),
(34, 'maria.martinez', '123'),
(35, 'nancy.martinez', '123'),
(36, 'cristian.bogantes', '123'),
(37, 'martin.chinchilla', '123'),
(38, 'ana.aguirre', '123'),
(39, 'maria.quiros', '123'),
(40, 'lidia.quiros', '123'),
(41, 'maria.brenes', '123'),
(42, 'maricruz.arrieta', '123'),
(43, 'lucia.cordero', '123'),
(44, 'jeilin.morales', '123'),
(45, 'grettel.quesada', '123'),
(46, 'yessenia.cantillo', '123'),
(47, 'sergio.granadoa', '123'),
(48, 'victor.loría', '123'),
(57, 'jorge.arce', 'Q19655832067T3MP');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo_personal` (`codigo_personal`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `institucion` (`institucion`,`administrador`),
  ADD KEY `FK_administrador_area` (`administrador`);

--
-- Indices de la tabla `area_departamento`
--
ALTER TABLE `area_departamento`
  ADD PRIMARY KEY (`area`,`departamento`),
  ADD KEY `FK_depatamento_area` (`departamento`);

--
-- Indices de la tabla `comite`
--
ALTER TABLE `comite`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `institucion` (`institucion`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `administrador` (`administrador`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `codigo_area` (`codigo_area`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `personal_comite`
--
ALTER TABLE `personal_comite`
  ADD PRIMARY KEY (`comite`,`personal`),
  ADD KEY `comite` (`comite`,`personal`),
  ADD KEY `FK_personal_comite` (`personal`);

--
-- Indices de la tabla `personal_departamento`
--
ALTER TABLE `personal_departamento`
  ADD PRIMARY KEY (`codigo_departamento`,`codigo_personal`),
  ADD KEY `fk_docente_departamento` (`codigo_personal`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `servicio_area`
--
ALTER TABLE `servicio_area`
  ADD PRIMARY KEY (`codigo_area`,`codigo_servicio`),
  ADD KEY `fk_servicio_area` (`codigo_servicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`administrador`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `comite`
--
ALTER TABLE `comite`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `FK_personal_administrador` FOREIGN KEY (`codigo_personal`) REFERENCES `personal` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `FK_administrador_area` FOREIGN KEY (`administrador`) REFERENCES `administrador` (`codigo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_institucion_area` FOREIGN KEY (`institucion`) REFERENCES `institucion` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `area_departamento`
--
ALTER TABLE `area_departamento`
  ADD CONSTRAINT `FK_area_depatamento` FOREIGN KEY (`area`) REFERENCES `area` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_depatamento_area` FOREIGN KEY (`departamento`) REFERENCES `departamento` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comite`
--
ALTER TABLE `comite`
  ADD CONSTRAINT `FK_institucion_comite` FOREIGN KEY (`institucion`) REFERENCES `institucion` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `FK_administrador_depa` FOREIGN KEY (`administrador`) REFERENCES `administrador` (`codigo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_area_noticia` FOREIGN KEY (`codigo_area`) REFERENCES `area` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal_comite`
--
ALTER TABLE `personal_comite`
  ADD CONSTRAINT `FK_comite_personal` FOREIGN KEY (`comite`) REFERENCES `comite` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_personal_comite` FOREIGN KEY (`personal`) REFERENCES `personal` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal_departamento`
--
ALTER TABLE `personal_departamento`
  ADD CONSTRAINT `fk_departamento_docente` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamento` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_docente_departamento` FOREIGN KEY (`codigo_personal`) REFERENCES `personal` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio_area`
--
ALTER TABLE `servicio_area`
  ADD CONSTRAINT `fk_area_servicio` FOREIGN KEY (`codigo_area`) REFERENCES `area` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_servicio_area` FOREIGN KEY (`codigo_servicio`) REFERENCES `servicio` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_administrador_usuario` FOREIGN KEY (`administrador`) REFERENCES `administrador` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
