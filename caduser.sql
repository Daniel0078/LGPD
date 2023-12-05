-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24/11/2023 às 12:55
-- Versão do servidor: 8.0.31
-- Versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `caduser`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `niveis_acessos`
--

DROP TABLE IF EXISTS `niveis_acessos`;
CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Colaborador', '2016-02-19 00:00:00', NULL),
(3, 'Cliente', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `niveis_acesso_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TELEFONE` varchar(14) NOT NULL,
  `SENHA` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `EMAIL` (`EMAIL`,`TELEFONE`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `niveis_acesso_id`, `NOME`, `EMAIL`, `TELEFONE`, `SENHA`) VALUES
(1, '1', 'daniel', 'daniel@email.com', 'telefone', '123123'),
(2, '2', 'ISABELLE', 'ISA@EMAIL.COM', 'telefone', '123123'),
(3, '3', 'dsffs', 'admin@21321', '98496549549', '123123'),
(5, '1', 'isabella', 'bela@email.com', 'telefone', '123123'),
(4, '3', 'dmj', 'dmj@email.com', '11111111111111', '123123'),
(6, '3', 'jo', 'joao@email.com', '45646546546546', '123123'),
(7, '3', 'elias', 'elias@email.com', '88888888888', '123123'),
(8, '1', 'rayane', 'ray@email.com', 'telefone', '123123'),
(9, '2', 'cassiane', 'cassi@email.com', 'telefone', '123123'),
(10, '1', 'teste', 'teste@teste.com', 'telefone', '123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
