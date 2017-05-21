-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2017 at 05:53 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `informaticiens`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `anciennete` varchar(30) NOT NULL,
  `domaine` varchar(30) NOT NULL,
  `competence` varchar(100) NOT NULL,
  `statut` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `nom`, `prenom`, `anciennete`, `domaine`, `competence`, `statut`) VALUES
(1, 'rodolphe', 'carimbacasse', 'senior', 'reseau', 'administration reseau', 'ingenieur'),
(2, 'roullin', 'jordan', 'senior', 'reseau', 'administration reseau', 'technicien'),
(3, 'assani', 'saidina', 'senior', 'reseau', 'administration reseau', 'ingenieur'),
(4, 'bulin', 'ulric', 'junior', 'reseau', 'administration reseau', 'technicien'),
(5, 'soubou', 'loic', 'stagiaire', 'reseau', 'administration reseau', 'stagiaire'),
(6, 'dalleau', 'michael', 'junior', 'developpeur', 'python, java', 'technicien'),
(7, 'bastide', 'sebastien', 'senior', 'developpeur', 'java, php, lava, c#, c++', 'ingenieur'),
(8, 'hoareau', 'john', 'stagiaire', 'developpeur', 'aucun', 'stagiaire'),
(9, 'collet', 'romuald', 'stagiaire', 'developpeur', 'html', 'stagiaire'),
(10, 'mahoussa', 'ryan', 'junior', 'developpeur', 'python', 'ingenieur'),
(11, 'gates', 'bill', 'senior', 'developpeur', 'assembleur, C++', 'ingenieur'),
(12, 'jobs', 'steve', 'senior', 'developpeur', 'assembleur, C++, MacOS, iOS', 'ingenieur'),
(13, 'arquium', 'maxime', 'junior', 'developpeur', 'sql, MySql, Apache', 'technicien'),
(14, 'olivier', 'xavier', 'stagiaire', 'developpeur', 'html, css', 'stagiaire'),
(15, 'madi', 'nakibdim', 'stagiaire', 'developpeur', 'html, css, python', 'stagiaire'),
(16, 'dailly', 'lucas', 'junior', 'developpeur', 'apache, wamp, xamp, sql', 'technicien'),
(17, 'techer', 'vincent', 'stagiere', 'developpeur', 'il est oÃ¹?', 'stagiere'),
(18, 'jeremy', 'legros', 'senior', 'developpeur', 'Mourir dans Dark Souls', 'stagiaire'),
(19, 'l''homme qui', 'emmerde kido', 'senior', 'developpeur', 'get rekt kido', 'ingenieur'),
(20, 'tarane', 'alexandre', 'junior', 'developpeur', 'java, php, css, html', 'technicien'),
(34, 'johansson', 'scarlett', 'senior', 'developpeur', 'Ruby, Java, C++, LAVA, Hack', 'ingenieur'),
(41, 'baner', 'bruce', 'senior', 'reseau', 'biotechnologie', 'ingenieur'),
(45, 'lebihan', 'laurent', 'stagiaire', 'developpeur', 'algorithme, python', 'stagiaire'),
(46, 'kardashian', 'kim', 'stagiaire', 'developpeur', 'Cafe, instagram, facebook, twitter', 'stagiaire'),
(47, 'numéro', ' bis', 'junior', 'reseau', 'admin reseau', 'stagiaire');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
