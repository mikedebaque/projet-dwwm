-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 09:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `aimer`
--

CREATE TABLE `aimer` (
  `ID_Favori` int(11) NOT NULL,
  `ID_Client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appartenir`
--

CREATE TABLE `appartenir` (
  `ID_Article` int(11) NOT NULL,
  `id_Commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `ID_Article` int(11) NOT NULL,
  `Nom_Article` varchar(50) NOT NULL,
  `Desc_Article` varchar(250) NOT NULL,
  `Prix_Article_HT` float NOT NULL,
  `Stock_Article` int(11) NOT NULL,
  `ID_Categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ID_Article`, `Nom_Article`, `Desc_Article`, `Prix_Article_HT`, `Stock_Article`, `ID_Categorie`) VALUES
(1, 'Article0', 'Description Produit', 13, 90, 4),
(2, 'Article1', 'Description Produit', 30, 17, 2),
(3, 'Article2', 'Description Produit', 15, 82, 2),
(4, 'Article3', 'Description Produit', 27, 37, 5),
(5, 'Article4', 'Description Produit', 23, 36, 2),
(6, 'Article5', 'Description Produit', 5, 68, 3),
(7, 'Article6', 'Description Produit', 8, 56, 4),
(8, 'Article7', 'Description Produit', 36, 84, 5),
(9, 'Article8', 'Description Produit', 50, 99, 1),
(10, 'Article9', 'Description Produit', 49, 100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `ID_Categorie` int(11) NOT NULL,
  `Nom_Categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`ID_Categorie`, `Nom_Categorie`) VALUES
(1, 'Categorie1'),
(2, 'Categorie2'),
(3, 'Categorie3'),
(4, 'Categorie4'),
(5, 'Categorie5'),
(6, 'Categorie6');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID_Client` int(11) NOT NULL,
  `Nom_Client` varchar(20) NOT NULL,
  `Prenom_Client` varchar(20) NOT NULL,
  `Adresse_rue_Client` varchar(50) NOT NULL,
  `Email_Client` varchar(50) NOT NULL,
  `Tel_Port_Client` varchar(11) DEFAULT NULL,
  `Tel_Fixe_Client` varchar(11) DEFAULT NULL,
  `date_naissance_client` varchar(10) NOT NULL,
  `solde_client` float NOT NULL,
  `password_client` varchar(255) NOT NULL,
  `ID_Ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID_Client`, `Nom_Client`, `Prenom_Client`, `Adresse_rue_Client`, `Email_Client`, `Tel_Port_Client`, `Tel_Fixe_Client`, `date_naissance_client`, `solde_client`, `password_client`, `ID_Ville`) VALUES
(1, 'Nom1', 'Prenom1', 'Adresse1', 'adresse@email.com', '0600000000', NULL, '01-01-1992', 1000, 'password', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_Commande` int(11) NOT NULL,
  `reference_Commande` varchar(10) NOT NULL,
  `date_Commande` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deduire`
--

CREATE TABLE `deduire` (
  `ID_Promotion` int(11) NOT NULL,
  `ID_Article` int(11) NOT NULL,
  `DateDebut_Promotion` date NOT NULL,
  `DateFin_Reduction` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detenir`
--

CREATE TABLE `detenir` (
  `ID_Article` int(11) NOT NULL,
  `ID_Favori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `effectuer`
--

CREATE TABLE `effectuer` (
  `id_Commande` int(11) NOT NULL,
  `ID_Client` int(11) NOT NULL,
  `Id_Acheter` varchar(50) NOT NULL,
  `Quantite_Acheter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favori`
--

CREATE TABLE `favori` (
  `ID_Favori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fournir`
--

CREATE TABLE `fournir` (
  `ID_Article` int(11) NOT NULL,
  `ID_Fournisseur` int(11) NOT NULL,
  `Quantite_Fournit` int(11) NOT NULL,
  `Date_Fournit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `ID_Fournisseur` int(11) NOT NULL,
  `Nom_Entreprise_Fournisseur` varchar(50) NOT NULL,
  `adresse_Fournisseur` varchar(30) NOT NULL,
  `Email_Fournisseur` varchar(50) NOT NULL,
  `Tel_Port_Fournisseur` varchar(11) DEFAULT NULL,
  `Tel_Fixe_Fournisseur` varchar(11) DEFAULT NULL,
  `ID_Ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fournisseur`
--

INSERT INTO `fournisseur` (`ID_Fournisseur`, `Nom_Entreprise_Fournisseur`, `adresse_Fournisseur`, `Email_Fournisseur`, `Tel_Port_Fournisseur`, `Tel_Fixe_Fournisseur`, `ID_Ville`) VALUES
(1, 'Ent1', 'adresse1', 'adresse@email.com', '0000000000', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `ID_Promotion` int(11) NOT NULL,
  `Pourcentage_Promotion` int(11) NOT NULL,
  `ode_Promotion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

CREATE TABLE `villes` (
  `ID_Ville` int(11) NOT NULL,
  `Nom_Ville` varchar(50) NOT NULL,
  `CP_Ville` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`ID_Ville`, `Nom_Ville`, `CP_Ville`) VALUES
(1, 'Roubaix', '59100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aimer`
--
ALTER TABLE `aimer`
  ADD PRIMARY KEY (`ID_Favori`,`ID_Client`),
  ADD KEY `Aimer_Client0_FK` (`ID_Client`);

--
-- Indexes for table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`ID_Article`,`id_Commande`),
  ADD KEY `Appartenir_Commande0_FK` (`id_Commande`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID_Article`),
  ADD KEY `Article_Categorie_FK` (`ID_Categorie`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID_Categorie`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_Client`),
  ADD KEY `Client_Villes_FK` (`ID_Ville`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_Commande`);

--
-- Indexes for table `deduire`
--
ALTER TABLE `deduire`
  ADD PRIMARY KEY (`ID_Promotion`,`ID_Article`),
  ADD KEY `Deduire_Article0_FK` (`ID_Article`);

--
-- Indexes for table `detenir`
--
ALTER TABLE `detenir`
  ADD PRIMARY KEY (`ID_Article`,`ID_Favori`),
  ADD KEY `Detenir_favori0_FK` (`ID_Favori`);

--
-- Indexes for table `effectuer`
--
ALTER TABLE `effectuer`
  ADD PRIMARY KEY (`id_Commande`,`ID_Client`),
  ADD KEY `Effectuer_Client0_FK` (`ID_Client`);

--
-- Indexes for table `favori`
--
ALTER TABLE `favori`
  ADD PRIMARY KEY (`ID_Favori`);

--
-- Indexes for table `fournir`
--
ALTER TABLE `fournir`
  ADD PRIMARY KEY (`ID_Article`,`ID_Fournisseur`),
  ADD KEY `Fournir_Fournisseur0_FK` (`ID_Fournisseur`);

--
-- Indexes for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`ID_Fournisseur`),
  ADD KEY `Fournisseur_Villes_FK` (`ID_Ville`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`ID_Promotion`);

--
-- Indexes for table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`ID_Ville`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID_Article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID_Categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID_Client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_Commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favori`
--
ALTER TABLE `favori`
  MODIFY `ID_Favori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `ID_Fournisseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `ID_Promotion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `villes`
--
ALTER TABLE `villes`
  MODIFY `ID_Ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aimer`
--
ALTER TABLE `aimer`
  ADD CONSTRAINT `Aimer_Client0_FK` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`),
  ADD CONSTRAINT `Aimer_favori_FK` FOREIGN KEY (`ID_Favori`) REFERENCES `favori` (`ID_Favori`);

--
-- Constraints for table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `Appartenir_Article_FK` FOREIGN KEY (`ID_Article`) REFERENCES `article` (`ID_Article`),
  ADD CONSTRAINT `Appartenir_Commande0_FK` FOREIGN KEY (`id_Commande`) REFERENCES `commande` (`id_Commande`);

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `Article_Categorie_FK` FOREIGN KEY (`ID_Categorie`) REFERENCES `categorie` (`ID_Categorie`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `Client_Villes_FK` FOREIGN KEY (`ID_Ville`) REFERENCES `villes` (`ID_Ville`);

--
-- Constraints for table `deduire`
--
ALTER TABLE `deduire`
  ADD CONSTRAINT `Deduire_Article0_FK` FOREIGN KEY (`ID_Article`) REFERENCES `article` (`ID_Article`),
  ADD CONSTRAINT `Deduire_Promotion_FK` FOREIGN KEY (`ID_Promotion`) REFERENCES `promotion` (`ID_Promotion`);

--
-- Constraints for table `detenir`
--
ALTER TABLE `detenir`
  ADD CONSTRAINT `Detenir_Article_FK` FOREIGN KEY (`ID_Article`) REFERENCES `article` (`ID_Article`),
  ADD CONSTRAINT `Detenir_favori0_FK` FOREIGN KEY (`ID_Favori`) REFERENCES `favori` (`ID_Favori`);

--
-- Constraints for table `effectuer`
--
ALTER TABLE `effectuer`
  ADD CONSTRAINT `Effectuer_Client0_FK` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`),
  ADD CONSTRAINT `Effectuer_Commande_FK` FOREIGN KEY (`id_Commande`) REFERENCES `commande` (`id_Commande`);

--
-- Constraints for table `fournir`
--
ALTER TABLE `fournir`
  ADD CONSTRAINT `Fournir_Article_FK` FOREIGN KEY (`ID_Article`) REFERENCES `article` (`ID_Article`),
  ADD CONSTRAINT `Fournir_Fournisseur0_FK` FOREIGN KEY (`ID_Fournisseur`) REFERENCES `fournisseur` (`ID_Fournisseur`);

--
-- Constraints for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD CONSTRAINT `Fournisseur_Villes_FK` FOREIGN KEY (`ID_Ville`) REFERENCES `villes` (`ID_Ville`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
