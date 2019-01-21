-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 20 Janvier 2019 à 23:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `wasteland`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_arme`
--

CREATE TABLE IF NOT EXISTS `t_arme` (
  `arme_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_arme` int(11) NOT NULL,
  `nom_arme` varchar(300) NOT NULL,
  `bonusdeg_arme` int(11) DEFAULT NULL,
  `bonusdef_arme` int(11) DEFAULT NULL,
  `nbde_arme` int(11) DEFAULT NULL,
  `typede_arme` int(11) DEFAULT NULL,
  `bonusde_arme` int(11) DEFAULT NULL,
  `distc_arme` int(11) DEFAULT NULL,
  `distl_arme` int(11) DEFAULT NULL,
  `distm_arme` int(11) DEFAULT NULL,
  `tr_arme` int(11) DEFAULT NULL,
  `rar_arme` int(11) DEFAULT NULL,
  `cout_arme` int(11) DEFAULT NULL,
  `typedeg_arme` int(11) DEFAULT NULL,
  PRIMARY KEY (`arme_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `t_arme`
--

INSERT INTO `t_arme` (`arme_id`, `type_arme`, `nom_arme`, `bonusdeg_arme`, `bonusdef_arme`, `nbde_arme`, `typede_arme`, `bonusde_arme`, `distc_arme`, `distl_arme`, `distm_arme`, `tr_arme`, `rar_arme`, `cout_arme`, `typedeg_arme`) VALUES
(1, 1, 'Arme improvisée', NULL, NULL, 1, 6, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(2, 1, 'Couteau', 3, NULL, 1, 4, 1, 3, 6, 15, 1, 1, 1, 1),
(3, 1, 'Glaive', 2, 1, 1, 4, 1, NULL, NULL, NULL, NULL, 4, 4, NULL),
(4, 1, 'Epée Courte', 2, 1, 1, 6, 1, NULL, NULL, NULL, NULL, 4, 4, 1),
(5, 1, 'Epée', 2, 1, 1, 6, 1, NULL, NULL, NULL, NULL, 5, 5, NULL),
(6, 1, 'Epée en Acier', 2, 1, 1, 8, 2, NULL, NULL, NULL, NULL, 8, 10, NULL),
(7, 1, 'Rapière', 3, 1, 1, 8, 1, NULL, NULL, NULL, NULL, 7, 15, 1),
(8, 1, 'Hache à une Main', 2, 0, 1, 6, 1, 5, 10, 15, 1, 2, 3, 1),
(9, 1, 'Fléau d''Arme', 0, 0, 1, 10, 1, NULL, NULL, NULL, NULL, 7, 7, NULL),
(10, 1, 'Lance', 2, 0, 1, 8, NULL, 10, 25, 50, 1, 5, 5, 1),
(11, 1, 'Masse d''Arme', 2, 0, 1, 6, 2, NULL, NULL, NULL, NULL, 5, 7, 1),
(12, 1, 'Gourdin', 2, 0, 1, 6, NULL, NULL, NULL, NULL, NULL, 0, 5, 0),
(13, 1, 'Fouet ', 0, 0, 1, 4, 1, 3, NULL, NULL, NULL, 4, 4, 0),
(14, 2, 'Fourche de paysan', 0, 0, 1, 6, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(15, 2, 'Faux de Paysan', 0, 0, 1, 6, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(16, 2, 'Epée Arthurienne', 2, 0, 2, 6, NULL, NULL, NULL, NULL, NULL, 8, 18, 1),
(17, 2, 'Harche Nordaine', 2, 0, 2, 6, NULL, NULL, NULL, NULL, NULL, 7, 15, 1),
(18, 2, 'Fléau Lourd', 2, 0, 10, 3, NULL, NULL, NULL, NULL, NULL, 7, 15, 1),
(19, 2, 'Masse d''Arme Lourde', 2, 0, 1, 10, 1, NULL, NULL, NULL, NULL, 7, 15, 1),
(20, 2, 'Fendoir Hallebarde', 2, 1, 2, 6, NULL, NULL, NULL, NULL, NULL, 8, 10, 1),
(21, 2, 'Vouge ', 1, 1, 1, 10, 1, NULL, NULL, NULL, NULL, 5, 7, 1),
(22, 2, 'Esponton', 1, 1, 1, 10, 1, NULL, NULL, NULL, NULL, 5, 7, 1),
(23, 2, 'Epée Arthurienne', 2, 0, 2, 6, NULL, NULL, NULL, NULL, NULL, 8, 18, 1),
(24, 2, 'Harche Nordaine', 2, 0, 2, 6, NULL, NULL, NULL, NULL, NULL, 7, 15, 1),
(25, 2, 'Fléau Lourd', 2, 0, 10, 3, NULL, NULL, NULL, NULL, NULL, 7, 15, 1),
(26, 2, 'Masse d''Arme Lourde', 2, 0, 1, 10, 1, NULL, NULL, NULL, NULL, 7, 15, 1),
(27, 2, 'Fendoir Hallebarde', 2, 1, 2, 6, NULL, NULL, NULL, NULL, NULL, 8, 10, 1),
(28, 2, 'Vouge ', 1, 1, 1, 10, 1, NULL, NULL, NULL, NULL, 5, 7, 1),
(29, 2, 'Esponton', 1, 1, 1, 10, 1, NULL, NULL, NULL, NULL, 5, 7, 1),
(30, 2, 'Bâton de Marche', 1, 2, 1, 8, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(31, 3, 'Javeline', 1, NULL, 1, 6, 1, 25, 50, 75, 1, 3, 5, 1),
(32, 3, 'Arbalète de poing', 2, NULL, 1, 8, NULL, 10, 25, 50, 2, 6, 5, 1),
(33, 3, 'Pistol'' à mèche', 0, NULL, 1, 10, NULL, 10, 20, 30, 5, 8, 30, 1),
(34, 3, 'Pistol'' à Silex', 0, 1, 10, NULL, NULL, 10, 20, 30, 4, 9, 35, 1),
(35, 3, 'Pistol'' à Cartouche', 1, NULL, 1, 10, NULL, 10, 20, 30, 3, 10, 40, 1),
(36, 3, 'Bombe à Mèche', 1, NULL, 2, 6, NULL, 3, 6, 15, 1, 9, 12, 1),
(37, 4, 'Arc Court', 2, NULL, 1, 6, 1, 25, 50, 75, 1, 4, 3, 1),
(39, 4, 'Arc d''Artiflex', 1, NULL, 1, 8, NULL, 30, 60, 125, 2, 8, 20, 1),
(40, 4, 'Arc Long', 0, NULL, 1, 10, 1, 30, 50, 100, 1, 6, 7, 1),
(41, 4, 'Arbalète à Cric', 1, NULL, 2, 6, NULL, 25, 50, 75, 3, 7, 10, 1),
(42, 4, 'Rifl'' à Mèche ', 0, 1, 10, NULL, NULL, 10, 25, 50, 5, 8, 35, 1),
(43, 4, 'Rifl'' à Silex', 1, NULL, 1, 10, NULL, 10, 25, 50, 3, 10, 60, 1),
(44, 4, 'Rifl'' à Cartouche', 2, NULL, 1, 10, 1, 10, 25, 50, 3, 10, 60, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_armure`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `t_armure`
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
(37, 'Ecu ', 0, 9, 10, 3, 1, 6, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_mob`
--

CREATE TABLE IF NOT EXISTS `t_mob` (
  `mob_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_mob` varchar(60) NOT NULL,
  `hp_mob` int(11) NOT NULL,
  `chp_mob` int(11) NOT NULL,
  `psy_mob` int(11) NOT NULL,
  `cpsy_mob` int(11) NOT NULL,
  PRIMARY KEY (`mob_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `t_mob`
--

INSERT INTO `t_mob` (`mob_id`, `nom_mob`, `hp_mob`, `chp_mob`, `psy_mob`, `cpsy_mob`) VALUES
(13, 'decapode ', 12, 0, 0, 0),
(14, 'decapode ', 12, 0, 0, 0),
(12, 'decapode ', 12, 0, 0, 0),
(11, 'decapode ', 12, 0, 0, 0),
(15, 'decapode ', 12, 0, 0, 0),
(16, 'decapode ', 12, 0, 0, 0),
(17, 'decapode ', 12, 0, 0, 0),
(18, 'decapode ', 12, 0, 0, 0),
(23, 'Loup', 35, 0, 12, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_pj`
--

CREATE TABLE IF NOT EXISTS `t_pj` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `joueur_user` varchar(60) NOT NULL,
  `nom_user` varchar(60) NOT NULL,
  `hp_user` int(11) NOT NULL,
  `chp_user` int(11) NOT NULL,
  `psy_user` int(11) NOT NULL,
  `cpsy_user` int(11) NOT NULL,
  `adr_user` int(11) NOT NULL,
  `armure_user` int(11) NOT NULL,
  `pui_user` int(11) NOT NULL,
  `cla_user` int(11) NOT NULL,
  `pre_user` int(11) NOT NULL,
  `tre_user` int(11) NOT NULL,
  `armesdis_user` int(11) NOT NULL,
  `coer_user` int(11) NOT NULL,
  `com_user` int(11) NOT NULL,
  `dis_user` int(11) NOT NULL,
  `filou_user` int(11) NOT NULL,
  `melee_user` int(11) NOT NULL,
  `monte_user` int(11) NOT NULL,
  `mouv_user` int(11) NOT NULL,
  `nage_user` int(11) NOT NULL,
  `navig_user` int(11) NOT NULL,
  `perc_user` int(11) NOT NULL,
  `persu_user` int(11) NOT NULL,
  `soin_user` int(11) NOT NULL,
  `survie_user` int(11) NOT NULL,
  `bonus_degats_user` int(11) NOT NULL,
  `photo_pj` text NOT NULL,
  `posX_user` float DEFAULT NULL,
  `posY_user` float DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `t_pj`
--

INSERT INTO `t_pj` (`user_id`, `joueur_user`, `nom_user`, `hp_user`, `chp_user`, `psy_user`, `cpsy_user`, `adr_user`, `armure_user`, `pui_user`, `cla_user`, `pre_user`, `tre_user`, `armesdis_user`, `coer_user`, `com_user`, `dis_user`, `filou_user`, `melee_user`, `monte_user`, `mouv_user`, `nage_user`, `navig_user`, `perc_user`, `persu_user`, `soin_user`, `survie_user`, `bonus_degats_user`, `photo_pj`, `posX_user`, `posY_user`) VALUES
(27, 'Gwendoline', 'Hilda', 33, 31, 33, 33, 5, 6, 7, 5, 8, 8, 1, 2, 1, 3, 1, 4, 1, 1, 1, 3, 2, 1, 1, 1, 2, 'https://cdnb.artstation.com/p/assets/images/images/001/577/821/large/si-woo-kim-thief-girl.jpg?1448906257', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_resume`
--

CREATE TABLE IF NOT EXISTS `t_resume` (
  `resume_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_resume` varchar(60) NOT NULL,
  `text_resume` text NOT NULL,
  `date_resume` timestamp NOT NULL,
  PRIMARY KEY (`resume_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `t_resume`
--

INSERT INTO `t_resume` (`resume_id`, `nom_resume`, `text_resume`, `date_resume`) VALUES
(1, 'L''hiver approche', 'Alors que l''hiver approche, les PJ se sont vus embarqué dans une mission consistant à  abattre un mega compromettant la survie des villageois. En arrivant sur les lieux du MEGA, les Pjs se sont retrouvés face à un chalutier de l''hier, ils sont donc rentrés pour trouver des traces d''éventuels survivants...', '2018-12-19 23:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
