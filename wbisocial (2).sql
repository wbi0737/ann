-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 01 Avril 2013 à 19:13
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `wbisocial`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posts_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `comment_autheur` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment_autheur_email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  `comment_content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_5F9E962AD5E258C5` (`posts_id`),
  KEY `IDX_5F9E962AA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=121 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `posts_id`, `user_id`, `comment_autheur`, `comment_autheur_email`, `comment_date`, `comment_content`) VALUES
(108, 3, 1, NULL, NULL, '2013-03-23 20:45:12', 'bonsoir'),
(109, 4, 1, NULL, NULL, '2013-03-23 20:45:22', 'bonjours'),
(110, 1, 1, NULL, NULL, '2013-03-29 13:59:42', 'eererrze'),
(111, 1, 1, NULL, NULL, '2013-03-29 15:20:48', 'ssdsd'),
(112, 1, 1, NULL, NULL, '2013-03-29 15:27:09', 'sdcsqdqsd'),
(113, 3, 1, NULL, NULL, '2013-03-29 15:27:45', '1111'),
(114, 1, 1, NULL, NULL, '2013-03-29 15:42:24', 'sdqfdqsdf'),
(115, 1, 1, NULL, NULL, '2013-03-29 15:42:31', 'eee'),
(116, 1, 1, NULL, NULL, '2013-03-29 15:58:23', '555'),
(117, 1, 1, NULL, NULL, '2013-03-29 17:36:51', 'ssss'),
(118, 1, 1, NULL, NULL, '2013-03-29 17:38:04', 'zadzde'),
(119, 1, 1, NULL, NULL, '2013-03-29 17:39:07', 'qqsqs'),
(120, 1, 1, NULL, NULL, '2013-03-29 20:14:08', 'eeeeeeeeee');

-- --------------------------------------------------------

--
-- Structure de la table `domain`
--

CREATE TABLE IF NOT EXISTS `domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `domain`
--

INSERT INTO `domain` (`id`, `label`) VALUES
(1, 'Auto Moto'),
(2, 'Immobilier'),
(3, 'Telephonie'),
(4, 'Informatique'),
(5, 'Electromenager'),
(6, 'Emploi'),
(7, 'Bonnes Affaires'),
(8, 'Image Et Son'),
(9, 'Services'),
(11, 'Animaux');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_description` longtext COLLATE utf8_unicode_ci,
  `post_date` datetime DEFAULT NULL,
  `post_adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_pays` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_ville` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_region` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_price` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `post_phone` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_885DBAFAA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_title`, `post_description`, `post_date`, `post_adresse`, `post_pays`, `post_ville`, `post_region`, `post_price`, `type_id`, `post_phone`) VALUES
(1, 2, 'vendre peugeot 206', 'bonne etat, mise en circulation le 21/3/2003, le prix et 10.000DT', '2013-03-04 16:15:16', '4 rue de tunis mannouba', 'tunis', 'mannouba', 'el agba', 10, 0, NULL),
(3, 1, 'userbundle', 'coment installer fosuserBundle', '2013-03-05 17:20:32', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(4, 1, 'routing', 'Svp je veux comprendre comment configurer le routage de mon site ', '2013-03-12 14:57:55', NULL, NULL, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `underdomain_id` int(11) NOT NULL,
  `labeltype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2CECF817445F50E2` (`underdomain_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `underdomain_id`, `labeltype`) VALUES
(1, 1, 'Renault'),
(2, 1, 'Peugeot'),
(3, 1, 'Toyota'),
(4, 1, 'Volkswagen'),
(5, 1, 'Mercedes'),
(6, 1, 'BMW'),
(7, 1, 'Mazda'),
(8, 1, 'Fiat'),
(9, 1, 'Ford'),
(10, 1, 'Opel');

-- --------------------------------------------------------

--
-- Structure de la table `underdomain`
--

CREATE TABLE IF NOT EXISTS `underdomain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain_id` int(11) NOT NULL,
  `label` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DFC47B43115F0EE5` (`domain_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Contenu de la table `underdomain`
--

INSERT INTO `underdomain` (`id`, `domain_id`, `label`) VALUES
(1, 1, 'Voiture'),
(2, 1, 'Moto et Scooter'),
(3, 1, 'Camion'),
(4, 1, 'Bateau'),
(5, 1, 'Velos'),
(6, 1, 'Pieces Auto'),
(7, 1, 'Autres'),
(10, 2, 'Location'),
(11, 2, 'Vente'),
(12, 2, 'Achats'),
(13, 3, 'Accessoires Tele'),
(14, 3, 'Telephonie Fixe'),
(15, 3, 'Telephonie Mobile'),
(16, 3, 'Autres'),
(17, 2, 'Autres'),
(18, 8, 'Photo et Camescope'),
(19, 8, 'TV'),
(20, 8, 'Lecteur DVD'),
(21, 8, 'Autres'),
(22, 4, 'LabTop'),
(23, 4, 'Ordinateur Bureau'),
(24, 4, 'Logiciels Jeux Vidéos'),
(25, 4, 'Composants'),
(26, 4, 'Imprimante et Scanner'),
(27, 4, 'Résaux');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'raouf', 'raouf', 'raouf@kdd.cpm', 'raouf@kdd.cpm', 1, 'c8iuqh8e9ds08sokcccw04o84sk844g', 'tG9/ZVrNX0IAm1icWsoYrL9mlF+OuNinCS3sI6FlYeV0eb9Tn02qg8hCY3pN/9btXvTPkovm0fTaSyopJl2YrA==', '2013-04-01 16:54:36', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(2, 'ines', 'ines', 'ines@dd.dd', 'ines@dd.dd', 1, 'n9yc6msz6og88oo8sc48s48g404s0g4', 'orDvV8NTGVD/T7iLds5BJIjaG3wZdECAVz06y5AqFxSPwqowt1kNsmk+Gif0R55uEZhS/lMj1meEcmLHVEmfcA==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_5F9E962AD5E258C5` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_885DBAFAA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `FK_2CECF817445F50E2` FOREIGN KEY (`underdomain_id`) REFERENCES `underdomain` (`id`);

--
-- Contraintes pour la table `underdomain`
--
ALTER TABLE `underdomain`
  ADD CONSTRAINT `FK_DFC47B43115F0EE5` FOREIGN KEY (`domain_id`) REFERENCES `domain` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
