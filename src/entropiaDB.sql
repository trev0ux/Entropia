create database entropia;
use entropia;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
ALTER DATABASE entropia CHARSET = UTF8 COLLATE = utf8_general_ci;

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
  `n_matricula` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `id_setorfk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `nome`, `sobrenome`, `data_nasc`, `n_matricula`, `email`, `usuario`, `senha`, `id_setorfk`) VALUES
(1, 'Carlito', 'Pinho', '1998-04-07', '123456', 'carl123@gmail.com', 'prole12', '123456', NULL),
(2, 'Thaigo', 'Benjamin', '2010-11-03', '34234324', 'binho.bfb@gmail.com', 'benjamin', '123456', NULL),
(3, 'Dilton', 'Costa', '2019-04-03', '5663454543543', 'dilton@gmail.com', 'dilton', '123456', NULL),
(4, 'Andreza', 'Vitório', '2019-04-10', '56435435435', 'dezavitorio@gmail.com', 'andreza', '123456', NULL),
(6, 'Andre', 'Gumacoisa', '2019-04-24', '56435435435', 'andre@gmail.com', 'andre', '123456', NULL),
(7, 'Ruan', 'Felipe', '2019-04-20', '56435435435', 'ruan@gmail.com', 'ruan', '123456', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `campanha`
--

CREATE TABLE `campanha` (
  `id_campanha` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `campanha` mediumtext NOT NULL,
  `tema` mediumtext NOT NULL,
  `descricao` mediumtext NOT NULL,
  `beneficio` mediumtext NOT NULL,
  `anexo` mediumblob,
  `foto_camp` mediumblob,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

--
-- Extraindo dados da tabela `campanha`
--

INSERT INTO `campanha` (`id_campanha`, `titulo`, `campanha`, `tema`, `descricao`, `beneficio`, `anexo`, `foto_camp`, `id_usuariofk`) VALUES
(1, 'Inovacoes tecnologicas', '', '', 'Criar rôbos', 'Agilizar processos', NULL, NULL, NULL),
(2, 'Consumo Consciente', '', '', 'Reduzir consumo de energia', 'Agilizar processos', NULL, NULL, NULL),
(3, 'Desmatamento', '', '', 'Aumentar ganho sustentavel', 'Agilizar processos', NULL, NULL, NULL);

-- --------------------------------------------------------

CREATE TABLE `ideiaCamp` (
  `id_ideiaCamp` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `beneficio` mediumtext NOT NULL,
  `anexo` mediumblob,
  `id_campanhafk` int(11) DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

INSERT INTO `ideiaCamp` VALUES 
(1,'realidade aumentada','aumenta capacidade de testes','ganho financeiro',NULL,1,NULL),
(2,'parceria com ecoluz','aumenta capacidade de testes','ganho financeiro',NULL,2,NULL),
(3,'casas sensiveis','aumenta capacidade de testes','ganho financeiro',NULL,1,NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

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
-- Estrutura da tabela `medalhas`
--

CREATE TABLE `medalhas` (
  `id_medalha` int(11) NOT NULL,
  `n_medalha` int(11) NOT NULL,
  `tipo_medalha` mediumblob,
  `id_ideiafk` int(11) DEFAULT NULL,
  `id_sugestoesfk` int(11) DEFAULT NULL,
  `id_feedfk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

--
-- Extraindo dados da tabela `medalhas`
--

INSERT INTO `medalhas` (`id_medalha`, `n_medalha`, `tipo_medalha`, `id_ideiafk`, `id_sugestoesfk`, `id_feedfk`) VALUES
(1, 1, 0x204d6564616c68612064652031c2b061636573736f, NULL, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
--
-- Extraindo dados da tabela `metodologia`
--

INSERT INTO `metodologia` (`id_metodologia`, `titulo`, `definicao`, `descricao`, `objetivo`, `anexo`, `id_usuariofk`) VALUES
(1, 'Diagrama de Ishikawa', 'Análise de Problemas', 'Top, desenvolvido por japonês', 'Melhorar ideias', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE `pontos` (
  `id_pontos` int(11) NOT NULL,
  `qtde_pontos` int(11) NOT NULL,
  `id_ideiafk` int(11) DEFAULT NULL,
  `id_sugestoesfk` int(11) DEFAULT NULL,
  `id_premiofk` int(11) DEFAULT NULL,
  `id_feedfk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

--
-- Extraindo dados da tabela `pontos`
--

INSERT INTO `pontos` (`id_pontos`, `qtde_pontos`, `id_ideiafk`, `id_sugestoesfk`, `id_premiofk`, `id_feedfk`) VALUES
(1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_medalhas`
--

CREATE TABLE `pontos_medalhas` (
  `id_pontos_medalhas` int(11) NOT NULL,
  `id_pontosfk` int(11) DEFAULT NULL,
  `id_medalhasfk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

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
  `id_setor` int(11) NOT NULL,
  `Setor` varchar(45) NOT NULL,
  `Cargo` varchar(45) NOT NULL,
  `Resp_tecnico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id_setor`, `Setor`, `Cargo`, `Resp_tecnico`) VALUES
(1, 'Administrativo', 'Administrador', 'Pedro Alvares');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestoes`
--

CREATE TABLE `sugestoes` (
  `id_sugestoes` int(11) NOT NULL,
  `assunto` mediumtext NOT NULL,
  `mensagem` mediumtext NOT NULL,
  `tipo` mediumtext NOT NULL,
  `anexo` mediumblob,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

--
-- Extraindo dados da tabela `sugestoes`
--

INSERT INTO `sugestoes` (`id_sugestoes`, `assunto`, `mensagem`, `tipo`, `anexo`, `id_usuariofk`) VALUES
(1, 'Problemas técnicos', 'Ar condicionado quebrou', 'Melhoria', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `tipo_usuario` tinyint(1) DEFAULT NULL,
  `id_feedfk` int(11) DEFAULT NULL,
  `id_cadastrofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `tipo_usuario`, `id_feedfk`, `id_cadastrofk`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `validacao`
--

CREATE TABLE `validacao` (
  `id_validacao` int(11) NOT NULL,
  `ajustes` mediumtext,
  `status_ideia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;

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
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_setorfk` (`id_setorfk`);


--
-- Indexes for table `campanha`
--
ALTER TABLE `campanha`
  ADD PRIMARY KEY (`id_campanha`),
  ADD UNIQUE KEY `id_campanha` (`id_campanha`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

ALTER TABLE `ideiaCamp`
	ADD PRIMARY KEY (`id_ideiaCamp`),
    ADD UNIQUE KEY `id_ideiaCamp` (`id_ideiaCamp`),
    ADD KEY `id_campanhafk` (`id_campanhafk`);
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
-- Indexes for table `medalhas`
--
ALTER TABLE `medalhas`
  ADD PRIMARY KEY (`id_medalha`),
  ADD UNIQUE KEY `id_medalha` (`id_medalha`),
  ADD KEY `id_ideiafk` (`id_ideiafk`),
  ADD KEY `id_sugestoesfk` (`id_sugestoesfk`),
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
  ADD KEY `id_sugestoesfk` (`id_sugestoesfk`),
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

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`Setor`),
  ADD UNIQUE KEY `id_setor` (`id_setor`);

--
-- Indexes for table `sugestoes`
--
ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id_sugestoes`),
  ADD UNIQUE KEY `id_sugestoes` (`id_sugestoes`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_cadastrofk` (`id_cadastrofk`),
  ADD KEY `id_feedfk` (`id_feedfk`);

--
-- Indexes for table `validacao`
--
ALTER TABLE `validacao`
  ADD PRIMARY KEY (`id_validacao`),
  ADD UNIQUE KEY `id_validacao` (`id_validacao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id_avatar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `campanha`
--
ALTER TABLE `campanha`
  MODIFY `id_campanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id_feed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ideia`
--
ALTER TABLE `ideia`
  MODIFY `id_ideia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `medalhas`
--
ALTER TABLE `medalhas`
  MODIFY `id_medalha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metodologia`
--
ALTER TABLE `metodologia`
  MODIFY `id_metodologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pontos`
--
ALTER TABLE `pontos`
  MODIFY `id_pontos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pontos_medalhas`
--
ALTER TABLE `pontos_medalhas`
  MODIFY `id_pontos_medalhas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `premios`
--
ALTER TABLE `premios`
  MODIFY `id_premio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publicações`
--
ALTER TABLE `publicações`
  MODIFY `id_publicacoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id_ranking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `id_setor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sugestoes`
--
ALTER TABLE `sugestoes`
  MODIFY `id_sugestoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `validacao`
--
ALTER TABLE `validacao`
  MODIFY `id_validacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`id_setorfk`) REFERENCES `setor` (`id_setor`);

--
-- Limitadores para a tabela `campanha`
--
ALTER TABLE `campanha`
  ADD CONSTRAINT `campanha_ibfk_1` FOREIGN KEY (`id_usuariofk`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `ideia`
--
ALTER TABLE `ideia`
  ADD CONSTRAINT `ideia_ibfk_1` FOREIGN KEY (`id_validacaofk`) REFERENCES `validacao` (`id_validacao`),
  ADD CONSTRAINT `ideia_ibfk_2` FOREIGN KEY (`id_rankingfk`) REFERENCES `ranking` (`id_ranking`),
  ADD CONSTRAINT `ideia_ibfk_3` FOREIGN KEY (`id_feedfk`) REFERENCES `feed` (`id_feed`);

--
-- Limitadores para a tabela `medalhas`
--
ALTER TABLE `medalhas`
  ADD CONSTRAINT `medalhas_ibfk_1` FOREIGN KEY (`id_ideiafk`) REFERENCES `ideia` (`id_ideia`),
  ADD CONSTRAINT `medalhas_ibfk_2` FOREIGN KEY (`id_sugestoesfk`) REFERENCES `sugestoes` (`id_sugestoes`),
  ADD CONSTRAINT `medalhas_ibfk_3` FOREIGN KEY (`id_feedfk`) REFERENCES `feed` (`id_feed`);

--
-- Limitadores para a tabela `metodologia`
--
ALTER TABLE `metodologia`
  ADD CONSTRAINT `metodologia_ibfk_1` FOREIGN KEY (`id_usuariofk`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `pontos`
--
ALTER TABLE `pontos`
  ADD CONSTRAINT `pontos_ibfk_1` FOREIGN KEY (`id_ideiafk`) REFERENCES `ideia` (`id_ideia`),
  ADD CONSTRAINT `pontos_ibfk_2` FOREIGN KEY (`id_sugestoesfk`) REFERENCES `sugestoes` (`id_sugestoes`),
  ADD CONSTRAINT `pontos_ibfk_3` FOREIGN KEY (`id_premiofk`) REFERENCES `premios` (`id_premio`),
  ADD CONSTRAINT `pontos_ibfk_4` FOREIGN KEY (`id_feedfk`) REFERENCES `feed` (`id_feed`);

--
-- Limitadores para a tabela `pontos_medalhas`
--
ALTER TABLE `pontos_medalhas`
  ADD CONSTRAINT `pontos_medalhas_ibfk_1` FOREIGN KEY (`id_pontosfk`) REFERENCES `pontos` (`id_pontos`),
  ADD CONSTRAINT `pontos_medalhas_ibfk_2` FOREIGN KEY (`id_medalhasfk`) REFERENCES `medalhas` (`id_medalha`);

--
-- Limitadores para a tabela `premios`
--
ALTER TABLE `premios`
  ADD CONSTRAINT `premios_ibfk_1` FOREIGN KEY (`id_usuariofk`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `publicações`
--
ALTER TABLE `publicações`
  ADD CONSTRAINT `publicações_ibfk_1` FOREIGN KEY (`id_feedfk`) REFERENCES `feed` (`id_feed`),
  ADD CONSTRAINT `publicações_ibfk_2` FOREIGN KEY (`id_usuariofk`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `sugestoes`
--
ALTER TABLE `sugestoes`
  ADD CONSTRAINT `sugestoes_ibfk_1` FOREIGN KEY (`id_usuariofk`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_cadastrofk`) REFERENCES `cadastro` (`id_cadastro`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_feedfk`) REFERENCES `feed` (`id_feed`);

ALTER TABLE `ideiaCamp`
  ADD CONSTRAINT `ideiaCamp_ibfk_1` FOREIGN KEY (`id_campanhafk`) REFERENCES `campanha` (`id_campanha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

