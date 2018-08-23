-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql05-farm62.kinghost.net
-- Tempo de geração: 21/08/2018 às 14:52
-- Versão do servidor: 5.6.37-log
-- Versão do PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `administranego`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
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
  `foto9` varchar(60) DEFAULT NULL,
  `foto10` varchar(60) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `lancamento`, `tipo`, `titulo`, `descricao`, `preco`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`, `foto10`) VALUES
(3, 1, 'VENDA', 'Sub Loja no Shopping Resende/RJ', 'Sub loja no Barbosa lima ao lado do shopping de Resende. Escritura com 180m2', '350000.00', 'sublojaresende01.jpg', 'sublojaresende02.jpg', 'sublojaresende03.jpg', 'sublojaresende04.jpg', 'sublojaresende05.jpg', 'sublojaresende06.jpg', 'sublojaresende07.jpg', 'sublojaresende08.jpg', 'sublojaresende05.jpg', ''),
(2, 1, 'VENDA', 'Kitnet no Centro de Barra Mansa', 'Kitnet com 23 m2 com 03 comodos. Escritura RGI IPTU ', '90000.00', 'kitnet7.jpg', 'kitnet2.jpg', 'kitnet3.jpg', 'kitnet4.jpg', 'kitnet5.jpg', 'kitnet6.jpg', 'kitnet1.jpg', 'kitnet7.jpg', 'kitnet3.jpg', ''),
(5, 1, 'VENDA', 'Colonia - Barra Mansa - RJ', 'Terreno na ColÃ´nia Santo AntÃ´nio  11x30 330m', '125000.00', 'colonia1.jpg', 'colonia3.jpg', 'colonia4.jpg', 'colonia3.jpg', 'colonia1.jpg', 'colonia2.jpg', 'colonia4.jpg', 'colonia4.jpg', 'colonia2.jpg', ''),
(6, 1, 'VENDA', 'Casa na Vista Alegre - Barra Mansa/RJ', '03 Casas, terreno com 300 m2, casa de frente com 03 quartos, sala, cozinha, banheiro social, 02 vagas e garagem. Duas casas nos fundos com 01 quarto, sala,  cozinha e banheiro.', '400000.00', 'vistaAlegre8.jpg', 'vistaAlegre1.jpg', 'vistaAlegre3.jpg', 'vistaAlegre5.jpg', 'vistaAlegre6.jpg', 'vistaAlegre7.jpg', 'vistaAlegre9.jpg', 'vistaAlegre2.jpg', 'vistaAlegre4.jpg', ''),
(7, 1, 'VENDA', 'GalpÃ£o e Loja no Ano Bom, Barra Mansa - RJ', 'Ã“timo galpÃ£o e loja no Ano Bom perto do Supermercado 365, com 140m2 compÃµe direito compativel para fazer novo andar com banheiro e cozinha alugado e funcionando,  Ã³timo para implantaÃ§Ã£o  da sua empresa.', '550000.00', 'galpaoAnobom5.jpeg', 'galpaoAnobom6.jpeg', 'galpaoAnobom1.jpeg', 'galpaoAnobom2.jpeg', 'galpaoAnobom3.jpeg', 'galpaoAnobom4.jpeg', 'galpaoAnobom7.jpeg', 'galpaoAnobom8.jpeg', 'galpaoAnobom9.jpeg', ''),
(8, 1, 'VENDA', 'Sala no Centro de Barra Mansa - RJ', 'Sala com aproximadamente 18m2 na Rua Dr. MÃ¡rio Ramos no Centro de Barra Mansa com escritura.', '40000.00', 'sala_mario_ramos1.jpg', 'sala_mario_ramos3.jpg', 'sala_mario_ramos2.jpg', 'sala_mario_ramos4.jpg', 'sala_mario_ramos5.jpg', 'sala_mario_ramos3.jpg', 'sala_mario_ramos5.jpg', 'sala_mario_ramos1.jpg', 'sala_mario_ramos2.jpg', ''),
(9, 1, 'VENDA', 'ChÃ¡cara no bairro KM-4 em Barra Mansa - RJ', 'ChÃ¡cara no bairro KM-4 com terreno de 800 mt2 aproximadamente, 02 vagas de garagem, Ã¡rea de churrasqueira, piscina de  15.000 litros funcionando, casa com 02 quartos, duas suÃ­tes com closet, sala com dois ambientes, copa, cozinha, Ã¡rea de serviÃ§o. Casa a terminar com escritura.', '250000.00', 'chacara_k4_1.jpg', 'chacara_k4_2.jpg', 'chacara_k4_3.jpg', 'chacara_k4_4.jpg', 'chacara_k4_5.jpg', 'chacara_k4_6.jpg', 'chacara_k4_7.jpg', 'chacara_k4_8.jpg', 'chacara_k4_9.jpg', ''),
(10, 1, 'VENDA', 'ChÃ¡cara em SÃ£o LourenÃ§o', 'Ã“tima ChÃ¡cara em SÃ£o LourenÃ§o', '700.00', 'IMG-20171130-WA0006.jpg', '', 'IMG-20171130-WA0092.jpg', '', '', '', '', '', '', NULL),
(12, 1, 'ALUGUEL', 'Salas comerciais no Centro de Barra Mansa - RJ', 'Salas climatizadas com data show em frente ao jardim das preguiÃ§as, com Ã³tima estrutura mobiliÃ¡ria para cursos e outros eventos, salas com estrutura administrativa, banheiros masculino e feminino. Valor do Aluguel sem condomÃ­nio', '500.00', 'salasComBM-04.jpg', 'salasComBM-01.jpg', 'salasComBM-02.jpg', 'salasComBM-03.jpg', 'salasComBM-05.jpg', 'salasComBM-06.jpg', 'salasComBM-07.jpg', 'salasComBM-08.jpg', 'salasComBM-09.jpg', NULL),
(13, 1, 'VENDA', 'Casa na Granja em Barra Mansa - RJ', 'Casa com 400 m2 de Ã¡rea construÃ­da, 04 quartos, 01 suÃ­te, copa, cozinha, sala, escritÃ³rio, banheiro social com banheira, 03 vagas de garagem, grande Ã¡rea livre para lazer e piscina, edÃ­cula em dois andares, canil, grande terraÃ§o com banheiro, Ã³tima sauna com salÃ£o de jogos, jardim e escritura com projeto. ', '700000.00', 'granjabm04.jpg', 'granjabm06.jpg', 'granjabm07.jpg', 'granjabm08.jpg', 'granjabm001.jpg', 'granjabm02.jpg', 'granjabm03.jpg', 'granjabm10.jpg', 'granjabm05.jpg', NULL),
(14, 1, 'VENDA', 'Apartamento na Taquara no Rio de Janeiro - RJ', '02 quartos, Sala, Cozinha, Ãrea de serviÃ§os, Banheiro social, Sem vaga de garagem, Ãrea central da taquara perto do Supermercado Guanabara, Presunic,  Lis Render, Casa e VÃ­deo, BRT e amplo comÃ©rcio com toda rede bancÃ¡ria. ', '180000.00', 'taquara3.jpg', 'taquara.jpg', 'taquara1.jpg', 'taquara2.jpg', 'taquara4.jpg', 'taquara5.jpg', 'taquara7.jpg', 'taquara8.jpg', 'taquara9.jpg', NULL),
(15, 1, 'VENDA', 'Casa no bairro Vila Ursulino - Barra Mansa - RJ', 'Dois quartos, Sala, Cozinha, Banheiro social e Sem garagem.', '60000.00', 'vilaursulino3.jpg', 'vilaursulino1.jpg', 'vilaursulino4.jpg', 'vilaursulino6.jpg', 'vilaursulino8.jpg', 'vilaursulino12.jpg', 'vilaursulino7.jpg', 'vilaursulino5.jpg', 'vilaursulino12.jpg', NULL),
(16, 1, 'VENDA', 'Auto Center no no bairro Ano Bom - Barra Mansa - RJ', 'Auto Center completo no bairro Ano Bom em Barra Mansa, sÃ³ entrar e trabalhar com estoque de peÃ§as e mÃ¡quinas e equipamentos completos.', '95000.00', 'autoanobom6.jpg', 'autoanobom4.jpg', 'autoanobom1.jpg', 'autoanobom2.jpg', 'autoanobom3.jpg', 'autoanobom5.jpg', 'autoanobom7.jpg', 'autoanobom8.jpg', 'autoanobom9.jpg', NULL),
(17, 1, 'ALUGUEL', 'Casa na Major JosÃ© Bento - Ano Bom - Barra Mansa - RJ ', 'Casa com 80 mÂ², TrÃªs quartos, Sala, Copa, Cozinha, Ãrea de serviÃ§o, Ampla Ã¡rea de quintal com pequena casa no tÃ©rreo.\r\nVenda a combinar.', '800.00', 'majorjosebento04.jpg', 'majorjosebento07.jpg', 'majorjosebento02.jpg', 'majorjosebento05.jpg', 'majorjosebento01.jpg', 'majorjosebento09.jpg', 'majorjosebento03.jpg', 'majorjosebento06.jpg', 'majorjosebento08.jpg', NULL),
(18, 1, 'VENDA', 'Terreno em Porto Real - RJ', 'Terreno Porto Real com 600mÂ² com escritura.', '80000.00', 'terrenoportoreal03.jpg', 'terrenoportoreal04.jpg', 'terrenoportoreal02.jpg', 'terrenoportoreal01.jpg', 'terrenoportoreal04.jpg', 'terrenoportoreal03.jpg', 'terrenoportoreal02.jpg', 'terrenoportoreal01.jpg', 'terrenoportoreal04.jpg', NULL),
(19, 1, 'VENDA', 'Loja no Centro de Barra Mansa - RJ ', 'Loja no Centro de Barra Mansa com estoque no valor de R$ 70.000,00 completÃ­ssima.', '70000.00', 'lojacentrobm02.jpg', 'lojacentrobm01.jpg', 'lojacentrobm03.jpg', 'lojacentrobm04.jpg', 'lojacentrobm05.jpg', 'lojacentrobm06.jpg', 'lojacentrobm04.jpg', 'lojacentrobm01.jpg', 'lojacentrobm02.jpg', NULL),
(20, 1, 'VENDA', 'SÃ­tio no Ataulfo de Paiva - Distrito  de Barra Mansa - RJ', 'SÃ­tio com casa central com 5 quartos, 01 suÃ­te, Cozinha, Varanda panorÃ¢mica, Lago, Casa de caseiro com 2 quartos, Sala, Cozinha, Banheiro , Curral para cavalo e bois, Amplo pasto, Ãrea de lazer com piscina, Ãrea de churrasqueira com forno, FogÃ£o a lenha, Piam, Geladeiras,  Sauna com ducha e dois banheiros. Ãrea a construir de 2 aptos de 50mÂ² cada.', '1500000.00', 'sitioadaufo10.jpg', 'sitioadaufo03.jpg', 'sitioadaufo08.jpg', 'sitioadaufo01.jpg', 'sitioadaufo02.jpg', 'sitioadaufo04.jpg', 'sitioadaufo07.jpg', 'sitioadaufo09.jpg', 'sitioadaufo06.jpg', NULL),
(21, 1, 'VENDA', 'Terreno em Angra dos Reis - RJ', 'Terreno com 2500 mÂ², 30x84, com Pier, de frente para a BaÃ­a de Angra e condomÃ­nio serenar.\r\nÃ“timo preÃ§o!', '180000.00', 'terreno-angra-01.jpg', 'terreno-angra-02.jpg', 'terreno-angra-03.jpg', 'terreno-angra-04.jpg', 'terreno-angra-01.jpg', 'terreno-angra-02.jpg', 'terreno-angra-03.jpg', 'terreno-angra-04.jpg', 'terreno-angra-01.jpg', NULL),
(22, 1, 'VENDA', 'Apto com cobertura na Baia de Angra do Reis - RJ', 'Apto de cobertura de frente para baia de Angra com aproximadamente 120 mÂ², 3 quartos, 02 suÃ­tes, Cozinha, Sala de jantar, Sala de TV, Ãrea de churrasqueira com churrasqueira, Banheiro e ducha, 03 varandas panorÃ¢micas, linda vista, 02 vaga de garagem, 01 vaga de lancha, condomÃ­nio com piscina privativa. Ao lado do condomÃ­nio Serenar FÃ¡cil com acesso a Rio-Santos na altura do trevo para Barra Mansa.', '850000.00', 'casa_angra_II-08.jpg', 'casa_angra_II-04.jpg', 'casa_angra_II-01.jpg', 'casa_angra_II-02.jpg', 'casa_angra_II-05.jpg', 'casa_angra_II-06.jpg', 'casa_angra_II-07.jpg', 'casa_angra_II-09.jpg', 'casa_angra_II-10.jpg', NULL),
(23, 1, 'VENDA', 'Casa em Angra dos Reis - RJ', 'Casa em Angra dos Reis de rente para o CondomÃ­nio Serenar, com 03 quartos, banheiro social, cozinha, Ã¡rea de serviÃ§o, sala, quintal na frente e nos fundos, pier pra lancha, amplo terreno com aproximadamente 1.200 mÂ².', '0.00', 'casaAngra09.jpg', 'casaAngra08.jpg', 'casaAngra07.jpg', 'casaAngra06.jpg', 'casaAngra05.jpg', 'casaAngra04.jpg', 'casaAngra02.jpg', 'casaAngra01.jpg', 'casaAngra03.jpg', NULL),
(24, 1, 'VENDA', 'Centro de Barra Mansa - RJ', 'Casa no Centro de Barra Mansa com dois ambientes, 05 quartos, Sala de jantar, Cozinha, Área de serviço, Banheiro social, Escritório, 02 vagas de garagem, Área de churrasqueira, Piscina, Sauna com banheiro, Varanda, Portão eletrônico e Monitoramento com câmeras.', '1700000.00', '7e5cb576e77e9a31527c5647830bf54c.jpeg', '65d8bd65f6fb448d21ac0aa3df75fbc8.jpeg', '0b7938d12f8195226f7b0b5e535ce006.jpeg', 'f2c9a397c0837d2d615b10fb325e6a30.jpeg', '451e48f25326fceafdd8667d19996b71.jpeg', 'b1f467c91010ee25fdf03f84535605ca.jpeg', '5950efdff6b6daf3608b33d65c71b80b.jpeg', 'f73677d46af8d9a691fc7d410c3f9b76.jpeg', '1f726b79620a5bcb68f0bcc7082b8c6f.jpeg', NULL),
(25, 1, 'VENDA', 'Terrenos na Colônia Santo Antônio - Barra Mansa - RJ', '03 Terrenos no bairro Colônia Santo Antônio em Barra Mansa - RJ, 10x44 = 440 m².\r\nValor de cada terreno R$ 150.000,00.', '150000.00', '6942a92f6861bc3c42a65333da43144b.jpg', '42833f0e29e7efdd268ec88ebebcaced.jpg', '086b0600f44083b8dedfab028b4e00f9.jpeg', 'ca5f99c89c42b6bb17aa751c80130aca.jpeg', 'f126cabb1f8aabc0f27c32988e6b5dec.jpeg', '54b8a16a962bedd70ab450dc2332900b.jpg', '22682499a163d790f4154516381dcdb8.jpg', '905d05ba9b8f9068a2ce2671b53d0c8c.jpeg', '2cd5e0fa0916b29651da2068252ae620.jpeg', NULL),
(26, 1, 'VENDA', 'Galpão com Apartamento no Ano Bom em Barra Mansa - RJ', 'Galpão com apartamento no Bairro Ary Parreiras no bairro Ano Bom, Galpão com 12x15, Galpão direito com 6mts, Apartamento com 4 quartos e uma suíte, banheiro social, sala, copa cozinha, Escritura na mão, terreno com 1.200m². Imperdível!!!', '450000.00', '9731f8986962b4da24403e3ca0496d0c.jpg', 'c31ccb88b474df578a9c126af7aa240b.jpg', '143479c548623009618dad3f1426e7c3.jpg', '5350ce27b0bfa9c5564e516e8004a5ec.jpg', 'f644d7d0a7469228904aac911e5df193.jpg', 'f043c8fce117289ecc4e9a8ee744d8cf.jpg', '0b31230903c6f12362869cc6d01b286d.jpg', '799b8c4e391175c1af17fcb61349264c.jpg', '5c3e6243f81bbcc09b7ceff614503f43.jpg', NULL),
(27, 1, 'VENDA', 'Sí­tio no bairro Roma II - Volta Redonda - RJ', 'Sítio com 225.000m², 02 casas, 03 quartos, Sala, Cozinha, Banheiro social, área de 80m², Campo de futebol, Lago com peixes, área de churrasqueira, Piscina olímpica, Sauna, Salão de festas, Dormitórios com 03 banheiros e 04 duchas.', '2000000.00', '1a6e6b7a731ae1b35bf21bd5ce4fa829.jpeg', 'e1d812e226350ae16b51541dc6c11491.jpg', 'a871683f89aded9e851f3a47358045b0.jpg', '6284e497aa79af0b9903278831fae8c9.jpg', '1e935240b54929c9f42c320f5b86f054.jpg', '1c1ff6b59e0249dc5b674d103ac5fa1b.jpg', 'a4e3e27d839f0e4170aa578d67002925.jpeg', '0910ce863c87318ef92ead056671d204.jpg', 'c2c72b51face5025539342cf73f64b07.jpeg', NULL),
(34, 1, 'VENDA', '  Casa no Parque das Garças - Roma - Volta Redonda', 'Casa: Com 2 Quartos, Sala, Cozinha, Banheiro Social, Quintal com 120m² e 01 vaga de garagem.\r\nMais 40m² coberto em baixo da casa, podendo ser usado para área de Serviço.\r\nPerto do ponto de ônibus e padaria.\r\n', '240000.00', 'e2d13ed83106a99810e57b519ed66b8e.jpeg', 'f8b3e4e821bbe0f0d1c5a9f21a8ef417.jpeg', '405486743a1b56b98f502b9c573b9d17.jpeg', '4fc2e698ed4d3679a54020e47f4e0ee3.jpeg', 'da858b45c6a5592977056a1d5c60fc06.jpeg', 'dd4919ee586fbb74221cc0ac13470a11.jpeg', 'ed3ae5811b58a0ea0209847eea58e1cc.jpeg', '57a1303aae416bb52e6473ac261831b4.jpeg', '4460a67eb59f59ef065f8fafe9e1a342.jpeg', NULL),
(36, 1, 'VENDA', 'Apartamento no Edifico Aquarela - Aterrado - Volta Redonda', 'Apartamento de 2 quartos sendo 1 suite , sala , cozinha, banheiro social, varanda, sol da manhã, 2 vagas de garagem, piscina, sauna, salão de festa, churrasqueira, portaria 24-horas. perto do comércio com vários supermercados e farmácia.\r\nLocalizado no 1º andar.', '380000.00', 'DSC02172.jpg', 'DSC02173.jpg', 'DSC02178.jpg', 'DSC02180.jpg', 'DSC02183.jpg', 'DSC02181.jpg', 'DSC02178.jpg', 'DSC02179.jpg', 'DSC02173.jpg', NULL),
(32, 1, 'VENDA', 'Apartamento no Parque das Garças - Roma - Volta Redonda', ' Prédio com Portaria, Apartamento composto de Sala, Sacada, Copa Cozinha 02 Quartos sendo uma Suíte, Banheiro Social, e uma vaga de Garagem Escriturada.\r\nApartamento 85m² escriturada.\r\nÀrea útil apto aproximadamente 67m².\r\nPróximo ao  Ponto do ônibus e padaria.\r\n', '229000.00', 'a7a96a185deba39f6ecbba4a0ffd700c.jpg', '9c581d99e5842b88816373a60298c610.jpeg', '2b5dc251ce5dcd8f0b7158343187cf2e.jpeg', 'a0a89622224d71be92f9a19b4f51ae69.jpg', '8be06e8764a5b121606186496a244eba.jpg', '6d160a57113e97857a5c00a3f99cd9e1.jpg', '7f9526468d12ee62031df8abd0d99f26.jpeg', '0f03ca9210692baa587a1d9534bad40b.jpg', 'ea96eaf34069ec4e23e987d0a3df6433.jpeg', NULL),
(35, 1, 'VENDA', ' Cobertura no Parque das Garças - Roma - Volta Redonda', ' Prédio composto de duas coberturas com portaria banheiro e quarto para funcionários. Apartamento com sala em 2 ambientes com sacada, cozinha,área de serviços,2 quartos sendo uma suíte banheiro social e uma vaga na escritura. Totalmente claro, indevassável e arejado. Todo rebaixado com gesso, cozinha e banheiros com azulejos até o teto.\r\nCobertura  com área de 105m² na escritura contando com área privativa no terraço. \r\n', '248000.00', '8c5bf9f59f2d94bf573f933fafe384ac.jpg', 'a4a1572f4e7f39d60c7130e96da8876b.jpg', '5120814ace22eb6f27d272581144f39c.jpg', '845736d9f81b63af84c98d399e617c26.jpg', 'f5e51ca6cdd9e0601228415211abe6b2.jpg', '1f7797bbeab1488d92da9e92337e3454.jpg', 'd26eac8720000055812c6fa9eb74f578.jpg', '7a2fdc0f22ee87ef0b82da9a35268014.jpg', '54246ee2fb953cdf27721e361954522e.jpg', ''),
(37, 1, 'VENDA', ' Casa de Campo em Barra Mansa', ' Maravilhosa Casa de campo , às margens da Rodovia  Barra Mansa para Angra , depois da garagem da Colitur 1km , dentro asfalto, com 2.000 mil m² , 4 quartos , 3 banheiros, sala , cozinha , tem 454m² de obra , internet na porta , sinal de todas as operadoras de celular, canil , lavanderia , \r\nárea para churrasco.', '1000000.00', '7f6c053781144cb8b1fb3a8ceeedc6ee.jpeg', 'f41f38a374683303c6abfd7e551763c5.jpeg', 'c3c91fc5ea91f85a0d3a7b7e3c9aea91.jpeg', '7335f20ca96e3d7c7f88eed8c36af274.jpeg', '7d359147a0cfc2cd653c4881bc2e820b.jpeg', '02d815e37ec5293d16fcf7b1a7438c1d.jpeg', '6db572e2b57d1d9db26ced553b5851cf.jpeg', '371caa011d62390570cd7d9fa99ad9c0.jpeg', '11aaaa3cbd0d1992f4ab1e65026648dd.jpeg', NULL),
(40, 1, 'VENDA', 'Apartamento na Vila Sta. Cecilia', 'Apartamento na Vila Santa Cecilia , com 2 quartos sendo uma suite, copa cozinha, Banheiro Social, Sala, Sacada e uma vaga de garagem.', '420000.00', '046e9dc41276779129a95b9d537f3365.jpeg', '13b49f342c919af0d4777b6d00f30234.jpeg', '5b6d2c639efca08ce76b5174c2636179.jpeg', '616e5bb3eb714dfe8869abab6531f391.jpeg', '351c9857db1905e38879328c80ca6fa8.jpeg', '3a42191d58b9ccb0709d0c52d57bf08e.jpeg', 'f95e60fb8cf40467885537f79353b2a0.jpeg', 'd55e50de35ceed82ae55e08c5cb7a33f.jpeg', 'e7f2682542d40ea76bd0ab1547e8fe18.jpeg', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
