-- phpMyAdmin
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/01/2021 às 01:36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mooven`
--
-- --------------------------------------------------------
--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `senha` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`) VALUES
(1, 'Marco Cianci', 'marco@mooven.com.br', 'marco_cianci', 'marco@123'),
(2, 'Bruno Sander', 'bruno@mooven.com.br', 'bruno_sander', 'sander@123'),
(3, 'Jonathan Girasol', 'jonathan@mooven.com.br', 'jonathan_girasol', 'girasol@123'),
(4, 'Rafael Monteiro', 'rafael@mooven.com.br', 'rafael_monteiro', 'rafael@123'),
(5, 'Paulo Coelho', 'paulo@mooven.com.br', 'paulo_coelho', 'coelho@123'),
(6, 'Ana Carolina', 'ana@mooven.com.br', 'ana_carolina', 'ana@123'),
(7, 'Jessica Ferreira', 'jessica@mooven.com.br', 'jessica_ferreira', 'jessica@123'),
(8, 'Julia Pereira', 'julia@mooven.com.br', 'julia_pereira', 'julia@123'),
(9, 'Fernando Soares', 'fernando@mooven.com.br', 'fernando_soares', 'fernando@123'),
(10, 'Douglas Costa', 'douglas@mooven.com.br', 'douglas_costa', 'douglas@123'),
(11, 'Jeniffer Melo', 'jeniffer@mooven.com.br', 'jeniffer_melo', 'melo@123'),
(12, 'Victor Hugo', 'victor@mooven.com.br', 'victor_hugo', 'victor@123'),
(13, 'Alex Maia', 'alex@mooven.com.br', 'alex_maia', 'alex@123'),
(14, 'Fabiana Andrade', 'fabiana@mooven.com.br', 'fabiana_andrade', 'fabi@123'),
(15, 'Raquel Silva', 'raquel@mooven.com.br', 'raquel_silva', 'silçva@123'),
(16, 'Renata Monte', 'renata@mooven.com.br', 'renata_monte', 'monte@123'),
(17, 'Ricardo Ferraz', 'ricardo@mooven.com.br', 'ricardo_ferraz', 'ferraz@123'),
(18, 'Pedro Bonfim', 'pedro@mooven.com.br', 'pedro_bonfim', 'bonfim@123'),
(19, 'Lucas Forner', 'lucas@mooven.com.br', 'lucas_forner', 'forner@123'),
(20, 'Monica Teixeira', 'monica@mooven.com.br', 'monica_teixeira', 'monica@123'),
(21, 'Flavia Matos', 'flavia@mooven.com.br', 'flavia_matos', 'matos@123'),
(22, 'Alessandra Penteado', 'alessandra@mooven.com.br', 'alessandra_penteado', 'alessandra@123'),
(23, 'Carolina Fontana', 'carolina@mooven.com.br', 'carolina_fontana', 'fontana@123'),
(24, 'Marcelo Macedo', 'marcelo@mooven.com.br', 'marcelo_macedo', 'macedo@123'),
(25, 'Maria Flores', 'maria@mooven.com.br', 'maria_flores', 'flores@123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;