-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2025 às 12:12
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

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
