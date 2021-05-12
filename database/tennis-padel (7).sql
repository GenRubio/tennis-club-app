-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2021 a las 19:27:56
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tennis-padel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `calendario` tinyint(1) NOT NULL DEFAULT 0,
  `formulario` tinyint(1) NOT NULL DEFAULT 0,
  `visible` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `titulo`, `descripcion`, `imagen`, `slug`, `tipo`, `calendario`, `formulario`, `visible`, `activo`, `updated_at`, `created_at`) VALUES
(10, 'ESCOLA INFANTIL TENNIS', '<p>MATRICULA: 20&euro; AL COMEN&Ccedil;AR EL CURS / GERMANS -10%</p>', NULL, 'escola-infantil-tennis', 2, 0, 1, 1, 1, '2021-05-07 17:08:45', '2021-05-04 16:01:03'),
(11, 'ESCOLA ADULTS TENNIS', '<p>MAX. 4 ALUMNES</p>', NULL, 'escola-adults-tennis', 3, 0, 1, 1, 1, '2021-05-07 17:09:40', '2021-05-04 16:03:05'),
(12, 'ESCOLA INFANTIL PADEL', '<p>MATRICULA: 20&euro; AL COMEN&Ccedil;AR EL CURS / GERMANS -10%</p>', NULL, 'escola-infantil-padel', 2, 0, 1, 1, 1, '2021-05-08 05:11:09', '2021-05-04 16:03:39'),
(13, 'ESCOLA ADULTS PADEL', '<p>MAX. 4 ALUMNES</p>', NULL, 'escola-adults-padel', 3, 0, 1, 1, 1, '2021-05-08 05:11:08', '2021-05-04 16:04:02'),
(17, 'CASAL D\'ESTIU 2021', NULL, 'images/actividades/9f3b1064618418fc43af4bb42467f31b-imagen.jpg', 'casal-destiu-2021', 2, 0, 1, 1, 1, '2021-05-12 11:41:49', '2021-05-04 16:51:18'),
(18, 'Abrimos las inscripciones para la Escuela de Verano 2021 del Cl', '<p>Nos alegra comunicaros que una vez m&aacute;s el Club N&agrave;utic Estartit organizar&aacute; los cursos en format casal semanal tambi&eacute;n conocidos como Escuela de Verano.</p>\r\n\r\n<p>Y ponemos a vuestra disposici&oacute;n una oferta de lanzamiento, y es que todos aquellos formalic&eacute;is las inscripciones durante este mes de Mayo tendr&eacute;is un 10 % de bonificaci&oacute;n extra en el precio final.</p>\r\n\r\n<p>Esta oferta es acumulable a otros descuentos que tenemos disponibles para familias con m&aacute;s de un hijo o para cursos de m&aacute;s de una semana.</p>\r\n\r\n<p>Para m&aacute;s informaci&oacute;n, pod&eacute;is contactar con activitats@cnestartit.com o llamando al 972 751 402</p>', 'images/actividades/c9833ebbd360e2dd1f9d1f42c83816ee-imagen.jpg', 'abrimos-las-inscripciones-para-la-escuela-de-verano-2021-del-cl', 1, 0, 0, 1, 1, '2021-05-11 17:34:34', '2021-05-09 07:32:22'),
(19, 'El equipo absoluto de tenis a dos victorias de la temporada', '<p>El equipo absoluto de tenis ha conseguido esta semana una nueva victoria. Ya no es noticia, porque esta temporada nos tienen mal acostumbrados, contiene las jornadas con victorias y la &uacute;ltima, la m&aacute;s importante y decisiva, ni m&aacute;s ni menos contra el segundo clasificado, el CT Banyoles, invicto hasta entonces. Aunque el resultado de 4-1, no ha sido nada f&aacute;cil, se ha trabajado hasta el final, y as&iacute; lo han reflejado los resultados de los partidos.</p>\r\n\r\n<p>Albert Feixas, actual n&uacute;mero 1 del equipo se ha impuesto en un partido muy serio en el n&uacute;mero 1 del equipo del plan del lago, por un doble 6-3. Los otros partidos han sido m&aacute;s igualados, con suspenso hasta el final y con posibilidad de la victoria por cualquier jugador.</p>\r\n\r\n<p>Oliver Moreno ha sudado para derrotar al n&uacute;mero dos del equipo visitante, un jugador muy guerrero y incansable que ha disputado cada punto como si fuera el decisivo. El marcador final 5-7 6-4 7-6.En otro partido maratoniano &Aacute;lex Moreno, jugador 3 del equipo, ha disputado uno de sus mejores partidos de las &uacute;ltimas temporadas, consiguiendo un alto nivel de juego y solidez. Al final, el resultado de 6-3 3-6 6-4 ha supuesto el 3-0 en el marcador a falta del enfrentamiento de los jugadores 4 de cada equipo y el dobles. Gerard Carb&oacute; ha dado un salto cualitativo en su juego en las &uacute;ltimas semanas, aunque ha acabado perdiendo, en un partido muy interesante, por tres sets 3-6 6-1 1-6. El partido de dobles ha servido para aumentar la ventaja en el resultado final que ha sido de 4 a 1.</p>\r\n\r\n<p>A falta s&oacute;lo de dos jornadas, el equipo absoluto asegura el ascenso de categor&iacute;a y ahora faltar&aacute; saber si lo har&aacute; como campe&oacute;n y si lo har&aacute; sin perder ning&uacute;n partido.</p>\r\n\r\n<p>Por otra parte los equipos junior e infantil no han podido superar al CT Celr&agrave; y CT Porqueres respectivamente. Un CT Celr&agrave; de mucho nivel y un combativo Porqueres han sido demasiado rival para nuestros jugadores.</p>', 'images/actividades/fc079d8957c2376e72f8c081c1409d64-imagen.jpg', 'el-equipo-absoluto-de-tenis-a-dos-victorias-de-la-temporada', 1, 0, 0, 1, 1, '2021-05-09 13:41:27', '2021-05-09 07:33:21'),
(20, 'El equipo absoluto de tenis continúa invicto', '<p>El pasado fin de semana se disput&oacute; la cuarta jornada de la Liga Catalana de Tenis, en categor&iacute;a Absoluto y consolida al equipo del club como l&iacute;deres y &uacute;nico equipo invicto.</p>\r\n\r\n<p>El CT Olot &ldquo;B&rdquo; visitaba a los l&iacute;deres con la esperanza de conseguir, lo que no hab&iacute;an hecho los &uacute;ltimos equipos, batir el equipo del N&aacute;utic Estartit. Y como ya nos tienen acostumbrados los jugadores del equipo absoluto, la jornada se desarrollar&iacute;a con suspenso hasta el final.</p>\r\n\r\n<p>Al final de los partidos individuales el marcador era de 2-2 al igual que en todos los dem&aacute;s enfrentamientos, se decidir&iacute;a el ganador en el partido de dobles.</p>\r\n\r\n<p>La pareja formada por Gerard Carb&oacute;n y &Oacute;liver Moreno ser&iacute;an los encargados de certificar 3 puntos m&aacute;s para el equipo, que sigue l&iacute;der invicto del grupo 3 de Gerona.</p>\r\n\r\n<p>En cuanto a los equipos juveniles, debutaron en la competici&oacute;n los cadetes, que se desplazaron hasta Porqueres para disputar la primera jornada y no lo hicieron nada mal. El gui&oacute;n fue id&eacute;ntico al del equipo absoluto, pero con un desenlace diferente. Si al final de los partidos individuales disputados por Miguel Mart&iacute;nez, Nilo Cat, Eloi S&aacute;nchez y Hugo LLoret era de 2 a 2, el partido de dobles que disput&oacute; en Nico Garcia y Ca&iacute;n Subir&agrave; supuso el 3 a 2 para los locales.</p>\r\n\r\n<p>A pesar de la derrota general, el equipo cadete sum&oacute; dos puntos valiosos de cara a la clasificaci&oacute;n.</p>', 'images/actividades/ff1eb23e66661b387eb16583cf715d8d-imagen.jpg', 'el-equipo-absoluto-de-tenis-continua-invicto', 1, 0, 0, 1, 1, '2021-05-11 17:39:10', '2021-05-11 17:39:04'),
(21, 'Únete al Club. ¡Hazte socio!', '<p>Empieza a disfrutar de los descuentos que obtendr&aacute;s en los diferentes servicios que ofrece el Club como por ejemplo el amarre, el restaurante, el Mini-market, la gasolinera, el Centro de Actividades y los servicios de gr&uacute;a y travelift.</p>\r\n\r\n<p>Adem&aacute;s, disfrutar&aacute;s de una bonificaci&oacute;n en tu tarifa anual de aparcamiento.</p>\r\n\r\n<p>Podr&aacute;s acceder de manera gratuita a las instalaciones de Torre Gran con acceso al campo multi deporte, la piscina, los vestuarios y podr&aacute;s utilizar entrega la sala polivalente, en julio y agosto.</p>\r\n\r\n<p>Finalmente tendr&aacute;s acceso a ventajas exclusivas gracias a los convenios que el Club ha establecido con diferentes entidades: Festival de Jazz de L&rsquo;Estartit, Espacio Ter, Generali Seguros, Costa Brava Space, etc &hellip;</p>\r\n\r\n<p>Las ventajas del Socio de n&uacute;mero (socio con derecho de uso de amarre) son:</p>\r\n\r\n<ul>\r\n	<li>Parking: 100% de descuento</li>\r\n	<li>Amarre y servicios: tarifa exclusiva</li>\r\n	<li>Centre d&rsquo;activitats y Complex Torre Gran: 20% de descuento</li>\r\n	<li>Entrada al Complex Torre Gran (campo multideporte, piscina, vestuarios y uso de la sala polivalente): gratuita con reserva previa</li>\r\n	<li>Bar-restaurante: 10% de descuento</li>\r\n	<li>Carburante: 0,05 &euro;/l de descuento</li>\r\n	<li>Minimarket: 5% de descuento</li>\r\n	<li>Abono anual boyas Illes Medes: 30% de descuento</li>\r\n	<li>Auditorio teatro Espai Ter: 25% de descuento</li>\r\n</ul>\r\n\r\n<p>Las ventajas del Socio deportivo y familiar son:</p>\r\n\r\n<ul>\r\n	<li>Parking: 88 % de descuento</li>\r\n	<li>Amarre y servicios: entre un 5% y un 10% de descuento en la tarifa de amarre de transe&uacute;ntes</li>\r\n	<li>Centre d&rsquo;activitats y Complex Torre Gran: 20% de descuento</li>\r\n	<li>Entrada al Complex Torre Gran (camp multideporte, piscina, vestuarios y uso de la sala polivalente): gratuita con reserva previa</li>\r\n	<li>Bar-restaurante: 10% de descuento</li>\r\n	<li>Carburante: 0,05 &euro;/l de descuento</li>\r\n	<li>Minimarket: 5% de descuento</li>\r\n	<li>Auditorio teatro Espai Ter: 25% de descuento</li>\r\n</ul>\r\n\r\n<p>Las ventajas del Socio juvenil y infantil son:</p>\r\n\r\n<ul>\r\n	<li>Centre d&rsquo;Activitats y Complex Torre Gran: 10% de descuento</li>\r\n	<li>Entrada al Complex Torre Gran (camp multideporte, piscina, vestuarios y uso de la sala polivalente): gratuita con reserva previa</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Si quieres m&aacute;s informaci&oacute;n cont&aacute;ctanos a info@cnestartit.com</p>', 'images/actividades/73b6de17874e224aacfea274e0aa52f6-imagen.jpg', 'unete-al-club-hazte-socio', 3, 0, 0, 1, 1, '2021-05-12 15:13:00', '2021-05-11 17:44:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividade_form_grupo_extra`
--

CREATE TABLE `actividade_form_grupo_extra` (
  `id` int(11) NOT NULL,
  `form_grupo_extra_id` int(11) NOT NULL,
  `actividade_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividade_form_grupo_extra`
--

INSERT INTO `actividade_form_grupo_extra` (`id`, `form_grupo_extra_id`, `actividade_id`, `created_at`, `updated_at`) VALUES
(10, 2, 21, NULL, NULL),
(11, 1, 21, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_categorias`
--

CREATE TABLE `actividad_categorias` (
  `id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_categorias`
--

INSERT INTO `actividad_categorias` (`id`, `titulo`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Torneo', 1, '2021-05-06 03:37:24', '2021-05-06 03:37:24'),
(2, 'Casal', 1, '2021-05-06 03:37:39', '2021-05-06 03:37:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_categoria_actividade`
--

CREATE TABLE `actividad_categoria_actividade` (
  `id` int(11) NOT NULL,
  `actividad_categoria_id` int(11) NOT NULL,
  `actividade_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_categoria_actividade`
--

INSERT INTO `actividad_categoria_actividade` (`id`, `actividad_categoria_id`, `actividade_id`, `created_at`, `updated_at`) VALUES
(1, 2, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_extras`
--

CREATE TABLE `actividad_extras` (
  `id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `precio_normal` double DEFAULT NULL,
  `precio_socio` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_extras`
--

INSERT INTO `actividad_extras` (`id`, `titulo`, `activo`, `precio_normal`, `precio_socio`, `created_at`, `updated_at`) VALUES
(1, 'ESTADA MATINS  9 A 13 H', 1, NULL, NULL, '2021-05-04 16:27:52', '2021-05-04 16:27:52'),
(2, 'MENJADOR 13 A 15 H', 1, NULL, NULL, '2021-05-04 16:28:14', '2021-05-04 16:28:14'),
(3, 'CAMPUS JUVENIL 9 A 13 H', 1, NULL, NULL, '2021-05-04 16:28:27', '2021-05-04 16:28:27'),
(4, 'HORA DE PERMANENCIA (GRATUÏTA)  7`45H A 9 H', 1, NULL, NULL, '2021-05-04 16:28:54', '2021-05-04 16:28:54'),
(5, 'CURSOS TARDES:  TENNIS', 1, NULL, NULL, '2021-05-04 16:29:19', '2021-05-04 16:29:19'),
(6, 'CURSOS TARDES: PÀDEL', 1, NULL, NULL, '2021-05-04 16:29:32', '2021-05-04 16:29:34'),
(7, 'CURSOS TARDES: NATACIÓ', 1, NULL, NULL, '2021-05-04 16:29:51', '2021-05-04 16:29:51'),
(8, 'RAQUETA (si necessita comprar raqueta)', 1, NULL, NULL, '2021-05-04 16:30:13', '2021-05-04 16:30:13'),
(9, 'PALA (si necessita comprar pala)', 1, NULL, NULL, '2021-05-04 16:30:23', '2021-05-04 16:30:23'),
(10, 'Preparació física – 1 dia a la setmana 10€/MES', 1, 10, NULL, '2021-05-04 16:31:28', '2021-05-07 02:02:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_extra_actividade`
--

CREATE TABLE `actividad_extra_actividade` (
  `id` int(11) NOT NULL,
  `actividade_id` int(11) NOT NULL,
  `actividad_extra_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_extra_actividade`
--

INSERT INTO `actividad_extra_actividade` (`id`, `actividade_id`, `actividad_extra_id`, `created_at`, `updated_at`) VALUES
(1, 16, 3, NULL, NULL),
(2, 16, 5, NULL, NULL),
(3, 16, 7, NULL, NULL),
(4, 16, 6, NULL, NULL),
(5, 16, 1, NULL, NULL),
(6, 16, 4, NULL, NULL),
(7, 16, 2, NULL, NULL),
(8, 16, 9, NULL, NULL),
(9, 16, 8, NULL, NULL),
(10, 17, 3, NULL, NULL),
(11, 17, 5, NULL, NULL),
(12, 17, 7, NULL, NULL),
(13, 17, 6, NULL, NULL),
(14, 17, 1, NULL, NULL),
(15, 17, 4, NULL, NULL),
(16, 17, 2, NULL, NULL),
(17, 17, 9, NULL, NULL),
(18, 17, 8, NULL, NULL),
(25, 21, 5, NULL, NULL),
(26, 21, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_extra_form_grupo_opcione`
--

CREATE TABLE `actividad_extra_form_grupo_opcione` (
  `id` int(11) NOT NULL,
  `form_grupo_opcione_id` int(11) NOT NULL,
  `actividad_extra_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_extra_form_grupo_opcione`
--

INSERT INTO `actividad_extra_form_grupo_opcione` (`id`, `form_grupo_opcione_id`, `actividad_extra_id`, `created_at`, `updated_at`) VALUES
(1, 6, 10, NULL, NULL),
(2, 13, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_fechas`
--

CREATE TABLE `actividad_fechas` (
  `id` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date DEFAULT NULL,
  `calendario` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `actividad_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_fechas`
--

INSERT INTO `actividad_fechas` (`id`, `data_inicio`, `data_final`, `calendario`, `updated_at`, `created_at`, `actividad_id`, `activo`) VALUES
(4, '2021-05-09', NULL, 1, '2021-05-09 18:09:12', '2021-05-09 18:08:24', 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_fecha_horarios`
--

CREATE TABLE `actividad_fecha_horarios` (
  `id` int(11) NOT NULL,
  `actividad_fecha_id` int(11) NOT NULL,
  `dia` tinyint(1) NOT NULL DEFAULT 0,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_fecha_horarios`
--

INSERT INTO `actividad_fecha_horarios` (`id`, `actividad_fecha_id`, `dia`, `hora_inicio`, `hora_final`, `created_at`, `updated_at`) VALUES
(5, 4, 5, '07:08:00', '10:08:00', '2021-05-09 18:08:53', '2021-05-09 18:08:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_inscripciones`
--

CREATE TABLE `actividad_inscripciones` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `actividad_id` int(11) NOT NULL,
  `opciones` text DEFAULT NULL,
  `pagado` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_inscripciones`
--

INSERT INTO `actividad_inscripciones` (`id`, `cliente_id`, `actividad_id`, `opciones`, `pagado`, `updated_at`, `created_at`) VALUES
(25, 33, 13, '{\"CLASSES MENSUALS \":[\" 2 PERSONAS \\u2013 1 DIA A LA SETMANA \\u2013 1H\"]}', 1, '2021-05-11 10:40:43', '2021-05-11 10:37:26'),
(26, 33, 21, '{\"Prueba 2 \":[\" Prueba 2\"],\"extra-grupos\":{\"Categor\\u00eda torneo\":\"Femenino\",\"Nivel padel\":\"Junior\"},\"extras\":[\"CURSOS TARDES:  TENNIS\",\"CURSOS TARDES: P\\u00c0DEL\"]}', 0, '2021-05-12 15:19:34', '2021-05-12 15:19:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_pdfs`
--

CREATE TABLE `actividad_pdfs` (
  `id` int(11) NOT NULL,
  `actividad_id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `url` text NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_pdfs`
--

INSERT INTO `actividad_pdfs` (`id`, `actividad_id`, `titulo`, `url`, `activo`, `created_at`, `updated_at`) VALUES
(1, 21, 'Evento 1', 'D:\\xampp2\\tmp\\phpDE9D.tmp', 1, '2021-05-12 14:53:34', '2021-05-12 14:53:34'),
(2, 21, 'Evento 2', 'D:\\xampp2\\tmp\\phpE23E.tmp', 1, '2021-05-12 14:55:45', '2021-05-12 14:55:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_tipos`
--

CREATE TABLE `actividad_tipos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_tipos`
--

INSERT INTO `actividad_tipos` (`id`, `titulo`, `created_at`, `updated_at`) VALUES
(1, 'Sin preferencia', '2021-04-25 06:16:01', '2021-05-06 01:27:32'),
(2, 'Infantil', '2021-04-25 06:16:06', '2021-05-06 01:27:21'),
(3, 'Adultos', '2021-04-25 06:16:12', '2021-05-06 01:27:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler_pistas`
--

CREATE TABLE `alquiler_pistas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_pista` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` double(8,2) NOT NULL,
  `precio_persona` double(8,2) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alquiler_pistas`
--

INSERT INTO `alquiler_pistas` (`id`, `tipo_pista`, `titulo`, `descripcion`, `url`, `precio`, `precio_persona`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Tennis', 'TERRA BATUDA 2 PERSONES', NULL, NULL, 15.00, NULL, 1, '2021-02-21 17:51:08', '2021-02-21 17:51:08'),
(2, 'Tennis', 'TERRA BATUDA 4 PERSONES', NULL, NULL, 20.00, NULL, 1, '2021-02-21 17:51:24', '2021-02-21 17:51:24'),
(3, 'Tennis', 'QUICK 2 PERSONES', NULL, NULL, 13.00, NULL, 1, '2021-02-21 17:51:41', '2021-02-21 17:51:41'),
(4, 'Tennis', 'QUICK 4 PERSONES', NULL, NULL, 15.00, NULL, 1, '2021-02-21 17:51:54', '2021-02-21 17:51:54'),
(5, 'Padel', 'DE 8H A 17H', NULL, NULL, 12.00, 3.00, 1, '2021-02-21 17:58:27', '2021-02-21 17:58:27'),
(6, 'Padel', 'DE 17H A 23H', NULL, NULL, 20.00, 5.00, 1, '2021-02-21 17:58:50', '2021-02-21 17:58:50'),
(7, 'Padel', 'CAP DE SETMANA I FESTIUS', NULL, NULL, 20.00, 5.00, 1, '2021-02-21 17:59:09', '2021-02-21 17:59:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `cat_salut` varchar(30) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `poblacio` varchar(50) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `data_naxement` date NOT NULL,
  `conte_bancari` varchar(30) DEFAULT NULL,
  `telefono_1` varchar(20) DEFAULT NULL,
  `telefono_2` varchar(20) DEFAULT NULL,
  `name_emergenica` varchar(20) DEFAULT NULL,
  `telefono_1_emergencia` varchar(20) DEFAULT NULL,
  `telefono_2_emergencia` varchar(20) DEFAULT NULL,
  `quota_socio_id` int(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `first_name`, `second_name`, `sexe`, `dni`, `nacionalidad`, `cat_salut`, `address`, `poblacio`, `cp`, `provincia`, `data_naxement`, `conte_bancari`, `telefono_1`, `telefono_2`, `name_emergenica`, `telefono_1_emergencia`, `telefono_2_emergencia`, `quota_socio_id`, `image`, `created_at`, `updated_at`) VALUES
(33, 64, 'Gen', 'Rubio', 0, 'Y1774178H', 'España', NULL, 'Av. Passapera', 'Lloret de Mar', '17310', 'Catalunya', '1998-02-13', NULL, '65456456', NULL, NULL, NULL, NULL, NULL, 'images/profile/804f65d253f218f03dd5775c2203f5a2.jpg', NULL, '2021-05-11 14:10:42'),
(37, 64, 'Potato', '234234', 0, NULL, 'Austria', '234234', 'Av. Passapera', 'Lloret de Mar', '17310', 'Catalunya', '2020-02-13', NULL, NULL, NULL, 'Gen Rubio', '65456456', NULL, NULL, NULL, '2021-05-11 14:05:06', '2021-05-11 14:05:06'),
(38, 64, 'Potato2', 'sefewf', 0, NULL, 'Armenia', '3434234', 'Av. Passapera', 'Lloret de Mar', '17310', 'Catalunya', '2020-02-13', NULL, NULL, NULL, 'Gen Rubio', '65456456', NULL, NULL, NULL, '2021-05-11 14:07:01', '2021-05-11 14:07:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_parientes_relacions`
--

CREATE TABLE `client_parientes_relacions` (
  `id` int(11) NOT NULL,
  `client_id_1` int(11) NOT NULL,
  `client_id_2` int(11) NOT NULL,
  `client_tipo_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `client_parientes_relacions`
--

INSERT INTO `client_parientes_relacions` (`id`, `client_id_1`, `client_id_2`, `client_tipo_id`, `updated_at`, `created_at`) VALUES
(31, 33, 37, 1, '2021-05-11 14:05:06', '2021-05-11 14:05:06'),
(32, 37, 33, 3, '2021-05-11 14:05:06', '2021-05-11 14:05:06'),
(33, 33, 38, 1, '2021-05-11 14:07:01', '2021-05-11 14:07:01'),
(34, 38, 33, 3, '2021-05-11 14:07:01', '2021-05-11 14:07:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_tipos_parientes`
--

CREATE TABLE `client_tipos_parientes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `client_tipos_parientes`
--

INSERT INTO `client_tipos_parientes` (`id`, `nom`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Padre', 1, '2021-04-14 02:08:06', '2021-04-14 02:08:06'),
(2, 'Madre', 1, '2021-04-14 02:08:18', '2021-04-14 02:08:18'),
(3, 'Hijo', 1, '2021-04-14 02:08:31', '2021-04-14 02:08:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_grupo_extras`
--

CREATE TABLE `form_grupo_extras` (
  `id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `tipo_respuestas` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `form_grupo_extras`
--

INSERT INTO `form_grupo_extras` (`id`, `titulo`, `descripcion`, `tipo_respuestas`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Nivel padel', NULL, 0, 1, '2021-05-06 02:17:01', '2021-05-06 02:17:01'),
(2, 'Categoría torneo', NULL, 0, 1, '2021-05-06 02:35:15', '2021-05-07 02:03:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_grupo_opciones`
--

CREATE TABLE `form_grupo_opciones` (
  `id` int(11) NOT NULL,
  `actividad_id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `tipo_respuestas` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `form_grupo_opciones`
--

INSERT INTO `form_grupo_opciones` (`id`, `actividad_id`, `titulo`, `descripcion`, `tipo_respuestas`, `activo`, `created_at`, `updated_at`) VALUES
(4, 10, 'INICIACIÓ', '(1h/classe) ENTRE 8-12 ALUMNES', 0, 1, '2021-05-06 03:11:46', '2021-05-07 01:59:45'),
(5, 10, 'PERFECCIONAMENT', '(1.5h/classe) MÀXIM 6 ALUMNES', 0, 1, '2021-05-06 14:31:55', '2021-05-07 02:27:47'),
(6, 10, 'COMPETICIÓ', '(2h/classe) MÀXIM 4 ALUMNES', 0, 1, '2021-05-06 14:33:01', '2021-05-07 01:59:36'),
(7, 17, 'BLOC 1', 'JUNY - JULIOL', 1, 1, '2021-05-07 03:11:53', '2021-05-07 19:01:28'),
(8, 17, 'BLOC 2', 'AGOST - SETEMBRE', 1, 1, '2021-05-07 03:13:11', '2021-05-07 03:14:02'),
(9, 11, 'CLASSES MENSUALS', NULL, 0, 1, '2021-05-07 17:14:44', '2021-05-07 17:15:24'),
(10, 11, 'CLASSES PARTICULARS', NULL, 0, 1, '2021-05-07 17:15:36', '2021-05-07 17:17:15'),
(11, 12, 'INICIACIÓ', '(1h/classe) MÀXIM 6 ALUMNES', 0, 1, '2021-05-08 05:00:39', '2021-05-08 05:07:19'),
(12, 12, 'PERFECCIONAMENT', '(1.5h/classe) MÀXIM 4 ALUMNES', 0, 1, '2021-05-08 05:04:52', '2021-05-08 05:07:18'),
(13, 12, 'COMPETICIÓ', '(2h/classe) MÀXIM 4 ALUMNES', 0, 1, '2021-05-08 05:06:17', '2021-05-08 05:07:17'),
(14, 13, 'CLASSES MENSUALS', NULL, 0, 1, '2021-05-08 05:07:58', '2021-05-08 05:10:50'),
(15, 13, 'CLASSES PARTICULARS', NULL, 0, 1, '2021-05-08 05:09:12', '2021-05-08 05:10:49'),
(16, 21, 'Hola 1', 'asdfasdfdsf', 0, 1, '2021-05-12 15:04:01', '2021-05-12 15:04:23'),
(17, 21, 'Prueba 2', '234234324', 0, 1, '2021-05-12 15:18:42', '2021-05-12 15:18:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_opcion_extras`
--

CREATE TABLE `form_opcion_extras` (
  `id` int(11) NOT NULL,
  `form_grupo_extra_id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `form_opcion_extras`
--

INSERT INTO `form_opcion_extras` (`id`, `form_grupo_extra_id`, `titulo`, `activo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Profecional', 1, '2021-05-06 02:33:32', '2021-05-06 02:33:32'),
(2, 1, 'Junior', 1, '2021-05-06 02:33:40', '2021-05-06 02:33:40'),
(3, 1, 'Intermedio', 1, '2021-05-06 02:33:55', '2021-05-06 02:33:55'),
(4, 2, 'Masculino', 1, '2021-05-06 02:35:30', '2021-05-06 02:35:30'),
(5, 2, 'Femenino', 1, '2021-05-06 02:35:38', '2021-05-06 02:35:38'),
(6, 2, 'Mixto', 1, '2021-05-06 02:35:44', '2021-05-07 02:05:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_opcion_opciones`
--

CREATE TABLE `form_opcion_opciones` (
  `id` int(11) NOT NULL,
  `form_grupo_opcion_id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `precio_normal` double DEFAULT NULL,
  `precio_socio` double DEFAULT NULL,
  `precio_persona` tinyint(1) DEFAULT 0,
  `precio_mensual` tinyint(1) DEFAULT 0,
  `activo` tinyint(1) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `form_opcion_opciones`
--

INSERT INTO `form_opcion_opciones` (`id`, `form_grupo_opcion_id`, `titulo`, `precio_normal`, `precio_socio`, `precio_persona`, `precio_mensual`, `activo`, `updated_at`, `created_at`) VALUES
(1, 4, '1h/SETMANA', 25, 15, 0, 0, 1, '2021-05-06 03:25:09', '2021-05-06 03:25:09'),
(2, 5, '1 DIA A LA SETMANA', 48, 28.2, 0, 0, 1, '2021-05-06 14:32:22', '2021-05-06 14:32:22'),
(3, 5, '2 DIES A LA SETMANA', 76, 45.6, 0, 0, 1, '2021-05-06 14:32:33', '2021-05-06 14:32:33'),
(4, 6, '1 DIA A LA SETMANA', NULL, 40, 0, 0, 1, '2021-05-06 14:33:13', '2021-05-06 14:33:13'),
(5, 6, '2 DIES A LA SETMANA', NULL, 80, 0, 0, 1, '2021-05-06 14:33:24', '2021-05-06 14:33:24'),
(6, 6, '3 DIES A LA SETMANA', NULL, 120, 0, 0, 1, '2021-05-07 02:01:25', '2021-05-06 14:33:57'),
(7, 7, '23 de Juny', NULL, NULL, 0, 0, 1, '2021-05-07 03:12:06', '2021-05-07 03:12:06'),
(8, 7, '25 de juny', NULL, NULL, 0, 0, 1, '2021-05-07 03:12:12', '2021-05-07 03:12:12'),
(9, 7, '28 de juny al 2 de julio', NULL, NULL, 0, 0, 1, '2021-05-07 03:12:18', '2021-05-07 03:12:18'),
(10, 7, '5 de juliol al 9 de juliol', NULL, NULL, 0, 0, 1, '2021-05-07 03:12:24', '2021-05-07 03:12:24'),
(11, 7, '12 de juliol al 16 de juliol', NULL, NULL, 0, 0, 1, '2021-05-07 03:12:30', '2021-05-07 03:12:30'),
(12, 7, '19 de juliol al 23 de juliol', NULL, NULL, 0, 0, 1, '2021-05-07 03:12:39', '2021-05-07 03:12:39'),
(13, 7, '26 de juliol al 30 de juliol (festa 26 juliol)', NULL, NULL, 0, 0, 1, '2021-05-07 03:12:44', '2021-05-07 03:12:44'),
(14, 8, '2 d\'agost al 6 d\'agost', NULL, NULL, 0, 0, 1, '2021-05-07 03:13:25', '2021-05-07 03:13:25'),
(15, 8, '9 d\'agost al 13 d\'agost (festa 15 agost)', NULL, NULL, 0, 0, 1, '2021-05-07 03:13:33', '2021-05-07 03:13:33'),
(16, 8, '16 d\'agost al 20 d\'agost', NULL, NULL, 0, 0, 1, '2021-05-07 03:13:40', '2021-05-07 03:13:40'),
(17, 8, '23 d\'agost al 27 d\'agost', NULL, NULL, 0, 0, 1, '2021-05-07 03:13:46', '2021-05-07 03:13:46'),
(18, 8, '30 d` agost al 3 de setembre', NULL, NULL, 0, 0, 1, '2021-05-07 03:13:51', '2021-05-07 03:13:51'),
(19, 8, '6 de setembre al 10 setembre (festa 11 set)', NULL, NULL, 0, 0, 1, '2021-05-07 03:13:57', '2021-05-07 03:13:57'),
(20, 9, '1 HORA A LA SETMANA', 35, 21, 0, 0, 1, '2021-05-07 17:15:04', '2021-05-07 17:15:04'),
(21, 9, '1,5 HORES A LA SETMANA', 46, 27.6, 0, 0, 1, '2021-05-07 17:15:18', '2021-05-07 17:15:18'),
(22, 10, '1H', 30, 18, 0, 0, 1, '2021-05-07 17:15:59', '2021-05-07 17:15:59'),
(23, 10, '1h / 2 persones', 18, 10.8, 1, 0, 1, '2021-05-08 05:37:01', '2021-05-07 17:16:15'),
(24, 10, '1h / 3 persones', 12, 7.2, 1, 0, 1, '2021-05-08 05:36:54', '2021-05-07 17:16:30'),
(25, 10, 'PACK 5h: INDIVIDUAL', 130, 78, 0, 0, 1, '2021-05-07 17:16:41', '2021-05-07 17:16:41'),
(26, 10, 'PACK 5h: PARELLES', 70, 42, 1, 0, 1, '2021-05-08 05:36:33', '2021-05-07 17:16:55'),
(27, 10, 'PACK 5h: 3 PERSONES', 50, 30, 1, 0, 1, '2021-05-08 05:36:21', '2021-05-07 17:17:09'),
(28, 11, '1h/SETMANA', 35, 21, 0, 0, 1, '2021-05-08 05:01:06', '2021-05-08 05:01:06'),
(29, 11, '2h/SETMANA', 55, 33, 0, 0, 1, '2021-05-08 05:04:26', '2021-05-08 05:04:26'),
(30, 12, '1 DIA A LA SETMANA', 48, 28.8, 0, 0, 1, '2021-05-08 05:05:37', '2021-05-08 05:05:37'),
(31, 12, '2 DIES A LA SETMANA', 76, 45.6, 0, 0, 1, '2021-05-08 05:05:48', '2021-05-08 05:05:48'),
(32, 13, '1 DIA A LA SETMANA', NULL, 40, 0, 0, 1, '2021-05-08 05:06:58', '2021-05-08 05:06:34'),
(33, 13, '2 DIES A LA SETMANA', NULL, 80, 0, 0, 1, '2021-05-08 05:06:47', '2021-05-08 05:06:47'),
(34, 13, '3 DIES A LA SETMANA', NULL, 120, 0, 0, 1, '2021-05-08 05:07:10', '2021-05-08 05:07:10'),
(35, 14, '2 PERSONAS – 1 DIA A LA SETMANA – 1H', 48, 28.8, 0, 0, 1, '2021-05-08 05:08:31', '2021-05-08 05:08:31'),
(36, 14, '3 PERSONAS – 1 DIA A LA SETMANA – 1H', 39, 23.4, 0, 0, 1, '2021-05-08 05:08:49', '2021-05-08 05:08:49'),
(37, 15, '1H', 30, 18, 0, 0, 1, '2021-05-08 05:09:30', '2021-05-08 05:09:30'),
(38, 15, '1h / 2 persones', 18, 10.8, 0, 0, 1, '2021-05-08 05:09:42', '2021-05-08 05:09:42'),
(39, 15, '1h / 3 persones', 12, 7.2, 0, 0, 1, '2021-05-08 05:09:56', '2021-05-08 05:09:56'),
(40, 15, 'PACK 5h: INDIVIDUAL', 130, 78, 0, 0, 1, '2021-05-08 05:10:06', '2021-05-08 05:10:06'),
(41, 15, 'PACK 5h: PARELLES', 70, 42, 0, 0, 1, '2021-05-08 05:10:26', '2021-05-08 05:10:26'),
(42, 15, 'PACK 5h: 3 PERSONES', 50, 30, 0, 0, 1, '2021-05-08 05:10:42', '2021-05-08 05:10:42'),
(43, 16, 'Prueba 1', 50, 40, 0, 0, 1, '2021-05-12 15:18:05', '2021-05-12 15:04:15'),
(44, 17, 'Prueba 2', 55, 33, 0, 0, 1, '2021-05-12 15:18:55', '2021-05-12 15:18:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galleria_images`
--

CREATE TABLE `galleria_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url_youtube` varchar(255) DEFAULT NULL,
  `titulo` longtext DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `destacada` tinyint(1) NOT NULL DEFAULT 0,
  `carusel` tinyint(1) NOT NULL DEFAULT 0,
  `tipo` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galleria_images`
--

INSERT INTO `galleria_images` (`id`, `image`, `url_youtube`, `titulo`, `descripcion`, `destacada`, `carusel`, `tipo`, `activo`, `updated_at`, `created_at`) VALUES
(1, 'images/galleria/296733e9a803156420c49067f4951855-image.jpg', '', NULL, NULL, 0, 0, 0, 1, '2021-03-14 11:55:44', '2021-03-14 11:55:44'),
(2, 'images/galleria/9d82ed8564ce4aa4e75d5e7030c3a931-image.jpg', '', NULL, NULL, 0, 0, 0, 1, '2021-03-14 11:55:51', '2021-03-14 11:55:51'),
(3, 'images/galleria/dc98dec35dffaebfa634bd25a23bd691-image.jpg', '', NULL, NULL, 0, 0, 0, 1, '2021-03-14 11:58:27', '2021-03-14 11:58:27'),
(4, 'images/galleria/5ad14218c315f191ea164726b0cc13aa-image.jpg', '', NULL, NULL, 0, 0, 0, 1, '2021-03-14 12:03:14', '2021-03-14 11:58:33'),
(5, 'images/galleria/781ac333af8c76d6482bafb7c4cdbae7-image.jpg', '', NULL, NULL, 1, 0, 0, 1, '2021-04-02 09:33:04', '2021-03-14 13:34:41'),
(6, 'images/galleria/b7fa5f7b358274a311cc8fa9d14a2c58-image.jpg', '', NULL, NULL, 0, 1, 0, 1, '2021-04-05 16:07:58', '2021-03-14 13:34:52'),
(7, 'images/galleria/53cf345396b59aae5ea70b47fb8aae59-image.jpg', '', NULL, NULL, 1, 0, 0, 1, '2021-04-02 09:32:45', '2021-03-14 13:35:08'),
(8, 'images/galleria/59581566ddd8d750a4bd6058af6dbcfc-image.jpg', '', 'asdasdasd', 'asdsadsdsd', 0, 1, 0, 1, '2021-04-05 16:07:48', '2021-03-14 13:35:27'),
(9, 'images/galleria/32dea37c088eb0d279b74dcc73b27980-image.jpg', '', NULL, NULL, 1, 0, 0, 1, '2021-04-02 09:31:46', '2021-03-14 13:35:45'),
(10, 'images/galleria/6ad7f1be8043fb1e40f92802fa3438e9-image.jpg', '', NULL, NULL, 0, 0, 0, 1, '2021-03-14 13:35:52', '2021-03-14 13:35:52'),
(11, 'images/galleria/bbf684c7a2dce8024fd90cb098773ba5-image.jpg', '', 'assdasd', 'asdasdasdasdsd', 0, 1, 0, 1, '2021-04-05 16:07:35', '2021-03-14 13:36:00'),
(16, NULL, '{\"provider\":\"youtube\",\"id\":\"IZobFzgKxqY\",\"title\":\"Cómo jugar al Pádel\",\"image\":\"https://i.ytimg.com/vi/IZobFzgKxqY/maxresdefault.jpg\",\"url\":\"https://www.youtube.com/watch?v=IZobFzgKxqY\"}', NULL, NULL, 0, 0, 0, 1, '2021-04-24 04:54:16', '2021-04-02 09:28:15'),
(17, NULL, '{\"provider\":\"youtube\",\"id\":\"-EOqxiCMy1U\",\"title\":\"Le meilleur du Padel\",\"image\":\"https://i.ytimg.com/vi/-EOqxiCMy1U/default.jpg\",\"url\":\"https://www.youtube.com/watch?v=-EOqxiCMy1U\"}', NULL, NULL, 0, 0, 0, 1, '2021-04-24 04:53:54', '2021-04-02 09:28:35'),
(18, NULL, '{\"provider\":\"youtube\",\"id\":\"sd9MlVoLf-w\",\"title\":\"5 claves para ser un buen jugador de pádel 🔥\",\"image\":\"https://i.ytimg.com/vi/sd9MlVoLf-w/default.jpg\",\"url\":\"https://www.youtube.com/watch?v=sd9MlVoLf-w\"}', NULL, NULL, 0, 0, 0, 1, '2021-04-24 04:53:41', '2021-04-02 09:28:56'),
(19, NULL, '{\"provider\":\"youtube\",\"id\":\"x9iDnwFTaOc\",\"title\":\"El partido de los puntazos | Cervezas Victoria Marbella Master 2019\",\"image\":\"https://i.ytimg.com/vi/x9iDnwFTaOc/maxresdefault.jpg\",\"url\":\"https://www.youtube.com/watch?v=x9iDnwFTaOc\"}', NULL, NULL, 0, 0, 0, 1, '2021-04-24 04:53:27', '2021-04-02 09:29:15'),
(20, NULL, '{\"provider\":\"youtube\",\"id\":\"1iVUUvdQmSQ\",\"title\":\"#Best9 Puntazos Masculinos World Padel Tour 2019\",\"image\":\"https://i.ytimg.com/vi/1iVUUvdQmSQ/maxresdefault.jpg\",\"url\":\"https://www.youtube.com/watch?v=1iVUUvdQmSQ\"}', NULL, NULL, 0, 0, 0, 1, '2021-04-24 04:53:09', '2021-04-02 09:29:40'),
(21, 'images/galleria/f1e65b9053a213d3ae7af1186b501943-image.jpg', '', NULL, NULL, 1, 0, 0, 1, '2021-04-24 05:18:08', '2021-04-24 05:18:08'),
(22, 'images/galleria/c9cf6012e43bf77a5c7a7f93eae6c221-image.jpg', '', NULL, NULL, 1, 0, 0, 1, '2021-04-24 05:18:19', '2021-04-24 05:18:19'),
(23, 'images/galleria/c5374e30b08386e675bda82a7f38d16d-image.jpg', '', NULL, NULL, 1, 0, 0, 1, '2021-04-24 05:18:31', '2021-04-24 05:18:31'),
(24, 'images/galleria/6106fbdfe14f9076a509eff76c4f883a-image.jpg', '', NULL, NULL, 0, 0, 0, 1, '2021-04-24 08:48:44', '2021-04-24 05:19:34'),
(25, 'images/galleria/14c8401d45ddc5a1738ff720dc53c3ca-image.jpg', '', NULL, NULL, 0, 0, 0, 1, '2021-04-24 05:19:44', '2021-04-24 05:19:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalaciones`
--

CREATE TABLE `instalaciones` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `titulo` longtext NOT NULL,
  `subtitulo` longtext DEFAULT NULL,
  `descripcion` longtext NOT NULL,
  `video` varchar(100) NOT NULL DEFAULT '',
  `slug` varchar(100) NOT NULL,
  `activo` int(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instalaciones`
--

INSERT INTO `instalaciones` (`id`, `image`, `titulo`, `subtitulo`, `descripcion`, `video`, `slug`, `activo`, `updated_at`, `created_at`) VALUES
(2, 'images/instalaciones/d38b4beb2479de915336c4703944f63c-image.jpg', 'PISCINA OLÍMPICA', 'UNA PISCINA OLÍMPICA PER UN AMPLI VENTALL D\'ACTIVITATS', '<p>La Piscina de Lloret disposa d&#39;una piscina ol&iacute;mpica que pot acollir pr&agrave;cticament qualsevol disciplina esportiva aqu&agrave;tica, tant si s&oacute;n competicions com si s&oacute;n activitats l&uacute;diques. Entre elles:</p>\r\n\r\n<ul>\r\n	<li>Nataci&oacute;</li>\r\n	<li>Waterpolo</li>\r\n	<li>Nataci&oacute; sincronitzada</li>\r\n	<li>Apnea</li>\r\n	<li>Aquagym</li>\r\n	<li>Lli&ccedil;ons de nataci&oacute; per nens</li>\r\n	<li>Nataci&oacute; terap&egrave;utica</li>\r\n	<li>Nataci&oacute; com a part d&#39;altres disciplines: triatl&oacute;, pentatl&oacute;, salvament i socorrisme esportius</li>\r\n</ul>\r\n\r\n<p>La piscina fa 50 metres de llarg&agrave;ria i 25 m d&#39;amplada, amb un vas m&ograve;bil de 9 m que permet acomodar les mides a les diferents necessitats. Aquest vas disposa d&#39;un terra que s&#39;eleva per reduir la profunditat i una mampara per delimitar la dist&agrave;ncia; aix&iacute; es poden portar a terme activitats aqu&agrave;tiques per gent gran i nens.</p>\r\n\r\n<p>La piscina acull el Club de Nataci&oacute; de Lloret de Mar, molt actiu en participar en competicions.</p>\r\n\r\n<p>Forma part d&#39;un complex esportiu d&#39;&uacute;ltima generaci&oacute;, totalment accessible a persones amb mobilitat redu&iuml;da, amb infermeria, 7 vestidors, sistema de so i capacitat per 560 espectadors.</p>\r\n\r\n<p>La Piscina de Lloret es troba a la zona esportiva de Lloret de Mar, justo al cor de la ciutat i envoltada d&#39;una &agrave;mplia oferta d&#39;allotjament i oci, a tan sols 800 metres de la platja.</p>', 'https://www.youtube.com/embed/UuaJA81L5QU', 'piscina-olimpica', 1, '2021-03-06 08:24:25', '2021-03-05 05:34:47'),
(3, 'images/instalaciones/a6222964278fd049e09e2d4b4d7a33f2-image.jpg', 'SALA DE FITNESS', NULL, '<p>La fant&agrave;stica sala de fitness de La Piscina de Lloret ocupa 400 metres quadrats i est&agrave; dividida en tres zones:</p>\r\n\r\n<ul>\r\n	<li>Cardiovascular</li>\r\n	<li>Muscular amb estacions fixes Matrix i material de pes lliure</li>\r\n	<li>Zona per estiraments, abdominals, etc.</li>\r\n</ul>\r\n\r\n<p>El nostre equip d&rsquo;entrenadors i t&egrave;cnics en fitness estan a la teva disposici&oacute; per a qualsevol consulta o ajuda que necessitis.</p>', '', 'sala-de-fitness', 1, '2021-03-05 05:45:36', '2021-03-05 05:45:36'),
(4, 'images/instalaciones/3ddc3ff59b23954ac5714c65f4605eb6-image.jpg', 'PISTAS DE PADEL', NULL, '<p>La nova &agrave;rea de raqueta &eacute;s un espai perfecte per realitzar esport a l&#39;aire lliure de manera col&middot;lectiva o individual. Hi ha 3 tipus de pistes:</p>\r\n\r\n<ul>\r\n	<li>6 pistes de p&agrave;del constru&iuml;des segons les normes esportives reglament&agrave;ries. Tenen 3 metres de separaci&oacute; entre elles per permetre el joc fora de pista i dues s&oacute;n panor&agrave;miques. Disposen d&#39;il&middot;luminaci&oacute; suficient per permetre jugar de nit.</li>\r\n	<li>3 pistes de terra batuda amb il&middot;luminaci&oacute; per permetre el joc de nit.</li>\r\n	<li>1 pista poliesportiva de paviment sint&egrave;tic perfecte per al joc de tennis en pista r&agrave;pida i sense necessitat de cal&ccedil;at especial. A m&eacute;s, permet realitzar altres tipus d&#39;esport com l&#39;handbol, el futbol sala o el b&agrave;squet.</li>\r\n</ul>', '', 'pistas-de-padel', 1, '2021-03-05 05:52:50', '2021-03-05 05:52:50'),
(5, 'images/instalaciones/d529d926426ea64e2c7e29e7a9781904-image.jpg', 'SALES D\'ACTIVITATS', NULL, '<p>En les dues sales d&#39;activitats dirigides, es poden realitzar multitud d&#39;activitats coreografiades que treballen de forma divertida i amena la resist&egrave;ncia cardiorespirat&ograve;ria, muscular o l&#39;elasticitat.</p>\r\n\r\n<p>Consulta tot el ventall d&#39;activitats amb l&#39;explicaci&oacute; de quins s&oacute;n els seus beneficis en aquest enlla&ccedil; i els horaris en aquest altre.</p>\r\n\r\n<p>Algunes de les activitats que desenvolupem o hem desenvolupat s&oacute;n:</p>\r\n\r\n<ul>\r\n	<li>Zumba</li>\r\n	<li>Zumba Kids</li>\r\n	<li>Step</li>\r\n	<li>Aer&ograve;bic</li>\r\n	<li>Cycling</li>\r\n	<li>HIIT</li>\r\n	<li>Fit Pump</li>\r\n	<li>Gac</li>\r\n	<li>Tonificaci&oacute;</li>\r\n	<li>Cardio to</li>\r\n	<li>Pilates</li>\r\n	<li>Gim S&egrave;nior</li>\r\n	<li>Stretching</li>\r\n	<li>Abdominals + Stretching</li>\r\n	<li>Jocs Esportius</li>\r\n	<li>Tono J&uacute;nior</li>\r\n	<li>Cycling J&uacute;nior</li>\r\n	<li>Funky</li>\r\n	<li>Marxa N&ograve;rdica</li>\r\n	<li>Wet Gym</li>\r\n	<li>Aquat&oacute;</li>\r\n	<li>Wet Hard</li>\r\n</ul>', '', 'sales-d\'activitats', 1, '2021-03-06 08:23:44', '2021-03-05 15:48:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalacion_images`
--

CREATE TABLE `instalacion_images` (
  `id` int(11) NOT NULL,
  `id_estalacion` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instalacion_images`
--

INSERT INTO `instalacion_images` (`id`, `id_estalacion`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 2, 'images/instalaciones/images/a6ce144cc351fca90ca7d804dc131c97-image.jpg', 1, '2021-03-05 05:37:14', '2021-03-05 05:42:00'),
(2, 2, 'images/instalaciones/images/f305907f326eed1e724d5018251b290b-image.jpg', 1, '2021-03-05 05:46:03', '2021-03-05 05:46:13'),
(4, 2, 'images/instalaciones/images/a5737b2b6622375c2f789e80b38fef29-image.jpg', 1, '2021-03-05 05:46:30', '2021-03-05 05:46:30'),
(5, 2, 'images/instalaciones/images/f51dd20c1a38ee70d6362283fc3fc7f8-image.jpg', 1, '2021-03-05 05:46:37', '2021-03-05 05:46:37'),
(6, 2, 'images/instalaciones/images/2c1815a3ee99ecac6fe89dba47fbf922-image.jpg', 1, '2021-03-05 05:46:45', '2021-03-05 05:46:45'),
(7, 2, 'images/instalaciones/images/c80cfa58d68ae4c877efc0f0086c4feb-image.jpg', 1, '2021-03-05 05:46:53', '2021-03-05 05:46:53'),
(8, 2, 'images/instalaciones/images/61127f365129e7e6cfd3063362f66cd2-image.jpg', 1, '2021-03-05 05:47:02', '2021-03-05 05:47:02'),
(9, 2, 'images/instalaciones/images/c7b5b07e5f767fcbb0d7c11b32561959-image.jpg', 1, '2021-03-05 05:47:11', '2021-03-05 05:47:11'),
(10, 2, 'images/instalaciones/images/fe6b01307a698f9e9899a4cd1dc43214-image.jpg', 1, '2021-03-05 05:47:19', '2021-03-05 05:47:19'),
(11, 2, 'images/instalaciones/images/533a1b3453b159b48323fa18b8f9f1ae-image.jpg', 1, '2021-03-05 05:47:27', '2021-03-05 05:47:27'),
(12, 2, 'images/instalaciones/images/6947e7a175c0fac8344c40694e8feac5-image.jpg', 1, '2021-03-05 05:47:36', '2021-03-05 05:47:36'),
(13, 3, 'images/instalaciones/images/79b29c033d045b3d617a3501ae98784b-image.jpg', 1, '2021-03-05 05:49:54', '2021-03-05 05:49:54'),
(14, 3, 'images/instalaciones/images/c3ec9db6c58b465e113068bbcd563970-image.jpg', 1, '2021-03-05 05:50:01', '2021-03-05 05:50:01'),
(15, 3, 'images/instalaciones/images/9f176fba4d3384ff361af9ca990cc6f6-image.jpg', 1, '2021-03-05 05:50:08', '2021-03-05 05:50:08'),
(16, 3, 'images/instalaciones/images/5101d86ba409c932ab9c4a352a1fb22f-image.jpg', 1, '2021-03-05 05:50:15', '2021-03-05 05:50:15'),
(17, 3, 'images/instalaciones/images/d9d744b2128f80aca475db056d91a61a-image.jpg', 1, '2021-03-05 05:50:23', '2021-03-05 05:50:23'),
(18, 3, 'images/instalaciones/images/8c2b4c5a10a7ea1f171dae096d6c4e8b-image.jpg', 1, '2021-03-05 05:50:32', '2021-03-05 05:50:32'),
(19, 3, 'images/instalaciones/images/68cc51e4d60e7f8432da4d560280492a-image.jpg', 1, '2021-03-05 05:50:39', '2021-03-05 05:50:39'),
(20, 3, 'images/instalaciones/images/851cd362d6f5afe2054db6b28b5f5ab4-image.jpg', 1, '2021-03-05 05:50:47', '2021-03-05 05:50:47'),
(21, 3, 'images/instalaciones/images/f6b218b5509021c7aaf7671c75bcadde-image.jpg', 1, '2021-03-05 05:50:55', '2021-03-05 05:50:55'),
(22, 4, 'images/instalaciones/images/d10c5f52aed89fb028898ed32e373561-image.jpg', 1, '2021-03-05 05:53:43', '2021-03-05 05:53:43'),
(23, 4, 'images/instalaciones/images/10ca823b1333d51f8e057c85f48fa80c-image.jpg', 1, '2021-03-05 05:53:49', '2021-03-05 05:53:49'),
(24, 4, 'images/instalaciones/images/c67453364dd0a0af5aec09d2b525bc91-image.jpg', 1, '2021-03-05 05:53:55', '2021-03-05 05:53:55'),
(25, 5, 'images/instalaciones/images/41af48b0feb5df574fa9a70a0cff64db-image.jpg', 1, '2021-03-05 15:48:49', '2021-03-05 15:48:49'),
(26, 5, 'images/instalaciones/images/afd3d4467cd8badefa77380637f9ccc0-image.jpg', 1, '2021-03-05 15:48:57', '2021-03-05 15:48:57'),
(27, 5, 'images/instalaciones/images/0e4795986ae2c49c490e498d787942fc-image.jpg', 1, '2021-03-05 15:49:04', '2021-03-05 15:49:04'),
(28, 5, 'images/instalaciones/images/7e526162b2cf6c9acc3cc468966eade0-image.jpg', 1, '2021-03-05 15:49:11', '2021-03-05 15:49:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_02_20_164010_create_table_shop_articles', 1),
(9, '2021_02_21_091800_create_table_casal_inscripciones', 2),
(10, '2021_02_21_102123_create_table_casal_incripciones_meses', 3),
(11, '2021_02_21_150151_create_table_casal_inscripciones_datos', 4),
(13, '2021_02_21_183541_create_table_alquiler_pistas', 5),
(14, '2021_02_25_140020_create_table_calendar_eventos', 6),
(15, '2021_02_25_141450_add_activo_calendario_eventos', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `token`, `activo`, `created_at`, `updated_at`) VALUES
(11, 'keylorubio@gmail.com', '715bc9f99697229ee5d5be010c4b100f', 1, '2021-05-10 04:10:01', '2021-05-10 04:10:01'),
(12, 'evgeny.lyubeznyy@basetis.com', NULL, 0, '2021-05-10 17:54:51', '2021-05-10 17:54:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `actividad_id` int(11) DEFAULT NULL,
  `titulo` longtext NOT NULL,
  `descripcion` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` text NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `actividad_id`, `titulo`, `descripcion`, `image`, `slug`, `activo`, `created_at`, `updated_at`) VALUES
(10, NULL, 'DESCUBRE PARA TUS HIJOS EL TENIS DE ALTO RENDIMIENTO', '<p>Nuestra Escuela de tenis est&aacute; dise&ntilde;ada para ofrecer la m&aacute;xima calidad de entreno en las actividades extra-escolares de los jugadores de entre 3 y 18 a&ntilde;os.</p>\r\n\r\n<p>Nuestra Escuela de tenis extra-escolar adapta el sistema exclusivo de entrenamiento, ASC 360 Tennis System &copy;, utilizando sus fundamentos b&aacute;sicos, para que nuestros j&oacute;venes se inicien y evolucionen en este deporte disfrutando desde el primer momento del alto rendimiento</p>\r\n\r\n<p>Inscr&iacute;bete ya y entrena con el mismo m&eacute;todo que siguieron tenistas como Andy Murray, Svetlana Kuznetsova o Grigor Dimitrov hasta convertirse en jugadores profesionales.</p>\r\n\r\n<h3><strong>&iexcl;AP&Uacute;NTATE AHORA CON INSCRIPCI&Oacute;N GRATUITA Y SEPTIEMBRE GRATIS!</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>V&aacute;lido para los alumnos que se inscriban en la Escuela de Club S&aacute;nchez-Casal antes del 15 de septiembre 2020, realizando el pago del mes de octubre. Las promociones y ofertas no son acumulables.</p>', 'images/noticias/89cd4218fa1bdbb7f6b3af2e1add3396-image.jpg', 'descubre-para-tus-hijos-el-tenis-de-alto-rendimiento', 1, '2021-03-26 14:53:02', '2021-03-26 14:53:02'),
(11, NULL, 'EL CLUB RECIBE SELLO BIOSPHERE DE TURISMO SOSTENIBLE', '<p>La certificaci&oacute;n internacional por parte del Instituto de Turismo Responsable (ITR), reconoce el compromiso de la Academia S&aacute;nchez-Casal, por el respeto al medio ambiente, la sostenibilidad y el desarrollo econ&oacute;mico local en la sede de Barcelona, situada en El Prat de Llobregat, zona de alto valor ecol&oacute;gico.</p>\r\n\r\n<p>La entrega del sello Biosphere se ha hecho hoy efectiva en la Academia S&aacute;nchez-Casal situada en El Prat de Llobregat, siguiendo todos los protocolos de seguridad e higiene, por parte de Gemma Rodriguez, Consejera de Turismo Baix Llobregat y Debora Garc&iacute;a, Regidora de Turismo El Prat de Llobregat, a Marisa S&aacute;nchez Vicario, Directora sede ASC Barcelona y a Sergi Bonillo, Director de Servicios y Operaciones ASC Barcelona.</p>\r\n\r\n<p>La Academia S&aacute;nchez-Casal, est&aacute; comprometida con el medioambiente, y sensibiliza tanto en la sede de Barcelona como en Florida, a todos los empleados, estudiantes-atletas sobre el cambio clim&aacute;tico con diversas acciones a lo largo del a&ntilde;o.</p>\r\n\r\n<p>Los estudiantes-atletas de la Academia S&aacute;nchez-Casal y ES Internacional School no usan pl&aacute;stico, usan sus propias botellas de agua, tambi&eacute;n reciclan y el pasado a&ntilde;o se unieron al&nbsp; movimiento #fridaysforfuture para concienciar sobre el cambio clim&aacute;tico.</p>\r\n\r\n<p>El Biosphere es un sello del Sistema de Turismo Responsable del Instituto de Turismo Responsable (ITR), una certificaci&oacute;n de turismo sostenible, voluntario e independiente, que trabaja para aplicar al sector tur&iacute;stico los 17 objetivos de desarrollo sostenible de Naciones Unidas, la Carta Mundial de Turismo Sostenible y las directrices de la Cumbre del Clima de Par&iacute;s.</p>', 'images/noticias/3b84f8bf6eb58068f6521e3dc50ae08e-image.jpg', 'el-club-recibe-sello-biosphere-de-turismo-sostenible', 1, '2021-03-26 14:55:34', '2021-03-26 14:55:34'),
(12, NULL, 'MATRÍCULA + 1 CLASE DE TENIS O PÁDEL GRATIS!', '<p>Club S&aacute;nchez-Casal es mucho m&aacute;s que un centro orientado a la pr&aacute;ctica deportiva. Es un lugar enfocado a familias donde todos podr&aacute;n disfrutar practicando su deporte favorito.</p>\r\n\r\n<p><strong>&iexcl;AP&Uacute;NTATE AHORA CON MATR&Iacute;CULA +&nbsp;1 CLASE DE TENIS O P&Aacute;DEL GRATIS!</strong></p>\r\n\r\n<p>Inscr&iacute;bete antes del 30 de septiembre 2020 y disfruta de matr&iacute;cula gratis + 1 clase de tenis / p&aacute;del gratuita (*).</p>\r\n\r\n<p>(*) La clase deber&aacute; ser realizada durante septiembre y octubre 2020, tanto para los nuevos abonados como para los abonados actuales, en muestra de gratitud a su fidelidad. La clase puede ser impartida en grupo reducido.</p>', 'images/noticias/c65e12c01ea09c011ffe8faa193dbaf0-image.jpg', 'matricula-+-1-clase-de-tenis-o-padel-gratis!', 1, '2021-03-26 14:56:16', '2021-03-26 14:56:16'),
(13, 21, 'INSCRIPCIONES CAMPUS VERANO 2020 ABIERTAS SUJETAS A CAMBIOS POR NORMATIVA COVID', '<p>Apreciadas familias,</p>\r\n\r\n<p>Son constantes los cambios en las normativas en cuanto a la realizaci&oacute;n de los campus de verano debido a la situaci&oacute;n causada por la pandemia del Coronavirus que estamos viviendo. Siguiendo la normativa, en las fechas en las que se realiza el campus, no habr&iacute;a problema en su realizaci&oacute;n. Campus S&aacute;nchez-Casal ha trabajado para implantar unos protocolos internos de m&aacute;xima seguridad que proteger&aacute;n&nbsp; la salud de sus hijos. Estamos sujetos a cualquier cambio en las actividades que se tengan que realizar para que se pueda realizar el campus. Por ahora, todas las actividades que ofrecemos se podr&iacute;an realizar con la implantaci&oacute;n de medidas de seguridad. A medida que las autoridades transmitan m&aacute;s informaci&oacute;n, podremos dar m&aacute;s detalles sobre las actividades a realizar y si alguna no se pudiera realizar os lo comunicar&iacute;amos a la mayor brevedad. A d&iacute;a de hoy, los cambios en cuanto a normativa son constantes pero nos adaptaremos a los cambios necesarios para que el Campus se pueda realizar.</p>\r\n\r\n<p>&iexcl;YA PUEDES RESERVAR TU PLAZA!</p>\r\n\r\n<p>&iexcl;TE ESPERAMOS!</p>\r\n\r\n<p><a href=\"http://www.sanchezcasal-campus.com/\">www.sanchezcasal-campus.com</a></p>', 'images/noticias/738ae5cc6e955b4bc815c90b9a8f88c8-image.jpg', 'inscripciones-campus-verano-2020-abiertas-sujetas-a-cambios-por-normativa-covid', 1, '2021-03-26 14:56:56', '2021-05-12 15:26:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia_comentarios`
--

CREATE TABLE `noticia_comentarios` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `noticia_id` int(11) NOT NULL,
  `comentario` longtext NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia_comentarios`
--

INSERT INTO `noticia_comentarios` (`id`, `user_id`, `noticia_id`, `comentario`, `activo`, `created_at`, `updated_at`) VALUES
(36, 64, 13, 'hola', 1, '2021-05-01 11:38:39', '2021-05-01 11:38:39'),
(37, 64, 13, 'xd', 1, '2021-05-01 11:38:50', '2021-05-01 11:38:50'),
(38, 64, 13, 'SD', 1, '2021-05-01 11:39:01', '2021-05-01 11:39:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quota_socios`
--

CREATE TABLE `quota_socios` (
  `id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `precio` double(8,2) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `quota_socios`
--

INSERT INTO `quota_socios` (`id`, `titulo`, `precio`, `activo`, `updated_at`, `created_at`) VALUES
(4, '{\"es\":\"FAMILIAR\"}', 65.00, 1, '2021-05-10 11:08:07', '2021-04-17 10:11:17'),
(5, '{\"es\":\"INDIVIDUAL\"}', 45.00, 1, '2021-05-10 11:07:59', '2021-04-17 10:13:09'),
(6, '{\"es\":\"INDIVISUAL P\\u00c0DEL\"}', 35.00, 1, '2021-05-10 11:07:49', '2021-04-17 10:14:33'),
(7, '{\"es\":\"INDIVIDUAL TENNIS\"}', 35.00, 1, '2021-05-10 11:07:42', '2021-04-17 10:15:22'),
(8, '{\"es\":\"INFANTIL\"}', 35.00, 1, '2021-05-10 11:07:05', '2021-04-17 10:16:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quota_socio_servicio`
--

CREATE TABLE `quota_socio_servicio` (
  `id` int(11) NOT NULL,
  `quota_socio_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `quota_socio_servicio`
--

INSERT INTO `quota_socio_servicio` (`id`, `quota_socio_id`, `servicio_id`, `created_at`, `updated_at`) VALUES
(3, 4, 5, NULL, NULL),
(4, 4, 11, NULL, NULL),
(5, 4, 6, NULL, NULL),
(6, 4, 14, NULL, NULL),
(7, 4, 4, NULL, NULL),
(8, 4, 2, NULL, NULL),
(9, 4, 9, NULL, NULL),
(10, 4, 3, NULL, NULL),
(11, 4, 12, NULL, NULL),
(12, 4, 13, NULL, NULL),
(13, 4, 1, NULL, NULL),
(14, 4, 10, NULL, NULL),
(15, 4, 7, NULL, NULL),
(16, 4, 8, NULL, NULL),
(17, 5, 5, NULL, NULL),
(18, 5, 11, NULL, NULL),
(19, 5, 6, NULL, NULL),
(20, 5, 14, NULL, NULL),
(21, 5, 4, NULL, NULL),
(22, 5, 2, NULL, NULL),
(23, 5, 9, NULL, NULL),
(24, 5, 3, NULL, NULL),
(25, 5, 12, NULL, NULL),
(26, 5, 13, NULL, NULL),
(27, 5, 1, NULL, NULL),
(28, 5, 10, NULL, NULL),
(29, 5, 7, NULL, NULL),
(30, 5, 8, NULL, NULL),
(31, 6, 5, NULL, NULL),
(32, 6, 11, NULL, NULL),
(33, 6, 6, NULL, NULL),
(34, 6, 14, NULL, NULL),
(35, 6, 4, NULL, NULL),
(36, 6, 2, NULL, NULL),
(37, 6, 9, NULL, NULL),
(38, 6, 3, NULL, NULL),
(39, 6, 12, NULL, NULL),
(40, 6, 13, NULL, NULL),
(41, 6, 10, NULL, NULL),
(42, 6, 7, NULL, NULL),
(43, 6, 8, NULL, NULL),
(44, 7, 5, NULL, NULL),
(45, 7, 11, NULL, NULL),
(46, 7, 6, NULL, NULL),
(47, 7, 14, NULL, NULL),
(48, 7, 4, NULL, NULL),
(49, 7, 9, NULL, NULL),
(50, 7, 3, NULL, NULL),
(51, 7, 12, NULL, NULL),
(52, 7, 13, NULL, NULL),
(53, 7, 1, NULL, NULL),
(54, 7, 10, NULL, NULL),
(55, 7, 7, NULL, NULL),
(56, 7, 8, NULL, NULL),
(57, 8, 5, NULL, NULL),
(58, 8, 11, NULL, NULL),
(59, 8, 6, NULL, NULL),
(60, 8, 14, NULL, NULL),
(61, 8, 4, NULL, NULL),
(62, 8, 2, NULL, NULL),
(63, 8, 9, NULL, NULL),
(64, 8, 3, NULL, NULL),
(65, 8, 12, NULL, NULL),
(66, 8, 13, NULL, NULL),
(67, 8, 1, NULL, NULL),
(68, 8, 10, NULL, NULL),
(69, 8, 7, NULL, NULL),
(70, 8, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante_categorias`
--

CREATE TABLE `restaurante_categorias` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurante_categorias`
--

INSERT INTO `restaurante_categorias` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'BREAKFAST', '2021-04-04 13:35:43', '2021-04-04 13:35:43'),
(2, 'LUNCH', '2021-04-04 13:36:05', '2021-04-04 13:36:05'),
(3, 'DINNER', '2021-04-04 13:36:09', '2021-04-04 13:36:09'),
(4, 'DESSERTS', '2021-04-04 13:36:19', '2021-04-04 13:36:19'),
(5, 'WINE CARD', '2021-04-04 13:36:24', '2021-04-04 13:36:24'),
(6, 'DRINKS & TEA', '2021-04-04 13:36:29', '2021-04-04 13:36:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante_images`
--

CREATE TABLE `restaurante_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurante_images`
--

INSERT INTO `restaurante_images` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'images/restaurante/galleria/2aa9038f33b22f5ab081c11de27f59f8-image.jpg', 1, '2021-04-05 09:13:25', '2021-04-05 09:13:41'),
(2, 'images/restaurante/galleria/965111c689611244756bb7b1cd249dfc-image.jpg', 1, '2021-04-05 09:15:25', '2021-04-05 09:15:25'),
(3, 'images/restaurante/galleria/14be208ebe4c7a53a43843648dcddf7d-image.jpg', 1, '2021-04-05 09:16:04', '2021-04-05 09:16:04'),
(4, 'images/restaurante/galleria/2228efd4af8bcb6ead3fd9be9b79aa50-image.jpg', 1, '2021-04-05 09:16:19', '2021-04-05 09:16:19'),
(5, 'images/restaurante/galleria/f7307a0ce6661a87af62ffdaa9b25e03-image.jpg', 1, '2021-04-05 09:17:16', '2021-04-05 09:17:16'),
(6, 'images/restaurante/galleria/61972d13f98d5ba779ab73ebb2d9b43f-image.jpg', 1, '2021-04-05 09:17:24', '2021-04-05 09:17:24'),
(7, 'images/restaurante/galleria/9297236f98aa65efb39177a02313d052-image.jpg', 1, '2021-04-05 09:17:32', '2021-04-05 09:17:32'),
(8, 'images/restaurante/galleria/ad22da8ed42b94374d55e94b1a595173-image.jpg', 1, '2021-04-05 09:17:53', '2021-04-05 09:17:53'),
(9, 'images/restaurante/galleria/0487723ac18379b99d234e33c47c06cc-image.jpg', 1, '2021-04-05 09:19:26', '2021-04-05 09:19:26'),
(10, 'images/restaurante/galleria/0aeeba10ed598a9974eb8e2ded706b29-image.jpg', 1, '2021-04-05 09:19:33', '2021-04-05 09:19:33'),
(11, 'images/restaurante/galleria/3d80c331d73818c04f0d8f459d41140c-image.jpg', 1, '2021-04-05 09:19:42', '2021-04-05 09:19:42'),
(12, 'images/restaurante/galleria/7feba835ea8a93296450c876cc831f7f-image.jpg', 1, '2021-04-05 09:19:50', '2021-04-05 09:19:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante_platos`
--

CREATE TABLE `restaurante_platos` (
  `id` int(11) NOT NULL,
  `restaurante_categoria_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` longtext NOT NULL,
  `description` longtext DEFAULT NULL,
  `ingredients` longtext DEFAULT NULL,
  `price` float NOT NULL,
  `plato_especial` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurante_platos`
--

INSERT INTO `restaurante_platos` (`id`, `restaurante_categoria_id`, `image`, `name`, `description`, `ingredients`, `price`, `plato_especial`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/restaurante/platos/c4533025b4420c24baa7724928bb27ab-image.jpg', 'Beef Roast Source', '<p>Lechuga, ventresca, pimientos de piquillo, tomate, cebolla, huevo, aceitunas y queso del pa&iacute;s.</p>', 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 13:59:54', '2021-04-04 17:35:49'),
(2, 1, 'images/restaurante/platos/69f26b0577bbfda3e63077ace51be119-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:11:56', '2021-04-04 14:11:56'),
(3, 1, 'images/restaurante/platos/c0be63f193102896ca71983eedf94ec3-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:13:09', '2021-04-04 14:13:09'),
(4, 2, 'images/restaurante/platos/427586c06615345d6855e85b1180493a-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:15:08', '2021-04-04 14:15:08'),
(5, 2, 'images/restaurante/platos/148ce0a9dc41e36fad1a7f114743edd0-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:16:30', '2021-04-04 14:16:30'),
(6, 2, 'images/restaurante/platos/0e553547751a4363d00ff2d8c0721718-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:17:51', '2021-04-04 14:17:51'),
(7, 3, 'images/restaurante/platos/7ff8b5f2e72bb4f155ea2e904b402e02-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:18:59', '2021-04-04 14:20:36'),
(8, 3, 'images/restaurante/platos/3f19ba184328f6770e389d2b6a516ee8-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:21:35', '2021-04-04 14:21:35'),
(9, 3, 'images/restaurante/platos/9fc54d58d34e5223853d6ed0fc4b5344-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:22:28', '2021-04-04 14:22:28'),
(10, 4, 'images/restaurante/platos/65f4ee1bea716b454f22589355b545d9-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:24:33', '2021-04-04 14:24:33'),
(11, 4, 'images/restaurante/platos/cc7dddb6775ffcf73c0ca03849d180c2-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:25:08', '2021-04-04 14:25:08'),
(12, 4, 'images/restaurante/platos/1c903b7b80999574b7d125d28a7a17e3-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:26:18', '2021-04-04 14:26:18'),
(13, 5, 'images/restaurante/platos/c2ced43fee06510e3dcdeee30263a6f7-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:28:40', '2021-04-04 14:28:40'),
(14, 5, 'images/restaurante/platos/afe7043c1f8de5bceb5b1b1df3490d02-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 29, 1, 1, '2021-04-04 14:29:25', '2021-04-04 14:29:25'),
(15, 5, 'images/restaurante/platos/eb4b5fc5c5c35da2643a9bcf8d910e63-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 39, 1, 1, '2021-04-04 14:30:11', '2021-04-04 14:30:11'),
(16, 6, 'images/restaurante/platos/c6e668deb907d7b07663df9af1c0b80a-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 23, 1, 1, '2021-04-04 14:31:23', '2021-04-04 14:31:23'),
(17, 6, 'images/restaurante/platos/e33991007982253db152a1a868231a6f-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 343, 1, 1, '2021-04-04 14:31:46', '2021-04-04 14:31:46'),
(18, 6, 'images/restaurante/platos/f1eefc47b0d3cde0eaf1497ea1329c6b-image.jpg', 'Beef Roast Source', NULL, 'Meat, Potatoes, Rice, Tomatoe', 32, 1, 1, '2021-04-04 14:32:21', '2021-04-04 14:32:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Usuario', 1, '2021-04-11 05:33:23', '2021-04-11 09:30:47'),
(2, 'Administrador', 1, '2021-04-11 05:34:12', '2021-04-11 09:30:46'),
(3, 'Superadmin', 1, '2021-04-20 11:40:37', '2021-04-20 11:40:37'),
(4, 'Restaurante', 1, '2021-04-20 11:41:05', '2021-04-20 11:41:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Tennis + escola', 1, '2021-04-17 08:51:54', '2021-04-17 08:51:54'),
(2, 'Pàdel + escola', 1, '2021-04-17 08:52:00', '2021-04-17 08:52:00'),
(3, 'Piscina + escola', 1, '2021-04-17 08:52:06', '2021-04-17 08:52:06'),
(4, 'Gimnàs', 1, '2021-04-17 08:52:12', '2021-04-17 08:52:12'),
(5, 'Bar / restaurant', 1, '2021-04-17 08:52:16', '2021-04-17 08:52:16'),
(6, 'Competicions per equips (series nacionals, federats, lligues…)', 1, '2021-04-17 08:52:21', '2021-04-17 08:52:21'),
(7, 'Zona chill out', 1, '2021-04-17 08:52:29', '2021-04-17 08:52:29'),
(8, 'Zona infantil', 1, '2021-04-17 08:52:34', '2021-04-17 08:52:34'),
(9, 'Parking', 1, '2021-04-17 08:52:39', '2021-04-17 08:52:39'),
(10, 'Wifi', 1, '2021-04-17 08:52:44', '2021-04-17 08:52:44'),
(11, 'Casal d’estiu', 1, '2021-04-17 08:53:05', '2021-04-17 08:53:05'),
(12, 'Servei de botiga', 1, '2021-04-17 08:53:12', '2021-04-17 08:53:12'),
(13, 'Servei d’encordat de raquetes', 1, '2021-04-17 08:53:22', '2021-04-17 08:53:22'),
(14, 'Gaudiu de descomptes amb els nostres col·laboradors', 1, '2021-04-17 08:53:31', '2021-04-17 08:53:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_articles`
--

CREATE TABLE `shop_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_categorie_id` int(11) DEFAULT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` double(8,2) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `shop_articles`
--

INSERT INTO `shop_articles` (`id`, `shop_categorie_id`, `name`, `imagen`, `descripcion`, `precio`, `activo`, `created_at`, `updated_at`) VALUES
(10, NULL, 'PALA TENIS PLAYA ARTENGO BTR 100 ADULTO BLANCO/AZUL/NEGRO', 'images/articulos/3360064e14dc8c6a52c21257e7bb2d9d-imagen.jpg', '<p>Nuestros equipos de dise&ntilde;o han concebido esta pala para jugadores que se inician en el tenis playa y buscan manejabilidad.</p>\r\n\r\n<p>Pala c&oacute;moda de usar gracias a su ligereza y a la flexibilidad que ofrece la fibra de vidrio.</p>', 29.99, 1, '2021-02-20 20:07:40', '2021-02-20 20:07:40'),
(11, NULL, 'PELOTA DE TENIS TB920 *4 BIPACK AMARILLO', 'images/articulos/8b5abf816205c04e4f9c8b3b9292fbb4-imagen.jpg', '<p>Nuestros dise&ntilde;adores han desarrollado esta pelota de competici&oacute;n para jugadores de tenis que practican en terrenos duros o tierra batida. 2 tubos de 4 pelotas.</p>\r\n\r\n<p>Durabilidad y control. Pelota oficial del torneo de la ATP 250 Moselle Open, la TB920 se recomienda por su calidad de rebote y por su control.Nuevo empaquetado y nuevo logotipo pero pelotas id&eacute;nticas.</p>', 8.49, 1, '2021-02-20 20:25:07', '2021-02-20 20:25:07'),
(12, NULL, 'CAJÓN PELOTA DE TENIS TB930 24TUBOS *3 PELOTAS', 'images/articulos/652c6f656c343439e32ee9587fb02caa-imagen.jpg', '<p>Nuestros dise&ntilde;adores han desarrollado esta pelota para jugadores en nivel perfeccionamiento y experto, en terrenos duros o tierra batida. 24 tubos de 3 pelotas.</p>', 89.99, 1, '2021-02-20 20:26:04', '2021-03-07 10:18:56'),
(13, NULL, 'Head Evo Sanyo', 'images/articulos/664850cf913d7992f6ed1fa0ceaef8fb-imagen.jpg', '<p>dfdsfdfdf</p>', 51.99, 1, '2021-03-06 09:23:24', '2021-03-07 10:18:44'),
(14, 5, 'Pelotas De Tenis Tennis-Point', 'images/articulos/1bb3f6305996f465ca65446a7534871e-imagen.jpg', '<p>a</p>', 5.95, 1, '2021-03-07 10:21:51', '2021-03-07 10:21:51'),
(15, 5, 'Pelotas De Tenis Tennis-Point', 'images/articulos/e529e23c32914bf6e1ce942da1dc95af-imagen.jpg', '<p>a</p>', 109.95, 1, '2021-03-07 10:22:14', '2021-03-07 10:22:14'),
(16, 5, 'Pelotas De Tenis Tennis-Point', 'images/articulos/15b33096fffd77b882073d0db788c6a1-imagen.jpg', '<p>a</p>', 109.95, 1, '2021-03-07 10:22:37', '2021-03-07 10:22:37'),
(17, 5, 'Pelotas De Tenis Dunlop', 'images/articulos/0ac36579322ca2f4445edfd42ea537d7-imagen.jpg', '<p>a</p>', 9.95, 1, '2021-03-07 10:22:58', '2021-03-07 10:22:58'),
(18, 5, 'Pelotas De Tenis HEAD', 'images/articulos/a05aaf89debfd7a4dfb4c3338e0de48c-imagen.jpg', '<p>a</p>', 5.20, 1, '2021-03-07 10:23:26', '2021-03-07 10:23:26'),
(19, 5, 'Pelotas De Tenis Wilson', 'images/articulos/882a57c3a8d2d71011012000a7006b12-imagen.jpg', '<p>a</p>', 84.95, 1, '2021-03-07 10:23:49', '2021-03-07 10:23:49'),
(20, 5, 'Pelotas De Tenis Dunlop', 'images/articulos/e63f90d9043a75f0734275ab41dd34e6-imagen.jpg', '<p>a</p>', 11.50, 1, '2021-03-07 10:24:12', '2021-03-07 10:24:12'),
(21, 5, 'Pelotas De Tenis Wilson', 'images/articulos/b407b5d24391faa7544fc5af30164e2d-imagen.jpg', '<p>a</p>', 94.50, 1, '2021-03-07 10:24:33', '2021-03-07 10:24:33'),
(22, 6, 'Bolsas De Tenis Wilson', 'images/articulos/a21d5afcdfa5cbc25f9886b156889c4a-imagen.jpg', '<p>a</p>', 59.95, 1, '2021-03-07 10:26:30', '2021-03-07 10:26:30'),
(23, 6, 'Bolsas De Tenis Wilson', 'images/articulos/e6205964b6b152eb41071e1db92d92ec-imagen.jpg', '<p>a</p>', 64.95, 1, '2021-03-07 10:26:50', '2021-03-07 10:26:50'),
(24, 6, 'Bolsas De Tenis Wilson', 'images/articulos/df946e2dd8e449c081acaf88e8c2097d-imagen.jpg', '<p>a</p>', 74.95, 1, '2021-03-07 10:27:14', '2021-03-07 10:27:14'),
(25, 6, 'Bolsas De Tenis Babolat', 'images/articulos/319f423fd70d61325003660c7ace2179-imagen.jpg', '<p>a</p>', 44.95, 1, '2021-03-07 10:27:36', '2021-03-07 10:27:36'),
(26, 6, 'Bolsas De Tenis Babolat', 'images/articulos/7187ac760b2d4a32fec7615219187f7a-imagen.jpg', '<p>a</p>', 89.95, 1, '2021-03-07 10:28:04', '2021-03-07 10:28:04'),
(27, 6, 'Bolsas De Tenis Babolat', 'images/articulos/ae4144470a7d4d5186ebfffbbd781f6a-imagen.jpg', '<p>a</p>', 57.95, 1, '2021-03-07 10:28:34', '2021-03-07 10:28:34'),
(28, 6, 'Bolsas De Tenis Babolat', 'images/articulos/48d87faa68a4766c5a20d4769dc5ae4b-imagen.jpg', '<p>a</p>', 36.95, 1, '2021-03-07 10:29:00', '2021-03-07 10:29:00'),
(29, 6, 'Bolsas De Tenis Babolat', 'images/articulos/3937ef8484aa18f87f86d389cc7681f3-imagen.jpg', '<p>a</p>', 34.95, 1, '2021-03-07 10:29:22', '2021-03-07 10:29:22'),
(30, 7, 'Raquetas De Tenis Wilson', 'images/articulos/8c9d079205ef4ece62fcf7cbe2855b6c-imagen.jpg', '<p>a</p>', 128.95, 1, '2021-03-07 10:32:52', '2021-03-07 10:32:52'),
(31, 7, 'Raquetas De Tenis Babolat', 'images/articulos/2d5e78659ca38b746f84f6fa332694b5-imagen.jpg', '<p>a</p>', 134.95, 1, '2021-03-07 10:33:15', '2021-03-07 10:33:15'),
(32, 7, 'Raquetas De Tenis Wilson', 'images/articulos/12b0ffdebf3d70eed6268205fcd2404f-imagen.jpg', '<p>a</p>', 79.95, 1, '2021-03-07 10:33:50', '2021-03-07 10:33:50'),
(33, 7, 'Raquetas De Tenis Wilson', 'images/articulos/ffe326eb6bb118993e22515fc56ea0f0-imagen.jpg', '<p>a</p>', 109.95, 1, '2021-03-07 10:34:21', '2021-03-07 10:34:21'),
(34, 7, 'Raquetas De Tenis Wilson', 'images/articulos/e4a763b03b73887a8ced7e5ea310461d-imagen.jpg', '<p>a</p>', 34.95, 1, '2021-03-07 10:35:55', '2021-03-07 10:35:55'),
(35, 7, 'Raquetas De Tenis HEAD', 'images/articulos/0f458c699cdb19e29cba038ee6be6404-imagen.jpg', '<p>a</p>', 89.95, 1, '2021-03-07 10:36:23', '2021-03-07 10:36:23'),
(36, 7, 'Raquetas De Tenis HEAD', 'images/articulos/96e39866dda251850f3286c30433056a-imagen.jpg', '<p>a</p>', 135.95, 1, '2021-03-07 10:36:50', '2021-03-07 10:36:50'),
(37, 7, 'Raquetas De Tenis Wilson', 'images/articulos/6d27df15420ac2d5e15058e91e53813e-imagen.jpg', '<p>a</p>', 125.95, 1, '2021-03-07 10:37:38', '2021-03-07 10:37:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_banner_images`
--

CREATE TABLE `shop_banner_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `shop_banner_images`
--

INSERT INTO `shop_banner_images` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'images/carusel-shop/4c35d7f15f5ac5df98f229d81279df9a-image.jpg', 1, '2021-04-03 15:56:27', '2021-04-03 15:57:26'),
(2, 'images/carusel-shop/3106503ad90ecabf5f2b291a683e795c-image.jpg', 1, '2021-04-03 15:56:36', '2021-04-03 15:57:20'),
(3, 'images/carusel-shop/c82f572bd9cdfc967746beba2fa1de8b-image.jpg', 1, '2021-04-03 15:57:15', '2021-04-03 15:57:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `slug` varchar(100) NOT NULL,
  `activo` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `titulo`, `slug`, `activo`, `created_at`, `updated_at`) VALUES
(5, 'Pelotas de tenis', 'pelotas-de-tenis', 1, '2021-03-07 10:19:34', '2021-03-07 10:19:34'),
(6, 'Bolsas de tenis', 'bolsas-de-tenis', 1, '2021-03-07 10:25:57', '2021-03-07 10:25:57'),
(7, 'Raquetas de tenis', 'raquetas-de-tenis', 1, '2021-03-07 10:31:18', '2021-03-07 10:31:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_networks`
--

CREATE TABLE `social_networks` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `social_networks`
--

INSERT INTO `social_networks` (`id`, `titulo`, `url`, `icon`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Google +', 'http://colourbang.tv/', 'fab fa-google-plus-g', 0, '2021-05-08 19:28:55', '2021-05-09 18:19:39'),
(2, 'Facebook', 'https://fontawesome.com/icons/facebook?style=brands', 'fab fa-facebook', 1, '2021-05-08 19:29:22', '2021-05-09 18:19:30'),
(3, 'Twitter', 'https://fontawesome.com/icons/twitter?style=brands', 'fab fa-twitter', 1, '2021-05-08 19:29:48', '2021-05-09 18:19:20'),
(4, 'Whatsapp', 'https://fontawesome.com/icons/whatsapp?style=brands', 'fab fa-whatsapp', 1, '2021-05-08 19:30:17', '2021-05-09 18:19:11'),
(5, 'Instagram', 'https://fontawesome.com/icons/instagram?style=brands', 'fab fa-instagram', 1, '2021-05-08 19:30:45', '2021-05-09 18:18:58'),
(6, 'Linkedin', 'https://fontawesome.com/icons/linkedin-in?style=brands', 'fab fa-linkedin-in', 0, '2021-05-08 19:31:29', '2021-05-09 18:18:50'),
(7, 'YouTube', 'https://fontawesome.com/icons/youtube?style=brands', 'fab fa-youtube', 0, '2021-05-08 19:31:59', '2021-05-09 18:18:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_validate` tinyint(1) NOT NULL DEFAULT 0,
  `token_validate_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_recover_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_token_email` int(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol_id` int(11) NOT NULL DEFAULT 1,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `provider_id`, `provider`, `email_validate`, `token_validate_email`, `token_recover_email`, `active_token_email`, `remember_token`, `password`, `rol_id`, `activo`, `created_at`, `updated_at`) VALUES
(64, 'keylorubio@gmail.com', NULL, NULL, 1, '', NULL, 0, '88ATFZ5ZGC3BGWP5HHB65R1ttLmX1p6hfo7ILJLvCwNKhqnUrXrkum3g6cME', '$2y$10$F6GGEfS3n.v2h2S6xaO/Y./EJ6Xdfq7.uLezYeMLsb.Gzv2Ebz9yu', 2, 1, '2021-04-03 09:03:10', '2021-04-28 14:28:05'),
(73, 'burbiantv@gmail.com', '101215115151800187654', 'google', 1, NULL, NULL, 0, NULL, NULL, 1, 1, '2021-05-11 02:44:03', '2021-05-11 02:44:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web_vistas`
--

CREATE TABLE `web_vistas` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `titulo` longtext NOT NULL,
  `descripcion` longtext NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `web_vistas`
--

INSERT INTO `web_vistas` (`id`, `slug`, `titulo`, `descripcion`, `image`, `created_at`, `updated_at`) VALUES
(3, 'escuela-tenis', 'Escola de tennis', '<p>Com tots els esports, el tennis i el p&agrave;del, es poden aprendre des de petits. Els nens i nenes que s&rsquo;inicien en aquest esport comencen a practicar la seva t&egrave;cnica i poc a poc van aprenent noves habilitats i valors que despr&eacute;s de gran podran utilitzar en el seu dia a dia, s&oacute;n dos esports molt complets que t&rsquo;ajuden a entrenar-te, millorar la teva salut i estar en forma, tot jugant.</p>\r\n\r\n<p>Ho practiquem en espais a l&rsquo;aire lliure que t&rsquo;ajuden a relaxar-te, respirar i sortir de la rutina.</p>\r\n\r\n<p>L&rsquo;escola de tennis i p&agrave;del est&agrave; a la vostra disposici&oacute;. Consulteu informaci&oacute; i horaris a recepci&oacute;.</p>\r\n\r\n<p><strong>La persona m&eacute;s important de la nostra instal&middot;laci&oacute; ets tu</strong>, per aix&ograve; comptem amb un equip de gent jove i altament professional per proporcionar-te el millor servei. Els nostres entrenadors i monitors s&oacute;n professionals implicats i entusiastes que organitzen diferents activitats per ajudar-te a millorar el teu nivell i rendiment.</p>\r\n\r\n<p>Els nostres valors s&oacute;n:</p>\r\n\r\n<ul>\r\n	<li>Passi&oacute; per l&rsquo;esport</li>\r\n	<li>Professionalitat, vocaci&oacute;, entusiasme i implicaci&oacute;</li>\r\n</ul>\r\n\r\n<p>Apr&egrave;n o perfecciona la teva t&egrave;cnica amb nosaltres.</p>\r\n\r\n<p>El nostre equip est&agrave; per ajudar-te en tot moment. Coneix-nos i deixa&rsquo;t guiar!</p>\r\n\r\n<p>Consulta la informaci&oacute; i preus de l&rsquo;escola trucant al club o ens pots venir a fer una visita, o us adjuntem informaci&oacute;:</p>', 'images/web-vistas/a7238cf7b4ab64f6a566ba13d9a534ff-image.jpg', '2021-05-06 11:03:56', '2021-05-06 11:05:34'),
(4, 'escuela-padel', 'Escola de pàdel', '<p>Com tots els esports, el tennis i el p&agrave;del, es poden aprendre des de petits. Els nens i nenes que s&rsquo;inicien en aquest esport comencen a practicar la seva t&egrave;cnica i poc a poc van aprenent noves habilitats i valors que despr&eacute;s de gran podran utilitzar en el seu dia a dia, s&oacute;n dos esports molt complets que t&rsquo;ajuden a entrenar-te, millorar la teva salut i estar en forma, tot jugant.</p>\r\n\r\n<p>Ho practiquem en espais a l&rsquo;aire lliure que t&rsquo;ajuden a relaxar-te, respirar i sortir de la rutina.</p>\r\n\r\n<p>L&rsquo;escola de tennis i p&agrave;del est&agrave; a la vostra disposici&oacute;. Consulteu informaci&oacute; i horaris a recepci&oacute;.</p>\r\n\r\n<p><strong>La persona m&eacute;s important de la nostra instal&middot;laci&oacute; ets tu</strong>, per aix&ograve; comptem amb un equip de gent jove i altament professional per proporcionar-te el millor servei. Els nostres entrenadors i monitors s&oacute;n professionals implicats i entusiastes que organitzen diferents activitats per ajudar-te a millorar el teu nivell i rendiment.</p>\r\n\r\n<p>Els nostres valors s&oacute;n:</p>\r\n\r\n<ul>\r\n	<li>Passi&oacute; per l&rsquo;esport</li>\r\n	<li>Professionalitat, vocaci&oacute;, entusiasme i implicaci&oacute;</li>\r\n</ul>\r\n\r\n<p>Apr&egrave;n o perfecciona la teva t&egrave;cnica amb nosaltres.</p>\r\n\r\n<p>El nostre equip est&agrave; per ajudar-te en tot moment. Coneix-nos i deixa&rsquo;t guiar!</p>\r\n\r\n<p>Consulta la informaci&oacute; i preus de l&rsquo;escola trucant al club o ens pots venir a fer una visita, o us adjuntem informaci&oacute;:</p>', 'images/web-vistas/cd846cb647c5f7b668045dea767174bb-image.jpg', '2021-05-06 11:05:22', '2021-05-06 11:05:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web_vista_pdfs`
--

CREATE TABLE `web_vista_pdfs` (
  `id` int(11) NOT NULL,
  `web_vista_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `web_vista_pdfs`
--

INSERT INTO `web_vista_pdfs` (`id`, `web_vista_id`, `titulo`, `url`, `activo`, `updated_at`, `created_at`) VALUES
(2, 4, 'TARIFA PADEL', 'uploads2/extraFiles/aaa0c18ddea4873644e4e36155c19ea4.pdf', 1, '2021-05-06 11:26:50', '2021-05-06 11:26:50'),
(3, 3, 'TARIFA TENNIS', 'uploads2/extraFiles/63ba0942d108e9b26c1638ccdadc90a2.pdf', 1, '2021-05-06 11:27:08', '2021-05-06 11:27:08'),
(4, 3, 'Evento 1', 'uploads2/extraFiles/dd2a3cd197c9ba57760e6f6a0f8a7c63.pdf', 1, '2021-05-08 19:15:07', '2021-05-08 19:15:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividade_form_grupo_extra`
--
ALTER TABLE `actividade_form_grupo_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_categorias`
--
ALTER TABLE `actividad_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_categoria_actividade`
--
ALTER TABLE `actividad_categoria_actividade`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_extras`
--
ALTER TABLE `actividad_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_extra_actividade`
--
ALTER TABLE `actividad_extra_actividade`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_extra_form_grupo_opcione`
--
ALTER TABLE `actividad_extra_form_grupo_opcione`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_fechas`
--
ALTER TABLE `actividad_fechas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_fecha_horarios`
--
ALTER TABLE `actividad_fecha_horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_inscripciones`
--
ALTER TABLE `actividad_inscripciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_pdfs`
--
ALTER TABLE `actividad_pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_tipos`
--
ALTER TABLE `actividad_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alquiler_pistas`
--
ALTER TABLE `alquiler_pistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `client_parientes_relacions`
--
ALTER TABLE `client_parientes_relacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `client_tipos_parientes`
--
ALTER TABLE `client_tipos_parientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_grupo_extras`
--
ALTER TABLE `form_grupo_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_grupo_opciones`
--
ALTER TABLE `form_grupo_opciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_opcion_extras`
--
ALTER TABLE `form_opcion_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_opcion_opciones`
--
ALTER TABLE `form_opcion_opciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galleria_images`
--
ALTER TABLE `galleria_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instalaciones`
--
ALTER TABLE `instalaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instalacion_images`
--
ALTER TABLE `instalacion_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia_comentarios`
--
ALTER TABLE `noticia_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `quota_socios`
--
ALTER TABLE `quota_socios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quota_socio_servicio`
--
ALTER TABLE `quota_socio_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `restaurante_categorias`
--
ALTER TABLE `restaurante_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `restaurante_images`
--
ALTER TABLE `restaurante_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `restaurante_platos`
--
ALTER TABLE `restaurante_platos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shop_articles`
--
ALTER TABLE `shop_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shop_banner_images`
--
ALTER TABLE `shop_banner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `web_vistas`
--
ALTER TABLE `web_vistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `web_vista_pdfs`
--
ALTER TABLE `web_vista_pdfs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `actividade_form_grupo_extra`
--
ALTER TABLE `actividade_form_grupo_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `actividad_categorias`
--
ALTER TABLE `actividad_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `actividad_categoria_actividade`
--
ALTER TABLE `actividad_categoria_actividade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `actividad_extras`
--
ALTER TABLE `actividad_extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `actividad_extra_actividade`
--
ALTER TABLE `actividad_extra_actividade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `actividad_extra_form_grupo_opcione`
--
ALTER TABLE `actividad_extra_form_grupo_opcione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `actividad_fechas`
--
ALTER TABLE `actividad_fechas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `actividad_fecha_horarios`
--
ALTER TABLE `actividad_fecha_horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `actividad_inscripciones`
--
ALTER TABLE `actividad_inscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `actividad_pdfs`
--
ALTER TABLE `actividad_pdfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `actividad_tipos`
--
ALTER TABLE `actividad_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `alquiler_pistas`
--
ALTER TABLE `alquiler_pistas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `client_parientes_relacions`
--
ALTER TABLE `client_parientes_relacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `client_tipos_parientes`
--
ALTER TABLE `client_tipos_parientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `form_grupo_extras`
--
ALTER TABLE `form_grupo_extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `form_grupo_opciones`
--
ALTER TABLE `form_grupo_opciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `form_opcion_extras`
--
ALTER TABLE `form_opcion_extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `form_opcion_opciones`
--
ALTER TABLE `form_opcion_opciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `galleria_images`
--
ALTER TABLE `galleria_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `instalaciones`
--
ALTER TABLE `instalaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `instalacion_images`
--
ALTER TABLE `instalacion_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `noticia_comentarios`
--
ALTER TABLE `noticia_comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `quota_socios`
--
ALTER TABLE `quota_socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `quota_socio_servicio`
--
ALTER TABLE `quota_socio_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `restaurante_categorias`
--
ALTER TABLE `restaurante_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `restaurante_images`
--
ALTER TABLE `restaurante_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `restaurante_platos`
--
ALTER TABLE `restaurante_platos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `shop_articles`
--
ALTER TABLE `shop_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `shop_banner_images`
--
ALTER TABLE `shop_banner_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `web_vistas`
--
ALTER TABLE `web_vistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `web_vista_pdfs`
--
ALTER TABLE `web_vista_pdfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
