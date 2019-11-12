-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2019 às 14:54
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalhophp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `preferencias`
--

CREATE TABLE `preferencias` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `preferencias`
--

INSERT INTO `preferencias` (`id`, `descricao`) VALUES
(1, 'livro'),
(2, 'jogos'),
(3, 'moveis'),
(4, 'eletrodomesticos'),
(5, 'brinquedos'),
(6, 'informatica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pref_user`
--

CREATE TABLE `pref_user` (
  `id_pref_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cpf` varchar(17) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nome_completo` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `senha` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idade` int(11) NOT NULL,
  `endereco` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `preferencias` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sexo` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cpf`, `nome_completo`, `email`, `senha`, `idade`, `endereco`, `preferencias`, `sexo`) VALUES
(1, '03845009195', 'carlos henrique', 'carloscerbhga@gmail.com', 'carlos', 22, 'rua blablabla', 'todos', 'Homem'),
(2, '4321654613', 'tututs', 'sadasda@asdasd.com', 'asdasdasda', 19, 'sadasd asda sdas', 'todos', 'Mulher'),
(3, '5164132131', 'luiz', 'asdasda@sadsa.com', 'dadasdasd', 25, 'dsadasd asdas', 'todos', 'Homem'),
(4, '541316513', 'Klever', 'asdasd@asda.com', 'ascasdasd', 63, 'sadasda dsada dasd', 'todos', 'Homem'),
(5, '54231651365', 'tetar', 'asdasd@sadas.com', 'dsadasda', 29, 'dsadas dasdasd', 'todos', 'Mulher'),
(6, '03845009195', 'CARLOS HENRIQUE GUARATO ALVES', 'carloscerbhga@gmail.com', 'MTMyNDU2', 31, 'Rua São Francisco 225, casa', 'todos', 'Homem');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `preferencias`
--
ALTER TABLE `preferencias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pref_user`
--
ALTER TABLE `pref_user`
  ADD PRIMARY KEY (`id_pref_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `preferencias`
--
ALTER TABLE `preferencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pref_user`
--
ALTER TABLE `pref_user`
  MODIFY `id_pref_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pref_user`
--
ALTER TABLE `pref_user`
  ADD CONSTRAINT `pref_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `pref_user_ibfk_2` FOREIGN KEY (`id_pref_user`) REFERENCES `preferencias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
