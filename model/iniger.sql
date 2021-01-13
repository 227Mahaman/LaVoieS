-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 12 jan. 2021 à 12:51
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `iniger`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `auteur` varchar(255) NOT NULL,
  `type_annonce` varchar(20) NOT NULL,
  `date_annonce` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lieu` varchar(255) NOT NULL,
  `cannonce` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `users` int(11) NOT NULL,
  `date_event` date DEFAULT NULL,
  `time_event` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `titre`, `description`, `auteur`, `type_annonce`, `date_annonce`, `lieu`, `cannonce`, `photo`, `users`, `date_event`, `time_event`) VALUES
(1, 'Séminaire de formation', 'Assalamu aleykum&nbsp;<b style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;\">nous avons l\'honneur à vous inviter à notre&nbsp;</b><i style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-weight: bold;\">séminaire de formation.</i><span style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;\">&nbsp;Merci!</span>', 'AEMN', 'Annonce', '2020-10-09 23:00:00', 'Quartier wadata', 8, 45, 8, '2020-10-09', '20:40:00'),
(2, 'Sermon du Vendredi', 'Assalamu aleykum warahmatullah', 'Salaf', 'Actualité', '2020-10-08 23:00:00', 'Mosquée de Imam Malik', 8, 44, 8, '2020-10-17', '21:00:00'),
(3, 'Sai Bango ya tsage', 'Assalamu aleykum La population de niamey, vous êtes invités au grand prêche qu\'organise le Comite Da\'awa de Bassora.<br>', 'Comité Da\'awa de Bassora', 'Annonce', '2020-10-13 12:06:27', 'Markaz noor', 8, 54, 8, '2020-10-17', '21:40:00');

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL,
  `ville` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id`, `nom`, `prenom`, `statut`, `ville`, `description`, `photo`) VALUES
(1, 'Muhammad Awal', 'Maishago', 4, 3, 'Éminent Savant du Nigéria', 3),
(2, 'Ahmad Tijjani ', 'Yussuf', 4, 1, 'Sheick de Bauchi respecter', 4),
(3, 'Abdoul Malik', 'Hamissou', 4, 3, 'Il a fait le franco-Arabe du primaire jusqu\'au Lycée au Niger. Après cela, Il se rend au Nigeria pour étudier, mémoriser d\'avantage le coran. Il a aussi eu la chance de faire sa licence en Tafsirul Quor\'an à l\'université Islamique de Médine. Puis, le master 1 à celle de Riyad. Actuellement, il tient une marakanta et un Majlis au Masjid Imam Malick de Niamey.', 60),
(4, 'Mouhamadou', 'Abdourahmane', 4, 3, 'Imam du Masjid Amir Sultan, né à Tahoua (Malbaza), à l\'âge de 9 ans il est parti étudier au cameroun.', 61);

-- --------------------------------------------------------

--
-- Structure de la table `cactualites`
--

CREATE TABLE `cactualites` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cactualites`
--

INSERT INTO `cactualites` (`id`, `titre`) VALUES
(1, 'Conférences');

-- --------------------------------------------------------

--
-- Structure de la table `cannonces`
--

CREATE TABLE `cannonces` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cannonces`
--

INSERT INTO `cannonces` (`id`, `titre`) VALUES
(8, 'Formations');

-- --------------------------------------------------------

--
-- Structure de la table `cfikr`
--

CREATE TABLE `cfikr` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cfikr`
--

INSERT INTO `cfikr` (`id`, `titre`) VALUES
(8, 'Évenement'),
(9, 'Conférence'),
(10, 'Karatu'),
(11, 'Khutbah');

-- --------------------------------------------------------

--
-- Structure de la table `clivres`
--

CREATE TABLE `clivres` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clivres`
--

INSERT INTO `clivres` (`id`, `titre`) VALUES
(1, 'Hadith');

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'AFGHANISTAN'),
(2, 'ALBANIA'),
(3, 'ALGERIA'),
(4, 'AMERICAN SAMOA'),
(5, 'ANDORRA'),
(6, 'ANGOLA'),
(7, 'ANGUILLA'),
(8, 'ANTARCTICA'),
(9, 'ANTIGUA AND BARBUDA'),
(10, 'ARGENTINA'),
(11, 'ARMENIA'),
(12, 'ARUBA'),
(13, 'AUSTRALIA'),
(14, 'AUSTRIA'),
(15, 'AZERBAIJAN'),
(16, 'BAHAMAS'),
(17, 'BAHRAIN'),
(18, 'BANGLADESH'),
(19, 'BARBADOS'),
(20, 'BELARUS'),
(21, 'BELGIUM'),
(22, 'BELIZE'),
(23, 'BENIN'),
(24, 'BERMUDA'),
(25, 'BHUTAN'),
(26, 'BOLIVIA'),
(27, 'BOSNIA AND HERZEGOVINA'),
(28, 'BOTSWANA'),
(29, 'BOUVET ISLAND'),
(30, 'BRAZIL'),
(31, 'BRITISH INDIAN OCEAN TERRITORY'),
(32, 'BRUNEI DARUSSALAM'),
(33, 'BULGARIA'),
(34, 'BURKINA FASO'),
(35, 'BURUNDI'),
(36, 'CAMBODIA'),
(37, 'CAMEROON'),
(38, 'CANADA'),
(39, 'CAPE VERDE'),
(40, 'CAYMAN ISLANDS'),
(41, 'CENTRAL AFRICAN REPUBLIC'),
(42, 'CHAD'),
(43, 'CHILE'),
(44, 'CHINA'),
(45, 'CHRISTMAS ISLAND'),
(46, 'COCOS (KEELING) ISLANDS'),
(47, 'COLOMBIA'),
(48, 'COMOROS'),
(49, 'CONGO'),
(50, 'CONGO, THE DEMOCRATIC REPUBLIC OF THE'),
(51, 'COOK ISLANDS'),
(52, 'COSTA RICA'),
(53, 'COTE D\'IVOIRE'),
(54, 'CROATIA'),
(55, 'CUBA'),
(56, 'CYPRUS'),
(57, 'CZECH REPUBLIC'),
(58, 'DENMARK'),
(59, 'DJIBOUTI'),
(60, 'DOMINICA'),
(61, 'DOMINICAN REPUBLIC'),
(62, 'ECUADOR'),
(63, 'EGYPT'),
(64, 'EL SALVADOR'),
(65, 'EQUATORIAL GUINEA'),
(66, 'ERITREA'),
(67, 'ESTONIA'),
(68, 'ETHIOPIA'),
(69, 'FALKLAND ISLANDS (MALVINAS)'),
(70, 'FAROE ISLANDS'),
(71, 'FIJI'),
(72, 'FINLAND'),
(73, 'FRANCE'),
(74, 'FRENCH GUIANA'),
(75, 'FRENCH POLYNESIA'),
(76, 'FRENCH SOUTHERN TERRITORIES'),
(77, 'GABON'),
(78, 'GAMBIA'),
(79, 'GEORGIA'),
(80, 'GERMANY'),
(81, 'GHANA'),
(82, 'GIBRALTAR'),
(83, 'GREECE'),
(84, 'GREENLAND'),
(85, 'GRENADA'),
(86, 'GUADELOUPE'),
(87, 'GUAM'),
(88, 'GUATEMALA'),
(89, 'GUINEA'),
(90, 'GUINEA-BISSAU'),
(91, 'GUYANA'),
(92, 'HAITI'),
(93, 'HEARD ISLAND AND MCDONALD ISLANDS'),
(94, 'HOLY SEE (VATICAN CITY STATE)'),
(95, 'HONDURAS'),
(96, 'HONG KONG'),
(97, 'HUNGARY'),
(98, 'ICELAND'),
(99, 'INDIA'),
(100, 'INDONESIA'),
(101, 'IRAN, ISLAMIC REPUBLIC OF'),
(102, 'IRAQ'),
(103, 'IRELAND'),
(104, 'ISRAEL'),
(105, 'ITALY'),
(106, 'JAMAICA'),
(107, 'JAPAN'),
(108, 'JORDAN'),
(109, 'KAZAKHSTAN'),
(110, 'KENYA'),
(111, 'KIRIBATI'),
(112, 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF'),
(113, 'KOREA, REPUBLIC OF'),
(114, 'KUWAIT'),
(115, 'KYRGYZSTAN'),
(116, 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC'),
(117, 'LATVIA'),
(118, 'LEBANON'),
(119, 'LESOTHO'),
(120, 'LIBERIA'),
(121, 'LIBYAN ARAB JAMAHIRIYA'),
(122, 'LIECHTENSTEIN'),
(123, 'LITHUANIA'),
(124, 'LUXEMBOURG'),
(125, 'MACAO'),
(126, 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF'),
(127, 'MADAGASCAR'),
(128, 'MALAWI'),
(129, 'MALAYSIA'),
(130, 'MALDIVES'),
(131, 'MALI'),
(132, 'MALTA'),
(133, 'MARSHALL ISLANDS'),
(134, 'MARTINIQUE'),
(135, 'MAURITANIA'),
(136, 'MAURITIUS'),
(137, 'MAYOTTE'),
(138, 'MEXICO'),
(139, 'MICRONESIA, FEDERATED STATES OF'),
(140, 'MOLDOVA, REPUBLIC OF'),
(141, 'MONACO'),
(142, 'MONGOLIA'),
(143, 'MONTSERRAT'),
(144, 'MOROCCO'),
(145, 'MOZAMBIQUE'),
(146, 'MYANMAR'),
(147, 'NAMIBIA'),
(148, 'NAURU'),
(149, 'NEPAL'),
(150, 'NETHERLANDS'),
(151, 'NETHERLANDS ANTILLES'),
(152, 'NEW CALEDONIA'),
(153, 'NEW ZEALAND'),
(154, 'NICARAGUA'),
(155, 'NIGER'),
(156, 'NIGERIA'),
(157, 'NIUE'),
(158, 'NORFOLK ISLAND'),
(159, 'NORTHERN MARIANA ISLANDS'),
(160, 'NORWAY'),
(161, 'OMAN'),
(162, 'PAKISTAN'),
(163, 'PALAU'),
(164, 'PALESTINIAN TERRITORY, OCCUPIED'),
(165, 'PANAMA'),
(166, 'PAPUA NEW GUINEA'),
(167, 'PARAGUAY'),
(168, 'PERU'),
(169, 'PHILIPPINES'),
(170, 'PITCAIRN'),
(171, 'POLAND'),
(172, 'PORTUGAL'),
(173, 'PUERTO RICO'),
(174, 'QATAR'),
(175, 'REUNION'),
(176, 'ROMANIA'),
(177, 'RUSSIAN FEDERATION'),
(178, 'RWANDA'),
(179, 'SAINT HELENA'),
(180, 'SAINT KITTS AND NEVIS'),
(181, 'SAINT LUCIA'),
(182, 'SAINT PIERRE AND MIQUELON'),
(183, 'SAINT VINCENT AND THE GRENADINES'),
(184, 'SAMOA'),
(185, 'SAN MARINO'),
(186, 'SAO TOME AND PRINCIPE'),
(187, 'SAUDI ARABIA'),
(188, 'SENEGAL'),
(189, 'SERBIA AND MONTENEGRO'),
(190, 'SEYCHELLES'),
(191, 'SIERRA LEONE'),
(192, 'SINGAPORE'),
(193, 'SLOVAKIA'),
(194, 'SLOVENIA'),
(195, 'SOLOMON ISLANDS'),
(196, 'SOMALIA'),
(197, 'SOUTH AFRICA'),
(198, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'),
(199, 'SPAIN'),
(200, 'SRI LANKA'),
(201, 'SUDAN'),
(202, 'SURINAME'),
(203, 'SVALBARD AND JAN MAYEN'),
(204, 'SWAZILAND'),
(205, 'SWEDEN'),
(206, 'SWITZERLAND'),
(207, 'SYRIAN ARAB REPUBLIC'),
(208, 'TAIWAN, PROVINCE OF CHINA'),
(209, 'TAJIKISTAN'),
(210, 'TANZANIA, UNITED REPUBLIC OF'),
(211, 'THAILAND'),
(212, 'TIMOR-LESTE'),
(213, 'TOGO'),
(214, 'TOKELAU'),
(215, 'TONGA'),
(216, 'TRINIDAD AND TOBAGO'),
(217, 'TUNISIA'),
(218, 'TURKEY'),
(219, 'TURKMENISTAN'),
(220, 'TURKS AND CAICOS ISLANDS'),
(221, 'TUVALU'),
(222, 'UGANDA'),
(223, 'UKRAINE'),
(224, 'UNITED ARAB EMIRATES'),
(225, 'UNITED KINGDOM'),
(226, 'UNITED STATES'),
(227, 'UNITED STATES MINOR OUTLYING ISLANDS'),
(228, 'URUGUAY'),
(229, 'UZBEKISTAN'),
(230, 'VANUATU'),
(231, 'VENEZUELA'),
(232, 'VIET NAM'),
(233, 'VIRGIN ISLANDS, BRITISH'),
(234, 'VIRGIN ISLANDS, U.S.'),
(235, 'WALLIS AND FUTUNA'),
(236, 'WESTERN SAHARA'),
(237, 'YEMEN'),
(238, 'ZAMBIA'),
(239, 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Structure de la table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `fikr` int(11) NOT NULL,
  `chemin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `datas`
--

INSERT INTO `datas` (`id`, `titre`, `date`, `fikr`, `chemin`) VALUES
(1, 'Capture d’écran de 2020-10-06 17-17-50.png', '0000-00-00', 1, 23),
(2, 'Capture d’écran de 2020-10-06 17-17-29.png', '0000-00-00', 1, 24),
(3, 'Capture d’écran de 2020-10-06 17-17-50.png', '0000-00-00', 1, 25),
(4, 'Capture d’écran de 2020-10-06 17-17-29.png', '0000-00-00', 1, 26),
(5, 'Capture d’écran de 2020-10-06 17-17-50.png', '0000-00-00', 1, 27),
(6, 'WhatsApp Audio 2020-09-01 at 07.24.52.mp3', '0000-00-00', 2, 29),
(7, 'VID-20191007-WA0006.mp4', '0000-00-00', 2, 30),
(8, '01 FATIHA .mp3', '2020-10-15', 3, 64);

-- --------------------------------------------------------

--
-- Structure de la table `fikrs`
--

CREATE TABLE `fikrs` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `livre` varchar(255) DEFAULT NULL,
  `cfikr` int(11) NOT NULL,
  `auteur` int(11) NOT NULL,
  `ville` int(11) NOT NULL,
  `date_ajout` date NOT NULL,
  `langue` int(11) NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fikrs`
--

INSERT INTO `fikrs` (`id`, `titre`, `livre`, `cfikr`, `auteur`, `ville`, `date_ajout`, `langue`, `photo`) VALUES
(1, 'Tawhidi', 'Ousoul Thalatha', 8, 2, 1, '2020-10-05', 1, 6),
(2, 'yhguyLa Sira', 'Sira des compagnons ', 8, 1, 5, '0000-00-00', 2, 28),
(3, 'Tsarin Aure A Musulunci', NULL, 9, 4, 3, '2020-09-26', 1, 63),
(4, 'Sai Bango ya tsage', NULL, 9, 1, 8, '2020-10-15', 1, 66);

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `file_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `file_name`, `file_url`, `file_type`, `file_size`) VALUES
(1, 'maishago.jpg', 'public/img/2020.10.05.21.04.32maishago.jpg', 'image/jpeg', 210322),
(2, 'maishago.jpg', 'public/img/2020.10.05.21.06.20maishago.jpg', 'image/jpeg', 210322),
(3, 'maishago.jpg', 'public/img/2020.10.05.21.08.10maishago.jpg', 'image/jpeg', 210322),
(4, 'Tijjani.png', 'public/img/2020.10.05.21.46.30Tijjani.png', 'image/png', 408044),
(5, 'iconfinder_06_-_muslim_masjid_pray_1_4357697.svg', 'public/img/2020.10.05.22.04.30iconfinder_06_-_muslim_masjid_pray_1_4357697.svg', 'image/svg+xml', 3200),
(6, 'iconfinder_06_-_muslim_masjid_pray_1_4357697.svg', 'public/img/2020.10.05.22.05.15iconfinder_06_-_muslim_masjid_pray_1_4357697.svg', 'image/svg+xml', 3200),
(7, 'Tijjani.png', 'public/img/2020.10.06.17.04.26Tijjani.png', 'image/png', 408044),
(8, 'Capture d’écran de 2020-10-06 12-08-26.png', 'public/img/2020.10.06.18.04.45Capture d’écran de 2020-10-06 12-08-26.png', 'image/png', 945718),
(9, 'Capture d’écran de 2020-10-06 12-08-26.png', 'public/img/2020.10.06.18.14.55Capture d’écran de 2020-10-06 12-08-26.png', 'image/png', 945718),
(10, 'maishago.jpg', 'public/img/2020.10.06.18.16.12maishago.jpg', 'image/jpeg', 210322),
(11, 'Capture d’écran de 2020-10-06 12-08-26.png', 'public/img/2020.10.06.18.16.53Capture d’écran de 2020-10-06 12-08-26.png', 'image/png', 945718),
(12, 'maishago.jpg', 'public/img/2020.10.06.18.23.40maishago.jpg', 'image/jpeg', 210322),
(13, 'Capture d’écran de 2020-10-06 17-17-50.png', 'public/img/2020.10.06.18.24.22Capture d’écran de 2020-10-06 17-17-50.png', 'image/png', 1673385),
(14, 'Capture d’écran de 2020-10-06 17-17-50.png', 'public/img/2020.10.06.18.29.43Capture d’écran de 2020-10-06 17-17-50.png', 'image/png', 1673385),
(15, 'Capture d’écran de 2020-09-29 14-48-24.png', 'public/img/2020.10.06.18.40.36Array', 'image/png', 1595575),
(16, 'maishago.jpg', 'public/img/2020.10.06.19.01.03maishago.jpg', 'image/jpeg', 210322),
(17, 'Capture d’écran de 2020-10-06 17-17-29.png', 'public/img/2020.10.06.19.01.45Capture d’écran de 2020-10-06 17-17-29.png', 'image/png', 1046886),
(18, 'Capture d’écran de 2020-10-06 17-17-50.png', 'public/img/2020.10.06.19.05.53Capture d’écran de 2020-10-06 17-17-50.png', 'image/png', 1673385),
(19, 'Capture d’écran de 2020-10-06 17-17-50.png', 'public/img/2020.10.06.19.08.23Capture d’écran de 2020-10-06 17-17-50.png', 'image/png', 1673385),
(20, 'Tijjani.png', 'public/img/2020.10.06.19.09.08Tijjani.png', 'image/png', 408044),
(21, 'maishago.jpg', 'public/img/2020.10.06.19.09.08maishago.jpg', 'image/jpeg', 210322),
(22, 'Capture d’écran de 2020-10-05 17-13-08.png', 'public/img/2020.10.06.19.19.16Capture d’écran de 2020-10-05 17-13-08.png', 'image/png', 508151),
(23, 'Capture d’écran de 2020-10-06 17-17-50.png', 'public/img/2020.10.06.19.19.53Capture d’écran de 2020-10-06 17-17-50.png', 'image/png', 1673385),
(24, 'Capture d’écran de 2020-10-06 17-17-29.png', 'public/img/2020.10.06.19.19.53Capture d’écran de 2020-10-06 17-17-29.png', 'image/png', 1046886),
(25, 'Capture d’écran de 2020-10-06 17-17-50.png', 'public/img/2020.10.06.19.21.51Capture d’écran de 2020-10-06 17-17-50.png', 'image/png', 1673385),
(26, 'Capture d’écran de 2020-10-06 17-17-29.png', 'public/img/2020.10.06.19.21.51Capture d’écran de 2020-10-06 17-17-29.png', 'image/png', 1046886),
(27, 'Capture d’écran de 2020-10-06 17-17-50.png', 'public/img/2020.10.06.19.47.24Capture d’écran de 2020-10-06 17-17-50.png', 'image/png', 1673385),
(28, 'maishago.jpg', 'public/img/2020.10.06.21.25.43maishago.jpg', 'image/jpeg', 210322),
(29, 'WhatsApp Audio 2020-09-01 at 07.24.52.mp3', 'public/img/2020.10.06.21.31.27WhatsApp Audio 2020-09-01 at 07.24.52.mp3', 'audio/mpeg', 2316909),
(30, 'VID-20191007-WA0006.mp4', 'public/img/2020.10.06.21.40.24VID-20191007-WA0006.mp4', 'video/mp4', 590070),
(31, 'WhatsApp Image 2020-06-21 at 13.12.38.jpeg', 'public/img/2020.10.07.08.49.26WhatsApp Image 2020-06-21 at 13.12.38.jpeg', 'image/jpeg', 169141),
(32, 'WhatsApp Image 2020-06-21 at 13.12.38.jpeg', 'public/img/2020.10.07.08.49.54WhatsApp Image 2020-06-21 at 13.12.38.jpeg', 'image/jpeg', 169141),
(33, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.11.55.43WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(34, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.30.41WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(35, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.31.45WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(36, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.32.23WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(37, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.33.18WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(38, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.34.30WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(39, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.35.33WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(40, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.36.03WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(41, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.36.37WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(42, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.37.18WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(43, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.38.28WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(44, 'WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'public/img/2020.10.07.12.38.54WhatsApp Image 2020-09-10 at 19.25.17.jpeg', 'image/jpeg', 587344),
(45, 'Tijjani.png', 'public/img/2020.10.07.13.28.50Tijjani.png', 'image/png', 408044),
(46, 'IMG-20200625-WA0033.jpg', 'public/img/2020.10.10.18.26.22IMG-20200625-WA0033.jpg', 'image/jpeg', 48541),
(47, 'IMG-20200625-WA0033.jpg', 'public/img/2020.10.10.18.34.42IMG-20200625-WA0033.jpg', 'image/jpeg', 48541),
(48, 'IMG-20200625-WA0033.jpg', 'public/img/2020.10.10.18.35.37IMG-20200625-WA0033.jpg', 'image/jpeg', 48541),
(49, 'IMG-20200625-WA0033.jpg', 'public/img/2020.10.10.18.39.09IMG-20200625-WA0033.jpg', 'image/jpeg', 48541),
(50, 'IMG-20200625-WA0033.jpg', 'public/img/2020.10.10.20.50.40IMG-20200625-WA0033.jpg', 'image/jpeg', 48541),
(51, 'IMG-20200802-WA0007.jpg', 'public/img/2020.10.10.22.47.17IMG-20200802-WA0007.jpg', 'image/jpeg', 46708),
(52, 'IMG-20200621-WA0059.jpg', 'public/img/2020.10.11.00.40.30IMG-20200621-WA0059.jpg', 'image/jpeg', 31560),
(53, 'Capture d’écran de 2020-10-07 09-48-02.png', 'public/img/2020.10.11.20.05.40Capture d’écran de 2020-10-07 09-48-02.png', 'image/png', 262340),
(54, 'Capture d’écran de 2020-09-26 23-52-18.png', 'public/img/2020.10.13.14.06.26Capture d’écran de 2020-09-26 23-52-18.png', 'image/png', 987294),
(55, 'Capture d’écran de 2020-10-13 15-02-21.png', 'public/img/2020.10.13.16.02.38Capture d’écran de 2020-10-13 15-02-21.png', 'image/png', 880769),
(56, 'Capture d’écran de 2020-10-13 15-02-21.png', 'public/img/2020.10.13.16.04.37Capture d’écran de 2020-10-13 15-02-21.png', 'image/png', 880769),
(57, 'Capture d’écran de 2020-10-13 15-02-21.png', 'public/img/2020.10.13.16.04.57Capture d’écran de 2020-10-13 15-02-21.png', 'image/png', 880769),
(58, 'Capture d’écran de 2020-10-13 15-02-21.png', 'public/img/2020.10.13.16.05.21Capture d’écran de 2020-10-13 15-02-21.png', 'image/png', 880769),
(59, 'Capture d’écran de 2020-10-13 15-02-21.png', 'public/img/2020.10.13.16.06.20Capture d’écran de 2020-10-13 15-02-21.png', 'image/png', 880769),
(60, 'Capture d’écran de 2020-10-13 15-02-21.png', 'public/img/2020.10.13.16.07.43Capture d’écran de 2020-10-13 15-02-21.png', 'image/png', 880769),
(61, 'Capture d’écran de 2020-10-15 09-19-23.png', 'public/img/2020.10.15.10.19.36Capture d’écran de 2020-10-15 09-19-23.png', 'image/png', 529739),
(63, '26 septembre par sindi.jpg', 'public/img/2020.10.15.10.22.4326 septembre par sindi.jpg', 'image/jpeg', 46023),
(64, '01 FATIHA .mp3', 'public/img/2020.10.15.10.27.1301 FATIHA .mp3', 'audio/mpeg', 1343226),
(66, 'Capture d’écran de 2020-08-07 16-47-58.png', 'public/img/2020.10.15.10.33.59Capture d’écran de 2020-08-07 16-47-58.png', 'image/png', 182781);

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`id`, `code`, `titre`) VALUES
(1, 'HS', 'Hausa'),
(2, 'ZR', 'Zarma'),
(3, 'FR', 'Francais'),
(4, 'FL', 'Fulfudé'),
(5, 'Ar', 'Arabe');

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `clivres_id` int(11) NOT NULL,
  `auteur` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `action_url` varchar(100) DEFAULT NULL,
  `sub_module` int(11) DEFAULT NULL,
  `is_menu` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`, `is_menu`) VALUES
(1, 'Administration', NULL, 'le module d\'administration', NULL, NULL, 1),
(5, 'Configuration', 'fa-gears', 'Configuration de l\'application', NULL, NULL, 1),
(8, 'Rôle', NULL, 'Gestion des rôle', 'role', 1, 1),
(9, 'Module', NULL, 'Gestion des modules', 'module', 1, 1),
(10, 'Ajouter utilisateur', NULL, 'permet d\'Ajouter un utilisateur', 'addUser', 1, 1),
(14, 'Liste des utilisateurs', NULL, 'permet  de voir les utilisateur', 'showUser', 1, 1),
(15, 'Types agents', NULL, 'permet d\'ajouter et voirs  les  types d\'agents', 'type', 1, 1),
(27, 'Ville', NULL, 'Gestion des villes', 'ville', 5, 1),
(37, 'Pays', NULL, 'Gestion des pays', 'pays', 5, 1),
(38, 'Permission', 'fa-smile-o', 'donner une permission à un rôle', 'permission', NULL, 0),
(44, 'logout', ' ', 'déconnexion du site', 'logout', NULL, 0),
(47, 'Catégorie annonce', NULL, 'catégories des annonces', 'cannonce', 5, 0),
(48, 'Catégorie actualité', NULL, 'catégories des actualités', 'cactualite', 5, 0),
(49, 'Catégorie livre', NULL, 'catégories des livres', 'clivre', 5, 0),
(50, 'Langue', NULL, 'Gestion des langues', 'langue', 5, 0),
(51, 'Statut', NULL, 'Le statut des oulémas', 'statut', 5, 0),
(52, 'Catégorie fikr', NULL, 'catégories des fikr', 'cfikr', 5, 0),
(53, 'Fikr', 'fa-drivers-license-o', 'Gestion de fikr', NULL, NULL, 1),
(54, 'Auteur', NULL, 'Gestion d\'auteur', 'auteur', 53, 0),
(55, 'Ajouter fikr', NULL, 'ajout fikr', 'ajouter-fikr', 53, 0),
(56, 'Consulter les fikr', NULL, 'listes des fikr', 'consulter-fikr', 53, 0),
(57, 'addData', 'fa-drivers-license-o', 'ajouter des donnée de fikr', 'addData', NULL, 0),
(58, 'sendData', 'fa-drivers-license-o', 'pour uploader des datas', 'sendData', NULL, 0),
(59, 'Données', NULL, 'les données des fikrs', 'donnee', 53, 0),
(60, 'Annonce', 'fa-newspaper-o', 'Gérer les annonces', NULL, NULL, 1),
(61, 'Ajouter annonce', NULL, 'ajout Annonce', 'ajouter-annonce', 60, 0),
(62, 'Consulter', NULL, 'Consulter les annonces', 'consulter-annonce', 60, 0);

-- --------------------------------------------------------

--
-- Structure de la table `module_role`
--

CREATE TABLE `module_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module_role`
--

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(8, 1, 1),
(22, 1, 8),
(23, 1, 9),
(24, 1, 10),
(25, 1, 15),
(26, 1, 5),
(28, 1, 27),
(35, 5, 5),
(36, 5, 27),
(41, 1, 14),
(42, 1, 37),
(43, 1, 38),
(47, 1, 44),
(54, 6, 44),
(55, 1, 47),
(56, 1, 48),
(57, 1, 49),
(58, 1, 50),
(59, 1, 51),
(60, 1, 52),
(61, 1, 53),
(62, 1, 54),
(63, 1, 55),
(64, 1, 56),
(65, 1, 57),
(66, 1, 58),
(67, 1, 59),
(68, 1, 60),
(69, 1, 61),
(70, 1, 62);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `titre`) VALUES
(1, 'Agadez'),
(2, 'Diffa'),
(3, 'Dosso'),
(4, 'Maradi'),
(5, 'Tahaou'),
(6, 'Tillabéri'),
(7, 'Zinder'),
(8, 'Niamey');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Administrateur', 'Il a tout les droits'),
(5, 'Visiteur', 'Le visiteur site'),
(6, 'Entité', 'bfdd');

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE `statuts` (
  `id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `statuts`
--

INSERT INTO `statuts` (`id`, `grade`) VALUES
(1, 'Hafizoullah'),
(2, 'Oustaz'),
(3, 'Malam'),
(4, 'Sheikh'),
(5, 'Ouléma');

-- --------------------------------------------------------

--
-- Structure de la table `type_agent`
--

CREATE TABLE `type_agent` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_agent`
--

INSERT INTO `type_agent` (`id`, `label`) VALUES
(0, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `matricule` varchar(20) DEFAULT NULL,
  `phone_number` varchar(13) NOT NULL,
  `type_agent` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) DEFAULT 0,
  `password_` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `matricule`, `phone_number`, `type_agent`, `created_at`, `updated_at`, `photo`, `role`, `status`, `password_`) VALUES
(8, 'admin', 'Komche', 'AA00', '+22798960382', 0, '2019-08-26 20:05:41', '2020-06-11 11:01:27', 0, 1, 1, '$2y$10$ygiJopuOlQRY0g0R5T3O.O13HB7u6tCBcHDQLPA9fcm4p0/SYT1Bq'),
(10, 'Abdoul Razak', 'Adamou', NULL, '+22792470763', 0, '2020-08-31 08:59:30', '2020-08-31 10:08:16', 143, 6, 1, '$2y$10$/uD8inydV65CZ9DtjjmZSOKII0KG.rGFYABM.mtk4XdMoTJyosfFa');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `titre`, `country`) VALUES
(1, 'Tahoua', 155),
(2, 'Zinder', 155),
(3, 'Niamey', 155),
(4, 'Maradi', 155),
(5, 'Dosso', 155),
(6, 'Tillabery', 155),
(7, 'Agadez', 155),
(8, 'Diffa', 155),
(9, 'Say', 155),
(10, 'Birnin Konni', 155),
(11, 'Keita', 155),
(12, 'Tessaoua', 155);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `photo` (`photo`);

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`cannonce`),
  ADD KEY `photo` (`photo`),
  ADD KEY `users` (`users`);

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statut` (`statut`),
  ADD KEY `region` (`ville`);

--
-- Index pour la table `cactualites`
--
ALTER TABLE `cactualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cannonces`
--
ALTER TABLE `cannonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cfikr`
--
ALTER TABLE `cfikr`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clivres`
--
ALTER TABLE `clivres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fikr` (`fikr`),
  ADD KEY `chemin` (`chemin`);

--
-- Index pour la table `fikrs`
--
ALTER TABLE `fikrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `langue_id` (`langue`),
  ADD KEY `auteur` (`auteur`),
  ADD KEY `ville` (`ville`),
  ADD KEY `photo` (`photo`),
  ADD KEY `cfikr` (`cfikr`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clivres_id` (`clivres_id`),
  ADD KEY `auteur` (`auteur`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `action_url` (`action_url`),
  ADD KEY `sub_module` (`sub_module`);

--
-- Index pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`module`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statuts`
--
ALTER TABLE `statuts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_agent`
--
ALTER TABLE `type_agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_agent` (`type_agent`),
  ADD KEY `role` (`role`),
  ADD KEY `photo` (`photo`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country` (`country`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cactualites`
--
ALTER TABLE `cactualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cannonces`
--
ALTER TABLE `cannonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `cfikr`
--
ALTER TABLE `cfikr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `clivres`
--
ALTER TABLE `clivres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT pour la table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `fikrs`
--
ALTER TABLE `fikrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `module_role`
--
ALTER TABLE `module_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `statuts`
--
ALTER TABLE `statuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `type_agent`
--
ALTER TABLE `type_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD CONSTRAINT `actualites_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `cactualites` (`id`);

--
-- Contraintes pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `annonces_ibfk_1` FOREIGN KEY (`cannonce`) REFERENCES `cannonces` (`id`),
  ADD CONSTRAINT `annonces_ibfk_2` FOREIGN KEY (`users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD CONSTRAINT `auteurs_ibfk_1` FOREIGN KEY (`statut`) REFERENCES `statuts` (`id`),
  ADD CONSTRAINT `auteurs_ibfk_2` FOREIGN KEY (`ville`) REFERENCES `ville` (`id`);

--
-- Contraintes pour la table `datas`
--
ALTER TABLE `datas`
  ADD CONSTRAINT `datas_ibfk_1` FOREIGN KEY (`fikr`) REFERENCES `fikrs` (`id`),
  ADD CONSTRAINT `datas_ibfk_2` FOREIGN KEY (`chemin`) REFERENCES `files` (`id`);

--
-- Contraintes pour la table `fikrs`
--
ALTER TABLE `fikrs`
  ADD CONSTRAINT `fikrs_ibfk_1` FOREIGN KEY (`langue`) REFERENCES `langues` (`id`),
  ADD CONSTRAINT `fikrs_ibfk_2` FOREIGN KEY (`auteur`) REFERENCES `auteurs` (`id`);

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livres_ibfk_1` FOREIGN KEY (`clivres_id`) REFERENCES `clivres` (`id`),
  ADD CONSTRAINT `livres_ibfk_2` FOREIGN KEY (`auteur`) REFERENCES `auteurs` (`id`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`sub_module`) REFERENCES `module` (`id`);

--
-- Contraintes pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD CONSTRAINT `module_role_ibfk_1` FOREIGN KEY (`module`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `module_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type_agent`) REFERENCES `type_agent` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
