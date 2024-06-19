-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-01-2021 a las 04:53:57
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanvicente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `usuario`, `contrasena`, `nombre_apellido`) VALUES
(1, 'admin', 'admin', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `paciente` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_especialista` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` enum('asignado','atendido','cancelada') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `observacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `paciente`, `id_especialidad`, `id_especialista`, `fecha`, `hora`, `estado`, `observacion`) VALUES
(7, 'joel espinoza', 1, 1, '2030-12-12', '12:12:00', 'cancelada', 'prueba'),
(8, 'ADRIAN', 1, 1, '2020-11-30', '11:45:00', 'atendido', 'dolor de cbez'),
(9, 'michelle hernnandez', 1, 1, '2021-02-10', '11:45:00', 'asignado', 'Enfermedad'),
(10, 'michelle hernnandez', 1, 1, '2021-02-10', '11:45:00', 'asignado', 'Enfermedad'),
(12, 'Luis Bravo Gonzalez', 7, 3, '2021-01-05', '14:20:00', 'asignado', 'Ingreso por medicina General'),
(14, 'Michelle Tomala', 7, 3, '2021-01-06', '12:45:00', 'asignado', 'Primera cita'),
(15, 'Michelle Tomala', 1, 1, '2020-12-03', '19:00:00', 'asignado', ''),
(16, 'ADRIAN', 1, 1, '2020-12-03', '10:05:00', 'asignado', ''),
(17, 'Michelle Tomala', 1, 1, '2020-12-03', '14:14:00', 'asignado', ''),
(18, 'Michelle Tomala', 1, 1, '2020-12-03', '14:05:00', 'asignado', ''),
(19, 'Michelle Tomala', 1, 1, '2020-12-03', '16:05:00', 'asignado', ''),
(20, 'Michelle Tomala', 1, 1, '2020-12-03', '16:16:00', 'asignado', ''),
(21, 'Nathaly Uvidia', 1, 1, '2020-12-04', '16:14:00', 'cancelada', ''),
(22, 'Nathaly Uvidia', 1, 1, '2020-12-04', '00:17:00', 'cancelada', ''),
(23, 'Nathaly Uvidia', 1, 1, '2020-12-04', '10:17:00', 'cancelada', 'a'),
(24, 'Michelle Tomala', 1, 1, '2020-12-04', '05:19:00', 'cancelada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre_contacto`, `telefono`, `correo`, `mensaje`) VALUES
(1, 'MARIA GONZALES', '0921478453', 'maria@phpzag.com', 'esto es una prueba'),
(2, 'Ivan Morales', '0987451272', 'ivangkf@gmail.com', 'Desearia mas Información y una lista detallada de los servicios activos para niños ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` int(11) NOT NULL,
  `nombre_especialidad` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_especialidad`, `nombre_especialidad`) VALUES
(1, 'cirujanos'),
(4, 'terapeuta'),
(7, 'Medicina General'),
(8, 'Pediatría'),
(9, 'Cirugía General'),
(10, 'Ginecología'),
(11, 'Obstetricia'),
(12, 'Cardiologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialista`
--

CREATE TABLE `especialista` (
  `id_especialista` int(11) NOT NULL,
  `cedula_esp` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_doctor` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_especialidad` int(10) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especialista`
--

INSERT INTO `especialista` (`id_especialista`, `cedula_esp`, `nombre_doctor`, `telefono`, `direccion`, `email`, `fecha_nacimiento`, `genero`, `id_especialidad`) VALUES
(1, '0954843579', 'miguel aquinos', '0986772623', 'coop nueva prosperina mz 2319 ', 'michelletomala@gmail.com', '2005-12-12', 'Femenino', 1),
(3, '0925879610', 'Dr Pedro Vicente Yagual Olivares', '0980266506', 'Cristóbal Colón ', 'Yagual@gmail.com', '1985-11-03', 'Masculino', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(10) NOT NULL,
  `cod_paciente` int(100) NOT NULL,
  `id_paciente` int(60) NOT NULL,
  `cedula` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` enum('Masculino','Femenino') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(2225) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(225) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(225) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `civil` enum('Soltero/a','Casado/a','Viudo/a') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mot` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `recom` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `cod_paciente`, `id_paciente`, `cedula`, `fecha_nacimiento`, `genero`, `correo`, `edad`, `pais`, `provincia`, `ciudad`, `direccion`, `telefono`, `civil`, `mot`, `recom`) VALUES
(2, 1, 1, '0954843579', '1998-12-12', 'Femenino', 'michelletomala04@gmail.com', '12', 'Ecuador', 'guayas', 'guayas', 'florida', '0938328452', 'Soltero/a', '11', '188888'),
(3, 1, 1, '0954843579', '1998-12-12', 'Femenino', 'michelletomala04@gmail.com', '22', 'ecuador', 'Guayas', 'Guayaquil                               ', 'Guasmo Norte', '0987414512', 'Soltero/a', 'prueba', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `cedula` char(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` enum('Femenino','Masculino') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `cedula`, `nombre_apellido`, `correo`, `contrasena`, `fecha_nacimiento`, `sexo`) VALUES
(1, '0954843579', 'Michelle Tomala', 'michelletomala04@gmail.com', '12', '1998-12-12', 'Femenino'),
(4, '0952062842', 'ADRIAN', 'adrian955@gmail.com', '123', '1998-12-12', 'Masculino'),
(6, '090922323', 'joel espinoza', 'espinoza23@gmail.com', '12', '1998-12-12', 'Masculino'),
(7, '0921684585', 'Nathaly Uvidia', 'nathalyuvidiahsm25@hotmail.com', 'hsm1995', '1995-12-25', 'Femenino'),
(8, '0922294087', 'oliver santos', 'oliveryagualsantos16@gmail.com', 'Oliver', '1997-02-17', 'Masculino'),
(9, '09411818376', 'JOHANNA AQUINO', 'johanna07ostin2213@gmail.com', '12', '2020-07-15', 'Femenino'),
(10, '0986987849', 'michelle hernnandez', 'michellehernandez04@gmail.com', '1234', '2001-11-25', 'Femenino'),
(11, '0909850679', 'Luis Bravo Gonzalez', 'luisgonz20@gmail.com', 'luis2020', '1993-01-27', 'Masculino'),
(12, '0985471267', 'Carlos Merlin', 'admin@hmkvm.com', 'admin', '2020-11-28', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetario`
--

CREATE TABLE `recetario` (
  `id_recetario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `paciente` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sintomas` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `medicamento` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `recetario`
--

INSERT INTO `recetario` (`id_recetario`, `fecha`, `paciente`, `sintomas`, `medicamento`, `descripcion`) VALUES
(1, '2020-09-03', 'joel espinoza', 'fiebres', 'paracetamol', 'cuatro veces al dia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_especialidad` (`id_especialidad`,`id_especialista`),
  ADD KEY `id_especialista` (`id_especialista`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `especialista`
--
ALTER TABLE `especialista`
  ADD PRIMARY KEY (`id_especialista`),
  ADD KEY `id_especialidad` (`id_especialidad`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `cod_paciente` (`cod_paciente`,`id_paciente`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `recetario`
--
ALTER TABLE `recetario`
  ADD PRIMARY KEY (`id_recetario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `especialista`
--
ALTER TABLE `especialista`
  MODIFY `id_especialista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `recetario`
--
ALTER TABLE `recetario`
  MODIFY `id_recetario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidad` (`id_especialidad`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_especialista`) REFERENCES `especialista` (`id_especialista`);

--
-- Filtros para la tabla `especialista`
--
ALTER TABLE `especialista`
  ADD CONSTRAINT `especialista_ibfk_1` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidad` (`id_especialidad`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`cod_paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
