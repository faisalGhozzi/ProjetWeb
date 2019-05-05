-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 mai 2019 à 19:02
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet2e`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `telephone` int(11) NOT NULL,
  `date` date NOT NULL,
  `adresse` varchar(25) NOT NULL,
  PRIMARY KEY (`reference`),
  KEY `reference` (`reference`)
) ENGINE=MyISAM AUTO_INCREMENT=233332 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`reference`, `nom`, `mail`, `telephone`, `date`, `adresse`) VALUES
(56355, 'kimo', 'jkfsjfjsf', 55595258, '2019-04-18', 'jsfjjs'),
(233331, 'alice cr', 'alice.cr@gmail.com', 50203113, '2019-04-27', '27 rue de paris'),
(123, 'karim', 'kjrt@esprit.tn', 23120085, '2019-04-18', 'hgvgvug'),
(222, 'karim', 'karim@gmail.com', 23120085, '2019-04-16', 'miniwalla'),
(2009, 'marwa', 'marwa@gmail.com', 23120085, '2019-04-11', 'karmabat'),
(2010, 'mehrzeya', 'mehrzeya@esprit.tn', 23120085, '2019-04-18', 'nahj kammou 6'),
(2, '5554', 'lkjlkdsfjelk', 5645645, '2019-04-19', 'jskjdsdsjkks');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
