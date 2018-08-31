-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.20 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para db_codeigniter
CREATE DATABASE IF NOT EXISTS `db_codeigniter` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_codeigniter`;


-- Copiando estrutura para tabela db_codeigniter.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_codeigniter.usuario: ~1 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idUsuario`, `nome`, `cpf`, `endereco`, `email`, `senha`, `status`, `nivel`) VALUES
	(3, 'Derpilho', '123.123.123-23', 'R. Example, 012', 'derpilho@gmail.com', 'aa47f8215c6f30a0dcdb2a36a9f4168e', 1, 1),
	(4, 'Derp D Boas', '123.123.123-23', 'R. Example, 012', 'derpilho@gmail.com', '912ec803b2ce49e4a541068d495ab570', 1, 1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
