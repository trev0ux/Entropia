CREATE DATABASE entropia;
USE entropia;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `entropia`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Aquisição_de_prêmios` (INOUT `qtde_pontos` INT, INOUT `qtde_pontos_premios` INT)  BEGIN
    SET qtde_pontos= qtde_pontos - qtde_pontos_premios; 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avatar`
--

CREATE TABLE `avatar` (
  `id_avatar` int(11) NOT NULL,
  `avatar_img` mediumblob,
  `nome_avatar` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avatar`
--

INSERT INTO `avatar` (`id_avatar`, `avatar_img`, `nome_avatar`) VALUES
(1, NULL, 'Esteves'),
(2, NULL, 'Muriel'),
(3, NULL, 'Melo'),
(4, NULL, 'Ariel'),
(5, NULL, 'César'),
(6, NULL, 'James');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cadastro` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` VALUES
(1, 'empresa', 'inovação', NULL, 'empresa@empresa', 'admin', 'admin'),
(2, 'Thaigo', 'Benjamin', '2010-11-03', 'binho.bfb@gmail.com', 'benjamin', '123456'),
(3, 'Dilton', 'Costa', '2019-04-03', 'dilton@gmail.com', 'dilton', '123456'),
(4, 'Andreza', 'Vitório', '2000-03-15', 'dezavitorio@gmail.com', 'andreza', '123456'),
(6, 'Andre', 'Gumacoisa', '2019-04-24', 'andre@gmail.com', 'andre', '123456'),
(7, 'Ruan', 'Felipe', '2019-04-20', 'ruan@gmail.com', 'ruan', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `campanha`
--

CREATE TABLE `campanha` (
  `id_campanha` int(11) NOT NULL,
  `tema` varchar(45) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `objetivo` mediumtext NOT NULL,
  `regra` mediumtext NOT NULL,
  `premio` varchar(45) NOT NULL,
  `foto_camp` varchar(220) DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `campanha`
--

INSERT INTO `campanha` (`id_campanha`, `tema`, `descricao`, `objetivo`, `regra`, `premio`, `foto_camp`, `id_usuariofk`) VALUES
(1, 'Inovacoes tecnologicas', 'Criar rôbos', 'Agilizar processos', '', 'geladeira', 'campanha2.png', NULL),
(2, 'Consumo Consciente', 'Reduzir consumo de energia', 'Agilizar processos', '', 'fogao', 'campanha3.jpg', NULL),
(3, 'Desmatamento', 'Aumentar ganho sustentavel', 'Agilizar processos', '', '100 pontos', 'campanha4.png', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `feed`
--

CREATE TABLE `feed` (
  `id_feed` int(11) NOT NULL,
  `comentario` mediumtext NOT NULL,
  `comentario_data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `feed`
--

INSERT INTO `feed` (`id_feed`, `comentario`, `comentario_data`) VALUES
(1, 'KKKKKK', '2019-04-07 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ideia`
--

CREATE TABLE `ideia` (
  `id_ideia` int(11) NOT NULL,
  `qtde_reacoes_ideias` int(11) DEFAULT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `beneficio` mediumtext NOT NULL,
  `participante` varchar(45) DEFAULT NULL,
  `anexo` mediumblob,
  `id_feedfk` int(11) DEFAULT NULL,
  `id_rankingfk` int(11) DEFAULT NULL,
  `id_validacaofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ideia`
--

INSERT INTO `ideia` (`id_ideia`, `qtde_reacoes_ideias`, `titulo`, `descricao`, `beneficio`, `participante`, `anexo`, `id_feedfk`, `id_rankingfk`, `id_validacaofk`) VALUES
(1, NULL, 'Economizar água', 'Trazer garrafinha', 'Menos dinheiro', ' ', NULL, NULL, NULL, NULL),
(2, NULL, 'Som de fundo', 'TOPDEMAIS', 'Bem-estar ao chegar no local criando uma boa ancora', '@dilton, @andreza', '', NULL, NULL, NULL),
(25, NULL, 'dasd', 'dasdas', 'dasdas', 'saddsa', '', NULL, NULL, NULL),
(26, NULL, 'tete', 'tete', 'tet', 'tetaedawa', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ideiacamp`
--

CREATE TABLE `ideiacamp` (
  `id_ideiaCamp` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `beneficio` mediumtext NOT NULL,
  `anexo` mediumblob,
  `id_campanhafk` int(11) DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Error reading data for table entropia.ideiacamp: #1064 - Você tem um erro de sintaxe no seu SQL próximo a 'FROM `entropia`.`ideiacamp`' na linha 1
INSERT INTO ideiacamp VALUES 
(1,'controle de água','diminuir o gasto de água na empresa', 'economia na conta de água', null, 2, null),
(2,'reutilizar papel', 'imprimir folhas frente e verso','diminuir gastos com papel', null, 3, null),
(3, 'cidades sensiveis', 'cidades que aumentam a participação do cidadão', 'aumentar o lucro', null, 1, null),
(4, 'pareceira com empresas de energia','diminuir gastos com a energia da empresa', 'reenvestir na organização', null, 2, null),
(5, 'realidade aumentada', 'facilitar a elaboração de novas pesquisas', 'lucro imediato para empresa', null, 1, null),
(6, 'palestras de conscientização', 'promover debates e alavancar o conhecimmento dentro do ambiente de trabalho', 'agregar valor e conhecimento aos funcionários', null, 3, null);
-- --------------------------------------------------------

--
-- Estrutura da tabela `medalhas`
--

CREATE TABLE `medalhas` (
  `id_medalha` int(11) NOT NULL,
  `n_medalha` int(11) NOT NULL,
  `tipo_medalha` varchar(220) DEFAULT NULL,
  `id_ideiafk` int(11) DEFAULT NULL,
  `id_ouvidoriafk` int(11) DEFAULT NULL,
  `id_feedfk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Error reading data for table entropia.medalhas: #1064 - Você tem um erro de sintaxe no seu SQL próximo a 'FROM `entropia`.`medalhas`' na linha 1

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodologia`
--

CREATE TABLE `metodologia` (
  `id_metodologia` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `definicao` mediumtext NOT NULL,
  `descricao` mediumtext NOT NULL,
  `objetivo` mediumtext NOT NULL,
  `anexo` mediumblob,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Error reading data for table entropia.metodologia: #1064 - Você tem um erro de sintaxe no seu SQL próximo a 'FROM `entropia`.`metodologia`' na linha 1

-- --------------------------------------------------------

--
-- Estrutura da tabela `ouvidoria`
--

CREATE TABLE `ouvidoria` (
  `id_ouvidoria` int(11) NOT NULL,
  `assunto` varchar(60) NOT NULL,
  `id_setorfk` bigint(20) DEFAULT NULL,
  `mensagem` mediumtext NOT NULL,
  `anexo` mediumblob,
  `id_usuariofk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ouvidoria`
--

INSERT INTO `ouvidoria` (`id_ouvidoria`, `assunto`, `id_setorfk`, `mensagem`, `anexo`, `id_usuariofk`) VALUES
(1, 'reclamação', 0, 'Problemas técnicos', NULL, NULL),
(2, 'reclamação', 2, 'Minha equipe de PFC não faz nada', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE `pontos` (
  `id_pontos` int(11) NOT NULL,
  `qtde_pontos` int(11) NOT NULL,
  `id_ideiafk` int(11) DEFAULT NULL,
  `id_ouvidoriafk` int(11) DEFAULT NULL,
  `id_premiofk` int(11) DEFAULT NULL,
  `id_feedfk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pontos`
--

INSERT INTO `pontos` (`id_pontos`, `qtde_pontos`, `id_ideiafk`, `id_ouvidoriafk`, `id_premiofk`, `id_feedfk`) VALUES
(1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_medalhas`
--

CREATE TABLE `pontos_medalhas` (
  `id_pontos_medalhas` int(11) NOT NULL,
  `id_pontosfk` int(11) DEFAULT NULL,
  `id_medalhasfk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pontos_medalhas`
--

INSERT INTO `pontos_medalhas` (`id_pontos_medalhas`, `id_pontosfk`, `id_medalhasfk`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `premios`
--

CREATE TABLE `premios` (
  `id_premio` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Descricao` mediumtext,
  `qtde_pontos_premios` int(11) NOT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `premios`
--

INSERT INTO `premios` (`id_premio`, `Nome`, `Descricao`, `qtde_pontos_premios`, `id_usuariofk`) VALUES
(1, 'TV LCD 32\'\'', 'HD', 15000, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicações`
--

CREATE TABLE `publicações` (
  `id_publicacoes` int(11) NOT NULL,
  `Publicacoes` mediumtext NOT NULL,
  `Imagens` mediumblob,
  `qtde_reacoes` int(11) DEFAULT NULL,
  `id_feedfk` int(11) DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicações`
--

INSERT INTO `publicações` (`id_publicacoes`, `Publicacoes`, `Imagens`, `qtde_reacoes`, `id_feedfk`, `id_usuariofk`) VALUES
(1, 'Hoje tem festa na firma', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ranking`
--

CREATE TABLE `ranking` (
  `id_ranking` int(11) NOT NULL,
  `Posicoes_pub` varchar(300) DEFAULT NULL,
  `Posicoes_prod` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ranking`
--

INSERT INTO `ranking` (`id_ranking`, `Posicoes_pub`, `Posicoes_prod`) VALUES
(1, '1° - Otimização do armazenamento de documentos', '1°- José');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id_setor` bigint(20) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id_setor`, `nome`) VALUES
(1, 'Administrativo'),
(2, 'Comercial'),
(3, 'Financeiro'),
(4, 'Recursos Humanos'),
(1, 'Operacional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `tipo_usuario` tinyint(1) DEFAULT NULL,
  `id_feedfk` int(11) DEFAULT NULL,
  `id_cadastrofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` VALUES
(1, 1, NULL, 1),
(1, 1, NULL, 2),
(1, 0, NULL, 3),
(1, 1, NULL, 4),
(1, 0, NULL, 5),
(1, 0, NULL, 6),
(1, 0, NULL, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `validacao`
--

CREATE TABLE `validacao` (
  `id_validacao` int(11) NOT NULL,
  `ajustes` mediumtext,
  `status_ideia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `validacao`
--

INSERT INTO `validacao` (`id_validacao`, `ajustes`, `status_ideia`) VALUES
(1, 'Melhore essa porra vei, que escrita é essa?', 'Em análise');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id_avatar`),
  ADD UNIQUE KEY `id_avatar` (`id_avatar`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cadastro`),
  ADD UNIQUE KEY `id_cadastro` (`id_cadastro`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `campanha`
--
ALTER TABLE `campanha`
  ADD PRIMARY KEY (`id_campanha`),
  ADD UNIQUE KEY `id_campanha` (`id_campanha`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id_feed`),
  ADD UNIQUE KEY `id_feed` (`id_feed`);

--
-- Indexes for table `ideia`
--
ALTER TABLE `ideia`
  ADD PRIMARY KEY (`id_ideia`),
  ADD UNIQUE KEY `id_ideia` (`id_ideia`),
  ADD KEY `id_validacaofk` (`id_validacaofk`),
  ADD KEY `id_rankingfk` (`id_rankingfk`),
  ADD KEY `id_feedfk` (`id_feedfk`);

--
-- Indexes for table `ideiacamp`
--
ALTER TABLE `ideiacamp`
  ADD PRIMARY KEY (`id_ideiaCamp`),
  ADD UNIQUE KEY `id_ideiaCamp` (`id_ideiaCamp`),
  ADD KEY `id_campanhafk` (`id_campanhafk`);

--
-- Indexes for table `medalhas`
--
ALTER TABLE `medalhas`
  ADD PRIMARY KEY (`id_medalha`),
  ADD UNIQUE KEY `id_medalha` (`id_medalha`),
  ADD KEY `id_ideiafk` (`id_ideiafk`),
  ADD KEY `id_ouvidoriafk` (`id_ouvidoriafk`),
  ADD KEY `id_feedfk` (`id_feedfk`);

--
-- Indexes for table `metodologia`
--
ALTER TABLE `metodologia`
  ADD PRIMARY KEY (`id_metodologia`),
  ADD UNIQUE KEY `id_metodologia` (`id_metodologia`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`id_pontos`),
  ADD UNIQUE KEY `id_pontos` (`id_pontos`),
  ADD KEY `id_ideiafk` (`id_ideiafk`),
  ADD KEY `id_ouvidoriafk` (`id_ouvidoriafk`),
  ADD KEY `id_premiofk` (`id_premiofk`),
  ADD KEY `id_feedfk` (`id_feedfk`);

--
-- Indexes for table `pontos_medalhas`
--
ALTER TABLE `pontos_medalhas`
  ADD PRIMARY KEY (`id_pontos_medalhas`),
  ADD UNIQUE KEY `id_pontos_medalhas` (`id_pontos_medalhas`),
  ADD KEY `id_pontosfk` (`id_pontosfk`),
  ADD KEY `id_medalhasfk` (`id_medalhasfk`);

--
-- Indexes for table `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`id_premio`),
  ADD UNIQUE KEY `id_premio` (`id_premio`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `publicações`
--
ALTER TABLE `publicações`
  ADD PRIMARY KEY (`id_publicacoes`),
  ADD UNIQUE KEY `id_publicacoes` (`id_publicacoes`),
  ADD KEY `id_feedfk` (`id_feedfk`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_ranking`),
  ADD UNIQUE KEY `id_ranking` (`id_ranking`);
COMMIT;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
