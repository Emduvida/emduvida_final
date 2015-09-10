-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 179.188.16.43
-- Tempo de Geração: 10/09/2015 às 06:32:36
-- Versão do Servidor: 5.6.21
-- Versão do PHP: 5.3.3-7+squeeze26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `emduvida`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `COD_COMENTARIO` int(11) NOT NULL AUTO_INCREMENT,
  `TEXTO_COMENTARIO` text NOT NULL,
  `NOTA_COMENTARIO` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL,
  `STATUS_COMENTARIO` int(11) NOT NULL,
  `DATAHORA_COMENTARIO` datetime NOT NULL,
  PRIMARY KEY (`COD_COMENTARIO`),
  KEY `FK_COD_RESENHA_COMENTARIO_idx` (`COD_RESENHA`),
  KEY `FK_COD_USUARIO_COMENTARIO_idx` (`COD_USUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`COD_COMENTARIO`, `TEXTO_COMENTARIO`, `NOTA_COMENTARIO`, `COD_RESENHA`, `COD_USUARIO`, `STATUS_COMENTARIO`, `DATAHORA_COMENTARIO`) VALUES
(1, 'a', 2, 35, 22, 0, '0000-00-00 00:00:00'),
(2, '', 0, 35, 22, 0, '0000-00-00 00:00:00'),
(3, 'a', 2, 35, 22, 0, '0000-00-00 00:00:00'),
(4, 'Gostei muito da sua resenha amigo, merece meu like! Pena que o site nÃ£o da suporte!', 3, 35, 22, 0, '0000-00-00 00:00:00'),
(5, 'Agora o site lista os comentarios? Maior marra ein! ', 5, 35, 22, 0, '0000-00-00 00:00:00'),
(6, 'sexto comentarios.....', 5, 35, 22, 0, '0000-00-00 00:00:00'),
(7, 'Agora falta a hora nÃ© lindo?', 5, 35, 22, 0, '0000-00-00 00:00:00'),
(8, 'SerÃ¡ que foi com hora? hmm nn sei!', 3, 35, 22, 0, '2015-09-05 23:29:17'),
(9, 'Foooooooooi!', 5, 35, 22, 0, '2015-09-05 23:29:39'),
(10, 'PÃ¡gina da resenha ta completa! OMG', 4, 35, 22, 0, '2015-09-05 23:32:53'),
(11, 'Mentira, falta uma coisa...', 4, 35, 22, 0, '2015-09-05 23:33:06'),
(12, 'Podia ter colocado mais imagens nÃ© boco.', 2, 35, 22, 0, '2015-09-05 23:35:32'),
(13, 'Amigo, tambÃ©m tive a mesma decepÃ§Ã£o que vocÃª, pensa sÃ³ que droga, o que fazer com apenas 20Giga de ram? ', 3, 36, 22, 0, '2015-09-05 23:42:02'),
(14, 'Comentando onlinemente', 3, 36, 22, 0, '2015-09-06 00:59:14'),
(15, 'COmentario', 3, 6, 22, 0, '2015-09-06 00:59:35'),
(16, 'O igor Ã© um lindo mesmo!', 2, 6, 22, 0, '2015-09-06 00:59:47'),
(17, 'nÃ£o gostei do seu comentÃ¡rio, se tivesse olhado nas especificaÃ§Ãµes do produto estaria lÃ¡ qual o SO', 1, 36, 23, 0, '2015-09-06 12:35:37'),
(18, 'zfrerghtrheggw4yh4y4', 3, 36, 23, 0, '2015-09-08 19:18:40'),
(19, '45t45y54y4', 1, 36, 23, 0, '2015-09-08 19:18:47'),
(20, 'wewfg-jhwbjl4ersbgÃ³v3ijersc', 1, 36, 23, 0, '2015-09-08 19:19:01'),
(21, 'wewfg-jhwbjl4ersbgÃ³v3ijersc', 1, 36, 23, 0, '2015-09-08 19:19:06'),
(22, 'wewfg-jhwbjl4ersbgÃ³v3ijersc', 1, 36, 23, 0, '2015-09-08 19:19:17'),
(23, 'wewfg-jhwbjl4ersbgÃ³v3ijersc', 2, 36, 23, 0, '2015-09-08 19:19:28'),
(24, 'efrearkfpfgfkq3[-rgjovdfseveagveeeeeeeeeeeeeeeeeeeeeeeee', 1, 12, 23, 0, '2015-09-08 19:57:38'),
(25, 'Taylo >>>>> All', 0, 39, 22, 0, '2015-09-09 03:29:53'),
(26, 'QUERIDO, BEY Ã‰ A SUPREMACIA DA HUMANIDADE ... BEY RAINHA TAYLOR NADINHA ...', 5, 39, 23, 0, '2015-09-09 15:51:09'),
(27, 'Ta funcionand?', 3, 36, 22, 0, '2015-09-10 05:39:47'),
(28, 'ta sim...', 2, 36, 22, 0, '2015-09-10 05:39:53'),
(29, 'Igor Seu lindo!!!', 5, 47, 22, 0, '2015-09-10 06:19:38'),
(30, 'Taylor >>>> All', 3, 37, 22, 0, '2015-09-10 06:20:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `defeitos`
--

CREATE TABLE IF NOT EXISTS `defeitos` (
  `COD_DEFEITO` int(11) NOT NULL AUTO_INCREMENT,
  `COD_RESENHA` int(11) NOT NULL,
  `DEFEITOS` text NOT NULL,
  PRIMARY KEY (`COD_DEFEITO`),
  KEY `FK_COD_RESENHA_DEFEITO_idx` (`COD_RESENHA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=131 ;

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
(104, 33, 'nenhum'),
(105, 34, 'ruim'),
(106, 34, 'incomoda'),
(107, 34, 'doi'),
(108, 35, ''),
(109, 36, 'Sem SO'),
(110, 36, 'Trava'),
(111, 36, 'Apenas 20g de ram'),
(112, 36, 'odiei'),
(113, 37, 'nÃ£o Ã© minha esposa '),
(114, 37, 'nÃ£o sabe da minha existÃªncia '),
(115, 37, 'ainda nÃ£o fez um snap chat (#BEYVEMPROSAP)'),
(116, 37, ''),
(117, 38, 'eeeee'),
(118, 38, 'eeeeeeee'),
(119, 38, ''),
(120, 39, ''),
(121, 40, 'ggg'),
(122, 41, 'ggg'),
(123, 42, 'ggg'),
(124, 43, 'ggg'),
(125, 44, 'nÃ£o Ã© minha esposa '),
(126, 45, 'oioioi'),
(127, 46, ''),
(128, 47, 'RUim'),
(129, 47, 'pessimo'),
(130, 48, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `COD_IMAGEM` int(11) NOT NULL AUTO_INCREMENT,
  `COD_RESENHA` int(11) NOT NULL,
  `CAMINHO_IMAGEM` varchar(255) NOT NULL,
  `ALT_IMAGEM` varchar(45) NOT NULL,
  `STATUS_IMAGEM` int(11) NOT NULL,
  PRIMARY KEY (`COD_IMAGEM`),
  KEY `FK_COD_RESENHA_idx` (`COD_RESENHA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

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
(20, 33, '49d018e92cbfe97715c58ad7c5bf52d5.jpg', 'fundojpg', 1),
(21, 35, '9e5920b2ca01b5b162f8369b5e3492f4.jpg', '044429104571584jpg', 1),
(22, 36, 'cd3e39b4a44674814e82c73f1995e383.jpgXsZ42618916xIM.jpg', 'vendo-notebook-samsung-r430-seminovoiz2xvzxxp', 1),
(23, 36, '99195542192a9fa40779a473a1139ba0.jpgXsZ42618916xIM.jpg', 'vendo-notebook-samsung-r430-seminovoiz2xvzxxp', 1),
(24, 36, 'f4800fd9c3561ecadcfa3eea073154d8.JPG', 'samsungr4301jpg', 1),
(25, 37, '88632b36e2e998ae80205c393cdb1e06.jpg', '1jpg', 1),
(26, 39, 'f10f3f9bc35ee1657da0ef1f0285a731.PNG', 'beypng', 1),
(27, 44, '1a2ea4fb3eb464d02e560cf46ea31918.PNG', 'beypng', 1),
(28, 47, '1bee5d56cfa7c940867ab94ab00568e5.jpg', 's3-e1390817741599jpg', 1),
(29, 47, 'dbf8cef222c9fa4ab6526b219e58e027.jpg', 'samsung-galaxyjpg', 1),
(30, 47, '971d393c8d8134aaf4b911e35075fb9c.jpg', 'galaxy-s3-blue5jpg', 1),
(31, 48, 'd09d0eb9e685079a51b51d32dce818a9.PNG', 'beypng', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `COD_LOG` int(11) NOT NULL AUTO_INCREMENT,
  `COD_USUARIO` int(11) NOT NULL,
  `IP` varchar(45) NOT NULL,
  `ACAO_LOG` text NOT NULL,
  `DATAHORA_LOG` datetime NOT NULL,
  PRIMARY KEY (`COD_LOG`),
  KEY `FK_COD_USUARIO_LOG_idx` (`COD_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `COD_PRODUTO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_PRODUTO` varchar(100) NOT NULL,
  `STATUS_PRODUTO` int(11) NOT NULL,
  `FABRICANTE` varchar(45) NOT NULL,
  PRIMARY KEY (`COD_PRODUTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

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
(18, 'Minha Pizza', 1, 'Minha Pizza'),
(19, 'Cama de casal', 1, 'Casas Bahia'),
(20, 'Notebook Samsung ', 1, 'Samsung'),
(21, 'BEYONCÃ‰ RAINHA ', 1, 'TINA KNOWLES '),
(22, 'ccwrsvwaesfv', 1, 'vwwrvwrv'),
(23, '6yyy', 1, 'yyyy'),
(24, 'ggg', 1, 'ttttt'),
(25, '', 1, ''),
(26, 'Iphone 5', 1, 'Apple'),
(27, 'Iphone 5', 1, 'Apple'),
(28, 'Iphone 6s', 1, 'Apple'),
(29, 'Cama de casal 2', 0, 'Casas Bahia'),
(30, 'Nome do produto', 1, 'Fabricante'),
(31, 'aa', 1, 'aa'),
(32, 'Nome direito', 1, 'eita'),
(33, 'APPLEaaa', 1, 'APPLE'),
(34, 'BeyoncÃ© knowles carter', 1, 'Tina Knowles + Deus'''),
(35, 'oioioi', 1, 'oioioi'),
(36, 'dcdfc', 1, 'efef'),
(37, 'rrwgrwg', 1, 'efewr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualidades`
--

CREATE TABLE IF NOT EXISTS `qualidades` (
  `COD_DEFEITO` int(11) NOT NULL AUTO_INCREMENT,
  `COD_RESENHA` int(11) NOT NULL,
  `QUALIDADES` text NOT NULL,
  PRIMARY KEY (`COD_DEFEITO`),
  KEY `FK_COD_RESENHA_DEFEITO_idx` (`COD_RESENHA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=131 ;

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
(104, 33, 'aeeeee'),
(105, 34, ''),
(106, 35, 'ccc'),
(107, 35, 'ccc'),
(108, 35, 'ccc'),
(109, 36, ''),
(110, 37, 'linda'),
(111, 37, 'talentosa'),
(112, 37, 'voz maravilhosa '),
(113, 37, 'uma Ã³tima pessoa'),
(114, 37, 'rica'),
(115, 38, 'oiiiiiiiiiiiiiiiiii'),
(116, 38, 'eeeeeee'),
(117, 38, ''),
(118, 39, 'yyyyy'),
(119, 40, 'gggg'),
(120, 41, 'gggg'),
(121, 42, 'gggg'),
(122, 43, 'gggg'),
(123, 44, 'linda'),
(124, 44, 'sensual'),
(125, 44, 'talentosa'),
(126, 44, ''),
(127, 45, 'oioii'),
(128, 46, ''),
(129, 47, ''),
(130, 48, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resenha`
--

CREATE TABLE IF NOT EXISTS `resenha` (
  `COD_RESENHA` int(11) NOT NULL AUTO_INCREMENT,
  `CORPO_RESENHA` text NOT NULL,
  `QTDE_DENUNCIAS` int(11) NOT NULL,
  `DATA_RESENHA` datetime NOT NULL,
  `STATUS_RESENHA` int(11) NOT NULL,
  `COD_PRODUTO` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL,
  `NOTA_PRODUTO` int(11) NOT NULL,
  `titulo_resenha` varchar(100) NOT NULL,
  `VISUALIZACOES_RESENHA` int(11) DEFAULT NULL,
  `slugfy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`COD_RESENHA`),
  KEY `FK_COD_USUARIO_idx` (`COD_USUARIO`),
  KEY `FK_COD_PRODUTO_idx` (`COD_PRODUTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Extraindo dados da tabela `resenha`
--

INSERT INTO `resenha` (`COD_RESENHA`, `CORPO_RESENHA`, `QTDE_DENUNCIAS`, `DATA_RESENHA`, `STATUS_RESENHA`, `COD_PRODUTO`, `COD_USUARIO`, `NOTA_PRODUTO`, `titulo_resenha`, `VISUALIZACOES_RESENHA`, `slugfy`) VALUES
(2, 'asdasda asd asd as das das das das das das das das dasd as das dasd asd as d', 0, '2015-08-07 06:36:31', 1, 3, 15, 3, 'Primeira', 16, NULL),
(3, 'celular de bosta!', 0, '2015-08-07 06:37:23', 1, 3, 15, 3, 'segunda', 29, NULL),
(4, 'asdasd', 0, '2015-08-07 06:39:38', 1, 3, 15, 2, '', 3, NULL),
(5, 'asdasd', 0, '2015-08-07 06:41:39', 1, 2, 15, 3, '', 7, NULL),
(6, 'treste', 0, '2015-08-07 06:45:38', 1, 8, 15, 3, '', 5, NULL),
(7, '123654654', 0, '2015-08-07 06:48:08', 1, 2, 15, 3, '', 9, NULL),
(8, 'asd', 0, '2015-08-07 06:53:02', 1, 16, 15, 2, '', 7, NULL),
(9, '', 0, '2015-08-20 04:34:09', 1, 11, 15, 0, '', 3, NULL),
(10, 'asd asd asd', 0, '2015-08-20 05:02:06', 1, 17, 15, 2, 'TItulo da resenha', 3, NULL),
(11, 'teste descricao e bla bla bla', 0, '2015-08-20 05:36:48', 1, 1, 15, 2, 'Teste do produto', 4, NULL),
(12, 'asd', 0, '2015-08-20 06:17:24', 1, 2, 15, 2, 'a', 8, NULL),
(13, 'asdasd asd', 0, '2015-08-20 06:20:00', 0, 2, 15, 2, 'a', 0, NULL),
(14, 'asd', 0, '2015-08-20 06:20:43', 1, 2, 15, 2, 'a', 2, NULL),
(15, 'asd', 0, '2015-08-20 06:21:27', 0, 2, 15, 2, 'a', 0, NULL),
(16, 'asda as das d', 0, '2015-08-20 06:23:53', 0, 2, 15, 2, 'a', 0, NULL),
(17, 'asd', 0, '2015-08-20 06:24:17', 1, 2, 15, 2, 'a', 2, NULL),
(18, 'asd', 0, '2015-08-20 06:24:46', 0, 2, 15, 2, 'a', 0, NULL),
(19, 'asd', 0, '2015-08-20 06:24:59', 0, 2, 15, 2, 'a', 0, NULL),
(20, 'asd asd', 0, '2015-08-20 06:28:43', 0, 2, 15, 2, 'a', 0, NULL),
(21, 'asd asd ', 0, '2015-08-20 06:31:34', 0, 2, 15, 2, 'a', 0, NULL),
(22, 'asd asd ', 0, '2015-08-20 06:31:53', 0, 2, 15, 2, 'a', 0, NULL),
(23, 'asd asd as d', 0, '2015-08-20 06:32:16', 0, 2, 15, 2, 'a', 0, NULL),
(24, 'asd asd as d', 0, '2015-08-20 06:32:19', 0, 2, 15, 2, 'a', 0, NULL),
(25, ' asd asd as d', 0, '2015-08-20 06:33:28', 0, 2, 15, 2, 'a', 0, NULL),
(26, 'asd asd as d', 0, '2015-08-20 06:34:08', 0, 2, 15, 2, 'a', 0, NULL),
(27, 'asd asd as d', 0, '2015-08-20 06:34:24', 0, 2, 15, 2, 'a', 0, NULL),
(28, 'asd asd as d', 0, '2015-08-20 06:34:33', 0, 2, 15, 2, 'a', 0, NULL),
(29, 'asd asd as d', 0, '2015-08-20 06:34:41', 0, 2, 15, 2, 'a', 0, NULL),
(30, 'asd asd ', 0, '2015-08-20 06:36:31', 0, 2, 15, 2, 'a', 0, NULL),
(31, 'asd as das d', 0, '2015-08-20 06:38:04', 0, 2, 15, 2, 'a', 0, NULL),
(32, 'asd as das d', 0, '2015-08-20 06:38:35', 0, 2, 15, 2, 'a', 0, NULL),
(33, 'Pizza maravilhosa, atendimento maravilhoso, sistema lindo e maravilhoso programado pelo melhor programador do mundo <3', 0, '2015-08-20 06:40:07', 1, 18, 15, 5, 'Minha pizza site maravilhoso!', 3, NULL),
(34, 'Uma cama muito ruim, ela nÃ£o se adapta ao meu corpo maravilhoso, fica rangindo a noite inteira impedindo que eu tenha uma noite de sono agradaveo :/', 0, '2015-09-03 05:52:20', 0, 19, 22, 0, 'Cama ruim', 1, NULL),
(35, 'Que cama daora vÃ©i! da pra fazer tudo nela, dormir, comer, jantar, coisinhas, muito loucaaa!', 0, '2015-09-05 06:45:04', 1, 19, 22, 5, 'Teste slugfy', 31, 'teste-slugfy'),
(36, 'Eu estou me sentindo muito chateado, pois me prometeram que instalariam um sistema operacional de classe em meu notebook, e o que recebo? um windows 98, vim compartilhar com vocÃªs que NÃƒO COMPREM esse produto, ele Ã© pÃ©ssimo!', 0, '2015-09-05 23:40:09', 1, 20, 22, 0, 'Notebook travando', 31, 'notebook-travando'),
(37, 'eu poderia argumentar em um milhÃ£o de palavras o porque essa mulher Ã© nota 10, mas Ã© sÃ³ vocÃª (leitor) ir ver a performance dela no Made in America que ja comprovarÃ¡ â™¥ MARAVILHOSA SENSUAL DIVA GOSTOSA E ETC.', 0, '2015-09-06 12:33:16', 1, 21, 23, 5, 'DESTRUIDORA DE CORAÃ‡Ã•ES', 47, 'destruidora-de-coracoes'),
(38, 'rvwreveewsdae', 0, '2015-09-08 19:58:30', 0, 22, 23, 4, 'effrgevaweds', NULL, 'effrgevaweds'),
(39, 'yyy', 0, '2015-09-08 19:59:36', 1, 23, 23, 5, 'gryh56uh56h5', 34, 'gryh56uh56h5'),
(40, 'ggggg', 0, '2015-09-08 20:00:16', 0, 24, 23, 1, 'gggg', NULL, 'gggg'),
(41, 'ggggg', 0, '2015-09-08 20:00:20', 0, 24, 23, 1, 'gggg', NULL, 'gggg'),
(42, 'ggggg', 0, '2015-09-08 20:00:20', 1, 24, 23, 1, 'gggg', 7, 'gggg'),
(43, 'ggggg', 0, '2015-09-08 20:00:20', 0, 24, 23, 1, 'gggg', 1, 'gggg'),
(44, 'Sensacional sem comparaÃ§Ãµes o meio da musica nunca teve uma artista tÃ£o completa como ela ', 0, '2015-09-09 16:05:05', 1, 34, 23, 5, 'BEYONCÃ‰ DONA DO MUNDO', 1, 'beyonce-dona-do-mundo'),
(45, 'ooioioioi', 0, '2015-09-10 06:11:10', 0, 35, 23, 5, 'oioioi', NULL, 'oioioi'),
(46, 'oioi', 0, '2015-09-10 06:12:29', 0, 36, 23, 1, 'maria', NULL, 'maria'),
(47, 'Galaxy ruim, quebrou quando o joguei na parede, pra que serve o gorila glass mesmo? NADA', 0, '2015-09-10 06:13:35', 1, 2, 22, 2, 'Galaxy chato', 32, 'galaxy-chato'),
(48, 'serfergg', 0, '2015-09-10 06:14:53', 0, 37, 23, 4, 'nega', NULL, 'nega');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `COD_TIPO` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO_TIPO` varchar(45) NOT NULL,
  PRIMARY KEY (`COD_TIPO`),
  UNIQUE KEY `DESCRICAO_TIPO_UNIQUE` (`DESCRICAO_TIPO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
  `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
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
  `COD_TIPO` int(11) NOT NULL,
  PRIMARY KEY (`COD_USUARIO`),
  UNIQUE KEY `CPF_USUARIO_UNIQUE` (`CPF_USUARIO`),
  UNIQUE KEY `EMAIL_USUARIO_UNIQUE` (`EMAIL_USUARIO`),
  KEY `FK_COD_TIPO_idx` (`COD_TIPO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`COD_USUARIO`, `NOME_USUARIO`, `SOBRENOME_USUARIO`, `IMAGEM_PERFIL`, `DATA_NASCIMENTO`, `CPF_USUARIO`, `EMAIL_USUARIO`, `SENHA_USUARIO`, `UF_USUARIO`, `CIDADE_USUARIO`, `STATUS_USUARIO`, `COD_TIPO`) VALUES
(15, 'Igor Carlos da Silva', '', '14a27202c3362307be1618d4c9aa32b8.jpg', '1997-10-15', '461642138277', 'igorcarlos1997@hotmail.comasdasdasd', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'SP', 'Barueri', 1, 1),
(22, 'Igor Carlos', 'Silva', 'a31ea87ad27b2f97fb1db05319ec50a7.jpg', '1997-10-15', '461.642.132-15', 'igor@mail.com', 'MjVkNTVhZDI4M2FhNDAwYWY0NjRjNzZkNzEzYzA3YWQ=', 'AC', 'Barueri', 1, 1),
(23, 'Jonathan ', 'Wilson', '10414583_715464918510079_1526732824366701974_n.jpg', '0001-11-30', '000.100.000-00', 'jholrodrigues@hotmail.com', 'NTg4ZDdjN2VkM2U1YmQ2ZjI3MjY4ZGVmZjg4Nzc3NWI=', 'SP', 'Barueri', 1, 1),
(24, 'PatrÃ­cia', '', '14a27202c3362307be1618d4c9aa32b8.jpg', '0000-00-00', '486321144478899', 'patygms@yahoo.com.br', 'MDRlNjk3YTJhMGY3NGU3MTljOGZkZGIzNDQxYWU1M2Y=', 'SP', 'Barueri', 1, 1),
(25, 'Cadastro', '', '14a27202c3362307be1618d4c9aa32b8.jpg', '1997-10-15', '461.642.138-27', 'cadastroagora@mail.com', 'MjVkNTVhZDI4M2FhNDAwYWY0NjRjNzZkNzEzYzA3YWQ=', 'SP', 'Barueri', 2, 1),
(26, 'Thaiane', '', '', '1996-10-02', '288.588.958-60', 'thaiane.moraes01@gmail.com', 'YWE5YmEzZDgxNWJkYzZiMDRlOWJjMjM2OTczN2RmMDQ=', 'SP', 'Barueri', 1, 1),
(27, 'Jonathan ', '', '', '1998-05-08', '000.000.000-00', 'bey@mail.com', 'ZDJmNWI4YWE3ZDVjMmM1NWM1YmNkM2NjNzFjYjQ4OGM=', 'SP', 'Barueri', 0, 1),
(28, 'Lucas', '', '', '1996-08-03', '000.000.111-11', 'lucas21guilherme@hotmail.com', 'ZDFhYWY0NzY3YTNjMTBhNDczNDA3YTRlNDdiMDJkYTY=', 'SP', 'Barueri', 1, 1),
(29, 'Esfiha', '', '', '2010-10-10', '154.213.352-11', 'testando@mail.com', 'MjVkNTVhZDI4M2FhNDAwYWY0NjRjNzZkNzEzYzA3YWQ=', 'SP', 'Barueri', 1, 1),
(30, 'Teste', '', '384c77507cf9cd8272d85d5838f49326.jpg', '1997-10-15', '461.642.138-00', 'testandoo@mail.com', 'MjVkNTVhZDI4M2FhNDAwYWY0NjRjNzZkNzEzYzA3YWQ=', 'SP', 'Barueri', 1, 1);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `FK_COD_RESENHA_COMENTARIO` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_COD_USUARIO_COMENTARIO` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `defeitos`
--
ALTER TABLE `defeitos`
  ADD CONSTRAINT `FK_COD_RESENHA_DEFEITO0` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `FK_COD_RESENHA` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `FK_COD_USUARIO_LOG` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `qualidades`
--
ALTER TABLE `qualidades`
  ADD CONSTRAINT `FK_COD_RESENHA_DEFEITO` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `resenha`
--
ALTER TABLE `resenha`
  ADD CONSTRAINT `FK_COD_PRODUTO` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `produtos` (`COD_PRODUTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_COD_USUARIO` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_COD_TIPO` FOREIGN KEY (`COD_TIPO`) REFERENCES `tipo_usuario` (`COD_TIPO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
