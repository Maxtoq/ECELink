-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2018 at 08:27 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecelink`
--

-- --------------------------------------------------------

--
-- Table structure for table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `nom` varchar(255) NOT NULL COMMENT 'nom',
  `prenom` varchar(255) NOT NULL COMMENT 'prenom',
  `mail` varchar(255) NOT NULL COMMENT 'adresse e-mail',
  `pseudo` varchar(20) NOT NULL COMMENT 'pseudo',
  `mdp` varchar(20) NOT NULL COMMENT 'mot de passe',
  `descr` text NOT NULL COMMENT 'description',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`,`pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `prenom`, `mail`, `pseudo`, `mdp`, `descr`, `actif`) VALUES
(1, 'Toquebiau', 'Maxime', 'maxime.toquebiau@hotmail.fr', 'maxtoq', 'maxime1997', 'Blabla je m\'appelle maxime blabla', 1),
(2, 'Wuhrlin', 'Thomas', 'thomas.wuhrlin@edu.ece.fr', 'tomwuhr', 'thomas1997', 'Blabla je m\'appelle thomas blabla, blabla bla.', 1),
(3, 'Pecresse', 'Clément', 'clement.pecresse@edu.ece.fr', 'jacquelegros', 'labaule44', 'Blabla je m\'appelle Clément, mais vous pouvez m\'appeler Clément l\'éléphant !', 1),
(4, 'Michel', 'Michel', 'michel@michmich.fr', 'mich', 'michmich32', 'YO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_auteur` int(11) NOT NULL COMMENT 'identifiant de l''auteur du commentaire',
  `id_post` int(11) NOT NULL COMMENT 'identifiant du post',
  `texte` text NOT NULL COMMENT 'texte du commentaire',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `id` int(11) NOT NULL COMMENT 'identifiant',
  `matiere` varchar(100) NOT NULL COMMENT 'matière',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL COMMENT 'identifiant',
  `promo` varchar(4) NOT NULL COMMENT 'promo',
  `maj` varchar(20) NOT NULL COMMENT 'majeure',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `promo`, `maj`, `actif`) VALUES
(1, 'ING3', 'nomaj', 1),
(2, 'ING3', 'nomaj', 1),
(3, 'ING3', 'nomaj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_auteur` int(11) NOT NULL COMMENT 'identifiant de l''auteur de la publication',
  `date_eve` date NOT NULL COMMENT 'date de l''évènement',
  `descr` text NOT NULL COMMENT 'description de l''évènement',
  `img` varchar(255) NOT NULL COMMENT 'lien de l''image sur le serveur',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_emmeteur` int(11) NOT NULL COMMENT 'identifiant de l''emmeteur',
  `id_recepteur` int(11) NOT NULL COMMENT 'identifiant du récepteur',
  `texte` text NOT NULL COMMENT 'texte du message',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

DROP TABLE IF EXISTS `notif`;
CREATE TABLE IF NOT EXISTS `notif` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_emmeteur` int(11) NOT NULL COMMENT 'identifiant de l''emmeteur',
  `id_recepteur` int(11) NOT NULL COMMENT 'identifiant du récepteur',
  `texte` text NOT NULL COMMENT 'texte de la notification',
  `lien` varchar(255) NOT NULL COMMENT 'lien vers le post de la notification',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='notification';

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `id` int(11) NOT NULL COMMENT 'identifiant',
  `type_offre` varchar(100) NOT NULL COMMENT 'type d''offre',
  `remun` int(11) NOT NULL COMMENT 'rémunération',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participe`
--

DROP TABLE IF EXISTS `participe`;
CREATE TABLE IF NOT EXISTS `participe` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_auteur` int(11) NOT NULL COMMENT 'identifiant du participant',
  `id_eve` int(11) NOT NULL COMMENT 'identifiant de l''évènement',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champs',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL COMMENT 'identifiant',
  `img` varchar(255) NOT NULL COMMENT 'lien de l''image sur le serveur',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_auteur` int(11) NOT NULL COMMENT 'identifiant de l''auteur de la publication',
  `texte` text NOT NULL COMMENT 'texte du post',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champs',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

DROP TABLE IF EXISTS `pro`;
CREATE TABLE IF NOT EXISTS `pro` (
  `id` int(11) NOT NULL COMMENT 'identifiant',
  `entreprise` varchar(255) NOT NULL COMMENT 'entreprise',
  `poste` varchar(255) NOT NULL COMMENT 'poste',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='professionnel';

-- --------------------------------------------------------

--
-- Table structure for table `publi`
--

DROP TABLE IF EXISTS `publi`;
CREATE TABLE IF NOT EXISTS `publi` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_auteur` int(11) NOT NULL COMMENT 'identifiant de l''auteur de la publication',
  `id_post` int(11) NOT NULL COMMENT 'identifiant du post',
  `date_post` date NOT NULL COMMENT 'date de la publication',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='publication';

-- --------------------------------------------------------

--
-- Table structure for table `reaction`
--

DROP TABLE IF EXISTS `reaction`;
CREATE TABLE IF NOT EXISTS `reaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_auteur` int(11) NOT NULL COMMENT 'identifiant de l''auteur',
  `id_post` int(11) NOT NULL COMMENT 'identifiant du post',
  `type_react` varchar(10) NOT NULL COMMENT 'type de réaction : like ou autres',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

DROP TABLE IF EXISTS `relation`;
CREATE TABLE IF NOT EXISTS `relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `id_auteur1` int(11) NOT NULL COMMENT 'identifiant du premier auteur',
  `id_auteur2` int(11) NOT NULL COMMENT 'identifiant du second ami',
  `type_rel` varchar(15) NOT NULL COMMENT 'type : "follow", "ami" ou "en attente"',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id` int(11) NOT NULL COMMENT 'identifiant',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL COMMENT 'identifiant',
  `vid` varchar(255) NOT NULL COMMENT 'lien de la vidéo sur le serveur',
  `actif` tinyint(1) NOT NULL COMMENT 'pour supprimer un champ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
