-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 19 Août 2015 à 10:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dico`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE IF NOT EXISTS `auteurs` (
  `idauteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL DEFAULT 'Anonyme',
  `prenom` varchar(30) DEFAULT '',
  `siecle` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idauteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `auteurs`
--

INSERT INTO `auteurs` (`idauteur`, `nom`, `prenom`, `siecle`) VALUES
(1, 'Anonyme', '', 0),
(2, 'de Vinci', 'Léonard', 16),
(3, 'Einstein', 'Albert', 20),
(4, 'Hugo', 'Victor', 19),
(5, 'Boileau', 'Nicolas', 17),
(6, 'Pascal', 'Blaise', 17),
(7, 'de Montesquieu', 'Charles', 18),
(9, 'Bush', 'Georges W.', 21),
(10, 'Van Damme', 'Jean Claude', 21),
(11, 'Sarte', 'Jean-Paul', 20);

-- --------------------------------------------------------

--
-- Structure de la table `citation`
--

CREATE TABLE IF NOT EXISTS `citation` (
  `idcit` int(11) NOT NULL AUTO_INCREMENT,
  `texte` mediumtext NOT NULL,
  `idauteur` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idcit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `citation`
--

INSERT INTO `citation` (`idcit`, `texte`, `idauteur`) VALUES
(1, 'Dans la vie on ne fait pas ce que l''on veut mais on est responsable de ce que l''on est.', 11),
(2, 'Dans la nature, tout a toujours une raison. Si tu comprends cette raison, tu n''as plus besoin de l''expérience.', 2),
(3, 'La vie, c''est comme une bicyclette, il faut avancer pour ne pas perdre l''équilibre.', 3),
(4, 'On passe une moitié de sa vie à attendre ceux qu''on aimera et l''autre moitié à quitter ceux qu''on aime.', 4),
(5, 'Ce qui se conçoit bien s’énonce clairement, et les mots pour le dire arrivent aisément.', 5),
(6, 'Moins on pense plus on parle.', 7),
(7, 'Le cœur a ses raisons que la raison ne connaît point.', 6),
(8, 'La plupart de nos importations proviennent de l''étranger.', 9),
(12, 'Plus ça va et moins ça va...', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
