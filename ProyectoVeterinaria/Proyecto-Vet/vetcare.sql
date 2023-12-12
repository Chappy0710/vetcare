-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2023 a las 23:23:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vetcare`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanas`
--

CREATE TABLE `campanas` (
  `id_campana` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `campanas`
--

INSERT INTO `campanas` (`id_campana`, `nombre`, `descripcion`, `fecha`, `lugar`) VALUES
(2, 'Campaña de Castración', 'Castración gratuita', '2023-12-30', 'Heredia Centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `producto` varchar(30) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `producto`, `descripcion`, `image`) VALUES
(1, 'ParvoVirus', 'Suspencion Inyectable', 'https://cdn.discordapp.com/attachments/949900413392519198/1184212442667040779/parvovirusVACUNA.webp?ex=658b26c7&is=6578b1c7&hm=e339269cb24d9d74d9fb1732b67aac0ab0e33515fe7107c16fb15e169cecb062&'),
(3, 'Recombitek', 'Vacuna adenovirus contra moquillo', 'https://cdn.discordapp.com/attachments/949900413392519198/1184212394533204008/recomibekVACUNA.png?ex=658b26bc&is=6578b1bc&hm=f4622501c5e3e1c5baa6327107e70bacc73304d12db9d343a3bfb2fdd339e9b3&'),
(4, 'Canomune', 'Vacuna para la prevencion de moquillo', 'https://cdn.discordapp.com/attachments/949900413392519198/1184212411620806787/canomugePASTILLA.jpg?ex=658b26c0&is=6578b1c0&hm=40dd383c26131cfdb3264265ab3644bc39b39d6593357d075abf6f9f9d65518d&');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `id_servicio` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `id_servicio`, `id_user`, `fecha`, `hora`, `id_medico`, `estado`, `costo`) VALUES
(2, 2, 16, '2023-12-25', '19:10:00', 2, 'Atendida', 30000),
(4, 2, 16, '2023-12-01', '12:00:00', 2, 'Pendiente', 15000),
(5, 2, 16, '2023-11-17', '15:25:00', 2, 'Pendiente', 15000),
(7, 2, 16, '2023-11-30', '16:25:00', 2, 'Atendida', 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `primer_apellido` varchar(15) DEFAULT NULL,
  `segundo_apellido` varchar(15) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id_medico`, `nombre`, `primer_apellido`, `segundo_apellido`, `telefono`, `correo`) VALUES
(2, 'Aaron', 'Chaves', 'Beita', '8370 8649', 'heidricaaron0721@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

CREATE TABLE `resenas` (
  `id_resena` int(11) NOT NULL,
  `resena` varchar(200) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resenas`
--

INSERT INTO `resenas` (`id_resena`, `resena`, `calificacion`) VALUES
(1, 'Buen servicio y calidad en los productos', 9),
(2, 'No habían vacunas para ornitorrinco', 3),
(3, 'Hola xd', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `descripcion`, `image`) VALUES
(2, 'Consulta General', 'Examen de rutina para la salud de tu mascota.', 'https://cdn.discordapp.com/attachments/949900413392519198/1179804883851944047/Consulta_General.jpg?ex=657b1dec&is=6568a8ec&hm=7a55886bfcf35358c95cb6e4cbe225a9078ce42e6b088b40d33918baaabcff71&'),
(9, 'Vacunacion', 'Protege a tu mascota contra diversas enfermedades.', 'https://cdn.discordapp.com/attachments/949900413392519198/1179819914538782740/vacuna.jpeg?ex=657b2beb&is=6568b6eb&hm=d730045154dc9969dabb9caf5a5e7362de8462b0e6f4ba218cb433f3f820ead8&'),
(10, 'Cirugia', 'Procedimientos quirúrgicos para el bienestar de tu mascota.', 'https://cdn.discordapp.com/attachments/949900413392519198/1179825035746218124/cirugia.jpeg?ex=657b30b0&is=6568bbb0&hm=f7b532bea738e5cc29ee75f286a5cb99423d59edfd01e7591cd684c22502d9a5&');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `name`, `email`, `user`, `password`, `rol`) VALUES
(2, 'Aaron', 'aaron@gmail.com', 'chappy', '0721', 'admin'),
(12, 'PRUEBAHASH', 'hash@gmail.com', 'hash', '$2y$10$ae3SzydLXe8L7bjo2NczYeW', 'usuario'),
(13, 'hash2', 'hash2@gmail.com', 'hash2', '$2y$10$llTdvQJWOHB3/tuRqAXlouT', 'usuario'),
(14, 'hash3', 'hash3@gmail.com', 'hash3', '$2y$10$jqsEkQ266fxvH8j/7s/CY..', 'usuario'),
(15, 'hash0721', 'hashhash@gmail.com', 'hash5', '$2y$10$rFJGOXCHhJtbIpXGl.nqse2', 'usuario'),
(16, 'belen', 'heidricrico@gmail.com', 'belen1', '0721', 'usuario'),
(17, 'Maria Belen', 'belen2@gmail.com', 'belen2', '0721', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campanas`
--
ALTER TABLE `campanas`
  ADD PRIMARY KEY (`id_campana`);

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_medico` (`id_medico`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indices de la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD PRIMARY KEY (`id_resena`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campanas`
--
ALTER TABLE `campanas`
  MODIFY `id_campana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `resenas`
--
ALTER TABLE `resenas`
  MODIFY `id_resena` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id_medico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
