-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Dez-2021 às 14:48
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `miniprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(11) NOT NULL,
  `classe` varchar(50) DEFAULT NULL,
  `chaveEstrageiraClasse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `classe`
--

INSERT INTO `classe` (`id_classe`, `classe`, `chaveEstrageiraClasse`) VALUES
(49, '10ª', 50),
(59, '11ª', 59),
(60, '11ª', 60),
(61, '12ª', 61),
(62, '11ª', 62),
(63, '11ª', 63);

-- --------------------------------------------------------

--
-- Estrutura da tabela `correioeletronico`
--

CREATE TABLE `correioeletronico` (
  `id_correio` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `chaveEstrageiraCorreio` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `correioeletronico`
--

INSERT INTO `correioeletronico` (`id_correio`, `email`, `chaveEstrageiraCorreio`, `telefone`) VALUES
(49, 'ferraz@gmail.com', 50, 923039857),
(59, 'helveciocsm@gmail.com', 59, 2147483647),
(60, 'bumba@gmail.com', 60, 2147483647),
(61, 'Deneditog@gmail.com', 61, 2147483647),
(62, 'colombo@gmail.com', 62, 933098766),
(63, 'valentin@gmail.com', 63, 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_classe` int(11) NOT NULL,
  `cusro` varchar(50) DEFAULT NULL,
  `chaveEstrageiraCurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_classe`, `cusro`, `chaveEstrageiraCurso`) VALUES
(24, 'INFORMÁTICA', 50),
(34, 'ELECTECIDADE', 59),
(35, 'INFORMÁTICA', 60),
(36, 'ELECTECIDADE', 61),
(37, 'GESTÃO DE ADNIMISTRAÇÃO', 62),
(38, 'INFORMÁTICA', 63);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `bi` varchar(20) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `sexo` varchar(11) DEFAULT NULL,
  `nacionalidade` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `bi`, `dataNascimento`, `sexo`, `nacionalidade`) VALUES
(50, 'FERRAZ CACULO', '123123ME041', '2021-12-01', 'maculino', 'angola  '),
(59, 'HELVÉCIO C.S MANUEL', '004576LN034', '2021-12-14', 'maculino', 'frances '),
(60, 'ALBERTO M.M BUMBA', '00659980ME065', '2022-03-16', 'maculino', 'portuges '),
(61, 'BENEDITO S.P CAETANO', '0045356ME087', '2021-08-16', 'maculino', 'Brazileiro'),
(62, 'MATEUS R.D COLOMBO', '0076509LN0054', '1996-01-17', 'maculino', 'Russo'),
(63, 'VALENTIM I.M TOMÁS', '0003449KN043', '1998-03-01', 'maculino', 'espanhol');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`),
  ADD KEY `chaveEstrageiraClasse` (`chaveEstrageiraClasse`);

--
-- Índices para tabela `correioeletronico`
--
ALTER TABLE `correioeletronico`
  ADD PRIMARY KEY (`id_correio`),
  ADD KEY `chaveEstrageiraCorreio` (`chaveEstrageiraCorreio`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_classe`),
  ADD KEY `chaveEstrageiraCurso` (`chaveEstrageiraCurso`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `correioeletronico`
--
ALTER TABLE `correioeletronico`
  MODIFY `id_correio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`chaveEstrageiraClasse`) REFERENCES `pessoa` (`id`);

--
-- Limitadores para a tabela `correioeletronico`
--
ALTER TABLE `correioeletronico`
  ADD CONSTRAINT `correioeletronico_ibfk_1` FOREIGN KEY (`chaveEstrageiraCorreio`) REFERENCES `pessoa` (`id`);

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`chaveEstrageiraCurso`) REFERENCES `pessoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
