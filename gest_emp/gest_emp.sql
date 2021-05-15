-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 15 mai 2021 à 13:11
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gest_emp`
--

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE `compteur` (
  `countt` int(3) NOT NULL,
  `dateModif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compteur`
--

INSERT INTO `compteur` (`countt`, `dateModif`) VALUES
(4, '2021-05-09');

-- --------------------------------------------------------

--
-- Structure de la table `emp2`
--

CREATE TABLE `emp2` (
  `noemp` int(4) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `emploi` varchar(20) DEFAULT NULL,
  `sup` int(4) DEFAULT NULL,
  `embauche` date DEFAULT NULL,
  `sal` float(9,2) DEFAULT NULL,
  `comm` float(9,2) DEFAULT NULL,
  `noserv` int(2) DEFAULT NULL,
  `add_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emp2`
--

INSERT INTO `emp2` (`noemp`, `nom`, `prenom`, `emploi`, `sup`, `embauche`, `sal`, `comm`, `noserv`, `add_date`) VALUES
(1000, 'LEROY', 'PAUL', 'PRESIDENT', NULL, '1987-10-25', 55005.50, NULL, 1, NULL),
(1101, 'DUMONT', 'LOUIS', 'GRAPPLER', 1300, '1987-10-25', 9047.90, 0.00, 1, NULL),
(1102, 'MINET', 'MARC', 'VENDEUR', 1300, '1987-10-25', 8085.81, 17230.00, 1, NULL),
(1105, 'DENIMAL', 'JEROME', 'COMPTABLE', 1600, '1987-10-25', 15746.57, NULL, 1, NULL),
(1200, 'LEMAIRE', 'GUYzdzdzd', 'DIRECTEUR', 1000, '1987-03-11', 36303.63, 0.00, 4, NULL),
(1201, 'MARTIN', 'JEAN', 'TECHNICIEN', 1200, '1987-06-25', 11235.12, NULL, 4, NULL),
(1202, 'DUPONT', 'JACQUES', 'TECHNICIEN', 1200, '1988-10-30', 10313.03, NULL, 4, NULL),
(1251, 'GUYuyU', 'GERARDj', 'sleeper', 1000, '2021-04-29', 1000.00, 1000.00, 4, NULL),
(1300, 'LENOIRj', 'GERARD', 'DIRECTEUR', 1000, '1987-04-02', 31353.14, 13071.00, 7, NULL),
(1301, 'GERARD', 'ROBERT', 'VENDEUR', 1300, '1999-04-16', 7694.77, 12430.00, 7, NULL),
(1303, 'MASURE', 'EMILE', 'TECHNICIEN', 1200, '1988-06-17', 10451.05, NULL, 7, NULL),
(1500, 'DUPONT', 'JEANQSDFQS', 'DIRECTEUR', 1000, '1987-10-23', 28434.84, 0.00, 5, NULL),
(1501, 'DUPIRE', 'PIERRExv', 'ANALYSTE', 1500, '1984-10-24', 23102.31, 0.00, 5, NULL),
(1502, 'DURAND', 'BERNARD', 'PROGRAMMEUR', 1500, '1987-07-30', 13201.32, NULL, 5, NULL),
(1503, 'DELNATTE', 'LUC', 'PUPITREUR', 1500, '1999-01-15', 8801.01, NULL, 5, NULL),
(1600, 'LAVARE', 'PAUL', 'DIRECTEUR', 1000, '1991-12-13', 31238.12, NULL, 6, NULL),
(1601, 'CARON', 'ALAIN', 'COMPTABLE', 1600, '1985-09-16', 33003.30, NULL, 6, NULL),
(1602, 'DUBOIS', 'JULES', 'VENDEUR', 1300, '1990-12-20', 9520.95, 35535.00, 6, NULL),
(1603, 'MOREL', 'ROBERT', 'COMPTABLE', 1600, '1985-07-18', 33003.30, NULL, 6, NULL),
(1604, 'HAVET', 'ALAIN', 'VENDEUR', 1300, '1991-01-01', 9388.94, 33415.00, 6, NULL),
(1605, 'RICHARD', 'JULES', 'COMPTABLE', 1600, '1985-10-22', 33503.35, NULL, 5, NULL),
(1615, 'DUPREZ', 'JEAN', 'BALAYEUR', 1000, '1998-10-22', 6000.60, NULL, 5, NULL),
(1844, 'LEROYer', 'GERARDj', 'sleeper', 1000, '2021-04-06', 1000.00, 1000.00, 5, '2021-04-20'),
(1854, 'pupul', 'GERARDj', 'sleeper', 1000, '2021-04-25', 1000.00, 1000.00, 6, '2021-04-22'),
(1874, 'CrOP', 'Matt', 'hunter', 1000, '2021-05-21', 1000.00, 1000.00, 5, '2021-05-07'),
(2000, 'KOBBE', 'COP', 'DEV', 2000, '2021-04-08', 9047.90, 0.00, 1, NULL),
(2152, 'pupul', 'MARCgfd', 'sleeper', 1000, '2021-04-08', 1000.00, 1000.00, 4, '2021-04-20'),
(2155, 'pupul', 'Totol', 'nothing', 1000, '2021-04-07', 1000.00, 1000.00, 5, '0000-00-00'),
(2157, 'YOOOM', 'MARCgfd', 'sleeper', 1000, '2021-05-15', 1000.00, 1000.00, 1, '2021-05-06'),
(2159, 'LENOIRj', 'MARCgfd', 'sleeper', 1000, '2021-05-14', 1000.00, 1000.00, 7, '2021-05-06'),
(2188, 'LEROYer', 'arety', 'hunter', 1000, '2021-04-11', 1000.00, 1000.00, 6, '2021-04-20'),
(4251, 'boulolop', 'tyrte', 'sleeper', 1000, '2021-04-17', 1000.00, 1000.00, 4, NULL),
(7585, 'pupul', 'Vilay', 'hunter', 1000, '2021-04-03', 1000.00, 1000.00, 1, NULL),
(9000, 'QUOIIIO', 'tyrte', 'nothing', 1000, '2021-05-13', 1000.00, 1000.00, 7, '2021-05-09'),
(9001, 'kUIOI', 'Totol', 'sleeper', 1000, '2021-05-19', 1000.00, 1000.00, 5, '2021-05-09'),
(9006, 'tYUU', 'TYU', 'sleeper', 1300, '2021-05-17', 1000.00, 1000.00, 5, '2021-05-09'),
(9011, 'pupul', 'GERARDj', 'sleeper', 1000, '2021-04-16', 1000.00, 1000.00, 5, '2021-04-20');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `noemp` int(4) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `emploi` varchar(20) DEFAULT NULL,
  `sup` int(4) DEFAULT NULL,
  `embauche` date DEFAULT NULL,
  `sal` float(9,2) DEFAULT NULL,
  `comm` float(9,2) DEFAULT NULL,
  `noserv` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`noemp`, `nom`, `prenom`, `emploi`, `sup`, `embauche`, `sal`, `comm`, `noserv`) VALUES
(1000, 'LEROY', 'PAUL', 'PRESIDENT', NULL, '1987-10-25', 55005.50, NULL, 1),
(1100, 'DELPIERRE', 'DOROTHEE', 'SECRETAIRE', 1000, '1987-10-25', 12351.24, NULL, 1),
(1101, 'DUMONT', 'LOUIS', 'VENDEUR', 1300, '1987-10-25', 9047.90, 0.00, 1),
(1102, 'MINET', 'MARC', 'VENDEUR', 1300, '1987-10-25', 8085.81, 17230.00, 1),
(1104, 'NYS', 'ETIENNE', 'TECHNICIEN', 1200, '1987-10-25', 12342.23, NULL, 1),
(1105, 'DENIMAL', 'JEROME', 'COMPTABLE', 1600, '1987-10-25', 15746.57, NULL, 1),
(1200, 'LEMAIRE', 'GUY', 'DIRECTEUR', 1000, '1987-03-11', 36303.63, NULL, 2),
(1201, 'MARTIN', 'JEAN', 'TECHNICIEN', 1200, '1987-06-25', 11235.12, NULL, 2),
(1202, 'DUPONT', 'JACQUES', 'TECHNICIEN', 1200, '1988-10-30', 10313.03, NULL, 2),
(1300, 'LENOIR', 'GERARD', 'DIRECTEUR', 1000, '1987-04-02', 31353.14, 13071.00, 3),
(1301, 'GERARD', 'ROBERT', 'VENDEUR', 1300, '1999-04-16', 7694.77, 12430.00, 3),
(1303, 'MASURE', 'EMILE', 'TECHNICIEN', 1200, '1988-06-17', 10451.05, NULL, 3),
(1500, 'DUPONT', 'JEAN', 'DIRECTEUR', 1000, '1987-10-23', 28434.84, NULL, 5),
(1501, 'DUPIRE', 'PIERRE', 'ANALYSTE', 1500, '1984-10-24', 23102.31, NULL, 5),
(1502, 'DURAND', 'BERNARD', 'PROGRAMMEUR', 1500, '1987-07-30', 13201.32, NULL, 5),
(1503, 'DELNATTE', 'LUC', 'PUPITREUR', 1500, '1999-01-15', 8801.01, NULL, 5),
(1600, 'LAVARE', 'PAUL', 'DIRECTEUR', 1000, '1991-12-13', 31238.12, NULL, 6),
(1601, 'CARON', 'ALAIN', 'COMPTABLE', 1600, '1985-09-16', 33003.30, NULL, 6),
(1602, 'DUBOIS', 'JULES', 'VENDEUR', 1300, '1990-12-20', 9520.95, 35535.00, 6),
(1603, 'MOREL', 'ROBERT', 'COMPTABLE', 1600, '1985-07-18', 33003.30, NULL, 6),
(1604, 'HAVET', 'ALAIN', 'VENDEUR', 1300, '1991-01-01', 9388.94, 33415.00, 6),
(1605, 'RICHARD', 'JULES', 'COMPTABLE', 1600, '1985-10-22', 33503.35, NULL, 5);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `noproj` int(3) NOT NULL,
  `nomproj` varchar(10) DEFAULT NULL,
  `budget` float(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `serv2`
--

CREATE TABLE `serv2` (
  `noserv` int(2) NOT NULL,
  `service` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `serv2`
--

INSERT INTO `serv2` (`noserv`, `service`, `ville`) VALUES
(1, 'DIRECTION', 'PARIS');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `noserv` int(2) NOT NULL,
  `service` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`noserv`, `service`, `ville`) VALUES
(1, 'DIRECTION', 'PARIS'),
(4, 'FORMATION', 'VILLENEUVE D\'ASCQ'),
(5, 'INFORMATIQUE', 'LILLE'),
(6, 'COMPTABILITE', 'LILLE'),
(7, 'TECHNIQUE', 'ROUBAIX'),
(8, 'HUNTER', 'Astera');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET ascii NOT NULL,
  `email` varchar(100) CHARACTER SET ascii NOT NULL,
  `hashh` varchar(250) NOT NULL,
  `rank` int(1) NOT NULL DEFAULT 2 COMMENT '1/admin 2/user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `hashh`, `rank`) VALUES
(1, 'tommy', 'tommychel@hotmail.fr', '$2y$10$Qa.MyPLxJbLCWPbnImLGx./HJEXNq3cyLS.zV/EXzsKuUwaM7cWmG', 2),
(2, 'lououolouuu', 'tommychel@hotmail.fr', '$2y$10$GXaI0eeJYqjF331Whr2JE.c7yEBT1g3T7DRfG33JREth3BB77kHt6', 0),
(3, 'lououolouuu', 'tommychel@hotmail.fr', '$2y$10$Tb.a0rXza2Vymy3Pf5af8uw2ZyXgLdZzHUGIC8Mf2rYonZju6.48y', 0),
(4, 'lououolouuu', 'tommychel@hotmail.fr', '$2y$10$D6u2W0BrxzMXX2zRYDPMVuhDEMwd8sM/uAJaYPgmr1cvumJUGEe3a', 0),
(5, 'karahit', 'tommy.vichidvongsa@hotmail.fr', '$2y$10$pxRFjcVzpFEMjQKPixP6ZOFw7RWZGsrnDoM7xNsRN8ebdtQ.vXwFG', 0),
(7, 'trtyttyy', 'tommychel@hotmail.fr', '$2y$10$49ZHBuVrSRMXN8Fey8XwveoniZZ714U8GnivsFLMpePYS984uf6gi', 2),
(8, 'hutrytrye', 'tommychel@hotmail.fr', '$2y$10$YEQ10O.n9mbWV3IAqyoc8OjtSPpjbAzn5FSGx2eEvRIk4x7xpurlS', 0),
(9, 'toto', 'toto@hotmail.fr', '$2y$10$xd9ESeivYs0YMeP/dzg6MuwPbnWEBzLhBomRGcMvcICghvMW3iVDG', 0),
(10, 'bobo', 'tommy.vichidvongsa@hotmail.fr', '$2y$10$wzJYMLIq1KKdY4lq9wzgg.f.F7v67rX7XTxYjVIP.6oPFLLHvvxrK', 2),
(11, 'foulouuuuuuu', 'tommychel@hotmail.fr', '$2y$10$szqX5l2XazExd6qzTN7JGeRuzSDJ8DdJVZkM7UJZqz4RI3bhq1DGK', 1),
(12, 'vivi', 'tommychel@hotmail.fr', '$2y$10$HvWsx8TA1puzN.B7A.sx0O3B/dzEVyq7PYeYrlhbYf2LuaPvoKsHK', 1),
(13, 'tommy', 'tommy.vichidvongsa@hotmail.fr', '$2y$10$S5wabsxXzqHzZMHTuQtHGOdykXHQ.Nvb0ARoAFToWoBJ81e0VUNZq', 1),
(14, 'Momo', 'tommychel@hotmail.fr', '$2y$10$v5d..2Zt4QEoFtI6jbMdKOfid3eMnG87PtpPyYjpxXM450wOlbMVi', 2),
(15, 'Matt', 'tommychel@hotmail.fr', '$2y$10$6.3ILvoLK0ZNOoM3mvFAg.H8CRx.ishqjYa06NqJZmgxP4D1lzbl.', 1),
(16, 'Cop', 'tommychel@hotmail.fr', '$2y$10$By199XKE9KOEUwTARYEJiuWGudTY34abIq4o1tHf2.6J5G2rqZSfG', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD PRIMARY KEY (`countt`);

--
-- Index pour la table `emp2`
--
ALTER TABLE `emp2`
  ADD PRIMARY KEY (`noemp`),
  ADD KEY `sup` (`sup`),
  ADD KEY `emp2_fk_serv` (`noserv`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`noemp`),
  ADD KEY `sup` (`sup`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`noproj`);

--
-- Index pour la table `serv2`
--
ALTER TABLE `serv2`
  ADD PRIMARY KEY (`noserv`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`noserv`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compteur`
--
ALTER TABLE `compteur`
  MODIFY `countt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emp2`
--
ALTER TABLE `emp2`
  ADD CONSTRAINT `emp2_fk_serv` FOREIGN KEY (`noserv`) REFERENCES `services` (`noserv`),
  ADD CONSTRAINT `emp2_ibfk_1` FOREIGN KEY (`sup`) REFERENCES `emp2` (`noemp`);

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_ibfk_1` FOREIGN KEY (`sup`) REFERENCES `employes` (`noemp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
