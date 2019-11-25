-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-11-2019 a las 20:56:57
-- Versión del servidor: 8.0.12
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE mipecera;

USE mipecera;

--
-- Base de datos: `mipecera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `basic_materials`
--

CREATE TABLE `basic_materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decorations`
--

CREATE TABLE `decorations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fish`
--

CREATE TABLE `fish` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ornaments`
--

CREATE TABLE `ornaments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tank_id` int(10) UNSIGNED NOT NULL,
  `water_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_id` int(10) UNSIGNED NOT NULL,
  `decoration_id` int(10) UNSIGNED NOT NULL,
  `ornament_id_1` int(10) UNSIGNED NOT NULL,
  `ornament_id_2` int(10) UNSIGNED DEFAULT NULL,
  `ornament_id_3` int(10) UNSIGNED DEFAULT NULL,
  `fish_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prices`
--

CREATE TABLE `prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `liters` int(11) NOT NULL,
  `water_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` decimal(8,2) NOT NULL,
  `maintenance` decimal(8,2) NOT NULL,
  `rent` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tank_id` int(10) UNSIGNED DEFAULT NULL,
  `water_id` int(10) UNSIGNED DEFAULT NULL,
  `floor_id` int(10) UNSIGNED DEFAULT NULL,
  `decoration_id` int(10) UNSIGNED DEFAULT NULL,
  `ornament_id` int(10) UNSIGNED DEFAULT NULL,
  `fish_id` int(10) UNSIGNED DEFAULT NULL,
  `liters` int(10) UNSIGNED DEFAULT NULL,
  `package` tinyint(1) DEFAULT NULL,
  `rent` tinyint(1) NOT NULL DEFAULT '0',
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `price_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tanks`
--

CREATE TABLE `tanks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` smallint(6) NOT NULL DEFAULT '0',
  `width` smallint(6) NOT NULL DEFAULT '0',
  `height` smallint(6) NOT NULL DEFAULT '0',
  `depth` smallint(6) NOT NULL DEFAULT '0',
  `fish_sweet` smallint(6) NOT NULL DEFAULT '0',
  `fish_salty` smallint(6) NOT NULL DEFAULT '0',
  `medium_ornaments` smallint(6) NOT NULL DEFAULT '0',
  `big_ornaments` smallint(6) NOT NULL DEFAULT '0',
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cabinet` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tank_ornaments`
--

CREATE TABLE `tank_ornaments` (
  `id` int(10) UNSIGNED NOT NULL,
  `tank_id` int(10) UNSIGNED NOT NULL,
  `ornament_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `basic_materials`
--
ALTER TABLE `basic_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `decorations`
--
ALTER TABLE `decorations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ornaments`
--
ALTER TABLE `ornaments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `packages_tank_id_foreign` (`tank_id`),
  ADD KEY `packages_floor_id_foreign` (`floor_id`),
  ADD KEY `packages_fish_id_foreign` (`fish_id`),
  ADD KEY `packages_decoration_id_foreign` (`decoration_id`),
  ADD KEY `packages_ornament_id_1_foreign` (`ornament_id_1`),
  ADD KEY `packages_ornament_id_2_foreign` (`ornament_id_2`),
  ADD KEY `packages_ornament_id_3_foreign` (`ornament_id_3`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_tank_id_foreign` (`tank_id`),
  ADD KEY `sessions_water_id_foreign` (`water_id`),
  ADD KEY `sessions_floor_id_foreign` (`floor_id`),
  ADD KEY `sessions_decoration_id_foreign` (`decoration_id`),
  ADD KEY `sessions_ornament_id_foreign` (`ornament_id`),
  ADD KEY `sessions_fish_id_foreign` (`fish_id`),
  ADD KEY `sessions_client_id_foreign` (`client_id`),
  ADD KEY `sessions_price_id_foreign` (`price_id`);

--
-- Indices de la tabla `tanks`
--
ALTER TABLE `tanks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tank_ornaments`
--
ALTER TABLE `tank_ornaments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tank_ornaments_tank_id_foreign` (`tank_id`),
  ADD KEY `tank_ornaments_ornament_id_foreign` (`ornament_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `basic_materials`
--
ALTER TABLE `basic_materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `decorations`
--
ALTER TABLE `decorations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fish`
--
ALTER TABLE `fish`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ornaments`
--
ALTER TABLE `ornaments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tanks`
--
ALTER TABLE `tanks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tank_ornaments`
--
ALTER TABLE `tank_ornaments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_decoration_id_foreign` FOREIGN KEY (`decoration_id`) REFERENCES `decorations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `packages_fish_id_foreign` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `packages_floor_id_foreign` FOREIGN KEY (`floor_id`) REFERENCES `basic_materials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `packages_ornament_id_1_foreign` FOREIGN KEY (`ornament_id_1`) REFERENCES `ornaments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `packages_ornament_id_2_foreign` FOREIGN KEY (`ornament_id_2`) REFERENCES `ornaments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `packages_ornament_id_3_foreign` FOREIGN KEY (`ornament_id_3`) REFERENCES `ornaments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `packages_tank_id_foreign` FOREIGN KEY (`tank_id`) REFERENCES `tanks` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessions_decoration_id_foreign` FOREIGN KEY (`decoration_id`) REFERENCES `decorations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessions_fish_id_foreign` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessions_floor_id_foreign` FOREIGN KEY (`floor_id`) REFERENCES `basic_materials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessions_ornament_id_foreign` FOREIGN KEY (`ornament_id`) REFERENCES `ornaments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessions_price_id_foreign` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessions_tank_id_foreign` FOREIGN KEY (`tank_id`) REFERENCES `tanks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessions_water_id_foreign` FOREIGN KEY (`water_id`) REFERENCES `basic_materials` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tank_ornaments`
--
ALTER TABLE `tank_ornaments`
  ADD CONSTRAINT `tank_ornaments_ornament_id_foreign` FOREIGN KEY (`ornament_id`) REFERENCES `ornaments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tank_ornaments_tank_id_foreign` FOREIGN KEY (`tank_id`) REFERENCES `tanks` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
