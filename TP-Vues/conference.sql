-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 04 Décembre 2017 à 13:01
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `conference`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int(11) NOT NULL,
  `nomArticle` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`idArticle`, `nomArticle`) VALUES
(1, 'Article1'),
(2, 'Article2'),
(3, 'Article3'),
(4, 'Article4'),
(5, 'Article5');

-- --------------------------------------------------------

--
-- Structure de la table `chercheur`
--

CREATE TABLE IF NOT EXISTS `chercheur` (
  `idChercheur` int(11) NOT NULL,
  `nomChercheur` text,
  `idArticle` int(11) DEFAULT NULL,
  `CidUniversite` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chercheur`
--

INSERT INTO `chercheur` (`idChercheur`, `nomChercheur`, `idArticle`, `CidUniversite`) VALUES
(1, 'Ali', 1, 13),
(2, 'Boutaine', 2, 9),
(3, 'Laura', 3, 13),
(4, 'Kais', 4, 6),
(0, 'Gabriel', 4, 13);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `paris13`
--
CREATE TABLE IF NOT EXISTS `paris13` (
`idUniversite` int(11)
,`nomUniversite` text
,`idChercheur` int(11)
,`nomChercheur` text
,`idArticle` int(11)
,`CidUniversite` int(11)
);
-- --------------------------------------------------------

--
-- Structure de la table `universite`
--

CREATE TABLE IF NOT EXISTS `universite` (
  `idUniversite` int(11) NOT NULL,
  `nomUniversite` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `universite`
--

INSERT INTO `universite` (`idUniversite`, `nomUniversite`) VALUES
(6, 'Paris6'),
(9, 'Paris9'),
(13, 'Paris13');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `universites`
--
CREATE TABLE IF NOT EXISTS `universites` (
`nomChercheur` text
,`nomUniversite` text
,`idArticle` int(11)
);
-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vue1`
--
CREATE TABLE IF NOT EXISTS `vue1` (
`nomChercheur` text
,`nomArticle` text
,`nomUniversite` text
);
-- --------------------------------------------------------

--
-- Structure de la vue `paris13`
--
DROP TABLE IF EXISTS `paris13`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `paris13` AS select `universite`.`idUniversite` AS `idUniversite`,`universite`.`nomUniversite` AS `nomUniversite`,`chercheur`.`idChercheur` AS `idChercheur`,`chercheur`.`nomChercheur` AS `nomChercheur`,`chercheur`.`idArticle` AS `idArticle`,`chercheur`.`CidUniversite` AS `CidUniversite` from (`universite` join `chercheur` on((`universite`.`idUniversite` = `chercheur`.`CidUniversite`))) where (`universite`.`nomUniversite` = 'Paris13');

-- --------------------------------------------------------

--
-- Structure de la vue `universites`
--
DROP TABLE IF EXISTS `universites`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `universites` AS select `chercheur`.`nomChercheur` AS `nomChercheur`,`universite`.`nomUniversite` AS `nomUniversite`,`article`.`idArticle` AS `idArticle` from ((`universite` join `chercheur` on((`universite`.`idUniversite` = `chercheur`.`CidUniversite`))) join `article` on((`article`.`idArticle` = `chercheur`.`idArticle`)));

-- --------------------------------------------------------

--
-- Structure de la vue `vue1`
--
DROP TABLE IF EXISTS `vue1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue1` AS select `universites`.`nomChercheur` AS `nomChercheur`,`article`.`nomArticle` AS `nomArticle`,`universites`.`nomUniversite` AS `nomUniversite` from (`universites` join `article` on((`article`.`idArticle` = `universites`.`idArticle`)));

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`idArticle`);

--
-- Index pour la table `chercheur`
--
ALTER TABLE `chercheur`
 ADD PRIMARY KEY (`idChercheur`), ADD KEY `idArticle` (`idArticle`), ADD KEY `idUniversite` (`CidUniversite`);

--
-- Index pour la table `universite`
--
ALTER TABLE `universite`
 ADD PRIMARY KEY (`idUniversite`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
