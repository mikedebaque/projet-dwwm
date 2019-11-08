-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 08 nov. 2019 à 09:30
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet1`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `ID_Admin` int(11) NOT NULL,
  `Username_Admin` varchar(50) NOT NULL,
  `Password_Admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ID_Article` int(11) NOT NULL,
  `Nom_Article` varchar(50) NOT NULL,
  `Desc_Article` varchar(250) NOT NULL,
  `Prix_HT_Article` float NOT NULL,
  `Stock_Article` int(11) NOT NULL,
  `ID_Categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `articles_fournisseurs`
--

CREATE TABLE `articles_fournisseurs` (
  `ID_Fournisseur` int(11) NOT NULL,
  `ID_Article` int(11) NOT NULL,
  `Quantite_Fournit` int(11) NOT NULL,
  `Date_Fournit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `ID_Categorie` int(11) NOT NULL,
  `Nom_Categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `ID_Client` int(11) NOT NULL,
  `Nom_Client` varchar(50) NOT NULL,
  `Prenom_Client` varchar(50) NOT NULL,
  `Email_Client` varchar(150) NOT NULL,
  `DateNaissance_Client` date NOT NULL,
  `Adresse_Client` varchar(250) NOT NULL,
  `Tel_Client` varchar(11) NOT NULL,
  `Solde_Client` float NOT NULL,
  `Password_Client` varchar(255) NOT NULL,
  `ID_Ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `ID_Commande` int(11) NOT NULL,
  `Ref_Commande` varchar(50) NOT NULL,
  `Date_Commande` date NOT NULL,
  `ID_Client` int(11) NOT NULL,
  `ID_Promotion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandes_produits`
--

CREATE TABLE `commandes_produits` (
  `ID_Article` int(11) NOT NULL,
  `ID_Commande` int(11) NOT NULL,
  `Quantite_Article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `ID_Article` int(11) NOT NULL,
  `ID_Client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `ID_Fournisseur` int(11) NOT NULL,
  `Nom_Fournisseur` varchar(50) NOT NULL,
  `Adresse_Fournisseur` varchar(250) NOT NULL,
  `Email_Fournisseur` varchar(250) NOT NULL,
  `Tel_Fournisseur` varchar(11) NOT NULL,
  `ID_Ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE `promotions` (
  `ID_Promotion` int(11) NOT NULL,
  `Pourcentage_Promotion` int(11) NOT NULL,
  `DateDebut_Promotion` date NOT NULL,
  `DateFin_Promotion` date NOT NULL,
  `Code_Promotion` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `promotions_articles`
--

CREATE TABLE `promotions_articles` (
  `ID_Promotion` int(11) NOT NULL,
  `ID_Article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `ID_Ville` int(11) NOT NULL,
  `Nom_Ville` varchar(50) NOT NULL,
  `CP_Ville` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID_Article`),
  ADD KEY `Articles_Categories_FK` (`ID_Categorie`);

--
-- Index pour la table `articles_fournisseurs`
--
ALTER TABLE `articles_fournisseurs`
  ADD PRIMARY KEY (`ID_Fournisseur`,`ID_Article`),
  ADD KEY `Articles_Fournisseurs_Articles0_FK` (`ID_Article`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID_Categorie`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID_Client`),
  ADD KEY `Clients_Villes_FK` (`ID_Ville`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`ID_Commande`),
  ADD KEY `Commandes_Clients_FK` (`ID_Client`),
  ADD KEY `Commandes_Promotions0_FK` (`ID_Promotion`);

--
-- Index pour la table `commandes_produits`
--
ALTER TABLE `commandes_produits`
  ADD PRIMARY KEY (`ID_Article`,`ID_Commande`),
  ADD KEY `Commandes_Produits_Commandes0_FK` (`ID_Commande`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`ID_Article`,`ID_Client`),
  ADD KEY `Favoris_Clients0_FK` (`ID_Client`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`ID_Fournisseur`),
  ADD KEY `Fournisseurs_Villes_FK` (`ID_Ville`);

--
-- Index pour la table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`ID_Promotion`);

--
-- Index pour la table `promotions_articles`
--
ALTER TABLE `promotions_articles`
  ADD PRIMARY KEY (`ID_Promotion`,`ID_Article`),
  ADD KEY `Promotions_Articles_Articles0_FK` (`ID_Article`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`ID_Ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID_Article` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID_Categorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID_Client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `ID_Commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `ID_Fournisseur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `ID_Promotion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `ID_Ville` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `Articles_Categories_FK` FOREIGN KEY (`ID_Categorie`) REFERENCES `categories` (`ID_Categorie`);

--
-- Contraintes pour la table `articles_fournisseurs`
--
ALTER TABLE `articles_fournisseurs`
  ADD CONSTRAINT `Articles_Fournisseurs_Articles0_FK` FOREIGN KEY (`ID_Article`) REFERENCES `articles` (`ID_Article`),
  ADD CONSTRAINT `Articles_Fournisseurs_Fournisseurs_FK` FOREIGN KEY (`ID_Fournisseur`) REFERENCES `fournisseurs` (`ID_Fournisseur`);

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `Clients_Villes_FK` FOREIGN KEY (`ID_Ville`) REFERENCES `villes` (`ID_Ville`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `Commandes_Clients_FK` FOREIGN KEY (`ID_Client`) REFERENCES `clients` (`ID_Client`),
  ADD CONSTRAINT `Commandes_Promotions0_FK` FOREIGN KEY (`ID_Promotion`) REFERENCES `promotions` (`ID_Promotion`);

--
-- Contraintes pour la table `commandes_produits`
--
ALTER TABLE `commandes_produits`
  ADD CONSTRAINT `Commandes_Produits_Articles_FK` FOREIGN KEY (`ID_Article`) REFERENCES `articles` (`ID_Article`),
  ADD CONSTRAINT `Commandes_Produits_Commandes0_FK` FOREIGN KEY (`ID_Commande`) REFERENCES `commandes` (`ID_Commande`);

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `Favoris_Articles_FK` FOREIGN KEY (`ID_Article`) REFERENCES `articles` (`ID_Article`),
  ADD CONSTRAINT `Favoris_Clients0_FK` FOREIGN KEY (`ID_Client`) REFERENCES `clients` (`ID_Client`);

--
-- Contraintes pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD CONSTRAINT `Fournisseurs_Villes_FK` FOREIGN KEY (`ID_Ville`) REFERENCES `villes` (`ID_Ville`);

--
-- Contraintes pour la table `promotions_articles`
--
ALTER TABLE `promotions_articles`
  ADD CONSTRAINT `Promotions_Articles_Articles0_FK` FOREIGN KEY (`ID_Article`) REFERENCES `articles` (`ID_Article`),
  ADD CONSTRAINT `Promotions_Articles_Promotions_FK` FOREIGN KEY (`ID_Promotion`) REFERENCES `promotions` (`ID_Promotion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
