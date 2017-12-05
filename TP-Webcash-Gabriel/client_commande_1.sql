-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 23 Novembre 2017 à 12:06
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `client_commande_1`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`idA` int(10) NOT NULL,
  `Libelle` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `PU` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`idA`, `Libelle`, `PU`) VALUES
(23, 'Sprite', 14),
(24, 'coca', 18),
(25, 'eau', 12),
(26, 'Fanta', 6);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`idC` int(10) NOT NULL,
  `Nom` text COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` text COLLATE utf8_unicode_ci NOT NULL,
  `Adresse` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `CP` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Ville` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idC`, `Nom`, `Prenom`, `Adresse`, `CP`, `Ville`) VALUES
(1, 'Rocher', 'Alain', '12 rue du crash', '91000', 'Paris'),
(2, 'Montsans', 'Jean', '12 rue de la Charte', '32000', 'Ville perdue');

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

CREATE TABLE IF NOT EXISTS `concerne` (
  `Quantite` int(10) NOT NULL,
  `idAr` int(10) NOT NULL,
  `idFa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `concerne`
--

INSERT INTO `concerne` (`Quantite`, `idAr`, `idFa`) VALUES
(14, 23, 2),
(16, 25, 3),
(2, 26, 2),
(4, 23, 2);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
`idF` int(10) NOT NULL,
  `DateF` date NOT NULL,
  `idCl` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`idF`, `DateF`, `idCl`) VALUES
(2, '2017-11-09', 1),
(3, '2017-11-09', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`idA`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`idC`);

--
-- Index pour la table `concerne`
--
ALTER TABLE `concerne`
 ADD KEY `idFa` (`idFa`), ADD KEY `idAr` (`idAr`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
 ADD PRIMARY KEY (`idF`), ADD KEY `idCl` (`idCl`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
MODIFY `idA` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
MODIFY `idC` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
MODIFY `idF` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `concerne`
--
ALTER TABLE `concerne`
ADD CONSTRAINT `concerne_ibfk_1` FOREIGN KEY (`idAr`) REFERENCES `articles` (`idA`),
ADD CONSTRAINT `concerne_ibfk_2` FOREIGN KEY (`idFa`) REFERENCES `facture` (`idF`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`idCl`) REFERENCES `client` (`idC`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
