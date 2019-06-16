create database entropia;
use entropia;
-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2019 às 06:32
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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

INSERT INTO `cadastro` (`id_cadastro`, `nome`, `sobrenome`, `data_nasc`, `email`, `usuario`, `senha`) VALUES
(1, 'empresa', 'inovação', '0000-00-00', 'empresa@empresa', 'admin', 'admin'),
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
-- Error reading data for table entropia.campanha: #1064 - Você tem um erro de sintaxe no seu SQL próximo a 'FROM `entropia`.`campanha`' na linha 1

-- --------------------------------------------------------

--
-- Estrutura da tabela `feed`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `comentario` mediumtext NOT NULL,
  `comentario_data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `feed`
--

INSERT INTO `comentario` (`id_comentario`, `comentario`, `comentario_data`) VALUES
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
  `id_comentariofk` int(11) DEFAULT NULL,
  `id_rankingfk` int(11) DEFAULT NULL,
  `id_validacaofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ideia`
--

INSERT INTO `ideia` (`id_ideia`, `qtde_reacoes_ideias`, `titulo`, `descricao`, `beneficio`, `participante`, `anexo`, `id_comentariofk`, `id_rankingfk`, `id_validacaofk`) VALUES
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

--
-- Extraindo dados da tabela `ideiacamp`
--

INSERT INTO `ideiacamp` (`id_ideiaCamp`, `titulo`, `descricao`, `beneficio`, `anexo`, `id_campanhafk`, `id_usuariofk`) VALUES
(1, 'controle de água', 'diminuir o gasto de água na empresa', 'economia na conta de água', NULL, 2, NULL),
(2, 'reutilizar papel', 'imprimir folhas frente e verso', 'diminuir gastos com papel', NULL, 3, NULL),
(3, 'cidades sensiveis', 'cidades que aumentam a participação do cidadão', 'aumentar o lucro', NULL, 1, NULL),
(4, 'pareceira com empresas de energia', 'diminuir gastos com a energia da empresa', 'reenvestir na organização', NULL, 2, NULL),
(5, 'realidade aumentada', 'facilitar a elaboração de novas pesquisas', 'lucro imediato para empresa', NULL, 1, NULL),
(6, 'palestras de conscientização', 'promover debates e alavancar o conhecimmento dentro do ambiente de trabalho', 'agregar valor e conhecimento aos funcionários', NULL, 3, NULL);

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
  `id_comentariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `anexo` varchar(220) DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `metodologia`
--

INSERT INTO `metodologia` (`id_metodologia`, `titulo`, `definicao`, `descricao`, `objetivo`, `anexo`, `id_usuariofk`) VALUES
(1, 'Diagrama de Ishikawa', 'Ã‰ um grÃ¡fico cuja finalidade Ã© organizar o raciocÃ­nio em discussÃµes de um problema prioritÃ¡rio, em processos diversos, especialmente na produÃ§Ã£o industrial.', 'O Sistema permite estruturar hierarquicamente as causas potenciais de determinado problema ou oportunidade de melhoria, bem como seus efeitos sobre a qualidade dos produtos. Permite tambÃ©m estruturar qualquer sistema que necessite de resposta de forma grÃ¡fica e sintÃ©tica (isto Ã©, com melhor visualizaÃ§Ã£o). O Diagrama pode evoluir de uma estrutura hierÃ¡rquica para um diagrama de relaÃ§Ãµes, uma das sete ferramentas da qualidade desenvolvidas por Ishikawa, que apresentam uma estrutura mais complexa e nÃ£o hierÃ¡rquica.', 'NÃ£o hÃ¡ limites para a utilizaÃ§Ã£o do diagrama de Ishikawa. As empresas que preferem ir alÃ©m dos padrÃµes convencionais podem identificar e demonstrar em diagramas especÃ­ficos a origem de cada uma das causas do efeito, isto Ã©, as causas das causas do efeito. ', '770bd61498b2afa76ac15bddbc7c13c7', NULL);

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
  `id_comentariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pontos`
--

INSERT INTO `pontos` (`id_pontos`, `qtde_pontos`, `id_ideiafk`, `id_ouvidoriafk`, `id_premiofk`, `id_comentariofk`) VALUES
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
  `qtde_pontos_premios` int(11) NOT NULL,
  `fotoPremio` varchar(220) NOT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `premios`
--

INSERT INTO `premios` (`id_premio`, `Nome`, `qtde_pontos_premios`, `fotoPremio`, `id_usuariofk`) VALUES
(1, 'TV LCD 51', 500, '6ee770d6e8de1df512a44b689b32b6d0.png', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicações`
--

CREATE TABLE `posts` (
  `id` int(20) NOT NULL,
  `id_postador` int(20) NOT NULL,
  `data` varchar(200) NOT NULL,
  `postagem` text NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `curtidas` int(200) NOT NULL,
  `id_comentariofk` int(11) DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicações`
--

INSERT INTO posts (`id`, `id_postador`, `data`, `postagem`, `imagem`, `curtidas`, `id_comentariofk`, `id_usuariofk`) VALUES
(2, 1, '30/12/2018 22:46', 'dsadsad', 4, 'images/uploads/aemail.png', 2, NULL, NULL);

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

CREATE TABLE `usuarios` (
`id` int(20) NOT NULL,
  `nivel` int(20) NOT NULL DEFAULT '1',
  `id_comentariofk` int(11) DEFAULT NULL,
  `id_cadastrofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuarios` (`id`,  `nivel`, `id_comentariofk`, `id_cadastrofk`) VALUES
(1, 1, NULL, NULL);


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
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD UNIQUE KEY `id_comentario` (`id_comentario`);

--
-- Indexes for table `ideia`
--
ALTER TABLE `ideia`
  ADD PRIMARY KEY (`id_ideia`),
  ADD UNIQUE KEY `id_ideia` (`id_ideia`),
  ADD KEY `id_validacaofk` (`id_validacaofk`),
  ADD KEY `id_rankingfk` (`id_rankingfk`),
  ADD KEY `id_comentariofk` (`id_comentariofk`);

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
  ADD KEY `id_comentariofk` (`id_comentariofk`);

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
  ADD KEY `id_comentariofk` (`id_comentariofk`);

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

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_ranking`),
  ADD UNIQUE KEY `id_ranking` (`id_ranking`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);
  
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
