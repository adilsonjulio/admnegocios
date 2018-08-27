-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql05-farm62.kinghost.net
-- Tempo de geração: 24/08/2018 às 09:14
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
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(15,2) NOT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `foto4` varchar(255) DEFAULT NULL,
  `foto5` varchar(255) DEFAULT NULL,
  `foto6` varchar(255) DEFAULT NULL,
  `foto7` varchar(255) DEFAULT NULL,
  `foto8` varchar(255) DEFAULT NULL,
  `foto9` varchar(255) DEFAULT NULL,
  `foto10` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `lancamento`, `tipo`, `bairro`, `cidade`, `titulo`, `descricao`, `preco`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`, `foto10`) VALUES
(3, 1, 'VENDA', 'Centro', 'Resende', 'Sub Loja no Shopping Resende', 'Sub loja no Barbosa lima ao lado do shopping de Resende. Escritura com 180m2', '350000.00', 'efc97d2adfce6b1edf15862aded95668.jpg', '6049ea7ab58a1ab601ad2da5417ba4de.jpg', 'd8c16436dc8929bd6ef6c330466298b9.jpg', '7b9e1f9653f2fead490507983429f44b.jpg', '339264b4dbc711746961c49cddb66ee1.jpg', '329dd950b90c5a13123fd816029305c3.jpg', '0c7a6b2e11b1bca82a4a46fb177bbe3b.jpg', 'bdb404b16dfafe31ecccb5f78da4f402.jpg', '07d42ced1e40805e7f6d47d93c5496de.jpg', ''),
(2, 1, 'VENDA', 'Centro', 'Barra Mansa', 'Kitnet', 'Kitnet com 23 m2 com 03 comodos. Escritura RGI IPTU ', '90000.00', 'db470d24015172f601d2e3ca9aed5117.jpg', '34387033573ab1b5a94da3c43502d4c3.jpg', '13b8cc214bb8413f32e3efa6021b6e7a.jpg', '4a372a3a7bf28b267fa800d544fb7e3f.jpg', 'cca671d310208e0174c124ecdfa3e9fe.jpg', '8cfed50729cc231c8f6a5a8552119d43.jpg', 'bdf80310215ca0ff84be182ebd6d6b09.jpg', 'fb9dea76e106c68ae1c740fe57b73cdc.jpg', '9beb3832c85e5bcd368b6dede873714d.jpg', ''),
(5, 1, 'VENDA', 'Colônia Santo Antônio', 'Barra Mansa', 'Terreno na Colônia', 'Terreno na Colônia Santo Antônio  11x30 330mt', '125000.00', '40419869159ff23e54fc5e89a6ff6a28.jpg', 'e650b1e46dbf514957caa83f367f7764.jpg', '7874c76f1df305a44e1dfecb8749b3ca.jpg', '767013fe7239de856c546f0254315cf2.jpg', '039990ed54562f23bc058495d3a9e503.jpg', 'f9bf1f4bedfa24645260ea67f5aa7d83.jpg', '1ed364d9f9cdd3246be61e7900053377.jpg', '3641fc81386842adbbac1b93d3e58100.jpg', '4be6eabc71485e4094da298cfbb16096.jpg', ''),
(6, 1, 'VENDA', 'Vista Alegre', 'Barra Mansa', 'Casa', '03 Casas, terreno com 300 m2, casa de frente com 03 quartos, sala, cozinha, banheiro social, 02 vagas e garagem. Duas casas nos fundos com 01 quarto, sala,  cozinha e banheiro.', '400000.00', 'd2e312be4b07a7a2e80f6f88cb47138f.jpg', '003ebf7cc45c1d7edfd7eea63f783b90.jpg', 'b52d822b6e7a5ca7e0c8274a136fe78c.jpg', '66e1c39055e5a73e41f6420e811ab48d.jpg', '115d2d893680786b610b587b28cc056e.jpg', '452e145bed1e9ab481f51d4e427d994f.jpg', '9a26f92d31b7b32e72301e00440806ed.jpg', '61d04df2e4e2a56102ba95fb339e1963.jpg', 'f5c39df999d00b0ce6aaad07bb6d15ba.jpg', ''),
(7, 1, 'VENDA', 'Ano Bom', 'Barra Mansa', 'Galpão e Loja', 'Ótimo galpão e loja no Ano Bom perto do Supermercado 365, com 140m2, compatível para fazer novo andar com banheiro e cozinha alugado e funcionando,  Ótimo para implantação da sua empresa.', '550000.00', '01121c636178c6b28d5cb147ec965da5.jpeg', 'a4e4517699e5c8d14af9321f98fd53ba.jpeg', '4d5790b24caed4c70d0b84347070ad2e.jpeg', '33f48ca58f1c70b11c1793d7b902faac.jpeg', 'b8f98bdd02ef6f8ba40cc85b15087135.jpeg', '0cd51f717b6bcfbef925f2962cb4f1cc.jpeg', 'cba67f4d200488ee8ea08f50a2e83efa.jpeg', '59f5218cd47d46aa305718cb7cff17df.jpeg', '208b7cc507de30fd17d894a0ab70d586.jpeg', ''),
(8, 1, 'VENDA', 'Centro', 'Barra Mansa', 'Sala', 'Sala com aproximadamente 18m2 na Rua Dr. Mário Ramos no Centro de Barra Mansa com escritura.', '40000.00', '86fc94c6ae1bee6974cb057c17f547b8.jpg', '975470ac682b9e2c4994d37ea749b34b.jpg', '7b9f2b7e5864d47bfc1c4de74807f05f.jpg', '0cf7353767efdfeba367157e73f9d47b.jpg', 'b3c790d23d698d465a24195996519fe9.jpg', '06c69e64892911c88f13de7a0ae2937e.jpg', 'd9409fc4bcf4d041bb9e816a6d11a1a9.jpg', '4c73989c86f805a92aae7322f2f72192.jpg', '33e46badbd7f403529163f8a2bd0d3dc.jpg', ''),
(9, 1, 'VENDA', 'Km 4', 'Barra Mansa', 'Chácara', 'Chácara no bairro KM-4 com terreno de 800 mt2 aproximadamente, 02 vagas de garagem, Área de churrasqueira, piscina de  15.000 litros funcionando, casa com 02 quartos, duas suítes com closet, sala com dois ambientes, copa, cozinha, Área de serviço. Casa a terminar com escritura.', '250000.00', 'c4277b1c88a198d85065c8637956b6bc.jpg', '429563e53549d40a9969a903ea2a28e9.jpg', '48f19a27c6e21b384dc580029f285c87.jpg', '38652a2c654adae9bae1b4356e655adc.jpg', 'e137197886c1184acf393d23b2f23f14.jpg', 'c50fe8d1a16e851bd3d0bcdc91fb7510.jpg', '27e2e8b2444f9ad81fa2356bd355d97e.jpg', '23718975b1b5cc7f2e6e83bcedf4e594.jpg', '279ec1550b6ed4d76c3ae2d6587ee8cc.jpg', ''),
(10, 1, 'VENDA', '0,00', 'São Lourenço', 'Chácara ', 'Ótima Chácara em São Lourenço', '700.00', 'cb77f26e8e32abf335874ab1da2f18a2.jpg', 'efc7d1511932996cc6e34f38db167562.jpg', '376ce018687893b5953ac381ed377276.jpg', 'c85d4916b1b51826cb7bbf9468a88756.jpg', 'bed7a1cee11e111c94b2ae7843158719.jpg', '46a1570c772914e525061b296169167e.jpg', 'd22136fe23f502a37f27ac6dde9db1f3.jpg', '717dfd2d14693058855693f765a0fa3a.jpg', '5046073b850ddbb27f174e4f6f2ce1ec.jpg', NULL),
(12, 1, 'VENDA', 'Centro', 'Barra Mansa', 'Salas comerciais', 'Salas climatizadas com data show em frente ao jardim das preguiças, com Ótima estrutura mobiliária para cursos e outros eventos, salas com estrutura administrativa, banheiros masculino e feminino. Valor do Aluguel sem condomínio', '500.00', '5131da6d52a78aba185a4a6e444b802a.jpg', '360f6aa5ceedb7b813fa651376802374.jpg', '3f274bcab6e318fec40934838d17ad5b.jpg', '3f04b9e9df611659ef9d693cf1cbc7c9.jpg', '566753c7debd24cff67e6da78a541cd6.jpg', 'c113b0d99b99f1c0e0322b3cd5a1800f.jpg', 'd539710c326e1a948a39b900f991dcea.jpg', '38037296402266d19fbd596895da1f2e.jpg', '27ab8a4a1855f188ce3e041b75e5637d.jpg', NULL),
(13, 1, 'VENDA', 'Granja', 'Barra Mansa', 'Casa', 'Casa com 400 mt2 de área construída, 04 quartos, 01 suíte, copa, cozinha, sala, escritório, banheiro social com banheira, 03 vagas de garagem, grande Ã¡rea livre para lazer e piscina, canil, grande terraço com banheiro, Ótima sauna com salão de jogos, jardim e escritura com projeto. ', '700000.00', '6cc33fde1529bf7d97879c792d5d91cd.jpg', '24e84c26a79162783ff67eb1ad7e805b.jpg', '97448ac6548c45641ae8b83d7df152c0.jpg', '6c3dfba759593f8e11a99cceee6f48f6.jpg', 'fc84e5e2f06f62e3ae6782046382974d.jpg', '1595bac5b11b918d1217cbb2db4a8ccf.jpg', '5b710938515221285e6151663c730108.jpg', 'd1c02666efa28087164f82ae4c90a8ca.jpg', '77dcb6352a23b865b7c3162251d3e7e0.jpg', NULL),
(14, 1, 'VENDA', 'Taquara', 'Rio de Janeiro', 'Apartamento', '02 quartos, Sala, Cozinha, Área de serviços, Banheiro social, Sem vaga de garagem, Área central da taquara perto do Supermercado Guanabara, Presunic,  Lis Render, Casa e Vídeo, BRT e amplo comércio com toda rede bancária. ', '180000.00', '91259db28c012c7730d1732b10d64b43.jpg', '6b237930f84b2c21cd75b65166a551aa.jpg', 'c97a35e59add37737a0fca8cfb0945d2.jpg', 'c5380b525b2f816d03b9b0ebfbcb67aa.jpg', '4787b3c9a7228a99f265e034e3837cf4.jpg', 'baa248169036469f8313e94136ef2f2a.jpg', '4a633a28013ff99a80bf6e308ae45d6c.jpg', '7d47572da5296c46a185037b6c955d40.jpg', '3bd0055b8987d23b28bf74008fd62ef3.jpg', NULL),
(15, 1, 'VENDA', 'Vila Ursulino', 'Barra Mansa', 'Casa', 'Dois quartos, Sala, Cozinha, Banheiro social e sem garagem.', '60000.00', '949d0cdfce81f63452cf0249562d8094.jpg', 'b7b6c132e5b8b1df88fb30ce4ea1b286.jpg', 'c43e993e39ae22a6d1ded0f78f588b99.jpg', 'c77cd1445c8649d1caee817955e71595.jpg', 'd6ed2f569dbd6997f408679def661eee.jpg', 'e0ac04f56ba830bc372c5a6bacd9be9a.jpg', '253426fa826229b9d0abb02d52042ec2.jpg', '200e9292fef587254bbffebad36b885e.jpg', '9fc20e94074d3127327c88e22557fece.jpg', NULL),
(16, 1, 'VENDA', 'Ano Bom', 'Barra Mansa', 'Auto Center', 'Auto Center completo no bairro Ano Bom em Barra Mansa, só entrar e trabalhar com estoque de peças e máquinas e equipamentos completos.', '95000.00', 'df9d2aabf392ad76c76f569fce594419.jpg', '6afa6f47e4995a3eb24414a305bb4bdb.jpg', '3d2b64e3f231e2f691ddfbf8426ee4a9.jpg', '9b7953446574b2ac0cc89c2fda32d32e.jpg', '7c6eb9850930bf8abfb7fafd15497f4c.jpg', '1f6f9e7b2c453ef7c5bd840b428aeb36.jpg', '448ec1ba195af747da66d45b0722c347.jpg', '84f911c76d7c55290288ff688901ed98.jpg', '36b26d78136af9b0b5b7bf48363cd49c.jpg', NULL),
(17, 1, 'VENDA', 'Ano Bom', 'Barra Mansa', 'Casa no Ano Bom', 'Casa com 80 mt², Três quartos, Sala, Copa, Cozinha, Área de serviço, Ampla Área de quintal com pequena casa no térreo.\r\nVenda a combinar.', '800.00', '39c1bf8263cbea5ed47833dcd511cf78.jpg', '7f00d78ce24bffca61426d697531e66f.jpg', '9039c06cefea3996cb4fb1c4e49041c2.jpg', '8cb8c5c938037ffd56f7925b7167fb13.jpg', 'f9fafb782a84f238cff4875a6b8d40dd.jpg', '5e0110a4d28e9bf7c0e2042344ce6656.jpg', '48bdc348a589fa0bd7855ed8eede1427.jpg', '33e3530f74d0dff00e0231822337de1b.jpg', '3197bbe1161e719179f88f59d8a05bd2.jpg', NULL),
(18, 1, 'VENDA', 'Centro', 'Porto Real', 'Terreno em Porto Real - RJ', 'Terreno Porto Real com 600mt² com escritura.', '80000.00', 'df8c959a186ced8adb22629d6bfdb755.jpg', '9e3f2db50475b28ff53346520aee8f5c.jpg', '0d2a2c2389817e75fc9ae82f01e0adc6.jpg', 'fd1b05e9ad3567fcf1e89cdfb9ef35e3.jpg', '50b837c075c4d4136d5ec08955612882.jpg', '577f505e4e318796bc31e540cbbb71e0.jpg', '7d09f7049a1ffc8c63905b1f575c8b68.jpg', '9bc34049ed8b39d688351f3fd54de98d.jpg', '11cd3e87c9c81586a35990c75047364a.jpg', NULL),
(19, 1, 'VENDA', 'Centro', 'Barra Mansa', 'Loja no Centro', 'Loja no Centro de Barra Mansa com estoque no valor de R$ 70.000,00 completí­ssima.', '70000.00', 'ec380344535a1bc10256d4b9d082274c.jpg', '386bd038129b6a4d05d2b08000876726.jpg', '13de2cf14403f7510e86ea1ef79def61.jpg', '5885e32708ade85a612ec52d72786a84.jpg', '1281e32e179bd0292ff38ae24e67c80d.jpg', 'lojacentrobm06.jpg', '23140a093698ef3070927b8e0b515362.jpg', '95713f3cb0b83e5e6dbaf43f3ba599a7.jpg', 'ce66bfc93a6a03d7be7d0de06d5e6d4a.jpg', NULL),
(20, 1, 'VENDA', 'Ataúlfo de Paiva', 'Distrito de Marra Mansa', 'Sítio no Ataúlfo de Paiva', 'Sítio com casa central com 5 quartos, 01 suíte, Cozinha, Varanda panorâmica, Lago, Casa de caseiro com 2 quartos, Sala, Cozinha, Banheiro, Curral para cavalo e bois, Amplo pasto, Área de lazer com piscina, Área de churrasqueira com forno, Fogão a lenha, Piam, Geladeiras,  Sauna com ducha e dois banheiros. Ãrea a construir de 2 aptos de 50 mt² cada.', '1500000.00', 'de6031971294a8f4504c5171065f4232.jpg', '33a466a36df059eb38b89b0f7f4837ef.jpg', '4c49d891709ef9c46527b56436da1a26.jpg', '1d997b4ff8f1a909c00df7cdf14e75a5.jpg', 'f832c50147336323762a3e2c51bff476.jpg', '8a610761137808c5c515e19f6f427ff9.jpg', 'd5a352b1bd1f543a443c7550a6de2691.jpg', '125563f84d1ba2ba89b57504aefb3510.jpg', '5ccbc5b924e8bd71a1614cf06a360116.jpg', NULL),
(21, 1, 'VENDA', 'Baía de Angra', 'Angra dos Reis', 'Terreno em Angra dos Reis', 'Terreno com 2500 mt², 30x84, com Pier, de frente para a Baía de Angra e condomínio serenar.\r\nÓtimo preço!', '180000.00', '27b82e570dbf17a836555c442ec49c4d.jpg', 'b3a63402cf9dfebd5360904b147d3d6c.jpg', 'ea82c4e32171adb8167e46400d50c16a.jpg', '1be182b220ca433fc3b8c16f50917c4e.jpg', 'b93ac111b48a68eabae060e5a904e150.jpg', '780d70c5a84371a27b69725ef304569c.jpg', 'd5b86f3b614223122fb10830d0e25206.jpg', '671d2a7aa2c0a784faa03704ad00e24d.jpg', '71b83b3532553637b1895d3374a76867.jpg', NULL),
(22, 1, 'VENDA', 'Baía de Angra', 'Angra dos Reis', 'Apartamento com cobertura', 'Apto de cobertura de frente para baia de Angra com aproximadamente 120 mt², 3 quartos, 02 suítes, Cozinha, Sala de jantar, Sala de TV, Área de churrasqueira com churrasqueira, Banheiro e ducha, 03 varandas panorâmicas, linda vista, 02 vaga de garagem, 01 vaga de lancha, condomínio com piscina privativa. Ao lado do condomínio Serenar Fácil com acesso a Rio-Santos na altura do trevo para Barra Mansa.', '850000.00', '4ed42f66511fa1f06133e14c6941c1a8.jpg', 'ec1ad3136253ab3bbd58661e222fae35.jpg', '67b210a7f11cdefd3a2b49fab56c3118.jpg', 'c0b3075bb2e54eff2afb7601e7b1c158.jpg', '45be6789e2e60d0e2d8331faa367cfec.jpg', '88ba8d59cc321c529a15c3e55e1d1b81.jpg', '39c63d65f5abf23522e28ff526292ee1.jpg', '6e622f071e00c6c6c9c94b7b5deb9963.jpg', '3afad38589fb8e32fd2ed44741216f7f.jpg', NULL),
(23, 1, 'VENDA', 'Condomínio Serenar', 'Angra dos Reis', 'Casa em Angra', 'Casa em Angra dos Reis de rente para o Condomínio Serenar, com 03 quartos, banheiro social, cozinha, Á¡rea de serviço, sala, quintal na frente e nos fundos, pier pra lancha, amplo terreno com aproximadamente 1.200 mt².', '0.00', '4d6dd522da948f2419a21aa1bcfcaae8.jpg', '18040065b457e4f95e7f1ec750319df9.jpg', '1809a77f923b85263f5210b3c08c7f23.jpg', '742ccdb34885b7dbf80aeca51018a0c5.jpg', '574c277b3e6af01d4ab647e70a75ea86.jpg', '449f924025d814688c5ca5b1e5ebfb6b.jpg', 'de0f64286ded95dbbcc75842c6994641.jpg', '4cfbf182d2ed8647f5746974d9a53baf.jpg', 'd7db835a2ebbc603b6a55ccdc308e876.jpg', NULL),
(24, 1, 'VENDA', 'Centro', 'Barra Mansa', 'Casa no Centro de Barra Mansa', 'Casa no Centro de Barra Mansa com dois ambientes, 05 quartos, Sala de jantar, Cozinha, Área de serviço, Banheiro social, Escritório, 02 vagas de garagem, Área de churrasqueira, Piscina, Sauna com banheiro, Varanda, Portão eletrônico e Monitoramento com câmeras.', '1700000.00', '7e5cb576e77e9a31527c5647830bf54c.jpeg', '65d8bd65f6fb448d21ac0aa3df75fbc8.jpeg', '0b7938d12f8195226f7b0b5e535ce006.jpeg', 'f2c9a397c0837d2d615b10fb325e6a30.jpeg', '451e48f25326fceafdd8667d19996b71.jpeg', 'b1f467c91010ee25fdf03f84535605ca.jpeg', '5950efdff6b6daf3608b33d65c71b80b.jpeg', 'f73677d46af8d9a691fc7d410c3f9b76.jpeg', '1f726b79620a5bcb68f0bcc7082b8c6f.jpeg', NULL),
(25, 1, 'VENDA', 'Colônia Santo Antônio', 'Barra Mansa', 'Terrenos na Colônia', '03 Terrenos no bairro Colônia Santo Antônio em Barra Mansa - RJ, 10x44 = 440 m².\r\nValor de cada terreno R$ 150.000,00.', '150000.00', '6942a92f6861bc3c42a65333da43144b.jpg', '42833f0e29e7efdd268ec88ebebcaced.jpg', '086b0600f44083b8dedfab028b4e00f9.jpeg', 'ca5f99c89c42b6bb17aa751c80130aca.jpeg', 'f126cabb1f8aabc0f27c32988e6b5dec.jpeg', '54b8a16a962bedd70ab450dc2332900b.jpg', '22682499a163d790f4154516381dcdb8.jpg', '905d05ba9b8f9068a2ce2671b53d0c8c.jpeg', '2cd5e0fa0916b29651da2068252ae620.jpeg', NULL),
(26, 1, 'VENDA', 'Ano Bom', 'Barra Mansa', 'Galpão com Apartamento', 'Galpão com apartamento no Bairro Ary Parreiras no bairro Ano Bom, Galpão com 12x15, Galpão direito com 6mts, Apartamento com 4 quartos e uma suíte, banheiro social, sala, copa cozinha, Escritura na mão, terreno com 1.200m². Imperdível!!!', '450000.00', '9731f8986962b4da24403e3ca0496d0c.jpg', 'c31ccb88b474df578a9c126af7aa240b.jpg', '143479c548623009618dad3f1426e7c3.jpg', '5350ce27b0bfa9c5564e516e8004a5ec.jpg', 'f644d7d0a7469228904aac911e5df193.jpg', 'f043c8fce117289ecc4e9a8ee744d8cf.jpg', '0b31230903c6f12362869cc6d01b286d.jpg', '799b8c4e391175c1af17fcb61349264c.jpg', '5c3e6243f81bbcc09b7ceff614503f43.jpg', NULL),
(27, 1, 'VENDA', 'Roma II', 'Volta Redonda', 'Sí­tio', 'Sítio com 225.000m², 02 casas, 03 quartos, Sala, Cozinha, Banheiro social, área de 80m², Campo de futebol, Lago com peixes, área de churrasqueira, Piscina olímpica, Sauna, Salão de festas, Dormitórios com 03 banheiros e 04 duchas.', '2000000.00', '1a6e6b7a731ae1b35bf21bd5ce4fa829.jpeg', 'e1d812e226350ae16b51541dc6c11491.jpg', 'a871683f89aded9e851f3a47358045b0.jpg', '6284e497aa79af0b9903278831fae8c9.jpg', '1e935240b54929c9f42c320f5b86f054.jpg', '1c1ff6b59e0249dc5b674d103ac5fa1b.jpg', 'a4e3e27d839f0e4170aa578d67002925.jpeg', '0910ce863c87318ef92ead056671d204.jpg', 'c2c72b51face5025539342cf73f64b07.jpeg', NULL),
(34, 1, 'VENDA', 'Parque das Garças', 'Volta Redonda', '  Casa', 'Casa: Com 2 Quartos, Sala, Cozinha, Banheiro Social, Quintal com 120m² e 01 vaga de garagem.\r\nMais 40m² coberto em baixo da casa, podendo ser usado para área de Serviço.\r\nPerto do ponto de ônibus e padaria.\r\n', '240000.00', 'e2d13ed83106a99810e57b519ed66b8e.jpeg', 'f8b3e4e821bbe0f0d1c5a9f21a8ef417.jpeg', '405486743a1b56b98f502b9c573b9d17.jpeg', '4fc2e698ed4d3679a54020e47f4e0ee3.jpeg', 'da858b45c6a5592977056a1d5c60fc06.jpeg', 'dd4919ee586fbb74221cc0ac13470a11.jpeg', 'ed3ae5811b58a0ea0209847eea58e1cc.jpeg', '57a1303aae416bb52e6473ac261831b4.jpeg', '4460a67eb59f59ef065f8fafe9e1a342.jpeg', NULL),
(36, 1, 'VENDA', 'Aterrado', 'Volta Redonda', 'Apartamento no Edifico Aquarela', 'Apartamento de 2 quartos sendo 1 suite , sala , cozinha, banheiro social, varanda, sol da manhã, 2 vagas de garagem, piscina, sauna, salão de festa, churrasqueira, portaria 24-horas. perto do comércio com vários supermercados e farmácia.\r\nLocalizado no 1º andar.', '380000.00', 'DSC02172.jpg', 'DSC02173.jpg', 'DSC02178.jpg', 'DSC02180.jpg', 'DSC02183.jpg', 'DSC02181.jpg', 'DSC02178.jpg', 'DSC02179.jpg', 'DSC02173.jpg', NULL),
(32, 1, 'VENDA', 'Parque das Garças', 'Volta Redonda', 'Apartamento', ' Prédio com Portaria, Apartamento composto de Sala, Sacada, Copa Cozinha 02 Quartos sendo uma Suíte, Banheiro Social, e uma vaga de Garagem Escriturada.\r\nApartamento 85m² escriturada.\r\nÀrea útil apto aproximadamente 67m².\r\nPróximo ao  Ponto do ônibus e padaria.\r\n', '229000.00', 'a7a96a185deba39f6ecbba4a0ffd700c.jpg', '9c581d99e5842b88816373a60298c610.jpeg', '2b5dc251ce5dcd8f0b7158343187cf2e.jpeg', 'a0a89622224d71be92f9a19b4f51ae69.jpg', '8be06e8764a5b121606186496a244eba.jpg', '6d160a57113e97857a5c00a3f99cd9e1.jpg', '7f9526468d12ee62031df8abd0d99f26.jpeg', '0f03ca9210692baa587a1d9534bad40b.jpg', 'ea96eaf34069ec4e23e987d0a3df6433.jpeg', NULL),
(35, 1, 'VENDA', 'Parque das Garças', 'Volta Redonda', ' Cobertura no Parque das Garças', ' Prédio composto de duas coberturas com portaria banheiro e quarto para funcionários. Apartamento com sala em 2 ambientes com sacada, cozinha,área de serviços,2 quartos sendo uma suíte banheiro social e uma vaga na escritura. Totalmente claro, indevassável e arejado. Todo rebaixado com gesso, cozinha e banheiros com azulejos até o teto.\r\nCobertura  com área de 105m² na escritura contando com área privativa no terraço. \r\n', '248000.00', '8c5bf9f59f2d94bf573f933fafe384ac.jpg', 'a4a1572f4e7f39d60c7130e96da8876b.jpg', '5120814ace22eb6f27d272581144f39c.jpg', '845736d9f81b63af84c98d399e617c26.jpg', 'f5e51ca6cdd9e0601228415211abe6b2.jpg', '1f7797bbeab1488d92da9e92337e3454.jpg', 'd26eac8720000055812c6fa9eb74f578.jpg', '7a2fdc0f22ee87ef0b82da9a35268014.jpg', '54246ee2fb953cdf27721e361954522e.jpg', ''),
(37, 1, 'VENDA', 'Estrada para Angra', 'Barra Mansa', ' Casa de Campo em Barra Mansa', ' Maravilhosa Casa de campo , às margens da Rodovia  Barra Mansa para Angra , depois da garagem da Colitur 1km , dentro asfalto, com 2.000 mil m² , 4 quartos , 3 banheiros, sala , cozinha , tem 454m² de obra , internet na porta , sinal de todas as operadoras de celular, canil , lavanderia , \r\nárea para churrasco.', '1000000.00', '7f6c053781144cb8b1fb3a8ceeedc6ee.jpeg', 'f41f38a374683303c6abfd7e551763c5.jpeg', 'c3c91fc5ea91f85a0d3a7b7e3c9aea91.jpeg', '7335f20ca96e3d7c7f88eed8c36af274.jpeg', '7d359147a0cfc2cd653c4881bc2e820b.jpeg', '02d815e37ec5293d16fcf7b1a7438c1d.jpeg', '6db572e2b57d1d9db26ced553b5851cf.jpeg', '371caa011d62390570cd7d9fa99ad9c0.jpeg', '11aaaa3cbd0d1992f4ab1e65026648dd.jpeg', NULL),
(40, 1, 'VENDA', 'Vila Santa Cecília', 'Volta Redonda', 'Apartamento na Vila', 'Apartamento na Vila Santa Cecilia , com 2 quartos sendo uma suite, copa cozinha, Banheiro Social, Sala, Sacada e uma vaga de garagem.', '420000.00', '046e9dc41276779129a95b9d537f3365.jpeg', '13b49f342c919af0d4777b6d00f30234.jpeg', '5b6d2c639efca08ce76b5174c2636179.jpeg', '616e5bb3eb714dfe8869abab6531f391.jpeg', '351c9857db1905e38879328c80ca6fa8.jpeg', '3a42191d58b9ccb0709d0c52d57bf08e.jpeg', 'f95e60fb8cf40467885537f79353b2a0.jpeg', 'd55e50de35ceed82ae55e08c5cb7a33f.jpeg', 'e7f2682542d40ea76bd0ab1547e8fe18.jpeg', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(3) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `adm` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nome`, `email`, `senha`, `adm`) VALUES
(1, 'Adilson', 'admin', 'adm1234', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
