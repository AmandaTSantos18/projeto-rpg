-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2022 às 17:21
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alcance`
--

CREATE TABLE `alcance` (
  `id_alcance` int(3) NOT NULL,
  `distancia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alcance`
--

INSERT INTO `alcance` (`id_alcance`, `distancia`) VALUES
(1, 'Curto'),
(2, 'Médio'),
(3, 'Longo'),
(4, 'Extremo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atributos`
--

CREATE TABLE `atributos` (
  `id_atributos` int(3) NOT NULL,
  `agilidade` int(3) NOT NULL DEFAULT 0,
  `intelecto` int(3) NOT NULL DEFAULT 0,
  `vigor` int(3) NOT NULL DEFAULT 0,
  `presença` int(3) NOT NULL DEFAULT 0,
  `forca` int(3) NOT NULL DEFAULT 0,
  `fk_personagem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atual`
--

CREATE TABLE `atual` (
  `id_atual` int(3) NOT NULL,
  `vida_atual` int(3) NOT NULL DEFAULT 0,
  `sanidade_atual` int(3) NOT NULL DEFAULT 0,
  `pontos_de_esforço_atual` int(3) NOT NULL DEFAULT 0,
  `municao_atual` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(3) NOT NULL,
  `nome_categoria` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `nome_categoria`) VALUES
(1, '0'),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(11) NOT NULL,
  `nome_classe` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `classe`
--

INSERT INTO `classe` (`id_classe`, `nome_classe`) VALUES
(1, 'desconhecido'),
(2, 'combatente'),
(3, 'especialista'),
(4, 'ocultista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `defesas`
--

CREATE TABLE `defesas` (
  `id_defesas` int(3) NOT NULL,
  `passiva` int(3) NOT NULL DEFAULT 0,
  `bloqueio` int(3) NOT NULL DEFAULT 0,
  `esquiva` int(3) NOT NULL DEFAULT 0,
  `fk_personagem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `elemento`
--

CREATE TABLE `elemento` (
  `id_elemento` int(11) NOT NULL,
  `nome_elemento` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `elemento`
--

INSERT INTO `elemento` (`id_elemento`, `nome_elemento`) VALUES
(1, 'Nenhum'),
(2, 'Sangue'),
(3, 'Morte'),
(4, 'Energia'),
(5, 'Conhecimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id_equipamentos` int(3) NOT NULL,
  `nome_equipamento` varchar(40) DEFAULT NULL,
  `dano` varchar(10) NOT NULL DEFAULT '0',
  `critico` varchar(10) NOT NULL DEFAULT '0',
  `espaco` int(3) NOT NULL DEFAULT 0,
  `fk_tipo` int(3) DEFAULT NULL,
  `fk_categoria` int(3) DEFAULT NULL,
  `fk_alcance` int(3) DEFAULT NULL,
  `fk_municao` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id_equipamentos`, `nome_equipamento`, `dano`, `critico`, `espaco`, `fk_tipo`, `fk_categoria`, `fk_alcance`, `fk_municao`) VALUES
(1, 'Faca', '1d4', '19', 1, 1, 1, 1, NULL),
(2, 'Martelo', '1d6', 'x2', 1, 2, 1, NULL, NULL),
(3, 'Punhal', '1d4', 'x3', 1, 3, 1, NULL, NULL),
(4, 'Bastão', '1d6/1d8', 'x2', 1, 2, 1, NULL, NULL),
(5, 'Machete', '1d6', '19', 1, 1, 1, NULL, NULL),
(6, 'Lança', '1d6', 'x2', 1, 3, 1, 1, NULL),
(7, 'Cajado', '1d6', 'x2', 2, 2, 1, NULL, NULL),
(8, 'Arco', '1d6', 'x3', 2, 3, 1, 2, 1),
(9, 'Besta', '1d8', '19', 2, 3, 1, 2, 1),
(10, 'Pistola', '1d12', '18', 1, 4, 2, 1, 2),
(11, 'Revólver', '2d6', '19/x3', 1, 4, 2, 1, 2),
(12, 'Fuzil de caça', '2d8', '19/x3', 1, 4, 2, 1, 3),
(13, 'Machadinha', '1d6', 'x3', 1, 1, 1, 1, NULL),
(14, 'Nunchaku', '1d8', 'x3', 1, 2, 1, NULL, NULL),
(15, 'Corrente', '1d8', 'x2', 1, 2, 1, NULL, NULL),
(16, 'Espada', '1d8/1d10', '19', 1, 1, 2, NULL, NULL),
(17, 'Florete', '1d6', '18', 1, 1, 2, NULL, NULL),
(18, 'Machado', '1d8', 'x3', 1, 1, 2, NULL, NULL),
(19, 'Marreta', '2d4', 'x2', 1, 2, 2, NULL, NULL),
(20, 'Acha', '1d12', 'x3', 2, 1, 2, NULL, NULL),
(21, 'Gadanho', '2d4', 'x4', 2, 1, 2, NULL, NULL),
(22, 'Katana', '1d10', '19', 2, 1, 2, NULL, NULL),
(23, 'Montante', '3d6', '19', 2, 1, 2, NULL, NULL),
(24, 'Moto-serra', '3d6', 'x2', 2, 1, 2, NULL, NULL),
(25, 'Arco composto', '1d10', 'x3', 2, 3, 2, 2, 1),
(26, 'Balestra', '1d12', '19', 2, 3, 2, 2, 1),
(27, 'Submetralhadora', '2d6', '19/x3', 1, 4, 2, 1, 2),
(28, 'Espingarda', '4d6', 'x3', 2, 4, 2, 1, 4),
(29, 'Fuzil de assalto', '2d10', '19/x3', 2, 4, 3, 2, 3),
(30, 'Fuzil de precisão', '2d10', '19/x3', 2, 4, 4, 3, 3),
(31, 'Bazuca', '10d8', 'x2', 2, 2, 4, 2, 5),
(32, 'Lança-chama', '6d6', 'x2', 2, 5, 4, 1, 6),
(33, 'Metralhadora', '2d12', '19/x3', 2, 4, 3, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `municao`
--

CREATE TABLE `municao` (
  `id_municao` int(3) NOT NULL,
  `nome_municao` varchar(20) DEFAULT NULL,
  `espaco` varchar(3) DEFAULT NULL,
  `fk_categoria` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `municao`
--

INSERT INTO `municao` (`id_municao`, `nome_municao`, `espaco`, `fk_categoria`) VALUES
(1, 'Flechas', '1', 1),
(2, 'Balas leves', '1', 1),
(3, 'Balas pesadas', '1', 2),
(4, 'Cartuchos', '1', 2),
(5, 'Foguete', '1', 2),
(6, 'Combustível', '1', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `origem`
--

CREATE TABLE `origem` (
  `id_origem` int(11) NOT NULL,
  `nome_origem` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `origem`
--

INSERT INTO `origem` (`id_origem`, `nome_origem`) VALUES
(1, 'desconhecido'),
(2, 'acadêmico'),
(3, 'agente de saúde'),
(4, 'amnésico'),
(5, 'artista'),
(6, 'atleta'),
(7, 'chef'),
(8, 'criminoso'),
(9, 'cultista arrependido'),
(10, 'desgarrado'),
(11, 'engenheiro'),
(12, 'executivo'),
(13, 'investigador'),
(14, 'lutador'),
(15, 'magnata'),
(16, 'mercenário'),
(17, 'militar'),
(18, 'operário'),
(19, 'policial'),
(20, 'religioso'),
(21, 'servidor público'),
(22, 'teórico da conspiração'),
(23, 'trambiqueiro'),
(24, 'universitário'),
(25, 'vítima');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patente`
--

CREATE TABLE `patente` (
  `id_patente` int(11) NOT NULL,
  `nome_patente` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patente`
--

INSERT INTO `patente` (`id_patente`, `nome_patente`) VALUES
(1, 'recruta'),
(2, 'operador'),
(3, 'agente especial'),
(4, 'oficial de operações'),
(5, 'agente de elite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pericias`
--

CREATE TABLE `pericias` (
  `id_pericias` int(3) NOT NULL,
  `nome_pericia` varchar(40) DEFAULT NULL,
  `valor` int(2) NOT NULL DEFAULT 0,
  `fk_personagem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pericias`
--

INSERT INTO `pericias` (`id_pericias`, `nome_pericia`, `valor`, `fk_personagem`) VALUES
(1, 'adestramento', 0, NULL),
(2, 'atletismo', 0, NULL),
(3, 'atuação', 0, NULL),
(4, 'atualidades', 0, NULL),
(5, 'ciência', 0, NULL),
(6, 'condução', 0, NULL),
(7, 'diplomacia', 0, NULL),
(8, 'enganação', 0, NULL),
(9, 'fortitude', 0, NULL),
(10, 'furtividade', 0, NULL),
(11, 'intimidação', 0, NULL),
(12, 'intuicao', 0, NULL),
(13, 'investigação', 0, NULL),
(14, 'jogatina', 0, NULL),
(15, 'luta', 0, NULL),
(16, 'medicina', 0, NULL),
(17, 'ocultismo', 0, NULL),
(18, 'percepção', 0, NULL),
(19, 'pilotagem', 0, NULL),
(20, 'pontaria', 0, NULL),
(21, 'prestidigitação', 0, NULL),
(22, 'profissão', 0, NULL),
(23, 'reflexos', 0, NULL),
(24, 'religião', 0, NULL),
(25, 'tática', 0, NULL),
(26, 'tecnologia', 0, NULL),
(27, 'vontade', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagem`
--

CREATE TABLE `personagem` (
  `id_personagem` int(3) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `jogador` varchar(200) NOT NULL,
  `is_padrao` bit(1) NOT NULL DEFAULT b'0',
  `pm` int(5) NOT NULL DEFAULT 0,
  `xp` int(5) NOT NULL DEFAULT 0,
  `fk_classe` int(11) NOT NULL,
  `fk_trilha` int(11) NOT NULL,
  `fk_elemento` int(11) NOT NULL,
  `fk_patente` int(11) NOT NULL,
  `fk_origem` int(11) NOT NULL,
  `fk_equipamentos` int(11) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `personagem`
--

INSERT INTO `personagem` (`id_personagem`, `nome`, `jogador`, `is_padrao`, `pm`, `xp`, `fk_classe`, `fk_trilha`, `fk_elemento`, `fk_patente`, `fk_origem`, `fk_equipamentos`, `fk_usuario`) VALUES
(14, 'teste', 'pessoa', b'0', 15, 15, 1, 1, 1, 1, 1, NULL, 3),
(15, 'teste', 'pessoa', b'0', 15, 15, 1, 1, 1, 1, 1, NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resistencias_a_dano`
--

CREATE TABLE `resistencias_a_dano` (
  `id_resistencias` int(3) NOT NULL,
  `física` int(3) NOT NULL DEFAULT 0,
  `balística` int(3) NOT NULL DEFAULT 0,
  `mental` int(3) NOT NULL DEFAULT 0,
  `sangue` int(3) NOT NULL DEFAULT 0,
  `morte` int(3) NOT NULL DEFAULT 0,
  `energia` int(3) NOT NULL DEFAULT 0,
  `conhecimento` int(3) NOT NULL DEFAULT 0,
  `fk_personagem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saude`
--

CREATE TABLE `saude` (
  `id_saude` int(3) NOT NULL,
  `vida` int(3) NOT NULL DEFAULT 0,
  `sanidade` int(3) NOT NULL DEFAULT 0,
  `esforco` int(3) NOT NULL DEFAULT 0,
  `fk_personagem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `textos`
--

CREATE TABLE `textos` (
  `id_textos` int(3) NOT NULL,
  `tipo_texto` varchar(40) DEFAULT NULL,
  `escrito` longtext DEFAULT NULL,
  `fk_tipo` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_equip`
--

CREATE TABLE `tipo_equip` (
  `id_tipo_equip` int(3) NOT NULL,
  `nome_tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_equip`
--

INSERT INTO `tipo_equip` (`id_tipo_equip`, `nome_tipo`) VALUES
(1, 'Corte'),
(2, 'Impacto'),
(3, 'Perfuração'),
(4, 'Balístico'),
(5, 'Fogo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_texto`
--

CREATE TABLE `tipo_texto` (
  `id_tipo_texto` int(3) NOT NULL,
  `nome_tipo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_texto`
--

INSERT INTO `tipo_texto` (`id_tipo_texto`, `nome_tipo`) VALUES
(1, 'inventário'),
(2, 'proficiências'),
(3, 'ataques e defesas detalhados'),
(4, 'rituais conhecidos'),
(5, 'habilidade'),
(6, 'histórico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trilha`
--

CREATE TABLE `trilha` (
  `id_trilha` int(11) NOT NULL,
  `nome_trilha` varchar(40) DEFAULT NULL,
  `fk_classe` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `trilha`
--

INSERT INTO `trilha` (`id_trilha`, `nome_trilha`, `fk_classe`) VALUES
(1, 'aniquilador', 2),
(2, 'comandante de campo', 2),
(3, 'guerreiro', 2),
(4, 'operações especiais', 2),
(5, 'tropa de choque', 2),
(6, 'atirador de elite', 3),
(7, 'infiltrador', 3),
(8, 'médico de campo', 3),
(9, 'negociador', 3),
(10, 'técnico', 3),
(11, 'conduíte', 4),
(12, 'flagelador', 4),
(13, 'graduado', 4),
(14, 'intuitivo', 4),
(15, 'lâmina paranormal', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `is_adm` bit(1) NOT NULL DEFAULT b'0',
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `is_adm`, `nome`, `email`, `senha`) VALUES
(3, b'0', 'a', 'a@a', '202cb962ac59075b964b07152d234b70'),
(4, b'0', '123', '123@a', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alcance`
--
ALTER TABLE `alcance`
  ADD PRIMARY KEY (`id_alcance`);

--
-- Índices para tabela `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`id_atributos`),
  ADD KEY `fk_atributos_personagem` (`fk_personagem`);

--
-- Índices para tabela `atual`
--
ALTER TABLE `atual`
  ADD PRIMARY KEY (`id_atual`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Índices para tabela `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Índices para tabela `defesas`
--
ALTER TABLE `defesas`
  ADD PRIMARY KEY (`id_defesas`),
  ADD KEY `fk_defesas_personagem` (`fk_personagem`);

--
-- Índices para tabela `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`id_elemento`);

--
-- Índices para tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`id_equipamentos`),
  ADD KEY `fk_equipamentos_tipo` (`fk_tipo`),
  ADD KEY `fk_equipamentos_categoria` (`fk_categoria`),
  ADD KEY `fk_equipamentos_alcance` (`fk_alcance`),
  ADD KEY `fk_equipamentos_municao` (`fk_municao`);

--
-- Índices para tabela `municao`
--
ALTER TABLE `municao`
  ADD PRIMARY KEY (`id_municao`),
  ADD KEY `fk_municao_categoria` (`fk_categoria`);

--
-- Índices para tabela `origem`
--
ALTER TABLE `origem`
  ADD PRIMARY KEY (`id_origem`);

--
-- Índices para tabela `patente`
--
ALTER TABLE `patente`
  ADD PRIMARY KEY (`id_patente`);

--
-- Índices para tabela `pericias`
--
ALTER TABLE `pericias`
  ADD PRIMARY KEY (`id_pericias`),
  ADD KEY `fk_pericias_personagem` (`fk_personagem`);

--
-- Índices para tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`id_personagem`),
  ADD KEY `fk_personagem_classe` (`fk_classe`),
  ADD KEY `fk_personagem_trilha` (`fk_trilha`),
  ADD KEY `fk_personagem_elemento` (`fk_elemento`),
  ADD KEY `fk_personagem_patente` (`fk_patente`),
  ADD KEY `fk_personagem_origem` (`fk_origem`),
  ADD KEY `fk_personagem_equipamentos` (`fk_equipamentos`),
  ADD KEY `fk_personagem_usuario` (`fk_usuario`);

--
-- Índices para tabela `resistencias_a_dano`
--
ALTER TABLE `resistencias_a_dano`
  ADD PRIMARY KEY (`id_resistencias`),
  ADD KEY `fk_resistencias_personagem` (`fk_personagem`);

--
-- Índices para tabela `saude`
--
ALTER TABLE `saude`
  ADD PRIMARY KEY (`id_saude`),
  ADD KEY `fk_saude_personagem` (`fk_personagem`);

--
-- Índices para tabela `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id_textos`),
  ADD KEY `fk_textos_tipo` (`fk_tipo`);

--
-- Índices para tabela `tipo_equip`
--
ALTER TABLE `tipo_equip`
  ADD PRIMARY KEY (`id_tipo_equip`);

--
-- Índices para tabela `tipo_texto`
--
ALTER TABLE `tipo_texto`
  ADD PRIMARY KEY (`id_tipo_texto`);

--
-- Índices para tabela `trilha`
--
ALTER TABLE `trilha`
  ADD PRIMARY KEY (`id_trilha`),
  ADD KEY `fk_trilha_classe` (`fk_classe`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alcance`
--
ALTER TABLE `alcance`
  MODIFY `id_alcance` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `atributos`
--
ALTER TABLE `atributos`
  MODIFY `id_atributos` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `atual`
--
ALTER TABLE `atual`
  MODIFY `id_atual` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `defesas`
--
ALTER TABLE `defesas`
  MODIFY `id_defesas` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `elemento`
--
ALTER TABLE `elemento`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id_equipamentos` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `municao`
--
ALTER TABLE `municao`
  MODIFY `id_municao` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `origem`
--
ALTER TABLE `origem`
  MODIFY `id_origem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `patente`
--
ALTER TABLE `patente`
  MODIFY `id_patente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pericias`
--
ALTER TABLE `pericias`
  MODIFY `id_pericias` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `id_personagem` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `resistencias_a_dano`
--
ALTER TABLE `resistencias_a_dano`
  MODIFY `id_resistencias` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saude`
--
ALTER TABLE `saude`
  MODIFY `id_saude` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `textos`
--
ALTER TABLE `textos`
  MODIFY `id_textos` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_equip`
--
ALTER TABLE `tipo_equip`
  MODIFY `id_tipo_equip` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tipo_texto`
--
ALTER TABLE `tipo_texto`
  MODIFY `id_tipo_texto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `trilha`
--
ALTER TABLE `trilha`
  MODIFY `id_trilha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atributos`
--
ALTER TABLE `atributos`
  ADD CONSTRAINT `fk_atributos_personagem` FOREIGN KEY (`fk_personagem`) REFERENCES `personagem` (`id_personagem`);

--
-- Limitadores para a tabela `defesas`
--
ALTER TABLE `defesas`
  ADD CONSTRAINT `fk_defesas_personagem` FOREIGN KEY (`fk_personagem`) REFERENCES `personagem` (`id_personagem`);

--
-- Limitadores para a tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD CONSTRAINT `fk_equipamentos_alcance` FOREIGN KEY (`fk_alcance`) REFERENCES `alcance` (`id_alcance`),
  ADD CONSTRAINT `fk_equipamentos_categoria` FOREIGN KEY (`fk_categoria`) REFERENCES `categorias` (`id_categorias`),
  ADD CONSTRAINT `fk_equipamentos_municao` FOREIGN KEY (`fk_municao`) REFERENCES `municao` (`id_municao`),
  ADD CONSTRAINT `fk_equipamentos_tipo` FOREIGN KEY (`fk_tipo`) REFERENCES `tipo_equip` (`id_tipo_equip`);

--
-- Limitadores para a tabela `municao`
--
ALTER TABLE `municao`
  ADD CONSTRAINT `fk_municao_categoria` FOREIGN KEY (`fk_categoria`) REFERENCES `categorias` (`id_categorias`);

--
-- Limitadores para a tabela `pericias`
--
ALTER TABLE `pericias`
  ADD CONSTRAINT `fk_pericias_personagem` FOREIGN KEY (`fk_personagem`) REFERENCES `personagem` (`id_personagem`);

--
-- Limitadores para a tabela `personagem`
--
ALTER TABLE `personagem`
  ADD CONSTRAINT `fk_personagem_classe` FOREIGN KEY (`fk_classe`) REFERENCES `classe` (`id_classe`),
  ADD CONSTRAINT `fk_personagem_elemento` FOREIGN KEY (`fk_elemento`) REFERENCES `elemento` (`id_elemento`),
  ADD CONSTRAINT `fk_personagem_equipamentos` FOREIGN KEY (`fk_equipamentos`) REFERENCES `equipamentos` (`id_equipamentos`),
  ADD CONSTRAINT `fk_personagem_origem` FOREIGN KEY (`fk_origem`) REFERENCES `origem` (`id_origem`),
  ADD CONSTRAINT `fk_personagem_patente` FOREIGN KEY (`fk_patente`) REFERENCES `patente` (`id_patente`),
  ADD CONSTRAINT `fk_personagem_trilha` FOREIGN KEY (`fk_trilha`) REFERENCES `trilha` (`id_trilha`),
  ADD CONSTRAINT `fk_personagem_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `resistencias_a_dano`
--
ALTER TABLE `resistencias_a_dano`
  ADD CONSTRAINT `fk_resistencias_personagem` FOREIGN KEY (`fk_personagem`) REFERENCES `personagem` (`id_personagem`);

--
-- Limitadores para a tabela `saude`
--
ALTER TABLE `saude`
  ADD CONSTRAINT `fk_saude_personagem` FOREIGN KEY (`fk_personagem`) REFERENCES `personagem` (`id_personagem`);

--
-- Limitadores para a tabela `textos`
--
ALTER TABLE `textos`
  ADD CONSTRAINT `fk_textos_tipo` FOREIGN KEY (`fk_tipo`) REFERENCES `tipo_texto` (`id_tipo_texto`);

--
-- Limitadores para a tabela `trilha`
--
ALTER TABLE `trilha`
  ADD CONSTRAINT `fk_trilha_classe` FOREIGN KEY (`fk_classe`) REFERENCES `classe` (`id_classe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
