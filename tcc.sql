-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2020 às 04:12
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastropaciente`
--

CREATE TABLE `cadastropaciente` (
  `cd_paciente` int(11) NOT NULL,
  `nm_paciente` varchar(55) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `ds_sexo` varchar(11) NOT NULL,
  `ds_estadocivil` varchar(55) NOT NULL,
  `ds_profissao` varchar(55) NOT NULL,
  `nr_fone` varchar(11) NOT NULL,
  `ds_endereco` varchar(55) NOT NULL,
  `ds_peso` varchar(10) NOT NULL,
  `ds_altura` varchar(3) NOT NULL,
  `ds_cirurgias` varchar(55) NOT NULL,
  `ds_acidentes` varchar(55) NOT NULL,
  `ds_problemassaude` varchar(55) NOT NULL,
  `ds_medicamentos` varchar(55) NOT NULL,
  `ds_queixas` varchar(55) NOT NULL,
  `ds_exames` varchar(55) NOT NULL,
  `profissional_codigo` int(11) NOT NULL,
  `horario_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastropaciente`
--

INSERT INTO `cadastropaciente` (`cd_paciente`, `nm_paciente`, `dt_nascimento`, `ds_sexo`, `ds_estadocivil`, `ds_profissao`, `nr_fone`, `ds_endereco`, `ds_peso`, `ds_altura`, `ds_cirurgias`, `ds_acidentes`, `ds_problemassaude`, `ds_medicamentos`, `ds_queixas`, `ds_exames`, `profissional_codigo`, `horario_codigo`) VALUES
(23, 'testesupremo2', '2020-08-31', '$sexo', 'df', 'er', '3423', '  132432 ', '$peso', '344', '$cirurgias', '$acidentes', 'ffdsf', 'dfdsdfdsf', 'fdfds~kff', '11111111111', 1, 1),
(25, 'laysa é linda', '2020-08-26', '$sexo', 'df', 'er', '3423', '  132432 ', '$peso', '344', '$cirurgias', '$acidentes', 'ffdsf', 'dfdsdf', 'fdfds', 'AAAAAAAA', 1, 1),
(31, 'Laysa123', '2020-08-28', 'fem', 'morta', 'prog', '3423', 'minha casa', '', '', '', '', '', '', '', '', 2, 1),
(32, 'Laysa', '2020-08-28', 'masc', 'morta', 'prog', '3423', '343423', '3423', '$al', '$cirurgias', '$acidentes', 'ffdsf', 'dfdsdfdsf', 'fdfds~kff', 'dfsd', 0, 1),
(34, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(35, 'Laysa', '2020-08-29', 'masc', 'morta', 'prog', '948392', 'não sei', '1.23', '344', 'não', 'sim', 'sim', 'sim', 'não', 'sim', 0, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroprofissional`
--

CREATE TABLE `cadastroprofissional` (
  `cd_profissional` int(11) NOT NULL,
  `nm_profissional` varchar(50) NOT NULL,
  `nr_telefone` varchar(10) NOT NULL,
  `ds_email` varchar(50) NOT NULL,
  `nr_cpf` varchar(9) NOT NULL,
  `nr_rg` varchar(13) NOT NULL,
  `nr_residencial` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastroprofissional`
--

INSERT INTO `cadastroprofissional` (`cd_profissional`, `nm_profissional`, `nr_telefone`, `ds_email`, `nr_cpf`, `nr_rg`, `nr_residencial`) VALUES
(1, '$_POST[profissional]', '$_POST[tel', '$_POST[email]', '0', 'oi54354', 'oi4543'),
(2, '$_POST[profissional]', '$_POST[tel', '$_POST[email]', '0', '$_POST[rg]', '$_POST[res'),
(5, '$profissioanl', '$telefone', '$email', '$cpf', '$rg', '$residenci'),
(6, 'Laysa', 'Laysa', 'Laysa', 'Laysa', 'Laysa', 'Laysa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horariosdisponiveis`
--

CREATE TABLE `horariosdisponiveis` (
  `cd_horario` int(11) NOT NULL,
  `nr_horario` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horariosdisponiveis`
--

INSERT INTO `horariosdisponiveis` (`cd_horario`, `nr_horario`) VALUES
(1, '18:00'),
(2, '22:45'),
(9, '13:45'),
(10, '00:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_nome` varchar(55) NOT NULL,
  `ds_senha` varchar(55) NOT NULL,
  `ds_email` varchar(255) NOT NULL,
  `nm_serie` varchar(233) NOT NULL,
  `dt_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nm_nome`, `ds_senha`, `ds_email`, `nm_serie`, `dt_data`) VALUES
(50, '$login', '$senha', '$email', '$serie', '0000-00-00'),
(51, 'Laysa', '202cb962ac59075b964b07152d234b70', 'laysanha@gmail.com', '', '0000-00-00'),
(52, 'Laysateste', '202cb962ac59075b964b07152d234b70', 'laysanha@gmail.com', '', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastropaciente`
--
ALTER TABLE `cadastropaciente`
  ADD PRIMARY KEY (`cd_paciente`),
  ADD KEY `profissional_codigo_fk` (`profissional_codigo`),
  ADD KEY `horario_codigo_fk` (`horario_codigo`);

--
-- Índices para tabela `cadastroprofissional`
--
ALTER TABLE `cadastroprofissional`
  ADD PRIMARY KEY (`cd_profissional`);

--
-- Índices para tabela `horariosdisponiveis`
--
ALTER TABLE `horariosdisponiveis`
  ADD PRIMARY KEY (`cd_horario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastropaciente`
--
ALTER TABLE `cadastropaciente`
  MODIFY `cd_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `cadastroprofissional`
--
ALTER TABLE `cadastroprofissional`
  MODIFY `cd_profissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `horariosdisponiveis`
--
ALTER TABLE `horariosdisponiveis`
  MODIFY `cd_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
