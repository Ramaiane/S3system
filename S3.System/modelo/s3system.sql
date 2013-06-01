-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `s3system`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
  `idCandidato` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `candidato_nome` text NOT NULL,
  `candidato_cpf` text NOT NULL,
  `candidato_email` text NOT NULL,
  `candidato_telefone` text NOT NULL,
  `candidato_instituicaoGraduacao` text NOT NULL,
  `candidato_cursoGraduacao` text NOT NULL,
  `candidato_dataAdmissaoGraduacao` text NOT NULL,
  `candidato_dataConclusaoGraduacao` text NOT NULL,
  PRIMARY KEY (`idCandidato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `idDisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `idProfessor` int(11) NOT NULL,
  `idEdital` int(11) NOT NULL,
  `disciplina_nome` text NOT NULL,
  `secretaria_descricao` text NOT NULL,
  `secretaria_vagas` text NOT NULL,
  `disciplina_codigo` text NOT NULL,
  PRIMARY KEY (`idDisciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `edital`
--

CREATE TABLE IF NOT EXISTS `edital` (
  `idEdital` int(11) NOT NULL AUTO_INCREMENT,
  `idSecretaria` int(11) NOT NULL,
  `edital_dataRegistro` text NOT NULL,
  `edital_dataInicio` text NOT NULL,
  `edital_dataFim` text NOT NULL,
  `edital_linkEdital` text NOT NULL,
  PRIMARY KEY (`idEdital`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `idProfessor` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idSecretaria` int(11) NOT NULL,
  `professor_nome` text NOT NULL,
  `professor_email` text NOT NULL,
  `professor_contatoTelefone` text NOT NULL,
  PRIMARY KEY (`idProfessor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

CREATE TABLE IF NOT EXISTS `secretaria` (
  `idSecretaria` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `secretaria_sigla` text NOT NULL,
  `secretaria_nomePrograma` text NOT NULL,
  `secretaria_responsavel` text NOT NULL,
  `secretaria_enderecoLogo` text NOT NULL,
  `secretaria_telefoneContato` text NOT NULL,
  `secretaria_emailContato` text NOT NULL,
  `secretaria_dataRegistro` text NOT NULL,
  PRIMARY KEY (`idSecretaria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_login` text NOT NULL,
  `usuario_senha` text NOT NULL,
  `usuario_tipo` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
