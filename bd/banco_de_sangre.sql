-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-09-2013 a las 18:25:13
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `banco_de_sangre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Usuarios Administradores' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `estatus`, `contrasenia`, `nombre`, `apellido`, `correo`, `telefono`) VALUES
(1, 'administrador', '4', '827ccb0eea8a706c4c34a16891f84e7b', 'Domingo José', 'Ilarreta Heydras', 'dilarreta@inhrr.gob.ve', '04128231347'),
(2, 'administrador2', '5', '129b852fe6cc3127e16453ba77106783', 'Pedro', 'Pérez', 'pperez@inhrr.gob.ve', '02128882233'),
(3, 'administrador3', '3', 'f83a90bd7b54c783e36a92abe14cc586', 'Luis', 'Rojas', 'lrojas@inhrr.gob.ve', '02125556677');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE IF NOT EXISTS `ambientes` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `ambientes` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `ambientes`
--

INSERT INTO `ambientes` (`id`, `ambientes`) VALUES
(1, 'Seleccione...'),
(2, 'si'),
(3, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `cod_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `des_ciudad` varchar(50) NOT NULL,
  `cod_estado` varchar(11) NOT NULL,
  PRIMARY KEY (`cod_ciudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=288 ;

--
-- Volcar la base de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`cod_ciudad`, `des_ciudad`, `cod_estado`) VALUES
(1, 'Alto Orinoco', 'AMA'),
(2, 'Atabapo', 'AMA'),
(3, 'Atures', 'AMA'),
(4, 'Autana', 'AMA'),
(5, 'Maroa', 'AMA'),
(6, 'Manapiare', 'AMA'),
(7, 'Rio Negro', 'AMA'),
(8, 'Anaco', 'ANZ'),
(9, 'Aragua', 'ANZ'),
(10, 'Fernando de Penalver', 'ANZ'),
(11, 'Francisco del Carmen Carvajal', 'ANZ'),
(12, 'Francisco de Miranda', 'ANZ'),
(13, 'Guanta', 'ANZ'),
(14, 'Independencia', 'ANZ'),
(15, 'Juan Antonio Sotillo', 'ANZ'),
(16, 'Juan Manuel Cajigal', 'ANZ'),
(17, 'Jose Gregorio Monagas', 'ANZ'),
(18, 'Libertad', 'ANZ'),
(19, 'Manuel Ezequiel Bruzual', 'ANZ'),
(20, 'Pedro Maria Freites', 'ANZ'),
(21, 'Piritu', 'ANZ'),
(22, 'San Jose de Guanipa', 'ANZ'),
(23, 'San Juan de Capistrano', 'ANZ'),
(24, 'Santa Ana', 'ANZ'),
(25, 'Simon Bolivar', 'ANZ'),
(26, 'Simon Rodriguez', 'ANZ'),
(27, 'Sir Arthur McGregor', 'ANZ'),
(28, 'Diego Bautista Urbaneja', 'ANZ'),
(29, 'Achaguas', 'APU'),
(30, 'Biruaca', 'APU'),
(31, 'Munoz', 'APU'),
(32, 'Paez', 'APU'),
(33, 'Pedro Camejo', 'APU'),
(34, 'Romulo Gallegos', 'APU'),
(35, 'San Fernando', 'APU'),
(36, 'Alto Apure', 'APU'),
(37, 'Camatagua', 'ARA'),
(38, 'Girardot', 'ARA'),
(39, 'Jose Felix Ribas', 'ARA'),
(40, 'Libertador', 'ARA'),
(41, 'Mario Briceno Iragorry', 'ARA'),
(42, 'San Casimiro', 'ARA'),
(43, 'Santiago Marino', 'ARA'),
(44, 'Santos Michelena', 'ARA'),
(45, 'Sucre', 'ARA'),
(46, 'Urdaneta', 'ARA'),
(47, 'Zamora', 'ARA'),
(48, 'Francisco Linares Alcantara', 'ARA'),
(49, 'Alberto Arvelo Torrealba', 'BAR'),
(50, 'Antonio Jose de Sucre', 'BAR'),
(51, 'Arismendi', 'BAR'),
(52, 'Barinas', 'BAR'),
(53, 'Bolivar', 'BAR'),
(54, 'Cruz Paredes', 'BAR'),
(55, 'Ezequiel Zamora', 'BAR'),
(56, 'Obispos', 'BAR'),
(57, 'Pedraza', 'BAR'),
(58, 'Rojas', 'BAR'),
(59, 'Sosa', 'BAR'),
(60, 'Andres Eloy Blanco', 'BAR'),
(61, 'Caroni', 'BOL'),
(62, 'Cedeno', 'BOL'),
(63, 'Gran Sabana', 'BOL'),
(64, 'Heres', 'BOL'),
(65, 'Piar', 'BOL'),
(66, 'Raul Leoni', 'BOL'),
(67, 'Roscio', 'BOL'),
(68, 'Sifontes', 'BOL'),
(69, 'Sucre', 'BOL'),
(70, 'Bejuma', 'CAR'),
(71, 'Carlos Arvelo', 'CAR'),
(72, 'Diego Ibarra', 'CAR'),
(73, 'Guacara', 'CAR'),
(74, 'Juan Jose Mora', 'CAR'),
(75, 'Libertador', 'CAR'),
(76, 'Los Guayos', 'CAR'),
(77, 'Miranda', 'CAR'),
(78, 'Montalban', 'CAR'),
(79, 'Naguanagua', 'CAR'),
(80, 'Puerto Cabello', 'CAR'),
(81, 'San Diego', 'CAR'),
(82, 'San Joaquin', 'CAR'),
(83, 'Valencia', 'CAR'),
(84, 'Anzoategui', 'COJ'),
(85, 'Falcon', 'COJ'),
(86, 'Girardot', 'COJ'),
(87, 'Lima Blanco', 'COJ'),
(88, 'Pao de San Juan Bautista', 'COJ'),
(89, 'Ricaurte', 'COJ'),
(90, 'Romulo Gallegos', 'COJ'),
(91, 'San Carlos', 'COJ'),
(92, 'Tinaco', 'COJ'),
(93, 'Antonio Diaz', 'DA'),
(94, 'Casacoima', 'DA'),
(95, 'Pedernales', 'DA'),
(96, 'Tucupita', 'DA'),
(97, 'Libertador', 'DC'),
(98, 'Acosta', 'FAL'),
(99, 'Bolivar', 'FAL'),
(100, 'Buchivacoa', 'FAL'),
(101, 'Carirubana', 'FAL'),
(102, 'Colina', 'FAL'),
(103, 'Democracia', 'FAL'),
(104, 'Falcon', 'FAL'),
(105, 'Federacion', 'FAL'),
(106, 'Jacura', 'FAL'),
(107, 'Los Tanques de Mauroa', 'FAL'),
(108, 'Mauroa', 'FAL'),
(109, 'Miranda', 'FAL'),
(110, 'Monsenor Iturriza', 'FAL'),
(111, 'Petit', 'FAL'),
(112, 'Piritu', 'FAL'),
(113, 'Silva', 'FAL'),
(114, 'Sucre', 'FAL'),
(115, 'Union', 'FAL'),
(116, 'Urumaco', 'FAL'),
(117, 'Zamora', 'FAL'),
(118, 'Camaguan', 'GUA'),
(119, 'Chaguaramas', 'GUA'),
(120, 'El Socorro', 'GUA'),
(121, 'San Geronimo de Guayabal', 'GUA'),
(122, 'Leonardo Infante', 'GUA'),
(123, 'Las Mercedes', 'GUA'),
(124, 'Julian Mellado', 'GUA'),
(125, 'Francisco de Miranda', 'GUA'),
(126, 'Jose Tadeo Monagas', 'GUA'),
(127, 'Ortiz', 'GUA'),
(128, 'Jose Felix Ribas', 'GUA'),
(129, 'Juan German Roscio', 'GUA'),
(130, 'San Jose de Guaribe', 'GUA'),
(131, 'Santa Maria de Ipire', 'GUA'),
(132, 'Pedro Zaraza', 'GUA'),
(133, 'Andres Eloy Blanco', 'LAR'),
(134, 'Crespo', 'LAR'),
(135, 'Iribarren', 'LAR'),
(136, 'Jimenez', 'LAR'),
(137, 'Moran', 'LAR'),
(138, 'Palavecino', 'LAR'),
(139, 'Simon Planas', 'LAR'),
(140, 'Torres', 'LAR'),
(141, 'Urdaneta', 'LAR'),
(142, 'Alberto Adriani', 'MER'),
(143, 'Antonio Pinto Salinas', 'MER'),
(144, 'Aricagua', 'MER'),
(145, 'Arzobispo Chacon', 'MER'),
(146, 'Campo Elias', 'MER'),
(147, 'Caracciolo Parra Olmedo', 'MER'),
(148, 'Cardenal Quintero', 'MER'),
(149, 'Guaraque', 'MER'),
(150, 'Julio Cesar Salas', 'MER'),
(151, 'Justo Briceno', 'MER'),
(152, 'Libertador', 'MER'),
(153, 'Miranda', 'MER'),
(154, 'Obispo Ramos de Lora', 'MER'),
(155, 'Rangel', 'MER'),
(156, 'Rivas Davila', 'MER'),
(157, 'Sucre', 'MER'),
(158, 'Tovar', 'MER'),
(159, 'Tulio Febres Cordero', 'MER'),
(160, 'Zea', 'MER'),
(161, 'Acevedo', 'MIR'),
(162, 'Andres Bello', 'MIR'),
(163, 'Baruta', 'MIR'),
(164, 'Brion', 'MIR'),
(165, 'Buroz', 'MIR'),
(166, 'Carrizal', 'MIR'),
(167, 'Chacao', 'MIR'),
(168, 'Cristobal Rojas', 'MIR'),
(169, 'El Hatillo', 'MIR'),
(170, 'Guaicaipuro', 'MIR'),
(171, 'Independencia', 'MIR'),
(172, 'Lander', 'MIR'),
(173, 'Los Salias', 'MIR'),
(174, 'Paez', 'MIR'),
(175, 'Paz Castillo', 'MIR'),
(176, 'Pedro Gual', 'MIR'),
(177, 'Plaza', 'MIR'),
(178, 'Simon Bolivar', 'MIR'),
(179, 'Sucre', 'MIR'),
(180, 'Urdaneta', 'MIR'),
(181, 'Zamora', 'MIR'),
(182, 'Acosta', 'MON'),
(183, 'Caripe', 'MON'),
(184, 'Cedeno', 'MON'),
(185, 'Ezequiel Zamora', 'MON'),
(186, 'Libertador', 'MON'),
(187, 'Maturin', 'MON'),
(188, 'Piar', 'MON'),
(189, 'Punceres', 'MON'),
(190, 'Sotillo', 'MON'),
(191, 'Diaz', 'NE'),
(192, 'Garcia', 'NE'),
(193, 'Gomez', 'NE'),
(194, 'Maneiro', 'NE'),
(195, 'Marcano', 'NE'),
(196, 'Peninsula de Macanao', 'NE'),
(197, 'Tubores', 'NE'),
(198, 'Villalba', 'NE'),
(199, 'Araure', 'POR'),
(200, 'Esteller', 'POR'),
(201, 'Guanare', 'POR'),
(202, 'Guanarito', 'POR'),
(203, 'Monsenor Jose Vicente de Unda', 'POR'),
(204, 'Ospino', 'POR'),
(205, 'Paez', 'POR'),
(206, 'Papelon', 'POR'),
(207, 'San Genaro de Boconoito', 'POR'),
(208, 'San Rafael de Onoto', 'POR'),
(209, 'Santa Rosalia', 'POR'),
(210, 'Sucre', 'POR'),
(211, 'Andres Eloy Blanco', 'SUC'),
(212, 'Andres Mata', 'SUC'),
(213, 'Arismendi', 'SUC'),
(214, 'Benitez', 'SUC'),
(215, 'Bermudez', 'SUC'),
(216, 'Cajigal', 'SUC'),
(217, 'Cruz Salmeron Acosta', 'SUC'),
(218, 'Libertador', 'SUC'),
(219, 'Marino', 'SUC'),
(220, 'Montes', 'SUC'),
(221, 'Ribero', 'SUC'),
(222, 'Sucre', 'SUC'),
(223, 'Valdez', 'SUC'),
(224, 'Ayacucho', 'TAC'),
(225, 'Bolivar', 'TAC'),
(226, 'Cardenas', 'TAC'),
(227, 'Fernandez Feo', 'TAC'),
(228, 'Garcia de Hevia', 'TAC'),
(229, 'Independencia', 'TAC'),
(230, 'Jauregui', 'TAC'),
(231, 'Junin', 'TAC'),
(232, 'Libertad', 'TAC'),
(233, 'Libertador', 'TAC'),
(234, 'Lobatera', 'TAC'),
(235, 'Panamericano', 'TAC'),
(236, 'Pedro Maria Urena', 'TAC'),
(237, 'Samuel Dario Maldonado', 'TAC'),
(238, 'San Cristobal', 'TAC'),
(239, 'Sucre', 'TAC'),
(240, 'Uribante', 'TAC'),
(241, 'Andres Bello', 'TRU'),
(242, 'Bocono', 'TRU'),
(243, 'Bolivar', 'TRU'),
(244, 'Candelaria', 'TRU'),
(245, 'Carache', 'TRU'),
(246, 'Escuque', 'TRU'),
(247, 'Jose Felipe Marquez Canizales', 'TRU'),
(248, 'Juan Vicente Campo Elias', 'TRU'),
(249, 'La Ceiba', 'TRU'),
(250, 'Miranda', 'TRU'),
(251, 'Monte Carmelo', 'TRU'),
(252, 'Motatan', 'TRU'),
(253, 'Pampan', 'TRU'),
(254, 'Pampanito', 'TRU'),
(255, 'Rafael Rangel', 'TRU'),
(256, 'San Rafael de Carvajal', 'TRU'),
(257, 'Sucre', 'TRU'),
(258, 'Trujillo', 'TRU'),
(259, 'Urdaneta', 'TRU'),
(260, 'Valera', 'TRU'),
(261, 'Vargas', 'VAR'),
(262, 'Bruzual', 'YAR'),
(263, 'Nirgua', 'YAR'),
(264, 'Pena', 'YAR'),
(265, 'San Felipe', 'YAR'),
(266, 'Veroes', 'YAR'),
(267, 'Almirante Padilla', 'ZUL'),
(268, 'Baralt', 'ZUL'),
(269, 'Cabimas', 'ZUL'),
(270, 'Catatumbo', 'ZUL'),
(271, 'Colon', 'ZUL'),
(272, 'Francisco Javier Pulgar', 'ZUL'),
(273, 'Jesus Enrique Lossada', 'ZUL'),
(274, 'Jesus Maria Semprun', 'ZUL'),
(275, 'La Canada de Urdaneta', 'ZUL'),
(276, 'Lagunillas', 'ZUL'),
(277, 'Machiques de Perija', 'ZUL'),
(278, 'Mara', 'ZUL'),
(279, 'Maracaibo', 'ZUL'),
(280, 'Miranda', 'ZUL'),
(281, 'Paez', 'ZUL'),
(282, 'Rosario de Perija', 'ZUL'),
(283, 'San Francisco', 'ZUL'),
(284, 'Santa Rita', 'ZUL'),
(285, 'Simon Bolivar', 'ZUL'),
(286, 'Sucre', 'ZUL'),
(287, 'Valmore Rodríguez', 'ZUL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_responsable`
--

CREATE TABLE IF NOT EXISTS `datos_del_responsable` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rs_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_cedula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_profesion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `rs_expedido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_especialidad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_matricula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_colegio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_rif` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_correo_electronico` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `rs_tlf_local` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_tlf_movil` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_fax` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_cedula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_profesion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_expedido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_especialidad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_matricula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_colegio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_rif` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_correo_electronico` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `dm_tlf_local` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_tlf_movil` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_fax` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_cedula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_profesion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_expedido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_especialidad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_matricula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_colegio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_rif` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_correo_electronico` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `cr_tlf_local` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_tlf_movil` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_fax` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Planilla de Incripcion de Bancos de Sangre - Datos del Repon' AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `datos_del_responsable`
--

INSERT INTO `datos_del_responsable` (`usuario`, `id`, `cod`, `rs_nombre`, `rs_apellido`, `rs_cedula`, `rs_profesion`, `rs_expedido`, `rs_especialidad`, `rs_matricula`, `rs_colegio`, `rs_rif`, `rs_correo_electronico`, `rs_tlf_local`, `rs_tlf_movil`, `rs_fax`, `dm_nombre`, `dm_apellido`, `dm_cedula`, `dm_profesion`, `dm_expedido`, `dm_especialidad`, `dm_matricula`, `dm_colegio`, `dm_rif`, `dm_correo_electronico`, `dm_tlf_local`, `dm_tlf_movil`, `dm_fax`, `cr_nombre`, `cr_apellido`, `cr_cedula`, `cr_profesion`, `cr_expedido`, `cr_especialidad`, `cr_matricula`, `cr_colegio`, `cr_rif`, `cr_correo_electronico`, `cr_tlf_local`, `cr_tlf_movil`, `cr_fax`) VALUES
('fmogollon', 1, '1', 'Domingo JosÃ©', 'Ilarreta Heydras', '17588630', 'Ingeniero en InformÃ¡tica', 'Istituto Universitario Dr. Federico Rivero Palacio', 'Desarrollo de Sistemas', '001102020102033000', 'IUT00011111364633', 'V-17588630-0', 'domingo@inhrr.gob.ve', '02122005060', '04269998950', '02121356987', 'Pedro JosÃ©', 'Ilarreta Heydras', '16301894', 'Ingeniero en Sistemas', 'UNEFA', 'Especialista en Redes', '000444RT444', 'UNEFA0001111243534', 'V-16301894-4', 'pedro@gmail.com', '02123304511', '04125787589', '02124567984', 'Carlos Alfredo', 'Ilarreta Heydras', '20911187', 'Idiomas Modernos', 'UCV', 'Aleman + Ingles (InterpretaciÃ³n)', '0001928373727127', 'UCV001221201210', 'v-20911187-7', 'carlos@inhrr.gob.ve', '02124658451', '04261563007', '02122001050'),
('dilarreta', 2, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cilarreta', 4, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('pilarreta', 5, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_de_banco_sangre`
--

CREATE TABLE IF NOT EXISTS `datos_de_banco_sangre` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sector_pertenece` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `nro_rif` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nro_nit` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_institucion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `situacion_propiedad_inmueble` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_telefono_2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_fax` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico_2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pagina_web` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nro_solicitud` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dependiente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Planilla de Incripcion de Bancos de Sangre, Datos del Banco ' AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `datos_de_banco_sangre`
--

INSERT INTO `datos_de_banco_sangre` (`usuario`, `id`, `cod`, `sector_pertenece`, `nombre`, `direccion`, `nro_rif`, `nro_nit`, `tipo_institucion`, `situacion_propiedad_inmueble`, `nro_telefono`, `nro_telefono_2`, `nro_fax`, `correo_electronico`, `correo_electronico_2`, `pagina_web`, `nro_solicitud`, `dependiente`, `fecha`) VALUES
('fmogollon', 1, '1', 'SACS', 'Banco De Sangre Oficial', '', 'G-04654564567-1', 'J-11111222-1', 'Privado', 'En Comodato', '02125556600', '04125663322', '02124567111', 'prueba@inhrr.gob.ve', 'opcional@inhrr.gob.ve', 'www.prueba.com', '   BS0012012', 'si', '17-02-2012'),
('dilarreta', 2, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cilarreta', 4, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('pilarreta', 5, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento_medico_asistencial`
--

CREATE TABLE IF NOT EXISTS `establecimiento_medico_asistencial` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nro_registro_sanitario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_rif` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nro_nit` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_institucion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `situacion_propiedad_inmueble` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_fax` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pagina_web` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Datos del Establecimiento Medico Asistencial donde funciona ' AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `establecimiento_medico_asistencial`
--

INSERT INTO `establecimiento_medico_asistencial` (`usuario`, `id`, `cod`, `razon_social`, `nro_registro_sanitario`, `nro_rif`, `nro_nit`, `tipo_institucion`, `situacion_propiedad_inmueble`, `nro_telefono`, `nro_fax`, `correo_electronico`, `pagina_web`) VALUES
('fmogollon', 1, '1', '3143434314', 'eewe', '1111', '11111', 'PÃºblico', 'Alquilado', '234134134314', '23423214', '0320323236265', 'www.hola.com'),
('dilarreta', 2, '1', '', '', '', '', '', '', '', '', '', ''),
('cilarreta', 4, '1', '', '', '', '', '', '', '', '', '', ''),
('pilarreta', 5, '1', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `codestado` varchar(50) NOT NULL DEFAULT '',
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codestado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `estado`
--

INSERT INTO `estado` (`codestado`, `estado`) VALUES
('AMA', 'AMAZONAS'),
('ANZ', 'ANZOATEGUI'),
('APU', 'APURE'),
('ARA', 'ARAGUA'),
('BAR', 'BARINAS'),
('BOL', 'BOLIVAR'),
('CAR', 'CARABOBO'),
('COJ', 'COJEDES'),
('DA', 'DELTA AMACURO'),
('DC', 'DISTRITO CAPITAL'),
('FAL', 'FALCON'),
('GUA', 'GUARICO'),
('LAR', 'LARA'),
('MER', 'MERIDA'),
('MIR', 'MIRANDA'),
('MON', 'MONAGAS'),
('NE', 'NVA ESPARTA'),
('POR', 'PORTUGUESA'),
('SUC', 'SUCRE'),
('TAC', 'TACHIRA'),
('TRU', 'TRUJILLO'),
('VAR', 'VARGAS'),
('YAR', 'YARACUY'),
('ZUL', 'ZULIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector_pertenece`
--

CREATE TABLE IF NOT EXISTS `sector_pertenece` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector_pertenece` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `sector_pertenece`
--

INSERT INTO `sector_pertenece` (`id`, `sector_pertenece`) VALUES
(1, 'Seleccione...'),
(2, 'Instituto Venezolano de los Seguros Sociales'),
(3, 'Sanidad Militar'),
(4, 'Otros/Especifique'),
(5, 'Ministerio del Poder Popular para la Salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_propiedad_inmueble`
--

CREATE TABLE IF NOT EXISTS `situacion_propiedad_inmueble` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `situacion_propiedad_inmueble` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='situacion_propiedad_inmueble' AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `situacion_propiedad_inmueble`
--

INSERT INTO `situacion_propiedad_inmueble` (`id`, `situacion_propiedad_inmueble`) VALUES
(1, 'Seleccione...'),
(2, 'Propio'),
(3, 'Alquilado'),
(4, 'En Comodato'),
(5, 'Otros/Especifique');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_institucion`
--

CREATE TABLE IF NOT EXISTS `tipo_institucion` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tipo_institucion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tipo de Institución' AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `tipo_institucion`
--

INSERT INTO `tipo_institucion` (`id`, `tipo_institucion`) VALUES
(1, 'Seleccione...'),
(2, 'Público'),
(3, 'Privado'),
(4, 'Otros/Especifique');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_datos_del_responsable`
--

CREATE TABLE IF NOT EXISTS `tmp_datos_del_responsable` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rs_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_cedula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_profesion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `rs_expedido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_especialidad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_matricula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_colegio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_rif` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_correo_electronico` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `rs_tlf_local` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_tlf_movil` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rs_fax` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_cedula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_profesion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_expedido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_especialidad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_matricula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_colegio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_rif` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_correo_electronico` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `dm_tlf_local` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_tlf_movil` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dm_fax` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_cedula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_profesion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_expedido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_especialidad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_matricula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_colegio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_rif` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_correo_electronico` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `cr_tlf_local` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_tlf_movil` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cr_fax` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Planilla de Incripcion de Bancos de Sangre - Datos del Repon' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `tmp_datos_del_responsable`
--

INSERT INTO `tmp_datos_del_responsable` (`usuario`, `id`, `cod`, `rs_nombre`, `rs_apellido`, `rs_cedula`, `rs_profesion`, `rs_expedido`, `rs_especialidad`, `rs_matricula`, `rs_colegio`, `rs_rif`, `rs_correo_electronico`, `rs_tlf_local`, `rs_tlf_movil`, `rs_fax`, `dm_nombre`, `dm_apellido`, `dm_cedula`, `dm_profesion`, `dm_expedido`, `dm_especialidad`, `dm_matricula`, `dm_colegio`, `dm_rif`, `dm_correo_electronico`, `dm_tlf_local`, `dm_tlf_movil`, `dm_fax`, `cr_nombre`, `cr_apellido`, `cr_cedula`, `cr_profesion`, `cr_expedido`, `cr_especialidad`, `cr_matricula`, `cr_colegio`, `cr_rif`, `cr_correo_electronico`, `cr_tlf_local`, `cr_tlf_movil`, `cr_fax`) VALUES
('fmogollon', 1, '1', 'Domingo JosÃ©', 'Ilarreta Heydras', '17588630', 'Ingeniero en InformÃ¡tica', 'Istituto Universitario Dr. Federico Rivero Palacio', 'Desarrollo de Sistemas', '001102020102033000', 'IUT00011111364633', 'V-17588630-0', '', '02122005060', '04269998950', '02121356987', 'Pedro JosÃ©', 'Ilarreta Heydras', '16301894', 'Ingeniero en Sistemas', 'UNEFA', 'Especialista en Redes', '000444RT444', 'UNEFA0001111243534', 'V-16301894-4', 'pedro@gmail.com', '02123304511', '04125787589', '02124567984', 'Carlos Alfredo', 'Ilarreta Heydras', '20911187', 'Idiomas Modernos', 'UCV', 'Aleman + Ingles (InterpretaciÃ³n)', '0001928373727127', 'UCV001221201210', 'v-20911187-7', 'carlos@inhrr.gob.ve', '02124658451', '04261563007', '02122001050'),
('cilarreta', 2, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('pilarreta', 3, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_datos_de_banco_sangre`
--

CREATE TABLE IF NOT EXISTS `tmp_datos_de_banco_sangre` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sector_pertenece` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `nro_rif` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nro_nit` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_institucion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `situacion_propiedad_inmueble` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_telefono_2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_fax` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico_2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pagina_web` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nro_solicitud` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dependiente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Planilla de Incripcion de Bancos de Sangre, Datos del Banco ' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `tmp_datos_de_banco_sangre`
--

INSERT INTO `tmp_datos_de_banco_sangre` (`usuario`, `id`, `cod`, `sector_pertenece`, `nombre`, `direccion`, `nro_rif`, `nro_nit`, `tipo_institucion`, `situacion_propiedad_inmueble`, `nro_telefono`, `nro_telefono_2`, `nro_fax`, `correo_electronico`, `correo_electronico_2`, `pagina_web`, `nro_solicitud`, `dependiente`, `fecha`) VALUES
('fmogollon', 1, '1', 'SACS', 'Banco De Sangre Oficial', '', 'G-04654564567-1', 'J-11111222-1', 'Privado', 'En Comodato', '02125556600', '04125663322', '02124567111', 'prueba@inhrr.gob.ve', 'opcional@inhrr.gob.ve', 'www.prueba.com', '   BS0012012', 'si', '17-02-2012'),
('cilarreta', 2, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('pilarreta', 3, '1', 'inhrr', 'Banco De Pedro', '', '33e3e4r44fff', '5454646546545654', 'PÃºblico', 'Propio', '04129390654', '02122191615', '02123440374', 'azaa21@yahoo.com', '', 'www.inhrr.gob.ve', ' BS0042012', '', '28-03-2012');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_establecimiento_medico_asistencial`
--

CREATE TABLE IF NOT EXISTS `tmp_establecimiento_medico_asistencial` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nro_registro_sanitario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_rif` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nro_nit` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_institucion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `situacion_propiedad_inmueble` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nro_fax` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pagina_web` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Datos del Establecimiento Medico Asistencial donde funciona ' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `tmp_establecimiento_medico_asistencial`
--

INSERT INTO `tmp_establecimiento_medico_asistencial` (`usuario`, `id`, `cod`, `razon_social`, `nro_registro_sanitario`, `nro_rif`, `nro_nit`, `tipo_institucion`, `situacion_propiedad_inmueble`, `nro_telefono`, `nro_fax`, `correo_electronico`, `pagina_web`) VALUES
('fmogollon', 1, '1', '3143434314', 'eewe', '1111', '11111', 'PÃºblico', 'Alquilado', '234134134314', '23423214', '0320323236265', 'www.hola.com'),
('cilarreta', 2, '1', '', '', '', '', '', '', '', '', '', ''),
('pilarreta', 3, '1', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_unidades_transfusionales`
--

CREATE TABLE IF NOT EXISTS `tmp_unidades_transfusionales` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_laboratorio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_serologia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_inmunohematologia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_conservacion_almacen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_donacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_registro_recepcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_examen_medico` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_recuperacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_cafetin` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_procesamiento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_estadisticas` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_secretaria` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `participacion_programa_inhrr` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nro_participaciones_inhrr` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `participacion_descripcion_inhrr` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Banco de Sangre y Unidades Transfuncionales - Ambientes' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `tmp_unidades_transfusionales`
--

INSERT INTO `tmp_unidades_transfusionales` (`usuario`, `ut_seccion_laboratorio`, `ut_serologia`, `ut_inmunohematologia`, `ut_seccion_conservacion_almacen`, `id`, `cod`, `ut_seccion_donacion`, `ut_registro_recepcion`, `ut_examen_medico`, `ut_recuperacion`, `ut_cafetin`, `ut_seccion_procesamiento`, `ut_seccion_estadisticas`, `ut_seccion_secretaria`, `participacion_programa_inhrr`, `nro_participaciones_inhrr`, `participacion_descripcion_inhrr`) VALUES
('fmogollon', 'si', 'SerologÃ­a', 'InmunohematologÃ­a', 'si', 1, '1', 'si', 'Registro y RecepciÃ³n', '', 'RecuperaciÃ³n', 'CafetÃ­n', 'si', 'si', 'si', 'si', '3', 'ParticipaciÃ³n 1: 20/01/2004\r\nParticipaciÃ³n 2: 15/02/2005\r\nParticipaciÃ³n 3: 26/02/2007'),
('cilarreta', '', '', '', '', 2, '1', '', '', '', '', '', '', '', '', '', '', ''),
('pilarreta', '', '', '', '', 3, '1', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_transfusionales`
--

CREATE TABLE IF NOT EXISTS `unidades_transfusionales` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_laboratorio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_serologia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_inmunohematologia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_conservacion_almacen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_donacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_registro_recepcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_examen_medico` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_recuperacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_cafetin` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_procesamiento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_estadisticas` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ut_seccion_secretaria` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `participacion_programa_inhrr` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nro_participaciones_inhrr` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `participacion_descripcion_inhrr` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Banco de Sangre y Unidades Transfuncionales - Ambientes' AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `unidades_transfusionales`
--

INSERT INTO `unidades_transfusionales` (`usuario`, `ut_seccion_laboratorio`, `ut_serologia`, `ut_inmunohematologia`, `ut_seccion_conservacion_almacen`, `id`, `cod`, `ut_seccion_donacion`, `ut_registro_recepcion`, `ut_examen_medico`, `ut_recuperacion`, `ut_cafetin`, `ut_seccion_procesamiento`, `ut_seccion_estadisticas`, `ut_seccion_secretaria`, `participacion_programa_inhrr`, `nro_participaciones_inhrr`, `participacion_descripcion_inhrr`) VALUES
('fmogollon', 'si', 'SerologÃ­a', 'InmunohematologÃ­a', '', 1, '1', 'si', 'Registro y RecepciÃ³n', '', 'RecuperaciÃ³n', 'CafetÃ­n', '', '', '', 'si', '3', 'ParticipaciÃ³n 1: 20/01/2004\r\nParticipaciÃ³n 2: 15/02/2005\r\nParticipaciÃ³n 3: 26/02/2007'),
('dilarreta', '', '', '', '', 2, '1', '', '', '', '', '', '', '', '', '', '', ''),
('cilarreta', '', '', '', '', 4, '1', '', '', '', '', '', '', '', '', '', '', ''),
('pilarreta', '', '', '', '', 5, '1', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nro_solicitud` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombrebs` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rif_bs` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nit_bs` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nro_solicitud`, `usuario`, `nombres`, `apellidos`, `cedula`, `telefono`, `contrasenia`, `correo`, `nombrebs`, `rif_bs`, `nit_bs`, `estatus`, `cod`) VALUES
(1, '', 'fmogollon', 'Fanny Alexandra', 'Mogollón Rojas', 'V-19334181', '04148946790', '827ccb0eea8a706c4c34a16891f84e7b', 'fmogollon@inhrr.gob.ve', 'Banco De Sangre Oficial', 'G-0002247123-1', 'J-00043434003-3', '1', '1'),
(2, '', 'dilarreta', 'Domingo José', 'Ilarreta Heydras', 'V-17588630', '04128231347', '5fb4f4369e82ec5d08ef3db404e32a30', 'dilarreta@inhrr.gob.ve', 'Banco De Sangre Del INHRR', 'G-0005454584-1', 'J-21212154847-7', '1', '0'),
(4, '', 'cilarreta', 'Carlos', 'Ilarreta', 'V-20911187', '042254547574', '827ccb0eea8a706c4c34a16891f84e7b', 'carlos@inhrr.gob.ve', 'Banco De Carlos', 'J-DS344545', 'G-00145432-9', '1', '0'),
(5, '', 'pilarreta', 'Pedro', 'Ilarreta', 'V-16301894', '041256604477', '827ccb0eea8a706c4c34a16891f84e7b', 'pedro@inhrr.gob.ve', 'Banco De Pedro', 'G-000878784', 'J-0787567456', '1', '0'),
(6, '', 'eilarreta', 'Elisa Natalia', 'Ilarreta Mogollón', 'V-17588633', '04128231347', '', 'eilarreta@inhrr.gob.ve', 'Banco ++ GE', 'G-25487897987-2', 'J-123123123-9', '0', '0');
