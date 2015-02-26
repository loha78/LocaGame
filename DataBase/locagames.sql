-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Février 2015 à 13:29
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `locagames`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `login` varchar(20) NOT NULL,
  `nomClient` varchar(20) NOT NULL,
  `prenomClient` varchar(20) NOT NULL,
  `motDePasse` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`login`, `nomClient`, `prenomClient`, `motDePasse`, `adresse`, `isAdmin`) VALUES
('loha78', 'Tomponiony', 'Loha', 'toto', '11 Allee du Clos 78000 Versailles', 0);

-- --------------------------------------------------------

--
-- Structure de la table `exemplaire`
--

CREATE TABLE IF NOT EXISTS `exemplaire` (
  `numExemplaire` varchar(5) NOT NULL,
  `numJeu` int(5) NOT NULL,
  `support` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `exemplaire`
--

INSERT INTO `exemplaire` (`numExemplaire`, `numJeu`, `support`) VALUES
('BFH01', 4, 'PS4'),
('BFH02', 4, 'XB1'),
('COD01', 5, 'PS4'),
('COD02', 5, 'XB1'),
('DBX01', 6, 'PS4'),
('DBX02', 6, 'XB1'),
('FC001', 1, 'PS4'),
('FC002', 1, 'PS4'),
('FC003', 1, 'XB1'),
('FC004', 1, 'XB1'),
('FFXV1', 7, 'PS4'),
('FFXV2', 7, 'PS4'),
('FOR01', 14, 'XB1'),
('FOR02', 14, 'XB1'),
('HAL01', 13, 'XB1'),
('HAL02', 13, 'XB1'),
('LCO01', 12, 'PS4'),
('LCO02', 12, 'PS4'),
('MC001', 2, 'PS4'),
('MC002', 2, 'PS4'),
('MC003', 2, 'XB1'),
('MC004', 2, 'XB1'),
('MC005', 2, 'XB1'),
('MKX01', 8, 'PS4'),
('MKX02', 8, 'XB1'),
('PES01', 9, 'PS4'),
('PES02', 9, 'XB1'),
('TC001', 3, 'PS4'),
('TC002', 3, 'PS4'),
('TC003', 3, 'PS4'),
('TC004', 3, 'XB1'),
('TC005', 3, 'XB1'),
('TEW01', 10, 'PS4'),
('TEW02', 9, 'XB1'),
('TLOU1', 11, 'PS4'),
('TLOU2', 11, 'PS4');

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE IF NOT EXISTS `jeu` (
  `numJeu` int(5) NOT NULL,
  `support` int(1) NOT NULL,
  `imageJeu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jeu`
--

INSERT INTO `jeu` (`numJeu`, `support`, `imageJeu`) VALUES
(1, 1, 'img/PS4/FarCry4_PS4.jpg'),
(1, 2, 'img/XB1/FarCry4_XboxOne.jpg'),
(2, 1, 'img/PS4/Minecraft_PS4.jpg'),
(2, 2, 'img/XB1/Minecraft_XboxOne.jpg'),
(3, 1, 'img/PS4/TheCrew_PS4.jpg'),
(3, 2, 'img/XB1/TheCrew_XboxOne.jpg'),
(4, 1, 'img/PS4/BFHardline_PS4.jpg'),
(4, 2, 'img/XB1/BFHardline_XboxOne.jpg'),
(5, 1, 'img/PS4/CodAdvancedWarfare_PS4.jpg'),
(5, 2, 'img/XB1/CodAdvancedWarfare_XboxOne.jpg'),
(6, 1, 'img/PS4/DragonBallXenoverse_PS4.jpg'),
(6, 2, 'img/XB1/DragonBallXenoverse_XboxOne.jpg'),
(7, 1, 'img/PS4/FFXV_PS4.jpg'),
(8, 1, 'img/PS4/MortalKombatX_PS4.jpg'),
(8, 2, 'mg/PS4/MortalKombatX_XboxOne.jpg'),
(9, 1, 'img/PS4/Pes2015_PS4.jpg'),
(9, 2, 'img/XB1/Pes2015_XboxOne.jpg'),
(10, 1, 'img/PS4/TheEvilWithin_PS4.jpg'),
(11, 1, 'img/PS4/TheLastOfUs_PS4.jpg'),
(12, 1, 'img/PS4/LaraCrofyOsiris_PS4.jpg'),
(13, 2, 'img/XB1/Halo_XboxOne.jpg'),
(14, 2, 'img/XB1/Forza_XboxOne.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `login` varchar(20) NOT NULL,
  `numExemplaire` varchar(5) NOT NULL,
  `dateLocation` date NOT NULL,
  `dateEnvoi` date NOT NULL,
  `dateRetour` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
`numSupport` int(1) NOT NULL,
  `nomSupport` varchar(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `support`
--

INSERT INTO `support` (`numSupport`, `nomSupport`) VALUES
(1, 'PS4'),
(2, 'XB1');

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

CREATE TABLE IF NOT EXISTS `titre` (
`numJeu` int(5) NOT NULL,
  `titreJeu` varchar(20) NOT NULL,
  `descriptionJeu` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `titre`
--

INSERT INTO `titre` (`numJeu`, `titreJeu`, `descriptionJeu`) VALUES
(1, 'Far Cry', ''),
(2, 'Minecraft', ''),
(3, 'The Crew', ''),
(4, 'Battlefield Hardline', ''),
(5, 'Call Of Duty', ''),
(6, 'Dragon Ball Xenovers', ''),
(7, 'Final Fanatsy XV', ''),
(8, 'Mortal Kombat X', ''),
(9, 'PES 2015', ''),
(10, 'The Evil Within', ''),
(11, 'The Last Of Us', ''),
(12, 'Lara Croft Osiris', ''),
(13, 'Halo', ''),
(14, 'Forza 2', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`login`);

--
-- Index pour la table `exemplaire`
--
ALTER TABLE `exemplaire`
 ADD PRIMARY KEY (`numExemplaire`), ADD KEY `numJeu` (`numJeu`);

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
 ADD PRIMARY KEY (`numJeu`,`support`), ADD KEY `support` (`support`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`login`,`numExemplaire`,`dateLocation`);

--
-- Index pour la table `support`
--
ALTER TABLE `support`
 ADD PRIMARY KEY (`numSupport`);

--
-- Index pour la table `titre`
--
ALTER TABLE `titre`
 ADD PRIMARY KEY (`numJeu`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `support`
--
ALTER TABLE `support`
MODIFY `numSupport` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `titre`
--
ALTER TABLE `titre`
MODIFY `numJeu` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `jeu`
--
ALTER TABLE `jeu`
ADD CONSTRAINT `jeu_ibfk_1` FOREIGN KEY (`support`) REFERENCES `support` (`numSupport`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `jeu_ibfk_2` FOREIGN KEY (`numJeu`) REFERENCES `titre` (`numJeu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
