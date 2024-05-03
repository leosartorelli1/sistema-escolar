-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 02:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis-escolar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_disciplinas`
--

CREATE TABLE `tb_disciplinas` (
  `id` int(11) NOT NULL,
  `nomeDisciplina` varchar(30) NOT NULL,
  `cargaHoraria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_disciplinas`
--

INSERT INTO `tb_disciplinas` (`id`, `nomeDisciplina`, `cargaHoraria`) VALUES
(8, 'funcionou', '190'),
(11, ' tecnicas de programcao  ', ' 20 ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_turmas`
--

CREATE TABLE `tb_turmas` (
  `id` int(11) NOT NULL,
  `descTurma` varchar(30) NOT NULL,
  `ano` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_turmas`
--

INSERT INTO `tb_turmas` (`id`, `descTurma`, `ano`) VALUES
(4, 'funcionou2', 'deu boa'),
(5, ' dsm ', ' 1sem '),
(6, ' dsm ', ' 2sem '),
(7, ' dsm ', ' 4sem '),
(8, ' dsm ', ' 6sem ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `senha`, `permissao`) VALUES
(1, 'admin', '12345', 'adm'),
(2, 'visitante ', '12345', 'vis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_turmas`
--
ALTER TABLE `tb_turmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_turmas`
--
ALTER TABLE `tb_turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
