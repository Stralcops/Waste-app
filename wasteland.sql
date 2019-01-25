-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 25 jan. 2019 à 17:58
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wasteland`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_arme`
--

DROP TABLE IF EXISTS `t_arme`;
CREATE TABLE IF NOT EXISTS `t_arme` (
  `arme_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_arme` int(11) NOT NULL,
  `nom_arme` varchar(300) NOT NULL,
  `bonusdeg_arme` int(11) DEFAULT NULL,
  `bonusdef_arme` int(11) DEFAULT '0',
  `nbde_arme` int(11) DEFAULT '0',
  `typede_arme` int(11) DEFAULT '0',
  `bonusde_arme` int(11) DEFAULT '0',
  `distc_arme` int(11) DEFAULT '0',
  `distl_arme` int(11) DEFAULT '0',
  `distm_arme` int(11) DEFAULT '0',
  `tr_arme` int(11) DEFAULT '0',
  `rar_arme` int(11) DEFAULT '0',
  `cout_arme` int(11) DEFAULT '0',
  `typedeg_arme` int(11) DEFAULT '0',
  PRIMARY KEY (`arme_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_arme`
--

INSERT INTO `t_arme` (`arme_id`, `type_arme`, `nom_arme`, `bonusdeg_arme`, `bonusdef_arme`, `nbde_arme`, `typede_arme`, `bonusde_arme`, `distc_arme`, `distl_arme`, `distm_arme`, `tr_arme`, `rar_arme`, `cout_arme`, `typedeg_arme`) VALUES
(1, 1, 'Arme improvisée', 0, 0, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 'Couteau', 3, 0, 1, 4, 1, 3, 6, 15, 1, 1, 1, 1),
(3, 1, 'Glaive', 2, 1, 1, 4, 1, 0, 0, 0, 0, 4, 4, NULL),
(4, 1, 'Epée Courte', 2, 1, 1, 6, 1, 0, 0, 0, 0, 4, 4, 1),
(5, 1, 'Epée', 2, 1, 1, 6, 1, 0, 0, 0, 0, 5, 5, 0),
(6, 1, 'Epée en Acier', 2, 1, 1, 8, 2, 0, 0, 0, 0, 8, 10, 0),
(7, 1, 'Rapière', 3, 1, 1, 8, 1, 0, 0, 0, 0, 7, 15, 1),
(8, 1, 'Hache à une Main', 2, 0, 1, 6, 1, 5, 10, 15, 1, 2, 3, 1),
(9, 1, 'Fléau d\'Arme', 0, 0, 1, 10, 1, 0, 0, 0, 0, 7, 7, 0),
(10, 1, 'Lance', 2, 0, 1, 8, 0, 10, 25, 50, 1, 5, 5, 1),
(11, 1, 'Masse d\'Arme', 2, 0, 1, 6, 2, 0, 0, 0, 0, 5, 7, 1),
(12, 1, 'Gourdin', 2, 0, 1, 6, 0, 0, 0, 0, 0, 0, 5, 0),
(13, 1, 'Fouet ', 0, 0, 1, 4, 1, 3, 0, 0, 0, 4, 4, 0),
(14, 2, 'Fourche de paysan', 0, 0, 1, 6, 0, 0, 0, 0, 0, 1, 1, 0),
(15, 2, 'Faux de Paysan', 0, 0, 1, 6, 0, 0, 0, 0, 0, 1, 1, 0),
(16, 2, 'Epée Arthurienne', 2, 0, 2, 6, 0, 0, 0, 0, 0, 8, 18, 1),
(17, 2, 'Harche Nordaine', 2, 0, 2, 6, 0, 0, 0, 0, 0, 7, 15, 1),
(18, 2, 'Fléau Lourd', 2, 0, 10, 3, 0, 0, 0, 0, 0, 7, 15, 1),
(19, 2, 'Masse d\'Arme Lourde', 2, 0, 1, 10, 1, 0, 0, 0, 0, 7, 15, 1),
(20, 2, 'Fendoir Hallebarde', 2, 1, 2, 6, 0, 0, 0, 0, 0, 8, 10, 1),
(21, 2, 'Vouge ', 1, 1, 1, 10, 1, 0, 0, 0, 0, 5, 7, 1),
(22, 2, 'Esponton', 1, 1, 1, 10, 1, 0, 0, 0, 0, 5, 7, 1),
(23, 2, 'Epée Arthurienne', 2, 0, 2, 6, NULL, NULL, NULL, NULL, NULL, 8, 18, 1),
(24, 2, 'Harche Nordaine', 2, 0, 2, 6, NULL, NULL, NULL, NULL, NULL, 7, 15, 1),
(25, 2, 'Fléau Lourd', 2, 0, 10, 3, NULL, NULL, NULL, NULL, NULL, 7, 15, 1),
(26, 2, 'Masse d\'Arme Lourde', 2, 0, 1, 10, 1, NULL, NULL, NULL, NULL, 7, 15, 1),
(27, 2, 'Fendoir Hallebarde', 2, 1, 2, 6, NULL, NULL, NULL, NULL, NULL, 8, 10, 1),
(28, 2, 'Vouge ', 1, 1, 1, 10, 1, NULL, NULL, NULL, NULL, 5, 7, 1),
(29, 2, 'Esponton', 1, 1, 1, 10, 1, NULL, NULL, NULL, NULL, 5, 7, 1),
(30, 2, 'Bâton de Marche', 1, 2, 1, 8, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(31, 3, 'Javeline', 1, NULL, 1, 6, 1, 25, 50, 75, 1, 3, 5, 1),
(32, 3, 'Arbalète de poing', 2, NULL, 1, 8, NULL, 10, 25, 50, 2, 6, 5, 1),
(33, 3, 'Pistol\' à mèche', 0, NULL, 1, 10, NULL, 10, 20, 30, 5, 8, 30, 1),
(34, 3, 'Pistol\' à Silex', 0, 1, 10, NULL, NULL, 10, 20, 30, 4, 9, 35, 1),
(35, 3, 'Pistol\' à Cartouche', 1, NULL, 1, 10, NULL, 10, 20, 30, 3, 10, 40, 1),
(36, 3, 'Bombe à Mèche', 1, NULL, 2, 6, NULL, 3, 6, 15, 1, 9, 12, 1),
(37, 4, 'Arc Court', 2, NULL, 1, 6, 1, 25, 50, 75, 1, 4, 3, 1),
(39, 4, 'Arc d\'Artiflex', 1, NULL, 1, 8, NULL, 30, 60, 125, 2, 8, 20, 1),
(40, 4, 'Arc Long', 0, NULL, 1, 10, 1, 30, 50, 100, 1, 6, 7, 1),
(41, 4, 'Arbalète à Cric', 1, NULL, 2, 6, NULL, 25, 50, 75, 3, 7, 10, 1),
(42, 4, 'Rifl\' à Mèche ', 0, 1, 10, NULL, NULL, 10, 25, 50, 5, 8, 35, 1),
(43, 4, 'Rifl\' à Silex', 1, NULL, 1, 10, NULL, 10, 25, 50, 3, 10, 60, 1),
(44, 4, 'Rifl\' à Cartouche', 2, NULL, 1, 10, 1, 10, 25, 50, 3, 10, 60, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_arme_user`
--

DROP TABLE IF EXISTS `t_arme_user`;
CREATE TABLE IF NOT EXISTS `t_arme_user` (
  `id_arme_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `arme_id` int(11) NOT NULL,
  PRIMARY KEY (`id_arme_user`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_arme_user`
--

INSERT INTO `t_arme_user` (`id_arme_user`, `user_id`, `arme_id`) VALUES
(1, 27, 6),
(3, 27, 12),
(21, 27, 1),
(5, 31, 2),
(6, 29, 8),
(7, 29, 5),
(8, 29, 5),
(9, 29, 2),
(10, 8, 2),
(11, 32, 6),
(12, 32, 2),
(13, 32, 8),
(14, 32, 12),
(15, 27, 40),
(17, 27, 41),
(18, 27, 16);

-- --------------------------------------------------------

--
-- Structure de la table `t_armure`
--

DROP TABLE IF EXISTS `t_armure`;
CREATE TABLE IF NOT EXISTS `t_armure` (
  `armure_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_armure` varchar(300) NOT NULL,
  `protec_armure` int(11) NOT NULL,
  `rar_armure` int(11) NOT NULL,
  `cout_armure` int(11) NOT NULL,
  `cdef_armure` int(11) DEFAULT NULL,
  `nbrdedegat_armure` int(11) DEFAULT NULL,
  `typedeg_armure` int(11) NOT NULL,
  `typededegat_armure` int(11) NOT NULL,
  PRIMARY KEY (`armure_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_armure`
--

INSERT INTO `t_armure` (`armure_id`, `nom_armure`, `protec_armure`, `rar_armure`, `cout_armure`, `cdef_armure`, `nbrdedegat_armure`, `typedeg_armure`, `typededegat_armure`) VALUES
(1, 'Tenue Rembourée', 1, 2, 1, NULL, NULL, 0, 0),
(2, 'Cuir Souple', 1, 2, 1, NULL, NULL, 0, 0),
(3, 'Tenue rembourée', 1, 2, 1, NULL, NULL, 0, 0),
(4, 'Cuir souple', 1, 2, 1, NULL, NULL, 0, 0),
(5, 'Fourrures', 1, 2, 1, NULL, NULL, 0, 0),
(6, 'Cuir bouilli', 2, 5, 5, NULL, NULL, 0, 0),
(7, 'Cuir clouté', 2, 5, 5, NULL, NULL, 0, 0),
(8, 'Broigne', 3, 7, 15, NULL, NULL, 0, 0),
(9, 'Cotte de maille', 3, 7, 15, NULL, NULL, 0, 0),
(10, 'Cuirrasse', 4, 8, 20, NULL, NULL, 0, 0),
(11, 'Armure de demi-plaques ', 4, 8, 20, NULL, NULL, 0, 0),
(12, 'Armure de plates', 5, 10, 50, NULL, NULL, 0, 0),
(13, 'Harnois', 5, 10, 50, NULL, NULL, 0, 0),
(14, 'Cuir souple', 1, 2, 1, NULL, NULL, 0, 0),
(15, 'Fourrures', 1, 2, 1, NULL, NULL, 0, 0),
(16, 'Cuir bouilli', 2, 5, 5, NULL, NULL, 0, 0),
(17, 'Cuir clouté', 2, 5, 5, NULL, NULL, 0, 0),
(18, 'Broigne', 3, 7, 15, NULL, NULL, 0, 0),
(19, 'Cotte de maille', 3, 7, 15, NULL, NULL, 0, 0),
(20, 'Cuirrasse', 4, 8, 20, NULL, NULL, 0, 0),
(21, 'Armure de demi-plaques ', 4, 8, 20, NULL, NULL, 0, 0),
(22, 'Armure de plates', 5, 10, 50, NULL, NULL, 0, 0),
(23, 'Harnois', 5, 10, 50, NULL, NULL, 0, 0),
(24, 'Cuir souple', 1, 2, 1, NULL, NULL, 0, 0),
(25, 'Fourrures', 1, 2, 1, NULL, NULL, 0, 0),
(26, 'Cuir bouilli', 2, 5, 5, NULL, NULL, 0, 0),
(27, 'Cuir clouté', 2, 5, 5, NULL, NULL, 0, 0),
(28, 'Broigne', 3, 7, 15, NULL, NULL, 0, 0),
(29, 'Cotte de maille', 3, 7, 15, NULL, NULL, 0, 0),
(30, 'Cuirrasse', 4, 8, 20, NULL, NULL, 0, 0),
(31, 'Armure de demi-plaques ', 4, 8, 20, NULL, NULL, 0, 0),
(32, 'Armure de plates', 5, 10, 50, NULL, NULL, 0, 0),
(33, 'Harnois', 5, 10, 50, NULL, NULL, 0, 0),
(35, 'Rondache', 0, 4, 2, 1, 1, 4, 0),
(36, 'Bouclier haïsrandher', 0, 5, 2, 2, 1, 6, 0),
(37, 'Ecu ', 0, 9, 10, 3, 1, 6, 0),
(38, 'Ecu', 3, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_armure_user`
--

DROP TABLE IF EXISTS `t_armure_user`;
CREATE TABLE IF NOT EXISTS `t_armure_user` (
  `id_armure_user` int(11) NOT NULL AUTO_INCREMENT,
  `armure_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_armure_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_armure_user`
--

INSERT INTO `t_armure_user` (`id_armure_user`, `armure_id`, `user_id`) VALUES
(1, 38, 32),
(2, 4, 27);

-- --------------------------------------------------------

--
-- Structure de la table `t_mob`
--

DROP TABLE IF EXISTS `t_mob`;
CREATE TABLE IF NOT EXISTS `t_mob` (
  `mob_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_mob` varchar(60) NOT NULL,
  `hp_mob` int(11) NOT NULL,
  `chp_mob` int(11) NOT NULL,
  `psy_mob` int(11) NOT NULL,
  `cpsy_mob` int(11) NOT NULL,
  `adr_mob` int(11) NOT NULL,
  `cla_mob` int(11) NOT NULL,
  `pre_mob` int(11) NOT NULL,
  `pui_mob` int(11) NOT NULL,
  `tre_mob` int(11) NOT NULL,
  `melee_mob` int(11) NOT NULL,
  `mouv_mob` int(11) NOT NULL,
  `perc_mob` int(11) NOT NULL,
  `coer_mob` int(11) NOT NULL,
  `survie_mob` int(11) NOT NULL,
  `vitesse_mob` int(11) NOT NULL,
  `init_mob` int(11) NOT NULL,
  `cap_off_mob` int(11) NOT NULL,
  `def_mob` int(11) NOT NULL,
  `attaque_mob` text NOT NULL,
  PRIMARY KEY (`mob_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_mob`
--

INSERT INTO `t_mob` (`mob_id`, `nom_mob`, `hp_mob`, `chp_mob`, `psy_mob`, `cpsy_mob`, `adr_mob`, `cla_mob`, `pre_mob`, `pui_mob`, `tre_mob`, `melee_mob`, `mouv_mob`, `perc_mob`, `coer_mob`, `survie_mob`, `vitesse_mob`, `init_mob`, `cap_off_mob`, `def_mob`, `attaque_mob`) VALUES
(18, 'Décapode ', 12, 12, 0, 0, 2, 3, 2, 6, 4, 4, 2, 3, 0, 0, 6, 0, 10, 13, 'Pinces: 1d4+3 et injection à la victime d\'un venin de virulence 10 .\r\nEffet létal : -1 hp par tour. Si hp <  9: : Vommissement (-2 malus). Si hp < 4 (-5 malus) + cloué à terre. CF page 157 livre base.'),
(23, 'Loup', 35, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(24, 'Quantrill', 27, 27, 21, 21, 4, 3, 3, 6, 5, 5, 3, 2, 7, 3, 5, 0, 13, 16, 'Épée :  1d8+4.\r\n\r\nplus d\'info page 95 du Chemin des cendres.'),
(25, 'Mercenaire', 23, 23, 19, 19, 4, 3, 2, 5, 4, 5, 2, 3, 2, 2, 5, 0, 12, 17, 'Épée : 1d6+3 ');

-- --------------------------------------------------------

--
-- Structure de la table `t_pj`
--

DROP TABLE IF EXISTS `t_pj`;
CREATE TABLE IF NOT EXISTS `t_pj` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `joueur_user` varchar(60) DEFAULT NULL,
  `nom_user` varchar(60) DEFAULT NULL,
  `peuple_user` varchar(60) DEFAULT NULL,
  `sexe_user` varchar(60) DEFAULT NULL,
  `origine_user` varchar(60) DEFAULT NULL,
  `metier_user` varchar(60) DEFAULT NULL,
  `heritage_user` varchar(60) DEFAULT NULL,
  `ba_user` int(11) NOT NULL DEFAULT '0',
  `cba_user` int(11) NOT NULL DEFAULT '0',
  `eclat_user` int(11) NOT NULL DEFAULT '0',
  `exp_user` int(11) NOT NULL DEFAULT '0',
  `hp_user` int(11) NOT NULL DEFAULT '0',
  `chp_user` int(11) NOT NULL DEFAULT '0',
  `chpnl_user` int(11) NOT NULL DEFAULT '0',
  `psy_user` int(11) NOT NULL DEFAULT '0',
  `cpsy_user` int(11) NOT NULL DEFAULT '0',
  `adr_user` int(11) NOT NULL DEFAULT '0',
  `armure_user` int(11) NOT NULL DEFAULT '0',
  `pui_user` int(11) NOT NULL DEFAULT '0',
  `cla_user` int(11) NOT NULL DEFAULT '0',
  `pre_user` int(11) NOT NULL DEFAULT '0',
  `tre_user` int(11) NOT NULL DEFAULT '0',
  `armesdis_user` int(11) NOT NULL DEFAULT '0',
  `coer_user` int(11) NOT NULL DEFAULT '0',
  `com_user` int(11) NOT NULL DEFAULT '0',
  `dis_user` int(11) NOT NULL DEFAULT '0',
  `filou_user` int(11) NOT NULL DEFAULT '0',
  `melee_user` int(11) NOT NULL DEFAULT '0',
  `monte_user` int(11) NOT NULL DEFAULT '0',
  `mouv_user` int(11) NOT NULL DEFAULT '0',
  `nage_user` int(11) NOT NULL DEFAULT '0',
  `navig_user` int(11) NOT NULL DEFAULT '0',
  `perc_user` int(11) NOT NULL DEFAULT '0',
  `persu_user` int(11) NOT NULL DEFAULT '0',
  `soin_user` int(11) NOT NULL DEFAULT '0',
  `survie_user` int(11) NOT NULL DEFAULT '0',
  `bonus_degats_user` int(11) NOT NULL DEFAULT '0',
  `bonus_vitesse_user` int(11) NOT NULL DEFAULT '0',
  `cap_user` text,
  `photo_pj` text,
  `posX_user` float DEFAULT NULL,
  `posY_user` float DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_pj`
--

INSERT INTO `t_pj` (`user_id`, `joueur_user`, `nom_user`, `peuple_user`, `sexe_user`, `origine_user`, `metier_user`, `heritage_user`, `ba_user`, `cba_user`, `eclat_user`, `exp_user`, `hp_user`, `chp_user`, `chpnl_user`, `psy_user`, `cpsy_user`, `adr_user`, `armure_user`, `pui_user`, `cla_user`, `pre_user`, `tre_user`, `armesdis_user`, `coer_user`, `com_user`, `dis_user`, `filou_user`, `melee_user`, `monte_user`, `mouv_user`, `nage_user`, `navig_user`, `perc_user`, `persu_user`, `soin_user`, `survie_user`, `bonus_degats_user`, `bonus_vitesse_user`, `cap_user`, `photo_pj`, `posX_user`, `posY_user`) VALUES
(27, 'Gwendoline', 'Hilda', 'Humain', 'Femme', 'Estbourn', 'Scondrel', 'Mutant', 4, 4, 1, 12, 33, 31, 47, 31, 33, 9, 6, 10, 9, 8, 4, 1, 6, 1, 3, 1, 5, 1, 0, 1, 3, 2, 1, 1, 1, 4, 2, '', NULL, 321.875, 570),
(31, 'Pierre', 'Raphaël ', 'Humain', 'Homme', 'Plymounth', 'Fureteur', 'Commun', 7, 7, 3, 0, 21, 21, 21, 25, 25, 8, 0, 3, 5, 4, 5, 6, 0, 1, 2, 0, 0, 1, 0, 1, 0, 1, 1, 0, 1, -1, 1, '', NULL, NULL, NULL),
(29, 'Nicolas', 'Alwyn Fersombre', 'Humain', 'Homme', 'London', 'Juste errance', 'Colosse', 4, 4, 3, 6, 35, 29, 29, 29, 25, 3, 0, 8, 5, 5, 7, 0, 1, 2, 1, 0, 3, 2, 0, 1, 1, 3, 3, 1, 2, 3, -1, 'Bonus BA doublé si acte sacrificiel ', NULL, NULL, NULL),
(30, 'Jean', 'Maelwynn', 'Humain', 'Femme', 'London', 'Saltimbanque', 'Bonne étoile', 4, 4, 0, 0, 29, 27, 27, 27, 25, 4, 0, 6, 5, 8, 6, 0, 2, 2, 1, 1, 4, 1, 0, 1, 1, 2, 4, 2, 1, 2, 0, 'Bonus de Bonne aventure doublé pendant les representations', NULL, NULL, NULL),
(32, 'Matthieu', 'Xac\'thu Cuauhma', 'Scrounger', 'Mâle', 'Laval', 'Soldat de fortune', 'Fée', 4, 4, 1, 0, 33, 31, 31, 29, 27, 4, 0, 5, 3, 3, 9, 1, 1, 1, 1, 1, 5, 1, 0, 1, 1, 2, -1, 1, 1, 1, 0, '1 BA = -1 pts de dégâts subit\n1 BA = Prend  les dégâts a la place de quelqu\'un ', NULL, NULL, NULL),
(33, 'Arthur', 'Arthur', 'Kobolds', 'Mâle', 'Gernais', 'Scondrel', 'Voyageur', 6, 6, 3, 0, 23, 0, 0, 25, 0, 8, 0, 4, 5, 5, 5, 2, 2, 2, 4, 2, 1, 1, 0, 0, 1, 1, 2, 1, 1, 0, 1, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_pnj`
--

DROP TABLE IF EXISTS `t_pnj`;
CREATE TABLE IF NOT EXISTS `t_pnj` (
  `id_pnj` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pnj` varchar(50) NOT NULL,
  `desc_pnj` text NOT NULL,
  `page_pnj` int(11) NOT NULL,
  `livre_pnj` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pnj`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_pnj`
--

INSERT INTO `t_pnj` (`id_pnj`, `nom_pnj`, `desc_pnj`, `page_pnj`, `livre_pnj`) VALUES
(1, 'Gassac de Lambrefeux', 'Surnommé \"Le faible\", il est le compte de Lambrefeux. Il a 28 ans, et à le visage disgracieux. Malgré tout, il est un excellent négociateur et poursuit la tradition d\'accueil des voyageurs.', 236, 'de base');

-- --------------------------------------------------------

--
-- Structure de la table `t_resume`
--

DROP TABLE IF EXISTS `t_resume`;
CREATE TABLE IF NOT EXISTS `t_resume` (
  `resume_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_resume` varchar(60) NOT NULL,
  `text_resume` text NOT NULL,
  `date_resume` timestamp NOT NULL,
  PRIMARY KEY (`resume_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_resume`
--

INSERT INTO `t_resume` (`resume_id`, `nom_resume`, `text_resume`, `date_resume`) VALUES
(1, 'L\'hiver approche', 'Alors que l\'hiver approche, les PJ se sont vus embarqué dans une mission consistant à  abattre un mega compromettant la survie des villageois. En arrivant sur les lieux du MEGA, les Pjs se sont retrouvés face à un chalutier de l\'hier, ils sont donc rentrés pour trouver des traces d\'éventuels survivants...', '2018-12-19 23:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
