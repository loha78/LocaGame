-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Février 2015 à 17:32
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

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
('BFH01', 4, '1'),
('BFH02', 4, '2'),
('COD01', 5, '1'),
('COD02', 5, '2'),
('DBX01', 6, '1'),
('DBX02', 6, '2'),
('FC001', 1, '1'),
('FC002', 1, '1'),
('FC003', 1, '2'),
('FC004', 1, '2'),
('FFXV1', 7, '1'),
('FFXV2', 7, '1'),
('FOR01', 14, '2'),
('FOR02', 14, '2'),
('HAL01', 13, '2'),
('HAL02', 13, '2'),
('LCO01', 12, '1'),
('LCO02', 12, '1'),
('MC001', 2, '1'),
('MC002', 2, '1'),
('MC003', 2, '2'),
('MC004', 2, '2'),
('MC005', 2, '2'),
('MKX01', 8, '1'),
('MKX02', 8, '2'),
('PES01', 9, '1'),
('PES02', 9, '2'),
('TC001', 3, '1'),
('TC002', 3, '1'),
('TC003', 3, '1'),
('TC004', 3, '2'),
('TC005', 3, '2'),
('TEW01', 10, '1'),
('TEW02', 9, '2'),
('TLOU1', 11, '1'),
('TLOU2', 11, '1');

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
(8, 2, 'img/XB1/MortalKombatX_XboxOne.jpg'),
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
  `dateEnvoi` date DEFAULT NULL,
  `dateRetour` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`login`, `numExemplaire`, `dateLocation`, `dateEnvoi`, `dateRetour`) VALUES
('loha78', 'BFH01', '2015-02-26', '2015-02-26', NULL),
('loha78', 'BFH02', '2015-02-26', '2015-02-26', NULL),
('loha78', 'FC001', '2015-02-26', '2015-02-26', NULL);

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
(1, 'Far Cry', 'L''histoire de Far Cry 4 se déroule dans la région fictive de Kyrat en Himalaya. Le joueur incarne Ajay Ghale, revenu sur sa terre d''origine pour disperser les cendres de sa mère. Il se retrouvera rapidement plongé au cœur d''une guerre civile entre les rebelles du Sentier d''Or et un tyran autoproclamé nommé Pagan Min4. Le jeu contient 4 fins, dont deux alternatives.'),
(2, 'Minecraft', 'Minecraft est un jeu vidéo indépendant de type « bac à sable » (construction complètement libre - sandbox en anglais).Ce jeu vidéo plonge le joueur dans un univers réaliste mais cubique : tout est composé de blocs en 3D pixelisés.'),
(3, 'The Crew', 'The Crew est un jeu de course arcade révolutionnaire. Il vous entraîne, dans une course effrénée au sein d''un immense monde ouvert représentant les USA.'),
(4, 'Battlefield Hardline', 'Un affrontement entre criminels et policiers dont rêvaient de nombreux joueurs dans un monde ou crime et vengeance sont omniprésents. Une mise en scène du gameplay spectaculaire à l’image des grandes séries policières.'),
(5, 'Call Of Duty', 'Call of Duty : Advanced Warfare, développé par Sledgehammer Games (co-développeur de Call of Duty : Modern Warfare 3), inaugure le premier cycle de trois ans de développement next-gen dans l''histoire de la franchise. Call of Duty : Advanced Warfare, dépeint les champs de bataille du futur, où la technologie et la stratégie ont évolué, et nous ont conduit vers une nouvelle ère de combat pour la série.'),
(6, 'Dragon Ball Xenovers', 'Centré sur un nouveau personnage lié à Yamcha, Trunks et bien d’autres, DRAGON BALL XENOVERSE vous replongera dans les plus célèbres combats de la série. Parviendrez-vous à modifier le cours de l’Histoire ? Vous découvrirez également une cité mystérieuse, une jouabilité totalement remaniée, de splendides animations et bien d’autres nouveautés qui seront bien dévoilées !'),
(7, 'Final Fanatsy XV', 'Bientôt disponible.\r\nCommandez-le maintenant et nous vous l''enverrons dès qu''il sera disponible.'),
(8, 'Mortal Kombat X', 'Mortal Kombat X, le prochain opus de la légendaire série de jeux de combat de NetherRealm Studios, révolutionne la franchise. Le jeu adopte une direction artistique inédite et propose un tout nouveau gameplay pour offrir aux joueurs l''expérience Mortal Kombat ultime. Pour la première fois, Mortal Kombat X permet aux joueurs de choisir entre plusieurs variations pour chaque personnage, ce qui a un impact sur la stratégie et le style de combat.'),
(9, 'PES 2015', '"Le terrain nous appartient !" est la philosophie qui domine PES 2015. Grace aux efforts conjugués des équipes PES de Tokyo et Windsor, l''objectif a été de recréer les sensations uniques et incroyables du football de haut niveau. PES 2015 retourne aux vraies valeurs de PES à savoir des contrôles très réactifs et un gameplay de renom où les utilisateurs ont un contrôle total et sans restriction sur la façon dont ils jouent.'),
(10, 'The Evil Within', 'Lors de leur enquête sur la scène d''un horrible carnage, le détective Sebastian Castellanos et ses partenaires sont confrontés à une mystérieuse et puissante force. Après avoir été témoin du massacre des autres officiers, Sebastian est pris en embuscade et assommé. À son réveil, il se retrouve dans un monde malsain dans lequel d''hideuses créatures rôdent entre les cadavres.'),
(11, 'The Last Of Us', 'Accompagnez Joel et Ellie à travers leur périple dans des Etats-Unis dévastés où survivre face aux infectés et aux hommes est devenu le seul objectif. Et découvrez également le passé d’Ellie dans le chapitre Left Behind inclus dans cette édition.'),
(12, 'Lara Croft Osiris', 'Lara Croft and the Temple of Osiris, suite du jeu encensé par la critique Lara Croft and the Guardian of Light, propose pour la toute première fois de jouer jusqu''à quatre en coopération avec Lara Croft. Les joueurs devront travailler de concert pour battre des hordes d''ennemis venus tout droit du royaume des morts égyptien, résoudre quantité d''énigmes complexes et déjouer des pièges mortels, au cours d''une histoire originale servie par des graphismes époustouflants.'),
(13, 'Halo', 'La compilation Halo Master Chief Collection regroupe les quatre épisodes de la saga qui ont marqué une génération entière de gamers, remasterisés en 1080p et en 60FPS. Plus qu’un simple portage HD, Halo : The Master Chief Collection bénéficie d’ajouts de taille. Un must-have pour tout possesseur d’une Xbox One !'),
(14, 'Forza 2', 'Découvrez les magnifiques paysages de la côte méditerranéenne au volant de plus d’une centaine de voitures et confrontez-vous pour la première fois dans la franchise aux conditions météorologiques changeantes qui affecterons votre conduite : Orages, tempêtes et brume n’attendent que vous ! Explorez une carte immense totalement ouverte pour une expérience de conduite plus libre que jamais !');

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
