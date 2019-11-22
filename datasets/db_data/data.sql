-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-11-2019 a las 21:04:46
-- Versión del servidor: 8.0.12
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mipecera`
--

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_07_183559_create_tanks_table', 1),
(4, '2018_12_07_183644_create_basic_materials_table', 1),
(5, '2018_12_07_183813_create_decorations_table', 1),
(6, '2018_12_07_183814_create_ornaments_table', 1),
(7, '2018_12_07_183954_create_fish_table', 1),
(8, '2018_12_07_184040_create_packages_table', 1),
(9, '2018_12_07_184316_create_prices_table', 1),
(10, '2018_12_07_184341_create_clients_table', 1),
(11, '2018_12_07_184347_create_sessions_table', 1),
(12, '2019_01_09_192419_create_tank_ornaments_table', 1),
(13, '2019_01_24_234105_create_newsletter_table', 1);


--
-- Volcado de datos para la tabla `tanks`
--

INSERT INTO `tanks` (`id`, `name`, `capacity`, `width`, `height`, `depth`, `fish_sweet`, `fish_salty`, `medium_ornaments`, `big_ornaments`, `color`, `cabinet`, `created_at`, `updated_at`) VALUES
(1, 'MT-50', 80, 45, 50, 50, 14, 3, 1, 0, 'Negro o Plata', 0, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(2, 'EA-80', 148, 80, 50, 40, 16, 5, 1, 0, 'Negro Mate', 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(3, 'EA-100', 187, 100, 56, 40, 18, 6, 2, 0, 'Negro Mate', 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(4, 'EA-120', 246, 120, 60, 40, 25, 8, 1, 1, 'Negro Mate', 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(5, 'EA-150', 472, 150, 68, 53, 40, 10, 1, 2, 'Negro Mate', 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12');

--
-- Volcado de datos para la tabla `basic_materials`
--

INSERT INTO `basic_materials` (`id`, `name`, `water_type`, `material`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Agua Dulce', 'sweet', 'water', 'Pequeño Ecosistema creado para albergar peces que normalmente encontraríamos en ríos, lagos y lagunas de todo el mundo.\nConsta de lo siguiente:\nAcuario con sistema de filtración.\nMueble o gabinete para acuario.\nSustrato o grava natural.\nDecoración (artificial o natural).\nTapa con iluminación.\nPeces Tropicales.', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(2, 'Agua Salada', 'salty', 'water', 'Este Ecosistema por su complejidad Biológica puede albergar una cantidad menor de peces a diferencia del de agua dulce; pero se ve compensado por la belleza de los mismos.\nConsta de lo siguiente:\nAcuario con sistema de Filtración.\nMueble o gabinete para acuario.\nAragonita como sustrato.\nPiedra base como decoración y base biológica.\nSistemas de filtración especiales para mantener un acuario sano y sin problemas.\nTapa con iluminación.\nPeces Marinos.', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(3, 'Aragonita', 'salty', 'floor', NULL, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(4, 'Sello de Colores', 'sweet', 'floor', NULL, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(5, 'Cacahuate', 'sweet', 'floor', NULL, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(6, 'Grano de Oro', 'sweet', 'floor', NULL, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(7, 'Gravilla', 'sweet', 'floor', NULL, '2019-11-22 21:04:12', '2019-11-22 21:04:12');

--
-- Volcado de datos para la tabla `decorations`
--

INSERT INTO `decorations` (`id`, `name`, `water_type`, `created_at`, `updated_at`) VALUES
(1, 'Paquete 1', 'sweet', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(2, 'Paquete 2', 'sweet', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(3, 'Paquete 3', 'sweet', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(4, 'Decoración', 'salty', '2019-11-22 21:04:12', '2019-11-22 21:04:12');

--
-- Volcado de datos para la tabla `ornaments`
--

INSERT INTO `ornaments` (`id`, `name`, `size`, `created_at`, `updated_at`) VALUES
(1, 'Helicoptero Hundido', 0, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(2, 'Casa Bob Esponja', 0, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(3, 'Faro de Luz', 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(4, 'Casa Calamardo', 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(5, 'Barco Pirata', 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(6, 'Pinguino Feliz', 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(7, 'Musgo', 0, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(8, 'Cofre', 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(9, 'Pez Globo', 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12');

--
-- Volcado de datos para la tabla `tank_ornaments`
--

INSERT INTO `tank_ornaments` (`id`, `tank_id`, `ornament_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(2, 1, 7, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(3, 1, 8, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(4, 1, 9, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(5, 2, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(6, 2, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(7, 2, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(8, 2, 6, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(9, 2, 7, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(10, 2, 8, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(11, 2, 9, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(12, 3, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(13, 3, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(14, 3, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(15, 3, 6, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(16, 3, 7, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(17, 3, 8, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(18, 3, 9, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(19, 4, 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(20, 4, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(21, 4, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(22, 4, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(23, 4, 5, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(24, 5, 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(25, 5, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(26, 5, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(27, 5, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(28, 5, 5, '2019-11-22 21:04:12', '2019-11-22 21:04:12');

--
-- Volcado de datos para la tabla `fish`
--

INSERT INTO `fish` (`id`, `name`, `water_type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Japonés o Goldfish', 'sweet', 'a:6:{i:0;s:15:"1 Japonés Moro";i:1;s:26:"1 Japonés Esacma de Perla";i:2;s:21:"1 Japonés Sello Rojo";i:3;s:21:"4 Cebras Transgénica";i:4;s:8:"4 Guppys";i:5;s:23:"1 Gurami de Luz de Luna";}', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(2, 'Tetras', 'sweet', 'a:6:{i:0;s:22:"3 Tetra Fantasma Negro";i:1;s:19:"3 Rasbora Arlequín";i:2;s:16:"3 Tetra Pristela";i:3;s:15:"1 Gato Paleatus";i:4;s:22:"3 Tetra Gota de Sangre";i:5;s:32:"3 Sumatrano Tigre o Transgénico";}', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(3, 'Tiburones', 'sweet', 'a:6:{i:0;s:19:"1 Tiburón Arcoiris";i:1;s:20:"1 Tiburón Cola Roja";i:2;s:13:"4 Platy Coral";i:3;s:21:"2 Gurami Coliza Azúl";i:4;s:24:"3 Ángel Negro o Mármol";i:5;s:14:"1 Botia Payaso";}', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(4, 'Mixto', 'sweet', 'a:6:{i:0;s:18:"1 Cíclido Durazno";i:1;s:16:"2 Sílver Dollar";i:2;s:15:"2 Molly Ballón";i:3;s:26:"3 Tetra Monja Transgénica";i:4;s:13:"2 Espada Roja";i:5;s:15:"2 Tiburón Bala";}', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(5, 'Paquete Marino I', 'salty', 'a:4:{i:0;s:16:"2 Payaso Percula";i:1;s:16:"1 Damisela Azúl";i:2;s:13:"1 Gobio Flama";i:3;s:18:"1 Cardenal Bangái";}', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(6, 'Paquete Marino II', 'salty', 'a:3:{i:0;s:19:"1 Cirujano Amarillo";i:1;s:22:"1 Payaso Tomate Grande";i:2;s:16:"1 Ballesta Niger";}', '2019-11-22 21:04:12', '2019-11-22 21:04:12');

--
-- Volcado de datos para la tabla `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `tank_id`, `water_type`, `floor_id`, `decoration_id`, `ornament_id_1`, `ornament_id_2`, `ornament_id_3`, `fish_id`, `created_at`, `updated_at`) VALUES
(1, 'Paquete de Sala de Espera con Japonés o Goldfish', 'a:6:{i:0;s:15:"1 Japonés Moro";i:1;s:26:"1 Japonés Esacma de Perla";i:2;s:21:"1 Japonés Sello Rojo";i:3;s:21:"4 Cebras Transgénica";i:4;s:8:"4 Guppys";i:5;s:23:"1 Gurami de Luz de Luna";}', 1, 'sweet', 4, 3, 8, NULL, NULL, 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(2, 'Paquete para Casa con Tetras', 'a:6:{i:0;s:22:"3 Tetra Fantasma Negro";i:1;s:19:"3 Rasbora Arlequín";i:2;s:16:"3 Tetra Pristela";i:3;s:15:"1 Gato Paleatus";i:4;s:22:"3 Tetra Gota de Sangre";i:5;s:32:"3 Sumatrano Tigre o Transgénico";}', 1, 'sweet', 6, 1, 9, NULL, NULL, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(3, 'Paquete Oficina con Tiburones', 'a:6:{i:0;s:19:"1 Tiburón Arcoiris";i:1;s:20:"1 Tiburón Cola Roja";i:2;s:13:"4 Platy Coral";i:3;s:21:"2 Gurami Coliza Azúl";i:4;s:24:"3 Ángel Negro o Mármol";i:5;s:14:"1 Botia Payaso";}', 1, 'sweet', 6, 3, 8, NULL, NULL, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(4, 'Paquete Niños Mixto', 'a:6:{i:0;s:18:"1 Cíclido Durazno";i:1;s:16:"2 Sílver Dollar";i:2;s:15:"2 Molly Ballón";i:3;s:26:"3 Tetra Monja Transgénica";i:4;s:13:"2 Espada Roja";i:5;s:15:"2 Tiburón Bala";}', 1, 'sweet', 5, 2, 6, NULL, NULL, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(5, 'Paquete de Agua Salada #1', 'a:4:{i:0;s:16:"2 Payaso Percula";i:1;s:16:"1 Damisela Azúl";i:2;s:13:"1 Gobio Flama";i:3;s:18:"1 Cardenal Bangái";}', 1, 'salty', 3, 4, 7, NULL, NULL, 5, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(6, 'Paquete de Agua Salada #2', 'a:3:{i:0;s:19:"1 Cirujano Amarillo";i:1;s:22:"1 Payaso Tomate Grande";i:2;s:16:"1 Ballesta Niger";}', 1, 'salty', 3, 4, 8, NULL, NULL, 6, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(7, 'Paquete de Sala de Espera con Japonés o Goldfish', 'a:6:{i:0;s:15:"2 Japonés Moro";i:1;s:26:"2 Japonés Esacma de Perla";i:2;s:21:"2 Japonés Sello Rojo";i:3;s:21:"4 Cebras Transgénica";i:4;s:8:"4 Guppys";i:5;s:23:"1 Gurami de Luz de Luna";}', 2, 'sweet', 4, 2, 8, NULL, NULL, 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(8, 'Paquete para Casa con Tetras', 'a:6:{i:0;s:22:"3 Tetra Fantasma Negro";i:1;s:19:"3 Rasbora Arlequín";i:2;s:16:"3 Tetra Pristela";i:3;s:15:"1 Gato Paleatus";i:4;s:22:"4 Tetra Gota de Sangre";i:5;s:32:"4 Sumatrano Tigre o Transgénico";}', 2, 'sweet', 6, 3, 4, NULL, NULL, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(9, 'Paquete Oficina con Tiburones', 'a:6:{i:0;s:19:"1 Tiburón Arcoiris";i:1;s:20:"1 Tiburón Cola Roja";i:2;s:13:"5 Platy Coral";i:3;s:21:"3 Gurami Coliza Azúl";i:4;s:24:"4 Ángel Negro o Mármol";i:5;s:14:"1 Botia Payaso";}', 2, 'sweet', 6, 1, 3, NULL, NULL, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(10, 'Paquete Niños Mixto', 'a:6:{i:0;s:18:"2 Cíclido Durazno";i:1;s:16:"2 Sílver Dollar";i:2;s:15:"3 Molly Ballón";i:3;s:26:"4 Tetra Monja Transgénica";i:4;s:13:"2 Espada Roja";i:5;s:15:"2 Tiburón Bala";}', 2, 'sweet', 5, 3, 2, NULL, NULL, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(11, 'Paquete de Agua Salada #1', 'a:4:{i:0;s:16:"2 Payaso Percula";i:1;s:16:"1 Damisela Azúl";i:2;s:13:"1 Gobio Flama";i:3;s:18:"2 Cardenal Bangái";}', 2, 'salty', 3, 4, 4, NULL, NULL, 5, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(12, 'Paquete de Agua Salada #2', 'a:4:{i:0;s:19:"1 Cirujano Amarillo";i:1;s:22:"1 Payaso Tomate Grande";i:2;s:16:"1 Ballesta Niger";i:3;s:18:"1 Ballesta Picasso";}', 2, 'salty', 3, 4, 8, NULL, NULL, 6, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(13, 'Paquete de Sala de Espera con Japonés o Goldfish', 'a:6:{i:0;s:15:"2 Japonés Moro";i:1;s:26:"2 Japonés Esacma de Perla";i:2;s:21:"3 Japonés Sello Rojo";i:3;s:21:"6 Cebras Transgénica";i:4;s:8:"4 Guppys";i:5;s:23:"2 Gurami de Luz de Luna";}', 3, 'sweet', 4, 1, 8, NULL, NULL, 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(14, 'Paquete para Casa con Tetras', 'a:8:{i:0;s:22:"5 Tetra Fantasma Negro";i:1;s:19:"5 Rasbora Arlequín";i:2;s:16:"3 Tetra Pristela";i:3;s:17:"1 Coliza de Fuego";i:4;s:14:"1 Coliza Azúl";i:5;s:15:"1 Gato Paleatus";i:6;s:22:"4 Tetra Gota de Sangre";i:7;s:32:"5 Sumatrano Tigre o Transgénico";}', 3, 'sweet', 6, 3, 4, NULL, NULL, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(15, 'Paquete Oficina con Tiburones', 'a:7:{i:0;s:19:"1 Tiburón Arcoiris";i:1;s:20:"1 Tiburón Cola Roja";i:2;s:13:"5 Platy Coral";i:3;s:26:"1 Tiburón Albino Arcoiris";i:4;s:21:"4 Gurami Coliza Azúl";i:5;s:24:"5 Ángel Negro o Mármol";i:6;s:14:"2 Botia Payaso";}', 3, 'sweet', 6, 2, 3, NULL, NULL, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(16, 'Paquete Niños Mixto', 'a:6:{i:0;s:18:"2 Cíclido Durazno";i:1;s:16:"2 Sílver Dollar";i:2;s:15:"3 Molly Ballón";i:3;s:26:"5 Tetra Monja Transgénica";i:4;s:13:"3 Espada Roja";i:5;s:15:"4 Tiburón Bala";}', 3, 'sweet', 5, 2, 2, NULL, NULL, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(17, 'Paquete de Agua Salada #1', 'a:5:{i:0;s:16:"2 Payaso Percula";i:1;s:16:"1 Damisela Azúl";i:2;s:13:"1 Gobio Flama";i:3;s:18:"2 Cardenal Bangái";i:4;s:18:"1 Cirujano de Velo";}', 3, 'salty', 3, 4, 4, NULL, NULL, 5, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(18, 'Paquete de Agua Salada #2', 'a:5:{i:0;s:19:"1 Cirujano Amarillo";i:1;s:22:"1 Payaso Tomate Grande";i:2;s:16:"1 Ballesta Niger";i:3;s:18:"1 Ballesta Picasso";i:4;s:18:"1 Cirujano de Velo";}', 3, 'salty', 3, 4, 8, NULL, NULL, 6, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(19, 'Paquete de Sala de Espera con Japonés o Goldfish', 'a:8:{i:0;s:15:"2 Japonés Moro";i:1;s:26:"2 Japonés Esacma de Perla";i:2;s:21:"3 Japonés Sello Rojo";i:3;s:11:"2 Carpa Koy";i:4;s:21:"6 Cebras Transgénica";i:5;s:8:"6 Guppys";i:6;s:23:"2 Gurami de Luz de Luna";i:7;s:15:"2 Tiburón Bala";}', 4, 'sweet', 4, 3, 3, NULL, NULL, 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(20, 'Paquete para Casa con Tetras', 'a:9:{i:0;s:22:"5 Tetra Fantasma Negro";i:1;s:19:"5 Rasbora Arlequín";i:2;s:16:"5 Tetra Pristela";i:3;s:17:"2 Coliza de Fuego";i:4;s:14:"2 Coliza Azúl";i:5;s:15:"1 Gato Paleatus";i:6;s:22:"5 Tetra Gota de Sangre";i:7;s:32:"5 Sumatrano Tigre o Transgénico";i:8;s:15:"2 Tiburón Bala";}', 4, 'sweet', 6, 2, 3, NULL, NULL, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(21, 'Paquete Oficina con Tiburones', 'a:9:{i:0;s:19:"2 Tiburón Arcoiris";i:1;s:20:"2 Tiburón Cola Roja";i:2;s:13:"5 Platy Coral";i:3;s:26:"2 Tiburón Albino Arcoiris";i:4;s:14:"2 Coliza Azúl";i:5;s:17:"2 Coliza de Fuego";i:6;s:24:"6 Ángel Negro o Mármol";i:7;s:19:"2 Tiburón Pangasio";i:8;s:14:"2 Botia Payaso";}', 4, 'sweet', 6, 1, 5, NULL, NULL, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(22, 'Paquete Niños Mixto', 'a:6:{i:0;s:18:"2 Cíclido Durazno";i:1;s:16:"3 Sílver Dollar";i:2;s:15:"5 Molly Ballón";i:3;s:26:"6 Tetra Monja Transgénica";i:4;s:13:"5 Espada Roja";i:5;s:15:"4 Tiburón Bala";}', 4, 'sweet', 5, 3, 2, NULL, NULL, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(23, 'Paquete de Agua Salada #1', 'a:6:{i:0;s:16:"2 Payaso Percula";i:1;s:16:"1 Damisela Azúl";i:2;s:13:"1 Gobio Flama";i:3;s:18:"2 Cardenal Bangái";i:4;s:18:"1 Cirujano de Velo";i:5;s:15:"1 Cara de Zorro";}', 4, 'salty', 3, 4, 5, NULL, NULL, 5, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(24, 'Paquete de Agua Salada #2', 'a:6:{i:0;s:19:"1 Cirujano Amarillo";i:1;s:22:"1 Payaso Tomate Grande";i:2;s:16:"1 Ballesta Niger";i:3;s:18:"1 Ballesta Picasso";i:4;s:18:"1 Cirujano de Velo";i:5;s:23:"1 Payaso Marrón Grande";}', 4, 'salty', 3, 4, 1, NULL, NULL, 6, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(25, 'Paquete de Sala de Espera con Japonés o Goldfish', 'a:8:{i:0;s:15:"2 Japonés Moro";i:1;s:26:"2 Japonés Esacma de Perla";i:2;s:21:"3 Japonés Sello Rojo";i:3;s:11:"2 Carpa Koy";i:4;s:21:"6 Cebras Transgénica";i:5;s:8:"6 Guppys";i:6;s:23:"2 Gurami de Luz de Luna";i:7;s:15:"2 Tiburón Bala";}', 5, 'sweet', 4, 3, 3, NULL, NULL, 1, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(26, 'Paquete para Casa con Tetras', 'a:9:{i:0;s:22:"5 Tetra Fantasma Negro";i:1;s:19:"5 Rasbora Arlequín";i:2;s:16:"5 Tetra Pristela";i:3;s:17:"2 Coliza de Fuego";i:4;s:14:"2 Coliza Azúl";i:5;s:15:"1 Gato Paleatus";i:6;s:22:"5 Tetra Gota de Sangre";i:7;s:32:"5 Sumatrano Tigre o Transgénico";i:8;s:15:"2 Tiburón Bala";}', 5, 'sweet', 6, 2, 1, NULL, NULL, 2, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(27, 'Paquete Oficina con Tiburones', 'a:9:{i:0;s:19:"2 Tiburón Arcoiris";i:1;s:20:"2 Tiburón Cola Roja";i:2;s:13:"5 Platy Coral";i:3;s:26:"2 Tiburón Albino Arcoiris";i:4;s:14:"2 Coliza Azúl";i:5;s:17:"2 Coliza de Fuego";i:6;s:24:"6 Ángel Negro o Mármol";i:7;s:19:"2 Tiburón Pangasio";i:8;s:14:"2 Botia Payaso";}', 5, 'sweet', 6, 1, 5, NULL, NULL, 3, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(28, 'Paquete Niños Mixto', 'a:6:{i:0;s:18:"2 Cíclido Durazno";i:1;s:16:"3 Sílver Dollar";i:2;s:15:"5 Molly Ballón";i:3;s:26:"6 Tetra Monja Transgénica";i:4;s:13:"5 Espada Roja";i:5;s:15:"4 Tiburón Bala";}', 5, 'sweet', 5, 3, 2, NULL, NULL, 4, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(29, 'Paquete de Agua Salada #1', 'a:6:{i:0;s:16:"2 Payaso Percula";i:1;s:16:"1 Damisela Azúl";i:2;s:13:"1 Gobio Flama";i:3;s:18:"2 Cardenal Bangái";i:4;s:18:"1 Cirujano de Velo";i:5;s:15:"1 Cara de Zorro";}', 5, 'salty', 3, 4, 1, NULL, NULL, 5, '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(30, 'Paquete de Agua Salada #2', 'a:6:{i:0;s:19:"1 Cirujano Amarillo";i:1;s:22:"1 Payaso Tomate Grande";i:2;s:16:"1 Ballesta Niger";i:3;s:18:"1 Ballesta Picasso";i:4;s:18:"1 Cirujano de Velo";i:5;s:23:"1 Payaso Marrón Grande";}', 5, 'salty', 3, 4, 5, NULL, NULL, 6, '2019-11-22 21:04:12', '2019-11-22 21:04:12');

--
-- Volcado de datos para la tabla `prices`
--

INSERT INTO `prices` (`id`, `liters`, `water_type`, `sale`, `maintenance`, `rent`, `created_at`, `updated_at`) VALUES
(1, 80, 'sweet', '11999.00', '950.00', '1950.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(2, 80, 'salty', '14680.00', '1100.00', '2490.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(3, 148, 'sweet', '14499.00', '1149.00', '2480.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(4, 148, 'salty', '22000.00', '1290.00', '3950.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(5, 187, 'sweet', '15590.00', '1290.00', '2680.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(6, 187, 'salty', '24999.00', '1390.00', '4499.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(7, 246, 'sweet', '19360.00', '1390.00', '3250.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(8, 246, 'salty', '30860.00', '1690.00', '4999.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(9, 472, 'sweet', '32450.00', '1790.00', '4350.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12'),
(10, 472, 'salty', '47350.00', '2190.00', '6499.00', '2019-11-22 21:04:12', '2019-11-22 21:04:12');


--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Isaac Halabe', 'halabe15@gmail.com', NULL, '$2y$10$pN.4v41dZKuOUXh2WcIjfOe23SESOmY/.uVgEgbHGykfTT5.pb4py', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
