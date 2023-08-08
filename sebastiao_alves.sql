-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Maio-2023 às 23:50
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_alves`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `data` varchar(100) NOT NULL,
  `id_utilizador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `data`, `id_utilizador`) VALUES
(1, '18:13:11 - 07/05/2023', 2),
(2, '18:14:08 - 07/05/2023', 2),
(3, '18:15:11 - 07/05/2023', 2),
(4, '18:15:24 - 07/05/2023', 2),
(5, '18:15:36 - 07/05/2023', 2),
(6, '18:47:09 - 08/05/2023', 2),
(7, '15:29:23 - 14/05/2023', 2),
(8, '15:31:16 - 14/05/2023', 2),
(9, '15:31:51 - 14/05/2023', 2),
(10, '15:32:04 - 14/05/2023', 2),
(11, '15:37:03 - 14/05/2023', 2),
(12, '15:37:31 - 14/05/2023', 2),
(13, '15:38:28 - 14/05/2023', 2),
(14, '15:38:33 - 14/05/2023', 2),
(15, '15:38:41 - 14/05/2023', 2),
(16, '15:39:40 - 14/05/2023', 2),
(17, '15:40:00 - 14/05/2023', 2),
(18, '15:40:03 - 14/05/2023', 2),
(19, '15:40:09 - 14/05/2023', 2),
(20, '15:41:05 - 14/05/2023', 2),
(21, '15:41:44 - 14/05/2023', 2),
(22, '15:43:12 - 14/05/2023', 2),
(23, '19:05:18 - 14/05/2023', 2),
(24, '19:07:02 - 14/05/2023', 2),
(25, '23:43:49 - 14/05/2023', 2),
(26, '00:06:54 - 15/05/2023', 2),
(27, '00:08:41 - 15/05/2023', 2),
(28, '19:16:59 - 15/05/2023', 2),
(29, '22:26:12 - 15/05/2023', 2),
(30, '18:31:03 - 16/05/2023', 2),
(31, '22:49:50 - 16/05/2023', 3),
(32, '22:49:59 - 16/05/2023', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `texto` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `img`, `texto`) VALUES
(1, 'http://localhost/sebastiao_alves/imgs/conteudo.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor repudiandae mollitia earum, culpa est quidem voluptas porro quae deserunt asperiores reprehenderit. Repellendus similique dolorem alias blanditiis eum impedit quis numquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis nemo exercitationem tempore ipsa odit quam sit quibusdam cum tempora deleniti, magni neque laboriosam ab saepe corrupti nisi aperiam non voluptas?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque id, perspiciatis eveniet alias debitis harum dolore, dolor nostrum rerum nemo placeat eum sunt perferendis suscipit. Ipsam recusandae eius dolore nostrum.<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor repudiandae mollitia earum, culpa est quidem voluptas porro quae deserunt asperiores reprehenderit. Repellendus similique dolorem alias blanditiis eum impedit quis numquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis nemo exercitationem tempore ipsa odit quam sit quibusdam cum tempora deleniti, magni neque laboriosam ab saepe corrupti nisi aperiam non voluptas?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque id, perspiciatis eveniet alias debitis harum dolore, dolor nostrum rerum nemo placeat eum sunt perferendis suscipit. Ipsam recusandae eius dolore nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor repudiandae mollitia earum, culpa est quidem voluptas porro quae deserunt asperiores reprehenderit. Repellendus similique dolorem alias blanditiis eum impedit quis numquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis nemo exercitationem tempore ipsa odit quam sit quibusdam cum tempora deleniti, magni neque laboriosam ab saepe corrupti nisi aperiam non voluptas?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque id, perspiciatis eveniet alias debitis harum dolore, dolor nostrum rerum nemo placeat eum sunt perferendis suscipit. Ipsam recusandae eius dolore nostrum.</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor repudiandae mollitia earum, culpa est quidem voluptas porro quae deserunt asperiores reprehenderit. Repellendus similique dolorem alias blanditiis eum impedit quis numquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis nemo exercitationem tempore ipsa odit quam sit quibusdam cum tempora deleniti, magni neque laboriosam ab saepe corrupti nisi aperiam non voluptas?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque id, perspiciatis eveniet alias debitis harum dolore, dolor nostrum rerum nemo placeat eum sunt perferendis suscipit. Ipsam recusandae eius dolore nostrum.<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor repudiandae mollitia earum, culpa est quidem voluptas porro quae deserunt asperiores reprehenderit. Repellendus similique dolorem alias blanditiis eum impedit quis numquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis nemo exercitationem tempore ipsa odit quam sit quibusdam cum tempora deleniti, magni neque laboriosam ab saepe corrupti nisi aperiam non voluptas?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque id, perspiciatis eveniet alias debitis harum dolore, dolor nostrum rerum nemo placeat eum sunt perferendis suscipit. Ipsam recusandae eius dolore Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, consequuntur quibusdam dicta consequatur deserunt dolorem quia laboriosam odit totam nisi blanditiis quam molestiae adipisci praesentium mollitia, fuga perspiciatis officiis velit!<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor repudiandae mollitia earum, culpa est quidem voluptas porro quae deserunt asperiores reprehenderit. Repellendus similique dolorem alias blanditiis eum impedit quis numquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis nemo exercitationem tempore ipsa odit quam sit quibusdam cum tempora deleniti, magni neque laboriosam ab saepe corrupti nisi aperiam non voluptas?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque id, perspiciatis eveniet alias debitis harum dolore, dolor nostrum rerum nemo placeat eum sunt perferendis suscipit. Ipsam recusandae eius dolore Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, consequuntur quibusdam dicta consequatur deserunt dolorem quia laboriosam odit totam nisi blanditiis quam molestiae adipisci praesentium mollitia, fuga perspiciatis officiis velit!<br><br><br>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `subtitulo` varchar(500) NOT NULL,
  `data_atualizacao` varchar(250) NOT NULL,
  `img` varchar(100) NOT NULL,
  `link_botao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `titulo`, `subtitulo`, `data_atualizacao`, `img`, `link_botao`) VALUES
(1, 'Senhora do Amor e da Guerra ', '              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci cupiditate voluptatum ea, dignissimos magnam accusamus quia eum doloremque enim rem nihil a provident quae tempore labore facilis dolores dolor eveniet', '18:22:38 - 14/05/2023', 'http://localhost/sebastiao_alves/imgs/desktop/cabecalho1.jpg', 'teste'),
(2, 'O caracol estrábico', '              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci cupiditate voluptatum ea, dignissimos magnam accusamus quia eum doloremque enim rem nihil a provident quae tempore labore facilis dolores dolor eveniet', '18:22:55 - 14/05/2023', 'http://localhost/sebastiao_alves/imgs/desktop/cabecalho2.jpg', ''),
(3, 'O coleécionador de amnésia', '              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci cupiditate voluptatum ea, dignissimos magnam accusamus quia eum doloremque enim rem nihil a provident quae tempore labore facilis dolores dolor eveniet', '18:23:08 - 14/05/2023', 'http://localhost/sebastiao_alves/imgs/desktop/cabecalho3.jpg', ''),
(4, 'O velho que pensava que fugia', '              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci cupiditate voluptatum ea, dignissimos magnam accusamus quia eum doloremque enim rem nihil a provident quae tempore labore facilis dolores dolor eveniet', '18:23:29 - 14/05/2023', 'http://localhost/sebastiao_alves/imgs/desktop/cabecalho4.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel_mobile`
--

CREATE TABLE `carousel_mobile` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `id_carousel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel_mobile`
--

INSERT INTO `carousel_mobile` (`id`, `img`, `id_carousel`) VALUES
(1, 'http://localhost/sebastiao_alves/imgs/mobile/cabecalho1.jpg', 1),
(2, 'http://localhost/sebastiao_alves/imgs/mobile/cabecalho2.jpg', 2),
(3, 'http://localhost/sebastiao_alves/imgs/mobile/cabecalho3.jpg', 3),
(4, 'http://localhost/sebastiao_alves/imgs/mobile/cabecalho4.jpg', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `horario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `email`, `horario`) VALUES
(1, '+351 123 456 789', ' Lorem ipsum, dolor sit amet, 1234-543 Lorem.', 'lorem@lorem.pt', ' De Segunda a Sexta das 00:00h às 00:00h');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `obs` varchar(1000) NOT NULL,
  `texto` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `img`, `titulo`, `obs`, `texto`) VALUES
(1, 'http://localhost/sebastiao_alves/imgs/livro-conteudo.jpg', 'Senhora do Amor e da Guerra', 'Novidade', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla optio iure nobis. Illo nihil, hic suscipit adipisci voluptas esse voluptatum molestiae perspiciatis ducimus, quidem perferendis. Dolorum veritatis recusandae velit voluptas.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Ut provident porro ratione excepturi quas assumenda cumque quo illum suscipit repellat molestiae, tempora nisi debitis nesciunt, perspiciatis ab cupiditate vitae dicta.\r\n\r\nEdição: Junho de 2020\r\nDimensões: 150 x'),
(2, 'http://localhost/sebastiao_alves/imgs/livro-conteudo4.jpg', 'O velho que pensava que fugia', 'Mais Vendido', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla optio iure nobis. Illo nihil, hic suscipit adipisci voluptas esse voluptatum molestiae perspiciatis ducimus, quidem perferendis. Dolorum veritatis recusandae velit voluptas.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Ut provident porro ratione excepturi quas assumenda cumque quo illum suscipit repellat molestiae, tempora nisi debitis nesciunt, perspiciatis ab cupiditate vitae dicta.\r\n\r\nEdição: Junho de 2020\r\nDimensões: 150 x'),
(3, 'http://localhost/sebastiao_alves/imgs/livro-conteudo2.jpg', 'Coleccionador de Amnésias', 'Em promoção', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla optio iure nobis. Illo nihil, hic suscipit adipisci voluptas esse voluptatum molestiae perspiciatis ducimus, quidem perferendis. Dolorum veritatis recusandae velit voluptas.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Ut provident porro ratione excepturi quas assumenda cumque quo illum suscipit repellat molestiae, tempora nisi debitis nesciunt, perspiciatis ab cupiditate vitae dicta.\r\n\r\nEdição: Junho de 2020\r\nDimensões: 150 x');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `texto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `img`, `texto`) VALUES
(1, 'http://localhost/sebastiao_alves/imgs/FOTO-editada.jpg', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, ullam suscipit sequi vel repellendus sit itaque distinctio? Dolores quo sed voluptatum incidunt, unde perspiciatis porro voluptate ad temporibus, non dolorum?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit hic ipsum maxime, maiores necessitatibus sed aliquam sunt nam veritatis animi? Error, molestias magnam. Eaque numquam veniam nulla! Non, nisi laboriosam.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, ullam suscipit sequi vel repellendus sit itaque distinctio? Dolores quo sed voluptatum incidunt, unde perspiciatis porro voluptate ad temporibus, non dolorum?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit hic ipsum maxime, maiores necessitatibus sed aliquam sunt nam veritatis animi? Error, molestias magnam. Eaque numquam veniam nulla! Non, nisi laboriosam.<br>&nbsp;</p><p><br>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `titulo` varchar(2000) NOT NULL,
  `texto` varchar(2000) NOT NULL,
  `data_publicacao` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `img`, `titulo`, `texto`, `data_publicacao`) VALUES
(1, 'http://localhost/sebastiao_alves/imgs/conteudo-imprensa1.jpg', 'LANÇAMENTO | SENHORA DO AMOR E DA GUERRA', '<p>Terá lugar no dia 6 de dezembro,pelas 18H10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro \" O velho que pensava que fugia\", de Sebastião ALves.<br>Neste sessão o autor irá ler algumas passagens do livro.<br>\"Às quatros da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?\"<br>De que foge?Que procura?Quem o persegue?<br>Onde irá ele arranjar dinheiro para hoteís,taxis comboios, autocarros?<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, quod.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eligendi iste provident. Tempore, nobis quo?<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. A architecto dolor dicta odit neque quas necessitatibus natus odio. A iste ipsam tenetur vero, dolore eaque!</p><p>Noticia de Técnico Lisboa<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, magni?.com</p>', 'publicado a 17 junho 2020'),
(2, 'http://localhost/sebastiao_alves/imgs/conteudo-imprensa2.jpg', 'LANÇAMENTO DO LIVRO \"O VELHO QUE PENSAVA QUE FUGIA\"', '<p><br>Terá lugar no dia 6 de dezembro,pelas 18H10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro \" O velho que pensava que fugia\", de Sebastião ALves.<br>Neste sessão o autor irá ler algumas passagens do livro.<br>\"Às quatros da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?\"<br>De que foge?Que procura?Quem o persegue?<br>Onde irá ele arranjar dinheiro para hoteís,taxis comboios, autocarros?<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, quod.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eligendi iste provident. Tempore, nobis quo?<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. A architecto dolor dicta odit neque quas necessitatibus natus odio. A iste ipsam tenetur vero, dolore eaque!</p><p>Noticia de Técnico Lisboa<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, magni?.com<strong>4</strong><br>&nbsp;</p>', 'PUBLICADO A 6 JUNHO 2017 ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `subtitulo` varchar(1000) NOT NULL,
  `data_atualizacao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `img`, `titulo`, `subtitulo`, `data_atualizacao`) VALUES
(1, 'http://localhost/sebastiao_alves/imgs/livro-conteudo.jpg', 'Senhora do amor e da Guerra', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla optio iure nobis. Illo nihil, hic suscipit adipisci voluptas esse voluptatum molestiae perspiciatis ducimus, quidem perferendis. Dolorum veritatis recusandae velit voluptas.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut provident porro ratione excepturi quas assumenda cumque quo illum suscipit repellat molestiae, tempora nisi debitis nesciunt, perspiciatis ab cupiditate vitae dicta.</p><p>Edição: Junho de 2020<br>Dimen', '23:56:36 - 15/05/2023'),
(2, 'http://localhost/sebastiao_alves/imgs/livro-conteudo4.jpg', 'O velho que pensava que fugia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla optio iure nobis. Illo nihil, hic suscipit adipisci voluptas esse voluptatum molestiae perspiciatis ducimus, quidem perferendis. Dolorum veritatis recusandae velit voluptas.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus.\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Ut provident porro ratione excepturi quas assumenda cumque quo illum suscipit repellat molestiae, tempora nisi debitis nesciunt, perspiciatis ab cupiditate vitae dicta.\n\nEdição: Junho de 2020\nDimensões: 150 x', '19:37:12 - 15/05/2023'),
(4, 'http://localhost/sebastiao_alves/imgs/livro-conteudo3.jpg', 'O Caracol estrábico', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla optio iure nobis. Illo nihil, hic suscipit adipisci voluptas esse voluptatum molestiae perspiciatis ducimus, quidem perferendis. Dolorum veritatis recusandae velit voluptas.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut provident porro ratione excepturi quas assumenda cumque quo illum suscipit repellat molestiae, tempora nisi debitis nesciunt, perspiciatis ab cupiditate vitae dicta.&nbsp;</p><p>Edição: Junho de 2020&nbsp;</p', '22:33:03 - 15/05/2023'),
(6, 'http://localhost/sebastiao_alves/imgs/livro-conteudo2.jpg', 'O coleécionador de amnésias', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla optio iure nobis. Illo nihil, hic suscipit adipisci voluptas esse voluptatum molestiae perspiciatis ducimus, quidem perferendis. Dolorum veritatis recusandae velit voluptas.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, voluptatem molestiae debitis molestias inventore non corrupti, possimus commodi saepe in sequi mollitia sint tempora itaque nesciunt. Exercitationem, perferendis doloribus.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Ut provident porro ratione excepturi quas assumenda cumque quo illum suscipit repellat molestiae, tempora nisi debitis nesciunt, perspiciatis ab cupiditate vitae dicta.\r\n\r\nEdição: Junho de 2020\r\nDimen', '00:10:10 - 16/05/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes`
--

CREATE TABLE `redes` (
  `id` int(11) NOT NULL,
  `insta` varchar(200) NOT NULL,
  `face` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redes`
--

INSERT INTO `redes` (`id`, `insta`, `face`, `linkedin`) VALUES
(1, 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/feed/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `id_acessos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id`, `login`, `pass`, `id_acessos`) VALUES
(2, 'sebastiao', '$2y$10$1ms3r6ZRTJXw/6IQaK/TJu38CGtWFGJqVohVxGAcXz/QmHA8gSoHS', 0),
(3, 'joaor', '$2y$10$Y1wPw8QIjsK/nmdk.IT01OKJ3yrABFJUF.33V9AlyQL9viO1F.7y.', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel_mobile`
--
ALTER TABLE `carousel_mobile`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `carousel_mobile`
--
ALTER TABLE `carousel_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
