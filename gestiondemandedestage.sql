-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 sep. 2022 à 17:50
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestiondemandedestage`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `pseudo`, `email`, `password`, `ip`, `token`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$12$bSh8O2KjH6aCEYEgmHiHOuU8GLhvm91EL6e2/yOltzmwIdbCXW6g6', '::1', '5a2b90ca6026b0776237473a9c168642adc8f940c11b1668bcf6531d4a5b6004b9bba53e6f394147cfb7f5b140c23a648dc473c57d2b7d16300f0c8756751978');

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

CREATE TABLE `demandeur` (
  `id` int(11) NOT NULL,
  `categorie` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `specialite` text NOT NULL,
  `typestage` text NOT NULL,
  `email` text NOT NULL,
  `tel` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `etat` varchar(250) NOT NULL,
  `cause` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandeur`
--

INSERT INTO `demandeur` (`id`, `categorie`, `nom`, `prenom`, `specialite`, `typestage`, `email`, `tel`, `name`, `file_url`, `etat`, `cause`) VALUES
(21, 'ayant un diplome', 'EL ABDELLAOUI', 'yassine', 'Service Informatique', 'stage d initiation', 'elabdellaouiyassine01@gmail.com', '0762957531', 'Reussir le Delf B2 ( PDFDrive ).pdf', 'files/Reussir le Delf B2 ( PDFDrive ).pdf', 'pasDeReponse', 'pasDeReponsse'),
(22, 'ayant un diplome', 'ramdani', 'mohaùed', 'Service Informatique', 'stage d initiation', 'ramdani@gmail.com', '0762957456', 'TD2_Question_de_cours.pdf', 'files/TD2_Question_de_cours.pdf', 'refuser', 'carte national manquante'),
(23, 'etudiant', 'laamarti', 'younes', 'service logistique', 'stage d aplication', 'laamarti@gmail.com', '0661765643', 'Chap8-Adressage-IPv6.pdf', 'files/Chap8-Adressage-IPv6.pdf', 'refuser', 'vous n avez pas scanner votre cv'),
(24, 'etudiant', 'LAABIDI', 'ismael', 'Autre', 'stage de projet de fin d étude', 'laabidiisma@gmail.com', '0675454323', 'TP 2 PLSQL  3ème Année G.pdf', 'files/TP 2 PLSQL  3ème Année G.pdf', 'refuser', 'vous n avez pas le niveau'),
(25, 'ayant un diplome', 'elyoussfi', 'rania', 'service logistique', 'stage d aplication', 'rania@gmail.com', '0661434565', 'Chap11-Protocoles-Transport.pdf', 'files/Chap11-Protocoles-Transport.pdf', 'accepter', 'dossier bien formé'),
(29, 'ayant un diplome', 'bencharif', 'malika', 'Service Informatique', 'stage d initiation', 'bencharifmalika@gmail.com', '0676565434', 'DSGI3.pdf', 'files/DSGI3.pdf', 'pasDeReponse', 'pasDeReponsse'),
(30, 'ayant un diplome', 'El abdellaoui', 'younes', 'Service Informatique', 'stage d initiation', 'elabdellaoui2001@gmail.com', '0787675654', 'Reussir le Delf B2 ( PDFDrive ).pdf', 'files/Reussir le Delf B2 ( PDFDrive ).pdf', 'accepter', 'dossier bien former'),
(31, 'etudiant', 'EL ABDELLAOUI', 'ahmed', 'Service Informatique', 'stage d aplication', 'abbh@gmail.com', '0665454323', 'Reussir le Delf B2 ( PDFDrive ).pdf', 'files/Reussir le Delf B2 ( PDFDrive ).pdf', 'pasDeReponse', 'pasDeReponse'),
(32, 'etudiant', 'elyoussfi', 'hassan', 'service logistique', 'stage de projet de fin d étude', 'elabdellaoui2001@gmail.com', '0661434565', 'Reussir le Delf B2 ( PDFDrive ).pdf', 'files/Reussir le Delf B2 ( PDFDrive ).pdf', 'pasDeReponse', 'pasDeReponse'),
(34, 'ayant un diplome', 'elghali', 'sara', 'Service Informatique', 'stage d initiation', 'elghali@gmail.com', '0621457645', 'AlgoAvancee_1.pdf', 'files/AlgoAvancee_1.pdf', 'pasDeReponse', 'pasDeReponse');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
