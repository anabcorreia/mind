-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/04/2024 às 04:46
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mind-saudavel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `autor` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `conteudo`, `autor`, `imagem`) VALUES
(2, 'pipo', 'pipipapapaa', 'pupu', '../uploads/saude-mental-dicas-importantes 1.png'),
(3, 'FIOWAHFHJAI', 'bfiohanfa', 'jioafupiaj', '../uploads/saude-mental-dicas-importantes 1.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` varchar(1000) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `conteudo`, `data`, `imagem`) VALUES
(1, 'pipo', 'pipipapapa', '1313-12-13', 'saude-mental-dicas-importantes 1.png'),
(2, 'pipa', 'pipipapapaa', '1212-12-12', 'saude-mental-dicas-importantes 1.png'),
(3, 'pipape', 'papupupup', '1111-11-11', 'saude-mental-dicas-importantes 1.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(1000) NOT NULL,
  `resposta` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`, `resposta`) VALUES
(1, 'Como posso identificar se estou enfrentando um problema de saúde mental?', 'Existem muitos sinais que podem indicar um problema de saúde mental, como mudanças no sono, apetite ou humor, dificuldade em funcionar no trabalho ou na escola, sentimentos de tristeza constante ou ansiedade extrema. Se estiver preocupado, é importante procurar ajuda profissional.'),
(2, 'O que devo fazer se suspeitar que estou enfrentando um problema de saúde mental?', 'O primeiro passo é conversar com um profissional de saúde mental, como um psicólogo ou psiquiatra. Eles podem avaliar seus sintomas e recomendar o melhor curso de ação, que pode incluir terapia, medicação ou outras formas de suporte.'),
(3, 'Como posso ajudar um amigo ou membro da família que está lutando contra um problema de saúde mental?', 'É importante oferecer apoio emocional e incentivar a pessoa a procurar ajuda profissional. Ouça atentamente e evite julgar ou minimizar seus sentimentos. Lembre-se de que é importante cuidar de si mesmo também e não se sobrecarregar.'),
(4, 'Existe uma diferença entre tristeza e depressão?', 'Sim, embora seja normal sentir tristeza ocasionalmente, a depressão é uma condição médica séria que afeta o funcionamento diário de uma pessoa. Se os sentimentos de tristeza persistirem por semanas ou meses e interferirem na vida diária, pode ser depressão e é importante buscar ajuda.'),
(5, 'Quais são algumas técnicas de autoajuda para lidar com o estresse?', 'Técnicas como respiração profunda, meditação, exercício físico regular, manter um diário de gratidão e estabelecer limites saudáveis são úteis para lidar com o estresse. Experimente diferentes métodos e veja o que funciona melhor para você.'),
(6, 'Como posso melhorar minha autoestima?', 'Praticar o autocuidado, desafiar pensamentos negativos, estabelecer metas realistas, cercar-se de pessoas que o apoiam e celebrar suas conquistas são maneiras de melhorar a autoestima. A terapia também pode ser útil para trabalhar questões de autoimagem.'),
(7, 'Quais são algumas estratégias para lidar com a ansiedade?', 'Praticar técnicas de respiração, fazer exercícios de relaxamento, como yoga ou tai chi, manter um estilo de vida saudável, limitar a cafeína e o álcool, e aprender a desafiar pensamentos ansiosos são estratégias eficazes para lidar com a ansiedade.'),
(8, 'É normal sentir-se sobrecarregado às vezes?', 'Sim, é normal sentir-se sobrecarregado de vez em quando, especialmente diante de situações estressantes. No entanto, se esses sentimentos persistirem por um longo período de tempo e interferirem em sua vida diária, pode ser útil procurar apoio profissional.'),
(9, 'Como posso encontrar um terapeuta que seja adequado para mim?', 'Você pode começar procurando recomendações de amigos, familiares ou seu médico de família. Também existem muitos diretórios online onde você pode pesquisar por terapeutas em sua área e ler sobre suas especialidades e abordagens.'),
(10, 'Existe alguma relação entre dieta e saúde mental?', 'Sim, uma dieta saudável pode ter um impacto positivo na saúde mental. Alimentos ricos em nutrientes, como frutas, vegetais, grãos integrais, proteínas magras e gorduras saudáveis, podem ajudar a regular o humor e reduzir o risco de problemas de saúde mental.'),
(11, 'Como posso ajudar alguém que está pensando em suicídio?', 'Se alguém expressar pensamentos de suicídio, leve isso a sério e ofereça apoio imediato. Não deixe a pessoa sozinha e ajude-a a entrar em contato com um profissional de saúde mental ou um serviço de prevenção ao suicídio. Se houver risco imediato, ligue para os serviços de emergência.'),
(12, 'A terapia online é eficaz?', 'Sim, a terapia online pode ser tão eficaz quanto a terapia tradicional em pessoa. Ela oferece conveniência e acessibilidade, permitindo que as pessoas recebam suporte de saúde mental de qualquer lugar com uma conexão à internet.'),
(13, 'Quais são os sinais de um ataque de pânico?', ' Os sinais de um ataque de pânico incluem batimentos cardíacos rápidos, falta de ar, tremores, sudorese, sensação de sufocamento, tontura, náusea e uma sensação de terror iminente. Se você ou alguém que você conhece está experimentando esses sintomas, procure ajuda imediatamente.'),
(14, 'Existe alguma conexão entre o sono e a saúde mental?', 'Sim, o sono desempenha um papel importante na saúde mental. A falta de sono pode contribuir para problemas como ansiedade e depressão, enquanto uma boa qualidade de sono pode melhorar o humor e a capacidade de lidar com o estresse.'),
(15, 'Como posso cuidar da minha saúde mental todos os dias?', 'Algumas maneiras de cuidar da sua saúde mental diariamente incluem praticar a autocompaixão, manter relacionamentos saudáveis, fazer pausas regulares durante o dia, buscar atividades que o façam feliz, e aprender a administrar o estresse de forma eficaz.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `tipo`, `imagem`) VALUES
(1, 'celular', '1 tera', 1200, 'smartphone', ''),
(2, 'veniceos', '1 tera', 1200, 'smartphone', '../uploads/saude-mental-dicas-importantes 1.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nome_u` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `nome_u`, `email`, `senha`, `tipo`) VALUES
(4, 'usuario', 'user', 'user@gmail.com', '1234', 2),
(5, 'Administrador', 'adm', 'adm@gmail.com', '1234', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
