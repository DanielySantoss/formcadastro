-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2024 às 20:27
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ativpw`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cod_func` varchar(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cargo_func` varchar(200) NOT NULL,
  `departamento_func` varchar(200) NOT NULL,
  `admissao_func` date NOT NULL,
  `salario_func` decimal(10,0) NOT NULL,
  `endereco_func` varchar(200) NOT NULL,
  `email_func` varchar(200) NOT NULL,
  `tel_func` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`cod_func`, `nome`, `cargo_func`, `departamento_func`, `admissao_func`, `salario_func`, `endereco_func`, `email_func`, `tel_func`) VALUES
('2', 'Daniely Pereira dos Santos', 'Desenvolvedor front end', 'TI', '2024-06-02', 3000, 'r grecia', 'dominiccx014@gmail.com', '19373893272'),

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
