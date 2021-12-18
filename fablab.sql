-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 01 août 2018 à 15:34
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fablab`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email_admin` varchar(200) DEFAULT NULL,
  `mdp_admin` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `mdp_admin`) VALUES
(1, 'ADMIN@FABLAB.COM', 'e5a1ccb19b2f344e1e7e4b55df91a6411c19da5b732269f70b999ff3cdae0cbf');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom_contact` varchar(20) DEFAULT NULL,
  `prenom_contact` varchar(20) DEFAULT NULL,
  `email_contact` varchar(100) DEFAULT NULL,
  `profession_contact` varchar(100) DEFAULT NULL,
  `telephone_contact` varchar(100) DEFAULT NULL,
  `message_contact` text,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom_contact`, `prenom_contact`, `email_contact`, `profession_contact`, `telephone_contact`, `message_contact`) VALUES
(1, 'kadri', 'anas', 'anaskadri0@gmail.com', 'kasmdkla', '923482093', ';lamd;flmsd;lc');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `id_cv` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cv` varchar(20) DEFAULT NULL,
  `prenom_cv` varchar(20) DEFAULT NULL,
  `adresse_cv` varchar(100) DEFAULT NULL,
  `email_cv` varchar(100) DEFAULT NULL,
  `telephone_cv` varchar(20) DEFAULT NULL,
  `fonction_cv` varchar(100) DEFAULT NULL,
  `niveau_cv` varchar(50) DEFAULT NULL,
  `experience_cv` varchar(50) DEFAULT NULL,
  `cv_lien` varchar(50) DEFAULT NULL,
  `lettre_lien` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cv`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id_cv`, `nom_cv`, `prenom_cv`, `adresse_cv`, `email_cv`, `telephone_cv`, `fonction_cv`, `niveau_cv`, `experience_cv`, `cv_lien`, `lettre_lien`) VALUES
(1, 'kadri', 'anas', 'kenitra', 'anaskadri0@gmail.com', '837123234', 'idk', '829', '090', '639985.docx', '338135.docx');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `date_event` datetime DEFAULT NULL,
  `titre_event` varchar(20) DEFAULT NULL,
  `lien_event` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `date_event`, `titre_event`, `lien_event`) VALUES
(1, '2020-01-01 12:00:00', 'WEB ', 'Google');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `titre_formation` varchar(50) DEFAULT NULL,
  `description_formation` text,
  `lien_formation` varchar(50) DEFAULT NULL,
  `image_formation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `titre_formation`, `description_formation`, `lien_formation`, `image_formation`) VALUES
(55, 'Kids', 'Un programme de formation amusant, destiné aux enfants de 6 à 14 ans afin d’apprendre progressivement la pensée robotique et connaitre le secret de fonctionnement des robots, passer du rôle des consommateurs passifs aux acteurs actifs de devenir des médiateurs de la pensée robotique.\r\n\r\n', 'https://google.com', '197144.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
CREATE TABLE IF NOT EXISTS `horaire` (
  `id_horaire` int(11) NOT NULL AUTO_INCREMENT,
  `horaire1` varchar(100) DEFAULT NULL,
  `horaire2` varchar(100) DEFAULT NULL,
  `jour1` varchar(100) DEFAULT NULL,
  `jour2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_horaire`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `horaire`
--

INSERT INTO `horaire` (`id_horaire`, `horaire1`, `horaire2`, `jour1`, `jour2`) VALUES
(1, '10:00 - 12:00', '09:00 - 17:00', 'Lundi au jeudi', 'Vendredi - samedi');

-- --------------------------------------------------------

--
-- Structure de la table `logo`
--

DROP TABLE IF EXISTS `logo`;
CREATE TABLE IF NOT EXISTS `logo` (
  `id_logo` int(11) NOT NULL AUTO_INCREMENT,
  `nom_logo` varchar(100) DEFAULT NULL,
  `lien_logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_logo`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logo`
--

INSERT INTO `logo` (`id_logo`, `nom_logo`, `lien_logo`) VALUES
(20, 'hp', '221009.png'),
(18, 'fablab', '322053.png');

-- --------------------------------------------------------

--
-- Structure de la table `mot`
--

DROP TABLE IF EXISTS `mot`;
CREATE TABLE IF NOT EXISTS `mot` (
  `id_mot` int(11) NOT NULL AUTO_INCREMENT,
  `desc_mot` longtext,
  `image_mot` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_mot`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mot`
--

INSERT INTO `mot` (`id_mot`, `desc_mot`, `image_mot`) VALUES
(1, 'FABLAB propose et conçoit des formations inter et intra-entreprises, pour l’acquisition de compétences reconnues par les professionnels. De plus nos formations sont suivies d’un accompagnement pour la mise en pratique rapide des connaissances acquises sur les outils même de leur environnement professionnel. L’entreprise capitalise alors fortement son potentiel humain en lui apportant une valeur ajoutée certaine.\r\nFABLAB propose également des formations métiers permettant l’obtention d’un savoir-faire et de savoir être, et s’attache à accompagner les entreprises dans leurs transformations en développant leur compétitivité et leur croissance durable.\r\nLes intervenants sont tous des professionnels de la formation reconnus. Ils sont sélectionnés par rapport à leur niveau scientifique et technologique, mais aussi par rapport à leur aptitude à savoir transférer des compétences vers les stagiaires formés. Notre large choix d’intervenant est appuyé par notre réseau de partenaires professionnels national et international.\r\nEnfin, de par ses activités d’expertise et d’ingénierie en contrôle industriel, FABLAB est capable d’apporter une solution globale et optimale incluant l’ingénierie de formation, la définition et le choix de la solution technologique support de la formation, les actions de formation, accompagnement pour sa mise en œuvre, et le suivi de l’action, garantissant ainsi un retour sur investissement rapide et mesurable.\r\nChez FABLAB nous nous inscrivons dans votre changement, prenant en compte votre problématique globale, ou sur l’un de ses aspects pour : « l’Optimisation des performances globales de l’entreprise ».\r\n', '481141.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `titre_projet` varchar(50) DEFAULT NULL,
  `description_projet` text,
  PRIMARY KEY (`id_projet`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `titre_projet`, `description_projet`) VALUES
(8, 'projet1', 'projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1projet1pro'),
(9, 'projets2', 'projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2projets2');

-- --------------------------------------------------------

--
-- Structure de la table `recru`
--

DROP TABLE IF EXISTS `recru`;
CREATE TABLE IF NOT EXISTS `recru` (
  `id_recru` int(11) NOT NULL AUTO_INCREMENT,
  `nom_recru` varchar(20) DEFAULT NULL,
  `prenom_recru` varchar(20) DEFAULT NULL,
  `cv_recru` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_recru`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(20) DEFAULT NULL,
  `nom_user` varchar(20) DEFAULT NULL,
  `prenom_user` varchar(20) DEFAULT NULL,
  `profession_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `nom_user`, `prenom_user`, `profession_user`) VALUES
(1, 'kqdri', 'anas', 'anaskadri0@gmail.com', 'peo'),
(2, 'KAdri', 'aanas', 'daklsm', 'ksmald');

-- --------------------------------------------------------

--
-- Structure de la table `workshops`
--

DROP TABLE IF EXISTS `workshops`;
CREATE TABLE IF NOT EXISTS `workshops` (
  `id_workshop` int(11) NOT NULL AUTO_INCREMENT,
  `titre_workshop` varchar(200) DEFAULT NULL,
  `sous_titre_workshop` varchar(200) DEFAULT NULL,
  `offre_workshop` varchar(200) DEFAULT NULL,
  `duree_workshop` varchar(200) DEFAULT NULL,
  `horaire_workshop` varchar(200) DEFAULT NULL,
  `lieu_workshop` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_workshop`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `workshops`
--

INSERT INTO `workshops` (`id_workshop`, `titre_workshop`, `sous_titre_workshop`, `offre_workshop`, `duree_workshop`, `horaire_workshop`, `lieu_workshop`) VALUES
(12, 'Arduino workshops', ' ', 'offert Kit Arduino Uno R3 + USB Câble A-B pour 3 Meilleurs projets ', '2 mois, 8 séances de 3h', 'Samedi : 09h00 à 12h ou 14h30 à 17h30 inclus 30min Pause-café ', 'FabLab Kenitra'),
(13, 'Web ', ' ', 'Formation html / css / javascript', '6 semaines', 'Lundi : 20:00 a 22:00', 'Kenitra, Maroc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
