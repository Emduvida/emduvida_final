-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Ago-2015 às 05:52
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emduvidabd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `COD_COMENTARIO` int(11) NOT NULL,
  `TEXTO_COMENTARIO` text NOT NULL,
  `NOTA_COMENTARIO` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL,
  `STATUS_COMENTARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `defeitos`
--

CREATE TABLE IF NOT EXISTS `defeitos` (
  `COD_DEFEITO` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `DEFEITOS` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `defeitos`
--

INSERT INTO `defeitos` (`COD_DEFEITO`, `COD_RESENHA`, `DEFEITOS`) VALUES
(1, 2, 'PreÃ§o'),
(2, 2, 'pequeno'),
(3, 2, '10 real'),
(4, 3, 'pqeuno'),
(5, 3, 'tela'),
(6, 3, 'aff'),
(7, 3, 'merda'),
(8, 4, 'asd'),
(9, 4, 'as'),
(10, 4, 'asd'),
(11, 5, 'aa'),
(12, 5, 'a'),
(13, 5, 'a'),
(14, 5, 'a'),
(15, 5, 'a'),
(16, 6, 'b'),
(17, 6, 'b'),
(18, 6, 'b'),
(19, 6, 'b'),
(20, 6, 'b'),
(21, 7, 'f'),
(22, 7, 'g'),
(23, 7, 'h'),
(24, 7, 'i'),
(25, 7, 'j'),
(26, 8, 'b'),
(27, 9, 'b'),
(28, 9, 'b'),
(29, 9, 'b'),
(30, 9, 'b'),
(31, 9, 'b'),
(41, 10, 'rete'),
(42, 10, 'rete'),
(43, 10, 'rete'),
(44, 11, 'dsa'),
(45, 11, 'dsa'),
(46, 11, 'das'),
(47, 11, 'da'),
(48, 11, 'dsa'),
(83, 12, 'bbbbb'),
(84, 13, 'dsa'),
(85, 14, ''),
(86, 15, ''),
(87, 16, ''),
(88, 17, ''),
(89, 18, ''),
(90, 19, ''),
(91, 20, ''),
(92, 21, ''),
(93, 22, ''),
(94, 23, ''),
(95, 24, ''),
(96, 25, ''),
(97, 26, ''),
(98, 27, ''),
(99, 28, ''),
(100, 29, ''),
(101, 30, ''),
(102, 31, ''),
(103, 32, ''),
(104, 33, 'nenhum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `COD_IMAGEM` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `CAMINHO_IMAGEM` varchar(255) NOT NULL,
  `ALT_IMAGEM` varchar(45) NOT NULL,
  `STATUS_IMAGEM` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`COD_IMAGEM`, `COD_RESENHA`, `CAMINHO_IMAGEM`, `ALT_IMAGEM`, `STATUS_IMAGEM`) VALUES
(7, 12, 'a826069ba68a92a1947993d0d68d2dc7.jpg', 'cxampptmpphp55f3tmp', 1),
(8, 12, 'e800efbf5e80df68af5a1cfa194904b7.jpg', 'cxampptmpphp5604tmp', 1),
(9, 13, '66c56c1819bfe2b9c61844b0aa5bcbcd.jpg', 'banco1jpg', 1),
(10, 14, '3c1bf2e6582ecd441588135685198499.jpg', 'fireworks2jpg', 1),
(11, 14, 'a2c92cf32bf23753c12126d38f21d51b.jpg', 'delphiiiijpg', 1),
(12, 15, '75261aa51bba18d8b52a458136bb6a8b.jpg', 'banco1jpg', 1),
(13, 17, 'df2a5535420ce66b04e0f1df6fd4b36b.JPG', 'bairrojpg', 1),
(14, 18, '1886cd0e24bc0ecf3b00ce3f29492814.JPG', 'bairrojpg', 1),
(15, 25, '89bb5e9c2dab311b969efc6018a684a1.png', 'captura-de-tela-2png', 1),
(16, 25, '1e966214560440d83696353dbf3c0065.png', 'captura-de-tela-1png', 1),
(17, 26, '20be85c62cd1e9cc33eb5c3aa15ecc92.exe', '7z920exe', 1),
(18, 26, '6b9061a98369d9950168eb112748d236.png', 'captura-de-tela-1png', 1),
(19, 33, 'acf177ec7f4436257a87df67b7715c4d.png', 'logopng', 1),
(20, 33, '49d018e92cbfe97715c58ad7c5bf52d5.jpg', 'fundojpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `COD_LOG` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL,
  `IP` varchar(45) NOT NULL,
  `ACAO_LOG` text NOT NULL,
  `DATAHORA_LOG` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `COD_PRODUTO` int(11) NOT NULL,
  `NOME_PRODUTO` varchar(100) NOT NULL,
  `STATUS_PRODUTO` int(11) NOT NULL,
  `FABRICANTE` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`COD_PRODUTO`, `NOME_PRODUTO`, `STATUS_PRODUTO`, `FABRICANTE`) VALUES
(1, 'Iphone 5', 1, 'Aple'),
(2, 'Samsung galaxy s3', 2, 'Sansumg'),
(3, 'Iphone 5c', 1, 'Apple'),
(7, 'te3ste ', 0, ''),
(8, 'asddd', 1, ''),
(11, ' ', 1, 'aa'),
(16, 'asdaaaa', 1, 'applssa'),
(17, 'Produto', 1, 'Fabricante'),
(18, 'Minha Pizza', 1, 'Minha Pizza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualidades`
--

CREATE TABLE IF NOT EXISTS `qualidades` (
  `COD_DEFEITO` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `QUALIDADES` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `qualidades`
--

INSERT INTO `qualidades` (`COD_DEFEITO`, `COD_RESENHA`, `QUALIDADES`) VALUES
(1, 2, 'Lindo'),
(2, 2, 'Maracilhoso'),
(3, 3, 'Lindo'),
(4, 3, 'Bonito'),
(5, 3, 'Mara'),
(6, 5, 'a'),
(7, 5, 'a'),
(8, 5, 'a'),
(9, 5, 'a'),
(10, 5, 'a'),
(11, 6, 'a'),
(12, 6, 'a'),
(13, 6, 'a'),
(14, 6, 'a'),
(15, 6, 'a'),
(16, 7, 'a'),
(17, 7, 'b'),
(18, 7, 'c'),
(19, 7, 'd'),
(20, 7, 'e'),
(21, 8, 'a'),
(22, 9, 'a'),
(23, 9, 'a'),
(24, 9, 'a'),
(25, 9, 'a'),
(26, 9, 'a'),
(36, 10, 'teste'),
(37, 10, 'teste'),
(38, 10, 'teste'),
(39, 11, 'asd'),
(40, 11, 'asd'),
(41, 11, 'asd'),
(42, 11, 'asd'),
(43, 11, 'asd'),
(80, 12, 'aaaaa'),
(81, 13, 'asd'),
(82, 14, ''),
(83, 15, ''),
(84, 16, ''),
(85, 17, ''),
(86, 18, ''),
(87, 19, ''),
(88, 20, ''),
(89, 21, ''),
(90, 22, ''),
(91, 23, ''),
(92, 24, ''),
(93, 25, ''),
(94, 26, ''),
(95, 27, ''),
(96, 28, ''),
(97, 29, ''),
(98, 30, ''),
(99, 31, ''),
(100, 32, ''),
(101, 33, 'otimo'),
(102, 33, 'linda'),
(103, 33, 'uhuuul'),
(104, 33, 'aeeeee');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resenha`
--

CREATE TABLE IF NOT EXISTS `resenha` (
  `COD_RESENHA` int(11) NOT NULL,
  `CORPO_RESENHA` text NOT NULL,
  `QTDE_DENUNCIAS` int(11) NOT NULL,
  `DATA_RESENHA` datetime NOT NULL,
  `STATUS_RESENHA` int(11) NOT NULL,
  `COD_PRODUTO` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL,
  `NOTA_PRODUTO` int(11) NOT NULL,
  `titulo_resenha` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `resenha`
--

INSERT INTO `resenha` (`COD_RESENHA`, `CORPO_RESENHA`, `QTDE_DENUNCIAS`, `DATA_RESENHA`, `STATUS_RESENHA`, `COD_PRODUTO`, `COD_USUARIO`, `NOTA_PRODUTO`, `titulo_resenha`) VALUES
(2, 'asdasda asd asd as das das das das das das das das dasd as das dasd asd as d', 0, '2015-08-07 06:36:31', 1, 3, 15, 3, ''),
(3, 'celular de bosta!', 0, '2015-08-07 06:37:23', 1, 3, 15, 3, ''),
(4, 'asdasd', 0, '2015-08-07 06:39:38', 1, 3, 15, 2, ''),
(5, 'asdasd', 0, '2015-08-07 06:41:39', 1, 2, 15, 3, ''),
(6, 'treste', 0, '2015-08-07 06:45:38', 1, 8, 15, 3, ''),
(7, '123654654', 0, '2015-08-07 06:48:08', 1, 2, 15, 3, ''),
(8, 'asd', 0, '2015-08-07 06:53:02', 1, 16, 15, 2, ''),
(9, '', 0, '2015-08-20 04:34:09', 1, 11, 15, 0, ''),
(10, 'asd asd asd', 0, '2015-08-20 05:02:06', 1, 17, 15, 2, 'TItulo da resenha'),
(11, 'teste descricao e bla bla bla', 0, '2015-08-20 05:36:48', 1, 1, 15, 2, 'Teste do produto'),
(12, 'asd', 0, '2015-08-20 06:17:24', 1, 2, 15, 2, 'a'),
(13, 'asdasd asd', 0, '2015-08-20 06:20:00', 1, 2, 15, 2, 'a'),
(14, 'asd', 0, '2015-08-20 06:20:43', 1, 2, 15, 2, 'a'),
(15, 'asd', 0, '2015-08-20 06:21:27', 1, 2, 15, 2, 'a'),
(16, 'asda as das d', 0, '2015-08-20 06:23:53', 1, 2, 15, 2, 'a'),
(17, 'asd', 0, '2015-08-20 06:24:17', 1, 2, 15, 2, 'a'),
(18, 'asd', 0, '2015-08-20 06:24:46', 1, 2, 15, 2, 'a'),
(19, 'asd', 0, '2015-08-20 06:24:59', 1, 2, 15, 2, 'a'),
(20, 'asd asd', 0, '2015-08-20 06:28:43', 1, 2, 15, 2, 'a'),
(21, 'asd asd ', 0, '2015-08-20 06:31:34', 1, 2, 15, 2, 'a'),
(22, 'asd asd ', 0, '2015-08-20 06:31:53', 1, 2, 15, 2, 'a'),
(23, 'asd asd as d', 0, '2015-08-20 06:32:16', 1, 2, 15, 2, 'a'),
(24, 'asd asd as d', 0, '2015-08-20 06:32:19', 1, 2, 15, 2, 'a'),
(25, ' asd asd as d', 0, '2015-08-20 06:33:28', 1, 2, 15, 2, 'a'),
(26, 'asd asd as d', 0, '2015-08-20 06:34:08', 1, 2, 15, 2, 'a'),
(27, 'asd asd as d', 0, '2015-08-20 06:34:24', 1, 2, 15, 2, 'a'),
(28, 'asd asd as d', 0, '2015-08-20 06:34:33', 1, 2, 15, 2, 'a'),
(29, 'asd asd as d', 0, '2015-08-20 06:34:41', 1, 2, 15, 2, 'a'),
(30, 'asd asd ', 0, '2015-08-20 06:36:31', 1, 2, 15, 2, 'a'),
(31, 'asd as das d', 0, '2015-08-20 06:38:04', 1, 2, 15, 2, 'a'),
(32, 'asd as das d', 0, '2015-08-20 06:38:35', 1, 2, 15, 2, 'a'),
(33, 'Pizza maravilhosa, atendimento maravilhoso, sistema lindo e maravilhoso programado pelo melhor programador do mundo <3', 0, '2015-08-20 06:40:07', 1, 18, 15, 5, 'Minha pizza site maravilhoso!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta_comentario`
--

CREATE TABLE IF NOT EXISTS `resposta_comentario` (
  `COD_RESPOSTA` int(11) NOT NULL,
  `COD_COMENTARIO` int(11) NOT NULL,
  `RESPOSTA_COMENTARIO` text NOT NULL,
  `STATUS_RESPOSTA` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `COD_TIPO` int(11) NOT NULL,
  `DESCRICAO_TIPO` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`COD_TIPO`, `DESCRICAO_TIPO`) VALUES
(1, 'Administrador'),
(2, 'Comum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `COD_USUARIO` int(11) NOT NULL,
  `NOME_USUARIO` varchar(55) NOT NULL,
  `SOBRENOME_USUARIO` varchar(45) NOT NULL,
  `IMAGEM_PERFIL` varchar(255) NOT NULL,
  `DATA_NASCIMENTO` date NOT NULL,
  `CPF_USUARIO` varchar(15) NOT NULL,
  `EMAIL_USUARIO` varchar(55) NOT NULL,
  `SENHA_USUARIO` varchar(255) NOT NULL,
  `UF_USUARIO` char(2) NOT NULL,
  `CIDADE_USUARIO` varchar(25) NOT NULL,
  `STATUS_USUARIO` int(11) NOT NULL,
  `COD_TIPO` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`COD_USUARIO`, `NOME_USUARIO`, `SOBRENOME_USUARIO`, `IMAGEM_PERFIL`, `DATA_NASCIMENTO`, `CPF_USUARIO`, `EMAIL_USUARIO`, `SENHA_USUARIO`, `UF_USUARIO`, `CIDADE_USUARIO`, `STATUS_USUARIO`, `COD_TIPO`) VALUES
(2, 'Orienta', 'dor', '', '2015-07-22', '564654', 'orientador@mail.com', '203040A', 'SP', 'barueri', 1, 2),
(3, 'asd', '', 'aham', '1997-10-15', '', 'testelocal@testeloca.com', '123456', 'as', 'asd', 1, 1),
(4, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '3651651651', 'zz@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(5, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '651651651', 'asddd@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(6, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '984621651', 'asddddddd@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(7, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '8545456', 'asdeaa@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(8, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'asdq11', 'asq1deaa@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(9, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'asdasd', '15151@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(10, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '12eqwdas', '56121@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(11, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'as651d651as', 'a54sd1@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(12, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'a531sd651', 'igorcarlos1997@hotmail.com', '123', 'SÃ', 'Barueri', 1, 1),
(13, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'asd51651', 'qwe@hotmail.com', 'asd', 'SÃ', 'Barueri', 1, 1),
(14, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '12a1sd651', 'reee@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(15, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '461642138277', 'igor@mail.com', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'SÃ', 'Barueri', 1, 1),
(16, 'Teste Carlos', '', 'aham', '0000-00-00', '46164213827', 'teste@hotmail.com', 'MjVkNTVhZDI4M2FhNDAwYWY0NjRjNzZkNzEzYzA3YWQ=', 'SP', 'Barueri', 1, 1),
(17, 'Esse nÃ£o tem', '', 'aham', '0000-00-00', '46164213827777', 'essenaotem@mail.com', 'MjVkNTVhZDI4M2FhNDAwYWY0NjRjNzZkNzEzYzA3YWQ=', 'DF', 'Barueri', 1, 1),
(18, 'asdasd', '', 'aham', '0000-00-00', '1651651', 'cristiano@hotmail.com', 'MjVkNTVhZDI4M2FhNDAwYWY0NjRjNzZkNzEzYzA3YWQ=', 'CE', 'asdasd', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`COD_COMENTARIO`), ADD KEY `FK_COD_RESENHA_COMENTARIO_idx` (`COD_RESENHA`), ADD KEY `FK_COD_USUARIO_COMENTARIO_idx` (`COD_USUARIO`);

--
-- Indexes for table `defeitos`
--
ALTER TABLE `defeitos`
  ADD PRIMARY KEY (`COD_DEFEITO`), ADD KEY `FK_COD_RESENHA_DEFEITO_idx` (`COD_RESENHA`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`COD_IMAGEM`), ADD KEY `FK_COD_RESENHA_idx` (`COD_RESENHA`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`COD_LOG`), ADD KEY `FK_COD_USUARIO_LOG_idx` (`COD_USUARIO`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`COD_PRODUTO`);

--
-- Indexes for table `qualidades`
--
ALTER TABLE `qualidades`
  ADD PRIMARY KEY (`COD_DEFEITO`), ADD KEY `FK_COD_RESENHA_DEFEITO_idx` (`COD_RESENHA`);

--
-- Indexes for table `resenha`
--
ALTER TABLE `resenha`
  ADD PRIMARY KEY (`COD_RESENHA`), ADD KEY `FK_COD_USUARIO_idx` (`COD_USUARIO`), ADD KEY `FK_COD_PRODUTO_idx` (`COD_PRODUTO`);

--
-- Indexes for table `resposta_comentario`
--
ALTER TABLE `resposta_comentario`
  ADD PRIMARY KEY (`COD_RESPOSTA`), ADD KEY `FK_COD_COMENTARIO_RESPOSTA_idx` (`COD_COMENTARIO`), ADD KEY `FK_COD_USUARIO_RESPOSTA_idx` (`COD_USUARIO`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`COD_TIPO`), ADD UNIQUE KEY `DESCRICAO_TIPO_UNIQUE` (`DESCRICAO_TIPO`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`COD_USUARIO`), ADD UNIQUE KEY `CPF_USUARIO_UNIQUE` (`CPF_USUARIO`), ADD UNIQUE KEY `EMAIL_USUARIO_UNIQUE` (`EMAIL_USUARIO`), ADD KEY `FK_COD_TIPO_idx` (`COD_TIPO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `COD_COMENTARIO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `defeitos`
--
ALTER TABLE `defeitos`
  MODIFY `COD_DEFEITO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `COD_IMAGEM` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `COD_LOG` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `COD_PRODUTO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `qualidades`
--
ALTER TABLE `qualidades`
  MODIFY `COD_DEFEITO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `resenha`
--
ALTER TABLE `resenha`
  MODIFY `COD_RESENHA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `resposta_comentario`
--
ALTER TABLE `resposta_comentario`
  MODIFY `COD_RESPOSTA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `COD_TIPO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
ADD CONSTRAINT `FK_COD_RESENHA_COMENTARIO` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_COD_USUARIO_COMENTARIO` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `defeitos`
--
ALTER TABLE `defeitos`
ADD CONSTRAINT `FK_COD_RESENHA_DEFEITO0` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
ADD CONSTRAINT `FK_COD_RESENHA` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `log`
--
ALTER TABLE `log`
ADD CONSTRAINT `FK_COD_USUARIO_LOG` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `qualidades`
--
ALTER TABLE `qualidades`
ADD CONSTRAINT `FK_COD_RESENHA_DEFEITO` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `resenha`
--
ALTER TABLE `resenha`
ADD CONSTRAINT `FK_COD_PRODUTO` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `produtos` (`COD_PRODUTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_COD_USUARIO` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `resposta_comentario`
--
ALTER TABLE `resposta_comentario`
ADD CONSTRAINT `FK_COD_COMENTARIO_RESPOSTA` FOREIGN KEY (`COD_COMENTARIO`) REFERENCES `comentarios` (`COD_COMENTARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_COD_USUARIO_RESPOSTA` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `FK_COD_TIPO` FOREIGN KEY (`COD_TIPO`) REFERENCES `tipo_usuario` (`COD_TIPO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
