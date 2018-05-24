-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 20 Mai 2018 à 17:21
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `type`) VALUES
(1, 'lightning'),
(2, 'lock'),
(3, 'light_sensor'),
(4, 'humidity_sensor'),
(5, 'temp_sensor'),
(6, 'other');

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `location` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `locations`
--

INSERT INTO `locations` (`id`, `location`) VALUES
(11, 'Bathroom'),
(12, 'Living room'),
(13, 'Outside'),
(14, 'Bedroom Tim'),
(15, 'Bedroom Parents'),
(16, 'Other');
-- --------------------------------------------------------

--
-- Structure de la table `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `category` int(5) NOT NULL,
  `location` varchar(20) NOT NULL,
  `description` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY fk_cat(category)
  REFERENCES categories(id)
  ON UPDATE CASCADE
  ON DELETE RESTRICT,
  FOREIGN KEY fk_loc(location)
  REFERENCES locations(id)
  ON UPDATE CASCADE
  ON DELETE RESTRICT
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `objects`
--

INSERT INTO `objects` (`id`, `name`, `owner`, `category`, `location`, `description`) VALUES
(21, 'Lampe salon', 'tim', 1, 2, 'Grand lampadaire du salon'),
(22, 'Lampe salle de bain', 'tim', 1, 1, 'Lampe principale de la salle de bain'),
(23, 'Verrou chambre Tim', 'tim', 2, 1, 'Verrou de la salle de bain'),
(24, 'Verrou porte entrée', 'tim', 2, 2,'Verrou de la porte d\'entrée'),
(25, 'Capteur luminosité extérieur 1', 'tim', 3, 3, 'Capteur de luminosité placé sur la terasse'),
(26, 'Capteur luminosité extérieur 2', 'tim', 3, 3, 'Capteur de luminosité placé sur la facade'),
(27, 'Capteur température extérieure', 'tim', 5, 3, 'Capteur de température placé sur la terasse');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(15) NOT NULL,
  `mdp` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mdp`) VALUES
(53, 'xorob0', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(54, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(55, 'test2', 'e96d3630bd9534efe09ecc3730488f3de2a6b978'),
(56, 'cule', '744fac1636ec2ce82c76744266ef8808286a196b'),
(57, 'aqwedc', 'df51e37c269aa94d38f93e537bf6e2020b21406c'),
(58, 'test3', 'c7df8792565c712b643dd4ea9ec1885efaa0724a'),
(59, 'vfvfv', '70c881d4a26984ddce795f6f71817c9cf4480e79');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
