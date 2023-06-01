-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 01, 2023 at 01:15 AM
-- Server version: 5.7.42
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `copias`
--

CREATE TABLE `copias` (
  `n_copia` int(11) NOT NULL,
  `formato` varchar(200) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `precio` float(10,2) NOT NULL DEFAULT '10.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copias`
--

INSERT INTO `copias` (`n_copia`, `formato`, `id_pelicula`, `precio`) VALUES
(1, 'DVD', 1, 10.00),
(2, 'VHS', 1, 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `anio` varchar(4) DEFAULT NULL,
  `critica` text,
  `caratula` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `nombre`, `anio`, `critica`, `caratula`) VALUES
(1, 'El silencio de los Inocentes', NULL, 'Peliculón', NULL),
(2, 'La mascara', '2003', NULL, NULL),
(4, 'adsfasdf', NULL, 'asdsadf', 'sadfsadf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `copias`
--
ALTER TABLE `copias`
  ADD PRIMARY KEY (`n_copia`);

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `copias`
--
ALTER TABLE `copias`
  MODIFY `n_copia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
