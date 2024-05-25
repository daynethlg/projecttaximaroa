-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2024 a las 22:38:56
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
-- Base de datos: `taximaroa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruba`
--

CREATE TABLE `pruba` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `descripcion2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pruba`
--

INSERT INTO `pruba` (`id`, `titulo`, `descripcion`, `descripcion2`) VALUES
(1, 'horario', '', ''),
(2, '', 'lunes', '8am'),
(3, '', 'lunes', '9am'),
(4, '', 'domingo', 'cerradi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agencias`
--

CREATE TABLE `tb_agencias` (
  `id` int(50) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agencias`
--

INSERT INTO `tb_agencias` (`id`, `titulo`, `imagen`, `descripcion`) VALUES
(1, 'Agencias Marketing ', '1715373108_agencias.jpg', 'Las mejores agencias de Marketing en Ciudad Hidalgo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agencias_categoria`
--

CREATE TABLE `tb_agencias_categoria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `boton` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agencias_categoria`
--

INSERT INTO `tb_agencias_categoria` (`id`, `titulo`, `imagen`, `descripcion`, `boton`) VALUES
(1, 'Taximaroa MX', '1715373734_tmx.png', '¿Quieres que tu negocio despegue por medio de terceros?', 'taximaroa.php'),
(2, 'Agencia Connecta', '1715373766_logo.png', 'Marketing Digital, Todo tipo de publicidad impresa y digital, ademas fotografía y video', 'conecta.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_banner`
--

CREATE TABLE `tb_agonzalez_banner` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_banner`
--

INSERT INTO `tb_agonzalez_banner` (`id`, `titulo`, `imagen`) VALUES
(1, 'Banner', '1715462968_img2.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_datos`
--

CREATE TABLE `tb_agonzalez_datos` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_datos`
--

INSERT INTO `tb_agonzalez_datos` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Dirección', 'MELCHOR OCAMPO PONIENTE #48 col. centro'),
(2, 'Télefono', '7861139584 <br>                                     7861318485'),
(3, 'Correo', 'agenciadeviajesgonz@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_galeria`
--

CREATE TABLE `tb_agonzalez_galeria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_galeria`
--

INSERT INTO `tb_agonzalez_galeria` (`id`, `titulo`, `imagen`) VALUES
(1, 'img1', '1715464380_img1.jpeg'),
(2, 'img2', '1715464395_img3.jpeg'),
(3, 'img3', '1715464409_img4.jpeg'),
(4, 'img4', '1715464431_img5.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_horario`
--

CREATE TABLE `tb_agonzalez_horario` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_horario`
--

INSERT INTO `tb_agonzalez_horario` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Lunes - Viernes', '10:00 am a 3:00 pm <br> 5:00 a 7:30 pm'),
(2, 'Sabado', '10:00 a 2:00 pm'),
(3, 'Domingo', 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_icono`
--

CREATE TABLE `tb_agonzalez_icono` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_icono`
--

INSERT INTO `tb_agonzalez_icono` (`id`, `titulo`, `link`, `imagen`) VALUES
(1, 'facebook', 'https://www.facebook.com/profile.php?id=100031402316485&mibextid=LQQJ4d', '1715465355_facebook.png'),
(2, 'Instagram', 'https://www.instagram.com/agenciadeviajesgonz?igsh=aW5kM2g5djhsbXYw&utm_source=qr', '1715465370_instagram.png'),
(3, 'Whastapp', 'https://wa.me/message/XNBGPRGMFJGQG1', '1715465384_whatsapp.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_info`
--

CREATE TABLE `tb_agonzalez_info` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_info`
--

INSERT INTO `tb_agonzalez_info` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'AGENCIA DE VIAJES GONZÁLEZ', 'Viajeros les compartimos la ubicación de nuestra oficina en CIUDAD HIDALGO 📌 𝗥𝗲𝗰𝘂𝗲𝗿𝗱𝗲𝗻 𝗾𝘂𝗲 𝗽𝘂𝗲𝗱𝗲𝗻 𝗿𝗲𝘀𝗲𝗿𝘃𝗮𝗿 𝘀𝘂 𝘃𝗶𝗮𝗷𝗲 𝗱𝗲𝘀𝗱𝗲 𝗰𝘂𝗮𝗹𝗾𝘂𝗶𝗲𝗿 𝗽𝗮𝗿𝘁𝗲, 𝗱𝗲𝗻𝘁𝗿𝗼 𝘆 𝗳𝘂𝗲𝗿𝗮 𝗱𝗲 𝗹𝗮 𝗿𝗲𝗽ú𝗯𝗹𝗶𝗰𝗮... Somos una agencia legalmente establecida , nosotros nos aseguramos que tu viaje sea seguro, al mejor precio y con los mejores beneficios ✨🤩 𝐀𝐆𝐄𝐍𝐂𝐈𝐀 𝐃𝐄 𝐕𝐈𝐀𝐉𝐄𝐒 𝐆𝐎𝐍𝐙𝐀𝐋𝐄𝐙 Por muchos viajes ✈️🗺️🏔️🏖️🏕️🏝️🏞️ ¿Estas planeando un viaje con tus amigos y/o Familia y no saben por donde empezar? 🤔 ¡No te preocupes! Nosotros te asesoramos y ofrecemos las mejores opciones para que tú y tus amigos tengan ¡El viaje de sus sueños! ✈ 🤩✨ Contamos con diferentes opciones para que realices tus vacaciones: Tours nacionales Viajes nacionales Paquetes a la playa Viajes internacionales Tarifas exclusivas para grupos Tu boda en la playa Boletos de avión Congresos Excursiones nacionales Renta de autobuses y camionetas Y más … Estamos a tu servicio. 😊 .', '1715463472_img6.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_info2`
--

CREATE TABLE `tb_agonzalez_info2` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_info2`
--

INSERT INTO `tb_agonzalez_info2` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Misión', 'Somos una agencia de viajes dedicada al diseño y comercialización de paquetes turísticos haciendo vivir a los clientes una experiencia única'),
(2, 'Visión', 'Ser una agencia de viajes líder en el estado de Michoacán , por la confianza y seguridad que se les brinda a los clientes, presentando innovadores servicios y asegurando una actividad turística estable, además de obtener la mayor satisfacción de los clientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_mapa`
--

CREATE TABLE `tb_agonzalez_mapa` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_mapa`
--

INSERT INTO `tb_agonzalez_mapa` (`id`, `titulo`, `link`) VALUES
(1, 'mapa', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.502309095457!2d-100.5606564260313!3d19.691227432373104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbab668e246d%3A0x95eda8e84daf9280!2sAGENCIA%20DE%20VIAJES%20GONZALEZ!5e0!3m2!1ses-419!2smx!4v1714596198268!5m2!1ses-419!2smx\"                                 width=\"500\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"                                 referrerpolicy=\"no-referrer-when-downgrade');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_agonzalez_perfil`
--

CREATE TABLE `tb_agonzalez_perfil` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_agonzalez_perfil`
--

INSERT INTO `tb_agonzalez_perfil` (`id`, `titulo`, `imagen`) VALUES
(1, 'perfil', '1715463151_logo_agenciag.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_algobonito_banner`
--

CREATE TABLE `tb_algobonito_banner` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_algobonito_banner`
--

INSERT INTO `tb_algobonito_banner` (`id`, `titulo`, `imagen`) VALUES
(1, 'Banner', '1715367693_img5.jpg'),
(2, 'Banner', '1715386994_img4.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_algobonito_datos`
--

CREATE TABLE `tb_algobonito_datos` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_algobonito_datos`
--

INSERT INTO `tb_algobonito_datos` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Dirección', 'Lerdo de tejada #62'),
(2, 'Télefono', '4437236576'),
(3, 'Correo', 'alcalamayra12@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_algobonito_galeria`
--

CREATE TABLE `tb_algobonito_galeria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_algobonito_galeria`
--

INSERT INTO `tb_algobonito_galeria` (`id`, `titulo`, `imagen`) VALUES
(1, 'img1', '1715369601_img7.jpg'),
(2, 'img2', '1715369619_img6.jpg'),
(3, 'img3', '1715369635_img3.jpg'),
(4, 'img4', '1715369689_img2.jpg'),
(5, 'img5', '1715369703_img1.jpg'),
(6, 'img6', '1715369713_img4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_algobonito_horario`
--

CREATE TABLE `tb_algobonito_horario` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_algobonito_horario`
--

INSERT INTO `tb_algobonito_horario` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Lunes - Viernes', '9:00 am a 8:00 pm'),
(2, 'Sabado', '9:00 am a 6:00 pm'),
(3, 'Domingo', 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_algobonito_icono`
--

CREATE TABLE `tb_algobonito_icono` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(10000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_algobonito_icono`
--

INSERT INTO `tb_algobonito_icono` (`id`, `titulo`, `link`, `imagen`) VALUES
(1, 'Instagram', 'https://www.instagram.com/algobonito0903?igsh=ZGxsaGRncXNrbnN5', '1715371157_instagram.png'),
(2, 'Whastapp', 'https://wa.me/524437236576', '1715371173_whatsapp.png'),
(3, 'TikTok', 'https://www.tiktok.com/@algo.bonito024?_t=8ldklB4dl7m&_r=1', '1715371194_tiktok_icon.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_algobonito_info`
--

CREATE TABLE `tb_algobonito_info` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `descripcion2` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_algobonito_info`
--

INSERT INTO `tb_algobonito_info` (`id`, `titulo`, `descripcion`, `descripcion2`, `imagen`) VALUES
(1, 'Algo Bonito', 'Sobre nosotros', 'Venta de bolsas para dama, accesorios, termo, pijamas, peluches, perfumes, reloj para dama y caballero, carteras', '1715368766_about.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_algobonito_mapa`
--

CREATE TABLE `tb_algobonito_mapa` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_algobonito_mapa`
--

INSERT INTO `tb_algobonito_mapa` (`id`, `titulo`, `link`) VALUES
(1, 'Mapa', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.2970225291958!2d-100.55818677389718!3d19.687317370226154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbb491ead285%3A0x8e88df7964908778!2sC.%20Lerdo%20de%20Tejada%2062%2C%20Centro%2C%2061160%20Cdad.%20Hidalgo%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1714673890437!5m2!1ses-419!2smx\" width=\"500\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_algobonito_perfil`
--

CREATE TABLE `tb_algobonito_perfil` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_algobonito_perfil`
--

INSERT INTO `tb_algobonito_perfil` (`id`, `titulo`, `imagen`) VALUES
(1, 'Perfil', '1715371601_logo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_anuncios`
--

CREATE TABLE `tb_anuncios` (
  `id` int(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_anuncios`
--

INSERT INTO `tb_anuncios` (`id`, `imagen`, `titulo`) VALUES
(6, '1715037503_promotion.jpg', 'Anuncio taqueria ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `imagen`, `titulo`) VALUES
(9, '1715036623_carousel-1.jpg', 'Traditional Ice Cream Since 1950'),
(12, '1715111119_carousel-2.jpg', 'jjhjhjh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_biencomida`
--

CREATE TABLE `tb_biencomida` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_biencomida`
--

INSERT INTO `tb_biencomida` (`id`, `titulo`, `imagen`, `descripcion`) VALUES
(5, '¡Descubre un mundo de sabores en un solo lugar!!', '1715041632_header.jpg', '¿Buscas comida reconfortante para el alma? ¿O quizás algo más exótico y aventurero? No importa cuáles sean tus gustos o antojos del momento, aquí encontrarás una amplia gama de opciones para satisfacer tu apetito y sorprenderte en cada visita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_bienvenida`
--

CREATE TABLE `tb_bienvenida` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_bienvenida`
--

INSERT INTO `tb_bienvenida` (`id`, `titulo`, `imagen`, `descripcion`) VALUES
(13, 'Bienvenido a TaximaroaMX', '1715037269_about.jpg', 'En este espacio digital, te damos la más cordial bienvenida a un mundo de posibilidades y descubrimientos. Aquí encontrarás todo lo que necesitas para satisfacer tus intereses y explorar nuevas experiencias.Sumérgete en nuestras secciones cuidadosamente diseñadas para brindarte información relevante, entretenimiento cautivador y recursos útiles. Desde artículos informativos hasta consejos prácticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `descripcion2` varchar(1000) NOT NULL,
  `descripcion3` varchar(1000) NOT NULL,
  `boton` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_categorias`
--

INSERT INTO `tb_categorias` (`id`, `imagen`, `titulo`, `descripcion`, `descripcion2`, `descripcion3`, `boton`) VALUES
(68, '1715118248_logo_peperonis.jpg', 'Peperonis Pizza\'s ', '', '', '', 'peperonis.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categorias_moda`
--

CREATE TABLE `tb_categorias_moda` (
  `id` int(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `boton` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_categorias_moda`
--

INSERT INTO `tb_categorias_moda` (`id`, `imagen`, `titulo`, `descripcion`, `boton`) VALUES
(1, '1715364711_logo.jpg', 'Algo bonito', 'Algo bonito', 'algo_bonito.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_comida`
--

CREATE TABLE `tb_comida` (
  `id` int(11) NOT NULL,
  `titulo_p` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion_p` varchar(255) NOT NULL,
  `boton` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_comida`
--

INSERT INTO `tb_comida` (`id`, `titulo_p`, `imagen`, `descripcion_p`, `boton`) VALUES
(23, 'Peperonis Pizzas', '1715976142_1715118248_logo_peperonis.jpg', 'Las mejores pizzarias de la ciudad', 'peperonis.php'),
(25, 'Kings Crunch', '1715976188_comida_rapida1715286888_logo.webp', 'La mejor comida rapida de la ciudad', 'kings.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_comida_rapida_categorias`
--

CREATE TABLE `tb_comida_rapida_categorias` (
  `id` int(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `boton` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_comida_rapida_categorias`
--

INSERT INTO `tb_comida_rapida_categorias` (`id`, `imagen`, `titulo`, `boton`) VALUES
(1, '1715286981_logo.webp', 'Kings Crunch', 'kings.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_comida_rapida_inicio`
--

CREATE TABLE `tb_comida_rapida_inicio` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_comida_rapida_inicio`
--

INSERT INTO `tb_comida_rapida_inicio` (`id`, `titulo`, `imagen`) VALUES
(1, 'Descubre las mejores lugares de comida rapida', '1715294846_fastfood.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conecta_banner`
--

CREATE TABLE `tb_conecta_banner` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_conecta_banner`
--

INSERT INTO `tb_conecta_banner` (`id`, `titulo`, `imagen`) VALUES
(1, 'Banner', '1715378954_banner.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conecta_datos`
--

CREATE TABLE `tb_conecta_datos` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_conecta_datos`
--

INSERT INTO `tb_conecta_datos` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Dirección', 'Juan Silveti #10, Col. Lienzo charro, Ciudad Hidalgo Michoacán'),
(2, 'Télefono', '786 1282077'),
(3, 'Correo', 'connecta.agencia@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conecta_galeria`
--

CREATE TABLE `tb_conecta_galeria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_conecta_galeria`
--

INSERT INTO `tb_conecta_galeria` (`id`, `titulo`, `imagen`) VALUES
(1, 'img1', '1715380029_img1.jpg'),
(2, 'img2', '1715380087_img2.jpg'),
(3, 'img3', '1715380150_img3.jpg'),
(4, 'img4', '1715380201_img4.jpg'),
(5, 'img5', '1715380254_img5.jpg'),
(6, 'img6', '1715380270_img6.jpg'),
(7, 'img7', '1715380290_img7.jpg'),
(8, 'img8', '1715380302_img8.jpg'),
(9, 'img9', '1715380337_img9.jpg'),
(10, 'img10', '1715380352_img10.jpg'),
(11, 'img11', '1715380366_img11.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conecta_horario`
--

CREATE TABLE `tb_conecta_horario` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_conecta_horario`
--

INSERT INTO `tb_conecta_horario` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Lunes - Viernes', '4:00 pm a 9:00 pm'),
(2, 'Sabado', '10:00 am a 2:00 pm'),
(3, 'Domingo', 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conecta_icono`
--

CREATE TABLE `tb_conecta_icono` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_conecta_icono`
--

INSERT INTO `tb_conecta_icono` (`id`, `titulo`, `link`, `imagen`) VALUES
(1, 'facebook', 'https://www.facebook.com/ConnectaHidalgoPublicidad/', '1715381332_facebook.png'),
(2, 'Instagram', 'https://www.instagram.com/agencia.connecta.hgo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==', '1715381353_instagram.png'),
(3, 'Whastapp', 'https://wa.me/5217861282077', '1715381381_whatsapp.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conecta_info`
--

CREATE TABLE `tb_conecta_info` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `descripcion2` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_conecta_info`
--

INSERT INTO `tb_conecta_info` (`id`, `titulo`, `descripcion`, `descripcion2`, `imagen`) VALUES
(1, 'Agencia Connecta', 'Agencia Connecta es una agencia de publicidad, localizada en Ciudad Hidalgo Michoacán, que desde 3 hace años realiza actividades publicitarias, como son servicios de serigrafía, impresiones, lonas, diseño de tarjetas de presentación, invitaciones de eventos, y demás servicios audiovisuales', 'Ser reconocidos local y regionalmente como la agencia de servicios publicitarios especializada en comunicación que destaca por el valor y la calidad que ofrecemos a nuestros clientes, así como la capacidad de adaptarnos a sus necesidades logrando un alto estándar de creatividad y profesionalismo', '1715379731_1715379224_logo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conecta_mapa`
--

CREATE TABLE `tb_conecta_mapa` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_conecta_mapa`
--

INSERT INTO `tb_conecta_mapa` (`id`, `titulo`, `link`) VALUES
(1, 'Mapa', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.677961821429!2d-100.56295412603153!3d19.6837399326151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbc03ac1bd19%3A0x46044c079aa01ab5!2sAGENCIA%20CONNECTA!5e0!3m2!1ses-419!2smx!4v1714757551545!5m2!1ses-419!2smx\"width=\"500\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"referrerpolicy=\"no-referrer-when-downgrade');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conecta_perfil`
--

CREATE TABLE `tb_conecta_perfil` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_conecta_perfil`
--

INSERT INTO `tb_conecta_perfil` (`id`, `titulo`, `imagen`) VALUES
(1, 'perfil', '1715379224_logo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_configuracion`
--

CREATE TABLE `tb_configuracion` (
  `id` int(11) NOT NULL,
  `nombreconfi` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_configuracion`
--

INSERT INTO `tb_configuracion` (`id`, `nombreconfi`, `valor`) VALUES
(13, 'Menu_servicios', '#servicios'),
(14, 'Menu_moda', '#moda'),
(15, 'Menu_nosotros', '#nosotros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_datos_nosotros`
--

CREATE TABLE `tb_datos_nosotros` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_datos_nosotros`
--

INSERT INTO `tb_datos_nosotros` (`id`, `titulo`, `imagen`, `descripcion`) VALUES
(3, 'Sobre Nosotros', '1715537864_logotmx.jpg', 'En Taximaroa MX, nos comprometemos a ser la fuerza impulsora detrás del crecimiento y éxito sostenible de nuestros clientes en el mundo digital. Nos dedicamos a ofrecer soluciones de marketing digital innovadoras y un apoyo empresarial integral que maximiza la visibilidad, la eficiencia y la rentabilidad de cada negocio que confia en nosotros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_datos_team`
--

CREATE TABLE `tb_datos_team` (
  `id` int(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_datos_team`
--

INSERT INTO `tb_datos_team` (`id`, `nombre`, `puesto`, `imagen`, `link`) VALUES
(5, 'Jorge Alberto Juárez Pérez ', 'Marketing', '1715538290_team1.jpg', 'https://www.facebook.com/jorgealberto17'),
(6, 'Christian Cen', 'Diseñador', '1715976910_team2.jpg', 'https://www.facebook.com/share/mHvUK793Uemo3uc5/?mibextid=qi2Omg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_datos_team_titulo`
--

CREATE TABLE `tb_datos_team_titulo` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_iconos`
--

CREATE TABLE `tb_iconos` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_kings_banner`
--

CREATE TABLE `tb_kings_banner` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_kings_banner`
--

INSERT INTO `tb_kings_banner` (`id`, `titulo`, `imagen`) VALUES
(1, 'Banner', '1715296916_banner.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_kings_datos`
--

CREATE TABLE `tb_kings_datos` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_kings_datos`
--

INSERT INTO `tb_kings_datos` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Direccion', 'Suc centro. Av Morelos 20 Suc central. Av Morelos poniente 100'),
(6, 'Telefono', '7861412602 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_kings_galeria`
--

CREATE TABLE `tb_kings_galeria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_kings_galeria`
--

INSERT INTO `tb_kings_galeria` (`id`, `titulo`, `imagen`) VALUES
(1, 'menu1', '1715301844_img_4.jpeg'),
(8, 'menu2', '1715377238_img_5.jpeg'),
(9, 'menu3', '1715377265_img_6.jpeg'),
(10, 'menu4', '1715377281_img_7.jpeg'),
(11, 'menu5', '1715377298_img_1.webp'),
(12, 'menu6', '1715377310_img_2.webp'),
(13, 'menu7', '1715377325_img_3.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_kings_horario`
--

CREATE TABLE `tb_kings_horario` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_kings_horario`
--

INSERT INTO `tb_kings_horario` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Lunes a Viernes', '9:00 PM - 7:00 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_kings_icono`
--

CREATE TABLE `tb_kings_icono` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_kings_icono`
--

INSERT INTO `tb_kings_icono` (`id`, `titulo`, `link`, `imagen`) VALUES
(1, 'facebook', 'https://www.facebook.com/kingcrunchhgo?mibextid=LQQJ4d', '1715359168_facebook.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_kings_info`
--

CREATE TABLE `tb_kings_info` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `descripcion2` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_kings_info`
--

INSERT INTO `tb_kings_info` (`id`, `titulo`, `descripcion`, `descripcion2`, `imagen`) VALUES
(1, 'KING CRUCH, EL REY DEL POLLO FRITO', 'Sobre nosotros', 'Somos un negocio de comida rápida enfocado a la elaboración de pollo frito, donde podrás encontrar una gran variedad de paquetes y productos diseñados para cubrir todas las necesidades y gustos familiares. Elaborados con la mas alta calidad. Nuestra receta es única, original e inigualable.', '1715299048_about.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_kings_mapa`
--

CREATE TABLE `tb_kings_mapa` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_kings_mapa`
--

INSERT INTO `tb_kings_mapa` (`id`, `titulo`, `link`) VALUES
(1, 'Mapa', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.540842428346!2d-100.56716200530676!3d19.689585116867534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cb004708e46d%3A0xa751b7d134eac074!2sKing%20Crunch!5e0!3m2!1ses-419!2smx!4v1714592156191!5m2!1ses-419!2smx\" width=\"500\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_kings_perfil`
--

CREATE TABLE `tb_kings_perfil` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_kings_perfil`
--

INSERT INTO `tb_kings_perfil` (`id`, `titulo`, `imagen`) VALUES
(1, 'Perfil', '1715297479_logo.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nosotros_contacto_mapa`
--

CREATE TABLE `tb_nosotros_contacto_mapa` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_nosotros_contacto_mapa`
--

INSERT INTO `tb_nosotros_contacto_mapa` (`id`, `titulo`, `link`) VALUES
(2, 'mapa', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.677961821429!2d-100.56295412603153!3d19.6837399326151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbc03ac1bd19%3A0x46044c079aa01ab5!2sAGENCIA%20CONNECTA!5e0!3m2!1ses-419!2smx!4v1714757551545!5m2!1ses-419!2smx\"width=\"500\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"referrerpolicy=\"no-referrer-when-downgrade	 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nosotros_datos2`
--

CREATE TABLE `tb_nosotros_datos2` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_nosotros_datos2`
--

INSERT INTO `tb_nosotros_datos2` (`id`, `titulo`, `descripcion`) VALUES
(3, ' Teléfono ', '786 1282077'),
(4, 'Direccion', 'Juan Silveti #10, Col. Lienzo charro, Ciudad Hidalgo Michoacán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nosotros_icono`
--

CREATE TABLE `tb_nosotros_icono` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(10000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_nosotros_icono`
--

INSERT INTO `tb_nosotros_icono` (`id`, `titulo`, `link`, `imagen`) VALUES
(3, 'Whastapp', 'https://wa.me/527861282077', '1715537274_whatsapp.png'),
(4, 'facebook', 'https://www.facebook.com/taximaroamx1', '1715549213_facebook.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nosotros_titulo`
--

CREATE TABLE `tb_nosotros_titulo` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_nosotros_titulo`
--

INSERT INTO `tb_nosotros_titulo` (`id`, `titulo`, `imagen`, `descripcion`) VALUES
(3, 'Servicios', '1715536321_banner.jpeg', 'Promoción mediante redes sociales de pequeñas, medianas y grandes empresas. En la promoción se deriva en la página de Facebook: Taximaroa MX. Nuestro trabajo es asesorar a las empresas para que mejoren su publicidad y tengan más impacto, tales como fotografía, de marketing y diseño básico.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nosotros_titulo_contacto`
--

CREATE TABLE `tb_nosotros_titulo_contacto` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_nosotros_titulo_contacto`
--

INSERT INTO `tb_nosotros_titulo_contacto` (`id`, `titulo`) VALUES
(1, 'Contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_noticias`
--

CREATE TABLE `tb_noticias` (
  `id` int(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `categoria` varchar(10000) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `boton` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_noticias`
--

INSERT INTO `tb_noticias` (`id`, `imagen`, `titulo`, `descripcion`, `categoria`, `fecha`, `boton`) VALUES
(5, '1715475010_img1.jpeg', 'Lazaro Cardenas', 'En cateo realizado en Apatzingán, asegura Fiscalía General indicios de hechos constitutivos de delito y detiene a un hombre', 'policial', 'nov12', 'noticia1.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_noticias_descripcion`
--

CREATE TABLE `tb_noticias_descripcion` (
  `id` int(50) NOT NULL,
  `descripcion` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_noticias_descripcion`
--

INSERT INTO `tb_noticias_descripcion` (`id`, `descripcion`) VALUES
(2, 'En el marco de tareas de investigación de hechos constitutivos de delito, la Fiscalía General del Estado de Michoacán (FGE) ejecutó una orden de cateo en una gasolinera ubicada en el municipio de Apatzingán, lugar donde fueron asegurados indicios que serán analizados por expertos y se detuvo a una persona que intentó ingresar al área resguardada.'),
(3, 'Esta acción se derivó de los trabajos de investigación realizada por agentes de la Policía de Investigación (PDI) adscritos a la Fiscalía Regional de Apatzingán, a fin de localizar y extraer indicios relacionados en un homicidio, por lo que se hizo la solicitud de la orden de cateo ante el Juez de Control.'),
(4, 'Al momento en que se realizaban las diligencias, llego al lugar José Manuel “N” quien se ostentó como encargado del establecimiento comercial, e intento ingresar al área resguardada por agentes de investigación, a quienes en un determinado momento amagó con un arma de fuego calibre .380, por lo que fue sometido y desarmado.'),
(5, 'Una vez concluida la acción operativa, el detenido, así como lo asegurado e indicios fueron trasladados a las instalaciones de La Fiscalía Regional de Apatzingán, quedando a disposición del agente del Ministerio Público para continuar con las investigaciones correspondientes'),
(6, 'De conformidad con lo establecido en el apartado C del artículo 41 de la Constitución Política de los Estados Unidos Mexicanos, a partir del 1 de marzo y hasta la conclusión de la jornada electoral, debe SUSPENDERSE, la difusión de toda propaganda gubernamental, con excepción de los servicios educativos, de salud o relativos a protección civil. El contenido vertido en esta plataforma es de carácter institucional y con fines informativos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_noticias_galeria`
--

CREATE TABLE `tb_noticias_galeria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_noticias_galeria`
--

INSERT INTO `tb_noticias_galeria` (`id`, `titulo`, `imagen`) VALUES
(1, 'img1', '1715530385_img2.jpg'),
(2, 'img2', '1715530416_img3.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_noticias_inicio`
--

CREATE TABLE `tb_noticias_inicio` (
  `id` int(50) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `titulo` varchar(10000) NOT NULL,
  `fecha` varchar(1000) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_noticias_inicio`
--

INSERT INTO `tb_noticias_inicio` (`id`, `imagen`, `titulo`, `fecha`, `lugar`, `autor`) VALUES
(2, '1715530004_banner.jpg', 'asegura Fiscalía General indicios de hechos constitutivos de delito y detiene a un hombre', '3 de mayo de 2024', 'Apatzingán, Michoacán', 'Taximaroa MX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_banner`
--

CREATE TABLE `tb_ocampo_banner` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_banner`
--

INSERT INTO `tb_ocampo_banner` (`id`, `titulo`, `imagen`) VALUES
(1, 'Banner', '1715387200_img4.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_datos`
--

CREATE TABLE `tb_ocampo_datos` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_datos`
--

INSERT INTO `tb_ocampo_datos` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Télefono', '7861549979');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_datos_direccion`
--

CREATE TABLE `tb_ocampo_datos_direccion` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_datos_direccion`
--

INSERT INTO `tb_ocampo_datos_direccion` (`id`, `titulo`) VALUES
(1, '📍Melchor Ocampo #47'),
(4, '📍Francisco I. Madero #04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_galeria`
--

CREATE TABLE `tb_ocampo_galeria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_galeria`
--

INSERT INTO `tb_ocampo_galeria` (`id`, `titulo`, `imagen`) VALUES
(1, 'img1', '1715388105_img1.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_horario`
--

CREATE TABLE `tb_ocampo_horario` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_horario`
--

INSERT INTO `tb_ocampo_horario` (`id`, `titulo`, `descripcion`) VALUES
(1, '📍Melchor Ocampo <br> Lunes - Sabado ', '7:00 am a 20:00 pm'),
(4, 'Domingo', '7:00 am a 16:00 pm'),
(5, '📍Cuauhtémoc <br> Lunes - Sabado', '7:00 am a 20:00 pm'),
(6, 'Domingo', '7:00 am a 19:00 pm'),
(7, '📍Lienzo charro <br>                             Lunes - Sabado', '7:00 am a 13:00 pm <br>                             16:00 pm a 19:00 pm <br>'),
(8, 'Domingo', '7:00 am a 13:00 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_icono`
--

CREATE TABLE `tb_ocampo_icono` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_icono`
--

INSERT INTO `tb_ocampo_icono` (`id`, `titulo`, `link`, `imagen`) VALUES
(1, 'facebook', 'https://www.facebook.com/laboratoriosocampo', '1715455697_facebook.png'),
(4, 'TikTok', 'https://www.tiktok.com/@laboratoriosocampo?_t=8lRhrY1xn2D&_r=1', '1715455787_tiktok_icon.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_info`
--

CREATE TABLE `tb_ocampo_info` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_info`
--

INSERT INTO `tb_ocampo_info` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Laboratorios Ocampo', 'Laboratorio Ocampo no sólo somos el laboratorio de referencia más grande de Ciudad Hidalgo, también somos una comunidad de profesionales que brinda soluciones en mano que desde hace 30 años colaboramos integralmente con expertos y especialistas de la indu', '1715387765_img2.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_mapa`
--

CREATE TABLE `tb_ocampo_mapa` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_mapa`
--

INSERT INTO `tb_ocampo_mapa` (`id`, `titulo`, `link`) VALUES
(1, 'Melchor Ocampo #47', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.5004883052766!2d-100.56034132603132!3d19.69130503237057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbb154a9bddd%3A0x4f3b35fd4be14470!2sLaboratorio%20Ocampo!5e0!3m2!1ses-419!2smx!4v1714607366722!5m2!1ses-419!2smx\"width=\"450\" height=\"100\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"referrerpolicy=\"no-referrer-when-downgrade'),
(4, 'Francisco I. Madero #04', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.409853052163!2d-100.5565795260312!3d19.695167432245658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cb79319552df%3A0x46262a727283fd85!2sLaboratorio%20Ocampo!5e0!3m2!1ses-419!2smx!4v1714607708872!5m2!1ses-419!2smx\"                                 width=\"450\" height=\"100\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"                                 referrerpolicy=\"no-referrer-when-downgrade');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocampo_perfil`
--

CREATE TABLE `tb_ocampo_perfil` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ocampo_perfil`
--

INSERT INTO `tb_ocampo_perfil` (`id`, `titulo`, `imagen`) VALUES
(1, 'perfil', '1715387418_logo1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_peperonis_banner`
--

CREATE TABLE `tb_peperonis_banner` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_peperonis_banner`
--

INSERT INTO `tb_peperonis_banner` (`id`, `titulo`, `imagen`) VALUES
(1, 'Banner', '1715282400_banner_peperonis.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_peperonis_datos`
--

CREATE TABLE `tb_peperonis_datos` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_peperonis_datos`
--

INSERT INTO `tb_peperonis_datos` (`id`, `titulo`, `descripcion`) VALUES
(1, ' Dirección', 'Av Juárez 143a'),
(3, 'Télefono', '7861235543'),
(4, 'Correo', 'arriagaedgaralberto@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_peperonis_datos_titulo`
--

CREATE TABLE `tb_peperonis_datos_titulo` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_peperonis_datos_titulo`
--

INSERT INTO `tb_peperonis_datos_titulo` (`id`, `titulo`) VALUES
(1, 'Contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_peperonis_galeria`
--

CREATE TABLE `tb_peperonis_galeria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_peperonis_galeria`
--

INSERT INTO `tb_peperonis_galeria` (`id`, `titulo`, `imagen`) VALUES
(1, 'img1', '1715192800_menu1.jpg'),
(2, 'muenu2', '1715192809_menu2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_peperonis_horario`
--

CREATE TABLE `tb_peperonis_horario` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `descripcion2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_peperonis_horario`
--

INSERT INTO `tb_peperonis_horario` (`id`, `titulo`, `descripcion`, `descripcion2`) VALUES
(1, 'Lunes a viernes', '4:00 PM - 8:00 PM', ''),
(3, 'Sabado', '10:00 AM - 2:00 PM', '10:00 AM - 2:00 PM'),
(4, 'Domingo', 'Cerrado', 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_peperonis_icono`
--

CREATE TABLE `tb_peperonis_icono` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_peperonis_icono`
--

INSERT INTO `tb_peperonis_icono` (`id`, `titulo`, `link`, `imagen`) VALUES
(1, 'Facebook', 'https://www.facebook.com/peperonispizzacdhidalgo', '1715282230_facebook.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_peperonis_mapa`
--

CREATE TABLE `tb_peperonis_mapa` (
  `id` int(50) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_peperonis_mapa`
--

INSERT INTO `tb_peperonis_mapa` (`id`, `titulo`, `link`) VALUES
(1, 'Mapa 1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d480840.25635182473!2d-101.1227989196777!3d19.688576633564203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cba048c56e11%3A0xe1b353901f745c6!2sPeperoni&#39;s%20Pizza%20%7C%20Es%20tu%20Pizza!5e0!3m2!1ses-419!2smx!4v1714945545094!5m2!1ses-419!2smx\" width=\"500\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_peperonis_perfil`
--

CREATE TABLE `tb_peperonis_perfil` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_peperonis_perfil`
--

INSERT INTO `tb_peperonis_perfil` (`id`, `titulo`, `imagen`) VALUES
(1, 'perfil', '1715192469_logo_peperonis.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pizzerias`
--

CREATE TABLE `tb_pizzerias` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_pizzerias`
--

INSERT INTO `tb_pizzerias` (`id`, `titulo`, `imagen`) VALUES
(1, 'Peperonis Pizzas', '1713831826_logo_peperonis.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicios`
--

CREATE TABLE `tb_servicios` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_servicios`
--

INSERT INTO `tb_servicios` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Banner', 'Descubre los mejores empresas para tus necesidades', '1715383418_servicios.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicios_categorias`
--

CREATE TABLE `tb_servicios_categorias` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `boton` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_servicios_categorias`
--

INSERT INTO `tb_servicios_categorias` (`id`, `titulo`, `imagen`, `boton`) VALUES
(1, 'Laboratorios Ocampo', '1715976257_1715387418_logo1.jpg', 'laboratoriosocampo.php'),
(2, 'DVelazquez', '1715976283_1715459539_logo.png', 'Dvelázquez.php'),
(3, 'AGENCIA DE VIAJES GONZÁLEZ', '1715976306_1715463151_logo_agenciag.jpeg', 'agencia_gonzalez.php'),
(4, 'Agencia Connecta Marketing', '1715976504_logo.png', 'conecta.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_terminos_condiciones`
--

CREATE TABLE `tb_terminos_condiciones` (
  `id` int(50) NOT NULL,
  `titulo` mediumtext NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `descripcion2` mediumtext NOT NULL,
  `descripcion3` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_terminos_descripcion`
--

CREATE TABLE `tb_terminos_descripcion` (
  `id` int(50) NOT NULL,
  `descripcion` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_terminos_titulo`
--

CREATE TABLE `tb_terminos_titulo` (
  `id` int(50) NOT NULL,
  `titulo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_titulo_moda`
--

CREATE TABLE `tb_titulo_moda` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_titulo_moda`
--

INSERT INTO `tb_titulo_moda` (`id`, `titulo`, `imagen`, `descripcion`) VALUES
(1, 'Moda y accesorios', '1715364598_moda.jpeg', 'Descubre lo mejor en moda y accesorios de Ciudad Hidalgo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_titulo_noticias`
--

CREATE TABLE `tb_titulo_noticias` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_titulo_noticias`
--

INSERT INTO `tb_titulo_noticias` (`id`, `titulo`) VALUES
(1, 'Descubre las mejores noticias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `password`, `correo`) VALUES
(11, 'alex', '1234', 'alex@gmail.com'),
(12, 'evy', '1234', 'dayneth777@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_velazquez_banner`
--

CREATE TABLE `tb_velazquez_banner` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_velazquez_banner`
--

INSERT INTO `tb_velazquez_banner` (`id`, `titulo`, `imagen`) VALUES
(1, 'Banner', '1715458653_img2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_velazquez_datos`
--

CREATE TABLE `tb_velazquez_datos` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_velazquez_datos`
--

INSERT INTO `tb_velazquez_datos` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Dirección', 'Francisco Gonzalez Boca negra 3 col.centro, Ciudad Hidalgo, Michoacan'),
(2, 'Télefono', '7861287971'),
(3, 'Correo', 'greensleevesjva@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_velazquez_galeria`
--

CREATE TABLE `tb_velazquez_galeria` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_velazquez_galeria`
--

INSERT INTO `tb_velazquez_galeria` (`id`, `titulo`, `imagen`) VALUES
(1, 'img1', '1715460625_img1.jpg'),
(2, 'img2', '1715460645_img4.png'),
(3, 'img3', '1715460730_img6.jpg'),
(4, 'img4', '1715460740_img3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_velazquez_icono`
--

CREATE TABLE `tb_velazquez_icono` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_velazquez_icono`
--

INSERT INTO `tb_velazquez_icono` (`id`, `titulo`, `link`, `imagen`) VALUES
(1, 'facebook', 'https://www.facebook.com/profile.php?id=61551510865772&mibextid=ZbWKwL', '1715461513_facebook.png'),
(2, 'Youtube', 'https://youtube.com/@Dvelazquezjva?si=vAb7vomvDDYvNwBP', '1715461564_youtube_logo.png'),
(3, 'Whastapp', 'https://wa.me/523312478054', '1715461587_whatsapp.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_velazquez_info`
--

CREATE TABLE `tb_velazquez_info` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_velazquez_info`
--

INSERT INTO `tb_velazquez_info` (`id`, `titulo`, `descripcion`) VALUES
(1, 'D\'velázquez', 'D\'velázquez ofrese el servicio de música en vivo para cualquier tipo de evento social. Contamos con audio e iluminación. Tenemos lo necesario para eventos sociales y culturales como lo son (festivales, ferias, conciertos, talleres, recitales etc..) particulares (bodas, XV años, Bautizos, cumpleaños etc...) empresas (reactivación y activación - equipo de audio y edecanes) Entre algunos de los servicios que ofrecemos están los sig. Dj, iluminación, escenarios, cantante solista, trovador y dueto.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_velazquez_mapa`
--

CREATE TABLE `tb_velazquez_mapa` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_velazquez_mapa`
--

INSERT INTO `tb_velazquez_mapa` (`id`, `titulo`, `link`) VALUES
(1, 'mapa', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.5302850584026!2d-100.56341583010962!3d19.69003509186845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbb3ef72fb05%3A0x881ea3cf12a4f1d9!2sFrancisco%20Gonz%C3%A1lez%20Bocanegra%203%2C%20Bellavista%2C%2061100%20Cdad.%20Hidalgo%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1714600667612!5m2!1ses-419!2smx\" width=\"500\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_velazquez_perfil`
--

CREATE TABLE `tb_velazquez_perfil` (
  `id` int(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_velazquez_perfil`
--

INSERT INTO `tb_velazquez_perfil` (`id`, `titulo`, `imagen`) VALUES
(1, 'perfil', '1715459539_logo.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pruba`
--
ALTER TABLE `pruba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agencias`
--
ALTER TABLE `tb_agencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agencias_categoria`
--
ALTER TABLE `tb_agencias_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_banner`
--
ALTER TABLE `tb_agonzalez_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_datos`
--
ALTER TABLE `tb_agonzalez_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_galeria`
--
ALTER TABLE `tb_agonzalez_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_horario`
--
ALTER TABLE `tb_agonzalez_horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_icono`
--
ALTER TABLE `tb_agonzalez_icono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_info`
--
ALTER TABLE `tb_agonzalez_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_info2`
--
ALTER TABLE `tb_agonzalez_info2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_mapa`
--
ALTER TABLE `tb_agonzalez_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_agonzalez_perfil`
--
ALTER TABLE `tb_agonzalez_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_algobonito_banner`
--
ALTER TABLE `tb_algobonito_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_algobonito_datos`
--
ALTER TABLE `tb_algobonito_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_algobonito_galeria`
--
ALTER TABLE `tb_algobonito_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_algobonito_horario`
--
ALTER TABLE `tb_algobonito_horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_algobonito_icono`
--
ALTER TABLE `tb_algobonito_icono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_algobonito_info`
--
ALTER TABLE `tb_algobonito_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_algobonito_mapa`
--
ALTER TABLE `tb_algobonito_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_algobonito_perfil`
--
ALTER TABLE `tb_algobonito_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_anuncios`
--
ALTER TABLE `tb_anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_biencomida`
--
ALTER TABLE `tb_biencomida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_bienvenida`
--
ALTER TABLE `tb_bienvenida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_categorias_moda`
--
ALTER TABLE `tb_categorias_moda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_comida`
--
ALTER TABLE `tb_comida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_comida_rapida_categorias`
--
ALTER TABLE `tb_comida_rapida_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_comida_rapida_inicio`
--
ALTER TABLE `tb_comida_rapida_inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_conecta_banner`
--
ALTER TABLE `tb_conecta_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_conecta_datos`
--
ALTER TABLE `tb_conecta_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_conecta_galeria`
--
ALTER TABLE `tb_conecta_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_conecta_horario`
--
ALTER TABLE `tb_conecta_horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_conecta_icono`
--
ALTER TABLE `tb_conecta_icono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_conecta_info`
--
ALTER TABLE `tb_conecta_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_conecta_mapa`
--
ALTER TABLE `tb_conecta_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_conecta_perfil`
--
ALTER TABLE `tb_conecta_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_configuracion`
--
ALTER TABLE `tb_configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_datos_nosotros`
--
ALTER TABLE `tb_datos_nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_datos_team`
--
ALTER TABLE `tb_datos_team`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_datos_team_titulo`
--
ALTER TABLE `tb_datos_team_titulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_iconos`
--
ALTER TABLE `tb_iconos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_kings_banner`
--
ALTER TABLE `tb_kings_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_kings_datos`
--
ALTER TABLE `tb_kings_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_kings_galeria`
--
ALTER TABLE `tb_kings_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_kings_horario`
--
ALTER TABLE `tb_kings_horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_kings_icono`
--
ALTER TABLE `tb_kings_icono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_kings_info`
--
ALTER TABLE `tb_kings_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_kings_mapa`
--
ALTER TABLE `tb_kings_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_kings_perfil`
--
ALTER TABLE `tb_kings_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_nosotros_contacto_mapa`
--
ALTER TABLE `tb_nosotros_contacto_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_nosotros_datos2`
--
ALTER TABLE `tb_nosotros_datos2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_nosotros_icono`
--
ALTER TABLE `tb_nosotros_icono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_nosotros_titulo`
--
ALTER TABLE `tb_nosotros_titulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_nosotros_titulo_contacto`
--
ALTER TABLE `tb_nosotros_titulo_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_noticias`
--
ALTER TABLE `tb_noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_noticias_descripcion`
--
ALTER TABLE `tb_noticias_descripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_noticias_galeria`
--
ALTER TABLE `tb_noticias_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_noticias_inicio`
--
ALTER TABLE `tb_noticias_inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_banner`
--
ALTER TABLE `tb_ocampo_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_datos`
--
ALTER TABLE `tb_ocampo_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_datos_direccion`
--
ALTER TABLE `tb_ocampo_datos_direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_galeria`
--
ALTER TABLE `tb_ocampo_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_horario`
--
ALTER TABLE `tb_ocampo_horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_icono`
--
ALTER TABLE `tb_ocampo_icono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_info`
--
ALTER TABLE `tb_ocampo_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_mapa`
--
ALTER TABLE `tb_ocampo_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ocampo_perfil`
--
ALTER TABLE `tb_ocampo_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_peperonis_banner`
--
ALTER TABLE `tb_peperonis_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_peperonis_datos`
--
ALTER TABLE `tb_peperonis_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_peperonis_datos_titulo`
--
ALTER TABLE `tb_peperonis_datos_titulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_peperonis_galeria`
--
ALTER TABLE `tb_peperonis_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_peperonis_horario`
--
ALTER TABLE `tb_peperonis_horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_peperonis_icono`
--
ALTER TABLE `tb_peperonis_icono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_peperonis_mapa`
--
ALTER TABLE `tb_peperonis_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_peperonis_perfil`
--
ALTER TABLE `tb_peperonis_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_pizzerias`
--
ALTER TABLE `tb_pizzerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_servicios`
--
ALTER TABLE `tb_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_servicios_categorias`
--
ALTER TABLE `tb_servicios_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_terminos_condiciones`
--
ALTER TABLE `tb_terminos_condiciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_terminos_descripcion`
--
ALTER TABLE `tb_terminos_descripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_terminos_titulo`
--
ALTER TABLE `tb_terminos_titulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_titulo_moda`
--
ALTER TABLE `tb_titulo_moda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_titulo_noticias`
--
ALTER TABLE `tb_titulo_noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_velazquez_banner`
--
ALTER TABLE `tb_velazquez_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_velazquez_datos`
--
ALTER TABLE `tb_velazquez_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_velazquez_galeria`
--
ALTER TABLE `tb_velazquez_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_velazquez_icono`
--
ALTER TABLE `tb_velazquez_icono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_velazquez_info`
--
ALTER TABLE `tb_velazquez_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_velazquez_mapa`
--
ALTER TABLE `tb_velazquez_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_velazquez_perfil`
--
ALTER TABLE `tb_velazquez_perfil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pruba`
--
ALTER TABLE `pruba`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_agencias`
--
ALTER TABLE `tb_agencias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_agencias_categoria`
--
ALTER TABLE `tb_agencias_categoria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_banner`
--
ALTER TABLE `tb_agonzalez_banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_datos`
--
ALTER TABLE `tb_agonzalez_datos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_galeria`
--
ALTER TABLE `tb_agonzalez_galeria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_horario`
--
ALTER TABLE `tb_agonzalez_horario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_icono`
--
ALTER TABLE `tb_agonzalez_icono`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_info`
--
ALTER TABLE `tb_agonzalez_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_info2`
--
ALTER TABLE `tb_agonzalez_info2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_mapa`
--
ALTER TABLE `tb_agonzalez_mapa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_agonzalez_perfil`
--
ALTER TABLE `tb_agonzalez_perfil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_algobonito_banner`
--
ALTER TABLE `tb_algobonito_banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_algobonito_datos`
--
ALTER TABLE `tb_algobonito_datos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_algobonito_galeria`
--
ALTER TABLE `tb_algobonito_galeria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_algobonito_horario`
--
ALTER TABLE `tb_algobonito_horario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_algobonito_icono`
--
ALTER TABLE `tb_algobonito_icono`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_algobonito_info`
--
ALTER TABLE `tb_algobonito_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_algobonito_mapa`
--
ALTER TABLE `tb_algobonito_mapa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_algobonito_perfil`
--
ALTER TABLE `tb_algobonito_perfil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_anuncios`
--
ALTER TABLE `tb_anuncios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_biencomida`
--
ALTER TABLE `tb_biencomida`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_bienvenida`
--
ALTER TABLE `tb_bienvenida`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `tb_categorias_moda`
--
ALTER TABLE `tb_categorias_moda`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_comida`
--
ALTER TABLE `tb_comida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tb_comida_rapida_categorias`
--
ALTER TABLE `tb_comida_rapida_categorias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_comida_rapida_inicio`
--
ALTER TABLE `tb_comida_rapida_inicio`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_conecta_banner`
--
ALTER TABLE `tb_conecta_banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_conecta_datos`
--
ALTER TABLE `tb_conecta_datos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_conecta_galeria`
--
ALTER TABLE `tb_conecta_galeria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_conecta_horario`
--
ALTER TABLE `tb_conecta_horario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_conecta_icono`
--
ALTER TABLE `tb_conecta_icono`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_conecta_info`
--
ALTER TABLE `tb_conecta_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_conecta_mapa`
--
ALTER TABLE `tb_conecta_mapa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_conecta_perfil`
--
ALTER TABLE `tb_conecta_perfil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_configuracion`
--
ALTER TABLE `tb_configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_datos_nosotros`
--
ALTER TABLE `tb_datos_nosotros`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_datos_team`
--
ALTER TABLE `tb_datos_team`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_datos_team_titulo`
--
ALTER TABLE `tb_datos_team_titulo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_iconos`
--
ALTER TABLE `tb_iconos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_kings_banner`
--
ALTER TABLE `tb_kings_banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_kings_datos`
--
ALTER TABLE `tb_kings_datos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_kings_galeria`
--
ALTER TABLE `tb_kings_galeria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tb_kings_horario`
--
ALTER TABLE `tb_kings_horario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_kings_icono`
--
ALTER TABLE `tb_kings_icono`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_kings_info`
--
ALTER TABLE `tb_kings_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_kings_mapa`
--
ALTER TABLE `tb_kings_mapa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_kings_perfil`
--
ALTER TABLE `tb_kings_perfil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_nosotros_contacto_mapa`
--
ALTER TABLE `tb_nosotros_contacto_mapa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_nosotros_datos2`
--
ALTER TABLE `tb_nosotros_datos2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_nosotros_icono`
--
ALTER TABLE `tb_nosotros_icono`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_nosotros_titulo`
--
ALTER TABLE `tb_nosotros_titulo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_nosotros_titulo_contacto`
--
ALTER TABLE `tb_nosotros_titulo_contacto`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_noticias`
--
ALTER TABLE `tb_noticias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_noticias_descripcion`
--
ALTER TABLE `tb_noticias_descripcion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_noticias_galeria`
--
ALTER TABLE `tb_noticias_galeria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_noticias_inicio`
--
ALTER TABLE `tb_noticias_inicio`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_banner`
--
ALTER TABLE `tb_ocampo_banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_datos`
--
ALTER TABLE `tb_ocampo_datos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_datos_direccion`
--
ALTER TABLE `tb_ocampo_datos_direccion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_galeria`
--
ALTER TABLE `tb_ocampo_galeria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_horario`
--
ALTER TABLE `tb_ocampo_horario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_icono`
--
ALTER TABLE `tb_ocampo_icono`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_info`
--
ALTER TABLE `tb_ocampo_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_mapa`
--
ALTER TABLE `tb_ocampo_mapa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_ocampo_perfil`
--
ALTER TABLE `tb_ocampo_perfil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_peperonis_banner`
--
ALTER TABLE `tb_peperonis_banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_peperonis_datos`
--
ALTER TABLE `tb_peperonis_datos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_peperonis_datos_titulo`
--
ALTER TABLE `tb_peperonis_datos_titulo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_peperonis_galeria`
--
ALTER TABLE `tb_peperonis_galeria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_peperonis_horario`
--
ALTER TABLE `tb_peperonis_horario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_peperonis_icono`
--
ALTER TABLE `tb_peperonis_icono`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_peperonis_mapa`
--
ALTER TABLE `tb_peperonis_mapa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_peperonis_perfil`
--
ALTER TABLE `tb_peperonis_perfil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_pizzerias`
--
ALTER TABLE `tb_pizzerias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_servicios`
--
ALTER TABLE `tb_servicios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_servicios_categorias`
--
ALTER TABLE `tb_servicios_categorias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_terminos_condiciones`
--
ALTER TABLE `tb_terminos_condiciones`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_terminos_descripcion`
--
ALTER TABLE `tb_terminos_descripcion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_terminos_titulo`
--
ALTER TABLE `tb_terminos_titulo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_titulo_moda`
--
ALTER TABLE `tb_titulo_moda`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_titulo_noticias`
--
ALTER TABLE `tb_titulo_noticias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_velazquez_banner`
--
ALTER TABLE `tb_velazquez_banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_velazquez_datos`
--
ALTER TABLE `tb_velazquez_datos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_velazquez_galeria`
--
ALTER TABLE `tb_velazquez_galeria`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_velazquez_icono`
--
ALTER TABLE `tb_velazquez_icono`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_velazquez_info`
--
ALTER TABLE `tb_velazquez_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_velazquez_mapa`
--
ALTER TABLE `tb_velazquez_mapa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_velazquez_perfil`
--
ALTER TABLE `tb_velazquez_perfil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
