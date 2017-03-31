-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Mar-2017 às 18:45
-- Versão do servidor: 5.7.14
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema motel
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `motel` ;

-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `motel` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci ;
USE `motel` ;

-- -----------------------------------------------------
-- Create user
-- -----------------------------------------------------
DROP USER `sismotel`@`localhost`;
CREATE USER `sismotel`@`localhost` identified by "123456";
GRANT ALL PRIVILEGES ON motel.* TO `sismotel`@`localhost`;
FLUSH PRIVILEGES;


-- -----------------------------------------------------
-- Table `motel`.`users`
-- -----------------------------------------------------
--
-- Estrutura da tabela `apartamentos`
--
-- -----------------------------------------------------
-- Table `motel`.`apartamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `motel`.`apartamentos` ;

CREATE TABLE `apartamentos` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `descricao` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `valor` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `ocupado` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `apartamentos`
--

INSERT INTO `apartamentos` (`id`, `status`, `descricao`, `valor`, `ocupado`, `created_at`, `updated_at`) VALUES(1, 1, '101', '50', 1, NULL, '2017-03-30 21:21:10');
INSERT INTO `apartamentos` (`id`, `status`, `descricao`, `valor`, `ocupado`, `created_at`, `updated_at`) VALUES(2, 0, '102', '50', 1, NULL, '2017-03-30 21:24:05');
INSERT INTO `apartamentos` (`id`, `status`, `descricao`, `valor`, `ocupado`, `created_at`, `updated_at`) VALUES(3, 0, '103', '50', 0, NULL, '2017-03-30 21:25:20');
INSERT INTO `apartamentos` (`id`, `status`, `descricao`, `valor`, `ocupado`, `created_at`, `updated_at`) VALUES(4, 0, '104', '50', 0, NULL, '2017-03-30 21:25:45');
INSERT INTO `apartamentos` (`id`, `status`, `descricao`, `valor`, `ocupado`, `created_at`, `updated_at`) VALUES(5, 0, '105', '50', 0, NULL, '2017-03-30 21:26:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospedagemxprodutos`
--

CREATE TABLE `hospedagemxprodutos` (
  `id` int(10) NOT NULL,
  `id_hospedagem` int(10) NOT NULL,
  `id_produto` int(10) NOT NULL,
  `quantidade` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `hospedagemxprodutos`
--

INSERT INTO `hospedagemxprodutos` (`id`, `id_hospedagem`, `id_produto`, `quantidade`, `created_at`, `updated_at`) VALUES(16, 11, 1, 1, '2017-03-31 16:29:01', '2017-03-31 16:29:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospedagens`
--

CREATE TABLE `hospedagens` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `apartamentos_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `hospedagens`
--

INSERT INTO `hospedagens` (`id`, `users_id`, `apartamentos_id`, `created_at`, `updated_at`) VALUES(11, 5, 1, '2017-03-30 23:52:13', '2017-03-30 23:52:13');
INSERT INTO `hospedagens` (`id`, `users_id`, `apartamentos_id`, `created_at`, `updated_at`) VALUES(13, 4, 2, '2017-03-31 16:28:53', '2017-03-31 16:28:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `valorUnit` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(1, 'Diária', 50, NULL, '2017-03-30 20:44:53');
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(2, 'Refri', 3, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(3, 'Suco', 3, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(4, 'Cerveja', 3.5, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(5, 'Chocolote', 3, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(6, 'Água', 2.5, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(7, 'Viagra', 10, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(8, 'Algema Erótica', 20, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(9, 'Fantasia Mulher Maravilha e Super Man', 50, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(10, 'Boneca Inflável', 200, NULL, NULL);
INSERT INTO `produtos` (`id`, `descricao`, `valorUnit`, `created_at`, `updated_at`) VALUES(11, 'café', 5, '2017-03-30 23:22:36', '2017-03-30 23:22:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(1, 'Maria Silva', '462010', 'silva@hotmail.com', '462010', 1, NULL, NULL, '08V9KO9DNTwrESTuwzXgmHgumLQyXTBdx3kXHrx8rnxwqqiOkiaENgb87iyF');
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(2, 'José Santos', '429841', 'santos@hotmail.com', '429841', 1, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(3, 'Antônio Oliveira', '463441', 'oliveira@hotmail.com', '463441', 1, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(4, 'João Souza', '326472', 'souza@hotmail.com', '326472', 2, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(5, 'Francisco Pereira', '340015', 'pereira@hotmail.com', '340015', 2, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(6, 'Ana Costela', '420191', 'costela@hotmail.com', '420191', 2, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(7, 'Luiz Carvalho', '448211', 'carval@hohotmail.com', '448211', 2, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(8, 'Paulo Almeida', '318871', 'almeida@hotmail.com', '318871', 2, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(9, 'Carlos Ferreira', '429972', 'ferreira@hotmail.com', '429972', 2, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(10, 'Manoel Ribeiro', '481967', 'ribeiro@hotmail.com', '481967', 2, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(11, 'admin', '999999999', 'admin@email.com', '$2y$10$559WkNlhXWvOD9UEjpOJSO7nYpJG89K09XVKQIpYckNNSmS8gwUMK', 2, '2017-03-28 22:54:42', '2017-03-28 22:54:42', 'Evtp8Eh7M04JuvFKxpokdNcy74gR1Et2TGLQcQ1oygOpF8s2JmySyCb7Kivp');
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(12, 'gildo', '999999999', 'gildo@gmail.com', '$2y$10$W1sCP16Gulmf7j1Ty7MBIufoWXQAi.hJHQVI3aAKwHzBXpKB1kXtS', 2, '2017-03-30 19:48:34', '2017-03-30 19:48:34', '1swqU1c1pg75rJNYvA4KI3IY1Xmf1aMTZnCxrH4jefFfvn5X38rJV5IXKfe2');
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(13, 'eu', '999999999', 'eu@email.com', '$2y$10$8gMLF.EMO5BqS70u98g1d.9a35.e6vbah2gwwUed9gnisbOIqN7OC', 2, '2017-03-30 19:57:46', '2017-03-30 19:57:46', 'nlfe7V1IMvN6DoGZHu4zAyu5uJKkgHjOs9KgNMwEA5wXwq5Ae37n7SjwBcWs');
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES(14, 'oi', '999999999', 'oi@email.com', '$2y$10$m5qd.JCrGKmgFNKaDGqtbuelYt840Ghktg8XMAHS2CnSGzhtQ9msG', 2, '2017-03-31 16:28:21', '2017-03-31 16:28:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `descricao_UNIQUE` (`descricao`);

--
-- Indexes for table `hospedagemxprodutos`
--
ALTER TABLE `hospedagemxprodutos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `id_hospedagem` (`id_hospedagem`);

--
-- Indexes for table `hospedagens`
--
ALTER TABLE `hospedagens`
  ADD PRIMARY KEY (`id`,`users_id`,`apartamentos_id`),
  ADD KEY `fk_users_has_apartamentos_apartamentos1_idx` (`apartamentos_id`),
  ADD KEY `fk_users_has_apartamentos_users_idx` (`users_id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartamentos`
--
ALTER TABLE `apartamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hospedagemxprodutos`
--
ALTER TABLE `hospedagemxprodutos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `hospedagens`
--
ALTER TABLE `hospedagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `hospedagens`
--
ALTER TABLE `hospedagens`
  ADD CONSTRAINT `fk_users_has_apartamentos_apartamentos1` FOREIGN KEY (`apartamentos_id`) REFERENCES `apartamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_apartamentos_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
