-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 18 mai 2018 à 14:54
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `trollbalises`
--

-- --------------------------------------------------------

--
-- Structure de la table `contactform`
--

DROP TABLE IF EXISTS `contactform`;
CREATE TABLE IF NOT EXISTS `contactform` (
  `id_contactForm` int(10) NOT NULL AUTO_INCREMENT,
  `con_lastName` varchar(255) NOT NULL,
  `con_firstName` varchar(255) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_phoneNumber` varchar(10) NOT NULL,
  `con_message` longtext NOT NULL,
  `con_gender` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_contactForm`),
  UNIQUE KEY `id_UNIQUE` (`id_contactForm`),
  UNIQUE KEY `email_UNIQUE` (`con_email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contactform`
--

INSERT INTO `contactform` (`id_contactForm`, `con_lastName`, `con_firstName`, `con_email`, `con_phoneNumber`, `con_message`, `con_gender`) VALUES
(1, 'jesus', 'god', 'jj@jj.jm', '0645464562', 'azzz', 'masculin'),
(2, 'fafafa', 'azeeefa', 'fafafa@gold.com', '0625525252', 'aaaa', 'masculin'),
(3, 'eaeeae', 'zeeze', 'lol@god.com', '0652525252', 'aeeae', 'masculin'),
(4, 'zgzgg', 'fsgsg', 'ffffff@god.com', '0641011222', 'eaeeae', 'masculin'),
(5, 'eeee', 'azeae', 'jesus@god.com', '0641011222', 'eeee', 'masculin'),
(6, 'eaeae', 'eee', 'aze@god2.com', '0606060655', 'eee', 'masculin'),
(7, '23', 'michel', 'cuisto@besancon.fr', '0655555555', 'bonchour', 'masculin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
