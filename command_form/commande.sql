-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 31 oct. 2019 à 15:45
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `commande`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article` varchar(30) NOT NULL,
  `prix` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `article`, `prix`) VALUES
(1, 'pc', 1400),
(2, 'sourit', 30),
(3, 'clavier', 45),
(4, 'uc', 300);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numCmde` varchar(20) DEFAULT NULL,
  `dateCmde` datetime DEFAULT NULL,
  `typeLivraison` varchar(20) DEFAULT NULL,
  `lieu` varchar(20) DEFAULT NULL,
  `art` varchar(20) NOT NULL,
  `qte` int(20) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `numCmde`, `dateCmde`, `typeLivraison`, `lieu`, `art`, `qte`, `id_client`) VALUES
(1, '10cde', '2019-07-10 14:30:41', 'rapide', 'domicile', '', 0, 1),
(2, '15_2019-07-11', '2019-07-11 15:07:10', 'express', 'bureau', '2', 7, 15),
(3, '1_2019-07-11', '2019-07-11 15:08:25', 'express', 'relai', '3', 9, 1),
(4, '1_2019-07-11', '2019-07-11 15:18:59', 'express', 'relai', '3', 9, 1),
(5, '2_2019-07-11', '2019-07-11 15:19:11', 'rapide', 'dommicile', '3', 7, 2),
(6, '1_2019-07-11', '2019-07-11 15:23:25', 'rapide', 'dommicile', '1', 1, 1),
(7, '18_2019-07-11', '2019-07-11 15:24:21', 'standart', 'bureau', '4', 2, 18),
(8, '52_2019-07-15', '2019-07-15 09:37:26', 'standart', 'dommicile', '2', 7, 52);

-- --------------------------------------------------------

--
-- Structure de la table `dept`
--

DROP TABLE IF EXISTS `dept`;
CREATE TABLE IF NOT EXISTS `dept` (
  `n_dept` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `lieu` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`n_dept`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dept`
--

INSERT INTO `dept` (`n_dept`, `nom`, `lieu`) VALUES
(10, 'recherche', 'renne'),
(20, 'vente', 'metz'),
(30, 'direction', 'gif'),
(40, 'fabrication', 'toulon');

-- --------------------------------------------------------

--
-- Structure de la table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `nom` varchar(20) DEFAULT NULL,
  `num` int(5) NOT NULL,
  `fonction` varchar(20) DEFAULT NULL,
  `n_sup` int(5) DEFAULT NULL,
  `embauche` varchar(20) DEFAULT NULL,
  `salaire` int(10) DEFAULT NULL,
  `comm` int(10) DEFAULT NULL,
  `num_dept` int(5) DEFAULT NULL,
  PRIMARY KEY (`num`),
  KEY `n_dep` (`num_dept`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emp`
--

INSERT INTO `emp` (`nom`, `num`, `fonction`, `n_sup`, `embauche`, `salaire`, `comm`, `num_dept`) VALUES
('gardarin', 15155, 'ingénieur', 24533, '22-03-85', 24000, NULL, 10),
('lebreton', 16034, 'commercial', 27047, '01-06-91', 15000, 0, 20),
('delobel', 16278, 'ingénieur', 24533, '16-11-94', 21000, NULL, 10),
('martin', 16712, 'directeur', 25717, '23-05-90', 40000, NULL, 30),
('martin', 17147, 'commercial', 27047, '10-12-93', 20000, 500, 20),
('balin', 17232, 'administratif', 24533, '03-10-87', 13500, NULL, 10),
('dupont', 17574, 'administratif', 16712, '03-05-92', 9000, NULL, 30),
('codd', 24533, 'directeur', 25717, '12-09-75', 55000, NULL, 10),
('bara', 24831, 'administratif', 16712, '10-09-88', 15000, NULL, 30),
('laùmbert', 25012, 'administratif', 27047, '14-04-91', 12000, NULL, 20),
('adiba', 25067, 'ingénieur', 24533, '05-10-87', 30000, NULL, 10),
('joubert', 25717, 'president', NULL, '10-10-82', 50000, NULL, 30),
('lefebvre', 25935, 'commercial', 27047, '11-01-84', 23500, 1500, 20),
('dupond', 26691, 'commercial', 27047, '04-04-88', 25000, 2500, 20),
('simon', 26834, 'ingénieur', 24533, '04-10-88', 2000, NULL, 10),
('lamere', 27047, 'directeur', 25717, '07-09-89', 45000, NULL, 20),
('paquel', 27546, 'commercial', 27047, '03-09-83', 22000, 2000, 20);

-- --------------------------------------------------------

--
-- Structure de la table `lignedecmde`
--

DROP TABLE IF EXISTS `lignedecmde`;
CREATE TABLE IF NOT EXISTS `lignedecmde` (
  `ref` varchar(20) NOT NULL,
  `produit` varchar(20) DEFAULT NULL,
  `qte` int(10) DEFAULT NULL,
  `prix` int(10) DEFAULT NULL,
  `nomCmde` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ref`),
  KEY `nomCmde` (`nomCmde`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lignedecmde`
--

INSERT INTO `lignedecmde` (`ref`, `produit`, `qte`, `prix`, `nomCmde`) VALUES
('55', 'ordinateur', 5, 999, 'commande_1');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `numRue` int(3) DEFAULT NULL,
  `nomRue` varchar(20) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`num_dept`) REFERENCES `dept` (`n_dept`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
