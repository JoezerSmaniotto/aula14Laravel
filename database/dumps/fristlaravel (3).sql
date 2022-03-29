-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 29-Mar-2022 às 13:37
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
-- Banco de dados: `fristlaravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome`, `endereco`, `cnpj`, `telefone`, `created_at`, `updated_at`) VALUES
(1, 'dolor', 'Aut ut error reprehenderit. - Norte', '89.622.245/0001-64', '(88) 94013-5279', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(2, 'quod', 'Et esse incidunt. - Sul', '25.497.293/0001-95', '(65) 92299-6059', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(3, 'tenetur', 'Ab rerum. - Norte', '24.654.184/0001-71', '(67) 98006-8739', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(4, 'officia', 'Odio sint sint. - Sudeste', '00.255.896/0001-50', '(44) 93782-5998', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(5, 'qui', 'Quia et hic qui. - Centro-Oeste', '75.169.137/0001-73', '(96) 95315-3198', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(6, 'teste23', 'Quia aperiam soluta accusamus. - Centro-Oeste', '04.327.869/0001-02', '(21) 98670-7051', '2022-03-29 12:59:10', '2022-03-29 13:08:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_06_221816_create_usuarios_table', 1),
(6, '2022_03_06_224400_create_pets_table', 1),
(7, '2022_03_10_091414_create_solicitacoes_table', 1),
(8, '2022_03_16_090151_create_fornecedores_table', 1),
(9, '2022_03_16_175549_create_produtos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `nomePet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `raca` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `inforAdic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` int(11) NOT NULL,
  `adotado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id`, `usuario_id`, `nomePet`, `sexo`, `raca`, `inforAdic`, `idade`, `adotado`, `created_at`, `updated_at`) VALUES
(1, 1, 'repudiandae', 'Nam.', 'illum', 'impedit', 22, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(2, 1, 'voluptatem', 'Qui.', 'qui', 'odio', 74, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(3, 1, 'nobis', 'Iste.', 'consequatur', 'dolores', 4, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(4, 1, 'aut', 'Est.', 'sunt', 'sed', 5, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(5, 1, 'laborum', 'Sit.', 'voluptas', 'ut', 49, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(6, 3, 'Bidu2', 'F', 'PitBull', 'Docil e Vacinado', 1, 0, '2022-03-28 04:00:56', '2022-03-29 13:41:56'),
(7, 1, 'sit', 'Ad.', 'nostrum', 'iste', 27, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(8, 1, 'asperiores', 'Quo.', 'omnis', 'libero', 75, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(9, 1, 'ea', 'Et.', 'error', 'voluptas', 12, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(10, 1, 'iste', 'Id.', 'perferendis', 'fugit', 92, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(11, 2, 'veritatis', 'Ut.', 'inventore', 'unde', 59, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(12, 2, 'nemo', 'Et.', 'dicta', 'architecto', 34, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(13, 2, 'consectetur', 'Ut.', 'non', 'amet', 19, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(14, 2, 'reiciendis', 'Sed.', 'et', 'ducimus', 6, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(15, 2, 'quae', 'Sed.', 'cumque', 'ut', 82, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(16, 2, 'cum', 'Et.', 'ipsa', 'sunt', 54, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(17, 2, 'in', 'Quod.', 'temporibus', 'qui', 16, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(18, 2, 'tempora', 'Et.', 'eaque', 'qui', 41, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(19, 2, 'id', 'Aut.', 'enim', 'dolor', 58, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(20, 2, 'et', 'Fuga.', 'cupiditate', 'aut', 33, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(21, 3, 'fuga', 'Ut.', 'esse', 'fugiat', 94, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(22, 3, 'similique', 'Est.', 'repellat', 'alias', 63, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(23, 3, 'dolore', 'Nam.', 'veniam', 'reiciendis', 58, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(24, 3, 'nostrum', 'Qui.', 'enim', 'beatae', 16, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(25, 3, 'laborum', 'Non.', 'nam', 'sunt', 92, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(26, 3, 'magni', 'Quas.', 'facere', 'et', 75, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(27, 3, 'nulla', 'In.', 'ut', 'iste', 44, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(28, 3, 'sint', 'Aut.', 'esse', 'omnis', 1, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(29, 3, 'eos', 'Ut.', 'dignissimos', 'quia', 21, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(30, 3, 'quis', 'Est.', 'recusandae', 'aspernatur', 93, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(31, 4, 'asperiores', 'Aut.', 'aut', 'aliquid', 75, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(32, 4, 'earum', 'Et.', 'ut', 'exercitationem', 79, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(33, 4, 'dicta', 'Qui.', 'assumenda', 'est', 15, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(34, 4, 'labore', 'Modi.', 'illo', 'non', 21, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(35, 4, 'voluptatum', 'Eum.', 'dolores', 'officiis', 97, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(36, 4, 'earum', 'Ea.', 'qui', 'quasi', 89, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(37, 4, 'qui', 'Enim.', 'non', 'in', 54, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(38, 4, 'explicabo', 'Id.', 'impedit', 'iure', 96, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(39, 4, 'repellendus', 'Quo.', 'occaecati', 'omnis', 51, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(40, 4, 'qui', 'Vero.', 'quae', 'deserunt', 17, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(41, 5, 'temporibus', 'Et.', 'quos', 'iste', 4, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(42, 5, 'excepturi', 'Odio.', 'laboriosam', 'labore', 95, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(43, 5, 'accusantium', 'Sint.', 'suscipit', 'ex', 7, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(44, 5, 'porro', 'Et.', 'sunt', 'hic', 55, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(45, 5, 'fugit', 'Quia.', 'aspernatur', 'modi', 55, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(46, 5, 'possimus', 'Qui.', 'rerum', 'aut', 44, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(47, 5, 'debitis', 'Quam.', 'quae', 'aliquam', 8, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(48, 5, 'praesentium', 'Sed.', 'neque', 'corporis', 70, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(49, 5, 'vitae', 'Et.', 'neque', 'libero', 65, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(50, 5, 'cum', 'Sit.', 'dolor', 'dolor', 40, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fornecedor_id` bigint(20) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_estoque` int(11) NOT NULL,
  `preco` double(8,2) NOT NULL,
  `importado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `fornecedor_id`, `nome`, `descricao`, `qtd_estoque`, `preco`, `importado`, `created_at`, `updated_at`) VALUES
(1, 1, 'impedit', 'Perspiciatis et et numquam laboriosam sequi. Quos consequatur rerum velit. Dolorem provident quae dignissimos consectetur reprehenderit deserunt quia. Reprehenderit aut labore expedita cumque. Ex harum molestiae rerum vitae dolores sint. Sunt in consequatur incidunt quia dolores quo rem ad.', 56113, 12108.82, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(2, 1, 'iure', 'Nihil totam ea ratione tempore molestiae quia vel. Laudantium eum illum esse. Tempora voluptatem maxime beatae id soluta. Reiciendis et ut vel quis. Magni aut numquam numquam consequuntur nihil qui voluptatem sed.', 58527, 12613.52, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(3, 1, 'laboriosam', 'Dolorem autem accusantium non et ex error laboriosam. Veritatis omnis sit ratione ex veniam. Sapiente est doloremque laudantium facere sit. Dolorum ut ipsam ut laborum et sint et.', 77432, 13475.88, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(4, 1, 'accusantium', 'Eos sunt minus veritatis consequuntur. Voluptatem consequatur repellat qui doloribus dolorem ut. Sit voluptatem itaque vel voluptatem quo doloribus.', 42672, 11521.42, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(5, 1, 'et', 'Quos eos nesciunt non veritatis. Tempora fugit eos quasi exercitationem dolorum. Eligendi illo nesciunt nesciunt necessitatibus aspernatur rerum dolore. Dolores molestiae amet non cupiditate ut. Quod natus qui facilis consequatur sunt quia.', 96578, 2662.06, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(6, 1, 'reiciendis', 'Numquam pariatur in accusamus fugit qui sint numquam. Quo quis ad cum velit unde nemo. Laudantium ab nihil enim id ut. Sequi recusandae debitis quis quis eveniet aut necessitatibus. Delectus modi eaque quis dolore ab nihil.', 30614, 1842.11, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(7, 1, 'quia', 'Ipsam perferendis reiciendis itaque in adipisci totam. Inventore quis temporibus expedita. Quos quas error dicta expedita fugiat necessitatibus. Sed odit ut perferendis quia fugiat. Id hic provident nihil rerum cum aut repellendus commodi.', 45865, 14974.43, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(8, 1, 'repudiandae', 'Vel corrupti cupiditate animi possimus. Ipsam libero corporis ut quas. Accusamus perspiciatis nulla quia dicta nisi. Quia nobis repudiandae et corrupti expedita consequatur veniam. Recusandae labore in vitae omnis amet ab.', 26920, 526.38, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(9, 1, 'in', 'Delectus adipisci ut cupiditate sunt est iste. Nemo tempora odio a doloremque. Recusandae vitae saepe eos itaque repellendus quos. Libero odit odit quam minima quia repudiandae et. Iste quis sit non consequatur.', 88124, 5098.43, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(10, 1, 'nihil', 'Molestiae autem quis sint iure. Accusamus aut qui quibusdam molestiae autem rem dolor. Quam voluptatem maiores quas. Ut asperiores harum qui vel officiis est. Sunt consequatur sint et non veritatis laborum. Vel voluptatem nostrum commodi numquam voluptatem aut dolorem.', 19835, 10811.76, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(11, 2, 'rem', 'Aut ut amet ut et voluptatum repellat voluptatem. Temporibus dolore nisi voluptatibus velit nulla iure. Quas consequuntur et adipisci quo minus ducimus impedit.', 15116, 5963.45, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(12, 2, 'dolorem', 'Est praesentium rerum adipisci ipsa neque corporis. Velit aliquam magnam incidunt enim eum. Molestiae sint quod eos ut repudiandae.', 60985, 10453.90, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(13, 2, 'sunt', 'Aut voluptate ullam dolorem voluptas architecto. Exercitationem accusamus consectetur quisquam et aut quia libero. Sunt libero magni nulla neque accusantium facilis assumenda voluptas. Et adipisci odit quasi rerum aut error.', 87483, 7716.28, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(14, 2, 'voluptate', 'Aut alias magni eos dignissimos. Et itaque laboriosam a quam voluptatum. Nam officiis eos quam in accusamus.', 70337, 11351.79, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(15, 2, 'exercitationem', 'Aut aut ducimus dolorum ea. Ipsam excepturi et dolores unde. Maxime sit officia quos accusamus sit et vero.', 26497, 13555.80, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(16, 2, 'quaerat', 'Magni velit quibusdam sunt id nobis sapiente. Eum labore ipsa dolorem voluptatem corporis quaerat doloremque est. Eum est ipsam quo numquam totam. Ut voluptatum suscipit rerum officia porro repudiandae. Ullam placeat officia natus eveniet.', 52429, 5305.85, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(17, 2, 'laboriosam', 'Natus doloremque dolorum tempore quas cumque voluptate asperiores. Qui optio repudiandae similique quisquam repellat quaerat minima. Aut sint optio sunt qui eum rerum aut sed. Eveniet ut rerum aut commodi autem. Vitae aliquam est consequuntur ducimus sunt harum aut rerum.', 98794, 3463.10, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(18, 2, 'sed', 'Autem et quia quibusdam ratione dolore illo consectetur. Voluptatem fuga voluptas rerum et laborum non. Rerum quibusdam sint quo aliquam distinctio ut. Natus vel fugiat aut veritatis et omnis et. Optio cupiditate facere accusamus quia et. Quia excepturi soluta libero est quis voluptate.', 691, 12941.75, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(19, 2, 'non', 'Eum assumenda doloremque voluptate repellat qui velit. Dolores quam ratione non consequatur corrupti quia. Officia ea voluptatem necessitatibus beatae. Tempore non nesciunt enim omnis.', 49613, 12699.96, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(20, 2, 'consequatur', 'Quae numquam rerum ad cum sunt. Repellat sed optio et praesentium ea dolore laboriosam. Est qui beatae porro aut odit temporibus. Qui quisquam repellendus et itaque quas ea voluptatem aliquam. Ea id id aliquid quae quos veniam iure rerum.', 95841, 2086.34, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(21, 3, 'id', 'Accusamus ex est necessitatibus. Cumque dolorum ut deserunt non sint tenetur. Ipsum atque quo sint saepe expedita quo. Veniam enim est dolores enim ut.', 25845, 6601.28, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(22, 3, 'architecto', 'Quos exercitationem est ut non. Consequuntur officiis maxime ullam molestias ut autem consectetur. Error eos est incidunt modi rerum soluta quasi. Repudiandae tenetur et ut fuga dicta. Illo molestiae ut omnis. Excepturi aut consequatur vitae quidem adipisci voluptates et.', 89789, 6540.51, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(23, 3, 'est', 'Officiis eos beatae laudantium nemo esse est. Quasi expedita eum officia et illo iusto iure. Quo a maxime dolor quos quibusdam. Error qui consectetur aperiam voluptatem. Ratione quod consequatur animi autem quo cupiditate vero. Illum omnis aliquid nihil minima cupiditate laudantium.', 75646, 3262.08, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(24, 3, 'voluptatem', 'Est quo eveniet voluptas distinctio eum dolor numquam. Sapiente blanditiis doloribus excepturi optio quae. Quasi aliquid recusandae nobis voluptas voluptatem voluptates voluptas. Voluptatum cum illum aut libero.', 69843, 8935.40, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(25, 3, 'itaque', 'A veritatis ut aut et iusto eos doloremque. Est aut aut voluptas molestias sed fugit maxime aliquam. At non magnam aliquam dolore ipsam velit id. Fugit provident alias asperiores eos ut laudantium saepe.', 53105, 13577.29, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(26, 3, 'assumenda', 'Porro expedita ex facere consequatur omnis et quo deserunt. Omnis qui explicabo voluptates et. Sint eos quod qui ea dolor mollitia reiciendis et. Dolorum sint voluptas error et sed voluptas voluptatem eum. Consequatur quia aperiam animi occaecati possimus. Consequatur illo libero voluptatem laboriosam.', 183, 8175.51, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(27, 3, 'quas', 'Nesciunt sequi architecto ratione harum voluptatibus rem beatae. Quis sint repellendus tempora error magnam illum et. Ipsum ad quasi deleniti sint. Et eaque aperiam qui. Modi sunt sit voluptate porro cum qui autem. Dolor suscipit magni nam quis.', 99945, 765.94, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(28, 3, 'officiis', 'Illo quisquam et excepturi repellat esse rerum. Illo inventore doloribus commodi consequatur incidunt ex adipisci soluta. Sint quae quibusdam nulla vel. In excepturi necessitatibus necessitatibus et nam voluptatem.', 49405, 5742.32, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(29, 3, 'iste', 'Earum consequatur dolores recusandae nesciunt. Quia veniam molestias id vel natus laborum. Eum similique soluta pariatur. Perferendis sit ducimus et animi.', 62360, 1204.58, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(30, 3, 'sequi', 'Et ex sunt qui quasi sapiente et. Repudiandae velit qui doloremque magni commodi harum. Placeat officia deleniti esse sed. Ullam voluptates voluptatem porro sint eos.', 69337, 3501.63, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(31, 4, 'ut', 'Nulla fugit ut aut aut. Eius reprehenderit reprehenderit officiis quis totam vitae sit. Dicta vero qui dolor nihil alias et. Dolor dolores tempore voluptate natus.', 90631, 3446.83, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(32, 4, 'perspiciatis', 'Deleniti possimus autem sunt quis. Itaque architecto perspiciatis praesentium hic vel rerum quasi. Nemo nulla eligendi eveniet atque. Fugiat fugiat sunt id est quia et aut distinctio. Nihil velit maiores ab dicta aut labore corrupti quam.', 95207, 6701.14, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(33, 4, 'dicta', 'At culpa laborum dignissimos sit. Odio distinctio illum ad dolore eveniet vel. Amet numquam facilis impedit eos provident rerum ea. Aut tenetur ab commodi dolorem error ratione architecto. Architecto nisi nam aut quae. Minima provident similique sunt quas aut voluptates eum.', 87553, 1511.34, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(34, 4, 'in', 'In saepe excepturi beatae fuga ducimus nihil. Quo qui modi doloribus eius dolores aut. Ea voluptas aspernatur et sapiente similique exercitationem quam.', 63081, 4908.68, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(35, 4, 'quia', 'Accusantium praesentium quidem itaque veritatis mollitia nam temporibus. Animi nemo consequatur et omnis nihil. Expedita id voluptas laudantium aspernatur voluptates. Rerum soluta optio ut sunt.', 74289, 9239.28, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(36, 4, 'suscipit', 'Eos facilis suscipit alias maxime et aut quasi. Soluta in iste eveniet voluptas asperiores eos. Nemo maxime illo ullam et incidunt architecto deleniti. Enim blanditiis sunt dolore aut cum consequuntur. Accusamus earum explicabo fuga qui.', 41102, 1486.12, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(37, 4, 'eum', 'Voluptate veniam sed dicta reprehenderit eum sint. Amet nulla voluptas saepe iure voluptatibus ex. Molestiae ipsa fugiat quia quod cumque. Recusandae cupiditate nihil mollitia et beatae incidunt aspernatur. Accusantium accusamus asperiores nobis.', 20751, 13205.84, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(38, 4, 'magni', 'Inventore natus et iste aspernatur velit iste mollitia. Consequatur odit sequi possimus ducimus a laudantium assumenda. Ab ab est qui sint velit. Nobis natus accusantium debitis quo aut aut eius. Et asperiores nesciunt vel voluptatibus sequi. Sit asperiores et explicabo dolores.', 28430, 4847.31, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(39, 4, 'quas', 'Nihil nesciunt repudiandae veniam error optio ut accusamus. Cum ipsum aut adipisci est voluptate est consequuntur. Beatae blanditiis itaque repudiandae quia veritatis enim facilis. Voluptatem possimus enim qui sequi.', 29727, 8801.72, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(40, 4, 'assumenda', 'Rerum consequuntur eius dolores mollitia facere facilis consequuntur. Qui non suscipit id reiciendis eos voluptatum cupiditate ducimus. Error hic esse libero saepe.', 89429, 13249.04, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(41, 5, 'qui', 'In est dolor ratione quia architecto omnis. Ipsa enim mollitia illum et. Quae ipsum quia vitae aliquid voluptatibus beatae quia. Culpa perferendis est tempora aut.', 36613, 3753.32, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(42, 5, 'tempora', 'Voluptas beatae ut sit vel reiciendis veritatis ut. Dolores rem ab sed quae molestiae quibusdam. Recusandae rerum fuga repellendus quia. Itaque mollitia nobis deleniti ipsum et libero aut. Eaque deleniti sunt minima error repudiandae et corrupti. Eveniet saepe atque occaecati voluptates et ducimus natus ratione.', 10819, 8071.95, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(43, 5, 'nobis', 'Sit perferendis aut qui ut dolorum veniam. Accusantium eum minus corporis quibusdam adipisci alias sunt. Quia consectetur dolor accusantium architecto. Facilis perferendis sunt ipsum pariatur voluptate nihil. Magni dolorem nihil fugiat dolorem repudiandae et molestiae. Voluptas sed doloremque necessitatibus accusantium ducimus fugiat perferendis.', 80127, 13039.69, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(44, 5, 'mollitia', 'Qui nihil totam est odio sint deserunt quibusdam. Quasi fuga consectetur autem tempore quos autem ut. Voluptas quis laborum dolores laborum. Cum sit fugit qui optio qui voluptatem.', 7980, 1984.45, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(45, 5, 'commodi', 'Rerum accusantium debitis ea reprehenderit consequatur rerum. Distinctio dolores nemo magni facere nisi eligendi occaecati. Laboriosam adipisci ut voluptates reprehenderit sit. Et aut similique consequatur molestiae labore. Quaerat et quia error et. Aut officiis ipsum et.', 97221, 12586.82, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(46, 5, 'voluptas', 'Assumenda soluta qui possimus. Velit et ut nulla explicabo aliquam cupiditate. Eum molestiae et et vel. Tempora reiciendis dolor nesciunt placeat iusto.', 95522, 8679.86, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(47, 5, 'labore', 'Alias cumque placeat recusandae aut similique laboriosam et. Praesentium distinctio dolorem cupiditate architecto ut molestiae vero necessitatibus. Ullam consequatur neque commodi dolore. Quia a consequuntur ipsam sint eos tenetur. Omnis ut veniam est repellat soluta commodi omnis.', 86714, 512.48, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(48, 5, 'reprehenderit', 'Assumenda distinctio dolor voluptas placeat. Qui iste eos sed nesciunt eos. Est debitis quis ad illum porro in. Repellendus nobis explicabo aut sit fugit veritatis vel numquam. Nemo hic et non veritatis ut sit.', 55807, 13020.42, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(49, 5, 'fuga', 'Ducimus quia ullam voluptas dolorum. Dolorem asperiores quos qui exercitationem eius. Ea voluptas sequi numquam est. Sint nesciunt molestias ut omnis. Ipsam laudantium nesciunt rerum accusantium eveniet natus quo.', 66903, 645.88, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(50, 5, 'labore', 'Quis neque veniam explicabo quas iste. Autem a velit cumque. Quaerat soluta hic sit maxime.', 12870, 3968.48, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomeUserSolicitante` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pet` int(11) NOT NULL,
  `aceita` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `solicitacoes`
--

INSERT INTO `solicitacoes` (`id`, `nomeUserSolicitante`, `pet`, `aceita`, `created_at`, `updated_at`) VALUES
(1, 'consequuntur', 471, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(2, 'temporibus', 437, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(3, 'ut', 522, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(4, 'debitis', 857, 0, '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(5, 'voluptate', 267, 1, '2022-03-28 04:00:56', '2022-03-28 04:00:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `cpf`, `endereco`, `celular`, `created_at`, `updated_at`) VALUES
(1, 'labore', 'pamela19@quintana.com.br', '138.916.719-46', 'Quia quibusdam fugiat. - Norte', '(42) 95097-8380', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(2, 'aut', 'renato.lira@r7.com', '147.548.913-76', 'Nulla et nihil non. - Centro-Oeste', '(27) 96024-1570', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(3, 'voluptatem', 'tomas63@hotmail.com', '737.583.340-04', 'Ullam saepe suscipit sit. - Nordeste', '(82) 97501-1295', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(4, 'sed', 'gabriela48@sandoval.br', '310.814.775-71', 'Provident laboriosam et et. - Sudeste', '(51) 95209-9811', '2022-03-28 04:00:56', '2022-03-28 04:00:56'),
(5, 'error', 'jean.urias@r7.com', '026.398.860-02', 'Sunt enim voluptatum sit nobis. - Sul', '(46) 90395-1162', '2022-03-28 04:00:56', '2022-03-28 04:00:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pets_usuario_id_foreign` (`usuario_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_fornecedor_id_foreign` (`fornecedor_id`);

--
-- Índices para tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_fornecedor_id_foreign` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
