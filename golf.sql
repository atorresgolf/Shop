-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2019 a las 23:41:03
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `golf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'incompleto', '2019-12-12 04:05:05', '2019-12-12 04:05:05'),
(2, 'incompleto', '2019-12-12 04:12:52', '2019-12-12 04:12:52'),
(3, 'incompleto', '2019-12-12 04:35:56', '2019-12-12 04:35:56'),
(4, 'incompleto', '2019-12-12 04:36:41', '2019-12-12 04:36:41'),
(5, 'incompleto', '2019-12-12 04:46:28', '2019-12-12 04:46:28'),
(6, 'incompleto', '2019-12-12 05:05:07', '2019-12-12 05:05:07'),
(7, 'incompleto', '2019-12-12 05:05:56', '2019-12-12 05:05:56'),
(8, 'incompleto', '2019-12-12 16:59:54', '2019-12-12 16:59:54'),
(9, 'incompleto', '2019-12-12 17:01:45', '2019-12-12 17:01:45'),
(10, 'incompleto', '2019-12-12 17:02:25', '2019-12-12 17:02:25'),
(11, 'incompleto', '2019-12-12 17:02:42', '2019-12-12 17:02:42'),
(12, 'incompleto', '2019-12-12 17:04:23', '2019-12-12 17:04:23'),
(13, 'incompleto', '2019-12-12 17:06:14', '2019-12-12 17:06:14'),
(14, 'incompleto', '2019-12-12 17:16:15', '2019-12-12 17:16:15'),
(15, 'incompleto', '2019-12-13 05:14:57', '2019-12-13 05:14:57'),
(16, 'incompleto', '2019-12-13 05:15:54', '2019-12-13 05:15:54'),
(17, 'incompleto', '2019-12-15 16:17:31', '2019-12-15 16:17:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Driver', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(2, 'Hierros', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(3, 'Putter', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(4, 'Accesorios', '2019-11-26 03:00:00', '2019-11-26 03:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_carrito`
--

CREATE TABLE `en_carrito` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `carrito_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Taylor Made', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(2, 'Callaway', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(3, 'Titleist', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(4, 'Wilson', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(5, 'Ping', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(6, 'Foot Joy', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(7, 'Adidas', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(8, 'Oddyssey', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(9, NULL, NULL, NULL),
(10, NULL, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_11_23_233737_cambio_clave_usuarios_table', 2),
(6, '2019_11_24_003522_agrego_columna_surname_users', 3),
(7, '2019_11_25_131859_update_productos_table', 4),
(8, '2019_11_26_124903_crea_columnas_poster_tabla_productos', 5),
(9, '2019_11_26_125842_crear_times_tabla_productos', 5),
(10, '2019_11_26_152043_agregar_time_marcas', 6),
(11, '2019_11_26_153139_crear_time_categorias', 6),
(12, '2019_11_26_153446_crear_time_proveedor', 6),
(13, '2019_11_27_220457_crear_columna_foto_tabla_user', 7),
(14, '2019_12_06_150545_agrego_columnas_tabla__users', 8),
(15, '2019_12_10_210802_crear_tabla_carrito', 9),
(16, '2019_12_15_213929_crear_fk_marcas_categorias_proveedor', 10),
(17, '2019_12_15_222026_crear_tabla_en_carrito', 11);

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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` varchar(10) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `stock` varchar(10) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `nombre_categoria` varchar(100) DEFAULT NULL,
  `nombre_marca` varchar(100) DEFAULT NULL,
  `poster` varchar(100) DEFAULT NULL,
  `poster1` varchar(100) DEFAULT NULL,
  `poster2` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `stock`, `id_marca`, `id_proveedor`, `id_categoria`, `nombre_categoria`, `nombre_marca`, `poster`, `poster1`, `poster2`, `created_at`, `updated_at`) VALUES
(3, 'Oddyssey works', '12000', 'Putter Oddyssey Works #7', '2', 8, 2, 3, 'Putter', 'Oddyssey', 'UniGWfOlDp26BqK9EJhZ5Hkugz7zW8cpOqtfUnm8.jpeg', '', '', NULL, NULL),
(4, 'TM M6', '20000', 'Set 4-Pw vara acero regular', '5', 1, 1, 2, 'Hierros', 'Taylor Made', '0c1e5BtX1q8fAl5HCevO3jTgoFMnhnJh6zur6oT9.jpeg', '', '', NULL, NULL),
(5, 'Driver M5', '20000', 'Driver M5 Modelo 2020. Maxima distancia. Minimiza dispersion. Disponible en distintos loft y distintas flexiones de vara', '5', 1, 3, 1, 'Driver', 'Taylor Made', 'XKSHAcsKFkdSVMKDyU5IE6rBmYAjEHv1wHoO6zPq.jpeg', 'w8lCzfNKPO1V7Fo5VGP2m92SXGO7cibUBNza89fA.jpeg', '1aETAFnRH6zllWFAwnao0ya8FHEY3Iu6NHfK5p3L.jpeg', '2019-11-26 16:29:28', '2019-11-26 16:29:28'),
(6, 'Driver M6', '18000', 'M6 modelo 2020. #1 Golf Digest Hotest List', '6', 1, 4, 1, 'Driver', 'Taylor Made', 'TqrXWdLggQ5wyF5qdjChUy9CrSArG4kvRSdDbYyd.jpeg', 'NWVDdvIFevD61EtIlu42gWQEiI51fl7F07qEUlAW.jpeg', 'UMKh2DQ8xkiqADmoUa6zhXbKqIS2ojavEr97cxCt.jpeg', '2019-11-26 16:31:45', '2019-11-26 16:31:45'),
(7, 'Driver Epic', '21000', 'Lo ultimo en teconologia aplicada al driver. Disponible', '6', 2, 2, 1, 'Driver', 'Callaway', '3WaleAEJ64Q3tkaxJp7tNVyvQH49Evj8OEeGVoVC.png', 'QnBSFdXSNbNPXXDaPSORHV5Dtpa0ugpp62JNkRNo.png', 'betXQAeiaSR7yhVCCWJnIgxXMlX6oK85gK1SPctr.png', '2019-11-26 16:33:21', '2019-11-26 16:33:21'),
(8, 'Hierros Big Bertha', '45000', 'Hierros mas faciles del mercado. Modelo 2019. Vara acero regular', '6', 2, 2, 2, 'Hierros', 'Callaway', 'fHokM4oW2o8P5eLjtX81938lWMiFKi3Z5ESagwp9.png', 'GdwzQfsaBwhoPH54evo3JXA6pdDXSwUe2hzg5o38.png', '3zyMe9d0fqSpxmgtupeSJ13HT6B31qX1pgP0SrMM.png', '2019-11-26 16:35:00', '2019-11-26 16:35:00'),
(9, 'Taylor Made Tour', '850', 'Guante taylor made tour preferd .', '12', 1, 1, 4, 'Accesorios', 'Taylor Made', '6v5QtvPpow9Zf0eqVxyVf3d2KEl8enxN6pYUFni8.jpeg', 'xOt7Jb3LQHyoVgUGoxI3cHk68fAAD5lUfeklKl36.jpeg', 'zEI8Pfd1lKwBdWlstcACJza0lzHEZVMDzdlqgiCH.jpeg', '2019-11-26 16:51:26', '2019-11-26 16:51:26'),
(11, 'Pelotas TP5', '890', 'Pelotas Tri Capa. #1 Tour PGA', '140', 2, 2, 4, 'Accesorios', 'Taylor Made', 'KSxeVVmbH8UTZN4uvLzccnoKXPY6duvdezZ8AqLk.jpeg', 'OBgceNcKTV4UHcsPAFEppTT98J53coUM92412R5p.jpeg', '4BzOcjD4YNg6c5YSRXMXuuHD9FAMYb5hgAvGC1jh.jpeg', '2019-12-06 17:42:21', '2019-12-06 17:42:21'),
(12, 'Bolsa Callaway stand', '7990', 'Bolsa Callaway con tripodes super liviana. Con divisiones', '10', 1, 1, 4, 'Accesorios', 'Callaway', 'rrrNIrBW2jK9eUn0BJqo3gj82CKxOlM9FzDvkNHl.png', 'ThELF7fMqPRvCp5PjAYZ1c6FG7ybx7PL1NijNBuz.png', 'oc4b9HBho1Ex0psp85am1QbLCkSzhyTvr6dm5BYZ.png', '2019-12-06 17:47:32', '2019-12-06 17:47:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Taylor Made', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(2, 'Callaway', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(3, 'Buke Golf', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(4, 'Kaddy Golf', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(5, 'Nealon', '2019-11-26 03:00:00', '2019-11-26 03:00:00'),
(6, NULL, NULL, NULL),
(7, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'user.jpg',
  `dni` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `domicilio` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipoUsuario` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `surname`, `avatar`, `dni`, `fechaNac`, `domicilio`, `localidad`, `provincia`, `tipoUsuario`) VALUES
(1, 'Antonieta', 'atorresgolf@gmail.com', NULL, '$2y$10$7M5fPF4rqPOB2XjGWDYo1eIl3x9qAJgqs1zsdqoHAvkw8a8PNHiuC', NULL, '2019-11-24 03:56:38', '2019-12-02 02:46:17', 'Torres', '1_avatar1575243977.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Paco', 'paco@gmail.com', NULL, '$2y$10$o6Qcq8den5k5Ovt0EczCeeO2Ic.xZ./Se.iPAskdgnppGWZxjfx7G', NULL, '2019-12-02 03:09:40', '2019-12-08 00:48:34', 'Torres', '2_avatar1575754146.jpg', '11111111', '2018-11-21', 'Barrio  Odontologo', 'San Pablo', 'Tucuman', NULL),
(3, 'Anto', 'atorres@gmail.com', NULL, '$2y$10$QW3NL30gRjCYQshNnwT6ku2TQQLGO1XMH/lDd6nYezqWqPnpz1s/2', NULL, '2019-12-02 04:14:18', '2019-12-11 00:53:07', 'Torres', '3_avatar1575249682.jpg', '21322222', '1970-06-06', 'Barrio Odontologos', 'San Pablo', 'Tucuman', NULL),
(6, 'Alfredo', 'alfredo@gmail.com', NULL, '$2y$10$QHuh0YnvuOrnxINFCxICmuDoCwnmnvb3kY.FxOdGd.rkkckrA28Fu', NULL, '2019-12-11 00:54:50', '2019-12-11 00:56:30', 'Sarria', '6_avatar1576014990.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'antu', 'anto@gmail.com', NULL, '$2y$10$qBur4zWCWCnsQXpInOY0s.OUbLYDl4D05jfUEzRmacLXSRVsrWj3K', NULL, '2019-12-11 01:01:07', '2019-12-11 01:03:01', 'Torres', '7_avatar1576015381.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Giselle', 'giselle@gmail.com', NULL, '$2y$10$1aGvigQM6ibS4UOJ61oPKedtcSGemhpDy6/lEgMd6jDWvUB/iKjdC', NULL, '2019-12-11 01:54:18', '2019-12-11 01:54:18', 'Machado', 'user.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Lola', 'lola@gmail.com', NULL, '$2y$10$VBlRAGjxiFQd0VTWp7jp/eMTTbQDJfz7j1Fm.2lWlAF.QRFS.cWY2', NULL, '2019-12-16 00:12:52', '2019-12-16 00:12:52', 'Acuna', 'user.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `clave` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha_nac` datetime DEFAULT NULL,
  `domicilio` varchar(45) NOT NULL,
  `localidad` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `tipo_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre_usuario` varchar(45) DEFAULT NULL,
  `apellido_usuario` varchar(45) DEFAULT NULL,
  `dni_usuario` varchar(45) DEFAULT NULL,
  `mail_usuario` varchar(45) DEFAULT NULL,
  `direccion_envio` varchar(45) DEFAULT NULL,
  `fecha_venta` datetime DEFAULT NULL,
  `id_productos` varchar(45) DEFAULT NULL,
  `nombre_productos` varchar(45) DEFAULT NULL,
  `cantidad_productos` int(11) DEFAULT NULL,
  `precio_venta` int(11) DEFAULT NULL,
  `precio_envio` int(11) DEFAULT NULL,
  `numero_venta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `en_carrito`
--
ALTER TABLE `en_carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `en_carrito_producto_id_foreign` (`producto_id`),
  ADD KEY `en_carrito_carrito_id_foreign` (`carrito_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_marca_foreign` (`id_marca`),
  ADD KEY `productos_id_proveedor_foreign` (`id_proveedor`),
  ADD KEY `productos_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `en_carrito`
--
ALTER TABLE `en_carrito`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `en_carrito`
--
ALTER TABLE `en_carrito`
  ADD CONSTRAINT `en_carrito_carrito_id_foreign` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id`),
  ADD CONSTRAINT `en_carrito_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `productos_id_marca_foreign` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `productos_id_proveedor_foreign` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
