-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2025 às 12:19
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `freetecs`
--
CREATE DATABASE IF NOT EXISTS `freetecs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `freetecs`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL,
  `senha_adm` varchar(255) DEFAULT NULL,
  `email_adm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(255) DEFAULT NULL,
  `senha_aluno` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `RM` int(5) DEFAULT NULL,
  `telefone_aluno` varchar(15) DEFAULT NULL,
  `descricao` varchar(600) DEFAULT NULL,
  `habilidades` varchar(255) DEFAULT NULL,
  `email_aluno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `senha_aluno`, `curso`, `datanasc`, `RM`, `telefone_aluno`, `descricao`, `habilidades`, `email_aluno`) VALUES
(1, 'Ruby', '$2y$10$g0z7f7KFjD7aB2bd8QjZzORnv/a68VFRi0Lr/Yo1Rv7', 'Informática para Internet', '2009-11-09', 23025, '(12) 99667-3640', 'Olá! Meu nome é Maria, tenho 15 anos e curso o 1º ano do Ensino Médio integrado ao técnico em Informática para Internet na Etec MCM. Moro em Ribeirão Pires com meus pais e minha gata. Sou apaixonada por música e livros, e gosto de aprender coisas novas, especialmente na área de tecnologia e design. Busco oportunidades para desenvolver minhas habilidades, colaborar com projetos criativos e ganhar experiência prática.\r\n', 'Inglês intermediário; HTML básico; CSS básico; JavaScript básico; Word básico; Excel básico; Photoshop básico; Pontualidade; Criatividade; Trabalho em Equipe.', 'maudini10@gmail.com'),
(2, 'Pedro Henrique Rillo de Carvalho', '$2y$10$kVnGguSrp0RIQnWNx/gzc.zWvuMbDnX.ZfKOTga/.MK', 'infonet', '2008-10-21', 24616, '(11) 99250-1507', 'oi', 'Excel, midia ', 'pedrorillo08@gmail.com'),
(3, 'ANA CAROLINA BARBOSA RILLO DE CARVALHO', '$2y$10$5AJQzsGypHdWKIRq9qMKN.Azf78cKCgDKOjTwhXWzuATOX5Zjnd4q', 'Marketing ', '1998-09-07', 52386, '(11) 97363-9187', 'oi', 'Excel, midia ', 'carolinarillo21@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificado`
--

CREATE TABLE `certificado` (
  `id_certificado` int(11) NOT NULL,
  `nome_do_aluno` varchar(255) DEFAULT NULL,
  `nome_da_empresa` varchar(255) DEFAULT NULL,
  `id_projeto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(255) DEFAULT NULL,
  `telefone_empresa` varchar(15) DEFAULT NULL,
  `email_empresa` varchar(255) DEFAULT NULL,
  `senha_empresa` varchar(255) DEFAULT NULL,
  `CNPJ` varchar(18) DEFAULT NULL,
  `area_de_atuacao` varchar(255) DEFAULT NULL,
  `descricao_institucional` varchar(600) DEFAULT NULL,
  `ano_de_fundacao` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `telefone_empresa`, `email_empresa`, `senha_empresa`, `CNPJ`, `area_de_atuacao`, `descricao_institucional`, `ano_de_fundacao`) VALUES
(1, 'Motorhead', '(11) 32417-579', 'motorhead_cont@gmail.com', '$2y$10$AQC1ouKFtbrrMkfd9WrGx.fKd/pGTvcznkSkZkEUes2Uj4z/R8Moe', '85.802.112/0001-19', 'Mecânica Automotiva', 'A Motorhead é uma oficina especializada em manutenção e reparo automotivo, comprometida em oferecer serviços de qualidade, confiança e eficiência. Com uma equipe técnica qualificada e apaixonada por motores, a empresa busca unir conhecimento, tecnologia e transparência para garantir o melhor desempenho dos veículos e a satisfação total dos clientes. Localizada em Ribeirão Pires na 524 R. Cap. José Galo, nosso compromisso é manter você sempre em movimento, com segurança e excelência em cada detalhe.', 2025);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id_projeto` int(11) NOT NULL,
  `nome_projeto` varchar(255) DEFAULT NULL,
  `descricao_do_projeto` varchar(255) DEFAULT NULL,
  `requisitos_necessarios` varchar(255) DEFAULT NULL,
  `data_limite` date DEFAULT NULL,
  `qt_horas` time DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id_projeto`, `nome_projeto`, `descricao_do_projeto`, `requisitos_necessarios`, `data_limite`, `qt_horas`, `id_empresa`) VALUES
(1, 'Titulo', 'Descrição', 'HTML', '2025-12-25', '00:00:50', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `se_voluntaria`
--

CREATE TABLE `se_voluntaria` (
  `status_voluntario` varchar(255) DEFAULT NULL,
  `id_aluno` int(11) DEFAULT NULL,
  `id_projeto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Índices para tabela `certificado`
--
ALTER TABLE `certificado`
  ADD PRIMARY KEY (`id_certificado`),
  ADD KEY `id_projeto` (`id_projeto`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id_projeto`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Índices para tabela `se_voluntaria`
--
ALTER TABLE `se_voluntaria`
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_projeto` (`id_projeto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `certificado`
--
ALTER TABLE `certificado`
  MODIFY `id_certificado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id_projeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `certificado_ibfk_1` FOREIGN KEY (`id_projeto`) REFERENCES `projeto` (`id_projeto`);

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `projeto_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Limitadores para a tabela `se_voluntaria`
--
ALTER TABLE `se_voluntaria`
  ADD CONSTRAINT `se_voluntaria_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`),
  ADD CONSTRAINT `se_voluntaria_ibfk_2` FOREIGN KEY (`id_projeto`) REFERENCES `projeto` (`id_projeto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
