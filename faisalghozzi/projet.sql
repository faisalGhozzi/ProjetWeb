-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 14 mai 2019 à 18:35
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(8) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `adress` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `password`, `email`, `adress`, `gender`, `status`) VALUES
(5, 'Trabelsi', 'Omar', 'azerty', 'omartb.24@gmail.com', 'PB N168', 'Male', 'Inactive'),
(6, 'Bouali', 'Ons', 'e10adc3949ba59abbe56e057f20f883e', 'ons.bouali1@gmail.com', 'Mourouj', 'Female', 'Inactive'),
(7, 'Faicel', 'Ghozzi', 'qwerty', 'ghozzifaisal@gmail.com', 'lalala bla bla 1717', 'Male', 'Active');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Standard Wallets'),
(2, 'Ethnic Wallets'),
(9, 'Carbon Wallets');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(8) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `Gouvernorat` varchar(30) NOT NULL,
  `adress` varchar(25) NOT NULL,
  `Num_Tel` int(8) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `password`, `email`, `Gouvernorat`, `adress`, `Num_Tel`, `gender`, `status`) VALUES
(7, 'Faicel', 'Ghozzi', 'qwerty', 'ghozzifaisal@gmail.com', 'Tunis', 'Tunis Tunisie', 21678687, 'Male', 'Active'),
(10, 'Trabelsi', 'Omar', '46fdfe1db7a6965ac41dee2308681ae1', 'omartb.24@gmail.com', 'Tunis', 'PB N168', 93751038, 'Male', 'Active'),
(12, 'Bouali', 'ons', 'cdaa6716746fb685734abde87f1b08ad', 'ons.bouali1@gmail.com', 'Tunis', 'TUNIS', 12345678, 'Female', 'Active'),
(13, 'validation', 'validator', 'azerty', 'faicel.ghozzi@esprit.tn', 'Sousse', 'Tunis', 20202020, 'Male', 'Active');

-- --------------------------------------------------------

--
-- Structure de la table `codepromo`
--

CREATE TABLE `codepromo` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `reduction` int(3) NOT NULL,
  `date_Debut` date DEFAULT NULL,
  `date_Fin` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `codepromo`
--

INSERT INTO `codepromo` (`id`, `code`, `reduction`, `date_Debut`, `date_Fin`) VALUES
(5, 'X123Q', 5, '2019-04-01', '2019-04-06'),
(6, 'X88', 50, '2019-12-31', '2019-12-31');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `elastic`
--

CREATE TABLE `elastic` (
  `elastic_id` int(11) NOT NULL,
  `elastic_img` mediumblob NOT NULL,
  `elastic_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `elastic`
--

INSERT INTO `elastic` (`elastic_id`, `elastic_img`, `elastic_name`) VALUES
(1, 0x79656c6c6f772e706e67, 'Yellow'),
(2, 0x626c75652e706e67, 'Blue'),
(4, 0x62726967687450696e6b2e706e67, 'BrightPink'),
(6, 0x6d6172676f756d697368322e706e67, 'margoumish2'),
(7, 0x6d6172676f756d697368352e706e67, 'margoumish5'),
(8, 0x6f72616e67652e706e67, 'orange');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `reference` int(15) NOT NULL,
  `Adresse_livraison` varchar(60) NOT NULL,
  `Num_Tel` int(8) NOT NULL,
  `Gouvernorat` varchar(10) NOT NULL,
  `id_client` int(8) NOT NULL,
  `id_panier` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `id_livreur` int(10) NOT NULL,
  `Nom_societe` varchar(30) NOT NULL,
  `Num_Tel` int(8) NOT NULL,
  `Adresse_mail` varchar(25) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Gouvernorat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`id_livreur`, `Nom_societe`, `Num_Tel`, `Adresse_mail`, `Adresse`, `Gouvernorat`) VALUES
(5, 'DHL', 11111111, 'omartb.24@gmail.com', 'PB N168', 'Tunis');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(50) NOT NULL,
  `qte` int(20) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `product_img` blob NOT NULL,
  `product_second_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `qte`, `product_id`, `product_img`, `product_second_img`) VALUES
(13, 1, '20', '', ''),
(13, 2, '29', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_imgFace` mediumblob NOT NULL,
  `product_imgTail` mediumblob NOT NULL,
  `product_price` double NOT NULL,
  `product_promotion` double NOT NULL,
  `category_id` int(11) NOT NULL,
  `elastic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`product_id`, `product_imgFace`, `product_imgTail`, `product_price`, `product_promotion`, `category_id`, `elastic_id`) VALUES
(17, 0x65746833466163652e706e67, 0x657468335461696c2e706e67, 80, 0, 1, 6),
(18, 0x65746839466163652e706e67, 0x657468395461696c2e706e67, 90, 0, 2, 1),
(19, 0x6574683130466163652e706e67, 0x65746831305461696c2e706e67, 80, 0, 2, 7),
(20, 0x65746838466163652e706e67, 0x657468385461696c2e706e67, 80, 0, 1, 6),
(21, 0x65746839466163652e706e67, 0x657468395461696c2e706e67, 80, 0, 2, 6),
(23, 0x65746832466163652e706e67, 0x657468325461696c2e706e67, 80, 0, 2, 4),
(25, 0x65746837466163652e706e67, 0x657468375461696c2e706e67, 80, 0, 2, 2),
(27, 0x65746834466163652e706e67, 0x657468345461696c2e706e67, 80, 0, 2, 7),
(28, 0x65746838466163652e706e67, 0x657468385461696c2e706e67, 80, 0, 1, 7),
(29, 0x65746838466163652e706e67, 0x657468385461696c2e706e67, 80, 0, 1, 1),
(30, 0x65746838466163652e706e67, 0x657468385461696c2e706e67, 80, 0, 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `idProduit` varchar(20) DEFAULT NULL,
  `idCategorie` varchar(20) DEFAULT NULL,
  `tauxPromo` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `idProduit`, `idCategorie`, `tauxPromo`) VALUES
(22, NULL, '3', 100),
(21, '', '2', 5),
(20, '', '1000', 50),
(19, '2', '', 50);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `serviceclient`
--

CREATE TABLE `serviceclient` (
  `service_id` varchar(10) NOT NULL,
  `service_type` varchar(10) NOT NULL,
  `service_numero` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `serviceclient`
--

INSERT INTO `serviceclient` (`service_id`, `service_type`, `service_numero`) VALUES
('2141596672', 'khalil', '50272808'),
('5', 'AZERTY', '69641282'),
('kjsh', 'nnn', '50272808'),
('123', 'aaaa', '12345678'),
('9999', 'BBB', '12345678'),
('200', 'jsjs', '23333222');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `codepromo`
--
ALTER TABLE `codepromo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_client` (`id_client`);

--
-- Index pour la table `elastic`
--
ALTER TABLE `elastic`
  ADD PRIMARY KEY (`elastic_id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`reference`),
  ADD KEY `fk_idclient` (`id_client`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`id_livreur`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`product_id`,`id_panier`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_elastic` (`elastic_id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `codepromo`
--
ALTER TABLE `codepromo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `elastic`
--
ALTER TABLE `elastic`
  MODIFY `elastic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `reference` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `id_livreur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `fk_idclient` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_elastic` FOREIGN KEY (`elastic_id`) REFERENCES `elastic` (`elastic_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
