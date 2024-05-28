-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22-Dez-2021 às 20:04
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_agenda`
--
CREATE DATABASE IF NOT EXISTS `db_agenda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_agenda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `Id_contato` int(5) NOT NULL,
  `Nome` char(50) DEFAULT NULL,
  `Telefone` char(15) DEFAULT NULL,
  `Comercial` char(15) DEFAULT NULL,
  `Celular` char(15) DEFAULT NULL,
  `Celular2` char(15) DEFAULT NULL,
  `Email` char(100) DEFAULT NULL,
  `Wsite` char(100) DEFAULT NULL,
  `Observacao` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`Id_contato`, `Nome`, `Telefone`, `Comercial`, `Celular`, `Celular2`, `Email`, `Wsite`, `Observacao`) VALUES
(1, 'Eduardo Hernandes', '(11) 4400-0000', '(11) 4411-1111', '(11) 91234-5678', '(11) 95678-1234', 'teste@teste.com', 'www.teste.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'Eder Hernandes', '11 3212-1212', '11 3312-1313', '11 95555-4444', '11 94444-5555', 'eder@teste.com', 'www.eder.com', 'Este Ã© um teste de observaÃ§Ã£o');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`Id_contato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `Id_contato` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
