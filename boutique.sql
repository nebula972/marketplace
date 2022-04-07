-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 07 avr. 2022 à 19:49
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idc`, `nom`, `prenom`, `mail`, `mdp`, `tel`, `adresse`, `ville`, `cp`, `image`) VALUES
(1, 'Ã©ponge', 'bob', 'bobleponge@bikinibottom.com', '154649', '5489641894', '3 rue de la flotte', 'bikini bottom', '98558', '1.jpeg'),
(2, 'Ã©toile_de_mer', 'Patrick', 'patrickl_etoile_de_mer@bikinibottom.com', '89643548', '7896454568', '1 rue de la flotte', 'bikini bottom', '98558', '2.jpeg'),
(3, 'tentacule', 'Carlo', 'carlo@bikinibottom.com', '78465', '156486948', '2 rue de la flotte', 'bikini bottom', '98558', '3.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
