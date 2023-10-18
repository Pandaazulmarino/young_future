-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 12:45:31
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `young_future`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `universidad` varchar(250) NOT NULL,
  `interes` varchar(50) NOT NULL,
  `grupo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carrera`, `descripcion`, `universidad`, `interes`, `grupo`) VALUES
(1, 'Ingeniería en sistema', 'La ingeniería de sistemas es un campo interdisciplinario de la ingeniería que permite estudiar y comprender la realidad, con el propósito de implementar u optimizar sistemas complejos.', 'u de a', 'Tecnología', 'Ingeniería'),
(2, 'Medicina', ' Ciencia que permite prevenir y curar las enfermedades del cuerpo humano.', 'u de a', 'Salud', 'Ciencias'),
(3, 'Enfermería', 'Abarca el cuidado autónomo y colaborativo de personas de todas las edades, familias, grupos y comunidades, enfermos o sanos y en todos los entornos.', 'CES', 'Salud', 'Ciencias'),
(4, 'Biología', 'Ciencia que trata de los seres vivos considerando su estructura, funcionamiento, evolución, distribución y relaciones.', 'Universidad Nacional', 'Salud', 'Ciencias'),
(5, 'Química', 'Ciencia que tiene por finalidad no sólo descubrir, sino también, y sobre todo, crear, ya que es el arte de hacer compleja la materia.', 'EAFIT', 'Salud', 'Ciencias'),
(6, 'Fisioterapia', 'Especialidad médica que tiene por objeto la valoración, diagnóstico, prevención y tratamiento de las discapacidades derivadas de enfermedades y accidentes,', 'CES', 'Salud', 'Ciencias'),
(7, 'Psicología', 'Ciencia que estudia los procesos mentales.', 'Pontificia bolivariana', 'Salud', 'Ciencias'),
(8, 'Ciencia de datos ', 'Estudio de datos con el fin de extraer información significativa para empresas', 'Pontificia bolivariana', 'Computación', 'Tecnología'),
(9, 'Administración de empresas', 'Planificar, organizar y dirigir planes tendientes a la formación y desarrollo de negocios.', 'Luis Amigó', 'Finanzas', 'Negocios'),
(10, 'Contabilidad', 'Proceso de registrar, analizar e interpretar de manera sistemática la información financiera de una entidad u organización. ', 'Politécnico Grancolobiano ', 'Finanzas', 'Negocios'),
(11, 'Marketing', 'Conjunto de técnicas, estrategias y procesos que una marca o empresa implementa para crear, comunicar, intercambiar y entregar ofertas ', 'EAFIT', 'Finanzas', 'Negocios'),
(12, 'Astronomía', 'Ciencia que estudia los cuerpos celestes del universo,', 'u de a', 'Naturaleza', 'Ciencias'),
(13, 'Ingeniería mecánica', 'Capacitado para: Diseñar e instalar equipos mecánicos o térmicos; ', 'EAFIT', 'Tecnología', 'Ingeniería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencia`
--

CREATE TABLE `sugerencia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sugerencia` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sugerencia`
--

INSERT INTO `sugerencia` (`id`, `nombre`, `email`, `sugerencia`) VALUES
(1, 'vale', 'vale.ochoa2403@gmail.com', 'funciona'),
(2, 'vale', 'ffn@gmail.com', 'dime que si funcionas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `interes` varchar(50) NOT NULL,
  `perfil` enum('1','2') NOT NULL DEFAULT '2',
  `estado` enum('1','2') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `apellido`, `email`, `contraseña`, `interes`, `perfil`, `estado`) VALUES
(1, 'pandaazulmarino', 'vale', 'ochoa', 'vale.ochoa2403@gmail.com', '123', '3', '1', '1'),
(2, 'Mariana', 'azul', 'azul', 'ffn@gmail.com', '456', 'musica', '2', '1'),
(3, 'Salem la más linda', 'Salem María', 'Roldán Ochoa', 'salem@gmail.com', 'salem', 'musica', '2', '1'),
(4, 'Azulito y mordaito', 'Azul', 'Morado', 'azulmorado@gmail.com', 'Azulito', 'intereses', '', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
