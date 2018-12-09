-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2018 às 16:40
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ead`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `usuario`, `senha`) VALUES
(1, 'weltonvcardoso@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `date_cadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `email`, `senha`, `date_cadastro`) VALUES
(1, 'Welton', 'weltonvcardoso@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_curso`
--

CREATE TABLE `aluno_curso` (
  `id` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `date_cadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno_curso`
--

INSERT INTO `aluno_curso` (`id`, `id_aluno`, `id_curso`, `date_cadastro`) VALUES
(4, 1, 1, '2018-11-01'),
(5, 1, 2, '2018-11-09'),
(6, 1, 5, '2018-11-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

CREATE TABLE `aulas` (
  `id` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `ordem` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`id`, `id_modulo`, `id_curso`, `ordem`, `tipo`) VALUES
(1, 21, 5, 1, 'video'),
(2, 21, 5, 2, 'video'),
(3, 22, 5, 1, 'video'),
(4, 22, 5, 2, 'poll'),
(5, 35, 5, 1, 'video'),
(6, 36, 1, 1, 'video');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `regiao` varchar(100) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `url` varchar(50) DEFAULT NULL,
  `date_cliente` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `regiao`, `estado`, `url`, `date_cliente`) VALUES
(1, 'Secretaria De SaÃºde Do Estado De Amazonas SES/AM', 'N', 'AM', 'e103cffceec804fe133ee9b370a704f3.png', '2018-11-08 22:32:45'),
(2, 'FundaÃ§Ã£o De VigilÃ¢ncia SanitÃ¡ria Do Estado De Amazonas - FUSAM', 'N', 'AM', '2d555df2347a1eab24f080088d187b81.jpg', '2018-11-08 22:37:55'),
(3, 'Hospital Da GuarniÃ§Ã£o De Santiago - Santiago', 'S', 'RS', 'd7f9d464f3129fe12744f9a653da064e.png', '2018-11-08 22:42:09'),
(4, 'Hospital Militar De Ãrea De Porto Alegre', 'S', 'RS', '31f9458adb29f9f4c1096e576a2c4ee7.jpg', '2018-11-08 22:44:42'),
(5, 'PETRÃ“LEO BRASILEIRO S/A - SÃ£o Mateus Do Sul', 'S', 'PR', 'd726e096756b158d02d55d52acbda772.png', '2018-11-08 22:49:29'),
(6, 'Casa De SaÃºde Santa Marcelina OS.S. - Tiradentes', 'SE', 'SP', '8c32759e5f5010eece42a4375641c7c4.png', '2018-11-08 22:51:20'),
(7, 'LaboratÃ³rio Central De SaÃºde PÃºblica De Mato Grosso Do Sul - LACEN', 'CO', 'MS', 'ed129ebf9f508a26a07e58d300b3e8a9.jpg', '2018-11-08 22:56:16'),
(8, 'FundaÃ§Ã£o Oswaldo Cruz - FIOCRUZ -  Manguinhos  RJ', 'SE', 'RJ', 'cdcc32133b0f3defedc778f511d8be74.jpg', '2018-11-08 22:58:49'),
(9, 'Hospital Da AeronÃ¡utica Dos Afonsos - Comando Da AeronÃ¡utica -  RJ', 'SE', 'RJ', '866f5d39a8cd26cacbce000194a14bd9.jpg', '2018-11-08 23:02:24'),
(10, 'Hospital Central Da AeronÃ¡utica Rio De Janeiro', 'SE', 'RJ', '8099392744ef86e32f452f6883af19ed.png', '2018-11-08 23:04:57'),
(11, 'Hospital UniversitÃ¡rio Pedro Ernesto - UERJ Rio De Janeiro', 'SE', 'RJ', 'e521486f84e4a6092761986ad78989c0.jpg', '2018-11-08 23:07:30'),
(12, 'INMETRO â€“ Instituto De Metrologia XerÃ©m', 'SE', 'RJ', '29d4bf8f86ebe04cde1788d191d27131.jpg', '2018-11-08 23:08:39'),
(13, 'Prefeitura Municipal De Angra Dos Reis -Secretaria De Meio Ambiente E Desenvolvimento Urbano - Angra Do Reis', 'SE', 'RJ', '9faae1a06772a266dbbb638659d6b1ac.jpg', '2018-11-08 23:11:03'),
(14, 'Prefeitura Municipal De Rio Bonito', 'SE', 'RJ', '2ee959266afcc5e0bf7010c08c8d3142.jpg', '2018-11-08 23:13:30'),
(15, 'Prefeitura De SÃ£o JoÃ£o De Meriti  ', 'SE', 'RJ', 'f0b52ea6cd582f5a793038abac61e7ba.jpg', '2018-11-08 23:15:11'),
(16, 'Secretaria De Estado De SaÃºde E Defesa Civil', 'SE', 'RJ', '88a61c2f0570ca474731c38680065fb7.jpg', '2018-11-08 23:16:10'),
(17, 'Hospital Santa Rita De CÃ¡ssia - AFECC VitÃ³ria/ES', 'CO', 'ES', '824d1b8e407c0e99dc4b61db52cae911.jpg', '2018-11-08 23:17:43'),
(18, 'Instituto Estadual De Meio Ambiente E Recursos HÃ­dricos - IEMA - Cariacica/ES', 'CO', 'ES', '63d4a034747bada7c5a6d6ef6ff30a31.jpg', '2018-11-08 23:18:40'),
(19, 'LaboratÃ³rio Central De SaÃºde PÃºblica Do EspÃ­rito Santo - LACEN/ES - SESA VitÃ³ria/ES', 'CO', 'ES', '5d45dbfe0d837f7ebbc897ac459f9401.jpg', '2018-11-08 23:19:38'),
(20, 'Hipolabor FarmacÃªutica - SabarÃ¡', 'SE', 'MG', '0cba322028e20e8af08841c749483708.png', '2018-11-08 23:21:03'),
(21, 'Hospital UniversitÃ¡rio Clemente De Faria - Montes Claros', 'SE', 'MG', '7fd0a4a63a13d1185440fdd419bdcd4f.png', '2018-11-08 23:22:11'),
(22, 'FederaÃ§Ã£o Das IndÃºstrias Do Estado De GoiÃ¡s -   GoiÃ¢nia', 'CO', 'GO', '5f45b2ac176af28188b64a86d6c5487e.jpg', '2018-11-08 23:24:37'),
(23, 'Hospital Das ClÃ­nicas Da Universidade Federal De GoiÃ¡s - GoiÃ¢nia', 'CO', 'GO', 'c2f4399acf0acffe433c55e6652e6125.jpg', '2018-11-08 23:25:36'),
(24, 'Hospital EvangÃ©lico Goiano  AnÃ¡polis', 'CO', 'GO', '689e5463deaae4e658f1430208ad584a.png', '2018-11-08 23:26:34'),
(25, 'Instituto De CiÃªncias FarmacÃªuticas', 'CO', 'GO', '0b403875f7f91cff3dfb8b9f9f69714e.png', '2018-11-08 23:27:54'),
(26, 'Prefeitura Municipal De Cristalina', 'CO', 'GO', '3a2696d337474e3a56beccf2e470b5df.png', '2018-11-08 23:29:00'),
(27, 'Sociedade MÃ©dica LuziÃ¢nia', 'CO', 'GO', '190bd0cd7d3f98ccd1e07f24f8833dc9.png', '2018-11-08 23:30:16'),
(28, 'UNICALDAS-GO - Universidade De Caldas Novas - CatalÃ£o', 'CO', 'GO', '252a0b57f3b84a6ef40ee77d570c0152.png', '2018-11-08 23:32:11'),
(29, ' Universidade CatÃ³lica De GoiÃ¡s  GoiÃ¢nia', 'CO', 'GO', 'd8ff10c1bae76ea44f72140a15d44143.png', '2018-11-08 23:33:01'),
(30, 'URI SoluÃ§Ãµes Ambientais Cidade Ocidental', 'CO', 'GO', '8e5b7cf7ae6abfefa5973fe1458c21f2.png', '2018-11-08 23:34:03'),
(31, 'DinÃ¢mica Service', 'CO', 'DF', '6b28c73b53c544e46d34be0f685631c6.jpg', '2018-11-09 11:13:40'),
(32, 'Empresa Juiz De Fora', 'CO', 'DF', '548018794c7af8bd1603b788b4fc2a54.png', '2018-11-09 11:14:45'),
(33, 'Exame LaboratÃ³rios', 'CO', 'DF', '5139f1f66471b8b8618bfe947a3ee461.png', '2018-11-09 11:15:40'),
(34, 'QG Do ExÃ©rcito Brasileiro', 'CO', 'DF', 'f360c7d2725d240eb090362e3209e8a1.jpg', '2018-11-09 11:16:40'),
(35, 'HGeB â€“ Hospital Geral De BrasÃ­lia', 'CO', 'DF', '6de4dfae2f3a5f789e3a587ecfca52a0.png', '2018-11-09 11:18:18'),
(36, 'Hospital Da ForÃ§a AÃ©rea De BrasÃ­lia ', 'CO', 'DF', '5f4e19b35c4cd40f0c6ec753896d1f47.png', '2018-11-09 11:19:15'),
(37, 'Hospital Regional Do Gama/DF', 'CO', 'DF', 'e4cf7d52b674ea152db791445b397528.png', '2018-11-09 11:23:27'),
(38, 'Hospital Santa LÃºcia ', 'CO', 'DF', '355bc55e1fb422180ec94f61d1c0a415.jpg', '2018-11-09 11:24:06'),
(39, 'Hospital Santa Marta', 'CO', 'DF', '62f52a3b71c2b30195206c2fdeff527b.png', '2018-11-09 11:25:04'),
(40, 'Hospital SÃ£o Francisco - CeilÃ¢ndia/DF', 'CO', 'DF', 'b0d7c4f2e0a0b1a5203aa32217604bc3.jpg', '2018-11-09 11:26:37'),
(41, 'Hospital SÃ£o Lucas Ltda', 'CO', 'DF', '990f9bbd061ac61a1cbe0bab9aa75dc2.png', '2018-11-09 11:27:33'),
(42, 'Hospital Sarah  Kubistschek ', 'CO', 'DF', 'b221838747f2f86a91987b1fb98cf057.jpg', '2018-11-09 11:29:03'),
(43, 'Hospital SÃ­rio LibanÃªs', 'CO', 'DF', '04fff391798a059f9b24a11fe7181f8a.png', '2018-11-09 11:29:56'),
(44, 'Hospital VeterinÃ¡rio Da UPIS   Planaltina/DF', 'CO', 'DF', '13fcd7bf866426d7916836eca69c9f69.png', '2018-11-09 11:32:14'),
(45, 'HUB â€“ Hospital UniversitÃ¡rio De BrasÃ­lia', 'CO', 'DF', 'fc8376f12818a37f8a596688d472fdfe.png', '2018-11-09 11:33:02'),
(46, 'INCOR â€“ Instituto Do CoraÃ§Ã£o  Taguatinga/DF', 'CO', 'DF', 'f3982819cf4195b2a4e009d001e383dd.jpg', '2018-11-09 11:34:02'),
(47, 'INFRAERO', 'CO', 'DF', 'bd0660629a52dd0af2b05573c0c2ca8a.png', '2018-11-09 11:35:52'),
(48, 'INFRAERO  Aeroporto/DF', 'CO', 'DF', '9cd20ef5224807d6b7fd689c97c7541e.jpg', '2018-11-09 11:36:28'),
(49, 'Lacen/DF â€“ LaboratÃ³rio Central Do Distrito Federal', 'CO', 'DF', '082bd3b2fe6e7486194ef7b4b3315fb4.jpg', '2018-11-09 11:37:16'),
(50, 'MinistÃ©rio Da SaÃºde', 'CO', 'DF', '0ab7e17e33692f7a7db2941d9b5a09ca.png', '2018-11-09 11:37:50'),
(51, 'MinistÃ©rio Do Meio Ambiente', 'CO', 'DF', 'ab06caaff9108419fa5e285f53bd4295.png', '2018-11-09 11:38:31'),
(52, 'MinistÃ©rio Das Cidades', 'CO', 'DF', '800c1d827af5461631fc669f96843d9b.png', '2018-11-09 11:40:09'),
(53, 'Ministerio Da Defesa', 'CO', 'DF', 'ec222f42147522ff100034a08b810885.jpg', '2018-11-09 11:41:51'),
(54, 'NOVACAP - DF', 'CO', 'DF', 'edef2a9b21d6efda54240ab796c33e60.png', '2018-11-09 11:43:04'),
(55, 'Tribunal Regional Federal Da  1Â° RegiÃ£o - Taguatinga/DF', 'CO', 'DF', '5c0184f93a7ddad38ef3f84e53fd23bb.jpg', '2018-11-09 11:44:00'),
(56, 'UNIMED BrasÃ­lia', 'CO', 'DF', '20c960874c722d9a1d0d0283c63b0ca0.jpg', '2018-11-09 11:44:41'),
(57, 'Visa/DF - VigilÃ¢ncia SanitÃ¡ria Do Distrito Federal', 'CO', 'DF', 'a7e97d901263afe55673495219c8f9bd.jpg', '2018-11-09 11:45:19'),
(58, 'Hospital SÃ£o Rafael Salvador', 'NE', 'BA', '659c0c1c5ccc0bdf687d0607d20e56c9.jpg', '2018-11-09 11:46:44'),
(59, 'MS - Manejo E Assessoria Florestal Ltda Salvador', 'NE', 'BA', 'ccba0387e93cc0da9847dd22fd514958.png', '2018-11-09 11:47:57'),
(60, 'MEP - Construtora Ltda. Salvador', 'NE', 'BA', '41719e4b8e6daf6921350900c3aaff34.jpg', '2018-11-09 11:49:58'),
(61, 'Prefeitura Municipal De SÃ£o Francisco Do Conde ', 'NE', 'BA', 'a903ddda609dd56811b51cbc8715d547.jpg', '2018-11-09 11:51:15'),
(62, 'Prefeitura Municipal De ItabÃºna', 'NE', 'BA', '94fdd9ecc415c00c8780ef5a09005275.png', '2018-11-09 11:57:23'),
(63, 'Santa Casa Da Misericordia ', 'NE', 'BA', '95e96bbeb83085c86156d7c4b1f67fde.png', '2018-11-09 12:00:07'),
(64, 'SERQUIP / SIMÃ•ES Tratamento De ResÃ­duos', 'NE', 'BA', 'f1f29b3fdf37653799086e7f8a62dfb1.png', '2018-11-09 12:02:15'),
(65, 'Universidade Estadual De Feira De Santana', 'NE', 'BA', '9ce33a954390c4bf890b6bce618aac94.jpg', '2018-11-09 12:03:02'),
(66, 'Viva Ambiental E ServiÃ§os Ltda  Salvador', 'NE', 'BA', 'd0ac47afa9c5cf61373e25bde78b838d.png', '2018-11-09 12:03:56'),
(67, 'AssociaÃ§Ã£o Das Pioneiras Sociais', 'CO', 'DF', '4d24b24033ae0fd285c5e6aa8217612f.png', '2018-11-09 17:49:25'),
(68, 'Bioagri LaboratÃ³rios', 'CO', 'DF', '36a5e29397c9908bd71b8e369ff07db5.jpg', '2018-11-09 17:50:15'),
(69, 'BRASILMED â€“ Auditoria MÃ©dica E ServiÃ§os', 'CO', 'DF', '214671db6b63219897d0ca4dfe7ece5d.jpg', '2018-11-09 17:50:57'),
(70, 'CAESB â€“ Companhia De Saneamento Ambiental Do Distrito Federal', 'CO', 'DF', 'b3e767623470d38735322a778d356d15.png', '2018-11-09 17:51:40'),
(71, 'CASSI â€“ Caixa De AssistÃªncia Dos FuncionÃ¡rios Do Banco Do Brasil', 'CO', 'DF', 'a612afaafd66856bea633a6643f46e9d.png', '2018-11-09 17:52:23'),
(72, 'CBV â€“ Centro Brasileiro Da VisÃ£o', 'CO', 'DF', '429f5498cd13c202bebf4416cb85a2e9.jpg', '2018-11-09 17:53:10'),
(73, 'CondomÃ­nio Do Centro ClÃ­nico Via Brasil', 'CO', 'DF', '5643083cf28515d659f1400120d061ad.png', '2018-11-09 17:53:59'),
(74, 'Clinica De DoenÃ§as Renais De Taguatinga', 'CO', 'DF', '4c80b448c557a829f74dd5250785e3d1.png', '2018-11-09 17:54:40'),
(75, 'CondomÃ­nio Do Centro MÃ©dico E Hospitalar Anchieta', 'CO', 'DF', 'd89f0b5cd4ee72d9cc33fd08f613cab0.jpg', '2018-11-09 17:55:37'),
(76, 'CONFEA â€“ Conselho Geral De Engenharia, Arquitetura E Agronomia ', 'CO', 'DF', '72a174cbbd128dba70a50812aa573985.jpg', '2018-11-09 17:56:23'),
(77, 'CREA/ DF â€“ Conselho Regional De Engenharia, Arquitetura E Agronomia', 'CO', 'DF', '37fe3259a41352a659e4ac82ca210dbf.jpg', '2018-11-09 17:57:17'),
(78, 'Defesa Civil - DF', 'CO', 'DF', '654829196b886b2e641131d4d2968a78.jpg', '2018-11-09 17:58:06'),
(79, 'Hospital Das ClÃ­nicas Da Universidade Federal De GoiÃ¡s - GoiÃ¢nia', 'CO', 'GO', '337167a1ab0f84fc233f106f38259bf3.jpg', '2018-11-09 17:59:24'),
(80, 'FederaÃ§Ã£o Das IndÃºstrias Do Estado De GoiÃ¡s -   GoiÃ¢nia', 'CO', 'GO', '060b45524353346a5fb7a05dd634080c.png', '2018-11-09 18:00:08'),
(81, 'Centro UniversitÃ¡rio De AnÃ¡polis', 'CO', 'GO', '30bfb552a5923390bd6daf561878e538.jpg', '2018-11-09 18:00:52'),
(82, 'FundaÃ§Ã£o Oswaldo Cruz - FIOCRUZ -  Manguinhos  RJ', 'SE', 'RJ', '53de0526858469c7e44921bdef62a868.jpg', '2018-11-09 18:03:34'),
(83, 'LaboratÃ³rio Central De SaÃºde PÃºblica De Mato Grosso - Lacen/MT', 'CO', 'MT', '25e10b222889c8bfe7d0bb428a378389.png', '2018-11-09 18:33:33'),
(84, 'Fundo Estadual De SaÃºde De Mato Grosso - CuiabÃ¡', 'CO', 'MT', '7b5f6ccb4420f7d79493c944febcb476.png', '2018-11-09 18:34:29'),
(85, 'GerÃªncia TÃ©cnica De VigilÃ¢ncia SanitÃ¡ria - GTVISA/AGEVISA - Porto Velho', 'N', 'RR', '4d949523bc052983935995566b69625f.jpg', '2018-11-09 18:36:10'),
(86, 'Conselho Regional De QuÃ­mica - Porto Velho', 'N', 'RR', 'ed520127fd73812a849f5f9a548ee1e1.jpg', '2018-11-09 18:37:11'),
(87, 'LaboratÃ³rio Central De SaÃºde PÃºblica Do Estado Do Acre - SESACRE', 'N', 'AC', '276a633ad41ec9ed48a4d536d6ba4b64.jpg', '2018-11-09 18:38:23'),
(88, 'LaboratÃ³rio Central De SaÃºde PÃºblica Do Estado Do ParÃ¡  BelÃ©m', 'N', 'PA', '2b1ccf796f3674c354d7103ee64cd2eb.png', '2018-11-09 18:39:51'),
(89, 'Secretaria Municipal De Meio Ambiente De BelÃ©m - SEMMA', 'N', 'PA', 'beb3e60ebf551c102643059099e80a6c.png', '2018-11-09 18:40:36'),
(90, 'Lacen/AP â€“ LaboratÃ³rio Central De SaÃºde PÃºblica Do AmapÃ¡ MacapÃ¡', 'N', 'AP', 'c5fd81e1979cfa9848b891997ad70823.png', '2018-11-09 18:42:09'),
(91, 'Secretaria De Estado De SaÃºde De MacapÃ¡', 'N', 'AP', 'c85d7bd017e48434b4dfd9f49ac09de8.jpg', '2018-11-09 18:42:48'),
(92, 'Secretaria De Estado Do Meio Ambiente Do AmapÃ¡', 'N', 'AP', '9b7c0ffe0c11ff25f8b65d44046ade63.jpg', '2018-11-09 18:44:30'),
(93, 'Lacen / MA- LaboratÃ³rio Central Do MaranhÃ£o -   SÃ£o Luis', 'NE', 'MA', 'd35d3cd60abd41b79035edc052a724c2.png', '2018-11-09 18:45:52'),
(94, 'SES/MA â€“ Secretaria De Estado De SaÃºde Do MaranhÃ£o - SÃ£o Luis', 'NE', 'MA', '82a2c9105a8aa3bdfdde8b894b9dab56.jpg', '2018-11-09 18:46:33'),
(95, 'ClÃ­nica De Nefrologia De Sergipe - AracajÃº', 'NE', 'SE', '5c9d172fd9558d66ccd41aaf81621f79.png', '2018-11-09 18:51:02'),
(96, 'EMSURB Empresa Municipal De ServiÃ§os Urbanos - AracajÃº', 'NE', 'SE', '91a7c8012a4b670b43af213f84fcd505.jpg', '2018-11-09 18:52:01'),
(97, 'LaboratÃ³rio Central De SaÃºde PÃºblica De Alagoas LACEN', 'NE', 'AL', '801e64afaed59f75aaee362608919ba4.jpg', '2018-11-09 21:39:03'),
(98, 'Hospital Geral Do Estado ProfÂº Osvaldo BrandÃ£o Vilela MaceiÃ³', 'NE', 'AL', '181af0ebbc48e7ed01c0a625563fb9b0.jpg', '2018-11-09 21:40:01'),
(99, 'Secretaria De SaÃºde Do Estado De Alagoas', 'NE', 'AL', '7f4a990ce429587ff930783c885d3d46.jpg', '2018-11-09 21:41:00'),
(100, 'LaboratÃ³rio Central De SaÃºde PÃºblica De Perrnambuco LACEN/PE - Recife', 'NE', 'PE', 'b405faa72811ecb34ecb184291a3956b.jpg', '2018-11-09 21:43:53'),
(101, 'Secretaria Municipal De SaÃºde De Ipojuca-PE', 'NE', 'PE', '95bb0477d64fe435706945b3b91178e1.png', '2018-11-09 21:45:05'),
(102, 'Limp Fort Engenharia Ambiental Ltda   JoÃ£o Pessoa', 'NE', 'PB', '6723dbd15994ea1425d5c98701f0c75f.jpg', '2018-11-09 21:46:32'),
(103, 'CTCC - Centro De Tecnologia De Couro E CalÃ§ado Albano Franco - SENAI - Campina Grande', 'NE', 'PB', 'b162f30e0e0ece8433b1acd9c26994fc.jpg', '2018-11-09 21:48:19'),
(104, 'LaboratÃ³rio Central De SaÃºde PÃºblica Do Estado Do CearÃ¡ â€“ LACEN - CE', 'NE', 'CE', '7ad1cf10ef382aa812ef376cdc9e9403.jpg', '2018-11-09 21:49:42'),
(105, 'Secretaria De SaÃºde Do Estado Do CearÃ¡ - Fortaleza/CE', 'NE', 'CE', 'f9dda1ec2531d867513a52cfb3b5a89c.jpg', '2018-11-09 21:50:42'),
(106, 'ClÃ­nica Santa FÃ© ', 'NE', 'PI', 'bff4b5013474f99a5d0f8736ce38bb39.jpg', '2018-11-09 21:53:15'),
(107, 'ClÃ­nica SÃ£o Lucas', 'NE', 'PI', '98e4cce338bf85582b7b20db77eb6b05.jpg', '2018-11-09 21:54:00'),
(108, 'FAESPI â€“ Faculdade De Ensino Superior Do PiauÃ­', 'NE', 'PI', '466e350337b89ec788d40b09507256a3.png', '2018-11-09 21:54:46'),
(109, 'FundaÃ§Ã£o Municipal De SaÃºde De Teresina', 'NE', 'PI', '33a81e15a913904d2e47e60110573948.png', '2018-11-09 22:00:51'),
(110, 'GEVISA â€“ GerÃªncia De VigilÃ¢ncia SanitÃ¡ria', 'NE', 'PI', '434e51f125f5fb6912add84db27a4388.jpg', '2018-11-09 22:01:54'),
(111, 'Hospital De Terapia Intensiva â€“ HTI', 'NE', 'PI', '2ce3eb6579b36081044d79d857f9f8a6.png', '2018-11-09 22:02:35'),
(112, 'Hospital Do Promorar', 'NE', 'PI', 'faf5bc9e5065763d648f9cc3a0edc81b.jpg', '2018-11-09 22:07:29'),
(113, 'Hospital Do Matadouro', 'NE', 'PI', '46cb2641ebf6174dd31e0a79872f8d3c.png', '2018-11-09 22:09:24'),
(114, 'Hospital AlianÃ§a Casamater', 'NE', 'PI', 'e98961d902275e0c11019d9e6279e35c.jpg', '2018-11-09 22:10:17'),
(115, 'Hospital Buenos Aires', 'NE', 'PI', '222fc6108e22750b7518674150e0e114.png', '2018-11-09 22:11:24'),
(116, 'Hospital Dirceu II', 'NE', 'PI', '6eacf035cc2f6d41ec354c723e60f935.jpg', '2018-11-09 22:13:04'),
(117, 'Hospital GetÃºlio Vargas', 'NE', 'PI', '2d51e63fe4fe329ebf1cb345d1898473.jpg', '2018-11-09 22:14:01'),
(118, 'Hospital Infantil LucÃ­dio Portela', 'NE', 'PI', '1f40f52d79dd1db2aed1d44f58af5754.jpg', '2018-11-09 22:19:52'),
(119, 'Hospital Primavera ', 'NE', 'PI', 'f36d4e16f4dd958fb1d077988ce7eaa0.png', '2018-11-09 22:20:38'),
(120, 'Hospital Samiu', 'NE', 'PI', 'b7af446f478e9050a303ed5dd073d568.png', '2018-11-09 22:21:28'),
(121, ' Hospital SÃ£o Paulo', 'NE', 'PI', 'd0f0046ef6c9c4373d72600b424e8914.png', '2018-11-09 22:22:15'),
(122, 'Hospital SÃ£o Marcos', 'NE', 'PI', 'ef5d227de0d4a2c63611744de5250832.png', '2018-11-09 22:23:06'),
(123, 'Hospital Santa Maria ', 'NE', 'PI', '486cc7f822085693eef3ee0250cd0d86.png', '2018-11-09 22:23:53'),
(124, 'IDTNP - Instituto De DoenÃ§as Tropicais Natan Portela', 'NE', 'PI', '42185f20615773f59451f75201bdab56.png', '2018-11-09 22:24:35'),
(125, 'LaboratÃ³rio Raul Bacellar', 'NE', 'PI', '809cdd6f40fa4f7e9a24526021137885.jpg', '2018-11-09 22:25:16'),
(126, 'Maternidade Dona Evangelina Rosa ', 'NE', 'PI', '8ba4623771377032bd894fb8d9b8caf1.jpg', '2018-11-09 22:25:57'),
(127, 'Med Imagem', 'NE', 'PI', '778082e548930ed330f16a6399fababa.png', '2018-11-09 22:26:36'),
(128, 'MinistÃ©rio PÃºblico Estadual', 'NE', 'PI', 'db6a49af61bb961ce285843c0c4186ed.jpg', '2018-11-09 22:27:28'),
(129, 'Oftamolocenter ', 'NE', 'PI', '791ca92a3964858ce4732dbd5cc5081f.png', '2018-11-09 22:28:09'),
(130, 'Prontomed Infanil', 'NE', 'PI', '643f89b972294573424090727f91521a.png', '2018-11-09 22:28:58'),
(131, 'Prontomed Adulto', 'NE', 'PI', 'b7786bb290eb447f00719732eb4fe5ae.jpg', '2018-11-09 22:29:21'),
(132, 'Secretaria De Meio Ambiente E Recursos HÃ­dricos Do PiauÃ­ - SEMAR ', 'NE', 'PI', 'f9fe146c0ab712d50523f7214ef01f5d.png', '2018-11-09 22:31:47'),
(133, 'Secretaria Municipal De Desenvolvimento Urbano E HabitaÃ§Ã£o SEMDUH ', 'NE', 'PI', '7c4f9c9423ed7c551f2c23009574cbf5.jpg', '2018-11-09 22:32:55'),
(134, 'SuperintendÃªncias De Desenvolvimento Urbano - SDU', 'NE', 'PI', '03e1ba7d5aa160c48b79ebc3d817bc2f.png', '2018-11-09 22:34:07'),
(135, 'Unidade De SaÃºde Parque PiauÃ­ - Monte Castelo - OsÃ©ias Sampaio', 'NE', 'PI', '5992249f283936bbbf96e165437a3167.jpg', '2018-11-09 22:35:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes_img`
--

CREATE TABLE `clientes_img` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `date_cliente` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes_img`
--

INSERT INTO `clientes_img` (`id`, `id_cliente`, `url`, `date_cliente`) VALUES
(1, 1, 'e103cffceec804fe133ee9b370a704f3.png', '2018-11-08 22:32:45'),
(2, 2, '2d555df2347a1eab24f080088d187b81.jpg', '2018-11-08 22:37:55'),
(3, 3, 'd7f9d464f3129fe12744f9a653da064e.png', '2018-11-08 22:42:09'),
(4, 4, '31f9458adb29f9f4c1096e576a2c4ee7.jpg', '2018-11-08 22:44:42'),
(5, 5, 'd726e096756b158d02d55d52acbda772.png', '2018-11-08 22:49:29'),
(6, 6, '8c32759e5f5010eece42a4375641c7c4.png', '2018-11-08 22:51:20'),
(7, 7, 'ed129ebf9f508a26a07e58d300b3e8a9.jpg', '2018-11-08 22:56:16'),
(8, 8, 'cdcc32133b0f3defedc778f511d8be74.jpg', '2018-11-08 22:58:49'),
(9, 9, '866f5d39a8cd26cacbce000194a14bd9.jpg', '2018-11-08 23:02:24'),
(10, 10, '8099392744ef86e32f452f6883af19ed.png', '2018-11-08 23:04:57'),
(11, 11, 'e521486f84e4a6092761986ad78989c0.jpg', '2018-11-08 23:07:30'),
(12, 12, '29d4bf8f86ebe04cde1788d191d27131.jpg', '2018-11-08 23:08:39'),
(13, 13, '9faae1a06772a266dbbb638659d6b1ac.jpg', '2018-11-08 23:11:03'),
(14, 14, '2ee959266afcc5e0bf7010c08c8d3142.jpg', '2018-11-08 23:13:30'),
(15, 15, 'f0b52ea6cd582f5a793038abac61e7ba.jpg', '2018-11-08 23:15:11'),
(16, 16, '88a61c2f0570ca474731c38680065fb7.jpg', '2018-11-08 23:16:10'),
(17, 17, '824d1b8e407c0e99dc4b61db52cae911.jpg', '2018-11-08 23:17:43'),
(18, 18, '63d4a034747bada7c5a6d6ef6ff30a31.jpg', '2018-11-08 23:18:40'),
(19, 19, '5d45dbfe0d837f7ebbc897ac459f9401.jpg', '2018-11-08 23:19:39'),
(20, 20, '0cba322028e20e8af08841c749483708.png', '2018-11-08 23:21:03'),
(21, 21, '7fd0a4a63a13d1185440fdd419bdcd4f.png', '2018-11-08 23:22:12'),
(22, 22, '5f45b2ac176af28188b64a86d6c5487e.jpg', '2018-11-08 23:24:37'),
(23, 23, 'c2f4399acf0acffe433c55e6652e6125.jpg', '2018-11-08 23:25:36'),
(24, 24, '689e5463deaae4e658f1430208ad584a.png', '2018-11-08 23:26:34'),
(25, 25, '0b403875f7f91cff3dfb8b9f9f69714e.png', '2018-11-08 23:27:54'),
(26, 26, '3a2696d337474e3a56beccf2e470b5df.png', '2018-11-08 23:29:00'),
(27, 27, '190bd0cd7d3f98ccd1e07f24f8833dc9.png', '2018-11-08 23:30:16'),
(28, 28, '252a0b57f3b84a6ef40ee77d570c0152.png', '2018-11-08 23:32:11'),
(29, 29, 'd8ff10c1bae76ea44f72140a15d44143.png', '2018-11-08 23:33:01'),
(30, 30, '8e5b7cf7ae6abfefa5973fe1458c21f2.png', '2018-11-08 23:34:03'),
(31, 31, '6b28c73b53c544e46d34be0f685631c6.jpg', '2018-11-09 11:13:40'),
(32, 32, '548018794c7af8bd1603b788b4fc2a54.png', '2018-11-09 11:14:45'),
(33, 33, '5139f1f66471b8b8618bfe947a3ee461.png', '2018-11-09 11:15:40'),
(34, 34, 'f360c7d2725d240eb090362e3209e8a1.jpg', '2018-11-09 11:16:40'),
(35, 35, '6de4dfae2f3a5f789e3a587ecfca52a0.png', '2018-11-09 11:18:18'),
(36, 36, '5f4e19b35c4cd40f0c6ec753896d1f47.png', '2018-11-09 11:19:15'),
(37, 37, 'e4cf7d52b674ea152db791445b397528.png', '2018-11-09 11:23:27'),
(38, 38, '355bc55e1fb422180ec94f61d1c0a415.jpg', '2018-11-09 11:24:06'),
(39, 39, '62f52a3b71c2b30195206c2fdeff527b.png', '2018-11-09 11:25:04'),
(40, 40, 'b0d7c4f2e0a0b1a5203aa32217604bc3.jpg', '2018-11-09 11:26:37'),
(41, 41, '990f9bbd061ac61a1cbe0bab9aa75dc2.png', '2018-11-09 11:27:33'),
(42, 42, 'b221838747f2f86a91987b1fb98cf057.jpg', '2018-11-09 11:29:03'),
(43, 43, '04fff391798a059f9b24a11fe7181f8a.png', '2018-11-09 11:29:56'),
(44, 44, '13fcd7bf866426d7916836eca69c9f69.png', '2018-11-09 11:32:14'),
(45, 45, 'fc8376f12818a37f8a596688d472fdfe.png', '2018-11-09 11:33:02'),
(46, 46, 'f3982819cf4195b2a4e009d001e383dd.jpg', '2018-11-09 11:34:02'),
(47, 47, 'bd0660629a52dd0af2b05573c0c2ca8a.png', '2018-11-09 11:35:52'),
(48, 48, '9cd20ef5224807d6b7fd689c97c7541e.jpg', '2018-11-09 11:36:28'),
(49, 49, '082bd3b2fe6e7486194ef7b4b3315fb4.jpg', '2018-11-09 11:37:16'),
(50, 50, '0ab7e17e33692f7a7db2941d9b5a09ca.png', '2018-11-09 11:37:50'),
(51, 51, 'ab06caaff9108419fa5e285f53bd4295.png', '2018-11-09 11:38:31'),
(52, 52, '800c1d827af5461631fc669f96843d9b.png', '2018-11-09 11:40:09'),
(53, 53, 'ec222f42147522ff100034a08b810885.jpg', '2018-11-09 11:41:51'),
(54, 54, 'edef2a9b21d6efda54240ab796c33e60.png', '2018-11-09 11:43:04'),
(55, 55, '5c0184f93a7ddad38ef3f84e53fd23bb.jpg', '2018-11-09 11:44:00'),
(56, 56, '20c960874c722d9a1d0d0283c63b0ca0.jpg', '2018-11-09 11:44:41'),
(57, 57, 'a7e97d901263afe55673495219c8f9bd.jpg', '2018-11-09 11:45:19'),
(58, 58, '659c0c1c5ccc0bdf687d0607d20e56c9.jpg', '2018-11-09 11:46:44'),
(59, 59, 'ccba0387e93cc0da9847dd22fd514958.png', '2018-11-09 11:47:57'),
(60, 60, '41719e4b8e6daf6921350900c3aaff34.jpg', '2018-11-09 11:49:58'),
(61, 61, 'a903ddda609dd56811b51cbc8715d547.jpg', '2018-11-09 11:51:15'),
(62, 62, '94fdd9ecc415c00c8780ef5a09005275.png', '2018-11-09 11:57:23'),
(63, 63, '95e96bbeb83085c86156d7c4b1f67fde.png', '2018-11-09 12:00:07'),
(64, 64, 'f1f29b3fdf37653799086e7f8a62dfb1.png', '2018-11-09 12:02:15'),
(65, 65, '9ce33a954390c4bf890b6bce618aac94.jpg', '2018-11-09 12:03:02'),
(66, 66, 'd0ac47afa9c5cf61373e25bde78b838d.png', '2018-11-09 12:03:56'),
(67, 67, '4d24b24033ae0fd285c5e6aa8217612f.png', '2018-11-09 17:49:26'),
(68, 68, '36a5e29397c9908bd71b8e369ff07db5.jpg', '2018-11-09 17:50:15'),
(69, 69, '214671db6b63219897d0ca4dfe7ece5d.jpg', '2018-11-09 17:50:57'),
(70, 70, 'b3e767623470d38735322a778d356d15.png', '2018-11-09 17:51:40'),
(71, 71, 'a612afaafd66856bea633a6643f46e9d.png', '2018-11-09 17:52:23'),
(72, 72, '429f5498cd13c202bebf4416cb85a2e9.jpg', '2018-11-09 17:53:10'),
(73, 73, '5643083cf28515d659f1400120d061ad.png', '2018-11-09 17:54:00'),
(74, 74, '4c80b448c557a829f74dd5250785e3d1.png', '2018-11-09 17:54:40'),
(75, 75, 'd89f0b5cd4ee72d9cc33fd08f613cab0.jpg', '2018-11-09 17:55:37'),
(76, 76, '72a174cbbd128dba70a50812aa573985.jpg', '2018-11-09 17:56:23'),
(77, 77, '37fe3259a41352a659e4ac82ca210dbf.jpg', '2018-11-09 17:57:17'),
(78, 78, '654829196b886b2e641131d4d2968a78.jpg', '2018-11-09 17:58:06'),
(79, 79, '337167a1ab0f84fc233f106f38259bf3.jpg', '2018-11-09 17:59:24'),
(80, 80, '060b45524353346a5fb7a05dd634080c.png', '2018-11-09 18:00:08'),
(81, 81, '30bfb552a5923390bd6daf561878e538.jpg', '2018-11-09 18:00:52'),
(82, 82, '53de0526858469c7e44921bdef62a868.jpg', '2018-11-09 18:03:34'),
(83, 83, '25e10b222889c8bfe7d0bb428a378389.png', '2018-11-09 18:33:33'),
(84, 84, '7b5f6ccb4420f7d79493c944febcb476.png', '2018-11-09 18:34:29'),
(85, 85, '4d949523bc052983935995566b69625f.jpg', '2018-11-09 18:36:10'),
(86, 86, 'ed520127fd73812a849f5f9a548ee1e1.jpg', '2018-11-09 18:37:11'),
(87, 87, '276a633ad41ec9ed48a4d536d6ba4b64.jpg', '2018-11-09 18:38:23'),
(88, 88, '2b1ccf796f3674c354d7103ee64cd2eb.png', '2018-11-09 18:39:51'),
(89, 89, 'beb3e60ebf551c102643059099e80a6c.png', '2018-11-09 18:40:36'),
(90, 90, 'c5fd81e1979cfa9848b891997ad70823.png', '2018-11-09 18:42:09'),
(91, 91, 'c85d7bd017e48434b4dfd9f49ac09de8.jpg', '2018-11-09 18:42:48'),
(92, 92, '9b7c0ffe0c11ff25f8b65d44046ade63.jpg', '2018-11-09 18:44:30'),
(93, 93, 'd35d3cd60abd41b79035edc052a724c2.png', '2018-11-09 18:45:52'),
(94, 94, '82a2c9105a8aa3bdfdde8b894b9dab56.jpg', '2018-11-09 18:46:33'),
(95, 95, '5c9d172fd9558d66ccd41aaf81621f79.png', '2018-11-09 18:51:02'),
(96, 96, '91a7c8012a4b670b43af213f84fcd505.jpg', '2018-11-09 18:52:01'),
(97, 97, '801e64afaed59f75aaee362608919ba4.jpg', '2018-11-09 21:39:04'),
(98, 98, '181af0ebbc48e7ed01c0a625563fb9b0.jpg', '2018-11-09 21:40:02'),
(99, 99, '7f4a990ce429587ff930783c885d3d46.jpg', '2018-11-09 21:41:00'),
(100, 100, 'b405faa72811ecb34ecb184291a3956b.jpg', '2018-11-09 21:43:53'),
(101, 101, '95bb0477d64fe435706945b3b91178e1.png', '2018-11-09 21:45:05'),
(102, 102, '6723dbd15994ea1425d5c98701f0c75f.jpg', '2018-11-09 21:46:32'),
(103, 103, 'b162f30e0e0ece8433b1acd9c26994fc.jpg', '2018-11-09 21:48:19'),
(104, 104, '7ad1cf10ef382aa812ef376cdc9e9403.jpg', '2018-11-09 21:49:42'),
(105, 105, 'f9dda1ec2531d867513a52cfb3b5a89c.jpg', '2018-11-09 21:50:42'),
(106, 106, 'bff4b5013474f99a5d0f8736ce38bb39.jpg', '2018-11-09 21:53:15'),
(107, 107, '98e4cce338bf85582b7b20db77eb6b05.jpg', '2018-11-09 21:54:00'),
(108, 108, '466e350337b89ec788d40b09507256a3.png', '2018-11-09 21:54:46'),
(109, 109, '33a81e15a913904d2e47e60110573948.png', '2018-11-09 22:00:51'),
(110, 110, '434e51f125f5fb6912add84db27a4388.jpg', '2018-11-09 22:01:54'),
(111, 111, '2ce3eb6579b36081044d79d857f9f8a6.png', '2018-11-09 22:02:35'),
(112, 112, 'faf5bc9e5065763d648f9cc3a0edc81b.jpg', '2018-11-09 22:07:29'),
(113, 113, '46cb2641ebf6174dd31e0a79872f8d3c.png', '2018-11-09 22:09:24'),
(114, 114, 'e98961d902275e0c11019d9e6279e35c.jpg', '2018-11-09 22:10:17'),
(115, 115, '222fc6108e22750b7518674150e0e114.png', '2018-11-09 22:11:24'),
(116, 116, '6eacf035cc2f6d41ec354c723e60f935.jpg', '2018-11-09 22:13:04'),
(117, 117, '2d51e63fe4fe329ebf1cb345d1898473.jpg', '2018-11-09 22:14:01'),
(118, 118, '1f40f52d79dd1db2aed1d44f58af5754.jpg', '2018-11-09 22:19:52'),
(119, 119, 'f36d4e16f4dd958fb1d077988ce7eaa0.png', '2018-11-09 22:20:38'),
(120, 120, 'b7af446f478e9050a303ed5dd073d568.png', '2018-11-09 22:21:28'),
(121, 121, 'd0f0046ef6c9c4373d72600b424e8914.png', '2018-11-09 22:22:15'),
(122, 122, 'ef5d227de0d4a2c63611744de5250832.png', '2018-11-09 22:23:06'),
(123, 123, '486cc7f822085693eef3ee0250cd0d86.png', '2018-11-09 22:23:53'),
(124, 124, '42185f20615773f59451f75201bdab56.png', '2018-11-09 22:24:35'),
(125, 125, '809cdd6f40fa4f7e9a24526021137885.jpg', '2018-11-09 22:25:16'),
(126, 126, '8ba4623771377032bd894fb8d9b8caf1.jpg', '2018-11-09 22:25:57'),
(127, 127, '778082e548930ed330f16a6399fababa.png', '2018-11-09 22:26:37'),
(128, 128, 'db6a49af61bb961ce285843c0c4186ed.jpg', '2018-11-09 22:27:28'),
(129, 129, '791ca92a3964858ce4732dbd5cc5081f.png', '2018-11-09 22:28:09'),
(130, 130, '643f89b972294573424090727f91521a.png', '2018-11-09 22:28:58'),
(131, 131, 'b7786bb290eb447f00719732eb4fe5ae.jpg', '2018-11-09 22:29:21'),
(132, 132, 'f9fe146c0ab712d50523f7214ef01f5d.png', '2018-11-09 22:31:47'),
(133, 133, '7c4f9c9423ed7c551f2c23009574cbf5.jpg', '2018-11-09 22:32:56'),
(134, 134, '03e1ba7d5aa160c48b79ebc3d817bc2f.png', '2018-11-09 22:34:08'),
(135, 135, '5992249f283936bbbf96e165437a3167.jpg', '2018-11-09 22:35:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(37) NOT NULL,
  `descricao` text,
  `preco` float DEFAULT NULL,
  `date_curso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `imagem`, `descricao`, `preco`, `date_curso`) VALUES
(1, 'PHP', 'php.jpg', 'curso de php mais ou menos', 197, '2018-11-01 00:00:00'),
(2, 'JavaScript', 'js.jpg', NULL, NULL, '2018-11-02 08:00:00'),
(4, 'CSS', 'css.png', 'curso de CSS3 muito legalzinho', NULL, '2018-11-11 00:00:00'),
(5, 'Gerenciamento de Residuos de Servicos de Saude', 'residuos.jpg', 'Dias 20 e 21 de setembro de 2017\nLocal: SCLN 409, Bloco E - Auditorio da Mutua - Caixa de Assistencia aos Profissionais do CREA', NULL, '2018-11-12 10:14:00'),
(7, 'HTML', '7fbecd923e24e17dc98b9b6b405bcf6a.jpg', 'Curso de HTML', 100, '2018-11-14 14:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `duvidas`
--

CREATE TABLE `duvidas` (
  `id` int(11) NOT NULL,
  `data_duvida` datetime NOT NULL,
  `respondida` tinyint(1) NOT NULL,
  `duvida` text NOT NULL,
  `id_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `duvidas`
--

INSERT INTO `duvidas` (`id`, `data_duvida`, `respondida`, `duvida`, `id_aluno`) VALUES
(1, '2018-10-26 20:01:17', 0, 'duvida de teste', 1),
(2, '2018-10-26 23:47:14', 0, 'duvida de teste', 1),
(3, '2018-10-26 23:51:22', 0, 'duvida de teste', 1),
(4, '2018-10-26 23:51:27', 0, 'duvida de teste', 1),
(5, '2018-10-26 23:54:07', 0, 'duvida de teste', 1),
(6, '2018-10-26 23:54:26', 0, 'duvida de teste', 1),
(7, '2018-10-26 23:56:56', 0, 'duvida de teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'event-important',
  `start` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `inicio_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `final_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(12, 'Aluno De Teste', '', '', 'event-important', '2018-12-03', '', '', ''),
(13, 'Welton Cardoso', '', '', 'event-important', '2018-12-03', '', '', ''),
(14, 'HTML', '', '', 'event-important', '2018-12-03', '', '', ''),
(15, 'Video 5.1', '', '', 'event-important', '2018-12-03', '', '', ''),
(16, 'CSS', '', '', 'event-important', '2018-12-03', '', '', ''),
(17, 'Video 5.1', '', '', 'event-important', '2018-12-03', '', '', ''),
(18, 'Welton Cardosoaaa', '', '', 'event-important', '2018-12-03', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(11) NOT NULL,
  `data_viewed` datetime NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `data_viewed`, `id_aluno`, `id_aula`) VALUES
(4, '2018-12-01 21:35:30', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `leis`
--

CREATE TABLE `leis` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `date_lei` datetime NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `leis`
--

INSERT INTO `leis` (`id`, `nome`, `date_lei`, `categoria`) VALUES
(1, 'Adolfo Lutz', '2018-11-09 22:42:13', 'biografias'),
(2, 'Alexander Fleming', '2018-11-09 22:42:44', 'biografias'),
(3, 'Arthur Neiva', '2018-11-09 22:43:01', 'biografias'),
(4, 'Betha Lutz', '2018-11-09 22:43:17', 'biografias'),
(5, 'Carlos Chagas', '2018-11-09 22:44:49', 'biografias'),
(6, 'Emilio Ribas', '2018-11-09 22:45:08', 'biografias'),
(7, 'Franz Anton Mesmer', '2018-11-09 22:45:36', 'biografias'),
(8, 'IGNAZ FULOP SEMMELWEIS', '2018-11-09 22:45:57', 'biografias'),
(9, 'Joo Nunes Maia', '2018-11-09 22:46:13', 'biografias'),
(10, 'Louis Pasteur', '2018-11-09 22:46:37', 'biografias'),
(11, 'Oswaldo Cruz', '2018-11-09 22:47:01', 'biografias'),
(12, 'Vital Brasil', '2018-11-09 22:47:18', 'biografias'),
(13, 'Decreto 29.399', '2018-11-09 22:47:55', 'leis distritais'),
(14, 'DECRETO  33.400 - 9-12-2011-GDF', '2018-11-09 22:48:19', 'leis distritais'),
(15, 'DECRETO 37568 DE 2016', '2018-11-09 22:48:37', 'leis distritais'),
(16, 'DECRETO N 18.328-1997-CAESB', '2018-11-09 22:49:00', 'leis distritais'),
(17, 'Instruo Normativa 89-2016 ', '2018-11-09 22:49:21', 'leis distritais'),
(18, 'LEI 5.610-2016 PDF', '2018-11-09 22:49:38', 'leis distritais'),
(19, 'LEI N.4352-DF', '2018-11-09 22:49:54', 'leis distritais'),
(20, 'DECRETO 6514-2008', '2018-11-09 22:50:30', 'leis federais'),
(21, 'Decreto 7404-2010', '2018-11-09 22:50:49', 'leis federais'),
(22, 'Decreto Federal 7.405-2010', '2018-11-09 22:51:19', 'leis federais'),
(23, 'LEI 5.940.2006', '2018-11-09 22:51:42', 'leis federais'),
(24, 'Lei 6.938 31_08_1981', '2018-11-09 22:52:06', 'leis federais'),
(25, 'LEI 11.107-2005', '2018-11-09 22:52:29', 'leis federais'),
(26, 'LEi 11.445-2007', '2018-11-09 22:52:51', 'leis federais'),
(27, 'LEI 12.305.2010', '2018-11-09 22:53:15', 'leis federais'),
(28, 'LEI 9795-1999', '2018-11-09 22:53:45', 'leis federais'),
(29, 'LEI FEDERAL 9.605', '2018-11-09 22:54:05', 'leis federais'),
(30, 'LEI FEDERAL 9966-2000', '2018-11-09 22:54:24', 'leis federais'),
(31, 'Portaria 244-2012GABMINISTRA', '2018-11-09 22:54:48', 'leis federais'),
(32, 'RDC 306', '2018-11-09 22:55:11', 'leis federais'),
(33, 'Res. 358 - CONAMA', '2018-11-09 22:55:28', 'leis federais'),
(34, 'Aterro Sanitrio De Braslia Comea A Funcionar', '2018-11-09 22:55:57', 'outras'),
(35, 'Chamada Pblica - Cadastramento De Cooperati', '2018-11-09 22:56:16', 'outras'),
(36, 'CURSO COMO ELABORAR UM PGRSS', '2018-11-09 22:56:31', 'outras'),
(37, 'DECRETO 12.408.2011', '2018-11-09 22:56:50', 'outras'),
(38, 'FOLHETO.Estratgias.OUT-2017cdr', '2018-11-09 22:57:10', 'outras'),
(39, 'Grande_Geradores_de_Lixo_ Montado_Agencia_Brasilia', '2018-11-09 22:57:28', 'outras'),
(40, 'MODELO DE CHECKLIST - CONS.DENTRIO DIAGNSTICO SITU', '2018-11-09 22:57:51', 'outras'),
(41, 'PGRSS.DICAS PARA GERENCIAR FO2014', '2018-11-09 22:58:08', 'outras'),
(42, 'PROCESSAMENTO DE ROUPAS', '2018-11-09 22:58:28', 'outras'),
(43, 'TEMPO DE DECOMPOSIO DE MATERIAIS', '2018-11-09 22:58:45', 'outras');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leis_pdf`
--

CREATE TABLE `leis_pdf` (
  `id` int(11) NOT NULL,
  `id_lei` int(11) NOT NULL,
  `date_lei` datetime NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `leis_pdf`
--

INSERT INTO `leis_pdf` (`id`, `id_lei`, `date_lei`, `url`) VALUES
(1, 1, '2018-11-09 22:42:13', 'ADOLFO LUTZ.pdf'),
(2, 2, '2018-11-09 22:42:44', 'ALEXANDER FLEMING.pdf'),
(3, 3, '2018-11-09 22:43:01', 'ARTHUR NEIVA.pdf'),
(4, 4, '2018-11-09 22:43:17', 'BERTHA LUTZ.pdf'),
(5, 5, '2018-11-09 22:44:49', 'CARLOS CHAGAS.pdf'),
(6, 6, '2018-11-09 22:45:08', 'EMLIO RIBAS.pdf'),
(7, 7, '2018-11-09 22:45:36', 'FRANZ ANTON MESMER.pdf'),
(8, 8, '2018-11-09 22:45:57', 'IGNAZ FULOP SEMMELWEIS.pdf'),
(9, 9, '2018-11-09 22:46:13', 'JOO NUNES MAIA.pdf'),
(10, 10, '2018-11-09 22:46:37', 'LOUIS PASTEUR.pdf'),
(11, 11, '2018-11-09 22:47:01', 'OSWALDO CRUZ.pdf'),
(12, 12, '2018-11-09 22:47:18', 'VITAL BRASIL.pdf'),
(13, 13, '2018-11-09 22:47:55', 'decreto  29.399.pdf'),
(14, 14, '2018-11-09 22:48:19', 'DECRETO  33.400 - 9-12-2011-GDF.pdf'),
(15, 15, '2018-11-09 22:48:37', 'DECRETO 37568 DE 2016.PDF'),
(16, 16, '2018-11-09 22:49:00', 'DECRETO N 18.328-1997-CAESB.pdf'),
(17, 17, '2018-11-09 22:49:21', 'Instruo normativa 89-2016 pdf.pdf'),
(18, 18, '2018-11-09 22:49:38', 'LEI 5.610-2016 PDF.pdf'),
(19, 19, '2018-11-09 22:49:54', 'LEI N.4352-DF.pdf'),
(20, 20, '2018-11-09 22:50:30', 'DECRETO 6514-2008.pdf'),
(21, 21, '2018-11-09 22:50:50', 'Decreto 7404-2010.pdf'),
(22, 22, '2018-11-09 22:51:19', 'Decreto Federal 7.405-2010.pdf'),
(23, 23, '2018-11-09 22:51:42', 'LEI 5.940.2006.pdf'),
(24, 24, '2018-11-09 22:52:06', 'Lei 6.938 31_08_1981.pdf'),
(25, 25, '2018-11-09 22:52:29', 'LEI 11.107-2005.pdf'),
(26, 26, '2018-11-09 22:52:51', 'LEi 11.445-2007.pdf'),
(27, 27, '2018-11-09 22:53:15', 'LEI 12.305.2010.pdf'),
(28, 28, '2018-11-09 22:53:45', 'LEI 9795-1999.pdf'),
(29, 29, '2018-11-09 22:54:05', 'LEI FEDERAL 9.605.pdf'),
(30, 30, '2018-11-09 22:54:24', 'LEI FEDERAL 9966-2000.pdf'),
(31, 31, '2018-11-09 22:54:48', 'Portaria 244-2012GABMINISTRA.pdf'),
(32, 32, '2018-11-09 22:55:11', 'RDC 306.pdf'),
(33, 33, '2018-11-09 22:55:28', 'Res. 358 - CONAMA.pdf'),
(34, 34, '2018-11-09 22:55:57', 'Aterro Sanitrio de Braslia comea a funcionarpdf.pdf'),
(35, 35, '2018-11-09 22:56:16', 'Chamada pblica - cadastramento de cooperati-pdf.pdf'),
(36, 36, '2018-11-09 22:56:31', 'CURSO COMO ELABORAR UM PGRSS.pdf'),
(37, 37, '2018-11-09 22:56:50', 'DECRETO 12.408.2011.pdf'),
(38, 38, '2018-11-09 22:57:10', 'FOLHETO.estratgias.OUT-2017cdr.pdf'),
(39, 39, '2018-11-09 22:57:28', 'Grande_Geradores_de_Lixo_ montado_Agencia_Brasilia1.pdf'),
(40, 40, '2018-11-09 22:57:51', 'MODELO DE CHECKLIST - CONS.DENTRIO DIAGNSTICO SITUACIONAL.pdf'),
(41, 41, '2018-11-09 22:58:08', 'PGRSS.DICAS PARA GERENCIAR FO2014.pdf'),
(42, 42, '2018-11-09 22:58:28', 'PROCESSAMENTO DE ROUPAS.pdf'),
(43, 43, '2018-11-09 22:58:45', 'TEMPO DE DECOMPOSIO DE MATERIAIS.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`id`, `id_curso`, `nome`) VALUES
(21, 5, 'Basico'),
(22, 5, 'Intermediario'),
(35, 5, 'Avancado'),
(36, 1, 'Nível I');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `date_noticia` datetime NOT NULL,
  `texto` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `date_noticia`, `texto`) VALUES
(1, 'Titulo', 'descricao', '2018-10-30 01:09:51', 'texto'),
(2, 'Titulo2', 'descricao 2', '2018-10-30 01:10:16', 'texto 2'),
(3, 'Tirulo 3', 'descricao 3', '2018-10-30 01:10:38', 'texto 3'),
(4, 'Titulo 4', 'descricao 4', '2018-10-30 01:11:02', 'texto 4'),
(5, 'Lorem Ipsun', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-10-30 01:16:15', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(6, 'Aaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-10-30 17:54:09', 'aaaaaaaaaaaaaaaa'),
(7, 'Nnnnn', 'asdnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '2018-10-30 17:55:29', 'asd'),
(8, 'Teste E Assim', 'asdassssssssssssssssssssssssssssssssssssssssssssssssssssssssaaaaaaaaaaaaaaaaaaaaaaaaassssssssssssssssssssssssssssssss', '2018-10-30 17:59:08', ''),
(9, 'Ola', 'Sabe aquele tÃ­tulo que deveria ficar numa linha sÃ³ e nÃ£o fica? Hoje vou dar uma dica rÃ¡pida de como configurar quebras de linha com css. White-space Ã© a propriedade que define o comportamento das quebras de linha.	\r\n', '2018-10-30 18:02:31', 'asdaaaaaaaaaaaaa'),
(10, 'Asdsad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-10-30 18:03:45', 'asdasd'),
(11, 'Lorem', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ', '2018-10-30 18:09:17', 'asdasd'),
(12, 'Lorem 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also theL', '2018-10-30 18:10:33', 'DSASDA'),
(13, 'Asdasd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also theL', '2018-10-30 18:11:31', 'asdasd'),
(14, 'Aaaaaaaa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ', '2018-10-30 18:12:28', 'aaaaa'),
(15, 'Asdhasd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ', '2018-10-30 18:13:36', 'asdasdasdasdada'),
(16, 'AiuygfdaguiojPSIDH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ', '2018-10-30 18:17:42', 'AOIYTAIOPSILorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(19, 'Agronomia Teste De  Painel', 'terstetstets', '2018-11-14 20:57:23', 'ago e pop');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_img`
--

CREATE TABLE `noticias_img` (
  `id` int(11) NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `date_img` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias_img`
--

INSERT INTO `noticias_img` (`id`, `id_noticia`, `url`, `date_img`) VALUES
(1, 1, '97d1cb0e4fc80e56c63a1babbbfda531.jpg', '2018-10-30 01:09:51'),
(2, 2, '35b19b212fa81c932417e9231850299d.jpg', '2018-10-30 01:10:16'),
(3, 3, '652cc40b1063be7fb91cd478e41e9de0.jpg', '2018-10-30 01:10:38'),
(4, 4, 'feeb3b14dc96dcbf3eb3221ed3767ef6.jpg', '2018-10-30 01:11:02'),
(5, 5, 'f11b01adb443bb3df0b611adc42f0e11.jpg', '2018-10-30 01:16:15'),
(6, 6, 'f021c9959c1d5e133fea6a5a20899ca3.jpg', '2018-10-30 17:54:10'),
(7, 7, 'e5bb844cbd6d7ed09c7979d3633bdda8.jpg', '2018-10-30 17:55:29'),
(8, 8, 'b97cc0457f06faffed1e7060ab65284d.jpg', '2018-10-30 17:59:08'),
(9, 9, '55cb03bde42fae525afb09f6b4932577.jpg', '2018-10-30 18:02:31'),
(10, 10, '74a06319b41482971f507ac31afa6496.jpg', '2018-10-30 18:03:45'),
(11, 11, '9ad6d5cd13f995ed9ea2d95ac251c412.jpg', '2018-10-30 18:09:17'),
(12, 12, 'cce6c1ad2c5dc3bf5e8e4a6bc3afcc1e.jpg', '2018-10-30 18:10:33'),
(13, 13, '46da3c645ae29f25024fc431ccef1c5b.jpg', '2018-10-30 18:11:31'),
(14, 14, 'c10e115a9dfdb1d39df84c31323e6e65.jpg', '2018-10-30 18:12:28'),
(15, 15, '545da32051975f95edeaefccbff35461.jpg', '2018-10-30 18:13:36'),
(16, 16, 'ccc2972558bf4b0f06a7443fd58a234b.jpg', '2018-10-30 18:17:42'),
(19, 19, '23b06593a44ba4a9d34743be6b960302.jpg', '2018-11-14 20:57:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_coupon` int(11) DEFAULT NULL,
  `total_amount` float NOT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `payment_status` int(11) NOT NULL,
  `link_pg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `purchases`
--

INSERT INTO `purchases` (`id`, `id_user`, `id_coupon`, `total_amount`, `payment_type`, `payment_status`, `link_pg`) VALUES
(33, 13, NULL, 197, 'mp', 1, NULL),
(34, 13, NULL, 197, 'mp', 1, NULL),
(35, 13, NULL, 197, 'mp', 1, NULL),
(36, 13, NULL, 100, 'mp', 1, NULL),
(37, 13, NULL, 100, 'mp', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases_products`
--

CREATE TABLE `purchases_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `purchases_products`
--

INSERT INTO `purchases_products` (`id`, `id_purchase`, `id_product`, `quantity`, `product_price`) VALUES
(28, 33, 1, 1, 197),
(29, 34, 1, 1, 197),
(30, 35, 1, 1, 197),
(31, 36, 7, 1, 100),
(32, 37, 7, 1, 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases_transactions`
--

CREATE TABLE `purchases_transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `amount` float NOT NULL,
  `transaction_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionarios`
--

CREATE TABLE `questionarios` (
  `id` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `pergunta` varchar(100) NOT NULL,
  `opcao1` varchar(100) DEFAULT NULL,
  `opcao2` varchar(100) DEFAULT NULL,
  `opcao3` varchar(100) DEFAULT NULL,
  `opcao4` varchar(100) DEFAULT NULL,
  `resposta` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questionarios`
--

INSERT INTO `questionarios` (`id`, `id_aula`, `pergunta`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `resposta`) VALUES
(1, 4, 'qual a pergunta?', 'resp1', 'resp2', 'resp3', 'resp4', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `date_slide` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `slide`
--

INSERT INTO `slide` (`id`, `nome`, `date_slide`) VALUES
(1, 'primeiro', '2018-11-29 22:34:05'),
(2, 'segundo', '2018-11-29 23:02:07'),
(3, 'terceiro', '2018-11-29 23:02:19'),
(4, 'quarto', '2018-11-29 23:07:34'),
(5, 'quinto', '2018-11-29 23:08:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide_img`
--

CREATE TABLE `slide_img` (
  `id` int(11) NOT NULL,
  `id_slide` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `date_slide` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `slide_img`
--

INSERT INTO `slide_img` (`id`, `id_slide`, `url`, `date_slide`) VALUES
(1, 1, 'c3c545b0ec170d1ee865f7eccdf536ee.jpg', '2018-11-29 22:34:05'),
(2, 2, '034cadf1b22cdd57749622d315de888b.jpg', '2018-11-29 23:02:07'),
(3, 3, '01d0fe61a66ade10e1bae3dd9fe750ea.jpg', '2018-11-29 23:02:20'),
(4, 4, '1170d73a252f72ef63858d1acd9953a5.jpg', '2018-11-29 23:07:34'),
(5, 5, 'b7152bc3bf38b19948c144fd724dd912.jpg', '2018-11-29 23:08:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cep` int(11) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`) VALUES
(13, 'testempsecatre@gmail.com', '12345', 'welton viana cardoso', 72301407, 'Qr 111, conjunto 07, lote', 14, '', 'Samambaia sul', 'Samambaia', 'DF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'weltonvcardoso@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `id_aula`, `nome`, `descricao`, `url`) VALUES
(1, 1, 'video 1', 'Descricao do video aqui', '297431567'),
(2, 2, 'video 2', 'Descricao do video aqui', '297431567'),
(3, 3, 'video 3', 'Descricao do video aqui', '297431567'),
(4, 5, 'video 5', 'Descricao do video aqui', '297431567'),
(5, 6, 'aula teste', '', '297431567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aluno_curso`
--
ALTER TABLE `aluno_curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes_img`
--
ALTER TABLE `clientes_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duvidas`
--
ALTER TABLE `duvidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leis`
--
ALTER TABLE `leis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leis_pdf`
--
ALTER TABLE `leis_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias_img`
--
ALTER TABLE `noticias_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases_products`
--
ALTER TABLE `purchases_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases_transactions`
--
ALTER TABLE `purchases_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionarios`
--
ALTER TABLE `questionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aluno_curso`
--
ALTER TABLE `aluno_curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `clientes_img`
--
ALTER TABLE `clientes_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `duvidas`
--
ALTER TABLE `duvidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `leis`
--
ALTER TABLE `leis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `leis_pdf`
--
ALTER TABLE `leis_pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `noticias_img`
--
ALTER TABLE `noticias_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `purchases_products`
--
ALTER TABLE `purchases_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `purchases_transactions`
--
ALTER TABLE `purchases_transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questionarios`
--
ALTER TABLE `questionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
