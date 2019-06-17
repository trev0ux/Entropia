create database entropia;
use entropia;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Aquisição_de_prêmios` (INOUT `qtde_pontos` INT, INOUT `qtde_pontos_premios` INT)  BEGIN
    SET qtde_pontos= qtde_pontos - qtde_pontos_premios; 
END$$

DELIMITER ;


CREATE TABLE `avatar` (
  `id_avatar` bigint(20) NOT NULL,
  `avatar` varchar(220) NOT NULL,
  `nome_avatar` varchar(220) NOT NULL,
  `mini_avatar` varchar(220) NOT NULL,
  `head_avatar` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `avatar` VALUES
(1, 'esteves.png', 'esteves-avatar.png', 'esteves-mini.png', 'esteves1.png'),
(2, 'muriel.png', 'muriel-avatar.png', 'muriel-mini.png', 'muriel1.png'),
(3, 'melo.png', 'melo-avatar.png', 'melo-mini.png', 'melo1.png'),
(4, 'ariel.png', 'ariel-avatar.png', 'ariel-mini.png', 'ariel1.png'),
(5, 'cesar.png', 'cesar-avatar.png', 'cesar-mini.png', 'cesar1.png'),
(6, 'james.png', 'james-avatar.png', 'james-mini.png', 'james1.png'),
(7, 'logo-icon.png', 'logo-icon.png', 'logo-icon.png', 'logo-icon.png');


CREATE TABLE `cadastro` (
  `id_cadastro` bigint(20) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `data_nasc` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `id_setorfk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `cadastro` VALUES
(1, 'empresa', 'inovação', '0000-00-00', 'empresa@empresa', 'admin', 'admin', NULL),
(2, 'Thiago', 'Benjamin', '2010-11-03', 'binho.bfb@gmail.com', 'benjamin', '123456', 1),
(3, 'Dilton', 'Costa', '2019-04-03', 'dilton@gmail.com', 'dilton', '123456', 2),
(4, 'Andreza', 'Vitório', '2000-03-15', 'dezavitorio@gmail.com', 'andreza', '123456', 4),
(6, 'Andre', 'Luís', '2019-04-24', 'andre@gmail.com', 'andre', '123456', 5),
(7, 'Ruan', 'Felipe', '2019-04-20', 'ruan@gmail.com', 'ruan', '123456', 5),
(8, 'Lucas', 'Amorim', '28/03/2001', 'lucas@lucas.com', 'trev0ux', '123456', 4);

CREATE TABLE `campanha` (
  `id_campanha` bigint(20) NOT NULL,
  `tema` varchar(45) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `objetivo` mediumtext NOT NULL,
  `regra` mediumtext NOT NULL,
  `premio` varchar(45) NOT NULL,
  `fotoCamp` varchar(220) DEFAULT NULL,
  `id_usuariofk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `campanha` VALUES
(1, 'Novas tecnologias', 'Métodos que melhoram o ambiente de trabalho usando tecnologia', 'Transformar o ambiente de trabalho mais dinâmico e atrativo para colaboradores', 'Tecnologias de baixo custo e fácil implantação', '450 pontos', '3f121a8209d46d4f73ac56c1b5f2964f.png', 7),
(2, 'Consumo Consciente', 'Os gastos com água, luz e papéis (todos os tipos) estão causando prejuízo a organização', 'Diminuir gastos de água e luz e colaborar com o meio ambiente', 'Ideias sustentáveis de fácil implantação', '1000 pontos', '3a45cf2bf0eb9f3930a9de69f6b182ba.jpg', 7),
(3, 'Contra o desmatamento', 'A ideia é trazer formar de conscientizar os nossos colaboradores', 'Tornar nosso corpo colaborativo mais engajado e consciente', 'Medidas de facil implantação', '350 pontos', 'abad8713508567782eadd58326e2ae57.png', 7),
(4, 'Ambiente Organizacional', 'Melhorar a dinâmica organizacional', 'Melhorar a dinamica organizacional', 'Melhorar a dinamica organizacional', '150 pontos', '7b310093c80fa9343f95f77bd1531ee2.jpg', 7);

CREATE TABLE `ideia` (
  `id_ideia` bigint(20) NOT NULL,
  `qtde_reacoes_ideias` int(11) DEFAULT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `beneficio` mediumtext NOT NULL,
  `participante` varchar(45) DEFAULT NULL,
  `anexo` varchar(220) DEFAULT NULL,
  `id_usuariofk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `ideiacamp` (
  `id_ideiaCamp` bigint(20) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `beneficio` mediumtext NOT NULL,
  `anexo` varchar(220) DEFAULT NULL,
  `id_campanhafk` bigint(20) DEFAULT NULL,
  `id_usuariofk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `ideiacamp` VALUES
(1, 'controle de água', 'diminuir o gasto de água na empresa', 'economia na conta de água', NULL, 2, NULL),
(2, 'reutilizar papel', 'imprimir folhas frente e verso', 'diminuir gastos com papel', NULL, 3, NULL),
(3, 'cidades sensiveis', 'cidades que aumentam a participação do cidadão', 'aumentar o lucro', NULL, 1, NULL),
(4, 'pareceira com empresas de energia', 'diminuir gastos com a energia da empresa', 'reenvestir na organização', NULL, 2, NULL),
(5, 'realidade aumentada', 'facilitar a elaboração de novas pesquisas', 'lucro imediato para empresa', NULL, 1, NULL),
(6, 'palestras de conscientização', 'promover debates e alavancar o conhecimmento dentro do ambiente de trabalho', 'agregar valor e conhecimento aos funcionários', NULL, 3, NULL);

CREATE TABLE `comentario` (
  `id_comentario` bigint(20) NOT NULL,
  `comentario` mediumtext NOT NULL,
  `comentario_data` datetime DEFAULT NULL,
  `id_ideiafk` bigint(20) DEFAULT NULL,
  `id_usuariofk` bigint(20) DEFAULT NULL,
  `id_postfk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `medalhas` (
  `id_medalha` bigint(20) NOT NULL,
  `n_medalha` bigint(20) NOT NULL,
  `tipo_medalha` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `metodologia` (
  `id_metodologia` bigint(20) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `definicao` mediumtext NOT NULL,
  `descricao` mediumtext NOT NULL,
  `objetivo` mediumtext NOT NULL,
  `anexo` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `ouvidoria` (
  `id_ouvidoria` bigint(20) NOT NULL,
  `assunto` varchar(60) NOT NULL,
  `id_setorfk` bigint(20) DEFAULT NULL,
  `mensagem` mediumtext NOT NULL,
  `anexo` varchar(220) DEFAULT NULL,
  `id_usuariofk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `ouvidoria` VALUES
(1, 'reclamação', 0, 'Problemas técnicos', NULL, NULL),
(2, 'reclamação', 2, 'Minha equipe de PFC não faz nada', NULL, 0);


CREATE TABLE `pontos` (
  `id_pontos` bigint(20) NOT NULL,
  `qtde_pontos` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `pontos_medalhas` (
  `id_pontos_medalhas` bigint(20) NOT NULL,
  `id_pontosfk` bigint(20) DEFAULT NULL,
  `id_medalhasfk` bigint(20) DEFAULT NULL,
  `id_ideiafk` bigint(20) DEFAULT NULL,
  `id_ouvidoriafk` bigint(20) DEFAULT NULL,
  `id_premiofk` bigint(20) DEFAULT NULL,
  `id_usuariofk` bigint(20) DEFAULT NULL,
  `id_comentariofk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `post` (
  `id_post` bigint(20) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `data` datetime DEFAULT NULL,
  `postagem` text NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `curtidas` bigint(20) NOT NULL,
  `id_usuariofk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `premios` (
  `id_premio` bigint(20) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `qtde_pontos_premios` bigint(20) NOT NULL,
  `fotoPremio` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `premios` (`id_premio`, `Nome`, `qtde_pontos_premios`, `fotoPremio`) VALUES
(1, 'TV LCD 51', 500, '6ee770d6e8de1df512a44b689b32b6d0.png');

CREATE TABLE `ranking` (
  `id_ranking` bigint(20) NOT NULL,
  `id_ideiafk` bigint(20) DEFAULT NULL,
  `id_postfk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `setor` (
  `id_setor` bigint(20) NOT NULL,
  `setor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `setor` (`id_setor`, `setor`) VALUES
(1, 'Administrativo'),
(2, 'Comercial'),
(3, 'Financeiro'),
(4, 'Recursos Humanos'),
(5, 'Operacional');

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) NOT NULL,
  `nivel` int(11) DEFAULT '0',
  `id_avatarfk` bigint(20) DEFAULT NULL,
  `id_cadastrofk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuario` (`id_usuario`, `nivel`, `id_avatarfk`, `id_cadastrofk`) VALUES
(1, 1, 7, 1),
(2, 1, 1, 2),
(3, 0, 5, 3),
(4, 1, 3, 4),
(5, 0, 2, 5),
(6, 0, 4, 6),
(7, 0, 6, 7),
(8, 0, 2, 8);

CREATE TABLE `validacao` (
  `id_validacao` bigint(20) NOT NULL,
  `ajustes` mediumtext,
  `status_ideia` varchar(45) NOT NULL,
  `id_ideiafk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id_avatar`),
  ADD UNIQUE KEY `id_avatar` (`id_avatar`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cadastro`),
  ADD UNIQUE KEY `id_cadastro` (`id_cadastro`),
  ADD KEY `id_setorfk` (`id_setorfk`);

--
-- Indexes for table `campanha`
--
ALTER TABLE `campanha`
  ADD PRIMARY KEY (`id_campanha`),
  ADD UNIQUE KEY `id_campanha` (`id_campanha`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD UNIQUE KEY `id_comentario` (`id_comentario`),
  ADD KEY `id_usuariofk` (`id_usuariofk`),
  ADD KEY `id_ideiafk` (`id_ideiafk`),
  ADD KEY id_postfk (id_postfk);
--
-- Indexes for table `ideia`
--
ALTER TABLE `ideia`
  ADD PRIMARY KEY (`id_ideia`),
  ADD UNIQUE KEY `id_ideia` (`id_ideia`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `ideiacamp`
--
ALTER TABLE `ideiacamp`
  ADD PRIMARY KEY (`id_ideiaCamp`),
  ADD UNIQUE KEY `id_ideiaCamp` (`id_ideiaCamp`),
  ADD KEY `id_campanhafk` (`id_campanhafk`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `medalhas`
--
ALTER TABLE `medalhas`
  ADD PRIMARY KEY (`id_medalha`),
  ADD UNIQUE KEY `id_medalha` (`id_medalha`);

--
-- Indexes for table `metodologia`
--
ALTER TABLE `metodologia`
  ADD PRIMARY KEY (`id_metodologia`),
  ADD UNIQUE KEY `id_metodologia` (`id_metodologia`);

--
-- Indexes for table `ouvidoria`
--
ALTER TABLE `ouvidoria`
  ADD PRIMARY KEY (`id_ouvidoria`),
  ADD UNIQUE KEY `id_ouvidoria` (`id_ouvidoria`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`id_pontos`),
  ADD UNIQUE KEY `id_pontos` (`id_pontos`);

--
-- Indexes for table `pontos_medalhas`
--
ALTER TABLE `pontos_medalhas`
  ADD PRIMARY KEY (`id_pontos_medalhas`),
  ADD UNIQUE KEY `id_pontos_medalhas` (`id_pontos_medalhas`),
  ADD KEY `id_pontosfk` (`id_pontosfk`),
  ADD KEY `id_medalhasfk` (`id_medalhasfk`),
  ADD KEY `id_ideiafk` (`id_ideiafk`),
  ADD KEY `id_ouvidoriafk` (`id_ouvidoriafk`),
  ADD KEY `id_premiofk` (`id_premiofk`),
  ADD KEY `id_usuariofk` (`id_usuariofk`),
  ADD KEY `id_comentariofk` (`id_comentariofk`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD UNIQUE KEY `id_post` (`id_post`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`id_premio`),
  ADD UNIQUE KEY `id_premio` (`id_premio`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_ranking`),
  ADD UNIQUE KEY `id_ranking` (`id_ranking`),
  ADD KEY `id_ideiafk` (`id_ideiafk`),
  ADD KEY `id_postfk` (`id_postfk`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id_setor`),
  ADD UNIQUE KEY `id_setor` (`id_setor`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_cadastrofk` (`id_cadastrofk`),
  ADD KEY `id_avatarfk` (`id_avatarfk`);

--
-- Indexes for table `validacao`
--
ALTER TABLE `validacao`
  ADD PRIMARY KEY (`id_validacao`),
  ADD UNIQUE KEY `id_validacao` (`id_validacao`),
  ADD KEY `id_ideiafk` (`id_ideiafk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
