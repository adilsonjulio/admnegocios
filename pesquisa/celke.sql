-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Mar-2017 às 14:51
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Viagens, Pousadas e VeÃ­culos', '2017-02-15 20:17:12', NULL),
(2, 'Ãgua, Alimentos e Bebidas', '2017-02-15 20:17:28', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `segmento` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `fone1` varchar(20) NOT NULL,
  `fone2` varchar(20) NOT NULL,
  `fone3` varchar(20) NOT NULL,
  `email` varchar(220) NOT NULL,
  `site` varchar(50) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `situacao_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `segmento`, `endereco`, `telefone`, `fone1`, `fone2`, `fone3`, `email`, `site`, `imagem`, `situacao_id`, `categoria_id`, `subcategoria_id`, `modified`, `created`) VALUES
(2, 'CA Lanches', 'Lanche em Geral', 'rua juviano', '33611158', '88834858', '8883485896', '888348985', 'fia@gmail.com', 'livraria.com.br', 'slide6.jpg', 1, 2, 1, '2017-02-04 22:55:39', '2017-02-03 00:00:00'),
(3, 'DR Aluguel carro', 'Aluguel', 'Rua Elisio Curvelo', '83336584', '83987564532', '8333611137', '83987653421', 'salao@gmail.com', 'salao.com.br', '', 1, 1, 3, NULL, '2017-02-04 21:58:16'),
(7, 'Meu Lanches Companhia', 'Lanche em Geral', 'rua juviano', '33611158', '88834858', '8883485896', '888348985', 'fia@gmail.com', 'livraria.com.br', 'slide6.jpg', 1, 2, 1, '2017-02-04 22:55:39', '2017-02-03 00:00:00'),
(8, 'Roder Aluguel carro', 'Aluguel', 'Rua Elisio Curvelo', '83336584', '83987564532', '8333611137', '83987653421', 'salao@gmail.com', 'salao.com.br', '', 1, 1, 3, NULL, '2017-02-04 21:58:16'),
(9, 'Distribuidora gronder', 'Lanche em Geral', 'rua juviano', '33611158', '88834858', '8883485896', '888348985', 'fia@gmail.com', 'livraria.com.br', 'slide6.jpg', 1, 2, 2, '2017-02-04 22:55:39', '2017-02-03 00:00:00'),
(10, 'Alugel fÃ¡cil - Aluguel carro', 'Aluguel', 'Rua Elisio Curvelo', '83336584', '83987564532', '8333611137', '83987653421', 'salao@gmail.com', 'salao.com.br', '', 1, 1, 3, NULL, '2017-02-04 21:58:16'),
(11, 'Sim Lanches', 'Lanche em Geral', 'rua juviano', '33611158', '88834858', '8883485896', '888348985', 'fia@gmail.com', 'livraria.com.br', 'slide6.jpg', 1, 2, 1, '2017-02-04 22:55:39', '2017-02-03 00:00:00'),
(12, 'CM Aluguel carro', 'Aluguel', 'Rua Elisio Curvelo', '83336584', '83987564532', '8333611137', '83987653421', 'salao@gmail.com', 'salao.com.br', '', 1, 1, 3, NULL, '2017-02-04 21:58:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `nome`, `categoria_id`, `created`, `modified`) VALUES
(1, 'BARES', 2, '2017-02-15 23:54:01', NULL),
(2, 'AGUA E GELO\n', 2, '2017-02-15 23:54:27', NULL),
(3, 'CARROS', 1, '2017-02-15 23:54:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
