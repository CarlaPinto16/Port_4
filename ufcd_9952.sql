-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Mar-2024 às 14:12
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ufcd_9951`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `idbanner` int(11) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`idbanner`, `imagem`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipas`
--

CREATE TABLE `equipas` (
  `idequipa` int(11) NOT NULL,
  `equipa` varchar(50) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `equipas`
--

INSERT INTO `equipas` (`idequipa`, `equipa`, `imagem`) VALUES
(1, 'Ivo Rodrigues', 'ivo.jpg'),
(2, 'Ana Silva', 'ana.jpg'),
(3, 'Carla Sofia', 'carla.jpg'),
(4, 'Paula Almeida', 'paula.jpg'),
(5, 'Jorge Santos', 'jorge.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frases`
--

CREATE TABLE `frases` (
  `idfrase` int(11) NOT NULL,
  `frase` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `frases`
--

INSERT INTO `frases` (`idfrase`, `frase`) VALUES
(1, '\"Nas asas da curiosidade, as viagens não são apenas destinos, mas jornadas que revelam a magia escondida nos detalhes do mundo.\"'),
(2, '\"Cada estrada percorrida é um capítulo no livro da alma, e cada viagem é uma página que nos desafia a descobrir novos horizontes.\"');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `produto`, `descricao`, `imagem`) VALUES
(1, 'São Francisco', 'Aproveite essas duas cidades maravilhosas; São Francisco, uma das cidades mais turísticas dos Estados Unidos e Las Vegas, capital mundial do entretenimento.', '0010.jpg'),
(2, 'A praia da Costa Nova', 'A praia da Costa Nova do Prado, também conhecida apenas por Costa Nova, situa-se na costa ocidental de Portugal, na linha de costa da Ria de Aveiro.', '0011.jpg'),
(3, 'Antártida', 'Antártida ou Antártica é o mais meridional e o segundo menor dos continentes, com uma superfície de 14 milhões de quilômetros quadrados. ', '0012.jpg'),
(4, 'Ilhas Seychelles', 'As Seychelles são um arquipélago de 115 ilhas no Oceano Índico, perto da costa leste da África. Elas têm um grande número de praias, recifes de corais e reservas naturais, além de animais raros como a tartaruga-das-seychelles.', '0013.jpg'),
(5, 'Los Angeles', 'Los Angeles é uma grande cidade do sul da Califórnia e também o centro da indústria de cinema e televisão do país. Perto do famoso letreiro de Hollywood, é possível conhecer os bastidores das produções nos estúdios Paramount Pictures, Universal e Warner Brothers. ', '0015.jpg'),
(6, 'Produto 6', 'descrição ...', '0016.jpg'),
(7, 'ilhas Maldivas', 'As ilhas Maldivas exóticas e exclusivas esperam por você e não o dececionarão. Águas cristalinas, praias de areia branca, jardins de corais e uma incrível variedade de fauna marinha é o que você encontrará.', '0017.jpg'),
(8, 'Reserva Natural das Ilhas Selvagens', 'A Reserva Natural das Ilhas Selvagens foi a primeira de várias áreas protegidas da Região Autónoma da Madeira, albergando um valioso património ecológico. Além disso, estas ilhas de origem vulcânica constituem o território português localizado mais a sul.', '0018.jpg'),
(9, 'América do Norte e América do Sul', 'As plantas aquáticas conhecidas como taboas podem ser sobretudo encontradas em regiões frias e temperadas dos Hemisférios Norte e Sul. As espécies habitam águas doces, crescendo em margens de pântanos e lagoas, e são importantes para o equilíbrio da biodiversidade.', '0019.jpg'),
(10, 'Canadá - lago Ontário', 'O lago Ontário é um dos cinco grandes lagos da América do Norte, o menor em extensão territorial, com 18 960 km², embora o lago Erie seja o menor em volume. O lago Ontário também é o lago mais oriental dos cinco grandes lagos.', '0020.jpg'),
(11, 'Produto 11', 'descrição ...', '0021.jpg'),
(12, 'Produto 12', 'descrição ...', '0022.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto`
--

CREATE TABLE `texto` (
  `idtexto` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` varchar(2000) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`idtexto`, `titulo`, `texto`, `imagem`) VALUES
(1, 'Entre Estrelas e Horizontes: Viagens de Sonho', 'Em um universo paralelo de possibilidades, as viagens de sonho se desdobram como páginas de um conto encantado. Entre paisagens surreais e horizontes dourados, o viajante transcende fronteiras terrestres, embarcando em jornadas que desafiam a lógica e alimentam a alma.\r\nNessas viagens oníricas, oceanos de estrelas acolhem passos leves sobre nuvens etéreas, enquanto florestas feitas de luz dançam ao sabor da imaginação. Cidades utópicas surgem como miragens, onde arquiteturas futuristas se entrelaçam com reminiscências do passado.\r\nA cada despertar dentro desse mundo etéreo, o viajante se torna um explorador da própria mente, desvendando segredos escondidos nas dobras do inconsciente. Pássaros mágicos sussurram histórias antigas, e montanhas flutuantes convidam a contemplação do infinito.\r\nNas viagens de sonho, o tempo é um conceito maleável, e as estações se transformam em um balé atemporal. Ao despertar, resta apenas a lembrança de um êxtase fugaz, um tesouro guardado na memória como um fragmento de um universo paralelo e inexplorado.\r\nÀ medida que os raios do sol despertam o viajante de seu éden onírico, uma suave melancolia se instala, mas é como se cada experiência vivida nas viagens de sonho deixasse uma marca indelével na tessitura da realidade. O despertar não é um adeus, mas um convite para incorporar as lições e a magia daquelas terras oníricas ao cotidiano.\r\nAssim, com corações enriquecidos por panoramas impossíveis e encontros com o insólito, os viajantes de sonho abraçam a vida diária com uma nova perspetiva. Afinal, as verdadeiras viagens transcendem o espaço físico, ecoando eternamente na alma, convidando-nos a explorar não apenas o mundo à nossa volta, mas também os recônditos mais profundos de nossa própria existência.', '2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `idutilizador` int(11) NOT NULL,
  `utilizador` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`idutilizador`, `utilizador`) VALUES
(1, 'Ivo Rodrigues');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`idbanner`);

--
-- Índices para tabela `equipas`
--
ALTER TABLE `equipas`
  ADD PRIMARY KEY (`idequipa`);

--
-- Índices para tabela `frases`
--
ALTER TABLE `frases`
  ADD PRIMARY KEY (`idfrase`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`idtexto`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`idutilizador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `idbanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `equipas`
--
ALTER TABLE `equipas`
  MODIFY `idequipa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `frases`
--
ALTER TABLE `frases`
  MODIFY `idfrase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `texto`
--
ALTER TABLE `texto`
  MODIFY `idtexto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `idutilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
