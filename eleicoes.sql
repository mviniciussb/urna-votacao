-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/10/2023 às 00:37
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eleicoes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `matricula` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `matricula`) VALUES
(60, '100'),
(61, '101'),
(62, '303'),
(63, '159');

-- --------------------------------------------------------

--
-- Estrutura para tabela `chapas`
--

CREATE TABLE `chapas` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nome_lider` varchar(50) NOT NULL,
  `codigo_lider` int(10) NOT NULL,
  `nome_vice` varchar(50) NOT NULL,
  `codigo_vice` int(10) NOT NULL,
  `contadorVoto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `chapas`
--

INSERT INTO `chapas` (`id`, `nome`, `codigo`, `nome_lider`, `codigo_lider`, `nome_vice`, `codigo_vice`, `contadorVoto`) VALUES
(33, 'Chapa A', 100, 'Marcos Vinicius', 101, 'Rodrigo Mendes', 102, 1),
(34, 'Chapa B', 200, 'Roberto', 201, 'Carla', 202, 2),
(35, 'Chapa C', 300, 'Fernanda', 301, 'Carla', 302, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `chapas`
--
ALTER TABLE `chapas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `chapas`
--
ALTER TABLE `chapas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
