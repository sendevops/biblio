-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 30 Juillet 2011 à 03:17
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE IF NOT EXISTS `accueil` (
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `accueil`
--

INSERT INTO `accueil` (`titre`, `contenu`) VALUES
('Bienvenue Ã  la BibliothÃ¨que Centrale', '   Vous pouvez trouver des livres dans tous les domaines. Vous pouvez les consulter sur place ou bien les emprunter pour les lire chez vous.<br />     \r\nLes livres sont classÃ©s en rayons, chaque rayon comporte des casiers dans lesquels les livres sont rangÃ©s par ordre alphabÃ©tique.  ');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idlivre` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `idlivre`, `nom`, `commentaire`, `date`) VALUES
(1, 1, 'Ousmane Ndiaye', 'tres cool', '2011-07-28 13:14:40'),
(2, 1, 'Ousmane Ndiaye', 'test', '2011-07-28 13:16:31'),
(3, 1, 'makhou', 'test', '2011-07-28 13:23:17'),
(4, 1, 'Benj', 'je l''ai lu', '2011-07-28 14:03:13'),
(5, 6, 'Cheikh Ndiaye', 'Le livre est trÃ¨s intÃ©ressant.', '2011-07-29 13:03:42'),
(6, 6, 'Galass Sylla', 'Un livre qui fait rire.', '2011-07-29 13:05:01'),
(7, 6, 'Lamine', 'test', '2011-07-29 13:09:11'),
(8, 1, 'Diaw', 'test', '2011-07-29 23:54:53');

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE IF NOT EXISTS `livres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `auteur`, `description`, `date`) VALUES
(1, 'Une si longue lettre ', 'Mariama ba', '     Un trÃ¨s bon livre     ', '1986-06-21'),
(2, 'Une vie de boy', 'Ferdinand Oyono', 'Bon livre', '1988-07-04'),
(5, 'Le Soleil des indÃ©pedances ', 'Ahmadou Kourouma', '    Un des meilleurs livres durant la pÃ©riode postcoloniale.  ', '1968-07-28'),
(6, 'Les comptes d''Ahmadou Koumba', 'Birago Diop', ' Des histoires trÃ¨s drÃ´les ', '1945-02-08');
