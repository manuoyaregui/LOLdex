CREATE schema if not exists loldexbd;
use loldexbd;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 19-09-2022 a las 04:21:34
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loldex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campeon`
--

CREATE TABLE `campeon` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `imagen` text NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campeon`
--

INSERT INTO `campeon` (`id`, `numero`, `imagen`, `nombre`, `tipo`, `descripcion`, `rol`) VALUES
(1, 1, '', 'Ahri', 'Mago', 'Ahri, conectada de forma innata con el poder latente de Runaterra, es una vastaya que puede moldear la magia en orbes de energía pura. Se divierte jugueteando con su presa y manipulando sus emociones, antes de devorar su esencia vital. A pesar de su naturaleza predadora, Ahri conserva cierta empatía porque recibe destellos de los recuerdos de cada alma que consume.', 'Mid'),
(2, 2, '', 'Caitlyn', 'Tirador', 'Reconocida como la mejor pacificadora, Caitlyn también es la mejor oportunidad de Piltóver para deshacerse de los elementos criminales elusivos de su ciudad. A veces hace equipo con Vi y es un buen contrapunto para la naturaleza más impulsiva de su compañera. Aunque carga un rifle hextech único, el arma más poderosa de Caitlyn es su intelecto superior, el cual le permite tender trampas elaboradas para malhechores que son suficientemente tontos para operar en la Ciudad del Progreso.', 'ADC'),
(3, 3, '', 'Olaf', 'Luchador', 'Como una fuerza imparable de destrucción, el portador de hachas Olaf no quiere nada más que morir en glorioso combate. Proveniente de la brutal península freljordiana de Lokfar, alguna vez recibió una profecía que predecía su muerte pacífica, que es el destino del cobarde y un gran insulto entre su gente. Buscando la muerte e impulsado por la ira, Olaf masacró todo cuanto encontró en la tierra, eliminando un gran número de guerreros y bestias legendarias en busca de un oponente que lo detuviera. Ahora, como elemento brutal de la Garra Invernal, busca su fin en las grandes guerras que se acercan.', 'Top'),
(4, 4, '', 'Zed', 'Asesino', 'Implacable y despiadado, Zed es el líder de la Orden de la Sombra, una organización que él creó con la intención de militarizar las tradiciones de artes marciales y mágicas de Jonia para repeler a los invasores noxianos. Durante la guerra, la desesperación lo llevó a revelar la forma secreta de las sombras, una malévola magia espiritual tan poderosa como corrupta y peligrosa. Zed dominó todas esas técnicas prohibidas para destruir cualquier amenaza para su nación o su nueva orden.', 'Mid'),
(5, 5, '', 'Braum', 'Tanque', 'Dotado de bíceps masivos y un corazón aún más grande, Braum es un querido héroe de Fréljord. Todas las tabernas al norte de Frostheld brindan por su fuerza legendaria; se dice que taló un bosque de robles en una sola noche y que hizo añicos una montaña entera con un solo golpe. Con una puerta de bóveda encantada como escudo, Braum vaga el norte congelado portando una sonrisa bigotona tan grande como sus músculos: un verdadero amigo para aquellos que lo necesitan.', 'Supp'),
(6, 6, '', 'Ziggs', 'Mago', 'Con un amor por las grandes bombas y los fusibles cortos, el yordle Ziggs es una explosiva fuerza de la naturaleza. Como asistente de un inventor en Piltóver, estaba aburrido de su predecible vida y se hizo amigo de una loca bombardera de cabello azul llamada Jinx. Después de una loca noche en la ciudad, Ziggs tomó su consejo y se mudó a Zaun, donde ahora explora sus fascinaciones con más libertad, aterrorizando tanto a los químicos como a ciudadanos comunes en su misión incansable de hacer estallar las cosas.', 'Mid');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campeon`
--
ALTER TABLE `campeon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campeon`
--
ALTER TABLE `campeon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
