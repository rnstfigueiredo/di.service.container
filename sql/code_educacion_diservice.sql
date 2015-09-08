CREATE DATABASE IF NOT EXISTS `code.educacion_diservice` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `code.educacion_diservice`;


CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;


CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_fornecedor` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `unidade` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;


INSERT INTO `fornecedores` (`id`, `nome`, `email`) VALUES
(1, 'Comercial A', 'comercialA@teste.com.br'),
(2, 'Comercial B', 'comercialB@teste.com.br'),
(3, 'Comercial C', 'comercialC@teste.com.br');


INSERT INTO `produtos` (`id`, `fk_id_fornecedor`, `nome`, `unidade`) VALUES
(1, 1, 'bola', 'un'),
(2, 1, 'bola2', 'un'),
(3, 1, 'bola3', 'un'),
(4, 2, 'caneta1', 'un'),
(5, 2, 'caneta2', 'un'),
(6, 2, 'caneta3', 'un'),
(7, 3, 'aula1', 'un'),
(8, 3, 'aula2', 'un'),
(9, 3, 'aula3', 'un');
