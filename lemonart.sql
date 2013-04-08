-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-04-2013 a las 04:31:15
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lemonart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anio`
--

CREATE TABLE IF NOT EXISTS `anio` (
  `id_anio` int(11) NOT NULL AUTO_INCREMENT,
  `anio` int(11) NOT NULL,
  PRIMARY KEY (`id_anio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `anio`
--

INSERT INTO `anio` (`id_anio`, `anio`) VALUES
(1, 2013),
(2, 2012),
(3, 2011),
(4, 2010),
(5, 2009),
(6, 2008),
(9, 2014),
(10, 2015),
(11, 2016),
(12, 2017);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE IF NOT EXISTS `artista` (
  `id_artista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `biografia` text NOT NULL,
  PRIMARY KEY (`id_artista`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`id_artista`, `nombre`, `imagen`, `biografia`) VALUES
(1, 'demo artist', '0b1d2-pokecatsmaingif.gif', '<p>\r\n	kjhdksad</p>\r\n<p>\r\n	imgen</p>\r\n'),
(2, 'lajdl', '740c2-fat-boy.gif', '<p>\r\n	ldkjlakflkjfljlf</p>\r\n'),
(3, 'kajkljdkljasd', '5b9c2-camara---copia.jpg', '<p>\r\n	lasdklajdlkjadkllakd</p>\r\n'),
(4, 'kasjdlkjasldkj', '7d729-tumblr_mg0dcj0nkG1qdvls7o2_400.jpg', '<p>\r\n	akjlkajklas</p>\r\n'),
(5, 'lkadkljadlk', 'aa8cf-pikachu__fighting_for_nazis_by_dogman93-d33sjiy.jpg', '<p>\r\n	lkjlkjfklsfklslfkslkfjlsdkfjlk</p>\r\n'),
(6, 'opipoqipeol,mo', 'bdcb9-c3e3d0c8739a11e1a87612313804ec91_7.jpg', '<p>\r\n	&ntilde;alknjc&ntilde;iofurpfiocn&ntilde;a</p>\r\n'),
(7, 'knñldurfio', '6bb4f-891f6ba45ce811e2948222000a1f9307_7.jpg', '<p>\r\n	{&ntilde;lo&ntilde;dfolvnuid&ntilde;aolfio</p>\r\n'),
(8, 'artista.gif', 'b3714-e832324656eb11e2a1bd22000a9f1361_7.jpg', '<p>\r\n	artista.gifartista.gifartista.gifartista.gif</p>\r\n'),
(10, 'ñsdlvn sdifuj', '5824b-smokearmy.jpg', '<p>\r\n	&ntilde;diksfl&ntilde;sdnufo&ntilde;suoeriut</p>\r\n'),
(11, 'ñjhasdñfklañ', 'be526-tumblr_m3ar191WAk1qzw1qyo1_500.gif', '<p>\r\n	.-x,mv&ntilde;lasdif{&ntilde;</p>\r\n'),
(12, 'ñldvmfñsdolñ', 'acd26-16082012153.jpg', '<p>\r\n	Trololol beto</p>\r\n'),
(14, 'lsdfkjg', '33af7-bdcb9-c3e3d0c8739a11e1a87612313804ec91_7.jpg', '<p>\r\n	lkandkl&ntilde;f</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistasdestacados`
--

CREATE TABLE IF NOT EXISTS `artistasdestacados` (
  `id_destacado` int(11) NOT NULL AUTO_INCREMENT,
  `id_artista` int(11) NOT NULL,
  PRIMARY KEY (`id_destacado`),
  KEY `id_artista` (`id_artista`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `artistasdestacados`
--

INSERT INTO `artistasdestacados` (`id_destacado`, `id_artista`) VALUES
(4, 6),
(2, 8),
(5, 8),
(1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id_entrada` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `texto` text NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_entrada`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id_entrada`, `titulo`, `texto`, `fecha`) VALUES
(13, 'Futuro', '<p>\r\n	asdasdasdasdasdasd</p>\r\n', '2013-04-01'),
(14, 'Pasado', '<p>\r\n	jsdlasjdljasldkjaskldjaskldjl</p>\r\n', '2013-01-01'),
(15, 'adad', '<p>\r\n	jslkajsldjasld</p>\r\n', '2013-04-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

CREATE TABLE IF NOT EXISTS `colaborador` (
  `id_colaborador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_colaborador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `colaborador`
--

INSERT INTO `colaborador` (`id_colaborador`, `nombre`, `logo`, `descripcion`) VALUES
(1, 'Lorem asd', '227a7-colaborador1.gif', '<p>\r\n	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n'),
(2, 'kjashdlkja', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"'),
(3, 'ñklvmjlasdfc', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"'),
(4, 'lkasjdlkasjdl', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"'),
(5, 'lkanjcklsdjf', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"'),
(6, 'lkjañklscfmjñdlf', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"'),
(7, 'mlñaskdjcmlfj', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"'),
(8, 'ñlaskcmjf', 'a0eef-feliz2_f174ee.gif', '<p>\r\n	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n'),
(9, 'lskacfmjdk', 'da943-1282404_700b.jpg', '<p>\r\n	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n'),
(10, 'lkmjlñcjñdfk', 'd5544-gold-lion.jpg', '<p>\r\n	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradoresdestacados`
--

CREATE TABLE IF NOT EXISTS `colaboradoresdestacados` (
  `id_destacado` int(11) NOT NULL AUTO_INCREMENT,
  `id_colaborador` int(11) NOT NULL,
  PRIMARY KEY (`id_destacado`),
  KEY `id_colaborador` (`id_colaborador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `colaboradoresdestacados`
--

INSERT INTO `colaboradoresdestacados` (`id_destacado`, `id_colaborador`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE IF NOT EXISTS `descripcion` (
  `id_descripcion` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `posicion` varchar(300) NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY (`id_descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`id_descripcion`, `texto`, `posicion`, `clave`) VALUES
(1, 'Lemon art es la promotora cultural mas importante de tijuana, ha impulsado a mas de X artistas y tiene trabajos en todo Mexico.', 'Descripción principal de lemon art.', 'lemonprincipal'),
(2, 'Lemon art es la promotora cultural mas importante de tijuana, ha impulsado a mas de X artistas y tiene trabajos en todo Mexico.', 'Descripcion footer lemon art', 'lemonfooter'),
(3, 'Descripción artistas destacados', 'Descripcion artistas destacados', 'artistadestacado'),
(4, 'Descripcion artistas', 'Descripcion artistas ', 'artista'),
(5, 'Cosas legales', 'Footer legal', 'legalfooter'),
(6, 'Descripcion eventos destacados', 'Descripcion eventos destacados', 'eventodestacado'),
(8, 'Descripcion colaboradores destacados', 'Descripcion colaboradores destacados home', 'colaboradordestacado'),
(9, 'Descripcion colaboradores', 'Descripcion colaboradores', 'colaborador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE IF NOT EXISTS `destacados` (
  `id_destacado` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `enlace` varchar(500) NOT NULL,
  PRIMARY KEY (`id_destacado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `anio` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_evento`),
  KEY `anio` (`anio`),
  KEY `anio_2` (`anio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `nombre`, `lugar`, `anio`, `descripcion`, `fecha`) VALUES
(1, 'Uno', 'Tijuana | Galeria 1', 5, '<p>\r\n	Plop plop plop plop</p>\r\n', '0000-00-00'),
(2, 'Nuevo', 'Tijuana', 12, 'ljasdlkajdlkd', '0000-00-00'),
(3, 'Nuevo', 'Tijuana', 6, 'atwszxerctgvyibuhoni', '0000-00-00'),
(4, 'Tal evento', 'Arte y galeria', 4, '<p>\r\n	Fue un peque&ntilde;o evento de tal tal tal tal</p>\r\n', '2013-04-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventosdestacados`
--

CREATE TABLE IF NOT EXISTS `eventosdestacados` (
  `id_destacado` int(11) NOT NULL AUTO_INCREMENT,
  `id_evento` int(11) NOT NULL,
  PRIMARY KEY (`id_destacado`),
  KEY `id_evento` (`id_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `eventosdestacados`
--

INSERT INTO `eventosdestacados` (`id_destacado`, `id_evento`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento_proximo`
--

CREATE TABLE IF NOT EXISTS `evento_proximo` (
  `id_eventoproximo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `enlace` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id_eventoproximo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `que_es_lemon` text NOT NULL,
  `descripcion_artista` text NOT NULL,
  `descripcion_evento` text NOT NULL,
  `descripcion_colaboradores` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE IF NOT EXISTS `integrantes` (
  `id_integrante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_integrante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `integrantes`
--

INSERT INTO `integrantes` (`id_integrante`, `nombre`, `descripcion`) VALUES
(1, 'Adai Villareal', 'ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu'),
(2, 'Ivonne Zepeda', '"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."'),
(3, 'Tadashi Soriano', 't I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great ple'),
(4, 'Carlos Vega', 't I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great ple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id_logo` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(300) NOT NULL,
  PRIMARY KEY (`id_logo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `logo`
--

INSERT INTO `logo` (`id_logo`, `logo`) VALUES
(1, 'efe9e-logo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE IF NOT EXISTS `nosotros` (
  `id_nosotros` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `titulo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_nosotros`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id_nosotros`, `nombre`, `descripcion`, `titulo`) VALUES
(1, '¿Qué es?', '"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'que'),
(2, 'Misión', '"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'mision'),
(3, 'Visión', '"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'vision');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE IF NOT EXISTS `obra` (
  `id_obra` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL DEFAULT 'slide1.png',
  `id_artista` int(11) NOT NULL,
  `en_venta` enum('Si','No') NOT NULL DEFAULT 'No',
  `precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_obra`),
  KEY `id_artista` (`id_artista`),
  KEY `id_artista_2` (`id_artista`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`id_obra`, `titulo`, `descripcion`, `imagen`, `id_artista`, `en_venta`, `precio`) VALUES
(2, 'ñam ñam ñam', 'kjalskjcflksajnflksdjfklnjasdfkljnañldkfnjlñakjfn lshjfcnalñfdnllsdncfklasnf   klsdjfncklsfn|', '', 5, 'No', 0),
(3, 'beeeef', 'ljcanjlkasnjlvln llkasdjnlksacnñkasdfoui ñlaksdjcfnlñskadnjf lñasdncklfncd ñklasdncñklsndfcvn ', '', 4, '', 0),
(4, '', 'ksjahcnasjdhfvklsjdhfkl ksncnjslk klcasjhklfjashdcn alscnjfhklcfn', '', 3, 'No', 0),
(7, '', 'lscnjsnfñl ñlaskjdcnñl ñlascknjfñl nlñakcfnlñ lnasdcfnñln ñlanscflñ ñlascnkjlñkn lñascnlñnk aslñdnv', '', 10, '', 0),
(8, '', 'laskdncfjlsñ lñskadjfncñlk nñlasdcnjlñk lñaksfjcnlñ ', '', 5, '', 0),
(9, '', 'lsacnkjlskñdvnj asldkfnjclsdfkj saldfcjlsdk nasln', '', 4, '', 0),
(10, '', 'lcnlskfnj lasdnclsdnaf', '', 2, '', 0),
(11, '', 'lsackjlank lkasnclnkfv lkasndvlnk ', '', 3, '', 0),
(12, 'Snake', '<p>\r\n	<strong>una obrea muy lorem lorem lorem lorem lorem lkjlk&ntilde;jsdfjbsdkjf</strong></p>\r\n<h3 style="color:blue;">\r\n	<span style="font-family:arial,helvetica,sans-serif;"><strong>Trololol</strong></span></h3>\r\n', '0f347-SnakesOnPlane_Fullpic_1.gif', 1, 'No', 1990),
(13, '', 'ljcanjlkasnjlvln llkasdjnlksacnñkasdfoui ñlaksdjcfnlñskadnjf lñasdncklfncd ñklasdncñklsndfcvn ', '', 1, '', 0),
(14, '', 'ksjahcnasjdhfvklsjdhfkl ksncnjslk klcasjhklfjashdcn alscnjfhklcfn', '', 1, 'No', 0),
(15, '', 'kasdjhcfksljfn kasnjfhkljahk nasklcnjfklnj kasndcfnkjsajl klasnjclkasfnkl jnklascnjflksjnlk jnaslkcnj', '', 1, '', 0),
(16, '', 'lsknflsdfnj lanjsclñdfnñ nacslñdfnñl lñnaskcnjñl nlñasnkcñlfnk lñasjcnlñn lñnasclñfnñ ', '', 1, '', 0),
(17, '', 'lscnjsnfñl ñlaskjdcnñl ñlascknjfñl nlñakcfnlñ lnasdcfnñln ñlanscflñ ñlascnkjlñkn lñascnlñnk aslñdnv', '', 1, '', 0),
(18, '', 'laskdncfjlsñ lñskadjfncñlk nñlasdcnjlñk lñaksfjcnlñ ', '', 1, '', 0),
(19, '', 'lsacnkjlskñdvnj asldkfnjclsdfkj saldfcjlsdk nasln', '', 1, '', 0),
(20, '', 'lcnlskfnj lasdnclsdnaf', '', 1, '', 0),
(21, '', 'una obrea muy lorem lorem lorem lorem lorem lkjlkñjsdfjbsdkjf', '', 1, 'No', 1990),
(22, '', 'una obrea muy lorem lorem lorem lorem lorem lkjlkñjsdfjbsdkjf', '', 1, 'No', 1990),
(23, '', 'ljcanjlkasnjlvln llkasdjnlksacnñkasdfoui ñlaksdjcfnlñskadnjf lñasdncklfncd ñklasdncñklsndfcvn ', '', 1, '', 0),
(24, '', 'ksjahcnasjdhfvklsjdhfkl ksncnjslk klcasjhklfjashdcn alscnjfhklcfn', '', 1, 'No', 0),
(25, '', 'kasdjhcfksljfn kasnjfhkljahk nasklcnjfklnj kasndcfnkjsajl klasnjclkasfnkl jnklascnjflksjnlk jnaslkcnj', '', 1, '', 0),
(26, '', 'lsknflsdfnj lanjsclñdfnñ nacslñdfnñl lñnaskcnjñl nlñasnkcñlfnk lñasjcnlñn lñnasclñfnñ ', '', 1, '', 0),
(27, '', 'lscnjsnfñl ñlaskjdcnñl ñlascknjfñl nlñakcfnlñ lnasdcfnñln ñlanscflñ ñlascnkjlñkn lñascnlñnk aslñdnv', '', 11, '', 0),
(28, '', 'laskdncfjlsñ lñskadjfncñlk nñlasdcnjlñk lñaksfjcnlñ ', '', 1, '', 0),
(29, '', 'lsacnkjlskñdvnj asldkfnjclsdfkj saldfcjlsdk nasln', '', 4, '', 0),
(30, '', 'lcnlskfnj lasdnclsdnaf', '', 2, '', 0),
(31, '', 'una obrea muy lorem lorem lorem lorem lorem lkjlkñjsdfjbsdkjf', '', 1, 'No', 1990),
(32, '', 'una obrea muy lorem lorem lorem lorem lorem lkjlkñjsdfjbsdkjf', '', 1, 'No', 1990),
(33, '', 'ljcanjlkasnjlvln llkasdjnlksacnñkasdfoui ñlaksdjcfnlñskadnjf lñasdncklfncd ñklasdncñklsndfcvn ', '', 4, '', 0),
(34, '', 'ksjahcnasjdhfvklsjdhfkl ksncnjslk klcasjhklfjashdcn alscnjfhklcfn', 'artista.gif', 3, 'No', 0),
(37, '', 'lscnjsnfñl ñlaskjdcnñl ñlascknjfñl nlñakcfnlñ lnasdcfnñln ñlanscflñ ñlascnkjlñkn lñascnlñnk aslñdnv', '', 10, '', 0),
(38, '', 'laskdncfjlsñ lñskadjfncñlk nñlasdcnjlñk lñaksfjcnlñ ', '', 5, '', 0),
(39, '', 'lsacnkjlskñdvnj asldkfnjclsdfkj saldfcjlsdk nasln', '', 4, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `enlace` varchar(500) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id_slide`, `titulo`, `enlace`, `imagen`) VALUES
(1, 'El sol', 'https://www.facebook.com/', 'b5c1c-sol-alna-post.jpg'),
(2, 'Humo', 'http://foundation.zurb.com/docs/components/orbit.html', '07066-smokearmy.jpg'),
(3, 'Ejemplo', 'https://www.facebook.com/', 'e8169-10-(2).jpg'),
(4, 'Facebook', 'https://www.facebook.com/', '545d4-7511971692_0a2011850f_k.jpg'),
(5, 'Game boy', 'https://www.facebook.com/alex.spoon', 'b6cde-Gamelinkcablecomparison.jpg'),
(6, 'Gato', 'Gato', '1b926-12062012008.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `password`) VALUES
(1, 'lemon', '0b1e21e4c337a71bc9cdff73de98d2c1a462277b');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artistasdestacados`
--
ALTER TABLE `artistasdestacados`
  ADD CONSTRAINT `artistasdestacados_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id_artista`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `colaboradoresdestacados`
--
ALTER TABLE `colaboradoresdestacados`
  ADD CONSTRAINT `colaboradoresdestacados_ibfk_1` FOREIGN KEY (`id_colaborador`) REFERENCES `colaborador` (`id_colaborador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`anio`) REFERENCES `anio` (`id_anio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `eventosdestacados`
--
ALTER TABLE `eventosdestacados`
  ADD CONSTRAINT `eventosdestacados_ibfk_1` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `obra_ibfk_2` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id_artista`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
