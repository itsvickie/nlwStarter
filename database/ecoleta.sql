-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2020 às 01:20
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecoleta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidades`
--

CREATE TABLE `entidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `numeroComplemento` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entidades`
--

INSERT INTO `entidades` (`id`, `nome`, `endereco`, `numeroComplemento`, `estado`, `cidade`) VALUES
(3, 'Vitória Sobrinho', 'Rua da Santa Cruz', '220', 'Pará', 'Almeirim'),
(4, 'Vitória Sobrinho', 'Rua da Santa Cruz', '220', 'Maranhão', 'Alcântara');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_coleta`
--

CREATE TABLE `itens_coleta` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_coleta`
--

INSERT INTO `itens_coleta` (`id`, `nome`) VALUES
(1, 'Lâmpadas'),
(2, 'Pilhas e Baterias'),
(3, 'Papéis e Papelão'),
(4, 'Resíduos Eletrônicos'),
(5, 'Resíduos Orgânicos'),
(6, 'Óleo de Cozinha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_entidade`
--

CREATE TABLE `itens_entidade` (
  `id` int(11) NOT NULL,
  `entidade_ID` int(11) NOT NULL,
  `itens_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens_coleta`
--
ALTER TABLE `itens_coleta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens_entidade`
--
ALTER TABLE `itens_entidade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entidades`
--
ALTER TABLE `entidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `itens_coleta`
--
ALTER TABLE `itens_coleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `itens_entidade`
--
ALTER TABLE `itens_entidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
