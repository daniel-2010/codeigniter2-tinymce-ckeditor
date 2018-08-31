-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.5.27 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela db_codeigniter.cidade
DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `idCidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCidade`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela db_codeigniter.cidade: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` (`idCidade`, `nome_cid`) VALUES
	(1, 'Belo Horizonte'),
	(2, 'São Paulo'),
	(3, 'Rio de Janeiro'),
	(4, 'Curitiba'),
	(5, 'Maceió');
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;


-- Copiando estrutura para tabela db_codeigniter.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `funcao` int(11) DEFAULT NULL,
  `descricao_funcao` varchar(50) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_codeigniter.usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idUsuario`, `nome`, `cpf`, `endereco`, `email`, `senha`, `status`, `nivel`, `funcao`, `descricao_funcao`, `descricao`) VALUES
	(3, 'Daniel User', '123.123.123-23', 'R. Example, 012', 'email@exemplo.com', 'aa47f8215c6f30a0dcdb2a36a9f4168e', 1, 1, NULL, NULL, NULL),
	(5, 'Daniel User 2', '00000000', 'Rua teste', 'email@exemplo.com', 'aa47f8215c6f30a0dcdb2a36a9f4168e', 1, 1, 1, 'Apenas administrador', '<h2 style="text-align: left;"><span class="marker"><em><strong>Descri&ccedil;&atilde;o do usuario</strong></em></span></h2>\r\n<p>&nbsp;</p>\r\n<p style="text-align: left;">&nbsp;</p>');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
