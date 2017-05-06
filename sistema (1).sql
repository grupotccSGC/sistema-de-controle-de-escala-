-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Out-2016 às 04:51
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `central_notificacao`
--

CREATE TABLE `central_notificacao` (
  `id` int(11) NOT NULL,
  `status_final` varchar(45) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `Funcionario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cnpj` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `endereco` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `cnpj`, `telefone`, `cep`, `estado`, `cidade`, `bairro`, `endereco`) VALUES
(12, 'empresa lucas pereiras', '44.444.444/4444-44', '66666-6666', '26530-010', 'RJ', 'Nilópolis', 'Centro', 'Antônio Cardoso Leal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escala_trabalho`
--

CREATE TABLE `escala_trabalho` (
  `id` int(11) NOT NULL,
  `data` varchar(50) NOT NULL,
  `horario` varchar(20) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'em processo',
  `obs` varchar(45) NOT NULL,
  `Funcionario_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `operacoes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escala_trabalho`
--

INSERT INTO `escala_trabalho` (`id`, `data`, `horario`, `status`, `obs`, `Funcionario_id`, `empresa_id`, `operacoes_id`) VALUES
(7, '31/10/2016', '08:10', 'Aprovado', ' sdsdsdsdd', 1, 12, 8),
(8, '24/10/2016', '08:15', 'Aprovado', 'fdfdf', 1, 12, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `identidade` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `identidade`, `cpf`, `cargo`, `telefone`, `sexo`, `email`, `cep`, `estado`, `cidade`, `bairro`, `endereco`, `senha`, `status`) VALUES
(1, 'rafael faria   ', 'a3 xxxxx     ', '222.222.222-22', 'Gerente', '44444-4444', 'Masculino', 'rafa92ivp@hotmail.com', '26530-010      ', 'RJ      ', 'Nilópolis      ', 'Centro      ', 'Antônio Cardoso Leal      ', 'bHVjYXNmYQ==', 'ativo'),
(5, ' lucas faria ivo pereira', '  rrrrrrrrrrrrrrrrrrrr', '666.666.666-66', 'Auxiliar administrativo', '44444-4445', 'Masculino', 'rafalucas@hotmail.com', ' 26530-010', ' RJ', ' Nilópolis', ' Centro', ' Antônio Cardoso Leal', 'bWFyaWFuYQ==', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacoes`
--

CREATE TABLE `operacoes` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `status` varchar(45) NOT NULL,
  `Funcionario_id` int(11) NOT NULL,
  `apagar` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `operacoes`
--

INSERT INTO `operacoes` (`id`, `descricao`, `status`, `Funcionario_id`, `apagar`) VALUES
(8, 'retirarar        ', 'ativo         ', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `central_notificacao`
--
ALTER TABLE `central_notificacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_central_notificacao_empresa1_idx` (`empresa_id`),
  ADD KEY `fk_central_notificacao_Funcionario1_idx` (`Funcionario_id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escala_trabalho`
--
ALTER TABLE `escala_trabalho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_escala_trabalho_Funcionario_idx` (`Funcionario_id`),
  ADD KEY `fk_escala_trabalho_empresa1_idx` (`empresa_id`),
  ADD KEY `fk_escala_trabalho_operacoes1_idx` (`operacoes_id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `telefone_UNIQUE` (`telefone`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- Indexes for table `operacoes`
--
ALTER TABLE `operacoes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descricao` (`descricao`),
  ADD KEY `fk_operacoes_Funcionario1_idx` (`Funcionario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `central_notificacao`
--
ALTER TABLE `central_notificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `escala_trabalho`
--
ALTER TABLE `escala_trabalho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `operacoes`
--
ALTER TABLE `operacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `central_notificacao`
--
ALTER TABLE `central_notificacao`
  ADD CONSTRAINT `fk_central_notificacao_Funcionario1` FOREIGN KEY (`Funcionario_id`) REFERENCES `funcionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_central_notificacao_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `escala_trabalho`
--
ALTER TABLE `escala_trabalho`
  ADD CONSTRAINT `fk_escala_trabalho_Funcionario` FOREIGN KEY (`Funcionario_id`) REFERENCES `funcionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_escala_trabalho_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_escala_trabalho_operacoes1` FOREIGN KEY (`operacoes_id`) REFERENCES `operacoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `operacoes`
--
ALTER TABLE `operacoes`
  ADD CONSTRAINT `fk_operacoes_Funcionario1` FOREIGN KEY (`Funcionario_id`) REFERENCES `funcionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
