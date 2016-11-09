-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Novembre 2016 à 15:37
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `web2`
--

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `ID` int(11) NOT NULL,
  `Nom` int(11) NOT NULL,
  `Année` int(11) NOT NULL,
  `Lieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `ID` int(11) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Filiaire` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Naissance` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(512) CHARACTER SET utf32 NOT NULL,
  `ProfilImg` varchar(255) NOT NULL DEFAULT 'defaut'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`ID`, `Prenom`, `Nom`, `Filiaire`, `Ville`, `Telephone`, `Naissance`, `Email`, `Pass`, `ProfilImg`) VALUES
(3, 'Kevin', 'Garabedian', 'Génie Logiciel', 'Marseille', 63085044, '1991-01-11', 'garabedian.kevin@gmail.com', '2a3b729f220163cbbc0f09ec64d42e04cb7089f2', 'defaut'),
(4, 'Hurst', 'Julian', 'Génie Logiciel', 'Venelles', 0, '1994-08-26', 'julian.hurst@laposte.net', '354106e416911844661e1603d99ecf7d1c318dda', 'defaut');

-- --------------------------------------------------------

--
-- Structure de la table `etu_dipl`
--

CREATE TABLE `etu_dipl` (
  `ID_ETU` int(11) NOT NULL,
  `ID_DIPL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `filiaire`
--

CREATE TABLE `filiaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `filiaire`
--

INSERT INTO `filiaire` (`id`, `nom`) VALUES
(1, 'Génie Logiciel');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `filiaire`
--
ALTER TABLE `filiaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `filiaire`
--
ALTER TABLE `filiaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
