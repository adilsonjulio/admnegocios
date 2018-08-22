-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Ago-2018 às 20:52
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administranego`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(3) NOT NULL,
  `lancamento` int(1) NOT NULL,
  `tipo` varchar(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(15,2) NOT NULL,
  `foto1` varchar(60) DEFAULT NULL,
  `foto2` varchar(60) DEFAULT NULL,
  `foto3` varchar(60) DEFAULT NULL,
  `foto4` varchar(60) DEFAULT NULL,
  `foto5` varchar(60) DEFAULT NULL,
  `foto6` varchar(60) DEFAULT NULL,
  `foto7` varchar(60) DEFAULT NULL,
  `foto8` varchar(60) DEFAULT NULL,
  `foto9` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `lancamento`, `tipo`, `titulo`, `descricao`, `preco`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`) VALUES
(3, 0, 'VENDA', 'Teste Ajuste 2', 'Altera 1Altera 1Altera 1Altera 1Altera 1Altera 1Altera 1', '11.00', '4b1240ed6eaaa73be429e78195cecf85.jpg', '2a95120c766496527790f705dc2be87c.jpg', '05ad2e68e35783e7aa50c29261cc36b2.jpg', '', '', 'sublojaresende06.jpg', 'sublojaresende07.jpg', 'sublojaresende08.jpg', 'sublojaresende05.jpg'),
(2, 1, 'VENDA', 'Teste Ajuste 1', 'Altera 1Altera 1Altera 1Altera 1Altera 1Altera 1Altera 1', '11.00', '4b1240ed6eaaa73be429e78195cecf85.jpg', '2a95120c766496527790f705dc2be87c.jpg', '05ad2e68e35783e7aa50c29261cc36b2.jpg', '', '', 'kitnet6.jpg', 'kitnet1.jpg', 'kitnet7.jpg', 'kitnet3.jpg'),
(54, 1, 'VENDA', 'Teste Ajuste 5', 'Teste 960 x 540 Teste 960 x 540 Teste 960 x 540 Teste 960 x 540 ', '120000.00', '7584dd8ca0128bcddd132c8f6099827f.jpeg', '80a4722fdbfbbe2d832812e29ab63490.jpeg', '3f0756edd83042e2ed1c601145d0fa4e.jpeg', '71310d016e422968f0916c449bd27b74.jpeg', '061d6b5c82522682048cc1bd3dc70cb8.', '0be136cbcaeb0c452234e7731222ce44.', '386e7b5f0e33f117e4d63dee70fde13f.', '6dac642f839259a5c93b4ecee3387cc7.', '3ea4ae321d876c83bd34fd36a14d2158.'),
(55, 0, 'VENDA', 'Teste Ajuste 6', 'Teste 960 x 540 Teste 960 x 540 Teste 960 x 540 Teste 960 x 540 ', '120000.00', '4b26d3d1e06839f81c218faf9cefa1aa.jpeg', 'ccfa71bfc67df929fa8634f301a9bf2e.jpeg', 'b97ffb2490cbf691df54dc6f619042be.jpeg', '04a822df1914f8fb5d1d958b65f1fc2d.jpeg', 'b1d1fbf5d0d468612b8f891466cc6a02.jpeg', '7b0d9a99c98b4e18b65aa355c05016f5.jpg', '686f3dd786f5d822db40cdff0cda1b84.jpg', 'a48815fd60dae9ce83446d2a848263de.jpeg', '9539e49478871156e1125dfab64e1cb4.jpeg'),
(58, 0, 'VENDA', 'Teste Ajuste 7', 'Teste altera 9 fotos ', '205000.00', '9eac59b0fcb59bb7524c6f15e3d0b925.jpeg', '243668f157a8c700440ad1644a54d85d.jpeg', '79f770e57320953d00cdcc28c5c42193.jpeg', 'd4c15aef53da59bbffca7ede4b6b58e2.jpeg', '515fc9f6781c042526f89902abcee7b7.jpg', '539dfda053b388fad35c993525e34876.jpeg', 'cd6de956a4219e201d79abba9932d575.jpeg', '3a4cb9c8ff194a30149c8466309cb8fa.jpg', '23c06f7b716ce367271231f98b6008a1.jpeg'),
(53, 1, 'ALUGUEL', 'Teste Ajuste 4', 'Teste AdilsonTeste AdilsonTeste AdilsonTeste AdilsonTeste Adilson', '1200000.00', '944656c6b1a7baba7519ab6030f4cf0e.jpeg', '1efc354895f428749a8e87230bf5f18e.jpeg', 'dcaacaaa02093da94b33570462901d0b.jpeg', 'e9c22cffe8b1fb729d1dcaf17c24b62f.jpeg', 'f5b547720e7272a92aa34ba4369c20bf.jpeg', '68270d11bfac21cc368fb5a7f2e5eb3d.jpeg', 'b0a1d1d9f1bacb8656b398e5d9cb2992.jpeg', '1fd311af4adca5fb2dc520a89be4b1b3.jpeg', 'f69a8088e99025d5ced2d82ca6ac7589.jpeg'),
(52, 1, 'VENDA', 'Teste Ajuste 3', 'Teste alteração Teste alteração Teste alteração Teste alteração ', '280000.00', 'a71a8d639090940c0154563d5476de59.jpeg', '81d35248a023a2411feadcacc38be661.jpeg', '38ba530d938daaa707601ee564ed44e3.jpeg', 'c68cf543ddd9338ab8032f795d938023.jpg', '871e3ec0d7fa623841a9cfa80ee32a08.jpg', '5a0beeaacc5557ca85c035f6c4ab85ac.jpeg', 'c4c0b86e374d7b5cb6285020829972a2.jpeg', '16bc4d9ed3db20c2f6fdc7420d734f45.jpg', '640890e47ed19823e85539531109e95f.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `imoveis` ADD FULLTEXT KEY `descricao` (`descricao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
