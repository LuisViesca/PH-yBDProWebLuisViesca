-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2020 a las 03:36:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoprowebluisviesca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `email_cliente` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `email_cliente`, `created_at`) VALUES
(1, 'jorge121@GMAIL.COM', '2020-11-20 13:57:20'),
(2, 'oscar@gmail.com', '2020-11-20 13:59:25'),
(3, 'oscar@gmail.com', '2020-11-20 14:05:42'),
(4, 'lfviesca@gmail.com', '2020-11-21 14:57:04'),
(5, 'luisugalde13@gmail.com', '2020-11-24 17:25:27'),
(6, 'luisfer22@gmail.com', '2020-11-24 18:17:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_product`
--

CREATE TABLE `cart_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `q` float DEFAULT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cart_product`
--

INSERT INTO `cart_product` (`id`, `product_id`, `q`, `cart_id`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 2, 1, 3),
(4, 3, 1, 3),
(5, 4, 1, 3),
(6, 5, 1, 3),
(7, 1, 2, 4),
(8, 2, 1, 4),
(9, 6, 2, 4),
(10, 1, 2, 5),
(11, 3, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IDNom` varchar(20) NOT NULL,
  `Apep` varchar(20) NOT NULL,
  `Apem` varchar(20) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Edad` int(5) NOT NULL,
  `Num` varchar(20) NOT NULL,
  `ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IDNom`, `Apep`, `Apem`, `Direccion`, `Edad`, `Num`, `ID`) VALUES
('Luis', 'Viesca', 'Ugalde', 'Pedriceña, Dgo', 22, '8125772589', 2),
('Fernando', 'Viesca', 'Ugalde', 'Cuencame, Dgo', 20, '2147483647', 3),
('Fernandooo', 'Vies', 'Ugalde', 'Durango', 21, '2147483647', 4),
('Valeria', 'Mesta', 'Ayala', 'Pedriceña, Dgo', 20, '8125772589', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `nombre`, `precio`) VALUES
(1, 'Xiaomi_Redmi_Note_9S', 6300),
(2, 'Xiaomi_Redmi_Note_8_Pro', 5600),
(3, 'Xiaomi_Redmi_9', 5800),
(4, 'Cargador_BENSN_5V', 145),
(5, 'Cargador_Samsung', 130),
(6, 'Cargador_BENSN_PC', 250),
(7, 'Audifonos_SkullCandy', 320),
(8, 'Audifonos_QCY_T1C', 300),
(9, 'Audifonos_Vorgo_BOCVGO880', 299),
(10, 'Apple_AirPods', 4300),
(11, 'Bocina_Echo_Dot', 2200),
(12, 'Laptop_Acer_Aspire5_Slim', 12000),
(13, 'ADATA_Powerbank', 250),
(14, 'Funda_Iphone11', 150),
(15, 'Combo_Teclado_Mouse', 340),
(16, 'GHIA_Monitor_LED_MG2020', 5499),
(17, 'Apple_Iphone8_Plus', 7800),
(18, 'Dron_DJI_Maveric_Air2', 5600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'vviescau', '$2y$10$Zh8.ZBLWtRCP7i9gyRCoq.xBmin9XwVzFqQRsqnvyOh7.KUnNM2Dm', 'lfviesca@gmail.com'),
(2, 'luisviesca', '$2y$10$8maUatIFlhy6LlknGktACOZx6VTPiM3oWDtAxTgHu7ak0ZAgt/IFe', 'luisferviesca@gmail.com'),
(3, 'luisviesca98', '$2y$10$eYgUiXxHQqEoxeOpst/VC.R1UFPVLrqfi0OlRVa8Gm2lHZQUdv6iG', 'fernando213@gmail.com'),
(4, 'fernandoviesca12', '$2y$10$wiGTDXGa6tjyHRiSf5PdJut0HyVR2in7BPptUCekBbKLlIPreCkzq', 'viescaugalde@gmail.com'),
(5, 'luisugalde', '$2y$10$hxHCAJBOrf8Wv32i9v/19er1jy3cSGdWUuqzXndrgKFIaozMWu3YC', 'luisugalde223@gmail.com'),
(6, 'luisfer', '$2y$10$2vDkeyvh4xCNqJwJB.Ueh.Ez1h6cFMn2H7RqkPSCWO4DkpQjdy2Dy', 'luisfer22@gmail.com'),
(8, 'ferviesca', '$2y$10$jgvMoa1Od9Df6eXYc/M33enYJwvECdyYPsHgGOhONeB0LSY3aixke', 'fernandooo131@gmai.com'),
(9, 'ugaldefer', '$2y$10$3unGwZuzB/meMiRoBoq92eEBa33/YgEtKTxF5xXPjBDdtHIteF2AK', 'ugaldeferr@gmail.com'),
(10, 'lusito09', '$2y$10$eyNeUIgTiBmITsXrYlV50e93BPDffKSPLXHjDNJpTS37pfpIx4Ej.', 'luisitovu@gmail.com'),
(11, 'viesca15', '$2y$10$m2Q8Pd.hm6F6gm44lKRybOqvj0YzCSc7VlkIeyKcd26rfIFlxomYq', 'viescaugaldw9@gmail.com'),
(12, 'prueba1', '$2y$10$Cn9bRMWFH1LGSUg1LYCm9uarnZJoYwhUStSB.abSH0D7eVH7/oOYW', 'prueba123@gmail.com'),
(13, 'prueba2', '$2y$10$E//iZlEbXU77MHP4a0a8augwNK/ToUinxI3UoE4YsE95Ko2B3mk.a', 'prueba223@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
