CREATE DATABASE crud;

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4

INSERT INTO usuario (nome,email,senha,nivel) values('Administrador','admin@admin','admin','Admin');
INSERT INTO usuario (nome,email,senha,nivel) values('Cliente','cliente@cliente','cliente','Cliente');
INSERT INTO usuario (nome,email,senha,nivel) values('Funcionario','funcionario@funcionario','funcionario','Funcionario);