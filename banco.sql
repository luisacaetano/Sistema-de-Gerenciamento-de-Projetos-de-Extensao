-- MySQL Workbench Synchronization
-- Generated: 2019-04-17 07:08
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Juliana

-- ------------------------------------------------------------
-- Estrutura da Tabela USUÁRIO 
-- ------------------------------------------------------------

CREATE TABLE `usuario` (
  `CODUSUARIO` int(11) NOT NULL AUTO_INCREMENT primary key,
  `CATEGORIA` varchar(30) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `NOME` varchar(50) DEFAULT NULL,
  `SOBRENOME` varchar(50) DEFAULT NULL,
  `GENERO` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `DATANASCIMENTO` datetime DEFAULT NULL,
  `CELULAR` varchar(14) DEFAULT NULL,
  `SENHA` varchar(20) DEFAULT NULL,
  `CONFIRMESENHA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

-- ------------------------------------------------------------
-- Estrutura da Tabela EXTENSAO 
-- ------------------------------------------------------------

CREATE TABLE `extensao` (
  `CODEXTENSAO` int(11) NOT NULL AUTO_INCREMENT primary key,
  `NOMEPROJETO` varchar(500) DEFAULT NULL,
  `CATEGORIA` varchar(500) DEFAULT NULL,
  `ACAO` varchar(500) DEFAULT NULL,
  `DATAINICIO` datetime DEFAULT NULL,
  `PREVISAOTERMINO` datetime DEFAULT NULL,
  `QTDVAGAS` varchar(5) DEFAULT NULL,
  `VAGASEXTERNO` varchar(5) DEFAULT NULL,
  `ASSOCIADO` varchar(10) DEFAULT NULL,
  `ASSOCIADORESP` varchar(500) DEFAULT NULL,
  `AREATEMATICA` varchar(500) DEFAULT NULL, 
  `LINHAEXTENSAO` varchar(500) DEFAULT NULL,
  `ODS` varchar(500) DEFAULT NULL, 
  `CARGAHORARIA` varchar(500) DEFAULT NULL, 
  `ORIENTADOR` varchar(500) DEFAULT NULL, 
  `COORIENTADOR` varchar(500) DEFAULT NULL, 
  `RESUMO` varchar(500) DEFAULT NULL, 
  `INTRODUCAO` varchar(500) DEFAULT NULL, 
  `OBJETIVOGERAL` varchar(500) DEFAULT NULL, 
  `OBJETIVOESPECIFICO` varchar(500) DEFAULT NULL, 
  `JUSTIFICATIVA` varchar(500) DEFAULT NULL, 
  `IMPACTOS` varchar(500) DEFAULT NULL, 
  `PUBLICOALVO` varchar(500) DEFAULT NULL,
  `MATERIAIS` varchar(500) DEFAULT NULL,  
  `CRONOGRAMA` varchar(500) DEFAULT NULL, 
  `ACOMPANHAMENTO` varchar(500) DEFAULT NULL, 
  `RESPONSAVEIS` varchar(500) DEFAULT NULL, 
  `ESTADO` varchar(40) DEFAULT NULL,
  `CIDADE` varchar(30) DEFAULT NULL, 
  `DATA` datetime DEFAULT NULL,
  `NOMEIMAGEM` varchar(40) DEFAULT NULL,
  `DATAIMAGEM` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

-- ------------------------------------------------------------
-- Estrutura da Tabela RELCONCLUINTES 
-- ------------------------------------------------------------

CREATE TABLE `relconcluintes` (
  `CODRELATORIO` int(11) NOT NULL AUTO_INCREMENT primary key,
  `NOMEPROJETO` varchar(50) DEFAULT NULL,
  `AREA` varchar(30) DEFAULT NULL,
  `AREACONHECIMENTO` varchar(30) DEFAULT NULL,
  `CARGAHORÁRIA` varchar(10) DEFAULT NULL,
  `PRESENCIAL` varchar(10) DEFAULT NULL,
  `DISTANCIA` varchar(10) DEFAULT NULL,
  `DATAINICIO` datetime DEFAULT NULL,
  `DATATERMINO` datetime DEFAULT NULL,
  `QTDVAGAS` varchar(5) DEFAULT NULL,
  `QTDCONCLUINTES` varchar(5) DEFAULT NULL,
  `NOME_EE1` varchar(40) DEFAULT NULL, 
  `CATEGORIA_EE1` varchar(20) DEFAULT NULL, 
  `FUNCAO_EE1` varchar(20) DEFAULT NULL,
  `NOME_EE2` varchar(40) DEFAULT NULL, 
  `CATEGORIA_EE2` varchar(20) DEFAULT NULL, 
  `FUNCAO_EE2` varchar(20) DEFAULT NULL,
  `NOME_EE3` varchar(40) DEFAULT NULL, 
  `CATEGORIA_EE3` varchar(20) DEFAULT NULL, 
  `FUNCAO_EE3` varchar(20) DEFAULT NULL,
  `NOME_EE4` varchar(40) DEFAULT NULL, 
  `CATEGORIA_EE4` varchar(20) DEFAULT NULL, 
  `FUNCAO_EE4` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
