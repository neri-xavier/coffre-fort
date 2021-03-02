-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 22 fév. 2021 à 13:26
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coffre_fort`
--

-- --------------------------------------------------------

--
-- Structure de la table `fichiers`
--

DROP TABLE IF EXISTS `fichiers`;
CREATE TABLE IF NOT EXISTS `fichiers` (
  `id` varchar(150) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichiers`
--

INSERT INTO `fichiers` (`id`, `id_user`, `nom`) VALUES
('e9c7c915e32bc0a7dba6dae62c73664a', 15, 'sendmail.ini'),
('61f7bf09ef1bd6330141d6055d7e585b', 15, 'FFOM Lambin Julien.docx');

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

DROP TABLE IF EXISTS `recuperation`;
CREATE TABLE IF NOT EXISTS `recuperation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `confirme` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(35) NOT NULL,
  `prenom` varchar(35) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tel` int(11) NOT NULL,
  `password` varchar(150) NOT NULL,
  `new_password` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `tel`, `password`, `new_password`) VALUES
(15, 'LAMBIN', 'Julien', 'julien59155@gmail.com', 750415911, '$2y$10$P.0kWzykKRa2BpEQaKIwZedc.f1dGR29o6UERHDBT5n5vTkSs3Uqe', 1),
(16, 'test', 'test', 'test@gmail', 856565656, '$2y$10$wUSD59rn7nuDDlGCmCg29.SlrIvHiBI8bR3stjVeFTBimCH4wwQRa', 0),
(17, 'LAMBIN', 'ISABELLE', 'uiadzhaui@jhafiu', 678787878, '$2y$10$9tyMvs4tLB6mUP7wbRaReuzr4mrYG51qYR2vk4Vu8bmQamo9plIi2', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
